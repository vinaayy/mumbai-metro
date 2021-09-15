<?php

  session_start();

  if (!isset($_SESSION['user_user'])) {
    ?>
      <script type="text/javascript">
          alert("Please Login before booking Mumbai Metro TIcket");
      
      window.location.href = "login.php";
      </script>
    <?php
  }
  else{
    header('ticket.php');
  }

  $servername = "localhost";
  $username = "root"; 
  $password = "";
  $dbname = "mumbai metro";
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $csc = $_POST["csc"];
  $rcsc = $_POST["rcsc"];
  $pas = $_POST["pas"];


  


 


  if ($csc !== $rcsc) {
    ?>
      <script type="text/javascript">
        alert("CSC number does not match");
        window.location.href = "pass.php";
      </script>
    <?php
  }

  else{
    if (($csc === $_SESSION['user_card'])) {
      $querry = "select * from User_detail where Card='$csc'";
      $result = mysqli_query($conn,$querry);
      $count = mysqli_num_rows($result);
  
      $user_info = $result->fetch_assoc();
      $pass = $user_info["Pass"];    

      if ($pass === $pas) {
        ?>
          <script type="text/javascript">
            alert("Recharge Successful:)");
            window.location.href = "Home.html";
          </script>
         <?php
      }
      elseif ($pass !== $pas) {
       ?>
          <script type="text/javascript">
            alert("Password does not match with your registered account!");
            window.location.href = "pass.php";
          </script>
         <?php
      }
  
    }
    else{
      ?>
          <script type="text/javascript">
            alert("CSC number doesnot match with your registered account!");
            window.location.href = "pass.php";
          </script>
         <?php
    }
  }