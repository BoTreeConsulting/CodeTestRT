<?php

set_time_limit(6000);
ini_set("memory_limit","1000M");
ini_set('post_max_size', '200M');
ini_set('upload_max_filesize', '200M');

@include_once('login.php'); 


$servername = "localhost";
$username 	= "webstag_rtopia";
$password 	= "O5Js%xp~k&hf";
$dbname 	= "webstag_rtopia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

date_default_timezone_set('America/New_York'); 


$rets = new phRETS;
$rets->AddHeader("RETS-Version", "RETS/1.7.2");
$rets->AddHeader("User-Agent", "MRIS Conduit/2.2");

/*$Agent_rets = new phRETS;
$Agent_rets->AddHeader("RETS-Version", "RETS/1.7.2");
$Agent_rets->AddHeader("User-Agent", "MRIS Conduit/2.2");*/

$Image_rets = new phRETS;
$Image_rets->AddHeader("RETS-Version", "RETS/1.7.2");
$Image_rets->AddHeader("User-Agent", "MRIS Conduit/2.2");

	
$connect 		= $rets->Connect($login, $un, $pw);
/*$Agent_connect 	= $Agent_rets->Connect($login, $un, $pw);*/
$Image_connect 	= $Image_rets->Connect($login, $un, $pw);


/*if(isset($_GET) &&  isset($_GET["start_date"]) && isset($_GET["end_date"]))
{ 
	$start_date = $_GET["start_date"];

	$end_date = $_GET["end_date"];
} 
else 
{
	$start_date =  date('Y-m-d', strtotime('-7 days'));

	$end_date = date('Y-m-d');
}*/

?>

