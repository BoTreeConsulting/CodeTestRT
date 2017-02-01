<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Service Lost Job</title>
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
			joblost: "required",
			clientno: "required",
			subcon: "required",
			allser: "required",
			reason: "required",
			area: "required",
			operations: "required",
		    general: "required",
		    radio: "required"
			
			
           
            
        },
        
        // Specify the validation error messages
        messages: {
            clientno: "Please enter client number",
			email: "Please enter a valid email address",
            username: "Please enter username",
			password: "Please enter password",
			address: "Please enter address",
			contact: "Please enter contact",
			position: "Please enter position",
			phone: "Please enter phone number",
			faxno: "Please enter fax number",
            role: "Please Select The Role"
           
           
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
    
	   <!--Jquery Date Picker end here-->
       
	    <!--signature starts here -->
	   	<script src="<?php echo base_url(); ?>assets/try/jquery.signaturepad.min.js"></script> 
	  
		<script>
         $(document).ready(function (){
         $('.sigPad').signaturePad({drawOnly:true});
         $('.sigPad1').signaturePad({drawOnly:true});
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Lost Job /</span> <span>Add Lost Job</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_lostjobs" style="color:#FFF">Manage Lost Jobs </a>/ <span>Add Lost Job</span></div>
    	
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		 <form id="customer" role="form" action= "" method="post" novalidate="novalidate" >
  <div class="form-group">
    <label for="exampleInputEmail1">Job Lost<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="joblost" id="joblost" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Client No. <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="clientno" id="clientno" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date Job Finishes<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="date" id="datepicker" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Sub Contractor <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="subcon" id="subcon" >
  </div>
  <label for="exampleInputPassword1">IS BOND BEING RETURNED TO SUBCONTRACTOR</label>
   
  <div class="Radio" name="radio" id="radio">
  <label><input type="Radio" name="retsub" checked value="yes"> Yes </label>
  <label><input type="Radio" name="retsub" value="no"> No </label>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status">
       <option value="Active"> Active </option>
       <option value="Inactive">  Inactive </option>
   </select>
   </div>
   
<div class="form-group">
    <label for="exampleInputPassword1">All Services Being Cancelled <span class="required_field"> * </span></label>
    <textarea class="form-control" name="allser"  id="allser" rows="3" cols="3"></textarea>
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Reason for Lost Job  <span class="required_field"> * </span> </label>
    <textarea class="form-control" name="reason" id="reason" rows="3" cols="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Area Manager Responsible  <span class="required_field"> * </span></label>
    <textarea class="form-control" name="area" id="area" rows="3" cols="3"></textarea>
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Signed By Operations Manager  <span class="required_field"> * </span></label>
  <!--  <input type="text" class="form-control" name="operations" id="operations"> -->
  <!--signature starts here -->
   <div class='sigPad' >
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='sign' id='sign'></canvas> </div>
				<input type='hidden'  name='operations' class='output' id='operations'>
                <button class='clearButton'>Reset</button></br>
				 </div>
   <!--signature ends here -->
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Signed By General Manager  <span class="required_field"> * </span></label>
  <!-- <input type="text" class="form-control" name="general" id="general" -->
   <!--signature starts here -->
   <div class='sigPad1' >
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='sign' id='sign'></canvas> </div>
				<input type='hidden'  name='general' class='output' id='general'>
                <button class='clearButton'>Reset</button></br>
				 </div>
   <!--signature ends here -->
  
  </div> 
  
  <button type="submit" name='add' value= 'addlost' class="btn btn-xs btn-default btyellow" style="height:35px;">Add Lost Job</button>
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