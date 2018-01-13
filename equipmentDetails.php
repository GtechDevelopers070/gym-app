<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include('buttonEffects.php');

	 ?>
	<form action = "#" method="POST">
		<button name="deviceStart" value = "<?php echo $equipmentName; ?>Start" style="background-color: green;">Start </button>
		<button name="deviceStop" value = "<?php echo $equipmentName; ?>Stop" style="background-color: red;">End</button>
	</form>
</body>
</html>