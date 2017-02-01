<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Cleaners induction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/header_css.php"); ?>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.timepicker.js");?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/jquery.timepicker.css");?>" />
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer").validate({
   
        // Specify the validation rules
        rules: {
            
			name: "required",
			provide: "required",
			cdate: "required",
			completed: "required",
			date: "required",
			employee: "required",
			newdate: "required",
			
		
           
            
        },
        
        // Specify the validation error messages
        messages: {
		     name: "please enter Cleaner name",
			provide: "please provide information",
			cdate: "please enter date",
			completed: "please provide information",
			date: "please enter date",
			employee: "please provide information",
			newdate: "please enter date",
           
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Cleaners Induction Check list /</span><span>Add New Inductions List</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_inductions" style="color:#FFF">Cleaners Induction Information </a>/ <span>Add New Inductions List</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-9">
		<form role="form" method="POST" id="customer" novalidate="novalidate">
		
  <div class="form-group" >
    <label for="exampleInputDate">Cleaners Name:<span class="required_field"> * </span></label>
    <input type="text" class="form-control"  name="name" id="name" >
	
  </div>
  
  <div class="form-group">
    <label for="exampleInputabn">Commencement Date:<span class="required_field"> * </span> </label>
    <input type="text"    class="form-control" name="cdate" id="datepicker" >
		
  </div>
  
  <div class="form-group">
    <label for="exampleInputnoc">Induction provided by: <span class="required_field"> * </span> </label>
    <input type="text" class="form-control" name="provide" id="provide"  >
	
  </div>
  
  
  <!-- mY TABLE STRAT HERE-->
  
   <div>
	
		<section id="no-more-tables" style="margin: 20px 0px;">
		
		  <table class="table-bordered table-striped table-condensed cf">
			  <thead class="cf" style="background:#044174; color:#fff;">
			  
				 <tr>
					  <th>Cleaner Induction</th>
					  <th>Tick Off Completion<br> of all steps</th>
					

				  </tr>
			  </thead>
				<tbody>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Uniform organised</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='uniform' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Staff I.D. Card provided (as appropriate)</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='staffid' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Employment Agreement Signed</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='emp' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Cleaners Training Guide and competency</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='guide' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Job Description Provided</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='job' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Taxation details completed</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='taxation' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Walk through site - identify safety equipment, access and exit points</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='walk' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Introduce employee to all staff, subcontractors and clients relevant to the working environment</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='introduce' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Ensure appropriate equipment and any other work tools and equipment are issued</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='equipment' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Advise of rostering arrangements (sign on and off)</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='arrangements' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Arrange for the use of any facilities including cleaners room, and provide or arrange for instruction in the use of other equipment</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='instruction' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Provide or arrange for instruction in the use of the telephone, pager and other communication systems as appropriate</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='communication' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> 	Brief the employee on the approach to client relationships and ethical dealing</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='relationships' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">	Provide or arrange for allocation and signing for keys (as appropriate) </td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='allocation' value='1'  ></td>
						
					</tr>
					
					
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Copy of appropriate company policies provided</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='policies' value='1'  ></td>
						
					</tr>
					
					
				</tbody>
		  </table>
			  
			  </section>
  </div>
  
  
 

  <div class="form-group">
    <label for="exampleInputPassword1">Induction completed by :<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" id="completed"  name="completed" placeholder="">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputPassword1">Induction completed Date :<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" id="datepicker1"  name="date" placeholder="">
  </div> 
  
   <div class="form-group">
    <label for="exampleInputPassword1">Employee<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="employee" id="employee"  placeholder="">
  </div> 
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Date : <span class="required_field"> * </span></label>
    <input type="text" class="form-control" id="datepicker2" name="newdate"  placeholder="">
  </div> 
  
   <div class="form-group">
   
	<label for="exampleInputAddress">Comments (if any): </label>
    <textarea class="form-control"  id="exampleInputPassword1" rows='5' cols='35' name="comments" id="comments"  ></textarea>
  
  
	</div> 
	
	 <div class="form-group">
    <label for="exampleInputPassword1">Status </label>
    <select  class="form-control" name="status">
       <option value="Active">Active</option>
       <option value="Inactive">Inactive</option>
   </select>
   </div>
	
	  <div class="form-group">
    
    <input type="submit" align='right' class="btn btn-xs btn-default btyellow" style="height:35px;" name='Add' value="Add Cleaner"/>
  </div> 
  
  
  
  
  
  </div>
</form>
		    
    
  <br>  
    
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
  <script>
  $(function() {
  
    $( "#datepicker1" ).datepicker();
  });
  </script>
  <script>
  $(function() {
  
    $( "#datepicker2" ).datepicker();
  });
  </script>
  <script>
  $(function() {
  
    $( "#datepicker3" ).datepicker();
  });
  </script>  
    
    
</body>