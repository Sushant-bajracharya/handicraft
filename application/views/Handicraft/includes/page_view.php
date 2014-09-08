<?php 
    $tablename  =   $this->config->item('tbl_settings');
    $settings   =   $this->crud_model->get_single_record($tablename);
    
    $page_info  =   $this->session->userdata('pagecontactinfo');
    $page_info  =   unserialize($page_info);
?>

<section class="page">
<div class="container">
<div class="row">
<div class="col-md-12 inner-page">
    <div class="col-md-12 col-sm-12">
    <h1><?php echo $page['title'] ?></h1>
    <div class="row">
    	
    	<div class="col-md-8">
        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus metus justo, hendrerit nec odio ut, laoreet condimentum lorem. Quisque consequat ipsum ipsum, non vulputate sapien scelerisque in. Donec ut metus massa. Phasellus at elit sed turpis lacinia pellentesque. Vivamus sit amet lorem in augue vestibulum sollicitudin sed a nisl. Morbi erat felis, ultrices pellentesque erat nec, fringilla facilisis libero. Suspendisse feugiat enim diam, in pellentesque orci dapibus sed. Nullam ut dolor id velit ultricies iaculis id a tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut dolor nec ex feugiat posuere. In hac habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam posuere enim faucibus ornare feugiat.Morbi erat felis, ultrices pellentesque erat nec, fringilla facilisis libero. Suspendisse feugiat enim diam, in pellentesque orci dapibus sed. Nullam ut dolor id velit ultricies iaculis id a tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut dolor nec ex feugiat posuere. In hac habitasse platea dictumst. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam posuere enim faucibus ornare feugiat. </p>
        </div>
    	<div class="col-md-4">
        	<img src="<?php echo site_url(); ?>uploads/Lord-Buddha-jute-water-Hygyeine-models-showpiece.jpg" class="img-responsive about" />
        </div>
    </div>
	<?php echo $page['description'] ?>
    </div>
</div>
</div>
</div>
</section>
