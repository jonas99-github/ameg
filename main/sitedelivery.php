<html>
<head>
  <title>
    Purchase Orders
  </title>
  <?php
  require_once('auth.php');
  include('header.php')
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
       <i class="icon-group"></i> Purchase Order Lists
     </div>
     <ul class="breadcrumb">
       <li><a href="project_site_inv.php?id=<?php echo $_GET['id']; ?>&project_name=<?php echo $_GET['project_name']; ?>">Inventory</a></li> /
       <li class="active">Purchase Order Lists</li>
     </ul>
     <div style="margin-top: -19px; margin-bottom: 21px;">
      <a  href="project_site_inv.php?id=<?php echo $_GET['id']; ?>&project_name=<?php echo $_GET['project_name']; ?>"><button class="btn btn-default btn-large" style="float: left;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a><br><br>
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
          $project_name=$_GET['project_name'];
          $result2 = $db->prepare("SELECT * FROM po_tracking WHERE destination= :userid");
          $result2-> bindParam(':userid', $project_name);
          $result2->execute();
          for($i=0; $row = $result2->fetch(); $i++){
            ?>
            <td><?php echo "<a href='preview_proj_site.php?id=cash&po_number={$row['po_number']}'>{$row['po_number']}</a><br>"; ?></td>
            <td><?php echo $row['date_ordered']; ?></td>
            <td><?php echo $row['suplier_name']; ?></td>
            <td><?php echo $row['destination']; ?></td>
            <td><?php echo $row['total_amount']; ?></td>
            <?php
            $po_number=$row['po_number'];
            ?>
            <td><a rel="facebox" title="Click to add the materials in the inventory" href="confirm_add2inv_psite.php?id=<?php echo $_GET['id']; ?>&project_name=<?php echo $_GET['project_name']; ?>&po_number=<?php echo $po_number ?>"><button class="btn btn-warning"><i class="icon-edit"></i> </button> </a>
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
</html>