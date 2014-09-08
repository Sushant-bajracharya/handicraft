    
    
<div class="clear"></div>
<section class="about-us">

<div class="container">

<div class="row lefting">

             <h2>About Us </h2>     
          
                  <div class="row">
                  <div class="col-md-5 leftimg">
                 
                  <p>If you've been to one of our restaurants, you've seen - and tasted - what keeps our customers coming back for more. Big freshly baked bagels, delicious My Favorite Muffin® cake-like muffins, and gourmet Brewster's® coffees make us hard to resist! Stop in today and check us out! If you've been to one of our restaurants, you've seen - and tasted - what keeps our customers coming back for more. Big freshly baked bagels, delicious My Favorite Muffin® cake-like muffins, and gourmet Brewster's® coffees make us hard to resist! Stop in today and check us out! If you've been to one of our restaurants, you've seen - and tasted - what keeps our customers coming back for more. Big freshly baked bagels, delicious My Favorite Muffin® cake-like muffins, and gourmet Brewster's® coffees make us hard to resist! Stop in today and check us out! </p>

            
			 <p>If you've been to one of our restaurants, you've seen - and tasted - what keeps our customers coming back for more. Big freshly baked bagels, delicious My Favorite Muffin® cake-like muffins, and gourmet Brewster's® coffees make us hard to resist! Stop in today and check us out! </p>

            
                  
                        </div>
                        <div class="col-md-7 righting">
                        <img class="img-responsive home" src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/pica.png" alt="kwality" />
                      
<p>Stop in today and check us out! If you've been to one of our restaurants, you've seen - and tasted - what keeps our customers coming back for more. Big freshly baked bagels, delicious My Favorite Muffin® cake-like muffins, and gourmet Brewster's® coffees make us hard to resist! Stop in today and check us out! If you've been to one of our restaurants, you've seen - and tasted - what keeps our customers coming back for more. Big freshly baked bagels, delicious My Favorite Muffin® cake-like muffins, and gourmet Brewster's® coffees make us hard to resist! Stop in today and check us out!</p>
            
			 
					</div>
                 
                  </row>
           
        </div>
	
	</div>
	
    </div>
    </div>
 </section>
 <div class="clear"></div>
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
  