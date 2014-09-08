<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {
    var $editorconfig;
    var $pagefilter;
    
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
        
        $this->tbl_pages = $this->config->item('tbl_pages');
        
        $this->load->library('library');  
        $this->load->helper('ckeditor');
        
        //Ckeditor's configuration
  		$this->editorconfig['description_ckeditor'] = array(     
			//ID of the textarea that will be replaced
			'id' 	=> 	'description',
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
        $data['iframeurl']  =   site_url('pages/view');
        
        $this->load->view('ptwfrontadmin/index', $data);
    }
    
    public function view()
    {
        $data['view']       =   "page_list_view";
        
        $data['pages']      =   $this->crud_model->get_all_records($this->tbl_pages, $this->pagefilter, array('id' => 'desc'));
        
        $this->load->view('ptwfrontadmin/dashboard', $data);
    }
    
    public function edit()
    {
        $data['ckeditor']   =   $this->editorconfig;
        
        $page_id = $this->uri->segment(3)? $this->uri->segment(3): 0;
        if($page_id > 0) {
            $data['pagetitle']  =   "Edit Page";
            $data['data']       =   $this->crud_model->get_single_record($this->tbl_pages, array("id" => $page_id));
        }
        else {
            $data['pagetitle'] =   "Add Page";
            $data['data']   =   array("id" => 0, "title" => "", "description" => "");
        }
        
        $data['view']   =   "page_edit_view";
        
        $this->load->view('ptwfrontadmin/dashboard', $data);	
    }
    
    
    public function save()
    {
        $this->form_validation->set_rules('title', 'Page Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
        
        $data['ckeditor']   =   $this->editorconfig;
            
        if($this->input->post('id') > 0) {
            $data['pagetitle'] =   "Edit Page";
        }
        else {
            $data['pagetitle'] =   "Add Page";
        }
        
		if ($this->form_validation->run() == FALSE)	{            
            $data['data']       =   $this->input->post(); 
            $this->session->set_flashdata('error', validation_errors());
            
            $data['view']   =   "page_edit_view";
            
            $this->load->view('ptwfrontadmin/dashboard', $data);				
		}
		else {
		      $page_data['title']         =   $this->input->post('title');
              $page_data['description']   =   $this->input->post('description');
              
              if($this->input->post('id') > 0) {
                    $isupdate   =   true;
                    $whereparam =   array("id" => $this->input->post('id'));
                    $page_data['updated_at']   =   date("Y-m-d");
              }
              else {
                    $isupdate   =   false;
                    $whereparam =   array("id" => 0);
                    $page_data['created_at']   =   date("Y-m-d");
              }
              
              if($this->session->userdata('pageid')) {
                    $page_data['page_id']   =   $this->session->userdata('pageid');
              }
              
			  $this->crud_model->save_record($this->tbl_pages, $page_data, $isupdate, $whereparam);
              
              $this->session->set_flashdata('success', 'Record saved successfully.');
              //redirect("pages");
              $data['view']       =   "page_list_view";        
              $data['pages']      =   $this->crud_model->get_all_records($this->tbl_pages, $this->pagefilter);                    
              $this->load->view('ptwfrontadmin/dashboard', $data);
		}
    }
    
    public function delete()
    {
        $page_id = $this->uri->segment(3);
        
        if(!$page_id) {
            $this->session->set_flashdata('error', 'Invalid url supplied');
            //redirect("pages");
            $data['view']       =   "page_list_view"; 
               
            $data['pages']      =   $this->crud_model->get_all_records($this->tbl_pages, $this->pagefilter);                    
            $this->load->view('ptwfrontadmin/dashboard', $data);
        }
        else {
            $count = $this->crud_model->delete_record($this->tbl_pages, array("id" => $page_id));
            if($count >=1) {
                $this->session->set_flashdata('error', 'Record deleted successfully.');
            }
            else {
                $this->session->set_flashdata('error', 'No matching records found.');
            }
            
            //redirect("pages");
            $data['view']       =   "page_list_view"; 
                  
            $data['pages']      =   $this->crud_model->get_all_records($this->tbl_pages, $this->pagefilter);                    
            $this->load->view('ptwfrontadmin/dashboard', $data);
        }
    }
}