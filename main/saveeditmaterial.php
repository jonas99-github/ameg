<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['inv_code'];
$b = $_POST['mat_name'];
$c = $_POST['cat'];
$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'];

// query
$sql = "UPDATE mat_inv 
        SET inv_code=?, mat_name=?, cat=?, price=?, supplier=?, qty=?
		WHERE inv_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$id));
header("location: materials.php");

?>