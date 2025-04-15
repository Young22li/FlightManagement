<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: #E74C3C;}
</style>
</head>
<body>

<h2 style="background:black;color:#E74C3C;"><center>Flights List</center></h2>

<?php
require_once "config.php";



//sql code
$sql = "SELECT carrierId, FlightNo, FlightDate, FlightTime, airportID, Destination,Distance,AircraftType FROM flights";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table>
			<tr>
				<th>CarrierId</th>
				<th>FlightNo</th>
				<th>FlightDate</th>
				<th>FlightTime</th>
				<th>airportID</th>
				<th>Destination</th>
				<th>Distance</th>
				<th>AircraftType</th>
			</tr>";
			while($row = $result->fetch_assoc()) 
				{ 
				//sql 
				echo "<tr> 
						<td>$row[carrierId]</td>
						<td>$row[FlightNo]</td>
						<td>$row[FlightDate]</td>
						<td>$row[FlightTime]</td>
						<td>$row[airportID]</td>
						<td>$row[Destination]</td>
						<td>$row[Distance]</td>
						<td>$row[AircraftType]</td>
					</tr>";	
				}
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

<br><br>
<a href="index.html">Back to main menu</a>

</body>
</html>