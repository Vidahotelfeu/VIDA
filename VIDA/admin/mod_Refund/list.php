<br></br>
<div class="container">

		  		<!-- TRANSFER VALUE FROM THIS PAGE TO ANOTHER PAGE -->
	  		<center><H1>DISPLAY GUEST REFUNDED BOOK INFORMATIONS</H1></center>
	  		<center>
	  		<form method="post" action="index.php?view=find"> <!-- transfer the input text to find.php -->
	  		<div>
	  			<H>INPUT GUEST ID</H>
			    <input type="number" name="guessid" required/>
		
			    <H>BOOK CODE</H>
			    <input type="text" name="code" required/>
			</div>
			<br></br>
			    <input type="submit" class="btn btn-primary"/>
			</form>
			</center>
				<!-- TRANSFER VALUE FROM THIS PAGE TO ANOTHER PAGE -->

		<!-- <div class="panel panel-primary"> -->
			<div class="panel-body">
				<br></br>
			<h3 align="left">List of Refunded Bookings</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" style="font-size:12px" class="table table-striped table-hover table-responsive"  cellspacing="0">
					
				  <thead>
				  	<tr  >
				  		<th align="left" width="200">GUEST ID</th>
				  		<th align="left"  width="250">BOOK CODE</th>
				  		<th align="left"  width="200">DATE</th>	
				  		<th align="left" width="200">BOOKING ID</th> 
				  		<th align="left"  width="200">ROOMID</th>
				  		<th align="left"  width="200">ARRIVAL</th>
				  		<th align="left"  width="200">DEPARTURE</th>
				  		<th align="left"  width="200">BOOK AMOUNT</th>
				  		<th align="left"  width="200">STATUS</th>
				  		<!-- <th># of Rooms</th> -->
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT * FROM tblreservation WHERE status = 'Refund'");	
				  		$cur = $mydb->loadResultList();
							foreach ($cur as $result) {
					  		echo '<tr>';
					  				echo '<td>'. $result->GUESTID.'</td>';
									echo '<td>'. $result->CONFIRMATIONCODE.'</td>';	
					  				echo '<td>'. $result->TRANSDATE.'</td>';
									echo '<td>'. $result->RESERVEID.'</td>';
									//echo '<td align="left"  width="120"> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->RESERVEID.'"/>  '. $result->RESERVEID.'</td>';				
									echo '<td>'. $result->ROOMID.'</td>';
									echo '<td>'. $result->ARRIVAL.'</td>';
									echo '<td>'. $result->DEPARTURE.'</td>';
									echo '<td>'. $result->RPRICE.'</td>';
									echo '<td>'. $result->STATUS.'</td>';
				
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