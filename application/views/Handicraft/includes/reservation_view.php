<?php 
    $tablename  =   $this->config->item('tbl_settings');
    $settings   =   $this->crud_model->get_single_record($tablename);
    
    $page_info  =   $this->session->userdata('pagecontactinfo');
    $page_info  =   unserialize($page_info);
?>
<style type="text/css">
.form .field .error {
border:none;
}
    .label {width:100px;text-align:right;float:left;padding-right:10px;font-weight:bold;}
    #register-form label.error, .output {color:#FB3A3A;font-weight:bold; border:#000000 thin;}
	
	
	
 </style>

<section class="content blog about-us">
<div class="container">
<div class="row">
<div class="col-md-12 inner-page">

    
		 <h1 class="heading-title">Reservation</h1>
         <div class="col-md-8 col-sm-8 left">
         
		<article class="main"  id="form">
         
	
    <?php
 
 	session_start();
	$cap = 'notEq';
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['captcha'] == $_SESSION['cap_code']) {
        // Captcha verification is Correct. Do something here!
        $cap = 'Eq';
		if(isset($_POST['submit'])){
			$date=$_POST['date'];
			$time=$_POST['time'];
			$name=$_POST['name'];
			$email=$_POST['txtemail'];
			$mobile=$_POST['phone'];
			$person=$_POST['no_of_person'];
			$message=$_POST['message'];
			
			 $sql="select * from ptw_settings";
	       $res=mysql_query($sql);
	       $data=mysql_fetch_assoc($res);
	       $admin_email = $data['admin_email'];
		   $to= $admin_email;
			$subject='Reservation
			 from O12 Bar And Restruents';
            $message= "Reservation information"."\r\n"."Date:".$date."\r\n"."Time:".$time."\r\n"."Number Of Person:".$person."\r\n"."Personal information". "Full Name:".$name."\r\n"."Email:".$email."\r\n"."Phone:".$mobile."\r\n"."Message:".$message;
			
			
			if(mail($to,$subject,$message))
			{?>
				<div class="success">Your Message Has Been Successfully Send.</div> 
			<?php }
			else
				echo "error";
			}
		}
		
		else
		{
		  // Captcha verification is wrong. Take other action
        $cap = '';
		echo "<div class='xcx'>Your Varification Is Not Correct.Try again</div>";	
			
		}
	}
		?>
		<form method="post" class="contact-form"  id="register-form" action="" >
        <div class="form-group col-md-4 col-sm-4 no-p">
				<label for="email">Date</label>
                <input type="text" class="form-control" readonly="readonly" name="date" id="datepickerfrom1">
        </div>
        <div class="form-group col-md-4 col-sm-4 no-p">
				<label for="name">Time</label>
                <input type="text" class="form-control" name="time" id="time">
        </div>
        <div class="form-group col-md-4 col-sm-4 no-p">
				<label for="name">Number Of Person</label>
                <input type="text" class="form-control" name="no_of_person" id="no_of_person"  >
       </div>  
      		
            <div class="form-group col-md-6 col-sm-6 no-p">
				<label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name"  >
            </div>
            <div class="form-group col-md-6 col-sm-6 no-p">
				<label for="email">E-mail</label>
                <input type="email" class="form-control" name="txtemail" id="email">
             </div>
             <div class="form-group col-md-6 col-sm-6 no-p">
				<label for="name">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">
            </div>   
			<div class="form-group no-p">
				<label for="message">Message</label>
                <textarea class="form-control bg-white" name="message" id="message" rows="5" cols="20"></textarea>
            </div>
           <div class="cap-tcha form-group no-p">
                <img src="<?php echo site_url()   ?>phpcaptcha/captcha.php"/>
				<label for="security_code">Security Code</label>
                <input type="text" class="form-control" name="captcha" maxlength="6" size="6" id="security_code">
                
			</div>
            
			<div class="sub-btn"><button class="btn btn-primary pink" type="submit" name="submit"  id="submit"  value="Send Message">Make a Reservation</button></div>		
		</form>
        </article>
         <?php
		
		?>
        </div>
        
      
    <div class="col-md-4 col-sm-4 right">    
     <!--<h3 class="news"><span>News</span></h3>-->
				<!--<ul class="news-list">
                    <?php 
         $sql="select * from ptw_blog ORDER BY blog_id DESC limit 0,5";
		$res=mysql_query($sql);
		while($data=mysql_fetch_assoc($res))
		{
		
		
		?>
             <li><span class="glyphicon glyphicon-arrow-right"></span><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $data['blog_id'] ?>"><?php echo $data['title'] ?></a></li>        
					
                <?php } ?>   
					  
                    
	</ul>-->  
    
    <a href="http://o12bar.com/news/newsdetail/8" class="special"><img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/specialoffer.gif" alt="" /></a>
       
<?php echo $settings['facebook_likes'] ?>
</div>
    </div>
    </div>
</div>
</section>



