<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Staff</title>
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
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?-->
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Staff /</span><span>View Staff</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_staff" style="color:#FFF">Manage Staff </a>/ <span>View Staff</span></div>
    	<!--<div class="headtext1"> Staff / <span><a style="color:#FFF" href="">MyAccount</a></span></div>-->
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
		<div class="row">
		<div class="col-md-6">
		<form role="form" action="<?php echo base_url();?>admin/edit_staff" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label> :  <?php echo $data[0]['admin_name']; ?>
    <!--input type="text" class="form-control" name="name" value="" id="exampleInputEmail1" placeholder="Enter Name"-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email </label> : <?php echo $data[0]['admin_email']; ?>
    <!--input type="email"    class="form-control" name="email" value="" id="exampleInputPassword1" placeholder="Enter Email"-->
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label> :  <?php echo $data[0]['admin_username']; ?>
    <!--input type="text" class="form-control" name="username" value="" readonly id="exampleInputEmail1"  placeholder="Enter UserName"-->
  </div>

  <!--idiv class="form-group">
    <label for="exampleInputPassword1">Confirm Password </label> : 
    <nput type="password" class="form-control" name="cpassword" id="exampleInputPassword1" placeholder="Confirm Password">
  </div-->
  
  <div class="form-group">
    <label for="exampleInputPassword1">Address </label> : <?php echo $data[0]['admin_address']; ?>
    <!--textarea class="form-control" name="address" rows="3" cols="3"> </textarea-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Role</label> : 
	
	<!-- bring role id here-->
	<?php echo $id= $data[0]['role_id']; ?>
	 
	<!-- bring role id here-->
	
   
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label> : <?php echo $data[0]['admin_phone']; ?>
    <!--input type="text" class="form-control" name="phone" value="" id="exampleInputPassword1" placeholder="Enter Phone Number"-->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fax No.</label> : <?php echo $data[0]['admin_fax_no']; ?>
    <!--input type="text" class="form-control" name="faxno" value=""  id="exampleInputPassword1"  placeholder="Enter Fax No" -->
  </div> 
  <?php
         $id = $data[0]['admin_created_by'];
		  $id1 = $data[0]['admin_modified_by'];
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
       <label for="exampleInputPassword1">Created on</label> : <?php echo $data[0]['admin_created_on'];?>
  </div>
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Modified By</label> : <?php echo $modifiedname;?>
  </div>
  
    
  
  <div class="form-group">
    <label for="exampleInputPassword1">Modified on</label> : <?php echo $data[0]['admin_modified_on'];?>
  </div>
  
  
  
  
  
  
  
  
  
  
  </div>
  <!--input type ="hidden" name="id" value="<?php //echo $data[0]['admin_id']; ?>" >
  
  <button type="submit" name="update" value="updatestaff" class="btn btn-xs btn-default btyellow" style="height:35px;">Update Staff</button-->
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