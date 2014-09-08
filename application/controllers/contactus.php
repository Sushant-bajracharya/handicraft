<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactus extends CI_Controller {
    var $activetheme;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->activetheme  =   ($this->session->userdata('active_theme') != "")? $this->session->userdata('active_theme'): "design1";
        
        $this->load->library('library');    
    }
    
    public function index()
    {
        $data['view']       =   "contact_us_view";
        $data['theme']      =   $this->activetheme;
        
        $this->load->view($this->activetheme . '/dashboard', $data);
    }
}