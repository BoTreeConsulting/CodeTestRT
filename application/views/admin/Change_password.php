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
<script type="text/javascript" >
function validateForm()
{
	var c=document.forms["change_password"]["cur_Password"].value;
	  if (c==null || c=="")
	  {
	  alert(" Enter Current Password");
	 // document.getElementById("cur_Password").focus();
	  return false;
	  }
var a=document.forms["change_password"]["Password"].value;
	  if (a==null || a=="")
	  {
	  alert("Enter New Password");
	  //document.getElementById("Password").focus();
	  return false;
	  }  
var b=document.forms["change_password"]["passconf"].value;
	if (b==null || b=="")
	  {
	  alert(" Enter confirm password");
	  //document.getElementById("passconf").focus();
	  return false;
	  }
 if(a!=b){
	  alert("password confirm password not matched");
	  //document.getElementById("passconf").focus();
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
    	<div class="headtext1"> Admin Settings / <span> Account Settings</span></div>
        <div class="mtextarea" >
        <h2>Change Password</h2>
        <div class="container">
    <div>
    	<div class="container" style="padding:30px;">
    <?php echo $output; ?>
    <div id="infoMessage"><?php echo $this->session->flashdata('message');?></div>
<?php ?><?= form_error('invalid'); ?>
 <div id="form_error" class="formerror"><p><?php echo validation_errors(); ?></p></div>
<form  name="change_password" id="change_password" action="" method="POST" onSubmit="return validateForm()" style="margin-top:-10px;">
                            <input name="frmSubmitR" type="hidden" id="frmSubmitR" value="yes" />
 <fieldset>
    <!--div id="legend">
      <legend class="">Admin Change Password</legend>
    </div-->
<div class="control-group">
 <label class="control-label"  for="cur_password">Current Password&nbsp;*</label>
  <div class="controls">
        <input type="password" name="cur_Password" value="" placeholder="" class="input-xlarge" style="height:32px;">
      </div>
    </div>
   <div class="control-group">
      <label class="control-label" for="Password"> New Password&nbsp;*</label>
      <div class="controls">
        <input type="password" name="Password" value="" placeholder="" class="input-xlarge" style="height:32px;">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="password">Confirm Password&nbsp;*</label>
      <div class="controls">
        <input type="password" name="passconf" value="" placeholder="" class="input-xlarge" style="height:32px;">
      </div>
    </div>
  <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn" type="submit" name="submit" value="submit">Submit</button>
      </div>
    </div>
  </fieldset>
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