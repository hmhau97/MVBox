<?php
include'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM movie_episode_upload WHERE id=$id";
$result = mysqli_query($conn, $sql);
$movie = mysqli_fetch_assoc($result);

$sql1 = "DELETE FROM movie_episode_upload WHERE id=$id";
mysqli_query($conn, $sql1);

mysqli_close($conn);

unlink('../uploads/'.$movie['images']);
unlink('../uploads/'.$movie['low']);

header('Location: ?view=checkEp_Movie');
?>
