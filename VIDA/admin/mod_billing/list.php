	  		<br></br>
	  		<!-- TRANSFER VALUE FROM THIS PAGE TO ANOTHER PAGE -->
	  		<center><H1>DISPLAY GUEST BILLING INFORMATIONS</H1></center>
	  		<center>
	  		<form method="post" action="index.php?view=find"> <!-- transfer the input text to find.php -->
	  		<div>
	  			<H>INPUT GUEST ID</H>
			    <input type="number" name="guessid" required/>
		
			    <H>INPUT BILL ID</H>
			    <input type="number" name="billid" required/>
			</div>
			<br></br>
			    <input type="submit" class="btn btn-primary"/>
			</form>
			</center>
			<!-- TRANSFER VALUE FROM THIS PAGE TO ANOTHER PAGE -->
<div class="container">
		<!-- <div class="panel panel-primary"> -->
			<div class="panel-body">
				<br></br>
			<h3 align="left">List of Billings</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" style="font-size:12px" class="table table-striped table-hover table-responsive"  cellspacing="0">
					
				  <thead>
				  	<tr  >
				  		<th align="left"  width="200">BILL ID</th>	
				  		<th align="left"  width="200">GUEST ID</th>
				  		<th align="left"  width="200">ROOM #</th>
				  		<th align="left"  width="200">MODE OF PAYMENT</th>
				  		<th align="left" width="200">AMOUNT</th> 
				  		<th align="left" width="200">MISC CHARGES</th>
				  		<th align="left"  width="250">ROOM CHARGES</th>  		
				  		<th align="left"  width="200">PAID AMOUNT</th>
				  		<th align="left"  width="200">BALANCE AMOUNT</th>
				  		<!-- <th># of Rooms</th> -->
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT * FROM tblbilling");	
				  		$cur = $mydb->loadResultList();
							foreach ($cur as $result) {
					  		echo '<tr>';
					  				echo '<td>'. $result->bill_id.'</td>';
									echo '<td>'. $result->Booking_id.'</td>'; // GUEST ID
									//echo '<td align="left"  width="120"> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->RESERVEID.'"/>  '. $result->RESERVEID.'</td>';
									echo '<td>'. $result->bill_roomnum.'</td>';
									echo '<td>'. $result->bill_mode_of_payment.'</td>';					
									echo '<td>'. $result->bill_amount.'</td>';
									echo '<td>'. $result->bill_misc_charges.'</td>';
									echo '<td>'. $result->bill_room_charges.'</td>';
									echo '<td>'. $result->bill_paidamount.'</td>';
									echo '<td>'. $result->bill_balance.'</td>';
				
					  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				</table>
				</form>
	  		</div><!--End of Panel Body-->
	  		 	<!-- </div> -->
	  	<!--End of Main Panel-->


</div><!--End of container-->
<div class="modal fade" id="myModal" tabindex="-1">
</div>