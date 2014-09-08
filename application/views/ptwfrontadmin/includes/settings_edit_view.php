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
        <form method="post" action="<?php echo site_url() ?>settings/save" id="settings" name="settings">
            <input type="hidden" id="id" name="id" value="<?php echo $data['id'] ?>" />
            
        	<div class="DA_inner_frame">
        		<div class="DA_holder horizontal">
        			<label>Admin Email:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="admin_email" name="admin_email" value="<?php echo $data['admin_email'] ?>" />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>
                
                <div class="DA_holder horizontal">
        			<label>Twitter Feeds Script:</label>
        			<div class="DA_field_container">
        				<textarea name="twitter_feeds" id="twitter_feeds" rows="10"><?php echo $data['twitter_feeds'] ?></textarea>
        			</div>	
        		</div>
                
                <div class="DA_holder horizontal">
        			<label>Flickr Photos Script:</label>
        			<div class="DA_field_container">
        				<textarea name="flickr_photos" id="flickr_photos" rows="10"><?php echo $data['flickr_photos'] ?></textarea>
        			</div>	
        		</div>
                
                <div class="DA_holder horizontal">
        			<label>Facebook Likes Script:</label>
        			<div class="DA_field_container">
        				<textarea name="facebook_likes" id="facebook_likes" rows="10"><?php echo $data['facebook_likes'] ?></textarea>
        			</div>	
        		</div>	
                
                <div class="DA_holder horizontal">
        			<label>Facebook Share Link:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="fb_share" name="fb_share" value="<?php echo $data['fb_share'] ?>" />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>
                
                <div class="DA_holder horizontal">
        			<label>Twitter Share Link:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="twitter_share" name="twitter_share" value="<?php echo $data['twitter_share'] ?>" />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>
                
                <div class="DA_holder horizontal">
        			<label>G+ Share Link:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="gplus_share" name="gplus_share" value="<?php echo $data['gplus_share'] ?>" />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>
                
                <div class="DA_holder horizontal">
        			<label>Linkedin Share Link:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="linkedin_share" name="linkedin_share" value="<?php echo $data['linkedin_share'] ?>" />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>
                
                <div class="DA_holder horizontal">
        			<label>Pinterest Share Link:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="pinterest_share" name="pinterest_share" value="<?php echo $data['pinterest_share'] ?>" />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>
        		
                <div class="cl">&nbsp;</div>
        		<div class="btnp"><input type="submit"  value="Save Settings" /></div>
        	
        	</div>	
        </form>
        </div>
        
        <div class="left_menu_frame">        
        	<nav>
        	   <?php $this->load->view("ptwfrontadmin/includes/navigation"); ?>
            </nav>
       </div>
</section>