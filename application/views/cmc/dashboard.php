<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CMC-Nepal</title>
<meta name="description" content="Create and update your website instantly using your Facebook business page.">
<meta name="keywords" content="Page2website, Pagetowebsite, Page to Website">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/x-icon" href="<?php echo site_url() ?>css/<?php echo $theme ?>/images/favicon.png" />
<link href="<?php echo site_url() ?>css/<?php echo $theme ?>/bootstrap.min.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>css/<?php echo $theme ?>/jquery.fancybox.css?v=2.1.5" media="screen" /> 

<link href="<?php echo site_url() ?>css/<?php echo $theme ?>/style.css" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo site_url() ?>css/<?php echo $theme ?>/style.css1" rel="stylesheet" type="text/css" media="screen">
<link href="<?php echo site_url() ?>css/<?php echo $theme ?>/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen">
<!--popup form style -->
        <link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>css/style.css" />
       <!--gallery style -->
 
        <!--<link rel="stylesheet" href="<?php echo site_url() ?>css/bagpakk.min.css">-->
	<link rel="stylesheet" href="<?php echo site_url() ?>css/swipebox.css">
<!--  bootraps js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo site_url()?>js/<?php echo $theme ?>/js/bootstrap.min.js"></script>
      <!-- Add jQuery library -->
      
<!--<script type="text/javascript" src="<?php echo site_url() ?>js/<?php echo $theme ?>/fancy/jquery.fancybox.js?v=2.1.5"></script>
-->    <script src="<?php echo site_url()?>js/<?php echo $theme ?>/owl/owl.carousel.js"></script> 
     <!-- zoom js -->
<script type="text/javascript" src="<?php echo site_url() ?>js/<?php echo $theme ?>/js/zoom_js/jquery.elevatezoom.js"></script>
</head>
<?php 
        $this->load->view($theme."/includes/header"); 
        
        $this->load->view($theme."/includes/".$view); 
    
        $this->load->view($theme . "/includes/footer"); 
    ?>
 

	<script src="<?php echo site_url() ?>js/jquery.swipebox.js"></script>
	<script type="text/javascript">
		;( function( $ ) {

			/* Basic Gallery */
			$( '.swipebox' ).swipebox();
			
			

		} )( jQuery );
	</script> 

<!-- contact and appopintment form validation js -->
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script src="http://jquery.bassistance.de/validate/jquery.validate.js"></script>
<script src="http://jquery.bassistance.de/validate/additional-methods.js"></script>
 <!--popup form js -->
     <script type="text/javascript" src="<?php echo site_url() ;?>/js/custom.js"></script>

<!-- date js -->
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script>

jQuery(function() {
jQuery( "#datepickerfrom" ).datepicker();
});


jQuery(function() {
jQuery( "#datepickerfrom1" ).datepicker();
});

jQuery(function() {
jQuery( "#datepickerfrom2" ).datepicker();
});
</script>
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
         
          phone: {
		required: true,
		number: true
		
		},
		
		    check_in:"required",
			check_out:"required",
			room:"required",
			email:"required",
			
			country:"required",
			adult:"required",
            child:"required",
			no_of_room:"required",
			address:"required"
		
        },
		
        submitHandler: function(form) {
            form.submit();
        }
    });
	 

  });
  jQuery("#img_01").elevateZoom({
	
	    gallery:'gal1',
	    cursor: 'pointer',
	    galleryActiveClass: 'active',
	    imageCrossfade: true,
	    loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'
		}); 
 
  </script>


<!--<script type="text/javascript">
jQuery.noConflict();
		jQuery(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			jQuery('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			jQuery(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			jQuery('#openBtn').click(function(){
	jQuery('#myModal').modal({show:true})
	});
		});
		
		
		
		
	</script>-->
     <script>
	jQuery.noConflict();
    jQuery(document).ready(function() {
      jQuery("#owl-demo").owlCarousel({
        autoPlay: 3000,
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3],
		navigation:true
      });

    });
    </script>


<!--[if lt IE 9]>
		<script type="text/javascript" src="<?php echo site_url() ?>js/<?php echo $theme ?>/js/ie.js"></script>
	<![endif]-->
</body>
</html>