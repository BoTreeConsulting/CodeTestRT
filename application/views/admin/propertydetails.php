<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia View Property Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	   
	  

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/custom-admin.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
	   
	   
	   
	   
	   
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	   <script src="<?php echo base_url();?>assets/css/menu_jquery.js"></script>
	   
	<style>
	
	.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
    }
	
	
	.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 50%;
	height:500px;
	overflow: auto;
	
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
}

.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: fixed;
	
	text-align: center;
	
	top:108px;
	right:308px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	opacity: .8 !important;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #8bca1a; }


td, th{
	white-space : normal !important;
}

     </style>	
       
       
       
       

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
  
   <!-- TO CHECK VALUES COMING OR NOT-->
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?>
    <!-- TO CHECK VALUES COMING OR NOT-->
   
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Properties /</span><span>View Property Details </span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	<div class="headtext1"> <a href="<?php echo base_url();?>admin/managepropertylist" style="color:#FFF">Manage Properties </a>/ <span>Property Details</span></div>
    	
        <div class="mtextarea mtextarea2">
        
		<div class="row">
		<div class="col-md-6">
		
  <!--<div class="form-group">
    <label for="exampleInputEmail1">Listing ID</label> :  <?php echo $properties[0]['ListingID'];?>
   
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Agent ID</label> :  <?php echo $properties[0]['ListAgentAgentID'];?>
   
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Area</label> :  <?php echo $properties[0]['ListingArea'];?>
   
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">City</label> :  <?php echo $properties[0]['CityName'];?>
   
  </div>
  
   <div class="form-group">
    <label for="exampleInputEmail1">State</label> :  
	
	
	<?php echo $properties[0]['State'];?>	
   
  </div>
  
   <div class="form-group">
    <label for="exampleInputEmail1">Country</label> :  <?php echo $properties[0]['County'];?>
   
  </div>
  
   <div class="form-group">
    <label for="exampleInputEmail1">Status</label> :  <?php echo $properties[0]['LocaleListingStatus'];?>
   
  </div>-->
