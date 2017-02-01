<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service QIR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
  <!--header starts here-->
	 <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	   
	   <!--light box popup starts here-->
	   <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla%7CMontserrat">
	   <link rel="stylesheet" href="<?php echo base_url();?>assets/try/css/screen.css"> 
	   <link rel="stylesheet" href="<?php echo base_url();?>assets/try/css/lightbox.css">
	   <!--light box popup ends here-->
	   
	  

    <!-- Custom CSS 
    <link href="<?php // echo base_url();?>assets/css/custom-admin.css" rel="stylesheet">-->


    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
	   
	   
	   
	   
	   
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	  <script src="<?php echo base_url();?>assets/css/menu_jquery.js"></script>
	    <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
		<!--signature starts here -->
		<script src="<?php echo base_url(); ?>assets/try/jquery.signaturepad.min.js"></script> 
		 <!--signature ends here -->
      
       
     <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<style type="text/css">
    .label {padding: 15px;
margin-bottom: 20px;
border: 1px solid transparent;
border-radius: 4px;}
	 #customer label.error, .output {color:#a94442; font-weight:600; background:#ebccd1; width: 100%; padding: 3px 8px; margin-top: 2px;
	 -webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
	 }
  </style>
    <!--header ends here-->
	
	
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
 
 <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script--> 
    <script type="text/javascript">
        $(document).ready(function()
        {
		  $('.sigPad').signaturePad({drawOnly:true}); // sign calling
            $("#cname").on("change",function(){
                var customer_id = $("#cname").val();
				
                $.ajax({
                    type:"POST",
                    url:"<?php echo site_url('qis/get_venues'); ?>", //controller url
                    data:"customer_id="+customer_id,
                    success:function(data)
                    {
					
                        $('#venue').html(data);
                    }
                });
            });
            
           
            
        });
    </script>
	 <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
  $(function() {
  
    $( "#datepicker" ).datepicker();
});
  
  </script> 
  
<script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#customer").validate({
   
        // Specify the validation rules
        rules: {
            cname: "required",
			contact:"required",
			date: "required",
			venue: "required",
			comments: "required",
			rating: "required",
			sign: "required",
			inspected: "required",
			
			
           
        },
        
        // Specify the validation error messages
        messages: {
            cname: "Please enter client name",
			contact:"Please enter contact person name",
			date: "please enter date",
			venue: "please enter the venue name",
			comments: "please write comments",
			rating: "please enter rating",
			sign: "please enter the client signature"
			
			
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
    
    <div class="col-md-10 col-sm-9" style="padding:0;">
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage QIR / </span>Edit QIR </div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_staff" style="color:#FFF">Manage QIR</a>/ <span>Edit QIR</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-12">
		
		
		
		<div style="overflow:auto;">
		<select class="form-control selectqis" >
		
		<option value="Normal QIS">Normal QIR</option>
		
		</select>
		</div>
	<div style="margin:20px 0px;" id="tabone">	
		<h2>For Edit Normal QIR</h2>
		<form role="form" method="POST" id="customer"  novalidate="novalidate" enctype="multipart/form-data" class='sigPad'>
	
		<div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
    <label for="exampleInputPassword1">Customer Name<span class="required_field"> * </span></label>
    <select  class="form-control" name="cname" id="cname">
       <option value="">--Select Customer--</option>
	   <?php foreach($customer as $row){?>
       <option value="<?php echo $row['ac_id'];?>" <?php if($row['ac_id']==$normqis[0]['qis_customer']){ echo "selected";}?>><?php echo $row['ac_name'];?></option>
	   <?php } ?>
   </select>
   </div>
   <input type="hidden" class="form-control"  name="qistype" id="contact"value="normal qis" >
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Venue</label>
				<?php
				$qid=$normqis[0]['qis_normal_id'];
				$vid=$normqis[0]['qis_venue'];
          $q=mysql_query("select av_id,av_venue_name from tbl_venue where av_id='$vid'");
          $vdata=mysql_fetch_array($q);?>
    <select class="form-control" name="venue" id="venue"><option value="<?php echo $vdata['av_id'];?>"  ><?php echo $vdata['av_venue_name'];?></option></select>
              </div>
            </div>
  </div>
  
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Contact Person Name</label>
    <input type="text" class="form-control"  value="<?php echo $normqis[0]['qis_contactperson'];?>" name="contact" id="contact" >
              </div>
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Date</label>
    <input type="text" class="form-control"  value="<?php echo date("m/d/Y",strtotime($normqis[0]['qis_date_on']));?>"  name="date" id="datepicker">
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
					  <th>Good</th>
					  <th>Fair</th>
					  <th>Poor</th>
					
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
						<input type="hidden" name="itemid[]" value="<?php echo $subdata['area_id'];?>">
						
						<td data-title="Attach Image"><div class="attimg">
						<input type="file" name="imgs[]" id="js-upload-files" multiple ></div>
						
						<a class="example-image-link" href="<?php echo base_url();?>assets/qis/<?php echo $pic;?>" data-lightbox="example-1"><?php if($pic){ ?><img src="<?php echo base_url();?>assets/qis/<?php echo $pic;?>" width="40px;" height="55px"><?php } ?></a></td>
						
						
						
						
						
						
						<td data-title="Type"><textarea class="form-control" name="coms[]" rows="3" cols="3"><?php echo $info['qis_comments'];?></textarea></td>
						<td data-title="Good" ><input type="radio" name="test<?php echo $subdata['area_id'];?>"  <?php if($info['qis_review']=='good'){ echo "checked";}?> value="good"  id=""></td>
						<td data-title="Fair" ><input type="radio" name="test<?php echo $subdata['area_id'];?>" <?php if($info['qis_review']=='fair'){ echo "checked";}?> value="fair" id=""></td>
						<td data-title="Poor" ><input type="radio" name="test<?php echo $subdata['area_id'];?>" <?php if($info['qis_review']=='poor'){ echo "checked";}?> value="poor" id=""></td>
						</tr>
						
					<?php $i++; }
