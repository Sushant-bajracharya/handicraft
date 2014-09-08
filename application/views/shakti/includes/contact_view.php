
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
<section class="container gallery">
<div class="row">
<div class="inner-page">
<div class="col-md-8 col-sm-8">
  <?php
	session_start();
	$cap = 'notEq';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['captcha'] == $_SESSION['cap_code']) {
        // Captcha verification is Correct. Do something here!
        $cap = 'Eq';
		
		if(isset($_POST['submit'])){
			
		
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $services=$_POST['subject'];
            $comment=$_POST['message'];
            $sql="select * from ptw_settings";
		   $res=mysql_query($sql);
		   $data=mysql_fetch_assoc($res);
		 $admin_email = $data['admin_email'];
            $subject='Contact From Shakti Food Martin Ice Cream';
            $message= "FULL NAME:".$name."\r\n"."EMAIL:".$email."\r\n"."PHONE:".$phone."\r\n"."SERVICES:".$services."\r\n"."MESSAGE:".$comment;
           
			$to= $admin_email;
            if(mail($to,$subject,$message))
            {
                       echo '<div class="mail_send"> Thank You For Your Feedback!</div>';

         }
            else
            {
			echo '<div class="mail_send">Error Sending!</div>';
            }
            
            }		
		 //if ($this->input->post('submit')) echo '<div id="form-submit-alert">Your Massage Has Been Successfully Send</div>';
    } else {
        // Captcha verification is wrong. Take other action
        $cap = '';
		
	  echo '<div style="color:#F00" id="form-submit-alert">Your Verification is not correct.</div>'; 
    }
}
?>     
	<article class="main"  id="form">
		 <h1 class="heading-title">Get in touch with us</h1>
		
		<form method="post" class="contact-form"  id="register-form" action="" >
			<p class="half">
				<label for="name">Name</label><input name="name" id="name"  >
			</p>
			<p class="half">
				<label for="email">E-mail</label><input type="email" name="email" id="email">
			</p>
            <p>
				<label for="name">Phone</label><input name="phone" id="phone">
			</p>
               
			<p>
				<label for="subject">Topic</label><select name="subject" id="subject">
					<option value="General Inquery" >General Inquery</option>
					<option value="Dealership Request" >Dealership Request</option>
					
				</select>
			</p>
			<p>
				<label for="message">Message</label><textarea name="message" id="message" rows="5" cols="20"></textarea>
			</p>
            
            <div class="cap-tcha">
                <img src="<?php echo site_url()   ?>phpcaptcha/captcha.php"/>
				<label for="security_code">Security Code</label><input name="captcha" maxlength="6" size="6" id="security_code">
                
			</div>
            <br />
			<div class="sub-btn"><button type="submit" name="submit"  id="submit"  value="Send Message">Send Message</button></div>		
		</form>
        <div class="cap_status"></div>
        
	</article>
   </div>
   <div class="col-md-4 col-sm-4 side-bar">
   <?php echo $settings['facebook_likes'] ?>
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
			captcha:"required"
            
        },
		
        submitHandler: function(form) {
            form.submit();
        }
    });
	 

  });
 
  
  </script>
