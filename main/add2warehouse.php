<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM purchase_orders WHERE po_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?> 
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="add2_invprocess.php" method="post">
<center><h4><i class="icon-edit icon-large"></i>   Add Materials to inventory</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span style="width: 105px">Inventory Code : </span><input type="text" style="width:255px; height:30px;" name="inv_code" ><br>
<span style="width: 105px">Date Arrival: </span><input type="date" style="width:255px; height:30px;" value="<?php echo $row['date_arrival']; ?>" placeholder="09/13/2017" class="tcal tcalInput"  name="date_arrival" ></input><br>
<span style="width: 105px">Quantity : </span><input type="number" style="width:255px; height:30px;" value="<?php echo $row['qty']; ?>" name="qty" Required/><br>
<span style="width: 105px">Material Name : </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['mat_name']; ?>" name="mat_name" Required/><br>
<span style="width: 105px">Category : </span>
<select name="cat" style="width:255px; height:30px; margin-left:-5px;" ><br><br>
	<option><?php echo $row['cat']; ?></option><br>
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
<span style="width: 105px">Point of Origin : </span><input type="text" style="width:255px; height:30px;"  name="pt_origin" Required/><br>
<span style="width: 105px">Delivery No. : </span><input type="text" style="width:255px; height:30px;"  name="delivery_no" Required/><br>
<span style="width: 105px">Comments : </span><textarea style="width:255px; height:30px;" name="comments" ><?php echo $row['comments']; ?> </textarea><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i>   Save Changes</button>
</div>
</div>
</form>
<?php
}
?>