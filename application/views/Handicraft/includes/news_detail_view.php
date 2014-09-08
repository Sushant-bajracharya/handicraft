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
	<div class="top">
    <div class="col-md-8 col-sm-8 left">
    <div class="row">
    <div class="col-md-5 col-sm-5">
			<img src="<?php echo site_url() ?>uploads/<?php echo $news['image'] ?>" alt="" class="img-responsive">
	</div>
    <div class="col-md-7 col-sm-7">		
    		<h1><?php echo $news['title'] ?></h1>
            <?php echo $news['long_desc'] ?>
	</div>
    </div>			
	</div>
    
	<div class="col-md-4 col-sm-4 right">
			<div class="bg-box">
				<h3 class="news"><span>News</span></h3>
				<ul class="news-list">
                    <?php foreach($newsall as $news): ?>
					   <li><span class="glyphicon glyphicon-arrow-right"></span><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $news['blog_id'] ?>"><?php echo $news['title'] ?></a></li>
                    <?php endforeach; ?>
				</ul>

<?php echo $settings['facebook_likes'] ?>

                </div>

            
            </div>
    </div>
</div>		
</div> 
</section>