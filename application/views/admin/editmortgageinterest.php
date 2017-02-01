<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Edit Mortgage Interest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <?php include("includes/header_css.php"); ?>
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#editmortgageinterestformid").validate({
   
        // Specify the validation rules
        rules: {
            refundname: "required",			
            mortage_interest_rate1: "required",
            mortage_interest_rate2: "required",
            mortage_interest_rate3: "required"			 
        },
        
        // Specify the validation error messages
        messages: {
            refundname: "Please enter mortgage interest",			
            mortage_interest_rate1: "Please enter value",
            mortage_interest_rate2: "Please enter value",
            mortage_interest_rate3: "Please enter value"				
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
  
<script type="text/javascript">
    function blockSpecialChar(e) 
    {
        var k = e.keyCode;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8   || (k >= 48 && k <= 57));
    }
		
		
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Settings /</span> <span>Edit Mortgage Interest</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><span>Edit Mortgage Interest</span></div>
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
		 <form role="form" method="POST" id="editmortgageinterestformid" novalidate="novalidate">
		 
		 
		
  <div class="form-group" style="display:none;">
    <label for="refundname">Mortgage Interest<span class="required_field"> * </span></label>
    <input type="text" class="form-control" readonly name="refundname" id="refundname" value="<?php echo $editmortgageinterestval[0]['refund_name'];?>"  placeholder="Enter Mortgage Interest">
  </div>
  
  
   <div class="form-group">
    <label for="mortage_interest_rate1">Mortgage Interest Value for 30 Year Fixed Loan<span class="required_field"> * </span></label>
    <input type="text" class="form-control"  name="mortage_interest_rate1" id="mortage_interest_rate1" value="<?php echo $editmortgageinterestval[0]['mortage_interest_rate1'];?>" placeholder="Enter Value">
  </div>
                     

  <div class="form-group">
    <label for="mortage_interest_rate2">Mortgage Interest Value for 15 Year Fixed Loan<span class="required_field"> * </span></label>
    <input type="text" class="form-control"  name="mortage_interest_rate2" id="mortage_interest_rate2" value="<?php echo $editmortgageinterestval[0]['mortage_interest_rate2'];?>" placeholder="Enter Value">
  </div>
  
  <div class="form-group">
    <label for="mortage_interest_rate3">Mortgage Interest Value for 5/1 ARM Loan<span class="required_field"> * </span></label>
    <input type="text" class="form-control"  name="mortage_interest_rate3" id="mortage_interest_rate3" value="<?php echo $editmortgageinterestval[0]['mortage_interest_rate3'];?>" placeholder="Enter Value">
  </div>
  
  
  
  
  
  
  <!--<div class="form-group">
    <label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status">
	   <option value="">Status</option>
       <option value="1" <?php if($editmortgageinterestval[0]['is_active']=="1"){ echo "selected";}?>>Active</option>
       <option value="0" <?php if($editmortgageinterestval[0]['is_active']=="0"){ echo "selected";}?>>Inactive</option>
   </select>
   </div>-->
  
  
  
  
 
   
  <button type="submit" name="editmortgageinterestpost" class="btn btn-xs btn-default btyellow" style="height:35px;">Update</button>
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