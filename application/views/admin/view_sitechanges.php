<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Site Changes Request</title>
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
       
       <script>
function myFunction() {
 document.getElementById('footer').style.display = 'none';
 document.getElementById('menu').style.display = 'none';
 document.getElementById('path1').style.display = 'none';
 document.getElementById('path2').style.display = 'none';
 document.getElementById('path3').style.display = 'none';
 document.getElementById('print').style.display = 'none';
 
 
    window.print();
}
</script>
       

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
   
  <div id="path1"  class="col-lg-12 navbar-inner">
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
	<div id="path2"  class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Site Changes Request /</span> <span>View Site Changes Request</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div id="path3"  class="headtext1"><a href="<?php echo base_url();?>admin/manage_sitechanges" style="color:#FFF">Manage Site Changes Requests </a>/<span>View Site Changes Request</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
     <?php //print_r($site);?>
		
		<div class="row">
		<div align="right" id="print" ><a href="" onclick="myFunction()"><img src="<?php echo base_url("assets/site_images/print.png");?>" width="30px;" title="print"></a></div>
		<div class="col-md-6">
		
  <div class="form-group">
    <label for="exampleInputEmail1">Client No</label> :  <?php echo $site[0]['scr_clientno'];?>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Area Manager </label> : <?php echo $site[0]['scr_area_mgr'];?>
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Subbie/Supervisor</label> :  <?php echo $site[0]['scr_supervisor'];?>
    
  </div>
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">GPS Price Per Month </label> : <?php echo $site[0]['scr_gps_price'];?>
    
  </div>
  <div class="form-group">
 <label for="exampleInputPassword1">Contractor Price Per Month</label>:<?php echo $site[0]['scr_contractor_price'];?>
    </div>
	<div class="form-group">
    <label for="exampleInputPassword1">Change Requested By</label>:
   <?php echo $site[0]['scr_change_requestedby'];?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Reason for Change</label> : <?php echo $site[0]['scr_reason_to_change'];?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date of Change</label> : <?php echo date("M d Y",strtotime($site[0]['scr_op_date']));?>
    
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Changes to Specs</label> : <?php echo $site[0]['scr_change_spec'];?>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">What is the Change?</label> :  <?php echo $site[0]['scr_change_info'];?>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Approval</label> : <?php echo $site[0]['scr_approval'];?>
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Sales Manager/Gm</label> :  <?php echo $site[0]['scr_sales_mgr'];?><br>
    <label for="exampleInputEmail1">Name</label> :  <?php echo $site[0]['scr_name'];?> 
	<label for="exampleInputEmail1">Signature</label> : <?php //echo $site[0]['scr_signator'];?>
    <img src="<?php echo base_url();?>assets/site/<?php echo $site[0]['scr_signator'];?>">	</br> 
	<label for="exampleInputEmail1">Date</label> :  <?php echo date("M d Y",strtotime($site[0]['scr_sign_on']));?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Accounts</label> :  <?php echo $site[0]['scr_account'];?><br>
    <label for="exampleInputEmail1">Name</label> :  <?php echo $site[0]['scr_account_name'];?> 
	<label for="exampleInputEmail1">Signature</label> :  <?php //echo $site[0]['scr_account_signature'];?>
 <img src="<?php echo base_url();?>assets/site/<?php echo $site[0]['scr_account_signature'];?>">	</br> 	
	<label for="exampleInputEmail1">Date</label> :  <?php echo date("M d Y",strtotime($site[0]['scr_account_sign_on']));?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Operations</label> :  <?php echo $site[0]['scr_operations'];?><br>
    <label for="exampleInputEmail1">Name</label> :  <?php echo $site[0]['scr_op_name'];?> 
	<label for="exampleInputEmail1">Signature</label> :  <?php// echo $site[0]['scr_op_sign'];?> 
	<img src="<?php echo base_url();?>assets/site/<?php echo $site[0]['scr_op_sign'];?>">	</br> 	
	<label for="exampleInputEmail1">Date</label> :  <?php echo date("M d Y",strtotime($site[0]['scr_op_date']));?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Dialy Hours on Site</label> : <?php echo $site[0]['scr_account_daily_hours'];?>
    
  </div>
  
  <?php
    			  $id = $site[0]['scr_createdby'];
			      $query=mysql_query("select admin_username from tbl_admin where admin_id='$id'");
		          $dat=mysql_fetch_array($query);
				  $createdname=$dat['admin_username'];
				  
				   $id1 = $site[0]['scr_modifiedby'];
				   $query1=mysql_query("select admin_username from tbl_admin where admin_id='$id1'");
		           $data1=mysql_fetch_array($query1);
				   $modifiedname=$data1['admin_username'];				 				 
			   ?>
  
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Created By</label> : <?php echo $createdname;?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Created on</label> : <?php echo date("M d Y h:i A",strtotime($site[0]['scr_createdon']));?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Modified By</label> : <?php echo $modifiedname;?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Modified on</label> : <?php echo date("M d Y h:i A",strtotime($site[0]['scr_modifiedon']));?>
    
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
    <div class="col-md-12 footer" id="footer" >
    	<div class="headtext1">© Copyright 2014 Guardian Property Service </div>
    </div>
    </div>
    
    
    
    
</body>