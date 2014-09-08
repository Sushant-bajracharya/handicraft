<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
    <title><?php echo $title ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>ptwadmin/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>ptwadmin/header.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<link href="<?php echo site_url() ?>ptwadmin/style-ie.css" rel="stylesheet" type="text/css" media="screen">
	<![endif]-->
    <link rel="stylesheet" href="<?php echo site_url() ?>ptwadmin/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo site_url() ?>ptwadmin/font-awesome/css/font-awesome.min.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo site_url() ?>ptwadmin/css/jquery.selectbox.css" type="text/css" media="all" />
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,400italic,700' rel='stylesheet' type='text/css'>
	<script src="<?php echo site_url() ?>ptwadmin/js/jquery-1.9.0.js" type="text/javascript" charset="utf-8"></script>
	<!--script src="<?php echo site_url() ?>ptwadmin/js/jquery.animate-shadow-min.js" type="text/javascript" charset="utf-8"></script-->
	<!--script src="<?php echo site_url() ?>ptwadmin/js/jquery.validate.js" type="text/javascript" charset="utf-8"></script-->
	<script src="<?php echo site_url() ?>ptwadmin/js/combined.js" type="text/javascript" charset="utf-8"></script>
	<!--script src="<?php echo site_url() ?>ptwadmin/js/jquery.selectbox-0.2.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo site_url() ?>ptwadmin/js/cust_checkbox_plugin.js" type="text/javascript" charset="utf-8"></script-->
	<script src="<?php echo site_url() ?>ptwadmin/js/make_dropdown.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo site_url() ?>ptwadmin/js/js-func.js" type="text/javascript" charset="utf-8"></script>
    
    
</head>

<body class="home <?php echo @($order=='order')?'contact-wrapper':'boxed shadow p07';?>">

<div class="root">
    <?php /*<div class="grey">
        <?php $this->load->view('ptwfrontadmin/includes/header') ?>
    </div>*/ ?>
    
    <section class="content">
        <?php $this->load->view("ptwfrontadmin/includes/{$view}"); ?>   
    </section>
	
</div>

<script type="text/javascript" src="<?php echo site_url() ?>ptwadmin/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo site_url() ?>ptwadmin/js/scripts.js"></script>
<script  type="text/javascript" src="<?php echo site_url() ?>ptwadmin/js/jquery-1.7.2.min.js"></script>
<script  type="text/javascript" src="<?php echo site_url() ?>ptwadmin/js/ie.js"></script>



<script type="text/javascript" src="<?php  echo site_url();    ?>ptwadmin/edit/jquery.js"></script>
<script type="text/javascript" src="<?php  echo site_url();    ?>ptwadmin/edit/jq.js"></script>

<LINK href="<?php  echo site_url();    ?>ptwadmin/edit/style.css" rel="stylesheet" type="text/css" />
<!--<script>

  var scntDiv = $('#p_scents');
var i = $('#p_scents tr').size() + 1;

$('#addScnt').click(function() {
    scntDiv.append('<tr><td><input type="text"   name="title[]' + '" id="debit_amount"/></td><td><input type="text" name="price[]' + '" id="credit_amount"/></td><td><a href="#" id="remScnt">Remove</a></td></tr>');   
    i++;
    return false;
});

//Remove button
$(document).on('click', '#remScnt', function() {
    if (i > 2) {
        $(this).closest('tr').remove();
        i--;
    }
    return false;
});
</script>-->

<!--[if lt IE 9]>

<![endif]-->

</body>

</html>