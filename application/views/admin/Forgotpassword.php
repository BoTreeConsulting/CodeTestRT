<!DOCTYPE html>
<html lang="en">
  <head>
  <title>REALTYTOPIA Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Loyalty Admin Panel">
    <meta name="author" content="">
    <meta charset="utf-8">   
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
   <link href="<?php echo site_url('/assets/css/loyalstyle.css')?>" rel="stylesheet">
          <link href="<?php echo site_url('/assets/css/bootstrap.css')?>" rel="stylesheet">
		         <link href="<?php echo site_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet">

   <script type="text/javascript">
          function checkSpcialChar(e){
			 var keynum
			var keychar
			var numcheck
			if (window.event) {
				keynum = e.keyCode;
			}
			else if (e.which) {
				keynum = e.which;
			}
			keychar = String.fromCharCode(keynum);
			if (keychar == "'" || keychar == "`" || keychar =="!" || keychar =="#" || keychar =="$" || keychar =="%" || keychar =="^" || keychar =="&" || keychar =="*" || keychar =="(" || keychar ==")" || keychar =="-" || keychar =="_" || keychar =="+" || keychar =="=" || keychar =="/" || keychar =="~" || keychar =="<" || keychar ==">" || keychar =="," || keychar ==";" || keychar ==":" || keychar =="|" || keychar =="?" || keychar =="{" || keychar =="}" || keychar =="[" || keychar =="]" || keychar =="¬" || keychar =="£" || keychar =='"' || keychar =="\\") {
				return false;
			} else {
				return true;
			}
          }
		  function validate()
		  {
			if(document.getElementById('emailid').value == '')
				{
					document.getElementById('emailerror').style.display="block";
					document.getElementById('emailerror').innerHTML = 'Please enter your Email ID';
					document.userregister.emailid.focus();
					return false;
				}
				var x = document.forms["userregister"]["emailid"].value;
				var atpos = x.indexOf("@");
				var dotpos = x.lastIndexOf(".");
				if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length)
				{
					document.getElementById('emailerror').style.display="block";
					document.getElementById('emailerror').innerHTML = 'Not a valid e-mail address';
					document.userregister.emailid.focus();
					return false;
				}
			 
			  else
			  {
				  document.getElementById('emailerror').style.display="none";
				  return true;
			  }
		  }
       </script>
  </head>                         

  <body style="background: #8bca1a;">
	

  
    <div class="container">
    <div class="row-fluid">
    <div align="center" style="margin:40px 0px -13px 0px"><img src=" <?php echo base_url("assets/site_images/admin-logo2.png");?>" style="vertical-align:middle;"></div>
    
    
      <div class="llogbg col-md-4 col-md-offset-4">
	  
	 
        <?php 
		if($this->session->flashdata('status')):?> 	 <div id="form_error" class="formerror">			<?php echo $this->session->flashdata('status');?>	</div>	<?php endif; ?>
      	<div id="emailerror" style="display:none;background-color: #f2dede;color: red;font-weight: bold;  text-align: center;padding: 10px 0;margin-bottom: 18px;border-radius: 3px;"></div>	
		   
        <form name="userregister" method="post" action="<?php echo base_url('forgotpassword'); ?>" onSubmit="return validate();"> 
     <center>   <h2 style="color:white;">Forgot Password</h2></center>
       <br>
        <label for="emailid" class="lbtext">Enter Your Email</label>
        <input type="text" placeholder="Please enter Email ID" name="emailid" id="emailid" onkeypress="return checkSpcialChar(event)" class="ff" />
        <br>
        <input type="submit" value="Retrieve My Password" class="lsbtn">
		<input type="hidden" value="yes" name="frmSubmit">
		<p class="forgot-password"><a href="<?php echo base_url("admin/login");?>"> Click here to Login </a></p>
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
