
<?php 
    $tablename  =   $this->config->item('tbl_settings');
    $settings   =   $this->crud_model->get_single_record($tablename);
    
    $page_info  =   $this->session->userdata('pagecontactinfo');
    $page_info  =   unserialize($page_info);
?>

<footer>
	<div class="container">
     	<div class="row">
        	<div class="col-md-3">
            	<h3>contact us</h3>
                <span>Sahabhagita Marga,<br/> 
Kathmandu, Nepal<br/>
Phone: +1 4493747 <br/>
E-mail: +1 4493474<br/>
E-mail: lama.2b@gmail.com</span>
                
            </div>
        		<div class="col-md-3"><h3>twitter feed</h3>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in justo ut metus cursus placerat vitae ac odio. </span>
                    
                
                
                </div>
        			<div class="col-md-3" ><h3>flickr</h3>
                    <img src="../../../../css/Handicraft/images/box.png" />
                     <img src="../../../../css/Handicraft/images/box.png" />
                      <img src="../../../../css/Handicraft/images/box.png" />
                       <img src="../../../../css/Handicraft/images/box.png" />
                        <img src="../../../../css/Handicraft/images/box.png" />
                         <img src="../../../../css/Handicraft/images/box.png" />
                    </div>
        				<div class="col-md-3"><h3>facebook likes</h3>
       
          <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/pic.png" class="img-responsive" alt="Handicraft">
         	</div>
        </div>
         <p>Design Created by Page2website | All rights reserved.</p>
    </div>
</footer>

            