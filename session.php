<?php

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "amegdb");

session_start();// Starting Session

// Storing Session
$user_check = $_SESSION['login_admin'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT * from user where username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
$login_type = $row['if_admin'];
?> 