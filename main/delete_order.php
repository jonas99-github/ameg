<?php
	include('../connect.php');
	$po_id=$_GET['po_id'];
	$inv_code=$_GET['inv_code'];
	$mat_name=$_GET['mat_name'];
	$cat=$_GET['cat'];
	$suplier_name=$_GET['suplier_name'];
	$comments=$_GET['comments'];
	$destination=$_GET['destination'];
	$date_ordered=$_GET['date_ordered'];
	$price=$_GET['price'];
	$amount=$_GET['amount'];
	$po_number=$_GET['po_number'];
	//query	
	$result = $db->prepare("DELETE FROM purchase_orders WHERE po_id= :memid");
	$result->bindParam(':memid', $po_id);
	$result->execute();
	header("location: order.php?id=cash&po_number=$po_number");
?>