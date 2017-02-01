<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Edit Staff</title>
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
			phone: "required"
			/*faxno: "required",*/
		
           
            
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
			phone: "Please enter phone number"
			/* faxno: "Please enter fax number",*/
           
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
  
   
  <!--Conform password -->
  
  <script type="text/javascript">
    function confirmPass() {
        var pass = document.getElementById("pass").value
        var confPass = document.getElementById("c_pass").value
        if(pass != confPass) {
            alert('Wrong confirm password !');
			return false;
        }
    }
</script>
  
  
  <!--Conform password -->
       

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
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?>
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Staff /</span><span>Edit Staff</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_staff" style="color:#FFF">Manage Staff </a>/ <span>Edit Staff</span></div>
    	<!--<div class="headtext1"> Staff / <span><a style="color:#FFF" href="">MyAccount</a></span></div>-->
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
		<div class="row">
		<div class="col-md-6">
		<form role="form" id="customer" action="<?php echo base_url();?>admin/edit_staff" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="name" value="<?php echo $data[0]['admin_name']; ?>" id="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email <span class="required_field"> * </span> </label>
    <input type="email"    class="form-control" name="email" value="<?php echo $data[0]['admin_email']; ?>" id="email" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Username <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="username" value="<?php echo $data[0]['admin_username']; ?>" readonly id="username"  placeholder="Enter UserName">
  </div>
  <?php $pwd=$data[0]['usr_pwd'];
	$newpwd=base64_decode(base64_decode($pwd));
	?>
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password <span class="required_field"> * </span></label>
    <input type="password" class="form-control" name="password" value="<?php echo $newpwd; ?>" id="password" placeholder="Enter Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm password <span class="required_field"> * </span></label>
    <input type="password" class="form-control" name="cpassword" id="c_pass" value="<?php echo $newpwd; ?>" id="exampleInputPassword1" placeholder="Confirm Password">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Address <span class="required_field"> * </span></label>
    <textarea class="form-control" name="address" id="address" rows="3" cols="3"><?php echo $data[0]['admin_address']; ?></textarea>
  </div>

	
 <div class="form-group">
    <label for="exampleInputPassword1">Role <span class="required_field"> * </span></label>
    <select  class="form-control" name="role" id="role">
	 <option value=""> --Select Option--</option>
	 <option value="Super Admin" <?php if($data[0]['role_id']=='Super Admin'){echo "selected";} ?>>Super Admin</option>
       <option value="Admin" <?php if($data[0]['role_id']=='Admin'){echo "selected";} ?>>Admin</option>
	     <option value="Staff" <?php if($data[0]['role_id']=='Staff'){echo "selected";} ?>>Staff</option>
	</select>
  </div>
  
  <?php   $status =  $data[0]['admin_status'];   ?> 
    
 <?php //echo $status;?>
   <div class="form-group">
    <label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status" >
       <option value="Active" <?php if($status == "Active"){ echo "selected";}?> >Active</option>
       <option value="Inactive" <?php if($status == "Inactive"){ echo "selected";}?> >Inactive</option>
   </select>
   </div>
  
  
  
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Phone number <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="phone" value="<?php echo $data[0]['admin_phone']; ?>" id="phone" placeholder="Enter Phone Number">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fax no.</label>
    <input type="text" class="form-control" name="faxno" value="<?php echo $data[0]['admin_fax_no']; ?>"  id="faxno"  placeholder="Enter Fax No"
  </div> </div>
  <input type ="hidden" name="id" value="<?php echo $data[0]['admin_id']; ?>" >
  
  <button type="submit" name="update" value="updatestaff" onclick="return confirmPass()" class="btn btn-xs btn-default btyellow" style="height:35px;">Update Staff</button>
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