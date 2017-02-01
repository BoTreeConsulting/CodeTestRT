<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Service Staff</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <?php include("includes/header_css.php"); ?>
	   
	     <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer").validate({
   
        // Specify the validation rules
        rules: {
            name: "required",
			email: {
                required: true,
                email: true
            },
			dateofapp: "required",
			nameofapp: "required",
			addofapp: "required",
			weeks: "required",
			days: "required",
			mylastday: "required",
			myfirstday: "required",
		    signed: "required",
		    applicant: "required",
		    appapproved: "required",
		    date: "required"
			
			
           
            
        },
        
        // Specify the validation error messages
        messages: {
            dateofapp: "Please enter date of application",
			nameofapp: "Please enter name of application",
            addofapp: "Please enter the address",
			weeks: "Please enter the weeks",
			days: "Please enter the days",
			mylastday: "Please enter the my last day",
			myfirstday: "Please enter the my first day",
			signed: "Please enter the sign",
			applicant: "Please enter the applicant",
            appapproved: "Please Select the appiction approved by ",
            date: "Please Select the date"
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
       
	   
	   <!--Jquery Date Picker starts here-->
	   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	   <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.timepicker.js");?>"></script>
       <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/jquery.timepicker.css");?>" />
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
	
	
	  <script>
  $(function() {
  
    $( "#datepicker1" ).datepicker();
  });
  </script>
  <script>
  $(function() {
  
    $('#time').timepicker({ 'timeFormat': 'H:i:s' });
  });
   
	</script>
    
	   <!--Jquery Date Picker end here-->
       
       
       
       

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
   <!--?php  echo"<pre>";print_r($data[0]['al_id']);echo"</pre>"; ?-->
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Staff /</span> <span>Edit Annual Leave Application</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_leaves" style="color:#FFF">Manage Leaves </a>/ <span>Edit Leave</span></div>
    	
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
				 <form role="form" id="customer"  method="post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Date of application<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name='dateofapp' id="datepicker" value="<?php echo $data[0]['al_application_date']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name of applicant<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="nameofapp" id="nameofapp" value="<?php echo $data[0]['al_applicant_name']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address of applicant<span class="required_field"> * </span></label>
    <textarea class="form-control" name="addofapp" id="addofapp" rows="3" cols="3"><?php echo $data[0]['al_applicant_address']; ?></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Attention: 

I request approval for annual leave / Long service leave for the period of weeks and days
</label>
   <table><tr><td> Weeks:</td><td> <input type="text" class="form-control" name="weeks" id="weeks" value="<?php echo $data[0]['al_weeks']; ?>" ></td><td>&nbsp;&nbsp;Days:</td><td> <input type="text" name="days" class="form-control" id="days" value="<?php echo $data[0]['al_days']; ?>" ></td></tr></table>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">My last day at work will be<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="mylastday" id="mylastday" value="<?php echo $data[0]['al_my_last_day']; ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">My first day back at work will be<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="myfirstday" id="myfirstday" value="<?php echo $data[0]['al_my_first_day']; ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Signed<span class="required_field"> * </span></label>
    <input type="text" class="form-control"name="signed" id="signed" value="<?php echo $data[0]['al_signed']; ?>" >
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Applicant<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="applicant" id="applicant" value="<?php echo $data[0]['al_applicant']; ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Application approved by<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="appapproved" id="appapproved" value="<?php echo $data[0]['al_application_approved']; ?>" >
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Date<span class="required_field"> * </span></label>

    <input type="text" class="form-control" name='date' id="datepicker1"  value="<?php echo date("m/d/Y",strtotime($data[0]['al_approved_date'])); ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status">
       <option value="Active" <?php if($data[0]['al_status']=="Active"){ echo "selected";}?>>Active</option>
       <option value="Inactive"<?php if($data[0]['al_status']=="Inactive"){ echo "selected";}?>>Inactive</option>
   </select>
   </div>
   
   
  <button type="submit" name="edit" value="update" class="btn btn-xs btn-default btyellow" style="height:35px;">Update</button>
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