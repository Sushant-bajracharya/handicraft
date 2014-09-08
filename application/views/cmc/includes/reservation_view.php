<?php 
    $tablename  =   $this->config->item('tbl_settings');
    $settings   =   $this->crud_model->get_single_record($tablename);
    
    $page_info  =   $this->session->userdata('pagecontactinfo');
    $page_info  =   unserialize($page_info);
?>
<style type="text/css">
.form .field .error {
border:none;
}
    .label {width:100px;text-align:right;float:left;padding-right:10px;font-weight:bold;}
    #register-form label.error, .output {color:#FB3A3A;font-weight:bold; border:#000000 thin;}
	
	
	
 </style>

<section class="content blog about-us">
<div class="container">
<div class="row">
<div class="col-md-12 inner-page">

    
		
    </div>
    </div>
</div>
</section>



