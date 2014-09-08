<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_model extends CI_Model {
	function __construct()
    {
        parent::__construct();
    
         $this->tbl_article = $this->config->item('tbl_article');
        $this->tbl_article_category = $this->config->item('tbl_article_category');
    }
	
	public function getArticles(){
		
		$this->db->select($this->tbl_article.'.*,'.$this->tbl_article_category.'.category_name');
		
		$this->db->from($this->tbl_article);
		
		$this->db->join($this->tbl_article_category,$this->tbl_article_category.'.id =' .$this->tbl_article.'.category_id');
		
		$this->db->where(array($this->tbl_article.'.status'=>1,$this->tbl_article.'.page_id'=>$this->pagefilter,$this->tbl_article_category.'.status'=>'1',$this->tbl_article_category.'.page_id'=>$this->pagefilter));
		
		$query = $this->db->get();
        
		return $query->result_array();
	}
	
	public function getParent($parent_id){
		$query	=	$this->db->get_where('ptw_menu',array('id'=>$parent_id));
		$result	=	$query->row();
		echo $result->name;
	} 
	
	public function save($id=''){
		$slug = url_title($this->input->post('title'), 'dash', TRUE);
		$data	=	array(
								'category_id'=>$this->input->post('cateogry_id'),
								'article_title'=>$this->input->post('title'),
								'page_id'=>$this->pagefilter,
								'slug'=>$slug,
								'description'=>$this->input->post('desc'),
								'meta_keywords'=>$this->input->post('metakey'),
								'meta_description'=>$this->input->post('metadesc'),
								'status'=>$this->input->post('menu_status'),
								'page_id'=>$this->pagefilter
							);
		if(empty($id)){
			$this->crud_model->save_record($this->tbl_menu, $data, FALSE);
			$this->session->set_flashdata('success', 'Record saved successfully.');
		}else{
			$this->db->update($this->tbl_menu, $data, array('id'=>$id,'page_id'=>$this->pagefilter));
			$this->session->set_flashdata('success', 'Record Updated successfully.');
		}
		
	}
	
	function list_menu_by_id($id){
		$result	=	 $this->db->get_where($this->tbl_menu,array('id'=>$id,'page_id'=>$this->pagefilter));
		return $result->row();
	}
	
	function list_setting_by_id($id){
		$result	=	 $this->db->get_where($this->tbl_menu_setting,array('id'=>$id,'page_id'=>$this->pagefilter));
		return $result->row();
	}

}
