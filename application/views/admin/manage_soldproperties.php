<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Realtytopia Manage Properties</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url();?>assets/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	   
	   
	<style type="text/css">
		#overlay {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: #000;
		filter:alpha(opacity=70);
		-moz-opacity:0.7;
		-khtml-opacity: 0.7;
		opacity: 0.7;
		z-index: 100;
		display: none;
		}
		.content a{
		text-decoration: none;
		}
		.popup{
		width: 100%;
		margin: 0 auto;
		display: none;
		position: fixed;
		z-index: 101;
		}
		.content{
		min-width: 600px;
		width: 600px;
		min-height: 150px;
		margin: 100px auto;
		background: #f3f3f3;
		position: relative;
		z-index: 103;
		padding: 10px;
		border-radius: 5px;
		box-shadow: 0 2px 5px #000;
		}
		.content p{
		clear: both;
		color: #555555;
		text-align: justify;
		}
		.content p a{
		color: #d91900;
		font-weight: bold;
		}
		.content .x{
		float: right;
		height: 35px;
		left: 22px;
		position: relative;
		top: 9px;
		width: 34px;
		}
		.content .x:hover{
		cursor: pointer;
		}
		.emaildivcls
		{
			margin:131px 23px 143px 22px;
		}
		.emailtextboxcls
		{
			width: 50%;
		    height: 50%;
		}
		.mailsubbtn
		{
			width: 50%;
		    height: 50%;
		}
	</style>	


	<!--checkbox valdition start here-->
	 <script src="<?php echo base_url();?>assets/js/checkbox_validation.js"></script>
	<!--checkbox valdition end  here-->
		   
	<script>
	function checkAll(ele) {
	     var checkboxes = document.getElementsByTagName('input');
	     if (ele.checked) {
	         for (var i = 0; i < checkboxes.length; i++) {
	             if (checkboxes[i].type == 'checkbox') {
	                 checkboxes[i].checked = true;
	             }
	         }
	     } else {
	         for (var i = 0; i < checkboxes.length; i++) {
	             console.log(i)
	             if (checkboxes[i].type == 'checkbox') {
	                 checkboxes[i].checked = false;
	             }
	         }
	     }
	 }
	</script>

	<script>
	    
	function validateForm1()
	{
	    if( $('input[name="id[]"]:checked').length == 0 )
	    {
	        alert("You must check atleast one checkbox");
	        return false;
	    }	
	    else
	    {
		if (confirm('Are you Sure ?'))
	        {
	            return true;
	        }
	        else
	        {            
	            return false;
	        }
	    }
	}

	    
	function validateForm()
	{
	    if( $('input[name="id[]"]:checked').length == 0 )
	    {
	        alert("You must check atleast one checkbox");
	        return false;
	    }
	    else	
	    return true;
	}

	</script>

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/custom-admin.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
	   
	   
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src="<?php echo base_url();?>assets/css/menu_jquery.js"></script>
   
   
    <script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css" rel="stylesheet">
	   
	<script>
	       
		 $(document).ready(function() {
		    $('#example').dataTable( {
		        "order": [[ 3, "desc" ]],
				//bFilter: false, 
				"aoColumnDefs": [
		        { 
		          "bSortable": false, 
		          "aTargets": [ -1,-2],
				  // <-- gets last column and turns off sorting
		         } 
		     ]
			 
				
		    } );
		} ); 
		function pagenation(pages){
			 $('#pagenation').submit();
		}       
	</script>

          <!--Pagenation End here -->

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
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Admin Panel / <span>Manage properties /</span><span>View Sold Properties</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);
	//print_r($_SESSION);?>
    	<div class="headtext1"><span>Mange Sold properties</span></div>
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
<?php } if(isset($DATE_FAIL) && $DATE_FAIL !=''){ ?>


		<div class="alert alert-danger alert-custom">
<button type="button" class="close" data-dismiss="alert" style="padding-right:15px;">×</button>
<strong>Error!</strong> <?php echo $DATE_FAIL; ?>
</div>
<?php $DATE_FAIL = "";} ?>

        <div class="mtextarea mtextarea2">
        <!--h2>Admin Panel</h2-->
		
        <div>
    <div class="tablewidth" >
        <div>
       <section id="no-more-tables">
		<form method="post" action="<?php echo base_url();?>manageproperty/changesoldpropertystatus">
		<div class="col-md-6 dataTables_length dataTables_wrapper no-footer" id="example_wrapper" 
                     style="margin-top: -6px; margin-left: -20px;   margin-bottom: 7px;display:none;">
			<div class="col-md-1"  style="margin-top:7px;"><b>Show </b></div>
			<div class="col-md-4">		
				<select name="limit" class="form-control" onchange="pagenation(this.value)">
					   <option value="10" <?php if($selected_limit==10) echo 'selected'; ?>>10</option>
					   <option value="25" <?php if($selected_limit==25) echo 'selected'; ?>>25</option>
					   <option value="50" <?php if($selected_limit==50) echo 'selected'; ?>>50</option>
					   <option value="100" <?php if($selected_limit==100) echo 'selected'; ?>>100</option>
			   </select> 
			</div>
			<div class="col-md-1" style="margin-top:7px;margin-left:-20px;"><b>entries </b></div>
		</div>
        <?php $agentsname=$this->db->query("select AgentFirstName,AgentLastName,AgentID from tbl_agents where is_active='1'")->result();	?>
					
		  <table id="example" class="table-bordered table-striped table-condensed cf tablesorter tablesorter-blackice">
			  <thead class="cf" style=" background:#0C4371 !important;">
				 <tr>
					  <th>Listing ID </th>
					  <th>Full Street Address</th>
					  <th>Zip code</th>
					  <th>Close Price</th>
					  <th>Close Date</th>
					  <th>Agent</th>
					  <th>Represented</th>
					  <th>Reviews</th>
					  <th>Status</th>
					  <th>Actions</th>
					  <th style = "padding-left:10px; width:23px;" ><input type="checkbox" onchange="checkAll(this)" ></th>
					
				  </tr>
			  </thead>
				<tbody>
					<?php 
					//echo count($agentsold);
					//echo "<pre>";print_r($agentsold);echo "</pre>";
					foreach($agentsold as $row){

					?>
						<tr>

							<td data-title="InquiryName">
								<?php
									// echo $id = $row['Id'];
									// $uid = $this->adminmodel->getusrid($id);
									echo $row['ListingID'];
								?>
							</td>
							<?php 
								if($this->uri->segment(3)){
									$seg=$this->uri->segment(3);
								}else{
									$seg=1;
								}
							?>
							<td data-title="InquriryContent" ><?php echo $row['FullStreetAddress'];?></td>
							<td data-title="InquriryContent" ><?php echo $row['PostalCode'];?></td>
							<td data-title="InquriryContent" >$<?php echo $row['Closeprice'];?></td>
							<td data-title="InquriryContent" ><?php echo date('d-M-Y',strtotime($row['CloseDate']));?></td>
							<td data-title="InquriryContent" >
								<select  class="form-control" name="agentid" id="agentid<?php echo $row['Id']?>" style='width:130px' onchange='changeagent(<?php echo $row['Id']?>,<?php echo $seg;?>)'>
								<option value=''>Select</option>
								<?php foreach($agentsname as $agentsnameval){?>

								<option value="<?php echo $agentsnameval->AgentID;?>" <?php if($row['ListAgentAgentID'] == $agentsnameval->AgentID){ echo "selected";}?> ><?php echo $agentsnameval->AgentFirstName.' '.$agentsnameval->AgentLastName;?></option>
								<?php } ?>
								</select>
							</td>
							<td data-title="InquriryContent" >
								<select  class="form-control" name="represented" id="represented<?php echo $row['Id']?>" onchange='changerepresented(<?php echo $row['Id']?>,<?php echo $seg;?>)'>
									<option value=''>Select</option>
									<option value='Buyer' <?php if($row['represented'] == 'Buyer'){ echo "selected";}?>>Buyer </option>
									<option value='Seller' <?php if($row['represented'] == 'Seller'){ echo "selected";}?>>Seller</option>
									<option value='Buyer and Seller' <?php if($row['represented'] == 'Buyer and Seller'){ echo "selected";}?>>Buyer and Seller</option>
									<option value='Tenant' <?php if($row['represented'] == 'Tenant'){ echo "selected";}?>>Tenant</option>
								</select>
							</td>
							<td>
								<?php 
									if($row['represented']<>'' && $row['ListAgentAgentID']<>0){
										$reviewcount=$this->db->query("select count(*) as cou from tbl_reviews where agent_id='{$row['ListAgentAgentID']}' and listing_id='{$row['ListingID']}'")->result();
										echo "<span style='color:#FF0000'>SOLD</span>";
								?>
								<br>

								<?php if($reviewcount[0]->cou>0){	?> 
								<a href="<?php echo site_url('/admin/managereviews')?>/<?php echo $row['ListAgentAgentID']; ?>/<?php echo $row['ListingID']; ?>" target="_blank">View Reviews</a> 
								<?php } 
								else{
								?>
								<p class="click agent_details" agent_id="<?php echo $row['ListAgentAgentID']; ?>" listing_id="<?php echo $row['ListingID']; ?>">
									<a href="">Review Request Email</a>
								</p>
							<?php } 
							}?>
							</td>

							<td data-title="Status">
								<?php //echo $row['LocaleListingStatus'];
									if($row['is_active']=='1')
									{
									echo "Active";
									}
									else if($row['is_active']=='0')
									{
									echo "InActive";
									}
								?>
							</td>
							<td data-title="Actions" >
								<a href="<?php echo base_url();?>admin/view_propertydetails/<?php echo $row['Id'];?>" title="View details"><i class="icon-eye-open"></i></a>
							</td>
							<td data-title="Check" ><input type="checkbox" value="<?php echo $row['Id'];?>" name='id[]'></td>
						</tr>	
					<?php 					
						} //for loop closed
					?>
                         					
				</tbody>
		  </table>
