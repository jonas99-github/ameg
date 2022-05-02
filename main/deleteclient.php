<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM clients WHERE client_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>