<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Venues</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <link href="<?php echo base_url();?>assets/css/bootstrap-combined.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	   
	  

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/custom-admin.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
	   
	   
	   
	   
	   
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	   <script src="<?php echo base_url();?>assets/css/menu_jquery.js"></script>
       
       
       
       

 <?php 
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>



    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    
      <!-- javascripts -->
       
  </head>
  <body>
   
   <div class="col-lg-12 navbar-inner">
          <a class="brand"><img src=" <?php echo base_url("assets/site_images/admin-logo2.png");?>"  style="vertical-align:middle;"></a>
          <div class="">
            <p class="navbar-text pull-right" style="margin-top:-5px;">Welcome <span><?php  echo $this->session->userdata("admin_name");?></span> <a href="<?php echo base_url();?>admin/logout" class="">Logout</a></p>
          </div>
    </div>
    <div class="col-md-12 remove-padd">
    <?php 
	include "left-menu.php";
	?>
    
    <div class="col-md-9 rightcol">
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Venues /</span><span>Manage Venues</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<!--<div class="headtext1"> Manage Customers <!--/ <span><a style="color:#FFF" href="<?=site_url('/admin/manage_attributes')?>">Item Attributes</a></span></div>-->
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
		<div class="mtext">
            	<div style=" margin-bottom:17px;">
                    <a href="<?php echo base_url();?>admin/add_venue" class="btn btn-xs btn-default btyellow pull-left">Add Venue</a>
                    <div class="clear"></div>
                </div>
            </div>
        <div>
    <div class="tablewidth" >
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        
                                        
                                        <th>Email</th>
										<th>Actions</th>
										<th><input type="checkbox" class="form-control"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Venue Name</td>
                                       
                                        
                                        <td>admin@example.com</td>
										<td><a href="">View Details</a>|<a href="">Edit</a>|<a href="">Delete</a></td>
										<td><input type="checkbox" class="form-control"></td>
                                    </tr>
                                    
                                </tbody>
								
                            </table>
							<button type="submit" class="btn btn-xs btn-default btyellow pull-right" >Delete</button>
                        </div>
    	
    </div>
</div> 
        	
            
        </div>
        <div class="dbshadow"></div>
        
    </div>
    <div class="clear"></div>
    <div class="col-md-12 footer">
    	<div class="headtext1">© Copyright 2014 Guardian Property Service </div>
    </div>
    </div>
    
    
    
    
</body>