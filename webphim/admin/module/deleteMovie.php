<?php 
	include("connection.php");

	$sqlDel = "DELETE FROM movies WHERE id=".$_GET["id"];
	mysqli_query($conn,$sqlDel);
	$sql2="DELETE FROM movie_episode WHERE id_film=".$_GET["id"];
	mysqli_query($conn,$sql2);
	header("location:index.php?view=listMovie");
?>