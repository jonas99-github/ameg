<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Account Ledger</title>
	<?php include 'header.php';?>
	<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<?php include 'navfixed.php';?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="contentheader">
				<i class="icon-table"></i> Ledger
			</div><br><br>
			<div style="margin-top: -19px; margin-bottom: 21px;">
				<table class="hoverTable" id="resultTable" data-responsive="table" style="margin: 3px 0px 3px 0px;">
					<thead>
						<tr>
							<th width="12%" style="text-align: center;">Date and Time of Arrival</th>
							<th width="16%" style="text-align: center;">Purchase Order No.</th>
							<th width="16%" style="text-align: center;">Delivery Order No.</th>
							<th width="25%" style="text-align: center;">Supplier</th>
							<th width="25%" style="text-align: center;">Project Site</th>
							<th width="19%" style="text-align: center;">Total Ammount</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include('../connect.php');
						$id=$_GET['id'];
						$result = $db->prepare("SELECT * FROM ledger WHERE project_name='$id' order by date_arrival asc");
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