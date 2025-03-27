<?php
	$fullName = $_post['fullName'];
	$email = $_post['email'];
	$userName = $_post['userName'];
	
	$conn = new mysqli('localhost', 'root', '', 'first');
	if($conn->connect_error){
		die('Connection Faild : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(fullName,email,userName)
		values(?,?,?)");
		$stmt->bind_param("sss",$fullName, $email, $userName);
		$stmt->execute();
		echo "registration succesfull..";
		$stmt->close();
		$conn->close();
	}
?>