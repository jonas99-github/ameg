<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dashboard</title>
	<?php include ('header.php');?>
	<?php include('navfixed.php');?>
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="contentheader">
				<i class    ="icon-dashboard"></i> Dashboard
			</div>
			<ul class="breadcrumb">
				<li class="active">Dashboard</li>
			</ul>
			<font style=" font:bold 25px 'Aleo'; color:#0489bd;"><center>AMEG Construction and Supply</center></font>
			<div id="mainmain">
				<!--Purchase Order Number-->
				<?php
				function createRandomPONumber() {
					$chars = "003232303232023232023456789";
					srand((double)microtime()*1000000);
					$i = 0;
					$pass = '' ;
					while ($i <= 7) {
						$num = rand() % 33;
						$tmp = substr($chars, $num, 1);
						$pass = $pass . $tmp;
						$i++;
					}
					return $pass;
				}
				$finalcode='PO-'.createRandomPONumber();
				?>
				<?php
				$position=$_SESSION['SESS_LAST_NAME'];
				if($position=='General Manager') {
					?>
					<a href="order.php?id=cash&po_number=<?php echo $finalcode ?>"><i class="icon-group icon-2x"></i><br> Order Materials<br><font size="2" color="6600FF"><i>Create Purchase Order</i></font></a>
					<a href="pendingdelivery.php"><i class="icon-group icon-2x"></i><br>Track Deliveries<br><font size="2" color="6600FF"><i>View Report</i></font></a>
					<a href="mat_expenses.php"><i class="icon-flag icon-2x"></i><br>Material Expenses<br><font size="2" color="6600FF"><i>View Report</i></font></a>
					<a href="sitelist_index.php"><i class="icon-flag icon-2x"></i><br> Project Site List<br><font size="2" color="6600FF"><i>View Sitelist</i></font></a>
					<a href="cat.php"><i class="icon-list-alt icon-2x"></i><br>Material Categories<br><font size="2" color="6600FF"><i>Add and Delete Categories</i></font></a>
					<a href="client.php"><i class="icon-group icon-2x"></i><br>Clients<br><font size="2" color="6600FF"><i>Client Information</i></font></a>
					<a href="supplier.php"><i class="icon-group icon-2x"></i><br> Suppliers<br><font size="2" color="6600FF"><i>Supplier Information</i></font></a>
					<a href="admin-settings.php"><i class="icon-flag icon-2x"></i><br> User Manager<br><font size="2" color="6600FF"><i>User Information</i></font></a>
					<?php
				}
				if($position=='Accounting Supervisor') {
					?>
					<a href="accounting.php"><i class="icon-shopping-cart icon-2x"></i><br> Materials Accounts Payable <br><font size="2" color="6600FF"><i>Report and Invoice of Deliveries </i></font></a>
					<a href="mat_expenses.php"><i class="icon-shopping-cart icon-2x"></i><br> Material Expenses<br><font size="2" color="6600FF"><i>View Report </i></font></a>
					<?php
				}
				include('../connect.php');
				include('../process.php');
				$sql="SELECT proj_site FROM user WHERE name='$name'";
				$result=$db->prepare($sql);
				$result->execute();
				$row=$result->fetch();
				$project_name=$row['proj_site'];
				$sql2="SELECT * FROM projectsite_table";
				$result2=$db->prepare($sql2);
				$result2->execute();
				$row2=$result->fetch();
				
				if($position=='Project Site Manager') {
					$id=$row2['site_id'];
					?>
					<script>
						window.location.href = "project_site_inv.php?id=<?php echo $id ?>&project_name=<?php echo $project_name ?>&name=<?php echo $name ?>";
					</script>
					<?php
				}
				if($position=='Warehouse Manager') {
					?>
					<script>
						window.location.href = "materials.php";
					</script>
					<?php
				}
				if($position=='Quantity Surveyor') {
					?>
					<a href="sitelist_qs.php"><i class="icon-shopping-cart icon-2x"></i><br> Project Sites<br><font size="2" color="6600FF"><i>Go to Project Site List</i></font></a>
					<a href="materials_qs.php"><i class="icon-list-alt icon-2x"></i><br> Warehouse Inventory<br><font size="2" color="6600FF"><i>View Materials</i></font></a>
					<a href="admin-settings.php"><i class="icon-flag icon-2x"></i><br> User Manager<br><font size="2" color="6600FF"><i>User Information</i></font></a>
					<?php
				}
				?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>
