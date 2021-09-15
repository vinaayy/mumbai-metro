
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
  

  $source = $_POST["source"];
  $dest = $_POST["dest"];
  $journey = $_POST["journey"];



  $sourcefare = "select * from Fare where station='$source'";
  $destfare = "select * from Fare where station='$dest'";

  $sourceresult = mysqli_query($conn,$sourcefare);
  $destresult = mysqli_query($conn,$destfare);

  $sour = $sourceresult->fetch_assoc();
  $des = $destresult->fetch_assoc();

  $sourceid = $sour["id"];
  $destid = $des["id"];

  $result = $sourceid - $destid;


  if ($result == 0 && $journey == 'Single Journey Ticket') {
    ?>
      <script type="text/javascript">
        alert("Enter the correct Destination Station");
        window.location.href = "ticket.html";
      </script>
    <?php
  }
  elseif ($result == 0 && $journey == 'Return Journey Ticket') {
    ?>
      <script type="text/javascript">
        alert("Enter the correct Destination Station");
        window.location.href = "ticket.html";
      </script>
    <?php
  }
  elseif (($result == 1 || $result == -1) && $journey == 'Single Journey Ticket') {
    $fare = 10 ;
  }

  elseif (($result == 1 || $result == -1) && $journey == 'Return Journey Ticket') {
    $fare = 20 ;
  }
  elseif (($result == 2 || $result == -2) && $journey == 'Single Journey Ticket') {
    $fare = 20 ;
  }

  elseif (($result == 2 || $result == -2) && $journey == 'Return Journey Ticket') {
    $fare = 40 ;
  }
  elseif (($result == 3 || $result == -3) && $journey == 'Single Journey Ticket') {
    $fare = 20 ;
  }

  elseif (($result == 3 || $result == -3) && $journey == 'Return Journey Ticket') {
    $fare = 40 ;
  }
  elseif (($result == 4 || $result == -4) && $journey == 'Single Journey Ticket') {
    $fare = 20 ;
  }

  elseif (($result == 4 || $result == -4) && $journey == 'Return Journey Ticket') {
    $fare = 40 ;
  }
  elseif (($result == 5 || $result == -5) && $journey == 'Single Journey Ticket') {
    $fare = 30 ;
  }

  elseif (($result == 5 || $result == -5) && $journey == 'Return Journey Ticket') {
    $fare = 60 ;
  }
  elseif (($result == 6 || $result == -6) && $journey == 'Single Journey Ticket') {
    $fare = 30 ;
  }

  elseif (($result == 6 || $result == -6) && $journey == 'Return Journey Ticket') {
    $fare = 60 ;
  }
  elseif (($result == 7 || $result == -7) && $journey == 'Single Journey Ticket') {
    $fare = 30 ;
  }

  elseif (($result == 7 || $result == -7) && $journey == 'Return Journey Ticket') {
    $fare = 60 ;
  }
  elseif (($result == 8 || $result == -8) && $journey == 'Single Journey Ticket') {
    $fare = 30 ;
  }

  elseif (($result == 8 || $result == -8) && $journey == 'Return Journey Ticket') {
    $fare = 60 ;
  }
  elseif (($result == 9 || $result == -9) && $journey == 'Single Journey Ticket') {
    $fare = 40 ;
  }

  elseif (($result == 9 || $result == -9) && $journey == 'Return Journey Ticket') {
    $fare = 75 ;
  }
  elseif (($result == 10 || $result == -10) && $journey == 'Single Journey Ticket') {
    $fare = 40 ;
  }

  elseif (($result == 10 || $result == -10) && $journey == 'Return Journey Ticket') {
    $fare = 75 ;
  }
  elseif (($result == 11 || $result == -11) && $journey == 'Single Journey Ticket') {
    $fare = 40 ;
  }

  elseif (($result == 11 || $result == -11) && $journey == 'Return Journey Ticket') {
    $fare = 75 ;
  }

  $commuter = $_POST["commuter"];
  
  if ($commuter >= 1 && $commuter <= 6) {
    $total = $commuter * $fare;
    if ($commuter == 1) {
      $people = "commuter";
    }
    else{
      $people = "commuters";
    }
  }
  
  
   else{
    ?>
    <script type="text/javascript">
        alert("Please enter the number of commuters");
        window.location.href = "ticket.html";
      </script>
    <?php
   }
 

  ?>




