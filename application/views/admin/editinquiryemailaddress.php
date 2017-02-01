<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Edit Inquiry Email Address</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <?php include("includes/header_css.php"); ?>
   <script>
 
  // When the browser is ready...
  $(function() {
   
      // Setup form validation on the #register-form element
      $("#editinquiryformid").validate({   
          // Specify the validation rules
          rules: {

  			      contact_inquiry_email : {
                  required: true, 
                  email: true
              },

             request_inquiry_email : {
                  required: true, 
                  email: true
              },

              franchise_inquiry_email : {
                  required: true, 
                 email: true
              },

              showing_inquiry_email : {
                  required: true, 
                  email: true
              },

              property_inquiry_email : {
                 required: true, 
                  email: true
              },

              agent_inquiry_email : {
                 required: true, 
                  email: true
              },

              review_inquiry_email : {
                  required: true, 
                  email: true
              },
          },
          
            // Specify the validation error messages
            messages: {
                contact_inquiry_email: "Please enter valid Email Address",  
                request_inquiry_email: "Please enter valid Email Address", 
                franchise_inquiry_email: "Please enter valid Email Address",  
                showing_inquiry_email: "Please enter valid Email Address",  
                property_inquiry_email: "Please enter valid Email Address",  
                agent_inquiry_email: "Please enter valid Email Address",  
                review_inquiry_email: "Please enter valid Email Address",            
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
      
        <div class="col-md-10 rtcol">
    	     <div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage Settings /</span> <span>Edit Inquiry Email Address</span></div>
          
            <?php
      	      $total = $this->uri->total_segments();
              $modulename = $this->uri->segment($total);
            ?>
    	
      	    <div class="headtext1"> <span>Edit Inquiry Email Address</span></div>

            <div class="mtextarea mtextarea2">

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
                		 <form role="form" method="POST" id="editinquiryformid" novalidate="novalidate">
                		 
					 <?php
                        $result = $this->db->query("select id, page_key, inquiry_email from tbl_mail_autoresponder where page_key <> 'submit_review'  order by id asc ")->result();

                        foreach($result as $res)
                        {
                            $page_key =  $res->page_key;

                            if($page_key == "contact")
                            {
                               $inquiry_title = "Contact Us Inquiry Email";
                               $inquiry_placeholder = "Enter Contact Us Inquiry Email";
                               $inquiry_id_label = 'contact_inquiry_id';
                               $inquiry_email_label = 'contact_inquiry_email';
                            }

                            if($page_key == "selling")
                            {
                               $inquiry_title = "Request Consultant Inquiry Email";
                               $inquiry_placeholder = "Enter Request Consultant Inquiry Email";
                               $inquiry_id_label = 'request_inquiry_id';
                               $inquiry_email_label = 'request_inquiry_email';
                            }

                            if($page_key == "franchise")
                            {
                               $inquiry_title = "Franchise Inquiry Email";
                               $inquiry_placeholder = "Enter Franchise Inquiry Email";
                               $inquiry_id_label = 'franchise_inquiry_id';
                               $inquiry_email_label = 'franchise_inquiry_email';
                            }

                            if($page_key == "request_showing")
                            {
                               $inquiry_title = "Request Showing Inquiry Email";
                               $inquiry_placeholder = "Enter Request Showing Inquiry Email";
                               $inquiry_id_label = 'showing_inquiry_id';
                               $inquiry_email_label = 'showing_inquiry_email';
                            }

                            if($page_key == "property_inquiry")
                            {
                               $inquiry_title = "Property Inquiry Email";
                               $inquiry_placeholder = "Enter Property Inquiry Email";
                               $inquiry_id_label = 'property_inquiry_id';
                               $inquiry_email_label = 'property_inquiry_email';
                            }

                            if($page_key == "agent_inquiry")
                            {
                               $inquiry_title = "Agent Inquiry Email";
                               $inquiry_placeholder = "Enter Agent Inquiry Email";
                               $inquiry_id_label = 'agent_inquiry_id';
                               $inquiry_email_label = 'agent_inquiry_email';
                            }

                            if($page_key == "submit_review")
                            {
                               $inquiry_title = "Submit Review Inquiry Email";
                               $inquiry_placeholder = "Enter Submit Review Inquiry Email";
                               $inquiry_id_label = 'review_inquiry_id';
                               $inquiry_email_label = 'review_inquiry_email';
                            }
							
							if($page_key == "your_home_value")
                            {
                               $inquiry_title = "Your Home Value Inquiry Email";
                               $inquiry_placeholder = "Enter Your Home Value Inquiry Email";
                               $inquiry_id_label = 'your_home_inquiry_id';
                               $inquiry_email_label = 'your_home_inquiry_email';
                            }
							
							
                        ?>

                        <?php //if($page_key == "submit_review"){ echo 'style="display:none"';} ?> 
                        <div class="form-group">

                          <label for="<?php echo $inquiry_email_label;?>">
                              <?php echo $inquiry_title;?><span class="required_field"> * </span>
                          </label>

                          <input type="hidden" class="form-control"  name="<?php echo $inquiry_id_label;?>" id="<?php echo $inquiry_id_label;?>"  value="<?php echo $res->id;?>" />

                          <input type="text" class="form-control"  name="<?php echo $inquiry_email_label;?>" id="<?php echo $inquiry_email_label;?>" placeholder="<?php echo $inquiry_placeholder;?>" value="<?php echo $res->inquiry_email;?>" />
                        </div>

                        <?php
                        }
                        ?>

                        <button type="submit" name="submit" class="btn btn-xs btn-default btyellow" style="height:35px;">Update</button>

                     </form>
              		</div>

              		<div class="col-md-6">
              		 
              		</div>
          		</div>
                
            </div>

            <div class="dbshadow"></div>

        </div>
    </div>

    <div class="clear"></div>


    <div class="col-md-12 footer">
    	<div class="headtext1">COPYRIGHT &copy; <?php echo date("Y");?> REALTYTOPIA. ALL RIGHTS RESERVED.</div>
    </div>
        
</body>