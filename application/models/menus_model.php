<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menus_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    
        $this->tbl_menus    = $this->config->item('tbl_menus');
        $this->tbl_pages    = $this->config->item('tbl_pages');
    }
    
    public function get_menus_list($pagefilter)
    {
        $menusql  = "SELECT 
                        m.id, m.title, p.title linked_page, m.parent, m.status, m.created_at, m.updated_at
                    FROM  ". $this->tbl_menus ." m
                    LEFT JOIN ". $this->tbl_pages ." p ON m.linked_pageid = p.id
                    WHERE m.page_id =  '". $pagefilter['page_id'] ."'
                    ";
                    
        $query    =   $this->db->query($menusql);
        //echo $this->db->last_query();
        return $query->result_array();
    }
    
    public function get_menu_byid($parent)
    {
        $this->db->where('id', $parent);
        
        $query = $this->db->get($this->tbl_menus);
        //echo $this->db->last_query();
        $menu_row   =   $query->row_array();
        return $menu_row['title'];
    }
    
    public function get_dynamic_menu_html()
    {
        $this->db->where('status', '1');
        $this->db->where('parent', '0');
        
        if($this->session->userdata('pageid')) {
            $this->db->where('page_id', $this->session->userdata('pageid'));
        }
        
        $query = $this->db->get($this->tbl_menus);
        //echo $this->db->last_query();
        $result   =   $query->result();
        
        $menu   =   "";
        foreach($result as $row) {
            $target_url =   ($row->linked_pageid)? site_url('cms/page/'.$row->linked_pageid): "javascript:void(0)";
            $menu   .=  "<li><a class='bg' href='{$target_url}'>". $row->title ."</a>";
            
            $menu   .=  $this->get_dynamic_submenu_html($row->id);
            
            $menu   .=  "</li>";
        }
        
        return $menu;
    }
    
    private function get_dynamic_submenu_html($menu_id)
    {
        $this->db->where('status', '1');
        $this->db->where('parent', $menu_id);
        
        $query = $this->db->get($this->tbl_menus);
        //echo $this->db->last_query();
        $result   =   $query->result();
        
        if(sizeof($result)) {
            $submenu   =   "<ul class='dropdown-menu'>";
            foreach($result as $row) {
                $target_url =   ($row->linked_pageid)? site_url('cms/page/'.$row->linked_pageid): "javascript:void(0)";
                $submenu   .=  "<li><a href='{$target_url}'>". $row->title ."</a></li>";
            }
            $submenu   .=   "</ul>";
        }
        
        
        return $submenu;
    }
}
?>