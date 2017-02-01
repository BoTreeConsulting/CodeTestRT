<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Add Franchise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
      <?php include("includes/header_css.php"); ?>
	  
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  

<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>  
	  
	  
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#addagentformid").validate({
   
        // Specify the validation rules
        rules: {
            agentfirstname: "required",
			agentlastname: "required",
			agentemail: {
                required: true,
                email: true
            },
			agentcontacttime: "required",
			agentcurrentbroker: "required",
			agentaboutus: "required",
			agenttransaction: "required",
			agentbrokerlicense: "required",
			agentcomments: "required",
			status: "required"
			

        },
        
        // Specify the validation error messages
        messages: {
            agentfirstname: "Please enter your firstname",
			agentlastname: "Please enter your lastname",
			agentemail: "Please enter a valid email address",
			agentcontacttime: "Please select contact time",
			agentcurrentbroker: "Please enter current broker",
			agentaboutus: "Please select about us",
			agenttransaction: "Please enter transaction value",
			agentbrokerlicense: "Please enter broker license",
			agentcomments: "Please enter your comments",
			status: "Please select status"
	        },
        
        submitHandler: function(form) {
           var returnValue = chkphnvalidate();
			if(returnValue)
			{
				form.submit();
			}
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
function chkphnvalidate()
{
	var ph1 = $("#agentphonenumber1").val();	
	var ph2 = $("#agentphonenumber2").val();	
	var ph3 = $("#agentphonenumber3").val();	
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
		$("#agentphonenumber3").focus();
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>New Franchise Submissions /</span> <span>Add Franchise</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_agents" style="color:#FFF">Manage Franchise</a>/<span>Add Franchise</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" method="POST" id="addagentformid" novalidate="novalidate">
  <div class="form-group"  >
    <label for="exampleInputEmail1">First Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentfirstname" id="agentfirstname" placeholder="Enter FirstName">
	<label for="name" generated="true" class=""></label>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentlastname" id="agentlastname" placeholder="Enter LastName">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">E-mail Address<span class="required_field"> * </span></label>
    <input type="email" class="form-control" name="agentemail" id="agentemail" placeholder="Enter Email">
  </div>
  
  <div class="form-group">
    
	<label for="exampleInputPassword1">Contact Phone Number<span class="required_field"> * </span></label>
    <table style="width:60% !important;"><tr><td><input type="text" class="form-control" name="agentphonenumber1" id="agentphonenumber1" placeholder="xxx" onkeypress="return isNumberKey(event)" maxlength="3"> - </td>	
 
	<td><input type="text" class="form-control" name="agentphonenumber2" id="agentphonenumber2" placeholder="xxx"  onkeypress="return isNumberKey(event)" maxlength="3"> - </td>
	
	<td><input type="text" class="form-control" name="agentphonenumber3" id="agentphonenumber3" placeholder="xxxx"  onkeypress="return isNumberKey(event)" maxlength="4"></td> </tr></table>
	
	<label for="phonenumber3" generated="true" class="error" id="phnoerror" style="display:none;">Please enter a Phone Number</label>
  </div>
  
  
  <div class="form-group">
    <label for="agentcontacttimelabel">Best Time to Contact<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentcontacttime"id="datepicker" placeholder="Enter Contact Time">
  </div>
  
  <div class="form-group">
    <label for="agentcurrentbrokerlabel">Current Broker<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentcurrentbroker" id="agentcurrentbroker" placeholder="Enter Current Broker">
  </div>
  
  
  
  
  
  
  <div class="form-group">
    <label for="agentaboutuslabel">How Did you hear about us <span class="required_field"> * </span></label>
    <select  class="form-control" name="agentaboutus">
       <option value="">About Us</option>
       <option value="zillow">Zillow</option>
	   
       
   </select>
   </div>
  
  
  <div class="form-group">
    <label for="agenttransactionlabel">How many transactions do you complete a year<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agenttransaction" id="agenttransaction" onkeypress="return isNumberKey(event)" placeholder="Enter Transaction Value">
  </div>
  
  
  <div class="form-group">
    <label for="agenttransactionlabel">Do you hold your broker license<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentbrokerlicense" id="agentbrokerlicense" placeholder="Enter broker license">
  </div>
  
  
  <div class="form-group">
    <label for="agentcommentslabel">Comments<span class="required_field"> * </span></label>
	<br/>
    <textarea name="agentcomments" id="agentcomments" rows="10" cols="75" placeholder="Enter Comments"></textarea>
  </div>
  
  
  
  <div class="form-group">
    <label for="agentstatus">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status">
       <option value="">Status</option>
       <option value="1">Active</option>
	   <option value="0">InActive</option>
       
   </select>
   </div>
  
 
 
   
  
 
  <input type="hidden" class="form-control" name="createdby" value="<?php echo $_SESSION['admin_id'];?>">
  <button type="submit" name="addfranchiseposted" class="btn btn-xs btn-default btyellow" style="height:35px;">Add Franchise</button>
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