<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menus extends CI_Controller {
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
        
        $this->tbl_menus = $this->config->item('tbl_menus');
        $this->tbl_pages = $this->config->item('tbl_pages');
        
        $this->load->library('library');   
    }
    
    public function index()
    {
        $data['iframeurl']  =   site_url('menus/view');
        
        $this->load->view('ptwfrontadmin/index', $data);
    }
    
    public function view()
    {
        $data['view']       =   "menu_list_view";
        
        $data['menus']      =   $this->menus_model->get_menus_list($this->pagefilter);
        
        $this->load->view('ptwfrontadmin/dashboard', $data);
    }
    
    public function edit()
    {
        $menu_id = $this->uri->segment(3)? $this->uri->segment(3): 0;
        if($menu_id > 0) {
            $data['pagetitle']  =   "Edit Menu";
            $data['data']       =   $this->crud_model->get_single_record($this->tbl_menus, array("id" => $menu_id));
        }
        else {
            $data['pagetitle'] =   "Add Menu";
            $data['data']   =   array("id" => 0, "title" => "", "page" => "", "parent" => "", "status" => "");
        }
        
        $data['view']   =   "menu_edit_view";
        $data['pages']  =   $this->crud_model->get_all_records($this->tbl_pages, $this->pagefilter);
        $data['menus']  =   $this->crud_model->get_all_records($this->tbl_menus, $this->pagefilter);
        
        $this->load->view('ptwfrontadmin/dashboard', $data);	
    }
    
    
    public function save()
    {
        $this->form_validation->set_rules('title', 'Menu Title', 'required');
		$this->form_validation->set_rules('linked_pageid', 'Linked to Page', 'required');
        $this->form_validation->set_rules('parent', 'Parent', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        
        if($this->input->post('id') > 0) {
            $data['pagetitle'] =   "Edit Menu";
        }
        else {
            $data['pagetitle'] =   "Add Menu";
        }
        
		if ($this->form_validation->run() == FALSE)	{            
            $data['data']       =   $this->input->post(); 
            $this->session->set_flashdata('error', validation_errors());
            
            $data['view']   =   "menu_edit_view";
            $data['pages']  =   $this->crud_model->get_all_records($this->tbl_pages, $this->pagefilter);
            $data['menus']  =   $this->crud_model->get_all_records($this->tbl_menus, $this->pagefilter);
            
            $this->load->view('ptwfrontadmin/dashboard', $data);				
		}
		else {
		      $menu_data['title']           =   $this->input->post('title');
              $menu_data['linked_pageid']   =   $this->input->post('linked_pageid');
              $menu_data['parent']          =   $this->input->post('parent');
              $menu_data['status']          =   $this->input->post('status');
              
              if($this->input->post('id') > 0) {
                    $isupdate   =   true;
                    $whereparam =   array("id" => $this->input->post('id'));
                    $menu_data['updated_at']   =   date("Y-m-d");
              }
              else {
                    $isupdate   =   false;
                    $whereparam =   array("id" => 0);
                    $menu_data['created_at']   =   date("Y-m-d");
              }
              
              if($this->session->userdata('pageid')) {
                    $menu_data['page_id']   =   $this->session->userdata('pageid');
              }
              
			  $this->crud_model->save_record($this->tbl_menus, $menu_data, $isupdate, $whereparam);
              
              $this->session->set_flashdata('success', 'Record saved successfully.');
              //redirect("menus");
              $data['view']       =   "menu_list_view";        
              $data['menus']      =   $this->menus_model->get_menus_list($this->pagefilter);                   
              $this->load->view('ptwfrontadmin/dashboard', $data);
		}
    }
    
    public function delete()
    {
        $menu_id = $this->uri->segment(3);
        
        if(!$menu_id) {
            $this->session->set_flashdata('error', 'Invalid url supplied');
            //redirect("menus");
            $data['view']       =   "menu_list_view"; 
               
            $data['menus']      =   $this->menus_model->get_menus_list($this->pagefilter);                    
            $this->load->view('ptwfrontadmin/dashboard', $data);
        }
        else {
            $count = $this->crud_model->delete_record($this->tbl_menus, array("id" => $menu_id));
            if($count >= 1) {
                $this->session->set_flashdata('error', 'Record deleted successfully.');
            }
            else {
                $this->session->set_flashdata('error', 'No matching records found.');
            }
            
            //redirect("menus");
            $data['view']       =   "menu_list_view"; 
                  
            $data['menus']      =   $this->menus_model->get_menus_list($this->pagefilter);                    
            $this->load->view('ptwfrontadmin/dashboard', $data);
        }
    }
}