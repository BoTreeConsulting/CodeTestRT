<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Site Changes Request</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <link href="<?php echo base_url();?>assets/css/bootstrap-combined.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	    <!--checkbox valdition start here-->
 <script src="<?php echo base_url();?>assets/js/checkbox_validation.js"></script>
<!--checkbox valdition end  here-->	   
	   <script>
function checkAll(ele) {
     var checkboxes = document.getElementsByTagName('input');
     if (ele.checked) {
         for (var i = 0; i < checkboxes.length; i++) {
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = true;
             }
         }
     } else {
         for (var i = 0; i < checkboxes.length; i++) {
             console.log(i)
             if (checkboxes[i].type == 'checkbox') {
                 checkboxes[i].checked = false;
             }
         }
     }
 }
</script>
	  

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/custom-admin.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
	   
	   
	   
	   
	   
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	   <script src="<?php echo base_url();?>assets/css/menu_jquery.js"></script>
         <!--Pagenation Start here -->
	   
	   <script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
 <link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css" rel="stylesheet">
 <link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css" rel="stylesheet">
 
 
       <script>
       
       $(document).ready(function() {
    $('#example').dataTable( {
        "order": [[ 3, "desc" ]],
		bFilter: false, 
		"aoColumnDefs": [
        { 
          "bSortable": false, 
          "aTargets": [ -1,-2 ],
		  // <-- gets last column and turns off sorting
         } 
     ]
	 
		
    } );
} );
       
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
            <p class="navbar-text pull-right" style="margin-top:-5px;">Welcome <span><?php  echo $this->session->userdata("admin_name");?></span>  <a href="<?php echo base_url();?>admin/logout" class="">Logout</a></p>
          </div>
    </div>
    <div class="col-md-12 remove-padd">
    <?php 
	include "left-menu.php";
	?>
    
    <div class="col-md-10" style="padding:0;">
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Site Changes Request /</span> <span>Manage Site Changes Requests</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
	
    	<div class="headtext1"><span> Manage Site Changes Requests</span></div>
		
		<?php if($this->session->flashdata('message')!=''){  ?>
		<div class="alert alert-success alert-custom">
<button type="button" class="close" data-dismiss="alert" style="padding-right:15px;">×</button>
<strong>Success!</strong> <?php echo $this->session->flashdata('message'); ?>
</div>
<?php } ?>

<!--
<div class="alert alert-success alert-custom" style="background:#5cb85c; color:white; text-shadow:none;">
<button type="button" class="close" data-dismiss="alert" style="padding-right:15px;">×</button>
<strong>Success!</strong> Best check yo self, you're not looking too good...
</div> 

		<div class="alert alert-danger alert-custom">
<button type="button" class="close" data-dismiss="alert" style="padding-right:15px;">×</button>
<strong>Error!</strong> Failed to create Site Changes Request..
</div>
-->
<!-- 
<div class="alert alert-danger alert-custom" style="background:#d9534f; color:white; text-shadow:none;">
<button type="button" class="close" data-dismiss="alert" style="padding-right:15px;">×</button>
<strong>Oh snap!</strong> Change a few things up and try submitting again.
</div> -->
        <div class="mtextarea mtextarea2">		
			
			
        <!--h2>Admin Panel</h2-->
		<div class="mtext">
            	<div style=" margin-bottom:17px;">
                    <a href="<?php echo base_url();?>admin/add_sitechange" class="btn btn-xs btn-default btyellow pull-left">Add Site Changes Request</a>
                    <div class="clear"></div>
                </div>
				
				<!--search starts here-->
	       <form method='post'>
		  
		 
		   	<b>From:</b><input type="text" name="from" style="height:30px; margin-top:10px;" id="dateid" value="<?php echo $searchfrom; ?>">&nbsp;&nbsp;&nbsp;
			<b>To:</b><input type="text" name="to" id="dateid1" style="height:30px; margin-top:10px;" value="<?php echo $searchto; ?>">&nbsp;
				<input type="submit" name="search" value="Search" class="btn btn-xs btn-default btyellow pull"></form>
			<!--search ends here-->	
            </div>
        <div>
    <div class="tablewidth" >
        <div >
                           <section id="no-more-tables">
		
		<form method="post" action="<?php echo base_url();?>sitechanges/change_site_status">
		 <table id="example"  class="table-bordered table-striped table-condensed cf tablesorter tablesorter-blackice">
			  <thead class="cf" style=" background:#0C4371 !important;">
				 <tr>
					  <th>Client No</th>
					  <th>Area Manager</th>
					   <th>Date of Change</th>
					 <th >Submitted On</th>
					  
					  <th>Actions</th>
					  <th style = "padding-left:10px; width:23px;" ><input type="checkbox" onchange="checkAll(this)" ></th>
					
				  </tr>
			  </thead>
				<tbody>
				<?php foreach($site as $row){ ?>
						<tr>
						<td data-title="Client No"><?php echo $row['scr_clientno'];?></td>
						<td data-title="Area Manager"><?php echo $row['scr_area_mgr'];?></td>
						<td data-title="Date of Change"> <?php echo date("M d Y",strtotime($row['scr_change_on']));?></td>
						<td data-title="Submit On"><?php echo date("M d Y h:i:A",strtotime($row['scr_createdon']));?></td>
						
						<td data-title="Actions" ><a href="<?php echo base_url();?>admin/view_sitechange/<?php echo $row['scr_id'];?>" title="View details"><i class="icon-eye-open"></i></a>&nbsp;<a href="<?php echo base_url();?>admin/edit_sitechange/<?php echo $row['scr_id'];?>" title="Edit"><i class="icon-edit"></i></a>&nbsp;<a title="Delete" onclick="return confirm_delete()" href="<?php echo base_url();?>sitechanges/delete_sitechange/<?php echo $row['scr_id'];?>"><i class="icon-trash"></i></a></td>
						<td data-title="Check" ><input type="checkbox" value="<?php echo $row['scr_id'];?>" name='id[]' ></td>
						
						
					</tr>	
                       
           <?php } ?>						
				</tbody>
		  </table>
		  <div align="right" style="margin-top:20px;" >
							
							<button type="submit" name="status" value="Delete"  class="btn btn-xs btn-default btyellow pull" onclick="return validateForm1()" >Delete</button>
                      </div>  </div>
    	
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

<script type='text/javascript' src="<?php echo base_url();?>assets/js/jquery.tablesorter.js"></script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.black-ice.css">
    
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
 <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script> 
  <link rel="stylesheet" href="/resources/demos/style.css">
  	
    <script>
  $(function() {
   
    $( "#dateid" ).datepicker();
 
  
    $( "#dateid1" ).datepicker();
 
  
    //$( "#3rddate" ).datepicker();
  });
  </script>