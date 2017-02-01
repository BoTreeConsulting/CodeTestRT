<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Edit Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <?php include("includes/header_css.php"); ?>
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#editpageformid").validate({
   
        // Specify the validation rules
        rules: {
             pagename: "required",
			
			pagecontent: "required",
			status: "required"
			
		
           
            
        },
        
        // Specify the validation error messages
        messages: {
            pagename: "Please enter pagename",
			
            pagecontent: "Please enter page description",
			status: "Please select status"
			
			
           
           
           
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
  
  
<script type="text/javascript">
function isNumberKey(evt)
{
	
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
return false;
return true;
}
  
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
    
    <div class="col-md-10 rtcol">
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Pages /</span> <span>Edit Page</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_pages" style="color:#FFF">Manage Pages </a>/<span>Edit Page</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
		
		
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

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" method="POST" id="editpageformid" novalidate="novalidate">
		 
		 
		 
		 <?php $parentmenuids=$this->db->query("select * from tbl_menus where menu_parent_id=0 and is_active=1")->result(); 
		 ?>
		 
		 
	<div class="form-group">
    <label for="exampleInputPassword1">Menus<span class="required_field"> * </span></label>
	
	
	<?php
$optgroup = 0;
$sql=mysql_query("select * from  tbl_menus where menu_parent_id = 0 order by menu_position"); 
echo '<select class="form-control" name="menuselect" id="select_parent">
<option value="">--Choose Menu--</option>';
while($row=mysql_fetch_assoc($sql))
{ 
    echo '<optgroup label="'.$row['menu_name'].'">';   
    $p_id = $row['id'];
    $sql1=mysql_query("select * from  tbl_menus where menu_parent_id = '{$p_id}' order by menu_position");
	while($row1=mysql_fetch_assoc($sql1))
	{
		  
		  echo '<option value="'.$row1['id'].'">'.$row1['menu_name'].'</option>';
		  
		  
    }  
    echo "</optgroup>";
} 
echo '</select>';
?>
	
	
	
	
    
   </div>
		
		 
		 
		 
  <div class="form-group">
    <label for="exampleInputEmail1">Page Name<span class="required_field"> * </span></label>
    <input type="text" class="form-control"  name="pagename" id="pagename" value="<?php echo $editpages[0]['page_name'];?>" id="exampleInputEmail1" placeholder="Enter Page Name">
  </div>
  
  
  
 
  
  <div class="form-group">
    <label for="exampleInputPassword1">PageContent<span class="required_field"> * </span></label>
	<br/>
    <textarea name="pagecontent" id="pagecontent" rows="10" cols="75" placeholder="Enter Page Description"><?php echo $editpages[0]['page_content'];?></textarea>
  </div>
  
  
  <div class="form-group">
    <label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
    <select  class="form-control" name="status">
	   <option value="">Status</option>
       <option value="1" <?php if($editpages[0]['is_active']=="1"){ echo "selected";}?>>Active</option>
       <option value="0" <?php if($editpages[0]['is_active']=="0"){ echo "selected";}?>>Inactive</option>
   </select>
   </div>
  
  
  
  
 
   <input type="hidden" class="form-control" name="createdby" value="<?php echo $_SESSION['admin_id'];?>">
   <input type="hidden" class="form-control" name="customerid" value="<?php echo $editcustomers[0]['ac_id'];?>">
  <button type="submit" name="editpage" class="btn btn-xs btn-default btyellow" style="height:35px;">Update</button>
  </div>
</form>
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
    
    
    
    
</body>