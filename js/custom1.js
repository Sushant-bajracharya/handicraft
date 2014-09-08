jQuery(document).ready(function() {
						   
// Here we will write a function when link click under class popup				   
jQuery('a.popup').click(function() {
									
									
// Here we will describe a variable popupid which gets the
// rel attribute from the clicked link							
var popupid = jQuery(this).attr('rel');


// Now we need to popup the marked which belongs to the rel attribute
// Suppose the rel attribute of click link is popuprel then here in below code
// #popuprel will fadein
jQuery('#' + popupid).fadeIn();


// append div with id fade into the bottom of body tag
// and we allready styled it in our step 2 : CSS
jQuery('body').append('<div id="fade"></div>');
jQuery('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();


// Now here we need to have our popup box in center of 
// webpage when its fadein. so we add 10px to height and width 
var popuptopmargin = (jQuery('#' + popupid).height() + 10) / 2;
var popupleftmargin = (jQuery('#' + popupid).width() + 10) / 2;


// Then using .css function style our popup box for center allignment
jQuery('#' + popupid).css({
'margin-top' : -popuptopmargin,
'margin-left' : -popupleftmargin
});
});


// Now define one more function which is used to fadeout the 
// fade layer and popup window as soon as we click on fade layer
jQuery('#fade').click(function() {


// Add markup ids of all custom popup box here 						  
jQuery('#fade , #popuprel , #popuprel2 , #popuprel3').fadeOut()
return false;
});
});