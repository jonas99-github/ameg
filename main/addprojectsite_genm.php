<html>
<?php
	require_once('auth.php');
  include('header.php');
?>
<head>
 
</head>
<body>
<form action="saveprojectsite_genm.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i>   Add Project Site</h4></center>
<hr>
<div id="ac">
<span style="width: 105px">Project ID : </span><input type="text" style="width:255px; height:30px;" value="AMEG-<?php
$prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,6));?>" name="code" Readonly Required><br>
<span style="width: 105px">Project Name : </span><input type="text" style="width:255px; height:30px;" name="name" Required/><br>
<span style="width: 105px">Project Engineer : </span><input type="text" style="width:255px; height:30px;" name="engineer" Required/><br>
<span style="width: 105px">Location : </span><input type="text" style="width:255px; height:30px;" name="location" Required/><br>
<span style="width: 105px">Budget : </span><input type="text" style="width:255px; height:30px;" name="budget" Required/><br>
<span style="width: 105px">Status : </span><select name="status" type="text" style="width:255px; height:30px;" Required>
  <option value=""></option>
  <option value="IN PROGRESS">In Progress</option>
  <option value="PENDING">Pending</option>
  <option value="CLEAR">Clear</option>
</select><br>

<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i>   Save</button>
</div>
</div>
</form>
</body>
</html>