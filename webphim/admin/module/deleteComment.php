<?php
$id = $_GET['id'];

include'connection.php';

$sql = "DELETE FROM movies_comment WHERE id=$id";
mysqli_query($conn, $sql);
header('Location: ?view=commentList');

mysqli_close($conn);
?>
