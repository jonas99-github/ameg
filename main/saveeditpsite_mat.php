<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['inv_code'];
$b = $_POST['date_arrival'];
$c = $_POST['qty'];
$d = $_POST['mat_name'];
$e = $_POST['cat'];
$f = $_POST['pt_origin'];
$g = $_POST['delivery_no'];
$h = $_POST['comments'];
$i = $_POST['price'];
$project_name = $_POST['project_name'];
// query
$sql = "UPDATE projectsite_inv 
        SET inv_code=?, date_arrival=?, qty=?, mat_name=?, cat=?, pt_origin=?, delivery_no=?, comments=?, price=?
		WHERE mat_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$f,$g,$h,$i, $id));
header("location: project_site_inv.php?id=$id&project_name=$project_name");

?>