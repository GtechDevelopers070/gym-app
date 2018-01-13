<?php 

// Displays error msgs
class err { 

    // function aMemberFunc() { 
    //     print 'Inside `aMemberFunc()`'; 
    // } 

    public function showMessage($message){
    	echo '<script> alert("'.$message.'"); </script>';
    }
}

$err = new err; 
?>