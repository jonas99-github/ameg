<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveuser.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add User</h4></center>
<hr>
<div id="ac">
<span>Full Name : </span><input type="text" style="width:265px; height:30px;" name="name" placeholder="Full Name" Required/><br>
<span>Username : </span><input type="text" style="width:265px; height:30px;" name="username" placeholder="Username"/><br>
<span>Password : </span><input type="password" style="width:265px; height:30px;" name="password" placeholder="Password"/><br>
<span>Position : </span>
<select name="position" style="width:265px; height:30px; margin-left:-5px;" >
	<option>--</option>
        <option>General Manager</option>
        <option>Accounting Supervisor</option>
        <option>Project Site Manager</option>
        <option>Warehouse Manager</option>
        <option>Quantity Surveyor</option>
	</select><br>
<span>Project Site : </span>
<select name="proj_site" style="width:265px; height:30px; margin-left:-5px;" >
	<option>--</option>
	<?php
  include('../connect.php');
  $result = $db->prepare("SELECT * FROM projectsite_table");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
  ?>
    <option><?php echo $row['project_name']; ?></option>
  <?php
  }
  ?>
  </select><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save User</button>
</div>
</div>
</form> 