<table>
<tr><td><strong>AboveGradeIntSQFT</strong></td>	<td><?php echo $properties[0]['AboveGradeIntSQFT']?></td></tr>
<tr><td><strong>AboveGradeIntSQFTSource</strong></td>	<td><?php echo $properties[0]['AboveGradeIntSQFTSource']?></td></tr>
<tr><td><strong>AdditionalIncomeSources</strong></td>	<td><?php echo $properties[0]['AdditionalIncomeSources']?></td></tr>
<tr><td><strong>AdditionalSaleTerms</strong></td>	<td><?php echo $properties[0]['AdditionalSaleTerms']?></td></tr>
<tr><td><strong>AddressExportAllowed</strong></td>	<td><?php echo $properties[0]['AddressExportAllowed']?></td></tr>
<tr><td><strong>AltAgentAgentID</strong></td>	<td><?php echo $properties[0]['AltAgentAgentID']?></td></tr>
<tr><td><strong>AltAgentFirstName</strong></td>	<td><?php echo $properties[0]['AltAgentFirstName']?></td></tr>
<tr><td><strong>AltAgentGeneration</strong></td>	<td><?php echo $properties[0]['AltAgentGeneration']?></td></tr>
<tr><td><strong>AltAgentLastName</strong></td>	<td><?php echo $properties[0]['AltAgentLastName']?></td></tr>
<tr><td><strong>AltAgentMiddleInitial</strong></td>	<td><?php echo $properties[0]['AltAgentMiddleInitial']?></td></tr>
<tr><td><strong>AltAgentNickname</strong></td>	<td><?php echo $properties[0]['AltAgentNickname']?></td></tr>
<tr><td><strong>AltAgentPreferredFirstName</strong></td>	<td><?php echo $properties[0]['AltAgentPreferredFirstName']?></td></tr>
<tr><td><strong>AltAgentPreferredLastName</strong></td>	<td><?php echo $properties[0]['AltAgentPreferredLastName']?></td></tr>
<tr><td><strong>AnnualElectricExpense</strong></td>	<td><?php echo $properties[0]['AnnualElectricExpense']?></td></tr>
<tr><td><strong>AnnualGrossExpense</strong></td>	<td><?php echo $properties[0]['AnnualGrossExpense']?></td></tr>
<tr><td><strong>AnnualGrossIncome</strong></td>	<td><?php echo $properties[0]['AnnualGrossIncome']?></td></tr>
<tr><td><strong>AnnualHeatingExpense</strong></td>	<td><?php echo $properties[0]['AnnualHeatingExpense']?></td></tr>
<tr><td><strong>AnnualInsuranceExpense</strong></td>	<td><?php echo $properties[0]['AnnualInsuranceExpense']?></td></tr>
<tr><td><strong>AnnualLeasePrice</strong></td>	<td><?php echo $properties[0]['AnnualLeasePrice']?></td></tr>
<tr><td><strong>AnnualLeasePricePerSqFt</strong></td>	<td><?php echo $properties[0]['AnnualLeasePricePerSqFt']?></td></tr>
<tr><td><strong>AnnualMaintananceExpense</strong></td>	<td><?php echo $properties[0]['AnnualMaintananceExpense']?></td></tr>
<tr><td><strong>AnnualOtherExpense</strong></td>	<td><?php echo $properties[0]['AnnualOtherExpense']?></td></tr>
<tr><td><strong>AnnualWaterSewerExpense</strong></td>	<td><?php echo $properties[0]['AnnualWaterSewerExpense']?></td></tr>
<tr><td><strong>Appliances</strong></td>	<td><?php echo $properties[0]['Appliances']?></td></tr>
<tr><td><strong>ApplicationAt</strong></td>	<td><?php echo $properties[0]['ApplicationAt']?></td></tr>
<tr><td><strong>ApplicationFee</strong></td>	<td><?php echo $properties[0]['ApplicationFee']?></td></tr>
<tr><td><strong>ApprovedSystem</strong></td>	<td><?php echo $properties[0]['ApprovedSystem']?></td></tr>
<tr><td><strong>AssociationFeePaymentFreq</strong></td>	<td><?php echo $properties[0]['AssociationFeePaymentFreq']?></td></tr>
<tr><td><strong>Attics</strong></td>	<td><?php echo $properties[0]['Attics']?></td></tr>
<tr><td><strong>Basement</strong></td>	<td><?php echo $properties[0]['Basement']?></td></tr>
<tr><td><strong>BasementFinishedPercent</strong></td>	<td><?php echo $properties[0]['BasementFinishedPercent']?></td></tr>
<tr><td><strong>BasementFootprintPercent</strong></td>	<td><?php echo $properties[0]['BasementFootprintPercent']?></td></tr>
<tr><td><strong>BasementType</strong></td>	<td><?php echo $properties[0]['BasementType']?></td></tr>
<tr><td><strong>Bathrooms</strong></td>	<td><?php echo $properties[0]['Bathrooms']?></td></tr>
<tr><td><strong>BathsFull</strong></td>	<td><?php echo $properties[0]['BathsFull']?></td></tr>
<tr><td><strong>BathsHalf</strong></td>	<td><?php echo $properties[0]['BathsHalf']?></td></tr>
<tr><td><strong>BedroomFourth1Length</strong></td>	<td><?php echo $properties[0]['BedroomFourth1Length']?></td></tr>
<tr><td><strong>BedroomFourth1Level</strong></td>	<td><?php echo $properties[0]['BedroomFourth1Level']?></td></tr>
<tr><td><strong>BedroomFourth1Width</strong></td>	<td><?php echo $properties[0]['BedroomFourth1Width']?></td></tr>
<tr><td><strong>BedroomMaster1Length</strong></td>	<td><?php echo $properties[0]['BedroomMaster1Length']?></td></tr>
<tr><td><strong>BedroomMaster1Level</strong></td>	<td><?php echo $properties[0]['BedroomMaster1Level']?></td></tr>
<tr><td><strong>BedroomMaster1Width</strong></td>	<td><?php echo $properties[0]['BedroomMaster1Width']?></td></tr>
<tr><td><strong>BedroomSecond1Length</strong></td>	<td><?php echo $properties[0]['BedroomSecond1Length']?></td></tr>
<tr><td><strong>BedroomSecond1Level</strong></td>	<td><?php echo $properties[0]['BedroomSecond1Level']?></td></tr>
<tr><td><strong>BedroomSecond1Width</strong></td>	<td><?php echo $properties[0]['BedroomSecond1Width']?></td></tr>
<tr><td><strong>BedroomThird1Length</strong></td>	<td><?php echo $properties[0]['BedroomThird1Length']?></td></tr>
<tr><td><strong>BedroomThird1Level</strong></td>	<td><?php echo $properties[0]['BedroomThird1Level']?></td></tr>
<tr><td><strong>BedroomThird1Width</strong></td>	<td><?php echo $properties[0]['BedroomThird1Width']?></td></tr>
<tr><td><strong>Beds</strong></td>	<td><?php echo $properties[0]['Beds']?></td></tr>
<tr><td><strong>BelowGradeIntSQFT</strong></td>	<td><?php echo $properties[0]['BelowGradeIntSQFT']?></td></tr>
<tr><td><strong>BelowGradeIntSQFTSource</strong></td>	<td><?php echo $properties[0]['BelowGradeIntSQFTSource']?></td></tr>
<tr><td><strong>BlockOrSquare</strong></td>	<td><?php echo $properties[0]['BlockOrSquare']?></td></tr>
<tr><td><strong>BuilderName</strong></td>	<td><?php echo $properties[0]['BuilderName']?></td></tr>
<tr><td><strong>BuildingFacadeOrientation</strong></td>	<td><?php echo $properties[0]['BuildingFacadeOrientation']?></td></tr>
<tr><td><strong>BuildingFeatures</strong></td>	<td><?php echo $properties[0]['BuildingFeatures']?></td></tr>
<tr><td><strong>BuildingFloors</strong></td>	<td><?php echo $properties[0]['BuildingFloors']?></td></tr>
<tr><td><strong>BuildingName</strong></td>	<td><?php echo $properties[0]['BuildingName']?></td></tr>
<tr><td><strong>BuildingOrBusiness</strong></td>	<td><?php echo $properties[0]['BuildingOrBusiness']?></td></tr>
<tr><td><strong>Buildings</strong></td>	<td><?php echo $properties[0]['Buildings']?></td></tr>
<tr><td><strong>CentralAir</strong></td>	<td><?php echo $properties[0]['CentralAir']?></td></tr>
<tr><td><strong>Certifications</strong></td>	<td><?php echo $properties[0]['Certifications']?></td></tr>
<tr><td><strong>CityName</strong></td>	<td><?php echo $properties[0]['CityName']?></td></tr>
<tr><td><strong>CloseDate</strong></td>	<td><?php echo $properties[0]['CloseDate']?></td></tr>
<tr><td><strong>ClosePrice</strong></td>	<td><?php echo $properties[0]['ClosePrice']?></td></tr>
<tr><td><strong>CommunityFeeIncludes</strong></td>	<td><?php echo $properties[0]['CommunityFeeIncludes']?></td></tr>
<tr><td><strong>CondoAssociation</strong></td>	<td><?php echo $properties[0]['CondoAssociation']?></td></tr>
<tr><td><strong>CookingFuel</strong></td>	<td><?php echo $properties[0]['CookingFuel']?></td></tr>
<tr><td><strong>Cooling</strong></td>	<td><?php echo $properties[0]['Cooling']?></td></tr>
<tr><td><strong>County</strong></td>	<td><?php echo $properties[0]['County']?></td></tr>
<tr><td><strong>CrossStreet</strong></td>	<td><?php echo $properties[0]['CrossStreet']?></td></tr>
<tr><td><strong>CurrentFinancing</strong></td>	<td><?php echo $properties[0]['CurrentFinancing']?></td></tr>
<tr><td><strong>DateAvailable</strong></td>	<td><?php echo $properties[0]['DateAvailable']?></td></tr>
<tr><td><strong>Design</strong></td>	<td><?php echo $properties[0]['Design']?></td></tr>
<tr><td><strong>DiningKitchen</strong></td>	<td><?php echo $properties[0]['DiningKitchen']?></td></tr>
<tr><td><strong>DiningRoom</strong></td>	<td><?php echo $properties[0]['DiningRoom']?></td></tr>
<tr><td><strong>DiningRoomLength</strong></td>	<td><?php echo $properties[0]['DiningRoomLength']?></td></tr>
<tr><td><strong>DiningRoomLevel</strong></td>	<td><?php echo $properties[0]['DiningRoomLevel']?></td></tr>
<tr><td><strong>DiningRoomWidth</strong></td>	<td><?php echo $properties[0]['DiningRoomWidth']?></td></tr>
<tr><td><strong>Directions</strong></td>	<td><?php echo $properties[0]['Directions']?></td></tr>
<tr><td><strong>DisplayStreetNumber</strong></td>	<td><?php echo $properties[0]['DisplayStreetNumber']?></td></tr>
<tr><td><strong>ElectricService</strong></td>	<td><?php echo $properties[0]['ElectricService']?></td></tr>
<tr><td><strong>ElementarySchool</strong></td>	<td><?php echo $properties[0]['ElementarySchool']?></td></tr>
<tr><td><strong>ElementarySchool2</strong></td>	<td><?php echo $properties[0]['ElementarySchool2']?></td></tr>
<tr><td><strong>Entrance</strong></td>	<td><?php echo $properties[0]['Entrance']?></td></tr>
<tr><td><strong>ExclusionRemarks</strong></td>	<td><?php echo $properties[0]['ExclusionRemarks']?></td></tr>
<tr><td><strong>Exterior</strong></td>	<td><?php echo $properties[0]['Exterior']?></td></tr>
<tr><td><strong>ExteriorAmenities</strong></td>	<td><?php echo $properties[0]['ExteriorAmenities']?></td></tr>
<tr><td><strong>ExteriorFeatures</strong></td>	<td><?php echo $properties[0]['ExteriorFeatures']?></td></tr>
<tr><td><strong>ExtraFee</strong></td>	<td><?php echo $properties[0]['ExtraFee']?></td></tr>
<tr><td><strong>FamilyRoom</strong></td>	<td<?php echo $properties[0]['FamilyRoom']?></td></tr>
<tr><td><strong>FamilyRoomLength</strong></td>	<td><?php echo $properties[0]['FamilyRoomLength']?></td></tr>
<tr><td><strong>FamilyRoomLevel</strong></td>	<td><?php echo $properties[0]['FamilyRoomLevel']?></td></tr>
<tr><td><strong>FamilyRoomWidth</strong></td>	<td><?php echo $properties[0]['FamilyRoomWidth']?></td></tr>
<tr><td><strong>Farm</strong></td>	<td><?php echo $properties[0]['Farm']?></td></tr>
<tr><td><strong>FarmHouse</strong></td>	<td><?php echo $properties[0]['FarmHouse']?></td></tr>
<tr><td><strong>FarmUses</strong></td>	<td><?php echo $properties[0]['FarmUses']?></td></tr>
<tr><td><strong>Fencing</strong></td>	<td><?php echo $properties[0]['Fencing']?></td></tr>
<tr><td><strong>FinalRentalTerm</strong></td>	<td><?php echo $properties[0]['FinalRentalTerm']?></td></tr>
<tr><td><strong>FinalSaleTerms</strong></td>	<td><?php echo $properties[0]['FinalSaleTerms']?></td></tr>
<tr><td><strong>FinancingType</strong></td>	<td><?php echo $properties[0]['FinancingType']?></td></tr>
<tr><td><strong>Fireplace</strong></td>	<td><?php echo $properties[0]['Fireplace']?></td></tr>
<tr><td><strong>FireplaceCount</strong></td>	<td><?php echo $properties[0]['FireplaceCount']?></td></tr>
<tr><td><strong>FireplaceFeatures</strong></td>	<td><?php echo $properties[0]['FireplaceFeatures']?></td></tr>
<tr><td><strong>Floor</strong></td>	<td><?php echo $properties[0]['Floor']?></td></tr>
<tr><td><strong>Foundation</strong></td>	<td><?php echo $properties[0]['Foundation']?></td></tr>
<tr><td><strong>FuelOnSite</strong></td>	<td><?php echo $properties[0]['FuelOnSite']?></td></tr>
<tr><td><strong>FullStreetAddress</strong></td>	<td><?php echo $properties[0]['FullStreetAddress']?></td></tr>
<tr><td><strong>Furnished</strong></td>	<td><?php echo $properties[0]['Furnished']?></td></tr>
<tr><td><strong>GarageSpaces</strong></td>	<td><?php echo $properties[0]['GarageSpaces']?></td></tr>
<tr><td><strong>GarageType</strong></td>	<td><?php echo $properties[0]['GarageType']?></td></tr>
<tr><td><strong>GreenRemarks</strong></td>	<td><?php echo $properties[0]['GreenRemarks']?></td></tr>
<tr><td><strong>GrossSQFT</strong></td>	<td><?php echo $properties[0]['GrossSQFT']?></td></tr>
<tr><td><strong>Handicap</strong></td>	<td><?php echo $properties[0]['Handicap']?></td></tr>
<tr><td><strong>HasContingency</strong></td>	<td><?php echo $properties[0]['HasContingency']?></td></tr>
<tr><td><strong>HasGarageFlag</strong></td>	<td><?php echo $properties[0]['HasGarageFlag']?></td></tr>
<tr><td><strong>Heating</strong></td>	<td><?php echo $properties[0]['Heating']?></td></tr>
<tr><td><strong>HighSchool</strong></td>	<td><?php echo $properties[0]['HighSchool']?></td></tr>
<tr><td><strong>HOA</strong></td>	<td><?php echo $properties[0]['HOA']?></td></tr>
<tr><td><strong>HOAFee</strong></td>	<td><?php echo $properties[0]['HOAFee']?></td></tr>
<tr><td><strong>HotWater</strong></td>	<td><?php echo $properties[0]['HotWater']?></td></tr>
<tr><td><strong>HousingForOlderPersons</strong></td>	<td><?php echo $properties[0]['HousingForOlderPersons']?></td></tr>
<tr><td><strong>InclusionRemarks</strong></td>	<td><?php echo $properties[0]['InclusionRemarks']?></td></tr>
<tr><td><strong>InteriorFeatures</strong></td>	<td><?php echo $properties[0]['InteriorFeatures']?></td></tr>
<tr><td><strong>InteriorSquareFeetSource</strong></td>	<td><?php echo $properties[0]['InteriorSquareFeetSource']?></td></tr>
<tr><td><strong>IsTheHomeBuilt</strong></td>	<td><?php echo $properties[0]['IsTheHomeBuilt']?></td></tr>
<tr><td><strong>Kitchen1Length</strong></td>	<td><?php echo $properties[0]['Kitchen1Length']?></td></tr>
<tr><td><strong>Kitchen1Level</strong></td>	<td><?php echo $properties[0]['Kitchen1Level']?></td></tr>
<tr><td><strong>Kitchen1Width</strong></td>	<td><?php echo $properties[0]['Kitchen1Width']?></td></tr>
<tr><td><strong>LandAssessmentAmount</strong></td>	<td><?php echo $properties[0]['LandAssessmentAmount']?></td></tr>
<tr><td><strong>LandOnly</strong></td>	<td><?php echo $properties[0]['LandOnly']?></td></tr>
<tr><td><strong>LandSqFt</strong></td>	<td><?php echo $properties[0]['LandSqFt']?></td></tr>
<tr><td><strong>LandUse</strong></td>	<td><?php echo $properties[0]['LandUse']?></td></tr>
<tr><td><strong>LandUseCode</strong></td>	<td><?php echo $properties[0]['LandUseCode']?></td></tr>
<tr><td><strong>LaundryRoom</strong></td>	<td><?php echo $properties[0]['LaundryRoom']?></td></tr>
<tr><td><strong>LaundryRoomLength</strong></td>	<td><?php echo $properties[0]['LaundryRoomLength']?></td></tr>
<tr><td><strong>LaundryRoomLevel</strong></td>	<td><?php echo $properties[0]['LaundryRoomLevel']?></td></tr>
<tr><td><strong>LaundryRoomWidth</strong></td>	<td><?php echo $properties[0]['LaundryRoomWidth']?></td></tr>
<tr><td><strong>LaundryType</strong></td>	<td><?php echo $properties[0]['LaundryType']?></td></tr>
<tr><td><strong>LeasableSQFT</strong></td>	<td><?php echo $properties[0]['LeasableSQFT']?></td></tr>
<tr><td><strong>LeasedUnits</strong></td>	<td><?php echo $properties[0]['LeasedUnits']?></td></tr>
<tr><td><strong>LeaseInEffect</strong></td>	<td><?php echo $properties[0]['LeaseInEffect']?></td></tr>
<tr><td><strong>LeaseType</strong></td>	<td><?php echo $properties[0]['LeaseType']?></td></tr>
<tr><td><strong>LimitedService</strong></td>	<td><?php echo $properties[0]['LimitedService']?></td></tr>
<tr><td><strong>LisMediaList</strong></td>	<td><?php echo $properties[0]['LisMediaList']?></td></tr>
<tr><td><strong>ListAgentAgentID</strong></td>	<td><?php echo $properties[0]['ListAgentAgentID']?></td></tr>
<tr><td><strong>ListAgentFirstName</strong></td>	<td><?php echo $properties[0]['ListAgentFirstName']?></td></tr>
<tr><td><strong>ListAgentGeneration</strong></td>	<td><?php echo $properties[0]['ListAgentGeneration']?></td></tr>
<tr><td><strong>ListAgentLastName</strong></td>	<td><?php echo $properties[0]['ListAgentLastName']?></td></tr>
<tr><td><strong>ListAgentMiddleInitial</strong></td>	<td><?php echo $properties[0]['ListAgentMiddleInitial']?></td></tr>
<tr><td><strong>ListAgentNickname</strong></td>	<td><?php echo $properties[0]['ListAgentNickname']?></td></tr>
<tr><td><strong>ListAgentPreferredFirstName</strong></td>	<td><?php echo $properties[0]['ListAgentPreferredFirstName']?></td></tr>
<tr><td><strong>ListAgentPreferredLastName</strong></td>	<td><?php echo $properties[0]['ListAgentPreferredLastName']?></td></tr>
<tr><td><strong>ListDate</strong></td>	<td><?php echo $properties[0]['ListDate']?></td></tr>
<tr><td><strong>ListingArea</strong></td>	<td><?php echo $properties[0]['ListingArea']?></td></tr>
<tr><td><strong>ListingAreaID</strong></td>	<td><?php echo $properties[0]['ListingAreaID']?></td></tr>
<tr><td><strong>ListingID</strong></td>	<td><?php echo $properties[0]['ListingID']?></td></tr>
<tr><td><strong>ListingKey</strong></td>	<td><?php echo $properties[0]['ListingKey']?></td></tr>
<tr><td><strong>ListingTaxID</strong></td>	<td><?php echo $properties[0]['ListingTaxID']?></td></tr>
<tr><td><strong>ListOfficeFullOfficeName</strong></td>	<td><?php echo $properties[0]['ListOfficeFullOfficeName']?></td></tr>
<tr><td><strong>ListOfficeOfficeID</strong></td>	<td><?php echo $properties[0]['ListOfficeOfficeID']?></td></tr>
<tr><td><strong>ListOfficeOfficePhone</strong></td>	<td><?php echo $properties[0]['ListOfficeOfficePhone']?></td></tr>
<tr><td><strong>ListOfficePostalCode</strong></td>	<td><?php echo $properties[0]['ListOfficePostalCode']?></td></tr>
<tr><td><strong>ListPrice</strong></td>	<td><?php echo $properties[0]['ListPrice']?></td></tr>
<tr><td><strong>LivingRoomLength</strong></td>	<td><?php echo $properties[0]['LivingRoomLength']?></td></tr>
<tr><td><strong>LivingRoomLevel</strong></td>	<td><?php echo $properties[0]['LivingRoomLevel']?></td></tr>
<tr><td><strong>LivingRoomWidth</strong></td>	<td><?php echo $properties[0]['LivingRoomWidth']?></td></tr>
<tr><td><strong>Load</strong></td>	<td><?php echo $properties[0]['Load1']?></td></tr>
<tr><td><strong>LocaleListingStatus</strong></td>	<td><?php echo $properties[0]['LocaleListingStatus']?></td></tr>
<tr><td><strong>Location</strong></td>	<td><?php echo $properties[0]['Location']?></td></tr>
<tr><td><strong>LocationTypes</strong></td>	<td><?php echo $properties[0]['LocationTypes']?></td></tr>
<tr><td><strong>LotAreaAcre</strong></td>	<td><?php echo $properties[0]['LotAreaAcre']?></td></tr>
<tr><td><strong>LotDescription</strong></td>	<td><?php echo $properties[0]['LotDescription']?></td></tr>
<tr><td><strong>LotDimDepth</strong></td>	<td><?php echo $properties[0]['LotDimDepth']?></td></tr>
<tr><td><strong>LotDimensions</strong></td>	<td><?php echo $properties[0]['LotDimensions']?></td></tr>
<tr><td><strong>LotDimWidth</strong></td>	<td><?php echo $properties[0]['LotDimWidth']?></td></tr>
<tr><td><strong>LotImprovement</strong></td>	<td><?php echo $properties[0]['LotImprovement']?></td></tr>
<tr><td><strong>LotNumber</strong></td>	<td><?php echo $properties[0]['LotNumber']?></td></tr>
<tr><td><strong>LowerFloor1Baths</strong></td>	<td><?php echo $properties[0]['LowerFloor1Baths']?></td></tr>
<tr><td><strong>LowerFloor1HalfBaths</strong></td>	<td><?php echo $properties[0]['LowerFloor1HalfBaths']?></td></tr>
<tr><td><strong>MainBedroom</strong></td>	<td><?php echo $properties[0]['MainBedroom']?></td></tr>
<tr><td><strong>MainEntrance</strong></td>	<td><?php echo $properties[0]['MainEntrance']?></td></tr>
<tr><td><strong>MainFloorBaths</strong></td>	<td><?php echo $properties[0]['MainFloorBaths']?></td></tr>
<tr><td><strong>MainFloorHalfBaths</strong></td>	<td><?php echo $properties[0]['MainFloorHalfBaths']?></td></tr>
<tr><td><strong>MaxLease</strong></td>	<td><?php echo $properties[0]['MaxLease']?></td></tr>
<tr><td><strong>MaxPhotoTms</strong></td>	<td><?php echo $properties[0]['MaxPhotoTms']?></td></tr>
<tr><td><strong>MiddleSchool</strong></td>	<td><?php echo $properties[0]['MiddleSchool']?></td></tr>
<tr><td><strong>MiddleSchool2</strong></td>	<td><?php echo $properties[0]['MiddleSchool2']?></td></tr>
<tr><td><strong>MinLease</strong></td>	<td><?php echo $properties[0]['MinLease']?></td></tr>
<tr><td><strong>ModelName</strong></td>	<td><?php echo $properties[0]['ModelName']?></td></tr>
<tr><td><strong>ModificationTimestamp</strong></td>	<td><?php echo $properties[0]['ModificationTimestamp']?></td></tr>
<tr><td><strong>MonthsRentUpFront</strong></td>	<td><?php echo $properties[0]['MonthsRentUpFront']?></td></tr>
<tr><td><strong>NetSQFT</strong></td>	<td><?php echo $properties[0]['NetSQFT']?></td></tr>
<tr><td><strong>NewConstruction</strong></td>	<td><?php echo $properties[0]['NewConstruction']?></td></tr>
<tr><td><strong>OffMarketDate</strong></td>	<td><?php echo $properties[0]['OffMarketDate']?></td></tr>
<tr><td><strong>OneBedroomUnits</strong></td>	<td><?php echo $properties[0]['OneBedroomUnits']?></td></tr>
<tr><td><strong>OneTimeFee</strong></td>	<td><?php echo $properties[0]['OneTimeFee']?></td></tr>
<tr><td><strong>OtherRm1Length</strong></td>	<td><?php echo $properties[0]['OtherRm1Length']?></td></tr>
<tr><td><strong>OtherRm1Level</strong></td>	<td><?php echo $properties[0]['OtherRm1Level']?></td></tr>
<tr><td><strong>OtherRm1Name</strong></td>	<td><?php echo $properties[0]['OtherRm1Name']?></td></tr>
<tr><td><strong>OtherRm1Width</strong></td>	<td><?php echo $properties[0]['OtherRm1Width']?></td></tr>
<tr><td><strong>OtherRm2Length</strong></td>	<td><?php echo $properties[0]['OtherRm2Length']?></td></tr>
<tr><td><strong>OtherRm2Level</strong></td>	<td><?php echo $properties[0]['OtherRm2Level']?></td></tr>
<tr><td><strong>OtherRm2Name</strong></td>	<td><?php echo $properties[0]['OtherRm2Name']?></td></tr>
<tr><td><strong>OtherRm2Width</strong></td>	<td><?php echo $properties[0]['OtherRm2Width']?></td></tr>
<tr><td><strong>OtherRm3Length</strong></td>	<td><?php echo $properties[0]['OtherRm3Length']?></td></tr>
<tr><td><strong>OtherRm3Level</strong></td>	<td><?php echo $properties[0]['OtherRm3Level']?></td></tr>
<tr><td><strong>OtherRm3Name</strong></td>	<td><?php echo $properties[0]['OtherRm3Name']?></td></tr>
<tr><td><strong>OtherRm3Width</strong></td>	<td><?php echo $properties[0]['OtherRm3Width']?></td></tr>
<tr><td><strong>OtherRm4Length</strong></td>	<td><?php echo $properties[0]['OtherRm4Length']?></td></tr>
<tr><td><strong>OtherRm4Level</strong></td>	<td><?php echo $properties[0]['OtherRm4Level']?></td></tr>
<tr><td><strong>OtherRm4Name</strong></td>	<td><?php echo $properties[0]['OtherRm4Name']?></td></tr>
<tr><td><strong>OtherRm4Width</strong></td>	<td><?php echo $properties[0]['OtherRm4Width']?></td></tr>
<tr><td><strong>Ownership</strong></td>	<td><?php echo $properties[0]['Ownership']?></td></tr>
<tr><td><strong>Parking</strong></td>	<td><?php echo $properties[0]['Parking']?></td></tr>
<tr><td><strong>PetDeposit</strong></td>	<td><?php echo $properties[0]['PetDeposit']?></td></tr>
<tr><td><strong>PetRestrictions</strong></td>	<td><?php echo $properties[0]['PetRestrictions']?></td></tr>
<tr><td><strong>PetsAllowed</strong></td>	<td><?php echo $properties[0]['PetsAllowed']?></td></tr>
<tr><td><strong>Plumbing</strong></td>	<td><?php echo $properties[0]['Plumbing']?></td></tr>
<tr><td><strong>Pool</strong></td>	<td><?php echo $properties[0]['Pool']?></td></tr>
<tr><td><strong>PoolType</strong></td>	<td><?php echo $properties[0]['PoolType']?></td></tr>
<tr><td><strong>PorchDeck</strong></td>	<td><?php echo $properties[0]['PorchDeck']?></td></tr>
<tr><td><strong>PostalCode</strong></td>	<td><?php echo $properties[0]['PostalCode']?></td></tr>
<tr><td><strong>PricePerSqFt</strong></td>	<td><?php echo $properties[0]['PricePerSqFt']?></td></tr>
<tr><td><strong>PropertyAge</strong></td>	<td><?php echo $properties[0]['PropertyAge']?></td></tr>
<tr><td><strong>PropertyCondition</strong></td>	<td><?php echo $properties[0]['PropertyCondition']?></td></tr>
<tr><td><strong>PropertyOption</strong></td>	<td><?php echo $properties[0]['PropertyOption']?></td></tr>
<tr><td><strong>PropertySubdivision</strong></td>	<td><?php echo $properties[0]['PropertySubdivision']?></td></tr>
<tr><td><strong>PropertyType</strong></td>	<td><?php echo $properties[0]['PropertyType']?></td></tr>
<tr><td><strong>PurchaseOptional</strong></td>	<td><?php echo $properties[0]['PurchaseOptional']?></td></tr>
<tr><td><strong>Remarks</strong></td>	<td><?php echo $properties[0]['Remarks']?></td></tr>
<tr><td><strong>RentIncludes</strong></td>	<td><?php echo $properties[0]['RentIncludes']?></td></tr>
<tr><td><strong>RestrictionEasements</strong></td>	<td><?php echo $properties[0]['RestrictionEasements']?></td></tr>
<tr><td><strong>RFactorCeilings</strong></td>	<td><?php echo $properties[0]['RFactorCeilings']?></td></tr>
<tr><td><strong>RFactorWalls</strong></td>	<td><?php echo $properties[0]['RFactorWalls']?></td></tr>
<tr><td><strong>Roads</strong></td>	<td><?php echo $properties[0]['Roads']?></td></tr>
<tr><td><strong>Roof</strong></td>	<td><?php echo $properties[0]['Roof']?></td></tr>
<tr><td><strong>RoomList</strong></td>	<td><?php echo $properties[0]['RoomList']?></td></tr>
<tr><td><strong>SaleAgentAgentID</strong></td>	<td><?php echo $properties[0]['SaleAgentAgentID']?></td></tr>
<tr><td><strong>SaleAgentFirstName</strong></td>	<td><?php echo $properties[0]['SaleAgentFirstName']?></td></tr>
<tr><td><strong>SaleAgentGeneration</strong></td>	<td><?php echo $properties[0]['SaleAgentGeneration']?></td></tr>
<tr><td><strong>SaleAgentLastName</strong></td>	<td><?php echo $properties[0]['SaleAgentLastName']?></td></tr>
<tr><td><strong>SaleAgentMiddleInitial</strong></td>	<td><?php echo $properties[0]['SaleAgentMiddleInitial']?></td></tr>
<tr><td><strong>SaleAgentNickName</strong></td>	<td><?php echo $properties[0]['SaleAgentNickName']?></td></tr>
<tr><td><strong>SaleAgentPreferredFirstName</strong></td>	<td><?php echo $properties[0]['SaleAgentPreferredFirstName']?></td></tr>
<tr><td><strong>SaleAgentPreferredLastName</strong></td>	<td><?php echo $properties[0]['SaleAgentPreferredLastName']?></td></tr>
<tr><td><strong>SaleIncludes</strong></td>	<td><?php echo $properties[0]['SaleIncludes']?></td></tr>
<tr><td><strong>SaleOfficeFullOfficeName</strong></td>	<td><?php echo $properties[0]['SaleOfficeFullOfficeName']?></td></tr>
<tr><td><strong>SaleOfficeOfficeID</strong></td>	<td><?php echo $properties[0]['SaleOfficeOfficeID']?></td></tr>
<tr><td><strong>SchoolDistrict</strong></td>	<td><?php echo $properties[0]['SchoolDistrict']?></td></tr>
<tr><td><strong>Section8Approved</strong></td>	<td><?php echo $properties[0]['Section8Approved']?></td></tr>
<tr><td><strong>SecurityDeposit</strong></td>	<td><?php echo $properties[0]['SecurityDeposit']?></td></tr>
<tr><td><strong>SepticExpiryDate</strong></td>	<td><?php echo $properties[0]['SepticExpiryDate']?></td></tr>
<tr><td><strong>SewerSeptic</strong></td>	<td><?php echo $properties[0]['SewerSeptic']?></td></tr>
<tr><td><strong>SmokingProhibited</strong></td>	<td><?php echo $properties[0]['SmokingProhibited']?></td></tr>
<tr><td><strong>SoilTypes</strong></td>	<td><?php echo $properties[0]['SoilTypes']?></td></tr>
<tr><td><strong>SourceCreationTimestamp</strong></td>	<td><?php echo $properties[0]['SourceCreationTimestamp']?></td></tr>
<tr><td><strong>SourceModificationTimestamp</strong></td>	<td><?php echo $properties[0]['SourceModificationTimestamp']?></td></tr>
<tr><td><strong>State</strong></td>	<td><?php echo $properties[0]['State']?></td></tr>
<tr><td><strong>StatusChangeDate</strong></td>	<td><?php echo $properties[0]['StatusChangeDate']?></td></tr>
<tr><td><strong>Storage</strong></td>	<td><?php echo $properties[0]['Storage']?></td></tr>
<tr><td><strong>StoryList</strong></td>	<td><?php echo $properties[0]['StoryList']?></td></tr>
<tr><td><strong>StreetDirPrefix</strong></td>	<td><?php echo $properties[0]['StreetDirPrefix']?></td></tr>
<tr><td><strong>StreetName</strong></td>	<td><?php echo $properties[0]['StreetName']?></td></tr>
<tr><td><strong>StreetNumber</strong></td>	<td><?php echo $properties[0]['StreetNumber']?></td></tr>
<tr><td><strong>StreetSuffix</strong></td>	<td><?php echo $properties[0]['StreetSuffix']?></td></tr>
<tr><td><strong>StructureList</strong></td>	<td><?php echo $properties[0]['StructureList']?></td></tr>
<tr><td><strong>Structures</strong></td>	<td><?php echo $properties[0]['Structures']?></td></tr>
<tr><td><strong>StudioEfficiencyUnits</strong></td>	<td><?php echo $properties[0]['StudioEfficiencyUnits']?></td></tr>
<tr><td><strong>Styles</strong></td>	<td><?php echo $properties[0]['Styles']?></td></tr>
<tr><td><strong>Subdivision</strong></td>	<td><?php echo $properties[0]['Subdivision']?></td></tr>
<tr><td><strong>TaxYear</strong></td>	<td><?php echo $properties[0]['TaxYear']?></td></tr>
<tr><td><strong>Tenancy</strong></td>	<td><?php echo $properties[0]['Tenancy']?></td></tr>
<tr><td><strong>TenantPays</strong></td>	<td><?php echo $properties[0]['TenantPays']?></td></tr>
<tr><td><strong>ThreeBedroomUnits</strong></td>	<td><?php echo $properties[0]['ThreeBedroomUnits']?></td></tr>
<tr><td><strong>Topography</strong></td>	<td><?php echo $properties[0]['Topography']?></td></tr>
<tr><td><strong>TotalAssessment</strong></td>	<td><?php echo $properties[0]['TotalAssessment']?></td></tr>
<tr><td><strong>TotalPhotos</strong></td>	<td><?php echo $properties[0]['TotalPhotos']?></td></tr>
<tr><td><strong>TotalRooms</strong></td>	<td><?php echo $properties[0]['TotalRooms']?></td></tr>
<tr><td><strong>TotalTaxes</strong></td>	<td><?php echo $properties[0]['TotalTaxes']?></td></tr>
<tr><td><strong>TotalUnits</strong></td>	<td><?php echo $properties[0]['TotalUnits']?></td></tr>
<tr><td><strong>TrafficCount</strong></td>	<td><?php echo $properties[0]['TrafficCount']?></td></tr>
<tr><td><strong>TwoBedroomUnits</strong></td>	<td><?php echo $properties[0]['TwoBedroomUnits']?></td></tr>
<tr><td><strong>Type</strong></td>	<td><?php echo $properties[0]['Type']?></td></tr>
<tr><td><strong>Unit1Baths</strong></td>	<td><?php echo $properties[0]['Unit1Baths']?></td></tr>
<tr><td><strong>Unit1Bedrooms</strong></td>	<td><?php echo $properties[0]['Unit1Bedrooms']?></td></tr>
<tr><td><strong>Unit1InteriorSqFt</strong></td>	<td><?php echo $properties[0]['Unit1InteriorSqFt']?></td></tr>
<tr><td><strong>Unit1LeaseEnd</strong></td>	<td><?php echo $properties[0]['Unit1LeaseEnd']?></td></tr>
<tr><td><strong>Unit1MonthlyRent</strong></td>	<td><?php echo $properties[0]['Unit1MonthlyRent']?></td></tr>
<tr><td><strong>Unit1Occupied</strong></td>	<td><?php echo $properties[0]['Unit1Occupied']?></td></tr>
<tr><td><strong>Unit1PartialBaths</strong></td>	<td><?php echo $properties[0]['Unit1PartialBaths']?></td></tr>
<tr><td><strong>Unit1Rooms</strong></td>	<td><?php echo $properties[0]['Unit1Rooms']?></td></tr>
<tr><td><strong>Unit2Baths</strong></td>	<td><?php echo $properties[0]['Unit2Baths']?></td></tr>
<tr><td><strong>Unit2Bedrooms</strong></td>	<td><?php echo $properties[0]['Unit2Bedrooms']?></td></tr>
<tr><td><strong>Unit2InteriorSqFt</strong></td>	<td><?php echo $properties[0]['Unit2InteriorSqFt']?></td></tr>
<tr><td><strong>Unit2LeaseEnd</strong></td>	<td><?php echo $properties[0]['Unit2LeaseEnd']?></td></tr>
<tr><td><strong>Unit2MonthlyRent</strong></td>	<td><?php echo $properties[0]['Unit2MonthlyRent']?></td></tr>
<tr><td><strong>Unit2Occupied</strong></td>	<td><?php echo $properties[0]['Unit2Occupied']?></td></tr>
<tr><td><strong>Unit2PartialBaths</strong></td>	<td><?php echo $properties[0]['Unit2PartialBaths']?></td></tr>
<tr><td><strong>Unit2Rooms</strong></td>	<td><?php echo $properties[0]['Unit2Rooms']?></td></tr>
<tr><td><strong>Unit3Baths</strong></td>	<td><?php echo $properties[0]['Unit3Baths']?></td></tr>
<tr><td><strong>Unit3Bedrooms</strong></td>	<td><?php echo $properties[0]['Unit3Bedrooms']?></td></tr>
<tr><td><strong>Unit3InteriorSqFt</strong></td>	<td><?php echo $properties[0]['Unit3InteriorSqFt']?></td></tr>
<tr><td><strong>Unit3LeaseEnd</strong></td>	<td><?php echo $properties[0]['Unit3LeaseEnd']?></td></tr>
<tr><td><strong>Unit3MonthlyRent</strong></td>	<td><?php echo $properties[0]['Unit3MonthlyRent']?></td></tr>
<tr><td><strong>Unit3Occupied</strong></td>	<td><?php echo $properties[0]['Unit3Occupied']?></td></tr>
<tr><td><strong>Unit3PartialBaths</strong></td>	<td><?php echo $properties[0]['Unit3PartialBaths']?></td></tr>
<tr><td><strong>Unit3Rooms</strong></td>	<td><?php echo $properties[0]['Unit3Rooms']?></td></tr>
<tr><td><strong>Unit4Baths</strong></td>	<td><?php echo $properties[0]['Unit4Baths']?></td></tr>
<tr><td><strong>Unit4Bedrooms</strong></td>	<td><?php echo $properties[0]['Unit4Bedrooms']?></td></tr>
<tr><td><strong>Unit4InteriorSqFt</strong></td>	<td><?php echo $properties[0]['Unit4InteriorSqFt']?></td></tr>
<tr><td><strong>Unit4LeaseEnd</strong></td>	<td><?php echo $properties[0]['Unit4LeaseEnd']?></td></tr>
<tr><td><strong>Unit4MonthlyRent</strong></td>	<td><?php echo $properties[0]['Unit4MonthlyRent']?></td></tr>
<tr><td><strong>Unit4Occupied</strong></td>	<td><?php echo $properties[0]['Unit4Occupied']?></td></tr>
<tr><td><strong>Unit4PartialBaths</strong></td>	<td><?php echo $properties[0]['Unit4PartialBaths']?></td></tr>
<tr><td><strong>Unit4Rooms</strong></td>	<td><?php echo $properties[0]['Unit4Rooms']?></td></tr>
<tr><td><strong>Unit5Baths</strong></td>	<td><?php echo $properties[0]['Unit5Baths']?></td></tr>
<tr><td><strong>Unit5Bedrooms</strong></td>	<td><?php echo $properties[0]['Unit5Bedrooms']?></td></tr>
<tr><td><strong>Unit5InteriorSqFt</strong></td>	<td><?php echo $properties[0]['Unit5InteriorSqFt']?></td></tr>
<tr><td><strong>Unit5LeaseEnd</strong></td>	<td><?php echo $properties[0]['Unit5LeaseEnd']?></td></tr>
<tr><td><strong>Unit5MonthlyRent</strong></td>	<td><?php echo $properties[0]['Unit5MonthlyRent']?></td></tr>
<tr><td><strong>Unit5Occupied</strong></td>	<td><?php echo $properties[0]['Unit5Occupied']?></td></tr>
<tr><td><strong>Unit5PartialBaths</strong></td>	<td><?php echo $properties[0]['Unit5PartialBaths']?></td></tr>
<tr><td><strong>Unit5Rooms</strong></td>	<td><?php echo $properties[0]['Unit5Rooms']?></td></tr>
<tr><td><strong>Unit6Baths</strong></td>	<td><?php echo $properties[0]['Unit6Baths']?></td></tr>
<tr><td><strong>Unit6Bedrooms</strong></td>	<td><?php echo $properties[0]['Unit6Bedrooms']?></td></tr>
<tr><td><strong>Unit6InteriorSqFt</strong></td>	<td><?php echo $properties[0]['Unit6InteriorSqFt']?></td></tr>
<tr><td><strong>Unit6LeaseEnd</strong></td>	<td><?php echo $properties[0]['Unit6LeaseEnd']?></td></tr>
<tr><td><strong>Unit6MonthlyRent</strong></td>	<td><?php echo $properties[0]['Unit6MonthlyRent']?></td></tr>
<tr><td><strong>Unit6Occupied</strong></td>	<td><?php echo $properties[0]['Unit6Occupied']?></td></tr>
<tr><td><strong>Unit6PartialBaths</strong></td>	<td><?php echo $properties[0]['Unit6PartialBaths']?></td></tr>
<tr><td><strong>Unit6Rooms</strong></td>	<td><?php echo $properties[0]['Unit6Rooms']?></td></tr>
<tr><td><strong>Unit7Baths</strong></td>	<td><?php echo $properties[0]['Unit7Baths']?></td></tr>
<tr><td><strong>Unit7Bedrooms</strong></td>	<td><?php echo $properties[0]['Unit7Bedrooms']?></td></tr>
<tr><td><strong>Unit7InteriorSqFt</strong></td>	<td><?php echo $properties[0]['Unit7InteriorSqFt']?></td></tr>
<tr><td><strong>Unit7LeaseEnd</strong></td>	<td><?php echo $properties[0]['Unit7LeaseEnd']?></td></tr>
<tr><td><strong>Unit7MonthlyRent</strong></td>	<td><?php echo $properties[0]['Unit7MonthlyRent']?></td></tr>
<tr><td><strong>Unit7Occupied</strong></td>	<td><?php echo $properties[0]['Unit7Occupied']?></td></tr>
<tr><td><strong>Unit7PartialBaths</strong></td>	<td><?php echo $properties[0]['Unit7PartialBaths']?></td></tr>
<tr><td><strong>Unit7Rooms</strong></td>	<td><?php echo $properties[0]['Unit7Rooms']?></td></tr>
<tr><td><strong>Unit8Baths</strong></td>	<td><?php echo $properties[0]['Unit8Baths']?></td></tr>
<tr><td><strong>Unit8Bedrooms</strong></td>	<td><?php echo $properties[0]['Unit8Bedrooms']?></td></tr>
<tr><td><strong>Unit8InteriorSqFt</strong></td>	<td><?php echo $properties[0]['Unit8InteriorSqFt']?></td></tr>
<tr><td><strong>Unit8LeaseEnd</strong></td>	<td><?php echo $properties[0]['Unit8LeaseEnd']?></td></tr>
<tr><td><strong>Unit8MonthlyRent</strong></td>	<td><?php echo $properties[0]['Unit8MonthlyRent']?></td></tr>
<tr><td><strong>Unit8Occupied</strong></td>	<td><?php echo $properties[0]['Unit8Occupied']?></td></tr>
<tr><td><strong>Unit8PartialBaths</strong></td>	<td><?php echo $properties[0]['Unit8PartialBaths']?></td></tr>
<tr><td><strong>Unit8Rooms</strong></td>	<td><?php echo $properties[0]['Unit8Rooms']?></td></tr>
<tr><td><strong>Unit9Baths</strong></td>	<td><?php echo $properties[0]['Unit9Baths']?></td></tr>
<tr><td><strong>Unit9Bedrooms</strong></td>	<td><?php echo $properties[0]['Unit9Bedrooms']?></td></tr>
<tr><td><strong>Unit9InteriorSqFt</strong></td>	<td><?php echo $properties[0]['Unit9InteriorSqFt']?></td></tr>
<tr><td><strong>Unit9LeaseEnd</strong></td>	<td><?php echo $properties[0]['Unit9LeaseEnd']?></td></tr>
<tr><td><strong>Unit9MonthlyRent</strong></td>	<td><?php echo $properties[0]['Unit9MonthlyRent']?></td></tr>
<tr><td><strong>Unit9Occupied</strong></td>	<td><?php echo $properties[0]['Unit9Occupied']?></td></tr>
<tr><td><strong>Unit9PartialBaths</strong></td>	<td><?php echo $properties[0]['Unit9PartialBaths']?></td></tr>
<tr><td><strong>Unit9Rooms</strong></td>	<td><?php echo $properties[0]['Unit9Rooms']?></td></tr>
<tr><td><strong>UnitFloors</strong></td>	<td><?php echo $properties[0]['UnitFloors']?></td></tr>
<tr><td><strong>UnitList</strong></td>	<td><?php echo $properties[0]['UnitList']?></td></tr>
<tr><td><strong>UnitNumber</strong></td>	<td><?php echo $properties[0]['UnitNumber']?></td></tr>
<tr><td><strong>UnitsInDevelopment</strong></td>	<td><?php echo $properties[0]['UnitsInDevelopment']?></td></tr>
<tr><td><strong>UploadToInternetAllowed</strong></td>	<td><?php echo $properties[0]['UploadToInternetAllowed']?></td></tr>
<tr><td><strong>UpperFloor1Baths</strong></td>	<td><?php echo $properties[0]['UpperFloor1Baths']?></td></tr>
<tr><td><strong>UpperFloor1HalfBaths</strong></td>	<td><?php echo $properties[0]['UpperFloor1HalfBaths']?></td></tr>
<tr><td><strong>Utilities</strong></td>	<td><?php echo $properties[0]['Utilities']?></td></tr>
<tr><td><strong>VowAVMAllowed</strong></td>	<td><?php echo $properties[0]['VowAVMAllowed']?></td></tr>
<tr><td><strong>VOWCommentsAllowed</strong></td>	<td><?php echo $properties[0]['VOWCommentsAllowed']?></td></tr>
<tr><td><strong>WallsCeilings</strong></td>	<td><?php echo $properties[0]['WallsCeilings']?></td></tr>
<tr><td><strong>Water</strong></td>	<td><?php echo $properties[0]['Water']?></td></tr>
<tr><td><strong>WaterFront</strong></td>	<td><?php echo $properties[0]['WaterFront']?></td></tr>
<tr><td><strong>WaterFrontage</strong></td>	<td><?php echo $properties[0]['WaterFrontage']?></td></tr>
<tr><td><strong>WellDepth</strong></td>	<td><?php echo $properties[0]['WellDepth']?></td></tr>
<tr><td><strong>YearInBusiness</strong></td>	<td><?php echo $properties[0]['YearInBusiness']?></td></tr>
<tr><td><strong>YearRenovated</strong></td>	<td><?php echo $properties[0]['YearRenovated']?></td></tr>
<tr><td><strong>Zip4</strong></td>	<td><?php echo $properties[0]['Zip4']?></td></tr>
<tr><td><strong>ZoningCode</strong></td>	<td><?php echo $properties[0]['ZoningCode']?></td></tr>
</table>

  </div>
  

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