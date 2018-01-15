<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="css/w3.css">

	<link rel="stylesheet" href="css/styles.css">

	<link rel = "stylesheet" type = "text/css" href = "css/instrument.css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	<!-- <link href='https://fonts.googleapis.com/css?family=Allerta Stencil' rel='stylesheet'>
	<style>
		body {
		    font-family: 'Allerta Stencil';
		}
	</style> -->
</head>
<body>

	<div class="se-pre-con">
		<center>
			<div class="loadingIcon">
				<img class="img-responsive loadingIcon" src="assets/img/running-icon-loading.gif" alt="HTML5 Icon">
			</div>
		</center>
	</div>

	<div class="container-fluid" id = "baap">
		<svg id="svgID">
			<line id="busyAndEquipment" x1="314.828125" y1="379.5" x2="950.484375" y2="429" stroke="#5b2d2d" stroke-width="3px" />
			<line id="averageAndEquipment" x1="314.828125" y1="379.5" x2="950.484375" y2="429" stroke="#5b2d2d" stroke-width="3px"/>
			<line id="waitAndEquipment" x1="672.484375" y1="744.5" x2="950.484375" y2="429" stroke="#5b2d2d" stroke-width="3px"/>
		</svg> 
		<div class="backgroundWhite">

			<!-- <div class="row"> -->	
				<!--for nav bar-->
				<div id="navbar" class="navbar">
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
			
				<div class="row equipmentTitle">
					<center>TREADMILL</center>
				</div>
					
				<div class="row">

					<div class="col-md-4 col-xs-12">
						
						<center>
							<div id="busyID" class="circleAttr">
								<div class="circleDesc">
									<p>Wait Count</p>
								</div>
								<br/>
								<div class="circleDescData">
									<p>10 people</p>
								</div>
							</div>
						</center>
					</div>
					

					
					<div class="col-md-4 col-xs-12">
						

						<center>
							<div id="equipmentImageID" class="equipment-image">
									<img id="equipment" class="img-circle img-responsive" src=" assets/img/trademill.jpg" alt="HTML5 Icon">
								</div>
						</center>
					</div>

					<div class="col-md-4 col-xs-6">
						
						<center>
							<div id="averageID" class="circleAttr">
								<div class="circleDesc"><p>Average Use</p></div>
								<br/>
								<div class="circleDescData"><p >15 min</p></div>
								
								
							</div>
						</center>
					</div>
				
					
				
					<div class="col-md-4 col-md-offset-4 col-xs-6">
						
						<center>
							<div id="waitID" class="circleAttr">
								<div class="circleDesc"><p>Busy Period</p></div>
								<br/>
								<div class="circleDescData"><p>5pm - 6pm</p></div>
							</div>
						</center>
					</div>
				</div>

				
						<!-- <?php
		
							include('buttonEffects.php');

	 					?> -->
						<!-- <h1 class="cardio-mainText">Treadmill</h1>
						<h1 class="cardio-text">Current queue of: 5 Person</h1>
						<h1 class="cardio-text">Average waiting time: 3 Minutes</h1>
						<h1 class="cardio-text">Busy period: 6 a.m-7a.m</h1> -->
					</div>
				</div>


				<!-- <form action = "#" method="POST">
					<center>
						<button class="btn btn-primary" name="deviceStart" value = "<?php echo $equipmentName; ?>Start" >Start </button>
						<button class="btn btn-danger" name="deviceStop" value = "<?php echo $equipmentName; ?>Stop" >End</button>
				</center>
				</form>
 -->
			</div>
		</div>
		
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script> -->
		<!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script> -->
		<script type="text/javascript">


				$(window).resize(function() {

					joinLine('#waitAndEquipment', '#equipmentImageID', '#waitID');
					joinLine('#busyAndEquipment', '#equipmentImageID', '#busyID');
					joinLine('#averageAndEquipment', '#equipmentImageID', '#averageID');

					var baapHeight = $('#baap').height();
					
					var svgEdit=$('#svgID');
					svgEdit.css('height', baapHeight);
				});

				$(document).ready(function(){
					// alert('Check');
					// Animate loader off screen
					$(".se-pre-con").fadeOut("slow");
					// $(".se-pre-con").addClass("animated pulse");
					// $(".categoryBox").addClass("animated pulse");
					// alert('Check');
				});
			
				function getCenter(elementID){
					var center= $(elementID);
					var offset = center.offset();
					var width = center.width();
					var height = center.height();

					var centerArr = [centerX, centerY]; 
					var centerX = offset.left + width / 2;
					var centerY = offset.top + height / 2;

					centerArr[0]=centerX;
					centerArr[1]=centerY;
					
					//center.html( "centerX " + centerArr[0] + ", centerY " + centerArr[1] );
					return centerArr;
				}


				function joinLine(lineID, itemAID, itemBID)
				{
					var line= $(lineID);
					var centerArr = getCenter(itemAID);
					line.attr("x1", centerArr[0]);
					line.attr("y1", centerArr[1]); 
					
					var centerArr2 = getCenter(itemBID);
					line.attr("x2", centerArr2[0]);
					line.attr("y2", centerArr2[1]);
				}

				joinLine('#waitAndEquipment', '#equipmentImageID', '#waitID');
				joinLine('#busyAndEquipment', '#equipmentImageID', '#busyID');
				joinLine('#averageAndEquipment', '#equipmentImageID', '#averageID');

				var baapHeight = $('#baap').height();
				
				var svgEdit=$('#svgID');
				svgEdit.css('height', baapHeight);


				//yo vanda talako sabbai page haru ma cha


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
				if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
		    		document.getElementById('navbar').style.display = 'block'; 
				}

		</script>

		<script src="js/custom/custom_script.js"></script>
		
	</body>
	</html>