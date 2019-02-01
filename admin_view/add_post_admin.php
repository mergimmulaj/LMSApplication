<?php
include '../actions/manage_posts.act.php';
session_start();
$member = $_SESSION["sess_user"];
$admin = $_SESSION["sess_admin"];

if(!isset($_SESSION["sess_admin"])) { 
   header("Location: ../public_view/login.php");
}
else {}
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
               <a href="../actions/logout-process.act.php"><button type="button" class="input-submit-red head-btn">Logout</button></a>
               <h6 class="heading5">Beta Versioni</h6>
            </div>
         </div>
      </div>
      <!--Ketu fillon NAVBARI-->
      <div id="navbar">
         <div class="wrapper">
            <div class="navbar">
               <ul>
                  <li><a href="/index.php" class="navbar-links">HOME</a></li>
                  <li><a href="../public_view/contact.php" class="navbar-links">CONTACT</a></li>
                  <li><a href="../public_view/posts.php" class="navbar-links">POSTS</a></li>
                  <li><a href="../actions/dashboard-process.php" class="navbar-dashboard-link">DASHBOARD</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!--Ketu fillon pjesa e contentit ne anen e majte te faqes-->
      <div class="content">
         <div class="wrapper">
            <div class="content-left">
               <div class="content-header">
                  <h1 class="content-title">Add a new post</h1>
               </div>
               <div class="content-body-contact">
                  <div class="container">
                     <br>
                  <a href="welcome.php"><input type="submit" class="input-submit" value="Home"></a>
                  -
                  <a href="messages.php"><input type="submit" class="input-submit" value="Messages"></a>
                  <a href="manage_users.php"><input type="submit" class="input-submit" value="Manage Users"></a>
                  -
                  <a href="manage_posts.php"><input type="submit" class="input-submit" value="Manage Posts"></a> - 
                  <a href="manage_notes.php"><input type="submit" class="input-submit" value="Manage Notes"></a> - 
                  <br>
                  <br> 
                  <br>
                  <br>
                     <form name="addPostForm" onsubmit="return validateAddPostForm()" action="../actions/manage_posts.act.php" method="post" enctype="multipart/form-data">
                        <label for="fname">Book Name</label>
                        <input type="text" class="text-input" id="fname" name="bookname" placeholder="Book name..." required>
                        <p><?php if(isset($errors['bookname'])) echo $errors['bookname']; ?></p>
                        <br>
                        <label for="fname">Author</label>
                        <input type="text" class="text-input" id="fname" name="author" placeholder="Author..." required>
                        <p><?php if(isset($errors['author'])) echo $errors['author']; ?></p>
                        <br>
                        <label for="fname">ISBN</label>
                        <input type="text" class="text-input" id="fname" name="isbn" placeholder="ISBN..." required>
                        <p><?php if(isset($errors['isbn'])) echo $errors['isbn']; ?></p>
                        <br>
                        <label for="fname">Edition</label>
                        <input type="text" class="text-input" id="fname" name="edition" placeholder="Edition..." required>
                        <p><?php if(isset($errors['edition'])) echo $errors['edition']; ?></p>
                        <input type="submit" class="input-submit" name="submit-post-admin" value="Submit">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>