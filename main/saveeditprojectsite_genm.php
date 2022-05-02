<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['code'];
$b = $_POST['name'];
$c = $_POST['engineer'];
$d = $_POST['location'];
$e = $_POST['budget'];
$f = $_POST['status'];
// query
$sql = "UPDATE projectsite_table 
        SET project_site_id=?, project_name=?, project_manager=?, location=?, budget=?, status=?
		WHERE site_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$id));
header("location: sitelist_index.php");

?>