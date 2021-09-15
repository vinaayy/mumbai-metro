
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

  $sourcefare = "select * from Fare where station='$source'";
  $destfare = "select * from Fare where station='$dest'";

  $sourceresult = mysqli_query($conn,$sourcefare);
  $destresult = mysqli_query($conn,$destfare);

  $sour = $sourceresult->fetch_assoc();
  $des = $destresult->fetch_assoc();

  $sourceid = $sour["id"];
  $destid = $des["id"];

  $result = $sourceid - $destid;


  if ($result == 0) {
    $stored = 10 ;
    $trip = "" ;
    $single = 10 ;
    $return = "" ;
  }
  elseif ($result == 1 || $result == -1) {
    $stored = 10 ;
    $trip = 775 ;
    $single = 10 ;
    $return = 20 ;
  }
  elseif ($result == 2 || $result == -2) {
    $stored = 20 ;
    $trip = 775 ;
    $single = 20 ;
    $return = 40 ;
  }
  elseif ($result == 3 || $result == -3) {
    $stored = 20 ;
    $trip = 775 ;
    $single = 20 ;
    $return = 40 ;
  }
  elseif ($result == 4 || $result == -4) {
    $stored = 20 ;
    $trip = 775 ;
    $single = 20 ;
    $return = 40 ;
  }
  elseif ($result == 5 || $result == -5) {
    $stored = 30 ;
    $trip = 1100 ;
    $single = 30 ;
    $return = 60 ;
  }
  elseif ($result == 6 || $result == -6) {
    $stored = 30 ;
    $trip = 1100 ;
    $single = 30 ;
    $return = 60 ;
  }
  elseif ($result == 7 || $result == -7) {
    $stored = 30 ;
    $trip = 1100 ;
    $single = 30 ;
    $return = 60 ;
  }
  elseif ($result == 8 || $result == -8) {
    $stored = 30 ;
    $trip = 1100 ;
    $single = 30 ;
    $return = 60 ;
  }
  elseif ($result == 9 || $result == -9) {
    $stored = 40 ;
    $trip = 1375 ;
    $single = 40 ;
    $return = 75 ;
  }
  elseif ($result == 10 || $result == -10) {
    $stored = 40 ;
    $trip = 1375 ;
    $single = 40 ;
    $return = 75 ;
  }
  elseif ($result == 11 || $result == -11) {
    $stored = 40 ;
    $trip = 1375 ;
    $single = 40 ;
    $return = 75 ;
  }


  ?>




<!DOCTYPE html>
<html>
<head>
  <title>Mumbai Metro | Fare Search</title>
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
      .fare-search{
        width: 80%;
        text-align: center;
        margin: 10% auto 0;
      }
      #fare1{
        height: 83px;
        width: 100%;
        background-color: #dae0e3;
        padding-top: 17px;
      }
      #head-station1{
        float: left;
        width: 400px;
        font-size: 28px;
        font-weight: bold;
        margin-left: 80px;
      }
      #head-station2{
        float: right;
        width: 400px;
        font-size: 28px;
        font-weight: bold;
        margin-right: 80px;
      }
      #head-arrow{
        font-size: 30px;
        font-weight: bold;
      }
      #fare2{
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
            <a href="ticket.html"  style="text-decoration: none; color: #054279;">
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
            <a href="seemumbai.html"  style="text-decoration: none;color: #054279;">
              <div style="float: left; height: 230px; width: 200px;  margin-left: 50px; " id="abc">
                              
                <img src="visit.png" style="height: 120px; width: 120px;  padding: 0 0;margin-top: 30px; margin-bottom: 10px;"><br><img src="rightarrow.png"   style="height: 15px; width: 8px; padding: 0 0;margin-right: 10px;">See Mumbai with<br>Mumbai Metro
              </div>
            </a>
          </div>
                        
        </div>
      </li>
      <li id="navli">
        <a href="validate.php"  style="text-decoration: none;" >
          <div id="menu-icon3"  onMouseOver="change3('#fff');" onMouseOut="change3('#054279');"  >
            <span id="menu-link3" >
              <i class="fa fa-user-circle" aria-hidden="true"></i><br>Login
            </span>
          </div>
        </a>
      </li>
    </ul>
        
  </nav>

  <div class="fare-search">
    <span style="font-size: 46px; color: #02477f; font-weight: bold;">Search Result</span><br>
    <img src="https://i.ibb.co/qB3Tw4R/Pics-Art-08-30-11-43-21.png" alt="Pics-Art-08-30-11-43-21" border="0" width="150px" height="50px" style="margin-top: 12px; margin-bottom: 35px;">

    <div id="fare1">

        <div id="head-station1"><?php echo $source; ?></div>
       <span id="head-arrow">&#8594; </span>
       <div id="head-station2"><?php echo $dest; ?></div>
        <br>
      <p id='clock' style="font-size: 16px; margin-top: 18px;"></p>
    </div>

    <div id="fare2">
    <span style="margin-right: 695px; font-size: 14px;">Fare Search : Search within Mumbai Metro Line 1</span>
    <hr style="color: grey; margin-top: 2px;">
    </div>
    <table class="fare-table" border="1" cellpadding="12px" cellspacing="0">
      <tr id="row_1">
        <th>Medium</th>
        <th>Product</th>
        <th>Fare</th>
      </tr>
      <tr>
        <th style="background-color: #dae0e3;" rowspan="2">Smart Card</th>
        <td>Stored Value Pass</td>
        <td><?php echo $stored; ?></td>
      </tr>
      <tr>
        <td>Trip Pass</td>
        <td><?php echo $trip; ?></td>
      </tr>
      <th style="background-color: #dae0e3;" rowspan="2">Tokens</th>
        <td>Single Journey Token</td>
        <td><?php echo $single; ?></td>
      </tr>
      <tr>
        <td>Return Journey Token</td>
        <td><?php echo $return; ?></td>
      </tr>
    </table>

    <div style="margin: 5% auto">
      <a href="fare.html"><input type="submit"  value="Search Fare for other Metro Stations" id="fare-button"></a>
    </div>

    <div style="text-align: left; margin: 50px auto 100px 20px;">
      <p style="font-size: 13px;">
        * The Fare/Transfer Search Service is intended to intrinsically navigate our passengers but not to be accessed heavily for secondary use of data.<br>
         * We would appreciate if you could understand its intrinsic purpose of the service and refrain from having an access to the service for secondary use.<br>
         * If this practice may be found, please note the Fare/Transfer Search Service may be restricted for use without prior notice.<br>
         * When searching pass fares, some sections cannot be purchased even if displayed. For details, consult a station attendant or pass office.<br>
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