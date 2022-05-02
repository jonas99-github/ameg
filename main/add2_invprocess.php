	<?php
	include('../connect.php');
	$po_number=$_GET['po_number'];

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
		$cat=$row['cat'];
		echo $po_number;
		//query								
	}
	$sql="SELECT inv_code FROM mat_inv WHERE inv_code='$inv_code'";
	$find=$db->prepare("$sql");
	$find->execute();
	$row=$find->fetch();
	$inv_code_check=$row['inv_code'];

	if($inv_code_check==true){
		$sql2="UPDATE mat_inv
		SET qty=qty+'$qty' WHERE inv_code='$inv_code'";
		$update_inv=$db->prepare($sql2);
		$update_inv->execute();

		$result = $db->prepare("DELETE FROM po_tracking WHERE po_number= '$po_number'");
		$result->execute();
		header("location: warehouse_delivery.php?id=$site_id&project_name=$project_name");
	}
	else{
		header("location: test.php");
	}
	?>

