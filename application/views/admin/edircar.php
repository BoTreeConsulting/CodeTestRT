<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Service CAR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <?php include("includes/header_css.php"); ?>
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	  
	     <script>
 

  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer").validate({

        // Specify the validation rules
        rules: {
           
			location: "required",
			date: "required",
			describenon: "required",
			sign: "required",
			sign2: "required",
			sign3: "required",
			date1: "required",
			date3: "required",
			date4: "required",
			statethequick: "required",
			providecorr: "required",
			furthetpre: "required",
			status: "required",
		    role: "required",
			
        },
        
        // Specify the validation error messages
        messages: {
             location: "Please enter location name",
			date: "Please enter the date",
			date1: "Please enter the date",
			date3: "Please enter the date",
			date4: "Please enter the date",
			sign:"Please enter signature",
			sign1:"Please enter signature",
			sign2:"Please enter signature",
			sign3:"Please enter signature",
            describenon: "Please enter description",
			password: "Please enter password",
			address: "Please enter address",
			contact: "Please enter contact",
			position: "Please enter position",
			status: "Please select the status",
			faxno: "Please enter fax number",
            role: "Please Select The Role",
			providecorr: "Please provide information",
			statethequick: "Please provide information",
			furthetpre: "Please provide information",
			
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
       
	   
	    <!--signature starts here -->
	   	<script src="<?php echo base_url(); ?>assets/try/jquery.signaturepad.min.js"></script> 
	  
		<script>
         $(document).ready(function () {
         $('.sigPad').signaturePad({drawOnly:true});
         $('.sigPad1').signaturePad({drawOnly:true});
         $('.sigPad2').signaturePad({drawOnly:true});
          
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
   <!-- TO CHECK VALUES COMING OR NOT-->
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?-->
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>CAR /</span> <span>Edit Corrective Action Report</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_cars" style="color:#FFF">Manage Corrective Action Report </a>/ <span>Edit Corrective Action Report</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
 
		
		<div class="row">
		<div class="col-md-6">
		<form role="form" method="POST" id="customer" novalidate="novalidate">
  <div class="form-group" >
    <label for="exampleInputEmail1">Location</label>
    <input type="text" class="form-control" name="location" id="location" value="<?php echo $data[0]['car_location'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date </label>
	 <?php $cardate=date("m/d/Y",strtotime($data[0]['car_date_on']));	?>
    <input type="text" class="form-control" name="date" id="date" value="<?php echo $cardate; ?>" >
  </div>
   <label for="exampleInputEmail1">Person Identifying Nonconformance</label>
   <label for="exampleInputPassword1">Problem</label>
   
   <?php 
      $str = $data[0]['car_indentifying'];
	  $arr = explode(",",$str);
	  //print_r($arr);
   ?>
   
   
  <div class="checkbox" style="font-style:text-transform;">
  <label style="width:220px;" ><input type="checkbox" name="personiden[]"  <?php if(in_array('customer complaint',$arr)){ echo "checked";} ?> value="customer complaint">Customer Complaint</label>
  <label style="width:220px;"><input type="checkbox"  name="personiden[]" <?php if(in_array('audit finding',$arr)){ echo "checked";} ?> value="audit finding">Audit Finding</label>
  
    <label style="width:220px;"><input type="checkbox" name="personiden[]" <?php if(in_array('site inspection finding',$arr)){ echo "checked";} ?>  value="site inspection finding">Site Inspection Finding </label>
	<br> <label style="width:220px;"><input type="checkbox" name="personiden[]" <?php if(in_array('purchasing problem',$arr)){ echo "checked";} ?>  value="purchasing problem">Purchasing Problem</label>
	 
	 <label style="width:220px;"><input type="checkbox" name="personiden[]" <?php if(in_array('training/competence issue',$arr)){ echo "checked";} ?>  value="training/competence issue">Training/Competence Issue</label>
</div>


<div class="form-group">
    <label for="exampleInputPassword1"><h4>Describe Nonconformance</h4></label>
    <textarea class="form-control" rows="3" cols="3" name="describenon" id="describenon" ><?php echo $data[0]['car_nonconformance_desc'] ?></textarea>
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Signature</label>
	<!--signature starts here -->
   <div class='sigPad' >
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='sign' id='sign'></canvas> </div>
				<input type='hidden'  name='output' class='output' id='output'>
                <button class='clearButton'>Reset</button></br>
				 </div>
   <!--signature ends here -->
	<img src="<?php echo base_url();?>assets/car/<?php echo $data[0]['car_signature'];?>">
    <input type="hidden" class="form-control" name="oldoutput" id="sign" value="<?php echo $data[0]['car_signature'] ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
	<?php $carsign=date("m/d/Y",strtotime($data[0]['car_sign_dateon']));	?>
    <input type="text" class="form-control" name="date1"  id="date1" value="<?php echo $carsign; ?>" >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">State the Quick Fix(if any)! (say WHO, WHEN & HOW)</label>
    <textarea class="form-control" rows="3" cols="3" name="statethequick" id="statethequick" ><?php echo $data[0]['car_quick_fix'] ?></textarea>
  </div>
  <label for="exampleInputPassword1">PASS ON TO OPERATIONS MANAGER TO ORGANISE ACTION (IDENTIFY CAUSE of PROBLEM)</label>
  
  <div class="form-group">
    <label for="exampleInputPassword1"><h4>Provide corrective Action: (WHAT/HOW/WHEN/WHO) Don’t forget the timeline!</h4></label>
    <textarea class="form-control" rows="3" cols="3" name="providecorr" id="providecorr" ><?php echo $data[0]['car_corrective_action'] ?></textarea>
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Signature</label>
	 <!--signature starts here -->
    <div class='sigPad1'>
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='sign1' id='sign1'></canvas> </div>
				<input type='hidden'  name='sign2' class='output' id='sign2'>
                <button class='clearButton'>Reset</button></br>
	</div>
   <!--signature ends here -->
	<img src="<?php echo base_url();?>assets/car/<?php echo $data[0]['car_corrective_action_sign'];?>">
    <input type="hidden" class="form-control"  name="oldsign2" value="<?php echo $data[0]['car_corrective_action_sign'] ?>">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
	<?php $date=date("m/d/Y",strtotime($data[0]['car_corrective_action_date']));	?>
    <input type="text" class="form-control" id="date3" name="date3" value="<?php echo $date; ?>" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><h4>Further Preventive Action</h4> </label>
    <textarea class="form-control" rows="3" cols="3" name="furthetpre" id="furthetpre" ><?php echo $data[0]['car_preventive_action'] ?></textarea>
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Signature</label>
	 <!--signature starts here -->
    <div class='sigPad2' >
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='sign1' id='sign1'></canvas> </div>
				<input type='hidden'  name='sign3' class='output' id='sign3'>
                <button class='clearButton'>Reset</button></br>
	</div>
   <!--signature ends here -->
	<img src="<?php echo base_url();?>assets/car/<?php echo $data[0]['car_preventive_action_sign'];?>">
    <input type="hidden" class="form-control"  name="oldsign3" value="<?php echo $data[0]['car_preventive_action_sign'] ?>">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
	<?php $date2=date("m/d/Y",strtotime($data[0]['car_preventive_action_dateon']));	?>
    <input type="text" class="form-control" id="date4" name="date4" value="<?php echo $date2; ?>">
  </div>
  
	
	
 <div class="form-group">
    <label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status">
       <option value="Active" <?php if($data[0]['car_status']=="Active"){ echo "selected";}?>>Active</option>
       <option value="Inactive"<?php if($data[0]['car_status']=="Inactive"){ echo "selected";}?>>Inactive</option>
   </select>
   </div>
  
  
  <button type="submit" class="btn btn-xs btn-default btyellow" name="edit" value="edit car" style="height:35px;">Edit Corrective Action Report</button>
</div>
  </form>
		</div>
		<div class="col-md-6" style="margin-top:20px;">
		 
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
    <!--date picker starts here-->
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
  $(function() {
  
    $( "#date" ).datepicker();
  });
  $(function() {
  
    $( "#date1" ).datepicker();
  });
   $(function() {
  
    $( "#date3" ).datepicker();
  });
  $(function() {
  
    $( "#date4" ).datepicker();
  });
  
  </script>
    <!--date picker ends here-->
    
    
    
</body>