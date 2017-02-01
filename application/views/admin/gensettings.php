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
	var c=document.forms["gen_settings"]["Days_from_remove_db"].value;
	  if (c==null || c=="")
	  {
	  alert(" Days Removed From Database Required");
	 document.getElementById("Days_from_remove_db").focus();
	  return false;
	  }
	var a=document.forms["gen_settings"]["Featured_items_hp"].value;
		if (a==null || a=="")
	  {
	  alert(" Featured Item Hp Required");
	 document.getElementById("Featured_items_hp").focus();
	  return false;
	  }  
	var b=document.forms["gen_settings"]["Recently_items_hp"].value;
	
	if (b==null || b=="")
	  {
	  alert("Recently Items Hp Required");
	 document.getElementById("Recently_items_hp").focus();
	  return false;
	  } 
	var d=document.forms["gen_settings"]["Hot_deals_hp"].value;
	if (d==null || d=="")
	  {
	  alert(" Hot Deals Hp Required");
	 document.getElementById("Hot_deals_hp").focus();
	  return false;
	  } 
var e=document.forms["gen_settings"]["No_of_images_listing"].value;
	if (e==null || e=="")
	  {
	  alert("No of Images Listing Required");
	 document.getElementById("No_of_images_listing").focus();
	  return false;
	  } 
 
 var f=document.forms["gen_settings"]["Max_file_upload_size"].value;
	if (f==null || f=="")
	  {
	  alert(" Maximum File Upload Size Required");
	 document.getElementById("Max_file_upload_size").focus();
	  return false;
	  } 
	  
	  
	  
 
 var g=document.forms["gen_settings"]["Site_defualt_currency"].value;
	if (g==null || g=="")
	  {
	  alert("Site Defualt Currency Required");
	 document.getElementById("Site_defualt_currency").focus();
	  return false;
	  } 
 
 var h=document.forms["gen_settings"]["Set_currency_setting"].value;
	if (h==null || h=="")
	  {
	  alert(" Set Currency Setting Required");
	 document.getElementById("Set_currency_setting").focus();
	  return false;
	  } 
 var i=document.forms["gen_settings"]["Set_currency_display_format"].value;
	if (i==null || i=="")
	  {
	  alert(" Set Currency Display Format Required");
	 document.getElementById("Set_currency_display_format").focus();
	  return false;
	  } 
 var j=document.forms["gen_settings"]["Set_currency_decimal_digits"].value;
	if (j==null || j=="")
	  {
	  alert(" Set Currency Decimal Digits Required");
	 document.getElementById("Set_currency_decimal_digits").focus();
	  return false;
	  } 
