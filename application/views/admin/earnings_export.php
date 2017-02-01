 <?php
header("Content-type: application/ms-excel");
header("Content-Disposition: attachment;Filename=excelreport.xls");		 
	 echo '<table class="table table-bordered table-striped" style="width:94%;margin-top:20px;" align="center"><tbody>'; 
	   echo'<td><b>Item Name</b></td>';
	   echo'<td><b>My Commission</b></td>';
	   echo'<td><b>Sold Item Amount</b></td>';
	   echo'<td><b>Paid BY</b></td>';
	   echo'<td><b>Date(Amount Received Date)</b></td>';
	   echo'<td><b>Listing Number</b></td>';
	   echo'</tr>';	
	   for($i=0;$i<count($earn_export);$i++){
	   echo'<tr>';
	   echo'<td>'.$earn_export[$i]->item_name.'</td>';
	   echo'<td>'.$earn_export[$i]->amount_earned.'</td>';
	   echo'<td>'.$earn_export[$i]->proposal_amount.'</td>';
	   echo'<td>'.$earn_export[$i]->user_name.'</td>';
	   echo'<td>'.date("d M Y",strtotime($earn_export[$i]->amount_recv_date)).'</td>';
	   echo'<td>'.$earn_export[$i]->listing_number.'</td>';
	   echo'</tr>';
	 }
	 echo '</tbody></table>';
				 
 ?>