<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class room extends CI_Controller {
    var $activetheme, $page_filter;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->activetheme  =   ($this->session->userdata('active_theme') != "")? $this->session->userdata('active_theme'): "design1";
        
        $this->tbl_products = $this->config->item('tbl_products'); 
        
        if($this->session->userdata('pageid')) {
            $this->page_filter   =    array('page_id' => $this->session->userdata('pageid'));
        }
        else {
            $this->page_filter   =    array();
        }
		
		
		 $this->childrens =   array(
                                "1",
					            "2",
					            "3",
		                        "4",
								 "5",
								  "6"
                            );
							
		$this->adults =   array(
                               "1",
					            "2",
					            "3",
		                        "4",
								 "5",
								  "6"
                            );
		$this->bedrooms =   array(
                                "General Inquery",
					            "For Busines Development",
					            "Suggestion",
		                        "You're awesome!"
                            );
    }
    
    public function index()
    {
        $status_filter     =    array("product_status" => '1');
        $products_filter   =    array_merge($this->page_filter, $status_filter);
        //print_r($products_filter); die();
        $product_data  =  $this->crud_model->get_all_records($this->tbl_products, $products_filter);
        
        $data['view']       =   "room_view";
        $data['theme']      =   $this->activetheme;
       
        $data['products']   =   $product_data;
        //echo "<pre>"; print_r($data); die();    
        $this->load->view($this->activetheme . '/dashboard', $data);
    }
    
   public function detail()
    {
        $product_id         =   $this->uri->segment(3);
        
        $product_data       =  $this->crud_model->get_single_record($this->tbl_products, array("product_id" => $product_id));
        
        $other_products     =  $this->crud_model->get_except_records($this->tbl_products, $this->page_filter, array("product_id" => $product_id));
    
        $data['view']       =   "room_detail_view";
        $data['theme']      =   $this->activetheme;
        
        $data['product_detail']   =   $product_data;
        $data['other_products']   =   $other_products;
           
        $this->load->view($this->activetheme . '/dashboard', $data);
    }
	public function book(){
		
		
		
	$room=$product_detail['product_name']; 
	$price=$product_detail['product_price']; 
	
	$this->name         =   $this->input->post('name');
        $this->emailaddr    =   $this->input->post('email');
        $this->phone        =   $this->input->post('phone');
        $this->children      =   $this->input->post('children');
        $this->arrival      =   $this->input->post('arrival');
        $this->departure      =   $this->input->post('departure');
		$this->adult      =   $this->input->post('adult');
		$this->bedroom      =   $this->input->post('bedroom');
		$this->message      =   $this->input->post('message');
		//$this->admin_email  = $this->db->get('ptw_settings');
       // $this->admin_email  =   (string) $this->config->item('adminemail');
	   $sql="select * from ptw_settings";
	   $res=mysql_query($sql);
	   $data=mysql_fetch_assoc($res);
	    $admin_email = $data['admin_email'];
	  
        $config['mailtype'] =   "html";
        $this->load->library('email', $config);        
        
        $this->email->from($this->emailaddr, $this->name); 
        //$this->email->to($this->admin_email);
		$this->email->to($admin_email);
        $this->email->subject('Contact Email from Pagetoweb');
       
			 $mail_body = "<style>
                        #mailbody {font-family: Arial, Verdana; font-size: 12px;}
                        #mailbody p {font-weight: normal;}
                      </style>
                      <div id='mailbody'>Hello Admin,
                        <p>A new contact request was made by a customer. Please check the detais below:</p>
						<p><strong>Room:</strong> $room</p>
						<p><strong>Price:</strong> $price</p>
                        <p><strong>Name:</strong> {$this->name}</p>
                        <p><strong>Email:</strong> {$this->emailaddr}</p>
                        <p><strong>Phone:</strong> {$this->phone}</p>
						<p><strong>Arrival Date:</strong> {$this->arrival}</p>
						<p><strong>Departure Date:</strong> {$this->departure}</p>
                        <p><strong>Subject:</strong> {$this->childrens[$this->children]}</p>
						<p><strong>Subject:</strong> {$this->adults[$this->adult]}</p>
						<p><strong>Subject:</strong> {$this->bedrooms[$this->bedroom]}</p>
						 
                        <p><strong>Message:</strong><br /> {$this->message}</p>
                      </div>
                      ";
			
        $this->email->message($mail_body);
         
        if($this->email->send()) {
           echo "<span class='mail-sent'>Thank you for your Email.</span>";
        }
        else {
            //return false;
			echo "error";
        }
    
	
	
	
	
    
	}
	
	
	
	
    
    public function order()
    {
        $product_id         =   $this->uri->segment(3);
        
        $product_data       =  $this->crud_model->get_single_record($this->tbl_products, array("product_id" => $product_id));
        
        $data['view']       =   "order_product_view";
        $data['theme']      =   $this->activetheme;
        
        $data['product_detail']   =   $product_data;
        
        $this->load->helper('captcha');
        $vals = array(
                        'img_path'	 => './captcha/',  
                        'img_url'	 => site_url() . 'captcha/',
                        'img_width'	 => 145,
                        'img_height' => 40
                     );
        
        $captcha_info       =   create_captcha($vals);
        $data['captcha']    =   $captcha_info;
        
        $this->session->set_userdata("captchacode", $captcha_info['word']);
           
        $this->load->view($this->activetheme . '/dashboard', $data);
    } 
	
	
	
	
}
?>