	<html>
	<head>
	<title>
	Project Site
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
	<?php
	function createRandomPassword() {
		$chars = "003232303232023232023456789";
		srand((double)microtime()*1000000);
		$i = 0;
		$pass = '' ;
		while ($i <= 7) {
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$pass = $pass . $tmp;
			$i++;
		}
		return $pass;
	}
	$finalcode='RS-'.createRandomPassword();
	?>
	<body>
	<?php include('navfixed.php');?>
	<div class="container-fluid">
	      <div class="row-fluid">
		<div class="contentheader">
				<i class="icon-table"></i> Project Site list
				</div>
				<ul class="breadcrumb">
				<li><a href="index.php">Dashboard</a></li> /
				<li class="active">Site list</li>
				</ul>
	<div style="margin-top: -19px; margin-bottom: 21px;">
	<a  href="index.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a><br>
				<?php 
				include('../connect.php');
					$result = $db->prepare("SELECT * FROM projectsite_table");
					$result->execute();
					$rowcount = $result->rowcount();	
				?>
				<br><br>
				<div style="text-align:left;">
				Total Number of Project Sites:  <font color="green" style="font:bold 22px 'Aleo';">[<?php echo $rowcount;?>]</font>
				</div>
				<br><br>
	<input type="text" style="height:35px; color:#222;" name="filter" value="" id="filter" placeholder="Search..." autocomplete="off" />
	<br><br>
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
					$project_name=$row['project_name'];
					$site_id=$row['site_id'];
				?>
			<td><?php echo $row['project_site_id']; ?></td>
			<td><?php echo "<a href='project_site_inv_qs.php?id=site_id=$site_id&project_name=$project_name'>{$row['project_name']}</a><br>"; ?></td>
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
	 if(confirm("Sure you want to delete this Project Site? There is NO undo!"))
			  {
	 $.ajax({
	   type: "GET",
	   url: "deleteprojectsite.php",
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