<!DOCTYPE html>
<html>
<body>
	<?php 
	require_once('auth.php');
	include 'header.php';
	include('navfixed.php');
	?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="contentheader">
				<i></i>Delivery Tracking
			</div>
			<ul class="breadcrumb">
				<a href="index.php"><li>Dashboard</li></a>
				<li class="active">/Purchase Order Reports</li>
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
					<th>Action</th>
				</thead> 
				<tbody>
					<?php 
					include('../connect.php');
					$result2 = $db->prepare("SELECT * FROM po_tracking ORDER BY date_ordered DESC");
					$result2->execute();
					for($i=0; $row = $result2->fetch(); $i++){
						$tracking_id=$row['tracking_id'];
						?>
						<td><?php echo "<a href='preview_proj_site.php?id=cash&po_number={$row['po_number']}'>{$row['po_number']}</a><br>"; ?></td>
						<td><?php echo $row['date_ordered']; ?></td>
						<td><?php echo $row['suplier_name']; ?></td>
						<td><?php echo $row['destination']; ?></td>
						<td><?php echo $row['total_amount']; ?></td>
						<td><a  title="Click to remove the purchase order" href="deletepo.php?id=<?php echo $tracking_id ?>"><button class="btn btn-warning"><i class="icon-edit"></i> </button> </a>
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