<?php
$name = $_POST['nameip'];
$email = $_POST['emailip'];
$password = $_POST['passip'];
	// Database connection
	$conn = new mysqli('localhost','root','','finalproject');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into users(name, email, password) values(?, ?, ?)");
		$stmt->bind_param("sss",$name,$email,$password);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>



