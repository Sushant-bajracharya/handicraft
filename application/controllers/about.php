<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {
    var $activetheme;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->activetheme  =   ($this->session->userdata('active_theme') != "")? $this->session->userdata('active_theme'): "design1";
        
        $this->tbl_aboutus = $this->config->item('tbl_aboutus');
        
        $this->load->library('library'); 
        
        if($this->session->userdata('pageid')) {
            $this->pagefilter  = array('page_id' => $this->session->userdata('pageid'));
        }
        else {
            $this->pagefilter  = array();
        }    
    }
    
    public function index()
    {
        $data['view']       =   "about_view";
        $data['theme']      =   $this->activetheme;
        
        $data['about']      =   $this->crud_model->get_single_record($this->tbl_aboutus, $this->pagefilter);
        
        $this->load->view($this->activetheme . '/dashboard', $data);
    }
}