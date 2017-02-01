<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Service Site Changes Request</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php include("includes/header_css.php"); ?>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer").validate({
   
        // Specify the validation rules
        rules: {
            clientno: "required",
			 areamanager: "required",
			
			subbie: "required",
			gps: "required",
			price: "required",
			change: "required",
			reason: "required",
			date: "required",
			changename: "required",
			
			approval: "required",
			sname: "required",
			ssign: "required",
			sdate: "required",
			acname: "required",
			acdate: "required",
			acsign: "required",
			
			opname: "required",
			opsign: "required",
			opdate: "required",
			hours: "required",
			
		
           
            
        },
        
        // Specify the validation error messages
        messages: {
		     clientno: "please eneter client no",
			 areamanager: "please provide information",
			
			subbie: "please provide information",
			gps: "please provide information",
			price: "please enter proce",
			change: "please provide information",
			reason: "please provide information",
			date: "please enetr date",
			changename: "please provide information",
			
			approval: "please provide information",
			sname: "please enetr name",
			ssign: "please provide information",
			sdate: "please enetr date",
			acname: "please enetr name",
			acdate: "please enter date",
			acsign: "please provide information",
			
			opname: "please enter name",
			opsign: "please provide information",
			opdate: "please enter date",
			hours: "please provide information",
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
  
   <!--signature starts here -->
	   	<script src="<?php echo base_url(); ?>assets/try/jquery.signaturepad.min.js"></script> 
	  
		<script>
         $(document).ready(function () {
         $('.sigPad').signaturePad({drawOnly:true});
         $('.sigPad1').signaturePad({drawOnly:true});
         $('.sigPad2').signaturePad({drawOnly:true});
          
        });
        </script>
		 <!--signature ends here -->
  
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
    
    <div class="col-md-10 rtcol">
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Site Changes Request /</span> <span>Add Site Changes Request</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_sitechanges" style="color:#FFF">Manage Site Changes Requests </a>/<span>Add Site Changes Request</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		<form  method="POST" id="customer" novalidate="novalidate">
		  <div class="form-group">
    <label for="exampleInputEmail1">Client No <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="clientno" id="clientno" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Area Manager <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="areamanager" id="areamanager" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Subbie/Supervisor <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="subbie" id="subbie" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">GPS Price Per Month<span class="required_field"> * </span>
 </label>
    <input type="text" class="form-control" name="gps" id="gps">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contractor Price Per Month<span class="required_field"> * </span>
 </label>
    <input type="text" class="form-control" name="price" id="price">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Change Requested By<span class="required_field"> * </span>
 </label>
    <input type="text" class="form-control" name="change" id="change">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Reason for Change<span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="reason" id="reason" cols="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date of Change<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="date" id="datepicker" >
  </div>
  <label for="exampleInputPassword1">Changes to Specs</label>
   
  <div class="Radio">
  <label><input type="Radio" name="specs" checked value="Yes">Yes</label>
  <label><input type="Radio" name="specs" value="No">No</label>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">What is the Change?<span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="changename" id="changename" cols="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Approval<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="approval" id="approval">
  </div>
  <label for="exampleInputPassword1">Sales Manager/Gm<span class="required_field"> * </span></label>
   
  <div class="Radio">
  <label><input type="Radio" checked name="salesmanager" value="Yes">Yes</label>
  <label><input type="Radio" name="salesmanager" value="No">No</label>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="sname" id="sname" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Signature<span class="required_field"> * </span></label>
 <!--   <input type="text" class="form-control" name="ssign" id="ssign" > -->
	 <!--signature starts here -->
   <div class='sigPad' >
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='sign' id='sign'></canvas> </div>
				<input type='hidden'  name='ssign' class='output' id='ssign'>
                <button class='clearButton'>Reset</button></br>
				 </div>
   <!--signature ends here -->
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Date<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="sdate" id="datepicker1" >
  </div>
  <label for="exampleInputPassword1">Accounts<span class="required_field"> * </span></label>
   
  <div class="Radio">
  <label><input type="Radio" checked name="accounts" value="Yes">Yes</label>
  <label><input type="Radio" name="accounts" value="No">No</label>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="acname" id="acname" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Signature<span class="required_field"> * </span></label>
<!--    <input type="text" class="form-control" name="acsign" id="acsign" > -->
	 <!--signature starts here -->
   <div class='sigPad1' >
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='sign' id='sign'></canvas> </div>
				<input type='hidden'  name='acsign' class='output' id='acsign'>
                <button class='clearButton'>Reset</button></br>
				 </div>
   <!--signature ends here -->
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Date<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="acdate" id="datepicker2" >
  </div>
  <label for="exampleInputPassword1">Operations<span class="required_field"> * </span></label>
   
  <div class="Radio">
  <label><input type="Radio" checked name="operations" value="Yes">Yes</label>
  <label><input type="Radio" name="operations" value="No">No</label>
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="opname" id="opname" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Signature<span class="required_field"> * </span></label>
   <!-- <input type="text" class="form-control" name="opsign" id="opsign" >-->
	 <!--signature starts here -->
   <div class='sigPad2' >
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='sign' id='sign'></canvas> </div>
				<input type='hidden'  name='opsign' class='output' id='opsign'>
                <button class='clearButton'>Reset</button></br>
				 </div>
   <!--signature ends here -->
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Date<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="opdate" id="datepicker3" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Dialy Hours on Site<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="hours" id="hours" >
  </div>
  
  
  <button type="submit" name="add" class="btn btn-xs btn-default btyellow" style="height:35px;">Add Site Changes Request</button>
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
    
     <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
  $(function() {
  
    $( "#datepicker" ).datepicker();
  });
  </script>
  <script>
  $(function() {
  
    $( "#datepicker1" ).datepicker();
  });
  </script>
  <script>
  $(function() {
  
    $( "#datepicker2" ).datepicker();
  });
  </script>
  <script>
  $(function() {
  
    $( "#datepicker3" ).datepicker();
  });
  </script>
    
    
</body>