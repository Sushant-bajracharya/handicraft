<section class="container gallery">
<div class="row">
<div class="col-md-12 inner-page">
    <section class="columns content-slider">
      <h2><span>Our Products</span></h2>
      
      <div class="slider-box">
        <div>
            <?php foreach($products as $product): ?>
                  <article>
                    <a href="<?php echo site_url() ?>product/detail/<?php echo $product['product_id'] ?>">
                        <img src="<?php echo base_url();?>assets/timthumb/timthumb.php?src=<?php echo site_url() ?>uploads/<?php echo $product['image'] ?>&h=160&w=220&a=tl&q=100" alt=""> 
                        <span class="productName"><?php echo $product['product_name'] ?><br>
                        <span class="price"><strong><?php echo 'Nrs' . number_format($product['product_price'], 2, ".", "") ?></strong></span> </span> 
                    </a> 
                  </article>
            <?php endforeach; ?> 
        </div>
      </div>
    </section>
    </div>
    </div>
</section>
