<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM projectsite_table WHERE site_id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveeditprojectsite_genm.php" method="post">
<center><h4><i class="icon-edit icon-large"></i>   Edit Project Site</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span style="width: 105px">Project ID : </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['project_site_id']; ?>" name="code" Readonly><br>
<span style="width: 105px">Project Name : </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['project_name']; ?>" name="name" Required/><br>
<span style="width: 105px">Project Engineer : </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['project_manager']; ?>" name="engineer" Required/><br>
<span style="width: 105px">Location : </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['location']; ?>" name="location" Required/><br>
<span style="width: 105px">Budget : </span><input type="text" style="width:255px; height:30px;" value="<?php echo $row['budget']; ?>" name="budget" Required/><br>
<span style="width: 105px">Status : </span>
<select name="status" type="text" style="width:255px; height:30px;" Required>
	<option value="<?php echo $row['status']; ?>"></option>
	<option value="IN PROGRESS">In Progress</option>
	<option value="PENDING">Pending</option>
	<option value="CLEAR">Clear</option>
</select><br>

<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i>   Save Changes</button>
</div>
</div>
</form>
<?php
}
?>