<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Skills</title>
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
            trainee: "required",
			trainer: "required",
			site: "required",
			date: "required",
			traineesign: "required",
			trainersign: "required",
			
            
        },
        
        // Specify the validation error messages
        messages: {
		    trainee: "Please enter Trainee name",
            trainer: "Please enter Trainer name",
			site: "Please enter site name",
            date: "Please enter Date",
			traineesign: "Please enter sign",
			trainersign: "Please enter sign",
			
           
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
  
	  
	  <style>
		.ff1{width:113px !important;}
		
		@media only screen and (max-width: 1100px) {
		.ff1 {width: 82px !important;}
		@media only screen and (max-width: 640px) {
		.ff1 {width: 106px !important;}
		}
	  </style>
	  
	     <!--signature starts here -->
	   	<script src="<?php echo base_url(); ?>assets/try/jquery.signaturepad.min.js"></script> 
	  
		<script>
         $(document).ready(function (){
         $('.sigPad').signaturePad({drawOnly:true});
         $('.sigPad1').signaturePad({drawOnly:true});
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Skills assessment and training /</span> <span>Edit Skills</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_stockitems" style="color:#FFF"> Skills assessment and training</a>/<span>Edit Skills</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
     <?php 
	 //echo "<pre>";
	 //print_r($skills);
	
	 //echo $skills[0]['skills_trainee_name'];?>
		
		<div class="row">
		<div class="col-md-8">
		 <form role="form" method="POST" id="customer" novalidate="novalidate">
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="form-group">
                <label class="control-label">Trainee’s Name:</label>
                <input type="text" name="trainee" id="trainee" value="<?php echo $skills[0]['skills_trainee_name'];?>" class="form-control" >
              </div>
             
			  <div class="form-group">
			  <label class="control-label">Site:</label>
                <input type="text" name="site" value="<?php echo $skills[0]['skills_site'];?>" class="form-control"  id="site">
              </div>
            </div>
  </div>
  
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
		  <div class="form-group">
			<label class="control-label">Signature:</label>
			<!--signature starts here -->
   <div class='sigPad' >
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='sign' id='sign'></canvas> </div>
				<input type='hidden'  name='traineesign' class='output' id='traineesign'>
                <button class='clearButton'>Reset</button></br>
				 </div>
   <!--signature ends here -->
			
			<img src="<?php echo base_url();?>assets/skills/<?php echo $skills[0]['skills_trainee_signature'];?>">
			<input type="hidden" name="oldtraineesign"  value="<?php echo $skills[0]['skills_trainee_signature'];?>" class="form-control" >
		  </div>
		  
		   <div class="form-group">
			  <label class="control-label">Trainer’s Name:</label>
                <input type="text" name="trainer" value="<?php echo $skills[0]['skills_trainer_name'];?>" class="form-control"  id="trainer">
              </div>
			  
		  <div class="form-group">
		  <label class="control-label">Signature:</label>
		  <!--signature starts here -->
   <div class='sigPad1' >
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='sign' id='sign'></canvas> </div>
				<input type='hidden'  name='trainersign' class='output' id='trainersign'>
                <button class='clearButton'>Reset</button></br>
				 </div>
   <!--signature ends here -->
		  
		  
		  <img src="<?php echo base_url();?>assets/skills/<?php echo $skills[0]['skills_trainer_signature'];?>">
			<input type="hidden" class="form-control" value="<?php echo $skills[0]['skills_trainer_signature'];?>"  name="oldtrainersign" >
		  </div>
		  <div class="form-group">
		  <label class="control-label">Date:</label>
			<input type="text" class="form-control"  value="<?php echo date("m/d/Y",strtotime($skills[0]['skills_date']));?>" name="date" id="datepicker">
		  </div>
    </div>
  </div>
  
  <div>
	<?php //echo "<pre>";
	//print_r($cleaning);
	//echo "<pre>";
	//print_r($control);
	?>
		<section id="no-more-tables" style="margin: 20px 0px;">
		
		  <table class="table-bordered table-striped table-condensed cf">
			  <thead class="cf" style="background:#044174; color:#fff;">
				 <tr>
					  <th>Tasks to be <br> performed by Trainee</th>
					  <th>Skills <br> Assessed</th>
					  <th>Training <br> Required</th>
					  <th>Training <br> Completed</th>
					  <th>Training <br> Completed</th>
					  <th>Training <br> Completed</th>
					  <th>Site Induction <br> / QA Aware</th>

				  </tr>
			  </thead>
				<tbody>
					<tr>
						<td colspan="7" style="background: #ECECEC ; font-size: 20px;">Cleaning Tasks</td>
					</tr>
					<?php foreach($cleaning as $row){ ?>
					<tr>
					<?php $id=$row['id'];
					$newdata=$this->adminmodel->gettasks($id); ?>
						<td data-title="Tasks to be performed by Trainee"><?php echo $row['title'];?></td>
						<input type='hidden' name='taskid[]' value='<?php echo $row['id'];?>'>
						<td data-title="Skills Assessed"><input type="text" name='assenble[]' value="<?php echo $newdata[0]['skills_assessedby'];?>" class="ff1"></td>
						<td data-title="Training Required" ><input type="text" name='trainingreq[]' value="<?php echo $newdata[0]['skills_training_required'];?>" class="ff1"></td>
						<td data-title="Training Completed" ><input type="text" name='cmplt1[]' value="<?php echo $newdata[0]['skills_training_completed1'];?>" class="ff1"></td>
						<td data-title="Training Completed" ><input type="text" name='cmplt2[]' value="<?php echo $newdata[0]['skills_training_completed2'];?>" class="ff1"></td>
						<td data-title="Training Completed" ><input type="text" name='cmplt3[]' value="<?php echo $newdata[0]['skills_training_completed3'];?>" class="ff1"></td>
						<td data-title="Site Induction/ QA Aware" ><input type="text" name='induction[]' value="<?php echo $newdata[0]['skills_site_induction'];?>" class="ff1"></td>
					</tr>
					<?php } ?>
					
					<tr>
						<td colspan="7" style="background: #ECECEC ; font-size: 20px;">Infection Control</td>
					</tr>
					<?php foreach($control as $row1){ ?>
					<tr>
					<?php $id1=$row1['id'];
					$newdata1=$this->adminmodel->gettasks($id1); ?>
						<td data-title="Tasks to be performed by Trainee"><?php echo $row1['title'];?></td>
						<input type='hidden' name='taskid[]' value='<?php echo $row1['id'];?>'>
						<td data-title="Skills Assessed"><input type="text" name='assenble[]' value="<?php echo $newdata1[0]['skills_assessedby'];?>" class="ff1"></td>
						<td data-title="Training Required" ><input type="text" name='trainingreq[]' value="<?php echo $newdata1[0]['skills_training_required'];?>" class="ff1"></td>
						<td data-title="Training Completed" ><input type="text" name='cmplt1[]' value="<?php echo $newdata1[0]['skills_training_completed1'];?>" class="ff1"></td>
						<td data-title="Training Completed" ><input type="text" name='cmplt2[]' value="<?php echo $newdata1[0]['skills_training_completed2'];?>" class="ff1"></td>
						<td data-title="Training Completed" ><input type="text" name='cmplt3[]' value="<?php echo $newdata1[0]['skills_training_completed3'];?>" class="ff1"></td>
						<td data-title="Site Induction/ QA Aware" ><input type="text" name='induction[]' value="<?php echo $newdata1[0]['skills_site_induction'];?>" class="ff1"></td>
					</tr>
					<?php } ?>
					

				</tbody>
		  </table>
			  
			  </section>
  </div>
  
  


  <div><button type="submit" name="edit" value="edit" class="btn btn-lg btyellow btlarge pull-right">Edit Skills</button></div>
</form></div>
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
    <script>
  $(function() {
  
    $( "#datepicker" ).datepicker();
  });
  </script>
    
    
</body>