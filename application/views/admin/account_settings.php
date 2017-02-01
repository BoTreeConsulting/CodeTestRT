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
    
    
      <!-- javascripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<script type="text/javascript">
function validateForm()
{
var c=document.forms["emailform"]["email"].value;

 if (c==null || c=="")
	  {
	  alert(" Email Id Required");
	  document.getElementById("email").focus();
	  return false;
	  }
/*var atpos=c.indexOf("@");
var dotpos=c.lastIndexOf(".");
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(c))  
 {  
     return true;  
  }else{  
    alert(" Invalid Email Address!");
	document.getElementById("email").focus();  
  return  false;
 }*/
  
  
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
    	<div class="headtext1">Admin Settings / <span>Account Settings </span></div>
        <div class="mtextarea" >
        <h3>Change Email</h3>
        <div class="container">
    <div>
    	<div class="container" style="padding:30px;">
   <?php
 for ($i = 0; $i <count($account_settings); $i++) 
 {
?>
    <div id="infoMessage"><?php echo $this->session->flashdata('message');?></div>
<?php ?><?= form_error('invalid'); ?>
 <div id="form_error" class="formerror"><p><?php echo validation_errors(); ?></p></div>
<form  name="emailform" id="emailform" action="" method="POST"  onsubmit="return validateForm()">
                            <input name="frmSubmitR" type="hidden" id="frmSubmitR" value="yes" />                         
 <fieldset>
<div class="control-group">
 <label class="control-label"  for="admin_email"><span>Email Id&nbsp;*</span></label>
  <div class="controls">
    <input type="text" name="email" id="email" value="<?php echo $account_settings[$i]->admin_email; ?> " placeholder="" class="input-xlarge" style="height:32px;">
  </div>
    </div>
  <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn" type="submit" name="submit" value="update">Update</button>
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