<?php $proplist=$this->db->query("SELECT count(*) as count1 FROM tbl_properties p where  p.is_active='1' and p.LocaleListingStatus='SOLD' and p.Latitude<>'' and p.Longitude<>'' and p.status='0' ")->result();
//$limit='10';
echo $properties_count;
$total=ceil($proplist[0]->count1/$selected_limit);
 function get_paging_info($tot_rows,$pp,$curr_page)
				{
					$pages = ceil($tot_rows / $pp); // calc pages

					$data = array(); // start out array
					$data['si']        = ($curr_page * $pp) - $pp; // what row to start at
					$data['pages']     = $pages;                   // add the pages
					$data['curr_page'] = $curr_page;               // Whats the current page

					return $data; //return the paging data

				}
				/* $start=0;
				$limit=100; */
				if($this->uri->segment(3))
				{
				$id=$id=$this->uri->segment(3);
				$start=($id-1)*$limit;
				}
				else{
					$id=1;
			    }
				//$searches=mysql_query("select * from tbl_properties LIMIT $start, $limit");

				/* $rows=mysql_num_rows(mysql_query("select * from tbl_properties"));
				$total=ceil($rows/$limit); 
				  */
				  $paging_info = get_paging_info($proplist[0]->count1,$limit,$id); ?>


		
				<!-- If the current page is more than 1, show the First and Previous links -->
				<?php if($paging_info['curr_page'] > 1) : ?>
				   
					<a href='<?php echo base_url()?>admin/viewsoldpropertys/<?php echo $id-1;?>' class='button' style='position:relative;top:-32px;left:-3px' >Prev</a>
				 <?php endif; 
					//setup starting point

					//$max is equal to number of links shown
					$max = 18;
					if($paging_info['curr_page'] < $max)
						$sp = 1;
					elseif($paging_info['curr_page'] >= ($paging_info['pages'] - floor($max / 2)) )
						$sp = $paging_info['pages'] - $max + 1;
					elseif($paging_info['curr_page'] >= $max)
						$sp = $paging_info['curr_page']  - floor($max/2);
				?>
			   <ul class="pagination">
				<!-- If the current page >= $max then show link to 1st page -->
				<?php if($paging_info['curr_page'] >= $max) : ?>

					<li><a href='<?php echo base_url()?>admin/viewsoldpropertys/1' title='Page 1'>1</a></li>
					<li><a style='background-color:#f8f8f8'>..</a></li>

				<?php endif; ?>

				<!-- Loop though max number of pages shown and show links either side equal to $max / 2 -->
				<?php for($i = $sp; $i <= ($sp + $max -1);$i++) : 
						if($i > $paging_info['pages'])
							continue;
					
						if($paging_info['curr_page'] == $i) : ?>

						<li class='active'>  <span class=''><?php echo $i; ?></span></li>

					<?php else : ?>

						<li><a href='<?php echo base_url()?>admin/viewsoldpropertys/<?php echo $i?>' title='Page <?php echo $i; ?>'><?php echo $i; ?></a></li>

					<?php endif; 
					endfor; ?>


				<!-- If the current page is less than say the last page minus $max pages divided by 2-->
				<?php if($paging_info['curr_page'] < ($paging_info['pages'] - floor($max / 2))) : ?>

					<li><a style='background-color:#f8f8f8'>...</a></li>
					<li><a href='<?php echo base_url()?>admin/viewsoldpropertys/<?php echo $paging_info['pages']?>' title='Page <?php echo $paging_info['pages']; ?>'><?php echo $paging_info['pages']; ?></a></li>

				<?php endif; ?>
				</ul>
				<!-- Show last two pages if we're not near them -->
				<?php if($paging_info['curr_page'] < $paging_info['pages']) : ?>

					<a href='<?php echo base_url()?>admin/viewsoldpropertys/<?php echo ($paging_info['curr_page'] + 1); ?>' style='position:relative;top: -32px;left: -1px;' title='Page <?php echo ($paging_info['curr_page'] + 1); ?>'>Next</a>

				   

				<?php endif; 
                    ?>
		 <div align="right" style="margin-top:20px;" >
		 
							<button type="submit" name="status" value="Active" class="btn btn-xs btn-default btyellow pull" onclick="return validateForm()" >Active</button>
							
							<button type="submit" name="status" value="Deactive" class="btn btn-xs btn-default btyellow pull" onclick="return validateForm()" >Inactive</button>
							
							<button style="display:none;" type="submit" name="status" value="Delete" onclick="return validateForm1()" class="btn btn-xs btn-default btyellow pull" >Delete</button>
                      </div>
					  </form> 
						</section>
						</div>
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
   <script type='text/javascript' src="<?php echo base_url();?>assets/js/jquery.tablesorter.js"></script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.black-ice.css">
    
