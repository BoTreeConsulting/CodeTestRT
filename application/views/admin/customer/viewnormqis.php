<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Normal Qis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	   
	   <!--light box popup starts here-->
	   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla%7CMontserrat">
	   <link rel="stylesheet" href="<?php echo base_url();?>assets/try/css/screen.css"> 
	   <link rel="stylesheet" href="<?php echo base_url();?>assets/try/css/lightbox.css">
	   <!--light box popup ends here-->
	   
	  

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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Customer Panel / <span>QIS /</span><span>View Normal Qis</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	<div class="headtext1"> <a href="<?php echo base_url();?>customer/customer_qis" style="color:#FFF">Manage  Normal QIS </a>/ <span>View Normal QIS </span></div>
    	
        <div class="mtextarea mtextarea2">
        
		<div class="row">
		<div class="col-md-12">
		
 
		<h2>For View Normal QIS</h2>
	
	
		<div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
    <label for="exampleInputPassword1">Customer Name</label>
    
	   <?php foreach($customer as $row){?>
        <?php if($row['ac_id']==$normqis[0]['qis_customer']){ 
		 echo $row['ac_name'];
		}
	   } ?>
 
   </div>
 
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Venue</label>
				<?php
				$qid=$normqis[0]['qis_normal_id'];
				$vid=$normqis[0]['qis_venue'];
          $q=mysql_query("select av_id,av_venue_name from tbl_venue where av_id='$vid'");
          $vdata=mysql_fetch_array($q);?>
    <?php echo $vdata['av_venue_name'];?>
              </div>
            </div>
  </div>
  
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Contact Person Name</label>
    <?php echo $normqis[0]['qis_contactperson'];?>
              </div>
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Date</label>
    <?php echo $normqis[0]['qis_date_on'];?>
              </div>
            </div>
  </div>
  
  

  
  <section id="no-more-tables" style="margin:20px 0px;">
		
		  <table class="table-bordered table-striped table-condensed cf">
			   <thead class="cf" style="background:#044174; color:#fff;">
				 <tr>
					  <th>Item</th>
					  <th>Attach Image</th>
					  <th>Comments</th>
					  <th>Review Rating</th>
					  
					
				  </tr>
			  </thead>
				<tbody>
				<?php 
				$j=0;
				foreach($normalqisareas as $row){
				$areaid=$row['area_id'];
				
				$query=mysql_query("select * from tbl_subareas where area_parent_id='$areaid'");
				?>
						<tr>
						<td colspan="6">
							<div class="qistext">
						    <h4><?php echo $row['area_title'];?></h4>
							</div>
						</td>
						</tr>
						<?php 
						$i=0;
						while($subdata=mysql_fetch_array($query)){ 
						?>
						<tr>
						<td data-title="Client Name">
							<div class="qistext">
							<p><?php $subid=$subdata['area_id'];
							echo $subdata['area_title'];?></p>
							</div>
						</td>
					<?php
					
					$newq=mysql_query("SELECT * from tbl_qis_information WHERE qis_id ='$qid' and qis_item='$subid'");	
					$info=mysql_fetch_array($newq);
					$pic=$info['qis_filename'];
						?>
						
						<?php /* ?><td data-title="Attach Image"><div class="attimg">
						</div></td> <?php */ ?>
						
						<td><a class="example-image-link" href="<?php echo base_url();?>assets/qis/<?php echo $pic;?>" data-lightbox="example-1"><?php if($pic){ ?><img src="<?php echo base_url();?>assets/qis/<?php echo $pic;?>" width="40px;" height="55px"><?php } ?></a></td>
						
						<td data-title="Type"><?php echo $info['qis_comments'];?></td>
						<td data-title="Good" ><?php echo $info['qis_review'];?></td>
						
						</tr>
						
					<?php  }
					} ?>	
				</tbody>
		  </table>
		  
		  </section>
	<div class="form-group" style="margin-bottom: 0px;">
    <div class="row">	  

 <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Client's Comments / Special Needs:</label>
     <?php echo $normqis[0]['qis_client_comments'];?>
              </div>
			  
			  <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Client Rating:</label>
<?php echo $normqis[0]['qis_client_rating'];?>
              </div>
			  
			  <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Client Signature:</label>
    <?php echo $normqis[0]['qis_signature'];?>
              </div>
			  
			  <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Inspected By:</label>
     <?php echo $normqis[0]['qis_inspectedby'];?>
              </div>
			  
			  <?php
    			  $id = $normqis[0]['qis_createdby'];
			      $query=mysql_query("select admin_username from tbl_admin where admin_id='$id'");
		          $dat=mysql_fetch_array($query);
				  $createdname=$dat['admin_username'];
				  
				   $id1 = $normqis[0]['qis_modifiedby'];
				   $query1=mysql_query("select admin_username from tbl_admin where admin_id='$id1'");
		           $data1=mysql_fetch_array($query1);
				   $modifiedname=$data1['admin_username'];				 				 
			   ?>
			  
			  
			  
			  
			  <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Created By:</label>
     <?php echo $createdname; ?>
              </div>
			  
			  <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Created on:</label>
     <?php echo  date("M d Y g:i a",strtotime($normqis[0]['qis_createdon']));?>
              </div>
			  
			  
			   
			  <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Modified By:</label>
     <?php echo $modifiedname; ?>
              </div>
			  
			  <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Modified on:</label>
     <?php echo date("M d Y g:i a",strtotime($normqis[0]['qis_modifiedon']))?>
              </div>
			  
			  
			 
			  </div></div>

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
    	<div class="headtext1">© Copyright 2014 Guardian Property Service </div>
    </div>
    </div>
    
    
    
    
</body>