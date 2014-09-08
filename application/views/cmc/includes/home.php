<div class="slider-welcome">
<div class="container">
<div class="row">
<div class="col-md-5 col-sm-12">
<h2>WELCOME</h2>
<P>The Centre for Mental Health and Counselling –Nepal (CMC-Nepal) is a non-governmental organization working in mental health and development by providing mental health & psychosocial services and by imparting training for developing human resources in mental health and psychosocial counselling. It was established in May 2003 from the Mental Health Programme of United Mission to Nepal (UMN), in order to continue and further promote the work they had begun since 1984. This NGO is registered in Kathmandu District Administration (Registration no: 838/59), and has been affiliated in Social Welfare Council (affiliation no: 14822) of the Government of Nepal. CMC-Nepal has been working at community level, in close collaboration with govern.....<a href="">Readmore</a></P>
</div>


<div class="col-md-7 col-sm-12">

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/banner.png" class="img-responsive" alt="slider">
    </div>
    <div class="item">
      <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/banner.png" class="img-responsive" alt="slider">
    </div>
    <div class="item">
      <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/banner.png" class="img-responsive" alt="slider">
    </div>
    
  </div>
  

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

</div><!--col8-->



</div><!--row-->
</div><!--container-->
</div>




<section class="banner-banner">
<div class="container ">
    <div class="row">
     
    <div class="col-md-8 col-md-8">
    	<h3>Our Mission/Vision
</h3>
        	<h4>Vision </h4>
            	<p>People in Nepal are aware of mental health issues and persons living with mental health and psychosocial problems live a dignified life and enjoy their rights to health services. </p>
                
                <h4>Mission </h4>
            	<p>To promote mental health and psychosocial wellbeing of the people living with mental health problems in Nepal, especially children and women, by working closely working with the Line Ministries to develop human resource and with communities and community based organizations  to create public awareness and community empowerment.  </p>
            <ul class="images">  
             <li><a href="" class="donar">Intern donors  </a></li>  
         <li><a href="">  <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/pic1.png" class="img-responsive" alt="cmc"></a></li>
      
  <li><a href=""> <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/pic7.png" class="img-responsive" alt="cmc">  </a></li>
  <li><a href=""> <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/pic.png" class="img-responsive" alt="cmc">  </a></li>
  
  <li><a href=""> <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/pic2.png" class="img-responsive" alt="cmc">  </a></li>
  
  <li><a href=""> <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/pic3.png" class="img-responsive" alt="cmc">  </a></li>
  <li><a href=""> <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/pic4.png" class="img-responsive" alt="cmc">  </a></li>
  <li><a href=""> <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/pic5.png" class="img-responsive" alt="cmc">      </a> </li>
  <li><a href=""> <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/pic6.png" class="img-responsive" alt="cmc">      </a> </li>
  
  </ul>
    </div>
  
   
    
     <div class="col-md-4 col-md-4">
     <h3>Success Story</h3>
      <ul class="news-list">
        <?php $sql=" select * from ptw_blog ORDER BY blog_id DESC limit 0,3";
		$res=mysql_query($sql);
		while($data=mysql_fetch_assoc($res))
		{
		
		
		?>
                    
					   <li><a href="<?php echo site_url() ?>news/newsdetail/<?php echo $data['blog_id'] ?>"><?php echo $data['title'] ?></a></li>
                <?php } ?>    
				</ul>


   </div>
     	</div>
    </div>
    </div>
</section>


 <div class="clear"></div>

<section class="about-co">
	<div class="container">
   	<div class="row">
    <div class="col-md-12 col-sm-12">   
    <h2>CMC-NEPAL ALBUM</h2>
	<div id="owl-demo" class="owl-carousel">
   
    
    <div class="item">
    <a href="">
    <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/img5.png" class="img-responsive" alt="cmc">							    <p>MH Supervision</p> 
    </a>
    </div>
    
    <div class="item"><a href="">
    <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/img6.png" class="img-responsive" alt="cmc">
     <p>Clinical Supervision</p> 
    </a>
    </div>
    
    <div class="item">
    <a href="">
   <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/img2.png" class="img-responsive" alt="cmc" /> 
       <p>counciling</p> 
       </a>
       </div>
    
    <div class="item"><a href="">
    <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/im1.png" class="img-responsive" alt="cmc">
    <p>10th Anniversary </p> </a></div>
      <div class="item"><a href="">
      <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/img3.png" class="img-responsive" alt="cmc">
      <p>11th Genaral Assembly</p> 
  	</a></div>
    <div class="item"><a href="">
      <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/img4.png" class="img-responsive" alt="cmc"> 
      <p>Christmos Celebration</p> </a>
    </div>
   		</div>
                    </div><!--row-->

                      
                   
                        </div><!--container-->
                    
                                       
                    
                    
            
                 
            
            
</section><!--section-->
<div class="clear"></div>
