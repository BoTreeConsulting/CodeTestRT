<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Add Commission</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
      <?php include("includes/header_css.php"); ?>
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#addrefundformid").validate({
   
        // Specify the validation rules
        rules: {
            refundname: "required",
			
			refundvalue: "required",
			refundvaluetype: "required",
			status: "required"
			
           
            
        },
        
        // Specify the validation error messages
        messages: {
            refundname: "Please enter refund name",
			
            refundvalue: "Please enter refund value",
			refundvaluetype: "Please select refund value type",
			status: "Please select status"
			
           
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
  
  
<script type="text/javascript">
function isNumberKey(evt)
{
	
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
return false;
return true;
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Commissions  /</span> <span>Add New</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_commissions" style="color:#FFF">Commissions  </a>/<span>Add New</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" method="POST" id="addrefundformid" novalidate="novalidate">
		 
		 
		 
		
		 
		 
  <div class="form-group"  >
    <label for="exampleInputEmail1">Refund Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="refundname" id="refundname" placeholder="Enter Refund Name">
	<label for="name" generated="true" class=""></label>
  </div>
  
  
  
  <div class="form-group"  >
    <label for="exampleInputEmail1">Refund Value<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="refundvalue" id="refundvalue" placeholder="Enter Refund Value" onkeypress="return isNumberKey(event)">
	<label for="name" generated="true" class=""></label>
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Refund Value Type<span class="required_field"> * </span></label>
    <select  class="form-control" name="refundvaluetype">
       <option value="">Refund Value Type</option>
       <option value="percentage">Percentage</option>
	   <option value="value">value</option>
       
   </select>
   </div>
  
  
  
 
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status">
       <option value="">Status</option>
       <option value="1">Active</option>
	   <option value="0">InActive</option>
       
   </select>
   </div>
  
  
  
  <!--<input type="hidden" class="form-control" name="createdby" value="<?php echo $_SESSION['admin_id'];?>">-->
  <button type="submit" name="addcommission" class="btn btn-xs btn-default btyellow" style="height:35px;">Add New</button>
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
    	<div class="headtext1">COPYRIGHT © <?php echo date("Y");?> REALTYTOPIA. ALL RIGHTS RESERVED.</div>
    </div>
    </div>
    
    
    
    
</body>