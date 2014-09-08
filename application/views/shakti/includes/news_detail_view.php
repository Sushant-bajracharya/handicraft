<section class="content blog">
<div class="inner-page">
	<section class="main single">
		<article>
			<h1><?php echo $news['title'] ?></h1>
			<p class="post-meta"><?php echo date("F d, Y", strtotime($news['created_at'])) ?></p>
			<p><img src="<?php echo site_url() ?>uploads/<?php echo $news['image'] ?>" alt=""></p>
			
            <?php echo $news['long_desc'] ?>
		</article>		
	</section>
    
	<aside>
		<section>
			<h3><span>News</span></h3>
           <ul class="news-list">
                <?php foreach($other_news as $blog_news): ?>
				   <li><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $blog_news['blog_id'] ?>"><?php echo $blog_news['title'] ?></a></li>
                <?php endforeach; ?>
			</ul>
		</section>
	</aside>
    </div>		 
</section>