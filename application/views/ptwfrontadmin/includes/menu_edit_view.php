<section class="columns content-slider">
   <h2><i class="icon-edit"><?php echo $pagetitle; ?></i></h2>
    
    <div class="messages">
    <?php 
        if($this->session->flashdata('error')) {
            echo $this->session->flashdata('error');
        }
        else if($this->session->flashdata('error1')) {
            echo $this->session->flashdata('error1');
        }
        else {
            $this->session->flashdata('success');
        }
    ?>
    </div>
    <div class="DA_right_frame">
    <form method="post" enctype="multipart/form-data" action="<?php echo site_url() ?>menus/save" id="menusform" name="menusform">
        <input type="hidden" id="id" name="id" value="<?php echo $data['id'] ?>" />
        
    	<div class="DA_inner_frame">
    		<div class="DA_holder horizontal">
    			<label>Menu Title:</label>
    			<div class="DA_field_container">
    				<input type="text" class="field" id="title" name="title" value="<?php echo $data['title'] ?>" />
    				<span><i class="icon-remove"></i></span>
    			</div>	
    		</div>
            	
    		<div class="DA_holder horizontal">
    			<label>Link to Page:</label>
    			<div class="DA_field_container">
    				<?php echo $this->library->get_pages_dropdown("linked_pageid", $data['linked_pageid'], $pages); ?>
    			</div>	
    		</div>
            
            <div class="DA_holder horizontal">
    			<label>Parent Menu:</label>
    			<div class="DA_field_container">
    				<?php echo $this->library->get_menus_dropdown("parent", $data['parent'], $menus); ?>
    			</div>	
    		</div>
            
            <div class="DA_holder horizontal">
    			<label>Status:</label>
    			<div class="DA_field_container">
    				<?php echo $this->library->get_active_inactive_dropdown("status", $data['status']); ?>
    			</div>	
    		</div>
            
    		<div class="cl">&nbsp;</div>
    		<div class="btnp"><input type="submit"  value="Save Menu" /></div>
    	
    	</div>	
    </form>
    </div>
    
    <div class="left_menu_frame">        
    	<nav>
    	   <?php $this->load->view("ptwfrontadmin/includes/navigation"); ?>
        </nav>
   </div>
</section>