<style>
		html, body {
			font: normal 11px Tahoma;
			color: #333;
		}
		
		a {
			outline: none;	
		}
		
		div#wrap {
			width: 500px;
			margin: 50px auto;	
		}

		img {
			border: 1px solid #CCC;
			padding: 2px;	
			margin: 10px 5px 10px 0;
		}
	</style>
<section class="content">
	<article class="product">
    <div class="fancyDemo">
		
		
		<p class="product-img">
        <a rel="group" title="Here is a short caption." href="<?php echo site_url() ?>uploads/<?php echo $product_detail['image'] ?>"><img src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image'] ?>" alt=""></a>
        </a></p>
        <?php if($product_detail['image1'] ){   ?>
         <p class="product-img">
        <a rel="group" title="Here is a short caption." href="<?php echo site_url() ?>uploads/<?php echo $product_detail['image1'] ?>"><img src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image1'] ?>" alt=""></a>
        </a></p>
        <?php }?>
       <?php if($product_detail['image2'] ){   ?>
		 <p class="product-img">
        <a rel="group" title="Here is a short caption." href="<?php echo site_url() ?>uploads/<?php echo $product_detail['image2'] ?>"><img src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image2'] ?>" alt=""></a>
        </a></p>
        <?php }?>
        <?php if($product_detail['image3'] ){   ?>
         <p class="product-img">
        <a rel="group" title="Here is a short caption." href="<?php echo site_url() ?>uploads/<?php echo $product_detail['image3'] ?>"><img src="<?php echo site_url() ?>uploads/<?php echo $product_detail['image3'] ?>" alt=""></a>
        </a></p>
        <?php }?>
        
		</div>
	</article>

	
 </section>
 
 <script type="text/javascript" src="<?php echo site_url() ?>/jquery.fancybox/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="<?php echo site_url() ?>/jquery.fancybox/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo site_url() ?>/jquery.fancybox/jquery.fancybox-1.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.fancyDemo a").fancybox();
		});
	</script>