<section class="tour-list-sec">
<div class="container">
<div class="row">
<div class="col-md-12 inner-page">   
      
        <?php 
		$this->load->helper('text');
		?>
      
        <?php foreach($products as $product): ?>
      <div class="listing-tt">
      	<div class="col-md-9 col-sm-9 tt-left">
        
        <div class="row">
        <div class="col-md-4 col-sm-12">
         <a href="<?php echo site_url() ?>product/detail/<?php echo $product['product_id'] ?>">
                        <img src="<?php echo base_url();?>assets/timthumb/timthumb.php?src=<?php echo site_url() ?>uploads/<?php echo $product['image'] ?>" class="img-responsive" alt=""> </a>
        </div>
        <div class="col-md-8 col-sm-12">	
            <h2><?php echo $product['product_name'] ?></h2>
             <?php $desc=$product['product_description'];
			 
			 echo $desc=word_limiter($desc,20);
			 
			  ?>
        </div>  
         </div>   
        </div>
        <div class="col-md-3 col-sm-3">
        <div class="bg-box">
          <h2>Starting from </h2>
            <a class="tt-view" href="<?php echo site_url() ?>product/detail/<?php echo $product['product_id'] ?>">View Detail</a>
        </div>
        </div>
      </div>
      <?php endforeach; ?> 
    </div>
    </div>
    </div>
</section>
