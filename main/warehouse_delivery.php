<html>
<head>
<title>
Purchase Orders
</title>
<?php
	require_once('auth.php');
?>
 <link href="css/bootstrap.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
 <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<!--sa poip up-->
<script src="jeffartagame.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
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
			<i class="icon-group"></i> Purchase Order Lists
			</div>
			<ul class="breadcrumb">
			<li><a href="index.php">Dashboard</a></li> /
			<li class="active">Purchase Order Lists</li>
			</ul>
<div style="margin-top: -19px; margin-bottom: 21px;">
<a  href="materials.php"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a><br><br>
<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: right;">
  <thead>
    <th>Purchase Order No.</th>
    <th>Date Ordered</th>
    <th>Supplier</th>
    <th>Destination</th>
    <th>Amount</th>
    <th>Add to Inventory</th>
  </thead> 
  <tbody> 
    <?php 
        include('../connect.php');
        $result2 = $db->prepare("SELECT * FROM po_tracking WHERE destination='warehouse'");
        $result2->execute();
        for($i=0; $row = $result2->fetch(); $i++){
          $po_number=$row['po_number'];
      ?>
      <td><?php echo "<a href='preview_proj_site.php?id=cash&po_number={$row['po_number']}'>{$row['po_number']}</a><br>"; ?></td>
      <td><?php echo $row['date_ordered']; ?></td>
      <td><?php echo $row['suplier_name']; ?></td>
      <td><?php echo $row['destination']; ?></td>
      <td><?php echo $row['total_amount']; ?></td>
      
      <td><a rel="facebox" title="Click to add the materials in the inventory" href="confirm_add2inv_warehouse.php?po_number=<?php echo $row['po_number']; ?>&project_name=<?php echo $row['destination']; ?>"><button class="btn btn-warning"><i class="icon-edit"></i> </button> </a>
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