<?php
session_start();
include('../connect.php');
$a = $_POST['inv_code'];
$b = $_POST['mat_name'];
$c = $_POST['cat'];
$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'];

// query
$sql = "INSERT INTO mat_inv (inv_code,mat_name,cat,price,supplier,qty) VALUES (:a,:b,:c,:d,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f));
header("location: materials.php");


?> 