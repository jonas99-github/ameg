<?php
	include('../connect.php'); 
	$id=$_GET['id']; 
	$result = $db->prepare("SELECT * FROM clients WHERE client_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditclient.php" method="post">
<center><h4><i class="icon-edit icon-large"></i> Edit Client</h4></center>
<hr>
<div id="ac"> 
<input type="hidden" name="memi" value="<?php echo $row['client_id']; ?>" />
<span>Full Name : </span><input type="text" style="width:265px; height:30px;" name="name" value="<?php echo $row['client_name']; ?>" /><br>
<span>Address : </span><input type="text" style="width:265px; height:30px;" name="address" value="<?php echo $row['address']; ?>" /><br>
<span>Contact : </span><input type="text" style="width:265px; height:30px;" name="contact" value="<?php echo $row['contact']; ?>" /><br>


<span>Note : </span><textarea style="height:60px; width:265px;" name="note"><?php echo $row['note'];?></textarea><br>

<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save Changes</button>
</div>
</div>
</form>
<?php
}
?>