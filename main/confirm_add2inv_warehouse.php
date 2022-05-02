<html>
<head>
	<title>Summary</title>
</head>  
<body>
	<?php
	include('../connect.php');
	$po_number=$_GET['po_number'];
	$sql="SELECT * FROM po_tracking WHERE po_number='$po_number'";
	$result=$db->prepare($sql);
	$result->execute();
	$row=$result->fetch();
	$supplier=$row['suplier_name'];
	$total_amount=$row['total_amount'];
?>
	<form action="save_del_order_warehouse.php?project_name=<?php echo $_GET['project_name']; ?>&po_number=<?php echo $_GET['po_number']; ?>" method="post">
		<center><h4><i class="icon-plus-sign icon-large"></i> Input the Delivery Order</h4></center>
		<hr>
		<div id="ac">
			<span>Warehouse : </span><input type="text" style="width:265px; height:30px;" value="Warehouse" name="warehouse" Required readonly><br>
			<span>Date and Time of Arrival: </span><input type="text" style="width:265px; height:30px;" placeholder="09/13/2017" class="tcal tcalInput"  name="date_arrival" value="<?php date_default_timezone_set('asia/manila'); $date = date('m/d/Y h:i:s: a', time()); echo $date; ?>" Required Readonly></input><br>
			<span>Purchase Order : </span><input type="text" style="width:265px; height:30px;" name="po_number" value="<?php echo $po_number ?>" Required Readonly/><br>
			<span>Delivery Order No. : </span><input type="text" style="width:265px; height:30px;" value="" name="del_order" Required ><br>
			<span>Supplier : </span><input type="text" style="width:265px; height:30px;" name="supplier" value="<?php echo $supplier ?>" Required Readonly/><br>
			<span>Total Amount : </span><input type="number" style="width:265px; height:30px;" name="total" value="<?php echo $total_amount ?>"Required Readonly/><br>
			<button class="btn btn-success btn-block btn-large" style="width:10px align = 'center'; "><i class="icon icon-save icon-large"></i> Save</button>
		</div> 
	</div>
</form>
</body> 
</html> 
