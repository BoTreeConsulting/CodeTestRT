<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Service Lost Job</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <?php include("includes/header_css.php"); ?>
	   
       
       

 <?php 
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>



   
    
    
      <!-- javascripts -->
       
  </head>
  <body>
     <!-- TO CHECK VALUES COMING OR NOT-->
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?-->
   <!--?php  echo"<pre>";print_r($data[0]);echo"</pre>"; ?-->
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Lost Job /</span> <span>View Lost Job</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_lostjobs" style="color:#FFF">Manage Lost Jobs </a>/ <span>View Lost Job</span></div>
    	
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
			 <form id="customer" role="form" action= "" method="post" novalidate="novalidate" >
  <div class="form-group">
 
    <label for="exampleInputEmail1">Job Lost : <?php echo $data[0]['lost_job_lost']; ?></label>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Client No. : <?php echo $data[0]['lost_clientno']; ?></label>
   
  </div>
  <div class="form-group">
   <?php $date=date("M d Y",strtotime($row['lost_finished_date']));	?>
    <label for="exampleInputEmail1">Date Job Finishes : <?php echo $date; ?></label>
    </div>
	
  <div class="form-group">
    <label for="exampleInputPassword1">SubContractor :  <?php echo $data[0]['lost_subcontract']; ?></label>
    
  </div>
  <label for="exampleInputPassword1">IS BOND BEING RETURNED TO SUBCONTRACTOR : <?php echo $data[0]['lost_is_bond']; ?></label>
   
  

 <div class="form-group">
    <label for="exampleInputPassword1">Status : <?php echo $data[0]['lost_status']; ?></label>
 </div>
   
<div class="form-group">
    <label for="exampleInputPassword1">All Services Being Cancelled : <?php echo $data[0]['lost_services']; ?> </label>
  
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Reason for Lost Job :  <?php echo $data[0]['lost_reason_to_lostjob']; ?>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Area Manager Responcible  : <?php echo $data[0]['lost_areamgr_reponsibilty']; ?></label>

  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Signed By Operations Manager  : <?php //echo $data[0]['lost_signedby_operation_mgr']; ?></label>
	<img src="<?php echo base_url();?>assets/lostjobs/<?php echo $data[0]['lost_signedby_operation_mgr'];?>">
   
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Signed By General Manager :  <?php //echo $data[0]['lost_signedby_gm']; ?></label>
	<img src="<?php echo base_url();?>assets/lostjobs/<?php echo $data[0]['lost_signedby_gm'];?>">
  
  </div> 
  
   <?php
         $id = $data[0]['lost_createdby'];
		  $id1 = $data[0]['lost_modifiedby'];
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
       <label for="exampleInputPassword1">Created on</label> : <?php echo $data[0]['lost_createdon'];?>
  </div>
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Modified By</label> : <?php echo $modifiedname;?>
  </div>
  
    
  
  <div class="form-group">
    <label for="exampleInputPassword1">Modified on</label> : <?php echo $data[0]['lost_modifiedon'];?>
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
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