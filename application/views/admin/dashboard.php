<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Realtytopia Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="<?php echo site_url('/assets/css/bootstrap-combined.min.css')?>" rel="stylesheet">
		<link href="<?php echo site_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet">
		<link href="<?php echo site_url('/assets/css/bootstrap.css')?>" rel="stylesheet">
		<link href="<?php echo site_url('/assets/css/loyalstyle.css')?>" rel="stylesheet">
		<link href="<?php echo site_url('/assets/css/font-awesome.min.css')?>" rel="stylesheet">
		<link href="<?php echo site_url('/assets/css/styles.css')?>" rel="stylesheet">
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
		<script src="<?php echo site_url('/assets/css/menu_jquery.js')?>"></script> 
		
		
		
		
		
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
		
		<script>
			function checkAll(ele) {
				var checkboxes = document.getElementsByTagName('input');
				if (ele.checked) {
					for (var i = 0; i < checkboxes.length; i++) {
						if (checkboxes[i].type == 'checkbox') {
							checkboxes[i].checked = true;
						}
					}
					} else {
					for (var i = 0; i < checkboxes.length; i++) {
						console.log(i)
						if (checkboxes[i].type == 'checkbox') {
							checkboxes[i].checked = false;
						}
					}
				}
			}
		</script>
		
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
				<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Dashboard / </span>
					<span>Personal Dashboard</span>
				</div>
				<?php $staffid; echo $this->session->set_flashdata('message'); ?>
				<div class="mtextarea" >
					<h2>Dashboard  <span>Quick links</span></h2>
					<?php $data = $this->adminmodel1->get_personal_dashboard(1,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						
						<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/accounts">
								<span class="fa fa-settings"></span>
								<p>My Account</p>
							</a>
						</div>
					<?php } ?>
					
					<?php // if blog user 
						if($this->session->userdata("blog_user")=='yes'){ ?>
						<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/edit_blog_user/<?php echo $this->session->userdata("admin_id"); ?>">
								<span class="fa fa-settings"></span>
								<p>My Account</p>
							</a>
						</div>
					<?php } ?>
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(5,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						
						
						<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_customers">
								<span class="fa fa-users"></span>
								<p>Customers</p>
							</a>
						</div>
					<?php } ?>	
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(26,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						
						
						<div class="widgetbox admbtn" style="display:none;">>
							<a href="<?php echo base_url(); ?>admin/manage_menus">
								<span class="fa fa-bars"></span>
								<p>Menus</p>
							</a>
						</div>
					<?php } ?>		
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(27,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						
						
						<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>cms/cmspage">
								<span class="fa fa-file"></span>
								<p>Pages</p>
							</a>
						</div>
					<?php } ?>	
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(27,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>			
						<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/automailslist">
								<span class="fa fa-file-text"></span>
								<p>Forms</p>
							</a>
						</div>
					<?php } ?>
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(31,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>			
						<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>commissionrefund/edit_commissionrefund">
								<span class="fa fa-money"></span>
								<p>Commissions</p>
							</a>
						</div>
					<?php } ?>
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(32,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>			
						<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>outgoingemailaddrss/edit_outgoing_email_address">
								<span class="fa fa-envelope"></span>
								<p>Email Servers</p>
							</a>
						</div>
					<?php } ?>
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(29,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						
						
						<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_blogs">
								<span class="fa fa-wechat"></span>
								<p>Blogs</p>
							</a>
						</div>
					<?php } ?>	
					<?php $data = $this->adminmodel1->get_personal_dashboard(30,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>			
						<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_agents_inquiries">
								<span class="fa fa-user"></span>
								<p>Agent Inquiry</p>
							</a>
						</div>
					<?php } ?>	
					<?php $data = $this->adminmodel1->get_personal_dashboard(6,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_appoinment">
							<span class="fa fa-calendar"></span>
							<p>Appointment</p>
							</a>
						</div>-->
					<?php } ?>	
					
					
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(7,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_venues">
							<span class="fa fa-map-marker"></span>
							<p>Venues</p>
							</a>
						</div>-->
					<?php } ?>	
					
					
					
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(8,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>		
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_contracts">
							<span class="fa fa-share-alt"></span>
							<p>Contracts</p>
							</a>
						</div>-->
					<?php } ?>
					
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(10,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_subcontracts">
							<span class="fa fa-users"></span>
							<p>Subcontractors</p>
							</a>
						</div>-->
					<?php } ?>	
					
					
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(13,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_loggings">
							<span class="fa fa-sign-in"></span>
							<p>Logging</p>
							</a>
						</div>-->
					<?php } ?>	
					
					
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(16,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_qis">
							<span class="fa fa-certificate"></span>
							<p>QIR</p>
							</a>
						</div>-->
					<?php } ?>	
					
					
					
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(17,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_cars">
							<span class="fa fa-spinner"></span>
							<p>CAR</p>
							</a>
						</div>-->
					<?php } ?>	
					
					
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(18,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_profit_lost">
							<span class="fa fa-newspaper-o"></span>
							<p>PLS</p>
							</a>
						</div>-->
					<?php } ?>	
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(19,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_sitechanges">
							<span class="fa fa-pencil-square"></span>
							<p>Site Changes</p>
							</a>
						</div>-->
					<?php } ?>	
					
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(20,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_lostjobs">
							<span class="fa fa-cog"></span>
							<p>Lost Job</p>
							</a>
						</div>-->
					<?php } ?>	
					
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(21,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_stockitems">
							<span class="fa fa-arrows"></span>
							<p>Stock Items</p>
							</a>
						</div>-->
					<?php } ?>	
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(22,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/orders">
							<span class="fa fa-pencil-square-o"></span>
							<p>Ordering</p>
							</a>
						</div>-->
					<?php } ?>	
					
					
					
					
					<?php $data = $this->adminmodel1->get_personal_dashboard(24,$staffid);
						$add = $data[0]['per_add'];
						$edit = $data[0]['per_edit'];
						$delete =  $data[0]['per_delete'];
						$view = $data[0]['per_view'];
						$assign = $data[0]['per_assign'];
						if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
						{ ?>
						<!--<div class="widgetbox admbtn">
							<a href="<?php echo base_url(); ?>admin/manage_reports">
							<span class="fa fa-newspaper-o"></span>
							<p>Incident Report</p>
							</a>
						</div>-->
					<?php } ?>	
					
					
					
					
					<div class="widgetbox admbtn">
						<a href="<?php echo base_url(); ?>admin/logout">
							<span class="fa  fa-lock"></span>
							<p>Logout</p>
						</a>
					</div>
					
					
					
					<div class="clear"></div> 
				</div>
				
				<div class="">
					<!--
						<div class="mtextarea" >
						<h2>Appointments</h2>
						<div style="padding:20px;">
						<section id="no-more-tables">
						
						<table class="table-bordered table-striped table-condensed cf tablesorter">
						<thead class="cf" style="background:#044174; color:#fff;">
						<tr>
						<th>Customer Name</th>
						<th>Appointment On</th>
						<th>Appo intment Time</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>View</th>
						</tr>
						
						
						</thead>
						<tbody aria-live="polite" aria-relevant="all">
						
						
						
						<tr role="row" class="ui-state-default odd">
						<td data-title="Customer Name">David</td>
						<td data-title="Appointment On">Dec 6, 2014</td>
						<td data-title="Appointment Time">10:30AM</td>
						<td data-title="Email">david@example.com</td>
						<td data-title="Phone Number">123-456-7890</td>
						
						<td data-title="Actions"><a href="#" title="View details"><i class="icon-eye-open"></i></a>&nbsp;&nbsp;</td>
						
						
						
						</tr><tr role="row" class="ui-widget-content even">
						<td data-title="Customer Name">Mack</td>
						<td data-title="Appointment On">Dec 6, 2014</td>
						<td data-title="Appointment Time">10:30AM</td>
						<td data-title="Email">mack@example.com</td>
						<td data-title="Phone Number">123-456-7890</td>
						<td data-title="Actions"><a href="#" title="View details"><i class="icon-eye-open"></i></a>&nbsp;&nbsp;</td>
						
						
						</tr><tr role="row" class="ui-state-default odd">
						<td data-title="Customer Name">Show Mack</td>
						<td data-title="Appointment On">Dec 6, 2014</td>
						<td data-title="Appointment Time">10:30AM</td>
						<td data-title="Email">showmack@example.com</td>
						<td data-title="Phone Number">123-456-7890</td>
						<td data-title="Actions"><a href="#" title="View details"><i class="icon-eye-open"></i></a>&nbsp;&nbsp;</td>
						
						
						
						</tr></tbody>
						</table>
						
						</section>
						
						</div>
						<div class="clear"></div> 
					</div> -->
				</div>
			</div> 
			
			
			
			
			
			<div class="dbshadow"></div>
			
		</div>
		
		
		
		
		
		<div class="clear"></div>
		<div class="col-md-12 footer">
			<div class="headtext1">COPYRIGHT © <?php echo date("Y");?> REALTYTOPIA. ALL RIGHTS RESERVED.</div>
		</div>
	</div>
    
    
    
    
</body>