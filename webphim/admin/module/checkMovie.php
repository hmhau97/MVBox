<div style="width:100%">

<?php
include'connection.php';

$sql = "SELECT COUNT(0) FROM movies_upload";
$result = mysqli_query($conn, $sql);
$num = mysqli_fetch_row($result)[0];

$movies_upload = array();

$sql = "SELECT * FROM movies_upload";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	$row['kind'] = explode(',', $row['kind_id']);

	foreach ($row['kind'] as $k => $v) {
		$row['kind'][$k] = $movie_kind_name[$v];
	}

	$movies_upload[] = $row;
}
?>

<h2 class="col-md-12 text-center">
	<b>Có <?php echo $num;?> phim đang chờ xét duyệt !</b>
</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th width="30px">ID</th>
			<th width="50px">Tên phim</th>
			<th width="80px">Tên Tiếng Anh</th>
			<th width="50px">Thể loại</th>
			<th width="50px">Loại phim</th>
			<th class="text-center" width="100px">Giới thiệu phim</th>
			<th class="text-center" width="100px">Ảnh phim</th>
			<th class="text-center" width="100px"><center>Chất lượng thấp</center></th>
			<th class="text-center" width="100px"><center>Chất lượng cao</center></th>
			<th width="30px">Tag</th>
			<th width="50px">Diễn viên</th>
			<th width="50px">Đạo diễn</th>
			<th width="50px">Năm sản xuất</th>
			<th width="30px">Thời lượng</th>
			<th width="50px">Quốc gia</th>
			<th width="30px">Tập phim</th>
			<th class="text-center" width="50px">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($movies_upload as $k => $v) {
			$a=$v['id_loaiphim'];
			$sql="SELECT * FROM loaiphim WHERE loaiphim.id=$a";
			$sqlkq=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($sqlkq);
			
			$b=$v['quocgia'];
			$sql1="SELECT * FROM quocgia WHERE quocgia.id=$b";
			$sqlkq1=mysqli_query($conn,$sql1);
			$row1=mysqli_fetch_array($sqlkq1);
			echo'
			<tr>
				<td>'.$v['id'].'</td>
				<td>'.$v['name'].'</td>
				<td>'.$v['name_english'].'</td>
				<td>'.join(', ', $v['kind']).'</td>
				<td>'.$row['loaiphim'].'</td>
				<td>'.$v['details'].'</td>
				<td><img src="../uploads/'.$v['images'].'" width=100px height=100px></td>
				<td><video src="../uploads/'.$v['low'].'" width=450px height=250px autoplay controls>Trình duyệt này không hỗ trợ HTML5 Video!</video></td>
				<td><video src="../uploads/'.$v['high'].'" width=450px height=250px autoplay controls>Trình duyệt này không hỗ trợ HTML5 Video!</video></td>
				<td>'.$v['tag'].'</td>
				<td>'.$v['dienvien'].'</td>
				<td>'.$v['daodien'].'</td>
				<td>'.$v['namsanxuat'].'</td>
				<td>'.$v['thoiluong'].'</td>
				<td>'.$row1['quocgia'].'</td>
				<td>'.$v['ep_movie'].'</td>
				<td class="text-center">
					<a href="?view=acceptMovie&id='.$v['id'].'" class="fa fa-check text-success" data-toggle="tooltip" title="Duyệt phim này"></a><br><br>
					<a href="?view=removeMovie&id='.$v['id'].'" class="fa fa-times text-danger" data-toggle="tooltip" title="Loại bỏ phim này"></a>
				</td>
			</tr>
			';
		}
		?>
	</tbody>
</table>

<?php
mysqli_close($conn);
?>
</div>