<script type='text/javascript'>//<![CDATA[ 

$('table').tablesorter({

    // *** APPEARANCE ***
    // Add a theme - try 'blackice', 'blue', 'dark', 'default'
    //  'dropbox', 'green', 'grey' or 'ice'
    // to use 'bootstrap' or 'jui', you'll need to add the "uitheme"
    // widget and also set it to the same name
    // this option only adds a table class name "tablesorter-{theme}"
    theme: 'blackice',

    // fix the column widths
    widthFixed: false,

    // Show an indeterminate timer icon in the header when the table
    // is sorted or filtered
    showProcessing: false,

    // header layout template (HTML ok); {content} = innerHTML,
    // {icon} = <i/> (class from cssIcon)
    headerTemplate: '{content}',

    // return the modified template string
    onRenderTemplate: null, // function(index, template){ return template; },

    // called after each header cell is rendered, use index to target the column
    // customize header HTML
    onRenderHeader: function (index) {
        // the span wrapper is added by default
        $(this).find('div.tablesorter-header-inner').addClass('roundedCorners');
    },

    // *** FUNCTIONALITY ***
    // prevent text selection in header
    cancelSelection: true,

    // other options: "ddmmyyyy" & "yyyymmdd"
    dateFormat: "mmddyyyy",

    // The key used to select more than one column for multi-column
    // sorting.
    sortMultiSortKey: "shiftKey",

    // key used to remove sorting on a column
    sortResetKey: 'ctrlKey',

    // false for German "1.234.567,89" or French "1 234 567,89"
    usNumberFormat: true,

    // If true, parsing of all table cell data will be delayed
    // until the user initializes a sort
    delayInit: false,

    // if true, server-side sorting should be performed because
    // client-side sorting will be disabled, but the ui and events
    // will still be used.
    serverSideSorting: false,

    // *** SORT OPTIONS ***
    // These are detected by default,
    // but you can change or disable them
    // these can also be set using data-attributes or class names
    headers: {
        // set "sorter : false" (no quotes) to disable the column
          
		  
		  
		  9: {
            sorter: false
        },
		 10: {
            sorter: false
        }
    },

    // ignore case while sorting
    ignoreCase: true,

    // forces the user to have this/these column(s) sorted first
    sortForce: null,
    // initial sort order of the columns, example sortList: [[0,0],[1,0]],
    // [[columnIndex, sortDirection], ... ]
    sortList: [
        [0, 0],
        [1, 0],
        [2, 0]
    ],
    // default sort that is added to the end of the users sort
    // selection.
    sortAppend: null,

    // starting sort direction "asc" or "desc"
    sortInitialOrder: "asc",

    // Replace equivalent character (accented characters) to allow
    // for alphanumeric sorting
    sortLocaleCompare: false,

    // third click on the header will reset column to default - unsorted
    sortReset: false,

    // restart sort to "sortInitialOrder" when clicking on previously
    // unsorted columns
    sortRestart: false,

    // sort empty cell to bottom, top, none, zero
    emptyTo: "bottom",

    // sort strings in numerical column as max, min, top, bottom, zero
    stringTo: "max",

    // extract text from the table - this is how is
    // it done by default
    textExtraction: {
        0: function (node) {
            return $(node).text();
        },
        1: function (node) {
            return $(node).text();
        }
    },

    // use custom text sorter
    // function(a,b){ return a.sort(b); } // basic sort
    textSorter: null,

    // *** WIDGETS ***

    // apply widgets on tablesorter initialization
    initWidgets: true,

    // include zebra and any other widgets, options:
    // 'columns', 'filter', 'stickyHeaders' & 'resizable'
    // 'uitheme' is another widget, but requires loading
    // a different skin and a jQuery UI theme.
    widgets: ['zebra', 'columns'],

    widgetOptions: {

        // zebra widget: adding zebra striping, using content and
        // default styles - the ui css removes the background
        // from default even and odd class names included for this
        // demo to allow switching themes
        // [ "even", "odd" ]
        zebra: [
            "ui-widget-content even",
            "ui-state-default odd"],

        // uitheme widget: * Updated! in tablesorter v2.4 **
        // Instead of the array of icon class names, this option now
        // contains the name of the theme. Currently jQuery UI ("jui")
        // and Bootstrap ("bootstrap") themes are supported. To modify
        // the class names used, extend from the themes variable
        // look for the "$.extend($.tablesorter.themes.jui" code below
        uitheme: 'jui',

        // columns widget: change the default column class names
        // primary is the 1st column sorted, secondary is the 2nd, etc
        columns: [
            "primary",
            "secondary",
            "tertiary"],

        // columns widget: If true, the class names from the columns
        // option will also be added to the table tfoot.
        columns_tfoot: true,

        // columns widget: If true, the class names from the columns
        // option will also be added to the table thead.
        columns_thead: true,

        // filter widget: If there are child rows in the table (rows with
        // class name from "cssChildRow" option) and this option is true
        // and a match is found anywhere in the child row, then it will make
        // that row visible; default is false
        filter_childRows: false,

        // filter widget: If true, a filter will be added to the top of
        // each table column.
        filter_columnFilters: true,

        // filter widget: css class applied to the table row containing the
        // filters & the inputs within that row
        filter_cssFilter: "tablesorter-filter",

        // filter widget: Customize the filter widget by adding a select
        // dropdown with content, custom options or custom filter functions
        // see http://goo.gl/HQQLW for more details
        filter_functions: null,

        // filter widget: Set this option to true to hide the filter row
        // initially. The rows is revealed by hovering over the filter
        // row or giving any filter input/select focus.
        filter_hideFilters: false,

        // filter widget: Set this option to false to keep the searches
        // case sensitive
        filter_ignoreCase: true,

        // filter widget: jQuery selector string of an element used to
        // reset the filters.
        filter_reset: null,

        // Delay in milliseconds before the filter widget starts searching;
        // This option prevents searching for every character while typing
        // and should make searching large tables faster.
        filter_searchDelay: 300,

        // Set this option to true if filtering is performed on the server-side.
        filter_serversideFiltering: false,

        // filter widget: Set this option to true to use the filter to find
        // text from the start of the column. So typing in "a" will find
        // "albert" but not "frank", both have a's; default is false
        filter_startsWith: false,

        // filter widget: If true, ALL filter searches will only use parsed
        // data. To only use parsed data in specific columns, set this option
        // to false and add class name "filter-parsed" to the header
        filter_useParsedData: false,

        // Resizable widget: If this option is set to false, resized column
        // widths will not be saved. Previous saved values will be restored
        // on page reload
        resizable: true,

        // saveSort widget: If this option is set to false, new sorts will
        // not be saved. Any previous saved sort will be restored on page
        // reload.
        saveSort: true,

        // stickyHeaders widget: css class name applied to the sticky header
        stickyHeaders: "tablesorter-stickyHeader"

    },

    // *** CALLBACKS ***
    // function called after tablesorter has completed initialization
    initialized: function (table) {},

    // *** CSS CLASS NAMES ***
    tableClass: 'tablesorter',
    cssAsc: "tablesorter-headerSortUp",
    cssDesc: "tablesorter-headerSortDown",
    cssHeader: "tablesorter-header",
    cssHeaderRow: "tablesorter-headerRow",
    cssIcon: "tablesorter-icon",
    cssChildRow: "tablesorter-childRow",
    cssInfoBlock: "tablesorter-infoOnly",
    cssProcessing: "tablesorter-processing",

    // *** SELECTORS ***
    // jQuery selectors used to find the header cells.
    selectorHeaders: '> thead th, > thead td',

    // jQuery selector of content within selectorHeaders
    // that is clickable to trigger a sort.
    selectorSort: "th, td",

    // rows with this class name will be removed automatically
    // before updating the table cache - used by "update",
    // "addRows" and "appendCache"
    selectorRemove: "tr.remove-me",

    // *** DEBUGING ***
    // send messages to console
    debug: false

});

