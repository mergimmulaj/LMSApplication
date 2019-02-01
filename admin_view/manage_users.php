<?php
include "../actions/crud.act.php";
session_start();
if(!isset($_SESSION["sess_admin"])){
   header("Location: ../public_view/login.php");
}
else {
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>LMS - Beta</title>
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
                  <li><a href="../index.php" class="navbar-links">HOME</a></li>
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
               <div class="content-header-manage-users">
                  <h1 class="content-title-contact">Manage Users</h1>
               </div>
               <div class="content-body-manage-users">
                  <div class="container">
                  <a href="welcome.php"><input type="submit" class="input-submit" value="Home"></a>
                  -
                  <a href="messages.php"><input type="submit" class="input-submit" value="Messages"></a> - 
                  <a href="manage_users.php"><input type="submit" class="input-submit" value="Manage Users"></a>
                  -
                  <a href="manage_posts.php"><input type="submit" class="input-submit" value="Manage Books"></a> - 
                  <a href="manage_notes.php"><input type="submit" class="input-submit" value="Manage Notes"></a> - 
                  <br>
                  <br> 
                  <br>
                  <br>
                  <br>
                  <a href="add_user.php"><button type="button" class="input-submit-blue left">Add User</button></a>
                  <a href="../actions/export_users.act.php"><button type="button" name="export_users" class="input-submit-blue right">Export to Excel</button></a>
                  <br>
                  <br>
                  <br>
                  <br>

                  <table border="1" cellspacing="0" cellpadding="0">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Email</th>
                           <th>Username</th>
                           <th>Password</th>
                           <th>Role</th>
                           <th></th>
                           <th></th>
                        </tr>
                     </thead>
                     <?php
                        $myrow = $obj->fetch_record("users");
                        foreach ($myrow as $row) {
                           ?>
                            <tbody>
                        <tr>
                           <td><?php echo $row["id"]; ?></td>
                           <td><?php echo $row["name"]; ?></td>
                           <td><?php echo $row["lname"]; ?></td>
                           <td><?php echo $row["email"]; ?></td>
                           <td><?php echo $row["username"]; ?></td>
                           <td><?php echo $row["password"]; ?></td>
                           <td><?php echo $row["role"]; ?></td>
                           <td><a href="edit_user.php?id=<?php echo $row["id"];?>">Edit</a></td>
                           <td><a href="../actions/manage_users.act.php?delete=1&id=<?php echo $row["id"];?>">Delete</a></td>
                        </tr>
                        </tbody>

                           <?php
                        }
                     ?>

                     </table>
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