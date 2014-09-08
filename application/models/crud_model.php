<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Crud_model extends CI_Model {

        function __construct()
        {
            parent::__construct();
        }
        
        public function get_single_record($table, array $where=array(), array $orderby=array())
        {
            if(sizeof($where) > 0) {
                foreach($where as $key => $value) {
                    $this->db->where($key, $value);
                }
            }
            
            if(sizeof($orderby) > 0) {
                foreach($orderby as $key => $value) {
                    $this->db->order_by($key, $value);
                }
            }
            
            $query = $this->db->get($table);
            
            return $query->row_array();
        }
        
        public function get_all_records($table, array $where=array(), array $orderby=array(), $limit=0)
        {
            if(sizeof($where) > 0) {
                foreach($where as $key => $value) {
                    $this->db->where($key, $value);
                }
            }
            
            if(sizeof($orderby) > 0) {
                foreach($orderby as $key => $value) {
                    $this->db->order_by($key, $value);
                }
            }
            
            if($limit > 0) {
                $this->db->limit($limit);
            }
            
            $query = $this->db->get($table);
            
            return $query->result_array();
        }
        
        public function get_single_page_record($table, array $where=array(), array $orderby=array(), $startindex, $limit)
        {
            if(sizeof($where) > 0) {
                foreach($where as $key => $value) {
                    $this->db->where($key, $value);
                }
            }
            
            if(sizeof($orderby) > 0) {
                foreach($orderby as $key => $value) {
                    $this->db->order_by($key, $value);
                }
            }
            
            if($limit > 0) {
                $this->db->limit($limit, $startindex);
            }
            
            $query = $this->db->get($table);
            
            return $query->result_array();
        }
        
        public function get_except_records($table, array $where=array(), $where_notin=array(), array $orderby=array(), $limit=0)
        {
            if(sizeof($where) > 0) {
                foreach($where as $key => $value) {
                    $this->db->where($key, $value);
                }
            }
            
            if(sizeof($where_notin) > 0) {
                foreach($where_notin as $key => $value) {
                    $this->db->where_not_in($key, $value);
                }
            }
            
            if(sizeof($orderby) > 0) {
                foreach($orderby as $key => $value) {
                    $this->db->order_by($key, $value);
                }
            }
            
            if($limit > 0) {
                $this->db->limit($limit);
            }
            
            $query = $this->db->get($table);
            
            return $query->result_array();
        }
        
        public function get_random_record($table, array $where=array())
        {
            if(sizeof($where) > 0) {
                foreach($where as $key => $value) {
                    $this->db->where($key, $value);
                }
            }
            
            $this->db->order_by('id', 'RANDOM');
            
            $query = $this->db->get($table);
            
            return $query->row_array();
        }
        
        public function save_record($table, $data, $isupdate, $where)
        {
            if($isupdate === false) {
                $this->db->insert($table, $data);
            }
            else {
                $this->db->where($where);
                $this->db->from($table);
                if($this->db->count_all_results() > 0) {
                    $this->db->where($where);
                    $this->db->update($table, $data);
                }
                else {
                    $this->db->insert($table, $data);
                }
            }
            //echo $this->db->last_query(); die();
            return $this->db->affected_rows();
        }
        
        public function delete_record($table, $where)
        {
            $this->db->where($where);
            $this->db->delete($table);
            
            return $this->db->affected_rows();
        }
    }
?>