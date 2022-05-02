<!DOCTYPE Html>
<html>
<head>
	<title>Budget</title>
	<?php 
	require_once('auth.php');
	include ('header.php');
	?>
</head>
<body>
	<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
		<thead>
			<tr>
			<th width="9%">Project ID</th>
			<th width="24%">Project Name</th>
			<th width="24%">Project Manager/Engineer</th>
			<th width="29%">Location</th>
			<th width="29%">Project Budget</th>
			<th width="9%">Status</th>
			</tr>
		</thead>
		<tbody>
			<?php
					include('../connect.php');
					$result = $db->prepare("SELECT * FROM projectsite_table ORDER BY project_name ASC");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
					if ($row ==true) {
					echo '<tr class="record">';
					} 
					else {
					
					echo '<tr class="alert alert-warning record" style="color: #fff; background:rgb(255, 95, 66);">';
					}
				?>
			<td><?php echo $row['project_site_id']; ?></td>
			<td><?php echo $row['project_name']; ?></td>
			<td><?php echo $row['project_manager']; ?></td>
			<td><?php echo $row['location']; ?></td>
			<td><?php echo $row['budget']; ?></td>
			<td><?php echo $row['status']; ?></td>
			</tr>
				<?php
					}
				?>			
		</tbody>
	</table>
	<div class="clearfix"></div>
	</div>
	</div>
	</body>
	</html>