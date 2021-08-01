<?php
	$User_Name = $_POST['User_Name'];
	$Email = $_POST['Email'];
	$Age = $_POST['Age'];
	$Password = $_POST['Password'];
	$Phone_No = $_POST['Phone_No'];
	// Database connection
	$conn = new mysqli('localhost','root','','api');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register(User_Name, Email, Age, Password, Phone_No) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $User_Name, $Email, $Age, $Password, $Phone_No);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>