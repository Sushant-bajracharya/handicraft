
<section class="gallery">
<div class="container">
<div class="row">
<div class="col-md-12 inner-page">
  <div class="row mygal">
    <h1>Album Photos</h1>
  
      <div class="row">
      <?php 
        foreach($pictures as $picture): 
        $lastimgIndex    =   sizeof($picture['images'])-1;
    ?>
     
         
        <a class="fancybox col-lg-3 col-sm-4 col-xs-6" href="<?php echo $picture['images'][0]['source'] ?>" data-fancybox-group="gallery">
        <img class="thumbnail img-responsive" src="<?php echo base_url();?>assets/timthumb/timthumb.php?src=<?php echo $picture['images'][$lastimgIndex]['source'] ?>&h=260&w=320&a=tl&q=100"/></a> 
        
  
      <?php endforeach; ?>
    
    </div>
   
      </div>
  </div>
  </div>
 </div>
</section>

