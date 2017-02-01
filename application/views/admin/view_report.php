<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Reports</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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
	<div id="path2" class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Incident Report /</span><span>View Report</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);
	   ?>
	<div id="path3" class="headtext1"> <a href="<?php echo base_url();?>admin/manage_reports" style="color:#FFF">Manage Reports </a>/ <span>View Area</span></div>
    	
        <div class="mtextarea mtextarea2">
        
		<div class="row">
		<span style="text-align:right; margin-left:490px;" id="print" ><a href="" onclick="myFunction()"><img src="<?php echo base_url("assets/site_images/print.png");?>" width="30px;" title="print"></a></span>
		<div class="col-md-6">
		 <?php
         $id = $editreport[0]['inr_createdby'];
		  $id1 = $editreport[0]['inr_modifiedby'];
		 $query=mysql_query("select admin_username from tbl_admin where admin_id='$id'");
		 $dat=mysql_fetch_array($query);
		 $query1=mysql_query("select admin_username from tbl_admin where admin_id='$id1'");
		 $data1=mysql_fetch_array($query1);
		$createdname=$dat['admin_username'];
		$modifiedname=$data1['admin_username'];
		  ?>
		
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label> :  <?php echo $editreport[0]['inr_position'];?>
   
  </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Status</label> : <?php echo $editreport[0]['inr_status'];?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Created By</label> : <?php echo $createdname; ?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Created on</label> : <?php echo $editreport[0]['inr_createdon'];?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Modified By</label> : <?php echo $modifiedname;?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Modified on</label> : <?php echo $editreport[0]['inr_modifiedon'];?>
    
  </div>
  
  

  <div class="form-group">
    <label for="exampleInputEmail1">Position title</label>:  <?php echo ucfirst($editreport[0]['inr_position']); ?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Site</label>:  <?php echo ucfirst($editreport[0]['inr_site']); ?>
    
  </div>
   
  <div class="form-group">
