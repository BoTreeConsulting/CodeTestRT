<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Edit Homepage Saving</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <?php include("includes/header_css.php"); ?>
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#your_home_settings_form").validate({
   
        // Specify the validation rules
        rules: {
            home_valuation: "required",			
            our_percent: "required",
            commission_percent: "required",			
        },
        
        // Specify the validation error messages
        messages: {
            home_valuation: "Please enter saving % for home valuation for property",			
            our_percent: "Please enter % for home sale price for RealtyTopia",
            commission_percent: "Please enter % for home sale price for Commission",			
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Settings /</span> <span>Your Home Value Settings</span></div>
     <?php
        $total = $this->uri->total_segments();
        $modulename = $this->uri->segment($total);
	?>
	
    	<div class="headtext1"> <span>Your Home Value Settings</span></div>
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

	<?php
		$home_valuation_prercent = 		$home_value_percent[0]['home_valuation_prercent'];
		$home_value_our_percent = 		$home_value_percent[0]['home_value_our_percent'];
		$home_value_commission = 		$home_value_percent[0]['home_value_commission'];
	?>	
	<div class="row">
		<div class="col-md-6">
			<form role="form" method="POST" id="your_home_settings_form" novalidate="novalidate">
				 <div class="form-group">
				  <label for="buyingvalue">Saving % For Home Valuation <span class="required_field"> * </span></label>
				  <input type="text" class="form-control"  name="home_valuation" id="home_valuation" value="<?php echo $home_valuation_prercent; ?>" id="buyingvalue" placeholder="Saving % For Home Valuation" onkeypress="return isNumberKey(event)" maxlength="2">
				</div>


				<div class="form-group">
				   <label for="sellingname" >Home Sale Price % For RealtyTopia<span class="required_field"> * </span></label>
				   <input type="text" class="form-control" name="our_percent" id="our_percent" value="<?php echo $home_value_our_percent;?>" id="sellingname" placeholder="Home Sale Price % For RealtyTopia">
				</div>


				<div class="form-group">
				  <label for="sellingvalue">Home Sale Price % For Commission<span class="required_field"> * </span></label>
				  <input type="text" class="form-control"  name="commission_percent" id="commission_percent" value="<?php echo $home_value_commission;?>" id="sellingvalue" placeholder="Home Sale Price % For Commission" onkeypress="return isNumberKey(event)" maxlength="2">
				</div>

				<button type="submit" name="update_settings" class="btn btn-xs btn-default btyellow" style="height:35px;">Update</button>
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
		<div class="headtext1">COPYRIGHT &copy; <?php echo date("Y");?> REALTYTOPIA. ALL RIGHTS RESERVED.</div>
	</div>
</div>
</body>