<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" href="retsCSS.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all">		
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/datepicker.min.js"></script>

		<script>
			jQuery(document).ready(function()
			{		
				jQuery("#start_date").datepicker({
						dateFormat: 'yy-mm-dd',
						defaultDate: "-1w",
						changeMonth: true,
						changeYear: true,
						numberOfMonths: 1,
						onClose: function( selectedDate ) {
							$("#end_date").datepicker( "option", "minDate", selectedDate );
						}
					}).val();

				jQuery( "#end_date" ).datepicker({
				 	dateFormat: 'yy-mm-dd',
					setDate: "0",
					changeMonth: true,
					changeYear: true,
					numberOfMonths: 1,
					onClose: function( selectedDate ) {
						jQuery( "#start_date" ).datepicker( "option", "maxDate", selectedDate );
					}
			    });

			    jQuery("#myListSearch").click(function()
			    {
			    	if(jQuery("#start_date").val() == "")
			    	{
			    		jQuery("#start_date").focus();
			    		return false;
			    	}
			    	else if(jQuery("#end_date").val() == "")
			    	{
			    		jQuery("#end_date").focus();
			    		return false;
			    	}
			    	else if(jQuery("#start_date").val() != "" && jQuery("#end_date").val() != "")
			    	{
			    		return true;
			    	}
			    });
			});
		</script>
		<style></style>
	</head>

	<body>
		<form id='listDateForm' name='listDateForm' method="GET" action="" enctype="multipart/form-data" style="display:none;">
			<table class="widefat myTablePadding"  cellpadding="0" cellspacing="0" >
			<tr>
				<td colspan="2"><strong>Realty Topia Property search ...</strong></td>
			</tr>

			<tr>
				<td style="width: 7%;"><strong>Start Date: </strong></td>

				<td style="width: 14%;">
					<input id="start_date" name="start_date" type="text"value="<?php echo $start_date; ?>"  max="<?php echo date('Y-m-d'); ?>"  min="1900-01-01"/>
				</td>

				<td style="width: 7%;"><strong>End Date: </strong></td>

				<td style="width: 14%;">
					<input id="end_date" name="end_date" type="text"  value="<?php echo $end_date; ?>"  max="<?php echo date('Y-m-d'); ?>"  min="1900-01-01"/>
				</td>

				<td style="width: 58%;">
					<input id="myListSearch" name="myListSearch" type="submit" value="Search" class="button button-primary"/>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			</table>
		</form>
		<pre>

		<?php 
		/*if(isset($_GET) && isset($_GET["myListSearch"]))
		{	
			$ListDate = $_GET["start_date"].'-'.$_GET["end_date"];

			$searchListDate = "(ListDate=$ListDate)";

			//$searchListDate = "(ListDate=2016-04-19-2016-04-20)";
		}
		else 
		{
			die();
		}*/



		/*if($connect && $Agent_connect && $Image_connect)*/

		if($connect && $Image_connect)			
		{
			$searchdata = "(ListOfficeOfficeID=REATOPIA)";

			$propertySearch = $rets->SearchQuery("Property","ALL","$searchdata");//,array("Limit"=>2500)

			$property_count = $rets->NumRows();

			echo "property_count:".$property_count."<br/><br/>";

			die();

			$i=1;
			$imagesSearch 	= '';
			/*$agentsListing	= '';*/

			$prop_array = array();

			if($property_count > 0)
			{
				while ($propertyListing = $rets->FetchRow($propertySearch))
				{
					echo "Property: ".$i."<br/>";

					$propertyListingId = $propertyListing['ListingID'];
					
					$ListDate = $propertyListing['ListDate'];
					

					echo "propertyListingId:".$propertyListingId."<br/>";

					echo "ListDate:".$ListDate."<br/>";


					/*$ListAgentAgentID  = $propertyListing['ListAgentAgentID'];
					echo "ListAgentAgentID:".$ListAgentAgentID."<br/>";

					$AgentID 	= "(AgentID=".$ListAgentAgentID.")";					

					$agentSearch  = $Agent_rets->SearchQuery("Agent","Agent", $AgentID);
					
					$agentcount = $Agent_rets->NumRows();

					echo "agentcount:".$agentcount."<br/>";*/	


					$PropertyListingID	= "(ListingID=".$propertyListingId.")";

					$imagesSearch = $Image_rets->SearchQuery("Media","PROP_MEDIA",$PropertyListingID);
					
					$property_photos_count = $Image_rets->NumRows();
					
					echo "property_photos_count:".$property_photos_count."<br/>";				

					/*if($agentcount > 0)
					{*/
						if($property_photos_count > 0)
						{
							$prop_array[] =  $propertyListingId."||".$ListDate;	

							/*$agentsListing = $Agent_rets->FetchRow($agentSearch);	

							// adding agent data 
							$AgentResult = add_agent($conn, $agentsListing);*/
																					
							while ($imageData = $Image_rets->FetchRow($imagesSearch))
							{	
								// adding property images data 
								$ImageResult = add_images($conn,$imageData);
							}

							//checking if the property exists or not
							$check_property = check_property($conn,$propertyListingId);

							if($check_property)
							{
								echo "Property: ".$propertyListingId. " already exists"."<br/>";

								//updating property data
								$prop_result = update_property($conn, $propertyListing);
							}	
							else
							{
								echo "Property: ".$propertyListingId. " is new"."<br/>";

								//adding property list data
								$property_result = add_property_list($conn,$propertyListingId,$ListDate);

								if($property_result)
								{
									//adding property  data
									$prop_result = add_property($conn, $propertyListing);
								}
							}																						
						}
						else 
						{
							echo "<br/>Images are not found.<br/>";
						}
					/*}		
					else
					{
						echo "<br/>Agent not found.<br/>";
					}*/

					echo "<hr/>";
					
					if($i == $property_count)
					{
						echo "<br/>end<br/>";

						//changing property status if it is deleted in MRIS API
						/*check_total_properties($conn,$start_date,$end_date,$prop_array);*/
					}	

					$i++;								
				}
			}
			else
			{
				echo "<br/>Properties not found.";
			}

			$Image_rets->FreeResult($imagesSearch);
			$Image_rets->Disconnect();
			
			/*$Agent_rets->FreeResult($agentsListing);
			$Agent_rets->Disconnect();*/
			
			$rets->FreeResult($propertySearch);
			$rets->Disconnect();		
		}
		else 
		{
			$error = $rets->Error();
			print_r($error);
		}
		?>
		</pre>
		<?php
		/*function add_agent($conn, $agents_data)
		{
			$agent_id= $agents_data['AgentID'];
			
			$sql = "SELECT id FROM tbl_agents where AgentID = '".$agent_id."'";
			$result = $conn->query($sql);

			if($result->num_rows  ==  0)
			{
				$agent_sql = "INSERT INTO tbl_agents (AgentSourceCreationTimestamp, AgentModificationTimestamp, AgentSourceModificationTimestamp, AgentFirstName, AgentNameSuffix, AgentID, AgentKey, AgentLastName, AgentMiddleInitial, AgentNickName, AgentPreferredFirstName, AgentPreferredLastName, AgentSystemLocale, AgentSubSystemLocale, OfficeSourceCreationTimestamp, OfficeSourceModificationTimestamp, OfficeID, OfficeTradingAs, OfficeOfficePhone, OfficeCityName, OfficeState, is_active, created_on) VALUES 
				('".$agents_data['AgentSourceCreationTimestamp']."', '".$agents_data['AgentModificationTimestamp']."', '".$agents_data['AgentSourceModificationTimestamp']."', '".$agents_data['AgentFirstName']."', '".$agents_data['AgentNameSuffix']."', '".$agents_data['AgentID']."', '".$agents_data['AgentKey']."', '".$agents_data['AgentLastName']."', '".$agents_data['AgentMiddleInitial']."', '".$agents_data['AgentNickName']."', '".$agents_data['AgentPreferredFirstName']."', '".$agents_data['AgentPreferredLastName']."', '".$agents_data['AgentSystemLocale']."', '".$agents_data['AgentSubSystemLocale']."', '".$agents_data['OfficeSourceCreationTimestamp']."', '".$agents_data['OfficeSourceModificationTimestamp']."', '".$agents_data['OfficeID']."', '".$agents_data['OfficeTradingAs']."', '".$agents_data['OfficeOfficePhone']."', '".$agents_data['OfficeCityName']."', '".$agents_data['OfficeState']."', '1', '". date("Y-m-d H:i:s") ."')";
				
				$agent_result = $conn->query($agent_sql);

			    echo "Agent: ".$agent_id." is new <br/><br/>";	
			}
			else
			{
				echo "Agent: ".$agent_id." already exists<br/><br/>";
			}
		}*/

		function add_images($conn,$image)
		{
			$imageListingID = $image['ListingID'];

			$PropMediaKey = $image['PropMediaKey'];

			$PropertyImage = $image['PropMediaURL'];

			$image_extension = pathinfo($PropertyImage,PATHINFO_EXTENSION);

			if($image_extension == 'jpg' || $image_extension == 'png' || $image_extension == 'gif')
			{
				$image_ext = 'valid';
			}
			else
			{
				$image_ext = 'notvalid';
			}

			$image_sql = "select id from tbl_property_photos where propertyid='".$imageListingID."' and imagekey = '".$PropMediaKey."'";

			$image_result = $conn->query($image_sql);

			if ($image_result->num_rows == 0)
			{			
				if($image_ext == 'valid')
				{
					$image_name = md5(uniqid(rand(), true)).".jpg";

					$imageData = file_get_contents($PropertyImage); 

					$imageData = base64_encode($imageData);
					
					$upload_path="../uploads/".$image_name; 
					
					ob_start();
					$imageData 	= base64_decode($imageData);
					$source 	= imagecreatefromstring($imageData);
					$rotate 	= imagerotate($source, $angle, 0); // if want to rotate the image
					
					header('Content-Type: image/jpeg');
					$imageSave 	= imagejpeg($source,$upload_path,80);
					chmod($upload_path, 0755);
					imagedestroy($source);
					ob_end_clean();
				
					$newsql = "INSERT INTO tbl_property_photos (propertyid, imagepath, imagekey, is_active, created_on) VALUES
					('".$imageListingID."', '".$image_name."', '".$PropMediaKey."', '1', '".date("Y-m-d H:i:s")."')";
									
					$image_add_result = $conn->query($newsql);
				}
			}
			else
			{
				if($image_ext == 'notvalid')
				{
					$delete_sql = "delete from tbl_property_photos where propertyid='".$imageListingID."' and imagekey = '".$PropMediaKey."'";

					$delete_result = $conn->query($delete_sql);
				}
			}
		}
						

		function check_property($conn, $propertyid)
		{
			$sql= "select Id from tbl_properties where ListingID = '".$propertyid."'";

			$result = $conn->query($sql);

			if ($result->num_rows > 0)
			{
				return true;
			}
			else
			{
				return false;				
			}
		}


		function add_property_list($conn, $propertyid,$listdate)
		{
			$sql = "INSERT INTO tbl_property_list(ListingID, ListDate, created_date) VALUES ('".$propertyid."','".$listdate."', '". date("Y-m-d H:i:s") ."')";

			if ($conn->query($sql) === TRUE)
			{	
				return true;
			}
			else
			{ 
				return false;
			}
		}



		function add_property($conn, $property_data)
		{
			$address = $property_data['FullStreetAddress'].", ".$property_data['CityName'].", ".$property_data['State'].", ".$property_data['PostalCode'];
								
			$latlong = latlong($address);

			$newlatlng = explode('||',$latlong);

			$lat = $newlatlng[0];

			$long = $newlatlng[1];

			/*$listagentid = mysqli_real_escape_string($conn, $property_data['ListAgentAgentID']);*/

			$listagentid = '';
							
		    $sql = "INSERT INTO tbl_properties(AnnualLeasePrice,AnnualLeasePricePerSqFt,Attics,BasementType,BlockOrSquare,BuildingOrBusiness,Buildings,LisMediaList,InteriorSquareFeetSource,RoomList,LandOnly,LimitedService,ListDate,ListPrice,ListingID,ListingKey,LocaleListingStatus,MaxLease,MinLease,ModificationTimestamp,SourceModificationTimestamp,Ownership,PoolType,PricePerSqFt,PropertyType,Section8Approved,SourceCreationTimestamp,StructureList,UnitsInDevelopment,UploadToInternetAllowed,WaterFront,WaterFrontage,YearInBusiness,YearRenovated,Appliances,ApprovedSystem,Basement,BuilderName,BuildingFeatures,BuildingFloors,BuildingName,CentralAir,Design,DiningKitchen,Exterior,ExteriorAmenities,ExteriorFeatures,Fencing,Fireplace,FireplaceCount,FireplaceFeatures,Foundation,Furnished,Handicap,InteriorFeatures,Load1,ModelName,NewConstruction,Plumbing,PropertyCondition,Roof,Storage,Styles,Type,WallsCeilings,Bathrooms,BathsFull,BathsHalf,Beds,Entrance,Floor,LowerFloor1Baths,LowerFloor1HalfBaths,MainEntrance,MainFloorBaths,MainFloorHalfBaths,UpperFloor1Baths,UpperFloor1HalfBaths,StoryList,GrossSQFT,LandSqFt,LeasableSQFT,NetSQFT,RFactorCeilings,RFactorWalls,BedroomFourth1Length,BedroomFourth1Level,BedroomFourth1Width,BedroomMaster1Length,BedroomMaster1Level,BedroomMaster1Width,BedroomSecond1Length,BedroomSecond1Level,BedroomSecond1Width,BedroomThird1Length,BedroomThird1Level,BedroomThird1Width,DiningRoom,DiningRoomLength,DiningRoomLevel,DiningRoomWidth,FamilyRoom,FamilyRoomLength,FamilyRoomLevel,FamilyRoomWidth,Kitchen1Length,Kitchen1Level,Kitchen1Width,LivingRoomLength,LivingRoomLevel,LivingRoomWidth,MainBedroom,OtherRm1Length,OtherRm1Level,OtherRm1Name,OtherRm1Width,OtherRm2Length,OtherRm2Level,OtherRm2Name,OtherRm2Width,OtherRm3Length,OtherRm3Level,OtherRm3Name,OtherRm3Width,OtherRm4Length,OtherRm4Level,OtherRm4Name,OtherRm4Width,TotalRooms,StudioEfficiencyUnits,ThreeBedroomUnits,TwoBedroomUnits,TotalUnits,Unit1Baths,Unit1Bedrooms,Unit1InteriorSqFt,Unit1LeaseEnd,Unit1MonthlyRent,Unit1Occupied,Unit1PartialBaths,Unit1Rooms,Unit2Baths,Unit2Bedrooms,Unit2InteriorSqFt,Unit2LeaseEnd,Unit2MonthlyRent,Unit2Occupied,Unit2PartialBaths,Unit2Rooms,Unit3Baths,Unit3Bedrooms,Unit3InteriorSqFt,Unit3LeaseEnd,Unit3MonthlyRent,Unit3Occupied,Unit3PartialBaths,Unit3Rooms,Unit4Baths,Unit4Bedrooms,Unit4InteriorSqFt,Unit4LeaseEnd,Unit4MonthlyRent,Unit4Occupied,Unit4PartialBaths,Unit4Rooms,Unit5Baths,Unit5Bedrooms,Unit5InteriorSqFt,Unit5LeaseEnd,Unit5MonthlyRent,Unit5Occupied,Unit5PartialBaths,Unit5Rooms,Unit6Baths,Unit6Bedrooms,Unit6InteriorSqFt,Unit6LeaseEnd,Unit6MonthlyRent,Unit6Occupied,Unit6PartialBaths,Unit6Rooms,Unit7Baths,Unit7Bedrooms,Unit7InteriorSqFt,Unit7LeaseEnd,Unit7MonthlyRent,Unit7Occupied,Unit7PartialBaths,Unit7Rooms,Unit8Baths,Unit8Bedrooms,Unit8InteriorSqFt,Unit8LeaseEnd,Unit8MonthlyRent,Unit8Occupied,Unit8PartialBaths,Unit8Rooms,Unit9Baths,Unit9Bedrooms,Unit9InteriorSqFt,Unit9LeaseEnd,Unit9MonthlyRent,Unit9Occupied,Unit9PartialBaths,Unit9Rooms,UnitFloors,CookingFuel,Cooling,ElectricService,FuelOnSite,Heating,HotWater,LaundryType,SewerSeptic,Utilities,Water,ApplicationFee,ExtraFee,HOAFee,PetDeposit,SecurityDeposit,TenantPays,AdditionalIncomeSources,AnnualElectricExpense,AnnualGrossExpense,AnnualGrossIncome,AnnualHeatingExpense,AnnualInsuranceExpense,AnnualMaintananceExpense,AnnualOtherExpense,AnnualWaterSewerExpense,OneBedroomUnits,RestrictionEasements,Tenancy,CurrentFinancing,PetRestrictions,PropertyOption,RentIncludes,SaleIncludes,MaxPhotoTms,TotalPhotos,ExclusionRemarks,InclusionRemarks,Remarks,LandUse,LandUseCode,LeaseInEffect,LeasedUnits,LotAreaAcre,LotDimDepth,LotDimWidth,LotDimensions,PorchDeck,PropertyAge,SoilTypes,Structures,Topography,ZoningCode,HasGarageFlag,GarageSpaces,GarageType,Parking,AltAgentFirstName,AltAgentGeneration,AltAgentAgentID,AltAgentLastName,AltAgentMiddleInitial,AltAgentNickname,AltAgentPreferredFirstName,AltAgentPreferredLastName,ListAgentFirstName,ListAgentGeneration,ListAgentAgentID,ListAgentLastName,ListAgentMiddleInitial,ListAgentNickname,ListOfficeOfficeID,ListOfficeOfficePhone,ListOfficeFullOfficeName,LeaseType,AddressExportAllowed,CityName,County,CrossStreet,DisplayStreetNumber,FullStreetAddress,PostalCode,State,StreetDirPrefix,StreetName,StreetSuffix,StreetNumber,UnitNumber,Zip4,ApplicationAt,AssociationFeePaymentFreq,CommunityFeeIncludes,CondoAssociation,ElementarySchool,ElementarySchool2,HOA,HighSchool,HousingForOlderPersons,MiddleSchool,PetsAllowed,Pool,PropertySubdivision,Roads,SmokingProhibited,Subdivision,Farm,FarmHouse,FarmUses,Directions,ListingArea,Location,LocationTypes,LotDescription,LotImprovement,LotNumber,SchoolDistrict,TrafficCount,TaxYear,TotalAssessment,TotalTaxes,SepticExpiryDate,WellDepth,ListingAreaID,GreenRemarks,Certifications,OneTimeFee,AdditionalSaleTerms,BuildingFacadeOrientation,Latitude,Longitude,CloseDate,ClosePrice,AboveGradeIntSQFT,AboveGradeIntSQFTSource,BasementFinishedPercent,BasementFootprintPercent,BelowGradeIntSQFT,BelowGradeIntSQFTSource,DateAvailable,FinalRentalTerm,FinalSaleTerms,FinancingType,HasContingency,IsTheHomeBuilt,LandAssessmentAmount,LaundryRoom,LaundryRoomLength,LaundryRoomLevel,LaundryRoomWidth,ListAgentPreferredFirstName,ListAgentPreferredLastName,ListingTaxID,ListOfficePostalCode,MiddleSchool2,MonthsRentUpFront,OffMarketDate,PurchaseOptional,SaleAgentAgentID,SaleAgentFirstName,SaleAgentGeneration,SaleAgentLastName,SaleAgentMiddleInitial,SaleAgentNickName,SaleAgentPreferredFirstName,SaleAgentPreferredLastName,SaleOfficeFullOfficeName,SaleOfficeOfficeID,StatusChangeDate,UnitList,VowAVMAllowed,VOWCommentsAllowed,created_on) VALUES ('".mysqli_real_escape_string($conn, $property_data['AnnualLeasePrice'])."', '".mysqli_real_escape_string($conn, $property_data['AnnualLeasePricePerSqFt'])."', '".mysqli_real_escape_string($conn, $property_data['Attics'])."', '".mysqli_real_escape_string($conn, $property_data['BasementType'])."', '".mysqli_real_escape_string($conn, $property_data['BlockOrSquare'])."', '".mysqli_real_escape_string($conn, $property_data['BuildingOrBusiness'])."', '".mysqli_real_escape_string($conn, $property_data['Buildings'])."', '".mysqli_real_escape_string($conn, $property_data['LisMediaList'])."', '".mysqli_real_escape_string($conn, $property_data['InteriorSquareFeetSource'])."', '".mysqli_real_escape_string($conn, $property_data['RoomList'])."', '".mysqli_real_escape_string($conn, $property_data['LandOnly'])."', '".mysqli_real_escape_string($conn, $property_data['LimitedService'])."', '".mysqli_real_escape_string($conn, $property_data['ListDate'])."', '".mysqli_real_escape_string($conn, $property_data['ListPrice'])."', '".mysqli_real_escape_string($conn, $property_data['ListingID'])."', '".mysqli_real_escape_string($conn, $property_data['ListingKey'])."', '".mysqli_real_escape_string($conn, $property_data['LocaleListingStatus'])."', '".mysqli_real_escape_string($conn, $property_data['MaxLease'])."', '".mysqli_real_escape_string($conn, $property_data['MinLease'])."', '".mysqli_real_escape_string($conn, $property_data['ModificationTimestamp'])."', '".mysqli_real_escape_string($conn, $property_data['SourceModificationTimestamp'])."', '".mysqli_real_escape_string($conn, $property_data['Ownership'])."', '".mysqli_real_escape_string($conn, $property_data['PoolType'])."', '".mysqli_real_escape_string($conn, $property_data['PricePerSqFt'])."', '".mysqli_real_escape_string($conn, $property_data['PropertyType'])."', '".mysqli_real_escape_string($conn, $property_data['Section8Approved'])."', '".mysqli_real_escape_string($conn, $property_data['SourceCreationTimestamp'])."', '".mysqli_real_escape_string($conn, $property_data['StructureList'])."', '".mysqli_real_escape_string($conn, $property_data['UnitsInDevelopment'])."', '".mysqli_real_escape_string($conn, $property_data['UploadToInternetAllowed'])."', '".mysqli_real_escape_string($conn, $property_data['WaterFront'])."', '".mysqli_real_escape_string($conn, $property_data['WaterFrontage'])."', '".mysqli_real_escape_string($conn, $property_data['YearInBusiness'])."', '".mysqli_real_escape_string($conn, $property_data['YearRenovated'])."', '".mysqli_real_escape_string($conn, $property_data['Appliances'])."', '".mysqli_real_escape_string($conn, $property_data['ApprovedSystem'])."', '".mysqli_real_escape_string($conn, $property_data['Basement'])."', '".mysqli_real_escape_string($conn, $property_data['BuilderName'])."', '".mysqli_real_escape_string($conn, $property_data['BuildingFeatures'])."', '".mysqli_real_escape_string($conn, $property_data['BuildingFloors'])."', '".mysqli_real_escape_string($conn, $property_data['BuildingName'])."', '".mysqli_real_escape_string($conn, $property_data['CentralAir'])."', '".mysqli_real_escape_string($conn, $property_data['Design'])."', '".mysqli_real_escape_string($conn, $property_data['DiningKitchen'])."', '".mysqli_real_escape_string($conn, $property_data['Exterior'])."', '".mysqli_real_escape_string($conn, $property_data['ExteriorAmenities'])."', '".mysqli_real_escape_string($conn, $property_data['ExteriorFeatures'])."', '".mysqli_real_escape_string($conn, $property_data['Fencing'])."', '".mysqli_real_escape_string($conn, $property_data['Fireplace'])."', '".mysqli_real_escape_string($conn, $property_data['FireplaceCount'])."', '".mysqli_real_escape_string($conn, $property_data['FireplaceFeatures'])."', '".mysqli_real_escape_string($conn, $property_data['Foundation'])."', '".mysqli_real_escape_string($conn, $property_data['Furnished'])."', '".mysqli_real_escape_string($conn, $property_data['Handicap'])."', '".mysqli_real_escape_string($conn, $property_data['InteriorFeatures'])."', '".mysqli_real_escape_string($conn, $property_data['Load'])."', '".mysqli_real_escape_string($conn, $property_data['ModelName'])."', '".mysqli_real_escape_string($conn, $property_data['NewConstruction'])."', '".mysqli_real_escape_string($conn, $property_data['Plumbing'])."', '".mysqli_real_escape_string($conn, $property_data['PropertyCondition'])."', '".mysqli_real_escape_string($conn, $property_data['Roof'])."', '".mysqli_real_escape_string($conn, $property_data['Storage'])."', '".mysqli_real_escape_string($conn, $property_data['Styles'])."', '".mysqli_real_escape_string($conn, $property_data['Type'])."', '".mysqli_real_escape_string($conn, $property_data['WallsCeilings'])."', '".mysqli_real_escape_string($conn, $property_data['Bathrooms'])."', '".mysqli_real_escape_string($conn, $property_data['BathsFull'])."', '".mysqli_real_escape_string($conn, $property_data['BathsHalf'])."', '".mysqli_real_escape_string($conn, $property_data['Beds'])."', '".mysqli_real_escape_string($conn, $property_data['Entrance'])."', '".mysqli_real_escape_string($conn, $property_data['Floor'])."', '".mysqli_real_escape_string($conn, $property_data['LowerFloor1Baths'])."', '".mysqli_real_escape_string($conn, $property_data['LowerFloor1HalfBaths'])."', '".mysqli_real_escape_string($conn, $property_data['MainEntrance'])."', '".mysqli_real_escape_string($conn, $property_data['MainFloorBaths'])."', '".mysqli_real_escape_string($conn, $property_data['MainFloorHalfBaths'])."', '".mysqli_real_escape_string($conn, $property_data['UpperFloor1Baths'])."', '".mysqli_real_escape_string($conn, $property_data['UpperFloor1HalfBaths'])."', '".mysqli_real_escape_string($conn, $property_data['StoryList'])."', '".mysqli_real_escape_string($conn, $property_data['GrossSQFT'])."', '".mysqli_real_escape_string($conn, $property_data['LandSqFt'])."', '".mysqli_real_escape_string($conn, $property_data['LeasableSQFT'])."', '".mysqli_real_escape_string($conn, $property_data['NetSQFT'])."', '".mysqli_real_escape_string($conn, $property_data['RFactorCeilings'])."', '".mysqli_real_escape_string($conn, $property_data['RFactorWalls'])."', '".mysqli_real_escape_string($conn, $property_data['BedroomFourth1Length'])."', '".mysqli_real_escape_string($conn, $property_data['BedroomFourth1Level'])."', '".mysqli_real_escape_string($conn, $property_data['BedroomFourth1Width'])."', '".mysqli_real_escape_string($conn, $property_data['BedroomMaster1Length'])."', '".mysqli_real_escape_string($conn, $property_data['BedroomMaster1Level'])."', '".mysqli_real_escape_string($conn, $property_data['BedroomMaster1Width'])."', '".mysqli_real_escape_string($conn, $property_data['BedroomSecond1Length'])."', '".mysqli_real_escape_string($conn, $property_data['BedroomSecond1Level'])."', '".mysqli_real_escape_string($conn, $property_data['BedroomSecond1Width'])."', '".mysqli_real_escape_string($conn, $property_data['BedroomThird1Length'])."', '".mysqli_real_escape_string($conn, $property_data['BedroomThird1Level'])."', '".mysqli_real_escape_string($conn, $property_data['BedroomThird1Width'])."', '".mysqli_real_escape_string($conn, $property_data['DiningRoom'])."', '".mysqli_real_escape_string($conn, $property_data['DiningRoomLength'])."', '".mysqli_real_escape_string($conn, $property_data['DiningRoomLevel'])."', '".mysqli_real_escape_string($conn, $property_data['DiningRoomWidth'])."', '".mysqli_real_escape_string($conn, $property_data['FamilyRoom'])."', '".mysqli_real_escape_string($conn, $property_data['FamilyRoomLength'])."', '".mysqli_real_escape_string($conn, $property_data['FamilyRoomLevel'])."', '".mysqli_real_escape_string($conn, $property_data['FamilyRoomWidth'])."', '".mysqli_real_escape_string($conn, $property_data['Kitchen1Length'])."', '".mysqli_real_escape_string($conn, $property_data['Kitchen1Level'])."', '".mysqli_real_escape_string($conn, $property_data['Kitchen1Width'])."', '".mysqli_real_escape_string($conn, $property_data['LivingRoomLength'])."', '".mysqli_real_escape_string($conn, $property_data['LivingRoomLevel'])."', '".mysqli_real_escape_string($conn, $property_data['LivingRoomWidth'])."', '".mysqli_real_escape_string($conn, $property_data['MainBedroom'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm1Length'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm1Level'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm1Name'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm1Width'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm2Length'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm2Level'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm2Name'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm2Width'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm3Length'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm3Level'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm3Name'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm3Width'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm4Length'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm4Level'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm4Name'])."', '".mysqli_real_escape_string($conn, $property_data['OtherRm4Width'])."', '".mysqli_real_escape_string($conn, $property_data['TotalRooms'])."', '".mysqli_real_escape_string($conn, $property_data['StudioEfficiencyUnits'])."', '".mysqli_real_escape_string($conn, $property_data['ThreeBedroomUnits'])."', '".mysqli_real_escape_string($conn, $property_data['TwoBedroomUnits'])."', '".mysqli_real_escape_string($conn, $property_data['TotalUnits'])."', '".mysqli_real_escape_string($conn, $property_data['Unit1Baths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit1Bedrooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit1InteriorSqFt'])."', '".mysqli_real_escape_string($conn, $property_data['Unit1LeaseEnd'])."', '".mysqli_real_escape_string($conn, $property_data['Unit1MonthlyRent'])."', '".mysqli_real_escape_string($conn, $property_data['Unit1Occupied'])."', '".mysqli_real_escape_string($conn, $property_data['Unit1PartialBaths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit1Rooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit2Baths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit2Bedrooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit2InteriorSqFt'])."', '".mysqli_real_escape_string($conn, $property_data['Unit2LeaseEnd'])."', '".mysqli_real_escape_string($conn, $property_data['Unit2MonthlyRent'])."', '".mysqli_real_escape_string($conn, $property_data['Unit2Occupied'])."', 
			        '".mysqli_real_escape_string($conn, $property_data['Unit2PartialBaths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit2Rooms'])."', 
			   		'".mysqli_real_escape_string($conn, $property_data['Unit3Baths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit3Bedrooms'])."',
			    	'".mysqli_real_escape_string($conn, $property_data['Unit3InteriorSqFt'])."', '".mysqli_real_escape_string($conn, $property_data['Unit3LeaseEnd'])."', 
			   		'".mysqli_real_escape_string($conn, $property_data['Unit3MonthlyRent'])."', '".mysqli_real_escape_string($conn, $property_data['Unit3Occupied'])."', 
			   		'".mysqli_real_escape_string($conn, $property_data['Unit3PartialBaths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit3Rooms'])."',
			    	'".mysqli_real_escape_string($conn, $property_data['Unit4Baths'])."','".mysqli_real_escape_string($conn, $property_data['Unit4Bedrooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit4InteriorSqFt'])."', '".mysqli_real_escape_string($conn, $property_data['Unit4LeaseEnd'])."', '".mysqli_real_escape_string($conn, $property_data['Unit4MonthlyRent'])."', '".mysqli_real_escape_string($conn, $property_data['Unit4Occupied'])."', '".mysqli_real_escape_string($conn, $property_data['Unit4PartialBaths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit4Rooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit5Baths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit5Bedrooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit5InteriorSqFt'])."', '".mysqli_real_escape_string($conn, $property_data['Unit5LeaseEnd'])."', '".mysqli_real_escape_string($conn, $property_data['Unit5MonthlyRent'])."', '".mysqli_real_escape_string($conn, $property_data['Unit5Occupied'])."', '".mysqli_real_escape_string($conn, $property_data['Unit5PartialBaths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit5Rooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit6Baths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit6Bedrooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit6InteriorSqFt'])."', '".mysqli_real_escape_string($conn, $property_data['Unit6LeaseEnd'])."', '".mysqli_real_escape_string($conn, $property_data['Unit6MonthlyRent'])."', '".mysqli_real_escape_string($conn, $property_data['Unit6Occupied'])."', '".mysqli_real_escape_string($conn, $property_data['Unit6PartialBaths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit6Rooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit7Baths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit7Bedrooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit7InteriorSqFt'])."', '".mysqli_real_escape_string($conn, $property_data['Unit7LeaseEnd'])."', '".mysqli_real_escape_string($conn, $property_data['Unit7MonthlyRent'])."', '".mysqli_real_escape_string($conn, $property_data['Unit7Occupied'])."', '".mysqli_real_escape_string($conn, $property_data['Unit7PartialBaths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit7Rooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit8Baths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit8Bedrooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit8InteriorSqFt'])."', '".mysqli_real_escape_string($conn, $property_data['Unit8LeaseEnd'])."', '".mysqli_real_escape_string($conn, $property_data['Unit8MonthlyRent'])."', '".mysqli_real_escape_string($conn, $property_data['Unit8Occupied'])."', '".mysqli_real_escape_string($conn, $property_data['Unit8PartialBaths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit8Rooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit9Baths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit9Bedrooms'])."', '".mysqli_real_escape_string($conn, $property_data['Unit9InteriorSqFt'])."', '".mysqli_real_escape_string($conn, $property_data['Unit9LeaseEnd'])."', '".mysqli_real_escape_string($conn, $property_data['Unit9MonthlyRent'])."', '".mysqli_real_escape_string($conn, $property_data['Unit9Occupied'])."', '".mysqli_real_escape_string($conn, $property_data['Unit9PartialBaths'])."', '".mysqli_real_escape_string($conn, $property_data['Unit9Rooms'])."', '".mysqli_real_escape_string($conn, $property_data['UnitFloors'])."', '".mysqli_real_escape_string($conn, $property_data['CookingFuel'])."', '".mysqli_real_escape_string($conn, $property_data['Cooling'])."', '".mysqli_real_escape_string($conn, $property_data['ElectricService'])."', '".mysqli_real_escape_string($conn, $property_data['FuelOnSite'])."', '".mysqli_real_escape_string($conn, $property_data['Heating'])."', '".mysqli_real_escape_string($conn, $property_data['HotWater'])."', '".mysqli_real_escape_string($conn, $property_data['LaundryType'])."', '".mysqli_real_escape_string($conn, $property_data['SewerSeptic'])."', '".mysqli_real_escape_string($conn, $property_data['Utilities'])."', '".mysqli_real_escape_string($conn, $property_data['Water'])."', '".mysqli_real_escape_string($conn, $property_data['ApplicationFee'])."', '".mysqli_real_escape_string($conn, $property_data['ExtraFee'])."', '".mysqli_real_escape_string($conn, $property_data['HOAFee'])."', '".mysqli_real_escape_string($conn, $property_data['PetDeposit'])."', '".mysqli_real_escape_string($conn, $property_data['SecurityDeposit'])."', '".mysqli_real_escape_string($conn, $property_data['TenantPays'])."', '".mysqli_real_escape_string($conn, $property_data['AdditionalIncomeSources'])."', '".mysqli_real_escape_string($conn, $property_data['AnnualElectricExpense'])."', '".mysqli_real_escape_string($conn, $property_data['AnnualGrossExpense'])."', '".mysqli_real_escape_string($conn, $property_data['AnnualGrossIncome'])."', '".mysqli_real_escape_string($conn, $property_data['AnnualHeatingExpense'])."', '".mysqli_real_escape_string($conn, $property_data['AnnualInsuranceExpense'])."', '".mysqli_real_escape_string($conn, $property_data['AnnualMaintananceExpense'])."', '".mysqli_real_escape_string($conn, $property_data['AnnualOtherExpense'])."', '".mysqli_real_escape_string($conn, $property_data['AnnualWaterSewerExpense'])."', '".mysqli_real_escape_string($conn, $property_data['OneBedroomUnits'])."', '".mysqli_real_escape_string($conn, $property_data['RestrictionEasements'])."', '".mysqli_real_escape_string($conn, $property_data['Tenancy'])."', '".mysqli_real_escape_string($conn, $property_data['CurrentFinancing'])."', '".mysqli_real_escape_string($conn, $property_data['PetRestrictions'])."', '".mysqli_real_escape_string($conn, $property_data['PropertyOption'])."', '".mysqli_real_escape_string($conn, $property_data['RentIncludes'])."', '".mysqli_real_escape_string($conn, $property_data['SaleIncludes'])."', '".mysqli_real_escape_string($conn, $property_data['MaxPhotoTms'])."', '".mysqli_real_escape_string($conn, $property_data['TotalPhotos'])."', '".mysqli_real_escape_string($conn, $property_data['ExclusionRemarks'])."', '".mysqli_real_escape_string($conn, $property_data['InclusionRemarks'])."', '".mysqli_real_escape_string($conn, $property_data['Remarks'])."', '".mysqli_real_escape_string($conn, $property_data['LandUse'])."', '".mysqli_real_escape_string($conn, $property_data['LandUseCode'])."', '".mysqli_real_escape_string($conn, $property_data['LeaseInEffect'])."', '".mysqli_real_escape_string($conn, $property_data['LeasedUnits'])."', '".mysqli_real_escape_string($conn, $property_data['LotAreaAcre'])."', '".mysqli_real_escape_string($conn, $property_data['LotDimDepth'])."', '".mysqli_real_escape_string($conn, $property_data['LotDimWidth'])."', '".mysqli_real_escape_string($conn, $property_data['LotDimensions'])."', '".mysqli_real_escape_string($conn, $property_data['PorchDeck'])."', '".mysqli_real_escape_string($conn, $property_data['PropertyAge'])."', '".mysqli_real_escape_string($conn, $property_data['SoilTypes'])."', '".mysqli_real_escape_string($conn, $property_data['Structures'])."', '".mysqli_real_escape_string($conn, $property_data['Topography'])."', '".mysqli_real_escape_string($conn, $property_data['ZoningCode'])."', '".mysqli_real_escape_string($conn, $property_data['HasGarageFlag'])."', '".mysqli_real_escape_string($conn, $property_data['GarageSpaces'])."', '".mysqli_real_escape_string($conn, $property_data['GarageType'])."', '".mysqli_real_escape_string($conn, $property_data['Parking'])."', '".mysqli_real_escape_string($conn, $property_data['AltAgentFirstName'])."', '".mysqli_real_escape_string($conn, $property_data['AltAgentGeneration'])."', '".mysqli_real_escape_string($conn, $property_data['AltAgentAgentID'])."', '".mysqli_real_escape_string($conn, $property_data['AltAgentLastName'])."', '".mysqli_real_escape_string($conn, $property_data['AltAgentMiddleInitial'])."', '".mysqli_real_escape_string($conn, $property_data['AltAgentNickname'])."', '".mysqli_real_escape_string($conn, $property_data['AltAgentPreferredFirstName'])."', '".mysqli_real_escape_string($conn, $property_data['AltAgentPreferredLastName'])."', '".mysqli_real_escape_string($conn, $property_data['ListAgentFirstName'])."', '".mysqli_real_escape_string($conn, $property_data['ListAgentGeneration'])."', '".$listagentid."', '".mysqli_real_escape_string($conn, $property_data['ListAgentLastName'])."', '".mysqli_real_escape_string($conn, $property_data['ListAgentMiddleInitial'])."', '".mysqli_real_escape_string($conn, $property_data['ListAgentNickname'])."', '".mysqli_real_escape_string($conn, $property_data['ListOfficeOfficeID'])."', '".mysqli_real_escape_string($conn, $property_data['ListOfficeOfficePhone'])."', '".mysqli_real_escape_string($conn, $property_data['ListOfficeFullOfficeName'])."', '".mysqli_real_escape_string($conn, $property_data['LeaseType'])."', '".mysqli_real_escape_string($conn, $property_data['AddressExportAllowed'])."', '".mysqli_real_escape_string($conn, $property_data['CityName'])."', '".mysqli_real_escape_string($conn, $property_data['County'])."', '".mysqli_real_escape_string($conn, $property_data['CrossStreet'])."', '".mysqli_real_escape_string($conn, $property_data['DisplayStreetNumber'])."', '".mysqli_real_escape_string($conn, $property_data['FullStreetAddress'])."', '".mysqli_real_escape_string($conn, $property_data['PostalCode'])."', '".mysqli_real_escape_string($conn, $property_data['State'])."', '".mysqli_real_escape_string($conn, $property_data['StreetDirPrefix'])."', '".mysqli_real_escape_string($conn, $property_data['StreetName'])."', '".mysqli_real_escape_string($conn, $property_data['StreetSuffix'])."', '".mysqli_real_escape_string($conn, $property_data['StreetNumber'])."', '".mysqli_real_escape_string($conn, $property_data['UnitNumber'])."', '".mysqli_real_escape_string($conn, $property_data['Zip4'])."', '".mysqli_real_escape_string($conn, $property_data['ApplicationAt'])."', '".mysqli_real_escape_string($conn, $property_data['AssociationFeePaymentFreq'])."', '".mysqli_real_escape_string($conn, $property_data['CommunityFeeIncludes'])."', '".mysqli_real_escape_string($conn, $property_data['CondoAssociation'])."', '".mysqli_real_escape_string($conn, $property_data['ElementarySchool'])."', '".mysqli_real_escape_string($conn, $property_data['ElementarySchool2'])."', '".mysqli_real_escape_string($conn, $property_data['HOA'])."', '".mysqli_real_escape_string($conn, $property_data['HighSchool'])."', '".mysqli_real_escape_string($conn, $property_data['HousingForOlderPersons'])."', '".mysqli_real_escape_string($conn, $property_data['MiddleSchool'])."', '".mysqli_real_escape_string($conn, $property_data['PetsAllowed'])."', '".mysqli_real_escape_string($conn, $property_data['Pool'])."', '".mysqli_real_escape_string($conn, $property_data['PropertySubdivision'])."', '".mysqli_real_escape_string($conn, $property_data['Roads'])."', '".mysqli_real_escape_string($conn, $property_data['SmokingProhibited'])."', '".mysqli_real_escape_string($conn, $property_data['Subdivision'])."', '".mysqli_real_escape_string($conn, $property_data['Farm'])."', '".mysqli_real_escape_string($conn, $property_data['FarmHouse'])."', '".mysqli_real_escape_string($conn, $property_data['FarmUses'])."', '".mysqli_real_escape_string($conn, $property_data['Directions'])."', '".mysqli_real_escape_string($conn, $property_data['ListingArea'])."', '".mysqli_real_escape_string($conn, $property_data['Location'])."', '".mysqli_real_escape_string($conn, $property_data['LocationTypes'])."', '".mysqli_real_escape_string($conn, $property_data['LotDescription'])."', '".mysqli_real_escape_string($conn, $property_data['LotImprovement'])."', '".mysqli_real_escape_string($conn, $property_data['LotNumber'])."', '".mysqli_real_escape_string($conn, $property_data['SchoolDistrict'])."', '".mysqli_real_escape_string($conn, $property_data['TrafficCount'])."', '".mysqli_real_escape_string($conn, $property_data['TaxYear'])."', '".mysqli_real_escape_string($conn, $property_data['TotalAssessment'])."', '".mysqli_real_escape_string($conn, $property_data['TotalTaxes'])."', '".mysqli_real_escape_string($conn, $property_data['SepticExpiryDate'])."', '".mysqli_real_escape_string($conn, $property_data['WellDepth'])."', '".mysqli_real_escape_string($conn, $property_data['ListingAreaID'])."', '".mysqli_real_escape_string($conn, $property_data['GreenRemarks'])."', '".mysqli_real_escape_string($conn, $property_data['Certifications'])."', '".mysqli_real_escape_string($conn, $property_data['OneTimeFee'])."', '".mysqli_real_escape_string($conn, $property_data['AdditionalSaleTerms'])."', '".mysqli_real_escape_string($conn, $property_data['BuildingFacadeOrientation'])."','".$lat."','".$long."','".mysqli_real_escape_string($conn, $property_data['CloseDate'])."','".mysqli_real_escape_string($conn, $property_data['ClosePrice'])."','".mysqli_real_escape_string($conn, $property_data['AboveGradeIntSQFT'])."', '".mysqli_real_escape_string($conn, $property_data['AboveGradeIntSQFTSource'])."', '".mysqli_real_escape_string($conn, $property_data['BasementFinishedPercent'])."', '".mysqli_real_escape_string($conn, $property_data['BasementFootprintPercent'])."', '".mysqli_real_escape_string($conn, $property_data['BelowGradeIntSQFT'])."', '".mysqli_real_escape_string($conn, $property_data['BelowGradeIntSQFTSource'])."', '".mysqli_real_escape_string($conn, $property_data['DateAvailable'])."', '".mysqli_real_escape_string($conn, $property_data['FinalRentalTerm'])."', '".mysqli_real_escape_string($conn, $property_data['FinalSaleTerms'])."', '".mysqli_real_escape_string($conn, $property_data['FinancingType'])."', '".mysqli_real_escape_string($conn, $property_data['HasContingency'])."', '".mysqli_real_escape_string($conn, $property_data['IsTheHomeBuilt'])."', '".mysqli_real_escape_string($conn, $property_data['LandAssessmentAmount'])."', '".mysqli_real_escape_string($conn, $property_data['LaundryRoom'])."', '".mysqli_real_escape_string($conn, $property_data['LaundryRoomLength'])."', '".mysqli_real_escape_string($conn, $property_data['LaundryRoomLevel'])."', '".mysqli_real_escape_string($conn, $property_data['LaundryRoomWidth'])."', '".mysqli_real_escape_string($conn, $property_data['ListAgentPreferredFirstName'])."', '".mysqli_real_escape_string($conn, $property_data['ListAgentPreferredLastName'])."', '".mysqli_real_escape_string($conn, $property_data['ListingTaxID'])."', '".mysqli_real_escape_string($conn, $property_data['ListOfficePostalCode'])."', '".mysqli_real_escape_string($conn, $property_data['MiddleSchool2'])."', '".mysqli_real_escape_string($conn, $property_data['MonthsRentUpFront'])."', '".mysqli_real_escape_string($conn, $property_data['OffMarketDate'])."', '".mysqli_real_escape_string($conn, $property_data['PurchaseOptional'])."', '".mysqli_real_escape_string($conn, $property_data['SaleAgentAgentID'])."', '".mysqli_real_escape_string($conn, $property_data['SaleAgentFirstName'])."', '".mysqli_real_escape_string($conn, $property_data['SaleAgentGeneration'])."', '".mysqli_real_escape_string($conn, $property_data['SaleAgentLastName'])."', '".mysqli_real_escape_string($conn, $property_data['SaleAgentMiddleInitial'])."', '".mysqli_real_escape_string($conn, $property_data['SaleAgentNickName'])."', '".mysqli_real_escape_string($conn, $property_data['SaleAgentPreferredFirstName'])."', '".mysqli_real_escape_string($conn, $property_data['SaleAgentPreferredLastName'])."', '".mysqli_real_escape_string($conn, $property_data['SaleOfficeFullOfficeName'])."', '".mysqli_real_escape_string($conn, $property_data['SaleOfficeOfficeID'])."', '".mysqli_real_escape_string($conn, $property_data['StatusChangeDate'])."', '".mysqli_real_escape_string($conn, $property_data['UnitList'])."', '".mysqli_real_escape_string($conn, $property_data['VowAVMAllowed'])."', '".mysqli_real_escape_string($conn, $property_data['VOWCommentsAllowed'])."','".date("Y-m-d H:i:s")."')";
			

			sleep(5);	

			if ($conn->query($sql) === TRUE)
			{	
				return true; 
			}
			else
			{ 
				return false;
			}
		}

		function update_property($conn, $property_data)
		{
			/*$address = $property_data['FullStreetAddress'].", ".$property_data['CityName'].", ".$property_data['State'].", ".$property_data['PostalCode'];
				
			$latlong = latlong($address);

			$newlatlng = explode('||',$latlong);

			$lat = $newlatlng[0];

			$long = $newlatlng[1];*/


			$sql = "update tbl_properties set FullStreetAddress = '".mysqli_real_escape_string($conn, $property_data['FullStreetAddress'])."', CityName = '".mysqli_real_escape_string($conn, $property_data['CityName'])."', State = '".mysqli_real_escape_string($conn, $property_data['State'])."', PostalCode = '".mysqli_real_escape_string($conn, $property_data['PostalCode'])."', County = '".mysqli_real_escape_string($conn, $property_data['County'])."', NetSQFT = '".mysqli_real_escape_string($conn, $property_data['NetSQFT'])."',Beds = '".mysqli_real_escape_string($conn, $property_data['Beds'])."', Bathrooms = '".mysqli_real_escape_string($conn, $property_data['Bathrooms'])."', BathsHalf = '".mysqli_real_escape_string($conn, $property_data['BathsHalf'])."', BathsFull = '".mysqli_real_escape_string($conn, $property_data['BathsFull'])."',ListDate = '".mysqli_real_escape_string($conn, $property_data['ListDate'])."', CloseDate = '".mysqli_real_escape_string($conn, $property_data['CloseDate'])."',ListPrice = '".mysqli_real_escape_string($conn, $property_data['ListPrice'])."', ClosePrice = '".mysqli_real_escape_string($conn, $property_data['ClosePrice'])."',ListingKey = '".mysqli_real_escape_string($conn, $property_data['ListingKey'])."', LocaleListingStatus = '".mysqli_real_escape_string($conn, $property_data['LocaleListingStatus'])."',Remarks = '".mysqli_real_escape_string($conn, $property_data['Remarks'])."', ListOfficeFullOfficeName = '".mysqli_real_escape_string($conn, $property_data['ListOfficeFullOfficeName'])."',PropertyType = '".mysqli_real_escape_string($conn, $property_data['PropertyType'])."', Type = '".mysqli_real_escape_string($conn, $property_data['Type'])."' where ListingID ='".$property_data['ListingID']."'";


			sleep(2);

			if ($conn->query($sql) === TRUE)
			{	
				return true; 
			}
			else
			{ 
				return false;
			}
		}

		function latlong($address)
		{			 
			$geo_file = "https://maps.googleapis.com/maps/api/place/textsearch/json?query=".urlencode($address)."&key=AIzaSyB-m-ii5t0AZ_PiI8-z5OvldZjzHJVUIik";

			$geocode=file_get_contents($geo_file);

			$output= json_decode($geocode);
			 
			$lat = $output->results[0]->geometry->location->lat;
			$long = $output->results[0]->geometry->location->lng;

			return $lat.'||'.$long;
		}


		function check_total_properties($conn,$start_date,$end_date,$prop_array)
		{
			$sql= "select * from tbl_property_list where ListDate between '".$start_date."' and '".$end_date."'";

			$result = $conn->query($sql);
			
			$total_count = $result->num_rows;

			$new_prop = array();

			echo "total_count:".$total_count."<br/>";

			$i=0;

			if ($total_count > 0)
			{
				while($res= mysqli_fetch_array($result))
				{		
					$new_prop_info = $res['ListingID'].'||'.$res['ListDate'];

					if(in_array($new_prop_info,$prop_array))
					{
						echo  "Property:".$res['ListingID']." exists in MRIS API <br/>";
					}
					else
					{
						echo  "Property:".$res['ListingID']." not exists in MRIS API <br/>";

						$new_prop[] = $new_prop_info;

						$newsql = "update tbl_properties set status ='1' where ListingID='".$res['ListingID']."'";

						$new_result = $conn->query($newsql);
					}
			
					$i++;

					if($i == $total_count)
					{
						echo "<br/>checking ended<br/>";

						/*print_r($new_prop);

						print_r($prop_array);*/
					}
				}
			}
		}
		?>
	</body>
</html>
