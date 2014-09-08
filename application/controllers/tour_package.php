<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tour_package extends CI_Controller {
    var $activetheme, $page_filter;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->activetheme  =   ($this->session->userdata('active_theme') != "")? $this->session->userdata('active_theme'): "palagya";
        
        $this->tbl_products = $this->config->item('tbl_products'); 
        
        if($this->session->userdata('pageid')) {
            $this->page_filter   =    array('page_id' => $this->session->userdata('pageid'));
        }
        else {
            $this->page_filter   =    array();
        }
    }
    
    public function index()
    {
        $status_filter     =    array("product_status" => '1', "category" => '9');
        $products_filter   =    array_merge($this->page_filter, $status_filter);
        //print_r($products_filter); die();
        $product_data  =  $this->crud_model->get_all_records($this->tbl_products, $products_filter);
        
        $data['view']       =   "tour_display_view";
        $data['theme']      =   $this->activetheme;
        
        $data['products']   =   $product_data;
        //echo "<pre>"; print_r($data); die();    
        $this->load->view($this->activetheme . '/dashboard', $data);
    }
    
    public function detail()
    {
        $product_id         =   $this->uri->segment(3);
        
        $product_data       =  $this->crud_model->get_single_record($this->tbl_products, array("product_id" => $product_id));
        
        $other_products     =  $this->crud_model->get_except_records($this->tbl_products, $this->page_filter, array("product_id" => $product_id,"category"=>'8' ));
    
        $data['view']       =   "tour_detail_view";
        $data['theme']      =   $this->activetheme;
        
        $data['product_detail']   =   $product_data;
        $data['other_products']   =   $other_products;
           
        $this->load->view($this->activetheme . '/dashboard', $data);
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