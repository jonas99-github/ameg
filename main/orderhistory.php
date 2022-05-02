<!DOCTYPE html>
<html>
<body>
	<?php 
	require_once('auth.php');
	include ('header.php');
	include('navfixed.php');
	?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="contentheader">
				<i></i>Order History
			</div>
			<ul class="breadcrumb">
				<a href="index.php?po_number=<?php echo $_GET['po_number']; ?>"><li>Dashboard</li></a>
				<a href="order.php?po_number=<?php echo $_GET['po_number']; ?>"><li> / Ordering</li></a>
				<li class="active">/ Purchase Orders</li>
			</ul>
			<div style="margin-top: -19px; margin-bottom: 21px;">
				<div style="float: right; margin-top: 6px; margin-right: 6px;">
				</div>
			</div>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$('a[rel*=facebox]').facebox({
						loadingImage : 'src/loading.gif',
						closeImage   : 'src/closelabel.png'
					})
				})
			</script>
			<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: right;">
				<thead>
					<th>Purchase Order No.</th>
					<th>Date Ordered</th>
					<th>Supplier</th>
					<th>Destination</th>
					<th>Amount</th>
				</thead> 
				<tbody>
					<?php 
					include('../connect.php');
					$result2 = $db->prepare("SELECT * FROM order_history ORDER BY date_ordered DESC");
					$result2->execute();
					for($i=0; $row = $result2->fetch(); $i++){
						$tracking_id=$row['oh_id'];
						?>
						<td><?php echo "<a href='preview_proj_site.php?id=cash&po_number={$row['po_number']}'>{$row['po_number']}</a><br>"; ?></td>
						<td><?php echo $row['date_ordered']; ?></td>
						<td><?php echo $row['suplier_name']; ?></td>
						<td><?php echo $row['destination']; ?></td>
						<td><?php echo $row['total_amount']; ?></td>
					</tr>
					<?php
				}
				?>
				<thead>
					<tr>
						<th colspan="8" style="font-size: 12px; text-align: right;"><strong></strong></th>
					</tr>
				</thead>
			</tbody>
		</table>
	</div>
</div>
</body>
<?php include('footer.php');?>
</html>