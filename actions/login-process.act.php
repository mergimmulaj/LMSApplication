<?php
include('db.php');
session_start();

if(isset($_POST['login']))
{
	$errorUsername = "";
	$errorPassword = "";
	if(empty($_POST['username'])) {
		$errorUsername = "Username cannot be empty!!";
		echo $errorUsername;
	}
	else {
// username and password sent from Form
$username = mysqli_real_escape_string($obj->con,$_POST['username']);  
}
 if(empty($_POST['password'])) {
 	$errorPassword = "Password cannot be empty!!";
 }
 else {
$password = mysqli_real_escape_string($obj->con,$_POST['password']);
$password = md5($password);
}

$sql_user="SELECT * FROM users WHERE username='$username' AND password='$password' AND role='1'";
$sql_admin="SELECT * FROM users WHERE username='$username' AND password='$password' AND role='2'";

$check_user=mysqli_query($obj->con,$sql_user);
$check_admin=mysqli_query($obj->con,$sql_admin);

$count_user=mysqli_num_rows($check_user);
$count_admin=mysqli_num_rows($check_admin);
echo $count;


// If result matched $username and $username, table row must be 1 row
if($count_admin > 0) {
		session_start();
		$_SESSION['sess_admin']=$username;
		//Redir
		header('location: ../admin_view/welcome.php');
}
elseif ($count_user > 0) {
		session_start();
		$_SESSION['sess_user']=$username;
		//Redir
		header('location: ../user_view/welcome_member.php');
		}
else {
			header('location: error-login.php');
		}
}
?>