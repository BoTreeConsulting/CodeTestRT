<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RealtyTopia Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/front/images/favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('/assets/css/demo.css')?>" />
   <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css' />

		<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
       <link href="<?php echo site_url('/assets/css/bootstrap-combined.min.css')?>" rel="stylesheet">
       <link href="<?php echo site_url('/assets/css/bootstrap.min.css')?>" rel="stylesheet">
       <link href="<?php echo site_url('/assets/css/bootstrap.css')?>" rel="stylesheet">
       <link href="<?php echo site_url('/assets/css/loyalstyle.css')?>" rel="stylesheet">
       <link href="<?php echo site_url('/assets/css/styles.css')?>" rel="stylesheet">
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	   <script src="<?php echo site_url('/assets/css/menu_jquery.js')?>"></script>  
	   <script>
	   function login(){

	
	if(document.getElementById("loggedin").checked == true){
    
	window.location.href = '<?php echo base_url();?>admin/dashboard';
	}else{
	
	document.getElementById("loggedin").checked =false;
	window.location.href = '<?php echo base_url();?>admin/dashboard/2';
	
	}
	}
	
	
	function logout(){

	
	if(document.getElementById("logout").checked == true){
   
	window.location.href = '<?php echo base_url();?>admin/dashboard';
	}else{
	
	document.getElementById("logout").checked = false;
	window.location.href = '<?php echo base_url();?>admin/dashboard/1';
	
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
       
  <style>
	.addrtext{font-size: 27px; padding: 9px 0px; margin-top: -30px; font-weight: 400;}
	@media only screen and (max-width: 800px) {
	.addrtext{margin-top: 10px;}
	
	}
  </style>
  
  
  </head>
  
  <body>
  <!-- TO CHECK VALUES COMING OR NOT-->
   <!--?php  echo"<pre>";print_r($data2);echo"</pre>"; ?-->
   <!--?php  echo"<pre>";print_r($data3);echo"</pre>"; ?-->
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
	define('INCLUDE_CHECK',1);
	?>
    
	
	
	
    <div class="col-md-10 rtcol">
    	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Dashboard / </span><span>Management Dashboard</span></div>
    <?php
//echo round((252*5 + 124*4 + 40*3 + 29*2 + 33*1) / (252 + 124 + 40 + 29 + 33));

	if(count($low_avg)>0){ ?>
	<div style="margin-left:30px;" >
		<h2>Feedback Score<span> Average</span>: <?php 
		
		$total_score=0;$totalscore=0;
 foreach($low_avg as $row) {
  $total_score=$total_score+($row['rate']);
  $totalscore=$totalscore+$row['total'];
 }
$total_score= $total_score/$totalscore;
echo number_format($total_score,1);

//echo $totalscore;


		$score=$low_avg[0]['rate'];  $total_co=$low_avg[0]['total'];
     	   $maxNumberOfStars=5;
 //echo $avg = ($score / $total_co) * $maxNumberOfStars;
		?></h2>
		
            </div>
		
	<?php } ?>
	
		
	<?php if(count($normqis)>0){ ?>
	<div class="mtextarea" >
		<h2>Low score<span> Alerts</span></h2>
		
<div style="padding:20px;">
		  <section id="no-more-tables">

				  <table class="table-bordered table-striped table-condensed cf tablesorter">
			  <thead class="cf" style="background:#044174; color:#fff;">
				 <tr>
					 <th>Customer Name</th>
					  <th>Venue Name</th>
					  <th>Type</th>
					  <th>Contact Person Name</th>
					  <th>Created Date</th>
					  <th>Actions</th>
					  
				  </tr>
				  
				  
			  </thead>
				<tbody aria-live="polite" aria-relevant="all">
							
                       
					
				<?php 
				
				foreach($normqis as $row){
				$vid=$row['qis_venue'];
				
				$query=mysql_query("select av_venue_name from tbl_venue where av_id='$vid'");
				$ven=mysql_fetch_array($query);
				?>
						<tr>
						<td data-title="Client Name"><?php echo $row['ac_name'];?></td>
						<td data-title="Venue Name"><?php echo $ven['av_venue_name'];?></td>
						<td data-title="Type">Normal QIR</td>
						<td data-title="Contact Person Name" ><?php echo $row['qis_contactperson'];?></td>
						<td data-title="Created" ><?php echo date("M d Y h:i A",strtotime($row['qis_createdon'])); ?></td>
						<td data-title="Actions" ><a href="<?php echo base_url();?>admin/view_normqis/<?php echo $row['qis_normal_id'];?>" title="View details"><i class="icon-eye-open"></i></a>
					
						</td>
						
						</tr>
			<?php } ?>
					
					
					</tbody>
		  </table>
		  
		  </section>
		  
				</div>
				<div class="clear"></div> 
				
            </div>
			
			<?php } ?>
			
			<?php $seg=$this->uri->segment(3);
				$td=date('Y-m-d');?>
			
			
			
			
			
			
			
			
			<div class="row">
			<div class="col-md-12">
				<div class="col-md-8">
				<form method='post' >
				<b>From:</b><input type="text" name="from" id="dateid" style="height:30px; margin-top:10px;" value="<?php echo $ff;?>">
				<b>To:</b><input type="text" name="to" id="dateid1" style="height:30px;margin-top:10px;" value="<?php echo $tt;?>">
				<button type="submit" name="search" value="search" class="btn btn-xs btn-default btyellow pull" >Search</button>
				</form>
			  	</div>
				<div class="col-md-4" style="margin-top:10px">
				 <input type="checkbox" <?php  if($seg=='1' || $seg==''){ echo 'checked';}?> name="loggedin" id="loggedin"  onclick="login();" value=""/> &nbsp; Logged in users
				  <input type="checkbox" <?php  if($seg=='2' || $seg==''){ echo 'checked';}?> name="loggedin" id='logout' onclick="logout();" value=""/> &nbsp; Logged out users
			  	</div>
		
			</div></div>
			
			
			
			<!--<div style="margin-left:94px;"><form method='post' >
				<b>From:</b><input type="text" name="from" id="dateid" style="height:30px; margin-top:10px;" value="<?php echo $ff;?>">
				<b>To:</b><input type="text" name="to" id="dateid1" style="height:30px;margin-top:10px;" value="<?php echo $tt;?>">
				<button type="submit" name="search" value="search" class="btn btn-xs btn-default btyellow pull" >Search</button>
				</form>  <input type="checkbox" <?php  if($seg=='1' || $seg==''){ echo 'checked';}?> name="loggedin" id="loggedin"  onclick="login();" value=""/> &nbsp; Logged in users
				  <input type="checkbox" <?php  if($seg=='2' || $seg==''){ echo 'checked';}?> name="loggedin" id='logout' onclick="logout();" value=""/> &nbsp; Logged out users</div>-->
		<?php 
		
		$nd=date('Y-m-d H:i:s');
		$id=$this->session->userdata("admin_id");
			 //$seg=$this->uri->segment(3);
			 if($seg=='2'){
			   //$query="SELECT * from tbl_coordinates where login_status='0' and user_id !='$id'  group by user_id";
			    $query="SELECT tbl_coordinates.* FROM 
					(
						SELECT * 
						FROM tbl_coordinates
						ORDER BY tbl_coordinates.cdate DESC
					) AS tbl_coordinates
                                              where tbl_coordinates.login_status='0'
                                              and tbl_coordinates.user_id!='$id'
					GROUP BY tbl_coordinates.user_id";
			   
			 }
			 else if($seg=='1'){
			  $query="SELECT tbl_coordinates.* FROM 
					(
						SELECT * 
						FROM tbl_coordinates
                                                
						ORDER BY tbl_coordinates.cdate DESC
					) AS tbl_coordinates
                                        where tbl_coordinates.login_status='1'
                                        
					GROUP BY tbl_coordinates.user_id";
			 
			 
			 
			   //$query="SELECT * from tbl_coordinates where login_status='1'  group by user_id";
			   
			 }else if($from && $to){
			   $query="SELECT * from tbl_coordinates where date(cdate)>='$from' and date(cdate)<='$to' group by user_id ";
			 }else if($from && !$to){
			   $query="SELECT * from tbl_coordinates where date(cdate)>='$from' group by user_id ";
			 }else{
			  //$query="SELECT * from tbl_coordinates group by user_id order by cdate desc ";
					$query="SELECT tbl_coordinates.* FROM 
					(
						SELECT * 
						FROM tbl_coordinates
						ORDER BY tbl_coordinates.cdate DESC
					) AS tbl_coordinates

					GROUP BY tbl_coordinates.user_id";
			 }
			 $result=mysql_query($query) or die(mysql_error());
			 $c=mysql_num_rows($result);
			 if(!$c){
			echo "<h3 align='center'><font color='#ff0000'>No Results Found</font></h3>";
			 }
			//$query="SELECT * from tbl_coordinates order by login_status desc";?>
	
        <div class="mtextarea" >
		
        	<h2>Dashboard  <span>Quick links</span></h2>
			<style>
      #map-canvas {
        height: 700px;
	
        margin: -20px 0 0 0;
        padding: 0px
      }
	  .gmnoprint img{
	  max-width:none;
	  }
    </style>
	
	
			<!--map here-->
			
			
	  <div style="overflow: auto; padding: 20px 0px;">
	 <div class="col-md-9" style="height:800px;" >
	<div id="map_canvas" style="height:700px;width:97%;text-align:right;padding-left:20px;"> 
			<div id="map">
				<span style="color:Gray;">Loading map...</span>			  </div> 
			<script type="text/javascript" src = "http://maps.google.com/maps/api/js?sensor=false">
</script>

            </div>
			
	<script type="text/javascript">
	
	
	
var locations = [

<?php 
//$query="SELECT * from tbl_coordinates order by login_status desc";
//$result=mysql_query($query) or die(mysql_error());
	{ 
	if ($num=mysql_num_rows($result)) {
$i=0;
while ($i < $num) {
$id=mysql_result($result,$i,"user_id");
$q=mysql_query("SELECT admin_name,admin_address from tbl_admin where admin_id='$id'");
$data=mysql_fetch_array($q);
$title=ucfirst($data['admin_name']);
$lapt=mysql_result($result,$i,"latitude");
$long=mysql_result($result,$i,"longitude");
$aimage="http://webcomp2/projects/crm/website/assets/site_images/staficon.png";
//$categoryid=mysql_result($result,$i,"categoryid");
$short_title=$data['admin_address'];
$url=base_url('admin/view_history/'.$id);
echo "['<div class=info><a href=#><img  src=$aimage style=float:left></a><h4 style=text-align:left>$title</h4><br><br><p style=text-align:left;>$short_title</p><a href=$url>View History</a></div>', $lapt, $long],";
$i++;
}
}
else 
{
echo "<h3 align='center'><font color='#ff0000'>No Content Found</font></h3>";
}
}
?>
    
	
	
	
	];
   // alert(locations);
    // Setup the different icons and shadows
    var iconURLPrefix = "http://webcomp2/projects/crm/website/assets/site_images/";
    
    var icons = [  
	  iconURLPrefix + 'staficon.png',
      iconURLPrefix + 'staficon.png',
      iconURLPrefix + 'staficon.png',
      iconURLPrefix + 'staficon.png',
      iconURLPrefix + 'staficon.png',
      iconURLPrefix + 'staficon.png',      
      iconURLPrefix + 'staficon.png'
    ]
    var icons_length = icons.length;
    
    
    var shadow = {
      anchor: new google.maps.Point(5,13),
      url: iconURLPrefix + 'msmarker.shadow.png'
    };
  
 
 

  var map = new google.maps.Map(document.getElementById('map'),mapProp);

  //{
	  
	    
      //center: new google.maps.LatLng(40.715618, -74.011133), 
     //zoom:15,
      //mapTypeId: google.maps.MapTypeId.ROADMAP,
      //mapTypeControl: true,
      //streetViewControl: false,
	  //disableDefaultUI: true,
      //panControl: false,
	  //zoomControl:true,
	  //overviewMapControl:true,
      //zoomControlOptions: {
      //position: google.maps.ControlPosition.LEFT_BOTTOM
      //}
	 
    // });
	


	
	
	 var infowindow=new google.maps.InfoWindow(document.getElementById("map"));
//alert("test"+map.setZoom);

     map.setZoom(16);
     //var infowindow = new google.maps.InfoWindow({
     //maxWidth: 400,
	 // maxHeight: 250
   // });

    var marker;
    var markers = new Array();
    
    var iconCounter = 0;
    
    // Add the markers and infowindows to the map
    for (var i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
		//zoom : 15,  
        position: new google.maps.LatLng(locations[i][1], locations[i][2], locations[i][3], locations[i][4], locations[i][5],locations[i][6]),
        map: map,
        icon : icons[iconCounter],
		shadow: shadow
      });

      markers.push(marker);

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
		   
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
		    }
      })(marker, i)); 
      
      iconCounter++;
      // We only have a limited number of possible icon colors, so we may have to restart the counter
     if(iconCounter >= icons_length){
      	iconCounter = 0;
      }
    } 
	
	var latlng = map.setCenter(new google.maps.LatLng(40.715618, -74.011133));
 
 
