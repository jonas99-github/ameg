<html>
<?php
  require_once('auth.php');
  include('header.php');
?>
<head> 
</head> 
<body>
<form action="save_del_order.php?project_name=<?php echo $_GET['project_name']; ?>" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Input the Invoice</h4></center>
<hr>
<div id="ac">
  <span>Project Site : </span><input type="text" style="width:265px; height:30px;" value="<?php echo $_GET['project_name']; ?>" name="project_name" Required readonly><br>
<span>Date Arrival: </span><input type="date" style="width:265px; height:30px;" placeholder="09/13/2017" class="tcal tcalInput"  name="date_arrival" ></input><br>
<span>Delivery Order No. : </span><input type="text" style="width:265px; height:30px;" value="" name="del_order" Required ><br>
<span>Supplier : </span><input type="text" style="width:265px; height:30px;" name="supplier" Required/><br>
<span>Total Amount : </span><input type="number" style="width:265px; height:30px;" name="total" Required/><br>
<button class="btn btn-success btn-block btn-large" style="width:10px align = 'center'; "><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>
</body>
<?php include('footer.php');?>
</html>