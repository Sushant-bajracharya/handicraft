
<style>
		html, body {
			font: normal 11px Tahoma;
			color: #333;
		}
		
		a {
			outline: none;	
		}
		
		div#wrap {
			width: 500px;
			margin: 50px auto;	
		}

		img {
			border: 1px solid #CCC;
			padding: 2px;	
			margin: 10px 5px 10px 0;
		}
	</style>
<section class="content products">
<div class="inner-page">
    <section class="columns content-slider">
      <h2><span>Our Menus</span></h2>
      
        <?php
		
						$dataperpage=4;
						  if(isset($_GET['page']))
						  {
						  $page=$_GET['page'];
						  }
						  else
						  {
						  $page=1;
						  }
						  
						  $x=($page-1)*$dataperpage;
						  $sql1="select * from ptw_products order by  category limit $x,$dataperpage";
						  
						 $sql="select * from ptw_products order by  category ";
										$result=mysql_query($sql);
										$catval = 0; 
										
										$row=mysql_num_rows($result);
										$numofpage=ceil($row/$dataperpage);
										
										$result1=mysql_query($sql1);
										
										while($data=mysql_fetch_assoc($result1))
										{
											$cat = $data['category'];
											$sql  = "select * from ptw_category where cid='".$cat."'";
											$res = mysql_query($sql);
											
											$cate = mysql_fetch_row($res);?>
                                        
                    <ul style="float:left;">                    
                  <?php	 if($catval!=$cat) 
						echo '<h3 style=" color:#000; font-size:18px;">'.$cate['1'].'</h3>';?>
                       
                       <article style="float:left; width:100%; margin-left:30px;">
                        <li style="color:#000; list-style:none; font-size:18px; ">
                        <?php if($data['image']) {?>
                        
                        <div class="fancyDemo">
                        <a rel="group" title="Here is a short caption." href="<?php echo site_url() ?>uploads/<?php echo $data['image'] ?>">
                        <img src="<?php echo base_url();?>/uploads/<?php echo $data['image'] ?>" height="95" width="80" alt="">
                        </a>
                        </div>
                        <?php }?>
                         <?php if($data['image1']) {?>
                        
                        <div class="fancyDemo">
                        <a rel="group" title="Here is a short caption." href="<?php echo site_url() ?>uploads/<?php echo $data['image1'] ?>">
                        <img src="<?php echo base_url();?>/uploads/<?php echo $data['image1'] ?>" height="95" width="80" alt="">
                        </a>
                        </div>
                        <?php }?>
                       
						<h3><?php echo $data['product_name'] ?></h3> 
                        <p><?PHP echo $data['product_description'];?></p> 
                        <span class="price"><?php echo '$' . number_format($data['product_price'], 2, ",", "") ?></span>
                        </li>
                       </article>
                      <?php   $catval = $cat;
                                               }?>
					
                     </ul>

    </section>
    <?php 
									for($i=1;$i<=$numofpage;$i++){
										
									?>
										<a href="<?php echo site_url('menu');   ?>?page=<?php echo $i;?>" style="margin-left:15px; font-size:20px;"><?php echo $i;?></a>
									<?php }
									
									?>  
    </div>
</section>

<script type="text/javascript" src="<?php echo site_url() ?>/jquery.fancybox/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="<?php echo site_url() ?>/jquery.fancybox/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo site_url() ?>/jquery.fancybox/jquery.fancybox-1.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.fancyDemo a").fancybox();
		});
	</script>