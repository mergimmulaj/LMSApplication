<?php
include 'crud.act.php';

$obj = new DataOperation;


if(isset($_POST["contact-submit"])) {
	if(mail("mergimmulaj1@gmail.com", "You have received a new email !", 'From: '  . $_POST["name"] . '  ' . $_POST["lname"] . '  ' . "Message: " . $_POST["message"])) {
		echo "MAIL SENT!";
	} else {
		echo "MAIL FAILED TO SEND!";
	}
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
		$errors['name'] = "Name cannot be empty!";
	}
	if(empty($_POST['lname'])) {
		$errors['lname'] = "Last name cannot be empty!";
	}
	if(empty($_POST['email'])) {
		$errors['email'] = "Email cannot be empty!";
	}
	if(empty($_POST['country'])) {
		$errors['country'] = "Country cannot be empty!";
	}
	if(empty($_POST['message'])) {
		$errors['message'] = "Message cannot be empty!";
	}
	if(empty($_POST['gender'])) {
		$errors['gender'] = "Gender cannot be empty!";
	}
	if(count($errors) == 0) {
	if($obj->insert_record("messages",$myArray)) {
		header("location: ../index.php?msg=Record Inserted");
	}
}
}

?>