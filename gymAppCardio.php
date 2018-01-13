<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/styles.css">
	<link rel = "stylesheet" type = "text/css" href = "styles.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>


	<div class="container-fluid"> 
		<div class="backgroundWhite">
			<!-- <div class="row"> -->	
				<!--for nav bar-->
				<div class="navbar">
					<div class="row">
						<div class="col-xs-3">
							<div class="backArrow w3-xxxlarge w3-padding w3-xlarge w3-deep red">
								<a href="index.php">
									<i class="material-icons">arrow_back</i>
								</a>
							</div>					
						</div>
						<div class="col-xs-9">	
							<div class="fitness_text">
								<h1>Fitness Freak</h1>
							</div>
						</div>
					</div>
				</div>
				<!--for search-->
				<div class="searchByCategory">
					<h1>TREADMILL</h1>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="cardio-image">
							<div class="container">	
								<img class="img-responsive" src=" assets/img/trademill.jpg" alt="HTML5 Icon">	
							</div>
						</div>
					</div>
					<div>
						<?php
		
							include('buttonEffects.php');

	 					?>
						<!-- <h1 class="cardio-mainText">Treadmill</h1>
						<h1 class="cardio-text">Current queue of: 5 Person</h1>
						<h1 class="cardio-text">Average waiting time: 3 Minutes</h1>
						<h1 class="cardio-text">Busy period: 6 a.m-7a.m</h1> -->
					</div>
				</div>


				<form action = "#" method="POST">
					<center>
						<button class="btn btn-primary" name="deviceStart" value = "<?php echo $equipmentName; ?>Start" >Start </button>
						<button class="btn btn-danger" name="deviceStop" value = "<?php echo $equipmentName; ?>Stop" >End</button>
				</center>
				</form>

			</div>
		</div>



	</body>
	</html>