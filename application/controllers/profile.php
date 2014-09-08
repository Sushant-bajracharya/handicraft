<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
    
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
        
        $this->tbl_users = $this->config->item('tbl_users');
        
        $this->load->library('library');
    }
    
    public function index()
    {
        $data['iframeurl']  =   site_url('profile/view');
        
        $this->load->view('ptwfrontadmin/index', $data);	
    }
    
    public function view()
    {
        $data['pagetitle']  =   "Profile";
        
        $data['view']       =   "profile_edit_view";
        
        $data['data']       =   $this->crud_model->get_single_record($this->tbl_users, $this->pagefilter);
        
        $this->load->view('ptwfrontadmin/dashboard', $data);	
    }    
    
    public function save()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|xss_clean');
        
        $data['pagetitle'] =   "Profile";
        
		if ($this->form_validation->run() == FALSE)	{            
            $data['data']       =   $this->input->post(); 
            $this->session->set_flashdata('error', validation_errors());
            
            $data['view']   =   "profile_edit_view";
            
            $this->load->view('ptwfrontadmin/dashboard', $data);				
		}
		else {
		      $profile_data['name']       =   $this->input->post('name');
              $profile_data['phone']      =   $this->input->post('phone');
              
              $isupdate     =   true;
              $whereparam   =   array('id'  =>  $this->input->post('id'));
              
              if($this->session->userdata('pageid')) {
                $setting_data['page_id']    =   $this->session->userdata('pageid');
              }
              
              $this->crud_model->save_record($this->tbl_settings, $setting_data, $isupdate, $whereparam);
                  
              $this->session->set_flashdata('success', 'Record saved successfully.');
              //redirect("settings");
              $data['view']       =   "settings_edit_view";
              $data['data']       =   $this->crud_model->get_single_record($this->tbl_settings, $this->pagefilter);
              $this->load->view('ptwfrontadmin/dashboard', $data);
		}
    }
}