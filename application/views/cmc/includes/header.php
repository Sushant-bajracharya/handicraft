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
   
    
     
	<div class="col-md-12 col-lg-12 header-brand">
        <div class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header navbar-logo">
            <a class="navbar-brand" href="<?php echo site_url('welcome') ?>"><img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/logo.png" alt="cmc" />
            
            </a> </div>

             
            <div class="menu-right">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
          <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse navbar-menu">
          <ul class="nav navbar-nav">
            <li <?php echo $home_class ?>><a href="<?php echo site_url('welcome') ?>">Home</a></li>
            <?php echo $dynamicMenu; ?>
              <li <?php echo $gallery_class ?>><a href="<?php echo site_url('news') ?>">Success</a></li>
            <li <?php echo $contact_class?>><a href="<?php echo site_url('contact') ?>">Contact Us</a></li>
          </ul>
          
          
</div>


    </div>        
          </div>
          
  </div><!--row-->
  </div><!--container-->
</header>
<div class="clear"></div>

<div class="markue hidden-sm hidden-xs">
<div class="container">
<div class="col-md-12 col-sm-12">
<marquee>Commitment for the Promotion of Mental Health & Psychosocial Support in Nepal</marquee>
<div class="clearfix"></div>
</div>
</div>
</div>
