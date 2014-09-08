<style type="text/css">
.form .field .error {
border:none;
}
    .label {width:100px;text-align:right;float:left;padding-right:10px;font-weight:bold;}
    #register-form label.error, .output {color:#FB3A3A;font-weight:bold; border:#000000 thin;}
	
	
	
 </style>

<?php 
    $tablename  =   $this->config->item('tbl_settings');
    $settings   =   $this->crud_model->get_single_record($tablename);
    
    $page_info  =   $this->session->userdata('pagecontactinfo');
    $page_info  =   unserialize($page_info);
?>
<section class="content contact">
<div class="inner-page">
 
		<?php if ($this->input->post('submit')) echo '<div id="form-submit-alert">Your Massage Has Been Successfully Send</div>';?>
    
		<article class="main"  id="form" <?php echo ($this->input->post('submit')?'style="display:none"':'');?>>
		<h2>Appointments</h2>
		
		<form method="post" class="contact-form"  id="register-form" >
			<p class="half">
				<label for="name">Full Name</label><input name="name" id="name" >
			</p>
			<p class="half">
				<label for="email">E-mail</label><input type="email" name="email" id="email">
			</p>
            <p>
				<label for="name">Phone</label><input name="phone" id="date">
			</p>
               
			<p>
				<label for="subject">Select Department</label><select name="subject" id="subject">
					<option value="0">Pediatric Clinic</option>
					<option value="1">Diagnosis Clinic</option>
					<option value="2">Cardiac Clinic</option>
					<option value="3">Medical Pharmacy</option>
					<option value="3">Family Doctor</option>
					<option value="3">Rehabilitation Therapy</option>
					<option value="3">Laryngological Clinic</option>

				</select>
			</p>
             <p>
				<label for="name">Appointment Date</label><input name="appo_date" id="datepickerfrom">
			</p>
             <p>
				<label for="name">Appointment Time</label>
                Morning<input type="radio" id="appo_time" name="appo_time"><br>
                Day<input type="radio" id="appo_time" name="appo_time">

			</p>
            <p>
				<label for="name">Date Of Birth</label><input name="date_of_birth" id="date_of_birth">
			</p>
             <p>
				<label for="name"> Sex </label>
                Male<input type="radio" id="gender" name="gender"><br>
                Female<input type="radio" id="gender" name="gender">
                Children<input type="radio" id="gender" name="gender">
			</p>
           
			<p>
				<label for="message">Message</label><textarea name="message" id="message" rows="5" cols="20"></textarea>
			</p>
            
            
            
			<p><button type="submit" name="submit"  id="submit"  value="Send Message">Send Message</button></p>		
		</form>
        <div class="cap_status"></div>
        
	</article>
	
     
	
   
	<aside>
		<section>
			<?php echo $settings['facebook_likes'] ?>
		</section>
	</aside>
    </div>
</section>
<!-- date js -->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />


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
		 email: {
		required: true,
		
		},
		 phone: {
		required: true,
		number: true
		
		},
		 appo_date: {
		required: true,
		
		},
		 appo_time: {
		required: true,
		
		},
		 date_of_birth: {
		required: true,
		
		},
		 gender: {
		required: true,
		
		},
           
        },
		
        
        submitHandler: function(form) {
            form.submit();
        }
    });

		

  });
  
  	 
jQuery(function() {
jQuery( "#datepickerfrom" ).datepicker();
});

 
  
  </script>      

