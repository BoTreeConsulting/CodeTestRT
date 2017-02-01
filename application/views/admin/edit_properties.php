<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Edit Property</title>
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Properties /</span> <span>Edit Property</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/managepropertylist" style="color:#FFF">Manage Properties</a>/<span>Edit Property</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<form role="form" method="POST" id="editpageformid"  action="<?php echo base_url('manageproperty/save_update_property');?>/<?php echo $editproperty[0]['Id'];?>"  novalidate="novalidate">
		<div class="col-md-12">
					<fieldset>
					<legend>Basic Information:</legend>
					<div class="col-md-6">
				<!-- Start Basic Information -->
				
					<div class="form-group"  >
					<label for="exampleInputListID">ListingID<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="listingid" id="listingid" placeholder="Enter ListingID" value="<?php echo $editproperty[0]['ListingID'];?>" onkeypress="return isNumberKey(event)" >
					</div>
					
					
					<!--<div class="form-group"  >
					<label for="exampleInputListID">AgentID<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="agentid" id="agentid" placeholder="Enter AgentID" value="<?php echo $editproperty[0]['ListAgentAgentID'];?>"  onkeypress="return isNumberKey(event)" >
					</div>-->
					
					
					
					<div class="form-group">
					
					<?php

                      $agentsname=$this->db->query("select AgentFirstName,AgentID from tbl_agents where is_active='1'")->result();	
                       					  

					?>
					
					<label for="exampleInputListID">Agent Name<span class="required_field"> * </span></label>
					<select  class="form-control" name="agentid" id="agentid">
					
					<?php 
					foreach($agentsname as $agentsnameval)
					{					
	
	                 ?>
	
	             <option value="<?php echo $agentsnameval->AgentID;?>" <?php if($editproperty[0]['ListAgentAgentID'] == $agentsnameval->AgentID){ echo "selected";}?> ><?php echo $agentsnameval->AgentFirstName;?></option>
				 <?php
					}
					?>
					</select>
					
					</div>
					
					

					<div class="form-group">
					<label for="exampleInputAddress">Full Street Address<span class="required_field"> * </span></label>
					<textarea class="form-control" name="fullstreetaddress" id="fullstreetaddress" placeholder="Enter Full Street Address"><?php echo $editproperty[0]['FullStreetAddress'];?></textarea>
					</div>	
					<div class="form-group">
					<label for="exampleInputAddress">City Name<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="cityname" id="cityname" placeholder="Enter City Name" value="<?php echo $editproperty[0]['CityName'];?>">
					</div>

					<div class="form-group">
					<label for="exampleInputState">State<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="state" id="state" placeholder="Enter State" value="<?php echo $editproperty[0]['State'];?>">
					</div>
					
					<div class="form-group">
					<label for="exampleInputCountry">Country<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="country" id="country" placeholder="Enter Country" value="<?php echo $editproperty[0]['County'];?>">
					</div>
					<div class="form-group">
					<label for="exampleInputPincode">Postal Code<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Postal Code" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['PostalCode'];?>">
					</div>
					
					<div class="form-group">
					<label for="exampleInputPincode">Latitude<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="latitudeval" id="latitudeval" placeholder="Enter Latitude" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['Latitude'];?>">
					</div>
					
					<div class="form-group">
					<label for="exampleInputPincode">List Price<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="listprice" id="listprice" placeholder="Enter Listing Price" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['ListPrice'];?>">
					</div>
					<div class="form-group">
					<label for="exampleInputPincode">Beds<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="beds" id="beds" placeholder="Enter Number of Bedrooms" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['Beds'];?>">
					</div>	
					
					
					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="exampleInputPincode">Bathrooms<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bathrooms" id="bathrooms" placeholder="Enter Number of Bathrooms" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['Bathrooms'];?>">
					</div>
					
					<div class="form-group">
					<label for="exampleInputGrossSQFT">Gross SQFT</label>
					<input type="text" class="form-control" name="grosssqft" id="grosssqft" placeholder="Enter Gross SQFT" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['GrossSQFT'];?>">
					</div>	
					<div class="form-group">
					<label for="exampleInputLandSqFt">Land SqFt<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="landsqft" id="landsqft" placeholder="Enter Land SqFt" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['LandSqFt'];?>">
					</div>	
					
					<div class="form-group">
					<label for="exampleInputLeasableSQFT">Leasable SQFT</label>
					<input type="text" class="form-control" name="leasablesqft" id="leasablesqft" placeholder="Enter Leasable SQFT" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['LeasableSQFT'];?>">
					</div>
					
					<div class="form-group">
					<label for="exampleInputNetSQFT">Net SQFT<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="netsqft" id="netsqft" placeholder="Enter Net SQFT" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['NetSQFT'];?>">
					</div>
					
					<div class="form-group">
					<label for="exampleInputPropertyType">Property Type<span class="required_field"> * </span></label>
					<select  class="form-control" name="propertytype" id="propertytype">
					<option value="Residential" <?php if($editproperty[0]['PropertyType'] == "Residential"){ echo "selected";}?>>Residential</option>
					</select>
					</div>	
					<div class="form-group">
					<label for="exampleInputType">Type<span class="required_field"> * </span></label>
					<select  class="form-control" name="type">
					<option value="Building" <?php if($editproperty[0]['Type'] == "Residential"){ echo "selected";}?>>Building</option>
					<option value="Detached" <?php if($editproperty[0]['Type'] == "Residential"){ echo "selected";}?>>Detached</option>
					</select>
					</div>
					
					
					<div class="form-group">
					<label for="exampleInputPincode">Longitude<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="longitudeval" id="longitudeval" placeholder="Enter Longitude" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['Longitude'];?>">
					</div>
					
					<div class="form-group">
					<label for="exampleRemarks">Remarks<span class="required_field"> * </span></label>
					<textarea class="form-control" name="remarks" id="remarks" placeholder="Enter Remarks"><?php echo $editproperty[0]['Remarks'];?></textarea>
					</div>
					
					<div class="form-group">
					<label for="exampleInputCountry">Contact Phone Number<span class="required_field"> * </span></label>
					<table style="width:60% !important;"><tr><td><input type="text" class="form-control" name="agentphonenumber1" id="agentphonenumber1" placeholder="xxx" onkeypress="checkPhone1(); return isNumberKey(event);" maxlength="3" value="<?php echo substr($editproperty[0]['ListOfficeOfficePhone'], 0, 3);?>"> - </td>	

					<td><input type="text" class="form-control" name="agentphonenumber2" id="agentphonenumber2" placeholder="xxx" onkeypress="checkPhone2(); return isNumberKey(event);" maxlength="3" value="<?php echo substr($editproperty[0]['ListOfficeOfficePhone'], 3, 3);?>"> - </td>

					<td><input type="text" class="form-control" name="agentphonenumber3" id="agentphonenumber3" placeholder="xxxx" onkeypress="return isNumberKey(event)" maxlength="4" value="<?php echo substr($editproperty[0]['ListOfficeOfficePhone'], 6, 4);?>"></td> </tr></table>

					<label for="phonenumber3" generated="true" class="error" id="phnoerror" style="display:none;">Please Enter a Phone Number</label>
					</div>
					<!-- End Basic Information -->
					</div>
					</fieldset>
					</div>
					<div class="col-md-12">
					<fieldset>
					<legend>Bedroom Information:</legend>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Fourth1 Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomfourth1length" id="bedroomfourth1length" placeholder="Enter Bedroom Fourth1 Length" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['BedroomFourth1Length'];?>">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Fourth1 Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomfourth1level" id="bedroomfourth1level" placeholder="Enter Bedroom Fourth1 Level" value="<?php echo $editproperty[0]['BedroomFourth1Level'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Fourth1 Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomfourth1width" id="bedroomfourth1width" placeholder="Enter Bedroom Fourth1 Width" onkeypress="return isNumberKey(event)" value="<?php echo $editproperty[0]['BedroomFourth1Width'];?>">
					</div>

					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Master1 Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroommaster1length" id="bedroommaster1length" placeholder="Enter Bedroom Master1 Length" onkeypress="return isNumberKey(event)" value="<?php echo $editproperty[0]['BedroomMaster1Length'];?>">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Master1 Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroommaster1level" id="bedroommaster1level" placeholder="Enter Bedroom Master1 Level" value="<?php echo $editproperty[0]['BedroomMaster1Level'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Master1 Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroommaster1width" id="bedroommaster1width" placeholder="Enter Bedroom Master1 Width" onkeypress="return isNumberKey(event)" value="<?php echo $editproperty[0]['BedroomMaster1Width'];?>">
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Second1 Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomsecond1length" id="bedroomsecond1length" placeholder="Enter Bedroom Second1 Length" onkeypress="return isNumberKey(event)" value="<?php echo $editproperty[0]['BedroomSecond1Length'];?>">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Second1 Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomsecond1level" id="bedroomsecond1level" placeholder="Enter Bedroom Second1 Level" value="<?php echo $editproperty[0]['BedroomSecond1Level'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Second1 Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomsecond1width" id="bedroomsecond1width" placeholder="Enter Bedroom Second1 Width" onkeypress="return isNumberKey(event)" value="<?php echo $editproperty[0]['BedroomSecond1Width'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Third1 Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomthird1length" id="bedroomthird1length" placeholder="Enter Bedroom Third1 Length" onkeypress="return isNumberKey(event)" value="<?php echo $editproperty[0]['BedroomThird1Length'];?>">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Third1 Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomthird1level" id="bedroomthird1level" placeholder="Enter Bedroom Third1 Level" value="<?php echo $editproperty[0]['BedroomThird1Level'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Bedroom Third1 Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bedroomthird1width" id="bedroomthird1width" placeholder="Enter Bedroom Third1 Width" onkeypress="return isNumberKey(event)" value="<?php echo $editproperty[0]['BedroomThird1Width'];?>">
					</div>	
					<div class="form-group">
					<?php $MainBedroom = explode(',', $editproperty[0]['MainBedroom']); ?>
					<label for="agentcontacttimelabel">Main Bedroom<span class="required_field"> * </span></label>
					<input type="checkbox" name="mainbedroom[]" id="mainbedroom" value="FullBath-MBR" <?php if(in_array('FullBath-MBR', $MainBedroom)) { echo 'checked="checked"';}?>>FullBath-MBR
					<input type="checkbox" name="mainbedroom[]" id="mainbedroom" value="WalkInClstMB" <?php if(in_array('WalkInClstMB', $MainBedroom)) { echo 'checked="checked"';}?>>WalkInClstMB
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
					<input type="text" class="form-control" name="bathsfull" id="bathsfull" placeholder="Enter BathsFull" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['BathsFull'];?>">
					</div>
					<div class="form-group">
					<label for="exampleInputBathsHalf">BathsHalf<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="bathshalf" id="bathshalf" placeholder="Enter BathsHalf" onkeypress="return isNumberKey(event);" value="<?php echo $editproperty[0]['BathsHalf'];?>">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Lower Floor1 Baths</label>
					<input type="text" class="form-control" name="lowerfloor1baths" id="lowerfloor1baths" placeholder="Enter Lower Floor1 Baths" onkeypress="return isNumberKey(event)" value="<?php echo $editproperty[0]['LowerFloor1Baths'];?>">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Lower Floor1 HalfBaths</label>
					<input type="text" class="form-control" name="lowerfloor1halfbaths" id="lowerfloor1halfbaths" placeholder="Enter Lower Floor1 HalfBaths" value="<?php echo $editproperty[0]['LowerFloor1HalfBaths'];?>">
					</div>
					
					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Main Floor Baths<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="mainfloorbaths" id="mainfloorbaths" placeholder="Enter Main Floor Baths" value="<?php echo $editproperty[0]['MainFloorBaths'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Main Floor HalfBaths</label>
					<input type="text" class="form-control" name="mainfloorhalfbaths" id="mainfloorhalfbaths" placeholder="Enter Main Floor HalfBaths" value="<?php echo $editproperty[0]['MainFloorHalfBaths'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Upper Floor1 Baths</label>
					<input type="text" class="form-control" name="upperfloor1baths" id="upperfloor1baths" placeholder="Enter Upper Floor1 Baths" value="<?php echo $editproperty[0]['UpperFloor1Baths'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Upper Floor1 HalfBaths</label>
					<input type="text" class="form-control" name="upperfloor1halfbaths" id="upperfloor1halfbaths" placeholder="Enter Upper Floor1 HalfBaths" value="<?php echo $editproperty[0]['UpperFloor1HalfBaths'];?>">
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
					<input type="text" class="form-control" name="kitchen1length" id="kitchen1length" placeholder="Enter Kitchen1 Length" value="<?php echo $editproperty[0]['Kitchen1Length'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Kitchen1 Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="kitchen1level" id="kitchen1level" placeholder="Enter Kitchen1 Level" value="<?php echo $editproperty[0]['Kitchen1Level'];?>">
					</div>	
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Kitchen1 Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="kitchen1width" id="kitchen1width" placeholder="Enter Kitchen1 Width" value="<?php echo $editproperty[0]['Kitchen1Width'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Cooking Fuel<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="cookingfuel" id="cookingfuel" placeholder="Enter Cooking Fuel" value="<?php echo $editproperty[0]['CookingFuel'];?>">
					</div>	
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Dining Kitchen<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="diningkitchen" id="diningkitchen" placeholder="Enter Dining Kitchen" value="<?php echo $editproperty[0]['DiningKitchen'];?>">
					</div>

					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Dining Room<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="diningroom" id="diningroom" placeholder="Enter Dining Room" value="<?php echo $editproperty[0]['DiningRoom'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Dining Room Length<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="diningroomlength" id="diningroomlength" placeholder="Enter Dining Room Length" value="<?php echo $editproperty[0]['DiningRoomLength'];?>">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Dining Room Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="diningroomlevel" id="diningroomlevel" placeholder="Enter Dining Room Level" value="<?php echo $editproperty[0]['DiningRoomLevel'];?>">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Dining Room Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="diningroomwidth" id="diningroomwidth" placeholder="Enter Dining Room Width" value="<?php echo $editproperty[0]['DiningRoomWidth'];?>">
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
					<input type="text" class="form-control" name="livingroomlength" id="livingroomlength" placeholder="Enter LivingRoom Length" value="<?php echo $editproperty[0]['LivingRoomLength'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">LivingRoom Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="livingroomlevel" id="livingroomlevel" placeholder="Enter LivingRoom Level" value="<?php echo $editproperty[0]['LivingRoomLevel'];?>">
					</div>	
					
					<div class="form-group">
					<label for="agentcontacttimelabel">LivingRoom Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="livingroomwidth" id="livingroomwidth" placeholder="Enter LivingRoom Width" value="<?php echo $editproperty[0]['LivingRoomWidth'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Family Room<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="familyroom" id="familyroom" placeholder="Enter Family Room" value="<?php echo $editproperty[0]['FamilyRoom'];?>">
					</div>	
					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">FamilyRoom Length</label>
					<input type="text" class="form-control" name="familyroomlength" id="familyroomlength" placeholder="Enter FamilyRoom Length" value="<?php echo $editproperty[0]['FamilyRoomLength'];?>">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">FamilyRoom Level</label>
					<input type="text" class="form-control" name="familyroomlevel" id="familyroomlevel" placeholder="Enter FamilyRoom Level" value="<?php echo $editproperty[0]['FamilyRoomLevel'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">FamilyRoom Width</label>
					<input type="text" class="form-control" name="familyroomwidth" id="familyroomwidth" placeholder="Enter FamilyRoom Width" value="<?php echo $editproperty[0]['FamilyRoomWidth'];?>">
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
					<input type="text" class="form-control" name="otherrm1length" id="otherrm1length" placeholder="Enter OtherRm1 Length" value="<?php echo $editproperty[0]['OtherRm1Length'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm1 Level<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="otherrm1level" id="otherrm1level" placeholder="Enter OtherRm1 Level" value="<?php echo $editproperty[0]['OtherRm1Level'];?>">
					</div>	

					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm1 Name<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="otherrm1name" id="otherrm1name" placeholder="Enter OtherRm1 Name" value="<?php echo $editproperty[0]['OtherRm1Name'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm1 Width<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="otherrm1width" id="otherrm1width" placeholder="Enter OtherRm1 Width" value="<?php echo $editproperty[0]['OtherRm1Width'];?>">
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
					<input type="text" class="form-control" name="otherrm2length" id="otherrm2length" placeholder="Enter OtherRm2 Length" value="<?php echo $editproperty[0]['OtherRm2Length'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm2 Level</label>
					<input type="text" class="form-control" name="otherrm2level" id="otherrm2level" placeholder="Enter OtherRm2 Level" value="<?php echo $editproperty[0]['OtherRm2Level'];?>">
					</div>	

					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm2 Name</label>
					<input type="text" class="form-control" name="otherrm2name" id="otherrm2name" placeholder="Enter OtherRm2 Name" value="<?php echo $editproperty[0]['OtherRm2Name'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm2 Width</label>
					<input type="text" class="form-control" name="otherrm2width" id="otherrm2width" placeholder="Enter OtherRm2 Width" value="<?php echo $editproperty[0]['OtherRm2Width'];?>">
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
					<input type="text" class="form-control" name="otherrm3length" id="otherrm3length" placeholder="Enter OtherRm3 Length" value="<?php echo $editproperty[0]['OtherRm3Length'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm3 Level</label>
					<input type="text" class="form-control" name="otherrm3level" id="otherrm3level" placeholder="Enter OtherRm3 Level" value="<?php echo $editproperty[0]['OtherRm3Level'];?>">
					</div>	

					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm3 Name</label>
					<input type="text" class="form-control" name="otherrm3name" id="otherrm3name" placeholder="Enter OtherRm3 Name" value="<?php echo $editproperty[0]['OtherRm3Name'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm3 Width</label>
					<input type="text" class="form-control" name="otherrm3width" id="otherrm3width" placeholder="Enter OtherRm3 Width" value="<?php echo $editproperty[0]['OtherRm3Width'];?>">
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
					<input type="text" class="form-control" name="otherrm4length" id="otherrm4length" placeholder="Enter OtherRm4 Length" value="<?php echo $editproperty[0]['OtherRm4Length'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm4 Level</label>
					<input type="text" class="form-control" name="otherrm4level" id="otherrm4level" placeholder="Enter OtherRm4 Level" value="<?php echo $editproperty[0]['OtherRm4Level'];?>">
					</div>	

					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm4 Name</label>
					<input type="text" class="form-control" name="otherrm4name" id="otherrm4name" placeholder="Enter OtherRm4 Name" value="<?php echo $editproperty[0]['OtherRm4Name'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">OtherRm4 Width</label>
					<input type="text" class="form-control" name="otherrm4width" id="otherrm4width" placeholder="Enter OtherRm4 Width" value="<?php echo $editproperty[0]['OtherRm4Width'];?>">
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
					<input type="text" class="form-control" name="laundryroomlength" id="laundryroomlength" placeholder="Enter LaundryRoom Length" value="<?php echo $editproperty[0]['LaundryRoomLength'];?>">
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Laundry Type</label>
					<input type="text" class="form-control" name="laundrytype" id="laundrytype" placeholder="Enter Laundry Type" value="<?php echo $editproperty[0]['LaundryType'];?>">
					</div>
					
					<div class="form-group">
					<label for="agentcontacttimelabel">Laundry Room</label>
					<input type="text" class="form-control" name="laundryroom" id="laundryroom" placeholder="Enter Laundry Room" value="<?php echo $editproperty[0]['LaundryRoom'];?>">
					</div>	

					</div>
					<div class="col-md-6">
					
					<div class="form-group">
					<label for="agentcontacttimelabel">LaundryRoom Width</label>
					<input type="text" class="form-control" name="laundryroomwidth" id="laundryroomwidth" placeholder="Enter LaundryRoom Width" value="<?php echo $editproperty[0]['LaundryRoomWidth'];?>">
					</div>	
					<div class="form-group">
					<label for="agentcontacttimelabel">LaundryRoom Level</label>
					<input type="text" class="form-control" name="laundryroomlevel" id="laundryroomlevel" placeholder="Enter LaundryRoom Level" value="<?php echo $editproperty[0]['LaundryRoomLevel'];?>">
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
					<input type="text" class="form-control" name="Basement" id="Basement" placeholder="Enter Basement" value="<?php echo $editproperty[0]['Basement'];?>">
					</div>

					</div>
					<div class="col-md-6">
					<div class="form-group">
					<label for="agentcontacttimelabel">Basement Type<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="BasementType" id="BasementType" placeholder="Enter Basement Type" value="<?php echo $editproperty[0]['BasementType'];?>">
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
					<?php $Appliances = explode(',', $editproperty[0]['Appliances']); ?>
					<div class="form-group">
					<label for="agentcontacttimelabel">Appliances<span class="required_field"> * </span></label>
					<input type="checkbox" name="appliances[]" id="appliances" value="KitPantry" <?php if(in_array('KitPantry', $Appliances)) { echo 'checked="checked"';}?>>KitPantry
					<input type="checkbox" name="appliances[]" id="appliances" value="KitDoubleSin" <?php if(in_array('KitDoubleSin', $Appliances)) { echo 'checked="checked"';}?>>KitDoubleSin
					<input type="checkbox" name="appliances[]" id="appliances" value="KitBuiltInRa" <?php if(in_array('KitBuiltInRa', $Appliances)) { echo 'checked="checked"';}?>>KitBuiltInRa
					<input type="checkbox" name="appliances[]" id="appliances" value="Dishwasher" <?php if(in_array('Dishwasher', $Appliances)) { echo 'checked="checked"';}?>>Dishwasher
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
					<?php $InteriorFeatures = explode(',', $editproperty[0]['InteriorFeatures']); ?>
					<div class="form-group">
					<label for="agentcontacttimelabel">Interior Features<span class="required_field"> * </span></label>
					<input type="checkbox" name="interiors[]" id="interiors" value="Cathedral/Va" <?php if(in_array('Cathedral/Va', $InteriorFeatures)) { echo 'checked="checked"';}?>>Cathedral/Va
					<input type="checkbox" name="interiors[]" id="interiors" value="CeilngFan(s)" <?php if(in_array('CeilngFan(s)', $InteriorFeatures)) { echo 'checked="checked"';}?>>CeilngFan(s)
					<input type="checkbox" name="interiors[]" id="interiors" value="CableTVWired" <?php if(in_array('CableTVWired', $InteriorFeatures)) { echo 'checked="checked"';}?>>CableTVWired
					<input type="checkbox" name="interiors[]" id="interiors" value="AirFilterSys" <?php if(in_array('AirFilterSys', $InteriorFeatures)) { echo 'checked="checked"';}?>>AirFilterSys
					<input type="checkbox" name="interiors[]" id="interiors" value="WaterTreatSy" <?php if(in_array('WaterTreatSy', $InteriorFeatures)) { echo 'checked="checked"';}?>>WaterTreatSy
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
					<?php $Heating = explode(',', $editproperty[0]['Heating']); ?>
					<div class="col-md-6">
					<fieldset>
					<legend>Heating & Cooling:</legend>
					<div class="form-group">
					<label for="agentcontacttimelabel">Heating<span class="required_field"> * </span></label>
					<input type="checkbox" name="heating[]" id="heating" value="Propane" <?php if(in_array('Propane', $Heating)) { echo 'checked="checked"';}?>>Propane
					<input type="checkbox" name="heating[]" id="heating" value="Forced Air"  <?php if(in_array('Forced Air', $Heating)) { echo 'checked="checked"';}?>>Forced Air
					<!--<input type="text" class="form-control" name="heating" id="heating" placeholder="Enter Heating">-->
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Central Air<span class="required_field"> * </span></label>
					<select  class="form-control" name="centralair">
					<option value="Y" <?php if($editproperty[0]['CentralAir'] == "Y"){ echo "selected";}?>>Yes</option>
					<option value="N" <?php if($editproperty[0]['CentralAir'] == "N"){ echo "selected";}?>>No</option>
					</select>
					</div>
					<div class="form-group">
					<label for="agentcontacttimelabel">Cooling<span class="required_field"> * </span></label>
					<input type="text" class="form-control" name="cooling" id="cooling" placeholder="Enter Cooling" value="<?php echo $editproperty[0]['Cooling'];?>">
					</div>
					</fieldset>
					</div>
					<div class="col-md-6">
					<fieldset>
					<legend>&nbsp;</legend>
					<div class="form-group">
					<label for="agentstatus">Listing Status</label>
					<select  class="form-control" name="listingstatus">
					<option value="ACTIVE" <?php if($editproperty[0]['LocaleListingStatus'] == "ACTIVE"){ echo "selected";}?>>Active</option>
					<option value="INACTIVE" <?php if($editproperty[0]['LocaleListingStatus'] == "INACTIVE"){ echo "selected";}?>>Inactive</option>

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