<section class="content contact">
<section class="content contact-info">
<h2>Order Website Now</h2>
    <p>Nullam dictum felis eu pede mollis pretium. </p>
</section>
<section class="contact-box">
  <article class="main">
    
    <form method="post" class="contact-form">
      <p class="half">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
      </p>
      <p class="half">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">
      </p>
      <p>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone">
      </p>
      <p>
        <label for="subject">Topic</label>
        <select id="subject" name="subject" style="opacity: 0;">
          <option value="0">General Inquery</option>
          <option value="1">For Busines Development</option>
          <option value="2">Suggestion</option>
          <option value="3">You're awesome!</option>
        </select>
      </p>
      <p>
        <label for="message">Message</label>
        <textarea name="message" id="message" rows="5" cols="20"></textarea>
      </p>
      <p class="half"> <?php echo $captcha['image']; ?>
        <label for="security_code">Security Code</label>
        <input type="text" name="security_code" id="security_code">
      </p>
      <p>
        <button name="send" type="button"  onclick="javascript:submit_order();">Send Order</button>
      </p>
      <input type="hidden" name="order_pageid" id="order_pageid" value="<?php echo $order_pageid ?>" />
      <input type="hidden" name="order_template" id="order_template" value="<?php echo $order_template ?>" />
    </form>
  </article>
  <aside>
		<section>
			<div class="contact-details">
                <h2>Contact Details</h2>
                <p>Sahabhagita Marga<br />
				New Baneshwore,<br />
				Kathmandu, Nepal</p>
				<p>Phone: +1 9851081507</p>
				<p>E-mail: weresponsive@gmail.com</p>
            </div>
		</section>
	</aside>
    </section>
</section>
<script type="text/javascript">
    function submit_order()
    {
        var name        =   jQuery('#name').val();
        var email       =   jQuery('#email').val();
        var phone       =   jQuery('#phone').val();
        var subject     =   jQuery('#subject').val();
        var message     =   jQuery('#message').val();
        var captcha     =   jQuery('#security_code').val();
        
        var pageid      =   jQuery('#order_pageid').val();
        var template    =   jQuery('#order_template').val();
        
        var baseurl     =   '<?php echo site_url() ?>';
        
        if(!name || name.length == 0) {
            alert("Your Name is required field.");
            return false;
        }
        else if(!email || email.length == 0) {
            alert("Email is required field.");
            return false;
        }
        else if(!subject || subject.length == 0) {
            alert("Subject is required field.");
            return false;
        }
        else if(!message || message.length == 0) {
            alert("Message is required field.");
            return false;
        }
        else if(!captcha || captcha.length == 0) {
            alert("Security code is required field.");
            return false;
        }
        
        jQuery.post(baseurl + "orderwebsite/sendemail", {name:name,email:email,phone:phone,subject:subject,message:message,captcha:captcha, pageid: pageid, template: template}, function (data)
        {
            //alert(data);
            server_response =   data.split(":");
            
            if(server_response[0] === "Error") {
                alert(server_response[1]);
                return false;
            }
            else if(server_response[0] === "Success") {
                //Reset form fields on successful submit
                jQuery('#name').val('');
                jQuery('#email').val('');
                jQuery('#phone').val('');
                jQuery('#subject').val('');
                jQuery('#message').val('');
                jQuery('#security_code').val('');
                
                alert(server_response[1]);
            }
            else {
                alert("No reply from server.");
            }
        });
    }
</script>