<html>
<head> 
	<title>
		Project Site
	</title>
	<?php 
	require_once('auth.php');
	include ('header.php');
	include('navfixed.php');
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
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="contentheader">
				<i class="icon-table"></i> Project Site Inventory
			</div>
			<ul class="breadcrumb">
				<li>   
					<?php
					include'../connect.php';
					if(isset($_GET['project_name'])){
						$project_name=$_GET['project_name'];
						$sql = "SELECT * FROM projectsite_table WHERE project_name='$project_name' ";
						$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
						$row = mysqli_fetch_array($result);
						echo $row['project_name'];
						$site_id=$row['site_id'];
					}
					elseif (empty($_GET['id'])){
						include '../process.php';
						$sql1 = "SELECT * FROM projectsite_table WHERE project_manager = '$login_session'";
						$result = mysqli_query($conn, $sql1) or die("Bad Query: $sql1");
						$row = mysqli_fetch_array($result);
						echo $row['project_name'];
					}
					else{
						echo "Error showing project name";
					}
					?>	
				</li> 
				<li class="active"> </li>
			</ul>
			<div style="margin-top: -19px; margin-bottom: 21px;">
				<a  href="sitelist_qs.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a><br>
				<?php 
				include('../connect.php');
				$result = $db->prepare("SELECT * FROM projectsite_inv");
				$result->execute();
				$rowcount = $result->rowcount();

				$result = $db->prepare("SELECT * FROM projectsite_inv where qty < 10");
				$result->execute();
				$rowcount123 = $result->rowcount();
				?>
				<br><br> 
				<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search Product..." autocomplete="off" />
				<br><br>
				<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
					<thead>
						<tr>
							<th width="12%"> Inventory Code </th>
							<th width="5%"> Quantity Left </th>
							<th width="14%"> Material Name </th>
							<th width="7%"> Point of Origin </th>
							<th width="6%"> Price </th>
						</tr>
					</thead>
					<tbody>
					<?php
						include('../connect.php');
						include('../process.php');
						$position=$_SESSION['SESS_LAST_NAME'];
						$project_name=$_GET['project_name'];
						if($position=='Quantity Surveyor') {		
							$result = $db->prepare("SELECT * FROM projectsite_inv WHERE site_name='$project_name' ORDER BY mat_name DESC");
							$result->execute();
							for($i=0; $row = $result->fetch(); $i++){
								if ($row >10) {
									echo '<tr class="record">';
								}                                            
								else {
									echo '<tr class="alert alert-warning record" style="color: #fff; background:rgb(255, 95, 66);">';
								}
								?>
								<td><?php echo $row['inv_code']; ?></td>
								<td><?php echo $row['qty']; ?></td>
								<td><?php echo $row['mat_name']; ?></td>
								<td><?php echo $row['pt_origin']; ?></td>
								<td><?php echo $row['price']; ?></td>
								</tr>
								<?php
							}
						}
						if($position=='Project Site Manager') {
							$result = $db->prepare("SELECT * FROM projectsite_inv where mngr_engr = '$login_session' ");
							$result->execute();
							for($i=0; $row = $result->fetch(); $i++){
								if ($row ==true) {
									echo '<tr class="record">';
								}                                  
								else {
									echo '<tr class="alert alert-warning record" style="color: #fff; background:rgb(255, 95, 66);">';
								}		 							  
								?>
								<td><?php echo $row['inv_code']; ?></td>
								<td><?php echo $row['date_arrival']; ?></td>
								<td><?php echo $row['qty']; ?></td>
								<td><?php echo $row['mat_name']; ?></td>
								<td><?php echo $row['cat']; ?></td>
								<td><?php echo $row['pt_origin']; ?></td>
								<td><?php echo $row['delivery_no']; ?></td>
								<td><?php echo $row['comments']; ?></td>
								<td><?php echo $row['price']; ?></td>	
								<td><a rel="facebox" title="Click to edit the product" href="editprojectsite_mat.php"><button class="btn btn-warning"><i class="icon-edit"></i> </button> </a>
									<a href="#" id="<?php echo $row['product_id']; ?>" class="delbutton" title="Click to Delete the product"><button class="btn btn-danger"><i class="icon-trash"></i></button></a></td>
								</tr>
								<?php
								}
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
		url: "deletepsite_mat.php",
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
		<?php include('footer.php');?>
</body>
</html>