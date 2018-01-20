<!DOCTYPE html>
<html>

<head>
	<title>Page Title</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/w3.css">
</head>

<body>


	<div class="se-pre-con">
		<center>
			<div class="loadingIcon">
				<img class="img-responsive loadingIcon" src="assets/img/running-icon-loading.gif" alt="HTML5 Icon">
			</div>
		</center>
	</div>
	<!-- for side menu of hamburgur button -->
	<!-- <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
		<button id="crossSign" class="w3-bar-item w3-button w3-large" onclick="w3_close()">&times;</button>

		designing sidemenu
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="container">
						<img class="img-sidebar-background" src=" assets/img/background.jpg" alt="HTML5 Icon">
						<div class="sidebar-top-text">Fitness Freak</div>
						<div class="sidebar-central-text text-justify">
							<h1>Gym Session:6 a.m-7 a.m</h1>
							<h1>Membership type - Permanent</h1>
							<h1>Subcription:Monthly</h1>
						</div>
						<div class="sidebar-bottom-text">
							<div class="row">
								<div class="col-xs-10">
									<div class="text-justify">
										<h1>Add Information</h1>
									</div>
								</div>
								<div class="col-xs-2">
									<img class="addInformation-plusSign" src=" assets/img/Ic_add_circle_outline_48px.png" alt="HTML5 Icon">
								</div>
							</div>
						</div>

						<div class="sidebar-last-text">
							<div class="row">
								<div class="col-xs-4">
									<img class="invisible-user" src=" assets/img/Antu_im-invisible-user.png" alt="HTML5 Icon">
								</div>
								<div class="col-xs-8">
									<div class="text-kripesh text-justify">
										<h1>Kripesh</h1>
										<h1>Dhakal</h1>
										<h1>kathmandu,Nepal</h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- main page start -->
	<div class="container-fluid main backgroundWhite">
		<!--for nav bar-->
		<div id="navbar" class="row navbar">
			<div class="col-xs-1">
				<button id="openNav" class="w3-button w3-deep red w3-xlarge" onclick="w3_open()">&#9776;</button>
			</div>
			<div class="col-xs-9">
				<div class="fitness_text">
					<h1>DecLINE</h1>
				</div>
			</div>
		</div>
		<!--for search-->
		<!-- <div class="row">
			<div class="col-xs-12">
				<h1>Search by category</h1>				
			</div>
		</div> -->


		<!-- Categories from Database -->
		<?php
			include('dbConnect.php');
			include('classes.php');

			//display category object 

			$displayCategories = new displayItems;

			$displayCategories->rowWise($db,  //database connection object
									"categories", //table to hit
									"gymapp.php", //link to drill
									"categoryID", //primary key of table to hit
									"coverPhoto",  //photo column of the table
									"categoryName"  //text to display
									);

		?> 

<!-- 		for cardio
		<br/>
		<div class="row">
			<div class="col-xs-12 categoryBox">
				<a href="gymApp.php">
					<img class="img-responsive" src="assets/img/cardio.jpg" alt="HTML5 Icon">
					<div class="centered">CARDIO</div>
				</a>
			</div>
		</div>
		
		for aerobics
		<div class="row">
			<div class="col-xs-12">
				<div class="aerobics">
					<div class="container">
						<img class="img-responsive" src=" assets/img/aerobics.jpg" alt="HTML5 Icon">
						<div class="centered">AEROBICS</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- </div> -->
	</div>
	
	<script src="js/custom/custom_script.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script> -->
	<script type="text/javascript">
		$(window).load(function() {
			// alert('Check');
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");
		$(".categoryBox").addClass("animated pulse");
	});	
	</script>
</body>

</html>

