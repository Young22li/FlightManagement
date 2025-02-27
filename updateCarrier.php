<!DOCTYPE html>
<html>
<body>

<h2>Update Carrier</h2>

<?php
require_once "config.php";


$carrierId = $_POST["carrierId"];
$carrierName = $_POST["carrierName"];
$carrierCountry = $_POST["carrierCountry"];
$fleetSize = $_POST["fleetSize"];
$employees = $_POST["employees"];
$revenue = $_POST["revenue"];

$sql = "SELECT carrierId, carrierName,carrierCountry, fleetSize, employees, revenue FROM carriers WHERE carrierId = '$carrierId'"; 
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  $sql = "UPDATE carriers SET carrierId = '$carrierId', carrierName = '$carrierName', carrierCountry = '$carrierCountry', fleetSize = '$fleetSize' ,
  employees = '$employees', revenue = '$revenue' WHERE carrierId = '$carrierId'"; 
  $result = $conn->query($sql);
	echo "Record updated successfully"; 
} else {
  echo "Carrier does not exist!";
}

$conn->close();
?>

<br><br>
<a href="index1.html">Back to main menu</a>

</body>
</html>
