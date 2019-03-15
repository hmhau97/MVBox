<?php 
	//goi file ket noi den server dung chung
include("connection.php");
		//viet cau lenh truy van select
$sqlSelect = "SELECT * FROM movie_kind_names";
		//thuc thi cau truy van
$result = mysqli_query($conn,$sqlSelect);
$sqlSelect1 = "SELECT * FROM movie_kind_names";
		//thuc thi cau truy van
$result1 = mysqli_query($conn,$sqlSelect1);
		//dem so luong ban ghi tra ve
$num_rows = mysqli_num_rows($result);
		//duyet xu ly ket qua tra ve
?>

<div class="row">
	<div class="col-md-10">
		<h1 align="center"><b>Có <?php echo $num_rows ?> Thể loại Phim </b></h1>
		<table class="table table-condensed table-hover">
			<thead>
				<tr>
					<th class="text-center">ID</th>
					<th>Name</th>
					<th class="text-center"><center>Action</center></th>
					<th><a href="index.php?view=addMovieKind&id=<?php echo $row["id"] ?>" style="color:red;text-decoration:none">Thêm</a></th>
				</tr>
			</thead>
			<tbody>
				<?php 
				while($row = mysqli_fetch_array($result)){
					?>

					<tr>
						<td class="text-center"><?php echo $row["id"] ?></td>
						<td class="break-word"><?php echo $row["name"] ?></td>
						<td class="break-word td-actions text-right">
							<a href="index.php?view=editMovieKind&id=<?php echo $row["id"] ?>"><button type="button" rel="tooltip" title="Edit Kind Movie" class="btn btn-success btn-simple btn-xs">
								<i class="fa fa-edit"></i>
							</button></a>
							<a href="index.php?view=deleteMovieKind&id=<?php echo $row["id"] ?>"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
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
