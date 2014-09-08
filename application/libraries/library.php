<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Library {
        public function get_status_label($status)
        {
            if($status == 1) {
                return "Active";
            }
            else {
                return "Inactive";
            }
        }
        
        public function get_active_inactive_dropdown($name, $select_value)
        {
            $dropdown  = "<select name={$name} id={$name}>";
            $dropdown .= "<option value=''>Please Select</option>";
            
            if($select_value === "1") {
                $dropdown   .=  "<option value='1' selected>Active</option><option value='0'>Inactive</option>";
            }
            else if($select_value === "0") {
                $dropdown   .=  "<option value='1'>Active</option><option value='0' selected>Inactive</option>";
            }
            else {
                $dropdown   .=  "<option value='1'>Active</option><option value='0'>Inactive</option>";
            }
                            
            $dropdown .= "</select>";
            
            return $dropdown;
        }
        
        public function get_pages_dropdown($name, $select_value, $pages)
        {
            $dropdown  = "<select name={$name} id={$name}>";
            $dropdown .= "<option value=''>Please Select</option>";
            
            $nolink  = ($select_value === '0')? "selected": "";
            $dropdown .= "<option value='0' {$nolink}>None</option>";
            
            foreach($pages as $page) {
                $selected    =  ($page['id'] == $select_value)? "selected": "";
                $dropdown   .=  "<option value='".$page['id']."' {$selected}>".$page['title']."</option>";
            }
                            
            $dropdown .= "</select>";
            
            return $dropdown;
        }
        
        public function get_menus_dropdown($name, $select_value, $menus)
        {
            $dropdown  = "<select name={$name} id={$name}>";
            $dropdown .= "<option value=''>Please Select</option>";
            
            $noparent  = ($select_value === '0')? "selected": "";
            $dropdown .= "<option value='0' {$noparent}>None</option>";
            
            foreach($menus as $menu) {
                if($menu['parent'] > 0) { continue; }   //Do not show child menus in list
                $selected    =  ($menu['id'] == $select_value)? "selected": "";
                $dropdown   .=  "<option value='".$menu['id']."' {$selected}>".$menu['title']."</option>";
            }
                            
            $dropdown .= "</select>";
            
            return $dropdown;
        }
        
        public function get_date_time_format($datetime)
        {
            if($datetime == "0000-00-00 00:00:00") {
                return "N/A";
            }
            
            return date("d-m-Y", strtotime($datetime));
        }
        
        public function resize_image($filename, $width, $height)
        {
            $thumb = new Imagick($filename);

            $thumb->resizeImage($width, $height, Imagick::FILTER_LANCZOS, 1);
            $thumb->writeImage($filename);
            
            $thumb->destroy(); 
        }
        
        public function generateRandomString($length = 10) 
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $randomString;
        }
    }
?>