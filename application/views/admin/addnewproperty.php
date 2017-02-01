<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Add Property</title>
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

<script type="text/javascript">
        function blockSpecialChar(e) {
            var k = e.keyCode;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8   || (k >= 48 && k <= 57));
        }
		
		
</script>  
	  
  <style>
  #agentphonenumber1, #agentphonenumber2 {
  width: 80px;
  display: inline-block;
}
#agentphonenumber3 {
  width: 100px;
  display: inline-block;
}
  </style>	  
	<script type="text/javascript">
		// When the browser is ready...
		$(function() 
		{
			// Setup form validation on the #register-form element
			$("#addagentformid").validate({
				// Specify the validation rules
				rules: {
					listingid: "required",
					agentid: "required",
					fullstreetaddress: "required",
					cityname: "required",
					state: "required",
					country: "required",
					pincode: "required",
					latitudeval: "required",
					listprice: "required",
					beds: "required",
					bathrooms: "required",
					landsqft: "required",
					netsqft: "required",
					propertytype: "required",
					type: "required",
					longitudeval: "required",
					remarks: "required",
					bedroomfourth1length: "required",
					bedroomfourth1level: "required",
					bedroomfourth1width: "required",
					bedroommaster1length: "required",
					bedroommaster1level: "required",
					bedroommaster1width: "required",
					bedroomsecond1length: "required",
					bedroomsecond1level: "required",
					bedroomsecond1width: "required",
					"mainbedroom[]" : "required",
					
					bathsfull: "required",
					bathshalf: "required",
					mainfloorbaths: "required",
					kitchen1length: "required",
					kitchen1level: "required",
					kitchen1width: "required",
					cookingfuel: "required",
					diningkitchen: "required",
					diningroom: "required",
					diningroomlevel: "required",
					diningroomwidth: "required",
					livingroomlength: "required",
					livingroomlevel: "required",
					livingroomwidth: "required",
					familyroom: "required",
					otherrm1length: "required",
					otherrm1level: "required",
					otherrm1name: "required",
					otherrm1width: "required",
					Basement: "required",
					BasementType: "required",
					"appliances[]": "required",
					"interiors[]": "required",
					"heating[]": "required",
					cooling: "required",
					listingstatus: "required"
				},
				// Specify the validation error messages
				messages: {
					listingid: "Please enter Property ID",
					agentid: "Please enter Agent ID",
					fullstreetaddress: "Please enter full street address",
					cityname: "Please enter city name",
					state: "Please enter state",
					country: "Please select country",
					pincode: "Please enter postal code",
					latitudeval: "Please enter latitude",
					listprice: "Please enter property cost",
					beds: "Please enter number of beds",
					bathrooms: "Please enter number of bathrooms",
					landsqft: "Please enter land sqft",
					netsqft: "Please enter net sqft",
					propertytype: "Please select property type",
					type: "Please select type",
					longitudeval: "Please enter longitude",
					remarks: "Please enter remarks",
					bedroomfourth1length: "Please enter bedroomfourth1 length",
					bedroomfourth1level: "Please enter bedroomfourth1 level",
					bedroomfourth1width: "Please enter bedroomfourth1 width",
					bedroommaster1length: "Please enter bedroommaster1 length",
					bedroommaster1level: "Please enter bedroommaster1 level",
					bedroommaster1width: "Please enter bedroommaster1 width",
					bedroomsecond1length: "Please enter bedroomsecond1 length",
					bedroomsecond1level: "Please enter bedroomsecond1 level",
					bedroomsecond1width: "Please enter bedroomsecond1 width",
					"mainbedroom[]": "Please select main bedroom",
					bathsfull: "Please enter bathfull",
					bathshalf: "Please enter bathhalf",
					mainfloorbaths: "Please enter mainfloor baths",
					kitchen1length: "Please enter kitchen1 length",
					kitchen1level: "Please enter kitchen1 level",
					kitchen1width: "Please enter kitchen1 width",
					cookingfuel: "Please enter cooking fuel",
					diningkitchen: "Please enter dining kitchen",
					diningroom: "Please enter dining room",
					diningroomlevel: "Please enter diningroom level",
					diningroomwidth: "Please enter diningroom width",
					livingroomlength: "Please enter livingroom length",
					livingroomlevel: "Please enter livingroom level",
					livingroomwidth: "Please enter livingroom width",
					familyroom: "Please enter familyroom",
					otherrm1length: "Please enter otherrm1 length",
					otherrm1level: "Please enter otherrm1 level",
					otherrm1name: "Please enter otherrm1 name",
					otherrm1width: "Please enter otherrm1 width",
					Basement: "Please enter Basement",
					BasementType: "Please enter Basement type",
					"appliances[]": "Please select appliances",
					"interiors[]": "Please select interiors",
					"heating[]": "Please select heating",
					cooling: "Please enter Cooling",
					listingstatus: "Please select property status"
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
function checkPhone1()
{
	var ph1 = $("#agentphonenumber1").val();	
	if(ph1.length >= 2)
	{ 
		$("#agentphonenumber2").focus(); 
	}
}

function checkPhone2()
{
	var ph2 = $("#agentphonenumber2").val();	
	if(ph2.length >= 2)
	{ 
		$("#agentphonenumber3").focus(); 
	}
}

function isNumberKey(evt)
{
	
var charCode = (evt.which) ? evt.which : event.keyCode;
if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
{ return false; }
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Properties /</span> <span>Add Property</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/managepropertylist" style="color:#FFF">Manage Properties </a>/<span>Add Property</span></div>
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
			<form role="form" method="POST" action="<?php echo base_url('manageproperty/save_add_newproperty');?>" id="addagentformid" novalidate="novalidate">
				<div class="col-md-12">
					<fieldset>
					<legend>Basic Information:</legend>
					<div class="col-md-6">
				<!-- Start Basic Information -->
				
					<div class="form-group"  >
					<label for="exampleInputListID">ListingID<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="listingid" id="listingid" placeholder="Enter ListingID" onkeypress="return isNumberKey(event)" >
					</div>
					
					<!--<div class="form-group"  >
					<label for="exampleInputListID">AgentID<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="agentid" id="agentid" placeholder="Enter AgentID" onkeypress="return isNumberKey(event)" >
					</div>-->
					
					<div class="form-group">
					
					<?php

                      $agentsname=$this->db->query("select AgentFirstName,AgentID from tbl_agents where is_active='1'")->result();	
                       					  

					?>
					
					<label for="exampleInputName">Agent Name<span class="required_field"> * </span></label>
					<select  class="form-control" name="agentid" id="agentid">
					<option value=''>select</option>
					<?php 
					foreach($agentsname as $agentsnameval)
					{
                     					
	echo "<option value='{$agentsnameval->AgentID}'>{$agentsnameval->AgentFirstName}</option>";
					}
					?>
					</select>
					
					</div>

					<div class="form-group">
					<label for="exampleInputAddress">Full Street Address<span class="required_field"> * </span></label>
					<textarea class="form-control" name="fullstreetaddress" id="fullstreetaddress" placeholder="Enter Full Street Address"></textarea>
					</div>	
					<div class="form-group">
					<label for="exampleInputAddress">City Name<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="cityname" id="cityname" placeholder="Enter City Name"></textarea>
					</div>

					<div class="form-group">
					<label for="exampleInputState">State<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="state" id="state" placeholder="Enter State">
					</div>
					
					<div class="form-group">
					<label for="exampleInputCountry">Country<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="country" id="country" placeholder="Enter Country">
					</div>
					
					
					<div class="form-group">
					<label for="exampleInputPincode">Postal Code<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Postal Code" onkeypress="return isNumberKey(event);">
					</div>
					
					<div class="form-group">
					<label for="exampleInputPincode">Latitude<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="latitudeval" id="latitudeval" placeholder="Enter Latitude" onkeypress="return isNumberKey(event);">
					</div>
					
					
					<div class="form-group">
					<label for="exampleInputPincode">List Price<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="listprice" id="listprice" placeholder="Enter Listing Price" onkeypress="return isNumberKey(event);">
					</div>
					<div class="form-group">
					<label for="exampleInputPincode">Beds<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="beds" id="beds" placeholder="Enter Number of Bedrooms" onkeypress="return isNumberKey(event);" >
					</div>	
					
					
					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="exampleInputPincode">Bathrooms<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bathrooms" id="bathrooms" placeholder="Enter Number of Bathrooms" onkeypress="return isNumberKey(event);">
					</div>
					
					<div class="form-group">
					<label for="exampleInputGrossSQFT">Gross SQFT</label>
					<input type="text" class="form-control" name="grosssqft" id="grosssqft" placeholder="Enter Gross SQFT" onkeypress="return isNumberKey(event);">
					</div>	
					<div class="form-group">
					<label for="exampleInputLandSqFt">Land SqFt<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="landsqft" id="landsqft" placeholder="Enter Land SqFt" onkeypress="return isNumberKey(event);">
					</div>	
					
					<div class="form-group">
					<label for="exampleInputLeasableSQFT">Leasable SQFT</label>
					<input type="text" class="form-control" name="leasablesqft" id="leasablesqft" placeholder="Enter Leasable SQFT" onkeypress="return isNumberKey(event);">
					</div>
					
					<div class="form-group">
					<label for="exampleInputNetSQFT">Net SQFT<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="netsqft" id="netsqft" placeholder="Enter Net SQFT" onkeypress="return isNumberKey(event);">
					</div>
					
					<div class="form-group">
					<label for="exampleInputPropertyType">Property Type<span class="required_field"> * </span></label>
					<select  class="form-control" name="propertytype">
					<option value="Residential">Residential</option>
					</select>
					</div>	
					<div class="form-group">
					<label for="exampleInputType">Type<span class="required_field"> * </span></label>
					<select  class="form-control" name="type">
					<option value="Building">Building</option>
					<option value="Detached">Detached</option>
					</select>
					</div>
					
					
					<div class="form-group">
					<label for="exampleInputPincode">Longitude<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="longitudeval" id="longitudeval" placeholder="Enter Longitude" onkeypress="return isNumberKey(event);">
					</div>
					
					
					<div class="form-group">
					<label for="exampleRemarks">Remarks<span class="required_field"> * </span></label>
					<textarea class="form-control" name="remarks" id="remarks" placeholder="Enter Remarks"></textarea>
					</div>
					<!-- End Basic Information -->
					<div class="form-group">
					<label for="exampleInputCountry">Contact Phone Number<span class="required_field"> * </span></label>
					<table style="width:60% !important;"><tr><td><input type="text" class="form-control" name="agentphonenumber1" id="agentphonenumber1" placeholder="xxx" onkeypress="checkPhone1(); return isNumberKey(event);" maxlength="3"> - </td>	

					<td><input type="text" class="form-control" name="agentphonenumber2" id="agentphonenumber2" placeholder="xxx"  onkeypress="checkPhone2(); return isNumberKey(event);" maxlength="3"> - </td>

					<td><input type="text" class="form-control" name="agentphonenumber3" id="agentphonenumber3" placeholder="xxxx"  onkeypress="return isNumberKey(event)" maxlength="4"></td> </tr></table>

					<label for="phonenumber3" generated="true" class="error" id="phnoerror" style="display:none;">Please Enter a Phone Number</label>
					</div>
					
					</div>
					</fieldset>
					</div>
					<div class="col-md-12">
					<fieldset>
					<legend>Bedroom Information:</legend>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Fourth1 Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomfourth1length" id="bedroomfourth1length" placeholder="Enter Bedroom Fourth1 Length" onkeypress="return isNumberKey(event);">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Fourth1 Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomfourth1level" id="bedroomfourth1level" placeholder="Enter Bedroom Fourth1 Level">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Fourth1 Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomfourth1width" id="bedroomfourth1width" placeholder="Enter Bedroom Fourth1 Width" onkeypress="return isNumberKey(event)">
					</div>

					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Master1 Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroommaster1length" id="bedroommaster1length" placeholder="Enter Bedroom Master1 Length" onkeypress="return isNumberKey(event)">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Master1 Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroommaster1level" id="bedroommaster1level" placeholder="Enter Bedroom Master1 Level">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Master1 Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroommaster1width" id="bedroommaster1width" placeholder="Enter Bedroom Master1 Width" onkeypress="return isNumberKey(event)">
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Second1 Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomsecond1length" id="bedroomsecond1length" placeholder="Enter Bedroom Second1 Length" onkeypress="return isNumberKey(event)">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Second1 Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomsecond1level" id="bedroomsecond1level" placeholder="Enter Bedroom Second1 Level">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Second1 Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomsecond1width" id="bedroomsecond1width" placeholder="Enter Bedroom Second1 Width" onkeypress="return isNumberKey(event)">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Third1 Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomthird1length" id="bedroomthird1length" placeholder="Enter Bedroom Third1 Length" onkeypress="return isNumberKey(event)">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Third1 Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomthird1level" id="bedroomthird1level" placeholder="Enter Bedroom Third1 Level">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Third1 Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomthird1width" id="bedroomthird1width" placeholder="Enter Bedroom Third1 Width" onkeypress="return isNumberKey(event)">
					</div>	
					<div class="form-group">
					<label for="agentcontacttimelabel">Main Bedroom<span class="required_field"> * </span></label>
					<input type="checkbox" name="mainbedroom[]" id="mainbedroom" value="FullBath-MBR">FullBath-MBR
					<input type="checkbox" name="mainbedroom[]" id="mainbedroom" value="WalkInClstMB">WalkInClstMB
					<!--<input type="text" class="form-control" name="mainbedroom" id="mainbedroom" placeholder="Enter Main Bedroom" onkeypress="return isNumberKey(event)">-->
					</div>
					
					</div>
					</fieldset>
					</div>
					<div class="col-md-12">
					<fieldset>
					<legend>Bathroom Information:</legend>
					<div class="col-md-6">
					<div class="form-group">
					<label for="exampleInputBathsFull">BathsFull<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bathsfull" id="bathsfull" placeholder="Enter BathsFull" onkeypress="return isNumberKey(event);">
					</div>
					<div class="form-group">
					<label for="exampleInputBathsHalf">BathsHalf<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bathshalf" id="bathshalf" placeholder="Enter BathsHalf" onkeypress="return isNumberKey(event);">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Lower Floor1 Baths</label>
					<input type="text" class="form-control" name="lowerfloor1baths" id="lowerfloor1baths" placeholder="Enter Lower Floor1 Baths" onkeypress="return isNumberKey(event)">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Lower Floor1 HalfBaths</label>
					<input type="text" class="form-control" name="lowerfloor1halfbaths" id="lowerfloor1halfbaths" placeholder="Enter Lower Floor1 HalfBaths">
					</div>
					
					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Main Floor Baths<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="mainfloorbaths" id="mainfloorbaths" placeholder="Enter Main Floor Baths">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Main Floor HalfBaths</label>
					<input type="text" class="form-control" name="mainfloorhalfbaths" id="mainfloorhalfbaths" placeholder="Enter Main Floor HalfBaths">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Upper Floor1 Baths</label>
					<input type="text" class="form-control" name="upperfloor1baths" id="upperfloor1baths" placeholder="Enter Upper Floor1 Baths">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Upper Floor1 HalfBaths</label>
					<input type="text" class="form-control" name="upperfloor1halfbaths" id="upperfloor1halfbaths" placeholder="Enter Upper Floor1 HalfBaths">
					</div>
					</div>
					</fieldset>
					</div>
					<div class="col-md-12">
					<fieldset>
					<legend>Kitchen & Dinning Information:</legend>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Kitchen1 Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="kitchen1length" id="kitchen1length" placeholder="Enter Kitchen1 Length">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Kitchen1 Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="kitchen1level" id="kitchen1level" placeholder="Enter Kitchen1 Level">
					</div>	
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Kitchen1 Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="kitchen1width" id="kitchen1width" placeholder="Enter Kitchen1 Width">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Cooking Fuel<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="cookingfuel" id="cookingfuel" placeholder="Enter Cooking Fuel">
					</div>	
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Dining Kitchen<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="diningkitchen" id="diningkitchen" placeholder="Enter Dining Kitchen">
					</div>

					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Dining Room<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="diningroom" id="diningroom" placeholder="Enter Dining Room">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Dining Room Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="diningroomlength" id="diningroomlength" placeholder="Enter Dining Room Length">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Dining Room Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="diningroomlevel" id="diningroomlevel" placeholder="Enter Dining Room Level">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Dining Room Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="diningroomwidth" id="diningroomwidth" placeholder="Enter Dining Room Width">
					</div>
					</div>
					</fieldset>
					</div>
					
					<div class="col-md-12">
					<fieldset>
					<legend>Living & Family Room Information:</legend>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">LivingRoom Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="livingroomlength" id="livingroomlength" placeholder="Enter LivingRoom Length">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">LivingRoom Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="livingroomlevel" id="livingroomlevel" placeholder="Enter LivingRoom Level">
					</div>	
					
					<div class="form-group">
					<label for="agentcontacttimelabel">LivingRoom Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="livingroomwidth" id="livingroomwidth" placeholder="Enter LivingRoom Width">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Family Room<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="familyroom" id="familyroom" placeholder="Enter Family Room">
					</div>	
					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">FamilyRoom Length</label>
					<input type="text" class="form-control" name="familyroomlength" id="familyroomlength" placeholder="Enter FamilyRoom Length">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">FamilyRoom Level</label>
					<input type="text" class="form-control" name="familyroomlevel" id="familyroomlevel" placeholder="Enter FamilyRoom Level">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">FamilyRoom Width</label>
					<input type="text" class="form-control" name="familyroomwidth" id="familyroomwidth" placeholder="Enter FamilyRoom Width">
					</div>
					</div>
					</fieldset>
					</div>
					
					<!-- Other Room Information -->
					<div class="col-md-12">
					<fieldset>
					<legend>Other Room Information:</legend>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm1 Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="otherrm1length" id="otherrm1length" placeholder="Enter OtherRm1 Length">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm1 Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="otherrm1level" id="otherrm1level" placeholder="Enter OtherRm1 Level">
					</div>	

					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm1 Name<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="otherrm1name" id="otherrm1name" placeholder="Enter OtherRm1 Name">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm1 Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="otherrm1width" id="otherrm1width" placeholder="Enter OtherRm1 Width">
					</div>	
					</div>
					</fieldset>
					</div>
					<!-- End Other Room Information -->
					
					<!-- Start Other Room #2 Information -->
					<div class="col-md-12">
					<fieldset>
					<legend>Other Room #2 Information:</legend>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm2 Length</label>
					<input type="text" class="form-control" name="otherrm2length" id="otherrm2length" placeholder="Enter OtherRm2 Length">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm2 Level</label>
					<input type="text" class="form-control" name="otherrm2level" id="otherrm2level" placeholder="Enter OtherRm2 Level">
					</div>	

					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm2 Name</label>
					<input type="text" class="form-control" name="otherrm2name" id="otherrm2name" placeholder="Enter OtherRm2 Name">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm2 Width</label>
					<input type="text" class="form-control" name="otherrm2width" id="otherrm2width" placeholder="Enter OtherRm2 Width">
					</div>	
					</div>
					</fieldset>
					</div>
					<!-- End Other Room #2 Information -->
					
					<!-- Start Other Room #3 Information -->
					<div class="col-md-12">
					<fieldset>
					<legend>Other Room #3 Information:</legend>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm3 Length</label>
					<input type="text" class="form-control" name="otherrm3length" id="otherrm3length" placeholder="Enter OtherRm3 Length">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm3 Level</label>
					<input type="text" class="form-control" name="otherrm3level" id="otherrm3level" placeholder="Enter OtherRm3 Level">
					</div>	

					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm3 Name</label>
					<input type="text" class="form-control" name="otherrm3name" id="otherrm3name" placeholder="Enter OtherRm3 Name">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm3 Width</label>
					<input type="text" class="form-control" name="otherrm3width" id="otherrm3width" placeholder="Enter OtherRm3 Width">
					</div>	
					</div>
					</fieldset>
					</div>
					<!-- End Other Room #3 Information -->
					
					<!-- Start Other Room #4 Information -->
					<div class="col-md-12">
					<fieldset>
					<legend>Other Room #4 Information:</legend>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm4 Length</label>
					<input type="text" class="form-control" name="otherrm4length" id="otherrm4length" placeholder="Enter OtherRm4 Length">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm4 Level</label>
					<input type="text" class="form-control" name="otherrm4level" id="otherrm4level" placeholder="Enter OtherRm4 Level">
					</div>	

					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm4 Name</label>
					<input type="text" class="form-control" name="otherrm4name" id="otherrm4name" placeholder="Enter OtherRm4 Name">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm4 Width</label>
					<input type="text" class="form-control" name="otherrm4width" id="otherrm4width" placeholder="Enter OtherRm4 Width">
					</div>	
					</div>
					</fieldset>
					</div>
					<!-- End Other Room #4 Information -->
					<!-- Start Laundry Room Inoformation -->
					<div class="col-md-12">
					<fieldset>
					<legend>Laundry Room Inoformation:</legend>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">LaundryRoom Length</label>
					<input type="text" class="form-control" name="laundryroomlength" id="laundryroomlength" placeholder="Enter LaundryRoom Length">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Laundry Type</label>
					<input type="text" class="form-control" name="laundrytype" id="laundrytype" placeholder="Enter Laundry Type">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Laundry Room</label>
					<input type="text" class="form-control" name="laundryroom" id="laundryroom" placeholder="Enter Laundry Room">
					</div>	

					</div>
					<div class="col-md-6">
					
					<div class="form-group">
					<label for="agentcontacttimelabel">LaundryRoom Width</label>
					<input type="text" class="form-control" name="laundryroomwidth" id="laundryroomwidth" placeholder="Enter LaundryRoom Width">
					</div>	
					<div class="form-group">
					<label for="agentcontacttimelabel">LaundryRoom Level</label>
					<input type="text" class="form-control" name="laundryroomlevel" id="laundryroomlevel" placeholder="Enter LaundryRoom Level">
					</div>	
					</div>
					</fieldset>
					</div>
					<!-- End Laundry Room Inoformation -->
					
					<!-- Start Basement Information -->
					<div class="col-md-12">
					<fieldset>
					<legend>Basement Information:</legend>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Basement<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="Basement" id="Basement" placeholder="Enter Basement">
					</div>

					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Basement Type<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="BasementType" id="BasementType" placeholder="Enter Basement Type">
					</div>
					</div>
					</fieldset>
					</div>
					<!-- End Basement Information -->
					
					<!-- Start Appliances -->
					<div class="col-md-12">
					<fieldset>
					<legend>Appliances:</legend>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Appliances<span class="required_field"> * </span></label>
					<input type="checkbox" name="appliances[]" id="appliances" value="KitPantry">KitPantry
					<input type="checkbox" name="appliances[]" id="appliances" value="KitDoubleSin">KitDoubleSin
					<input type="checkbox" name="appliances[]" id="appliances" value="KitBuiltInRa">KitBuiltInRa
					<input type="checkbox" name="appliances[]" id="appliances" value="Dishwasher">Dishwasher
					<!--<select  class="form-control" name="appliances">
					<option value="KitPantry">KitPantry</option>
					<option value="KitDoubleSin">KitDoubleSin</option>
					<option value="KitBuiltInRa">KitBuiltInRa</option>
					<option value="Dishwasher">Dishwasher</option>
					</select>-->
					</div>

					</div><div class="col-md-6"></div>
					
					</fieldset>
					</div>
					<!-- End Appliances -->
					
					<!-- Start Interiors -->
					<div class="col-md-12">
					<fieldset>
					<legend>Interiors:</legend>
					<div class="col-md-12">
					<div class="form-group">
					<label for="agentcontacttimelabel">Interior Features<span class="required_field"> * </span></label>
					<input type="checkbox" name="interiors[]" id="interiors" value="Cathedral/Va">Cathedral/Va
					<input type="checkbox" name="interiors[]" id="interiors" value="CeilngFan(s)">CeilngFan(s)
					<input type="checkbox" name="interiors[]" id="interiors" value="CableTVWired">CableTVWired
					<input type="checkbox" name="interiors[]" id="interiors" value="AirFilterSys">AirFilterSys
					<input type="checkbox" name="interiors[]" id="interiors" value="WaterTreatSy">WaterTreatSy
					<!--<select  class="form-control" name="interiors">
					<option value="Cathedral/Va">Cathedral/Va</option>
					<option value="CeilngFan(s)">CeilngFan(s)</option>
					<option value="CableTVWired">CableTVWired</option>
					<option value="AirFilterSys">AirFilterSys</option>
					<option value="WaterTreatSy">WaterTreatSy</option>
					</select>-->
					</div>

					</div>
					
					</fieldset>
					</div>
					<!-- End Interiors -->
					
					<!-- Start Heating & Cooling -->
					<div class="col-md-12">
					
					<div class="col-md-6">
					<fieldset>
					<legend>Heating & Cooling:</legend>
					<div class="form-group">
					<label for="agentcontacttimelabel">Heating<span class="required_field"> * </span></label>
					<input type="checkbox" name="heating[]" id="heating" value="Propane">Propane
					<input type="checkbox" name="heating[]" id="heating" value="Forced Air">Forced Air
					<!--<input type="text" class="form-control" name="heating" id="heating" placeholder="Enter Heating">-->
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Central Air<span class="required_field"> * </span></label>
					<select  class="form-control" name="centralair">
					<option value="Y">Yes</option>
					<option value="N">No</option>
					</select>
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Cooling<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="cooling" id="cooling" placeholder="Enter Cooling">
					</div>
					</fieldset>
					</div>
					<div class="col-md-6">
					<fieldset>
					<legend>&nbsp;</legend>
					<div class="form-group">
					<label for="agentstatus">Listing Status</label>
					<select  class="form-control" name="listingstatus">
					<option value="ACTIVE">Active</option>
					<option value="INACTIVE">Inactive</option>

					</select>
					</div>
					<div class="form-group">
					<input type="hidden" class="form-control" name="createdby" value="<?php echo $_SESSION['admin_id'];?>">
					<button type="submit" name="addagentposted" class="btn btn-xs btn-default btyellow" style="height:35px;">Add Property</button>
					</div>
					</fieldset>
					</div>
					
					
					</div>
					<!-- End Interiors -->
					
			</form>
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