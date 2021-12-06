<br></br>
<body>
<div class="container">
		<!-- <div class="panel panel-primary"> -->
			<div class="panel-body">
				<br></br>
			<h3 align="left">House Keeping Lists</h3>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" style="font-size:12px" class="table table-striped table-hover table-responsive"  cellspacing="0">
					
				  <thead>
				  	<tr >
				  		<th align="left"  width="200">HOUSE KEEPING ID</th>	
				  		<th align="left" width="200">ROOM DESCRIPTION</th> 
				  		<th align="left" width="200">ASSISTANT</th>
				  		<th align="left"  width="250">ROOM ACTION</th>
				  		<th align="left"  width="200">ROOM STATUS</th>
				  		<!-- <th># of Rooms</th> -->
				  	</tr>	
				  </thead>
				  <tbody>

				  	<?php 
				  	if(empty($_POST)){
				  			$mydb->setQuery("SELECT * FROM tblhousekeeping");	
						  		$cur = $mydb->loadResultList();
									foreach ($cur as $result) {
							  		echo '<tr>';
							  				echo '<td>'. $result->HK_ID.'</td>';
											echo '<td>'. $result->HK_DES.'</td>';
											//echo '<td align="left"  width="120"> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->RESERVEID.'"/>  '. $result->RESERVEID.'</td>';
											echo '<td>'. $result->HK_ASSISTANT.'</td>';
											echo '<td>'. $result->HK_ACTION.'</td>';					
											echo '<td>'. $result->HK_STATUS.'</td>';
							  		echo '</tr>';
						  	} 
				  	}

				  	if(isset($_POST["ALL"])){
								$mydb->setQuery("SELECT * FROM tblhousekeeping");	
						  		$cur = $mydb->loadResultList();
									foreach ($cur as $result) {
							  		echo '<tr>';
							  				echo '<td>'. $result->HK_ID.'</td>';
											echo '<td>'. $result->HK_DES.'</td>';
											//echo '<td align="left"  width="120"> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->RESERVEID.'"/>  '. $result->RESERVEID.'</td>';
											echo '<td>'. $result->HK_ASSISTANT.'</td>';
											echo '<td>'. $result->HK_ACTION.'</td>';					
											echo '<td>'. $result->HK_STATUS.'</td>';
							  		echo '</tr>';
						  	} 
				  	}

				  	if (isset($_POST["C"])) {
						  		$mydb->setQuery("SELECT * FROM tblhousekeeping WHERE HK_STATUS ='CLEAN'");	
						  		$cur = $mydb->loadResultList();
									foreach ($cur as $result) {
							  		echo '<tr>';
							  				echo '<td>'. $result->HK_ID.'</td>';
											echo '<td>'. $result->HK_DES.'</td>';
											//echo '<td align="left"  width="120"> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->RESERVEID.'"/>  '. $result->RESERVEID.'</td>';
											echo '<td>'. $result->HK_ASSISTANT.'</td>';
											echo '<td>'. $result->HK_ACTION.'</td>';					
											echo '<td>'. $result->HK_STATUS.'</td>';
							  		echo '</tr>';
						  	} 
				  	}

				  	if (isset($_POST["CH"])) {
						  		$mydb->setQuery("SELECT * FROM tblhousekeeping WHERE HK_STATUS ='CHECKED'");	
						  		$cur = $mydb->loadResultList();
									foreach ($cur as $result) {
							  		echo '<tr>';
							  				echo '<td>'. $result->HK_ID.'</td>';
											echo '<td>'. $result->HK_DES.'</td>';
											//echo '<td align="left"  width="120"> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->RESERVEID.'"/>  '. $result->RESERVEID.'</td>';
											echo '<td>'. $result->HK_ASSISTANT.'</td>';
											echo '<td>'. $result->HK_ACTION.'</td>';					
											echo '<td>'. $result->HK_STATUS.'</td>';
							  		echo '</tr>';
						  	} 
				  	}

				  	if (isset($_POST["CL"])) {
						  		$mydb->setQuery("SELECT * FROM tblhousekeeping WHERE HK_STATUS ='CLEANING'");	
						  		$cur = $mydb->loadResultList();
									foreach ($cur as $result) {
							  		echo '<tr>';
							  				echo '<td>'. $result->HK_ID.'</td>';
											echo '<td>'. $result->HK_DES.'</td>';
											//echo '<td align="left"  width="120"> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->RESERVEID.'"/>  '. $result->RESERVEID.'</td>';
											echo '<td>'. $result->HK_ASSISTANT.'</td>';
											echo '<td>'. $result->HK_ACTION.'</td>';					
											echo '<td>'. $result->HK_STATUS.'</td>';
							  		echo '</tr>';
						  	} 
				  	}

				  	if (isset($_POST["TC"])) {
						  		$mydb->setQuery("SELECT * FROM tblhousekeeping WHERE HK_STATUS ='TOUCHED'");	
						  		$cur = $mydb->loadResultList();
									foreach ($cur as $result) {
							  		echo '<tr>';
							  				echo '<td>'. $result->HK_ID.'</td>';
											echo '<td>'. $result->HK_DES.'</td>';
											//echo '<td align="left"  width="120"> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->RESERVEID.'"/>  '. $result->RESERVEID.'</td>';
											echo '<td>'. $result->HK_ASSISTANT.'</td>';
											echo '<td>'. $result->HK_ACTION.'</td>';					
											echo '<td>'. $result->HK_STATUS.'</td>';
							  		echo '</tr>';
						  	} 
				  	}

				  	if (isset($_POST["DT"])) {
						  		$mydb->setQuery("SELECT * FROM tblhousekeeping WHERE HK_STATUS ='DIRTY'");	
						  		$cur = $mydb->loadResultList();
									foreach ($cur as $result) {
							  		echo '<tr>';
							  				echo '<td>'. $result->HK_ID.'</td>';
											echo '<td>'. $result->HK_DES.'</td>';
											//echo '<td align="left"  width="120"> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->RESERVEID.'"/>  '. $result->RESERVEID.'</td>';
											echo '<td>'. $result->HK_ASSISTANT.'</td>';
											echo '<td>'. $result->HK_ACTION.'</td>';					
											echo '<td>'. $result->HK_STATUS.'</td>';
							  		echo '</tr>';
						  	} 
				  	}

				  	if (isset($_POST["OOS"])) {
						  		$mydb->setQuery("SELECT * FROM tblhousekeeping WHERE HK_STATUS ='OUT OF SERVICE'");	
						  		$cur = $mydb->loadResultList();
									foreach ($cur as $result) {
							  		echo '<tr>';
							  				echo '<td>'. $result->HK_ID.'</td>';
											echo '<td>'. $result->HK_DES.'</td>';
											//echo '<td align="left"  width="120"> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->RESERVEID.'"/>  '. $result->RESERVEID.'</td>';
											echo '<td>'. $result->HK_ASSISTANT.'</td>';
											echo '<td>'. $result->HK_ACTION.'</td>';					
											echo '<td>'. $result->HK_STATUS.'</td>';
							  		echo '</tr>';
						  	} 
				  	}

				  	if (isset($_POST["OOO"])) {
						  		$mydb->setQuery("SELECT * FROM tblhousekeeping WHERE HK_STATUS ='OUT OF ORDER'");	
						  		$cur = $mydb->loadResultList();
									foreach ($cur as $result) {
							  		echo '<tr>';
							  				echo '<td>'. $result->HK_ID.'</td>';
											echo '<td>'. $result->HK_DES.'</td>';
											//echo '<td align="left"  width="120"> <input type="checkbox" name="selector[]" id="selector[]" value="'.$result->RESERVEID.'"/>  '. $result->RESERVEID.'</td>';
											echo '<td>'. $result->HK_ASSISTANT.'</td>';
											echo '<td>'. $result->HK_ACTION.'</td>';					
											echo '<td>'. $result->HK_STATUS.'</td>';
							  		echo '</tr>';
						  	} 
				  	}
				  	?>
				  </tbody>

				</table>
				</form>
	  		</div><!--End of Panel Body-->
	  		 	<!-- </div> -->
	  	<!--End of Main Panel-->

	  	<form method="post">

	  		<!-- TRANSFER VALUE FROM THIS PAGE TO ANOTHER PAGE -->
	  		<center>
	  		<center><H>HOUSE KEEPING ACTION FILTERS</H></center>
	  		<div class="btn-group">
	  			<button type="submit" class="btn btn-default" id="ALLCLICK" name="ALL" >DISPLAY ALL</button>
          		<button type="submit" class="btn btn-default" name="C" >CLEAN ROOM</button>
          		<button type="submit" class="btn btn-default" name="CH" >CHECKED ROOM</button>
          		<button type="submit" class="btn btn-default" name="CL" >CLEANING ROOM</button>

          		<button type="submit" class="btn btn-default" name="TC" >TOUCHED ROOM</button>
          		<button type="submit" class="btn btn-default" name="DT" >DIRTY ROOM</button>
          		<button type="submit" class="btn btn-default" name="OOS" >OUT OF SERVICE</button>
          		<button type="submit" class="btn btn-default" name="OOO" >OUT OF ORDER</button>
    		</div>
			</center>
		</form>
			<!-- TRANSFER VALUE FROM THIS PAGE TO ANOTHER PAGE --> 


</div><!--End of container-->
<div class="modal fade" id="myModal" tabindex="-1">
</div>
</body>
