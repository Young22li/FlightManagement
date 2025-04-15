<!DOCTYPE html>
<html>
<body>

<h2>Delete Carrier</h2>

<?php
require_once "config.php";


$carrierId = $_POST["carrierId"];

$sql1 = "SELECT carrierId, carrierName,carrierCountry, fleetSize, employees, revenue FROM carriers WHERE carrierId = '$carrierId'"; 
$result1 = $conn->query($sql1);


if ($result1->num_rows > 0) {
  $sql2 = "DELETE FROM carriers WHERE carrierId = '$carrierId'";
  $result2 = $conn->query($sql2);

	$row = $result1->fetch_row();	
	echo "<b>The carrier below was deleted successfully:</b> <br><br>CarrierID: " .$row[0]. 
	" <br> carrierName: $row[1] <br> carrierCountry: $row[2] <br> fleetSize: $row[3] <br> employees: $row[4] <br> revenue: $row[5] <br>";	 
} else {
  echo "Carrier does not exist!";
}

$conn->close();
?>

<br><br>
<a href="index.html">Back to main menu</a>

</body>
</html>
