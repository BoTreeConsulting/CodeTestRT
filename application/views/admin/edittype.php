<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Edit Type</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <?php include("includes/header_css.php"); ?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>	
        <script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript"> 
            tinymce.init({
            selector: "#content",
            mode : "textareas",
            editor_selector : "form-control",
            editor_deselector : "form-control1",
            plugins: "link image"
         });
        </script>
        <link href="<?php echo base_url(); ?>assets/css/loyalstyle.css" rel="stylesheet">
   <script>
 
  // When the browser is ready...
  $(function() {
   
    // Setup form validation on the #register-form element
    $("#edittypeformid").validate({
   
        // Specify the validation rules
        rules: {			
	    itemname: "required",
            url: "required",
            seo_title: "required"
        },
        
        // Specify the validation error messages
        messages: {			
            itemname: "Please enter Title",  
            url: "Please enter URL", 
            seo_title: "Please enter SEO URL Value" 
        },
        
        submitHandler: function(form) {
            var returnValue = chkvalidate();
            if (returnValue) {
                seo_page();
                form.submit();
            }
        }
    });
    
    
        $( "#groupname" ).change(function() {
          var group_type = $(this).find('option:selected').attr('group_type');
          $('.home_type').html(group_type+"/");
        });

  });
  
  </script>
  
  
<script type="text/javascript">
    
    function seo_page()
    {
        var siteurl=$('.siteurl').html();
        var home_type=$('.home_type').html();
        var seo_title = $('#seo_title').val();
        var seo_final_url = siteurl+home_type+seo_title;
        
        $('#seo_url').val(seo_final_url);
    }
    
    function isNumberKey(evt)
    {	
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
        return false;
        return true;
    }

    function chkvalidate()
    {
        var dismsg = tinymce.get('content').getContent();
        if (dismsg == "")
        {
            alert("Please Enter Content");
            document.getElementById("content").focus();
            return false;
        }
        else
        {
            return true;
        }
    }

    function onlyAlphabets(evt, t) {
        var keyCode = (evt.which) ? evt.which : evt.keyCode;
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32)
        {
            return false;
        }
        return true;
    }

</script>

