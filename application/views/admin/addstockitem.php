<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Stock Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
         <?php include("includes/header_css.php"); ?>
	   
	     <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer").validate({
   
        // Specify the validation rules
        rules: {
            iname: "required",
			inventory_count:"required",
			email: {
                required: true,
                email: true
            },
			iname: "required",
			icname: "required",
			price: "required",
			dprice: "required",
			status: "required",
			img: "required",
			faxnumber: "required",
			description:"required"
		
           
            
        },
        
        // Specify the validation error messages
        messages: {
            iname: "Please enter Item name",
			inventory_count:" Please enter total available items",
			icname: "Please Select Category",
            price: "Please enter price",
			status: "Please Select Status",
			address: "Please enter address",
			contact: "Please enter contact",
			position: "Please enter position",
			phone: "Please enter phone number",
			faxnumber: "Please enter fax number",
			img:"Please choose a picture ",
			dprice:"Please enter discount price",
			description:"Please write description"
           
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
       
       
       

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
   <!--?php // echo"<pre>";print_r($data);echo"</pre>"; ?>
    <!-- TO CHECK VALUES COMING OR NOT-->

 <!-- TO CHECK VALUES COMING all using loop-->	
<!--?php foreach($data as $row){ 
echo $row['cat_title'];
}
?>	
 <!-- TO CHECK VALUES COMING all using loop-->	
  
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Stock Items /</span> <span>Add Stock Item</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_stockitems" style="color:#FFF"> Manage Stock Items </a>/<span>Add Stock Item</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" id="customer" enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/add_stockitem" method='post'>
  <div class="form-group">
    <label for="exampleInputEmail1">Item Name<span class="required_field"> * </span></label>
    <input type="text" name='iname' class="form-control" id="name" >
  </div>
   <!-- <div class="form-group">
    <label for="exampleInputEmail1">Inventory<span class="required_field"> * </span></label>
    <input type="text" name='inventory_count' class="form-control" id="inventory_count" >
  </div>-->
  <div class="form-group">
    <label for="exampleInputPassword1">Item Category<span class="required_field"> * </span></label>
	<select class="form-control" name='icname' id='icname'>
	<option>--Please Select--</option>
	<?php foreach($data as $row){ ?>
	<option value="<?php echo $row['cat_id']; ?> "><?php echo $row['cat_title']; ?></option>
<?php	} ?>
	</select>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Price<span class="required_field"> * </span></label>
    <input type="text" name='price' class="form-control" id="price" >
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1"> Discount Price<span class="required_field"> * </span></label>
    <input type="text" name='dprice' class="form-control" id="dprice" >
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Description<span class="required_field"> * </span></label>
    <textarea class="form-control" rows="3" cols="3" name='description' id='description'></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status<span class="required_field"> * </span> </label>
	<select class="form-control" name='status'>
	<option>--Please Select--</option>
	<option>Active</option>
	<option>Deactive</option>
	</select>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Picture<span class="required_field"> * </span></label>
	 <input type="file" name='img' class="form-control" id="img" >
    
  </div>
  <button type="submit" name="submit" class="btn btn-xs btn-default btyellow" value="addstock" style="height:35px;">Add Stock Item</button>
</form></div>
		</div>
		<div class="col-md-6">
		 
		</div>
		

		</div>
            
        </div>
        <div class="dbshadow"></div>
        
    </div>
    <div class="clear"></div>
    <div class="col-md-12 footer">
    	<div class="headtext1">© Copyright 2014 Guardian Property Service </div>
    </div>
    </div>
    
    
    
    
</body>