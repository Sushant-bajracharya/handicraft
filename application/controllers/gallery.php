<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {
    var $page_id, $activetheme;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->activetheme  =   ($this->session->userdata('active_theme') != "")? $this->session->userdata('active_theme'): "design1";
        
        //include the Facebook PHP SDK
        require_once APPPATH . "third_party/fbphpsdk/src/facebook.php"; 
        
        $this->appID            =   $this->config->item('app_id'); 
        $this->appSecret        =   $this->config->item('app_secret');
        $this->appCookie        =   $this->config->item('app_cookie');
        
        $this->tbl_testimonials = $this->config->item('tbl_testimonials');
        $this->tbl_clients      = $this->config->item('tbl_clients');      
    }
    
    public function index()
    {
        $page_id    =   $this->session->userdata('pageid');
        
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
                
                $albums = $facebook->api(
                	"/$page_id/albums/?fields=id,name,count,cover_photo",
                    "GET",
                    array(
                		'access_token' => $this->accesstoken
                	)
                );
                
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
                
                $data['theme']  =   $this->activetheme;
                $data['view']   =   'gallery';
                $data['name']   =   $pageinfo['name'];
                
                $this->load->view($this->activetheme . '/dashboard', $data);
            }
            catch(CurlException $e) {
                echo('Exception caught: '.$e->getMessage());
                echo "<br />";
                echo "<a href='".current_url()."'>Click here</a> to try again.";
            }
        } 
        else {
            redirect('welcome');
        }
    }
    
    public function pictures()
    {
        $page_id    =   $this->session->userdata('pageid');
        
        $album_id   =   $this->uri->segment(3);
        
        $facebook = new Facebook(array(
                        'appId'  => $this->appID,    
                        'secret' => $this->appSecret, 
                        'cookie' => $this->appCookie
                    ));
            
        $this->accesstoken  = $facebook->getAccessToken();
               
        if($album_id && $page_id && $this->accesstoken) {
            try {                
                $album_pictures = $facebook->api(
                	"/{$album_id}/photos?limit=100&offset=0&fields=picture,images",
                    "GET",
                    array(
                		'access_token' => $this->accesstoken
                	)
                );
                
                $data['theme']      =   $this->activetheme;
                $data['view']       =   'albumpictures';
                $data['pictures']   =   $album_pictures['data'];
                
                $this->load->view($this->activetheme . '/dashboard', $data);
            }
            catch(CurlException $e) {
                echo('Exception caught: '.$e->getMessage());
                echo "<br />";
                echo "<a href='".current_url()."'>Click here</a> to try again.";
            }
        }
        else {
            redirect('welcome');
        }
    }
}
?>