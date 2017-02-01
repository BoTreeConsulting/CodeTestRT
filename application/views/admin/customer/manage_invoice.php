<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Guardian Property Service Staff</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
     <link href="<?php echo base_url();?>assets/css/bootstrap-combined.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/loyalstyle.css" rel="stylesheet">
       <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
	   
	  <!--Chechk box validation start here-->
<script>	  
function validateForm1()
{
    if( $('input[name="status[]"]:checked').length == 0 )
    {
        alert("You must check atleast one checkbox");
        return false;
    }
	
    else{
	confirm_delete();
	return false;
	}
        return true;
}


function confirm_delete() {
 if (confirm('Are you Sure ?')) commentDelete(1); return false;
}


function validateForm()
{
    if( $('input[name="status[]"]:checked').length == 0 )
    {
        alert("You must check atleast one checkbox");
        return false;
    }
    else
	
        return true;
}

</script>
	  <!--Chechk box validation end here-->
	   	   
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
	  

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/custom-admin.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
	   
	   
	   
	   
	   
       <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	   <script src="<?php echo base_url();?>assets/css/menu_jquery.js"></script>
	   
	   <!--Pagenation Start here -->
	   
	   
 <script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
 <link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.min.css" rel="stylesheet">
 <link href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css" rel="stylesheet">
 
 
       <script>
       
       $(document).ready(function() {
    $('#example').dataTable( {
        "order": [[ 3, "desc" ]],
		bFilter: false, 
		"aoColumnDefs": [
        { 
          "bSortable": false, 
          "aTargets": [ -1,-2,-4],
		  // <-- gets last column and turns off sorting
         } 
     ]
	 
		
    } );
} );
       
</script>

	   
	   <!--Pagenation end here -->
       
       
       
       

 <?php 
 //print_r($_SESSION);
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
            <p class="navbar-text pull-right" style="margin-top:-5px;">Welcome <span><?php  echo $this->session->userdata("admin_name");?></span>  <a href="<?php echo base_url();?>admin/logout" class="">Logout</a></p>
          </div>
    </div>
    <div class="col-md-12 remove-padd">
    <?php 
	include "left-menu.php";
	?>
    
    <div class="col-md-10" style="padding:0;">
	<div class="headtext1"><i><img src=" <?php echo base_url("assets/site_images/lapicon.png");?>"></i><span>Location:</span> Customer Panel / <span>Invoices /</span> <span>Manage Invoices</span></div>
     <?php
	   $total = $this->uri->total_segments();
       $modulename = $this->uri->segment($total);?>
	
	
    	<div class="headtext1"><span> Manage Invoices</span></div>
		
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
		<div class="mtext">
            	
            </div>
        <div>
    <div class="tablewidth" >
        <div >
                           <section id="no-more-tables">
		  <form name="cms_pages" method="post" action="<?php echo base_url();?>admin/delete_files">
		   <table id="example"  class="table-bordered table-striped table-condensed cf tablesorter tablesorter-blackice">
			  <thead class="cf" style=" background:#0C4371 !important;">
				 <tr>
					 <th>Sno.</th>
					  <th data-sortable="true">File Name</th>
					 
					  <th>Created By</th>
					  <th>Created On</th>
					 
					  <th>Modified By</th>
					  <th>Modified On</th>
					  <th>Actions</th>
					 
					
				  </tr>
			  </thead>
				<tbody>
						   <?php
$i=0;


						   for($i=0;$i<count($listdata);$i++){ 

						   
						   ?>	
                         <tr>
					
            			<td data-title="Sno."><?php echo $i+1; ?></td>	
						<td data-title="File Name"><a  targethref='<?php echo base_url();?>assets/uploads/accounts/invoices/<?php echo $listdata[$i]->file_name; ?>'><?php echo $listdata[$i]->display_name; ?></a></td>
						<td data-title="Created By" ><?php echo $listdata[$i]->cby; ?></td>
						<td data-title="Created On"><?php echo date("M d Y h:i A",strtotime($account_info[$i]->createdon)); ?></td>
						<td data-title="Modified By" ><?php echo $listdata[$i]->cby; ?></td>
						<td data-title="Modified On"><?php echo date("M d Y h:i A",strtotime($listdata[$i]->createdon)); ?></td>
						<td data-title="Actions" ><a  targethref='<?php echo base_url();?>assets/uploads/accounts/invoices/<?php echo $listdata[$i]->file_name; ?>'><i class="icon-eye-open"></i></a></td>
						
					
					</tr>	
					<?php }?>	

				
				</tbody>
		  </table>
		
		  <div align="right" style="margin-top:20px;" >
							
							<button type="submit" name='active' value='Delete'  class="btn btn-xs btn-default btyellow pull" onclick="return validateForm1()" >Delete</button>
                      </div>  </div>
    	  </form> 
    </div>
</div> 
        	
            
        </div>
        <div class="dbshadow"></div>
        
    </div>
   <?php include('includes/footer.php'); ?>
    
    
    
    
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
      4: {
            sorter: false
        },
	  
	  
		  
		 6: {
            sorter: false
        }
		7: {
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
$.extend($.tablesorter.themes.jui, {
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
});
//]]>  

</script>