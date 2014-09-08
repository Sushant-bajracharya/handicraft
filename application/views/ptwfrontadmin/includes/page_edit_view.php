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
    <form method="post" enctype="multipart/form-data" action="<?php echo site_url() ?>pages/save" id="pagesform" name="pagesform">
        <input type="hidden" id="id" name="id" value="<?php echo $data['id'] ?>" />
        
    	<div class="DA_inner_frame">
    		<div class="DA_holder horizontal">
    			<label>Page Title:</label>
    			<div class="DA_field_container">
    				<input type="text" class="field" id="title" name="title" value="<?php echo $data['title'] ?>" />
    				<span><i class="icon-remove"></i></span>
    			</div>	
    		</div>	
    		<div class="DA_holder horizontal">
    			<label>Description:</label>
    			<div class="DA_field_container">
    				<textarea name="description" id="description"><?php echo $data['description'] ?></textarea>
                    <?php echo display_ckeditor($ckeditor['description_ckeditor']); ?>
    			</div>
    		</div>
            
    		<div class="cl">&nbsp;</div>
    		<div class="btnp"><input type="submit"  value="Save Page" /></div>
    	
    	</div>	
    </form>
    </div>
    
    <div class="left_menu_frame">        
    	<nav>
    	   <?php $this->load->view("ptwfrontadmin/includes/navigation"); ?>
        </nav>
   </div>
</section>