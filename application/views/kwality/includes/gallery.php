
<section class="Restaant">
<div class="container">
<div class="row">
<div class="col-md-12 inner-page">
  <div class="row">
    <h1>Photo Gallery</h1>
    <div class="row mygal">
  
  <ul id="box-container">
			  <?php
              foreach($products as $gallery)
              {
              ?>
              
             
				<li class="box">
					<a href="<?php echo base_url();?>uploads/<?php echo $gallery['image'] ?>" class="swipebox" title="Fog">
						<img src="<?php echo base_url();?>uploads/<?php echo $gallery['image'] ?>" height="200" width="200" alt="image">
					</a>
				</li>
               
                <?php }?>
				
			</ul>
  
  </div>
</div>
  
  </div>
  </div>
</div>
</section>




