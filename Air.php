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

<h2 style="background:black;color:#E74C3C;"><center>Airport List</center></h2>

<?php
require_once "config.php";





//sql code
$sql = "SELECT airportId, airportName, city, state, country FROM airports";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table>
			<tr>
				<th>AirportId</th>
				<th>AirportName</th>
				<th>City</th>
				<th>State</th>
				<th>Country</th>
			</tr>";
			while($row = $result->fetch_assoc()) 
				{ 
				//sql 
				echo "<tr> 
						<td>$row[airportId]</td>
						<td>$row[airportName]</td>
						<td>$row[city]</td>
						<td>$row[state]</td>
						<td>$row[country]</td>
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