<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Adding Appointments</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
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
    
    <div class="col-md-10 col-sm-9" style="padding:0;">
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage QIS / </span>Add NormalQIS </div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_staff" style="color:#FFF">Manage Appointments </a>/ <span>Add Staff</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		<form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control"  id="exampleInputEmail1" placeholder="Enter Name">
	<label for="full_name" generated="true" class="error error2 alert alert-danger alert-custom">Please enter your Name</label>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email </label>
    <input type="email"    class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
	
	<label for="full_name" generated="true" class="error error2 alert alert-danger alert-custom">Please enter your Valid Email</label>
	
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter UserName">
	<label for="full_name" generated="true" class="error error2 alert alert-danger alert-custom">Please enter your Username</label>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password </label>
    <input type="password" class="form-control"  id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password </label>
    <input type="password" class="form-control"  id="exampleInputPassword1" placeholder="Confirm Password">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Address </label>
    <textarea class="form-control" rows="3" cols="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Role</label>
    <select  class="form-control"><option>Super Admin</option><option>Admin</option><option>Staff</option></select>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fax No</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  placeholder="Enter Fax No">
  </div>
	<button type="submit" class="btn btn-xs btn-default btyellow" style="height:35px;">Add Staff</button>
  </div>
  
  
</form>
		</div>
		<div class="col-md-6">
		 
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