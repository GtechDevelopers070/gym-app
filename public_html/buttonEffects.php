<!DOCTYPE html>
<html>
<head>
	<title>
		Software Buttons - DECLINE
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
	<body>

		<div class="container-fluid">
			<form method = "POST" action="buttonEffects.php">
				<div class="row">
					<div class="col-xs-12">
						<center><h2>TreadMill</h2></center>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<center><button class="btn btn-primary" style="height: 30vw;   width: 30vw; line-height: 30vw;   border-radius: 50%;" name="deviceStart" value="1">Start</button></center>
					</div>
					<div class="col-xs-6">
					<center><button class="btn btn-danger" style="height: 30vw;   width: 30vw; line-height: 30vw;   border-radius: 50%;" name="deviceStop" value="1">Stop</button></center>
					</div>
				</div>

				<br/>

				<div class="row">
					<div class="col-xs-12">
						<center><h2>SpinBike</h2></center>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<center><button class="btn btn-primary" style="height: 30vw;   width: 30vw; line-height: 30vw;   border-radius: 50%;" name="deviceStart" value="3">Start</button></center>
					</div>
					<div class="col-xs-6">
					<center><button class="btn btn-danger" style="height: 30vw;   width: 30vw; line-height: 30vw;   border-radius: 50%;" name="deviceStop" value="3">Stop</button></center>
					</div>
				</div>

				<br/>

				<div class="row">
					<div class="col-xs-12">
						<center><h2>Bench Press</h2></center>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<center><button class="btn btn-primary" style="height: 30vw;   width: 30vw; line-height: 30vw;   border-radius: 50%;" name="deviceStart" value="2">Start</button></center>
					</div>
					<div class="col-xs-6">
					<center><button class="btn btn-danger" style="height: 30vw;   width: 30vw; line-height: 30vw;   border-radius: 50%;" name="deviceStop" value="2">Stop</button></center>
					</div>
				</div>

			</form>
		</div>
	</body>
</html>

<?php
	include('../includes/dbConnect.php');
	include('../includes/classes.php');


	$sql = "SELECT * FROM equipments where equipmentID=1 LIMIT 1";
	$result = $db->query($sql);

		
	while($row = $result->fetch_assoc()) {
		$equipmentID= $row["equipmentID"];
		$equipmentName= $row["equipmentName"];
		$equipmentWaitCount= $row["waitCount"];
		// echo $equipmentID." ".$equipmentName;
		// echo "<br><center>"."Wait Count:".$equipmentWaitCount."</center>";
	}
		 

	if (isset($_POST['deviceStart'])) {

		$equipmentID = $_POST['deviceStart'];
		$sql = "UPDATE equipments SET waitCount=waitCount+1 where equipmentID='$equipmentID'";
		$result = $db->query($sql);
		// $deviceStart=mysqli_real_escape_string($db,$_POST['deviceStart']);
		if($result){
			// echo "<script>window.location.assign('gymAppCardio.php?id=".$equipmentID."')</script>";
			$err->showMessage("Waiting for equipment");
		}
			
	}

	if (isset($_POST['deviceStop'])) {
		$equipmentID = $_POST['deviceStop'];
		$sql = "UPDATE equipments 
				SET waitCount = 
				CASE
    			WHEN waitCount > 0 THEN waitCount-1
    			ELSE 0
				END  where equipmentID='$equipmentID'";
		$result = $db->query($sql);
		// $deviceStop=mysqli_real_escape_string($db,$_POST['deviceStop']);

		if($result){
			// echo "<script>window.location.assign('gymAppCardio.php??id=".$equipmentID."')</script>";
			$err->showMessage("Stooped using equipment");
		}
	}
	
?>