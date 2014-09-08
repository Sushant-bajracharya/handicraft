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
        <form id="loginform" method="post" action="<?php echo site_url('login_/loginpost') ?>">
            <div class="login-username">
                <label for="username">Email Address</label>
                <input type="text" name="username" id="username" class="txtbox" />
            </div>
            
            <div class="login-password">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="txtbox" />
            </div>
            
            <?php if($this->session->flashdata('error')): ?>
                <div class="form-error">
                    <?php echo $this->session->flashdata('error') ?>
                </div>
            <?php endif; ?>
            
            <div class="login-links">
                <a href="<?php echo site_url('login_/forgotpassword') ?>">Forgot Password</a>
            </div>
            
            <div class="action-button">
                <input type="submit" name="submit" id="submit" class="button" value="Login" />
            </div>
        </form>
    </div>
    
</body>
</html>