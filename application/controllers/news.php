<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {
    var $uri_segment, $offset;
    var $activetheme, $pagefilter;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->activetheme  =   ($this->session->userdata('active_theme') != "")? $this->session->userdata('active_theme'): "design1";
        
        $this->tbl_blog = $this->config->item('tbl_blog');
        
        $this->load->library('library'); 
        
        $this->uri_segment  =   4;
        $this->page_limit   =   2;
        
        if($this->session->userdata('pageid')) {
            $this->pagefilter  = array('page_id' => $this->session->userdata('pageid'));
        }
        else {
            $this->pagefilter  = array();
        }    
    }
    
    public function index()
    {
        $data['view']       =   "news_list_view";
        $data['theme']      =   $this->activetheme;
        
        $newsall_data       =   $this->crud_model->get_all_records($this->tbl_blog, $this->pagefilter);
        $data['newsall']    =   $newsall_data;
        
        $this->load->library('pagination');

        $config['base_url']         =   site_url() . "news/index/";
        $config['uri_segment']      =   $this->uri_segment;
        $config['total_rows']       =   sizeof($newsall_data);
        $config['per_page']         =   $this->page_limit; 
        
        $config['full_tag_open']    =   "<div class='wp-pagenavi'>";
        $config['full_tag_close']   =   "</div>";
        
        $config['cur_tag_open']     =   "<span class='current'>";
        $config['cur_tag_close']    =   "</span>";
        
        $config['prev_tag_open']    =   "<span  class='previouspostslink'>";
        $config['prev_tag_close']   =   "</span>";
        
        $config['next_tag_open']    =   "<span  class='nextpostslink'>";
        $config['next_tag_close']   =   "</span>";
        
        $config['num_tag_open']     =   "<span class='page larger'>";
        $config['num_tag_close']    =   "</span>";
        
        $config['prev_link']        =   "Previous page";
        $config['next_link']        =   "Next page";
        
        $page_number        =   ($this->uri->segment(3))? $this->uri->segment(3): 1;
        $start_index        =   ($page_number - 1) * $this->page_limit;
        
        $news_data          =   $this->crud_model->get_single_page_record($this->tbl_blog, $this->pagefilter, array('blog_id' => 'desc'), $start_index, $this->page_limit);
        $data['news']       =   $news_data;        
        
        $this->pagination->initialize($config); 
        
        $this->load->view($this->activetheme . '/dashboard', $data);
    }
    
    public function newsdetail()
    {
        $news_id                =   $this->uri->segment(3);
        
        $data['view']           =   "news_detail_view";
        $data['theme']          =   $this->activetheme;
        
        $data['news']           =   $this->crud_model->get_single_record($this->tbl_blog, array("blog_id" => $news_id));
        $data['other_news']     =   $this->crud_model->get_except_records($this->tbl_blog, $this->pagefilter, array("blog_id" => $news_id));
        
        $this->load->view($this->activetheme . '/dashboard', $data);
    }
}