<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Stock Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <?php include("includes/header_css.php"); ?>
       
  </head>
  <body>
   
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Stock Items /</span> <span>View Category</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"><a href="<?php echo base_url();?>admin/manage_stockcategories" style="color:#FFF"> Manage Categories </a>/<span>View Category</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" method="POST" id="customer" novalidate="novalidate">
  <div class="form-group">
    <label for="exampleInputEmail1">Category Name : </label>
    <?php echo $category_data[0]->cat_title; ?>
	
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Status :</label>
	<?php echo $category_data[0]->cat_status; ?>
	  </div>
	
	
	 <?php
         $id = $category_data[0]->cat_createdby;
		  $id1 = $category_data[0]->cat_modifiedby;
		  
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
	 <?php echo $category_data[0]->cat_createdon; ?>
    
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Modified By</label> :
	 <?php echo $modifiedname; ?>
    
  </div>

<div class="form-group">
    <label for="exampleInputPassword1">Modified On</label> :
	 <?php echo $category_data[0]->cat_modifiedon; ?>
    
  </div>
	
	
    
    

  
</form></div>
		</div>
		<div class="col-md-6">
		 
		</div>
		

		</div>
            
        </div>
        <div class="dbshadow"></div>
        
    </div>
   <?php include("includes/footer.php"); ?>
    </div>
    
    
    
    
</body>