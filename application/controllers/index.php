<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(E_ALL ^ E_WARNING);

class Index extends CI_Controller {
    var $activetheme;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->activetheme  =   ($this->session->userdata('active_theme') != "")? $this->session->userdata('active_theme'): "design1";
        
        $this->load->library('library');
        
        //include the Facebook PHP SDK
        require_once APPPATH . "third_party/fbphpsdk/src/facebook.php"; 
        
        $this->appID            =   $this->config->item('app_id'); 
        $this->appSecret        =   $this->config->item('app_secret');
        $this->appCookie        =   $this->config->item('app_cookie');
        
        $this->tbl_testimonials = $this->config->item('tbl_testimonials');
        $this->tbl_clients      = $this->config->item('tbl_clients');      
    }
    
    public function action()
    {        
        //instantiate the Facebook library with the APP ID and APP SECRET
        $facebook = new Facebook(array(
            'appId'  => $this->appID,    
            'secret' => $this->appSecret, 
            'cookie' => $this->appCookie
        ));
        
        //Get the FB UID of the currently logged in user
        $user = $facebook->getUser();
        
        //if the user has already allowed the application, you'll be able to get his/her FB UID
        if($user) {
            try {
                //get the user's access token
                $access_token = $facebook->getAccessToken();
                
                //check permissions list
                $permissions_list = $facebook->api(
                	'/me/permissions',
                	'GET',
                	array(
                		'access_token' => $access_token
                	)
                );
                
                //check if the permissions we need have been allowed by the user
                //if not then redirect them again to facebook's permissions page
                $permissions_needed = array('publish_stream', 'read_stream', 'manage_pages', 'user_photos', 'friends_photos');
                foreach($permissions_needed as $perm) {
                	if( !isset($permissions_list['data'][0][$perm]) || $permissions_list['data'][0][$perm] != 1 ) {
                		$login_url_params = array(
                			'scope' => 'publish_stream, read_stream, manage_pages, user_photos, friends_photos',
                			'fbconnect' =>  1,
                			'display'   =>  "page",
                			'next' => 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
                		);
                		$login_url = $facebook->getLoginUrl($login_url_params);
                		header("Location: {$login_url}");
                		exit();
                	}
                }
                
                //if the user has allowed all the permissions we need,
                //get the information about the pages that he or she managers
                $accounts = $facebook->api(
                	'/me/accounts',
                	'GET',
                	array(
                		'access_token' => $access_token
                	)
                );
                //echo "<pre>"; print_r($accounts); die();
                $count = 0;
                foreach($accounts['data'] as $account_info) {
                    if(++$count > 10) {
                        break;
                    }
                    $pageinfo = $facebook->api(
                    	'/' . $account_info['id'] . "/?fields=name,about,link,picture",
                    	'GET',
                    	array(
                    		'access_token' => $account_info['access_token']
                    	)
                    );
                    
                    $about_page =   isset($pageinfo['about'])? $pageinfo['about']: "";
                    
                    $FB_Pages[$account_info['id']]['name']    =   $pageinfo['name'];
                    $FB_Pages[$account_info['id']]['about']   =   $about_page;
                    $FB_Pages[$account_info['id']]['picture'] =   $pageinfo['picture']['data']['url'];   
                    
                    $this->session->set_userdata('pageid', $account_info['id']);
                    $this->session->set_userdata('pagename_'.$account_info['id'], $pageinfo['name']);
                    $this->session->set_userdata('aboutpage_'.$account_info['id'], $about_page);
                }
                
                $data['FB_Pages']    =   $FB_Pages;
                
                $this->load->view('index', $data);
            }
            catch(CurlException $e) {
                echo('Exception caught: '.$e->getMessage());
                echo "<br />";
                echo "<a href='".current_url()."'>Click here</a> to try again.";
            }
        	
        } else {
        	//if not, let's redirect to the ALLOW page so we can get access
        	//Create a login URL using the Facebook library's getLoginUrl() method
        	$login_url_params = array(
        		'scope' => 'publish_stream, read_stream, manage_pages, user_photos, friends_photos',
        		'fbconnect' =>  1,
        		'redirect_uri' => 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
        	);
        	$login_url = $facebook->getLoginUrl($login_url_params);
        	
        	//redirect to the login URL on facebook
        	header("Location: {$login_url}");
        	exit();
        }
    }
    
    public function sitehome()
    {
        $page_id    =   $this->uri->segment(4);
        
        if($this->uri->segment(5) != "") {
            $this->activetheme  =   $this->uri->segment(5);
            $this->session->set_userdata('active_theme', $this->activetheme);
        }
        
        $data['pageid']     =   $page_id;
        $data['iframeurl']  =   site_url('ptwfront/index/ptwhome/'.$page_id);
        
        $this->load->view('ptwfrontadmin/index', $data);
    }
    
    public function ptwhome()
    {
        $page_id    =   $this->uri->segment(4);
        
        if($page_id) {
            //instantiate the Facebook library with the APP ID and APP SECRET
            $facebook = new Facebook(array(
                'appId'  => $this->appID,    
                'secret' => $this->appSecret, 
                'cookie' => $this->appCookie
            ));
            
            //Get the FB UID of the currently logged in user
            $user = $facebook->getUser();
            
            //if the user has already allowed the application, you'll be able to get his/her FB UID
            if($user) {
                try {
                    //get the user's access token
                    $access_token = $facebook->getAccessToken();
                    
                    //check permissions list
                    $permissions_list = $facebook->api(
                    	'/me/permissions',
                    	'GET',
                    	array(
                    		'access_token' => $access_token
                    	)
                    );
                    
                    //check if the permissions we need have been allowed by the user
                    //if not then redirect them again to facebook's permissions page
                    $permissions_needed = array('publish_stream', 'read_stream', 'manage_pages', 'user_photos', 'friends_photos');
                    foreach($permissions_needed as $perm) {
                    	if( !isset($permissions_list['data'][0][$perm]) || $permissions_list['data'][0][$perm] != 1 ) {
                    		$login_url_params = array(
                    			'scope' => 'publish_stream, read_stream, manage_pages, user_photos, friends_photos',
                    			'fbconnect' =>  1,
                    			'display'   =>  "page",
                    			'next' => 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
                    		);
                    		$login_url = $facebook->getLoginUrl($login_url_params);
                    		header("Location: {$login_url}");
                    		exit();
                    	}
                    }
                    
                    $pageinfo = $facebook->api(
                    	"/$page_id/?fields=name,location,phone,website"
                    );
                    
                    $this->session->set_userdata("pagecontactinfo", serialize($pageinfo));
                    
                    //if the user has allowed all the permissions we need,
                    //get the information about the pages that he or she managers
                    $albums = $facebook->api(
                    	"/$page_id/albums/?fields=id,name,count,cover_photo"
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
                        	"/". $album['id'] ."/photos"
                        );  
                        
                        $album_info[$album_count]['cover']    =   $covers['data'];
                        
                        $album_count++;
                    }
                    
                    $data['albums']     =   $album_info;            
                    //echo "<pre>"; print_r($album_info); die();                    
                    $data['theme']      =   $this->activetheme;
                    
                    $data['view']       =   'home';
                    
                    $data['name']       =   $this->session->userdata('pagename_'.$page_id);
                    $data['aboutus']    =   $this->session->userdata('aboutpage_'.$page_id);
                    
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
            	//if not, let's redirect to the ALLOW page so we can get access
            	//Create a login URL using the Facebook library's getLoginUrl() method
            	$login_url_params = array(
            		'scope' => 'publish_stream, read_stream, manage_pages, user_photos, friends_photos',
            		'fbconnect' =>  1,
            		'redirect_uri' => 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
            	);
            	$login_url = $facebook->getLoginUrl($login_url_params);
            	
            	//redirect to the login URL on facebook
            	header("Location: {$login_url}");
            	exit();
            }
        }
        else {
            redirect('welcome');
        }
    }
    
    public function gallery()
    {
        $page_id    =   $this->session->userdata('pageid');
        
        if($page_id) {
            //instantiate the Facebook library with the APP ID and APP SECRET
            $facebook = new Facebook(array(
                'appId'  => $this->appID,    
                'secret' => $this->appSecret, 
                'cookie' => $this->appCookie
            ));
            
            //Get the FB UID of the currently logged in user
            $user = $facebook->getUser();
            
            //if the user has already allowed the application, you'll be able to get his/her FB UID
            if($user) {
                try {
                    //get the user's access token
                    $access_token = $facebook->getAccessToken();
                    
                    //check permissions list
                    $permissions_list = $facebook->api(
                    	'/me/permissions',
                    	'GET',
                    	array(
                    		'access_token' => $access_token
                    	)
                    );
                    
                    //check if the permissions we need have been allowed by the user
                    //if not then redirect them again to facebook's permissions page
                    $permissions_needed = array('publish_stream', 'read_stream', 'manage_pages', 'user_photos', 'friends_photos');
                    foreach($permissions_needed as $perm) {
                    	if( !isset($permissions_list['data'][0][$perm]) || $permissions_list['data'][0][$perm] != 1 ) {
                    		$login_url_params = array(
                    			'scope' => 'publish_stream, read_stream, manage_pages, user_photos, friends_photos',
                    			'fbconnect' =>  1,
                    			'display'   =>  "page",
                    			'next' => 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
                    		);
                    		$login_url = $facebook->getLoginUrl($login_url_params);
                    		header("Location: {$login_url}");
                    		exit();
                    	}
                    }
                    //echo "<pre>"; print_r($permissions_list); die();                
                    
                    $albums = $facebook->api(
                    	"/$page_id/albums/?fields=id,name,count,cover_photo"
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
                        	"/". $album['id'] ."/photos"
                        );  
                        
                        $album_info[$album_count]['cover']    =   $covers['data'];
                        
                        $album_count++;
                    }
                    
                    $data['albums']     =   $album_info;            
                    
                    $data['theme']  =   $this->activetheme;
                    $data['view']   =   'gallery';
                    $data['name']   =   $this->session->userdata('pagename_'.$page_id);
                    
                    $this->load->view($this->activetheme . '/dashboard', $data);
                }
                catch(CurlException $e) {
                    echo('Exception caught: '.$e->getMessage());
                    echo "<br />";
                    echo "<a href='".current_url()."'>Click here</a> to try again.";
                }
            	
            } else {
            	//if not, let's redirect to the ALLOW page so we can get access
            	//Create a login URL using the Facebook library's getLoginUrl() method
            	$login_url_params = array(
            		'scope' => 'publish_stream, read_stream, manage_pages, user_photos, friends_photos',
            		'fbconnect' =>  1,
            		'redirect_uri' => 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
            	);
            	$login_url = $facebook->getLoginUrl($login_url_params);
            	
            	//redirect to the login URL on facebook
            	header("Location: {$login_url}");
            	exit();
            }
        } 
        else {
            redirect('welcome');
        }
    }
    
    public function albumpictures()
    {
        $page_id    =   $this->session->userdata('pageid');
        
        $album_id   =   $this->uri->segment(4);
        
        if($album_id) {
            //instantiate the Facebook library with the APP ID and APP SECRET
            $facebook = new Facebook(array(
                'appId'  => $this->appID,    
                'secret' => $this->appSecret, 
                'cookie' => $this->appCookie
            ));
            
            //Get the FB UID of the currently logged in user
            $user = $facebook->getUser();
            
            //if the user has already allowed the application, you'll be able to get his/her FB UID
            if($user) {
                try {
                    //get the user's access token
                    $access_token = $facebook->getAccessToken();
                    
                    //check permissions list
                    $permissions_list = $facebook->api(
                    	'/me/permissions',
                    	'GET',
                    	array(
                    		'access_token' => $access_token
                    	)
                    );
                    
                    //check if the permissions we need have been allowed by the user
                    //if not then redirect them again to facebook's permissions page
                    $permissions_needed = array('publish_stream', 'read_stream', 'manage_pages', 'user_photos', 'friends_photos');
                    foreach($permissions_needed as $perm) {
                    	if( !isset($permissions_list['data'][0][$perm]) || $permissions_list['data'][0][$perm] != 1 ) {
                    		$login_url_params = array(
                    			'scope' => 'publish_stream, read_stream, manage_pages, user_photos, friends_photos',
                    			'fbconnect' =>  1,
                    			'display'   =>  "page",
                    			'next' => 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
                    		);
                    		$login_url = $facebook->getLoginUrl($login_url_params);
                    		header("Location: {$login_url}");
                    		exit();
                    	}
                    }
                    //echo "<pre>"; print_r($permissions_list); die();
                    //if the user has allowed all the permissions we need,
                    //get the information about the pages that he or she managers
                    $album_pictures = $facebook->api(
                    	"/{$album_id}/photos?fields=picture,images"
                    );
                    
                    //echo "<pre>"; print_r($album_pictures); die();
                    
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
            } else {
            	//if not, let's redirect to the ALLOW page so we can get access
            	//Create a login URL using the Facebook library's getLoginUrl() method
            	$login_url_params = array(
            		'scope' => 'publish_stream, read_stream, manage_pages, user_photos, friends_photos',
            		'fbconnect' =>  1,
            		'redirect_uri' => 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']
            	);
            	$login_url = $facebook->getLoginUrl($login_url_params);
            	
            	//redirect to the login URL on facebook
            	header("Location: {$login_url}");
            	exit();
            }
        }
        else {
            redirect('welcome');
        }
    }
}
?>