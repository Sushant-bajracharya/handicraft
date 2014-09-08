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
        <form method="post" enctype="multipart/form-data" action="<?php echo site_url() ?>testimonials/save" id="testimonial" name="testimonial">
            <input type="hidden" id="id" name="id" value="<?php echo $data['id'] ?>" />
            
        	<div class="DA_inner_frame">
        		<div class="DA_holder horizontal">
        			<label>Testimonial:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="testimonial" name="testimonial" value="<?php echo $data['testimonial'] ?>" />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>
                	
        		<div class="DA_holder horizontal">
        			<label>Client Name:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" name="client_name" id="client_name" value="<?php echo $data['client_name'] ?>" />
        			</div>
        		</div>
                
        		<div class="DA_holder horizontal">
        			<label>Website:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" name="website" id="website" value="<?php echo $data['website'] ?>" />
        			</div>
        		</div>
                
                <div class="cl">&nbsp;</div>
        		<div class="btnp"><input type="submit"  value="Save Testimonial" /></div>
        	
        	</div>	
        </form>
        </div>
        
        <div class="left_menu_frame">        
        	<nav>
        	   <?php $this->load->view("ptwfrontadmin/includes/navigation"); ?>
            </nav>
       </div>
</section>