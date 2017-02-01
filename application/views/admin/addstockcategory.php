<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Stock Items</title>
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
            cname: "required"
		
           
        },
        
        // Specify the validation error messages
        messages: {
            cname: "Please enter category name"
					
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
       
	   
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Stock Items /</span> <span>Add Category</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_stockcategories" style="color:#FFF"> Manage Categories </a>/<span>Add Category</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" method="POST" id="customer" novalidate="novalidate">
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name<span class="required_field"> * </span></label>
    <input type="text" name="cname" id="cname" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status </label>
	<select class="form-control" name="status" id="sstatus">
	
	<option value="Active">Active</option>
	<option value="Inactive">Inactive</option>
	</select>
    
  </div>
   
  
  <button type="submit" name="btnSubmit" value="Add Category" class="btn btn-xs btn-default btyellow" style="height:35px;">Add Category</button>
</form></div>
		</div>
		<div class="col-md-6">
		 
		</div>
		

		</div>
            
        </div>
        <div class="dbshadow"></div>
        
    </div>
   <?php include("includes/footer.php"); ?>
    </div>
    
    
    
    
</body>