<?php
include 'connect.php';

$sensor = $_GET["sensorname"];
$fromat = $_GET["format"];
$desc = $_GET["Longitude"];
$hub = $_GET["Latitude"];


$sql = "INSERT INTO hub_list (name, id, lat, lon)
VALUES ('$sensor', '$fromat', '$hub', '$desc ')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


mysqli_close($conn);
?>