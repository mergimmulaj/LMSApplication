<?php
include 'crud.act.php';

$obj = new DataOperation;


if(isset($_POST["submit"])) {
	$errors = array();
	$myArray = array(
		"name" => $_POST["name"],
		"lname" => $_POST["lname"],
		"email" => $_POST["email"],
		"username" => $_POST["username"],
		"password" => md5($_POST["password"]),
		"role" => $_POST["role"]
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
	if(empty($_POST['role'])) {
		$errors['role'] = "Role cannot be empty";

	}
	if(count($errors) == 0) {
	if($obj->insert_record("users",$myArray)) {
		header("location: ../index.php?msg=Record Inserted");
	}
}
}

if(isset($_POST["edit"])){
	$id = $_POST["id"];
	$where = array("id"=>$id);
	$errors = array();
	$myArray = array(
		"name" => $_POST["name"],
		"lname" => $_POST["lname"],
		"email" => $_POST["email"],
		"username" => $_POST["username"],
		"role" => $_POST["role"]
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
	if(empty($_POST['role'])) {
		$errors['role'] = "Role cannot be empty";

	}
	if(count($errors) == 0) {
	if($obj->update_record("users",$where,$myArray)){
		header("location: ../index.php?msg=Record Updated Successfully");
	}
}
	
}

if(isset($_GET["delete"])){
	$id = $_GET["id"];
	$where = array("id"=>$id);
	if($obj->delete_record("users",$where)){
		header("location: ../admin_view/manage_users.php?msg=Record Deleted Successfully");
}
}
?>