<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Add Member</title>
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
			lastname: "required",
			email: {
                required: true,
                email: true
            },

        },
        
        // Specify the validation error messages
        messages: {
            name: "Please enter your first name",
			lastname: "Please enter your last name",
			email: "Please enter a valid email address",
	        },
        
        submitHandler: function(form) {
           var returnValue = chkvalidate();
			if(returnValue)
			{
				form.submit();
			}
        }
    });

  });
  
  </script>
  
  
<script type="text/javascript">
function checkPhone1()
{
	var ph1 = $("#phonenumber1").val();	
	if(ph1.length >= 2)
	{ 
		$("#phonenumber2").focus(); 
	}
}

function checkPhone2()
{
	var ph2 = $("#phonenumber2").val();	
	if(ph2.length >= 2)
	{ 
		$("#phonenumber3").focus(); 
	}
}


function isNumberKey(evt)
{
	
var charCode = (evt.which) ? evt.which : event.keyCode;

if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
{ return false;}

return true;
}
function chkvalidate()
{
	var ph1 = $("#phonenumber1").val();	
	var ph2 = $("#phonenumber2").val();	
	var ph3 = $("#phonenumber3").val();	
	if(ph1 == "" || ph1.length != 3)
	{
		$("#phnoerror").show();
		$("#phnoerror").html("Please Enter Phone Number (10 digits)");
		return false;
	}
	if(ph2 == "" || ph2.length != 3)
	{
		$("#phnoerror").show();
		$("#phnoerror").html("Please Enter Phone Number (10 digits)");
		return false;
	}
	if(ph3 == "" || ph3.length < 4)
	{
		$("#phnoerror").show();
		$("#phonenumber3").focus();
		$("#phnoerror").html("");
		$("#phnoerror").html("Please Enter Phone Number (10 digits)");
		return false;
	}
	else
	{
		$("#phnoerror").hide();
		return true;
	}	
	
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Members /</span> <span>Add Member</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_customers" style="color:#FFF">Manage Members </a>/<span>Add Member</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
		
		<!-- success or fail message open-->
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
		
		
       <!-- success or fail message close-->
		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" method="POST" id="customer" novalidate="novalidate">
  <div class="form-group"  >
    <label for="exampleInputEmail1">First Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter First Name">
	<label for="name" generated="true" class=""></label>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Email<span class="required_field"> * </span></label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
  </div>
  
  <div class="form-group">
    <!--<label for="exampleInputPassword1">Phone number<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="phonenumber" id="phonenumber" placeholder="Phone Number" onkeypress="return isNumberKey(event)">-->
	<label for="exampleInputPassword1">Phone Number<span class="required_field"> * </span></label>
    <table style="width:60% !important;"><tr><td><input type="text" class="form-control" name="phonenumber1" id="phonenumber1" placeholder="xxx" onkeypress="checkPhone1(); return isNumberKey(event);" maxlength="3"> - </td>	
 
	<td><input type="text" class="form-control" name="phonenumber2" id="phonenumber2" placeholder="xxx"  onkeypress="checkPhone2(); return isNumberKey(event);" maxlength="3"> - </td> 
	<td><input type="text" class="form-control" name="phonenumber3" id="phonenumber3" placeholder="xxxx"  onkeypress="return isNumberKey(event)" maxlength="4"></td> </tr></table>
	<label for="phonenumber3" generated="true" class="error" id="phnoerror" style="display:none;">Please Enter a Phone Number</label>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status">
       <option value="Active">Active</option>
       <option value="Inactive">Inactive</option>
   </select>
   </div>
  
  <!--<div class="form-group">
    <label for="exampleInputPassword1">Password <span class="required_field"> * </span></label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Address <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" id="address" name="address" cols="3"></textarea>
  </div>-->
  <!--<div class="form-group">
    <label for="exampleInputPassword1">Operations contact<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="contact" id="contact" placeholder="Operations Contact">
  </div>-->
  <!--<div class="form-group">
    <label for="exampleInputPassword1">Position<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="position" id="position" placeholder="Position">
  </div>-->
   
  
 <!-- <div class="form-group">
    <label for="exampleInputPassword1">Fax No.</label>
    <input type="text" class="form-control" name="faxnumber" id="faxnumber" placeholder="Fax No">
  </div>--> 
  <input type="hidden" class="form-control" name="createdby" value="<?php echo $_SESSION['admin_id'];?>">
  <button type="submit" name="add" class="btn btn-xs btn-default btyellow" style="height:35px;">Add Member</button>
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