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

    
		 <h1 class="heading-title">Contact Us</h1>
         <div class="col-md-8 col-sm-8 left">
         <?php if($page_info !== false):?>
        <p class="contact-info"><?php echo $page_info['name']; ?>
		<?php if(!empty($page_info['location']['street'])): ?>	
            <?php echo $page_info['location']['street'] ?>, <br>
        <?php endif; ?>
          <?php echo isset ($page_info['location']['city'])? $page_info['location']['city']: "N/A" ?>, <?php echo isset($page_info['location']['country'])? $page_info['location']['country']: "N/A" ?><br>
          Phone: <?php echo isset($page_info['phone'])? $page_info['phone']: "N/A"; ?><br>
         
         </p>
          <?php endif; ?>
		<article class="main"  id="form">
       
		<h2>Make a Reservation</h2>
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
        <?php if(isset($_POST['submit'])){ ?>
            <form method="post" class="contact-form"  id="register-form" action="" >
      
            <h3 class="personal">Personal Information</h3>
			<div class="form-group col-md-6 col-sm-6 no-left">
				<label for="name">Full Name</label>
                <input type="text" class="form-control" name="name" id="name"  >
			</div>
			<div class="form-group col-md-6 col-sm-6 no-right">
				<label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email">
			</div>
             <div class="form-group col-md-6 col-sm-6 no-left">
				<label>Address</label>
                 <input type="text" class="form-control" name="address" id="address">
			</div>
            <div  class="form-group col-md-6 col-sm-6 no-right">
            	<label>Country</label>
                <select class="form-control" name="country" id="country">
					<option value="0" selected="selected">PLEASE SELECT</option>
					<option value="AF">Afghanistan</option>
					<option value="AL">Albania</option>
					<option value="DZ">Algeria</option>
					<option value="AO">Angola</option>
					<option value="AR">Argentina</option>
					<option value="AM">Armenia</option>
					<option value="AU">Australia</option>
					<option value="AT">Austria</option>
					<option value="AZ">Azerbaijan</option>
					<option value="BH">Bahrain</option>
					<option value="BD">Bangladesh</option>
					<option value="BY">Belarus</option>
					<option value="BE">Belgium</option>
					<option value="BZ">Belize</option>
					<option value="BJ">Benin</option>
					<option value="BM">Bermuda</option>
					<option value="BT">Bhutan</option>
					<option value="BO">Bolivia</option>
					<option value="BA">Bosnia and Herzegovina</option>
					<option value="BW">Botswana</option>
					<option value="BR">Brazil</option>
					<option value="BN">Brunei</option>
					<option value="BG">Bulgaria</option>
					<option value="BF">Burkina Faso</option>
					<option value="BI">Burundi</option>
					<option value="KH">Cambodia</option>
					<option value="CM">Cameroon</option>
					<option value="CA">Canada</option>
					<option value="CV">Cape Verde Islands</option>
					<option value="CF">Central African Republic</option>
					<option value="TD">Chad</option>
					<option value="CL">Chile</option>
					<option value="CN">China</option>
					<option value="CO">Colombia</option>
					<option value="KM">Comoros</option>
					<option value="CD">Congo, Democratic Rep of</option>
					<option value="CG">Congo, Rep.of (Brazzaville)</option>
					<option value="CR">Costa Rica</option>
					<option value="CI">Cote d'Ivoire</option>
					<option value="HR">Croatia</option>
					<option value="CU">Cuba</option>
					<option value="CY">Cyprus</option>
					<option value="CZ">Czech Republic</option>
					<option value="DK">Denmark</option>
					<option value="DJ">Djibouti</option>
					<option value="DO">Dominican Republic</option>
					<option value="EC">Ecuador</option>
					<option value="EG">Egypt</option>
					<option value="SV">El Salvador</option>
					<option value="GQ">Equatorial Guinea</option>
					<option value="ER">Eritrea</option>
					<option value="EE">Estonia</option>
					<option value="ET">Ethiopia</option>
					<option value="FJ">Fiji</option>
					<option value="FI">Finland</option>
					<option value="FR">France</option>
					<option value="GF">French Guiana</option>
					<option value="PF">French Polynesia</option>
					<option value="GA">Gabon</option>
					<option value="GM">Gambia, The</option>
					<option value="GE">Georgia</option>
					<option value="DE">Germany</option>
					<option value="GH">Ghana</option>
					<option value="GR">Greece</option>
					<option value="GL">Greenland</option>
					<option value="GD">Grenada</option>
					<option value="GU">Guam</option>
					<option value="GT">Guatemala</option>
					<option value="GN">Guinea</option>
					<option value="GW">Guinea-Bissau</option>
					<option value="GY">Guyana</option>
					<option value="HT">Haiti</option>
					<option value="HN">Honduras</option>
					<option value="HK">Hong Kong</option>
					<option value="HU">Hungary</option>
					<option value="IS">Iceland</option>
					<option value="IN">India</option>
					<option value="ID">Indonesia</option>
					<option value="IR">Iran</option>
					<option value="IQ">Iraq</option>
					<option value="IE">Ireland</option>
					<option value="IL">Israel</option>
					<option value="IT">Italy</option>
					<option value="JM">Jamaica</option>
					<option value="JP">Japan</option>
					<option value="JO">Jordan</option>
					<option value="KZ">Kazakhstan</option>
					<option value="KE">Kenya</option>
					<option value="KP">Korea, North</option>
					<option value="KR">Korea, South</option>
					<option value="KW">Kuwait</option>
					<option value="KG">Kyrgyzstan</option>
					<option value="LA">Laos, People Democratic Rep.</option>
					<option value="LV">Latvia</option>
					<option value="LB">Lebanon</option>
					<option value="LS">Lesotho</option>
					<option value="LR">Liberia</option>
					<option value="LY">Libyan Arab Jamahiriya</option>
					<option value="LI">Liechtenstein</option>
					<option value="LT">Lithuania</option>
					<option value="LU">Luxembourg</option>
					<option value="MO">Macau, China</option>
					<option value="MK">Macedonia (FYROM)</option>
					<option value="MG">Madagascar</option>
					<option value="MW">Malawi</option>
					<option value="MY">Malaysia</option>
					<option value="MV">Maldives</option>
					<option value="ML">Mali</option>
					<option value="MT">Malta</option>
					<option value="MR">Mauritania</option>
					<option value="MU">Mauritius</option>
					<option value="MX">Mexico</option>
					<option value="FM">Micronesia</option>
					<option value="MD">Moldova</option>
					<option value="MC">Monaco</option>
					<option value="MN">Mongolia</option>
					<option value="MA">Morocco</option>
					<option value="MZ">Mozambique</option>
					<option value="MM">Myanmar (Burma)</option>
					<option value="NA">Namibia</option>
					<option value="NP">Nepal</option>
					<option value="NL">Netherlands</option>
					<option value="AN">Netherlands Antilles</option>
					<option value="NC">New Caledonia</option>
					<option value="NZ">New Zealand</option>
					<option value="NI">Nicaragua</option>
					<option value="NE">Niger</option>
					<option value="NG">Nigeria</option>
					<option value="NO">Norway</option>
					<option value="OM">Oman</option>
					<option value="PK">Pakistan</option>
					<option value="PW">Palau</option>
					<option value="PA">Panama</option>
					<option value="PG">Papua New Guinea</option>
					<option value="PY">Paraguay</option>
					<option value="PE">Peru</option>
					<option value="PH">Philippines</option>
					<option value="PL">Poland</option>
					<option value="PT">Portugal</option>
					<option value="PR">Puerto Rico</option>
					<option value="QA">Qatar</option>
					<option value="RE">Reunion</option>
					<option value="RO">Romania</option>
					<option value="RU">Russian Federation</option>
					<option value="RW">Rwanda</option>
					<option value="WS">Samoa</option>
					<option value="SM">San Marino</option>
					<option value="SA">Saudi Arabia</option>
					<option value="SN">Senegal</option>
					<option value="CS">Serbia Montenegro (SRBIJA)</option>
					<option value="SC">Seychelles</option>
					<option value="SL">Sierra Leone</option>
					<option value="SG">Singapore</option>
					<option value="SK">Slovakia</option>
					<option value="SI">Slovenia</option>
					<option value="SB">Solomon Is.</option>
					<option value="SO">Somalia</option>
					<option value="ZA">South Africa</option>
					<option value="ES">Spain</option>
					<option value="LK">Sri Lanka</option>
					<option value="SD">Sudan</option>
					<option value="SR">Surinam</option>
					<option value="SZ">Swaziland</option>
					<option value="SE">Sweden</option>
					<option value="CH">Switzerland</option>
					<option value="SY">Syrian Arab Republic</option>
					<option value="TW">Taiwan</option>
					<option value="TJ">Tajikistan</option>
					<option value="TZ">Tanzania</option>
					<option value="TH">Thailand</option>
					<option value="TG">Togo</option>
					<option value="TO">Tonga</option>
					<option value="TT">Trinidad</option>
					<option value="TN">Tunisia</option>
					<option value="TR">Turkey</option>
					<option value="UG">Uganda</option>
					<option value="UA">Ukraine</option>
					<option value="AE">United Arab Emirates</option>
					<option value="GB">United Kingdom</option>
					<option value="US">United States of America</option>
					<option value="UY">Uruguay</option>
					<option value="UZ">Uzbekistan</option>
					<option value="VE">Venezuela</option>
					<option value="VN">Vietnam</option>
					<option value="YE">Yemen</option>
					<option value="ZM">Zambia</option>
					<option value="ZW">Zimbabwe</option>
                </select>
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
        <?php } ?>
            <form role="form" method="post" action=""  <?php  if(isset($_POST['submit'])){?>style="display:none"<?php }    ?> id="register-form">
            	<div class="row">
                	<div class="col-md-6 col-sm-6">
                    	<div class="form-group">
                        	<input type="text" class="form-control" name="check_in" value="Check in" id="datepickerfrom1" required="required" />
                        </div>
                    </div>
                    
                	<div class="col-md-6 col-sm-6">
                    	<div class="form-group">
                        	<input type="text" class="form-control" name="check_out" value="Check Out" id="datepickerfrom2" required="required" />
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-sm-12">
                    	<div class="form-group">
                        	<select class="form-control" name="room">
                            	<option>Standard Double Room</option>
                            	<option>Standard Double Room</option>
                            	<option>Standard Double Room</option>
                            	<option>Standard Double Room</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                    	<div class="form-group">
                        	<select class="form-control" name="adult">
                            	<option>Adults</option>
                            	<option>1</option>
                            	<option>2</option>
                            	<option>3</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                    	<div class="form-group">
                        	<select class="form-control" name="child">
                            	<option>Children</option>
                            	<option>1</option>
                            	<option>2</option>
                            	<option>3</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-sm-12">
                    	<div class="form-group">
                        	<input type="text" class="form-control" placeholder="No. of Room"  name="no_of_room"/>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                    	<div class="form-group"></div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                    	<div class="form-group">
                        	<button type="submit" name="submit" class="btn btn-warning form-control">Book Room</button>
                        </div>
                    </div>
                    
                    
                </div>
            </form>

		
        </article>
         <?php
		
		?>
        </div>
        
      
    <div class="col-md-4 col-sm-4">    
        
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
