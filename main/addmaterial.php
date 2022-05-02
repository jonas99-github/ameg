<html>
<?php
require_once('auth.php');
?>
<head>
</head>
<body>
  <form action="savematerial.php" method="post">
    <center><h4><i class="icon-plus-sign icon-large"></i> Add Material</h4></center>
    <hr>
    <div id="ac">
      <span>Inventory Code : </span><input type="text" style="width:265px; height:30px;" value="AMEG-<?php 
      $prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,4));?>" name="inv_code" Readonly Required ><br>
      <span>Item Name : </span><input type="text" style="width:265px; height:30px;" name="mat_name" Required/><br>
      <span>Category : </span>
      <select name="cat"  style="width:265px; height:30px; margin-left:-5px;" >
        <option></option>
        <?php
        include('../connect.php');
        $result = $db->prepare("SELECT * FROM category");
        $result->bindParam(':userid', $res);
        $result->execute();
        for($i=0; $row = $result->fetch(); $i++){
          ?>
          <option><?php echo $row['name']; ?></option>
          <?php
        }
        ?>
      </select><br>
      <span>Original Price : </span><input type="text" id="txt2" style="width:265px; height:30px;" name="price" onkeyup="sum();" Required><br>
      <span>Supplier : </span>
      <select name="supplier"  style="width:265px; height:30px; margin-left:-5px;" >
        <option></option>
        <?php
        include('../connect.php');
        $result = $db->prepare("SELECT * FROM supliers");
        $result->bindParam(':userid', $res);
        $result->execute();
        for($i=0; $row = $result->fetch(); $i++){
          ?>
          <option><?php echo $row['suplier_name']; ?></option>
          <?php
        }
        ?>
      </select><br>
      <span>Quantity : </span><input type="number" style="width:265px; height:30px;" min="0" id="txt11" onkeyup="sum();" name="qty" Required ><br>
      <button class="btn btn-success btn-block btn-large" style="width:10px align = 'center'; "><i class="icon icon-save icon-large"></i> Save</button>
    </div>
  </div>
</form>
</body>
<?php include('footer.php');?>
</html>