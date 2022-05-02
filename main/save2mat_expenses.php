
<?php 
session_start();
include ('../connect.php');
$a= $_GET['id'];
$b= $_GET['del_order'];
$c= $_GET['supplier'];
$d= $_GET['project_name'];
$e= $_GET['amount'];

// query
$sql = "INSERT INTO mat_expenses(del_order,supplier,project_name,total) VALUES (:b,:c,:d,:e)";
$m = $db->prepare($sql);
$m->execute(array(':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e));


header("location:ledger.php?id=$d");

