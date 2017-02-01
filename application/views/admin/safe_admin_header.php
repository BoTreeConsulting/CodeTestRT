<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
       <link href="<?php echo site_url('/assets/css/bootstrap-combined.min.css')?>" rel="stylesheet">
       <link href="<?php echo site_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet">
       <link href="<?php echo site_url('/assets/css/bootstrap.css')?>" rel="stylesheet">
       <link href="<?php echo site_url('/assets/css/loyalstyle.css')?>" rel="stylesheet">
       <link href="<?php echo site_url('/assets/css/styles.css')?>" rel="stylesheet">
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	   <script src="<?php echo site_url('/assets/css/menu_jquery.js')?>"></script>  

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
       
  <style>
	.addrtext{font-size: 27px; padding: 9px 0px; margin-top: -30px; font-weight: 400;}
	@media only screen and (max-width: 800px) {
	.addrtext{margin-top: 10px;}
	
	}
  </style>
  
  </head>
  
  <body>
  <!-- TO CHECK VALUES COMING OR NOT-->
   <!--?php  echo"<pre>";print_r($data);echo"</pre>"; ?-->
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
    	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Dashboard / </span><span>Management Dashboard</span></div>
        <?php 
		//if($this->session->userdata("usert_type")!='staff')
		//{
		?>
        <div class="mtextarea" >
        	<h2>Dashboard  <span>Quick links</span></h2>
            <!-- 
                <div class="dbicons">
            	<div class="dbtn1 dbtflot"><a href="<?=site_url('/admin/cms_settings')?>"></a></div>
               
                <div class="dbtn4 dbtflot"><a href="<?=site_url('/admin/manage_categories')?>"></a></div>
               
                <div class="dbtn6 dbtflot"><a href="<?=site_url('/admin/news_letters')?>"></a></div>
                <div class="dbtn7 dbtflot"><a href="<?=site_url('/admin/server_emails')?>"></a></div>
                <div class="dbtn10 dbtflot"><a href="<?=site_url('/admin/manage_items')?>"></a></div>
                <div class="dbtn11 dbtflot"><a href="<?=site_url('/admin/manage_bids')?>"></a></div>
                <div class="dbtn2 dbtflot"><a href="<?=site_url('/admin/admin_users')?>"></a></div>
                <div class="dbtn13 dbtflot"><a href="<?=site_url('/admin/manage_payments')?>"></a></div>
                <div class="dbtn18 dbtflot"><a href="<?=site_url('/admin/user_messages')?>"></a></div>
                <div class="dbtn14 dbtflot"><a href="<?=site_url('/admin/manage_earnings')?>"></a></div>
                <div class="dbtn15 dbtflot"><a href="<?=site_url('/admin/banner_managent')?>"></a></div>
                <div class="dbtn16 dbtflot"><a href="<?=site_url('/admin/users_management')?>"></a></div>
                <div class="dbtn17 dbtflot"><a href="<?=site_url('/admin/abuse_reports')?>"></a></div>
                <div class="dbtn19 dbtflot"><a href="<?=site_url('/admin/manage_duration')?>"></a></div>
                <div class="dbtn9 dbtflot"><a href="<?=site_url('/admin/manage_attributes')?>"></a></div>
                <div class="dbtn20 dbtflot"><a href="<?=site_url('/admin/manage_rates')?>"></a></div>
                <div class="dbtn8 dbtflot"><a href="<?=site_url('/admin/change_password')?>"></a></div>
                <div class="clear"></div> 
            </div>-->
            

    <style>
      #map-canvas {
        height: 700px;
        margin: -20px 0 0 0;
        padding: 0px
      }
	  
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
// The following example creates complex markers to indicate beaches near
// Sydney, NSW, Australia. Note that the anchor is set to
// (0,32) to correspond to the base of the flagpole.

function initialize() {
  var mapOptions = {
    zoom: 10,
    center: new google.maps.LatLng(-33.9, 151.2)
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);

  setMarkers(map, beaches);
}