<!DOCTYPE html>
<html>
<head>
  <title>Mumbai Metro | Book Ticket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="allnav.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="Home.js"></script>
    <script src="allnav.js"></script>
    
    <style type="text/css">

      body{
        font-family: Roboto, sans-serif;
        
      }
      .bookticket{
        width: 80%;
        text-align: center;
        margin: 10% auto 0;
      }
      #book1{
        height: 83px;
        width: 100%;
        background-color: #dae0e3;
        padding-top: 17px;
      }
      #datasend{
        font-size: 28px;
        font-weight: bold;
        border: none;
        outline: none;
        background-color: transparent;
        text-align: center;

      }
      
      
      #head-arrow{
        font-size: 30px;
        font-weight: bold;
        margin: auto 20px;
      }
      #book2{
        margin-top: 30px;
        text-align: center;
      }
      .fare-table{
        margin: 4% auto 0;
        width: 95%;
      }
      #row_1{
        background-color: #dae0e3;
        font-size: 19px;

      }
      #fare-button{
        width: 450px;
         height: 48px;
         border: none;
         outline: none;
         cursor: pointer;
         background-color: #02477f;
         color: #fff;
         font-size: 16px;
         text-transform: uppercase;
         font-weight: 600;
         margin: 0 auto 40px 65px;
      } 
      #fare-button:hover {
        background-color: #02475f;
      }    
      #toplink{
        width: 88%;
        margin: 2% auto;
        font-size: 14px;
      }
      #toplink1{
        color: #00467e;
        text-decoration: none;
      }
      #toplink1:hover{
        text-decoration: underline;
      }
      #ticket-book{
        font-size: 20px;
        font-weight: bold;
        margin-left: 18px;
        margin-right: 40px;
      }
      #book-input{
        width: 200px;
        height: 25px;
        font-size: 18px;
        text-align: center;
        border: 1px solid lightgrey;
        margin: auto 25px auto 5px;
      }
      #book-input2{
       width: 200px;
        height: 25px;
        font-size: 18px;
        text-align: center;
        border: 1px solid lightgrey;
        margin: auto 18px auto 0;
        float: right;
      }
      #book-input3{
       width: 200px;
        height: 25px;
        font-size: 18px;
        text-align: center;
        border: 1px solid lightgrey;
        margin: auto 18px auto 0;
        float: right;
      }
    </style>
     <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'id', includedLanguages: 'ar,en,de,hi,mr,pa,ne,zh-CN,tr,fr,id,it,,ja,kn,ru,ta,tl,uk', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
        }
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>
<body onload="realtime()">
  <img src="pagetop.png" onclick="top_page()" id="pagetop" >

  <nav id="navbar">
        
    <div id="logo_container"><a href="Home.html"><img src="mumbailogo.png"  class="logo"></a></div>
            
    <ul id="navul">
      <li  id="navli">
        <div id="menu-icon1"  onMouseOver="change1('language.png','#fff'); f1();" onMouseOut="change1('languagesel.png','#054279'); myFunction();"   onclick="language();">
                      <span id="menu-link1">
                          <img src="languagesel.png" id="menu-language" name="lan"><br>Language
                      </span>

                      <div class="lcontent" id="lang-content" style="height: 50px;">
                        <div style="height: 12px;  ">
                          <img src="triangle.png"   style="width: 25px; height: 25px; position: absolute; top: -22px; left: 88px; padding: 0 0 0 0; ">
                        </div>
                          <span id="google_translate_element" style="background-color: red"></span>
                      </div>  
                    </div>
      </li>  
                  
      <li id="navli">
        <div id="menu-icon2"  onMouseOver="change2('menu.png','#fff');" onMouseOut="change2('menusel.png','#054279');"   onclick="menu();">
          <span id="menu-link2" >
            <img src="menusel.png"  id="menu-menu" ><br>Menu
          </span>

          <div class="mcontent" id="menu-content" >

            <div style="height: 12px;  ">
              <img src="triangle.png"   style="width: 25px; height: 25px; position: absolute; top: -22px; right: 227px; padding: 0 0 ; ">
            </div>
            <a href="#"  style="text-decoration: none; color: #054279;">
              <div style="float: left; height: 230px; width: 200px; margin-left: 15px;" id="abc">
                              
                <img src="mumbaiticket.png" style="height: 120px; width: 120px;  padding: 0 0;margin-top: 30px; margin-bottom: 10px;"><br><img src="rightarrow.png"  style="height: 15px; width: 8px; padding: 0 0; margin-right: 10px;">Book Tickets
              </div>
            </a>
            <a href="Subway Map.html"  style="text-decoration: none;color: #054279;">
              <div style="float: left; height: 230px; width: 200px;  margin-left: 50px; " id="abc">
                              
                <img src="map.png" style="height: 120px; width: 120px;  padding: 0 0;margin-top: 30px; margin-bottom: 10px;"><br><img src="rightarrow.png"   style="height: 15px; width: 8px; padding: 0 0; margin-right: 10px;">Subway Map
              </div>
            </a>
            <a href="Tips.html"  style="text-decoration: none;color: #054279; ">
              <div style="float: left; height: 230px; width: 200px;  margin-left: 50px; " id="abc">
                              
                <img src="tips.png" style="height: 120px; width: 120px;  padding: 0 0;margin-top: 30px; margin-bottom: 10px;"><br><img src="rightarrow.png"   style="height: 15px; width: 8px; padding: 0 0; margin-right: 10px;">Tips for using <p style="margin-left: 20px; margin-top: 0;">Mumbai Metro</p>
              </div>
            </a>
            <a href="route.html"  style="text-decoration: none;color: #054279;">
              <div style="float: left; height: 230px; width: 200px;  margin-left: 50px; " id="abc">
                              
                <img src="stationroute.png" style="height: 120px; width: 120px;  padding: 0 0;margin-top: 30px; margin-bottom: 10px;"><br><img src="rightarrow.png"   style="height: 15px; width: 8px; padding: 0 0; margin-right: 10px;">Station Routes
              </div>
            </a>
            <a href="#"  style="text-decoration: none;color: #054279;">
              <div style="float: left; height: 230px; width: 200px;  margin-left: 50px; " id="abc">
                              
                <img src="visit.png" style="height: 120px; width: 120px;  padding: 0 0;margin-top: 30px; margin-bottom: 10px;"><br><img src="rightarrow.png"   style="height: 15px; width: 8px; padding: 0 0;margin-right: 10px;">See Mumbai with<br>Mumbai Metro
              </div>
            </a>
          </div>
                        
        </div>
      </li>
      <li id="navli">
        <a href="validate.php" style="text-decoration: none;" >
          <div id="menu-icon3"  onMouseOver="change3('#fff');" onMouseOut="change3('#054279');"  >
            <span id="menu-link3" >
              <i class="fa fa-user-circle" aria-hidden="true"></i><br>Login
            </span>
          </div>
        </a>
      </li>
    </ul>
        
  </nav>

  <div class="bookticket">
    <span style="font-size: 46px; color: #02477f; font-weight: bold;">Book Ticket</span><br>
    <img src="https://i.ibb.co/qB3Tw4R/Pics-Art-08-30-11-43-21.png" alt="Pics-Art-08-30-11-43-21" border="0" width="150px" height="50px" style="margin-top: 12px; margin-bottom: 35px;">

    <form action="book.php" method="post" >
    <div id="book1">

        <input id="datasend"  value="<?php echo $source; ?>" name="source" readonly >
       <span id="head-arrow">&#8594; </span>
       <input id="datasend"  value="<?php echo $dest; ?>" name="dest" readonly >
        <br>
      <p id='clock' style="font-size: 16px; margin-top: 18px;"></p>
    </div>

    <div id="book2">
    <span style="margin-right: 780px; font-size: 14px;">Book Ticket for Mumbai Metro Line 1.</span>
    <hr style="color: grey; margin-top: 2px;">
    </div>

    <div style="margin: 50px auto; text-align: left;">
      
      <label id="ticket-book">Number of commuters : </label>
      <span ><input style="border: none; outline: none;background-color: transparent; font-size: 20px;" value="<?php echo $commuter; ?> <?php echo $people; ?>" name="commuter" readonly ></span>
      <label id="ticket-book" style="margin-right: 30px;">Fare for each commuter : </label>
      <span ><input style="border: none;width: 60px; outline: none;background-color: transparent; font-size: 20px;" value="<?php echo $fare; ?>&nbsp;&#x20B9;" name="faree" readonly ></span><br><br>
      
     <label id="ticket-book">Total Fare : </label>
      <span style=" margin-right: 100px; margin-left: 120px; "><input style="border: none; outline: none;background-color: transparent; font-size: 20px; font-weight: bold;" value="<?php echo $total; ?>&nbsp;&#x20B9;" name="total" readonly ></span><br><br>

      <label id="ticket-book">Journey Ticket : </label>
      <span style=" margin-right: 100px; margin-left: 75px;"><input style="border: none; outline: none;background-color: transparent; font-size: 20px; " value="<?php echo $journey; ?>" name="journey" readonly ></span><br><br><br>
      <label id="ticket-book" style="margin-right: 30px;">Enter Mode of Payment :</label>
        <select name="mode" style="width: 450px; height: 50px;font-size: 18px;text-align: center;border: 1px solid lightgrey;">
          
                 <option >Net Banking</option>
                 <option >Debit/Credit Card</option>
                 
          </select><br>
      <div style="margin: 5% auto;  text-align: center;">
        <a href="book.php"><input type="submit"  value="Book Ticket" id="fare-button"></a>
      </div>
    </div>
    </form>


    

    <div style="text-align: left; margin: 50px auto 100px 20px;">
      <p style="font-size: 13px;">
        * Ticket once booked will not be cancelled.<br>
         * One should take the note that amount paid for booking ticket is not refundable.<br>
         
         
      </p>
    </div>
  </div>

  <div id="toplink">
    <a href="Home.html" id="toplink1">TOP</a> 
    <img src="toplink arrow.png" style="height: 12px; margin: auto 10px;">
    <a href="ticket.html" id="toplink1">Tickets</a> 
    <img src="toplink arrow.png" style="height: 12px; margin: auto 10px;">
    Fare Search
  </div>

  

  <div class="footer">        
    <div class="app"> 
      <p id="app_content">
        <span id="app_heading">Download App</span><br><br>
        <img src="footerlogo.png"  align="right" id="footerlogo">
        <span style="font-size: 17px;">Mumbai Subway Navigation for Tourists is a free application officially provided by Mumbai Metro to enable users to search transfer information for the Mumbai Subway network (Mumbai Metro and Mumbai Suburban Railway).<br>
        This application is available in English and Hindi. It is highly recommended for visitors sightseeing in Mumbai.</span>
        <a href="https://apps.apple.com/in/app/mumbai-metro-i/id1094699951" target="blank" id="store_link">
          <div id="store_content1">
            <img src="appstore.png" id="store" ><br>APP Store<img src="link white.png" id="link_img">
          </div>
        </a>
        <a href="https://play.google.com/store/apps/details?id=com.servpro.mumbai_metro" target="blank" id="store_link">
          <div id="store_content2">  
            <img src="googleplay.png" id="store"><br>Google Play<img src="link white.png" id="link_img">
          </div>
        </a>
      </p>
    </div>

    <div class="faq">
      <p id="faq_heading">Inquires</p>
      <a href="faq.html">
        <div id="faq_block1">
          <img src="faq.png" align="right" class="faq_logo">  
          <p id="block_content"><img src="rightarrow.png" class="arrow_1"><span id="faq_content">FAQ</span></p>
        </div>
        </a>
      <a href="lost.html">
        <div id="faq_block2">
          <img src="lost.png" align="right" class="lost_logo">  
          <p id="block_content"><img src="rightarrow.png" class="arrow_2"><span id="faq_content">Lost & Found</span></p>
        </div>
      </a>
      <p id="follow_heading">Follow Us</p>
      <div id="follow1">
        <a href="https://www.facebook.com/MumbaiMetroOfficial/" target="blank" id="follow_link">
          <img src="fb.png" align="left" class="fb">Mumbai Metro on Facebook<img src="link white.png" id="link_img">
        </a>
      </div>
      <div id="follow2">
        <a href="https://instagram.com/mumbaimetro?igshid=6r51d1vk1k9u" target="blank" id="follow_link">
          <img src="instagram.png" align="left" class="insta">Mumbai Metro on Instagram<img src="link white.png" id="link_img">
        </a>
      </div>
    </div>
  </div>

  <div id="base">
    <div id="about"><a href="about.html" id="base_link">About this site<img src="link white.png" id="link_img"></a></div>
    <div id="tour"><a href="https://www.maharashtratourism.gov.in/destination/mumbai" id="base_link">Mumbai Tourism<img src="link white.png" id="link_img"></a></div>
    <div id="policy"><a href="privacy.html" id="base_link">Privacy Policy<img src="link white.png" id="link_img"></a></div>
    <div id="rights">Copyright &#169; Mumbai Metro Co., Ltd. All rights reserved.</div>   
  </div>


</body>
</html>