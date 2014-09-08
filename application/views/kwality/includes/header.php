<?php 
    $tablename  =   $this->config->item('tbl_settings');
    $settings   =   $this->crud_model->get_single_record($tablename);
    
    $page_info  =   $this->session->userdata('pagecontactinfo');
    $page_info  =   unserialize($page_info);
?>
<header>
<div class="h-bg"></div>
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
   
    
     
	<nav>
      <div class="col-md-10 col-lg-10 header-brand">
        <div class="navbar navbar-inverse" role="navigation">
        
        <div class="hidden-lg hidden-md hidden-sm navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      	<a class="navbar-brand" href="<?php echo site_url('welcome') ?>"><img class="img-responsive home" src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/kwlity-logo.png" alt="kwality" /></a>
        </div>

             <div class="collapse navbar-collapse navbar-menu" id="bs-example-navbar-collapse-1">
            
          <ul class="nav navbar-nav menu-right">
          
             <li <?php echo $news_class ?>><a href="<?php echo site_url('welcome') ?>" >Home</a></li>
            
             	<?php echo $dynamicMenu; ?> 
             
           
                 <ul class="dropdown-menu">
                 <li><a href="">Restaurant Menu </a></li>
                  <li><a href="">Bar Menu
</a></li>
                   <li><a href="">Todays Special</a></li>
                    <li><a href="">Chinese Disc</a></li>
                    </ul>
                 </li>
                
             <li <?php echo $product_class ?> class="hidden-xs"><a href="<?php echo site_url('welcome') ?>"><img class="img-responsive home" src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/kwlity-logo.png" alt="Palagya" /></a></li>
             
       <li <?php echo $gallery_class ?>><a href="<?php echo site_url('room') ?>">Catering</a></li>
       <li <?php echo $gallery_class ?>><a href="<?php echo site_url('about') ?>">about</a></li>
       <li <?php echo $gallery_class ?>><a href="<?php echo site_url('contact') ?>">Contact</a></li>
          </ul><!--nav navbar-nav menu-right-->
            
</div><!--collapse navbar-collapse navbar-menu-->
 
</div>
      <!--<p>Cal +<?php //echo isset($page_info['phone'])? $page_info['phone']: "N/A"; ?></p>-->
    </div>
    	<div class="clearfix"></div>
    </nav>
    
  </div><!--row-->
  </div><!--container-->
  
  
</header>

