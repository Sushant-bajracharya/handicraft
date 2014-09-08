<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_ extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();	
        
        $this->page_id      =   $this->config->item('page_id');
        
        $this->load->model('login_model');
        
        $this->load->helper('string');
        $this->load->helper('encryption_helper');    
    }
    
    public function index()
    {
        $data['title']   =   "Page2website Login";
        $data['view']    =   "login_view";
        //print_r($data); die();            
        $this->load->view('ptwfrontadmin/login', $data);
    }
    
    public function loginpost()
    {
        $this->form_validation->set_rules('username', 'Email Address', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[20]|xss_clean');
        
        $data['title'] =   "Page2website Login";
        
		if ($this->form_validation->run() == FALSE)	{            
            $data['data']       =   $this->input->post(); 
            $this->session->set_flashdata('error', validation_errors());
            
            redirect('login_');				
		}
		else {
		      //print_r($this->input->post()); die();
		      $username       =   $this->input->post('username');
              $password       =   $this->input->post('password');
              
              $passwordhash   =   encode($password);              
              $response   =   $this->login_model->check_client_login($username, $passwordhash);
              
              if($response != false) {
                    $this->session->set_userdata('user_id', $response['user_id']);
                    $this->session->set_userdata('pageid', $this->page_id);
                    
                    redirect('products');
              }
              else {
                    $this->session->set_flashdata('error', 'Invalid username or password.');
            
                    redirect('login_');
              }
		}
    }
    
    public function logout()
    {
        $pageid =   $this->session->userdata('pageid');
        
        $this->session->unset_userdata('user_id');
                    
        redirect("login_");
    }
    
    public function forgotpassword()
    {
        $data['title']   =   "Page2website Forgot Password";
        
        $this->load->view('ptwfrontadmin/forgotpassword');
    }
    
    public function forgotpasswordpost()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[50]');
        
        if ($this->form_validation->run() == true) {
            $newpassword    =   random_string('alnum', 10);
            $passwordhash   =   encode($newpassword);
            
            $count = $this->login_model->reset_password($this->input->post('email'), $passwordhash);
            
            if ($count == 1) {
                $this->_automail_newpassword($this->input->post('email'), $newpassword);
                $this->session->set_flashdata('success', 'Your new password has been sent to your email address.');
                redirect('login_/forgotpassword');
            }
            else {
                //Password Reset Failed
                $this->session->set_flashdata('error', 'Your email address is not yet registered.');
                redirect('login_/forgotpassword');
            }
        }
        else {
            //Invalid Email Address Entered
            $this->session->set_flashdata('error', 'Please enter valid email address.');
            redirect('login_/forgotpassword');
        }
    }
    
    private function _automail_newpassword($email, $password)
    {
        $mail_subject         = "Page2website: Password Recovery Email";
        
        $mail_body  = "<div style='font-family: Arial, Helvetica;font-size:14px;text-align:left;'>";        
        $mail_body .= "Dear {$email},<br />
                        Your password has been reset as per your request. Please find the details below:<br />
                        Password: {$password}<br /><br /><br />
                        Regards<br />
                        passion.com.np
                       ";
        $mail_body .= "</div";
        
        //$this->lang->load('email');
        $this->load->library('email');
        
        $config['mailtype'] = 'html';            
        $this->email->initialize($config);
        
        $this->email->from('info@passion.com.np');
        $this->email->to($email);
        
        $this->email->subject($mail_subject);
        $this->email->message($mail_body);
        $this->email->send();
    }
}