
 <style>
		html, body {
			font: normal 11px Tahoma;
			color: #333;
		}
		
		a {
			outline: none;	
		}
		
		div#wrap {
			width: 500px;
			margin: 50px auto;	
		}

		img {
			/*border: 1px solid #CCC;*/
			padding: 2px;	
			margin: 10px 5px 10px 0;
		}
	</style>     
      
<section class="container products">
<div class="row">
<div class="col-md-12 inner-page">
	 
  <div>
            <?php foreach($products as $product): ?>
                  <div class="row">
                  <div class="col-md-5 leftimg">
                   <?php if($product['image']) {?>
                        
                        <a class="fancybox" href="<?php echo site_url() ?>uploads/<?php echo $product['image'] ?>">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/timthumb/timthumb.php?src=<?php echo site_url() ?>uploads/<?php echo $product['image'] ?>&h=300&w=500&a=tl&q=100" alt=""> </a>
                       
                        <?php }?>
                        </div>
                        <div class="col-md-7">
                        <span class="productName"><?php echo $product['product_name'] ?><br>
                        <span class="price"><strong><?php echo '$' . number_format($product['product_price'], 2, ",", "") ?></strong></span> </span> 
                     <span class="pstyle"><?php echo $product['product_description'] ?></span>
                     <div id="trigger">
          		<h1> <a href="<?php echo site_url() ?>room/detail/<?php echo $product['product_id'] ?>"  >Order Now</a></h1>
        	</div>
           

            
			 
					</div>
                     <?php endforeach; ?> 
                  </row>
           
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
  