<!DOCTYPE html>
<html>
<head><title>Verzontal Equip. Monitoring</title>
<?php include ("header.php"); ?>
</head>

<body>

<div class="header"><section><h2 style="text-align:left;">Equipment Assignment</h2></section><?php echo "Welcome " . $_SESSION['SESS_USERNAME'] ."   "; ?>
<a href="logout.php">LOGOUT</a>
</div>
<ul>
  <li><a href="dashboard.php">Dashboard</a></li>
  <li><a href="equip_assign.php">Equipment Assignment</a></li>
  <li><a href="equipment.php">Equipment Inventory</a></li>
  <li><a href="reports.php">Reports</a></li>
  <li><a href="actlog.php">Activity Log</a></li>

</ul>
<br>
<div class="nav-assign-eq">
<nav class="navigation">
  <ul class="mainmenu">
    <li><a href="">Assignments</a>
      <ul class="submenu">
          <li><a href="equip_assign.php">Make assignment</a></li>
        <li><a href="pending_assign.php">Pending</a></li>
        <li><a href="approved_assign.php">Approved</a></li>
      </ul>
    </li>
    <li><a href="">Property Acknowledgement Receipts</a></li>
    <li><a href="act_assign.php">Activity</a></li>
  </ul>
</nav>
</div>

<!-- Table -->


</body>
<html>
