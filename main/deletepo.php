<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM po_tracking WHERE tracking_id= '$id'");
	$result->execute();
	header("location: pendingdelivery.php");
?>