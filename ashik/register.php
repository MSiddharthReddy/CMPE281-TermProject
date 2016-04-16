<?php
include 'connect.php';

 $uname = $_POST['uname'];
 $email = $_POST['email'];
 $upass = $_POST['pass'];
 
 
$sql = "INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')";

if ($conn->query($sql) === TRUE) {
	?>
		<script>alert("New user registered successfully...");window.location.href="index.php";</script>
	<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>