<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service QIR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
  <!--header starts here-->
	 <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	   
	  

    <!-- Custom CSS 
    <link href="<?php // echo base_url();?>assets/css/custom-admin.css" rel="stylesheet">-->


    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
	   
	   
	   
	   
	   
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	  <script src="<?php echo base_url();?>assets/css/menu_jquery.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
      <!--signature starts here -->
		<script src="<?php echo base_url(); ?>assets/try/jquery.signaturepad.min.js"></script> 
		 <!--signature ends here -->
             
     <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<style type="text/css">
    .label {padding: 15px;
margin-bottom: 20px;
border: 1px solid transparent;
border-radius: 4px;}
	 #customer label.error, .output {color:#a94442; font-weight:600; background:#ebccd1; width: 100%; padding: 3px 8px; margin-top: 2px;
	 -webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
	 }
  </style>
    <!--header ends here-->
	
	
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
 
 <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script--> 
    <script type="text/javascript">
        $(document).ready(function()
        {
			$('.sigPad').signaturePad({drawOnly:true}); // sign calling
            $("#cname").on("change",function(){
                var customer_id = $("#cname").val();
				
                $.ajax({
                    type:"POST",
                    url:"<?php echo site_url('qis/get_venues'); ?>", //controller url
                    data:"customer_id="+customer_id,
                    success:function(data)
                    {
					
                        $('#venue').html(data);
                    }
                });
            });
            
           
            
        });
    </script>
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
   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.timepicker.js");?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/jquery.timepicker.css");?>" />
   <script>
  $(function() {
  
    $('#time').timepicker({ 'timeFormat': 'h:i A' });
});
  
  </script>
  
