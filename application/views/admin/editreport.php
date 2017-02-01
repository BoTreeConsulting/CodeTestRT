<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Service Incident Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <?php include("includes/header_css.php"); ?>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
   
   
    <!--try-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/try/jquery.datetimepicker.css">
   
  
	
	<style type="text/css">

.custom-date-style {
	background-color: red !important;
}

</style>
	<!--try-->
   
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer").validate({
   
        // Specify the validation rules
        rules: {
            name: "required",
			site: "required",
			reportby: "required",
			timedate: "required",
			location: "required",
			hospitalisation: "required",
			medicaltreatment: "required",
			causingdeath: "required",
			equipment: "required",
			violence: "required",
			Statutory: "required",
			description: "required",
			responce: "required",
			fname: "required",
			lname: "required",
			branch: "required",
			position: "required",
			witness: "required",
			firstaid: "required",
			sign: "required",
			date: "required",
			vehicle: "required",
			action: "required",
		
		
           
            
        },
        
        // Specify the validation error messages
        messages: {
           
           
		    name: "Please enter position title",
			site: "Please enter site name",
			reportby: "Please enter information",
			timedate: "Please enter time and date",
			location: "Please enter location",
			hospitalisation: "Please provide information",
			medicaltreatment: "Please provide information",
			causingdeath: "Please provide information",
			equipment: "Please provide information",
			violence: "Please provide information",
			Statutory: "Please provide information",
			description: "Please provide information",
			responce: "Please provide information",
			fname: "Please enter firstname",
			lname: "Please enter lastname",
			branch: "Please enter branch name",
			position: "Please enter position",
			witness: "Please enter witness",
			firstaid: "Please enter firstaider info",
			sign: "Please enter sign",
			date: "Please enter date",
			vehicle: "Please provide information",
			action: "Please provide information",
			
		  
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
    <script>
  function validateForm()
{
    if( $('input[name="rooms[]"]:checked').length == 0 )
    {
        alert("You must check atleast one utility Room");
        return false;
    }
    else if( $('input[name="body[]"]:checked').length == 0){
	alert("You must check atleast one Body part");
        return false;
	}else if($('input[name="injury[]"]:checked').length == 0){
	alert("You must check atleast one nature of injury");
        return false;
	}else if($('input[name="caused[]"]:checked').length == 0){
	alert("You must check atleast one caused reason");
        return false;
	}else{
	
        return true;
		}
}
  </script>   
  
         <!--signature starts here -->
		<script src="<?php echo base_url(); ?>assets/try/jquery.signaturepad.min.js"></script> 
		<script>
		 $(document).ready(function()
         {
		  $('.sigPad').signaturePad({drawOnly:true}); 
		   });
		</script>
		 <!--signature ends here -->
       

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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Incident Report /</span> <span>Edit Report</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_reports" style="color:#FFF">Manage Reports </a>/ <span>Edit Report</span></div>
    	
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-7">
			 <form role="form" method="POST" id="customer" novalidate="novalidate" class='sigPad'>
  <div class="form-group">
    <label for="exampleInputEmail1">Reported by <span class="required_field"> * </span></label>
   <select  class="form-control" name="reportby" id="reportby">
       <option value="">--Please Select--</option>
	   <?php foreach($staff as $st){?>
       <option value="<?php echo $st['admin_id'];?> " <?php if($editreport[0]['inr_reported_by']==$st['admin_id']){echo "selected";}?>><?php echo $st['admin_name'];?></option>
	   <?php } ?>
   </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Position title <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="name" id="name" value="<?php echo $editreport[0]['inr_position'] ?>" >
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Site <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="site" id="site" value="<?php echo $editreport[0]['inr_site'] ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Incident Time&Date <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="timedate" id="datetimepicker_mask" value="<?php echo date("m/d/Y H:i:s",strtotime($editreport[0]['inr_incidenton'])); ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Location <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="location" id="location" value="<?php echo $editreport[0]['inr_location'] ?>" >
  </div>
  <label for="exampleInputEmail1"><b>TYPES OF ACCIDENTS</b></label>
  <div class="form-group">
    <label for="exampleInputPassword1">Injury to employee/ visitor/ contractor requiring hospitalisation  <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="hospitalisation" id="hospitalisation" cols="3"><?php echo $editreport[0]['inr_injury_hospitalisation'] ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Injury to employee/ visitor/ contractor requiring medical treatment <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="medicaltreatment" id="medicaltreatment" cols="3"><?php echo $editreport[0]['inr_injury_medical_treatment'] ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Injury to employee/ visitor/ contractor causing death <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="causingdeath" id="causingdeath" cols="3"><?php echo $editreport[0]['inr_injury_causing_death'] ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Accident involving plant/ equipment <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="equipment" id="equipment" cols="3"><?php echo $editreport[0]['inr_injury_accident'] ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Accident involving violence <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="violence" id="violence" cols="3"><?php echo $editreport[0]['inr_injury_involving_voilence'] ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Accident involving vehicle/s <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="vehicle" id="vehicle" cols="3"><?php echo $editreport[0]['inr_injury_involving_vehicle'] ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Legal action/ Statutory reporting required <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="Statutory" id="Statutory" cols="3"><?php echo $editreport[0]['inr_injury_legal_action'] ?></textarea>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Brief description of accident (facts only, don’t describe why the accident occurred or speculate on who may be at fault)</label>
    <textarea class="form-control" rows="4" name="description" id="description" cols="3"><?php echo $editreport[0]['inr_injury_accident_descr'] ?></textarea>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Details Of immediate responce <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="4" name="responce" id="responce" cols="3"><?php echo $editreport[0]['inr_immedite_reponse'] ?></textarea>
  </div>
 <label for="exampleInputPassword1">INJURED PERSON DETAILS</label>
  <div class="form-group">
    <label for="exampleInputEmail1">First name <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="fname" id="fname" value="<?php echo $editreport[0]['inr_firstname'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last name <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="lname" id="lname" value="<?php echo $editreport[0]['inr_lastname'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Branch <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="branch" id="branch" value="<?php echo $editreport[0]['inr_branch'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Position title <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="position" id="position" value="<?php echo $editreport[0]['inr_position_title'] ?>">
  </div><div class="form-group">
    <label for="exampleInputEmail1">Witness <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="witness" id="witness" value="<?php echo $editreport[0]['inr_witness'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First aider <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="firstaid" id="firstaid" value="<?php echo $editreport[0]['inr_first_aider'] ?>">
  </div>
  
  <section id="no-more-tables" class="chbox">
		
		  <table class="table-bordered table-striped table-condensed cf">
				<tr>
				<td colspan="4">
					<div class="qistext">
					<h4>Utility rooms <span class="required_field"> * </span></h4>
					</div>
				</td>
				</tr>
				<tbody>
				<?php $roo=explode(",",$editreport[0]['inr_utility_rooms']);
				      $body=explode(",",$editreport[0]['inr_body_parts']);
				      $nature=explode(",",$editreport[0]['inr_nature_injury']);
				      $caused=explode(",",$editreport[0]['inr_caused_by']);
				
				
				?>
				
				<tr>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('home',$roo)){ echo "checked";}?> value="home"> Home</label></td>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('doctor',$roo)){ echo "checked";}?>  value="doctor"> Doctor</label></td>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('hospital',$roo)){ echo "checked";}?>  value="hospital"> Hospital</label></td>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('near miss',$roo)){ echo "checked";}?>  value="near miss"> Near miss</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('return to work',$roo)){ echo "checked";}?> value="return to work"> Return to work</label></td>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('medical treatment',$roo)){ echo "checked";}?> value="medical treatment"> Medical treatment </label></td>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('first aid',$roo)){ echo "checked";}?> value="first aid"> First aid treatment </label></td>
				<td></td>
				</tr>
				

				<tr>
				<td colspan="4">
					<div class="qistext">
					<h4>PART OF BODY <span class="required_field"> * </span></h4>
					</div>
				</td>
				</tr>

				
				<tr>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('head',$body)){ echo "checked";}?> value="head"> Head</label></td> 
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('leg',$body)){ echo "checked";}?> value="leg"> Leg</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('trunk',$body)){ echo "checked";}?> value="trunk"> Trunk</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('arm',$body)){ echo "checked";}?> value="arm"> Arm</label></td>
				</tr>
				
				<tr> 
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('ear',$body)){ echo "checked";}?> value="ear"> Ear</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('foot',$body)){ echo "checked";}?> value="foot"> Foot</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('neck',$body)){ echo "checked";}?> value="neck"> Neck</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('back',$body)){ echo "checked";}?> value="back"> Back</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('internal organ',$body)){ echo "checked";}?> value="internal organ"> Internal organ</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('finger',$body)){ echo "checked";}?> value="finger"> Finger</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('toe',$body)){ echo "checked";}?> value="toe"> Toe</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('shoulder',$body)){ echo "checked";}?> value="shoulder"> Shoulder</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('eye',$body)){ echo "checked";}?> value="eye"> Eye</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('hand',$body)){ echo "checked";}?> value="hand"> Hand</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('knee',$body)){ echo "checked";}?> value="knee"> Knee</label></td>
				<td></td>
				</tr>
				
				<tr>
				<td colspan="4">
					<div class="qistext">
					<h4>NATURE OF INJURY <span class="required_field"> * </span></h4>
					</div>
				</td>
				</tr>

				
				<tr>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('fracture',$nature)){ echo "checked";}?> value="fracture"> Fracture</label></td> 
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('dislocation',$nature)){ echo "checked";}?> value="dislocation"> Dislocation</label></td>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('sprain',$nature)){ echo "checked";}?> value="sprain"> Sprain</label></td>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('concussion',$nature)){ echo "checked";}?> value="concussion"> Concussion</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('amputatio',$nature)){ echo "checked";}?> value="amputatio"> Amputatio</label></td>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('laceration',$nature)){ echo "checked";}?> value="laceration"> Laceration/ Cut</label></td> 
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('superficial',$nature)){ echo "checked";}?> value="superficial"> Superficial</label></td>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('bruises',$nature)){ echo "checked";}?> value="bruises"> Bruises</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('other',$nature)){ echo "checked";}?> value="other"> Other</label></td>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('burn',$nature)){ echo "checked";}?> value="burn"> Burn</label></td>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('skin irritation',$nature)){ echo "checked";}?> value="skin irritation"> Skin irritation</label></td> 
				<td>&nbsp;</td>
				</tr>
				
				
				<tr>
				<td colspan="4">
					<div class="qistext">
					<h4>CAUSED BY <span class="required_field"> * </span></h4>
					</div>
				</td>
				</tr>

				
				<tr>
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('fixed machinery',$caused)){ echo "checked";}?> value="fixed machinery"> Fixed machinery</label></td> 
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('mobile plant',$caused)){ echo "checked";}?> value="mobile plant"> Mobile plant/ transport</label></td>
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('powered equipment',$caused)){ echo "checked";}?> value="powered equipment"> Powered equipment</label></td>
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('non powered equipment',$caused)){ echo "checked";}?> value="non powered equipment"> Non powered equipment</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('virus',$caused)){ echo "checked";}?> value="virus"> Bacterial/ Virus</label></td>
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('environmental agency',$caused)){ echo "checked";}?> value="environmental agency"> Environmental agency</label></td> 
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('chemical',$caused)){ echo "checked";}?> value="chemical"> Chemical</label></td>
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('animal',$caused)){ echo "checked";}?> value="animal"> Animal/ Human agency</label></td>
				</tr>
				
		
				
			
				</tbody>
		  </table>
		  
	</section>
  
  
 
   
  <div class="checkbox">
  

