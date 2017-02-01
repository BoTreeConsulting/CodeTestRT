<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Edit Forms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <?php include("includes/header_css.php"); ?>
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#editpageformid").validate({
   
        // Specify the validation rules
        rules: {
             inquiryname: "required",
			
			inqurirycontent: "required",
		autoresponedcontent: "required",
			status: "required"
			
		
           
            
        },
        
        // Specify the validation error messages
        messages: {
            inquiryname: "Please enter form name",
			
            inqurirycontent: "Please enter form content",
			autoresponedcontent: "Please enter auto responed content",
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Forms /</span> <span>Edit Form</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_inquiries" style="color:#FFF">Manage Forms </a>/<span>Edit Form</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
		
		<?php if($this->session->flashdata('message')!=''){  ?>
		<div class="alert alert-success alert-custom">
<button type="button" class="close" data-dismiss="alert" style="padding-right:15px;">×</button>
<strong>Success!</strong>  <?php echo $this->session->flashdata('message'); ?>
</div>
<?php } if($this->session->flashdata('error')!=''){ ?>


		<div class="alert alert-danger alert-custom">
<button type="button" class="close" data-dismiss="alert" style="padding-right:15px;">×</button>
<strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
</div>
<?php } ?>

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" method="POST" id="editpageformid" novalidate="novalidate">
		 
		 
		 
		
		 
		 
	
		 
		 
  <div class="form-group">
    <label for="exampleInputEmail1">Form Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control"  name="inquiryname" id="inquiryname" value="<?php echo $editinquiries[0]['form_name'];?>" id="exampleInputEmail1" placeholder="Enter Form Name">
  </div>
  
  
  
 
  
  <div class="form-group">
    <label for="exampleInputPassword1">Form Content <span class="required_field"> * </span></label>
	<br/>
    <textarea name="inqurirycontent" id="inqurirycontent" rows="10" cols="75" placeholder="Enter Form Content"><?php echo $editinquiries[0]['form_content'];?></textarea>
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Auto Responed Content <span class="required_field"> * </span></label>
	<br/>
    <textarea name="autoresponedcontent" id="autoresponedcontent" rows="10" cols="75" placeholder="Enter Auto Responed Content"><?php echo $editinquiries[0]['auto_responed_content'];?></textarea>
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status">
	   <option value="">Status</option>
       <option value="1" <?php if($editinquiries[0]['is_active']=="1"){ echo "selected";}?>>Active</option>
       <option value="0" <?php if($editinquiries[0]['is_active']=="0"){ echo "selected";}?>>Inactive</option>
   </select>
   </div>
  
  
  
  
 
   
  <button type="submit" name="editinquiry" class="btn btn-xs btn-default btyellow" style="height:35px;">Update</button>
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