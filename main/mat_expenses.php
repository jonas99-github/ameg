<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Expenses</title>
	<?php 
	include('../connect.php');
	include ('header.php');
	include ('navfixed.php');
	?>
	<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="contentheader">
				<i class="icon-table"></i> Material Expenses
			</div>
			<ul class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li>
			</ul>
			<div style="margin-top: -19px; margin-bottom: 21px;">
				<a href="index.php"><button class="btn btn-default btn-large" style="float: left; margin-top: 6px; margin-bottom: 7px; margin-left: 6px;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
				<table class="hoverTable" id="resultTable" data-responsive="table" style="margin: 3px 0px 3px 0px;">
					<thead>
						<tr>
							<th width="12%" style="text-align: center;">ID</th>
							<th width="12%" style="text-align: center;">Supplier</th>
							<th width="12%" style="text-align: center;">Purchase Order No.</th>
							<th width="16%" style="text-align: center;">Invoice No.</th>
							<th width="19%" style="text-align: center;">Amount</th>
						</tr>
					</thead>
					<tbody>
						<?php
				
				$result = $db->prepare("SELECT * FROM mat_expenses order by matexpenses_id");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++){			
			?>
							<td><?php echo $row['matexpenses_id']; ?></td>
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