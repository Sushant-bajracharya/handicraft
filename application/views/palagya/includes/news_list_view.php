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
		
			<h1>News</h1>
            <div class="col-md-8 col-sm-8 left">
            <?php foreach($news as $blog_news): ?>
        			<article class="post">
        				<h2><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $blog_news['blog_id'] ?>"><?php echo $blog_news['title'] ?></a></h2>
        				<a href="<?php echo site_url() ?>news/newsdetail/<?php echo $blog_news['blog_id'] ?>"><img src="<?php echo site_url() ?>uploads/<?php echo $blog_news['image'] ?>" alt="" class="img-responsive"></a>
        				<p><?php echo $blog_news['short_desc'] ?></p>
        				
        				<p class="more"><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $blog_news['blog_id'] ?>">Read more</a></p>
        			</article>
            <?php endforeach; ?>
            
			<?php echo $this->pagination->create_links(); ?>
            </div>
		
				<div class="col-md-4 col-sm-4 right">
				<h3 class="news"><span>News</span></h3>
				<ul class="news-list">
                    <?php foreach($newsall as $news): ?>
					   <li><span class="glyphicon glyphicon-arrow-right"></span><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $news['blog_id'] ?>"><?php echo $news['title'] ?></a></li>
                    <?php endforeach; ?>
				</ul>
             
                
 <?php
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$address=$_POST['address'];
			$mobile=$_POST['phone'];
			$table=$_POST['table'];
			$message=$_POST['message'];
			
			 $sql="select * from ptw_settings";
	       $res=mysql_query($sql);
	       $data=mysql_fetch_assoc($res);
	       $admin_email = $data['admin_email'];
		   $to= $admin_email;
			$subject='Contact from O12 Bar And Restruents';
            $message= "Party Size:".$party."\r\n"."Date:".$date."\r\n"."Time:".$time."\r\n". "Full Name:".$name."\r\n"."Email:".$email."\r\n"."Address:".$address."\r\n"."Mobile:".$mobile."\r\n"."Table:".$table."\r\n"."Message:".$message;
			
			
			if(mail($to,$subject,$message))
			{?>
				<div style="margin-bottom:20px; color:#F00">Your Message Has Been Successfully Send.</div> 
			<?php }
			else
			{
				echo "error";
			}
		}
		?>
            <form method="post" action="" >
            <h3>Book Table</h3>
            <div class="table">
             <div class="form-group col-md-12 col-sm-12">
            <label>Party Size</label>
            <input type="text" name="party_size" required="required"  <?php  if($_POST['submit1']){ ?>  value=" <?php echo  $party=$_POST['party_size'];?>"<?php }?>></td>
           
            </div>
            <div class="form-group col-md-12 col-sm-12">
           <label>Date</label>
            <input type="text"  name="date" re id="datepickerfrom2"  <?php  if($_POST['submit1']){ ?>  value=" <?php echo  $party=$_POST['date'];?>"<?php }?>  required="required">
         </div>
            
             <div class="form-group col-md-12 col-sm-12">
            <label>Time</label>
            <input type="text" name="time" <?php  if($_POST['submit1']){ ?>  value=" <?php echo  $party=$_POST['time'];?>"<?php }?>  required="required">
            </div>
             <div class="form-group col-md-12 col-sm-12">
          
            <input type="submit" name="submit1" value="Find Table" class="btn btn-primary pink">
            
            
              <?php  if($_POST['submit1']){ ?>
				            <a data-toggle="modal" href="#myModal" class="btn btn-primary pink">Fill The Form</a>

				
				
			<?php }?>
            
            </div>
           </div>
            </form>
            
          
            
     <div id="myModal" class="modal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content">
      
        <form action="" method="post" id="register-form" class="no-bg">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h4 class="modal-title">Table Booking</h4>

            </div>
           <?php if(isset($_POST['submit1'])){
			 echo "Party Size:" .$party=$_POST['party_size']."<br>";
			echo "Date:".$date=$_POST['date']."<br>";
			echo "Time:".$time=$_POST['time']."<br>"; } ?>
            
            <div class="modal-body">
          
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputName">Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputEmail">Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputParty">Address</label>
                    <input type="text" id="address"  name="address" class="form-control">
                  </div>
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputDate">Mobile No.</label>
                    <input type="text" id="phone" name="phone" class="form-control hasDatepicker">
                  </div>
                    <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputTable">Table No.</label>
                    <input type="text" id="table" name="table" class="form-control">
                  </div>
                  <br />
                  <div class="form-group col-md-6 col-sm-6">
                    <label for="exampleInputTable">Message</label>
                    <textarea  name="message" class="form-control"></textarea>
                  </div>
                
            </div>
            <div class="modal-footer">
 			<button type="submit" name="submit" class="btn btn-primary pink">Book Table</button>

            </div>
            </form>
          
        </div>
    </div>
    </div>

<?php echo $settings['facebook_likes'] ?>

                
				</div>
		 </div>
         </div>
         </div>
	</section>