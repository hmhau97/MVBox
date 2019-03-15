<?php
include'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM movies_upload WHERE id=$id";
$result = mysqli_query($conn, $sql);
$movie = mysqli_fetch_assoc($result);

$sql = "DELETE FROM movies_upload WHERE id=$id";
mysqli_query($conn, $sql);

mysqli_close($conn);

unlink('../uploads/'.$movie['images']);
unlink('../uploads/'.$movie['low']);

header('Location: ?view=checkMovie');
?>
