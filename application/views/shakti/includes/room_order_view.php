
      
      
      
<section class="container products">
<div class="row">
<div class="col-md-12 inner-page">
	  <?php
		if(isset($_POST['submit'])){
			echo $product['product_name'] ;
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$company=$_POST['quantity'];
			$comment=$_POST['message'];
			$to='lama.2b@gmail.com';
			$subject='Room Order ';
            $message= "FULL NAME:".$name."\r\n"."EMAIL:".$email."\r\n"."PHONE:".$phone."\r\n"."Quantity:".$quantity."\r\n"."MESSAGE:".$message;
			
			 $header = $email;
			if(mail($to,$subject,$message,$header))
			{?>
				<div style="margin-bottom:20px;">Your Message Has Been Successfully Send.</div> 
			<?php }
			else
			{
				echo "error";
			}
		}
		?>
  <div>
            <?php foreach($products as $product): ?>
                  <article>
                  <div class="leftimg" style="float:left; width:50%; height:400px;  margin-top:20px;">
                   <?php if($product['image']) {?>
                        
                        <div class="fancyDemo">
                        <a rel="group" title="Here is a short caption." href="<?php echo site_url() ?>uploads/<?php echo $product['image'] ?>">
                        <img src="<?php echo base_url();?>assets/timthumb/timthumb.php?src=<?php echo site_url() ?>uploads/<?php echo $product['image'] ?>&h=400&w=400&a=tl&q=100" alt=""> </a>
                        </div>
                        <?php }?>
                        </div>
                        <div class="right" style="float:right; width:50%; height:400px; margin-top:20px;">
                        <span class="productName"><?php echo $product['product_name'] ?><br>
                        <span class="price"><strong><?php echo '$' . number_format($product['product_price'], 2, ",", "") ?></strong></span> </span> 
                     <span class="productName"><?php echo $product['product_description'] ?></span>
                     <div id="trigger">
          		<h1><a href="" rel="popuprel3" class="popup">Order Now</a></h1>
        	</div>
            
           <h1><?php echo $product['product_name'] ?></h1>
             <h1><?php echo $product['product_price'] ?></h1>
            <div class="popupbox3" id="popuprel3">
           <div id="intabdiv3">
            
            <form class="register" action="" method="post" id="register-form">
              <h3>Room Booking</h3>
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
                  <label>phone:</label>
                  <input type="text" name="phone" id="phone" />
                </div>
                <div>
                  <label>Quantity:</label>
                  <input type="text" name="qutanty" id="qutanty" />
                </div>
                <div class="box-full">
                  <label >Message:</label>
                  <textarea name="message" id="message" /></textarea>
                </div>
                <button type="submit" name="submit" id="submit" value="submit">Submit</button>
              </div>
            </form>
           
          </div>
        </div>
			 <div id="fade"></div>
					</div>
                  </article>
            <?php endforeach; ?> 
        </div>
	
	
	</div>
    </div>
 </section>
 <!-- light box js -->
<script type="text/javascript" src="<?php echo site_url() ?>/jquery.fancybox/jquery-1.3.2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.fancyDemo a").fancybox();
		});
	</script> 
    <!-- popup form vallidation js -->
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="http://jquery.bassistance.de/validate/jquery.validate.js"></script>
<script src="http://jquery.bassistance.de/validate/additional-methods.js"></script>
<script>
  
  // When the browser is ready...
  jQuery(function() {
	  
	  jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-z ]+$/i.test(value);
}, "Letters only please");
	  
  
    // Setup form validation on the #register-form element
	
  var validator =  $("#register-form").validate({
    
        // Specify the validation rules
        rules: {
          name: {
		required: true,
		lettersonly: true
		
		},
		phone: {
		required: true,
		number: true
		
		},
		email: {
		required: true
		
		},
		qutanty: {
		required: true,
		number: true
		
		},
		
        },
		
		
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
 
  
  </script>
  