<style>    
    .seo_link
    {
        float:left;
        margin:15px 0px;
    }
    
    .siteurl, .home_type
    {
       font-weight:700;
    }
    
    .home_title
    {
        float:right;
        width:180px;
        margin-top: -5px;
    }
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Types / </span> <span>Edit Type</span></div>
     <?php
       $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_types" style="color:#FFF">Manage Types </a> / <span>Edit Type</span></div>
        
        <div class="mtextarea mtextarea2">		
	    <div class="row">
		<div class="col-md-6">
                    <form role="form" method="POST" id="edittypeformid" novalidate="novalidate">

                        <div class="form-group">
                         <label for="groupname">Group<span class="required_field"> * </span></label>
                          <select  class="form-control" name="groupname" id="groupname">
                            <option value="homes for sale" group_type="<?php echo replace("homes for sale");?>" <?php if($edittypes[0]['group_name'] == "homes for sale"){ echo "selected";}?> ><?php echo ucwords('homes for sale');?></option>
                            <option value="condos for sale" group_type="<?php echo replace("condos for sale");?>" <?php if($edittypes[0]['group_name'] == "condos for sale"){ echo "selected";}?> ><?php echo ucwords('condos for sale');?></option>
                            <option value="rentals" group_type="<?php echo replace("rentals");?>" <?php if($edittypes[0]['group_name'] == "rentals"){ echo "selected";}?> ><?php echo ucwords('rentals');?></option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="itemname">Link name<span class="required_field"> * </span></label>
                          <input type="text" class="form-control" name="itemname" id="itemname" placeholder="Enter Link name" value="<?php echo $edittypes[0]['item_name'];?>" onkeypress="return onlyAlphabets(event, this);">
                          <label for="itemname" generated="true" class=""></label>
                        </div>
                        
                        <div class="form-group">
                          <label for="url">URL<span class="required_field"> * </span></label>
                          <input type="text" class="form-control" name="url" id="url" placeholder="Enter URL" value="<?php echo $edittypes[0]['url'];?>">
                          <label for="url" generated="true" class=""></label>
                        </div>
                        
                        
                        <div class="form-group">
                          <label for="seo_title">SEO URL<span class="required_field"> * </span></label> 
                          <div class="clear"></div>
                          <span class="seo_link"><span class="siteurl"><?php echo base_url();?></span><span class="home_type"><?php echo replace($edittypes[0]['group_name']).'/';?></span>&nbsp;<span class="home_title"><input type="text" class="form-control" name="seo_title" id="seo_title" placeholder="Enter SEO URL Value" value="<?php echo str_replace('_',' ',$edittypes[0]['seo_title']);?>" ></span></span>
                          <label for="seo_title" generated="true" class=""></label>
                        </div>
                        
                         <div class="clear"></div>
                        
                        <div class="form-group">		
                            <label for="content">Content<span class="required_field"> * </span></label>		
                            <textarea id="content" name="content" rows="8" class="form-control"><?php echo html_entity_decode($edittypes[0]['content'], ENT_QUOTES); ?></textarea>		
                        </div>

                        <div class="form-group">
                          <label for="seo_page_title">SEO Title<span class="required_field">  </span></label>
                          <input type="text" class="form-control" name="seo_page_title" id="seo_page_title" placeholder="Enter URL" value="<?php echo $edittypes[0]['seo_page_title'];?>" placeholder="Enter SEO Title" maxlength="70">
                          <label for="seo_page_title" generated="true" class=""></label>
                        </div>

                        <div class="form-group">
                          <label for="seo_keywords">SEO Meta Keywords<span class="required_field">  </span></label>
                          <textarea type="text" class="form-control" name="seo_keywords" id="seo_keywords" rows="3"  placeholder="Enter SEO Meta Keywords" maxlength="250"><?php echo $edittypes[0]['seo_keywords'];?></textarea>
                          <label for="seo_keywords" generated="true" class=""></label>
                        </div>

                        <div class="form-group">
                          <label for="seo_description">SEO Meta Description<span class="required_field">  </span></label>
                          <textarea type="text" class="form-control" name="seo_description" id="seo_description" rows="3" placeholder="Enter SEO Meta Description" maxlength="250"><?php echo $edittypes[0]['seo_description'];?></textarea>
                          <label for="seo_description" generated="true" class=""></label>
                        </div>

                        <div class="form-group">
                          <label for="status">Status<span class="required_field"> * </span></label>
                           <select  class="form-control" name="status">
                             <option value="1" <?php if($edittypes[0]['is_active']=="1"){ echo "selected";}?>>Active</option>
                             <option value="0" <?php if($edittypes[0]['is_active']=="0"){ echo "selected";}?>>Inactive</option>
                           </select>
                        </div>
                         
                        <input type="hidden" class="form-control" name="seo_url" id="seo_url" value="<?php echo $edittypes[0]['seo_url'];?>">

                         
                        <input type="hidden" class="form-control" name="createdby" value="<?php echo $_SESSION['admin_id'];?>">
                        <input type="hidden" class="form-control" name="customerid" value="<?php echo $editcustomers[0]['ac_id'];?>">
                        
                        <button type="submit" name="edittypeposted" class="btn btn-xs btn-default btyellow" style="height:35px;">Update</button>

                    </form>
                    
		</div>
		<div class="col-md-6">
		 
		</div>
		

	    </div>
            
        </div>
        <div class="dbshadow"></div>
        
        <?php
        function replace($val)
        {
           /* return str_replace(' ','_',$val);*/

            return str_replace(' ','-',$val);
        }

        ?>
        
    </div>
    <div class="clear"></div>
    <div class="col-md-12 footer">
    	<div class="headtext1">COPYRIGHT &copy; <?php echo date("Y");?> REALTYTOPIA. ALL RIGHTS RESERVED.</div>
    </div>
    </div>
</body>

