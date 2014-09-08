<?php 
    $tablename  =   $this->config->item('tbl_settings');
    $settings   =   $this->crud_model->get_single_record($tablename);
    
    $page_info  =   $this->session->userdata('pagecontactinfo');
    $page_info  =   unserialize($page_info);
?>
<section class="content contact products">
<div class="inner-page">
	<article class="main">
		<h2>Order Product: <?php echo $product_detail['product_name'] ?></h2>
		<p>Fill up mandatory fields in the form below and send to order above product.</p>
		<form method="post" class="order-form" onsubmit="javascript:submit_order();">
			<p class="half">
				<label for="name">Name</label><input name="name" id="name">
			</p>
			<p class="half">
				<label for="email">E-mail</label><input name="email" id="email">
			</p>
            <p>
				<label for="phone">Phone</label><input name="phone" id="phone">
			</p>
            <p>
				<label for="qty">Quantity</label><input name="qty" id="qty">
			</p>
			<p>
				<label for="message">Message</label><textarea name="message" id="message" rows="5" cols="20"></textarea>
			</p>
            
            <p class="half">
                <?php echo $captcha['image']; ?>
				<label for="security_code">Security Code</label><input name="security_code" id="security_code">
			</p>
                
			<p><button name="send" type="submit">Send message</button></p>
		</form>
	</article>
	<aside>
		<section>
       
			<?php echo $settings['facebook_likes'] ?>
		</section>
	</aside>
    </div>
</section>
<script type="text/javascript">
    function submit_order()
    {
        var name        =   jQuery('#name').val();
        var email       =   jQuery('#email').val();
        var phone       =   jQuery('#phone').val();
        var qty         =   jQuery('#qty').val();
        var message     =   jQuery('#message').val();
        var captcha     =   jQuery('#security_code').val();
        
        var baseurl     =   '<?php echo site_url() ?>';
        
        if(!name || name.length == 0) {
            alert("Your Name is required field.");
            return false;
        }
        else if(!email || email.length == 0) {
            alert("Email is required field.");
            return false;
        }
        else if(!qty || qty == 0) {
            alert("Quantity is required field.");
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
        
        jQuery.post(baseurl + "ptwfront/orderproduct/sendemail", {name:name,email:email,phone:phone,qty:qty,message:message,captcha:captcha}, function (data)
        {
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
                jQuery('#qty').val('');
                jQuery('#message').val('');
                jQuery('#captcha').val('');
                
                alert(server_response[1]);
            }
            else {
                alert("No reply from server.");
            }
        });
    }
</script>