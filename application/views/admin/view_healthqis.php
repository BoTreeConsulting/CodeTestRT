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
	  

    <!-- Custom CSS 
    <link href="<?php // echo base_url();?>assets/css/custom-admin.css" rel="stylesheet">-->


    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
	   
	   
	   
	   
	   
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	  <script src="<?php echo base_url();?>assets/css/menu_jquery.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
      
       
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
   
   <div class="col-lg-12 navbar-inner" id="path1">
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
	<div class="headtext1" id="path2" ><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage QIR / </span>View QIR </div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1" id="path3"> <a href="<?php echo base_url();?>admin/manage_staff" style="color:#FFF">Manage QIR</a>/ <span>Edit QIR</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div align="right" id="print" ><a href="" onclick="myFunction()"><img src="<?php echo base_url("assets/site_images/print.png");?>" width="30px;" title="print"></a></div>
		<div class="col-md-12">
		
		
		
		<div style="overflow:auto;">
		<select class="form-control selectqis" >
		
		<option value="Normal QIS">Health QIR</option>
		
		</select>
		</div>
	<div style="margin:20px 0px;" id="tabone">	
		<h2>For View Health QIR</h2>
		
		<div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Site : </label>
    <?php echo $healthqis[0]['qis_site'];?>
              </div>
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Date : </label>
    <?php echo $healthqis[0]['qis_date_on'];?>
              </div>
            </div>
  </div>
  
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Area : </label>
    <?php echo $healthqis[0]['qis_area'];?>
              </div>
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Time : </label>
    <?php echo date("g:i a", strtotime($healthqis[0]['qis_time']));?>
              </div>
            </div>
  </div>
  
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Inspected By : </label>
    <?php echo $healthqis[0]['qis_inspectedby'];?>
              </div>
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Representative Present : </label>
    <?php echo $healthqis[0]['qis_representative'];?>
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
						<td data-title="Comments"><?php echo $info['qis_comments'];?></td>
						<td data-title="Satisfactory" ><?php echo $info['qis_satisfactory']; ?></td>
						<td data-title="Unsatisfactory" ><?php  if($info['qis_satisfactory']=="Yes"){echo " ";}else{echo "Yes";} ?> </td>
						</tr>
						<?php $i++; 
						}
					} ?>
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>Client's Comments:</p>
							</div>
						</td>
						<td colspan="3" ><?php echo $healthqis[0]['client_comments'];?></td>
						</tr>
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>D.O.N / FM Manager:</p>
							</div>
						</td>
						<td colspan="3" ><?php echo $healthqis[0]['qis_fmmanager'];?></td>
						</tr>
						
						<tr>
						<td data-title="Special Needs">
							<div class="qistext">
							<p>Area Manager:</p>
							</div>
						</td>
						<td colspan="3" ><?php echo $healthqis[0]['qis_area_mgr'];?></td>
						</tr>
						
					

				</tbody>
		  </table>
		  
		  	
						 <?php
         $id = $healthqis[0]['qis_createdby'];
		  $id1 = $healthqis[0]['qis_modifiedby'];
		 $query=mysql_query("select admin_username from tbl_admin where admin_id='$id'");
		 $dat=mysql_fetch_array($query);
		 $query1=mysql_query("select admin_username from tbl_admin where admin_id='$id1'");
		 $data1=mysql_fetch_array($query1);
		$createdname=$dat['admin_username'];
		$modifiedname=$data1['admin_username'];
		  ?>
   <div class="form-group">
    <label for="exampleInputPassword1">Created By</label> : <?php echo $createdname;?>
   </div>
  
  <div class="form-group">
       <label for="exampleInputPassword1">Created on</label> : <?php echo date("M d Y g:i a",strtotime($healthqis[0]['qis_createdon']))?>
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Modified By</label> : <?php echo $modifiedname;?>
  </div>
  
    
			
		   <div class="form-group">
    <label for="exampleInputPassword1">Modified on</label> : <?php echo date("M d Y g:i a",strtotime($healthqis[0]['qis_modifiedon']))?>
  </div>
				
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