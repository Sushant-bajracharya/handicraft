<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {
    
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
        
        $this->tbl_settings = $this->config->item('tbl_settings');
        
        $this->load->library('library'); 
    }
    
    public function index()
    {
        $data['iframeurl']  =   site_url('settings/view');
        
        $this->load->view('ptwfrontadmin/index', $data);	
    }
    
    public function view()
    {
        $data['pagetitle']  =   "Settings";
        
        $data['view']       =   "settings_edit_view";
        
        $data['data']       =   $this->crud_model->get_single_record($this->tbl_settings, $this->pagefilter);
        
        $this->load->view('ptwfrontadmin/dashboard', $data);	
    }    
    
    public function save()
    {
        $this->form_validation->set_rules('admin_email', 'Admin Email', 'required');
        
        $data['pagetitle'] =   "Settings";
        
		if ($this->form_validation->run() == FALSE)	{            
            $data['data']       =   $this->input->post(); 
            $this->session->set_flashdata('error', validation_errors());
            
            $data['view']   =   "settings_edit_view";
            
            $this->load->view('ptwfrontadmin/dashboard', $data);				
		}
		else {
		      $setting_data['admin_email']        =   $this->input->post('admin_email');
              $setting_data['twitter_feeds']      =   $this->input->post('twitter_feeds');
              $setting_data['flickr_photos']      =   $this->input->post('flickr_photos');
              $setting_data['facebook_likes']     =   $this->input->post('facebook_likes');
              
              $setting_data['fb_share']           =   $this->input->post('fb_share');
              $setting_data['twitter_share']      =   $this->input->post('twitter_share');
              $setting_data['gplus_share']        =   $this->input->post('gplus_share');
              $setting_data['linkedin_share']     =   $this->input->post('linkedin_share');
              $setting_data['pinterest_share']    =   $this->input->post('pinterest_share');
              
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