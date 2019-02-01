<?php
include '../actions/register-process.act.php';
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>LMS - Beta</title>
      <link rel="stylesheet" href="/style.css">
   </head>
   <body>
      <!--Ketu fillon logoja dhe topbari (RSS FEED, SEND MESSAGE, SEARCH)-->
      <div id="header">
         <div class="wrapper">
            <div class="topbar">
               <h1 class="header-txt">Sistemi per Menaxhimin e Librarise</h1>
               <a href="../actions/logout-process.act.php"><button type="button" class="input-submit-green head-btn">Login</button></a>
               <a href="../public_view/register.php"><button type="button" class="input-submit-green head-btn">Register</button></a>
               <h6 class="heading5">Beta Versioni</h6>
            </div>
         </div>
      </div>
      <!--Ketu fillon NAVBARI-->
      <div id="navbar">
         <div class="wrapper">
            <div class="navbar">
               <ul>
                  <li><a href="../index.php" class="navbar-links">HOME</a></li>
                  <li><a href="about_me.php" class="navbar-links">ABOUT</a></li>
                  <li><a href="contact.php" class="navbar-links">CONTACT</a></li>
                  <li><a href="../actions/dashboard-process.act.php" class="navbar-dashboard-link">DASHBOARD</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!--Ketu fillon pjesa e contentit ne anen e majte te faqes-->
      <div class="content">
         <div class="wrapper">
            <div class="content-left">
               <div class="content-header">
                  <h1 class="content-title">Register User</h1>
               </div>
               <div class="content-body-contact">
                  <div class="container">
                     <form name="registerForm" onsubmit="return validateRegisterForm()" action="../actions/register-process.act.php" method="post">
                        <label for="fname">First Name</label>
                        <input type="text" class="text-input" id="fname" name="name" placeholder="Your name.." required>
                        <p><?php if(isset($errors['firstname'])) echo $errors['firstname']; ?></p>
                        <label for="lname">Last Name</label>
                        <input type="text" class="text-input" id="l-name" name="lname" placeholder="Your last name.." required>
                        <p><?php if(isset($errors['lastname'])) echo $errors['lastname']; ?></p>
                        <br>
                        <br>
                        <label for="lname">Email</label>
                        <input type="email" class="text-input" id="lname" name="email" placeholder="Your email..." required>
                        <p><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
                        <br>
                        <label for="lname">Username</label>
                        <input type="text" class="text-input" id="lname" name="username" placeholder="Your email..." required>
                        <p><?php if(isset($errors['username'])) echo $errors['username']; ?></p>
                        <br>
                        <label for="country">Password</label>
                        <input type="password" class="text-input" id="lname" name="password" placeholder="Your password..." required>
                        <p><?php if(isset($errors['password'])) echo $errors['password']; ?></p>
                        <br>
                        <input type="submit" class="input-submit" name="submit-register" value="Register">
                        <br>
                        <br>
                        <a href="login.php">Log In</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>