// Extend the themes to change any of the default class names ** NEW **
/*$.extend($.tablesorter.themes.jui, {
    // change default jQuery uitheme icons - find the full list of icons
    // here: http://jqueryui.com/themeroller/ (hover over them for their name)
    table: 'ui-widget ui-widget-content ui-corner-all', // table classes
    header: 'ui-widget-header ui-corner-all ui-state-default', // header classes
    icons: 'ui-icon', // icon class added to the <i> in the header
    sortNone: 'ui-icon-carat-2-n-s',
    sortAsc: 'ui-icon-carat-1-n',
    sortDesc: 'ui-icon-carat-1-s',
    active: 'ui-state-active', // applied when column is sorted
    hover: 'ui-state-hover', // hover class
    filterRow: '',
    even: 'ui-widget-content', // even row zebra striping
    odd: 'ui-state-default' // odd row zebra striping
}); */
//]]>  

</script>

 <div id="popup" class="popup">

 
		   		<div class='content'>
			   <a href="" title="Close" alt='quit' class='close x' id='x'>X</a>
				
				
				
				<div class="emaildivcls">
				
				  <div id="agentsendmail_success" style="margin:33px 22px 26px 237px;color:green"></div>
				
				<form action="<?php echo base_url(); ?>admin/reviewreqmail" name="revemailform" id="revemailform" method="post" onsubmit="return false;">
			    
			    Email Address:<input type="email" name="reviewemail" id="reviewemail" onkeyup="hidesendmailerrors();" style="width:50%;height:50%;" placeholder='Provide Your Email Address'>
				
				<input type="hidden" name="hidagentid" id="hidagentid" value="">
				
				<input type="hidden" name="hidlistingid" id="hidlistingid" value="">
				  
				  <input type="submit" name="mailsub" id="mailsub" value="Send" onclick ="return sendemailvalidate();" style="width:51px;height:29px;margin: 0px 6px 8px 6px;">
				  <div id="sendemailmailerr" style="color:red;margin: 4px 6px 8px 181px;"></div>
				  
				</form>  
				
				</div>
			    </div>
