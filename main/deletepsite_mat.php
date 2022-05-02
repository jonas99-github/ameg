<?php
	include('../connect.php');
	date_default_timezone_set('asia/manila'); 
	$date = date('m/d/Y h:i:s: a', time()); 
	$id=$_GET['id'];
	$inv_code=$_GET['inv_code'];
	$qty=$_GET['qty'];
	$mat_name=$_GET['mat_name'];
	$pt_origin=$_GET['pt_origin'];
	$price=$_GET['price'];
	$project_name=$_GET['project_name'];
	$date_deleted= $date;
if($id==true){
	$sql="INSERT INTO materials_history (date_deleted,inv_code, qty, mat_name, pt_origin,price) VALUES (:date_deleted,:inv_code,:qty,:mat_name,:pt_origin,:price)";
	$insert=$db->prepare($sql);
	$insert->execute(array(':date_deleted'=>$date_deleted,':inv_code'=>$inv_code,':qty'=>$qty,':mat_name'=>$mat_name,':pt_origin'=>$pt_origin,':price'=>$price));
}

	$result = $db->prepare("DELETE FROM projectsite_inv WHERE mat_id= '$id' ");
	$result->execute();
	header("location: project_site_inv.php?project_name=$project_name");
	
	

	

?> 