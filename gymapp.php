<!DOCTYPE html>
<html>

<head>
	<title>Page Title</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="styles.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>


	<!-- for side menu of hamburgur button -->
	<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
		<button id="crossSign" class="w3-bar-item w3-button w3-large" onclick="w3_close()">&times;</button>

		<!-- designing sidemenu -->

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

	<!-- main page start -->
	<div id="main">
		<div class="container-fluid">
			<div class="backgroundWhite">
				<!-- <div class="row"> -->
				<!--for nav bar-->
				<div class="navbar">
					<div class="row">
						<div class="col-xs-3">
							<button id="openNav" class="w3-button w3-deep red w3-xlarge" onclick="w3_open()">&#9776;</button>
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
					<h1>Search by category</h1>
				</div>
				<!--for cardio-->
				<div class="row">
					<div class="col-xs-12">
						<div class="cardio">
							<div class="container">
								<a href="gymAppCardio.php">
									<img class="img-responsive" src=" assets/img/cardio.jpg" alt="HTML5 Icon">
								
								<div class="centered">TREADMILL</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!--for chest-->
				<div class="row">
					<div class="col-xs-12">
						<div class="chest">
							<div class="container">
								<img class="img-responsive" src=" assets/img/chest.jpg" alt="HTML5 Icon">
								<div class="centered">CHEST</div>
							</div>
						</div>
					</div>
				</div>
				<!--for legs-->
				<div class="row">
					<div class="col-xs-12">
						<div class="legs">
							<div class="container">
								<img class="img-responsive" src=" assets/img/legs.jpg" alt="HTML5 Icon">
								<div class="centered">LEGS</div>
							</div>
						</div>
					</div>
				</div>

				<!--for lower body-->
				<div class="row">
					<div class="col-xs-12">
						<div class="lowerBody">
							<div class="container">
								<img class="img-responsive" src=" assets/img/lowerBody.jpg" alt="HTML5 Icon">
								<div class="centered">LOWER BODY</div>
							</div>
						</div>
					</div>
				</div>

				<!--for upperbody-->
				<div class="row">
					<div class="col-xs-12">
						<div class="upperBody">
							<div class="container">
								<img class="img-responsive" src=" assets/img/upperBody.jpg" alt="HTML5 Icon">
								<div class="centered">UPPER BODY</div>
							</div>
						</div>
					</div>
				</div>

				<!--for aerobics-->
				<div class="row">
					<div class="col-xs-12">
						<div class="aerobics">
							<div class="container">
								<img class="img-responsive" src=" assets/img/aerobics.jpg" alt="HTML5 Icon">
								<div class="centered">AEROBICS</div>
							</div>
						</div>
					</div>
				</div>
				<!-- </div> -->
			</div>
		</div>
	</div>
	
	<script>
		function w3_open() {
			document.getElementById("main").style.marginLeft = "75%";
			document.getElementById("mySidebar").style.width = "75%";
			document.getElementById("mySidebar").style.display = "block";
			document.getElementById("openNav").style.display = 'none';
		}
		function w3_close() {
			document.getElementById("main").style.marginLeft = "0%";
			document.getElementById("mySidebar").style.display = "none";
			document.getElementById("openNav").style.display = "inline-block";
		}
	</script>

</body>

</html>