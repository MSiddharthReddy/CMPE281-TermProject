<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbnam = "sensor";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbnam);



//if ($conn->query($r) === TRUE) {
    //echo "New record created successfully";
//} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
//}
$r = "Select * FROM hub_list";

$a = $conn->query($r);
$rows = array();
//$a = mysql_query($r);
foreach ($a as $row) {

	$lat = $row['lat'];
	$lon = $row['lon'];
	$name = $row['name'];
	$id = $row['id'];

	$rows[] =  array("lat" => $lat, "lon" => $lon, "sensor" => $name, "hub" => $id  );
	# code...
}
header('Content-type:application/json');
echo json_encode($rows);


//while ($b = mysql_fetch_assoc($a)) {
//	$rows['data'] = $b;
//	echo json_encode($rows);
//}

?>