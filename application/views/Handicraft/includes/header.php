<?php 
    $tablename  =   $this->config->item('tbl_settings');
    $settings   =   $this->crud_model->get_single_record($tablename);
    
    $page_info  =   $this->session->userdata('pagecontactinfo');
    $page_info  =   unserialize($page_info);
?>

<header>

<div class="container">
    <div class="row">
     	
      <?php 
        $home_class     =   "";
        $about_class    =   "";
        $gallery_class  =   "";
        $product_class  =   "";
        $news_class     =   "";
        $contact_class  =   "";
        
        $controller = $this->uri->segment(1);
        if(strcmp($controller, "about") == 0) {
            $about_class =  " class=\"current-menu-item\"";   
        }
        elseif(strcmp($controller, "gallery") == 0) {
            $gallery_class =  " class=\"current-menu-item\"";   
        }
        elseif(strcmp($controller, "product") == 0) {
            $product_class =  " class=\"current-menu-item\"";   
        }
        elseif(strcmp($controller, "news") == 0) {
            $news_class =  " class=\"current-menu-item\"";   
        }
        elseif(strcmp($controller, "contact") == 0) {
            $contact_class =  " class=\"current-menu-item\"";   
        }
        else {
            $home_class =  " class=\"current-menu-item\""; 
        }
				       $dynamicMenu    =   $this->menus_model->get_dynamic_menu_html();

    ?>
   
    
     
	<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo site_url('welcome') ?>"><img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/logo.png"</a>
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      
      <ul class="nav navbar-nav navbar-right">
        
        
         
            <li  <?php echo $news_class ?>><a href="<?php echo site_url('welcome') ?>">home</a></li>
            <!--<li  <?php echo $news_class ?>><a href="<?php echo site_url('about') ?>">about us</a></li>-->
            <?php echo $dynamicMenu; ?>
            <li  <?php echo $news_class ?>><a href="<?php echo site_url('gallery') ?>">gallery</a></li>
        
            <li  <?php echo $product_class ?>><a href="<?php echo site_url('product') ?>">product</a></li>
            <li  <?php echo $gallery_class ?>><a href="<?php echo site_url('news') ?>">blog</a></li>
             <li  <?php echo $gallery_class ?>><a href="<?php echo site_url('contact') ?>">contact us</a></li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

  </div><!--row-->
  </div><!--container-->
  
  
</header>
