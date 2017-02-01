<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Venues</title>
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
  
   <!-- TO CHECK VALUES COMING OR NOT-->
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?>
    <!-- TO CHECK VALUES COMING OR NOT-->
   
   <div id="path1" class="col-lg-12 navbar-inner">
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
	<div id="path2" class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Cleaners Induction Check list /</span><span>View Cleaners Induction Information</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);
	   ?>
	<div class="headtext1" id="path3"> <a href="<?php echo base_url();?>admin/manage_inductions" style="color:#FFF">Cleaners Induction Check list </a>/ <span>View Cleaners Induction Information</span></div>
    	
        <div class="mtextarea mtextarea2">
        
		<div class="row">
		<div align="right" id="print"><a href="" onclick="myFunction()"><img src="<?php echo base_url("assets/site_images/print.png");?>" width="30px;" title="print"></a></div>
		<div class="col-md-6">
		
  <div class="form-group">
    <label for="exampleInputEmail1">Cleaners Name</label> :  <?php echo $induction[0]['ind_cleaners_name'];?>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Commencement Date: </label> : <?php echo date("M d Y",strtotime($induction[0]['ind_commencement_date']));?>
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Induction provided by:</label> :  <?php echo $induction[0]['ind_provided_by'];?>
    
  </div>
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
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'  <?php if($induction[0]['ind_uniform']=="1"){ echo "checked";} ?> name='uniform' value='1'  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Staff I.D. Card provided (as appropriate)</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='staffid' value='1' <?php if($induction[0]['ind_staff']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Employment Agreement Signed</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='emp' value='1'  <?php if($induction[0]['ind_employeement_aggreement']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Cleaners Training Guide and competency</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='guide' value='1' <?php if($induction[0]['ind_cleaners_training']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Job Description Provided</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='job' value='1'  <?php if($induction[0]['ind_job_desc']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Taxation details completed</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='taxation' value='1' <?php if($induction[0]['ind_taxation']=="1"){ echo "checked";} ?>  ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Walk through site - identify safety equipment, access and exit points</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='walk' value='1' <?php if($induction[0]['ind_walk_through']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Introduce employee to all staff, subcontractors and clients relevant to the working environment</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='introduce' value='1' <?php if($induction[0]['ind_introduce']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Ensure appropriate equipment and any other work tools and equipment are issued</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='equipment' value='1' <?php if($induction[0]['ind_ensure']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Advise of rostering arrangements (sign on and off)</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='arrangements' value='1' <?php if($induction[0]['ind_advice']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Arrange for the use of any facilities including cleaners room, and provide or arrange for instruction in the use of other equipment</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='instruction' value='1' <?php if($induction[0]['ind_arrange']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> Provide or arrange for instruction in the use of the telephone, pager and other communication systems as appropriate</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='communication' value='1' <?php if($induction[0]['ind_provide']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee"> 	Brief the employee on the approach to client relationships and ethical dealing</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='relationships' value='1' <?php if($induction[0]['ind_empl_brief']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">	Provide or arrange for allocation and signing for keys (as appropriate) </td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='allocation' value='1' <?php if($induction[0]['ind_provider']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Copy of appropriate company policies provided</td>
						<td data-title="Skills Assessed"><input type='checkbox' size= '' align='center'   name='policies' value='1' <?php if($induction[0]['ind_appropriate']=="1"){ echo "checked";} ?> ></td>
						
					</tr>
					
					
				</tbody>
		  </table>
			  
			  </section>
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Induction completed by </label> : <?php echo date("M d Y",strtotime($induction[0]['ind_completed_on']));?>
 
    
  </div>
 
	
  <div class="form-group">
    <label for="exampleInputPassword1">Employee</label> : <?php echo $induction[0]['ind_employee'];?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date :</label> : <?php echo $induction[0]['ind_employee_date'];?>
    
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Comments :</label> : <?php echo $induction[0]['ind_comments'];?>
    
  </div>  
  <?php
         $id = $induction[0]['ind_createdby'];
		  $id1 = $induction[0]['ind_modified_by'];
		 $query=mysql_query("select admin_username from tbl_admin where admin_id='$id'");
		 $dat=mysql_fetch_array($query);
		 $query1=mysql_query("select admin_username from tbl_admin where admin_id='$id1'");
		 $data1=mysql_fetch_array($query1);
		$createdname=$dat['admin_username'];
		$modifiedname=$data1['admin_username'];
		  ?>
  <div class="form-group">
    <label for="exampleInputPassword1">Status</label> : <?php echo $induction[0]['ind_status'];?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Created By</label> : <?php echo $createdname;?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Created on</label> : <?php echo date("M d Y h:i A",strtotime($induction[0]['ind_created_on']));?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Modified By</label> : <?php echo $modifiedname;?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Modified on</label> : <?php echo date("M d Y h:i A",strtotime($induction[0]['ind_modified_on']));?>
    
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