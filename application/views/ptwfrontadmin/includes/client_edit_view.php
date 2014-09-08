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
        <form method="post" enctype="multipart/form-data" action="<?php echo site_url() ?>clients/save" id="clientsform" name="clientsform">
            <input type="hidden" id="client_id" name="client_id" value="<?php echo $data['client_id'] ?>" />
            
        	<div class="DA_inner_frame">
                <div class="DA_holder horizontal">
        			<label>Name:</label>
        			<div class="DA_field_container">
        				<input type="text" name="name" id="name" value="<?php echo $data['name'] ?>" />
        			</div>
        		</div>
                
        		<?php if(file_exists("./uploads/clients/". $data['logo']) && $data['logo']): ?>
                <div class="DA_holder horizontal">
                    <img src="<?php echo site_url() ?>/uploads/clients/<?php echo $data['logo'] ?>" height="100" border="0" />
                </div>
                <?php endif; ?>
                <div class="DA_holder horizontal">
        			<label>Logo:</label>
                    <input type="file" name="logo" id="logo" />	
        		</div>	
        		
                <div class="DA_holder horizontal">
        			<label>Description:</label>
        			<div class="DA_field_container">
        				<textarea name="desc" id="desc"><?php echo $data['desc'] ?></textarea>
        			</div>
        		</div>
        		
                <div class="DA_holder horizontal">
        			<label>Status:</label>
        			<div class="DA_field_container">
        				<?php echo $this->library->get_active_inactive_dropdown("status", $data['status']); ?>
        			</div>
        		</div>
                
                <div class="cl">&nbsp;</div>
        		<div class="btnp"><input type="submit"  value="Save Client" /></div>
        	
        	</div>	
        </form>
        </div>
        
        <div class="left_menu_frame">        
        	<nav>
        	   <?php $this->load->view("ptwfrontadmin/includes/navigation"); ?>
            </nav>
       </div>
</section>