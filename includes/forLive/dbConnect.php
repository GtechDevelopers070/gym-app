<?php
$servername = "fdb14.biz.nf";
$username = "2257565_dbnew";
$password = "technologyforrev070";
$dbname= "2257565_dbnew";

// Create connection
$db = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

?>