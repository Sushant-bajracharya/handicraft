<section class="about-us">
<div class="container">
<div class="row">
<div class="inner-page">
	<div class="col-md-4 col-sm-6">
        	
            <h2>Make a Reservation</h2>
            
            <form role="form">
            	<div class="row">
                	<div class="col-md-6 col-sm-6">
                    	<div class="form-group">
                        	<input type="text" class="form-control" value="Check in" />
                        </div>
                    </div>
                    
                	<div class="col-md-6 col-sm-6">
                    	<div class="form-group">
                        	<input type="text" class="form-control" value="Check Out" />
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-sm-12">
                    	<div class="form-group">
                        	<select class="form-control">
                            	<option>Standard Double Room</option>
                            	<option>Standard Double Room</option>
                            	<option>Standard Double Room</option>
                            	<option>Standard Double Room</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                    	<div class="form-group">
                        	<select class="form-control">
                            	<option>Adults</option>
                            	<option>1</option>
                            	<option>2</option>
                            	<option>3</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                    	<div class="form-group">
                        	<select class="form-control">
                            	<option>Children</option>
                            	<option>1</option>
                            	<option>2</option>
                            	<option>3</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-12 col-sm-12">
                    	<div class="form-group">
                        	<input type="text" class="form-control" value="No. of Room" />
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                    	<div class="form-group"></div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                    	<div class="form-group">
                        	<button type="submit" class="btn btn-warning form-control">Book Room</button>
                        </div>
                    </div>
                    
                    
                </div>
            </form>
            
        </div>
    <div class="col-md-8 col-sm-12">
    <h1><?php echo $about['title'] ?></h1>
     
     <div class="row">
     
     <div class="col-md-6 col-sm-6">
	
	<?php echo $about['about_us'] ?>
    
    </div>
    <div class="col-md-6 col-sm-6">
    <img src="<?php echo site_url() ?>css/<?php echo $theme ?>/images/about-co.png" class="img-responsive" alt="img" />
    
    </div>
    
    </div>
    
    </div>
    </div>
    </div>
</div>
</section>
