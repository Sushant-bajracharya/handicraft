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

    
         <div class="col-md-7 col-sm-7 left">
         
		 <h1 class="heading-title">Contact Us</h1>
        <?php /*?> <?php if($page_info !== false):?>
        <p class="contact-info"><?php echo $page_info['name']; ?>
		<?php if(!empty($page_info['location']['street'])): ?>	
            <?php echo $page_info['location']['street'] ?>, <br>
        <?php endif; ?>
          <?php echo isset ($page_info['location']['city'])? $page_info['location']['city']: "N/A" ?>, <?php echo isset($page_info['location']['country'])? $page_info['location']['country']: "N/A" ?><br>
          Phone: <?php echo isset($page_info['phone'])? $page_info['phone']: "N/A"; ?><br>
         
         </p>
          <?php endif; ?><?php */?>
		<article class="main"  id="form">
       
          <?php
          echo $check=$_POST['check_in']; 
	 echo $out=$_POST['check_out'];
	 echo $room=$_POST['room'];
	 echo $adult=$_POST['adult'];
	 echo $child=$_POST['child']; 
	 echo $no_of_room=$_POST['no_of_room']; 
	 if(isset($_POST['submit-btn'])){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$mobile=$_POST['phone'];
			$country = $_POST['country'];
			$sql="select * from ptw_settings";
	       $res=mysql_query($sql);
	       $data=mysql_fetch_assoc($res);
	       $admin_email = $data['admin_email'];
		   $to= $admin_email;
			$subject='Reservation From Palagya Hotel';
            $message= "Room Reservation Detail:"."\r\n"."Check In Date:".$check."\r\n"."Check Out Date:".$out."\r\n"."Room Type:".$room."\r\n"."Adult:".$adult."\r\n". "Child:".$child."\r\n"."Number Of Room:".$no_of_room."Personal Detail"."\r\n"."Name".$name."\r\n"."Email:".$email."Address:".$address."\r\n"."Contact:".$mobile."\r\n"."Country:".$country;
			
			
			if(mail($to,$subject,$message))
			{?>
				<div style="margin-bottom:20px; color:#063">Your Message Has Been Successfully Send.</div> 
			<?php }
			else
			{
				echo "error";
			} 
		 
	 }
	
       ?>
            <form method="post" class="contact-form"  id="register-form" action="" >
      
            <div class="form-group">
				<label for="name">Full Name</label>
                <input type="text" class="form-control" name="name" id="name"  >
			</div>
            <div class="form-group">
				<label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email">
			</div>
            <div class="form-group">
				<label>Address</label>
                 <input type="text" class="form-control" name="address" id="address">
			</div>
            
            <div class="form-group">
				<label>Contact No.</label>
                <input type="text" class="form-control" name="phone" id="phone">
			</div>
            
            <!--<div class="cap-tcha">
                <img src="<?php echo site_url()   ?>phpcaptcha/captcha.php"/>
				<label for="security_code">Security Code</label><input name="captcha" maxlength="6" size="6" id="security_code">
                
			</div>-->
            <div class="col-md-6 col-sm-6 no-left">
			<button class="btn btn-warning btn-style form-control" type="submit" name="submit-btn"  id="submit"  value="Send Message">Book Now</button>
            </div>
            <div class="clearfix"></div>
		</form>
            

		
        </article>
         <?php
		
		?>
        </div>
        
      
    <div class="col-md-5 col-sm-5">    
       
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1606002.7542594564!2d-103.55426547770344!3d38.169850468506354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1407832960928" width="400" height="410" frameborder="0" style="border:0"></iframe>
        
<?php //echo $settings['facebook_likes'] ?>
	
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
