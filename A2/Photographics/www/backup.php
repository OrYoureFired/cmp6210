<!DOCTYPE HTML>
<html>
	<head>
		<title>Photographics</title>
	</head>
	<body>
		<center>
			<h1>Welcome to Photographics!</h1>
			<table border="1">
				<tr>
					<th>Book Cover</th>
					<th>Book Info</th>
				</tr>
 <?php
  require_once ('db_connect.php');


  $sql = "SELECT * FROM `Photos`";
  $query = $conn->query($sql);
  while($result = $query -> fetch_array(MYSQLI_ASSOC))
  {
	  $file_name = $result['Filename'];
	  $device = "Device: " . $result['Device'];
	  $country = "Country: " . $result['Country'];
	  $city = "City: " . $result['City'];
	  $year = "Year: " . $result['Year'];
	  
	  echo "<tr>";
	  echo "<td><img src=\"images\\$file_name\" alt=\"BookCover\" /></td>";
	  echo "<td>
				<div>$file_name</div>
				<div>$device</div>
				<div>$country</div>
				<div>$city</div>
				<div>$year</div>
				
	        </td>";
		
	  echo "</tr>";
	  
  }
  ?>
			</table>
		</center>
	</body>
</html>