<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Profit Loss Statement </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
		
      <?php include("includes/header_css.php"); ?>
	  
	  
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
	  
	   
	     <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer").validate({
   
        // Specify the validation rules
        rules: {
            name: "required",
			email: {
                required: true,
                email: true
            },
			client: "required",
			debnumber: "required",
			address: "required",
			contact: "required",
			position: "required",
			phone: "required",
			fax: "required",
			quoteapp: "required",
			nomeofcont: "required",
			datework: "required",
			contractor: "required",
			detofwork: "required",
			areamng: "required",
			commision: "required",
			appbygm: "required",
			appbyopsmng: "required",
			date: "required",
			lesstotalcost: "required",
			eqlprofit: "required",
			
			role: "required"
           
            
        },
        
        // Specify the validation error messages
        messages: {
            client: "Please enter the client",
			email: "Please enter a valid email address",
            username: "Please enter username",
			password: "Please enter password",
			address: "Please enter address",
			contact: "Please enter contact",
			position: "Please enter position",
			phone: "Please enter phone number",
			fax: "Please enter fax number",
            role: "Please Select The Role",
            debnumber: "Please enter debtor number",
            quoteapp: "Please enter quote approverd by",
            nomeofcont: "Please enter name 0f contact",
            datework: "Please enter date work was completed",
            contractor: "Please enter the contractor",
            detofwork: "Please enter details of work",
            areamng: "Please enter the area manager",
            commision: "Please enter the commision",
            appbygm: "Please enter the approved by gm",
            appbyopsmng: "Please enter the approved by ops manager",
            lesstotalcost: "Please enter the less total cost",
            eqlprofit: "Please enter the equal profit",
            date: "Please enter the date"
         
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
       
	   <!--script>
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
       
      </script--> 
	  
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
       
  </head>
  <body>
    <!-- TO CHECK VALUES COMING OR NOT-->
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?-->
   <!--?php  echo"<pre>";print_r($out);echo"</pre>"; ?-->
    
   <?php 
 /*    for($i=0;$i<=6;$i++){
   //echo"<pre>";print_r($out[$i]['pl_itemid']);echo"</pre>";
   $arr = $out[$i]['pl_itemid'];
   //echo"<pre>";print_r($arr);echo"</pre>";
   //echo $arr;  
   $strarr = explode(" ",$arr);
   //echo"<pre>";print_r($strarr);echo"</pre>";
  
 if (in_array("glass", $strarr))
  {
  echo $out[$i]['pl_actual'] ;
  }

   
           }
		   ?>
		   
		 <?php  
		   
		   
		   for($i=0;$i<=6;$i++){
   //echo"<pre>";print_r($out[$i]['pl_itemid']);echo"</pre>";
   $arrin = $in[$i]['pl_itemid'];
   //echo"<pre>";print_r($arr);echo"</pre>";
   //echo $arr;  
   $strarrin = explode(" ",$arrin);
   //echo"<pre>";print_r($strarr);echo"</pre>";
  
 if (in_array("glass", $strarrin))
  {
  echo $in[$i]['pl_actual'] ;
  }

   
           }
		  
		  */
	 ?>
    
   
  
   
 

   <!--?php  echo"<pre>";print_r($in);echo"</pre>"; ?-->
     <!-- TO CHECK VALUES COMING OR NOT-->
  
   
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
	<div class="headtext1" id="path2"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Profit Loss Statement  /</span> <span> View Profit Loss Statement  </span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1" id="path3"><a href="<?php echo base_url();?>admin/manage_stockitems" style="color:#FFF"> Profit Loss Statement  </a>/<span>View Profit Loss </span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
 
		<div class="row">
		<div align="right" id="print" ><a href="" onclick="myFunction()"><img src="<?php echo base_url("assets/site_images/print.png");?>" width="30px;" title="print"></a></div>
		<div class="col-md-8">
		 <form role="form" id="customer" action= "" method="post">
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label class="control-label">Client : </label> <?php echo $data[0]['pls_client'] ?>
              </div>
			  
			  
              <div class="col-md-6 form-group expiration required">
			  <label class="control-label">Debtor Number : </label> <?php echo $data[0]['pls_debtor_no'] ?>
              
              </div>
            </div>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label class="control-label">Address : </label> <?php echo $data[0]['pls_address'] ?>
                
              </div>
              <div class="col-md-6 form-group expiration required">
			  <label class="control-label">Phone no. : </label> <?php echo $data[0]['pls_phone'] ?> 
                </div>
				 <div class="col-md-6 form-group expiration required">
				<label class="control-label" style="margin-top: 16px;">Fax no. : </label> <?php echo $data[0]['pls_faxno'] ?>
               
             
            </div>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label class="control-label">Quote approved by :  </label> <?php echo $data[0]['pls_quote_approvedby'] ?>
              
              </div>
              <div class="col-md-6 form-group expiration required">
			  <label class="control-label">Name of contact :  </label> <?php echo $data[0]['pls_contact_personname'] ?>
               
              </div>
            </div>
  </div>
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label class="control-label">Date work was completed : </label> <?php echo $data[0]['pls_work_complted_on'] ?>
                
              </div>
              <div class="col-md-6 form-group expiration required">
			  <label class="control-label">Contractor : </label> <?php echo $data[0]['pls_contractor'] ?>
                
              </div>
            </div>
  </div>
  		
  
  <div class="form-group">
    <label for="exampleInputEmail1">Details of work </label> <?php echo $data[0]['pls_work_details'] ?>
    
  </div>
	
	<hr>
	<h1 class="formhead1">PROFIT & LOSS REPORT</h1>
	<hr>
	
  <div class="form-group">
    
		<div class="row">
			  <div class="col-md-6">
			  
	<section id="no-more-tables" style="margin:10px 0px;">
		
		  <table class="table-bordered table-striped table-condensed cf">
			  <thead class="cf" style="background:#0C4371; color:#fff; line-height: 21px;">
				 <tr role="row" class="tablesorter-headerRow">
					  <th>OUTGOINGS</th>
					  <th>ACTUAL</th>
				  </tr>
			  </thead>
				<tbody>
				<input type="hidden" name="outgoing" value="outgoing">	
				
				<tr role="row">
				
						<td data-title="OUTGOINGS">SUB-CONTRACTOR</td>
						<input type="hidden" class="" name="item[]" id="" value="subcontract">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvalue[]" id="" value="<?php echo $out[0]['pl_actual'] ?>" ></td>
					
					</tr>
					<tr role="row">
						<td data-title="OUTGOINGS">CARPETS</td>
						<input type="hidden" class="" name="item[]" id="" value="carpets">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvalue[]" id="" value="<?php echo $out[1]['pl_actual'] ?>" ></td>
					</tr>
					<tr role="row">
						<td data-title="OUTGOINGS">GLASS</td>
						<input type="hidden" class="" name="item[]" id="" value="glass">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvalue[]" id="" value="<?php echo $out[2]['pl_actual'] ?>" ></td>
					</tr>
					<tr role="row">
						<td data-title="OUTGOINGS">LANDSCAPING</td>
						<input type="hidden" class="" name="item[]" id="" value="landscap">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvalue[]" id="" value="<?php echo $out[3]['pl_actual'] ?>" ></td>
					</tr>
					<tr role="row">
						<td data-title="OUTGOINGS">WAGES + ONCOSTS</td>
						<input type="hidden" class="" name="item[]" id="" value="wages">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvalue[]" id="" value="<?php echo $out[4]['pl_actual'] ?>" ></td>
					</tr>
					<tr role="row">
						<td data-title="OUTGOINGS">MATERIALS</td>
						<input type="hidden" class="" name="item[]" id="" value="materials">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvalue[]" id="" value="<?php echo $out[5]['pl_actual'] ?>" ></td>
					</tr>
					<tr role="row">
						<td>&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;</td>
					</tr>
					<tr role="row">
						<td>&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;</td>
					</tr>
					<tr role="row">
						<td data-title="OUTGOINGS">TOTAL COSTS</td>
						<input type="hidden" class="" name="item[]" id="" value="totalcost">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvalue[]"  id="" value="<?php echo $out[6]['pl_actual'] ?>" ></td>
					</tr>
					
					</tbody>
		  </table>
		  </section>
		  
		  <div class="form-group">
			<label for="exampleInputEmail1">Less total cost :  </label> <?php echo $data[0]['pls_totalcost'] ?>
			
		  </div>
		  
		  <div class="form-group">
			<label for="exampleInputEmail1">Equals profit : </label> <?php echo $data[0]['pls_equals_profit'] ?>
			
		  </div>
		  
				
			  </div>
			  <div class="col-md-6">
			  
	<section id="no-more-tables" style="margin:10px 0px;">
		
		   <table class="table-bordered table-striped table-condensed cf">
			  <thead class="cf" style="background:#0C4371; color:#fff; line-height: 21px;">
				 <tr role="row" class="tablesorter-headerRow">
					  <th>INCOME</th>
					  <th>ACTUAL</th>
				  </tr>
			  </thead>
				<tbody>
				<input type="hidden" name="incoming" value="incoming">			
				<tr role="row">
						<td data-title="OUTGOINGS">SUB-CONTRACTOR</td>
						<input type="hidden" class="" name="itemi[]" id="" value="subcontract">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvaluei[]" id="" value="<?php echo $in[0]['pl_actual'] ?>" ></td>
					</tr>
					<tr role="row">
						<td data-title="OUTGOINGS">CARPETS</td>
						<input type="hidden" class="" name="itemi[]" id="" value="carpets">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvaluei[]" id="" value="<?php echo $in[1]['pl_actual'] ?>" ></td>
					</tr>
					<tr role="row">
						<td data-title="OUTGOINGS">GLASS</td>
						<input type="hidden" class="" name="itemi[]" id="" value="glass">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvaluei[]" id="" value="<?php echo $in[2]['pl_actual'] ?>" ></td>
					</tr>
					<tr role="row">
						<td data-title="OUTGOINGS">LANDSCAPING</td>
						<input type="hidden" class="" name="itemi[]" id="" value="landscap">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvaluei[]" id="" value="<?php echo $in[3]['pl_actual'] ?>" ></td>
					</tr>
					<tr role="row">
						<td data-title="OUTGOINGS">WAGES + ONCOSTS</td>
						<input type="hidden" class="" name="itemi[]" id="" value="wages">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvaluei[]" id="" value="<?php echo $in[4]['pl_actual'] ?>" ></td>
					</tr>
					<tr role="row">
						<td data-title="OUTGOINGS">MATERIALS</td>
						<input type="hidden" class="" name="itemi[]" id="" value="materials">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvaluei[]" id="" value="<?php echo $in[5]['pl_actual'] ?>" ></td>
					</tr>
					<tr role="row">
						<td>&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;</td>
					</tr>
					<tr role="row">
						<td>&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;</td>
					</tr>
					<tr role="row">
						<td data-title="INCOME">TOTAL INCOME</td>
						<input type="hidden" class="" name="itemi[]" id="" value="materials">
						<td data-title="ACTUAL"><input type="text" class="" name="itemvaluei[]" id="" value="<?php echo $in[6]['pl_actual'] ?>" ></td>
					</tr>
					
					</tbody>
		  </table>
		  
	  </section>
			  
			  </div>
			  
			 
			  <div class="col-md-8">
			  	<div class="form-group">
				<label for="exampleInputEmail1">Area manager : </label> <?php echo $data[0]['pls_area_mgr'] ?>
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Commission : </label> <?php echo $data[0]['pls_commision'] ?>
				
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Approved by GM : </label> <?php echo $data[0]['pls_approvedby_gm'] ?>
				
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Approved by OPS Manager : </label> <?php echo $data[0]['pls_approvedby_opsmgr'] ?>
			
			  </div>
			  
			  <div class="form-group">
				<label for="exampleInputEmail1">Date : </label> <?php echo $data[0]['pls_approvedon'] ?>
				
			  </div>
			  
			  <div class="form-group">
    <label for="exampleInputEmail1">Status : </label> <?php echo $data[0]['pls_status']; ?>
	
   
   </div>
  
  
   <?php
         $id = $data[0]['pls_createdby'];
		  $id1 = $data[0]['pls_modifiedby'];
		 $query=mysql_query("select admin_username from tbl_admin where admin_id='$id'");
		 $dat=mysql_fetch_array($query);
		 $query1=mysql_query("select admin_username from tbl_admin where admin_id='$id1'");
		 $data1=mysql_fetch_array($query1);
		$createdname=$dat['admin_username'];
		$modifiedname=$data1['admin_username'];
		  ?>
   <div class="form-group">
    <label for="exampleInputEmail1">Created By</label> : <?php echo $createdname;?>
   </div>
  
  <div class="form-group">
     <?php $createdon=date("M d Y",strtotime($data[0]['pls_createdon']));	?>
       <label for="exampleInputEmail1">Created on</label> : <?php echo $createdon;?>
  </div>
  
  
  
  <div class="form-group">
    <label for="exampleInputEmail1">Modified By</label> : <?php echo $modifiedname;?>
  </div>
  
    
  
  <div class="form-group">
  <?php $modifiedon=date("M d Y",strtotime($data[0]['pls_modifiedon']));	?>
    <label for="exampleInputEmail1">Modified on</label> : <?php echo $modifiedon;?>
  </div>
			  
			  </div>
			  
			  
			  
		</div>
	
	<div>
		
	</div>
	
	
  </div>


</form>
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
    
	 <!--date picker starts here-->
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
  $(function() {
  
    $( "#date" ).datepicker();
  });
   $(function() {
  
    $( "#datework" ).datepicker();
  });
 
  </script>
    <!--date picker ends here-->
    
    
    
</body>