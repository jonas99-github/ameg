<!DOCTYPE html>
<html>
<head>
<?php 
require_once ('auth.php');
include('header.php');
?>
<title>
	Purchase Order Preview
</title>
<script language="javascript">
	function Clickheretoprint()
	{ 
		var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
		disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
		var content_vlue = document.getElementById("content").innerHTML; 
		var docprint=window.open("","",disp_setting); 
		docprint.document.open(); 
		docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size: 22px; font-family: arial;">');          
		docprint.document.write(content_vlue); 
		docprint.document.close(); 
		docprint.focus(); 
	}
</script>
<body>
	<?php
	include('../connect.php');
	$po_number=$_GET['po_number'];
	$result = $db->prepare("SELECT * FROM purchase_orders WHERE po_number= :userid");
	$result->bindParam(':userid', $po_number);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
		$inv_code=$row['inv_code'];
		$mat_name=$row['mat_name'];
		$qty=$row['qty'];
		$price=$row['price'];
		$amount=$row['amount'];
		$date=$row['date_ordered'];
		$destination=$row['destination'];
	}
	?>
	<?php include('navfixed.php');?>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">   
			</div><!--/span-->
			<div class="span10">
				<br><br><br><br><br><br>
				<div class="content" id="content">
					<div style="margin: 0 auto; padding: 20px; width: 900px; font-weight: normal;">
						<div style="width: 100%; height: 190px;" >
							<div style="width: 900px; float: left;">
								<center><div style="font:bold 25px 'Aleo';">Purchase Order</div>
									AMEG Construction and Supply	<br>
									Purok 4, Barriada, Gogon, Legaspi City, Albay	<br>	<br>
								</center>
							</div><br><br><br><br><br><br><br><br>
							<div style="width: 400px; float: left; height: 70px;">
								<table cellpadding="3" cellspacing="0" style="font-family: arial; font-size: 22px;text-align:left;width : 100%;">
									<tr>
										<td>Purchase Order No. :</td>
										<td><?php echo $po_number ?></td>
									</tr>
									<tr>
										<td>Date :</td>
										<td><?php echo $date ?></td>
									</tr>
								</table>
							</div>
							<div class="clearfix"></div>
						</div><br><br><br><br><br><br><br><br>
						<div style="width: 100%; margin-top:-70px;">
							<table border="1" cellpadding="4" cellspacing="0" style="font-family: arial; font-size: 22px;	text-align:left;" width="100%">
								<thead>
									<tr>
										<th width="90"> Inventory Code </th>
										<th> Material Name </th>
										<th> Qty </th>
										<th> Destination </th>
										<th> Price </th>
										<th> Amount </th>
									</tr>
								</thead>
								<tbody>
									<?php
									include('../connect.php');
									$po_number=$_GET['po_number'];
									$result = $db->prepare("SELECT * FROM purchase_orders WHERE po_number= :userid");
									$result->bindParam(':userid', $po_number);
									$result->execute();
									for($i=0; $row = $result->fetch(); $i++){
										?>
										<tr class="record">
											<td><?php echo $row['inv_code']; ?></td>
											<td><?php echo $row['mat_name']; ?></td>
											<td><?php echo $row['qty']; ?></td>
											<td><?php echo $row['destination']; ?></td>
											<td>
												<?php
												$ppp=$row['price'];
												echo formatMoney($ppp, true);
												?>
											</td>
											<td>
												<?php
												$dfdf=$row['amount'];
												echo formatMoney($dfdf, true);
												?>
											</td>
										</tr>
										<?php
									}
									?>
									<tr>
										<td colspan="5" style=" text-align:right;"><strong style="font-size: 22px;">Total: &nbsp;</strong></td>
										<td colspan="2"><strong style="font-size: 22px;">
											<?php
											$sdsd=$_GET['po_number'];
											$resultas = $db->prepare("SELECT sum(amount) FROM purchase_orders WHERE po_number= :a");
											$resultas->bindParam(':a', $sdsd);
											$resultas->execute();
											for($i=0; $rowas = $resultas->fetch(); $i++){
												$fgfg=$rowas['sum(amount)'];
												echo formatMoney($fgfg, true);
											}
											?>
										</strong></td>
									</tr>
									<tr>
										<td colspan="5" style=" text-align:right;"><strong style="font-size: 22px; color: #222222;">
											<font style="font-size:25px;">

											</strong></td>
											<td colspan="2"><strong style="font-size: 22px; color: #222222;">
												<?php
												function formatMoney($number, $fractional=false) {
													if ($fractional) {
														$number = sprintf('%.2f', $number);
													}
													while (true) {
														$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
														if ($replaced != $number) {
															$number = $replaced;
														} else {
															break;
														}
													}
													return $number;
												}
												?>
											</strong></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="pull-right" style="margin-right:100px;">
					<a href="javascript:Clickheretoprint()" style="font-size:25px;"><button class="btn btn-success btn-large"><i class="icon-print"></i> Print</button></a>
				</div>	
			</div>
		</div>
</body>
</head>
</html>

