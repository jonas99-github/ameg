<?php
session_start();
include('../connect.php');
$a = $_POST['date_arrival'];
$b = $_POST['del_order'];
$c = $_POST['po_number'];
$d = $_POST['supplier'];
$e = $_POST['project_name'];
$f = $_POST['total'];

// query
$sql = "INSERT INTO ledger (date_arrival,del_order,po_number,supplier,project_name,total) VALUES (:a,:b,:c,:d,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f));


	$po_number=$_GET['po_number'];
	$site_name=$_GET['project_name'];
	$project_name=$_GET['project_name'];
	
	$result2 = $db->prepare("SELECT * FROM purchase_orders WHERE po_number= :userid");
	$result2->bindParam(':userid', $po_number);
	$result2->execute();
	for($i=0; $row = $result2->fetch(); $i++){

		$inv_code= $row['inv_code'];
		echo $inv_code."<br>";
		$qty=$row['qty'];
		echo $qty."<br>";
		$mat_name=$row['mat_name'];
		echo $mat_name."<br>";
		$pt_origin=$row['suplier_name'];
		echo $pt_origin."<br>";
		$price=$row['price'];
		echo $price;
		echo $site_name;
		echo $po_number;
		$destination=$row['destination'];
	}
						//query
	$sql="SELECT inv_code FROM projectsite_inv WHERE inv_code='$inv_code'";
	$find=$db->prepare("$sql");
	$find->execute();
	$row=$find->fetch(); 
	$inv_code_check=$row['inv_code'];
	
	if($inv_code_check==true){

		$sql2="UPDATE projectsite_inv
		SET qty=qty+'$qty' WHERE inv_code='$inv_code'";
		$update_inv=$db->prepare($sql2);
		$update_inv->execute();
	}
	else{
		$sql2="INSERT into projectsite_inv (inv_code,site_name, qty,mat_name,pt_origin,price) VALUES (:inv_code,:destination,:qty,:mat_name,:pt_origin,:price)";
		$result4 = $db->prepare($sql2);
		$result4->execute(array(':inv_code'=>$inv_code,':destination'=>$destination,':qty'=>$qty,':mat_name'=>$mat_name,':pt_origin'=>$pt_origin,':price'=>$price));

	}
	$result = $db->prepare("DELETE FROM po_tracking WHERE po_number= '$po_number'");
	$result->execute();
	header("location: ledger_psite.php?id=$e");

	
	
	
	?>
	

?> 