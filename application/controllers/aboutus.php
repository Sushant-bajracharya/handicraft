<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends CI_Controller {
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
        
        $this->tbl_aboutus = $this->config->item('tbl_aboutus');
        
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
        $data['iframeurl']  =   site_url('aboutus/view');
        
        $this->load->view('ptwfrontadmin/index', $data);	
    }
    
    public function view()
    {
        $data['ckeditor']   =   $this->editorconfig;
        
        $data['pagetitle']  =   "Edit About Us";
        $data['data']       =   $this->crud_model->get_single_record($this->tbl_aboutus, $this->pagefilter);
        
        $data['view']       =   "aboutus_edit_view";
        
        $this->load->view('ptwfrontadmin/dashboard', $data);	
    }
    
    
    public function save()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('about_us', 'About Us', 'required');
        
        $data['ckeditor']   =   $this->editorconfig;
            
        $data['pagetitle']  =   "Edit About Us";
        
		if ($this->form_validation->run() == FALSE)	{            
            $data['data']       =   $this->input->post(); 
            $this->session->set_flashdata('error', validation_errors());
            
            $data['view']   =   "aboutus_edit_view";
            
            $this->load->view('ptwfrontadmin/dashboard', $data);				
		}
		else {
		      $aboutus_data['title']      =   $this->input->post('title');
              $aboutus_data['about_us']   =   $this->input->post('about_us');
              
              $isupdate     =   true;
              $whereparam   =   array('id'  =>  $this->input->post('id'));
              
              if($this->session->userdata('pageid')) {
                $aboutus_data['page_id']    =   $this->session->userdata('pageid');
              }
              
			  $this->crud_model->save_record($this->tbl_aboutus, $aboutus_data, $isupdate, $whereparam);
              
              $this->session->set_flashdata('success', 'Record saved successfully.');
              //redirect("aboutus");
              $data['view']       =   "aboutus_edit_view";        
              $data['data']       =   $this->crud_model->get_single_record($this->tbl_aboutus, $this->pagefilter);        
              $this->load->view('ptwfrontadmin/dashboard', $data);
		}
    }
}