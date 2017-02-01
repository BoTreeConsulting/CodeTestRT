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
       
        <style>
		.ff1{width:113px !important;}
		
		@media only screen and (max-width: 1100px) {
		.ff1 {width: 82px !important;}
		@media only screen and (max-width: 640px) {
		.ff1 {width: 138px !important;}
		}
	  </style>   
	  
	 
         
       

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
<script>	  
$( document ).ready(function() {
 $(".exampleInputfile").hide();
 $("#text").hide();
 $('.myForm input').on('click', function() {
   var res = $('input[name=fm]:checked', '.myForm').val(); 
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

</script>	  
		       
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Subcontract Information /</span><span>Add New Subcontract Information</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_contracts" style="color:#FFF">Manage Subcontract Information </a>/ <span>Add New Subcontract Information</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		<form role="form" class="myForm" method='post' id="customer" enctype="multipart/form-data" >
  <div class="form-group" >
    <label for="exampleInputDate">Date Submitted<span class="required_field"> * </span> </label>
    <input type="text" class="form-control"  name="subdate" id="subdate" placeholder="Date">
	
  </div>
  <div class="form-group">
    <label for="exampleInputabn">Client ABN<span class="required_field"> * </span> </label>
    <input type="text"    class="form-control" name="clientabn" id="clientabn" placeholder="">
	
	
	
  </div>
  <div class="form-group">
    <label for="exampleInputnoc">Name of Subcontract<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" name="subcontact" id="subcontract"  placeholder="">
	
  </div>
  <div class="form-group">
    <label for="exampleInputAddress">Address of Contact<span class="required_field"> * </span>  </label>
    <textarea class="form-control"  id="addofcont" name="addofcont" rows='5' cols='35' ></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmial">Email Address<span class="required_field"> * </span> </label>
    <input type="email" class="form-control"   name="email" id="email" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="exampleInputcoc">Subcontract Operations Contact<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" name="soc" id="soc" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPos">Position<span class="required_field"> * </span> </label>
     <input type="text" class="form-control" name="position" id="position" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPhone">Phone<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone Number">
  </div>
  <div class="form-group">
    <label for="exampleInputfax">Fax No.<span class="required_field"> * </span> </label>
    <input type="text" class="form-control"  name="faxno" id="faxno" placeholder="Enter Fax No">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputann">Annual & Monthly Contarct Price(Excluding Vacanices & GST)<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" name="annmoncont" id="annmoncont"  placeholder="">
  </div> 
  
   <div class="form-group">
    <label for="exampleInputccd">Contarct Commencement Date<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" name='date' id="3rddate"  placeholder="">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputmar">Margin%<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" id="margin"  name="margin"  placeholder="">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Status<span class="required_field"> * </span> </label>
	<select class="form-control" name='status'>
	
	<option>Active</option>
	<option>Inactive</option>
	</select>  
  
  <div class="form-group">
    <label for="exampleInputhd">Schedule of Actual Labour (to be calculated in accordance with vacancy factors)<span class="required_field"> * </span> </label>
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
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Monday to Friday</td>
						 <input type="hidden" name="labour[]" value="monday to friday" />
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour[]' id='hour' value='' class="ff1" onkeypress="chkNumericin();"></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]' id='days' value='' class="ff1" onkeypress="chkNumericin();" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id ="rate" value='' class="ff1" onkeypress="chkNumericin();"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id="amount" value='' class="ff1" onkeypress="chkNumericin();" ></td>
						
					</tr>
					
					
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Saturday</td>
					<input type="hidden" name="labour[]" value="saturday" />
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour[]' id='hour' value='' class="ff1" onkeypress="chkNumericin();"></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]' id='days' value='' class="ff1" onkeypress="chkNumericin();"></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id='rate' value='' class="ff1" onkeypress="chkNumericin();"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id='amount' value='' class="ff1" onkeypress="chkNumericin();" ></td>
						
					</tr>
					
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Sunday</td>
						<input type="hidden" name="labour[]" value="sunday" />
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour[]' id='hour'  value='' class="ff1" onkeypress="chkNumericin();" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]' id='days' value='' class="ff1" onkeypress="chkNumericin();" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id='rate' value='' class="ff1" onkeypress="chkNumericin();"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id='amount' value='' class="ff1" onkeypress="chkNumericin();" ></td>
						
					</tr>
					
					
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Subtotal</td>
						<input type="hidden" name="labour[]" value="subtotal" />
						<td data-title="Skills Assessed"><input type='text' size= '50'   name='hour[]' id='hoursubtotal'  value=''onkeypress="chkNumericin();"  class="ff1" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]'  value='' class="ff1" id='daysubtotal' onkeypress="chkNumericin();" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id='ratesubtotal' value='' onkeypress="chkNumericin();" class="ff1"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id='amountsubtotal' value=''onkeypress="chkNumericin();"  class="ff1" ></td>
						
					</tr>
					<tr>
						<td data-title="Tasks to be performed by Trainee">Periodic Work</td>
						<input type="hidden" name="labour[]" value="periodic work" />
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour[]' id='hour' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]' id='days' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id='rate' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id='amount' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()" ></td>
						
					</tr>
					
					<tr>
						<td data-title="Tasks to be performed by Trainee">Public Holidays</td>
						<input type="hidden" name="labour[]" value="public holidays" />
						<td data-title="Skills Assessed"><input type='text' size= '50'   name='hour[]' id='hour' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]' id='days' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id='rate' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()"/></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id='amount' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()" ></td>
						
					</tr>
					
					<tr>
						<td>Toilet Allowance</td>
							<input type="hidden" name="labour[]" value="toilet allowance" />
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour[]' id='hour' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]' id='days' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id='rate' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id='amount' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()" ></td>
						
						
						
					</tr>
					<tr>
						<td>Supervision Allowance</td>
							<input type="hidden" name="labour[]" value="supervision allowance" />
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour[]' id='hour' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()"></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]' id='days' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()"></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id='rate' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()"></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id='amount' value='' class="ff1" onkeypress="chkNumericin();" onblur="TotalItemsCountin()"></td>
						
					</tr>
					<tr>
						<td >Total Per Month</td>
					    <input type="hidden" name="labour[]" value="total per month" />
						<td data-title="Skills Assessed"><input type='text' size= '50'    name='hour[]' id='hour' value='' class="ff1" ></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]' id='days' value='' class="ff1" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id='rate' value='' class="ff1" ></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id='amount' value='' class="ff1" ></td>
						
					</tr> 
		
                    

				</tbody>
		  </table>
			  
			  </section>
  </div>
  
  <!-- new table end here -->
	
	
	
	 <div class="form-group">
	   <h5>Guardian Facility Management Services</h5>
	  <label for="exampleInputhtc">  Has the Client been provided with any costings for FM services :<span class="required_field"> * </span>  </label></br>
    <input type ='radio'  name='fm' value='yes' id='fm'/>    <label for="exampleInputys">  Yes </label> 
      <input type ='radio' name='fm' value='no' id='fm'/>    <label for="exampleInputno">    No  </label> 
     </div>
	 

	  
	   <div class="form-group">
	    <label for="exampleInputPassword1" id="text">  If Yes, please attach details of quotation and provide to FM Manager <span class="required_field"> * </span> </label>
       <input type="file" class="exampleInputfile" name='attach' id="attach" placeholder="">
       </div>
	 
	 
	 <div class="form-group">
	   
	   <label for="exampleInputPassword1"> Has the Facility Manager been advised of Client/Subcontract details :<span class="required_field"> * </span>  </label></br>
   <input type ='radio'  name='cc' id='cc' value='yes'/>   <label for="exampleInputPassword1">  Yes </label>
     <input type ='radio' name='cc' id='cc' value='no'/>  <label for="exampleInputPassword1">    No  </label>  
     </div>
	 
	 
	 <div class="form-group">
	   
	   <label for="exampleInputPassword1"> Is the full area to be cleaned from commencement date :<span class="required_field"> * </span>  </label></br>
         <input type ='radio'  name='cd' id='cd' value='yes'/>   <label for="exampleInputPassword1">  Yes </label>
      <input type ='radio' name='cd' id='cd' value='no'/>   <label for="exampleInputPassword1">    No  </label> 
     </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Sub Contractor<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" id="subcont" name="subcont" placeholder="">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputPassword1">Area Manager<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" id="areamgr" name="areamgr"  placeholder="">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputPassword1">Who Sold Subcontract<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" id="whosold" name="whosold"  placeholder="">
  </div> 
  
   <div class="form-group">
   
	<label for="exampleInputAddress"> Comments-(Special Conditions eg. Shampoo Carpets, etc…Included in Subcontract) <span class="required_field"> * </span> </label>
    <textarea class="form-control"  id="comments" name="comments" rows='5' cols='35' ></textarea>
  
  
	</div> 
	
	
	 <div class="form-group">
	   
	 <label for="exampleInputAddress">  New Client Letter sent: <span class="required_field"> * </span>  </label>
        <input type ='radio'  name='ls' id='ls' value='yes'/>   <label for="exampleInputPassword1">  Yes </label>
     <input type ='radio' name='ls' id='ls'  value='no'/>    <label for="exampleInputPassword1">    No  </label> 
     </div>
	 
 <div class="form-group">
    <label for="exampleInputPassword1">Date<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" name="2nddate" id="2nddate"  placeholder="">
  </div> 
  
  <div class="form-group">
    <label for="exampleInputPassword1">Signed by GGM<span class="required_field"> * </span> </label>
   <input type="text" class="form-control" id="ggm" name="ggm"  placeholder=""> 
    </div> 
    
	
 <div class="form-group">
    <label for="exampleInputPassword1">PLEASE USE SECOND PAGE IF THERE ARE ANY SPECIAL REQUIREMENTS FOR INVOICING<span class="required_field"> * </span> </label>
    <label for="exampleInputPassword1"><h4><b>INVOICING REQUIREMENTS</b></h4></label>
    <label for="exampleInputPassword1">Client Name To Be Invoiced If Different From Subcontract Name:<span class="required_field"> * </span> </label>
    <input type="text" class="form-control" id="clientname" name="clientname" placeholder="">
  </div> 
  
   <div class="form-group">
   	<label for="exampleInputAddress">Address For Invoices To Be Sent If Different From Site Address: <span class="required_field"> * </span> </label>
    <textarea class="form-control" id="addforinvoice"  name="addforinvoice" rows='5' cols='35' ></textarea>
  </div> 
	
	
  <div class="form-group">
   	<label for="exampleInputAddress">Any Special Break Up Required On The Invoice:<span class="required_field"> * </span> </label>
    <textarea class="form-control"   id="anyspecialbreak" name="anyspecialbreak" rows='5' cols='35' ></textarea>
  </div> 
  
  <div class="form-group">
   	<label for="exampleInputAddress">Name Of Accounts Payable Person And Phone No:<span class="required_field"> * </span>  </label>
    <textarea class="form-control"  id="nameofacct" name="nameofacct" rows='5' cols='35' ></textarea>
  </div> 
  
  <div class="form-group">
   	<label for="exampleInputAddress">Any Special Payment Terms Negotiated:<span class="required_field"> * </span> </label>
    <textarea class="form-control"  id="anyspectialpay" name="anyspectialpay" rows='5' cols='35' ></textarea>
  </div> 
  
 
	  <div class="form-group">
    
    <input type="submit" align='right' class="btn btn-xs btn-default btyellow" style="height:35px;" name='add' value="Add Subcontract"/>
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
    <script>
    function chkNumericin()
 {
    
	 var e = event || evt; 
     
    var charCode = e.which || e.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57 || charCode > 107 || charCode > 219 ||          charCode > 221) && charCode != 40 && charCode != 32 && charCode != 41 && (charCode < 43 || charCode > 46)) {
	
		alert('Please enter only numbers and dot');
        if (window.event) //IE
            window.event.returnValue = false;
        else //Firefox
            e.preventDefault();
    }

    return true;
}
   </script> 
   
     
</body>