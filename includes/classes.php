<?php 

// Displays error msgs
class err { 

    // function aMemberFunc() { 
    //     print 'Inside `aMemberFunc()`'; 
    // } 

    public static function showMessage($message){
    	echo '<script> alert("'.$message.'"); </script>';
    }
}


$err = new err; //role of a singleton class, but not coded so, maybe in future


//Display items row wise

class displayItems
{
	public function rowWise($db, //database connection object
							$table, //table to hit, maybe with extra clauses like where, order etc
							$link,   //link to drill
							$itemID,  //primary key (column) of table to hit
							$photoColumn, //photo column of the table
							$itemName    //column containing text to display
							){  

		/* check connection */
		// if (mysqli_connect_errno()) {
		//     err::showMessage("Connect failed: %s\n", mysqli_connect_error());
		//     exit();
		// }

		$table = $db->real_escape_string($table);

		$sql = "SELECT * FROM $table";
		$result = $db->query($sql);

		if (!$result) {
			err::showMessage("Connect failed: %s\n", $db->error());
			exit();
		}

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo  '
		        	<br/>
					<div class="row">
						<div class="col-xs-12 categoryBox">
							<a href="'.$link.'?viewItem='.$row[$itemID].'">
								<img class="img-responsive" src="'.$row[$photoColumn].'" alt="HTML5 Icon">
								<div class="centered">'.strtoupper($row[$itemName]).'</div>    
							</a>
						</div>
					</div>';
		    }
		} else {
		    echo "0 results";
		}
	}
}

?>