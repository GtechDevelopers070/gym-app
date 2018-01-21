<?php
	include('dbConnect.php');
	include('classes.php');

	// $id=$_GET['id'];
	
	// Display Wait Count
	$sql = "SELECT * FROM equipments where equipmentID=1 LIMIT 1";
	$result = $db->query($sql);

		
	while($row = $result->fetch_assoc()) {
		$equipmentID= $row["equipmentID"];
		$equipmentName= $row["equipmentName"];
		$equipmentWaitCount= $row["waitCount"];
		// echo $equipmentID." ".$equipmentName;
		echo "<br><center>"."Wait Count:".$equipmentWaitCount."</center>";
	}
		 

	if (isset($_POST['deviceStart'])) {
		$sql = "UPDATE equipments SET waitCount=waitCount+1 where equipmentID='$equipmentID'";
		$result = $db->query($sql);
		// $deviceStart=mysqli_real_escape_string($db,$_POST['deviceStart']);
		if($result){
			echo "<script>window.location.assign('gymAppCardio.php?id=".$equipmentID."')</script>";
			$err->showMessage($equipmentName."of ID ".$equipmentID ." Started");
		}
			
	}

	if (isset($_POST['deviceStop'])) {
		$sql = "UPDATE equipments 
				SET waitCount = 
				CASE
    			WHEN waitCount > 0 THEN waitCount-1
    			ELSE 0
				END  where equipmentID='$equipmentID'";
		$result = $db->query($sql);
		// $deviceStop=mysqli_real_escape_string($db,$_POST['deviceStop']);

		if($result){
			echo "<script>window.location.assign('gymAppCardio.php??id=".$equipmentID."')</script>";
			$err->showMessage($equipmentName."of ID ".$equipmentID ." STOPPED");
		}
	}
	
?>