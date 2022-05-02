<html>
<head> 
	<title>
		Project Site
	</title>
	<?php 
	require_once('auth.php');
	include('header.php');
	?>
</head>
<body>
	<?php include('navfixed.php'); ?>
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
					else{
						echo "Error showing project name";
					}
					?>	
				</li> 
				<li class="active"> </li>
			</ul>
			<div style="margin-top: -19px; margin-bottom: 21px;">
				
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
				<a href="sitedelivery.php?id=site_id=<?php echo $site_id ?>&project_name=<?php echo $project_name?>"><Button class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> Pending Deliveries </button></a><br><br>
				<a href="history_psite.php?id=site_id=<?php echo $site_id ?>&project_name=<?php echo $project_name?>"><Button class="btn btn-info" style="float:right; width:230px; height:35px;" /><i class="icon-plus-sign icon-large"></i> View History </button></a><br><br>
				<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: left;">
					<thead>
						<tr>
							<th width="12%"> Inventory Code </th>
							<th width="5%"> Quantity Left </th>
							<th width="14%"> Material Name </th>
							<th width="7%"> Point of Origin </th>
							<th width="6%"> Price </th>
							<th width="8%"> Action </th>
						</tr>
					</thead> 
					<tbody>
						<?php
						include('../connect.php');
						include('../process.php');
						$position=$_SESSION['SESS_LAST_NAME'];
						$project_name=$_GET['project_name'];

						if($position=='Project Site Manager') {
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
								<td><a rel="facebox" title="Click to edit the material" href="editprojectsite_mat.php?id=<?php echo $row['mat_id']; ?>&project_name=<?php echo $project_name ?>"><button class="btn btn-warning"><i class="icon-edit"></i> </button> </a>
									<a href="deletepsite_mat.php?id=<?php echo $row['mat_id']; ?>&inv_code=<?php echo $row['inv_code']; ?>&qty=<?php echo $row['qty']; ?>&mat_name=<?php echo $row['mat_name']; ?>&pt_origin=<?php echo $row['pt_origin']; ?>&price=<?php echo $row['price']; ?>&project_name=<?php echo $project_name ?>" class="delbutton" title="Click to Delete the product"><button class="btn btn-danger"><i class="icon-trash"></i></button></a></td>
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
		<?php include('footer.php');?>
	</body>
	</html>