<label for="exampleInputEmail1">Incident Time & Date </label>:  <?php echo date("m/d/Y H:i:s",strtotime($editreport[0]['inr_incidenton'])); ?>
    
  </div>
  <div class="form-group">
   <label for="exampleInputEmail1">Location</label>:  <?php echo $editreport[0]['inr_location']; ?>
    
  </div>
  <label for="exampleInputEmail1"><b>TYPES OF ACCIDENTS</b></label>
  <div class="form-group">
    <label for="exampleInputPassword1">Injury to employee/ visitor/ contractor requiring hospitalisation </label>:<br>
   <?php echo nl2br($editreport[0]['inr_injury_hospitalisation']); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Injury to employee/ visitor/ contractor requiring medical treatment </label>:<br>
   <?php echo nl2br($editreport[0]['inr_injury_medical_treatment']); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Injury to employee/ visitor/ contractor causing death </label>:<br>
    <?php echo nl2br($editreport[0]['inr_injury_causing_death']); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Accident involving plant/ equipment </label>:<br>
    <?php echo nl2br($editreport[0]['inr_injury_accident']);?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Accident involving violence </label>:<br>
   <?php echo nl2br($editreport[0]['inr_injury_involving_voilence']); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Accident involving vehicle/s </label>:<br>
  <?php echo nl2br($editreport[0]['inr_injury_involving_vehicle']); ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Legal action/ Statutory reporting required </label>:<br>
   <?php echo nl2br($editreport[0]['inr_injury_legal_action']);?>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Brief description of accident (facts only, don’t describe why the accident occurred or speculate on who may be at fault)</label><br>
    <?php echo nl2br($editreport[0]['inr_injury_accident_descr']); ?>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Details Of immediate responce </label>:<br>
    <?php echo nl2br($editreport[0]['inr_immedite_reponse']); ?>
  </div>
 <label for="exampleInputPassword1">INJURED PERSON DETAILS</label>
  <div class="form-group">
    <label for="exampleInputEmail1">First name</label>: <?php echo ucfirst($editreport[0]['inr_firstname']); ?>
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last name</label>: <?php echo $editreport[0]['inr_lastname'] ?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Branch </label>: <?php echo $editreport[0]['inr_branch'] ?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Position title </label>: <?php echo $editreport[0]['inr_position_title'] ?>
  
  </div><div class="form-group">
    <label for="exampleInputEmail1">Witness </label>: <?php echo $editreport[0]['inr_witness'] ?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">First aider</label>: <?php echo $editreport[0]['inr_first_aider'] ?>
   
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
				<?php $roo=explode(",",$editreport[0]['inr_utility_rooms']);
				      $body=explode(",",$editreport[0]['inr_body_parts']);
				      $nature=explode(",",$editreport[0]['inr_nature_injury']);
				      $caused=explode(",",$editreport[0]['inr_caused_by']);
				
				
				?>
				
				<tr>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('home',$roo)){ echo "checked";}?> value="home"> Home</label></td>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('doctor',$roo)){ echo "checked";}?>  value="doctor"> Doctor</label></td>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('hospital',$roo)){ echo "checked";}?>  value="hospital"> Hospital</label></td>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('near miss',$roo)){ echo "checked";}?>  value="near miss"> Near miss</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('return to work',$roo)){ echo "checked";}?> value="return to work"> Return to work</label></td>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('medical treatment',$roo)){ echo "checked";}?> value="medical treatment"> Medical treatment </label></td>
				<td><label><input type="checkbox" name="rooms[]" <?php if(in_array('first aid',$roo)){ echo "checked";}?> value="first aid"> First aid treatment </label></td>
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
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('head',$body)){ echo "checked";}?> value="head"> Head</label></td> 
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('leg',$body)){ echo "checked";}?> value="leg"> Leg</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('trunk',$body)){ echo "checked";}?> value="trunk"> Trunk</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('arm',$body)){ echo "checked";}?> value="arm"> Arm</label></td>
				</tr>
				
				<tr> 
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('ear',$body)){ echo "checked";}?> value="ear"> Ear</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('foot',$body)){ echo "checked";}?> value="foot"> Foot</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('neck',$body)){ echo "checked";}?> value="neck"> Neck</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('back',$body)){ echo "checked";}?> value="back"> Back</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('internal organ',$body)){ echo "checked";}?> value="internal organ"> Internal organ</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('finger',$body)){ echo "checked";}?> value="finger"> Finger</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('toe',$body)){ echo "checked";}?> value="toe"> Toe</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('shoulder',$body)){ echo "checked";}?> value="shoulder"> Shoulder</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('eye',$body)){ echo "checked";}?> value="eye"> Eye</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('hand',$body)){ echo "checked";}?> value="hand"> Hand</label></td>
				<td><label><input type="checkbox" name="body[]" <?php if(in_array('knee',$body)){ echo "checked";}?> value="knee"> Knee</label></td>
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
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('fracture',$nature)){ echo "checked";}?> value="fracture"> Fracture</label></td> 
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('dislocation',$nature)){ echo "checked";}?> value="dislocation"> Dislocation</label></td>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('sprain',$nature)){ echo "checked";}?> value="sprain"> Sprain</label></td>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('concussion',$nature)){ echo "checked";}?> value="concussion"> Concussion</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('amputatio',$nature)){ echo "checked";}?> value="amputatio"> Amputatio</label></td>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('laceration',$nature)){ echo "checked";}?> value="laceration"> Laceration/ Cut</label></td> 
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('superficial',$nature)){ echo "checked";}?> value="superficial"> Superficial</label></td>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('bruises',$nature)){ echo "checked";}?> value="bruises"> Bruises</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('other',$nature)){ echo "checked";}?> value="other"> Other</label></td>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('burn',$nature)){ echo "checked";}?> value="burn"> Burn</label></td>
				<td><label><input type="checkbox" name="injury[]" <?php if(in_array('skin irritation',$nature)){ echo "checked";}?> value="skin irritation"> Skin irritation</label></td> 
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
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('fixed machinery',$caused)){ echo "checked";}?> value="fixed machinery"> Fixed machinery</label></td> 
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('mobile plant',$caused)){ echo "checked";}?> value="mobile plant"> Mobile plant/ transport</label></td>
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('powered equipment',$caused)){ echo "checked";}?> value="powered equipment"> Powered equipment</label></td>
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('non powered equipment',$caused)){ echo "checked";}?> value="non powered equipment"> Non powered equipment</label></td>
				</tr>
				
				<tr>
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('virus',$caused)){ echo "checked";}?> value="virus"> Bacterial/ Virus</label></td>
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('environmental agency',$caused)){ echo "checked";}?> value="environmental agency"> Environmental agency</label></td> 
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('chemical',$caused)){ echo "checked";}?> value="chemical"> Chemical</label></td>
				<td><label><input type="checkbox" name="caused[]" <?php if(in_array('animal',$caused)){ echo "checked";}?> value="animal"> Animal/ Human agency</label></td>
				</tr>
				
		
				
			
				</tbody>
		  </table>
		  
	</section>
  
  
 
   
  <div class="checkbox">
  

</div>


   
  
  <div class="form-group">
    <label for="exampleInputPassword1">Corrective action required</label>:<br>
 <?php echo nl2br($editreport[0]['inr_creative_action']); ?>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Signed <span class="required_field"> * </span></label>
	
	
	
	<img src="<?php echo base_url();?>assets/report/<?php echo $editreport[0]['inr_signedby'];?>">
    
  </div> 
  <div class="form-group">
    <label for="exampleInputPassword1">Dated </label>: <?php echo date("m/d/Y",strtotime($editreport[0]['inr_signedon'])); ?>
    
  </div> 

		</div>
		<div class="col-md-6">
		 
		</div>
		

		</div>
            
        </div>
        <div class="dbshadow"></div>
        
    </div>
    <div class="clear"></div>
    <div class="col-md-12 footer" id="footer" >
    	<div class="headtext1">© Copyright 2014 Guardian Property Service </div>
    </div>
    </div>
    
    
    
    
</body>