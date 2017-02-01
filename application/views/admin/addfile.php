<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Add Photos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
      <?php include("includes/header_css.php"); ?>
	  
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  


 
 
	  
	  
 <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
	
	$("#addphotoformid").submit(function()
	{
		var image = $("#profimage").val();
		//alert(image);
		if(image == "")
		{
			$(".prof_error").show();
			$("#profimage").focus();
			return false;
		}
		else
		{
			$(".prof_error").hide();
			return true;
		}
		
	});
		
   

  });
  
  
  
  </script>
   
  
<script type="text/javascript">




function isNumberKey(evt)
{
	
var charCode = (evt.which) ? evt.which : event.keyCode;
if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
{ return false; }
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Properties /</span> <span>Add Photos</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_photos" style="color:#FFF">Manage Photos</a>/<span>Add Photos</span></div>
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
		
		<div style="margin-left:907px;">
		<a href="<?php echo base_url(); ?>/admin/view_photos/<?php echo $this->uri->segment(3);?>">Back</a>
		</div>
		
		<div class="col-md-6">
		
		<?php echo $error;?>
		
		 <form role="form" action="<?php echo base_url(); ?>admin/add_multiplephotos" method="POST" id="addphotoformid" novalidate="novalidate" enctype="multipart/form-data">
		 
  <div class="form-group"  >
    <label for="exampleInputEmail1">Upload Photo<span class="required_field">*</span></label>
	
    <input type="file" multiple name="userfile[]" id="profimage" size="20" class="form-control" />
	
	
	
	<div class="prof_error" style="display:none;">
		<label for="profimage" generated="true" class="error">Please select image</label>
	</div>
	
	<button type="submit" name="addphotosvaluesposted" class="btn btn-xs btn-default btyellow" style="height:35px;margin-top:20px;">Submit</button>
	
	
  </div>
  
  
  
  
  
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