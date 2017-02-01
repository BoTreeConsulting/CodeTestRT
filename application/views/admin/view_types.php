<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia View Type</title>
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
        <div>
          <p class="navbar-text pull-right" style="margin-top:-5px;">Welcome <span><?php  echo $this->session->userdata("admin_name");?></span> <a href="<?php echo base_url();?>admin/logout" class="">Logout</a></p>
        </div>
    </div>
    <div class="col-md-12 remove-padd">
        <?php 
            include "left-menu.php";
	?>
    
        <div class="col-md-10 rtcol">
            <div class="headtext1">
                <i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Types / </span><span>View Type</span>
            </div>
         <?php
            $total = $this->uri->total_segments();
            $modulename = $this->uri->segment($total);?>
            <div class="headtext1"> 
                <a href="<?php echo base_url();?>admin/manage_types" style="color:#FFF">Manage Types </a> / <span>View Type</span>
            </div>
            
            <?php
                $url = $viewtype[0]['url'];
                $seo_url = $viewtype[0]['seo_url'];
            ?>

            <div class="mtextarea mtextarea2">

                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <span><label for="Group">Group : </label><span>
                            <span><?php echo ucwords($viewtype[0]['group_name']);?></span>  
                        </div>

                        <div class="form-group">
                            <span><label for="Title">Title : </label></span>
                            <span><?php echo ucwords($viewtype[0]['item_name']);?></span>  
                        </div>
                        
                        <?php
                        if(!empty($url))
                        {
                        ?>
                            <div class="form-group">
                                <span> <label for="url">URL : </label></span>
                                <span style="word-wrap: break-word;"><a href="<?php echo $url;?>" target="_blank"><?php echo $url;?></a></span>   
                            </div>
                        <?php
                         }
                        ?>
                        
                        <?php
                        if(!empty($seo_url))
                        {
                        ?>
                            <div class="form-group">
                                <span> <label for="url">SEO URL : </label></span>
                                <span style="word-wrap: break-word;"><a href="<?php echo str_replace(' ','_',$seo_url);?>" target="_blank"><?php echo $seo_url;?></a></span>                      
                            </div>
                        <?php
                         }
                        ?>

                        <div class="form-group">
                            <label for="status">Status : </label> 
                            <?php
                                if($viewtype[0]['is_active']=='1')
                                {
                                    echo "Active";
                                }
                                else if($viewtype[0]['is_active']=='0')
                                {
                                    echo "InActive";
                                }
                            ?>
                        </div>

                        <div class="form-group">
                           <label for="created">Created On : </label>
                           <?php echo date('Y-m-d', strtotime($viewtype[0]['created_on']));?>	
                        </div>

                    </div>
                </div>

            </div>

        </div>
        
        <div class="dbshadow"></div>
        
    </div>
    
    <div class="clear"></div>
    <div class="col-md-12 footer">
    	<div class="headtext1">COPYRIGHT &copy; <?php echo date("Y");?> REALTYTOPIA. ALL RIGHTS RESERVED.</div>
    </div>
    
    </div>
    
    
    
    
</body>