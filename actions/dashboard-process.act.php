<?php
include 'db.php';
session_start();
$member = $_SESSION["sess_user"];
$admin = $_SESSION["sess_admin"];
if(isset($_SESSION["sess_user"])) {
	header('Location: ../user_view/welcome_member.php');
} elseif(isset($_SESSION["sess_admin"])) {
   header('Location: ../admin_view/welcome.php');
}
else {
	header('Location: ../actions/logout-process.act.php');
}
?>