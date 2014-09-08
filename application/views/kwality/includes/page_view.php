<?php 
    $tablename  =   $this->config->item('tbl_settings');
    $settings   =   $this->crud_model->get_single_record($tablename);
    
    $page_info  =   $this->session->userdata('pagecontactinfo');
    $page_info  =   unserialize($page_info);
?>

<section class="about-us">
<div class="container">
<div class="row">
<div class="col-md-12 inner-page">
    
    <div class="col-md-4 col-sm-5">
        	
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
    <div class="col-md-8 col-sm-7">
    <h1><?php echo $page['title'] ?></h1>
    <div class="row">
	<?php echo $page['description'] ?>
    </div>
    </div>
    
    
  </div>
    </div>
</div>
</section>
