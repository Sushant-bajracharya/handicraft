

<section class="content products">
<div class="inner-page">
    <section class="columns content-slider">
      <h2><span>Our Services</span></h2>
      
        <?php $sql="select * from ptw_products order by  category ";
										$result=mysql_query($sql);
										$catval = 0; 
										
										while($data=mysql_fetch_assoc($result))
										{
											$cat = $data['category'];
											$sql  = "select * from ptw_category where cid='".$cat."'";
											$res = mysql_query($sql);
											
											$cate = mysql_fetch_row($res);?>
                                        
                  <?php	 if($catval!=$cat) 
						echo '<h3 style=" color:#000; font-size:18px;">'.$cate['1'].'</h3>';?>
                       
                       <article style="float:left; width:100%; margin-left:30px;">
                       <div class="leftservice" style="height:300px; width:50%;  float:left;">
                       <?php if($data['image']) {?>
                        
                        <div class="fancyDemo">
                        <a rel="group" title="Here is a short caption." href="<?php echo site_url() ?>uploads/<?php echo $data['image'] ?>">
                        <img src="<?php echo base_url();?>/uploads/<?php echo $data['image'] ?>" height="200" width="200" alt="">
                        </a>
                        </div>
                        <?php }?>
                        </div>
                       <div class="right" style="height:300px; width:50%; float:right;">
                        
                        <p><?PHP echo $data['product_description'];?></p> 
                        </div>
                       </article>
                      <?php   $catval = $cat;
                                               }?>
					
                     
                                       
                     
                     
                     
    </section>
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