<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title>Welcome to Mumbai Metro</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
   <link rel="stylesheet" type="text/css" href="login.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />

<script type="text/javascript">
   function valcard() {
   var mob = document.getElementById('mobile').value.trim();
      if (mob == "") {
         error = "Enter your 10 digits Card number";
         document.getElementById("check5").style.visibility = "hidden";
         document.getElementById("check6").style.visibility = "visible";
         document.getElementById("mobileerror").style.visibility = "visible";
           document.getElementById("mobileerror").innerHTML = error;
         document.getElementById('mobile').focus();
      }
      else if (isNaN(mob)) {
         error = "Please enter only numbers.";
         document.getElementById("check5").style.visibility = "hidden";
         document.getElementById("check6").style.visibility = "visible";
         document.getElementById("mobileerror").style.visibility = "visible";
           document.getElementById("mobileerror").innerHTML = error;
         document.getElementById('mobile').focus();
      }
      else if (mob.length != 10) {
         error = "Please provide correct Card Number";
         document.getElementById("check5").style.visibility = "hidden";
         document.getElementById("check6").style.visibility = "visible";
         document.getElementById("mobileerror").style.visibility = "visible";
           document.getElementById("mobileerror").innerHTML = error;
         document.getElementById('mobile').focus();
      }
      else{
         document.getElementById("check5").style.visibility = "visible";
         document.getElementById("check6").style.visibility = "hidden";
         document.getElementById("mobileerror").style.visibility = "hidden";
      }
      
   }
</script>

</head>
<body>

   <div class="container">
      <div class="form-container">
         <div class="signin-signup">
            <form class="signinform" action="signin.php" method="post">
               <h2 class="title">Sign in</h2>
               <div class="input-feild">
                  <i class="fa fa-user" id="icon"></i>
                  <input type="text" placeholder="Username or Email" name="email_user" required>
               </div>
               <div class="input-feild">
                  <i class="fa fa-lock" id="icon"></i>
                  <input type="password" placeholder="Password" name="password" required>
               </div>
               <input type="submit" value="Login" class="btn" name="submit">


            </form>

            <form class="signupform" action="registration.php" method="post">
               <h2 class="title">Sign up</h2>
               <div class="input-feild">
                  <i class="fa fa-user" id="icon1"></i>
                  <input type="text" placeholder="Name" id="name" name="name" onblur="valname()" required>
                  <i class="fas fa-check-circle" id="check1"></i>
                  <i class="fas fa-exclamation-circle" id="check2"></i>
                  <small id="nameerror"></small>
               </div>
               
               <div class="input-feild">
                  <i class="fa fa-envelope" id="icon1"></i>
                  <input type="email" placeholder="Email" id="email" name="email" onblur="valemail()" required>
                   <i class="fas fa-check-circle" id="check3"></i>
                  <i class="fas fa-exclamation-circle" id="check4"></i>
                  <small id="emailerror"></small>
               </div>
               <div class="input-feild">
                  <i class="fa fa-address-card" id="icon1"></i>
                  <input type="text" placeholder="Mumbai Metro CSC no." id="mobile" name="card" onblur="valcard()" required>
                   <i class="fas fa-check-circle" id="check5"></i>
                  <i class="fas fa-exclamation-circle" id="check6"></i>
                  <small id="mobileerror"></small>
               </div>
               
               <div class="input-feild">
                  <i class="fa fa-user" id="icon1"></i>
                  <input type="text" placeholder="Username" id="username" name="username" onblur="valuser()" required>
                   <i class="fas fa-check-circle" id="check7"></i>
                  <i class="fas fa-exclamation-circle" id="check8"></i>
                  <small id="usererror"></small>
               </div>
               
               <div class="input-feild">
                  <i class="fa fa-lock" id="icon1"></i>
                  <input type="password" placeholder="Create a Password" id="password" name="password" onblur="valpassword()" required>
                  <i class="fas fa-check-circle" id="check9"></i>
                  <i class="fas fa-exclamation-circle" id="check10"></i>
                  <small id="passworderror"></small>
               </div>
               
                <div class="input-feild">
                  <i class="fa fa-lock" id="icon1"></i>
                  <input type="password" placeholder="Confirm Password" id="cpassword" name="cpassword" onblur="valcpassword()" required>
                  <i class="fas fa-check-circle" id="check11"></i>
                  <i class="fas fa-exclamation-circle" id="check12"></i>
                  <small id="cpassworderror"></small>
               </div>
               
               <p style=" padding: 0; margin-top: 10px; margin-bottom: 10px;"><input type="checkbox" required> I accepet the Terms & Condition</p>
               <input type="submit" value="Sign up" class="btn" name="submit">


            </form>

         </div>
      </div>


      <div class="panels-container">
         <div class="panel left-panel">
            <div class="content1">
               <span>New Here ?</span>
               <p>Sign up now to accesss the services of your Mumbai Metro</p>
               <button class="btn transparent" id="sign-up-btn">Sign up</button>
            </div>
            <img src="loginphoto.svg" class="image1">
         </div>

         <div class="panel right-panel">
            <div class="content2">
               <span>Already have an account?</span>
               <p>Login and explore the Mumbai with Mumbai Metro</p>
               <button class="btn transparent" id="sign-in-btn">Sign in</button>
            </div>
            <img src="loginphoto.svg" class="image2">
         </div>
      </div>
   </div>

   <script src="https://use.fontawesome.com/0f443f7399.js"></script> 

   <script src="login.js"></script>
</body>
</html>
