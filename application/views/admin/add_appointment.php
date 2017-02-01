<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Adding Appointments</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <?php include("includes/header_css.php"); ?>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.timepicker.js");?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/jquery.timepicker.css");?>" />
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer").validate({
   
        // Specify the validation rules
        rules: {
            apname: "required",
			 name: "required",
			email: {
                required: true,
                email: true
            },
			time: "required",
			date: "required",
			address: "required",
			contact: "required",
			position: "required",
			phonenumber: "required",
			faxnumber: "required",
		
           
            
        },
        
        // Specify the validation error messages
        messages: {
		     name: "Please select customer",
            apname: "Please enter  name",
			email: "Please enter a valid email address",
            date: "Please enter Date",
			time: "Please enter Time",
			address: "Please enter address",
			contact: "Please enter contact person Name",
			position: "Please enter position",
			phonenumber: "Please enter phone number",
			faxnumber: "Please enter fax number",
           
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Appointments /</span><span>Add Appointments</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_appoinment" style="color:#FFF">Manage Appointments </a>/ <span>Add Appointments</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		<form role="form" method="POST" id="customer" novalidate="novalidate">
		 <div class="form-group">
    <label for="exampleInputPassword1">Customer name<span class="required_field"> * </span></label>
    <select  class="form-control" name="name" id="name">
       <option value="">--Select Customer--</option>
	   <?php foreach($customer as $row){?>
       <option value="<?php echo $row['ac_id'];?>"><?php echo $row['ac_name'];?></option>
	   <?php } ?>
   </select>
   </div>
 <div class="form-group">
    <label for="exampleInputPassword1">Name <span class="required_field"> * </span></label>
    <input type="text"    class="form-control" name="apname" id="apname" placeholder="Enter Name">
	<input type="hidden" class="form-control" name="createdby" value="<?php echo $_SESSION['admin_id'];?>">
	
	
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email <span class="required_field"> * </span></label>
    <input type="email"    class="form-control" name="email" id="email" placeholder="Enter Email">
	
	
	
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone number<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="phonenumber" id="phonenumber"  placeholder="">
	
  </div>
 
  
  <div class="form-group">
    <label for="exampleInputPassword1">Address <span class="required_field"> * </span></label>
    <textarea class="form-control" name="address" id="address" rows="3" cols="3"></textarea>
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Contact person name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="contact" id="contact" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Appointment date<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="date" id="datepicker" >
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Appointment time<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="time" id="time" >
  </div>
  
	<button type="submit" name="add" class="btn btn-xs btn-default btyellow" style="height:35px;">Add Appointment</button>
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
    
	
	
  
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
  $(function() {
  
    $( "#datepicker" ).datepicker();
  });
  </script>
  <script>
  $(function() {
  
    $('#time').timepicker({ 'timeFormat': 'H:i:s' });
  });
   
	</script>
    
</body>