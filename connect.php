<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbnam = "sensor";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbnam);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>