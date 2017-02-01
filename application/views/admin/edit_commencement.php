<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Commencements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/header_css.php"); ?>
	   
	   
	   
	   <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	   
       
	   <script src="<?php echo base_url();?>assets/css/menu_jquery.js"></script>
	   <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
	  
    <script type="text/javascript">
        $(document).ready(function()
        {
            $("#cname").on("change",function(){
                var customer_id = $("#cname").val();
				
                $.ajax({
                    type:"POST",
                    url:"<?php echo site_url('commencement/get_venues'); ?>", //controller url
                    data:"customer_id="+customer_id,
                    success:function(data)
                    {
					
                        $('#venue').html(data);
                    }
                });
            });
            
           
            
        });
    </script>
       
	   <script>
       var startDate = new Date(2012,1,20);
var endDate = new Date(2012,1,25);
$('#date-start')
    .datepicker()
    .on('changeDate', function(ev){
        if (ev.date.valueOf() > endDate.valueOf()){
            $('#alert').show().find('strong').text('The start date must be before the end date.');
        } else {
            $('#alert').hide();
            startDate = new Date(ev.date);
            $('#date-start-display').text($('#date-start').data('date'));
        }
        $('#date-start').datepicker('hide');
    });
$('#date-end')
    .datepicker()
    .on('changeDate', function(ev){
        if (ev.date.valueOf() < startDate.valueOf()){
            $('#alert').show().find('strong').text('The end date must be after the start date.');
        } else {
            $('#alert').hide();
            endDate = new Date(ev.date);
            $('#date-end-display').text($('#date-end').data('date'));
        }
        $('#date-end').datepicker('hide');
    });
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
			venue: "required",
			submitdate: "required",
			abn: "required",
			contract: "required",
			address: "required",
			email: "required",
			opcontact: "required",
			position: "required",
			phone: "required",
			fax: "required",
			price: "required",
			date: "required",
			comensdate: "required",
			
			
			subcontractor: "required",
			areamanager: "required",
			
			sign: "required",
			account: "required",
			terms: "required",
		      breakup: "required",
			invoiceaddress: "required",
			client: "required",
		
           
            
        },
        
        // Specify the validation error messages
        messages: {
           
           
		    cname: "Please select customer",
			venue: "Please select venue",
			submitdate: "Please select date",
			abn: "Please enter abn",
			contract: "Please enter contract name",
			address: "Please provide address",
			email: "Please enter email",
			opcontact: "Please provide information",
			position: "Please enter position",
			phone: "Please enter phone number",
			fax: "Please fax number",
			price: "Please provide information",
			date: "Please select date",
			comensdate: "Please select date",
			
			subcontractor: "Please enter subcontractor name",
			areamanager: "Please provide information",
			sign: "Please enter sign",
			terms: "Please provide information",
			
			account: "Please provide information",
			breakup: "Please provide information",
			invoiceaddress: "Please provide information",
			client: "Please provide information",
			
		  
           
           
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Commencement Checklist /</span> <span>Edit Commencement Checklist</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_commencement" style="color:#FFF"> Manage Commencement Checklist </a>/<span>Edit Commencement Checklist</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" method="POST" id="customer" novalidate="novalidate" enctype="multipart/form-data">
		 <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
    <label for="exampleInputPassword1">Customer Name<span class="required_field"> * </span></label>
    <select  class="form-control" name="cname" id="cname">
       <option value="">--Select Customer--</option>
	   <?php foreach($customer as $row){?>
       <option value="<?php echo $row['ac_id'];?>" <?php if($comens[0]['commencement_customer']==$row['ac_id']){ echo "selected";} ?>><?php echo $row['ac_name'];?></option>
	   <?php } ?>
   </select>
   </div>
 
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Venue <span class="required_field"> * </span></label>
				<?php
				
				$vid=$comens[0]['commencement_venue'];
          $q=mysql_query("select av_id,av_venue_name from tbl_venue where av_id='$vid'");
          $vdata=mysql_fetch_array($q);?>
    <select class="form-control" name="venue" id="venue"><option value="<?php echo $vdata['av_id'];?>"  ><?php echo $vdata['av_venue_name'];?></option></select>
              </div>
            </div>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-xs-6 form-group expiration required">
                <label class="control-label">Date Submitted <span class="required_field"> * </span></label>
                <input type="text" class="form-control" value="<?php echo date("m/d/Y",strtotime($comens[0]['commencement_submitted_date']));?>" name="submitdate" id="datepicker">
              </div>
              <div class="col-xs-6 form-group expiration required">
			  <label class="control-label">Client ABN <span class="required_field"> * </span></label>
                <input type="text" class="form-control" value="<?php echo $comens[0]['commencement_clientabn'];?>" name="abn" id="abn">
              </div>
            </div>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Name of Contact <span class="required_field"> * </span></label>
    <input type="text" class="form-control" value="<?php echo $comens[0]['commencement_contract_name'];?>"  name="contract" id="contract">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address of Contact <span class="required_field"> * </span></label>
	<textarea class="form-control" rows="3" name="address" id="address" cols="3"><?php echo $comens[0]['commencement_contract_address'];?></textarea>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address <span class="required_field"> * </span></label>
    <input type="text" class="form-control" value="<?php echo $comens[0]['commencement_contract_email'];?>" name="email" id="email" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contract Operations Contact <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="opcontact" value="<?php echo $comens[0]['commencement_perations_contract'];?>"  id="opcontact" >
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-xs-4 form-group cvc required">
                <label class="control-label">Position <span class="required_field"> * </span></label>
                <input type="text" class="form-control" value="<?php echo $comens[0]['commencement_position'];?>" name="position" id="position">
              </div>
              <div class="col-xs-4 form-group expiration required">
                <label class="control-label">Phone <span class="required_field"> * </span></label>
                <input type="text" class="form-control" value="<?php echo $comens[0]['commencement_phone'];?>" name="phone" id="phone">
              </div>
              <div class="col-xs-4 form-group expiration required">
                <label class="control-label">Fax No:</label>
                <input type="text" class="form-control" value="<?php echo $comens[0]['commencement_fax'];?>" name="fax" id="exampleFaxNo">
              </div>
            </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Annual & Monthly Contract Price (Excluding Vacancies & GST) <span class="required_field"> * </span></label>
    <input type="text" class="form-control" name="price" value="<?php echo $comens[0]['commencement_price'];?>" id="exampleInputEmail1" >
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-xs-6 form-group expiration required">
                <label class="control-label">Contract Commencement Date <span class="required_field"> * </span></label>
                <input type="text" class="form-control" value="<?php echo date("m/d/Y",strtotime($comens[0]['commencement_date']));?>" name="comensdate"  id="datepicker1">
              </div>
              <div class="col-xs-6 form-group expiration required">
			  <label class="control-label">Margin%</label>
                <input type="text" class="form-control" value="<?php echo $comens[0]['commencement_margin'];?>" name="margin" id="margin">
              </div>
            </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Estimated Total Labour Costs <span class="required_field"> * </span></label>
	
	
	

    
	
	<div>
		<section id="no-more-tables">
			<table class="table-bordered table-striped table-condensed cf tablesorter tablesorter-blackice" role="grid">
			  <thead class="cf" style="background:#0C4371; color:#fff; line-height: 21px;">
				 <tr role="row" class="tablesorter-headerRow">
					  <th>Days Per Week of Service</th>
					  <th>Total Weekly <br>Cost Ex GST</th>
					  <th>Total Monthly <br>Cost Ex GST </th>
				  </tr>
			  </thead>
				<tbody aria-live="polite" aria-relevant="all">
							
                       
					
				<tr role="row" class="ui-state-default odd">

	<td data-title="Days Per Week of Service"><input type="text" class="form-control" value="<?php echo $comens[0]['commencement_days_per_week'];?>" name="daysperweek" id="margin"></td>
						

						
					
						<td data-title="Days Per Week of Service"><input type="text" class="form-control" value="<?php echo $comens[0]['commencement_totalweeks'];?>" name="weeklytoatl" id="margin"></td>
						

						<td data-title="Days Per Week of Service"><input type="text" class="form-control" value="<?php echo $comens[0]['commencement_totalmonths'];?>" name="monthlytotal" id="margin"></td>
						
						
						
						
					</tr>
					</tbody>
		  </table>
		</section>
    
	</div>
	
	
  </div>
  
  <h1 class="formhead1">Guardian Facility Management Services</h1>
  <hr>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Has the Client been provided with any costings for FM services</label>
    <div><input type="radio" value="Yes" name="fm" <?php if($comens[0]['commencement_fmservice']=="Yes"){ echo "checked";} ?>>Yes &nbsp;&nbsp;<span><input type="radio" value="No" name="fm" <?php if($comens[0]['commencement_fmservice']=="No"){ echo "checked";} ?>>No </span></div>
	<hr>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">If Yes, please attach details of quotation and provide to FM Manager</label>
    <div style="position:relative;">
        <a class='btn btn-primary' href='javascript:;'>
            Choose File...
            <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info"></span>
		<?php echo $comens[0]['commencement_quotation'];?>
		 <input type="hidden" class="form-control" value="<?php echo $comens[0]['commencement_quotation'];?>" name="oldquotation" >
</div>
	<hr>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Has the Facility Manager been advised of Client/Contract details</label>
    <div><input type="radio" value="Yes" name="facilitycontract" <?php if($comens[0]['commencement_facility_manager']=="Yes"){ echo "checked";} ?> >Yes &nbsp;&nbsp;<span><input type="radio" value="No" name="facilitycontract" <?php if($comens[0]['commencement_facility_manager']=="No"){ echo "checked";} ?>>No </span></div>
	<hr>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Is the full area to be cleaned from commencement date</label>
    <div><input type="radio" value="Yes" name="clean" <?php if($comens[0]['commencement_area_cleaned']=="Yes"){ echo "checked";} ?>>Yes &nbsp;&nbsp;<span><input type="radio" value="No" name="clean" <?php if($comens[0]['commencement_area_cleaned']=="No"){ echo "checked";} ?>>No </span></div>
	<hr>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">If No please nominate any vacant areas</label>
    <input type="text" class="form-control" value="<?php echo $comens[0]['commencement_nominate_area'];?>" name="nominate" id="nominate" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Sub Contractor <span class="required_field"> * </span></label>
    <input type="text" class="form-control" value="<?php echo $comens[0]['commencement_subcontractor'];?>" name="subcontractor" id="subcontractor" >
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-xs-6 form-group expiration required">
                <label class="control-label">Area Manager <span class="required_field"> * </span></label>
                <input type="text" class="form-control" value="<?php echo $comens[0]['commencement_areamanager'];?>" name="areamanager" id="areamanager">
              </div>
              <div class="col-xs-6 form-group expiration required">
			  <label class="control-label">Who sold Contract <span class="required_field"> * </span></label>
                <input type="text" class="form-control" value="<?php echo $comens[0]['commencement_sold_contract'];?>" name="sold" id="sold">
              </div>
            </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Comments-(Special Conditions eg. Shampoo Carpets, etc…Included in Contract)</label>
    <textarea class="form-control" rows="3" name="comments" id="comments" cols="3"><?php echo $comens[0]['commencement_comment'];?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">New Client Letter sent</label>
    <div><input type="radio" value="Yes" name="letter" <?php if($comens[0]['commencement_letter_sent']=="Yes"){ echo "checked";} ?>>Yes &nbsp;&nbsp;<span><input type="radio" value="No" name="letter" <?php if($comens[0]['commencement_letter_sent']=="No"){ echo "checked";} ?>>No </span></div>
	<hr>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-xs-6 form-group expiration required">
                <label class="control-label">Date <span class="required_field"> * </span></label>
                <input type="text" class="form-control" value="<?php echo date("m/d/Y",strtotime($comens[0]['commencement_sent_date']));?>" name="date" id="datepicker2">
              </div>
              <div class="col-xs-6 form-group expiration required">
			  <label class="control-label">Signed by GGM <span class="required_field"> * </span></label>
                <input type="text" class="form-control" value="<?php echo $comens[0]['commencement_signedby'];?>" name="sign" id="sign">
              </div>
            </div>
  </div>
  <hr></hr>
  <h1 class="formhead1">INVOICING REQUIREMENTS</h1>
  <hr></hr>
  <div class="form-group">
    <label for="exampleInputEmail1">Client Name To Be Invoiced If Different From Contract Name:<span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="client" id="client" cols="3"><?php echo $comens[0]['commencement_clientname'];?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address For Invoices To Be Sent If Different From Site Address:<span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="invoiceaddress" id="invoiceaddress" cols="3"><?php echo $comens[0]['commencement_address'];?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Any Special Break Up Required On The Invoice:<span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="breakup" id="breakup" cols="3"><?php echo $comens[0]['commencement_special_breakup'];?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Name Of Accounts Payable Person And Phone No:<span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="account" id="account" cols="3"><?php echo $comens[0]['commencement_accountname'];?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Any Special Payment Terms Negotiated:<span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" name="terms" id="terms" cols="3"><?php echo $comens[0]['commencement_special_payments'];?></textarea>
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Status </label>
	<select class="form-control" name="status">
	<option value="Active" <?php if($comens[0]['commencement_status']=="Active"){ echo "selected";}?>>Active</option>
	<option value="Inactive" <?php if($comens[0]['commencement_status']=="Inactive"){ echo "selected";}?>>Inactive</option>
	</select>
    
  </div>

  <button type="submit" name="edit" class="btn btn-primary btn-outline btn-lg">Update</button>
</form></div>
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
    
    
    
</body>