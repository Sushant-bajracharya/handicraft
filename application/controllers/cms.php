<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms extends CI_Controller {
    var $activetheme;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->activetheme  =   ($this->session->userdata('active_theme') != "")? $this->session->userdata('active_theme'): "o12bar";
        
        $this->tbl_pages    = $this->config->item('tbl_pages');    
    }
    
    public function page()
    {
        $page_id            =   $this->uri->segment(3);
        
        $data['view']       =   "page_view";
        $data['theme']      =   $this->activetheme;
        
        $data['page']      =   $this->crud_model->get_single_record($this->tbl_pages, array('id' => $page_id));
        
        $this->load->view($this->activetheme . '/dashboard', $data);
    }
}