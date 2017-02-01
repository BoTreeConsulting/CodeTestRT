<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>HasBeenUsed Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <link href="<?=site_url('/assets/css/bootstrap-combined.min.css')?>" rel="stylesheet">
       <link href="<?=site_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet">
       <link href="<?=site_url('/assets/css/bootstrap.css')?>" rel="stylesheet">
       <link href="<?=site_url('/assets/css/loyalstyle.css')?>" rel="stylesheet">
       <link href="<?=site_url('/assets/css/styles.css')?>" rel="stylesheet">
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	   <script src="<?=site_url('/assets/css/menu_jquery.js')?>"></script>
       
       
       
       

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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<script type="text/javascript" >
function validateForm()
{
	var c=document.forms["site_settings"]["sitename"].value;
	  if (c==null || c=="")
	  {
	  alert(" Site Name Required");
	 document.getElementById("sitename").focus();
	  return false;
	  }
	var d=document.forms["site_settings"]["metadescription"].value;
	if (d==null || d=="")
	  {
	  alert(" Home Page Meta Description Required");
	 document.getElementById("metadescription").focus();
	  return false;
	  } 
 
}
</script>
  </head>
  <body>
   
   <div class="col-lg-12 navbar-inner">
          <a class="brand"><img src=" <?php echo base_url("assets/site_images/admin-logo2.png");?>"  style="vertical-align:middle;"></a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">Welcome <span><?php  echo $this->session->userdata("admin_name");?></span> <a href="<?=site_url('/admin/logout')?>" class="">Logout</a></p>
          </div>
    </div>
    <div class="col-md-12">
    <?php 
	include "left-menu.php";
	?>
    
    <div class="col-md-9 rightcol ">
    	<div class="headtext1">Banner Management / <span><a style="color:#FFF" href="<?=site_url('/admin/banner_managent')?>">Manage Banners</a></span></div>
        <div class="mtextarea" >
        <h3>Banner Transition Settings</h3>
        <div class="container">
    <div>
    	<div class="container" style="padding:30px;">
   <?php
 for ($i = 0; $i <count($banner_settings); $i++) 
 {
?>
    <div id="infoMessage"><?php echo $this->session->flashdata('message');?></div>
<?php ?><?= form_error('invalid'); ?>
 <div id="form_error" class="formerror"><p><?php echo validation_errors(); ?></p></div>
<form  name="banner_settings" id="banner_settings" action="" method="POST"  onSubmit="return validateForm()">
                            <input name="frmSubmitR" type="hidden" id="frmSubmitR" value="yes" />
 <fieldset>
 
<div class="control-group">
 <label class="control-label"  for="animation_speed"><span>Animation Speed</span></label>
  <div class="controls">
    <input type="text" name="animation_speed" id="animation_speed" value="<?php echo $banner_settings[$i]->Animation_speed; ?> " placeholder="" class="input-xlarge" style="height:32px;">
  </div>
    </div>
     <div class="control-group">
 <label class="control-label"  for="Select Animation"><span>Animation Type</span></label>
  <div class="controls">
  <select  name="animation_type" id="animation_type">
  <option value="Fade">Fade</option>
   <option value="Slide">Slide</option>
    <option value="Swing">Swing</option>
  </select>
  </div>
  </div>
  <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn" type="submit" name="submit" value="save">Change</button>
      </div>
    </div>
  </fieldset>
  <?php }?>
</form>
</div> 
    </div>
</div> 
        	
            <div class="mtext">
            	<div style=" margin-bottom:17px;">
                    <!--a href="#" class="btn btn-xs btn-default btyellow pull-right">Add New</a-->
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="dbshadow"></div>
        
    </div>
    <div class="clear"></div>
    <div class="col-md-12 footer">
    	<div class="headtext1">© Copyright 2014 HasBeenUsed </div>
    </div>
    </div>
</body>










  </body>
</html>