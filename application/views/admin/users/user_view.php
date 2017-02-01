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
       
  </head>
  <body>
   
   <div class="col-lg-12 navbar-inner">
          <a class="brand"><img src=" <?php echo base_url("assets/site_images/admin-logo2.png");?>"  style="vertical-align:middle;"></a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">Welcome <span><?php  echo $this->session->userdata("admin_name");?></span><a href="<?=site_url('/admin/logout')?>" class="">Logout</a></p>
          </div>
    </div>
    <div class="col-md-12">
    <?php 
	include "left-menu.php";
	?>
    
    <div class="col-md-9 rightcol">
    	<div class="headtext1"> Users Management /  <span><a style="color:#FFF" href="<?=site_url('/admin/users_management')?>">Manage Users</a></span></div>
        <div class="mtextarea">
         <h3>View User</h3><a href="<?=site_url('/admin/users_management')?>" class="">Go Back To Users List</a>
         <div class="container">
    <div>
    	<div class="container" style="padding:30px;">
   <?php

for ($i = 0; $i <count($users_view); $i++) 
 {
	
?>
 <div id="infoMessage"><?php echo $this->session->flashdata('message');?></div>
<?php ?><?= form_error('invalid'); ?>
 <div id="form_error" class="formerror"><p><?php echo validation_errors(); ?></p></div>
<form  name="gen_settings" id="gen_settings" action="" method="POST"  onSubmit="return validateForm()">
                            <input name="frmSubmitR" type="hidden" id="frmSubmitR" value="yes" />
 
 
 <table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td width="28%">First Name</td>
    <td width="4%">:</td>
    <td width="68%"><?php echo $users_view[$i]->first_name;?></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td>:</td>
    <td><?php echo $users_view[$i]->last_name;?></td>
  </tr>
  <tr>
    <td><span class="control-label"><span>Email Address</span>&nbsp;</span></td>
    <td>:</td>
    <td><?php echo $users_view[$i]->email;?></td>
  </tr>
  <tr>
    <td>Street Address</td>
    <td width="4%">:</td>
    <td><?php echo $users_view[$i]->street_address;?></td>
  </tr>
  <tr>
    <td>Zip/Postal Code</td>
    <td>:</td>
    <td><?php echo $users_view[$i]->zip;?></td>
  </tr>
  <tr>
    <td>Country</td>
    <td>:</td>
    <td><?php echo $users_view[$i]->country;?></td>
  </tr>
  <tr>
    <td>State</td>
    <td width="4%">:</td>
    <td><?php echo $users_view[$i]->state;?></td>
  </tr>
  <tr>
    <td>City</td>
    <td>:</td>
    <td><?php echo $users_view[$i]->city;?></td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td>:</td>
    <td><?php echo $users_view[$i]->phone;?></td>
  </tr>
  <tr>
    <td>Date Of Birth</td>
    <td width="4%">:</td>
    <td><?php echo $users_view[$i]->birth_date;?></td>
  </tr>
  <tr>
    <td>User Name</td>
    <td>:</td>
    <td><?php echo $users_view[$i]->user_name;?></td>
  </tr>
  <tr>
    <td>Secret Queston</td>
    <td>:</td>
    <td><?php echo $users_view[$i]->secret_question;?></td>
  </tr>
  <tr>
    <td>Receive News Letters</td>
    <td>:</td>
    <td><?php echo $users_view[$i]->new_letter;?></td>
  </tr>
</table>

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