<!DOCTYPE html>
<html>
<body>

<h2>Delete Airport</h2>

<?php
require_once "config.php";


$airportID = $_POST["airportID"];

$sql1 = "SELECT airportID, airportName, city, state, country FROM airports WHERE airportID = '$airportID'"; 
$result1 = $conn->query($sql1);


if ($result1->num_rows > 0) {
  $sql2 = "DELETE FROM airports WHERE airportID = '$airportID'"; 
  $result2 = $conn->query($sql2);

	$row = $result1->fetch_row();	
	echo "<b>The airport below was deleted successfully:</b> <br><br> airportID: " .$row[0]. 
	" <br> airportName: $row[1] <br> city: $row[2] <br> state: $row[3] <br> country: $row[4] <br>";	 
} else {
  echo "Airport does not exist!";
}

$conn->close();
?>
<br><br>
<a href="index.html">Back to main menu</a>

</body>
</html>
