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



	
	

	//signin


	$email = $_POST["email_user"];
	$password = $_POST["password"];

	$querry = "select * from User_detail where ((Username='$email' or Email='$email') and Pass='$password')";
	$result = mysqli_query($conn,$querry);
	$count = mysqli_num_rows($result);
	

	if ($count > 0) {
		?>
			<script type="text/javascript">
			   	alert("Welcome to Mumbai Metro");
			
			window.location.href = "user.php";
			</script>
		<?php
		  
		  $user_info = $result->fetch_assoc();
		  $_SESSION['user_name'] = $user_info["Name"];
		  $_SESSION['user_card'] = $user_info["Card"];
		  $_SESSION['user_email'] = $user_info["Email"];
		  $_SESSION['user_user'] = $user_info["Username"];
		  
	}
	
	else{
			?>
			<script type="text/javascript">
			alert("Couldn't find your account");
			window.location.href = "login.php";
			</script>
			<?php
		}
		



 

	
	
	$conn->close();
?>