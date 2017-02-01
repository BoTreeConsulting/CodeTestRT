<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Stock Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<!--HEADER PART STARTS -->
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
	    <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
      
       
     <!--script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script-->
	<style type="text/css">
    .label {padding: 15px;
margin-bottom: 20px;
border: 1px solid transparent;
border-radius: 4px;}
	 #customer label.error, .output {color:#a94442; font-weight:600; background:#ebccd1; width: 100%; padding: 3px 8px; margin-top: 2px;
	 -webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
	 }
  </style>
	<!--HEADER PART ENDS-->
       
	
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
			username: "required",
			dateandtime: "required",
			event: "required",
			
		
           
            
        },
        
        // Specify the validation error messages
        messages: {
		    username: "Please select username",
            dateandtime: "Please select date and time",
			event: "Please enter event ",
            date: "Please enter Date",
			time: "Please enter Time",
			address: "Please enter address",
			
           
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
  
	
	
	  
	  <!--LOCATION PICKER STRATS HERE-->
	  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
      <!--script src="https://code.jquery.com/jquery-1.10.2.min.js"></script-->
      <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
      <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
	  <script src="<?php echo base_url();?>assets/try/locationpicker.jquery.js"></script>
	  <!--LOCATION PICKER END HERE-->
	  
	  
	  <!--try date and time-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/try/jquery.datetimepicker.css">
   
  
	
	<style type="text/css">

.custom-date-style {
	background-color: red !important;
}

</style>
	<!--try date and time-->

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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Logging /</span> <span>Edit Loggings</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_commencement" style="color:#FFF"> Logging </a>/<span>Edit Loggings</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin  [logging_name] => 14 Panel</h2-->

		
		<div class="row">
		<div class="col-md-9">
		 <form role="form" method="post" id="customer" novalidate="novalidate" >
    
   <div class="form-group">
    <label for="exampleInputPassword1">Username (Full Name)<span class="required_field"> * </span></label>
    <select  class="form-control" name="username" id="username">
       <?php $staffid = $data[0]['logging_name']; ?>
	   <?php foreach($staffdata as $row){?>
       <option <?php if($staffid == $row['admin_id']){echo "selected";}?> value="<?php echo $row['admin_id'];?>"><?php echo $row['admin_name'];?></option>
	   <?php } ?>
   </select>
   </div>
   
  <div class="form-group">
    <label for="exampleInputEmail1">Date and Time<span class="required_field"> * </span></label>
    <input type="text" class="form-control" placeholder="" name="dateandtime" id="datetimepicker_mask" value="<?php echo date("m/d/Y H:i",strtotime($data[0]['logging_date'])); ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Event / Action<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="event" id="event" value="<?php echo $data[0]['logging_event'] ?>" >
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label class="control-label">Longitude</label>
                <input type="text" class="form-control" placeholder="" name="longitude" id="us3-lon" value="<?php echo $data[0]['logging_longitude'] ?>">
              </div>
              <div class="col-md-6 form-group expiration required">
                <label class="control-label">Latitude</label>
                <input type="text" class="form-control" placeholder="" name="latitude" id="us3-lat" value="<?php echo $data[0]['logging_latitude'] ?>" >
              </div>
            </div>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <textarea class="form-control" rows="3" cols="3" name="address" id="us3-address" ><?php echo $data[0]['logging_address'] ?></textarea>
  </div>
  
    <div style="margin: 30px 0px; width: 100%; height: 450px;" id="us3" ></div>
   
   
    <div class="clearfix"></div>
    <script>$('#us3').locationpicker({
        location: {latitude: <?php echo $data[0]['logging_latitude'] ?>, longitude: <?php echo $data[0]['logging_longitude'] ?>},
        radius: 300,
        inputBinding: {
            latitudeInput: $('#us3-lat'),
            longitudeInput: $('#us3-lon'),
            radiusInput: $('#us3-radius'),
            locationNameInput: $('#us3-address')
        },
        enableAutocomplete: true,
        onchanged: function (currentLocation, radius, isMarkerDropped) {
            // Uncomment line below to show alert on each Location Changed event
            //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
        }
    });</script>

   <?php   $status =  $data[0]['logging_status'];   ?> 
    

   <div class="form-group">
    <label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status" >
       <option value="Active" <?php if($status == "Active"){ echo "selected";}?> >Active</option>
       <option value="Inactive" <?php if($status == "Inactive"){ echo "selected";}?> >Inactive</option>
   </select>
   </div>
  
  <button type="submit" class="btn btn-primary btn-outline btn-lg" name="edit" value="logging" id="">Edit Logging</button>
</form></div>
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

 <script src="<?php echo base_url();?>assets/try/jquery.datetimepicker.js"></script>
<script>
$('#datetimepicker_mask').datetimepicker({
	mask:''
});
</script>