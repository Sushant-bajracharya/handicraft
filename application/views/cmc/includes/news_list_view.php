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
			<div class="bg-eee">
            <div class="col-md-8 col-sm-8 left">
			<h1>News</h1>
            	<div class="m-Lr-m-15 row">
            <?php foreach($news as $blog_news): ?>
        			<article class="col-md-12 col-sm-12">
                    <div class="m-LR-m-15">
                    <div class="post">
        				<h2><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $blog_news['blog_id'] ?>"><?php echo $blog_news['title'] ?></a></h2>
        				<!--<a href="<?php //echo site_url() ?>news/newsdetail/<?php //echo $blog_news['blog_id'] ?>"><img src="<?php //echo site_url() ?>uploads/<?php //echo $blog_news['image'] ?>" alt="" class="img-responsive"></a>-->
        				<p><?php echo $blog_news['short_desc'] ?></p>
        				
        				<p class="more"><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $blog_news['blog_id'] ?>">Read more</a></p>
                        </div>
                        </div>   
        			</article>
            <?php endforeach; ?>
			<?php echo $this->pagination->create_links(); ?>
            </div>
                        </div>  
				
				<div class="col-md-4 col-sm-4 bg-gray">
				<ul class="news-list">
                    <?php foreach($newsall as $news): ?>
					   <li><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $news['blog_id'] ?>"><?php echo $news['title'] ?></a></li>
                    <?php endforeach; ?>
				</ul>
                
 				
          
        </div>
		</div>
		 </div>
         </div>
         </div>
	</section>