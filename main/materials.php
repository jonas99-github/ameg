<html>
<head>
	<title>
		Warehouse
	</title>
	<?php 
	require_once('auth.php');
	include('header.php');
	include('../connect.php');
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
<body back>
	<?php include('navfixed.php');?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="contentheader">
				<i class="icon-table"></i> Warehouse Inventory
			</div>
			<div style="margin-top: -19px; margin-bottom: 21px;">
				<?php 
				$result = $db->prepare("SELECT * FROM mat_inv ORDER BY qty DESC");
				$result->execute();
				$rowcount = $result->rowcount();

				$result = $db->prepare("SELECT * FROM mat_inv where qty < 10 ORDER BY inv_id DESC");
				$result->execute();
				$rowcount123 = $result->rowcount();
				?>
				<div style="text-align:center;">
					Total Number of Materials:  <font color="green" style="font:bold 22px 'Aleo';">[<?php echo $rowcount;?>]</font>
				</div>
				<div style="text-align:center;">
					<font style="color:rgb(255, 95, 66);; font:bold 22px 'Aleo';">[<?php echo $rowcount123;?>]</font> Materials are below QTY of 10 
				</div>
			</div>
			<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search Product..." autocomplete="off" />
			<a rel="facebox" href="addmaterial.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Add Material</button></a><br><br>
			<a  href="warehouse_delivery.php"><Button type="submit" class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> View Purchase Orders</button></a><br><br>
			<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
				<thead>
					<tr>
						<th width="12%"> Inventory Code </th>
						<th width="14%"> Material Name </th>
						<th width="13%"> Category </th>
						<th width="6%"> Price </th>
						<th width="7%"> Point of Origin </th>
						<th width="5%"> Quantity Left </th>
						<th width="8%"> Action </th>
					</tr>
				</thead>
				<tbody>
					<?php
					include('../connect.php');
					$result = $db->prepare("SELECT * FROM mat_inv ORDER BY mat_name asc");
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
						$qty=$row['qty'];
						if ($qty<'10') {
							echo '<tr class="alert alert-warning record" style="color: #fff; background: #e53134">';
						}                  
						else {
							echo '<tr class="record">';
						}
						?>
						<td><?php echo $row['inv_code']; ?></td>
						<td><?php echo $row['mat_name']; ?></td>
						<td><?php echo $row['cat']; ?></td>
						<td><?php echo $row['price']; ?></td>
						<td><?php echo $row['supplier']; ?></td>
						<td><?php echo $row['qty']; ?></td>
						<td><a rel="facebox" title="Click to edit the product" href="editmaterial.php?id=<?php echo $row['inv_id']; ?>"><button class="btn btn-warning"><i class="icon-edit"></i> </button> </a>
							<a href="#" id="<?php echo $row['inv_id']; ?>" class="delbutton" title="Click to Delete the product"><button class="btn btn-danger"><i class="icon-trash"></i></button></a></td>
						</tr>
						<?php
					}
					?>			
				</tbody>
			</table>
			<div class="clearfix"></div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script type="text/javascript">
		$(function() {
			$(".delbutton").click(function(){
//Save the link in a variable called element
var element = $(this);
//Find the id of the link that was clicked
var del_id = element.attr("id");
//Built a url to send
var info = 'id=' + del_id;
if(confirm("Sure you want to delete this Product? There is NO undo!"))
{
	$.ajax({
		type: "GET",
		url: "deletematerial.php",
		data: info,
		success: function(){
		}
	});
	$(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
	.animate({ opacity: "hide" }, "slow");
}
return false;
});
		});
	</script>
</body>
<?php include('footer.php');?>
</html>