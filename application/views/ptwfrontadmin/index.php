<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="Content-Language" content="en">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Handicraft</title>
<meta name="Description" content="">
<meta name="Keywords" content="">
<link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>css/panel/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>css/panel/topbar.css">
<script src="<?php echo site_url() ?>js/panel/jquery.js"></script>
<script src="<?php echo site_url() ?>js/panel/html5.js"></script>
<script src="<?php echo site_url() ?>js/panel/script.js"></script>
</head>
<body>
<?php 
    $current_pageid     =   ($pageid)? $pageid: $this->session->userdata('pageid');
?>
<div id="top_bar">
  <div class="logo">
    <h1><a id="logo" href="<?php echo site_url(); ?>">Page 2 Website</a></h1>
  </div>
   <div class="selectLeft">
   <div class="select_box"> <span>Admin Menu Section</span>
      <ul>
        <li><a href="<?php echo site_url('products') ?>" rel="Manage Products"><span rel="Manage Product">Manage Products</span></a></li>
        <li><a href="<?php echo site_url('blog') ?>" rel="Manage Blog"><span rel="Manage Blog">Manage Blog</span></a></li>
                <li><a href="<?php echo site_url('pages') ?>" rel="Manage Pages"><span rel="Manage Pages">Manage Pages</span></a></li>

        <!--<li><a href="<?php echo site_url('aboutus') ?>" rel="Manage About Us"><span rel="Manage About Us">Manage About Us</span></a></li>-->
        <!--<li><a href="<?php echo site_url('clients') ?>" rel="Manage Clients"><span rel="Manage Clients">Manage Clients</span></a></li>-->
        <!--<li><a href="<?php echo site_url('testimonials') ?>" rel="Manage Testimonials"><span rel="Manage Testimonials">Manage Testimonials</span></a></li>-->
                <li><a href="<?php echo site_url('menus') ?>" rel="Manage Menus"><span rel="Manage Menus">Manage Page Menus</span></a></li>

        <li><a href="<?php echo site_url('settings') ?>" rel="Manage Settings"><span rel="Manage Settings">Manage Settings</span></a></li>
      </ul>
    </div>
   </div>
  <div class="close"><a class="btn_close" href="#">Close</a></div>
  <?php /*<div class="buy"><a class="btn_buy" href="<?php echo site_url('orderwebsite') ?>">Order Now</a></div>
 
  <div class="select">
    <div class="select_box"> <span>Preview Designs</span>
      <ul>
        <li><a href="<?php echo site_url('ptwfront/index/sitehome/'.$current_pageid.'/design1') ?>" rel="Design 1"><span rel="almet">Design 1</span></a><img src="<?php echo site_url() ?>images/panel/design_1.png"></li>
        <li><a href="<?php echo site_url('ptwfront/index/sitehome/'.$current_pageid.'/design2') ?>" rel="Design 1"><span rel="almet">Design 2</span></a><img src="<?php echo site_url() ?>images/panel/design_2.png"></li>
        <li><a href="<?php echo site_url('ptwfront/index/sitehome/'.$current_pageid.'/design3') ?>" rel="Design 1"><span rel="almet">Design 3</span></a><img src="<?php echo site_url() ?>images/panel/design_3.png"></li>
      </ul>
    </div>
  </div>*/ ?>
  <div class="chrome"></div>
</div>

<iframe style="height: 562px;" id="iframe" src="<?php echo $iframeurl; ?>" width="100%" frameborder="0">Your browser does not support frames!</iframe>
</body>
</html>