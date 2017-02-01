<!DOCTYPE html>
<html lang="en">
  <head>
  <title>REALTYTOPIA Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Loyalty Admin Panel">
    <meta name="author" content="">
    <meta charset="utf-8">   
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
   <link href="<?php echo site_url('/assets/css/loyalstyle.css')?>" rel="stylesheet">
          <link href="<?php echo site_url('/assets/css/bootstrap.css')?>" rel="stylesheet">
		         <link href="<?php echo site_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>                         

  <body onLoad="myCaptcha()" style="background: #8bca1a;">
	

  
    <div class="container">
    <div class="row-fluid">
    <div align="center" style="margin:40px 0px -13px 0px"><a href='<?php echo base_url(); ?>'><img src=" <?php echo base_url("assets/site_images/admin-logo2.png");?>" style="vertical-align:middle;" /> </a></div>
    
    
      <div class="llogbg col-md-4 col-md-offset-4">
	  
	  
        <?php 
		if($this->session->flashdata('status')):?> 		<div id="form_error" class="formerror">		<?php echo $this->session->flashdata('status');?>		</div>		<?php endif;
	if($err!=''){
		 ?>
        <div id ="errors">
		<?php
		if($this->session->flashdata('status')): echo $this->session->flashdata('status'); endif;
		echo form_error('invalid');
		?>
        </div>
		<?php } ?>
		   <?php 
		$err1=validation_errors();
	if($err1!=''){
		 ?>
        <div id="form_error" class="formerror"><p><?php echo validation_errors(); ?></p></div>
<?php } ?>       
      <?php if(isset($error)){?>
		<div class="formerror">Invalid Username / Password</div><?php } ?>

	
	   
	   
        <form name="" method="post" action="<?php echo base_url('admin/login'); ?>" > 
        <label for="username" class="lbtext">Username</label>
        <input type="text" name="username" placeholder="Please enter username" value="<?php echo set_value('username') ?>" class="ff">   <br>
        <label for="password" class="lbtext">Password</label>
        <input type="password" placeholder="Please enter password" name="password" class="ff">
         

<label for='message' class="lbtext">Are you a human</label><br>
<!-- &nbsp;<img src="<?php echo base_url("assets/site_images/captcha.png");?>"  /><br> -->
&nbsp;<img src="<?php echo base_url("assets/captcha/CaptchaSecurityImages.php?width=100&amp;height=30&amp;characters=5");?>"  /><br>
<input type="text" placeholder="Enter captcha code" name="security_code" id="security_code" class="ff" autocomplete="off">
    
        
        <br>
        <input type="submit" value="Login" class="lsbtn" onclick="validate()">
		<p class="forgot-password"><a href="<?php echo base_url("forgotpassword");?>"> Retrieve My Password </a></p>
        </form>
      </div>
     </div>
 

    </div> <!-- /container -->
    <div class="lcopyright">COPYRIGHT © <?php echo date("Y");?> REALTYTOPIA. ALL RIGHTS RESERVED.
	</div>
    <!--script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script-->
  </body>
</html>
