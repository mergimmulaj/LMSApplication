<?php
include 'crud.act.php';

$obj = new DataOperation;

if(isset($_POST["submit-note"])) {
	$errors = array();
	$myArray = array(
		"note_name" => $_POST["note_name"],
		"note_content" => $_POST["note_content"],
	);
	if(empty($_POST['note_name'])) {
		$errors['notename'] = "Note name cannot be empty!";
	}
	if(empty($_POST['note_content'])) {
		$errors['notecontent'] = "Note content cannot be empty!";
	}
	if(count($errors) == 0) {
	if($obj->insert_record("notes",$myArray)) {
		header("location: ../admin_view/manage_notes.php?msg=Record Inserted");
	}
}
}

if(isset($_POST["edit-note"])){
	$id = $_POST["id"];
	$where = array("id"=>$id);
	$errors = array();
	$myArray = array(
		"note_name" => $_POST["note_name"],
		"note_content" => $_POST["note_content"],
	);
	if(empty($_POST['note_name'])) {
		$errors['notename'] = "Note name cannot be empty!";
	}
	if(empty($_POST['note_content'])) {
		$errors['notecontent'] = "Note content cannot be empty!";
	}
	if(count($errors) == 0) {
	if($obj->update_record("notes",$where,$myArray)){
		header("location: ../admin_view/manage_notes.php?msg=Record Updated Successfully");
	}
	}
}

if(isset($_GET["delete-note"])){
	$id = $_GET["id"];
	$where = array("id"=>$id);
	if($obj->delete_record("notes",$where)){
		header("location: ../admin_view/manage_notes.php?msg=Record Deleted Successfully");
}
}
?>



