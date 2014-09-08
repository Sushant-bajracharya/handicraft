<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    var $page_id, $activetheme;
    public function __construct()
    {
        parent::__construct();
        
        $this->page_id      =   $this->config->item('page_id');
        $this->activetheme  =   $this->config->item('activetheme');
        
        $this->tbl_testimonials = $this->config->item('tbl_testimonials');
        $this->tbl_clients      = $this->config->item('tbl_clients'); 
        
        $this->appID            =   $this->config->item('app_id'); 
        $this->appSecret        =   $this->config->item('app_secret');
        $this->appCookie        =   $this->config->item('app_cookie');
        
        //include the Facebook PHP SDK
        require_once APPPATH . "third_party/fbphpsdk/src/facebook.php"; 
    }
    
    public function index()
    {         
        $page_id        =   $this->page_id;
        
        //Set active theme in session for other pages
        $this->session->set_userdata('active_theme', $this->activetheme);
        
        //instantiate the Facebook library with the APP ID and APP SECRET
        $facebook = new Facebook(array(
            'appId'  => $this->appID,    
            'secret' => $this->appSecret, 
            'cookie' => $this->appCookie
        ));
        
        $this->accesstoken  = $facebook->getAccessToken();
                
        if($page_id && $this->accesstoken) {
            try {
                $pageinfo = $facebook->api(
                	"/$page_id/?fields=name,about,location,phone,website",
                    "GET",
                    array(
                		'access_token' => $this->accesstoken
                	)
                );
                
                $this->session->set_userdata("pagecontactinfo", serialize($pageinfo));
                
                //if the user has allowed all the permissions we need,
                //get the information about the pages that he or she managers
                $albums = $facebook->api(
                	"/$page_id/albums/?fields=id,name,count,cover_photo",
                    "GET",
                    array(
                		'access_token' => $this->accesstoken
                	)
                );
                //echo "<pre>"; print_r($albums); die();
                $album_count = 0;
                foreach($albums['data'] as $album) {
                    if(!isset($album["cover_photo"])) {
                        continue;
                    }
                    
                    $album_info[$album_count]['id']           =   $album['id'];
                    $album_info[$album_count]['name']         =   $album['name'];
                    $album_info[$album_count]['count']        =   $album['count'];                
                    $album_info[$album_count]['cover_photo']  =   $album["cover_photo"];
                    
                    $covers = $facebook->api(
                    	"/". $album['id'] ."/photos",
                        "GET",
                        array(
                    		'access_token' => $this->accesstoken
                    	)
                    );  
                    
                    $album_info[$album_count]['cover']    =   $covers['data'];
                    
                    $album_count++;
                }
                
                $data['albums']     =   $album_info;            
                //echo "<pre>"; print_r($album_info); die();                    
                $data['theme']      =   $this->activetheme;
                
                $data['view']       =   'home';
                
                $data['name']       =   $pageinfo['name']; 
                $data['aboutus']    =   $pageinfo['about']; 
                
                $data['testimonial']    =   $this->crud_model->get_random_record($this->tbl_testimonials, array('page_id' => $page_id));
                
                $filter_params          =   array_merge(array('status' => 1), array('page_id' => $page_id));        
                $data['clients']        =   $this->crud_model->get_all_records($this->tbl_clients, $filter_params);
                
                $this->session->set_userdata('pageid', $page_id);  
                                    
                $this->load->view($this->activetheme . '/dashboard', $data);
            }
            catch(CurlException $e) {
                echo('Exception caught: '.$e->getMessage());
                echo "<br />";
                echo "<a href='".current_url()."'>Click here</a> to try again.";
            }
         }
         else {
        	exit("Page access token has expired.");
        }
    }
}
?>