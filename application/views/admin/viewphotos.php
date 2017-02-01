<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia View Photos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	   
	  

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/custom-admin.css" rel="stylesheet">


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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Properties /</span><span>View Photos</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_photos" style="color:#FFF">Manage Photos </a>/ <span>View Photos</span></div>
	
	
	<?php if($this->session->flashdata('message')!=''){  ?>
		<div class="alert alert-success alert-custom">
<button type="button" class="close" data-dismiss="alert" style="padding-right:15px;">×</button>
<strong>Success!</strong>  <?php echo $this->session->flashdata('message'); ?>
</div>
<?php } if($this->session->flashdata('error')!=''){ ?>


		<div class="alert alert-danger alert-custom">
<button type="button" class="close" data-dismiss="alert" style="padding-right:15px;">×</button>
<strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
</div>
<?php } ?>
	
	
    	
        <div class="mtextarea mtextarea2">
        
		<div class="row">
		<div class="col-md-6">
		
  <div class="form-group">
  
                <div style="margin:20px 0px;">
                    <a href="<?php echo base_url();?>admin/add_photos/<?php echo $this->uri->segment(3);?>" class="btn btn-xs btn-default btyellow pull-left">Add Photo</a>
                    <div class="clear"></div>
                </div>

  
   <div class="photos_count" style="display:none;">
			<?php echo count($viewphotosvalues); ?>
	</div>
		
    <label for="GroupName" class="photos_title" style="margin-bottom: 20px;">Photos:</label>  

		
	
	        <table>
            <tbody>
			<tr>
				<?php 
				$i=1;
				foreach($viewphotosvalues as $values)
				{
				
				?>
						
						
				<td>
				
				
				
				<img src="<?php echo base_url(); ?>uploads/<?php echo $values['imagepath'];?>" width="222" height="137" style="margin-right:15px;">
				
				
				<div style="margin:10px 0px;">
                    <a href="<?php echo base_url();?>admin/delete_photos/<?php echo $values['id'];?>/<?php echo $values['propertyid'];?>" class="btn btn-xs btn-default btyellow pull-left">Delete</a>
                    <div class="clear"></div>
                </div>
				
				
				
				</td>
						
						
					
					<?php 
				if($i == 4)
				{
				echo "</tr>";
				$i=0;
				}
				$i++;
				}

				?>
                         					
			</tbody>
		    </table>
  
   
  </div>
  
            
   
  
  
 
 
  
  
  
  
  
 
 
  
  
  </div>
  

		</div>
		<div class="col-md-6">
		 
		</div>
		

		</div>
            
        </div>
        <div class="dbshadow"></div>
        
    </div>
    <div class="clear"></div>
    <div class="col-md-12 footer">
    	<div class="headtext1">COPYRIGHT © <?php echo date("Y");?> REALTYTOPIA. ALL RIGHTS RESERVED.</div>
    </div>
    </div>
	<script type="text/javascript">
	$(function()
	{
		var photos_count= $('.photos_count').html();
		if(photos_count == 0)
		{
			$('.photos_title').html("No Property Photos Available");
		}
	});
	</script>
    
    
    
    
</body>