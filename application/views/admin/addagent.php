<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Add Agent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
      <?php include("includes/header_css.php"); ?>
	  
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  

<script>
  $(function() {
    $( "#datepicker1" ).datepicker();
	$( "#datepicker2" ).datepicker();
	$( "#datepicker3" ).datepicker();
	$( "#datepicker4" ).datepicker();
	$( "#datepicker5" ).datepicker();
  });
  </script> 

<script type="text/javascript">
      /*  function blockSpecialChar(e) {
            var k = e.keyCode;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8   || (k >= 48 && k <= 57));
        }
		*/
		
</script>  
	  
  <style>
  #agentphonenumber1, #agentphonenumber2, #officephone1, #officephone2 {
  width: 80px;
  display: inline-block;
}
#agentphonenumber3, #officephone3 {
  width: 100px;
  display: inline-block;
}

#mobilephone1, #mobilephone2 {
  width: 80px;
  display: inline-block;
}
#mobilephone3 {
  width: 100px;
  display: inline-block;
}
.upload-files-new[type=file] {
    cursor: inherit;
    display: block;
    font-size: 999px;
    filter: alpha(opacity=0);
    min-height: 100%;
    min-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
}
input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}

input[type="file"]{
	
	position:relative !important;
	position:relative !important;
	
}

 </style>	  
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#addagentformid").validate({
   
        // Specify the validation rules
        rules: {
			agentfirstname:{
			  required: true,
			  
			  //onchange: true,
			  remote: {
				url: "<?php echo base_url(); ?>manageagents/check_first_name",
				type: "post",				 
				data: {
			
				  agentfirstname: function() {
					return $( "#agentfirstname" ).val();
				  }
				}
			  },
			  async:false
				
			},	
            
			agentlastname: "required",
			//agentnamesuffix: "required",
			//agentmiddleinitial: "required",
			//agentnickname: "required",
			//agentpreferredfirstname: "required",
			//agentpreferredlastname: "required",
			// agentid: "required",
			agentemail: {
                required: true,
                email: true
            },
			//agentkey: "required",
			//agentsystemlocale: "required",
			//agentsubsystemlocale: "required",
			//officeid: "required",
			officetradingas: "required",
			description: "required",
			//officestate: "required",
			//agentsourcecreationtimestamp: "required",
			//agentmodificationtimestamp: "required",
			//agentsourcemodificationtimestamp: "required",
			//officesourcecreationtimestamp: "required",
			//officesourcemodificationtimestamp: "required",
			userfile: "required",

			/*
			
			agentcontacttime: "required",
			agentcurrentbroker: "required",
			agentaboutus: "required",
			agenttransaction: "required",
			agentbrokerlicense: "required",
			agentcomments: "required",
			*/
			
			status: "required"
			

        },
        
        // Specify the validation error messages
        messages: {
			agentfirstname: {
			  required: "Please enter agent first name",
			  remote: "First Name is already exist."
			},
			//agentfirstname: "Please enter agent first name",
			agentlastname: "Please enter agent last name",
			//agentnamesuffix: "Please enter agent name suffix",
			//agentmiddleinitial: "Please enter agent middle initial",
			//agentnickname: "Please enter agent nick name",
			//agentpreferredfirstname: "Please enter agent preferred first name",
			//agentpreferredlastname: "Please enter agent preferred last name",
			// agentid: "Please enter agent id",
			agentemail: "Please enter your email",
			//agentkey: "Please enter agent key",
			//agentsystemlocale: "Please enter agent system locale",
			//agentsubsystemlocale: "Please enter agent sub system locale",
			//officeid: "Please enter office id",
			officetradingas: "Please enter Job Title",
			description: "Please enter description",
			//officestate: "Please enter office state",
			//agentsourcecreationtimestamp: "Please enter agent source creation timestamp",
			//agentmodificationtimestamp: "Please enter agent modification timestamp",
			//agentsourcemodificationtimestamp: "Please enter agent source modification timestamp",
			//officesourcecreationtimestamp: "Please enter office source creation timestamp",
			//officesourcemodificationtimestamp: "Please enter office source modification timestamp",
			
			userfile: "Please upload your image",
		
			status: "Please select status"
	        },
        
        submitHandler: function(form) {
            var dismsg = tinymce.get('description').getContent();
            if (dismsg == "")
            {
                alert("Please Enter description");
                document.getElementById("description").focus();
                return false;
            }
           //var returnValue = chkphnvalidate();
		   var returnValue = chkvalidate();
		   var returnValue1 = chkmobilenumbervalidate();
		   
		   //alert("r - "+returnValue);
			if(returnValue)
			{
				form.submit();
			}
        }
    });

  });
  
  </script>
  <script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>		<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript"> 
         tinymce.init({
            mode : "textareas",
            editor_selector : "form-control",
            editor_deselector : "form-control1",
            plugins: "link image"
         });
    </script>
      
