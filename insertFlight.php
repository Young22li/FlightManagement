<!DOCTYPE html>
<html>
<body>

<h2>Insert Flight</h2>

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

$sql = "INSERT INTO flights (carrierId, flightNo, flightdate,flightTime, airportID,destination, distance, Aircrafttype )
VALUES ('$carrierId', '$flightNo', '$flightdate','$flightTime', '$airportID', '$destination','$distance', '$Aircrafttype' )";


if (mysqli_query($conn, $sql)) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br><br>
<a href="index.html">Back to main menu</a>

</body>
</html>