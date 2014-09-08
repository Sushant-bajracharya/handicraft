<section class="gallery">
<div class="container">
<div class="row">
<div class="col-md-12 inner-page">
    <section class="columns content-slider">
      <h2><span>Our Tour Package</span></h2>
      
      <section class="packages">
	<?php
	foreach($products as $tourpackage){
	
	
	?>
    
    <div class="col-md-3 col-sm-3 no-padding">
    	<a href="<?php echo site_url()      ?>tour_package/detail/<?php  echo $tourpackage['product_id'];  ?>">
      <img src="<?php echo base_url();?>assets/timthumb/timthumb.php?src=<?php echo site_url() ?>uploads/<?php echo $tourpackage['image'] ?>&h=160&w=220&a=tl&q=100" alt=""> 
        </a>
    </div>
    
    <?php } ?>
    
    
    
    <div class="clearfix"></div>
    
</section>
      
      
    </section>
    </div>
    </div>
    </div>
</section>