<script type="text/javascript">
function checkPhone1()
{
	var ph1 = $("#officephone1").val();	
	if(ph1.length >= 2)
	{ 
		$("#officephone2").focus(); 
	}
}

function checkPhone2()
{
	var ph2 = $("#officephone2").val();	
	if(ph2.length >= 2)
	{ 
		$("#officephone3").focus(); 
	}
}

function checkcellPhone1()
{
	var cellph1 = $("#mobilephone1").val();	
	if(cellph1.length >= 2)
	{ 
		$("#mobilephone2").focus(); 
	}
}

function checkcellPhone2()
{
	var cellph2 = $("#mobilephone2").val();	
	if(cellph2.length >= 2)
	{ 
		$("#mobilephone3").focus(); 
	}
}

function isNumberKey(evt)
{
	
var charCode = (evt.which) ? evt.which : event.keyCode;
if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
{ return false; }
return true;
}

function chkvalidate()
{
	var ph1 = $("#officephone1").val();	
	var ph2 = $("#officephone2").val();	
	var ph3 = $("#officephone3").val();	
	if(ph1 == "" || ph1.length != 3)
	{
		$("#phnoerror").show();
		$("#phnoerror").html("Please enter office phone number (10 digits)");
		return false;
	}
	if(ph2 == "" || ph2.length != 3)
	{
		$("#phnoerror").show();
		$("#phnoerror").html("Please enter office phone number (10 digits)");
		return false;
	}
	if(ph3 == "" || ph3.length != 4)
	{
		$("#phnoerror").show();
		$("#agentphonenumber3").focus();
		$("#phnoerror").html("");
		$("#phnoerror").html("Please enter office phone number (10 digits)");
		return false;
	}
	else
	{
		$("#phnoerror").hide();
		return true;
	}	
	
	
}
function chkmobilenumbervalidate()
{
	var mobph1 = $("#mobilephone1").val();	
	var mobph2 = $("#mobilephone2").val();	
	var mobph3 = $("#mobilephone3").val();	
	if(mobph1 == "" || mobph1.length != 3)
	{
		$("#mobphnoerror").show();
		$("#mobphnoerror").html("Please enter mobile phone number (10 digits)");
		return false;
	}
	if(mobph2 == "" || mobph2.length != 3)
	{
		$("#mobphnoerror").show();
		$("#mobphnoerror").html("Please enter mobile phone number (10 digits)");
		return false;
	}
	if(mobph3 == "" || mobph3.length != 4)
	{
		$("#mobphnoerror").show();
		//$("#agentphonenumber3").focus();
		$("#mobphnoerror").html("");
		$("#mobphnoerror").html("Please enter mobile phone number (10 digits)");
		return false;
	}
	else
	{
		$("#mobphnoerror").hide();
		return true;
	}	
	
	
}
/*
$(document).ready(function(){
	$("#agentfirstname").change(function(e){
		$.ajax({

			url: "<?php echo base_url(); ?>manageagents/check_first_name",
			type: "POST",
			data: 'name='+$("#agentfirstname").val()+'&param=add_agent',
			dataType: "text",
			cache:false,
			success: function(result)
			{
				if(result>0){
					$("#agentfirstname").addClass(' error');
					e.preventDefault();
					$("#agentfirstname").focus();
					return false;
				}
			}

		});
	}); 

});*/

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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Agents /</span> <span>Add Agent</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>manageagents/manage_agents" style="color:#FFF">Manage Agents </a>/<span>Add Agent</span></div>
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
  <form role="form" method="POST" id="addagentformid" novalidate="novalidate" enctype="multipart/form-data">
  <div class="form-group">
    <label for="agentfirstname">Agent First Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentfirstname" id="agentfirstname" placeholder="Enter Agent First Name">
  </div>
  
  <div class="form-group">
    <label for="agentlastname">Agent Last Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentlastname" id="agentlastname" placeholder="Enter Agent Last Name">
  </div>
  
  <!--<div class="form-group">
    <label for="agentnamesuffix">Agent Name Suffix<span class="required_field">  </span></label>
    <input type="text" class="form-control" name="agentnamesuffix" id="agentnamesuffix" placeholder="Enter Agent Name Suffix">
  </div>
  
  <div class="form-group">
    <label for="agentmiddleinitial">Agent Middle Initial<span class="required_field">  </span></label>
    <input type="text" class="form-control" name="agentmiddleinitial" id="agentmiddleinitial" placeholder="Enter Agent Middle Initial">
  </div>
  
  <div class="form-group">
    <label for="agentnickname">Agent Nick Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentnickname" id="agentnickname" placeholder="Enter Agent Nick Name">
  </div>
  
 <div class="form-group"  >
    <label for="agentpreferredfirstname">Agent Preferred First Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentpreferredfirstname" id="agentpreferredfirstname" placeholder="Enter Agent Preferred First Name">
  </div>
  
  <div class="form-group">
    <label for="agentpreferredlastname">Agent Preferred Last Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentpreferredlastname" id="agentpreferredlastname" placeholder="Enter Agent Preferred Last Name">
  </div>-->
  
  <!--<div class="form-group">
    <label for="agentpreferredlastname">Agent ID<span class="required_field"> * </span></label>
    -->
	<!--<input type="hidden" class="form-control" name="agentid" id="agentid" value="" placeholder="Enter Agent ID">-->
  <!--</div>-->
  
  <div class="form-group">
    <label for="agentlastname">Agent Email<span class="required_field"> * </span></label>
    <input type="email" class="form-control" name="agentemail" id="agentemail" placeholder="Enter Your Email">
  </div>
  
  
  <div class="form-group">
    
	<label for="exampleInputPassword1">Mobile Number<span class="required_field"> * </span></label>
    <table style="width:60% !important;"><tr><td><input type="text" class="form-control" name="mobilephone1" id="mobilephone1" placeholder="xxx" onkeypress="checkcellPhone1(); return isNumberKey(event);" maxlength="3"> - </td>	
 
	<td><input type="text" class="form-control" name="mobilephone2" id="mobilephone2" placeholder="xxx"  onkeypress="checkcellPhone2(); return isNumberKey(event);" maxlength="3"> - </td>
	
	<td><input type="text" class="form-control" name="mobilephone3" id="mobilephone3" placeholder="xxxx"  onkeypress="return isNumberKey(event)" maxlength="4"></td> </tr></table>
	
	<label for="phonenumber4" generated="true" class="error" id="mobphnoerror" style="display:none;">Please enter mobile phone number</label>
  </div>
 <!-- <div class="form-group">
    <label for="agentpreferredlastname">Agent Key<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentkey" id="agentkey" onkeypress="return isNumberKey(event);" placeholder="Enter Agent Key">
  </div>
  
  <div class="form-group">
    <label for="agentpreferredlastname">Agent System Locale<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentsystemlocale" id="agentsystemlocale" placeholder="Enter Agent System Locale">
  </div>
  
  <div class="form-group">
    <label for="agentpreferredlastname">Agent Sub System Locale<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentsubsystemlocale" id="agentsubsystemlocale" placeholder="Enter Agent Sub System Locale">
  </div>
  
  <div class="form-group">
    <label for="agentpreferredlastname">Office ID<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="officeid" id="officeid" placeholder="Enter Office ID">
  </div> -->  
   <div class="form-group">
    <label for="agentpreferredlastname">Agent Description<span class="required_field"> * </span></label>
       <textarea class="form-control" name="description" id="description" placeholder="Agent Description" required></textarea>
  </div>  
  
  <div class="form-group">
    <label for="agentpreferredlastname">Job Title<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="officetradingas" id="officetradingas" placeholder="Enter Job Title">
  </div> 

  <div class="form-group">
    
	<label for="exampleInputPassword1">Office Phone Number<span class="required_field"> * </span></label>
    <table style="width:60% !important;"><tr><td><input type="text" class="form-control" name="officephone1" id="officephone1" placeholder="xxx" onkeypress="checkPhone1(); return isNumberKey(event);" maxlength="3"> - </td>	
 
	<td><input type="text" class="form-control" name="officephone2" id="officephone2" placeholder="xxx"  onkeypress="checkPhone2(); return isNumberKey(event);" maxlength="3"> - </td>
	
	<td><input type="text" class="form-control" name="officephone3" id="officephone3" placeholder="xxxx"  onkeypress="return isNumberKey(event)" maxlength="4"></td> </tr></table>
	
	<label for="phonenumber3" generated="true" class="error" id="phnoerror" style="display:none;">Please enter office phone number</label>
  </div>
  
    <!--<div class="form-group">
    <label for="agentpreferredlastname">Office City Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="officecityname" id="officecityname" placeholder="Enter Office City Name">
  </div>  
  
    <div class="form-group">
    <label for="agentpreferredlastname">Office State<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="officestate" id="officestate" placeholder="Enter Office State">
  </div>   
  
  
  <div class="form-group">
    <label for="agentcontacttimelabel">Agent Source Creation Time Stamp<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentsourcecreationtimestamp" id="datepicker1" placeholder="Enter Agent Source Creation Time Stamp">
  </div>
  
  <div class="form-group">
    <label for="agentcontacttimelabel">Agent Modification Time Stamp<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentmodificationtimestamp" id="datepicker2" placeholder="Enter Agent Modification Time Stamp">
  </div>
  
  <div class="form-group">
    <label for="agentcontacttimelabel">Agent Source Modification Time Stamp<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="agentsourcemodificationtimestamp" id="datepicker3" placeholder="Enter Agent Source Modification Time Stamp">
  </div>  

  <div class="form-group">
    <label for="agentcontacttimelabel">Office Source Creation Time Stamp<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="officesourcecreationtimestamp" id="datepicker4" placeholder="Enter Office Source Creation Time Stamp">
  </div> 
  
  <div class="form-group">
    <label for="agentcontacttimelabel">Office Source Modification Time Stamp<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="officesourcemodificationtimestamp" id="datepicker5" placeholder="Enter Office Source Modification Time Stamp">
  </div>-->

<div class="form-group btn-file upload-files-new">
   <label for="exampleInputEmail1">Upload Photo<span class="required_field">*</span></label>
   
    <input type="file" name="userfile" id="profimage" class="form-control file-btn" style="height:36px;"/>
	
 </div>   
  
 
  <div class="form-group">
    <label for="agentstatus">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status">
       <option value="">Status</option>
       <option value="1">Active</option>
	   <option value="0">Inactive</option>
       
   </select>
   </div>
  
 
  <input type="hidden" class="form-control" name="createdby" value="<?php echo $_SESSION['admin_id'];?>">
  <button type="submit" name="addagentposted" class="btn btn-xs btn-default btyellow" style="height:35px;">Add Agent</button>
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