<?php 
	//goi file ket noi den server dung chung
include("connection.php");
		//viet cau lenh truy van select
$sqlSelect = "SELECT movie_episode.*,movies.name  FROM movie_episode,movies WHERE movies.id=movie_episode.id_film";
		//thuc thi cau truy van
$result = mysqli_query($conn,$sqlSelect);
$sqlSelect1 = "SELECT * FROM movie_episode";
		//thuc thi cau truy van
$result1 = mysqli_query($conn,$sqlSelect1);
		//dem so luong ban ghi tra ve
$num_rows = mysqli_num_rows($result);
		//duyet xu ly ket qua tra ve
?>

<div class="row">
	<div class="col-md-10">
		<h1 align="center"><b>Có <?php echo $num_rows ?> tập phim </b></h1>
		<table class="table table-condensed table-hover">
			<thead>
				<tr>
					<th class="text-center">ID</th>
					<th>Tập phim</th>
					<th>Phim</th>
					<th class="text-center">Link chất lượng thấp</th>
					<th class="text-center">Link chất lượng cao</th>
					<th class="text-center">ACTION</th>
				</tr>

			</thead>
			<tbody>
				<?php 
				while($row = mysqli_fetch_array($result)){
					?>

					<tr>
						<td class="text-center"><?php echo $row["id"] ?></td>
						<td class="break-word"><?php echo $row["ep_film"] ?></td>
						<td class="break-word"><?php echo $row["name"] ?></td>
						<td class="break-word" ><video src="../<?php echo $row["low"];?>"  controls width="200px;"></td>
						<td class="break-word" ><video src="../<?php echo $row["high"];?>"  controls width="200px;"></td>
						<td class="break-word td-actions text-right">
							<a href="index.php?view=editMovie&id=<?php echo $row["id"] ?>"><button type="button" rel="tooltip" title="Edit Movie" class="btn btn-success btn-simple btn-xs">
								<i class="fa fa-edit"></i>
							</button></a>
							<a href="index.php?view=deleteMovie&id=<?php echo $row["id"] ?>"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
								<i class="fa fa-times"></i>
							</button></a>
						</td>
					</tr>
					<?php 
				}
				?>
			</tbody>
		</table>
	</div>
</div>
