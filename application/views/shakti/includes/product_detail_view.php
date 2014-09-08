<style>
#gallery_01 img {
	border: 2px solid white;
}
.active img {
	border: 2px solid #333 !important;
}
</style>
<section class="content products">
<section class="container gallery">
<div class="row">
<div class="inner-page">

	<article class="product">
    <div class="col-md-6 col-sm-6">
       <p class="product-img"><img src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image'] ?>" alt="" id="img_01" data-zoom-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image'] ?>">
       
       <div id="gal1"> 
    <?php if($product_detail['image']){   ?>
    <a href="" data-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image'] ?> " data-zoom-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image'] ?>" > <img id="img_01" src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image'] ?>"   height="95" width="99"/> </a> 
    <?php }?>
    <?php if($product_detail['image1']){   ?>
    <a href="" data-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image1'] ?> " data-zoom-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image1'] ?>" > <img id="img_01" src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image1'] ?>"   height="95" width="98"/> </a> 
    <?php }?>
    <?php if($product_detail['image2']){   ?>
    <a href="" data-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image2'] ?> " data-zoom-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image2'] ?>" > <img id="img_01" src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image2'] ?>"   height="95" width="98"/> </a> 
    <?php }?>
    <?php if($product_detail['image3']){   ?>
    <a href="" data-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image3'] ?> " data-zoom-image="<?php echo site_url() ?>uploads/<?php echo $product_detail['image3'] ?>" > <img id="img_01" src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image3'] ?>"   height="95" width="98"/> </a> 
    <?php }?>
    
    </div>
       </p>
     </div>
    <div class="col-md-6 col-sm-6">
    <h1><?php echo $product_detail['product_name'] ?></h1>
    <div id="trigger">
          		<h1><a href="#" rel="popuprel3" class="popup">Order Now</a></h1>
        	</div>
     <div class="popupbox3" id="popuprel3">
          <div id="intabdiv3">
            <h1><?php echo $product_detail['product_name'] ?></h1>
            <?php  
		
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$quantity=$_POST['qutanty'];
		  $comment=$_POST['message'];
		  $product=$product_detail['product_name'];
			 $sql="select * from ptw_settings";
	      $res=mysql_query($sql);
	     $data=mysql_fetch_assoc($res);
	     $admin_email = $data['admin_email'];
			
			
			$to=$admin_email;
			
			$subject='Product Order Form';
            $message= "Hello Admin,
                       A new contact request was made by a customer. Please check the detais below:"."\r\n"."PRODUCT NAME:".$product."\r\n"."FULL NAME:".$name."\r\n"."EMAIL:".$email."\r\n"."PHONE:".$phone."\r\n"."QUANTITY:".$quantity."\r\n"."MESSAGE:".$comment;
			$header=$email;
			if(mail($to,$subject,$message,$header))
			{ }
			else
			{
				echo "error";
			}
		}
		
		
			
			?>
           
            <form class="register" action="" method="post" id="register-form">
              <div id="column" class="pop-style">
                <div>
                  <label>Full Name:</label>
                  <input type="text" name="name" id="name"  />
                </div>
                <div>
                  <label>Email:</label>
                  <input type="email"  name="email" id="email" />
                </div>
                <div>
                  <label>Phone:</label>
                  <input type="text" name="phone" id="phone" />
                </div>
                <div>
                  <label>Quantity:</label>
                  <input type="text" name="qutanty" id="qutanty" />
                </div>
                <div class="box-full">
                  <label >Message:</label>
                  <textarea name="message" id="message" required="required" /></textarea>
                </div>
                <button type="submit" name="submit" id="submit" value="submit">Submit</button>
              </div>
            </form>
           
          </div>
        </div>

			 <div id="fade"></div>
             <p class="price">From <span><?php echo number_format($product_detail['product_price'], 2, ",", "") ?></span><span class="currency">Nrs</span></p>


		<div class="descr">
			<h2>Product description</h2>
			<p><?php echo $product_detail['product_description'] ?></p>
		</div>  
        </div>    
        </article>
        <div class="col-md-12 col-sm-12">
         <section class="columns popular-objects">
		<h2><span>Other Products</span></h2>
        <?php foreach($other_products as $product): ?>
                <div class="col-md-2 col-sm-3">
        			<div class="img">
                        <a href="<?php echo site_url() ?>product/detail/<?php echo $product['product_id'] ?>">
                            <img src="<?php echo base_url();?>assets/timthumb/timthumb.php?src=<?php echo site_url() ?>uploads/<?php echo $product['image'] ?>&h=120&w=150&a=tl&q100=" alt="">
                        </a>
                    </div>
                    <a href="#"><?php echo $product['product_name'] ?></a><br>
                    <span class="price"><strong><?php echo 'Nrs' . number_format($product['product_price'], 2, ".", "") ?></strong></span>
        		</div>
        <?php endforeach; ?> 
	</section>
        </div>
      </div></div>
 </section>
 </section>
  
  <!-- zoom js -->
 <script type="text/javascript" src="<?php echo site_url() ?>js/zoom_js/jquery.elevatezoom.js" ></script>
 <script type="text/javascript" src="<?php echo site_url() ?>js/zoom_js/jquery-1.8.3.min.js" ></script>
<script>
 jQuery("#img_01").elevateZoom({
	
	    gallery:'gal1',
	    cursor: 'pointer',
	    galleryActiveClass: 'active',
	    imageCrossfade: true,
	    loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'
		}); 
		</script>
 <!--popup form style -->
      <link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>css/pop_css/style.css" />
   <!--  popup form js -->
     <script type="text/javascript" src="<?php echo site_url() ;?>/js/custom.js"></script>   