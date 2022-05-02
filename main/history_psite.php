 	<html>
	<head>
	<title>
	History
	</title> 
	<?php 
	require_once('auth.php');
	include('header.php');
	?>
	<script type="text/javascript">
	  jQuery(document).ready(function($) {
	    $('a[rel*=facebox]').facebox({
	      loadingImage : 'src/loading.gif',
	      closeImage   : 'src/closelabel.png'
	    })
	  })
	</script>
	</head>
	<body>
	<?php include('navfixed.php');?>
	<div class="container-fluid">
	      <div class="row-fluid">
		<div class="contentheader">
				<i class="icon-table"></i> Material History
				</div>
				<ul class="breadcrumb">
				<li><a href="index.php">Inventory</a></li> /
				<li class="active">History</li>
				</ul>
	<div style="margin-top: -19px; margin-bottom: 21px;">
	<br>
	</div>
	<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search..." autocomplete="off" />
	
	<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
		<thead>
			<tr>
			<th width="9%">History ID</th>
			<th width="24%">Date and Time Deleted</th>
			<th width="24%">Inventory Code</th>
			<th width="24%">Quantity</th>
			<th width="29%">Material Name</th>
			<th width="29%">Point of Origin</th>
			<th width="9%">Price</th>
			</tr>
		</thead>
		<tbody>
				<?php
					include('../connect.php');
					$result = $db->prepare("SELECT * FROM materials_history");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
					if ($row ==true) {
					echo '<tr class="record">';
					} 
					else {
					echo '<tr class="alert alert-warning record" style="color: #fff; background:rgb(255, 95, 66);">';
					}
					
				?>
			<td><?php echo $row['history_id']; ?></td>
			<td><?php echo $row['date_deleted']; ?></td>
			<td><?php echo $row['inv_code']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			<td><?php echo $row['mat_name']; ?></td>
			<td><?php echo $row['pt_origin']; ?></td>
			<td><?php echo $row['price']; ?></td>
			
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
	<?php include('footer.php');?>
	</html>