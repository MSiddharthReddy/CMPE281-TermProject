<?php
include 'connect.php';



//if ($conn->query($r) === TRUE) {
    //echo "New record created successfully";
//} else {
    //echo "Error: " . $sql . "<br>" . $conn->er
   

    $id = $_GET['id'];
        $query = "DELETE FROM sensor_list WHERE Sensor_name='".$id."'";
        echo $query;
        if ($conn->query($query) === TRUE) {
        	echo 'ok';
        }
        
    exit; // finish execution since we only need the "ok" or "err" answers from the server.

?>