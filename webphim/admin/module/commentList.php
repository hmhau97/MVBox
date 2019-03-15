<div class="container">
	<div class="row">
		<?php
		include'connection.php';

		$sql = "SELECT movies_comment.id, content, users.User_Name AS user, time, users.avatar AS avatar, movies.name AS movie FROM movies_comment JOIN users ON movies_comment.user_id=users.id JOIN movies ON movies_comment.movie_id=movies.id ORDER BY time DESC";
		$result = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($result);
		?>
		<h1 class="text-center">Có <?php echo $num;?> bình luận</h1>
		<table class="table table-hover">
			<thead>
				<tr>
					<th class="text-center">Id</th>
					<th class="text-center">Nội dung</th>
					<th class="text-center">Thời gian</th>
					<th class="text-center">Người dùng</th>
					<th class="text-center">Phim</th>
					<th class="text-center">Hành động</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_assoc($result)) {
					if ($row['time'] > time() - 10)
						$row['time'] = 'Vừa xong';
					elseif ($row['time'] > time() - 60)
						$row['time'] = floor(time() - $row['time']).' giây trước';
					elseif ($row['time'] > time() - 60 * 60)
						$row['time'] = floor((time() - $row['time']) / 60).' phút trước';
					elseif ($row['time'] > time() - 60 * 60 * 24)
						$row['time'] = floor((time() - $row['time']) / 60 / 60).' giờ trước';
					else
						$row['time'] = date('d/m/Y H:i', $row['time']);
					?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['content'];?></td>
						<td><?php echo $row['time'];?></td>
						<td><?php echo $row['user'];?></td>
						<td><?php echo $row['movie'];?></td>
						<td class="text-center">
							<a class="text-danger" href="?view=deleteComment&id=<?php echo $row['id'];?>" data-toggle="tooltip" title="Xóa bình luận này">
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
