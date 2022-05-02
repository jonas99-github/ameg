<?php
//Start session
session_start();
//Array to store validation errors
$errmsg_arr = array();
//Validation error flag 
$errflag = false;
//Connect to mysql server
$link = mysqli_connect('localhost','root',"");
if(!$link) {
	die('Failed to connect to server: ' . mysqli_error());
}
//Select database
$db = mysqli_select_db($link, 'amegdb');
if(!$db) {
	die("Unable to select database");
}
$username = $_POST['username'];
$password2 = $_POST['password'];
//Create query
$result=mysqli_query($link, "SELECT * FROM user WHERE username='$username' AND password='$password2'") or die("Failed to query database".mysql_error());
//Check whether the query was successful or not
if($result) {
	if(mysqli_num_rows($result) > 0) {
		//Login Successful
		session_regenerate_id();
		$member = mysqli_fetch_assoc($result);
		$_SESSION['SESS_MEMBER_ID'] = $member['id'];
		$_SESSION['SESS_FIRST_NAME'] = $member['name'];
		$_SESSION['SESS_LAST_NAME'] = $member['position'];
		$position=$_SESSION['SESS_LAST_NAME'];
		$name=$_SESSION['SESS_FIRST_NAME'];
		session_write_close();
		if($position=='Project Site Manager'){
			header("location: main/index.php?position=$position&name=$name");
		}
		else{
			header("location: main/index.php?position=<php $position ?>&name=<?php echo $name ?>");
		}
		exit();
	}else {
		//Login failed
		echo 'Wrong login details';
		echo "<br>";
		echo '<a href="index.php">Go back</a>';            
	}
}else { 
	die("Query failed");
}
?>