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


	
	
	$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Mumbai Metro | User</title>
	<style type="text/css">
		body{
		  font-family: Roboto, sans-serif;
		  overflow: hidden;
		}
		  	.myaccount{
		        width: 95%;
		        margin: 50px auto 0;
		    }
		    #myaccount1{
		    	width: 20%;
		        margin-top: 20px;
		        margin-bottom: 40px;
		        text-align: right;
		    }
		    #acc-heading{
		        font-size: 30px;
		        font-weight: bold;
		        margin-right: 8px;  
		    }
		    #arrow{
		    	font-size: 20px;
		    	float: center;
		    	margin-right: 11%;
		    	text-decoration: none;	
		    	color: #000;
		    }
		    
		    #arrow:hover{
		    	font-size: 26px;
		    }
		    #myaccount2{
		    	border: 1px solid black;
        		text-align: left;

		    }
		    #head{
		    	text-align: center;
		    	 background-color: #0c6c9f;
		    	 padding-top: 12px;
		    	 padding-bottom: 12px;
		    	 margin-bottom: 40px;
		    	 text-align: center;
		    }
		    #lab{
		    	font-size: 20px;
		    	font-weight: bold;
		    	color: #000;
		    	margin-left: 20px;
		    }
		    #spa{
		    	font-size: 20px;
		    	color: #000;
		    }
		    #btn{
		    	margin: 50px auto;
		    	background-color: #02477f;
		    	width: 100px;
		    	height: 50px;
		    	text-align: center;
		    	padding-top: 20px;
		    	padding-bottom: 20px;
		    	border-radius: 20px;
		    	font-size: 20px;
		    	color: snow;
		    }
		    #btn:hover {
        		background-color: #02475f;
      		} 
     		 #logoutlink {
      			text-decoration: none;
      		}



	</style>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body >
	<div class="myaccount">

		<div id="myaccount1">
			<span onclick="history.go(-1)" id="arrow"><i class="fa fa-arrow-left" aria-hidden="true" ></i></span>
			<span id="acc-heading">My Account<span>
		</div>

		<div id="myaccount2">
			<div id="head">
				<span style="font-size: 60px; color: #dae0e3;"><i class="fa fa-user-circle" aria-hidden="true"></i></span><br><br>
				<span style="font-size: 20px; text-decoration: underline; cursor: pointer;color: snow;"><?php echo $_SESSION['user_user'];  ?></span>
			</div>

			<label id="lab" style="margin-right: 52px;">Name :</label><span id="spa" ><?php echo $_SESSION['user_name'];  ?></span><br><br>
			<label id="lab" style="margin-right: 28px;">Card No :</label><span id="spa" ><?php echo $_SESSION['user_card'];  ?></span><br><br>
			<label id="lab" style="margin-right: 52px;">Email :</label><span id="spa" ><?php echo $_SESSION['user_email']; ?></span><br><br>
			

		</div>

		<a href="Logout.php" id="logoutlink">
			<div id="btn">
				<i class="fa fa-power-off" aria-hidden="true"></i><br><p style="font-weight: bold; margin-top: 6px;">Logout</p>
			</div>
		</a>

		
		
	</div>
</body>
</html>
