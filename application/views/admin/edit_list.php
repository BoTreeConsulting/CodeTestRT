<?php
//print_r($item_record);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>HasBeenUsed Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <link href="<?=site_url('/assets/css/bootstrap-combined.min.css')?>" rel="stylesheet">
       <link href="<?=site_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet">
       <link href="<?=site_url('/assets/css/bootstrap.css')?>" rel="stylesheet">
       <link href="<?=site_url('/assets/css/loyalstyle.css')?>" rel="stylesheet">
       <link href="<?=site_url('/assets/css/styles.css')?>" rel="stylesheet">
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	   <script src="<?=site_url('/assets/css/menu_jquery.js')?>"></script> 

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
    </head>
  <body>
   
   <div class="col-lg-12 navbar-inner">
          <a class="brand"><img src=" <?php echo base_url("assets/site_images/admin-logo2.png");?>"  style="vertical-align:middle;"></a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">Welcome <span><?php  echo $this->session->userdata("admin_name");?></span> <a href="<?=site_url('/admin/logout')?>" class="">Logout</a></p>
          </div>
    </div>
    <div class="col-md-12">
    <?php 
	include "left-menu.php";
	?>
    
    <div class="col-md-9 rightcol ">
   <div class="headtext1"> Manage Listings/ <span><a style="color:#FFF" href="<?=site_url('/admin/manage_items')?>">Manage Listings</a></span></div>
        <div class="mtextarea" >
        <h3> Add Category</h3>
        <div class="container">
    <div>
    	<div class="container" style="padding:30px;">
  
    <div id="infoMessage"><?php echo $this->session->flashdata('message');?></div>
<?php ?><?= form_error('invalid'); ?>
 <div id="form_error" class="formerror"><p><?php echo validation_errors(); ?></p></div>
<form  name="add_category" id="add_category" action="<?php echo base_url();?>admin/add_category" method="POST" enctype="multipart/form-data"  onSubmit="return validateForm()">
                            <input name="frmSubmitR" type="hidden" id="frmSubmitR" value="yes" />
 <fieldset>
<div class="control-group">
 <label class="control-label"  for="select_parent"><span>Category Name</span></label>
  <div class="controls">
 
  <?php 
$lastsegmant = end($this->uri->segments);  
function RecursiveCat($pid,$lastsegmant)
{
static $level=0;

static $strid="";

static $strname="";


$sql=mysql_query("select * from  tbl_categories where parent_id = '$pid' order by cat_name ");

while($row=mysql_fetch_assoc($sql))

{

$id=$row['cat_id'];

$level--;

$pad="";

for($p=1;$p<($level*-1);$p++) $pad.="&nbsp;&nbsp;&nbsp;";

if($lastsegmant == $row['cat_id'])
{
$strname.='<option value="'.$row['cat_id'].'"  selected="selected">'.$pad.$row['cat_name'].'</option>';
}
else
{
$strname.='<option value="'.$row['cat_id'].'">'.$pad.$row['cat_name'].'</option>';
}

$rid=RecursiveCat($id,$lastsegmant);

$strid[]=$row['cat_id'];

$level++;

}

return $strname;

}

echo '<select name="select_parent"><option value="0">-No Parent-</option>';

echo RecursiveCat(0,$lastsegmant);

