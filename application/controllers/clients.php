<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends CI_Controller {
    
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
        
        $this->tbl_clients = $this->config->item('tbl_clients');
        
        $this->load->library('library');  
    }
    
    public function index()
    {
        $data['iframeurl']  =   site_url('clients/view');
        
        $this->load->view('ptwfrontadmin/index', $data);
    }
    
    public function view()
    {
        $data['view']       =   "clients_list_view";
        
        $data['clients']    =   $this->crud_model->get_all_records($this->tbl_clients, $this->pagefilter);
        
        $this->load->view('ptwfrontadmin/dashboard', $data);
    }
    
    public function edit()
    {
        $client_id = $this->uri->segment(3)? $this->uri->segment(3): 0;
        if($client_id > 0) {
            $data['pagetitle']  =   "Edit Client";
            $data['data']       =   $this->crud_model->get_single_record($this->tbl_clients, array("client_id" => $client_id));
        }
        else {
            $data['pagetitle'] =   "Add Client";
            $data['data']   =   array("client_id" => 0, "name" => "", "logo" => "", "desc" => "", "status" => "");
        }
        
        $data['view']   =   "client_edit_view";
        
        $this->load->view('ptwfrontadmin/dashboard', $data);	
    }
    
    
    public function save()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
        
        if($this->input->post('client_id') > 0) {
            $data['pagetitle'] =   "Edit Client";
        }
        else {
            $data['pagetitle'] =   "Add Client";
        }
        
		if ($this->form_validation->run() == FALSE)	{            
            $data['data']   =   $this->input->post(); 
            $this->session->set_flashdata('error', validation_errors());
            
            $data['view']   =   "client_edit_view";
            
            $this->load->view('ptwfrontadmin/dashboard', $data);				
		}
		else {
		      $client_data['name']       =   $this->input->post('name');
		      $client_data['desc']       =   $this->input->post('desc');
              $client_data['status']     =   $this->input->post('status');
              
              $upload_result   =   null;
              
              if($_FILES['logo']['name'] != "" && $_FILES['logo']['error'] == 0) {
                $upload_result = $this->do_upload('logo');
              }
              
              if(($upload_result !== null) && ($upload_result['error'])) {
                    $data['data']       =   $this->input->post(); 
                   
                    if($upload_result['error']) {
                        $this->session->set_flashdata('error', $upload_result['error']); 
                    }
                    
                    $data['view']   =   "client_edit_view";
                    
                    $this->load->view('ptwfrontadmin/dashboard', $data);	
              }
              else {
                  if($this->input->post('client_id') > 0) {
                        $client_info   =   $this->crud_model->get_single_record($this->tbl_clients, array("client_id" => $this->input->post('client_id')));
                  }
                  
                  if(isset($upload_result['success']) && is_array($upload_result['success'])) {
                        $this->delete_client_logo($client_info['logo']);
                        $client_data['logo']   =   $upload_result['success']['file_name']; 
                  }
                  
                  if($this->input->post('client_id') > 0) {
                        $isupdate   =   true;
                        $whereparam =   array("client_id" => $this->input->post('client_id'));
                        $client_data['updated_at']   =   date("Y-m-d");
                  }
                  else {
                        $isupdate   =   false;
                        $whereparam =   array("client_id" => 0);
                        $client_data['created_at']   =   date("Y-m-d");
                  }
                  
                  if($this->session->userdata('pageid')) {
                    $client_data['page_id'] = $this->session->userdata('pageid');  
                  }
                  
    			  $this->crud_model->save_record($this->tbl_clients, $client_data, $isupdate, $whereparam);
                  
                  $this->session->set_flashdata('success', 'Record saved successfully.');
                  //redirect("clients");
                  $data['view']       =   "clients_list_view";
                  $data['clients']    =   $this->crud_model->get_all_records($this->tbl_clients, $this->pagefilter);
                  $this->load->view('ptwfrontadmin/dashboard', $data);
              }
		}
    }
    
    public function delete()
    {
        $client_id = $this->uri->segment(3);
        
        if(!$client_id) {
            $this->session->set_flashdata('error', 'Invalid url supplied');
            //redirect("clients");
            $data['view']       =   "clients_list_view";
            $data['clients']    =   $this->crud_model->get_all_records($this->tbl_clients, $this->pagefilter);
            $this->load->view('ptwfrontadmin/dashboard', $data);
        }
        else {
            $client_data  =  $this->crud_model->get_single_record($this->tbl_clients, array("client_id" => $client_id));
            
            $this->delete_client_logo($client_data['logo']);
            
            $count = $this->crud_model->delete_record($this->tbl_clients, array("client_id" => $client_id));
            if($count >=1) {
                $this->session->set_flashdata('error', 'Record deleted successfully.');
            }
            else {
                $this->session->set_flashdata('error', 'No matching records found.');
            }
            
            //redirect("clients");
            $data['view']       =   "clients_list_view";
            $data['clients']    =   $this->crud_model->get_all_records($this->tbl_clients, $this->pagefilter);
            $this->load->view('ptwfrontadmin/dashboard', $data);
        }
    }
    
    public function do_upload($fieldname)
	{
		$config['upload_path']    = './uploads/clients/';
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
    
    private function delete_client_logo($logo)
    {
        if($logo == "") {
            return;
        }
        
        if(file_exists("./uploads/clients/". $logo)) {
            @unlink("./uploads/clients/". $logo);
        }
    }
}