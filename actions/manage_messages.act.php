<?php
include 'crud.act.php';

$obj = new DataOperation;

if(isset($_POST["contact-submit"])) {
	$errors = array();
	$myArray = array(
		"name" => $_POST["name"],
		"lname" => $_POST["lname"],
		"email" => $_POST["email"],
		"country" => $_POST["country"],
		"message" => $_POST["message"],
		"gender" => $_POST["gender"],
		"checkbox" => $_POST["checkbox"]

	);
	if(empty($_POST['name'])) {
		$errors['name'] = "Note name cannot be empty!";
	}
	if(empty($_POST['lname'])) {
		$errors['lname'] = "Note content cannot be empty!";
	}
	if(empty($_POST['email'])) {
		$errors['email'] = "Note content cannot be empty!";
	}
	if(empty($_POST['country'])) {
		$errors['country'] = "Note content cannot be empty!";
	}
	if(empty($_POST['message'])) {
		$errors['message'] = "Note content cannot be empty!";
	}
	if(empty($_POST['gender'])) {
		$errors['gender'] = "Note content cannot be empty!";
	}


	if(count($errors) == 0) {
	if($obj->insert_record("messages",$myArray)) {
		header("location: ../index.php?msg=Record Inserted");
	}
}
}

if(isset($_GET["delete-message"])){
	$id = $_GET["id"];
	$where = array("id"=>$id);
	if($obj->delete_record("messages",$where)){
		header("location: ../admin_view/messages.php?msg=Record Deleted Successfully");
}
}

?>