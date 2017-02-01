<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Realtytopia MyAccount</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
        <?php include("includes/header_css.php"); ?>
		
		<script>
			
			// When the browser is ready...
			$(function() {
				
				// Setup form validation on the #register-form element
				$("#customer").validate({
					
					// Specify the validation rules
					rules: {
						name: "required",
						email: {
							required: true,
							email: true
						},
						username: "required",
						password: "required",
						address: "required",
						position: "required",
						faxno: "required",
						
					},
					
					// Specify the validation error messages
					messages: {
						name: "Please enter your name",
						email: "Please enter a valid email address",
						username: "Please enter username",
						password: "Please enter password",
						address: "Please enter address",
						position: "Please enter position",
						faxno: "Please enter fax number",
						
						
						
					},
					
					submitHandler: function(form) {
						var returnValue = chkvalidate();
						if(returnValue)
						{
							form.submit();
						}
					}
				});
				
			});
			
		</script>
		
		<!--Conform password -->
		
		<script type="text/javascript">
			function confirmPass() {
				var pass = document.getElementById("pass").value
				var confPass = document.getElementById("c_pass").value
				if(pass != confPass) {
					alert('Password Mismatched !');
					return false;
				}
			}
		</script>
		
		
		<!--Conform password -->
		
		
		<script type="text/javascript">
			function checkPhone1()
			{
				var ph1 = $("#phonenumber1").val();	
				if(ph1.length >= 2)
				{ 
					$("#phonenumber2").focus(); 
				}
			}
			
			function checkPhone2()
			{
				var ph2 = $("#phonenumber2").val();	
				if(ph2.length >= 2)
				{ 
					$("#phonenumber3").focus(); 
				}
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
				var ph1 = $("#phonenumber1").val();	
				var ph2 = $("#phonenumber2").val();	
				var ph3 = $("#phonenumber3").val();	
				if(ph1 == "" || ph1.length != 3)
				{
					$("#phnoerror").show();
					$("#phnoerror").html("Please Enter Phone Number (10 digits)");
					return false;
				}
				if(ph2 == "" || ph2.length != 3)
				{
					$("#phnoerror").show();
					$("#phnoerror").html("Please Enter Phone Number (10 digits)");
					return false;
				}
				if(ph3 == "" || ph3.length < 4)
				{
					$("#phnoerror").show();
					$("#phonenumber3").focus();
					$("#phnoerror").html("");
					$("#phnoerror").html("Please Enter Phone Number (10 digits)");
					return false;
				}
				else
				{
					$("#phnoerror").hide();
					return true;
				}	
				
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
				<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Account /</span><span>MyAccount</span></div>
				<?php
					$total = $this->uri->total_segments();
				$modulename = $this->uri->segment($total);?>
				
				<div class="headtext1"><span>MyAccount</span></div>
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
				<div class="mtextarea mtextarea2">
					<!--h2>Admin Panel</h2-->
					
					
					<div class="row">
						<form role="form" id="customer" action="<?php echo base_url();?>admin/accounts" method="post">
							<div class="col-md-6">
								
								<div class="form-group">
									<label for="exampleInputEmail1">Name<span class="required_field"> * </span></label>
									<input type="text" class="form-control" name="name" value="<?php echo $data[0]['admin_name']; ?>" id="name" placeholder="Enter Name">
									<label for="name" generated="true" class=""></label>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Email<span class="required_field"> * </span> </label>
									<input type="email"  value="<?php echo $data[0]['admin_email']; ?>" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Username<span class="required_field"> * </span></label>
									<input type="text" class="form-control" name="username" readonly id="exampleInputEmail1" value="<?php echo $data[0]['admin_username']; ?>" placeholder="Enter UserName">
								</div>
								<div class="form-group">
								<label for="exampleInputPassword1">Password <span class="required_field"> * </span></label>
								<?php $pwd=$data[0]['usr_pwd'];
									$newpwd=base64_decode(base64_decode($pwd));
								?>
								<input type="password" class="form-control" name="password" value="<?php echo $newpwd; ?>" id="pass" placeholder="Enter Password">
							</div>
							
							<div class="form-group">
								<label for="exampleInputPassword1">Confirm password <span class="required_field"> * </span></label>
								<input type="password" class="form-control" name="cpassword" id="c_pass" value="<?php echo $newpwd; ?>" placeholder=" Confirm Password">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Address<span class="required_field"> * </span> </label>
								<textarea class="form-control" name="address" rows="3" cols="3"><?php echo $data[0]['admin_address']; ?></textarea>
							</div>
							
							
							<div class="form-group">
								<label for="exampleInputPassword1">Phone number<span class="required_field"> * </span></label>
								<table style="width:60% !important;"><tr><td><input type="text" class="form-control" name="phonenumber1" id="phonenumber1" placeholder="xxx" onkeypress="checkPhone1(); return isNumberKey(event)" maxlength="3" value="<?php echo substr($data[0]['admin_phone'], 0, 3);?>"> - </td>	
									<td><input type="text" class="form-control" name="phonenumber2" id="phonenumber2" placeholder="xxx"  onkeypress="checkPhone2(); return isNumberKey(event)" maxlength="3" value="<?php echo substr($data[0]['admin_phone'], 3, 3);?>"> - </td> 
								<td><input type="text" class="form-control" name="phonenumber3" id="phonenumber3" placeholder="xxxx"  onkeypress="return isNumberKey(event)" maxlength="4" value="<?php echo substr($data[0]['admin_phone'], 6, 4);?>"></td> </tr></table>
								<!-- <input type="text" name="phone" class="form-control" value="<?php //echo $data[0]['admin_phone']; ?>" id="phone" placeholder="Enter Phone Number" onkeypress="return isNumberKey(event)">-->
								<label for="phonenumber3" generated="true" class="error" id="phnoerror" style="display:none;">Please enter a Phone Number</label>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Fax No.<span class="required_field"> * </span></label>
								<input type="text" name="faxno" class="form-control" id="faxno" value="<?php echo $data[0]['admin_fax_no']; ?>" placeholder="Enter Fax No" onkeypress="return isNumberKey(event)">
							</div> <!-- </div> -->
							
							<button type="submit" name="update" value="updateadmin" onclick="return confirmPass()" class="btn btn-xs btn-default btyellow" style="height:35px;">Update</button>
						</div>
						<div class="col-md-6">
							<?php if($this->session->userdata('admin_name') == 'admin'){ ?>
							<div class="form-group">
									<label for="exampleInputEmail1">Savings (%)<span class="required_field"> * </span></label>
									<input type="number" class="form-control" name="saving_prercent" value="<?php echo $data[0]['saving_prercent']; ?>" id="saving_prercent" placeholder="Enter saving prercent">
									<label for="saving_prercent" generated="true" class=""></label>
								</div>
							<?php } ?>
						</div>
					</form>
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