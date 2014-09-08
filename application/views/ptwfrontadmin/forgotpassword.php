<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
    <title><?php echo $title ?></title>
	<meta name="description" content="<?php echo $title ?>">
	<meta name="keywords" content="<?php echo $title ?>">
    <link href="<?php echo site_url() ?>css/admin-style.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
    <div class="form-wrapper">
        <form id="forgotpwdform" method="post" action="<?php echo site_url('login_/forgotpasswordpost') ?>">
            <div class="login-email">
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" class="txtbox" />
            </div>
            
            <?php if($this->session->flashdata('success')): ?>
                <div class="form-success">
                    <?php echo $this->session->flashdata('success') ?>
                </div>
            <?php endif; ?>
            
            <?php if($this->session->flashdata('error')): ?>
                <div class="form-error">
                    <?php echo $this->session->flashdata('error') ?>
                </div>
            <?php endif; ?>
            
            <div class="login-links">
                <a href="<?php echo site_url('login_') ?>">Back to Login</a>
            </div>
            
            <div class="action-button">
                <input type="submit" name="submit" id="submit" class="button" value="Submit" />
            </div>
        </form>
    </div>
    
</body>
</html>