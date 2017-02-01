<!DOCTYPE html>
<?php session_start();?>
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
       
  <style>
	.addrtext{font-size: 27px; padding: 9px 0px; margin-top: -30px; font-weight: 400;}
	@media only screen and (max-width: 800px) {
	.addrtext{margin-top: 10px;}
	
	}
  </style>
  
  </head>
  
  <body>
  <!-- TO CHECK VALUES COMING OR NOT-->
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?-->
    <!-- TO CHECK VALUES COMING OR NOT-->
  
   
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
    	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Dashboard / </span><span>Management Dashboard</span></div>
        <?php 
		//if($this->session->userdata("usert_type")!='staff')
		//{
		?>
        <div class="mtextarea" >
        	<h2>Permission <span>!</span></h2>
      

    <style>
      #map-canvas {
        height: 700px;
        margin: -20px 0 0 0;
        padding: 0px
      }
	  
    </style>
	
	
	 
	 <!--LOCATION PICKER STRATS HERE-->
	  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
      <!--script src="https://code.jquery.com/jquery-1.10.2.min.js"></script-->
      <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
      <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
	  <script src="<?php echo base_url();?>assets/try/locationpicker.jquery.js"></script> 
	  <!--LOCATION PICKER END HERE-->
	
	
	
	 
 
    <div style="overflow: auto; padding: 20px 0px;">
		<div class="col-md-9">
			<h2>You don't have permission <span>!</span></h2>
		</div>
		
  
  	
</body>