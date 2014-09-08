<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    
        $this->tbl_adminuser = $this->config->item('tbl_adminuser');
        $this->tbl_users     = $this->config->item('tbl_users');
    }
    
    public function check_login($user, $passwd)
    {
        $this->db->where('username', $user);
        $this->db->where('password', md5($passwd));
        $this->db->where('status', '1');
        
        $this->db->limit(1);
        
        $query = $this->db->get($this->tbl_adminuser);
        //echo $this->db->last_query();
        return $query->row_array();
    }
    
    public function check_client_login($email, $passwdhash)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $passwdhash);
        $this->db->where('status', '1');
        
        $this->db->limit(1);
        
        $query = $this->db->get($this->tbl_users);
        //echo $this->db->last_query();
        return $query->row_array();
    }
    
    public function is_admin_user()
    {
        return $this->session->userdata('user_id');   
    }
    
    public function reset_password($email, $passwordhash)
    {
        $data   =   array('password' => $passwordhash);
        
        $this->db->where('email', $email);
        $this->db->update($this->tbl_users, $data);
        
        return $this->db->affected_rows();
    }
}
?>