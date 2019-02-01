<?php
include '../actions/crud.act.php';

$obj = new DataOperation;


if(isset($_POST["submit-post-admin"])) {
	$error = arraY();
	$bookname=$_POST['bookname'];
	$author=$_POST['author'];
	$isbn=$_POST['isbn'];
	$edition=$_POST['edition'];

		$sql = "INSERT INTO posts (bookname, author, isbn, edition) VALUES ('$bookname','$author','$isbn','$edition')";
		$execute=mysqli_query($obj->con,$sql);
		if($execute) {
			header("location: ../admin_view/manage_posts.php?msg=Record Inserted");
		}
		else {
			echo "Failed";
		}
		
	}


	if(isset($_POST["submit-post-member"])) {
	$errors = array();	
	$myArray = array(
		"bookname" => $_POST["bookname"],
		"author" => $_POST["author"],
		"isbn" => $_POST["isbn"],
		"edition" => $_POST["edition"],
	);
	if(empty($_POST['bookname'])) {
		$errors['bookname'] = "Your first name cannot be empty";

	}
	if(empty($_POST['author'])) {
		$errors['author'] = "Your last name cannot be empty";
	}
	if(empty($_POST['isbn'])) {
		$errors['isbn'] = "Your last name cannot be empty";
	}
	if(empty($_POST['edition'])) {
		$errors['edition'] = "Your last name cannot be empty";
	}
	if(count($errors) == 0) {
	if($obj->insert_record("posts",$myArray)) {
		header("location: ../index.php?msg=Record Inserted");
	}
}


}



if(isset($_POST["edit-post-member"])){
	$id = $_POST["id"];
	$where = array("id"=>$id);
	$errors = array();	
	$myArray = array(
		"bookname" => $_POST["bookname"],
		"author" => $_POST["author"],
		"isbn" => $_POST["isbn"],
		"edition" => $_POST["edition"]
	);
	if(empty($_POST['bookname'])) {
		$errors['bookname'] = "Your first name cannot be empty";

	}
	if(empty($_POST['author'])) {
		$errors['author'] = "Your last name cannot be empty";
	}
	if(empty($_POST['isbn'])) {
		$errors['isbn'] = "Your last name cannot be empty";
	}
	if(empty($_POST['edition'])) {
		$errors['edition'] = "Your last name cannot be empty";
	}
	if(count($errors) == 0) {
	if($obj->update_record("posts",$where,$myArray)){
		header("location: ../user_view/manage_posts_member.php?msg=Record Updated Successfully");
	}
}
	
}


if(isset($_POST["edit-post-admin"])){
	$id = $_POST["id"];
	$errors = array();	
	$where = array("id"=>$id);
	$myArray = array(
		"bookname" => $_POST["bookname"],
		"author" => $_POST["author"],
		"isbn" => $_POST["isbn"],
		"edition" => $_POST["edition"]
	);
	if(empty($_POST['bookname'])) {
		$errors['bookname'] = "Your first name cannot be empty";

	}
	if(empty($_POST['author'])) {
		$errors['author'] = "Your last name cannot be empty";
	}
	if(empty($_POST['isbn'])) {
		$errors['isbn'] = "Your last name cannot be empty";
	}
	if(empty($_POST['edition'])) {
		$errors['edition'] = "Your last name cannot be empty";
	}
	if(count($errors) == 0) {
	if($obj->update_record("posts",$where,$myArray)){
		header("location: ../admin_view/manage_posts.php?msg=Record Updated Successfully");
	}
	}
}

if(isset($_GET["delete-post-member"])){
	$id = $_GET["id"];
	$where = array("id"=>$id);
	if($obj->delete_record("posts",$where)){
		header("location: ../user_view/manage_posts_member.php?msg=Record Deleted Successfully");
}
}
if(isset($_GET["delete-post-admin"])){
	$id = $_GET["id"];
	$where = array("id"=>$id);
	if($obj->delete_record("posts",$where)){
		header("location: ../admin_view/manage_posts.php?msg=Record Deleted Successfully");
}
}

?>