/* var k=document.forms["gen_settings"]["Buy_out_method"].value;
	if (k==null || k=="")
	  {
	  alert(" Buy Out Method Required");
	 document.getElementById("Buy_out_method").focus();
	  return false;
	  }*/ 
 var l=document.forms["gen_settings"]["Invoice_header"].value;
	if (l==null || l=="")
	  {
	  alert(" Invoice Header Required");
	 document.getElementById("Invoice_header").focus();
	  return false;
	  } 
 var m=document.forms["gen_settings"]["minimum_reg_age"].value;
	if (m==null || m=="")
	  {
	  alert(" Minimum Register Age Required");
	 document.getElementById("minimum_reg_age").focus();
	  return false;
	  } 
 /*var n=document.forms["gen_settings"]["site_fee"].value;
	if (n==null || n=="")
	  {
	  alert(" Site Fee Required");
	 document.getElementById("site_fee").focus();
	  return false;
	  } */
 
  var n=document.forms["gen_settings"]["No_of_days_email_removal_listing_alert"].value;
	if (n==null || n=="")
	  {
	  alert(" No Of Days Send Email Removal of Item Listing Alert Required");
	 document.getElementById("No_of_days_email_removal_listing_alert").focus();
	  return false;
	  } 
	  if(!n.match(/^\d+/))
        {
        alert("Only Numerics Are Allowed ");
        document.getElementById("No_of_days_email_removal_listing_alert").focus();	
		return false;
        }
	   var n=document.forms["gen_settings"]["Invoice_footer"].value;
	if (n==null || n=="")
	  {
	  alert(" Invoice Footer Required");
	 document.getElementById("Invoice_footer").focus();
	  return false;
	  } 
	   var n=document.forms["gen_settings"]["Not_allowed_keywords"].value;
	if (n==null || n=="")
	  {
	  alert(" Not Allowed Keywords Required");
	 document.getElementById("Not_allowed_keywords").focus();
	  return false;
	  } 
 
    var o=document.forms["gen_settings"]["no_of_featured_items_category_page"].value;
	if (o==null || o=="")
	  {
	  alert("No Of Featured Items On Category Pages");
	 document.getElementById("no_of_featured_items_category_page").focus();
	  return false;
	  } 
	  var z=document.forms["gen_settings"]["image_file_type"].value;
	if (z==null || z=="")
	  {
	  alert("Image File Type");
	 document.getElementById("image_file_type").focus();
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
    	<div class="headtext1">Admin Settings / <span> General Settings</span></div>
        <div class="mtextarea" >
        <h3>Update General Settings</h3>
        <div class="container">
    <div>
    	<div class="container" style="padding:30px;">
   <?php
  // print_r($record);
for ($i = 0; $i <count($general_settings); $i++) 
 {
	
?>
 <div id="infoMessage"><?php echo $this->session->flashdata('message');?></div>
<?php ?><?= form_error('invalid'); ?>
 <div id="form_error" class="formerror"><p><?php echo validation_errors(); ?></p></div>
<form  name="gen_settings" id="gen_settings" action="" method="POST"  onSubmit="return validateForm()">
                            <input name="frmSubmitR" type="hidden" id="frmSubmitR" value="yes" />
 <fieldset>
<div class="control-group">
 <label class="control-label"  for="Days_from_remove_db"><span>No Of Days Removed From Database&nbsp;*</span></label>
  <div class="controls">
    <input type="text" name="Days_from_remove_db" id="Days_from_remove_db"value="<?php echo $general_settings[$i]->Days_from_remove_db; ?>" placeholder="" class="input-xlarge" style="height:32px;width:30px;">
    &nbsp;Day(s)
  </div>
    </div>
   <div class="control-group">
      <label class="control-label" for="Featured_items_hp"><span>No Of Featured Items On Home Page&nbsp;*</span></label>
      <div class="controls">
        <input type="text" name="Featured_items_hp" id="Featured_items_hp" value="<?php echo $general_settings[$i]->Featured_items_hp; ?>" placeholder="" class="input-xlarge" style="height:32px;width:30px;">&nbsp;Item(s)
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="no_of_featured_items_category_page"><span>No Of Featured Items On Category Pages&nbsp;*</span></label>
      <div class="controls">
        <input type="text" name="no_of_featured_items_category_page" id="no_of_featured_items_category_page" value="<?php echo $general_settings[$i]->no_of_featured_items_category_page; ?>" placeholder="" class="input-xlarge" style="height:32px;width:30px;">&nbsp;Item(s)
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="Recently_items_hp"><span>Recently Listed Items Shown On Home Page&nbsp;*</span></label>
      <div class="controls">
        <input type="text" name="Recently_items_hp"  id="Recently_items_hp"value="<?php echo $general_settings[$i]->Recently_items_hp; ?>" placeholder="" class="input-xlarge" style="height:32px;width:30px;">&nbsp;Item(s)
      </div>
    </div>
    <div class="control-group">
 <label class="control-label"  for="Hot_deals_hp"><span>No Of Hot Deals Shown On Home Page&nbsp;*</span></label>
  <div class="controls">
    <input type="text" name="Hot_deals_hp" id="Hot_deals_hp" value="<?php echo $general_settings[$i]->Hot_deals_hp; ?>" placeholder="" class="input-xlarge" style="height:32px;width:30px;">&nbsp;Deal(s)
  </div>
  <div class="control-group">
 <label class="control-label"  for="No_of_images_listing"><span>No Of Images Uploaded Per Listing&nbsp;*</span></label>
  <div class="controls">
    <input type="text" name="No_of_images_listing" id="No_of_images_listing" value="<?php echo $general_settings[$i]->No_of_images_listing; ?>" placeholder="" class="input-xlarge" style="height:32px;width:30px;">&nbsp;Image(s)
  </div>
  </div>
   <div class="control-group">
 <label class="control-label"  for="Max_file_upload_size"><span>Maximum File Upload Size Per Image&nbsp;*</span></label>
  <div class="controls">
    <input type="text" name="Max_file_upload_size" id="Max_file_upload_size" value="<?php echo $general_settings[$i]->Max_file_upload_size; ?>" placeholder="" class="input-xlarge" style="height:32px;width:30px;">&nbsp;MB
  </div>
  </div>
  <div class="control-group">
 <label class="control-label"  for="image_file_type"><span>Image File Type&nbsp;*</span></label>
  <div class="controls">
  <?php 
  $image_file_type = @explode(" | ", $general_settings[$i]->image_file_type);
   ?>
  
  <select multiple name="image_file_type[]" id="image_file_type">
  
  <option value="jpg"   <?php if (in_array("jpg", $image_file_type)) {  echo "selected";  } ?>>jpg</option>
  <option value="png" <?php if (in_array("png", $image_file_type)) {  echo "selected";  }?>>png</option>
  <option value="gif" <?php if (in_array("gif", $image_file_type)) {  echo "selected";  }?>>gif</option>
  </select>
  
   <!-- <input type="text" name="image_file_type" id="image_file_type" value="<?php echo $general_settings[$i]->image_file_type; ?>" placeholder="" class="input-xlarge" style="height:32px;">-->
    
  </div>
  </div>
   <div class="control-group">
 <label class="control-label"  for="Site_defualt_currency"><span>Site Default Currency&nbsp;*</span></label>
  <div class="controls">
    <input type="text" name="Site_defualt_currency" id="Site_defualt_currency" value="<?php echo $general_settings[$i]->Site_defualt_currency; ?>" placeholder="" class="input-xlarge" style="height:32px;">
  </div>
   <div class="control-group">
 <label class="control-label"  for="Set_currency_setting"><span>Set Currency  Settings&nbsp;*</span></label>
  <div class="controls">
    <input type="text" name="Set_currency_setting" id="Set_currency_setting" value="<?php echo $general_settings[$i]->Set_currency_setting; ?>" placeholder="" class="input-xlarge" style="height:32px;">
  </div>
   <div class="control-group">
 <label class="control-label"  for="Set_currency_display_format"><span>Set Currency Display Format&nbsp;*</span></label>
  <div class="controls">
    <input type="text" name="Set_currency_display_format" id="Set_currency_display_format"value="<?php echo $general_settings[$i]->Set_currency_display_format; ?>" placeholder="" class="input-xlarge" style="height:32px;">
  </div>
   <div class="control-group">
 <label class="control-label"  for="Set_currency_decimal_digits"><span>Set Currency Decimal Digits&nbsp;*</span></label>
  <div class="controls">
    <input type="text" name="Set_currency_decimal_digits" id="Set_currency_decimal_digits" value="<?php echo $general_settings[$i]->Set_currency_decimal_digits; ?>" placeholder="" class="input-xlarge" style="height:32px;">
  </div>
   <div class="control-group">
 <label class="control-label"  for="Buy_out_method"><span>Buy Out Method&nbsp;*</span></label>
  <div class="controls">
  <select  name="Buy_out_method" id="Buy_out_method">
  <?php 
  $method=$general_settings[$i]->Buy_out_method;
  if($method=="Buy It NOW"){
  ?>
  <option selected="selected" value="<?php echo $general_settings[$i]->Buy_out_method;?>"><?php echo $general_settings[$i]->Buy_out_method;?></option>
  <option value="MAke An Offer">MAke An Offer</option>
  <option value="Both">Both</option>
  <?php }?>
   <?php if($method=="MAke An Offer"){
  ?>
  <option selected="selected" value="<?php echo $general_settings[$i]->Buy_out_method;?>"><?php echo $general_settings[$i]->Buy_out_method;?></option>
  <option  value="Buy It NOW">Buy It NOW</option>
  <option value="Both">Both</option>
  <?php }?>
   <?php if($method=="Both"){
  ?>
  <option selected="selected" value="<?php echo $general_settings[$i]->Buy_out_method;?>"><?php echo $general_settings[$i]->Buy_out_method;?></option>
  <option  value="Buy It NOW">Buy It NOW</option>
  <option value="MAke An Offer">MAke An Offer</option>
  <?php }?>
  </select>
  </div>
   <div class="control-group">
 <label class="control-label"  for="Invoice_header"><span>Invoice Header Notice&nbsp;*</span></label>
  <div class="controls">
  <textarea name="Invoice_header"  style="width:500px;height:150px;" id="Invoice_header"><?php echo $general_settings[$i]->Invoice_header; ?></textarea>
  </div>
  </div>
   <div class="control-group">
 <label class="control-label"  for="Invoice_footer"><span>Invoice Footer Notice&nbsp;*</span></label>
  <div class="controls">
  <textarea name="Invoice_footer" id="Invoice_footer" style="width:500px;height:150px;" ><?php echo $general_settings[$i]->Invoice_footer; ?></textarea>
  </div>
  </div>
   <div class="control-group">
 <label class="control-label"  for="minimum_reg_age"><span>Minimum Registration Age&nbsp;*</span></label>
  <div class="controls">
    <input type="text" name="minimum_reg_age" id="minimum_reg_age" value="<?php echo $general_settings[$i]->minimum_reg_age; ?>" placeholder="" class="input-xlarge" style="height:32px;width:30px;">&nbsp;Years
  </div>
  </div>
   <div class="control-group">
 <label class="control-label"  for="Not_allowed_keywords"><span>Not Allowed Keywords In Internal Messaging&nbsp;*</span></label>
  <div class="controls">
  <textarea name="Not_allowed_keywords" id="Not_allowed_keywords"  placeholder="" class="input-xlarge" style="width:500px;height:150px;"><?php echo $general_settings[$i]->Not_allowed_keywords; ?></textarea>
  </div>
  </div>
   <div class="control-group" >
 <label class="control-label"  for="site_fee"><span>Enable Site Fees&nbsp;*</span></label>
  <div class="controls">
   
  <div >
  <?php
  	$sitefee = $general_settings[$i]->site_fee;
  if($sitefee=="on"){?>
  	
	<span><input type="radio" name="site_fee"  id="site_fee" checked value="On" style=" margin-bottom:7px;"></span>&nbsp;<span>On</span>&nbsp;
    <span><input type="radio" name="site_fee"  value="Off" style=" margin-bottom:7px;"></span>&nbsp;<span>Off</span>&nbsp; 
     <?php }else 
  {?>
  </div>
  <div>
  <span><input type="radio" name="site_fee"  value="On" style=" margin-bottom:7px;"></span>&nbsp;<span>On</span>&nbsp; 
 <span><input type="radio" name="site_fee"  id="site_fee" checked value="Off" style=" margin-bottom:7px;"></span>&nbsp;<span>Off</span>&nbsp;

 <?php }?>
 </div>
  </div>
   <div class="control-group">

 <label class="control-label"  for="No_of_days_email_removal_listing_alert"><span>No Of Days Send Email Removal of Item Listing Alert&nbsp;*</span></label>
  <div class="controls">
    <input type="text" name="No_of_days_email_removal_listing_alert"  id="No_of_days_email_removal_listing_alert"value="<?php echo $general_settings[$i]->No_of_days_email_removal_listing_alert; ?>" placeholder="" class="input-xlarge" style="height:32px;width:20px;">&nbsp;Day(s)
  </div>
  <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn" type="submit" name="submit" value="save">Save</button>
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