<?php
include 'connect.php';

$sensor = $_GET["sensorname"];


$sql = "UPDATE sensor_list SET status = '$sensor' WHERE sensor_id = ";
s
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
     header("Location: sensor.php?id=".$hub);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?>