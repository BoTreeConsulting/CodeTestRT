<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRM Guardian Property Service Accounts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <?php include("includes/header_css.php"); ?>
      

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
    
    <div class="col-md-10 rtcol">
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Accounts /</span><span>Edit Account</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_accounts" style="color:#FFF">Manage Accounts </a>/ <span>Edit Account</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		
		 <form role="form"  method="POST" id="account" enctype="multipart/form-data" >
		 <div class="col-md-6">
		 <div class="form-group">
    <label for="exampleInputPassword1">Customer name<span class="required_field"> * </span></label>
    <select  class="form-control" name="cname" id="name">
       <option value="">--Select Customer--</option>
	   <?php 
	   $cid=$account[0]->cust_id;
	   
	   foreach($customer as $row){?>
       <option value="<?php echo $row['ac_id'];?>" <?php if($cid==$row['ac_id']){echo "selected"; }?>><?php echo $row['ac_name'];?></option>
	   <?php } ?>
   </select>
   </div>
   </div>
    <div style="clear:both;"></div>
   <div class="col-md-6">
	    <div id="button_pro">
		  <div class="form-group" id='invoices_1'>
		  <label for="input_1" id='input_1'>Invoices <span class="required_field"> * </span></label>
		  <input type="file" name="invoices[]" id='input_1' >
		  <?php 
			for($i=0;$i<count($ainvoice);$i++){ 
		  ?>
		 <a href="#"><?php echo $ainvoice[$i]->display_name; ?></a>&nbsp;|&nbsp;<a href="<?php echo site_url('/accounts/delete_file')?>/<?php echo $ainvoice[$i]->fid;?>/<?php echo $ainvoice[$i]->a_id;?>"><img src="<?php echo base_url();?>assets/img/remove.png" /></a><br>
		  <?php } ?>
		  <img class="add right" src="<?php echo base_url();?>assets/img/add.png" />

  </div>
		

   </div>	
  </div>
<div style="clear:both;"></div>
<div class="col-md-6">
<div id="button_pro1">
<div class="form-group" id='quote_1'>
	<label for="quote_1" id="quote_1">Quotations <span class="required_field"> * </span></label>
	<input type="file" name="quotations[]" id="quote_1" >
	
	  <?php 
	for($i=0;$i<count($aquotation);$i++){ 
	  ?>
		<a href="#"> <?php echo $aquotation[$i]->display_name; ?></a>&nbsp;|&nbsp;<a href="<?php echo site_url('/accounts/delete_file')?>/<?php echo $aquotation[$i]->fid; ?>/<?php echo $aquotation[$i]->a_id; ?>"><img src="<?php echo base_url();?>assets/img/remove.png" /></a><br>
		  <?php } ?>
	<img class="add1 right" src="<?php echo base_url();?>assets/img/add.png" />
</div>
</div>
</div> 
 
 
 
  <div style="clear:both;"></div>
  <div class="col-md-6">
   <input type="hidden" class="form-control" name="createdby" value="<?php echo $_SESSION['admin_id'];?>">
  <input type="hidden" class="form-control" name="hid" value="<?php echo $account[0]->aid;?>">
  <button type="submit" name="edit" class="btn btn-xs btn-default btyellow" style="height:35px;">Edit Accounts</button>
</div>
</form>
		</div>
		<div class="col-md-6">
		 
		</div>
		

		</div>
            
        </div>
        <div class="dbshadow"></div>
        
    </div>
     <?php include('includes/footer.php'); ?>   
    </div>
</body>


 <script type="text/javascript">
  $('document').ready(function(){
    var id=2,txt_box;
	$('#button_pro').on('click','.add',function(){
		  $(this).remove();
		//  txt_box='<div class="space" id="invoices_'+id+'" ><input type="text" name="val[]" class="left txt"/><img src="images/remove.png" class="remove"/><img class="add right" src="images/add.png" /></div>';
		 txt_box='<div class="form-group" id="invoices_'+id+'"><label for="invoices_'+id+'" id="invoices_'+id+'">Inovices<span class="required_field"> * </span></label><input type="file" name="invoices[]" id="invoices_'+id+'" ><img src="<?php echo base_url();?>assets/img/remove.png" class="remove"/><img class="add right" src="<?php echo base_url();?>assets/img/add.png" /></div>';
		  
		  $("#button_pro").append(txt_box);
		  id++;
	});

	$('#button_pro').on('click','.remove',function(){
	        var parent=$(this).parent().prev().attr("id");
			var parent_im=$(this).parent().attr("id");
			$("#"+parent_im).slideUp('medium',function(){
				$("#"+parent_im).remove();
				if($('.add').length<1){
					$("#"+parent).append('<img src="<?php echo base_url();?>assets/img/add.png" class="add right"/> ');
				}
			});
			});
			
			
			
			 var id1=2,txt_box1;
	$('#button_pro1').on('click','.add1',function(){
		  $(this).remove();
		
		 txt_box1='<div class="form-group" id="quote_'+id1+'"><label for="quote_'+id1+'" id="quote_'+id1+'">Quotations<span class="required_field"> * </span></label><input type="file" name="quotations[]" id="quote_'+id1+'" ><img src="<?php echo base_url();?>assets/img/remove.png" class="remove1"/><img class="add1 right" src="<?php echo base_url();?>assets/img/add.png" /></div>';
		  
		  $("#button_pro1").append(txt_box1);
		  id1++;
	});

	$('#button_pro1').on('click','.remove1',function(){
	        var parent=$(this).parent().prev().attr("id");
			var parent_im=$(this).parent().attr("id");
			$("#"+parent_im).slideUp('medium',function(){
				$("#"+parent_im).remove();
				if($('.add1').length<1){
					$("#"+parent).append('<img src="<?php echo base_url();?>assets/img/add.png" class="add1 right"/> ');
				}
			});
			});


});
   /*    $('document').ready(function(){
    var id=2,txt_box;
	$('#button_pro').on('click','.add',function(){
		  $(this).remove();
		  txt_box='<div class="form-group" id="invoices_'+id+'" ><label for="invoices">Invoices<span class="required_field"> * </span></label><input type="file"  name="invoices[]" id="invoices_'+id+'"><img src="images/remove.png" class="remove"/><img class="add right" src="images/add.png" /> </div>';
		  $("#button_pro").append(txt_box);
		  id++;
	});
 
	$('#button_pro').on('click','.remove',function(){
	        var parent=$(this).parent().prev().attr("id");
			var parent_im=$(this).parent().attr("id");
			$("#"+parent_im).slideUp('medium',function(){
				$("#"+parent_im).remove();
				alert($('.add').length);
				if($('.add').length=='0'){
					$("#"+parent).append('<img src="images/add.png" class="add right"/> ');
				}
			});
			});


}); */
    </script>