var mapProp = {
    center: latlng,
	
    Zoom:10,
	mapTypeId: google.maps.MapTypeId.ROADMAP
  };
    function AutoCenter() {
      //  Create a new viewpoint bound
      var bounds = new google.maps.LatLngBounds();
      //  Go through each...
     $.each(markers, function (index, marker) {
        bounds.extend(marker.position);
       
      });
      //  Fit these bounds to the map
      map.fitBounds(bounds);
	 
    }
   // AutoCenter(); 
  </script>
  
  </div>
  
  <div class="col-md-3">
			<div class="maplist">
				
			
				<div class="addspop" id="listdiv" style="display:none;">
					<div class="addsclose">
						<a href="#"  onclick="show_div(this);"><img src=" <?php echo base_url("assets/site_images/adsclose.png");?>" alt="staff"></a>
					</div>
					<ul>
					   <li>
 				   							
						<img src = "<?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						 
						<h2>Showmack<?php // echo $popid; ?></h2>
						<h4>General Manager </h4>
						
						<p>Unit 14, 3 Edgar Buildings,
						George Street, Bath,
						England, BA1 2FJ.<?php //echo $popid; ?></p>
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
				 <!--<h2><input type="checkbox" <?php  if($seg=='1' || $seg==''){ echo 'checked';}?> name="loggedin" id="loggedin"  onclick="login();" value=""/> &nbsp; Logged in users</h2>-->
					
			
				<ul>
				
				<?php 
				$j=0;
				//if($seg=='2'){$k=0;}else{$k=count($data2);}
				//print_r($cordinatedata);
				foreach($cordinatedata as $row) {    ?>
			<?php 
						 $logid = $row['user_id'];
						
						//$sql= mysql_query("SELECT logging_address FROM tbl_loggings WHERE logging_name = '$logid'
						//");
						
						$sql= mysql_query("SELECT admin_name,admin_address FROM tbl_admin WHERE admin_id = '$logid'
						");
						 $logname = mysql_fetch_array($sql);
					     $name=$logname['admin_name'];
						 ?>
			 	  	<li>
					
						<img src=" <?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						
					<!--	<h2><i class="fa fa-map-marker"></i> <?php//  echo $ids = '<a href="#"  onclick="show_div1('.$row['user_id'].','.$row['latitude'].','.$row['longitude'].')">'   .$row['admin_name']. '</a>'; ?> </h2> -->
						
						
						
						<!--<h2><i class="fa fa-map-marker"></i> <?php echo $ids = '<a href="#"  onclick="getmap('.$row['latitude'].','.$row['longitude'].')">'   .$row['admin_name']. '</a>'; ?> </h2> -->
						<!--<a href="#" onclick="getmap('17.686593','83.200723');">test </a>--> 
						<h2><i class="fa fa-map-marker"></i><a href="javascript:google.maps.event.trigger(markers[<?php echo $j;?>],'click');"><?php echo $name;?></a></h2> 
						<h4>General Manager</h4>
						
						<p><?php echo $logname['admin_address']; ?></p>
						<p><a href="<?php echo base_url(); ?>admin/staff/<?php echo $row['user_id']; ?>">View Details</a></p>
						
						<?php $dbdate= date('Y-m-d', strtotime($row['cdate']));
						?>
						
						<?php if($row['login_status']==1 && $dbdate==$td ){ echo "<font color='green'>Online</font>";}else{ echo "Offline";}?>
					</li>
					
					
					
				<div class="addspop" id="listdiv1<?php// echo $row['logging_name'];?>" style="display:none;">
				
				 
				 
		
							  
			
					<div class="addsclose">
						<a href="#"  onclick="show_div11(<?php //echo $row['logging_name'];?>);"><img src=" <?php echo base_url("assets/site_images/adsclose.png");?>" alt="staff"></a>
					</div>
					<ul>
					   <li>
 				   
						<img src = "<?php echo base_url("assets/site_images/staficon.png");?>" alt="staff">
						 
						<h2><?php// echo $adminname; ?></h2>
						<h4>General Manager </h4>
						
						<p><?php// echo $record[0]['logging_address']; ?></p>
					</li>
				
					
					</ul>
					<div class="addsdir">
						<p><span>Directions: </span>To here - From here <p>
						<p><span>Start address:</span><p>
						<input type="text" name="" id="" value="" class="adsinput">
						<input class="adsbtn" value="Get Directions" type="SUBMIT">
					</div>
				</div>
						<?php $j++; } ?>	
						
				
			
				</div>
			</div>
		</div>

  
	
    </div>
	  </div>
	<div class="dbshadow"></div>
        
    </div>
    <div class="clear"></div>
    <div class="col-md-12 footer">
    	<div class="headtext1">© Copyright 2014 Guardian Property Service</div>
    </div>
    </div>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script> 
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  	
    <script>
  $(function() {
   
    $( "#dateid" ).datepicker();
 
  
    $( "#dateid1" ).datepicker();
 
  
    //$( "#3rddate" ).datepicker();
  });
  </script>

	
  
  	
</body>
