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
  
  $source = $_POST["source"];
  $dest = $_POST["dest"];
  $journey = $_POST["journey"];
  $commuter = $_POST["commuter"];
  $total = $_POST["total"];
  $mode = $_POST["mode"];
  
  $sql = "insert into ticket(Source_station,Destination_station,Journey_ticket,Number_of_Commuters,Fare,Mode_of_payment) VALUES('$source','$dest','$journey','$commuter','$total','$mode')";
      $insert = mysqli_query($conn,$sql);
      if($insert){
         ?>
          <script type="text/javascript">
            alert("Ticket Booked Successfully!");
          </script>
         <?php
      }
      else {   
        ?>
          <script type="text/javascript">
            alert("Ticket not booked");
            window.location.href = "ticket.html";
          </script>
         <?php 
      } 

      $conn->close();

  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
    <script type="text/javascript">
      function realtime() {
    // Date
    var date = new Date();

    var year = date.getYear();
    if (year < 1000) {
      year +=1900
    }

    
    var month = date.getMonth();
    var daym = date.getDate();
    var dayarray = new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
    var montharray = new Array("01","02","03","04","05","06","07","08","09","10","11","12")


    // Time
    var rt = new Date();
    
    var hours = rt.getHours();
    var minutes = rt.getMinutes();
    var seconds = rt.getSeconds();

    //Add AM and PM system
    var ampm = ( hours < 12) ? "am" : "pm";

    // Convert hours component to 12-hour format
    hours = (hours > 12) ? hours - 12 : hours;

    // Pad the hours, minutes, and seconds with leading zeros
    hours = ("0" + hours).slice(-2);
    minutes = ("0" + minutes).slice(-2);
    seconds = ("0" + seconds).slice(-2);

    
    // Display the clock
    document.getElementById('date').innerHTML = daym+ "/" +montharray[month]+ "/" +year;
    document.getElementById('time').innerHTML = hours + ":" + minutes + "  " + ampm;
  }
  
  function func(argument) {
    document.getElementById("btn").style.display = "none";
  }
   
   
  
  
 
    </script>
    <style type="text/css">
      body{
        font-family: Roboto, sans-serif;
        text-align: center;
        
      }
      .bookticket{
        width: 85%;
        text-align: center;
        margin: 1% auto 0;
        border: 2px solid lightgrey;
        box-shadow: 1px 1px 5px lightgrey;
        padding: 20px 6px;
      }
      #book1{
        height: 60px;
        width: 100%;
        background-color: #dae0e3;
        padding-top: 30px;
        text-align: center;
      }
      #head-station1{
        float: left;
        width: 350px;
        font-size: 28px;
        font-weight: bold;
        position: fixed;
        right: 57%;
        
      }
      #head-station2{
        float: right;
        width: 350px;
        font-size: 28px;
        font-weight: bold;
       position: fixed;
       left: 55%;
        
      }
      #head-arrow{
        font-size: 30px;
        font-weight: bold;
        position: fixed;
        left: 48% ;
      }
      #book2{
        margin-top: 30px;
        text-align: left;
        
      }
      #ticket-book{
        font-size: 20px;
        font-weight: bold;
        margin-left: 60px;
      }
      .hide{
        display: none;
      }
      #btn{
        width: 260px;
         height: 40px;
         border: none;
         outline: none;
         cursor: pointer;
         background-color: #02477f;
         color: #fff;
         font-size: 16px;
         text-transform: uppercase;
         font-weight: 600;
      }
      #btn:hover {
        background-color: #02475f;
      }
    </style>
  </head>

  <body onload="realtime()">

    <div class="bookticket">
    <a href="Home.html" style="font-size: 46px; color: #02477f; font-weight: bold; text-decoration: none;">Mumbai Metro</a><br>
    <img src="https://i.ibb.co/qB3Tw4R/Pics-Art-08-30-11-43-21.png" alt="Pics-Art-08-30-11-43-21" border="0" width="150px" height="50px" style="margin-top: 12px; margin-bottom: 35px;">

    <div id="book1">

        <div id="head-station1"><?php echo $source; ?></div>
       <span id="head-arrow">&#8594; </span>
       <div id="head-station2"><?php echo $dest; ?></div>
        
    </div>
    <div id="book2">

      <table class="lines_table" border="0" cellpadding="12px" cellspacing="0">
        <tr>
          <td id="ticket-book" >Date :</td>
          <td style="font-size: 20px;"  id="date" ></td>
          <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td id="ticket-book"  style="width: 140px">Time :</td>
          <td style="font-size: 20px;"  id="time" ></td>
        </tr>
        <tr>
          <td id="ticket-book" >Journey Ticket :</td>
          <td style="font-size: 20px;" ><?php echo $journey; ?></td>
        </tr>
        <tr>
          <td id="ticket-book" >Number of commuters :</td>
          <td style="font-size: 20px;" ><?php echo $commuter; ?></td>
        </tr>
        <tr>
          <td id="ticket-book" >Fare :</td>
          <td style="font-size: 20px;" ><?php echo $total; ?></td>
        </tr>
        <tr>
          <td id="ticket-book" >Mode of payment :</td>
          <td style="font-size: 20px;" ><?php echo $mode; ?></td>
        </tr>
        
      </table><br>

      <span style="position: absolute; right: 130px;  font-size: 12px;">*Valid till 24 hours from ticket booked.</span>

      
    </div></div>

    <button  onclick="func(), window.print()" id="btn" style="margin: 22px auto 0;">Print the Ticket</button>


    
  

  </body>
  </html>
  