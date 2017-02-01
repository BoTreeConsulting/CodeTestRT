<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Realtytopia Edit Blog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<?php include("includes/header_css.php"); ?>
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script> 
		<script>
			
			// When the browser is ready...
			$(function() {
				
				tinymce.init({
					selector: '#lastname',
					height: 300,
					theme: 'modern',
					plugins: [
					'advlist autolink lists link image charmap print preview hr anchor pagebreak',
					'searchreplace wordcount visualblocks visualchars code fullscreen',
					'insertdatetime media nonbreaking save table contextmenu directionality',
					'emoticons template paste textcolor colorpicker textpattern imagetools'
					],
					toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
					toolbar2: 'print preview media | forecolor backcolor emoticons',
					image_advtab: true,
					templates: [
					{ title: 'Test template 1', content: 'Test 1' },
					{ title: 'Test template 2', content: 'Test 2' }
					],
					content_css: [
					'//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
					'//www.tinymce.com/css/codepen.min.css'
					],
					relative_urls : false,
					
					external_filemanager_path:"/ResponsiveFilemanager-master/filemanager/",
					filemanager_title:"Responsive Filemanager" ,
					external_plugins: { "filemanager" : "/ResponsiveFilemanager-master/filemanager/plugin.min.js"},
				});
				
				// Setup form validation on the #register-form element
				$("#customer").validate({
					
					// Specify the validation rules
					rules: {
						name: "required",
						lastname: "required",
						category_id: "required",
						// userfile:"required",
					},
					
					// Specify the validation error messages
					messages: {
						name: "Please enter blog title",
						lastname: "Please enter blog content",
						category_id: "Please select category",
						// userfile:"please select image",
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
				
				var charCode = (evt.which) ? evt.which : event.keyCode;
				if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
				{ return false; }
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
				<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Blogs /</span> <span>Edit Blog</span></div>
				<?php
					$total = $this->uri->total_segments();
				$modulename = $this->uri->segment($total);?>
				
				<div class="headtext1"> <a href="<?php echo base_url();?>admin/manage_blogs" style="color:#FFF">Manage Blogs </a>/<span>Edit Blog</span></div>
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
							<form role="form" method="POST" id="customer" novalidate="novalidate" enctype="multipart/form-data">
								<div class="form-group">
									<label for="exampleInputEmail1">Blog Title<span class="required_field"> * </span></label>
									<input type="text" class="form-control"  name="name" id="name" value="<?php echo $editblogs[0]['blog_title'];?>" id="exampleInputEmail1" placeholder="Enter Blog Title">
								</div>
								
								
								
								<div class="form-group">
									<label for="exampleInputEmail1">Blog Content<span class="required_field"> * </span></label>
									<textarea class="form-control" name="lastname" id="lastname" id="exampleInputEmail1" rows="10" cols="75" placeholder="Enter Blog Content"><?php echo $editblogs[0]['blog_content'];?></textarea>
									<input type="hidden" name="userid" value="<?php echo $editblogs[0]['blog_posted_by'];?>">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Blog Category<span class="required_field"> * </span></label>
									<select class="form-control" name="category_id" id="category_id" >
										<option value=''>Select Category</option>
										<?php for($i=0;$i<count($blog_categories);$i++){ ?>
											<option value='<?php echo $blog_categories[$i]->id; ?>' <?php if($editblogs[0]['category_id'] == $blog_categories[$i]->id) { echo "selected"; } ?> ><?php echo str_replace('-',' ',$blog_categories[$i]->category_name); ?></option>
										<?php } ?>
									</select>
								</div>
								
								<!--div class="form-group">
									<label for="exampleInputEmail1">Add Photo<span class="required_field"> * </span></label>
									<input type="file" name="userfile" id="userfile" class="form-control" />
								</div-->
								
								
								
								<?php /*if($editblogs[0]['blog_image'] != ''){ ?>
									<img src="<?php echo base_url(); ?>uploads/blog/<?php echo $editblogs[0]['blog_image'];  ?>" alt="" style="max-width:100px;height:auto;"/>
									
									<?php }
									else
									{
									?>
									<img src="<?php echo base_url(); ?>assets/front/images/noimage1.jpg" alt="" style="max-width:100px;height:auto;"/>
									
									<?php }*/
								?>
								
								<div class="form-group">
									<label for="exampleInputPassword1">Status <span class="required_field"> * </span></label>
									<select  class="form-control" name="status">
										<option value="1" <?php if($editblogs[0]['is_active']=="1"){ echo "selected";}?>>Active</option>
										<option value="0" <?php if($editblogs[0]['is_active']=="0"){ echo "selected";}?>>Inactive</option>
									</select>
								</div>
								<input type="hidden" class="form-control" name="customerid" value="<?php echo $editblogs[0]['id'];?>">
								<button type="submit" name="edit" class="btn btn-xs btn-default btyellow" style="height:35px;">Update</button>
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