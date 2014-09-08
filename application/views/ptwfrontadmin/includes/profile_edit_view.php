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
        <form method="post" action="<?php echo site_url() ?>profile/save" id="profile" name="profile">
            <input type="hidden" id="id" name="id" value="<?php echo $data['user_id'] ?>" />
            
        	<div class="DA_inner_frame">
        		<div class="DA_holder horizontal">
        			<label>Name:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="name" name="name" value="<?php echo $data['name'] ?>" />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>
                
                <div class="DA_holder horizontal">
        			<label>Phone Number:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="phone" name="phone" value="<?php echo $data['phone'] ?>" />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>
                
                <div class="DA_holder horizontal">
        			<label>Email Address:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="email" name="email" value="<?php echo $data['email'] ?>" readonly />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>	
                
                <div class="DA_holder horizontal">
        			<label>Facebook Page ID:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="page_id" name="page_id" value="<?php echo $data['page_id'] ?>" readonly />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>
                
                <div class="DA_holder horizontal">
        			<label>Ordered Template:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="template" name="template" value="<?php echo $data['template'] ?>" readonly />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>
        		
                <div class="cl">&nbsp;</div>
        		<div class="btnp"><input type="submit"  value="Save Profile" /></div>
        	
        	</div>	
        </form>
        </div>
        
        <div class="left_menu_frame">        
        	<nav>
        	   <?php $this->load->view("ptwfrontadmin/includes/navigation"); ?>
            </nav>
       </div>
</section>