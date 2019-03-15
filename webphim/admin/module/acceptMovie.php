<?php
include'connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM movies_upload WHERE id=$id";
$result = mysqli_query($conn, $sql);
$movie = mysqli_fetch_assoc($result);



$sql= "INSERT INTO movies 
VALUES 
(NULL,'".$movie['name']."', 
'".$movie['name_english']."',
'".$movie['kind_id']."', 
'".$movie['id_loaiphim']."',
'".$movie['details']."',
'image/".$movie['images']."', 
'image/".$movie['poster']."',
 '".$movie['tag']."','".$movie['dienvien']."',
 '".$movie['daodien']."','".$movie['namsanxuat']."',
 '".$movie['quocgia']."','".$movie['thoiluong']."',
 0,0,0,0)";
mysqli_query($conn, $sql);
$ui=$movie['user_id'];
$sql3="UPDATE users SET balance=balance+2000 WHERE id='$ui'";
mysqli_query($conn,$sql3);

$sql2="SELECT * FROM movies ORDER BY id DESC LIMIT 0,1";
$kq1=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($kq1);

if($movie['high']=="" && $movie['low']!=""){
	$sql1="INSERT INTO movie_episode VALUES (NULL,'".$movie['ep_movie']."','".$row2['id']."','phim/".$movie['low']."',null)";
}
else if($movie['low']=="" && $movie['high']!=""){
	$sql1="INSERT INTO movie_episode VALUES (NULL,'".$movie['ep_movie']."','".$row2['id']."',null,'phim/".$movie['high']."')";
}
else{
	$sql1 = "INSERT INTO movie_episode VALUES (NULL,'".$row2['id']."', '".$movie['ep_movie']."','phim/".$movie['low']."','phim/".$movie['high']."')";
}


mysqli_query($conn, $sql1);


// $sql1 = "INSERT INTO movie_episode_upload 
// VALUES 
// (NULL,'".$movie['id']."', 
// '".$movie['ep_movie']."',
// 'phim/".$movie['low']."',
// 'phim/".$movie['high']."')";
// mysqli_query($conn, $sql1);

$sql1 = "DELETE FROM movies_upload WHERE id=$id";
mysqli_query($conn, $sql1);

mysqli_close($conn);

copy('../uploads/'.$movie['images'], '../Image/'.$movie['images']);
unlink('../uploads/'.$movie['images']);
copy('../uploads/'.$movie['poster'], '../Image/'.$movie['poster']);
unlink('../uploads/'.$movie['poster']);
copy('../uploads/'.$movie['low'], '../phim/'.$movie['low']);
unlink('../uploads/'.$movie['low']);
copy('../uploads/'.$movie['high'], '../phim/'.$movie['high']);
unlink('../uploads/'.$movie['high']);
header('Location: ?view=checkMovie');
?>
