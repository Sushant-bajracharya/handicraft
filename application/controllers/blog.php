<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
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
        
        $this->tbl_blog = $this->config->item('tbl_blog');
        
        $this->load->library('library');  
        $this->load->helper('ckeditor');
        
        //Ckeditor's configuration
  		$this->editorconfig['shortdesc_ckeditor'] = array(     
			//ID of the textarea that will be replaced
			'id' 	=> 	'short_desc',
			'path'	=>	'js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"550px",	//Setting a custom width
				'height' 	=> 	'200px',	//Setting a custom height 
			)
		);
     
   		 $this->editorconfig['longdesc_ckeditor'] = array(     
			//ID of the textarea that will be replaced
			'id' 	=> 	'long_desc',
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
        $data['iframeurl']  =   site_url('blog/view');
        
        $this->load->view('ptwfrontadmin/index', $data);
    }
    
    public function view()
    {
        $data['view']       =   "blog_list_view";
        
        $data['news']       =   $this->crud_model->get_all_records($this->tbl_blog, $this->pagefilter, array('blog_id' => 'desc'));
        
        $this->load->view('ptwfrontadmin/dashboard', $data);
    }
    
    public function edit()
    {
        $data['ckeditor']   =   $this->editorconfig;
        
        $blog_id = $this->uri->segment(3)? $this->uri->segment(3): 0;
        if($blog_id > 0) {
            $data['pagetitle']  =   "Edit News";
            $data['data']       =   $this->crud_model->get_single_record($this->tbl_blog, array("blog_id" => $blog_id));
        }
        else {
            $data['pagetitle'] =   "Add News";
            $data['data']   =   array("blog_id" => 0, "title" => "", "short_desc" => "", "long_desc" => "");
        }
        
        $data['view']   =   "blog_edit_view";
        
        $this->load->view('ptwfrontadmin/dashboard', $data);	
    }
    
    
    public function save()
    {
        $this->form_validation->set_rules('title', 'News Title', 'required');
		$this->form_validation->set_rules('short_desc', 'Short Description', 'required');
		$this->form_validation->set_rules('long_desc', 'Long Description', 'required');
        
        $data['ckeditor']   =   $this->editorconfig;
            
        if($this->input->post('blog_id') > 0) {
            $data['pagetitle'] =   "Edit Blog News";
        }
        else {
            $data['pagetitle'] =   "Add News";
        }
        
		if ($this->form_validation->run() == FALSE)	{            
            $data['data']       =   $this->input->post(); 
            $this->session->set_flashdata('error', validation_errors());
            
            $data['view']   =   "blog_edit_view";
            
            $this->load->view('ptwfrontadmin/dashboard', $data);				
		}
		else {
		      $blog_data['title']         =   $this->input->post('title');
              $blog_data['short_desc']    =   $this->input->post('short_desc');
              $blog_data['long_desc']     =   $this->input->post('long_desc');
              
              $upload_result   =   null;
              
              if($_FILES['image']['name'] != "" && $_FILES['image']['error'] == 0) {
                $upload_result = $this->do_upload('image');
              }
              
              if(($upload_result !== null) && ($upload_result['error'])) {
                    $data['data']       =   $this->input->post(); 
                   
                    if($upload_result['error']) {
                        $this->session->set_flashdata('error', $upload_result['error']); 
                    }
                    
                    $data['view']   =   "blog_edit_view";
                    
                    $this->load->view('ptwfrontadmin/dashboard', $data);	
              }
              else {
                  if($this->input->post('blog_id') > 0) {
                        $blog_info   =   $this->crud_model->get_single_record($this->tbl_blog, array("blog_id" => $this->input->post('blog_id')));
                  }
                  
                  if(isset($upload_result['success']) && is_array($upload_result['success'])) {
                        $this->delete_blog_image($blog_info['image']);
                        $blog_data['image']   =   $upload_result['success']['file_name']; 
                  }
                  
                  if($this->input->post('blog_id') > 0) {
                        $isupdate   =   true;
                        $whereparam =   array("blog_id" => $this->input->post('blog_id'));
                        $blog_data['updated_at']   =   date("Y-m-d");
                  }
                  else {
                        $isupdate   =   false;
                        $whereparam =   array("blog_id" => 0);
                        $blog_data['created_at']   =   date("Y-m-d");
                  }
                  
                  if($this->session->userdata('pageid')) {
                        $blog_data['page_id']   =   $this->session->userdata('pageid');
                  }
                  
    			  $this->crud_model->save_record($this->tbl_blog, $blog_data, $isupdate, $whereparam);
                  
                  $this->session->set_flashdata('success', 'Record saved successfully.');
                  //redirect("blog");
                  $data['view']       =   "blog_list_view";        
                  $data['news']       =   $this->crud_model->get_all_records($this->tbl_blog, $this->pagefilter);                    
                  $this->load->view('ptwfrontadmin/dashboard', $data);
              }
		}
    }
    
    public function delete()
    {
        $blog_id = $this->uri->segment(3);
        
        if(!$blog_id) {
            $this->session->set_flashdata('error', 'Invalid url supplied');
            //redirect("blog");
            $data['view']       =   "blog_list_view"; 
               
            $data['news']       =   $this->crud_model->get_all_records($this->tbl_blog, $this->pagefilter);                    
            $this->load->view('ptwfrontadmin/dashboard', $data);
        }
        else {
            $blog_data  =  $this->crud_model->get_single_record($this->tbl_blog, array("blog_id" => $blog_id));
            
            $this->delete_blog_image($blog_data['image']);
            
            $count = $this->crud_model->delete_record($this->tbl_blog, array("blog_id" => $blog_id));
            if($count >=1) {
                $this->session->set_flashdata('error', 'Record deleted successfully.');
            }
            else {
                $this->session->set_flashdata('error', 'No matching records found.');
            }
            
            //redirect("blog");
            $data['view']       =   "blog_list_view"; 
                  
            $data['news']       =   $this->crud_model->get_all_records($this->tbl_blog, $this->pagefilter);                    
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
    
    private function delete_blog_image($image)
    {
        if($image == "") {
            return;
        }
        
        if(file_exists("./uploads/". $image)) {
            @unlink("./uploads/". $image);
        }
    }
}