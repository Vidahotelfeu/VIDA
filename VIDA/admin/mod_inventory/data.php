<?php
header('Content-Type: application/json');
$conn = mysqli_connect("remotemysql.com","pNKzi39B6c","Pen6jnsdwF","pNKzi39B6c");
$sqlQuery = "SELECT inv_startdate,inv_guest_to_pay FROM tblinventory ORDER BY inv_id";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>