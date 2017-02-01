<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Areas</title>
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
  
   <!-- TO CHECK VALUES COMING OR NOT-->
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?>
    <!-- TO CHECK VALUES COMING OR NOT-->
   
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
    
    <div class="col-md-10 rtcol">
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Areas /</span><span>View Area</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);
	   ?>
	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_areas" style="color:#FFF">Manage Areas </a>/ <span>View Area</span></div>
    	
        <div class="mtextarea mtextarea2">
        
		<div class="row">
		<div class="col-md-6">
		
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label> :  <?php echo $viewarea[0]['area_title'];?>
   
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Status</label> : <?php echo $viewarea[0]['area_status'];?>
    
  </div>
  
   <?php
         $id = $viewarea[0]['area_createdby'];
		  $id1 = $viewarea[0]['area_modifiedby'];
		 $query=mysql_query("select admin_username from tbl_admin where admin_id='$id'");
		 $dat=mysql_fetch_array($query);
		 $query1=mysql_query("select admin_username from tbl_admin where admin_id='$id1'");
		 $data1=mysql_fetch_array($query1);
		$createdname=$dat['admin_username'];
		$modifiedname=$data1['admin_username'];
		  ?>
  <div class="form-group">
    <label for="exampleInputPassword1">Created By</label> : <?php echo $createdname;?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Created on</label> : <?php echo $viewarea[0]['area_createdon'];?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Modified By</label> : <?php echo $modifiedname;?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Modified on</label> : <?php echo $viewarea[0]['area_modifiedon'];?>
    
  </div>
  
  
  </div>
  

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