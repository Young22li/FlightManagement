 <!DOCTYPE html>
<html>
<body>

<h2>Update Airport</h2>

<?php
require_once "config.php";


$airportID = $_POST["airportID"];
$airportName = $_POST["airportName"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];

$sql = "SELECT airportID, airportName, city, state, country FROM airports WHERE airportID = '$airportID'"; 
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  $sql = "UPDATE airports SET airportID = '$airportID', airportName = '$airportName', city = '$city', state = '$state', country = '$country' WHERE airportID = '$airportID'"; 
  $result = $conn->query($sql);
	echo "Record updated successfully"; 
} else {
  echo "Airport does not exist!";
}

$conn->close();
?>
<br><br>
<a href="index.html">Back to main menu</a>

</body>
</html>
