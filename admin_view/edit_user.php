<?php
include "../actions/manage_users.act.php";
session_start();
if(!isset($_SESSION["sess_admin"])){
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
               <h5 class="heading5-user"><i class="fas fa-user"></i> <?=$_SESSION['sess_admin'];?> (Admin)</h5>
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
                  <h1 class="content-title">Edit user</h1>
               </div>
               <div class="content-body-contact">
                  <div class="container">
                     <a href="welcome.php"><input type="submit" class="input-submit" value="Home"></a>
                  -
                  <a href="messages.php"><input type="submit" class="input-submit" value="Messages"></a>
                  <a href="manage_users.php"><input type="submit" class="input-submit" value="Manage Users"></a>
                  -
                  <a href="manage_posts.php"><input type="submit" class="input-submit" value="Manage Books"></a> - 
                  <a href="manage_notes.php"><input type="submit" class="input-submit" value="Manage Notes"></a> - 
                  <br>
                  <br> 
                  <br>
                  <br>
                     <?php
                       $id = $_GET["id"];
                       $where = array("id"=>$id,);
                       $row = $obj->select_record("users",$where);
                     ?>
                     <form action="../actions/manage_users.act.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row["id"]?>"/>
                        <label for="fname">First Name</label>
                        <input type="text" class="text-input" id="fname" name="name" placeholder="Your name.." value="<?php echo $row["name"] ?>" required>
                        <p><?php if(isset($errors['firstname'])) echo $errors['firstname']; ?></p>
                        <label for="lname">Last Name</label>
                        <input type="text" class="text-input" id="l-name" name="lname" placeholder="Your last name.." value="<?php echo $row["lname"] ?>" required><p><?php if(isset($errors['lastname'])) echo $errors['lastname']; ?></p>
                        <br>
                        <br>
                        <label for="lname">Email</label>
                        <input type="email" class="text-input" id="lname" name="email" placeholder="Your email..." value="<?php echo $row["email"] ?>" required>
                        <p><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
                        <br>
                        <label for="lname">Username</label>
                        <input type="text" class="text-input" id="lname" name="username" placeholder="Your email..." value="<?php echo $row["username"] ?>" required>
                        <p><?php if(isset($errors['username'])) echo $errors['username']; ?></p>
                        <br>
                        <br>
                        <h5 class="role-explain">Admin: 2 | User: 1</h5>
                        <label for="role">Role</label>
                        <input type="text" class="text-input" id="lname" name="role" placeholder="Admin: 2 | User: 1" value="<?php echo $row["role"] ?>" required>
                        <p><?php if(isset($errors['role'])) echo $errors['role']; ?></p>
                        <br>
                        <br>
                        <input type="submit" class="input-submit" name="edit" value="Save Changes">
                        <a href="manage_users.php"><button type="button" class="input-submit-blue">Back</button></a>
                        <br>
                        <br>
                     </form>
                     <?php


                     ?>

                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>