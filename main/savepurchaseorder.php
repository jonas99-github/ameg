<?php
session_start();
include('../connect.php');
$a = $_POST['po_number'];
$b = $_POST['mat_name1'];
$result = $db->prepare("SELECT * FROM mat_inv WHERE inv_id= :userid");
$result->bindParam(':userid', $b);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$c = $row['inv_code'];
$d = $row['mat_name'];
$e = $row['cat'];
$pp = $row['price'];
}
$e1 = $_POST['supplier_name'];
$result = $db->prepare("SELECT * FROM supliers WHERE suplier_id= :userid");
$result->bindParam(':userid', $e1);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
$f = $row['suplier_name'];
}
$g = $_POST['comments'];
$h = $_POST['destination'];
$i = $_POST['date_ordered'];
$j = $_POST['qty'];
$k = $j*$pp;
$l = $_POST['pid'];

// query
$sql = "INSERT INTO purchase_orders ( po_number, mat_name1,inv_code,mat_name,cat,price,supplier_name,suplier_name,comments,destination, date_ordered,qty,amount) VALUES (:a,:b,:c,:d,:e,:pp,:e1,:f,:g,:h,:i,:j,:k)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':pp'=>$pp,':e1'=>$e1,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i,':j'=>$j,':k'=>$k));
header("location: order.php?id=$pid&po_number=$a");
?>
