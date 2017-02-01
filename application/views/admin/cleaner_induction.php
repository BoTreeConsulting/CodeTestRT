<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CLEANERS INDUCTION CHECKLIST</title>
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
    
    <div class="col-md-10 col-sm-9" style="padding:0;">
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Cleaners Induction Check list /</span><!--span>Add New Subcontract Information</span--></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_contracts" style="color:#FFF">Cleaners Induction Information </a>/ <!--span>Add New Subcontract Information</span--></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		<form role="form" >
		
  <div class="form-group" >
    <label for="exampleInputDate">Cleaners Name:</label>
    <input type="text" class="form-control"  id="exampleInputEmail1" placeholder="">
	
  </div>
  
  <div class="form-group">
    <label for="exampleInputabn">Commencement Date: </label>
    <input type="text"    class="form-control" id="exampleInputabn" placeholder="">
		
  </div>
  
  <div class="form-group">
    <label for="exampleInputnoc">Induction provided by:  </label>
    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="">
	
  </div>
  
  
  <div class="form-group">
    <table  border='1' width='100%' cellpadding='6' cellspacing='0'>
<tr><td><label for="exampleInputns">Cleaner Induction </label></td>
<td><label for="exampleInputhr">Tick Off Completion of all steps</label></td></tr>



<tr><td>  Uniform organised </td><td> <input type='checkbox' size= ''    name='' value=''  ></td></tr>

<tr><td> Staff I.D. Card provided (as appropriate) </td><td> <input type='checkbox' size= ''    name='' value=''  ></td></tr>


<tr><td> 	Employment Agreement Signed</td><td> <input type='checkbox' size= ''    name='' value=''  ></td></tr>


<tr><td> 	Cleaners Training Guide and competency</td><td> <input type='checkbox' size= ''    name='' value=''   ></td></tr>


<tr><td> 	Job Description Provided</td><td> <input type='checkbox' size= ''    name='' value='' ></td></tr>


<tr><td> 	Taxation details completed</td><td> <input type='checkbox' size= ''    name='' value=''  ></td></tr>


<tr><td> 	Walk through site - identify safety equipment, access and exit points</td><td> <input type='checkbox' size= ''    name='' value='' ></td></tr>


<tr><td> 	Introduce employee to all staff, subcontractors and clients relevant to the working environment</td><td> <input type='checkbox' size= ''    name='' value=''   ></td></tr>


<tr><td> 	Ensure appropriate equipment and any other work tools and equipment are issued</td><td> <input type='checkbox' size= ''    name='' value=''   ></td></tr>


<tr><td> 	Advise of rostering arrangements (sign on and off)</td><td> <input type='checkbox' size= ''    name='' value=''   ></td></tr>


<tr><td> 	Arrange for the use of any facilities including cleaners room, and provide or arrange for instruction in the use of other equipment</td><td> <input type='checkbox' size= ''    name='' value=''   ></td></tr>


<tr><td> 	Provide or arrange for instruction in the use of the telephone, pager and other communication systems as appropriate</td><td> <input type='checkbox' size= ''    name='' value=''   ></td></tr>


<tr><td> 	Brief the employee about the use of site system documents if applicable</td><td> <input type='checkbox' size= ''    name='' value=''   ></td></tr>


<tr><td> 	Provide or arrange for allocation and signing for keys (as appropriate) </td><td> <input type='checkbox' size= ''    name='' value=''  ></td></tr>


<tr><td> 	Brief the employee on the approach to client relationships and ethical dealing</td><td> <input type='checkbox' size= ''    name='' value=''   ></td></tr>


<tr><td> 	Copy of appropriate company policies provided</td><td> <input type='checkbox' size= ''    name='' value=''  ></td></tr>







</table>
    </div>
	


	  
	
	 

  <div class="form-group">
    <label for="exampleInputPassword1">Induction completed by : </label>
    <input type="text" class="form-control" id="exampleInputccd"  placeholder="">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputPassword1">date : </label>
    <input type="text" class="form-control" id="exampleInputccd"  placeholder="">
  </div> 
  
   <div class="form-group">
    <label for="exampleInputPassword1">Employee</label>
    <input type="text" class="form-control" id="exampleInputccd"  placeholder="">
  </div> 
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Date : </label>
    <input type="text" class="form-control" id="exampleInputccd"  placeholder="">
  </div> 
  
   <div class="form-group">
   
	<label for="exampleInputAddress">Comments (if any): </label>
    <textarea class="form-control"  id="exampleInputPassword1" rows='5' cols='35' ></textarea>
  
  
	</div> 
	
	
	
	  <div class="form-group">
    
    <input type="submit" align='right' class="btn btn-xs btn-default btyellow" style="height:35px;"name='submit' value="Submit"/>
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
    
    
    
    
</body>