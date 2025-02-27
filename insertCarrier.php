<!DOCTYPE html>
<html>
<body>

<h2>Insert Carrier</h2>

<?php
require_once "config.php";


$carrierId = $_POST["carrierId"];
$carrierName = $_POST["carrierName"];
$carrierCountry = $_POST["carrierCountry"];
$fleetSize = $_POST["fleetSize"];
$employees = $_POST["employees"];
$revenue = $_POST["revenue"];

$sql = "INSERT INTO carriers (carrierId, carrierName,carrierCountry, fleetSize, employees, revenue)
VALUES ('$carrierId', '$carrierName','$carrierCountry', '$fleetSize', '$employees','$revenue')";


if (mysqli_query($conn, $sql)) {
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
