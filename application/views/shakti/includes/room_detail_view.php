
<style type="text/css">
.form .field .error {
border:none;
}
    .label {width:100px;text-align:right;float:left;padding-right:10px;font-weight:bold;}
    #register-form label.error, .output {color:#FB3A3A;font-weight:normal; border:#000000 thin;}
	
	
	
 </style>

<section class="container contact">
<div class="row">
<div class="col-md-12 inner-page">
 
	<article <?php echo ($this->input->post('submit')?'style="display:none"':'');?> class="main"  id="form">
    <h1><Span class="txt-green">Room Type:</Span> <?php echo $product_detail['product_name'];   ?></h1>
    <h1><span class="txt-green">Price:</span> <?php echo $product_detail['product_price'];   ?></h1>
		<h2>Booking Room</h2>
		<form method="post" class="contact-form"  id="register-form"  action="<?php echo site_url() ?>room/book">
			<p class="half">
				<label for="name">Name</label><input name="name" id="name" >
			</p>
			<p class="half">
				<label for="email">E-mail</label><input type="email" name="email" id="email">
			</p>
            
             <p>
				<label for="arrival">Arrival Date</label><input name="arrival" id="datepickerfrom">
			</p>
             <p>
				<label for="departure">Departure Date</label><input name="departure" id="datepickerfrom1">
			</p>
            <p>
				<label for="phone">Phone</label><input name="phone" id="phone">
			</p>
             <p>
				<label for="children">Children</label><select name="children" id="children">
					<option value="0" >1</option>
					<option value="1" >2</option>
                    <option value="0" >3</option>
					<option value="1" >4</option>
                    <option value="0" >5</option>
					<option value="1" >6</option>
					
				</select>
			</p>   
            
             <p>
				<label for="adult">Adult</label><select name="adult" id="adult">
					<option value="0" >1</option>
					<option value="1" >2</option>
                    <option value="0" >3</option>
					<option value="1" >4</option>
                    <option value="0" >5</option>
					<option value="1" >6</option>
					
				</select>
			</p>  
            
             <p>
				<label for="bedroom">Double Bedroom</label><select name="bedroom" id="bedroom">
					<option value="0" >General Inquery</option>
					<option value="1" >Reservation</option>
					
				</select>
			</p>    
               
			
			<p>
				<label for="message">Message</label><textarea name="message" id="message" rows="5" ></textarea>
			</p>
            
          
            
			<div class="sub-btn"><button type="submit" name="submit"  id="submit"  value="Send Message">Send Message</button></div>		
		</form>
        
        
	</article>
   
	
    </div>
    </div>
</section>
 
 
 
