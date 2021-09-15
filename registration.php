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
	

	$name = $_POST["name"];
	$email = $_POST["email"];
	$card = $_POST["card"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];

	$emailquerry = "select * from User_detail where Email='$email' || Username='$username' || Card='$card'";
	$result = mysqli_query($conn,$emailquerry);


	if (mysqli_num_rows($result) > 0) {
		?>
			   	<script type="text/javascript">
			   		alert("Email, Username or Card No. already exists");
			   		window.location.href = "login.php";
			   	</script>
			   <?php
	}
	else{
		if ($password === $cpassword) {
			$sql = "insert into User_detail(Name,Email,Card,Username,Pass,Cpass) VALUES('$name','$email','$card','$username','$password','$cpassword')";
			$insert = mysqli_query($conn,$sql);
			if($insert){
			   ?>
			   	<script type="text/javascript">
			   		alert("Registered Successfully!");
			   		alert("Please Login");
			   		window.location.href = "login.php";
			   	</script>
			   <?php
			}
			else {   
				?>
			   	<script type="text/javascript">
			   		alert("No Connection");
			   	</script>
			   <?php 
			} 
		}
		else{
			?>
			   	<script type="text/javascript">
			   		alert("Passwords does not match \n Try again");
			   		window.location.href = "login.php";
			   	</script>
			   <?php
		}
		
	}


	
	
	$conn->close();
?>
