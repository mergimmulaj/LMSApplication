<?php
include 'crud.act.php';

$obj = new DataOperation;

if(isset($_POST["submit-register"])) {
	$errors = array();
	$myArray = array(
		"name" => $_POST["name"],
		"lname" => $_POST["lname"],
		"email" => $_POST["email"],
		"username" => $_POST["username"],
		"password" => md5($_POST["password"])
	);

	if(empty($_POST['name'])) {
		$errors['firstname'] = "Your first name cannot be empty";

	}
	if(empty($_POST['lname'])) {
		$errors['lastname'] = "Your last name cannot be empty";

	}
	if(empty($_POST['email'])) {
		$errors['email'] = "Your email cannot be empty";

	}
	if(empty($_POST['username'])) {
		$errors['username'] = "Your username cannot be empty";

	}
	if(empty($_POST['password'])) {
		$errors['password'] = "Your password cannot be empty";

	}
	if(count($errors) == 0) {
	if($obj->insert_record("users",$myArray)) {
		header("location: ../public_view/register.php?msg=Record Inserted");
	}
}
}
?>