<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script>
function myfun()
{
 var list = document.getElementById("ollist");

    if (list.style.display == "none"){
        list.style.display = "block";
    }else{
        list.style.display = "none";
    }


}
</script>

<div id="menu" class="col-md-2" style="padding:0px;" >
    	<div class="adminbg">
        <img src=" <?php echo base_url("assets/site_images/admicon.jpg");?>">
        <h3><?php if($this->session->userdata("usert_type")=='staff')
		{ echo 'Staff';}else{ echo 'Admin';}?> Login</h3>
        <a href="<?php echo site_url('/admin/logout')?>" class="btn btn-xs btn-default btyellow" style="float:left; margin-top:10px;">Logout</a>
        </div>
        
        <?php 
		
		if($this->session->userdata("usert_type")!='staff')
		{
		$page=$this->uri->segment(2);
		$staffid= $this->session->userdata("admin_id");
		?>
       <div id='cssmenu'>
        <div class="menutog"><img src=" <?php echo base_url("assets/site_images/menutog.png");?>" onclick="myfun()"></div>
        <ul id="ollist">
           <li class='has-sub <?php if($page=='dashboard' || $page=='personal_dashboard'){ echo "open";}?>' ><a href='#'><span>Dashboard</span></a>
              <ul <?php if($page=='dashboard' || $page=='personal_dashboard'){ echo 'style="display: block;"';}?>>
		 
                 <li><a href="<?php echo site_url('/admin/personal_dashboard')?>" <?php if($page=='personal_dashboard'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Personal Dashboard</span></a></li>

              </ul>
           </li>
		   <!--Manage Members open-->
		   
		   <?php 
				$managemem = $this->adminmodel1->get_personal_dashboard(5,$staffid);
				$add = $managemem[0]['per_add'];
				$edit = $managemem[0]['per_edit'];
				$delete =  $managemem[0]['per_delete'];
				$view = $managemem[0]['per_view'];
				$assign = $managemem[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
           <li class='has-sub <?php if($page=='manage_customers' || $page=='add_customer' || $page=='edit_customer' || $page=='manage_saved_searches' || $page=='manage_saved_homes' || $page=='view_saved_searches' || $page=='view_saved_homes'){ echo "open";}?>'><a href='#'><span>Manage Members</span></a>
		   
              <ul <?php if($page=='manage_customers' || $page=='add_customer' || $page=='edit_customer'|| $page == 'view_customer' || $page == 'manage_saved_searches' || $page=='manage_saved_homes' || $page=='view_saved_searches' || $page=='view_saved_homes' || $page=='manage_viewreq_consultation' || $page=='view_req_consultation'){echo 'style="display: block"';}?>>
                  
				  <li><a href="<?php echo site_url('/admin/manage_customers')?>" <?php if($page=='manage_customers' || $page=='view_customer' || $page=='edit_customer'){echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Members</span></a></li>
				  
				  <li><a href="<?php echo site_url('/admin/add_customer')?>" <?php if($page=='add_customer'){echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add Member</span></a></li>
				  
				  <li><a href="<?php echo site_url('/admin/manage_saved_searches')?>" <?php if($page=='manage_saved_searches' || $page=='view_saved_searches'){echo 'style="color: #00335d;font-weight:bold;"';}?>><span>View Saved Searches</span></a></li>
				  
				  
				  <li><a href="<?php echo site_url('/admin/manage_saved_homes')?>" <?php if($page=='manage_saved_homes' || $page=='view_saved_homes'){echo 'style="color: #00335d;font-weight:bold;"';}?>><span>View Saved Homes</span></a></li>
				  
				  <li><a href="<?php echo site_url('/admin/manage_viewreq_consultation')?>" <?php if($page=='manage_viewreq_consultation' || $page=='view_req_consultation'){echo 'style="color: #00335d;font-weight:bold;"';}?>><span>View Request Consultation</span></a></li>
				  
              </ul>
           </li>
		   <?php } ?>
		   
		   <!--Manage Members close-->
		   <!-- Manage Agents open-->
		   
		   <?php $agent11 = $this->adminmodel1->get_personal_dashboard(33,$staffid);
	       $add = $agent11[0]['per_add'];
		  $edit = $agent11[0]['per_edit'];
		  $delete =  $agent11[0]['per_delete'];
		  $view = $agent11[0]['per_view'];
		  $assign = $agent11[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
		   
		   
           <li class='has-sub <?php if($page=='manage_agents' || $page=='add_agent' || $page=='edit_agent' || $page=='manage_showing_requests' || $page=='manage_agents_inquiries' || $page=='view_showing_requests' || $page=='view_agents_inquiries'){ echo "open";}?>'>
		   <a href='#'><span>Manage Agents</span></a>
              
			  <ul <?php if($page=='manage_agents' || $page=='add_agent' || $page=='edit_agent' || $page == 'view_agent' || $page=='manage_showing_requests' || $page=='manage_agents_inquiries' || $page=='view_showing_requests' || $page=='view_agents_inquiries'){ echo 'style="display: block"';}?>>
			  
				<?php /*?>
                 <li><a href="<?php echo site_url('/admin/manage_agents')?>" <?php if($page=='manage_agents' || $page=='view_agent' || $page=='edit_agent'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Agents</span></a></li>
				<?php */?>
				
				 <li><a href="<?php echo site_url('/manageagents/manage_agents')?>" <?php if($page=='manage_agents' || $page=='view_agent' || $page=='edit_agent'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Agents</span></a></li>
				 
				 <?php /*?>
				  <li><a href="<?php echo site_url('/admin/add_agent')?>" <?php if($page=='add_agent'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add Agent</span></a></li>
				 <?php */?> 
				  
				  <li><a href="<?php echo site_url('/manageagents/add_agent')?>" <?php if($page=='add_agent'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add Agent</span></a></li>
				  
				  <li><a href="<?php echo site_url('/admin/manage_showing_requests')?>" <?php if($page=='manage_showing_requests' || $page=='view_showing_requests'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Showing Requests</span></a></li>
				  
				  <li><a href="<?php echo site_url('/admin/manage_agents_inquiries')?>" <?php if($page=='manage_agents_inquiries' || $page=='view_agents_inquiries'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Inquiries</span></a></li>
				  
              </ul>
           </li>
		   
		   <?php } ?>
		   
		   
		   
		   <!-- Manage Agents close-->
		   
		   
		   
		   <!--Manage Properties open-->
		   
		   
		    <?php $agent11 = $this->adminmodel1->get_personal_dashboard(33,$staffid);
	       $add = $agent11[0]['per_add'];
		  $edit = $agent11[0]['per_edit'];
		  $delete =  $agent11[0]['per_delete'];
		  $view = $agent11[0]['per_view'];
		  $assign = $agent11[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
		   
		   
           <li class='has-sub <?php if($page=='managepropertylist' || $page=='manage_photos' || $page=='manage_property_inquiries' || $page=='manage_viewing_requests'|| $page=='view_propertydetails'){ echo "open";}?>'>
		   <a href='#'><span>Manage Properties</span></a>
              
			  <ul <?php if($page=='managepropertylist' || $page=='manage_photos' || $page=='manage_viewing_requests' || $page=='view_viewing_requests' || $page=='view_property_inquiries' || $page=='manage_property_inquiries' || $page=='view_propertydetails'){ echo 'style="display: block"';}?>>
			    <li><a href="<?php echo site_url('/admin/viewsoldpropertys')?>" <?php if($page=='viewsoldpropertys'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>View Sold Properties </span></a></li>
                 <li><a href="<?php echo site_url('/admin/managepropertylist')?>" <?php if($page=='managepropertylist' || $page=='view_propertydetails'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>View Properties </span></a></li>
				 
				  <li><a href="<?php echo site_url('/admin/manage_photos')?>" <?php if($page=='manage_photos'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Photos</span></a></li>
				  
				  
				  <li><a href="<?php echo site_url('/admin/manage_viewing_requests')?>" <?php if($page=='manage_viewing_requests' || $page=='view_viewing_requests'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Viewing Request</span></a></li>
				  
				  <li><a href="<?php echo site_url('/admin/manage_property_inquiries')?>" <?php if($page=='manage_property_inquiries' || $page=='view_property_inquiries'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Inquires</span></a></li>
				  
              </ul>
           </li>
		   
		   <?php } ?>
		  
		   
		   
		   <!--Manage Properties close-->
		   
		   <?php $d11 = $this->adminmodel1->get_personal_dashboard(30,$staffid);
	       $add = $d11[0]['per_add'];
		  $edit = $d11[0]['per_edit'];
		  $delete =  $d11[0]['per_delete'];
		  $view = $d11[0]['per_view'];
		  $assign = $d11[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
		   
		   
            <li class='has-sub <?php if($page=='manage_userinquiries' || $page=='add_userinquiries' || $page=='edit_userinquiries' || $page=='view_userinquiries'){ echo "open";}?>'><a href='#'><span>Inquiry Manager </span></a>
              <ul <?php if($page=='manage_userinquiries' || $page=='add_userinquiries' || $page=='edit_userinquiries' || $page == 'view_userinquiries'){ echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/admin/manage_userinquiries')?>" <?php if($page=='manage_userinquiries' || $page=='view_userinquiries' || $page=='edit_userinquiries'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Inquiries</span></a></li>
				  <li><a href="<?php echo site_url('/admin/add_userinquiries')?>" <?php if($page=='add_userinquiries'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add Inquiry</span></a></li>
              </ul>
           </li>
		   
		   <?php } ?>
		   
		   
		   <!-- Manage Types open -->
		   
		   
		   <?php $mtypes = $this->adminmodel1->get_personal_dashboard(34,$staffid);
	       $add = $mtypes[0]['per_add'];
		  $edit = $mtypes[0]['per_edit'];
		  $delete =  $mtypes[0]['per_delete'];
		  $view = $mtypes[0]['per_view'];
		  $assign = $mtypes[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
		   
		   
           <li class='has-sub <?php if($page=='manage_types' || $page=='add_type' || $page=='edit_type'){ echo "open";}?>'><a href='#'><span>Manage Types</span></a>
              <ul <?php if($page=='manage_types' || $page=='add_type' || $page=='edit_type' || $page == 'view_type'){ echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/admin/manage_types')?>" <?php if($page=='manage_types' || $page=='edit_type' || $page == 'view_type'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Types</span></a></li>
				  <li><a href="<?php echo site_url('/admin/add_type')?>" <?php if($page=='add_type'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add Type</span></a></li>
              </ul>
           </li>
		   
		   <?php } ?>
		   
		   
		   
		   <!--Manage Types close-->
		   
		   
		   <!-- Manage cms open-->
		   
		   <?php $n11 = $this->adminmodel1->get_personal_dashboard(21,$staffid);
	       $add = $n11[0]['per_add'];
		  $edit = $n11[0]['per_edit'];
		  $delete =  $n11[0]['per_delete'];
		  $view = $n11[0]['per_view'];
		  $assign = $n11[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
			 <li class='has-sub <?php if($page=='cmspage' || $page=='cmspageadd' || $page=='edit_content' || $page=='automailslist' || $page=='add_menu' || $page=='manage_menus' || $page=='edit_menu' || $page=='view_menu'){ echo "open";}?>'><a href='#'><span>Manage CMS</span></a>
			 
			  <ul <?php if($page=='cmspage' || $page=='cmspageadd' || $page=='edit_content' || $page=='add_menu' || $page=='manage_menus' || $page=='edit_menu' || $page=='view_menu' || $page=='automailslist' || $page=='edit_automailcontent' || $page=='manage_helptext' || $page=='add_helptext'|| $page=='edit_helptext'){  echo 'style="display: block"';}?>>
			  
              
			  <li><a href="<?php echo site_url('/cms/cmspage')?>" <?php if($page=='cmspage' || $page=='cmspageadd' || $page=='edit_content'){ echo 'style="color: #00335d;font-weight:bold;"'; }?>><span>Manage Pages</span></a></li>
			  
			   <li><a href="<?php echo site_url('/admin/automailslist')?>" <?php if( $page=='automailslist' || $page=='add_autoresponsemail' || $page=='edit_automailcontent' ){ echo 'style="color: #00335d;font-weight:bold;"'; }?>><span>Manage Email Auto-Responder</span></a></li>
			   
			   <li><a href="<?php echo site_url('/admin/manage_menus')?>" <?php if($page=='add_menu' || $page=='manage_menus' || $page=='edit_menu' || $page=='view_menu'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Menus</span></a></li>
			   
			   <li><a href="<?php echo site_url('/admin/manage_helptext')?>" <?php if($page=='manage_helptext' || $page=='add_helptext' || $page=='edit_helptext'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Help Text</span></a></li>
			    
              </ul>

			  </li>
			  
			  <?php } ?>
			 
		    <!--menus open-->
		  

		   
		   <!-- Manage cms close-->
		   
		   
		   
		   <!-- Manage Testimonials-->
		<?php $testimonial = $this->adminmodel1->get_personal_dashboard(36,$staffid);
	    $add = $testimonial[0]['per_add'];
		$edit = $testimonial[0]['per_edit'];
		$delete =$testimonial[0]['per_delete'];
		$view = $testimonial[0]['per_view'];
		$assign = $testimonial[0]['per_assign'];
		if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		{ ?>
		   
		   
        <li class='has-sub <?php if($page=='manage_testimonials' || $page=='add_testimonial' || $page=='edit_testimonial'){ echo "open";}?>'><a href='#'><span>Manage Testimonials</span></a>
              <ul <?php if($page=='manage_testimonials' || $page=='add_testimonial' || $page=='edit_testimonial' || $page == 'view_testimonial'){ echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/admin/manage_testimonials')?>" <?php if($page=='manage_testimonials' || $page=='edit_testimonial' || $page == 'view_testimonial'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Testimonials</span></a></li>
				 
				  <li><a href="<?php echo site_url('/admin/add_testimonial')?>" <?php if($page=='add_testimonial'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add Testimonial</span></a></li>
				  
              </ul>
        </li>
		   
		   <?php } ?>
		   
		   
		   <!-- Manage Testimonials close-->
		   
		   <!-- Blogs open-->	
		<?php $d11 = $this->adminmodel1->get_personal_dashboard(29,$staffid);
	       $add = $d11[0]['per_add'];
		  $edit = $d11[0]['per_edit'];
		  $delete =  $d11[0]['per_delete'];
		  $view = $d11[0]['per_view'];
		  $assign = $d11[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
		   
		   
            <li class='has-sub <?php if($page=='manage_blogs' || $page=='add_blog' || $page=='edit_blog'){ echo "open";}?>'><a href='#'><span>Manage Blog </span></a>
              <ul <?php if($page=='manage_blogs' || $page=='add_blog' || $page=='edit_blog' || $page == 'view_blog'){ echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/admin/manage_blogs')?>" <?php if($page=='manage_blogs' || $page=='edit_blog' || $page == 'view_blog'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Blogs</span></a></li>
				 
				  <li><a href="<?php echo site_url('/admin/add_blog')?>" <?php if($page=='add_blog'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add Blog</span></a></li>
              </ul>
           </li>
		   
		   <?php } ?>
		   
		<?php $d11 = $this->adminmodel1->get_personal_dashboard(29,$staffid);
	       $add = $d11[0]['per_add'];
		  $edit = $d11[0]['per_edit'];
		  $delete =  $d11[0]['per_delete'];
		  $view = $d11[0]['per_view'];
		  $assign = $d11[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
		   
		   
            <li class='has-sub <?php if($page=='blog_category' || $page=='add_blog_category'){ echo "open";}?>'><a href='#'><span>Manage Blog Categories </span></a>
              <ul <?php if($page=='blog_category' || $page=='add_blog_category' || $page == 'view_blog_cat' || $page == 'edit_blog_cat'){ echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/admin/blog_category')?>" <?php if($page=='blog_category' || $page == 'view_blog_cat' || $page == 'edit_blog_cat'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Categories</span></a></li>
				 
				  <li><a href="<?php echo site_url('/admin/add_blog_category')?>" <?php if($page=='add_blog_category'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add Category</span></a></li>
              </ul>
           </li>
		   
		   <?php } ?>
		   
		   <!--New Franchise Submissions open--> 


 <?php $newfranch = $this->adminmodel1->get_personal_dashboard(37,$staffid);
	    $add = $newfranch[0]['per_add'];
		$edit = $newfranch[0]['per_edit'];
		$delete =  $newfranch[0]['per_delete'];
		$view = $newfranch[0]['per_view'];
		$assign = $newfranch[0]['per_assign'];
		if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		{ ?>
		   
		   
          <li class='has-sub <?php if($page=='manage_franchise' || $page=='view_franchise' || $page=='edit_franchise'){ echo "open";}?>'><a href='#'><span>New Franchise Submissions</span></a>
              <ul <?php if($page=='manage_franchise' || $page=='view_franchise' || $page=='edit_franchise'){ echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/admin/manage_franchise')?>" <?php if($page=='manage_franchise' || $page=='view_franchise' || $page=='edit_franchise'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Franchise</span></a></li>
				  
              </ul>
           </li>
		   
		<?php } ?>
		      		
		   
		   
<!--New Franchise Submissions close-->  
		   
		   <!--Manage Settings open-->	 
		
		
		<?php $ms11 = $this->adminmodel1->get_personal_dashboard(31,$staffid);
	       $add = $ms11[0]['per_add'];
		  $edit = $ms11[0]['per_edit'];
		  $delete =  $ms11[0]['per_delete'];
		  $view = $ms11[0]['per_view'];
		  $assign = $ms11[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
		   
		   
            <li class='has-sub <?php if($page=='edit_outgoing_email_address' || $page=='edit_commissionrefund' || $page=='edit_saving_buying'){ echo "open";}?>'><a href='#'><span>Manage Settings </span></a>
              <ul <?php if($page=='edit_outgoing_email_address' || $page=='edit_commissionrefund' || $page=='edit_saving_buying' || $page == 'edit_saving_selling' || $page == 'edit_mortgage_interest'){ echo 'style="display: block"';}?>>
                 
				 <!--<li><a href="<?php echo site_url('/admin/manage_commissions')?>" <?php if($page=='manage_commissions' || $page=='add_commission' || $page=='edit_commissions' || $page == 'view_commissions'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Commissions</span></a></li>
				 
				  <li><a href="<?php echo site_url('/admin/add_commission')?>" <?php if($page=='manage_commissions' || $page=='add_commission' || $page=='edit_commissions'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add New</span></a></li>-->
				  
			<li><a href="<?php echo site_url('/outgoingemailaddrss/edit_outgoing_email_address')?>" <?php if($page=='edit_outgoing_email_address'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Outgoing Email Address</span></a></li>
			
			<li><a href="<?php echo site_url('/commissionrefund/edit_commissionrefund')?>" <?php if($page=='edit_commissionrefund'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Commission Refund</span></a></li>
			
			
			<li><a href="<?php echo site_url('/saving_buying/edit_saving_buying')?>" <?php if($page=='edit_saving_buying'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Saving % for Buying</span></a></li>
			
			
			<li><a href="<?php echo site_url('/saving_selling/edit_saving_selling')?>" <?php if($page=='edit_saving_selling'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Saving % for Selling</span></a></li>
			
			<li><a href="<?php echo site_url('/mortgage_interest/edit_mortgage_interest')?>" <?php if($page=='edit_mortgage_interest'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Mortgage Interest</span></a></li>  
				  
				  
				  
				  
              </ul>
           </li>
		   
		   <?php } ?>
		   
		   
		   <!--Manage Settings close-->	
		   
		  
		   
		   
		   
		   
		<!--pages open-->
		
		
		<!--<?php $page11 = $this->adminmodel1->get_personal_dashboard(27,$staffid);
	       $add = $page11[0]['per_add'];
		  $edit = $page11[0]['per_edit'];
		  $delete =  $page11[0]['per_delete'];
		  $view = $page11[0]['per_view'];
		  $assign = $page11[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
		   
		   
        <li class='has-sub <?php if($page=='manage_pages' || $page=='add_page' || $page=='edit_page'){ echo "open";}?>'><a href='#'><span>Manage Pages</span></a>
              <ul <?php if($page=='manage_pages' || $page=='add_page' || $page=='edit_page' || $page == 'view_page'){ echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/admin/manage_pages')?>" <?php if($page=='manage_pages' || $page=='add_page' || $page=='edit_page' || $page == 'view_page'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Pages</span></a></li>
				  <li><a href="<?php echo site_url('/admin/add_page')?>" <?php if($page=='manage_pages' || $page=='add_page' || $page == 'view_page' || $page=='edit_page'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add Page</span></a></li>
              </ul>
           </li>
		   
		   <?php } ?>-->





        <!--pages close-->		 
		   
		

<!--Manage Forms open-->
		
		
		<!-- <?php $ma11 = $this->adminmodel1->get_personal_dashboard(28,$staffid);
	       $add = $ma11[0]['per_add'];
		  $edit = $ma11[0]['per_edit'];
		  $delete =  $ma11[0]['per_delete'];
		  $view = $ma11[0]['per_view'];
		  $assign = $ma11[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
		   
		   
        <li class='has-sub <?php if($page=='add_inquiries' || $page=='manage_inquiries' || $page=='edit_inquiries'){ echo "open";}?>'><a href='#'><span>Manage Forms</span></a>
              <ul <?php if($page=='manage_inquiries' || $page=='add_inquiries' || $page=='edit_inquiries' || $page == 'view_inquiries'){ echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/admin/manage_inquiries')?>" <?php if($page=='manage_inquiries' || $page=='add_inquiries' || $page=='edit_inquiries' || $page == 'view_inquiries'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Forms</span></a></li>
				  <li><a href="<?php echo site_url('/admin/add_inquiries')?>" <?php if($page=='manage_inquiries' || $page=='add_inquiries' || $page=='edit_inquiries'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add Form</span></a></li>
              </ul>
           </li>
		   
		   <?php } ?>-->
		  
     <!--Manage Forms close-->	

	<!-- Manage Email Servers open -->
	<!--<?php $mailserver11 = $this->adminmodel1->get_personal_dashboard(32,$staffid);
			   $add = $mailserver11[0]['per_add'];
			  $edit = $mailserver11[0]['per_edit'];
			  $delete =  $mailserver11[0]['per_delete'];
			  $view = $mailserver11[0]['per_view'];
			  $assign = $mailserver11[0]['per_assign'];
			  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
			  { ?>
			   
			   
			   <li class='has-sub <?php if($page=='manage_emailserver' || $page=='add_mail_server' || $page=='edit_emailserver'){ echo "open";}?>'><a href='#'><span>Manage Email Servers</span></a>
				  <ul <?php if($page=='manage_emailserver' || $page=='add_mail_server' || $page=='edit_emailserver' || $page == 'view_emailserver'){ echo 'style="display: block"';}?>>
				  
					 <li><a href="<?php echo site_url('/admin/manage_emailserver')?>" <?php if($page=='manage_emailserver' || $page=='add_mail_server' || $page=='edit_emailserver' || $page == 'view_emailserver'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Email Servers</span></a></li>
					 
					  <li><a href="<?php echo site_url('/admin/add_mail_server')?>" <?php if($page=='manage_emailserver' || $page=='add_mail_server' || $page=='edit_emailserver'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add New</span></a></li>
				  </ul>
			   </li>
			   
			   <?php } ?>-->


	<!-- Manage Email Servers close -->		   

	
		   
		   
		    <?php $d11 = $this->adminmodel1->get_personal_dashboard(29,$staffid);
	       $add = $d11[0]['per_add'];
		  $edit = $d11[0]['per_edit'];
		  $delete =  $d11[0]['per_delete'];
		  $view = $d11[0]['per_view'];
		  $assign = $d11[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
		   
		   
            <li class='has-sub <?php if($page=='blog_users' || $page=='add_blog_users' || $page=='add_blog_user' || $page=='edit_blog_users'){ echo "open";}?>'><a href='#'><span>Manage Sub Users </span></a>
              <ul <?php if($page=='blog_users' || $page=='add_blog_users' || $page=='add_blog_user' || $page=='edit_blog_users' || $page == 'view_users' || $page == 'view_blog_user' || $page == 'edit_blog_user'){ echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/admin/blog_users')?>" <?php if($page=='edit_blog_users' || $page == 'view_users' || $page == 'view_blog_user' || $page == 'blog_users' || $page == 'edit_blog_user'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Sub Users</span></a></li>
				 
				  <li><a href="<?php echo site_url('/admin/add_blog_user')?>" <?php if($page=='add_blog_user' || $page=='edit_blog_users'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Add Sub User</span></a></li>
              </ul>
           </li>
		   
		   <?php } ?>
		<!--Blogs close-->

			<?php

				$datass = $this->adminmodel1->get_personal_dashboard(1,$staffid);

				$add = $datass[0]['per_add'];
				$edit = $datass[0]['per_edit'];
				$delete =  $datass[0]['per_delete'];
				$view = $datass[0]['per_view'];
				$assign = $datass[0]['per_assign'];
		  if($add == 1 || $edit == 1 || $delete == 1 || $view ==1 || $assign == 1)
		  { ?>
           <li class='has-sub <?php if($page=='accounts'){ echo "open";}?>'><a href='#'><span>Manage Account</span></a>
              <ul <?php if($page=='accounts'){ echo 'style="display: block"';}?>>
              <li><a href="<?php echo site_url('/admin/accounts')?>" <?php if($page=='accounts' ){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>My Account</span></a></li>
              </ul>
           </li>
		   <?php } ?>
			    <li><a href='<?php echo site_url('/admin/logout')?>'> 	Logout</a></li>
           
        </ul>
		</div>
        <?php }else{?>
        
        <div id='cssmenu'>
        <ul>
           <?php 
		    $getprivilages=$this->Backend_model->getprivilages($this->session->userdata("admin_id"));
		   	$getaccesslevels=$this->Backend_model->getaccesslevels($getprivilages->accesslevels);
			for ($ai = 0; $ai <count($getaccesslevels); $ai++) 
			 {
			$getsubaccesslevels=$this->Backend_model->getsubaccesslevels($getaccesslevels[$ai]->id);	 
			?>	 
			 <li class='has-sub'>
             <a href='#'><span><?php echo $getaccesslevels[$ai]->level_name;?></span></a>
             <ul>
                 <?php 
				 for ($si = 0; $si <count($getsubaccesslevels); $si++) 
			     {
				 ?>
                 <li><a href="<?php echo site_url('/admin/'.$getsubaccesslevels[$si]->page_name)?>"><span><?php echo $getsubaccesslevels[$si]->level_name;?></span></a></li>
              <?php }?>
              </ul>
             
           </li>
            <?php }?>	 
        </ul>
		</div>
        <?php }?>
        
    </div>