</div>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.black-ice.css">

<script>
 $(document).ready(function()
 {
	$('.close').click(function()
	{
		$('.alert').hide();
	});
 });
</script>   
   
<script>
function sendemailvalidate()
{
	
    if(document.revemailform.reviewemail.value == "")
    {
       document.getElementById("sendemailmailerr").style.display = "block";
	   document.getElementById("sendemailmailerr").innerHTML = "Please enter the mail";
	   document.getElementById("reviewemail").focus();
       return false;
    }
   
   
    var x = document.forms["revemailform"]["reviewemail"].value;
	var atpos = x.indexOf("@");
	var dotpos = x.lastIndexOf(".");
	if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length)
	{
		document.getElementById("sendemailmailerr").style.display = "block";
		document.getElementById('sendemailmailerr').innerHTML = 'Not a valid e-mail address';
		document.getElementById("reviewemail").focus();
		return false;
	}
	
	
   
    var strpost = $( "#revemailform" ).serialize();

    $.ajax({
        url: "<?php echo base_url(); ?>admin/reviewreqmail",
        type: "post",
        data: strpost,
        success: function(data)
		{
			console.log(data);
			
			if(data=='success') 
			{		
		       $("#agentsendmail_success").html("Mail Sent Successfully");  
			    
			   $("#agentsendmail_success").show();
			   $("#sendemailmailerr").hide();
			   
			   clearagentrevsendmailform(); 
               setTimeout(function(){ closeagentrevsendmailform(); }, 3000);			   
			}			
          
        },
        error:function(){

            alert("Request failed. Please try it after some time.");

        }

    });

    return false;
   
}

