<?php
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
               <div class="content-header-login">
                  <h1 class="content-title">Login</h1>
               </div>
               <div class="content-body-login">
                  <div class="container">
                     <form name="loginForm" onsubmit="return validateLoginForm()" action="../actions/login-process.act.php" method="post">
                        <label for="lname">Username</label>
                        <input type="text" class="text-input" id="lname" name="username" placeholder="Your username..." required>
                        <br>
                        <label for="country">Password</label>
                        <input type="password" class="text-input" id="lname" name="password" placeholder="Your password..." required>
                        <br>
                        <input type="submit" class="input-submit" value="Log In" name="login">
                        <br>
                        <br>
                        <a href="register.php">Register</a>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
<?php
?>