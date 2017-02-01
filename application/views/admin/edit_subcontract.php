<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Add Staff</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <!--header including starts here-->
	    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	   
	  

    <!-- Custom CSS 
    <link href="<?php echo base_url();?>assets/css/custom-admin.css" rel="stylesheet">-->


    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
	   
	   
	   
	   
	   
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	  <script src="<?php echo base_url();?>assets/css/menu_jquery.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
      
       
     <!--<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>-->
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
       <!--header including ends here-->
       
         <style>
		.ff1{width:113px !important;}
		
		@media only screen and (max-width: 1100px) {
		.ff1 {width: 82px !important;}
		@media only screen and (max-width: 640px) {
		.ff1 {width: 138px !important;}
		}
	  </style>

 <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer").validate({
   
        // Specify the validation rules
        rules: {
            iname: "required",
			email: {
                required: true,
                email: true
            },
			cname: "required",
			subdate: "required",
			clientabn: "required",
			subcontact: "required",
			soc: "required",
			annmoncont: "required",
			position: "required",
			faxno: "required",
			description:"required",
			margin:"required",
			hour:"required",
			days:"required",
			rate:"required",
			amount:"required",
			phone:"required",
			
		
			cc:"required",
			cd:"required",
			subcont:"required",
			areamgr:"required",
			whosold:"required",
			ls:"required",
			comments:"required",
			ggm:"required",
			anyspecialbreak:"required",
			addforinvoice:"required",
			nameofacct:"required",
			anyspectialpay:"required",
			date:"required"
		
           
            
        },
        
        // Specify the validation error messages
        messages: {
            cname: "Please select the customer name",
			subdate: "Please select the date",
            clientabn: "Please enter client ABN",
			soc: "Please enter contract opertions contact",
			annmoncont: "Please enter annual & monthly price ",
			address: "Please enter address",
			subcontact: "Please enter contact",
			position: "Please enter position",
			phone: "Please enter phone number",
			faxno: "Please enter fax number",
			img:"Please choose a picture ",
			dprice:"Please enter discount price",
			margin:"Please enter margin",
			hour:"Please enter hour",
			days:"Please enter days",
			rate:"Please enter rate",
			amount:"Please enter amount",
			
			
			cc:"Please enter the client/contract details",
			cc:"Please enter the sub contract",
			areamgr:"Please enter the area manager",
			whosold:"Please write the who sold",
			ls:"Please write the client letter",
			comments:"Please write the comments",
			ggm:"Please enter signed by GGM",
			description:"Please write description"
           
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">	  
         
       
       

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
<!--script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script-->	  
<!--script>	  
$( document ).ready(function() {
 $(".exampleInputfile").hide();
 $("#text").hide();
 $('#myForm input').on('click', function() {
   var res = $('input[name=fm]:checked', '#myForm').val(); 
   //alert(res);
   if(res == 'yes'){
   $(".exampleInputfile").show();
   $("#text").show();
   
   }
     if(res == 'no'){
   $(".exampleInputfile").hide();
   $("#text").hide();
   
   }
   
});
 
});

</script-->	  
	  
	  
       
  </head>
  <body>
   <!-- TO CHECK VALUES COMING OR NOT-->
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?-->
       <!-- TO CHECK VALUES COMING OR NOT-->
   <?php 
   $ids = $data[0]['subcontract_id'];
     //echo "<h1>".$ids."</h1>";
	// echo "select * from tbl_contract_labour where contract_id='$ids'";
	 $query = mysql_query("select * from tbl_subcontract_labour where subcontract_id='$ids'");
	 
	
	
	 /*$this->db->select('*');	 
	 $this->db->from('tbl_contract_labour');	 
	 $this->db->where('id',$ids);
     $record=$this->db->get()->result_array();
	 foreach($record as $row){
	 echo"<pre>";print_r($row);echo"</pre>";
	 }*/
   ?>
   
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Subcontracts List /</span><span>Modify Subcontract Information</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_contracts" style="color:#FFF">Manage Subcontract </a>/ <span>Modify Subcontract Information</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		<form role="form"  class="myForm" method='post' id="customer" enctype="multipart/form-data" >
		
						
  <div class="form-group" >
    <label for="exampleInputDate">Date Submitted<span class="required_field"> * </span></label>
	<?php $datesub=date("m/d/Y",strtotime($data[0]['subcontract_submitted_date']));	?>
    <input type="text" class="form-control"  name="subdate" id="subdate"  value="<?php echo $datesub; ?>"/>
	
  </div>
  <div class="form-group">
    <label for="exampleInputabn">Client ABN<span class="required_field"> * </span></label>
    <input type="text"    class="form-control" name="clientabn" id="clientabn" value="<?php echo $data[0]['subcontract_clientabn']; ?>">
	
	
	
  </div>
  <div class="form-group">
    <label for="exampleInputnoc">Name of Subcontract<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="subcontact" id="subcontact"  value="<?php echo $data[0]['subcontract_contact_person']; ?>">
	
  </div>
  <div class="form-group">
    <label for="exampleInputAddress">Address of Contact <span class="required_field"> * </span></label>
    <textarea class="form-control"  id="addofcont" rows='5' cols='35' name="addofcont"  ><?php echo $data[0]['subcontract_contactperson_addres']; ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmial">Email Address<span class="required_field"> * </span></label>
    <input type="email" class="form-control"  name="email" id="email" value="<?php echo $data[0]['subcontract_contactperson_email']; ?>">
  </div>
  
  <div class="form-group">
    <label for="exampleInputcoc">Subcontract Operations Contact<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="soc" id="soc" value="<?php echo $data[0]['subcontract_contactperson_phone']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPos">Position<span class="required_field"> * </span></label>
     <input type="text" class="form-control" name="position" id="position" value="<?php echo $data[0]['subcontract_contactperson_position']; ?>">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPhone">Phone<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $data[0]['subcontract_phone']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputfax">Fax No<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="faxno" id="faxno"  value="<?php echo $data[0]['subcontract_faxno']; ?>">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputann">Annual & Monthly Contarct Price(Excluding Vacanices & GST)<span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="annmoncont" value="<?php echo $data[0]['subcontract_price']; ?>" id="annmoncont"
  
   <div class="form-group">
    <label for="exampleInputccd">Contarct Commencement Date<span class="required_field"> * </span></label>
	<?php $contcomm=date("m/d/Y",strtotime($data[0]['subcontract_commencement_date']));	?>
    <input type="text" class="form-control" name='date' id="3rddate"  value="<?php echo $contcomm; ?>">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputmar">Margin%<span class="required_field"> * </span></label>
    <input type="text" class="form-control" id="margin"  name="margin" value="<?php echo $data[0]['subcontract_margin']; ?>">
  </div>

 <div class="form-group">
    <label for="exampleInputPassword1">Status<span class="required_field"> * </span> </label>
	<select class="form-control" name='status'>
	<option>--Please Select--</option>
	<option value="Active" <?php if($data[0]['subcontract_status']=="Active"){ echo "selected";}?>>Active</option>
	<option value="Inactive"<?php if($data[0]['subcontract_status']=="Inactive"){ echo "selected";}?>>Inactive</option>
	</select>  
  
  <div class="form-group">
    <label for="exampleInputhd">Schedule of Actual Labour (to be calculated in accordance with vacancy factors)</label>
    <!--input type="text" class="form-control" id="exampleInputccd"  placeholder=""-->
  </div>
  
 
 
  
 <!-- new table start here -->
  <div>
	
		<section id="no-more-tables" style="margin: 20px 0px;">
		
		  <table class="table-bordered table-striped table-condensed cf">
			  <thead class="cf" style="background:#044174; color:#fff;">
				 <tr>
					  <th>Nominate Sub Contract or Guardian Labour Details</th>
					  <th>Hours</th>
					  <th>Days</th>
					  <th>Rate</th>
					  <th>Amount</th>
					  
				  </tr>
			  </thead>
				<tbody>
			<?php while($data1 = mysql_fetch_array($query)){ ?>		
					<tr>
						<td data-title="Tasks to be performed by Trainee"><?php echo $data1['guardian_labour']; ?></td>
						
						<input type="hidden" name="getid[]" value="<?php echo $data1['id']; ?>">
						 <input type="hidden" name="labour[]" value="<?php echo $data1['guardian_labour']; ?>"></td>
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour[]' id='hour' value='<?php echo $data1['hours']; ?>' class="ff1" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]' id='days' value='<?php echo $data1['days']; ?>' class="ff1" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id ="rate" value='<?php echo $data1['rate']; ?>' class="ff1"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id="amount" value='<?php echo $data1['amount']; ?>' class="ff1" ></td>
						
					</tr>
					<?php } ?>
					
					<!--
					<tr>
						<td data-title="Tasks to be performed by Trainee">Saturday</td>
					<input type="hidden" name="labour[]" value="saturday" />
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour[]' id='hour' value='' class="ff1" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]' id='days' value='' class="ff1" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id='rate' value='' class="ff1"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id='amount' value='' class="ff1" ></td>
						
					</tr>
					<tr>
						<td data-title="Tasks to be performed by Trainee">Sunday</td>
						<input type="hidden" name="labour[]" value="sunday" />
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour[]' id='hour'  value='' class="ff1" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]' id='days' value='' class="ff1" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id='rate' value='' class="ff1"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id='amount' value='' class="ff1" ></td>
						
					</tr>
				
					<!--tr>
						<td data-title="Tasks to be performed by Trainee">Subtotal</td>
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour1' value='' class="ff1" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days1' value='' class="ff1" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate1' value='' class="ff1"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount1' value='' class="ff1" ></td>
						
					</tr>
					<tr>
						<td data-title="Tasks to be performed by Trainee">Periodic Work</td>
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour1' value='' class="ff1" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days1' value='' class="ff1" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate1' value='' class="ff1"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount1' value='' class="ff1" ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Public Holidays</td>
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour1' value='' class="ff1" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days1' value='' class="ff1" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate1' value='' class="ff1"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount1' value='' class="ff1" ></td>
						
					</tr>
					
					<tr>
						<td colspan='2'>Toilet Allowance</td>
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour1' value='' class="ff1" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days1' value='' class="ff1" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate1' value='' class="ff1"></td>
						
						
						
					</tr>
					<tr>
						<td colspan='2'>Supervision Allowance</td>
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour1' value='' class="ff1" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days1' value='' class="ff1" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate1' value='' class="ff1"></td>
						
					</tr>
					<tr>
						<td colspan='2'>Total Per Month</td>
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour1' value='' class="ff1" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days1' value='' class="ff1" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate1' value='' class="ff1"></td>
						
					</tr-->
				
					
					
					
					
                    

				</tbody>
		  </table>
			  
			  </section>
  </div>
  

	
	
	
	 <div class="form-group">
	   <h5>Guardian Facility Management Services</h5>
	  <label for="exampleInputhtc">  Has the Client been provided with any costings for FM services : </label></br>
    <input type ='radio'  name='fm' value='yes' <?php if($data[0]['subcontract_fmservices']=="yes"){ echo "checked";}?> id='fm'/>    <label for="exampleInputys">  Yes </label> 
	
	
      <input type ='radio' name='fm' value='no' <?php if($data[0]['subcontract_fmservices']=="no"){ echo "checked";}?> id='fm'/>    <label for="exampleInputno">    No  </label> 
     </div>
	 
   
     <img src="<?php echo base_url();?>assets/subcontracts/<?php echo $data[0]['subcontract_quote']; ?>" width="50px" height="50px" />
	  
	   <div class="form-group">
	    <label for="exampleInputPassword1" id="text">  If Yes, please attach details of quotation and provide to FM Manager </label>
       <input type="file" class="exampleInputfile" name='attach' id="attach"  value="">
	   <input type="hidden" class="exampleInputfile" name='oldattach' id="attach"  value="<?php echo $data[0]['subcontract_quote']; ?>">
       </div>
	 
	 
	 <div class="form-group">
	   
	   <label for="exampleInputPassword1"> Has the Facility Manager been advised of Client/Contract details :<span class="required_field"> * </span> </label></br>
   <input type ='radio'  name='cc' id='cc' value='yes'  <?php if($data[0]['subcontract_facily_mmanager']=="yes"){ echo "checked";}?>/>   <label for="exampleInputPassword1">  Yes </label>
   
     <input type ='radio' name='cc' id='cc' value='no' <?php if($data[0]['subcontract_facily_mmanager']=="no"){ echo "checked";}?>/>  <label for="exampleInputPassword1">    No  </label>  
     </div>
	 
	 
	 <div class="form-group">
	   
	   <label for="exampleInputPassword1"> Is the full area to be cleaned from commencement date :<span class="required_field"> * </span> </label></br>
         <input type ='radio'  name='cd' id='cd' value='yes' <?php if($data[0]['subcontract_area_cleaned']=="yes"){ echo "checked";}?>/>   <label for="exampleInputPassword1">  Yes </label>
		 
		 
      <input type ='radio' name='cd' id='cd' value='no' <?php if($data[0]['subcontract_area_cleaned']=="no"){ echo "checked";}?>/>   <label for="exampleInputPassword1">    No  </label> 
     </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Sub Contractor<span class="required_field"> * </span></label>
    <input type="text" class="form-control" id="subcont" name="subcont" value="<?php echo $data[0]['subcontract_subcontract']; ?>">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputPassword1">Area Manager<span class="required_field"> * </span></label>
    <input type="text" class="form-control" id="areamgr" name="areamgr" value="<?php echo $data[0]['subcontract_areamanager']; ?>">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputPassword1">Who Sold Contract<span class="required_field"> * </span></label>
    <input type="text" class="form-control" id="whosold" name="whosold" value="<?php echo $data[0]['subcontract_who_sold']; ?>">
  </div> 
  
   <div class="form-group">
   
	<label for="exampleInputAddress"> Comments-(Special Conditions eg. Shampoo Carpets, etc…Included in Contract)<span class="required_field"> * </span> </label>
    <textarea class="form-control"  id="comments" name="comments" rows='5' cols='35' ><?php echo $data[0]['subcontract_comments']; ?></textarea>
  
  
	</div> 
	
	
	
	
	 <div class="form-group">
	   
	 <label for="exampleInputAddress">  New Client Letter sent: <span class="required_field"> * </span> </label>
        <input type ='radio'  name='ls' id="ls" value='yes' <?php if($data[0]['subcontract_letter_sent']=="yes"){ echo "checked";}?>/>   <label for="exampleInputPassword1">  Yes </label>
		
		
     <input type ='radio' name='ls' id="ls" value='no' <?php if($data[0]['subcontract_letter_sent']=="no"){ echo "checked";}?> />    <label for="exampleInputPassword1">   No  </label> 
     </div>
	 
 <div class="form-group">
    <label for="exampleInputPassword1">Date<span class="required_field"> * </span></label>
	<?php $sentdate=date("m/d/Y",strtotime($data[0]['subcontract_sent_date']));	?>
    <input type="text" class="form-control" name="2nddate" id="2nddate"  value="<?php echo $sentdate; ?>">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputPassword1">Signed by GGM<span class="required_field"> * </span></label>
    <input type="text" class="form-control" id="ggm" name="ggm"  value="<?php echo $data[0]['subcontract_signedby']; ?>">
  </div> 
    
	
 <div class="form-group">
    <label for="exampleInputPassword1">PLEASE USE SECOND PAGE IF THERE ARE ANY SPECIAL REQUIREMENTS FOR INVOICING</label>
    <label for="exampleInputPassword1"><h4><b>INVOICING REQUIREMENTS</b></h4></label>
    <label for="exampleInputPassword1">Client Name To Be Invoiced If Different From Contract Name:<span class="required_field"> * </span></label>
    <input type="text" class="form-control" id="clientname" name="clientname" value="<?php echo $data[0]['subcontract_clientname']; ?>">
  </div> 
  
   <div class="form-group">
   	<label for="exampleInputAddress">Address For Invoices To Be Sent If Different From Site Address:<span class="required_field"> * </span> </label>
    <textarea class="form-control"  id="addforinvoice"  name="addforinvoice" rows='5' cols='35' ><?php echo $data[0]['subcontract_address_invoice']; ?></textarea>
  </div> 
	
	
  <div class="form-group">
   	<label for="exampleInputAddress">Any Special Break Up Required On The Invoice:<span class="required_field"> * </span></label>
    <textarea class="form-control"  id="anyspecialbreak" name="anyspecialbreak" rows='5' cols='35' ><?php echo $data[0]['subcontract_special_breakup']; ?></textarea>
  </div> 
  
  <div class="form-group">
   	<label for="exampleInputAddress">Name Of Accounts Payable Person And Phone No: <span class="required_field"> * </span></label>
    <textarea class="form-control"  id="nameofacct" name="nameofacct" rows='5' cols='35' ><?php echo $data[0]['subcontract_account_name']; ?></textarea>
  </div> 
  
  <div class="form-group">
   	<label for="exampleInputAddress">Any Special Payment Terms Negotiated:<span class="required_field"> * </span></label>
    <textarea class="form-control"  id="anyspectialpay" name="anyspectialpay" rows='5' cols='35' ><?php echo $data[0]['subcontract_special_payments']; ?></textarea>
  </div> 
  
 
	  <div class="form-group">
    
    <input type="submit" align='right' class="btn btn-xs btn-default btyellow" style="height:35px;" name='edit' value="Edit Subcontract" />
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
      <!--date picker starts here-->
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
  $(function() {
  
    $( "#2nddate" ).datepicker();
  });
  $(function() {
  
    $( "#subdate" ).datepicker();
  });
   $(function() {
  
    $( "#3rddate" ).datepicker();
  });
  </script>
    <!--date picker ends here-->
    
    
    
</body>