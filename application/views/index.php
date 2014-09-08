<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FB Page Lists</title>
<meta name="description" content="Page List Page" />
<meta name="keywords" content="Page List Page" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>css/style1.css" />
</head>
<body>
<div class="pafeList">
  <ul>
    <?php foreach($FB_Pages as $ID => $FB_Page): ?>
            <li> 
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo $FB_Page['picture'] ?>" width="50" height="50">
                    <h1><?php echo $FB_Page['name'] ?></h1>
                    <br>
                    <p><?php echo $FB_Page['about'] ?></p>
                </a> 
            </li>
    <?php endforeach; ?>
  </ul>
</div>
</body>
</html>