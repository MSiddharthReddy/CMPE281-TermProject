<?php
include 'connect.php';

$sensor = $_GET["sensorname"];
$desc = $_GET["Description"];
$fromat = $_GET["format"];
$hub = $_GET["hub"];
$url = $_GET["url"];
$api = $_GET["api"];
$stat = $_GET["status"];
$freq = $_GET["freq"];

$sql = "INSERT INTO sensor_list (Sensor_name, Sensor_id, lon, lat, hub_id,status, type)
VALUES ('$sensor', '$fromat', '$desc', '$url ', '$hub', '$api','$stat')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
     header("Location: sensor.php?id=".$hub);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?>