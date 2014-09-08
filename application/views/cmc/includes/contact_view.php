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
<div class="row bg-eee">
<div class="col-md-6 col-sm-6">
<div class="bg-ddd">
<h3>CMM-Nepal</h3>
<div class="m-LR-m-15 row">
	<div class="col-md-3 col-sm-3">
    	<h4>Address</h4>
    	<h4>Phone</h4>
    	<h4>Email</h4>
    	<h4>Fax</h4>
    	<h4>Post Box</h4>
    </div>
	<div class="col-md-6 col-sm-6">
    	<p>	
        	Thapathali, Kathmandu, Nepal<br />
        	01-4102037<br />
        	cmcnepal@wlink.com.np<br />
        	01-4102038<br />
        	P.O. Box 5295<br />
        </p>
    </div>
    <div class="col-md-12 col-sm-12">
    	<img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/map.jpg" class="img-responsive" />
    </div>
    </div>
</div>

</div>

<div class="col-md-6 col-sm-6">
	<div class="bg-dddd">
	<h3 class="cont">Contact-Us</h3>
	<form>
    	<div class="form-group">
        	<label>Full Name</label>
            <input class="form-control" type="text" required="required" />
        </div>
    	<div class="form-group">
        	<label>Email</label>
            <input class="form-control" type="email" required="required" />
        </div>
    	<div class="form-group">
        	<label>Phone / Mobile</label>
            <input class="form-control" type="text" required="required" />
        </div>
    	<div class="form-group">
        	<label>Address</label>
            <input class="form-control" type="text" required="required" />
        </div>
    	<div class="form-group">
        	<label>Message</label>
            <textarea class="form-control" required="required" rows="3" cols="20" ></textarea>
        </div>
        <button class="btn btn-success btn-lg" type="submit">Submit</button>
    </form>
    </div>
</div>
</div>
</div>
</section>


<script>
  
  // When the browser is ready...
  jQuery(function() {
	  
      jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z ]+$/i.test(value);
}, "Letters only please");
	  
    // Setup form validation on the #register-form element
	
  var validator = jQuery("#register-form").validate({
    
        // Specify the validation rules
        rules: {
			
              name: {
		required: true,
		lettersonly: true
		
		},
             
		
		 email: "required",
          phone: {
		required: true,
		number: true
		
		},
			subject:"required",
			party_size:"required",
			date:"required",
			time:"time",
			table:"required"
            
        },
		
        submitHandler: function(form) {
            form.submit();
        }
    });
	 

  });
 
  
  </script>
