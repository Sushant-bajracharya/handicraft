<style>
#gallery_01 img {
	border: 2px solid white;
}
.active img {
	border: 2px solid #333 !important;
}
</style>
<section class="content products">
<section class="gallery">
<div class="container">
<div class="row">
<div class="inner-page">

	<article class="product">
    <div class="col-md-6 col-sm-6">
       <p class="product-img"><img src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image'] ?>" alt="" id="img_01" data-zoom-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image'] ?>">
       
       <div id="gal1"> 
    <?php if($product_detail['image']){   ?>
    <a href="" data-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image'] ?> " data-zoom-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image'] ?>" > <img id="img_01" src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image'] ?>"   height="95" width="99"/> </a> 
    <?php }?>
    <?php if($product_detail['image1']){   ?>
    <a href="" data-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image1'] ?> " data-zoom-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image1'] ?>" > <img id="img_01" src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image1'] ?>"   height="95" width="98"/> </a> 
    <?php }?>
    <?php if($product_detail['image2']){   ?>
    <a href="" data-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image2'] ?> " data-zoom-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image2'] ?>" > <img id="img_01" src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image2'] ?>"   height="95" width="98"/> </a> 
    <?php }?>
    <?php if($product_detail['image3']){   ?>
    <a href="" data-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image3'] ?> " data-zoom-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image3'] ?>" > <img id="img_01" src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image3'] ?>"   height="95" width="98"/> </a> 
    <?php }?>
    
    </div>
       </p>
     </div>
    <div class="col-md-6 col-sm-6">
    <h1><?php echo $product_detail['product_name'] ?></h1>
    <div id="trigger">
          		<h1><a href="#" rel="popuprel3" class="popup">Order Now</a></h1>
        	</div>
     <div class="popupbox3" id="popuprel3">
          <div id="intabdiv3">
            <h1><?php echo $product_detail['product_name'] ?></h1>
            <?php  
		
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
		  $country=$_POST['country'];
		  $product=$product_detail['product_name'];
			 $sql="select * from ptw_settings";
	      $res=mysql_query($sql);
	     $data=mysql_fetch_assoc($res);
	     $admin_email = $data['admin_email'];
			
			
			$to=$admin_email;
			
			$subject='Tour Package Reservation From Palagya';
            $message= "Tour Package:".$product."\r\n"."Personal Detail:"."\r\n"."Name:".$name."\r\n"."Email:".$email."\r\n"."Phone:".$phone."\r\n"."Address:".$address."\r\n"."Country:".$country;
			$header=$email;
			if(mail($to,$subject,$message,$header))
			{ }
			else
			{
				echo "error";
			}
		}
		
		
			
			?>
           
            <form class="register" action="" method="post" id="register-form">
              <h3>Room Reservation</h3>
              <div id="column" class="pop-style">
                <div>
                  <label>Full Name:</label>
                  <input type="text" name="name" id="name"  />
                </div>
                <div>
                  <label>Email:</label>
                  <input type="email"  name="email" id="email" />
                </div>
                
                <div>
                  <label>Address:</label>
                  <input type="text"  name="address" id="address" />
                </div>
                <div>
                  <label>Phone:</label>
                  <input type="text" name="phone" id="phone" />
                </div>
                <div>
                  <label>Country:</label>
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
               
                <button type="submit" name="submit" id="submit" value="submit">Book Tour Package</button>
              </div>
            </form>
           
          </div>
        </div>

			 <div id="fade"></div>
             <p class="price">From <span><?php echo number_format($product_detail['product_price'], 2, ",", "") ?></span><span class="currency">$</span></p>


		<div class="descr">
			<h2>Product description</h2>
			<p><?php echo $product_detail['product_description'] ?></p>
		</div>  
        </div>    
        </article>
        <div class="col-md-12 col-sm-12">
         <section class="columns popular-objects">
		<h2><span>Other Products</span></h2>
        <?php foreach($other_products as $product): ?>
                <div class="col-md-2 col-sm-3">
        			<div class="img">
                        <a href="<?php echo site_url() ?>tour_package/detail/<?php echo $product['product_id'] ?>">
                            <img src="<?php echo base_url();?>assets/timthumb/timthumb.php?src=<?php echo site_url() ?>uploads/<?php echo $product['image'] ?>&h=120&w=150&a=tl&q100=" alt="">
                        </a>
                    </div>
                    <a href="#"><?php echo $product['product_name'] ?></a><br>
                    <span class="price"><strong><?php echo '$' . number_format($product['product_price'], 2, ",", "") ?></strong></span>
        		</div>
        <?php endforeach; ?> 
	</section>
        </div>
      </div></div>
      </div>
 </section>
 </section>
  
  