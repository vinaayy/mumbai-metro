<?php

  session_start();

  if (!isset($_SESSION['user_user'])) {
    ?>
      <script type="text/javascript">
          alert("Please Login before recharging Mumbai Metro Pass");
      
      window.location.href = "login.php";
      </script>
    <?php
  }
  else{
    header('pass.php');
  }

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
  <title>Mumbai Metro | Instacharge</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body{
    font-family: Roboto, sans-serif;
  }
  .pass{
        width: 82%;
        margin: 40px auto 0;
      }
      #pass1{
        color:#02477f;
        text-align: center;
        margin-bottom: 30px;
      }
      #pass-heading{
        font-size: 50px;
        font-weight: bold;
        padding-top: 5px;
      }
      #pass2{
        color: #00467e;
        text-align: center;
        margin-bottom: 40px;
        background-color: #dae0e3;
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 35px;
        font-weight: bold;
      }
      #pass3{
        text-align: center;
        margin-bottom: 40px;
      }
      #pass4{
        width: 94%;
        margin: 1px auto;
      }
      #mylist{
         
          width: 240px;
          height: 30px;
          font-size: 18px;
          text-align: center;
          border: 1px solid lightgrey;
          outline: 0;

      }

      #btn{
        width: 200px;
         height: 48px;
         border: none;
         outline: none;
         cursor: pointer;
         background-color: #02477f;
         color: #fff;
         font-size: 16px;
         text-transform: uppercase;
         font-weight: 600;
         margin: 20px auto 30px 40%;
         border-radius: 15px;
      } 
      #btn:hover {
        background-color: #02475f;
      }
      #passlink{
        cursor: pointer;

      }
      #passlink:hover{
        text-decoration: underline;
      }

</style>
</head>
<body>



  <div class="pass">
    <div id="pass1">
      <span id="pass-heading">Mumbai Metro</span><br>
      <img src="https://i.ibb.co/qB3Tw4R/Pics-Art-08-30-11-43-21.png" alt="Pics-Art-08-30-11-43-21" border="0" width="150px" height="50px" style="margin-top: 15px; margin-bottom: 20px;"><br>
    </div>

    <div id="pass2">
      <span id="passlink" onclick="history.go(-1)">Instacharge</span>
    </div>

    <div id="pass3">
      <img src="http://instacharge.reliancemumbaimetro.com/images/instacharge_1.jpg" align="center"   style="">
    </div>

    <div id="pass4">
      <form action="passrecharge.php" method="post">
        <label style="font-size: 20px; color: #00467e;">Please enter your CSC number :</label>
        <input type="password" name="csc" id="mylist" style="margin-left: 45px;" required><br><br>
        <label style="font-size: 20px; color: #00467e;">Please re-enter your CSC number :</label>
        <input type="text" name="rcsc" id="mylist" style="margin-left: 20px;" required><br><br>
        <label style="font-size: 20px; color: #00467e;">Please confirm your password :</label>
        <input type="password" name="pas" id="mylist" style="margin-left: 54px;" required><br><br>

        <button id="btn">Instacharge</button>


      </form>
    </div>
    

  </div>
</body>
</html>

   


  

  






    