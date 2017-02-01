<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia CMS</title>
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
            mode : "textareas",
            editor_selector : "form-control",
            editor_deselector : "form-control1",
            plugins: "link image",
			external_filemanager_path:"/ResponsiveFilemanager-master/filemanager/",
			filemanager_title:"Responsive Filemanager" ,
			external_plugins: { "filemanager" : "/ResponsiveFilemanager-master/filemanager/plugin.min.js"},
			
         });
          
        </script>
    <link href="<?php echo base_url()  ?>assets/css/loyalstyle.css" rel="stylesheet">
        <style>    
            .seo_link
            {
               float:left;
               margin:15px 0px;
            }

            .siteurl
            {
              font-weight:700;
            }

            .link_title
            {
               float:right;
               width:150px;
               margin-top: -5px;
            }
           
            #frmArticle label.error {
                color: #a94442;
                font-weight: 600;
                background: #ebccd1;
                width: 100%;
                padding: 3px 8px;
                margin-top: 2px;
                border-radius: 3px;
              }

            .form-control {	
                background-color: #fff !important;
            }
        </style>
        <script type="text/javascript">
            /* When the browser is ready... */
            $(function () {
                /* Setup form validation on the #register-form element */
                $("#frmArticle").validate({
                    /* Specify the validation rules */
                    rules: {
                        parent_id: "required",
                        page: "required",
                       /*  title: "required", */
                        article: "required",
                        metaKeywords: "required",
                        metaDescription: "required",
                        //pageTitle: "required",
                        linkName: "required",
                        link_title: "required",
                    },
                    /* Specify the validation error messages */
                    messages: {
                        parent_id: "Please select Parent",
                        page: "Please enter name",
                        /* title: "Please enter block title", */
                        article: "Please enter content",
                        metaKeywords: "Please enter Meta Keywords",
                        metaDescription: "Please enter Meta Description",
                        //pageTitle: "Please enter Page Title",
                        linkName: "Please enter Link Name",
                        link_title: "Please enter Link Url",
                    },
                    submitHandler: function (form) 
                    {
                        var returnValue = chkvalidate();
                        if (returnValue) {
                            seo_page();
                            form.submit();
                        }
                    }
                });
            });
        </script>
        <script type="text/javascript">
           function chkvalidate()
            {
                var dismsg = tinymce.get('article').getContent();
                if (dismsg == "")
                {
                    alert("Please Enter Page Content");
                    document.getElementById("article").focus();
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


            function seo_page()
            {
                var siteurl=$('.siteurl').html();
                var link_title = $('#link_title').val();
                var seo_final_url = siteurl+link_title;
                $('#linkURL').val(seo_final_url);
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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage CMS /</span> <span>CMS Home Page</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
    	<div class="headtext1"> <a href="<?php echo base_url();?>cms/cmspage/<?php echo $parent_id;?>" style="color:#FFF">Manage CMS</a>/<span>CMS Home Page</span></div>
        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->

		
		<div class="row">
		<div class="col-md-6">
		 <form role="form" id="frmArticle" action="<?php echo base_url() ?>cms/addSubPage" method="POST" novalidate="novalidate">
		 

                    <div class="form-group">
                        <label for="parentname">Parent Name<span class="required_field"> * </span></label>
                        <select class="form-control" name="parent_id" id="parent_id" >
                                <option value=''>Select Parent</option>
                                <?php for($i=0;$i<count($cmsdata);$i++){ ?>
                                <option value='<?php echo $cmsdata[$i]['id']; ?>' <?php if($cmsdata[$i]['id'] == $parent_id) { echo "selected"; } ?> ><?php echo $cmsdata[$i]['page']; ?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="page">Page Title<span class="required_field"> * </span></label>
                      <input type="text" id="page" name="page" placeholder="Enter page name" class="form-control"  required>
                    </div>

                    <div class="form-group"   style="display:none;">
                      <label for="title">Block Title<span class="required_field"> * </span></label>
                      <input type="text" id="title" name="title" placeholder="Enter block title" class="form-control">
                    </div>


                     <div class="form-group">
                      <label for="article">Content<span class="required_field"> * </span></label>
                      <textarea id="article" name="article" rows="8" class="form-control"  placeholder="Enter Page content"></textarea>
                    </div>
					
                    <div class="form-group">
                      <label for="MetaKeywords">Meta Keywords<span class="required_field"> * </span></label>
                      <input type="text" id="metaKeywords" name="metaKeywords" placeholder="Enter Meta Keywords" class="form-control"  required>
                    </div>

                    <div class="form-group">
                      <label for="metaDescription">Meta Description<span class="required_field"> * </span></label>
                      <textarea id="metaDescription" name="metaDescription" rows="8" class="form-control form-control1"  ></textarea>
                    </div>

                    <!-- <div class="form-group">
                      <label for="pageTitle">Page Title<span class="required_field"> * </span></label>
                      <input type="text" id="pageTitle" name="pageTitle" placeholder="Enter Page Title" class="form-control"  required>
                    </div> -->

                      <div class="form-group">
						  <label for="linkName">Link Name<span class="required_field"> * </span></label>
						  <input type="text" id="linkName" name="linkName" placeholder="Enter Link Name" class="form-control"  required>
					  </div>
                     
                    <?php 
                    $query2 = $this->db->query("select * from tbl_cms_content where id='".$parent_id."'");
                    $row2= $query2->row();                                
                    ?>

                    <div class="form-group">
                        <label for="link_title">Link URL<span class="required_field"> * </span></label> 
                        <div class="clear"></div>
                        <span class="seo_link"><span class="siteurl"><?php echo $row2->link_url;?>/</span>&nbsp;
                            <span class="link_title">
                                <input type="text" class="form-control" name="link_title" id="link_title" placeholder="Enter Link URL">
                            </span>
                        </span>
                        <label for="link_title" generated="true" class=""></label>
                    </div>

                    <div class="clear"></div>

                    <input type="hidden" class="form-control" name="linkURL" id="linkURL">

                    <button type="submit"  name="add_content" class="btn btn-xs btn-default btyellow">Add Content</button>  

                    <!-- <div class="form-group">
                      <label for="linkURL ">Link URL<span class="required_field"> * </span></label>
                      <input type="text" id="linkURL" name="linkURL" placeholder="Enter Link URL" class="form-control"  required>
                    </div>    -->             

                     
  
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
    	<div class="headtext1">COPYRIGHT &copy;  <?php echo date("Y");?> REALTYTOPIA. ALL RIGHTS RESERVED.</div>
    </div>
    </div>
    
</body>