/**
 * Data for the markers consisting of a name, a LatLng and a zIndex for
 * the order in which these markers should display on top of each
 * other.
 */
var beaches = [
  ['Bondi Beach', -33.890542, 151.274856, 4],
  ['Coogee Beach', -33.923036, 151.259052, 5],
  ['Cronulla Beach', -34.028249, 151.157507, 3],
  ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
  ['Maroubra Beach', -33.950198, 151.259302, 1]
];

function setMarkers(map, locations) {
  // Add markers to the map

  // Marker sizes are expressed as a Size of X,Y
  // where the origin of the image (0,0) is located
  // in the top left of the image.

  // Origins, anchor positions and coordinates of the marker
  // increase in the X direction to the right and in
  // the Y direction down.
  var image = {
    url: '<?php echo base_url(); ?>assets/site_images/flag.png',
    // This marker is 20 pixels wide by 32 pixels tall.
    size: new google.maps.Size(20, 32),
    // The origin for this image is 0,0.
    origin: new google.maps.Point(0,0),
    // The anchor for this image is the base of the flagpole at 0,32.
    anchor: new google.maps.Point(0, 32)
  };
  // Shapes define the clickable region of the icon.
  // The type defines an HTML &lt;area&gt; element 'poly' which
  // traces out a polygon as a series of X,Y points. The final
  // coordinate closes the poly by connecting to the first
  // coordinate.
  var shape = {
      coords: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
  };
  for (var i = 0; i < locations.length; i++) {
    var beach = locations[i];
    var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,
        shape: shape,
        title: beach[0],
        zIndex: beach[3]
    });
  }
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
 
    <div style="overflow: auto; padding: 20px 0px;">
		<div class="col-md-9">
			<div id="map-canvas"></div>
		</div>
		<div class="col-md-3">
			<div class="maplist">
				
			
				<div class="addspop" id="listdiv" style="display:none;">
					<div class="addsclose">
						<a href="#"  onclick="show_div();"><img src=" <?php echo base_url("assets/site_images/adsclose.png");?>" alt="staff"></a>
					</div>
					<ul>
					   <li>
 				
					<script>
					  
					</script>
						
						<img src = "<?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						<h2>Showmack</h2>
						<h4>General Manager</h4>
						<p>Unit 14, 3 Edgar Buildings,
						George Street, Bath,
						England, BA1 2FJ.</p>
					</li>
				
					
					</ul>
					<div class="addsdir">
						<p><span>Directions: </span>To here - From here <p>
						<p><span>Start address:</span><p>
						<input type="text" name="" id="" value="" class="adsinput">
						<input class="adsbtn" value="Get Directions" type="SUBMIT">
					</div>
				</div>
				
				
				
				
				<h1 class="addrtext">Staff</h1>
				<div style="height:650px; overflow-y:scroll;">
				
					
			
				<ul>
				<?php foreach($data as $row) { 
			
			   $id = $row['logging_name'];
		       //echo $id;
			  $query=mysql_query("select admin_username from tbl_admin where admin_id='$id'");
		      $dat=mysql_fetch_array($query);
		      $createdname=$dat['admin_username'];
		  
		  ?>
					<li>
					
						<img src=" <?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						<h2><i class="fa fa-map-marker"></i> <?php echo $ids = '<a href="#"  onclick="show_div('.$row['logging_name'].')">'    .$createdname. '</a>'; ?> </h2>
						<h4>General Manager</h4>
						<p><?php echo $row['logging_address']; ?></p>
						<p><a href="#">View Details</a></p>
					</li>
					
						<?php } ?>	
					</ul>
			
					
				<!--	<li>
						<img src=" <?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						<h2><i class="fa fa-map-marker"></i><a href="#"  onclick="show_div();">Showmack</a></h2>
						<h4>General Manager</h4>
						<p>Unit 14, 3 Edgar Buildings,
						George Street, Bath,
						England, BA1 2FJ.</p>
						<p><a href="#">View Details</a></p>
					</li>
					<li>
						<img src=" <?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						<h2><i class="fa fa-map-marker"></i><a href="#"  onclick="show_div();">Showmack</a></h2>
						<h4>General Manager</h4>
						<p>Unit 14, 3 Edgar Buildings,
						George Street, Bath,
						England, BA1 2FJ.</p>
						<p><a href="#">View Details</a></p>
					</li>
					<li>
						<img src=" <?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						<h2><i class="fa fa-map-marker"></i><a href="#"  onclick="show_div();">Showmack</a></h2>
						<h4>General Manager</h4>
						<p>Unit 14, 3 Edgar Buildings,
						George Street, Bath,
						England, BA1 2FJ.</p>
						<p><a href="#">View Details</a></p>
					</li>
					<li>
						<img src=" <?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						<h2><i class="fa fa-map-marker"></i><a href="#"  onclick="show_div();">Showmack</a></h2>
						<h4>General Manager</h4>
						<p>Unit 14, 3 Edgar Buildings,
						George Street, Bath,
						England, BA1 2FJ.</p>
						<p><a href="#">View Details</a></p>
					</li>
					<li>
						<img src=" <?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						<h2><i class="fa fa-map-marker"></i><a href="#"  onclick="show_div();">Showmack</a></h2>
						<h4>General Manager</h4>
						<p>Unit 14, 3 Edgar Buildings,
						George Street, Bath,
						England, BA1 2FJ.</p>
						<p><a href="#">View Details</a></p>
					</li>
					<li>
						<img src=" <?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						<h2><i class="fa fa-map-marker"></i><a href="#"  onclick="show_div();">Showmack</a></h2>
						<h4>General Manager</h4>
						<p>Unit 14, 3 Edgar Buildings,
						George Street, Bath,
						England, BA1 2FJ.</p>
						<p><a href="#">View Details</a></p>
					</li>
					<li>
						<img src=" <?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						<h2><i class="fa fa-map-marker"></i><a href="#"  onclick="show_div();">Showmack</a></h2>
						<h4>General Manager</h4>
						<p>Unit 14, 3 Edgar Buildings,
						George Street, Bath,
						England, BA1 2FJ.</p>
						<p><a href="#">View Details</a></p>
					</li>
					<li>
						<img src=" <?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						<h2><i class="fa fa-map-marker"></i><a href="#"  onclick="show_div();">Showmack</a></h2>
						<h4>General Manager</h4>
						<p>Unit 14, 3 Edgar Buildings,
						George Street, Bath,
						England, BA1 2FJ.</p>
						<p><a href="#">View Details</a></p>
					</li>
					<li>
						<img src=" <?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						<h2><i class="fa fa-map-marker"></i><a href="#"  onclick="show_div();">Showmack</a></h2>
						<h4>General Manager</h4>
						<p>Unit 14, 3 Edgar Buildings,
						George Street, Bath,
						England, BA1 2FJ.</p>
						<p><a href="#">View Details</a></p>
					</li>
					
				</ul>  -->
				</div>
			</div>
		</div>
	</div>
	
	
  
        </div>
          <?php //}else{?>
        
       <!--  <div class="dbicons">
            	<p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <h1>Welcome to Staff Dashboard.</h1>
                <p>&nbsp;</p>
                <p>&nbsp;</p><p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <div class="clear"></div>
            </div> -->
         <?php //}?>
        <div class="dbshadow"></div>
        
    </div>
    <div class="clear"></div>
    <div class="col-md-12 footer">
    	<div class="headtext1">© Copyright 2014 Guardian Property Service</div>
    </div>
    </div>
	

	
  <script>
  function show_div($ids)
  {
		//alert($ids);
		var popid = $ids;
		//alert(popid);
		var list = document.getElementById("listdiv");

    if (list.style.display == "none"){
        list.style.display = "block";
    }else{
        list.style.display = "none";
    }
	
	
  }
  </script>
</body>