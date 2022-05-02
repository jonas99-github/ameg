<?php
session_start();
include('connect.php');
$a = $_POST['user_id'];
$b = $_POST['empl_no'];
$c = $_POST['firstname'];
$d = $_POST['lastname'];
$e = $_POST['username'];
$f = $_POST['password'];
$g = $_POST['date_created'];

// query
$sql = "INSERT INTO usr_tbl(usr_id,empl_no,empl_firstname,empl_lastname,usr,psw,date_created)
VALUES ('$a','$b','$c','$d','$e','$f','$g')";

if (mysqli_query($conn, $sql)) {
     header("location: users.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
