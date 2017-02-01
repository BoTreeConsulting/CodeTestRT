<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia View Member</title>
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Members /</span><span>View Member</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_customers" style="color:#FFF">Manage Members </a>/ <span>View Member</span></div>
    	
        <div class="mtextarea mtextarea2">
        
		<div class="row">
		<div class="col-md-6">
		
  <div class="form-group">
    <label for="exampleInputEmail1">FirstName</label> :  <?php echo $viewcustomers[0]['first_name'];?>
   
  </div>
  
   <div class="form-group">
    <label for="exampleInputEmail1">LastName</label> :  <?php echo $viewcustomers[0]['last_name'];?>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Email </label> : <?php echo $viewcustomers[0]['email'];?>
   
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Phone number</label> : <?php echo $viewcustomers[0]['phone'];?>
    
  </div>
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Status</label> : <?php echo $viewcustomers[0]['is_active'];?>
    
	 <?php
         $id = $viewcustomers[0]['ac_created_by'];
		  $id1 = $viewcustomers[0]['ac_modified_by'];
		 $query=mysql_query("select admin_username from tbl_admin where admin_id='$id'");
		 $dat=mysql_fetch_array($query);
		 $query1=mysql_query("select admin_username from tbl_admin where admin_id='$id1'");
		 $data1=mysql_fetch_array($query1);
		$createdname=$dat['admin_username'];
		$modifiedname=$data1['admin_username'];
		  ?>
	
	
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Created on</label> : 
	
	<?php echo date('Y-m-d', strtotime($viewcustomers[0]['created_on']));?>	
    
  </div>
  
 
  
  
  
  
  <!--<div class="form-group">
 <label for="exampleInputPassword1">Operations contact</label>:<?php echo $viewcustomers[0]['ac_operations_contact'];?>
    </div>-->
	 <!--<div class="form-group">
    <label for="exampleInputPassword1">Position</label>:
    <?php echo $viewcustomers[0]['ac_position'];?>
  </div>-->
  
   <!--<div class="form-group">
    <label for="exampleInputPassword1">Fax No.</label> : <?php echo $viewcustomers[0]['ac_fax_no'];?>
    
  </div>--> 
  
  
 <!-- <div class="form-group">
    <label for="exampleInputPassword1">Created by</label> : <?php echo $createdname;?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Created on</label> : <?php echo $viewcustomers[0]['ac_created_on'];?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Modified by</label> : <?php echo $modifiedname;?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Modified on</label> : <?php echo $viewcustomers[0]['ac_modified_on'];?>
    
  </div>-->
  
  
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
    	<div class="headtext1">COPYRIGHT © <?php echo date("Y");?> REALTYTOPIA. ALL RIGHTS RESERVED.</div>
    </div>
    </div>
    
    
    
    
</body>