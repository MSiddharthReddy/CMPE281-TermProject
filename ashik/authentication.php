<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbnam = "sensor";

$conn = new mysqli($servername, $username, $password, $dbnam);

$uname = $_POST['uname'];
$upass = $_POST['pass'];

$r = "Select username,password FROM users where username='".$uname."'";

$a = $conn->query($r);

if ($a->num_rows>0) { 

	while($row = $a->fetch_assoc()) {
		if($row["password"]==$upass)
			header("Location: markers.html");
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";		
    }
	
	?>
		<script>alert("Wrong Password...");window.location.href="index.php";</script>
	<?php
	
 }
else{
	?>
	<script>alert("No Such User...");window.location.href="index.php";</script>
	<?php
	
}


?>
