<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pro1 extends CI_Controller {
    var $editorconfig, $activetheme, $pagefilter;
    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('pageid') && $this->session->userdata('user_id')) {
            $this->pagefilter  = array('page_id' => $this->session->userdata('pageid'));
        }
        else {
            redirect('login_');
            exit();
        }
        
        $this->activetheme  =   ($this->session->userdata('active_theme') != "")? $this->session->userdata('active_theme'): "o12bar";
        
        $this->tbl_products = $this->config->item('tbl_products');
        
        $this->load->helper('ckeditor');
        
        $this->load->library('library');
        
        //Ckeditor's configuration
  		$this->editorconfig['pdesc_ckeditor'] = array(     
			//ID of the textarea that will be replaced
			'id' 	=> 	'product_description',
			'path'	=>	'js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"550px",	//Setting a custom width
				'height' 	=> 	'200px',	//Setting a custom height 
			)
		); 
    }
    
    public function index()
    {
     
	      
            $no = count($_POST['name']);
           for ($i=0; $i <$no ; $i++) { 
            echo $_POST['name'][$i]."<br>";
            echo $_POST['price'][$i]."<br>";
        $abc = mysql_real_escape_string($_POST['name'][$i]);
        $xyz = mysql_real_escape_string($_POST['price'][$i]);
       $sql =  "INSERT INTO ptw_products (product_name,product_price) VALUES ('$abc','$xyz')";
mysql_query($sql);
        }   
		
		
		
		
		
    }
    
    public function view()
    {
        $data['view']       =   "product_list_view";
        
        $data['products']   =   $this->crud_model->get_all_records($this->tbl_products, $this->pagefilter);
        
        $this->load->view('ptwfrontadmin/dashboard', $data);
    }
    
    public function edit()
    {
        $data['ckeditor']   =   $this->editorconfig;
        
        $product_id = $this->uri->segment(3)? $this->uri->segment(3): 0;
        if($product_id > 0) {
            $data['pagetitle'] =   "Edit Product";
            $data['data']   =   $this->crud_model->get_single_record($this->tbl_products, array("product_id" => $product_id));
        }
        else {
            $data['pagetitle'] =   "Add New Product";
            $data['data']   =   array("product_id" => 0, "product_name" => "", "product_price" => "", "product_description" => "", "image" => "", "product_status" => "");
        }
        
        $data['view']   =   "product_edit_view";
        
        $this->load->view('ptwfrontadmin/dashboard', $data);	
    }
    
    
    public function save()
    {
		
		
     
    }
    
    public function delete()
    {
        $product_id = $this->uri->segment(3);
        
        if(!$product_id) {
            $this->session->set_flashdata('error', 'Invalid url supplied');
            //redirect("products");
            $data['view']       =   "product_list_view";  
                 
            $data['products']   =   $this->crud_model->get_all_records($this->tbl_products, $this->pagefilter);        
            $this->load->view('ptwfrontadmin/dashboard', $data);
        }
        else {
            $product_data  =  $this->crud_model->get_single_record($this->tbl_products, array("product_id" => $product_id));
            
            $this->delete_product_image($product_data['image']);
            
            $count = $this->crud_model->delete_record($this->tbl_products, array("product_id" => $product_id));
            if($count >=1) {
                $this->session->set_flashdata('error', 'Record deleted successfully.');
            }
            else {
                $this->session->set_flashdata('error', 'No matching records found.');
            }
            
            //redirect("products");
            $data['view']       =   "product_list_view";   
                
            $data['products']   =   $this->crud_model->get_all_records($this->tbl_products, $this->pagefilter);        
            $this->load->view('ptwfrontadmin/dashboard', $data);
        }
    }
    
    public function do_upload($fieldname)
	{
		$config['upload_path']    = './uploads/';
		$config['allowed_types']  = 'gif|jpg|png';
		$config['max_size']	      = '1024';
		$config['max_width']      = '1500';
		$config['max_height']     = '1000';

		$this->load->library('upload', $config);
        
		if ( ! $this->upload->do_upload($fieldname)) {
			return array("error" => $this->upload->display_errors());
		}
		else {
			return array("success" => $this->upload->data());
		}
	}
    
    private function delete_product_image($image)
    {
        if($image == "") {
            return;
        }
        
        if(file_exists("./uploads/". $image)) {
            @unlink("./uploads/". $image);
        }
    }
}


