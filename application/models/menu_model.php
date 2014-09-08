<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model {
	function __construct()
    {
        parent::__construct();
    
        $this->tbl_menu		 		= 	$this->config->item('tbl_menu');
        $this->tbl_menu_setting     = 	$this->config->item('tbl_menu_setting');
		$this->tbl_article			=	$this->config->item('tbl_article');
    }
	
	public function joinResult(){
		
		$this->db->select($this->tbl_menu.'.*,'.$this->tbl_menu_setting.'.menu_type_name');
		
		$this->db->from($this->tbl_menu);
		
		$this->db->join($this->tbl_menu_setting,$this->tbl_menu_setting.'.id =' .$this->tbl_menu.'.menu_type_id');
		
		$this->db->where(array($this->tbl_menu.'.status'=>1,$this->tbl_menu.'.page_id'=>$this->pagefilter,$this->tbl_menu_setting.'.status'=>'1',$this->tbl_menu_setting.'.page_id'=>$this->pagefilter));
		
		$query = $this->db->get();
        
		return $query->result_array();
	}
	
	public function getParent($parent_id){
		$query	=	$this->db->get_where('ptw_menu',array('id'=>$parent_id));
		$result	=	$query->row();
		echo $result->name;
	} 
	
	public function listArticle($id='',$current=''){
		
		if(empty($id)){
		
			$id		=	$this->input->post('id');
		}
		
		$query	=	$this->db->get_where($this->tbl_article,array('category_id'=>$id,'page_id'=>$this->pagefilter));
		
		echo '<span><select name="article" class="field" >';
		if($query->num_rows()>0){
			echo '<option value="">Choose Article</option>';		
			foreach($query->result_array() as $row){
		?>

<option value="<?php echo $row['id'];?>" <?php echo ($current==$row['id'])?'selected="selected"':'';?> onclick="generateLink('<?php echo strtolower($row['slug']);?>')"><?php echo $row['article_title'];?></option>
<?php
			}
			
			
		}else{
			echo '<option value="">No Results</option>';
		}
		
		echo '</select></span>';
	}
	
	function ListMenuById($id,$parent_id=0){
		return $this->db->get_where($this->tbl_menu,array('menu_type_id'=>$id,'parent_id'=>$parent_id,'page_id'=>$this->pagefilter));
	}
	
	public function getMenuListInDropDown($menu_type_id='',$parent_id=0){
		if(empty($menu_type_id)){
			
			$menu_type_id	=	$this->input->post('id');
			
		}
		
		$resultmenu	=	$this->ListMenuById($menu_type_id);
		
		echo '<select name="menu_parent" class="field">';
		
		if($resultmenu->num_rows()>0){
		
			echo '<option value="0">Self</option>';
		
			foreach($resultmenu->result_array() as $rowMenu){
		
		?>
        
		<option  value="<?php echo $rowMenu['id'];?>" <?php echo ($parent_id==$rowMenu['id'])?'selected="selected"':''?>><?php echo $rowMenu['name'];?></option>
		<?php
			}
			
		}else{
			
			echo '<option value="0">Self</option>';
		
		}
		
		echo '</select>';
	
	}
	
	public function save($id=''){
		$data	=	array(
								'parent_id'=>$this->input->post('menu_parent'),
								'menu_type_id'=>$this->input->post('menu_type'),
								'category_id'=>$this->input->post('articleCat'),
								'article_id'=>$this->input->post('article'),
								'name'=>$this->input->post('menu_name'),
								'menu_link'=>$this->input->post('menu_link'),
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
