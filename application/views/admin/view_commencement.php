<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Commencements</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/header_css.php"); ?>
	   
	   
	   
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
    
    <div class="col-md-10 rtcol">
	<div class="headtext1" id="path2"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Commencement Checklist /</span> <span>View Commencement Checklist</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1" id="path3"><a href="<?php echo base_url();?>admin/manage_commencement" style="color:#FFF"> Manage Commencement Checklist </a>/<span>View Commencement Checklist</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div align="right" id="print"><a href="" onclick="myFunction()"><img src="<?php echo base_url("assets/site_images/print.png");?>" width="30px;" title="print"></a></div>
		<div class="col-md-6">
		
		 <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
    <label for="exampleInputPassword1">Customer Name: </label>
    
	   <?php foreach($customer as $row){?>
        <?php if($comens[0]['commencement_customer']==$row['ac_id']){  echo $row['ac_name'];
	    } }?>
  
   </div>
 
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Venue: </label>
				<?php
				
				$vid=$comens[0]['commencement_venue'];
          $q=mysql_query("select av_id,av_venue_name from tbl_venue where av_id='$vid'");
          $vdata=mysql_fetch_array($q);?>
    <?php echo $vdata['av_venue_name'];?>
              </div>
            </div>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-xs-6 form-group expiration required">
                <label class="control-label">Date Submitted: </label>
				<?php echo $datesub=date("M d Y",strtotime($comens[0]['commencement_submitted_date']));	?>
                <?php //echo $comens[0]['commencement_submitted_date'];?>
              </div>
              <div class="col-xs-6 form-group expiration required">
			  <label class="control-label">Client ABN: </label>
                <?php echo $comens[0]['commencement_clientabn'];?>
              </div>
            </div>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Name of Contact: </label>
    <?php echo $comens[0]['commencement_contract_name'];?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address of Contract: </label>
	<?php echo $comens[0]['commencement_contract_address'];?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address: </label>
    <?php echo $comens[0]['commencement_contract_email'];?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Contract Operations Contact: </label>
    <?php echo $comens[0]['commencement_perations_contract'];?>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-xs-4 form-group cvc required">
                <label class="control-label">Position: </label>
                <?php echo $comens[0]['commencement_position'];?>
              </div>
              <div class="col-xs-4 form-group expiration required">
                <label class="control-label">Phone: </label>
             <?php echo $comens[0]['commencement_phone'];?>
              </div>
              <div class="col-xs-4 form-group expiration required">
                <label class="control-label">Fax No: </label>
                <?php echo $comens[0]['commencement_fax'];?>
              </div>
            </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Annual & Monthly Contract Price (Excluding Vacancies & GST):  </label>
   <?php echo $comens[0]['commencement_price'];?>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-xs-6 form-group expiration required">
                <label class="control-label">Contract Commencement Date:  </label><br>
				<?php echo $datesub=date("M d Y",strtotime($comens[0]['commencement_date']));	?>
                <?php //echo $comens[0]['commencement_date'];?>
              </div>
              <div class="col-xs-6 form-group expiration required">
			  <label class="control-label">Margin%:  </label>
               <?php echo $comens[0]['commencement_margin'];?>
              </div>
            </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Estimated Total Labour Costs </label>
	
	
	

    
	
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

	<td data-title="Days Per Week of Service"><input type="text" readonly class="form-control" value="<?php echo $comens[0]['commencement_days_per_week'];?>" name="daysperweek" id="margin"></td>
						

						
					
						<td data-title="Days Per Week of Service"><input type="text" readonly class="form-control" value="<?php echo $comens[0]['commencement_totalweeks'];?>" name="weeklytoatl" id="margin"></td>
						

						<td data-title="Days Per Week of Service"><input type="text" readonly class="form-control" value="<?php echo $comens[0]['commencement_totalmonths'];?>" name="monthlytotal" id="margin"></td>
						
						
						
						
					</tr>
					</tbody>
		  </table>
		</section>
    
	</div>
	
	
  </div>
  
  <h1 class="formhead1">Guardian Facility Management Services: </h1>
  <hr>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Has the Client been provided with any costings for FM services: </label>
    <div><input type="radio" value="Yes" name="fm" <?php if($comens[0]['commencement_fmservice']=="Yes"){ echo "checked";} ?>>Yes &nbsp;&nbsp;<span><input type="radio" value="No" name="fm" <?php if($comens[0]['commencement_fmservice']=="No"){ echo "checked";} ?>>No </span></div>
	<hr>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">If Yes, please attach details of quotation and provide to FM Manager: </label>
    <div style="position:relative;">
       
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
    <label for="exampleInputEmail1">If No please nominate any vacant areas: </label>
 <?php echo $comens[0]['commencement_nominate_area'];?>
  <div class="form-group">
    <label for="exampleInputEmail1">Sub Contractor: </label>
 <?php echo $comens[0]['commencement_subcontractor'];?>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-xs-6 form-group expiration required">
                <label class="control-label">Area Manager: </label>
            <?php echo $comens[0]['commencement_areamanager'];?>
              </div>
              <div class="col-xs-6 form-group expiration required">
			  <label class="control-label">Who sold Contract: </label>
               <?php echo $comens[0]['commencement_sold_contract'];?>
              </div>
            </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Comments-(Special Conditions eg. Shampoo Carpets, etc…Included in Contract): </label>
 <?php echo $comens[0]['commencement_comment'];?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">New Client Letter sent</label>
    <div><input type="radio" value="Yes" name="letter" <?php if($comens[0]['commencement_letter_sent']=="Yes"){ echo "checked";} ?>>Yes &nbsp;&nbsp;<span><input type="radio" value="No" name="letter" <?php if($comens[0]['commencement_letter_sent']=="No"){ echo "checked";} ?>>No </span></div>
	<hr>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-xs-6 form-group expiration required">
                <label class="control-label">Date: </label>
				<?php echo date("M d Y",strtotime($comens[0]['commencement_sent_date']));?>
             
              </div>
              <div class="col-xs-6 form-group expiration required">
			  <label class="control-label">Signed by GGM: </label>
              <?php echo $comens[0]['commencement_signedby'];?>
            </div>
  </div>
  <hr></hr>
  <h1 class="formhead1">INVOICING REQUIREMENTS</h1>
  <hr></hr>
  <div class="form-group">
    <label for="exampleInputEmail1">Client Name To Be Invoiced If Different From Contract Name : </label>
<?php echo $comens[0]['commencement_clientname'];?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address For Invoices To Be Sent If Different From Site Address : </label>
   <?php echo $comens[0]['commencement_address'];?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Any Special Break Up Required On The Invoice : </label>
  <?php echo $comens[0]['commencement_special_breakup'];?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Name Of Accounts Payable Person And Phone No : </label>
    <?php echo $comens[0]['commencement_accountname'];?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Any Special Payment Terms Negotiated : </label>
  <?php echo $comens[0]['commencement_special_payments'];?>
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Status : </label>
	
	<?php echo $comens[0]['commencement_status'];?>
    
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