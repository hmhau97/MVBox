<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
mysqli_set_charset($conn, "utf8");
date_default_timezone_set("Asia/Ho_Chi_Minh");
//Choose Database
mysqli_select_db($conn,"webphim");
?>
