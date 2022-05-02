<!DOCTYPE html>
<html>
<head>
	<title>Accounting</title>
	<?php include 'header.php';?>
	<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
</head> 
<body>
	<?php include 'navfixed.php';?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="contentheader">
				<i class="icon-table"></i> Accounting
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li> / <li class="active">Accounting</li>
			</ul>
			<div style="margin-top: -19px; margin-bottom: 21px;">
				<a href="index.php"><button class="btn btn-default btn-large" style="float: left; margin-top: 6px; margin-left: 6px;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a><br><br><br>
				<input type="text" style="height: 35px; margin-left: 6px;" name="filter" value="" id="filter" placeholder=" Search" autocomplete="off"/>

				<table class="hoverTable" id="resultTable" data-responsive="table" style="margin: 3px 0px 3px 0px;">
					<thead>
						<tr>
							<th width="35%" style="text-align: center;">Project Site</th>
							<th width="30%" style="text-align: center;">Person In-Charge</th>
							<th width="35%" style="text-align: center;"> Project Location</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include '../connect.php';
						$result = $db->prepare("SELECT * FROM projectsite_table ORDER BY project_name ASC");
						$result->execute();
						for ($i=0; $row=$result->fetch(); $i++) {
							$id=$row['project_name'];
							if ($row == true) {
								echo '<tr class="record">';

							} else {
								echo '<tr class="alert alert-warning record" style="color: #fff; background: rgb(255, 95, 66);">';

							}
							?>
							<td style="text-align: center;"><?php echo "<a href='ledger.php?id=$id'>{$row['project_name']}</a><br>"; ?></td>
							<td style="text-align: center;"><?php echo $row['project_manager'];?></td>
							<td style="text-align: center;"><?php echo $row['location'];?></td>
							<?php
						}
						?>
					</tbody>
				</table>
				<table class="hoverTable" id="resultTable" data-responsive="table" style="margin: 3px 0px 3px 0px;">
					<thead>
						<tr>
							<th width="35%" style="text-align: center;">Warehouse</th>
						</tr>
					</thead>
					<tbody>

						<td style="text-align: center;"><?php echo "<a href='ledger_warehouse2.php'>Warehouse</a><br>"; ?></td>

					</tbody>
				</table>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</body>
<?php include 'footer.php';?>
</html>