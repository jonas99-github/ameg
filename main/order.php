<!DOCTYPE HTML>
<html>
<body>
	<?php include ('header.php');
	include('navfixed.php');
	?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="contentheader">
				<i class="icon-money"></i>Create Purchase Order
			</div>
			<ul class="breadcrumb">
				<a href="index.php"><li>Dashboard</li></a>
				<li class="active"> / Ordering</li>
			</ul>
			<div style="margin-top: -19px; margin-bottom: 21px;">
				<a  href="index.php"><button class="btn btn-default btn-large" style="float: none;"><i class="icon icon-circle-arrow-left icon-large"></i> Back</button></a>
				<div style="float: right; margin-top: 6px; margin-right: 6px;">
					<a rel="facebox" a href="projectbudget.php"><button class="btn btn-info" style="width: 130px; height:35px; margin-top: 1px; margin-left:210px; position: right;"><i class="icon-plus-sign icon-large"></i>View Budget</button></a><br><br>
					<a href="orderhistory.php?po_number=<?php echo $_GET['po_number']; ?>"><button class="btn btn-info" style="width: 130px; height:35px; margin-top: 1px; margin-left:210px; position: right;"><i class="icon-plus-sign icon-large"></i>Order History</button></a><br><br>
				</div>
			</div>
			<!--Input Purchase Order Details-->
			<form action="savepurchaseorder.php" method="post">
				<input type="hidden" name="pid" value="<?php echo $_GET['id']; ?>" />
				<input type="hidden" name="po_number" value="<?php echo $_GET['po_number']; ?>" />
				<?php
				include ('../connect.php');
				$query = "SELECT mat_name FROM mat_inv ";
				$result = mysqli_query($conn, $query);
				?>
				<span>Supplier    :</span><select name="supplier_name" style="width:600px; margin-left:46px;" required>
					<option></option>
					<?php
					include('../connect.php');
					$result = $db->prepare("SELECT * FROM supliers");
					$result->bindParam(':userid', $res);
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
						?>
						<option value="<?php echo $row['suplier_id'];?>"><?php echo $row['suplier_name']; ?> - <?php echo $row['suplier_address']; ?> - <?php echo $row['suplier_contact']; ?></option>
						<?php
					}
					?>
				</select>
				<br>
				<span>Material    :</span><select name="mat_name1" style="width:600px; margin-left:48px;" required>
					<option></option>
					<?php
					include('../connect.php');
					$result = $db->prepare("SELECT * FROM mat_inv");
					$result->bindParam(':userid', $res);
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
						?>
						<option value="<?php echo $row['inv_id'];?>"><?php echo $row['inv_code']; ?> - Material Name: <?php echo $row['mat_name']; ?> - Category: <?php echo $row['cat']; ?> | Price: <?php echo $row['price']; ?></option>
						<?php
					}
					?>
				</select>
				<input type="number" name="qty" value="" min="1" placeholder="Qty" autocomplete="off" style="width: 60px; height: 30px; margin-top: 10px;margin-left:10px;" required><br>
				<span>Destination  :</span><select name="destination" style="width:600px; margin-left:22px;" required>
					<option></option>
					<?php
					include('../connect.php');
					$result = $db->prepare("SELECT * FROM projectsite_table");
					$result->bindParam(':userid', $res);
					$result->execute();
					for($i=0; $row = $result->fetch(); $i++){
						?>
						<option value="<?php echo $row['project_name'];?>"><?php echo $row['project_name'];?> - <?php echo $row['location']; ?> - <?php echo $row['status']; ?></option>
						<?php
					}
					?>
					<option>Warehouse</option>
				</select>
				<br>
				<span>Date Ordered: </span><input type="date" style="width:265px; height:30px;" placeholder="09/13/2017" class="tcal tcalInput"  name="date_ordered" required></input>
				<textarea name= "comments" placeholder="Comments/Remarks" style="margin-left:99px;"></textarea>
				<input type = "hidden" name="amount" value="<?php echo $_GET['amount']; ?>" /><br>
				<input type = "hidden" name="po_id" value="<?php echo $_GET['po_id']; ?>" /><br>
				<button type="submit" class="btn btn-info" style="width: 123px; height:35px; margin-top: 1px; position: right;"><i class="icon-plus-sign icon-large"></i>Add</button><br>
			</form>
			<table class="hoverTable" id="resultTable" data-responsive="table" style="text-align: right;">
				<thead>
					<th>Inventory Code</th>
					<th>Item Name</th>
					<th>Category</th>
					<th>Supplier</th>
					<th>Comments/Remarks</th>
					<th>Destination</th>
					<th>Date Ordered</th>
					<th>Price</th>
					<th>Qty</th>
					<th>Amount</th>
					<th>Action</th>
				</thead>
				<tbody>
					<tr>
						<?php
						include('../connect.php');
						$id=$_GET['po_number'];
						$result2 = $db->prepare("SELECT * FROM purchase_orders WHERE po_number= :userid");
						$result2->bindParam(':userid', $id);
						$result2->execute();
						for($i=0; $row = $result2->fetch(); $i++){
							?>
							<td><?php echo $row['inv_code']; ?></td>
							<td><?php echo $row['mat_name']; ?></td>
							<td><?php echo $row['cat']; ?></td>
							<td><?php echo $row['suplier_name']; ?></td>
							<td><?php echo $row['comments']; ?></td>
							<td><?php echo $row['destination']; ?></td>
							<td><?php echo $row['date_ordered']; ?></td>
							<td><?php echo $row['price']; ?></td>
							<td><?php echo $row['qty']; ?></td>
							<td><?php echo $row['amount']; ?></td>
							<input type="hidden" name="po_number" value="<?php echo $_GET['po_number']; ?>" />
							<td width="90"><a href="delete_order.php?po_id=<?php echo $row['po_id']; ?>&po_number=<?php echo $_GET['po_number'];?>&inv_code=<?php echo $row['inv_code']; ?>&mat_name=<?php echo $row['mat_name']; ?>&cat=<?php echo $row['cat']; ?>&suplier_name=<?php echo $row['suplier_name'];?>&comments=<?php echo $row['comments'];?>&destination=<?php echo $row['destination'];?>&date_ordered=<?php echo $row['date_ordered'];?>&price=<?php echo $row['price'];?>&qty=<?php echo $row['qty'];?>&amount=<?php echo $row['amount'];?>"><button class="btn btn-mini btn-warning"><i class="icon icon-remove"></i> Cancel </button></a></td>
						</tr>
						<?php
						$mat_name=$row['mat_name'];
						$suplier_name=$row['suplier_name'];
						$date_ordered=$row['date_ordered'];
						$price=$row['price'];
						$qty=$row['qty'];
						$destination=$row['destination'];
					}
					?>
					<thead>
						<tr>
							<th colspan="9" style="font-size: 12px; text-align: right;"><strong style="font-size: 12px; color: 'WHITE';">TOTAL AMOUNT:</strong></th>
							<td style="text-align: center;"><strong style="font-size: 12px; color: #222222;">
								<?php
								$totalamount = $_GET['po_number'];
								$result4 = $db->prepare("SELECT sum(amount) FROM purchase_orders WHERE po_number = :a");
								$result4->bindParam(':a', $totalamount);
								$result4-> execute();
								for($i=0; $row4 = $result4->fetch();$i++){
									$row5 = $row4['sum(amount)'];
									echo $row5;
								}
								?>
							</td><th colspan="1"></th>
						</tr>
					</thead>
				</tbody>
			</table><br><br>
			<a rel="facebox" href="confirmpo.php?pid=<?php echo $_GET["id"]?>&po_number=<?php echo $_GET["po_number"]?>&total_amount=<?php echo $row5?>&date_ordered=<?php echo $date_ordered?>&mat_name=<?php echo $mat_name?>&suplier_name=<?php echo $suplier_name?>&price=<?php echo $price?>&qty=<?php echo $qty?>&destination=<?php echo $destination?>"><button class="btn btn-success btn-large btn-block"><i class="icon icon-save icon-large"></i>SAVE</button></a>
			<div class="clearfix"></div>
		</div>
	</div>
</body>
<?php include('footer.php');?>
</html>
