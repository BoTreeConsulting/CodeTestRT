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

<div class="col-md-2" style="padding:0px;" >
    	<div class="adminbg">
        <img src=" <?php echo base_url("assets/site_images/admicon.jpg");?>">
        <h3>Customer Login</h3>
        <a href="<?php echo site_url('/admin/logout')?>" class="btn btn-xs btn-default btyellow" style="float:left; margin-top:10px;">Logout</a>
        </div>
        
        <?php 
		
		if($this->session->userdata("usert_type")!='staff')
		{
		$page=$this->uri->segment(2);
		?>
       <div id='cssmenu'>
        <div class="menutog"><img src=" <?php echo base_url("assets/site_images/menutog.png");?>" onclick="myfun()"></div>
        <ul id="ollist">
           <li class='has-sub <?php if($page=='dashboard'){ echo "open";}?>' ><a href='#'><span>Dashboard</span></a>
              <ul <?php if($page=='dashboard'){ echo 'style="display: block;"';}?>>
                 <li><a href="<?php echo site_url('/customer/dashboard')?>" <?php if($page=='dashboard'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>My Dashboard</span></a></li>
            
              </ul>
           </li>
			<li class='has-sub <?php if($page=='myprofile' || $page=='change_pwd'){ echo "open";}?>' ><a href='#'><span>My Profile</span></a>
              <ul <?php if($page=='myprofile' || $page=='change_pwd'){ echo 'style="display: block;"';}?>>
				 <li><a href="<?php echo site_url('/customer/myprofile')?>" <?php if($page=='myprofile'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>My Profile</span></a></li>
				 <li><a href="<?php echo site_url('/customer/change_pwd')?>" <?php if($page=='change_pwd'){ echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Change Password</span></a></li>
             </ul>
           </li>
		      <li class='has-sub <?php if($page=='customer_qis' || $page=='manage_healthqis' || $page=='view_normalqis' || $page=='view_healthqis'){ echo "open";}?>'><a href='#'><span> Quality Inspection Reports</span></a>
              <ul <?php if($page=='customer_qis' || $page=='manage_healthqis'  || $page=='view_normalqis' || $page=='view_healthqis'){echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/customer/customer_qis')?>" <?php if($page=='customer_qis' || $page=='manage_healthqis'  || $page=='view_normalqis' || $page=='view_healthqis'){echo 'style="color: #00335d;font-weight:bold;"';}?>><span> Manage QIS</span></a></li>
              </ul>
           </li>
           <li class='has-sub <?php if($page=='invoices_list'){ echo "open";}?>'><a href='#'><span>Invoices</span></a>
              <ul <?php if($page=='invoices_list' ){echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/customer/invoices_list')?>" <?php if($page=='invoices_list' ){echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Invoices</span></a></li>
              </ul>
           </li>
		   
		     <li class='has-sub <?php if($page=='quotations_list'){ echo "open";}?>'><a href='#'><span>  Quotations</span></a>
              <ul <?php if($page=='quotations_list' ){echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/customer/quotations_list')?>" <?php if($page=='quotations_list' ){echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Quotations</span></a></li>
              </ul>
           </li>
       
            <li class='has-sub <?php if($page=='customer_complaints' || $page=="view_cars"){ echo "open";}?>'><a href='#'><span>Complaints & Resolutions</span></a>
              <ul <?php if($page=='customer_complaints' || $page=="view_cars"){echo 'style="display: block"';}?>>
                 <li><a href="<?php echo site_url('/customer/customer_complaints')?>" <?php if($page=='customer_complaints' || $page=="view_cars" ){echo 'style="color: #00335d;font-weight:bold;"';}?>><span>Manage Complaints & Resolutions</span></a></li>
              </ul>
           </li>
           <li><a href='<?php echo site_url('/admin/logout')?>'>Logout</a></li>
           
         
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