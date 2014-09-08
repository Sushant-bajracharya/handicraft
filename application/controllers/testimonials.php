<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testimonials extends CI_Controller {
    
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
        
        $this->tbl_testimonials = $this->config->item('tbl_testimonials');
        
        $this->load->library('library');            
    }
    
    public function index()
    {
        $data['iframeurl']  =   site_url('testimonials/view');
        
        $this->load->view('ptwfrontadmin/index', $data);
    }
    
    public function view()
    {
        $data['pagetitle']      =   "Testimonials";
        
        $data['view']           =   "testimonials_list_view";
        $data['testimonials']   =   $this->crud_model->get_all_records($this->tbl_testimonials, $this->pagefilter);
        
        $this->load->view('ptwfrontadmin/dashboard', $data);
    }
    
    public function edit()
    {
        $testimonial_id = $this->uri->segment(3)? $this->uri->segment(3): 0;
        
        if($testimonial_id > 0) {
            $data['pagetitle']  =   "Edit Testimonial";
            $data['data']       =   $this->crud_model->get_single_record($this->tbl_testimonials, array("id" => $testimonial_id));
        }
        else {
            $data['pagetitle'] =   "Add Testimonial";
            $data['data']   =   array("id" => 0, "testimonial" => "", "client_name" => "", "website" => "");
        }
        
        $data['view']   =   "testimonial_edit_view";
        
        $this->load->view('ptwfrontadmin/dashboard', $data);	
    }
    
    
    public function save()
    {
        $this->form_validation->set_rules('testimonial', 'Testimonial', 'required');
		$this->form_validation->set_rules('client_name', 'Client Name', 'required');
		$this->form_validation->set_rules('website', 'Website', 'required');
        
        if($this->input->post('id') > 0) {
            $data['pagetitle'] =   "Edit Testimonial";
        }
        else {
            $data['pagetitle'] =   "Add Testimonial";
        }
        
		if ($this->form_validation->run() == FALSE)	{            
            $data['data']       =   $this->input->post(); 
            $this->session->set_flashdata('error', validation_errors());
            
            $data['view']   =   "testimonial_edit_view";
            
            $this->load->view('ptwfrontadmin/dashboard', $data);				
		}
		else {
		      $testimonial_data['testimonial']     =   $this->input->post('testimonial');
              $testimonial_data['client_name']     =   $this->input->post('client_name');
              $testimonial_data['website']         =   $this->input->post('website');
              
              if($this->input->post('id') > 0) {
                    $isupdate   =   true;
                    $whereparam =   array("id" => $this->input->post('id'));
              }
              else {
                    $isupdate   =   false;
                    $whereparam =   array("id" => 0);
              }
              
              if($this->session->userdata('pageid')) {
                    $testimonial_data['page_id']    =   $this->session->userdata('pageid');
              }
              
			  $this->crud_model->save_record($this->tbl_testimonials, $testimonial_data, $isupdate, $whereparam);
              
              $this->session->set_flashdata('success', 'Record saved successfully.');
              //redirect("testimonials");
              $data['view']           =   "testimonials_list_view";
              $data['testimonials']   =   $this->crud_model->get_all_records($this->tbl_testimonials, $this->pagefilter);
              $this->load->view('ptwfrontadmin/dashboard', $data);
		}
    }
    
    public function delete()
    {
        $testimonial_id = $this->uri->segment(3);
        
        if(!$testimonial_id) {
            $this->session->set_flashdata('error', 'Invalid url supplied');
            //redirect("testimonials");
            $data['view']           =   "testimonials_list_view";
            $data['testimonials']   =   $this->crud_model->get_all_records($this->tbl_testimonials, $this->pagefilter);
        
            $this->load->view('ptwfrontadmin/dashboard', $data);
        }
        else {
            $testimonial_data  =  $this->crud_model->get_single_record($this->tbl_testimonials, array("id" => $testimonial_id));
            
            $count = $this->crud_model->delete_record($this->tbl_testimonials, array("id" => $testimonial_id));
            if($count >= 1) {
                $this->session->set_flashdata('error', 'Record deleted successfully.');
            }
            else {
                $this->session->set_flashdata('error', 'No matching records found.');
            }
            
            //redirect("testimonials");
            $data['view']           =   "testimonials_list_view";
            $data['testimonials']   =   $this->crud_model->get_all_records($this->tbl_testimonials, $this->pagefilter);
        
            $this->load->view('ptwfrontadmin/dashboard', $data);
        }
    }
}