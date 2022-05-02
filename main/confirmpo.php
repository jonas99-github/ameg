	<html>
	<head>
	<title>Summary</title>
	</head>
	<body>
		<form action="save_transfer2tracking.php" method="post">

				<center><h4> Create Purchase Order?</h4></center><hr>
				<input type="hidden" name="date_ordered" value="<?php echo $_GET['date_ordered']; ?>" Readonly/>
				<input type="hidden" name="po_number" value="<?php echo $_GET['po_number']; ?>" Readonly /><br>
				<input type="hidden" name="mat_name" value="<?php echo $_GET['mat_name']; ?>" Readonly /><br>
				<input type="hidden" name="total_amount" value="<?php echo $_GET['total_amount']; ?>" />
				<center><h4> Purchase Order No. : <?php echo $_GET['po_number']; ?> </h4></center><hr>
				<center><h4> Destination : <?php echo $_GET['destination']; ?> </h4></center><hr>
				<input type="hidden" name="suplier_name" value="<?php echo $_GET['suplier_name']; ?>" Readonly /><br>
				<input type="hidden" name="destination" value="<?php echo $_GET['destination']; ?>" Readonly /><br>
				<input type="hidden" name="qty" value="<?php echo $_GET['qty']; ?>" Readonly /><br>

				<center>
					<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Yes</button>
				</center>

		</form>

	</body>
	</html>
