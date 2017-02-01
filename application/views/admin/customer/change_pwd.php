<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Service Customer</title>
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
           
			old_pwd: "required",
			
			new_pwd: {
					required: true,
					minlength: 6
				},
			 retype_pwd: {
					required: true,
					minlength: 6,
					equalTo: "#new_pwd"
				},

		
            
        },
        
        // Specify the validation error messages
        messages: {
            old_pwd: "Please enter your old password",
			
			new_pwd: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 6 characters long"
						
                    },
             retype_pwd: {
                        required: "Re-type password",
                        minlength: "Your re-type password must be at least 6 characters long",
						equalTo:"Re-type password must be match with password"
                    }

           //old_pwd,retype_pwd,new_pwd
           
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
    
    <div class="col-md-10 rtcol">
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Customer Panel /  <span>Change Password</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>customer/dashboard" style="color:#FFF">My Dashboard </a>/<span>Change Password</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" method="POST" id="customer" novalidate="novalidate">
 
  <div class="form-group">
    <label for="exampleInputPassword1">Old Password<span class="required_field"> * </span></label>
    <input type="password" class="form-control" name="old_pwd" id="old_pwd" value="" id="exampleInputPassword1" placeholder="Enter Old Password" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">New Password<span class="required_field"> * </span></label>
    <input type="password" class="form-control" name="new_pwd" id="new_pwd" value="" id="exampleInputEmail1" placeholder="Enter New Password" >
  </div>
  <div class="form-group">
  
  
    <label for="exampleInputPassword1">Retype Password<span class="required_field"> * </span></label>
    <input type="password" class="form-control" name="retype_pwd" id="retype_pwd" value=""id="exampleInputPassword1" placeholder="Retype Password">
  </div>
  
  
   <input type="hidden" class="form-control" name="adminid" value="<?php echo $editcustomers[0]['adminid'];?>">
   <input type="hidden" class="form-control" name="customerid" value="<?php echo $editcustomers[0]['ac_id'];?>">
  <button type="submit" name="edit" class="btn btn-xs btn-default btyellow" style="height:35px;">Update</button>
  </div>
</form>
		</div>
		<div class="col-md-6">
		 
		</div>
		

		</div>
            
        </div>
        <div class="dbshadow"></div>
        
    </div>
   <!-- Footer -->
   <?php include("includes/footer.php"); ?>
   <!-- End Footer -->
    </div>
    
    
    
    
</body>