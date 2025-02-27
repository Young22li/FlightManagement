<!DOCTYPE html>
<html>
<body>

<h2>Delete Flight</h2>

<?php
require_once "config.php";



$carrierId = $_POST["carrierId"];
$flightNo = $_POST["flightNo"];
$flightdate = date('Y-m-d', strtotime($_POST['flightdate']));


$sql1 = "SELECT carrierId, flightNo, flightdate,flightTime, airportID,destination, distance, Aircrafttype FROM flights WHERE carrierId = '$carrierId' AND
flightNo = '$flightNo' AND flightdate = '$flightdate' ";
$result1 = $conn->query($sql1);



if ($result1->num_rows > 0) {
  $sql2 = "DELETE FROM flights
  WHERE carrierId = '$carrierId' AND flightNo = '$flightNo' AND flightdate = '$flightdate' ";
  $result2 = $conn->query($sql2);

  $row = $result1->fetch_row();	
	echo "<b>The Flight below was deleted successfully:</b> <br><br>CarrierID: " .$row[0]. 
	" <br> FlightNo: $row[1] <br> Flightdate: $row[2] 
  <br> FlightTime: $row[3] <br> airportID: $row[4] 
  <br> destination: $row[5] <br>distance: $row[6] <br>Aircrafttype: $row[7] <br>";	 
} else {
  echo "Flight does not exist!";
}
$conn->close();
?>
<br><br>
<a href="index1.html">Back to main menu</a>

</body>
</html>