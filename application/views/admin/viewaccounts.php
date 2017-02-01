<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Service Venue</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <?php include("includes/header_css.php"); ?>
      

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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Accounts /</span><span>View Account Information</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_accounts" style="color:#FFF">Manage Accounts </a>/ <span>View Accounts</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		
		 <form role="form"  method="POST" id="account" enctype="multipart/form-data" >
		 <div class="col-md-6">
		 <div class="form-group">
    <label for="exampleInputPassword1">Customer name:</label>
    
	   <?php 
	    $cid=$account[0]->cust_id;
		$customer=$this->adminmodel->edit_customers($cid);
		echo $customer[0]['ac_name'];
	   
	    ?>
   
   </div>
   </div>
    <div style="clear:both;"></div>
   <div class="col-md-6">
	    <div id="button_pro">
		  <div class="form-group" id='invoices_1'>
		  <label for="input_1" id='input_1'>Invoices: </label>
		  <ul>
		  <?php 
			for($i=0;$i<count($ainvoice);$i++){ 
		  ?>
		<li> <a href="#"><?php  echo $ainvoice[$i]->display_name; ?></a></li>
		  <?php } ?>
		</ul>
  </div>
		

   </div>	
  </div>
<div style="clear:both;"></div>
<div class="col-md-6">
<div id="button_pro1">
<div class="form-group" id='quote_1'>
	<label for="quote_1" id="quote_1">Quotations:</label>
	<ul>
	  <?php 
	for($i=0;$i<count($aquotation);$i++){ 
	  ?>
		<li><a href="#"> <?php echo $aquotation[$i]->display_name; ?></a></li>
		  <?php } ?>
	</ul>
</div>
</div>
</div> 
 
 
 
  <div style="clear:both;"></div>
  <div class="col-md-6">

</div>
</form>
		</div>
	

		</div>
            
        </div>
        <div class="dbshadow"></div>
        
    </div>
     <?php include('includes/footer.php'); ?>   
    </div>
</body>


 