<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cgallery extends CI_Controller {
    var $editorconfig;
    var $pagefilter;
    
    public function __construct()
    {
        parent::__construct();
        
        if($this->session->userdata('pageid')) {
            $this->pagefilter  = array('page_id' => $this->session->userdata('pageid'));
        }
        else {
            redirect('login_');
            exit();
        } 
        
        $this->tbl_gallery = $this->config->item('tbl_gallery');
        
        $this->load->helper('ckeditor');
        
        $this->load->library('library');
        
        //Ckeditor's configuration
  		$this->editorconfig['aboutus_ckeditor'] = array(     
			//ID of the textarea that will be replaced
			'id' 	=> 	'about_us',
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
        $data['iframeurl']  =   site_url('cgallery/view');
        
        $this->load->view('ptwfrontadmin/index', $data);	
    }
    
    public function view()
    {
      //  $data['ckeditor']   =   $this->editorconfig;
        
        //$data['pagetitle']  =   "Edit About Us";
        $data['data']       =   $this->crud_model->get_all_records($this->tbl_gallery, $this->pagefilter);
        
        $data['view']       =   "gallery_list_view";
        
        $this->load->view('ptwfrontadmin/dashboard', $data);	
    }
    
	
	 public function edit()
    {
        $data['ckeditor']   =   $this->editorconfig;
        
        $id = $this->uri->segment(3)? $this->uri->segment(3): 0;
        if($id > 0) {
            $data['pagetitle']  =   "Edit Product Category ";
            $data['data']       =   $this->crud_model->get_single_record($this->tbl_gallery, array("id" => $id));
        }
        else {
            $data['pagetitle'] =   "Add Product Category";
            $data['data']   =   array("id" => 0,  "name" => "", "description" => "");
        }
        
        $data['view']   =   "gallery_edit_view";
        
        $this->load->view('ptwfrontadmin/dashboard', $data);	
    }
    
	
    
    public function save()
    {
		 $this->form_validation->set_rules('title', 'Title', 'required');
        
        $data['ckeditor']   =   $this->editorconfig;
            
        $data['pagetitle']  =   "Edit Product Category";
        
		if ($this->form_validation->run() == FALSE)	{            
            $data['data']       =   $this->input->post(); 
            $this->session->set_flashdata('error', validation_errors());
            
            $data['view']   =   "gallery_edit_view";
            
            $this->load->view('ptwfrontadmin/dashboard', $data);				
		}
		else {
			
			  $aboutus_data['title'] = $this->input->post('title');
			  $upload_result   =   null;
			 
              if($_FILES['image']['name'] != "" && $_FILES['image']['error'] == 0) {
                $upload_result = $this->do_upload('image');
              }
			  if(($upload_result !== null) && ($upload_result['error'])) {
                    $data['data']       =   $this->input->post(); 
                   
                    if($upload_result['error']) {
                        $this->session->set_flashdata('error', $upload_result['error']); 
                    }
					
                    $data['view']   =   "gallery_edit_view";
                    
                    $this->load->view('ptwfrontadmin/dashboard', $data);	
              }
			  
			  
			 else { 
			 
			 if($this->input->post('id') > 0) {
                        $product_info   =   $this->crud_model->get_single_record($this->tbl_gallery, array("id" => $this->input->post('id')));
                  }
				   if(isset($upload_result['success']) && is_array($upload_result['success'])) {
                       // $this->delete_product_image($product_info['image']);
                        $aboutus_data['image']   =   $upload_result['success']['file_name']; 
                  }
			  $isupdate     =   true;
              $whereparam   =   array('id'  =>  $this->input->post('id'));
              if($this->session->userdata('pageid')) {
                $aboutus_data['page_id']    =   $this->session->userdata('pageid');
              }
			
			  $this->crud_model->save_record($this->tbl_gallery, $aboutus_data, $isupdate, $whereparam);
              
              $this->session->set_flashdata('success', 'Record saved successfully.');
              //redirect("aboutus");
              $data['view']       =   "gallery_list_view";        
              $data['data']       =   $this->crud_model->get_all_records($this->tbl_gallery, $this->pagefilter);        
              $this->load->view('ptwfrontadmin/dashboard', $data);
			  
			 }
		}
    }
	
	public function delete()
	{
	
        $id = $this->uri->segment(3);
        
        if(!$id) {
            $this->session->set_flashdata('error', 'Invalid url supplied');
            //redirect("blog");
            $data['view']       =   "gallery_list_view"; 
               
            $data['data']       =   $this->crud_model->get_all_records($this->tbl_gallery, $this->pagefilter);                    
            $this->load->view('ptwfrontadmin/dashboard', $data);
        }
        else {
            $blog_data  =  $this->crud_model->get_single_record($this->tbl_gallery, array("id" => $id));
            
            //$this->delete_blog_image($blog_data['image']);
            
            $count = $this->crud_model->delete_record($this->tbl_gallery, array("id" => $id));
            if($count >=1) {
                $this->session->set_flashdata('error', 'Record deleted successfully.');
            }
            else {
                $this->session->set_flashdata('error', 'No matching records found.');
            }
            
            //redirect("blog");
            $data['view']       =   "gallery_list_view"; 
                  
            $data['data']       =   $this->crud_model->get_all_records($this->tbl_gallery, $this->pagefilter);                    
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
}