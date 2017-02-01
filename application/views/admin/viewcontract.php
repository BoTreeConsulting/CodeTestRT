<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Staff</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <!--header including starts here-->
	    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	    <style type="text/css" media="print">
        @page 
        {
            size: auto;   /* auto is the current printer page size */
            margin: 0mm;  /* this affects the margin in the printer settings */
        }

        body 
        {
            background-color:#FFFFFF; 
            border: solid 1px black ;
            margin: 0px;  /* the margin on the content before printing */
       }
    </style>
	   
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
			contact: "required",
			coc: "required",
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
			coc: "Please enter contract opertions contact",
			annmoncont: "Please enter annual & monthly price ",
			address: "Please enter address",
			contact: "Please enter contact",
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
	
	<!--ajax for customer select option-->
    <script type="text/javascript">
        $(document).ready(function()
        {
            $("#cname").on("change",function(){
                var customer_id = $("#cname").val();
				
                $.ajax({
                    type:"POST",
                    url:"<?php echo site_url('admin/get_venues'); ?>", //controller url
                    data:"customer_id="+customer_id,
                    success:function(data)
                    {
					
                        $('#venue').html(data);
                    }
                });
            });
            
           
            
        });
    </script>



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

</script-->	  
	  
	  
       
  </head>
  <body>
  <!-- TO CHECK VALUES COMING OR NOT-->
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?-->
       <!-- TO CHECK VALUES COMING OR NOT-->
	   
	   <style>
		.ff1{width:113px !important;}
		
		@media only screen and (max-width: 1100px) {
		.ff1 {width: 82px !important;}
		@media only screen and (max-width: 640px) {
		.ff1 {width: 106px !important;}
		}
		
	
	  </style>  
	   
   <?php 
   $ids = $data[0]['contract_id'];
     //echo "<h1>".$ids."</h1>";
	 //echo "select * from tbl_contract_labour where contract_id='$ids'";
	 $query = mysql_query("select * from tbl_contract_labour where contract_id='$ids'");
	 
	
	
	 /*$this->db->select('*');	 
	 $this->db->from('tbl_contract_labour');	 
	 $this->db->where('id',$ids);
     $record=$this->db->get()->result_array();
	 foreach($record as $row){
	 echo"<pre>";print_r($row);echo"</pre>";
	 }*/
   ?>
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
    
    <div class="col-md-10 col-sm-9" style="padding:0;">
	<div id="path2" class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Contracts List /</span><span>View Contract Information</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1" id="path3" > <a href="<?php echo base_url();?>admin/manage_contracts" style="color:#FFF">Manage Contracts </a>/ <span>View Contract Information</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div align="right" id="print"><a href="" onclick="myFunction()"><img src="<?php echo base_url("assets/site_images/print.png");?>" width="30px;" title="print"></a></div>
		<div class="col-md-12">
		<form role="form"  class="myForm" method='post'  enctype="multipart/form-data" >
		
			<div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
    <label for="exampleInputPassword1">Customer Name :
	<?php $customerid = $data[0]['contract_customer']; ?>
	
	  
   
      
	   <?php foreach($customer as $row){?>
     <?php if($row['ac_id']==$data[0]['contract_customer']){ echo $row['ac_name'];}?>
	   <?php } ?>
 
   </div>
   <input type="hidden" class="form-control"  name="qistype" id="qistype" value="normal qis" >
   

              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Venue  : </label>
				<?php
				$venueid=$data[0]['contract_venue'];
          $q=mysql_query("select av_id,av_venue_name from tbl_venue where av_id='$venueid'");
          $vdata=mysql_fetch_array($q);
		  //print_r($vdata[0]);
		  ?>
		  <?php echo $vdata['av_venue_name'];?>
   
              </div>
            </div>
  </div>
		
		
		
  <div class="form-group" >
    <label for="exampleInputDate">Date Submitted : </label>
		<?php $datesub=date("M d Y",strtotime($data[0]['contract_submitted_date']));	?>
    <?php echo $datesub; ?>
	
  </div>
  <div class="form-group">
    <label for="exampleInputabn">Client ABN : </label>
    <?php echo $data[0]['contract_clientabn']; ?>
	
	
	
  </div>
  <div class="form-group">
    <label for="exampleInputnoc">Name of Contact  : </label>
   <?php echo $data[0]['contract_contact_person']; ?>
	
  </div>
  <div class="form-group">
    <label for="exampleInputAddress">Address of Contact : </label>
    <?php echo $data[0]['contract_contactperson_addres']; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmial">Email Address : </label>
    <?php echo $data[0]['contract_contactperson_email']; ?>
  </div>
  
  <div class="form-group">
    <label for="exampleInputcoc">Contract Operations Contact : </label>
    <?php echo $data[0]['contract_contactperson_phone']; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPos">Position : </label>
     <?php echo $data[0]['contract_contactperson_position']; ?>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPhone">Phone : </label>
    <?php echo $data[0]['contract_phone']; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputfax">Fax No. : </label>
    <?php echo $data[0]['contract_faxno']; ?>
  </div> 
  
  <div class="form-group">
    <label for="exampleInputann">Annual & Monthly Contarct Price(Excluding Vacanices & GST) : </label>
    <?php echo $data[0]['contract_price']; ?>
	</div>
  
   <div class="form-group">
    <label for="exampleInputccd">Contarct Commencement Date : </label>
	<?php $contcomme=date("M d Y",strtotime($data[0]['contract_commencement_date']));	?>
    <?php echo $contcomme; ?>
  </div> 
  
  <div class="form-group">
    <label for="exampleInputmar">Margin% : </label>
    <?php echo $data[0]['contract_margin']; ?>
  </div>

 <div class="form-group">
    <label for="exampleInputPassword1">Status : </label>
	  <?php echo $data[0]['contract_status']; ?>
	</div>
	
	
  
  <div class="form-group">
    <label for="exampleInputhd">Schedule of Actual Labour (to be calculated in accordance with vacancy factors) </label>
    <!--input type="text" class="form-control" id="exampleInputccd"  placeholder=""-->
  </div>
  
 
 
  
 <!-- new table start here -->
  <div>
	
		<section id="no-more-tables" style="margin: 20px 0px;">
		
		  <table class="table-bordered table-striped table-condensed cf" style="width:70%">
			  <thead class="cf" style="background:#044174; color:#fff;">
				 <tr>
					  <th>Guardian Labour Details</th>
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
						<td data-title="Skills Assessed"><input type='text'    name='hour[]' id='hour' value='<?php echo $data1['hours']; ?>' class="ff1" readonly ></td>
						
						<td data-title="Training Required" ><input type='text' name='days[]' id='days' value='<?php echo $data1['days']; ?>' class="ff1" readonly ></td>
						
						<td data-title="Training Completed" ><input type='text' name='rate[]' id ="rate" value='<?php echo $data1['rate']; ?>' class="ff1" readonly ></td>
						
						<td data-title="Training Completed" ><input type='text' name='amount[]' id="amount" value='<?php echo $data1['amount']; ?>' class="ff1" readonly  ></td>
						
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
  
  <!-- new table end here 
	        [contract_fmservices] => yes
            [contract_quote] => 54251732847ad6554aae00ecfc35c868.jpeg
            [contract_facily_mmanager] => yes
            [contract_area_cleaned] => yes
            [contract_subcontract] => erer
            [contract_areamanager] => rer
            [contract_who_sold] => erer
            [contract_comments] => erre
            [contract_letter_sent] => yes
            [contract_sent_date] => 2014-12-17 00:00:00
            [contract_signedby] => 0
            [contract_clientname] => rer
            [contract_address_invoice] => erer
            [contract_special_breakup] => erre
            [contract_account_name] => er
            [contract_special_payments] => rer
            [contract_createdby] => 3
            [contract_createdon] => 2014-12-23 03:07:41
            [contract_modifiedby] => 3
            [contract_modifiedon] => 2014-12-23 03:07:41
            [contract_status] => Active -->
	
	
	
	 <div class="form-group">
	   <h5>Guardian Facility Management Services</h5>
	  <label for="exampleInputhtc">  Has the Client been provided with any costings for FM services : </label>
	  <?php echo $data[0]['contract_fmservices']; ?>
	 
     </div>
	 
   
     <img src="<?php echo base_url();?>assets/contracts/<?php echo $data[0]['contract_quote']; ?>" width="50px" height="50px" />
	  
	   <!--div class="form-group">
	    <label for="exampleInputPassword1" id="text">  If Yes, please attach details of quotation and provide to FM Manager </label>
       <input type="file" class="exampleInputfile" name='attach' id="attach"  value="">
	   <input type="hidden" class="exampleInputfile" name='oldattach' id="attach"  value="<?php// echo $data[0]['contract_quote']; ?>">
       </div-->
	 
	 
	 <div class="form-group">
	   
	   <label for="exampleInputPassword1"> Has the Facility Manager been advised of Client/Contract details :</label>
	   <?php echo $data[0]['contract_facily_mmanager']; ?></br>

     </div>
	 
	 
	 <div class="form-group">
	   
	   <label for="exampleInputPassword1"> Is the full area to be cleaned from commencement date : </label>
	   <?php echo $data[0]['contract_area_cleaned']; ?>
	   
     </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Sub Contractor  :  <?php echo $data[0]['contract_subcontract']; ?></label>
   
  </div> 
  
  <div class="form-group">
    <label for="exampleInputPassword1">Area Manager : </label>
	<?php echo $data[0]['contract_areamanager']; ?>
   </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Who Sold Contract</label>
	<?php echo $data[0]['contract_who_sold']; ?>
    
  </div> 
  
   <div class="form-group">
   
	<label for="exampleInputAddress"> Comments-(Special Conditions eg. Shampoo Carpets, etc…Included in Contract) : <?php echo $data[0]['contract_comments']; ?></label> 
      	</div> 
	
	
	
	
	 <div class="form-group">
	   
	 <label for="exampleInputAddress">  New Client Letter sent :  </label>
	 <?php echo $data[0]['contract_letter_sent']; ?>
        
     </div>
	 
 <div class="form-group">
    <label for="exampleInputPassword1">Date : </label>
	<?php $sentdate=date("M d Y",strtotime($data[0]['contract_sent_date']));	?>
    <?php echo $sentdate; ?>
  </div> 
  
  <div class="form-group">
    <label for="exampleInputPassword1">Signed by GGM : </label>
	<?php echo $data[0]['contract_signedby']; ?>
    
  </div> 
    
	
 <div class="form-group">
    <label for="exampleInputPassword1">PLEASE USE SECOND PAGE IF THERE ARE ANY SPECIAL REQUIREMENTS FOR INVOICING</label>
    <label for="exampleInputPassword1"><h4><b>INVOICING REQUIREMENTS</b></h4></label>
    <label for="exampleInputPassword1">Client Name To Be Invoiced If Different From Contract Name : </label>
	<?php echo $data[0]['contract_clientname']; ?>
    
  </div> 
  
   <div class="form-group">
   	<label for="exampleInputAddress">Address For Invoices To Be Sent If Different From Site Address : </label>
  <?php echo $data[0]['contract_address_invoice']; ?>
  </div> 
	
	
  <div class="form-group">
   	<label for="exampleInputAddress">Any Special Break Up Required On The Invoice : </label>
  <?php echo $data[0]['contract_special_breakup']; ?>
  </div> 
  
  <div class="form-group">
   	<label for="exampleInputAddress">Name Of Accounts Payable Person And Phone No : </label>
   <?php echo $data[0]['contract_account_name']; ?>
  </div> 
  
  <div class="form-group">
   	<label for="exampleInputAddress">Any Special Payment Terms Negotiated : </label>
  <?php echo $data[0]['contract_special_payments']; ?>
  </div> 
 
<?php
         $id = $data[0]['contract_createdby'];
		  $id1 = $data[0]['contract_modifiedby'];
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
  <?php $createdon=date("M d Y",strtotime($data[0]['contract_createdon']));	?>
       <label for="exampleInputPassword1">Created on</label> : <?php echo $createdon;?>
  </div>
  
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Modified By</label> : <?php echo $modifiedname;?>
  </div>
  
    
  
  <div class="form-group">
  <?php $modifiedon=date("M d Y",strtotime($data[0]['contract_modifiedon']));	?>
    <label for="exampleInputPassword1">Modified on</label> : <?php echo $modifiedon;?>
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
    <div class="col-md-12 footer" id="footer">
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