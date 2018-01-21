<?php
//retrieves the wait count for current instrument

include('../includes/dbConnect.php');
include('../includes/classes.php');


//getting the equipmentID for wait Count
if(isset($_GET['viewItem']))
{
	$equipmentID = $db->real_escape_string($_GET['viewItem']);
}
else{
	$equipmentID = '1';
}


//building and firing the query 
$sql = "SELECT waitCount, waitCount*approxUseTime AS approxwaitTime FROM equipments WHERE equipmentID = $equipmentID";

$result = $db->query($sql);

if (!$result) {
	err::showMessage("Connect failed: %s\n", $db->error);
	exit();
}

$equipmentWaitDetails = $result->fetch_assoc();

echo '<span id="fetchedWaitCount">'.$equipmentWaitDetails['waitCount'].'</span>';

echo '<span id="approxWaitTime">'.$equipmentWaitDetails['approxwaitTime'].'</span>';


?>