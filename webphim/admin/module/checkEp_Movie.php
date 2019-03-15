<?php
include'connection.php';

$sql = "SELECT * FROM movie_episode_upload";
$result = mysqli_query($conn, $sql);
//$num = mysqli_fetch_row($result)[0];
$num=mysqli_num_rows($result);
?>
<h2 class="col-md-12 text-center">
	<b>Có <?php echo $num;?> tập phim đang chờ xét duyệt !</b>
</h2>
<table class="table table-hover">
	<thead>
		<tr>
			<th width="30px">ID</th>
			<th width="50px">Tập phim</th>
			<th width="80px">ID Phim</th>
			<th class="text-center" width="100px"><center>Chất lượng thấp</center></th>
			<th class="text-center" width="100px"><center>Chất lượng cao</center></th>
			<th class="text-center" width="50px">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		while($row=mysqli_fetch_array($result)){
			?>
			<tr>
				<td><?=$row['id']?></td>
				<td><?=$row['id_film']?></td>
				<td><?=$row['ep_film']?></td>
				<td><video src="../uploads/<?=$row['low']?>" width=200px height=80px autoplay controls>Trình duyệt này không hỗ trợ HTML5 Video!</video></td>
				<td><video src="../uploads/<?=$row['high']?>" width=200px height=80px autoplay controls>Trình duyệt này không hỗ trợ HTML5 Video!</video></td>
				<td class="text-center">
					<a href="?view=acceptEp_Movie&id=<?=$row['id']?>" class="fa fa-check text-success" data-toggle="tooltip" title="Duyệt phim này"></a><br><br>
					<a href="?view=removeEp_Movie&id=<?=$row['id']?>" class="fa fa-times text-danger" data-toggle="tooltip" title="Loại bỏ phim này"></a>
				</td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>

<?php
mysqli_close($conn);
?>
