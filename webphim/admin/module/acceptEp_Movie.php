<?php
include'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM movie_episode_upload WHERE id=$id";
$result = mysqli_query($conn, $sql);
$movie = mysqli_fetch_assoc($result);
if($movie['high']=="" && $movie['low']!=""){
	$sql1="INSERT INTO movie_episode 
VALUES 
(NULL,'".$movie['ep_film']."', 
'".$movie['id_film']."',
'phim/".$movie['low']."',null)";
}
else if($movie['low']=="" && $movie['high']!=""){
	$sql1="INSERT INTO movie_episode 
VALUES 
(NULL,'".$movie['ep_film']."', 
'".$movie['id_film']."',
null,'phim/".$movie['high']."')";
}
else {
	$sql1 = "INSERT INTO movie_episode 
VALUES 
(NULL,'".$movie['ep_film']."', 
'".$movie['id_film']."',
'phim/".$movie['low']."','phim/".$movie['high']."')";
}

mysqli_query($conn, $sql1);
$ui=$movie['user_id'];
$sql3="UPDATE users SET balance=balance+2000 WHERE id='$ui'";
mysqli_query($conn,$sql3);

$sql = "DELETE FROM movie_episode_upload WHERE id=$id";
mysqli_query($conn, $sql);

mysqli_close($conn);

copy('../uploads/'.$movie['low'], '../phim/'.$movie['low']);
unlink('../uploads/'.$movie['low']);
copy('../uploads/'.$movie['high'], '../phim/'.$movie['high']);
unlink('../uploads/'.$movie['high']);
header('Location: ?view=checkMovie');
?>
