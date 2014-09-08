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
    <form method="post" enctype="multipart/form-data" action="<?php echo site_url() ?>blog/save" id="blogform" name="blogform">
        <input type="hidden" id="blog_id" name="blog_id" value="<?php echo $data['blog_id'] ?>" />
        
    	<div class="DA_inner_frame">
    		<div class="DA_holder horizontal">
    			<label>News Title:</label>
    			<div class="DA_field_container">
    				<input type="text" class="field" id="title" name="title" value="<?php echo $data['title'] ?>" />
    				<span><i class="icon-remove"></i></span>
    			</div>	
    		</div>	
    		<div class="DA_holder horizontal">
    			<label>Short Description:</label>
    			<div class="DA_field_container">
    				<textarea name="short_desc" id="short_desc"><?php echo $data['short_desc'] ?></textarea>
                    <?php echo display_ckeditor($ckeditor['shortdesc_ckeditor']); ?>
    			</div>
    		</div>
    		<div class="DA_holder horizontal">
    			<label>Long Description:</label>
    			<div class="DA_field_container">
    				<textarea name="long_desc" id="long_desc"><?php echo $data['long_desc'] ?></textarea>
                    <?php echo display_ckeditor($ckeditor['longdesc_ckeditor']); ?>
    			</div>
    		</div>
            
            <?php if(file_exists("./uploads/". $data['image']) && $data['image']): ?>
            <div class="DA_holder horizontal">
                <img src="<?php echo site_url() ?>/uploads/<?php echo $data['image'] ?>" height="100" border="0" />
            </div>
            <?php endif; ?>
            
            <div class="DA_holder horizontal">
                <label>Image:</label>
                <input type="file" name="image" id="image" />
            </div>
            
    		<div class="cl">&nbsp;</div>
    		<div class="btnp"><input type="submit"  value="Save News" /></div>
    	
    	</div>	
    </form>
    </div>
    
    <div class="left_menu_frame">        
    	<nav>
    	   <?php $this->load->view("ptwfrontadmin/includes/navigation"); ?>
        </nav>
   </div>
</section>