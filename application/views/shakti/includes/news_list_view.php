<section class="content blog">
<div class="inner-page">
		<section class="main postlist">
			<h1>News</h1>
            <?php foreach($news as $blog_news): ?>
        			<article class="post">
        				<h2><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $blog_news['blog_id'] ?>"><?php echo $blog_news['title'] ?></a></h2>
        				<a href="<?php echo site_url() ?>news/newsdetail/<?php echo $blog_news['blog_id'] ?>"><img src="<?php echo site_url() ?>uploads/<?php echo $blog_news['image'] ?>" alt=""></a>
        				<p><?php echo $blog_news['short_desc'] ?></p>
        				
        				<p class="more"><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $blog_news['blog_id'] ?>">Read more</a></p>
        			</article>
            <?php endforeach; ?>
            
			<?php echo $this->pagination->create_links(); ?>
            
		</section>
		<aside>
			<section>
				<h3><span>News</span></h3>
				<ul class="news-list">
                    <?php foreach($newsall as $news): ?>
					   <li><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $news['blog_id'] ?>"><?php echo $news['title'] ?></a></li>
                    <?php endforeach; ?>
				</ul>
			</section>
		</aside>
		 </div>
	</section>