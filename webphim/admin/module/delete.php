<?php 
	include("connection.php");

	$sqlDel = "DELETE FROM users WHERE id=".$_GET["id"];
	mysqli_query($conn,$sqlDel);
	header("location:index.php?view=listUser");
?>