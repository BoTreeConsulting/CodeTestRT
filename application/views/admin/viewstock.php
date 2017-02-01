<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Stock Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	   
	  

    <!-- Custom CSS 
    <link href="<?php echo base_url();?>assets/css/custom-admin.css" rel="stylesheet">-->


    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
	   
	   
	   
	   
	   
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	   <script src="<?php echo base_url();?>assets/css/menu_jquery.js"></script>
       
       
       
       

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
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?>
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Stock Items /</span> <span>view Stock Item</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_stockitems" style="color:#FFF"> Manage Stock Items </a>/<span>view Stock Item</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form">
  <div class="form-group">
    <label for="exampleInputEmail1">Item Name</label> : <?php echo $data[0]['prod_title']; ?>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Item Category</label> : <?php echo $data[0]['cat_title']?>
	    
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label> : $<?php echo $data[0]['prod_price']; ?>
   
  </div>
  
    <div class="form-group">
    <label for="exampleInputEmail1"> Discount Price</label> : <?php echo $data[0]['prod_saleprice']; ?>
    </div>
  
    <div class="form-group">
    <label for="exampleInputPassword1">Description</label> :<?php echo $data[0]['prod_description']; ?>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Status </label> : 	<?php echo  $status =  $data[0]['prod_status'];   ?> 
	
    
  </div>
  
 
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label> :
	
	 <img src="<?php echo base_url();?>assets/stock_images/<?php echo $data[0]['prod_img']; ?>" width="50px" height="50px" />
    
  </div>
  
  <?php
         $id = $data[0]['prod_created_by'];
		  $id1 = $data[0]['prod_modifiedby'];
		 $query=mysql_query("select admin_username from tbl_admin where admin_id='$id'");
		 $dat=mysql_fetch_array($query);
		 $query1=mysql_query("select admin_username from tbl_admin where admin_id='$id1'");
		 $data1=mysql_fetch_array($query1);
		$createdname=$dat['admin_username'];
		$modifiedname=$data1['admin_username'];
		  ?>
  
	<div class="form-group">
    <label for="exampleInputPassword1">Created By</label> :
	 <?php echo $createdname; ?>
	 
    
  </div>
 
<div class="form-group">
    <label for="exampleInputPassword1">Created On</label> :
	 <?php echo $data[0]['prod_createdon']; ?>
    
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Modified By</label> :
	 <?php echo $modifiedname; ?>
    
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Modified On</label> :
	 <?php echo $data[0]['prod_modifiedon']; ?>
    
  </div>



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