</script>


<script type="text/javascript">
function hidesendmailerrors()
{   

	var stremail = document.revemailform.reviewemail.value;
	
	
	var filter = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

	if (filter.test(stremail))
	{	
      document.getElementById("sendemailmailerr").style.display = "none";
	}	
	
 	
	
}
</script>

<script>
$(".agent_details").click(function(){
	var aid = $(this).attr('agent_id');
	var listid = $(this).attr('listing_id');
	
	$("#hidagentid").val(aid);
    $("#hidlistingid").val(listid);
	
    
	
 });
</script>

<script>
function clearagentrevsendmailform()
{	
    $('#reviewemail').val(''); 
}

function closeagentrevsendmailform()
{
    location.reload();
}
function changerepresented(id,seg){
    var represented=$("#represented"+id).val();
    /*if(represented!="")
    {*/
        window.location="<?php echo base_url();?>admin/changerepresented?represented="+represented+"&propid="+id+"&seg="+seg;
    /*}*/
}
function changeagent(id,seg){
    var agent=$("#agentid"+id).val();
    /* if(agent!="")
    { */
        window.location="<?php echo base_url();?>admin/changeagent?agent="+agent+"&propid="+id+"&seg="+seg;
    /*} */
}
</script>



<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.click').click(function(){
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
return false;
});
});



	
</script>

