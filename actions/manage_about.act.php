<?php
include 'crud.act.php';

$obj = new DataOperation;

if(isset($_POST["submit-about"])) {
	$errors = array();
	$myArray = array(
		"about_title" => $_POST["about_title"],
		"about_content" => $_POST["about_content"],
	);
	if(empty($_POST['about_title'])) {
		$errors['about_title'] = "Note name cannot be empty!";
	}
	if(empty($_POST['about_content'])) {
		$errors['about_content'] = "Note content cannot be empty!";
	}
	if(count($errors) == 0) {
	if($obj->insert_record("about",$myArray)) {
		header("location: ../admin_view/manage_notes.php?msg=Record Inserted");
	}
}
}
?>