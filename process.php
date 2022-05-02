<?php
$user_check="";
$user_check = $_SESSION['SESS_FIRST_NAME'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT * FROM user WHERE name = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$name = $row['name'];
?>  