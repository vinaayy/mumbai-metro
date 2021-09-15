<?php

	session_start();

	$servername = "localhost";
	$username = "root"; 
	$password = "";
	$dbname = "mumbai metro";
	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	
	if (!isset($_SESSION['user_user'])) {
		header('location:login.php');
	}
	else{
		header('location:user.php');
	}


		$conn->close();
	
?>