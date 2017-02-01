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
            name: "required",
			email: {
                required: true,
                email: true
            },
			username: "required",
			password: "required",
			address: "required",
			contact: "required",
			position: "required",
			phonenumber: "required",
			/*faxnumber: "required",*/
		
           
            
        },
        
        // Specify the validation error messages
        messages: {
            name: "Please enter your name",
			email: "Please enter a valid email address",
            username: "Please enter username",
			password: "Please enter password",
			address: "Please enter address",
			contact: "Please enter contact",
			position: "Please enter position",
			phonenumber: "Please enter phone number",
			/*faxnumber: "Please enter fax number",*/
           
           
           
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Customer Panel /  <span>My profile</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>customer/dashboard" style="color:#FFF">My Dashboard </a>/<span>My profile</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" method="POST" id="customer" novalidate="novalidate">
  <div class="form-group">
    <label for="exampleInputEmail1">Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control"  name="name" id="name" value="<?php echo $editcustomers[0]['ac_name'];?>" id="exampleInputEmail1" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email<span class="required_field"> * </span></label>
    <input type="email" class="form-control" name="email" id="email" value="<?php echo $editcustomers[0]['ac_email'];?>" id="exampleInputPassword1" placeholder="Enter Email" readonly>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="username" id="username" value="<?php echo $editcustomers[0]['ac_username'];?>" id="exampleInputEmail1" placeholder="Enter UserName" readonly>
  </div>
  <div class="form-group">
   <?php $pwd=$editcustomers[0]['ac_user_pwd'];
	$newpwd=base64_decode(base64_decode($pwd));
	?>
  
    <label for="exampleInputPassword1">Password<span class="required_field"> * </span></label>
    <input type="password" class="form-control" name="password" id="password" value="<?php echo  $newpwd;?>"id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Address<span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" id="address" name="address" cols="3"><?php echo $editcustomers[0]['ac_address'];?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Operations contact<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="contact" id="contact" value="<?php echo $editcustomers[0]['ac_operations_contact'];?>" id="exampleInputPassword1" placeholder="Operations Contact">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Position<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="position"  id="position" value="<?php echo $editcustomers[0]['ac_position'];?>" id="exampleInputPassword1" placeholder="Position">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Phone number<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="phonenumber" id="phonenumber" value="<?php echo $editcustomers[0]['ac_phone'];?>" id="exampleInputPassword1" placeholder="Phone Number">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fax No.</label>
    <input type="text" class="form-control" name="faxnumber" id="faxnumber" value="<?php echo $editcustomers[0]['ac_fax_no'];?>" id="exampleInputPassword1" placeholder="Fax No">
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