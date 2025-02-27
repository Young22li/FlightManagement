<!DOCTYPE html>
<html>
<body>

<h2>Insert Airport</h2>

<?php
require_once "config.php";


$airportID = $_POST["airportID"];
$airportName = $_POST["airportName"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];

$sql = "INSERT INTO airports (airportID, airportName, city, state, country)
VALUES ('$airportID', '$airportName', '$city', '$state', '$country')";


if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br><br>
<a href="index1.html">Back to main menu</a>

</body>
</html>
