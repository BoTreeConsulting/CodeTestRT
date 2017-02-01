<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia View Agent Inquiries</title>
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
	   
	<style>
	
	.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
    }
	
	
	.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 50%;
	height:500px;
	overflow: auto;
	
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
}

.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: fixed;
	
	text-align: center;
	
	top:108px;
	right:308px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	opacity: .8 !important;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #8bca1a; }




     </style>	
       
       
       
       

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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Inquiry Manager / </span><span>Manage Agent Inquiries</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_agents_inquiries" style="color:#FFF">Manage Agent Inquiries </a>/ <span>View Agent Inquiries</span></div>
    	
        <div class="mtextarea mtextarea2">
        
			<div class="row">
				<div class="col-md-6">
				

			    	<div class="form-group">
					    <label for="exampleInputEmail1">Agent Name</label> : 
						
						<?php 

							$agent_id = $viewagentsinquiries[0]['agent_id'];

							$agentdetai = $this->db->query("select * from tbl_agents where AgentID='".$agent_id."'")->row();

							$agent_name = ucfirst($agentdetai->AgentFirstName).'&nbsp;'.ucfirst($agentdetai->AgentLastName);

							echo $agent_name;
						?>
			   
			  		</div>
			  
				    <div class="form-group">
					    <label for="exampleInputEmail1">User Name</label> : 
						
						<?php 
							echo ucfirst($viewagentsinquiries[0]['username']);	
						?>
					   
				    </div>

				    <div class="form-group">
					    <label for="exampleInputEmail1">Email</label> : 
						<?php 
							echo $viewagentsinquiries[0]['email'];	
						?>
				    </div>

				    <div class="form-group">
					    <label for="exampleInputEmail1">Phone</label> : 
						<?php 
							echo $viewagentsinquiries[0]['phone'];	
						?>
				    </div>	
				

			  
					<div class="form-group">
						<label for="exampleInputEmail1">Move In Date</label> :  
						<?php echo ucwords($viewagentsinquiries[0]['move-in-date']); ?>
					</div>
			  
					<div class="form-group">
						<label for="exampleInputEmail1">Notes</label> :  
						<?php echo $viewagentsinquiries[0]['notes']; ?>
					</div>
			  
					<div class="form-group">
						<label for="exampleInputPassword1">Status</label> : 

						<?php
							if($viewagentsinquiries[0]['is_active']=='1')
							{
								echo "Active";
							}
							else if($viewagentsinquiries[0]['is_active']=='0')
							{
								echo "InActive";
							}
						?>
					</div>
			  
			  
			  
					<div class="form-group">
						<label for="exampleInputPassword1">Created on</label> : 	
						<?php echo date('Y-m-d', strtotime($viewagentsinquiries[0]['created_on']));?>    
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
    	<div class="headtext1">COPYRIGHT &nbsp; <?php echo date("Y");?> REALTYTOPIA. ALL RIGHTS RESERVED.</div>
    </div>
    </div>
    
    
    
    
</body>