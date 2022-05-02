<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM projectsite_table WHERE site_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>


