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
      <link rel="stylesheet" type="text/css" href="<?=site_url('/assets/js/popeasy/css/normalize.css')?>">
      <link rel="stylesheet" type="text/css" href="<?=site_url('/assets/js/popeasy/css/main.css')?>">

      <!--     <script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>-->
      <script type='text/javascript' src='<?=site_url('/assets/js/popeasy/js/jquery.modal.js')?>'></script>
      <script type='text/javascript' src='<?=site_url('/assets/js/popeasy/js/site.js')?>'></script>
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
th {
	background: url("../img/bg_th.png") repeat-x scroll center top #E0E0E0;
	font-size: 12px;
	text-shadow: 1px 1px 1px #FFFFFF;
}
th, td {
	padding: 6px;
	text-align: left;
}
</style>
<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script-->

      </head>
      <body>
<div class="col-lg-12 navbar-inner"> <a class="brand"><img src=" <?php echo base_url("assets/site_images/admin-logo2.png");?>"  style="vertical-align:middle;"></a>
        <div class="nav-collapse collapse">
    <p class="navbar-text pull-right" style="margin-top:-11px;">Welcome <span>
      <?php  echo $this->session->userdata("admin_name");?>
      </span> <a href="<?=site_url('/admin/logout')?>" class="">Logout</a></p>
  </div>
      </div>
<div class="col-md-12">
        <?php 
	include "left-menu.php";
	?>
        <div class="col-md-9 rightcol" >
    <div class="headtext1"> Manage Listings / <span><a style="color:#FFF" href="<?=site_url('/admin/manage_items')?>">Manage Listings</a></span></div>
    <div class="mtextarea"> 
            <!--h2>Admin Panel</h2-->
            <div>
        <div class="tablewidth" style="width:100%;padding:20px;" >
		<a href="<?=site_url('/admin/manage_items')?>" class="gobacktousers">Go Back To Manage Listings</a>
        <form name="itemstatus" id="itemstatus" method="post" onSubmit="return validateForm()">
        <input name="frmSubmitR" type="hidden" id="frmSubmitR" value="yes" />
        <h3>Active / Deactive Items</h3>
        <div class="control-group">
 <label class="control-label"  for="item_status"><span>Status&nbsp;*</span></label>
  <div class="controls">
  <select  name="item_status" id="item_status">
  <?php 
  for($i=0;$i<count($item_settings);$i++){
  $status=$item_settings[$i]->status;
  
  if($status=="Active"){
  ?>
  <option selected="selected" value="<?php echo $item_settings[$i]->status;?>"><?php echo $item_settings[$i]->status;?></option>
  <option value="Deactive">Deactive</option>
  <?php }else//{?>
   
  <!--option selected="selected" value="<?php //echo $item_settings[$i]->status;?>"><?php //echo $item_settings[$i]->status;?></option>
  <option  value="Active">Active</option-->
  <?php //}
    if($status=="Deactive"){
  ?>
  <option selected="selected" value="<?php echo $item_settings[$i]->status;?>"><?php echo $item_settings[$i]->status;?></option>
  <option  value="Active">Active</option>
  <?php }//else{?>
  <!--option selected="selected" value="<?php //echo $item_settings[$i]->status;?>"><?php //echo $item_settings[$i]->status;?></option>
   <option value="Deactive">Deactive</option-->
  <?php //}?>
  
  
  
  
  
  
 
  <?php }?>
  </select>
  <button type="submit" name="submit" id="submit" value="save" class="btn btn-primary">Save</button>
  
  </form>
    </div>
    </div>
        
        </div>      
      </div>
            
          </div>
  </div>
        <div class="clear"></div>
        <div class="col-md-12 footer">
    <div class="headtext1">© Copyright 2014 HasBeenUsed </div>
  </div>
      </div>
</body>
