<?php
include "../actions/crud.act.php";
session_start();
if(!isset($_SESSION["sess_admin"])){
   header("Location: ../public_view/login.php");
}
else { 

$filename = "Registered Users.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = "SELECT * FROM users";
$execute = mysqli_query($obj->con,$user_query);
// Write data to file
$flag = false;
while ($row = $execute->fetch_assoc()) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}
}
?>