echo '</select>'; 
  ?>
  
  
   <?php /*?><select name="select_parent">
   <option value="0" id="0">No Parent-</option>
		<?php
        for ($i = 0; $i <count($select_parent); $i++) 
        {
		if($select_parent[$i]->parent_id==0)
		{	
        ?>
        <option value="<?php echo $select_parent[$i]->cat_id; ?>"><?php echo $select_parent[$i]->cat_name; ?>--<?php echo $select_parent[$i]->parent_id; ?></option>
        <?php 
		}
		}
		?>
    </select><?php */?>
    <?php for($i=0;$i<count($item_record);$i++){?>
  </div>
    </div>
     <div class="control-group">
      <label class="control-label" for="item_name"><span>Iteam Name&nbsp;*</span></label>
      <div class="controls">
        <input type="text" name="item_name"  id="item_name" value="<?php echo $item_record[$i]->item_name;?>">
      </div>
      
    </div>
     <div class="control-group">
      <label class="control-label" for="price"><span>Price</span></label>
      <div class="controls">
     <input type="text" name="price"  id="price" value="<?php echo $item_record[$i]->price;?>">
      </div>
    </div>
    
    
     <div class="control-group">
      <label class="control-label" for="cat_image"><span>Iteam Picture</span></label>
      <div class="controls">
      <!--img  src="<?php echo base_url();?>assets/uploads/categorypics/<?php //echo $item_record[$i]->item_picture;?>"/-->
      <input type="file" name="cat_image" id="cat_image" />
      </div>
    </div>
    
    
     <div class="control-group">
      <label class="control-label" for="cat_image"><span>Description</span></label>
      <div class="controls">
       <textarea name="cat_description" id="cat_description" style="width: 437px; margin: 0px 0px 10px; height: 139px;"></textarea>
      </div>
    </div>
    
     <div class="control-group">
      <label class="control-label" for="cat_image"><span>Choose Duration(in days)</span></label>
      <div class="controls">
     <select name="duration">
     <option>10</option>
     <option>20</option>
     <option30></option>
     </select>
      </div>
    </div>
    
     <div class="control-group">
      <label class="control-label" for="cat_image"><span>Select Attributes</span></label>
      <div class="controls">
      <label>Color</label><input type="text" style="width:90px">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="futr_cat"><span>Buy Out Method</span></label>
      <div class="controls">
    <span><input type="radio" name="futr_cat"  id="futr_cat" value="Yes" style=" margin-bottom:7px;"></span>&nbsp;<span>Yes</span>&nbsp;
    <span><input type="radio" name="futr_cat" id="futr_cat"  value="No" style=" margin-bottom:7px;"></span>&nbsp;<span>No</span>&nbsp; 
      </div>
    </div>
    
     <div class="control-group">
      <label class="control-label" for="cat_image"><span>Postage Cost(Up to 2 Decimals)</span></label>
      <div class="controls">
      <input type="file" name="cat_image" id="cat_image" />
      </div>
    </div>
     <div class="control-group">
      <label class="control-label" for="cat_image"><span>Postage Services</span></label>
      <div class="controls">
      <input type="file" name="cat_image" id="cat_image" />
      </div>
    </div>
     <div class="control-group">
      <label class="control-label" for="cat_image"><span>Postage Location</span></label>
      <div class="controls">
      <input type="file" name="cat_image" id="cat_image" />
      </div>
    </div>
    
     <div class="control-group">
      <label class="control-label" for="futr_cat"><span>Want To Re-list Sold Items</span></label>
      <div class="controls">
    <span><input type="radio" name="futr_cat"  id="futr_cat" value="Yes" style=" margin-bottom:7px;"></span>&nbsp;<span>Yes</span>&nbsp;
    <span><input type="radio" name="futr_cat" id="futr_cat"  value="No" style=" margin-bottom:7px;"></span>&nbsp;<span>No</span>&nbsp; 
      </div>
    </div>
     <div class="control-group">
      <label class="control-label" for="futr_cat"><span>Want To Re-list Un-Sold Items</span></label>
      <div class="controls">
    <span><input type="radio" name="futr_cat"  id="futr_cat" value="Yes" style=" margin-bottom:7px;"></span>&nbsp;<span>Yes</span>&nbsp;
    <span><input type="radio" name="futr_cat" id="futr_cat"  value="No" style=" margin-bottom:7px;"></span>&nbsp;<span>No</span>&nbsp; 
      </div>
    </div>
      <div class="control-group">
      <label class="control-label" for="cat_status"><span>Status&nbsp;</span></label>
      <div class="controls">
       <select name="status" id="status">
   <option value="active">Active</option>
   <option value="inactive">Inactive</option>
    </select>
      </div>
       </div>
       <div class="control-group">
      <label class="control-label" for="cat_desc"><span>List NOtice</span></label>
      <div class="controls">
      <textarea name="cat_description" id="cat_description" style="width: 437px; margin: 0px 0px 10px; height: 139px;"></textarea>
      </div>
    </div>
 <?php }?>
</form>
</div> 
    </div>
</div> 
        	
            <div class="mtext">
            	<div style=" margin-bottom:17px;">
                    <!--a href="#" class="btn btn-xs btn-default btyellow pull-right">Add New</a-->
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="dbshadow"></div>
        
    </div>
    <div class="clear"></div>
    <div class="col-md-12 footer">
    	<div class="headtext1">© Copyright 2014 HasBeenUsed </div>
    </div>
    </div>
</body>

  </body>
</html>