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
function myFunction() {
    window.print();
}
</script>
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
 <script>
function myFunction() {
 document.getElementById('footer').style.display = 'none';
 document.getElementById('menu').style.display = 'none';
 document.getElementById('path1').style.display = 'none';
 document.getElementById('path2').style.display = 'none';
 document.getElementById('path3').style.display = 'none';
 document.getElementById('print').style.display = 'none';
 
 
    window.print();
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
   
   <div id="path1"  class="col-lg-12 navbar-inner">
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
	<div id="path2"  class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Skills assessment and training /</span> <span>View Skills</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div id="path3" class="headtext1"><a href="<?php echo base_url();?>admin/manage_stockitems" style="color:#FFF"> Skills assessment and training</a>/<span>View Skills</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
     <?php 
	 //echo "<pre>";
	 //print_r($skills);
	
	 //echo $skills[0]['skills_trainee_name'];?>
		
		<div class="row">
		<div align="right" id="print" ><a href="" onclick="myFunction()"><img src="<?php echo base_url("assets/site_images/print.png");?>" width="30px;" title="print"></a></div>
		<div class="col-md-12">
		
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="form-group">
                <label class="control-label">Trainee’s Name:</label><br>
                <!--<input type="text" name="trainee" id="trainee" value="<?php echo $skills[0]['skills_trainee_name'];?>" class="form-control" >-->
				<?php echo ucfirst($skills[0]['skills_trainee_name']);?>
              </div>
            
			  <div class="form-group">
			  <label class="control-label">Site:</label><br>
                <?php echo $skills[0]['skills_site'];?>
              </div>
            </div>
  </div>
  
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
		  <div class="form-group">
			<label class="control-label">Signature:</label><br>
			<?php //echo $skills[0]['skills_trainee_signature'];?>
			<img src="<?php echo base_url();?>assets/skills/<?php echo $skills[0]['skills_trainee_signature'];?>">
		  </div>
		    <div class="form-group">
			  <label class="control-label">Trainer’s Name:</label><br>
                <!--<input type="text" name="trainer" value="<?php echo $skills[0]['skills_trainer_name'];?>" class="form-control"  id="trainer">--><?php echo ucfirst($skills[0]['skills_trainer_name']);?>
              </div>
		  <div class="form-group">
		  <label class="control-label">Signature:</label><br>
			<?php//echo $skills[0]['skills_trainer_signature'];?>
			<img src="<?php echo base_url();?>assets/skills/<?php echo $skills[0]['skills_trainer_signature'];?>">
		  </div>
		  <div class="form-group">
		  <label class="control-label">Date:</label><br>
			<?php echo date("M d Y",strtotime($skills[0]['skills_date']));?>
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
		
		  <table class="table-bordered table-striped table-condensed cf" style="width:70%">
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
						<td colspan="7" style="background: #ECECEC ; font-size: 17px;">Cleaning Tasks</td>
					</tr>
					<?php foreach($cleaning as $row){ ?>
					<tr>
					<?php $id=$row['id'];
					$newdata=$this->adminmodel->gettasks($id); ?>
						<td data-title="Tasks to be performed by Trainee"><?php echo $row['title'];?></td>
						<input type='hidden' name='taskid[]' value='<?php echo $row['id'];?>'>
						<td data-title="Skills Assessed"><input type="text" readonly name='assenble[]' value="<?php echo $newdata[0]['skills_assessedby'];?>" class="ff1"></td>
						<td data-title="Training Required" ><input type="text" readonly name='trainingreq[]' value="<?php echo $newdata[0]['skills_training_required'];?>" class="ff1"></td>
						<td data-title="Training Completed" ><input type="text" readonly name='cmplt1[]' value="<?php echo $newdata[0]['skills_training_completed1'];?>" class="ff1"></td>
						<td data-title="Training Completed" ><input type="text" readonly name='cmplt2[]' value="<?php echo $newdata[0]['skills_training_completed2'];?>" class="ff1"></td>
						<td data-title="Training Completed" ><input type="text" readonly name='cmplt3[]' value="<?php echo $newdata[0]['skills_training_completed3'];?>" class="ff1"></td>
						<td data-title="Site Induction/ QA Aware" ><input type="text" readonly name='induction[]' value="<?php echo $newdata[0]['skills_site_induction'];?>" class="ff1"></td>
					</tr>
					<?php } ?>
					
					<tr>
						<td colspan="7" style="background: #ECECEC ; font-size: 17px;">Infection Control</td>
					</tr>
					<?php foreach($control as $row1){ ?>
					<tr>
					<?php $id1=$row1['id'];
					$newdata1=$this->adminmodel->gettasks($id1); ?>
						<td data-title="Tasks to be performed by Trainee"><?php echo $row1['title'];?></td>
						<input type='hidden' name='taskid[]' value='<?php echo $row1['id'];?>'>
						<td data-title="Skills Assessed"><input type="text" readonly name='assenble[]' value="<?php echo $newdata1[0]['skills_assessedby'];?>" class="ff1"></td>
						<td data-title="Training Required" ><input type="text" readonly name='trainingreq[]' value="<?php echo $newdata1[0]['skills_training_required'];?>" class="ff1"></td>
						<td data-title="Training Completed" ><input type="text" readonly name='cmplt1[]' value="<?php echo $newdata1[0]['skills_training_completed1'];?>" class="ff1"></td>
						<td data-title="Training Completed" ><input type="text" readonly name='cmplt2[]' value="<?php echo $newdata1[0]['skills_training_completed2'];?>" class="ff1"></td>
						<td data-title="Training Completed" ><input type="text" readonly name='cmplt3[]' value="<?php echo $newdata1[0]['skills_training_completed3'];?>" class="ff1"></td>
						<td data-title="Site Induction/ QA Aware" ><input type="text" readonly name='induction[]' value="<?php echo $newdata1[0]['skills_site_induction'];?>" class="ff1"></td>
					</tr>
					<?php } ?>
					

				</tbody>
		  </table>
			  
			  </section>
  </div>
  
  


</div>
		</div>
		<div class="col-md-6">
		 
		</div>
		

		</div>
            
        </div>
        <div class="dbshadow"></div>
        
    </div>
    <div class="clear"></div>
    <div class="col-md-12 footer" id="footer">
    	<div class="headtext1">© Copyright 2014 Guardian Property Service </div>
    </div>
    </div>
    
     
    
    
</body>