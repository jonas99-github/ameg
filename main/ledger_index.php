<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Ledger</title>
	<?php
	include ('auth.php');
	include ('header.php');
	include ('navfixed.php');
	include('../connect.php');
	?>
	<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="contentheader">
				<i class="icon-table"></i> Ledger
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
			</ul>
			<div style="margin-top: -19px; margin-bottom: 21px;">
				<a href="index.php"><button class="btn btn-default btn-large" style="float: left; margin-top: 6px; margin-bottom: 7px; margin-left: 6px;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
				<table class="hoverTable" id="resultTable" data-responsive="table" style="margin: 3px 0px 3px 0px;">
					<thead>
						<tr>
							<th width="12%" style="text-align: center;">Date Arrival</th>
							<th width="12%" style="text-align: center;">Purchase Order No.</th>
							<th width="16%" style="text-align: center;">Delivery Order No.</th>
							<th width="25%" style="text-align: center;">Supplier</th>
							<th width="25%" style="text-align: center;">Project Site</th>
							<th width="19%" style="text-align: center;">Total Ammount</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$result = $db->prepare("SELECT * FROM ledger order by date_arrival asc");
						$result->execute();
						for($i=1; $row = $result->fetch(); $i++){			
							?>
							<td><?php echo $row['date_arrival']; ?></td>
							<td><?php echo $row['po_number']; ?></td>
							<td><?php echo $row['del_order']; ?></td>
							<td><?php echo $row['supplier']; ?></td>
							<td><?php echo $row['project_name']; ?></td>
							<td><?php echo $row['total']; ?></td>
						</tbody>
						<?php
					}
					?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>