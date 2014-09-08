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
      <a href="">handicraft</a>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      
      <ul class="nav navbar-nav navbar-right">
        
            <li <?php echo $home_class ?>><a href="<?php echo site_url('welcome') ?>">Home</a></li>
            <li <?php echo $about_class ?>><a href="<?php echo base_url('about'); ?>">About Us</a></li>
            <li <?php echo $contact_class ?>><a href="<?php echo site_url('gallery') ?>">Gallery</a></li>
            <li <?php echo $gallery_class ?>><a href="<?php echo site_url('product') ?>">Products</a></li>
             <li <?php echo $gallery_class ?>><a href="<?php echo site_url('blog') ?>">Blog</a></li>
            <li <?php echo $product_class ?>><a href="<?php echo site_url('contact') ?>">Contact Us</a></li>
          </ul>
          
          
</div>


            
          </div>
           
      </div>
    </div>
  
</header><!--header-->


