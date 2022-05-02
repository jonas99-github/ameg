<?php
// configuration
include('../connect.php');
// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$b = $_POST['username'];
$c = $_POST['password'];
$d = $_POST['position'];
$e = $_POST['proj_site'];
// query
$sql = "UPDATE user 
        SET name=?, username=?, password=?, position=?, proj_site=?
        WHERE id=?";
$q = $db->prepare($sql);
$q -> execute(array($a,$b,$c,$d,$e,$id));   
header("location: admin-settings.php");
?>