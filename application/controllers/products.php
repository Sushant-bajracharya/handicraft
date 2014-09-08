<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
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
        
        $this->activetheme  =   ($this->session->userdata('active_theme') != "")? $this->session->userdata('active_theme'): "design1";
        
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
        $data['iframeurl']  =   site_url('products/view');
        
        $this->load->view('ptwfrontadmin/index', $data);
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
		
		
        $this->form_validation->set_rules('product_name', 'Product Name', 'required');
        $this->form_validation->set_rules('product_price', 'Product Price', 'required');
		$this->form_validation->set_rules('product_description', 'Product Description', 'required');
        $this->form_validation->set_rules('product_status', 'Product Status', 'required');
        
        $data['ckeditor']   =   $this->editorconfig;
            
        if($this->input->post('product_id') > 0) {
            $data['pagetitle'] =   "Edit Product";
        }
        else {
            $data['pagetitle'] =   "Add New Product";
        }
        
		if ($this->form_validation->run() == FALSE)	{            
            $data['data']       =   $this->input->post(); 
            $this->session->set_flashdata('error', validation_errors());
            
            $data['view']   =   "product_edit_view";
            
            $this->load->view('ptwfrontadmin/dashboard', $data);				
		}
		else {
		      $product_data['product_name']           =   $this->input->post('product_name');
              $product_data['product_price']          =   str_replace(",", ".", $this->input->post('product_price'));
              $product_data['product_description']    =   $this->input->post('product_description');
              $product_data['product_status']         =   $this->input->post('product_status');
              $upload_result   =   null;
			  $result	=	null;
			  $result1	=	null;
			  $result2	=	null;
			 //print_r($this->input->post('image'));die();
              if($_FILES['image']['name'] != "" && $_FILES['image']['error'] == 0) {
                $upload_result = $this->do_upload('image');
              }
			   if($_FILES['image1']['name'] != "" && $_FILES['image1']['error'] == 0) {
                $result = $this->do_upload('image1');
              }
			   if($_FILES['image2']['name'] != "" && $_FILES['image2']['error'] == 0) {
                $result1 = $this->do_upload('image2');
              }
			   if($_FILES['image3']['name'] != "" && $_FILES['image3']['error'] == 0) {
                $result2 = $this->do_upload('image3');
              }
			  
              
              if(($upload_result !== null) && ($upload_result['error'])) {
                    $data['data']       =   $this->input->post(); 
                   
                    if($upload_result['error']) {
                        $this->session->set_flashdata('error', $upload_result['error']); 
                    }
					
                    $data['view']   =   "product_edit_view";
                    
                    $this->load->view('ptwfrontadmin/dashboard', $data);	
              }
			   if(($result !== null) && ($result['error'])) {
                    $data['data']       =   $this->input->post(); 
                   
                    if($result['error']) {
                        $this->session->set_flashdata('error', $result['error']); 
                    }
					
                    $data['view']   =   "product_edit_view";
                    
                    $this->load->view('ptwfrontadmin/dashboard', $data);	
              }
			  
			   if(($result1 !== null) && ($result1['error'])) {
                    $data['data']       =   $this->input->post(); 
                   
                    if($result1['error']) {
                        $this->session->set_flashdata('error', $result1['error']); 
                    }
					
                    $data['view']   =   "product_edit_view";
                    
                    $this->load->view('ptwfrontadmin/dashboard', $data);	
              }
			  
			   if(($result2 !== null) && ($result2['error'])) {
                    $data['data']       =   $this->input->post(); 
                   
                    if($result2['error']) {
                        $this->session->set_flashdata('error', $result2['error']); 
                    }
					
                    $data['view']   =   "product_edit_view";
                    
                    $this->load->view('ptwfrontadmin/dashboard', $data);	
              }
			  
			 
              else {
                  if($this->input->post('product_id') > 0) {
                        $product_info   =   $this->crud_model->get_single_record($this->tbl_products, array("product_id" => $this->input->post('product_id')));
                  }
                  
                  if(isset($upload_result['success']) && is_array($upload_result['success'])) {
                        $this->delete_product_image($product_info['image']);
                        $product_data['image']   =   $upload_result['success']['file_name']; 
                  }
				   if(isset($result['success']) && is_array($result['success'])) {
                        $this->delete_product_image($product_info['image1']);
                        $product_data['image1']   =   $result['success']['file_name']; 
                  }
				   if(isset($result1['success']) && is_array($result1['success'])) {
                        $this->delete_product_image($product_info['image2']);
                        $product_data['image2']   =   $result1['success']['file_name']; 
                  }
				   if(isset($result2['success']) && is_array($result2['success'])) {
                        $this->delete_product_image($product_info['image3']);
                        $product_data['image3']   =   $result2['success']['file_name']; 
                  }
				  
				 
                  if($this->input->post('product_id') > 0) {
                        $isupdate   =   true;
                        $whereparam =   array("product_id" => $this->input->post('product_id'));
                        $product_data['updated_date']   =   date("Y-m-d");
                  }
                  else {
                        $isupdate   =   false;
                        $whereparam =   array("product_id" => 0);
                        $product_data['created_date']   =   date("Y-m-d");
                  }
                  
                  if($this->session->userdata('pageid')) {
                        $product_data['page_id']   =   $this->session->userdata('pageid');
                  }
                  
    			  $this->crud_model->save_record($this->tbl_products, $product_data, $isupdate, $whereparam);
                  
                  $this->session->set_flashdata('success', 'Record saved successfully.');
                  //redirect("products");
                  $data['view']       =   "product_list_view";        
                  $data['products']   =   $this->crud_model->get_all_records($this->tbl_products, $this->pagefilter);        
                  $this->load->view('ptwfrontadmin/dashboard', $data);
              }
		}
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