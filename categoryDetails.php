<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include('dbConnect.php');
		
	 	
	 	$id=$_GET['id'];

	 	// for category name
	 	$sql = "SELECT * FROM categories where categoryID='$id'";
		$result = $db->query($sql);
		
		 while($row = $result->fetch_assoc()) {
			echo   $row["categoryName"]. "<br>";
		    }
		
		echo '<hr>';
		
		// for equipments details
		$sql = "SELECT * FROM equipments where categoryID='$id'";
		$result = $db->query($sql);

		if ($result->num_rows > 0) {

		    // output data of each row
		    while($row = $result->fetch_assoc()) {
			echo   "<a href='equipmentDetails.php?id=".$row["equipmentID"]."'>".$row["equipmentName"]. "</a><br>";
		    }
		} else {
		    echo "0 results";
		}
?>
	<!-- <form action = "#" method="POST">
		<button name="deviceStart" value = "deviceStart" style="background-color: green;">Start</button>
		<button name="deviceEnd" value = "deviceEnd" style="background-color: red;">End</button>
	</form> -->
</body>
</html>