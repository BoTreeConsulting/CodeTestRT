<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Service Incident Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
   <?php include("includes/header_css.php"); ?>
   <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
   
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.datetimepicker.css">
    <script src="<?php echo base_url();?>assets/js/jquery.datetimepicker.js"></script>
	
	 <!--try date and time-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/try/jquery.datetimepicker.css">
   
  
	
	<style type="text/css">

.custom-date-style {
	background-color: red !important;
}

</style>
  <!--signature starts here -->
		<script src="<?php echo base_url(); ?>assets/try/jquery.signaturepad.min.js"></script> 
		<script>
		 $(document).ready(function()
         {
		  $('.sigPad').signaturePad({drawOnly:true}); 
		   });
		</script>
		 <!--signature ends here -->


	<!--try date and time-->
	
	<script>
 $(function() {
 
$('#datetimepicker').datetimepicker({

dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:	'1986/01/05'
});
$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});
});
 </script>
 
 
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Incident Report /</span> <span>Add Report</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_reports" style="color:#FFF">Manage Reports </a>/ <span>Add Report</span></div>
    	
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-7">
		 <form role="form" method="POST" id="customer" novalidate="novalidate" class='sigPad'>
		 
		 
  <div class="form-group">
    <label for="exampleInputEmail1">Reported By<span class="required_field"> * </span></label>
	<select  class="form-control" name="reportby" id="reportby">
       <option value="">--Please Select--</option>
	   <?php foreach($staff as $st){?>
       <option value="<?php echo $st['admin_id'];?>"><?php echo $st['admin_name'];?></option>
	   <?php } ?>
   </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Position title<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="name" id="name" value="" >
	
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Site<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="site" id="site" value="" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Incident Time&Date <span class="required_field"> * </span></label>
    <!--<input type="text" class="form-control" name="timedate" id="datetimepicker" value="">-->
	<input type="text" class="form-control" name="timedate" id="datetimepicker_mask" value=""/>
  </div>
 
 
  <div class="form-group">
    <label for="exampleInputEmail1">Location <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="location" id="location" >
  </div>
  <label for="exampleInputEmail1"><b>TYPES OF ACCIDENTS <span class="required_field"> * </span></b></label>
  <div class="form-group">
    <label for="exampleInputPassword1">Injury to employee/ visitor/ contractor requiring hospitalisation  <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="hospitalisation" id="hospitalisation" cols="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Injury to employee/ visitor/ contractor requiring medical treatment <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="medicaltreatment" id="medicaltreatment" cols="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Injury to employee/ visitor/ contractor causing death <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="causingdeath" id="causingdeath" cols="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Accident involving plant/ equipment <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="equipment" id="equipment" cols="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Accident involving violence <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="violence" id="violence" cols="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Accident involving vehicle/s <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="vehicle" id="vehicle" cols="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Legal action/ Statutory reporting required <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="Statutory" id="Statutory" cols="3"></textarea>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Brief description of accident (facts only, don’t describe why the accident occurred or speculate on who may be at fault) <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="4" name="description" id="description" cols="3"></textarea>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Details of immediate responce <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="4" name="responce" id="responce" cols="3"></textarea>
  </div>
 <label for="exampleInputPassword1">INJURED PERSON DETAILS</label>
  <div class="form-group">
    <label for="exampleInputEmail1">First name <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="fname" id="fname" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last name <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="lname" id="lname" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Branch <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="branch" id="branch" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Position title <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="position" id="position" >
  </div><div class="form-group">
    <label for="exampleInputEmail1">Witness <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="witness" id="witness" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First aider <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="firstaid" id="firstaid" >
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
				
				<tr>
				<td><label><input type="checkbox" name="rooms[]" value="home"> Home</label></td>
				<td><label><input type="checkbox" name="rooms[]" value="doctor"> Doctor</label></td>
				<td><label><input type="checkbox" name="rooms[]" value="hospital"> Hospital</label></td>
				<td><label><input type="checkbox" name="rooms[]" value="near miss"> Near Miss</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="rooms[]" value="return to work"> Return to work</label></td>
				<td><label><input type="checkbox" name="rooms[]" value="medical treatment"> Medical Treatment </label></td>
				<td><label><input type="checkbox" name="rooms[]" value="first aid"> First aid treatment </label></td>
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
				<td><label><input type="checkbox" name="body[]" value="head"> Head</label></td> 
				<td><label><input type="checkbox" name="body[]" value="leg"> Leg</label></td>
				<td><label><input type="checkbox" name="body[]" value="trunk"> Trunk</label></td>
				<td><label><input type="checkbox" name="body[]" value="arm"> Arm</label></td>
				</tr>
				
				<tr> 
				<td><label><input type="checkbox" name="body[]" value="ear"> Ear</label></td>
				<td><label><input type="checkbox" name="body[]" value="foot"> Foot</label></td>
				<td><label><input type="checkbox" name="body[]" value="neck"> Neck</label></td>
				<td><label><input type="checkbox" name="body[]" value="back"> Back</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="body[]" value="internal organ"> Internal organ</label></td>
				<td><label><input type="checkbox" name="body[]" value="finger"> Finger</label></td>
				<td><label><input type="checkbox" name="body[]" value="toe"> Toe</label></td>
				<td><label><input type="checkbox" name="body[]" value="shoulder"> Shoulder</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="body[]" value="eye"> Eye</label></td>
				<td><label><input type="checkbox" name="body[]" value="hand"> Hand</label></td>
				<td><label><input type="checkbox" name="body[]" value="knee"> Knee</label></td>
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
				<td><label><input type="checkbox" name="injury[]" value="fracture"> Fracture</label></td> 
				<td><label><input type="checkbox" name="injury[]" value="dislocation"> Dislocation</label></td>
				<td><label><input type="checkbox" name="injury[]" value="sprain"> Sprain</label></td>
				<td><label><input type="checkbox" name="injury[]" value="concussion"> Concussion</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="injury[]" value="amputatio"> Amputatio</label></td>
				<td><label><input type="checkbox" name="injury[]" value="laceration"> Laceration/ Cut</label></td> 
				<td><label><input type="checkbox" name="injury[]" value="superficial"> Superficial</label></td>
				<td><label><input type="checkbox" name="injury[]" value="bruises"> Bruises</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="injury[]" value="other"> Other</label></td>
				<td><label><input type="checkbox" name="injury[]" value="burn"> Burn</label></td>
				<td><label><input type="checkbox" name="injury[]" value="skin irritation"> Skin irritation</label></td> 
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
				<td><label><input type="checkbox" name="caused[]" value="fixed machinery"> Fixed Machinery</label></td> 
				<td><label><input type="checkbox" name="caused[]" value="mobile plant"> Mobile plant/ transport</label></td>
				<td><label><input type="checkbox" name="caused[]" value="powered equipment"> Powered equipment</label></td>
				<td><label><input type="checkbox" name="caused[]" value="non powered equipment"> Non powered equipment</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="caused[]" value="virus"> Bacterial/ Virus</label></td>
				<td><label><input type="checkbox" name="caused[]" value="environmental agency"> Environmental agency</label></td> 
				<td><label><input type="checkbox" name="caused[]" value="chemical"> Chemical</label></td>
				<td><label><input type="checkbox" name="caused[]" value="animal"> Animal/ Human agency</label></td>
				</tr>
				
		
				
			
				</tbody>
		  </table>
		  
	</section>
  
  
 
   
  <div class="checkbox">
  

</div>


   
  
  <div class="form-group">
    <label for="exampleInputPassword1">Corrective action required <span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="action" id="action" cols="3"></textarea>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status">
       <option value="Active">Active</option>
       <option value="Inactive">Inactive</option>
   </select>
   </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Signed <span class="required_field"> * </span></label>
   <!-- <input type="text" class="form-control" id="exampleInputPassword1" name="sign" id="sign" > -->
	
	<!--signature starts here -->
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='signs' id='signs'></canvas> </div>
				<input type='hidden'  name='sign' class='output' id='sign'>
                <button class='clearButton'>Reset</button></br>
                <!--signature ends here -->
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Dated <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="date" id="datepicker" > 
  </div> 
  
  <button type="submit"  name="add" class="btn btn-xs btn-default btyellow"  onclick="return validateForm()" style="height:35px;">Add Report</button>
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
	mask:''
});
</script>

<script>
  $(function() {
  
    $( "#datepicker" ).datepicker();
});
  
  </script>
 

</html>    
    
