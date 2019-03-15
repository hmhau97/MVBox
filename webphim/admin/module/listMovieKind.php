<div class="container">
	<div class="row">
		<?php
		include'connection.php';

		$sql = "SELECT * FROM movie_kind_names";
		$result = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($result);
		?>
		<h1 class="text-center">Có <?php echo $num;?> thể loại phim</h1>
		<table class="table table-hover">
			<thead>
				<tr>
					<th class="text-center">Id</th>
					<th class="text-center">Tên thể loại</th>
					<th class="text-center">Loại</th>
					<th class="text-center" style="border-left:solid 1px #ddd">Hành động</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$arr = array('Phim lẻ', 'Phim bộ', 'Phim chiếu rạp');
				while ($row = mysqli_fetch_assoc($result)) {
					$row['kind'] = $arr[$row['kind'] - 1];
					?>
					<tr>
						<td class="text-center"><?php echo $row['id'];?></td>
						<td class="text-center"><?php echo $row['name'];?></td>
						<td class="text-center"><?php echo $row['kind'];?></td>
						<td class="text-center" style="border-left:solid 1px #ddd">
							<a class="text-success" href="?view=editMovieKind&id=<?php echo $row['id'];?>" data-toggle="tooltip" title="Chỉnh sửa">
								<i class="fa fa-edit"></i>
							</a>
							<a class="text-danger" style="margin-left:16px" href="?view=deleteMovieKind&id=<?php echo $row['id'];?>" data-toggle="tooltip" title="Xóa thể loại này">
								<i class="fa fa-times"></i>
							</a>
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
	</div>
</div>
<br>
