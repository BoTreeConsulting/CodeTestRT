<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Edit Social Links</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <?php include("includes/header_css.php"); ?>
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#editoutgoingformid").validate({
   
        // Specify the validation rules
        rules: {
             //refundname: "required",
			
			refundvalue : {
                            required: true, 
                            email: true
                        },
                        sendername : "required",
                        apikey : "required",
			
			
		
           
            
        },
        
        // Specify the validation error messages
        messages: {
            //refundname: "Please enter outgoing email address",
			
            refundvalue: "Please enter valid Email",
            sendername: "Please enter Sender Name",
            apikey: "Please enter Api Key",
			
			
			
           
           
           
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
       <?php 
       //print_r($social_links);
       $social_links = $social_links[0];
       
/*       echo '-- '.$social_links['facebook'];
       echo '-- '.$social_links['twitter'];
       echo '-- '.$social_links['gplus'];*/

       ?>
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Settings /</span> <span>Edit Outgoing Email Address</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <span>Edit Social Links</span></div>
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
		 <form role="form" method="POST" id="edit_social_links" novalidate="novalidate" >


  <div class="form-group">
    <label for="facebook">Facebook<span class="required_field">  </span></label>
    <input type="text" class="form-control"  name="facebook" id="facebook" value="<?php echo $social_links['facebook'] ;?>" id="exampleInputEmail1" placeholder="Enter facebook url">
  </div>
  
  <div class="form-group">
    <label for="twitter">Twitter<span class="required_field">  </span></label>
    <input type="text" class="form-control"  name="twitter" id="twitter" value="<?php echo $social_links['twitter'];?>" id="exampleInputEmail1" placeholder="Enter twitter url">
  </div>

  <div class="form-group">
    <label for="gplus">Google plus<span class="required_field">  </span></label>
    <input type="text" class="form-control"  name="gplus" id="gplus" value="<?php echo $social_links['gplus'];?>" id="exampleInputEmail1" placeholder="Enter google plus url">
  </div>
  
   
  
 
   
  <button type="submit" name="edit_social_links" class="btn btn-xs btn-default btyellow" style="height:35px;">Update Social Links</button>
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