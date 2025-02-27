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

<h2 style="background:black;color:#E74C3C;"><center>Carrier List</center></h2>

<?php
require_once "config.php";



//sql code
$sql = "SELECT carrierId, carrierName,carrierCountry, fleetSize, employees, revenue FROM carriers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table>
			<tr>
				<th>CarrierId</th>
				<th>CarrierName</th>
				<th>carrierCountry</th>
				<th>FleetSize</th>
				<th>Employees</th>
				<th>revenue</th>
			</tr>";
			while($row = $result->fetch_assoc()) 
				{ 
				//sql 
				echo "<tr> 
						<td>$row[carrierId]</td>
						<td>$row[carrierName]</td>
						<td>$row[carrierCountry]</td>
						<td>$row[fleetSize]</td>
						<td>$row[employees]</td>
						<td>$row[revenue]</td>
					</tr>";	
				}
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>

<br><br>
<a href="index1.html">Back to main menu</a>

</body>
</html>