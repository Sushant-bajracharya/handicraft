<?php 
    $tablename  =   $this->config->item('tbl_settings');
    $settings   =   $this->crud_model->get_single_record($tablename);
    
    $page_info  =   $this->session->userdata('pagecontactinfo');
    $page_info  =   unserialize($page_info);
?>
<section class="content blog about-us">
<div class="container">
<div class="row">
<div class="col-md-12 inner-page">
	<div class="top"><h1><?php echo $news['title'] ?></h1>
	<p class="post-meta"><?php echo date("F d, Y", strtotime($news['created_at'])) ?></p></div>
    <div class="col-md-8 col-sm-8 left">
			<p><img src="<?php echo site_url() ?>uploads/<?php echo $news['image'] ?>" alt="" class="img-responsive"></p>
			
            <?php echo $news['long_desc'] ?>
				
	</div>
    
	<div class="col-md-4 col-sm-4 right">
			<!--<h3 class="news"><span>News</span></h3>-->
           <!--<ul class="news-list">
                <?php foreach($other_news as $blog_news): ?>
				   <li><span class="glyphicon glyphicon-arrow-right"></span><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $blog_news['blog_id'] ?>"><?php echo $blog_news['title'] ?></a></li>
                <?php endforeach; ?>
			</ul>-->
 
 
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
			$subject='Contact from O12 Bar And Restruents';
            $message= "Reservation information"."\r\n"."Date:".$date."\r\n"."Time:".$time."\r\n"."Number Of Person:".$person."\r\n"."Personal information". "Full Name:".$name."\r\n"."Email:".$email."\r\n"."Phone:".$mobile."\r\n"."Message:".$message;
			
			
			if(mail($to,$subject,$message))
			{?>
				<div style="margin-bottom:20px; color:#F00">Your Message Has Been Successfully Send.</div> 
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
       
            
        <!--<a data-toggle="modal" href="#myModal" class="btn btn-primary pink">Reservation</a>-->
      
     <!--<div id="myModal" class="modal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content">
      
        <form action="" method="post" id="register-form" class="no-bg">
         
            <div class="modal-body">
            
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                     <h4 class="modal-title">Reservation information</h4>
                </div>
                <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputName">Date</label>
                    <input type="text" id="" name="date" class="form-control">
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputName">Time</label>
                    <input type="text" id="time" name="time" class="form-control">
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputParty">Number of persons</label>
                    <input type="text" id="no_of_person"  name="no_of_person" class="form-control">
                  </div><br>
                   <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                     <h4 class="modal-title">Personal information</h4>
                </div>
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputName">Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputEmail">Email</label>
                    <input type="email" id="email" name="txtemail" class="form-control">
                  </div>
                  
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputDate">Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control hasDatepicker">
                  </div>
                   
                  <br />
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputTable">Message</label>
                    <textarea  name="message" class="form-control"></textarea>
                  </div>
                  
                  <div class="form-group col-md-6 col-sm-6">
                <img src="<?php echo site_url()   ?>phpcaptcha/captcha.php"/>
				<label for="security_code">Security Code</label><input name="captcha" maxlength="6" size="6" id="security_code">
                
			</div>
                
            </div>
            <div class="modal-footer">
 			<button type="submit" name="submit" class="btn btn-primary pink">Make a Reservation</button>

            </div>
            </form>
          
        </div>
    </div>
    </div>-->
          
            
            
            
          
            
   <a href="http://o12bar.com/news/newsdetail/8" class="special"><img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/specialoffer.gif" alt="" /></a>  

<?php echo $settings['facebook_likes'] ?>

            
            </div>
    </div>
</div>		
</div> 
</section>