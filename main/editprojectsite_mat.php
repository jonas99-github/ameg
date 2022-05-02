<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM projectsite_inv WHERE mat_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditpsite_mat.php" method="post">
<center><h4><i class="icon-edit icon-large"></i>   Edit Project Site</h4></center>
<hr>
<div id="ac"> 
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<input type="hidden" name="project_name" value="<?php echo $_GET['project_name']; ?>" />
<span style="width: 105px">Inventory Code : </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['inv_code']; ?>" name="inv_code" Readonly><br>
<span style="width: 105px">Quantity : </span><input type="number" style="width:255px; height:30px;" value="<?php echo $row['qty']; ?>" name="qty" ><br>
<span style="width: 105px">Material: </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['mat_name']; ?>" placeholder="Material name" class="tcal tcalInput"  name="mat_name" readonly></input><br>
<span style="width: 105px">Point of Origin : </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['pt_origin']; ?>" name="pt_origin" Required readonly/><br><br>
<span style="width: 105px">Price : </span><textarea style="width:255px; height:30px;" name="price" readonly ><?php echo $row['price']; ?> </textarea><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i>   Save Changes</button>
</div>
</div>
</form>
<?php
}
?>