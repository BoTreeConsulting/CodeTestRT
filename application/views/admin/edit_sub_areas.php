<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Stock Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
   <?php include("includes/header_css.php"); ?>

 <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer").validate({
   
        // Specify the validation rules
        rules: {
            name: "required",
			area:"required"
			
           
        },
        
        // Specify the validation error messages
        messages: {
            name: "Please enter area name",
			area:"please select area"
			
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
    
    <div class="col-md-10" style="padding:0;">
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Subareas /</span> <span>Edit Subareas</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_subareas" style="color:#FFF"> Manage Subareas </a>/<span>Edit Subareas</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" role="form" method="POST" id="customer" novalidate="novalidate">
		   <div class="form-group">
    <label for="exampleInputPassword1">Area Name </label>
	<select class="form-control" name='area'>
	<?php 

	foreach($getarea as $row){?>
	<option value="<?php echo $row['area_id'];?>" <?php if($row['area_id']==$editsubarea[0]['area_id']){ echo "selected"; }?>><?php echo $row['area_title'];?></option>
	<?php } ?>
	
	</select>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Subarea Name</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="<?php echo $editsubarea[0]['area_title']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status </label>
	<select class="form-control" name="status">
	<option value="Active" <?php if($editsubarea[0]['area_status']=="Active"){ echo "selected";}?>>Active</option>
	<option value="Inactive" <?php if($editsubarea[0]['area_status']=="Inactive"){ echo "selected";}?>>Inactive</option>
	</select>
    
  </div>
   
  
  <button type="submit" name="edit" class="btn btn-xs btn-default btyellow" style="height:35px;">Edit Subareas</button>
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