<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['contact'];
$d = $_POST['note'];
// query
$sql = "UPDATE clients 
        SET client_name=?, address=?, contact=?, note=?
		WHERE client_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$id));
header("location: client.php");

?>