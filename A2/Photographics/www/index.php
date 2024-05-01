<!DOCTYPE HTML>
<?php   require_once ('db_connect.php'); ?>

<html>
	<link rel="stylesheet" href="styles.css">
	<head>
		<title>Photographic</title>
	</head>
	<body>
		<center>
			<a href=index.php><h1>Photographic</h1></a>
		</center>
		<div style="margin:auto; width:75%;">
			<?php
				$sql = "SELECT * FROM `photos`";
				$query = $conn->query($sql);
				while($result = $query -> fetch_array(MYSQLI_ASSOC)) {
					$filename = $result['filename'];
					$device = $result['device'];
					$country = $result['country'];
					$city = $result['city'];
					$year = $result['year'];
					$alt = $result['alt'];
				?>
					<div class="gallery">
						<a href="images/<?php echo $filename; ?>">
							<img src="images/<?php echo $filename; ?>" alt="<?php echo $alt; ?>" />
						</a>
						<div style=" padding:15px; text-align:center; padding-top:0px;">
							<p style="margin-top:0px;">
								<?php echo $year ?> <br>
								<?php echo $city , ", ",  $country; ?> <br>
								<?php echo $device ?>
							</p>
						</div>
					</div>
			<?php
				} // Ends the loop
			?>
		</div>
	</body>
</html>