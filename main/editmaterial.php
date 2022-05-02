<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM mat_inv WHERE inv_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditmaterial.php" method="post">
<center><h4><i class="icon-edit icon-large"></i>   Edit Materials</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span style="width: 105px">Inventory Code : </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['inv_code']; ?>" name="inv_code" Readonly><br>
<span style="width: 105px">Material Name : </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['mat_name']; ?>" name="mat_name" Required/><br>
<span style="width: 105px">Category : </span>
<select name="cat" style="width:255px; height:30px; margin-left:-5px;" >
	<option><?php echo $row['cat']; ?></option>
	<?php
	$results = $db->prepare("SELECT * FROM category");
		$results->bindParam(':userid', $res);
		$results->execute();
		for($i=0; $rows = $results->fetch(); $i++){
	?>
		<option><?php echo $rows['name']; ?></option>
	<?php
	}
	?>
</select><br>
<span style="width: 105px">Price : </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['price']; ?>" name="price" Required/><br>
<span style="width: 105px">Supplier : </span>
<select name="supplier" style="width:255px; height:30px; margin-left:-5px;" >
	<option><?php echo $row['supplier']; ?></option>
	<?php
	$results = $db->prepare("SELECT * FROM supliers");
		$results->bindParam(':userid', $res);
		$results->execute();
		for($i=0; $rows = $results->fetch(); $i++){
	?>
		<option><?php echo $rows['suplier_name']; ?></option>
	<?php
	}
	?>
</select><br>
<span style="width: 105px">Quantity : </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['qty']; ?>" name="qty" Required><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i>   Save Changes</button>
</div>
</div>
</form>
<?php
}
?>