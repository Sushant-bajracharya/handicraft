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
    
      
<section class="about-us">

<div class="container">
<div class="row">
<h2>Restaurant</h2>
                 
            <?php foreach($products as $product): ?>
                  <div class="row">
                  <div class="col-md-5 leftimg">
                  <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h3>
                  <p>Vivamus gravida, ante sed sagittis tempor, neque massa tristique sem, nec tincidunt magna velit nec nulla. Maecenas iaculis sollicitudin ipsum, vel aliquet erat. Proin fermentum lacinia vestibulum. Fusce vulputate sapien a urna gravida, ac imperdiet turpis condimentum. Nam rutrum eleifend ligula a suscipit. Mauris in erat in mauris volutpat malesuada nec at lacus. Nullam elementum neque leo, eu congue diam fringilla in. Curabitur consequat, velit vitae laoreet auctor, velit risus convallis neque, vel porta nibh neque non risus. Morbi imperdiet dui eu vehicula eleifend. </p>

            
			 <p>Vivamus gravida, ante sed sagittis tempor, neque massa tristique sem, nec tincidunt magna velit nec nulla. Maecenas iaculis sollicitudin ipsum, vel aliquet erat. Proin fermentum lacinia vestibulum. Fusce vulputate sapien a urna gravida, ac imperdiet turpis condimentum. Nam rutrum eleifend ligula a suscipit. Mauris in erat in mauris volutpat malesuada nec at lacus. Nullam elementum neque leo, eu congue diam fringilla in. Curabitur consequat, velit vitae laoreet auctor, velit risus convallis neque, vel porta nibh neque non risus. Morbi imperdiet dui eu vehicula eleifend. </p>

            
                  
                        </div>
                        <div class="col-md-7">
                       <img src="../../../../css/palagya/images/bar-picture.png" class="image-responsive" />

            
			 
					</div>
                     <?php endforeach; ?> 
                  </row>
           
        </div>
	
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
  