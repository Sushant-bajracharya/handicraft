<?php 
    $tablename  =   $this->config->item('tbl_settings');
    $settings   =   $this->crud_model->get_single_record($tablename);
    
    $page_info  =   $this->session->userdata('pagecontactinfo');
    $page_info  =   unserialize($page_info);
?>
<section class="about-us">
<div class="container no-p">
<div class="row">
<div class="col-md-12 inner-page">
	<div class="row  bg-eee">
    <div class="col-md-8 col-sm-7">
    <h1><?php echo $page['title'] ?></h1>
    <div class="row">
	<?php echo $page['description'] ?>
    </div>
    </div>
    
    <div class="col-md-4 col-sm-5">
    <div class="bg-gray">
      <ul class="news-list">
        <?php $sql=" select * from ptw_blog ORDER BY blog_id DESC limit 0,3";
		$res=mysql_query($sql);
		while($data=mysql_fetch_assoc($res))
		{
		
		
		?>
                    
					   <li><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $data['blog_id'] ?>"><?php echo $data['title'] ?></a></li>
                <?php } ?>    
				</ul>
		</div>	
          </div>
    
  </div></div>
    </div>
</div>
</section>
