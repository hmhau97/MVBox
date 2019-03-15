<?php
$id = $_GET['id'];

include'connection.php';

$sql = "DELETE FROM movie_kind_names WHERE id=$id";
mysqli_query($conn, $sql);
header('Location: ?view=listMovieKind');

mysqli_close($conn);
?>
