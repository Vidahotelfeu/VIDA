<br></br>
<div class="container">
		<!-- <div class="panel panel-primary"> -->
	  		<!-- TRANSFER VALUE FROM THIS PAGE TO ANOTHER PAGE -->
	  		<center><H1>GET ROOM INFORMATION</H1></center>
	  		<center>
	  		<form method="post" action="index.php?view=find"> <!-- transfer the input text to find.php -->
	  			<H>INPUT ROOM ID</H>
			    <input type="number" name="txt" />
			    <input type="submit" class="btn btn-primary"/>
			</form>
			</center>
			<!-- TRANSFER VALUE FROM THIS PAGE TO ANOTHER PAGE -->

			<div class="panel-body">
				<br></br>
			<h3 align="left">Room Rates</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" style="font-size:12px" class="table table-striped table-hover table-responsive"  cellspacing="0">
					
				  <thead>
				  	<tr  >
				  		<th align="left"  width="200">ROOM ID</th>	
				  		<th align="left" width="200">ROOM NAME</th> 
				  		<th align="left" width="200">AVAILABLE ROOMS</th>
				  		<th align="left"  width="250">RATE TYPE</th>
				  		<th align="left"  width="200">SEASON NAME</th>
				  		<th align="left"  width="200">AMMENITIES</th>
				  		<th align="left"  width="200">ROOM RATE</th>
				  		<th align="left"  width="200">RATE/ EXTRA ADULT</th>
				  		<th align="left"  width="200">RATE/ EXTRA KID</th>
				  		<!-- <th># of Rooms</th> -->
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT * FROM tblroom");	
				  		$cur = $mydb->loadResultList();
							foreach ($cur as $result) {
					  		echo '<tr>';
					  				echo '<td>'. $result->ROOMID.'</td>';
									echo '<td>'. $result->ROOM.'</td>';
									//echo '<td align="left"  width="120"> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->RESERVEID.'"/>  '. $result->RESERVEID.'</td>';
									echo '<td>'. $result->ROOMNUM.'</td>';
									echo '<td>'. $result->RateType.'</td>';					
									echo '<td>'. $result->SeasonName.'</td>';
									echo '<td>'. $result->Amenities.'</td>';
									echo '<td>'. $result->PRICE.'</td>';
									echo '<td>'. $result->RateXtraAdult.'</td>';
									echo '<td>'. $result->RateXtraKid.'</td>';
				
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