</div>


   
  
  <div class="form-group">
    <label for="exampleInputPassword1">Corrective action required</label>
    <textarea class="form-control" rows="3" name="action" id="action" cols="3"><?php echo $editreport[0]['inr_creative_action'] ?></textarea>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status">
       <option value="Active" <?php if($editreport[0]['inr_status']=="Active"){ echo "selected";}?>>Active</option>
       <option value="Inactive" <?php if($editreport[0]['inr_status']=="Inactive"){ echo "selected";}?>>Inactive</option>
   </select>
   </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Signed <span class="required_field"> * </span></label>
	<!--signature starts here -->
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='signs' id='signs'></canvas> </div>
				<input type='hidden'  name='sign' class='output' id='sign'>
                <button class='clearButton'>Reset</button></br>
                <!--signature ends here -->
	
	
	<img src="<?php echo base_url();?>assets/report/<?php echo $editreport[0]['inr_signedby'];?>">
    <input type="hidden" class="form-control" id="exampleInputPassword1" name="oldsign"  value="<?php echo $editreport[0]['inr_signedby'] ?>"> 
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Dated <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="date" id="datepicker" value="<?php echo date("m/d/Y",strtotime($editreport[0]['inr_signedon'])); ?>"> 
  </div> 
  
  <button type="submit"  name="edit" class="btn btn-xs btn-default btyellow" onclick="return validateForm()" style="height:35px;">Edit Report</button>
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
    	<div class="headtext1">© Copyright 2014 Guardian Property Service </div>
    </div>
    </div>
	 <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  </body>
   <script src="<?php echo base_url();?>assets/try/jquery.datetimepicker.js"></script>
	
  <script>
$('#datetimepicker_mask').datetimepicker({
	
});
</script>
  
  
    <script>
  $(function() {
  
    $( "#datepicker" ).datepicker();
});
  
  </script>
    
    
    
    
</html>