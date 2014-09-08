
<section class="container gallery">
<div class="row">
<div class="col-md-12 inner-page">
 <div class="container">
  <div class="row">
    <h1>Photo Gallery</h1>
    <div class="row mygal">
    <?php 
        foreach($albums as $album):        
        $lastimg    =   sizeof($album['cover'][0]['images'])-1; 
      ?>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a href="<?php echo site_url('gallery/pictures/'. $album['id']) ?>">
        <img class="thumbnail img-responsive" src="<?php echo base_url();?>assets/timthumb/timthumb.php?src=<?php echo $album['cover'][0]['images'][$lastimg]['source'] ?>&h=260&w=320&a=tl&q=100"></a>
        
        
        <h3><a href="<?php echo site_url('gallery/pictures/'. $album['id']) ?>"><?php echo $album['name'] ?></a></h3>
        <p>By <?php echo $name ?>, <?php echo $album['count'] ?> photos</p>
        </div>
        <?php 
        endforeach; 
      ?>
  </div>
</div>
</div>
  
  </div>
  </div>
</section>




