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
			//img: "required",
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
			//img:"Please choose a picture ",
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
   <!--?php  echo"<pre>";print_r($data1);echo"</pre>"; ?>
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Stock Items /</span> <span>Edit Stock Item</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_stockitems" style="color:#FFF"> Manage Stock Items </a>/<span>Edit Stock Item</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
 
		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" id="customer" enctype="multipart/form-data" method='post'>
  <div class="form-group">
    <label for="exampleInputEmail1">Item Name</label>
    <input type="text" class="form-control" name="iname" id="iname" value = "<?php echo $data[0]['prod_title']; ?>" >
  </div>
   <!--<div class="form-group">
    <label for="exampleInputEmail1">Inventory<span class="required_field"> * </span></label>
    <input type="text" name='inventory_count' class="form-control" id="inventory_count" value="<?php echo $data[0]['inventory_count']; ?>" >
  </div>-->
  
  	<?php $item = $data[0]['cat_id']; ?>
  	<?php   $updated = $data1[0]['cat_title']; ?>
  <div class="form-group">
    <label for="exampleInputPassword1">Item Category</label>
	<select class="form-control" name="icname"  >
	

	

	
	
	<?php foreach($data1 as $row1) { ?>
	<option value="<?php echo $row1['cat_id']?>" <?php if($item == $row1['cat_id']){ echo "selected";}?>> <?php echo $row1['cat_title']?></option>
	<?php } ?>
	
	
	</select>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" name="price"  id="price" value="<?php echo $data[0]['prod_price']; ?>">
  </div>
  
    <div class="form-group">
    <label for="exampleInputEmail1"> Discount Price</label>
    <input type="text" class="form-control" name="dprice"  id="dprice" value="<?php echo $data[0]['prod_saleprice']; ?>">
  </div>
  
    <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea class="form-control" rows="3" cols="3" name="description" id="description"  ><?php echo $data[0]['prod_description']; ?></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1" name="" >Status </label>
	<?php   $status =  $data[0]['prod_status'];   ?> 
	
	<select class="form-control" name="status"  >
	   <option value="Active" <?php if($status == "Active"){ echo "selected";}?> >Active</option>
       <option value="Inactive" <?php if($status == "Inactive"){ echo "selected";}?> >Inactive</option>
	
	</select>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Picture</label> :&nbsp;&nbsp;&nbsp;
	 <input type="file" class="form-control" name="img"  id="img" value=" " ></br>
	 
	 
	  <img src="<?php echo base_url();?>assets/stock_images/<?php echo $data[0]['prod_img']; ?>" width="50px" height="50px" />
      <input type='hidden' name='oldpic' value='<?php echo $data[0]['prod_img']; ?>' >
  </div>
  <button type="submit" name='update' value='stockupdate' class="btn btn-xs btn-default btyellow" style="height:35px;">Edit Stock Item</button>
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