<script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer").validate({
   
        // Specify the validation rules
        rules: {
            cname: "required",
			contact:"required",
			date: "required",
			venue: "required",
			comments: "required",
			rating: "required",
			sign: "required",
			inspected: "required",
			
			
           
        },
        
        // Specify the validation error messages
        messages: {
            cname: "Please enter client name",
			contact:"Please enter contact person name",
			date: "please enter date",
			venue: "please enter the venue name",
			comments: "please write comments",
			rating: "please enter rating",
			sign: "please enter the client signature"
			
			
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
    <!--validation for health form Starts here -->
  <style type="text/css">
    .label {padding: 15px;
margin-bottom: 20px;
border: 1px solid transparent;
border-radius: 4px;}
	 #customer1 label.error, .output {color:#a94442; font-weight:600; background:#ebccd1; width: 100%; padding: 3px 8px; margin-top: 2px;
	 -webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
	 }
  </style>
  

 <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer1").validate({
   
        // Specify the validation rules
        rules: {
            site: "required",
			hdate:"required",
			area: "required",
			insby: "required",
			represent: "required",
			cms: "required",
			fm: "required",
			areamanager: "required",
			inspected: "required",
			time: "required",
			
			
           
        },
        
        // Specify the validation error messages
        messages: {
            site: "Please enter the site name",
			hdate:"Please enter the date",
			area: "please enter area",
			insby: "please enter the inspected by",
			represent: "please enter representive present",
			cms: "please write clients comments",
			fm: "please enter D.O.N / FM manager",
			areamanager: "please enter area manager",
			time: "please select the time"
			
			
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
  <!--validation for health form ends here -->


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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage QIR / </span>Edit QIR </div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_staff" style="color:#FFF">Manage QIR</a>/ <span>Edit QIR</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-12">
		
		
		
		<div style="overflow:auto;">
		<select class="form-control selectqis" >
		
		<option value="Normal QIS">Health QIR</option>
		
		</select>
		</div>
	<div style="margin:20px 0px;" id="tabone">	
		<h2>For Edit Health QIR</h2>
		<form role="form" method="POST" id="customer1" class='sigPad'>
		<div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Site</label>
    <input type="text" class="form-control" value="<?php echo $healthqis[0]['qis_site'];?>" name="site" id="site" >
              </div>
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Date</label>
    <input type="text" class="form-control"  value="<?php echo date("m/d/Y",strtotime($healthqis[0]['qis_date_on']));?>" name="hdate" id="datepicker1" >
              </div>
            </div>
  </div>
  
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Area</label>
    <input type="text" class="form-control"  value="<?php echo $healthqis[0]['qis_area'];?>" name="area" id="area" >
              </div>
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Time</label>
    <input type="text" class="form-control"  value="<?php echo date("g:i a", strtotime($healthqis[0]['qis_time']));?>" name="time" id="time" >
              </div>
            </div>
  </div>
  
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Inspected By</label>
    <input type="text" class="form-control" name="insby"  value="<?php echo $healthqis[0]['qis_inspectedby'];?>" id="insby" >
              </div>
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Representative Present</label>
    <input type="text" class="form-control"  value="<?php echo $healthqis[0]['qis_representative'];?>" name="represent" id="represent">
              </div>
            </div>
  </div>
  
  <input type="hidden" class="form-control"  name="qistype" id="contact" value="health qis" >

  
  <section id="no-more-tables" style="margin:20px 0px;">
		
		  <table class="table-bordered table-striped table-condensed cf">
			   <thead class="cf" style="background:#044174; color:#fff;">
				 <tr>
					  <th>Item</th>
					  <th>Comments</th>
					  <th>Satisfactory</th>
					  <th>Unsatisfactory</th>
					
				  </tr>
			  </thead>
				<tbody>
				<?php 
				$qid=$healthqis[0]['qis_id'];
				$j=1;
				foreach($healthqisareas as $row1){
				$areaid1=$row1['area_id'];
				
				$query1=mysql_query("select * from tbl_subareas where area_parent_id='$areaid1'");
				?>
				

						<tr>
						<td colspan="4">
							<div class="qistext">
						    <h4><?php echo $row1['area_title'];?></h4>
							</div>
						</td>

						</tr>
						<?php 
						$i=0;
						while($subdata1=mysql_fetch_array($query1)){ 
						?>
						<tr>
						<td data-title="Item">
							<div class="qistext">
							<p><?php 
							$subid=$subdata1['area_id'];
							echo $subdata1['area_title'];?></p>
							</div>
						</td>
					<?php 
					//echo "SELECT * from tbl_qis_information WHERE qis_id ='$qid' and qis_item='$subid'";
					$newq=mysql_query("SELECT * from tbl_qis_information WHERE qis_id ='$qid' and qis_item='$subid'");	
					$info=mysql_fetch_array($newq);
					//print_r($info);
					?>
						<input type="hidden" name="items[]" value="<?php echo $subdata1['area_id'];?>">
						<input type="hidden" name="qid[]" value="<?php echo $info['qid'];?>">
						<td data-title="Comments"><textarea class="form-control" name="cmss[]" rows="3" cols="3"><?php echo $info['qis_comments'];?></textarea></td>
						<td data-title="Satisfactory" ><input type="radio" name="sati[]" value="Yes" <?php if($info['qis_satisfactory']=='Yes'){ echo checked;}?> id=""></td>
						<td data-title="Unsatisfactory" ><input type="radio" name="sati[]" <?php if($info['qis_satisfactory']=='No'){ echo checked;}?> value="No" id=""></td>
						</tr>
						<?php $i++; 
						}
					} ?>
						<!--<tr>
						<td data-title="Item">
							<div class="qistext">
							<p>Vinyl/Tarkett Room/Wards</p>
							</div>
						</td>
						<td data-title="Comments"><textarea class="form-control" rows="3" cols="3"></textarea></td>
						<td data-title="Satisfactory" ><input type="radio" name="" value="yes" id=""></td>
						<td data-title="Unsatisfactory" ><input type="radio" name="" value="no" id=""></td>
						</tr>
						
						
						
						
						<tr>
						<td colspan="4">
							<div class="qistext">
						    <h4>Special Needs</h4>
							</div>
						</td>
						</tr>
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>Staff Uniform:</p>
							</div>
						</td>
						<td colspan="3" ><input type="radio" name="" value="yes" id=""> Yes &nbsp;&nbsp;&nbsp;<input type="radio" name="" value="no" id=""> No</td>
						</tr>
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>Staff wearing ID Badge:</p>
							</div>
						</td>
						<td colspan="3" ><input type="radio" name="" value="yes" id=""> Yes &nbsp;&nbsp;&nbsp;<input type="radio" name="" value="no" id=""> No</td>
						</tr>
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>Project & Periodic Cleaning Complete:</p>
							</div>
						</td>
						<td colspan="3" ><input type="radio" name="" value="yes" id=""> Yes &nbsp;&nbsp;&nbsp;<input type="radio" name="" value="no" id=""> No</td>
						</tr>
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>Facility Manual Checked:</p>
							</div>
						</td>
						<td colspan="3" ><input type="radio" name="" value="yes" id=""> Yes &nbsp;&nbsp;&nbsp;<input type="radio" name="" value="no" id=""> No</td>
						</tr>
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>Cleaning Room Tidy:</p>
							</div>
						</td>
						<td colspan="3" ><input type="radio" name="" value="yes" id=""> Yes &nbsp;&nbsp;&nbsp;<input type="radio" name="" value="no" id=""> No</td>
						</tr>
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>Cleaning Trolley Check List:</p>
							</div>
						</td>
						<td colspan="3" >
						<input type="checkbox" name='status[]' > Chemicals Locked away & bottels labelled <br>
						<input type="checkbox" name='status[]' > Duty Statements <br>
						<input type="checkbox" name='status[]' > MSDS's <br>
						<input type="checkbox" name='status[]' > Periodic Room Cleaning book signned off <br>
						<input type="checkbox" name='status[]' > PPE <br>
						<input type="checkbox" name='status[]' > Wet Floor Signs <br>
						<input type="checkbox" name='status[]' > Trolley neat and tidy <br>
						</td>
						</tr>
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>Maintenance Repairs Logged for Client:</p>
							</div>
						</td>
						<td colspan="3" ><input type="radio" name="" value="yes" id=""> Yes &nbsp;&nbsp;&nbsp;<input type="radio" name="" value="no" id=""> No</td>
						</tr>-->
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>Client's Comments:</p>
							</div>
						</td>
						<td colspan="3" ><textarea class="form-control" rows="3" name="cms" id="cms" cols="3"><?php echo $healthqis[0]['client_comments'];?></textarea></td>
						</tr>
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>D.O.N / FM Manager:</p>
							</div>
						</td>
						<td colspan="3" ><input type="text" name="fm" class="form-control" value="<?php echo $healthqis[0]['qis_fmmanager'];?>" id="fm"></td>
						</tr>
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>Area Manager:</p>
							</div>
						</td>
						<td colspan="3" ><input type="text" name="areamanager" value="<?php echo $healthqis[0]['qis_area_mgr'];?>" class="form-control" id=""></td>
						</tr>
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>Client Signature:</p>
							</div>
						</td>
						<td colspan="3" >
							<!--signature starts here -->
							<div style="border-style: solid;
							border-width: 1px; border-color:#C4C4C4; width:500px;">
							<canvas class='pad' width='495' height='70'name='sign' id='sign'></canvas> </div>
							<input type='hidden'  name='output' class='output' id='output'>
							<button class='clearButton'>Reset</button></br>
							<img src="<?php echo base_url();?>assets/qis/<?php echo $healthqis[0]['qis_signature'];?>">
							<input type="hidden" class="form-control"  value="<?php echo $healthqis[0]['qis_signature'];?>" name="hiddensign"> 
						</td>
						</tr>

				</tbody>
		  </table>
		  
		  </section>
		  <button type="submit" name="edithealth" class="btn btn-xs btn-default btyellow" style="height:35px;">Edit Health QIR</button>
		  
</form> 
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
    <div class="col-md-12 footer">
    	<div class="headtext1">© Copyright 2014 Guardian Property Service </div>
    </div>
    </div>
    
    
    
    
</body>

<script>
	function myfun(value)
	{
	var value;
	if(value == 'Health QIS'){
	
	document.getElementById("tabtwo").style.display = "block";
	document.getElementById("tabone").style.display = "none";
	}else{
	document.getElementById("tabtwo").style.display = "none";
	document.getElementById("tabone").style.display = "block";
	}}
</script>