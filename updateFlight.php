<!DOCTYPE html>
<html>
<body>

<h2>Update Flight</h2>

<?php
require_once "config.php";



$carrierId = $_POST["carrierId"];
$flightNo = $_POST["flightNo"];
$flightdate = date('Y-m-d', strtotime($_POST['flightdate']));
$flightTime = $_POST["flightTime"];
$airportID = $_POST["airportID"];
$destination = $_POST["destination"];
$distance = $_POST["distance"];
$Aircrafttype = $_POST["Aircrafttype"];

$sql = "SELECT carrierId, flightNo, flightdate,flightTime, airportID,destination, distance, Aircrafttype FROM flights WHERE carrierId = '$carrierId' AND
flightNo = '$flightNo' AND flightdate = '$flightdate' ";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  $sql = "UPDATE flights SET carrierId ='$carrierId', flightNo = '$flightNo', flightdate ='$flightdate',
  flightTime = '$flightTime', airportID = '$airportID', destination = '$destination', distance = '$distance', Aircrafttype = '$Aircrafttype'
  WHERE carrierId = '$carrierId' AND flightNo = '$flightNo' AND flightdate = '$flightdate' ";
  $result = $conn->query($sql);
	echo "Record updated successfully"; 
} else {
  echo "Flight does not exist!";
}

$conn->close();
?>
<br><br>
<a href="index1.html">Back to main menu</a>

</body>
</html>