$j++;					} ?>	
				</tbody>
		  </table>
		  
		  </section>
		  
  <div class="form-group" style="margin-bottom: 0px;">
    <div class="row">
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Client's Comments / Special Needs</label>
    <textarea class="form-control" rows="3" cols="3" name="comments" id="comments" style="height: 153px;"><?php echo $normqis[0]['qis_client_comments'];?>"</textarea>
              </div>
              <div class="col-md-6 form-group expiration required">
                <label for="exampleInputEmail1">Client Rating</label>
             <!--   <input type="text" class="form-control" value="<?php // echo $normqis[0]['qis_client_rating'];?>"  name="rating" id="rating" id="" > -->
				
				<select  class="form-control" name="rating" id="rating" >
	             <option value="1" <?php if($normqis[0]['qis_client_rating']=='1'){echo "selected";} ?>>1</option>
	              <option value="2" <?php if($normqis[0]['qis_client_rating']=='2'){echo "selected";} ?>>2</option>
				   <option value="3" <?php if($normqis[0]['qis_client_rating']=='3'){echo "selected";} ?>>3</option>
				    <option value="4" <?php if($normqis[0]['qis_client_rating']=='4'){echo "selected";} ?>>4</option>
					 <option value="5" <?php if($normqis[0]['qis_client_rating']=='5'){echo "selected";} ?>>5</option>
	           </select>
				
			
				<label for="exampleInputEmail1">Client Signature</label>
				<!--signature starts here -->
				<div style="border-style: solid;
    border-width: 1px; border-color:#C4C4C4; width:500px;"><canvas class='pad' width='495' height='70'name='sign' id='sign'></canvas> </div>
				<input type='hidden'  name='output' class='output' id='output'>
                <button class='clearButton'>Reset</button></br>
                <!--signature ends here -->
				
				
				
				<img src="<?php echo base_url();?>assets/qis/<?php echo $normqis[0]['qis_signature'];?>">
              <input type="hidden" class="form-control"  value="<?php echo $normqis[0]['qis_signature'];?>" name="hiddensign"> 
			  
			  
			  
			  
			  
				<label for="exampleInputEmail1">Inspected By</label>
                <input type="text" class="form-control"  value="<?php echo $normqis[0]['qis_inspectedby'];?>" name="inspected" id="inspected" >
              </div>
            </div>
 </div>
 <button type="submit" name="editnormal" class="btn btn-xs btn-default btyellow" style="height:35px;">Edit Normal QIR</button>
 </form>
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
    	<div class="headtext1">© Copyright 2014 Guardian Property Service </div>
    </div>
    </div>
    
  <script src="<?php echo base_url();?>assets/try/js/lightbox.js"></script>   
    
    
</body>

<script>
	function myfun(value)
	{
	var value;
	if(value == 'Health QIS'){
	
	document.getElementById("tabtwo").style.display = "block";
	document.getElementById("tabone").style.display = "none";
	}else{
	document.getElementById("tabtwo").style.display = "none";
	document.getElementById("tabone").style.display = "block";
	}}
</script>