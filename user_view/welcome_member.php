<?php
session_start();
if(!isset($_SESSION["sess_user"])){
   header("Location: ../public_view/login.php");
}
else {
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>LMS - Beta</title>
      <link rel="stylesheet" href="/style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   </head>
   <body>
      <!--Ketu fillon logoja dhe topbari (RSS FEED, SEND MESSAGE, SEARCH)-->
      <div id="header">
         <div class="wrapper">
            <div class="topbar-manage-posts">
               <h1 class="header-txt">Sistemi per Menaxhimin e Librarise</h1>
               <h5 class="heading5-user"><i class="fas fa-user"></i> <?=$_SESSION['sess_user'];?> (User)</h5>
               <a href="../actions/logout-process.act.php"><button type="button" class="input-submit-red head-btn">Logout</button></a>
               <h6 class="heading5">Beta Version</h6>
               
            </div>
         </div>
      </div>
      <!--Ketu fillon NAVBARI-->
      <div id="navbar">
         <div class="wrapper">
              <div class="navbar">
               <ul>
             <li><a href="../index.php" class="navbar-links">HOME</a></li>
                  <li><a href="../public_view/about_me.php" class="navbar-links">ABOUT</a></li>
                  <li><a href="../public_view/contact.php" class="navbar-links">CONTACT</a></li>
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
                  <h1 class="content-title-contact">Dashboard - Member Area</h1>
               </div>
               <div class="content-body-contact">
                  <div class="container">
                  <h5 class="heading5-contact">Welcome!</h5>
                  <a href="../user_view/welcome_member.php"><input type="submit" class="input-submit" value="Home"></a> - 
                  <a href="../user_view/manage_posts_member.php"><input type="submit" class="input-submit" value="Librat"></a> 
                  </div>
               </div>
            </div>
           
         </div>
      </div>      
   </body>
</html>
<?php
}
?>