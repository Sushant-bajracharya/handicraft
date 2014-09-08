
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
        <form method="post" enctype="multipart/form-data" action="<?php echo site_url() ?>products/save" id="addproductform" name="addproductform">
            <input type="hidden" id="product_id" name="product_id" value="<?php echo $data['product_id'] ?>" />
            
        	<div class="DA_inner_frame">
        		<div class="DA_holder horizontal">
        			<label>Product:</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="product_name" name="product_name" value="<?php echo $data['product_name'] ?>" />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>	
                
                
                <div class="DA_holder horizontal">
        			<label>Price (in USD):</label>
        			<div class="DA_field_container">
        				<input type="text" class="field" id="product_price" name="product_price" value="<?php echo $data['product_price'] ?>" />
        				<span><i class="icon-remove"></i></span>
        			</div>	
        		</div>
                
        		<div class="DA_holder horizontal">
        			<label> Description:</label>
        			<div class="DA_field_container">
        				<textarea name="product_description" id="product_description"><?php echo $data['product_description'] ?></textarea>
                        <?php echo display_ckeditor($ckeditor['pdesc_ckeditor']); ?>
        			</div>
        		</div>
        		                
                <?php if(file_exists("./uploads/". $data['image']) && $data['image']): ?>
                <div class="DA_holder horizontal">
                    <img src="<?php echo site_url() ?>/uploads/<?php echo $data['image'] ?>" height="100" border="0" />
                </div>
                <?php endif; ?>
               
               <div class="DA_holder horizontal">
                    <label for="Upload">Image:</label>
                    <input type="file" name="image"  id="image" />
                </div>
                 <div class="DA_holder horizontal">
                    <label for="Upload">Image1:</label>
                    <input type="file" name="image1"  id="image1" />
                </div>
                 <div class="DA_holder horizontal">
                    <label for="Upload">Image2:</label>
                    <input type="file" name="image2"  id="image2" />
                </div>
                 <div class="DA_holder horizontal">
                    <label for="Upload">Image3:</label>
                    <input type="file" name="image3"  id="image3" />
                </div>
                
                <div class="DA_holder horizontal">
        			<label>Product Status:</label>
        			<div class="DA_field_container">
        				<?php echo $this->library->get_active_inactive_dropdown("product_status", $data['product_status']); ?>
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

