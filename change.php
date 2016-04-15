<?php
include 'connect.php';



//if ($conn->query($r) === TRUE) {
    //echo "New record created successfully";
//} else {
    //echo "Error: " . $sql . "<br>" . $conn->er
   

    $id = $_GET['i'];
    $hub = $_GET['id'];
    $stat=$_GET['stat'];
    if($stat=='ON')
        $query = "UPDATE sensor_list set status='OFF' WHERE Sensor_id='".$id."' and hub_id = '".$hub."'";
    else
        $query = "UPDATE sensor_list set status='ON' WHERE Sensor_id='".$id."' and hub_id = '".$hub."'";

        echo $query;
        if ($conn->query($query) === TRUE) {
        	echo 'ok';

        	header("Location: sensor.php?id=".$hub);
        }
        
    exit; // finish execution since we only need the "ok" or "err" answers from the server.

?>