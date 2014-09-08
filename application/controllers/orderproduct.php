<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orderproduct extends CI_Controller {
    var $name, $email, $phone, $product_name, $qty, $message, $captcha;
    var $admin_email;

	public function __construct()
    {
        parent::__construct();
    }
    
	public function sendemail()
	{
        $this->name         =   $this->input->post('name');
        $this->emailaddr    =   $this->input->post('email');
        $this->phone        =   $this->input->post('phone');
        $this->prod_name    =   $this->input->post('prod_name');
        $this->qty          =   $this->input->post('qty');
        $this->message      =   $this->input->post('message');
        $this->captcha      =   $this->input->post('captcha');
        
        if(trim($this->name == "")) {
            echo "Error:Your Name is required field.";
        }
        else if(trim($this->emailaddr == "")) {
            echo "Error:Email is required field.";
        }
        if(trim($this->phone == "")) {
            echo "Error:Phone is required field.";
        }
        else if(trim($this->qty == "")) {
            echo "Error:Quantity is required field.";
        }
        else if(filter_var($this->emailaddr, FILTER_VALIDATE_EMAIL) === false) {
            echo "Error:Email field must contain valid email address.";
        }
        else if(trim($this->message == "")) {
            echo "Error:Message is required field.";
        }
        else if(trim($this->captcha == "")) {
            echo "Error:Security code is required field.";
        }
        else if(strcasecmp($this->captcha, $this->session->userdata('captchacode')) != 0) {
            echo "Error:Security code does not match with captcha code.";
        }
        else {
            $send_email_response    =   $this->send_order_email();
            if($send_email_response) {
                echo "Success:Your message was sent successfully. We will get back to you shortly.";
            }
            else {
                echo "Error:Problem while sending email. Please try again later.";
            }
        }
	}
    
    public function send_order_email()
    {
        $this->admin_email  =  (string) $this->config->item('adminemail');
        
        $config['mailtype'] =   "html";
        $this->load->library('email', $config);       
        
        $this->email->from($this->emailaddr, $this->name); 
        $this->email->to($this->admin_email);
        $this->email->subject('Order Product Email from Pagetoweb');
        
        $mail_body = "<style>
                        #mailbody {font-family: Arial, Verdana; font-size: 12px;}
                        #mailbody p {font-weight: normal;}
                      </style>
                      <div id='mailbody'>Hello Admin,
                        <p>A new product order was made by a customer. Please check the detais below:</p>
                        <p><strong>Name:</strong> {$this->name}</p>
                        <p><strong>Email:</strong> {$this->emailaddr}</p>
                        <p><strong>Phone:</strong> {$this->phone}</p>
                        <p><strong>Product Name:</strong> {$this->prod_name}</p>
                        <p><strong>Quantity:</strong> {$this->qty}</p>
                        <p><strong>Message:</strong><br /> {$this->message}</p>
                      </div>
                      ";
        
        $this->email->message($mail_body);
          
        if($this->email->send()) {
            return true;
        }
        else {
            return false;
        }
    }
}

