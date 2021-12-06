<br></br>
<?php
		check_message();
			
		?>
<div class="container">
			<div class="panel-body">
<form  method="post" action="processreservation.php?action=delete">
	<table id="table" class="table table-striped" cellspacing="0">
<thead>
<tr>
<td width="0%"></td>	
<td width="150"><strong>Guest</strong></td>
<td width="80"><strong>Transaction Date</strong></td>
<td width="80"><strong>Confimation Code</strong></td>
<td width="70"><strong>Total Rooms</strong></td>
<td width="80"><strong>Total Price</strong></td>
<td width="80"><strong>Status</strong></td>
<td></td>
<td></td>
<td></td>
<td width="150"><strong>Actions</strong></td>
</tr>
</thead>
<tbody>
<?php
 
$mydb->setQuery("SELECT  p.`GUESTID`,`G_FNAME` ,  `G_LNAME` ,  `G_ADDRESS` ,`G_EMAIL`,  `TRANSDATE` ,  `CONFIRMATIONCODE` ,  `PQTY` ,  `SPRICE` ,`STATUS`
				FROM  `tblpayment` p,  `tblguest` g
				WHERE p.`GUESTID` = g.`GUESTID`   
				ORDER BY p.`STATUS`='pending' desc ");
$cur = $mydb->loadResultList();
				  			 
foreach ($cur as $result) {
?>
<tr>
<td width="5%" align="center"></td>
<td><?php echo $result->G_FNAME." ".$result->G_LNAME; ?></td>
<td><?php echo $result->TRANSDATE; ?></td>  
<td><?php echo $result->CONFIRMATIONCODE; ?></td>
<td><?php echo $result->PQTY; ?></td>
<td>$ <?php echo $result->SPRICE; ?></td>
<td><?php echo $result->STATUS; ?></td> 
 <td >
	<?php 
		if($result->STATUS == 'Confirmed'){ ?>
		<!-- <a class="cls_btn" id="<?php echo $result->reservation_id; ?>" data-toggle='modal' href="#profile" title="Click here to Change Image." ><i class="icon-edit">test</a> -->
			<td>
			<a href="index.php?view=view&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="icon-edit">View</a>
			</td>
			<td>
			<a href="controller.php?action=cancel&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="icon-edit">Cancel</a>
			</td>
			<td>
			<a href="controller.php?action=checkin&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-success btn-xs" ><i class="icon-edit">Check in</a>
			</td>
			<td>
			<a href="controller.php?action=delete&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">Delete</a>
			</td>
			<td>
			<a href="index.php?view=edit&code=<?php echo $result->CONFIRMATIONCODE; ?>&id=<?php echo $result->GUESTID; ?>" class="btn btn-primary btn-xs"  ><i class="icon-edit">Edit</a>
			</td>
			<td>
			<a href="mailto:<?php echo $result->G_EMAIL; ?>?
			subject=VIDA INTERNATIONAL HOTEL AND RESORT&
			body=Dear Guest, %0D%0A %0D%0A We Would like to inform you that your reservation is already <?php echo $result->STATUS; ?>! See you on your arrival. %0D%0A %0D%0A This is your Confirmation Code to the hotel: <?php echo $result->CONFIRMATIONCODE; ?>.%0D%0A %0D%0A Thank you and God Bless. %0D%0A%0D%0A" 
			class="btn btn-primary btn-xs" ><i class="icon-edit">SEND EMAIL</a>
			</td>
			<center>
			<td>
			<a href="controller.php?action=clean&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">CLEAN ROOM</a>
			<a href="controller.php?action=cleaning&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">CLEANING ROOM</a>
			<a href="controller.php?action=checked&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">CHECKED ROOM</a>
			<a href="controller.php?action=touched&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">TOUCHED ROOM</a>
			<a href="controller.php?action=dirty&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">DIRTY ROOM</a>
			<a href="controller.php?action=outofservice&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">OUT OF SERVICE</a>
			<a href="controller.php?action=outoforder&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">OUT OF ORDER</a>
			</td>
			</center>
		<?php
		}elseif($result->STATUS == 'Checkedin'){
	?>		<td>
			<a href="index.php?view=view&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="icon-edit">View</a>
			</td>
			<td>
			<a href="controller.php?action=checkout&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs" ><i class="icon-edit">Check out</a>
			</td>
			<td>
			<a href="controller.php?action=delete&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">Delete</a>
			</td>
			<td>
			<a href="index.php?view=edit&code=<?php echo $result->CONFIRMATIONCODE; ?>&id=<?php echo $result->GUESTID; ?>" class="btn btn-primary btn-xs"  ><i class="icon-edit">Edit</a>
			</td>
	<?php
		}elseif($result->STATUS == 'Checkedout'){ ?>
			<td>
			<a href="index.php?view=view&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="icon-edit">View</a>
			</td>
			<td>
			<a href="controller.php?action=delete&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">Delete</a>
			</td>

			<td></td>
			<td></td>
			<td>
			<a href="index.php?view=edit&code=<?php echo $result->CONFIRMATIONCODE; ?>&id=<?php echo $result->GUESTID; ?>" class="btn btn-primary btn-xs"  ><i class="icon-edit">Edit</a>
			</td>
			<td></td>
			<center>
			<td>
		    <a href="controller.php?action=clean&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">CLEAN ROOM</a>
			<a href="controller.php?action=checked&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">CHECKED ROOM</a>
			</td>
			</center>
	<?php
		}elseif($result->STATUS == 'Cancelled'){ ?>
			<td>
			<a href="index.php?view=view&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="icon-edit">View</a>
			</td>
			<td>
			<a href="controller.php?action=delete&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">Delete</a>
			</td>
			<td></td>
			<td></td>
			<td></td>
			<td>
			<a href="mailto:<?php echo $result->G_EMAIL; ?>?
			subject=VIDA INTERNATIONAL HOTEL AND RESORT&
			body=Dear Guest, %0D%0A %0D%0A We Would like to inform you With all regrets on behalf of Vida International Hotel, that your reservation is <?php echo $result->STATUS; ?>. Vida International still wants to be part of your future travel, feel free to book again in the near future. %0D%0A %0D%0A Thank you and God Bless. %0D%0A%0D%0A" 
			class="btn btn-primary btn-xs" ><i class="icon-edit">SEND EMAIL</a>
			</td>
			<td></td>
			
	<?php }else{
			?>
			<td>
			<a href="index.php?view=view&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="icon-edit">View</a>
			</td>
			<td>
			<a href="controller.php?action=cancel&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-primary btn-xs" ><i class="icon-edit">Cancel</a>
			</td>
			<td>
			<a href="controller.php?action=confirm&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-success btn-xs"  ><i class="icon-edit">Confirm</a>
			</td>
			<td>
			<a href="controller.php?action=delete&code=<?php echo $result->CONFIRMATIONCODE; ?>" class="btn btn-danger btn-xs"  ><i class="icon-edit">Delete</a>
			</td>
			<td>
			<a href="index.php?view=edit&code=<?php echo $result->CONFIRMATIONCODE; ?>&id=<?php echo $result->GUESTID; ?>" class="btn btn-primary btn-xs"  ><i class="icon-edit">Edit</a>
			</td>
			<td></td>
			<td></td>
	<?php
		}

	?>
	
	
</td>

<?php }
?>
		<div class="modal fade" id="profile" tabindex="-1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						

						<div class="alert alert-info">Profile:</div>
					</div>

					<form action="#"  method=
					"post">
						<div class="modal-body">
					
												
								<div id="display">
									
										<p>ID : <div id="infoid"></div></p><br/>
											Name : <div id="infoname"></div><br/>
											Email Address : <div id="Email"></div><br/>
											Gender : <div id="Gender"></div><br/>
											Birthday : <div id="bday"></div>
										</p>
										
								</div>
						</div>

						<div class="modal-footer">
							<button class="btn btn-default" data-dismiss="modal" type=
							"button">Close</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

</table>

</form>
<!-- </div> -->
</div>