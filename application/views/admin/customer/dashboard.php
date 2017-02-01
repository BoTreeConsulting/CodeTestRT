<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <link href="<?php echo site_url('/assets/css/bootstrap-combined.min.css')?>" rel="stylesheet">
       <link href="<?php echo site_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet">
       <link href="<?php echo site_url('/assets/css/bootstrap.css')?>" rel="stylesheet">
       <link href="<?php echo site_url('/assets/css/loyalstyle.css')?>" rel="stylesheet">
	   <link href="<?php echo site_url('/assets/css/font-awesome.min.css')?>" rel="stylesheet">
       <link href="<?php echo site_url('/assets/css/styles.css')?>" rel="stylesheet">
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	   <script src="<?php echo site_url('/assets/css/menu_jquery.js')?>"></script> 
	
	
  


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
	  
	  <script>
		function checkAll(ele) {
			 var checkboxes = document.getElementsByTagName('input');
			 if (ele.checked) {
				 for (var i = 0; i < checkboxes.length; i++) {
					 if (checkboxes[i].type == 'checkbox') {
						 checkboxes[i].checked = true;
					 }
				 }
			 } else {
				 for (var i = 0; i < checkboxes.length; i++) {
					 console.log(i)
					 if (checkboxes[i].type == 'checkbox') {
						 checkboxes[i].checked = false;
					 }
				 }
			 }
		 }
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
    
    <div class="col-md-10 rtcol">
    	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Customer Panel / <span>Dashboard  </span>
		
		</div>
    <?php $staffid; ?>
        <div class="mtextarea" >
        	<h2>Dashboard  <span>Quick links</span></h2>
     <style>
	 .admbtn a
	 {
		padding: 14px 5px 15px 5px;
		height:150px;
	 }
	 </style>
		  
				<div class="widgetbox admbtn">
					<a href="<?php echo base_url(); ?>customer/myprofile">
					<span class="fa fa-user"></span>
					<p >My profile</p>
					</a>
				</div>
		


				<div class="widgetbox admbtn" >
					<a href="<?php echo base_url(); ?>customer/change_pwd">
					<span class="fa fa-certificate"></span>
					<p >Change Password</p>
					</a>
				</div>
			
				
			
				

				
				
				
			
				<div class="widgetbox admbtn">
					<a href="<?php echo base_url(); ?>customer/customer_qis">
					<span class="fa fa-certificate"></span>
					<p >QIS</p>
					</a>
				</div>
			
				
				
				
				
			
				
				
				
			
				<div class="widgetbox admbtn">
					<a href="<?php echo site_url('/customer/invoices_list')?>">
					<span class="fa fa-pencil-square-o"></span>
					<p >Invoices</p>
					</a>
				</div>
		
				<div class="widgetbox admbtn">
					<a href="<?php echo site_url('/customer/quotations_list')?>">
					<span class="fa fa-pencil-square-o"></span>
					<p>Quotations</p>
					</a>
				</div>
				
		
					<div class="widgetbox admbtn">
					<a href="#">
					<span class="fa fa-pencil-square-o"></span>
					<p>Complaints & Resolutions</p>
					</a>
				</div>
				
				
				
		<div class="widgetbox admbtn">
					<a href="<?php echo base_url(); ?>admin/logout">
					<span class="fa  fa-lock"></span>
					<p >Logout </p>
					</a>
				</div>
				
			<?php echo base64_decode(base64_decode("TVRJek5BPT0=")); ?>	
				
				<div class="clear"></div> 
            </div>
			
			<div class="">
    
       
    </div>
    </div> 
	
			
			

         
        <div class="dbshadow"></div>
        
    </div>
	
	
	
	
	
    <div class="clear"></div>
    <div class="col-md-12 footer">
    	<div class="headtext1">© Copyright 2014 Guardian Property Service</div>
    </div>
    </div>
    
    
    
    
</body>