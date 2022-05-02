<?php
session_start();
include('../connect.php');
$a = $_POST['code'];
$b = $_POST['name'];
$c = $_POST['engineer'];
$d = $_POST['location'];
$e = $_POST['budget'];
$f = $_POST['status'];
// query
$sql = "INSERT INTO projectsite_table (project_site_id, project_name, project_manager, location, budget, status) VALUES (:a,:b,:c,:d,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f));
header("location: sitelist_index.php");


?>