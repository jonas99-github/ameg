<?php
session_start();
include('../connect.php');
$a = $_POST['po_number'];
$b = $_POST['date_ordered'];
$c = $_POST['suplier_name'];
$d = $_POST['destination'];
$e = $_POST['total_amount'];
// query
$sql = "INSERT INTO po_tracking (po_number,date_ordered,suplier_name,destination,total_amount) VALUES (:a,:b,:c,:d,:e)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e));

$sql2 = "INSERT INTO order_history (po_number,date_ordered,suplier_name,destination,total_amount) VALUES (:a,:b,:c,:d,:e)";
$q2 = $db->prepare($sql2);
$q2->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e));



header("location: pendingdelivery.php");
?> 