<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Service CAR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	   
	  

    <!-- Custom CSS 
    <link href="<?php echo base_url();?>assets/css/custom-admin.css" rel="stylesheet">-->


    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
	   
	   
	   
	   
	   
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	   <script src="<?php echo base_url();?>assets/css/menu_jquery.js"></script>
       
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"> 
         <style>
		.ff1{width:113px !important;}
		
		@media only screen and (max-width: 1100px) {
		.ff1 {width: 82px !important;}
		@media only screen and (max-width: 640px) {
		.ff1 {width: 138px !important;}
		}
	  </style>   
          
       

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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Customer Panel / <span>CAR /</span> <span>View Corrective Action Report</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>customer/customer_complaints" style="color:#FFF">Manage Corrective Action Report </a>/ <span>View Corrective Action Report</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
 
		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" method="post" >
  <div class="form-group" >
    <label for="exampleInputEmail1">Location : </label>
    <?php echo $data[0]['car_location']; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date : </label>
	<?php $date=date("M d Y",strtotime($data[0]['car_date_on']));	?>
    <?php echo $date; ?>
  </div>
   <label for="exampleInputEmail1">Person Identifying Nonconformance</label>
   <label for="exampleInputPassword1">Problem</label>
   
   <?php 
      $str = $data[0]['car_indentifying'];
	  $arr = explode(",",$str);
	  //print_r($arr);
   ?>
   
   
  <div class="checkbox" style="font-style:text-transform;">
  <label style="width:220px;" ><input type="checkbox"  readonly name="personiden[]"  <?php if(in_array('customer complaint',$arr)){ echo "checked";} ?> value="customer complaint">Customer Complaint</label>
  <label style="width:220px;"><input type="checkbox" readonly name="personiden[]" <?php if(in_array('audit finding',$arr)){ echo "checked";} ?> value="audit finding">Audit Finding</label>
  
    <label style="width:220px;"><input type="checkbox" readonly name="personiden[]" <?php if(in_array('site inspection finding',$arr)){ echo "checked";} ?>  value="site inspection finding">Site Inspection Finding </label>
	<br> <label style="width:220px;"><input type="checkbox"  readonly name="personiden[]" <?php if(in_array('purchasing problem',$arr)){ echo "checked";} ?>  value="purchasing problem">Purchasing Problem</label>
	 
	 <label style="width:220px;"><input type="checkbox" readonly  name="personiden[]" <?php if(in_array('training/competence issue',$arr)){ echo "checked";} ?>  value="training/competence issue">Training/Competence Issue</label>
</div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4>Describe Nonconformance : </h4></label>
   <?php echo $data[0]['car_nonconformance_desc'] ?>
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Signature : </label>
    <?php //echo $data[0]['car_signature'] ?>
	 <img src="<?php echo base_url();?>assets/car/<?php echo $data[0]['car_signature'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date : </label>
	<?php $date2=date("M d Y",strtotime($data[0]['car_sign_dateon']));	?>
    <?php echo $date2; ?>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">State the Quick Fix(if any)! (say WHO, WHEN & HOW) : </label>
   <?php echo $data[0]['car_quick_fix'] ?>
  </div>
  <label for="exampleInputPassword1">PASS ON TO OPERATIONS MANAGER TO ORGANISE ACTION (IDENTIFY CAUSE of PROBLEM)</label>
  
  <div class="form-group">
    <label for="exampleInputPassword1"><h4>Provide corrective Action: (WHAT/HOW/WHEN/WHO) Don’t forget the timeline! : </h4></label>
    <?php echo $data[0]['car_corrective_action'] ?>
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Signature : </label>
   <?php// echo $data[0]['car_corrective_action_sign'] ?>
    <img src="<?php echo base_url();?>assets/car/<?php echo $data[0]['car_corrective_action_sign'];?>">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Date : </label>
	<?php $date3=date("M d Y",strtotime($data[0]['car_corrective_action_date']));	?>
   <?php echo $date3; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4>Further Preventive Action : </h4> </label>
    <?php echo $data[0]['car_preventive_action'] ?>
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Signature : </label>
   <?php //echo $data[0]['car_preventive_action_sign'] ?>
    <img src="<?php echo base_url();?>assets/car/<?php echo $data[0]['car_preventive_action_sign'];?>">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Date : </label>
	<?php $date4=date("M d Y",strtotime($data[0]['car_preventive_action_dateon']));	?>
    <?php echo $date4; ?>
  </div>
  
	
	
 <div class="form-group">
    <label for="exampleInputPassword1">Status : </label>
	<?php echo $data[0]['car_status']; ?>
   
   </div>
  
  
   <?php
         $id = $data[0]['car_createdby'];
		  $id1 = $data[0]['car_modifiedby'];
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
     <?php $createdon=date("M d Y",strtotime($data[0]['car_createdon']));	?>
       <label for="exampleInputPassword1">Created on</label> : <?php echo $createdon;?>
  </div>
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Modified By</label> : <?php echo $modifiedname;?>
  </div>
  
    
  
  <div class="form-group">
  <?php $modifiedon=date("M d Y",strtotime($data[0]['car_modifiedon']));	?>
    <label for="exampleInputPassword1">Modified on</label> : <?php echo $modifiedon;?>
  </div>
  
</div>
  </form>
		</div>
		<div class="col-md-6" style="margin-top:20px;">
		 
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
    <!--date picker starts here-->
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
  $(function() {
  
    $( "#date" ).datepicker();
  });
  $(function() {
  
    $( "#date1" ).datepicker();
  });
   $(function() {
  
    $( "#date3" ).datepicker();
  });
  $(function() {
  
    $( "#date4" ).datepicker();
  });
  
  </script>
    <!--date picker ends here-->
    
    
    
</body>