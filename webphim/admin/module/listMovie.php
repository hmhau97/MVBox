<?php 
	//goi file ket noi den server dung chung
include("connection.php");
$sqlSelect = "SELECT * FROM movies";
if(isset($_POST['search'])){
	$p=$_POST['tim'];
	$sqlSelect = "SELECT * FROM movies WHERE id LIKE '$p' OR name like '%$p%' OR name_english like '$p%' OR dienvien like '%$p%' OR daodien like '%$p%' OR tag like '%$p%' OR namsanxuat like '%$p%' OR thoiluong like '%$p%' OR view like '%$p%'";
}
		//viet cau lenh truy van select

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
		<form class="navbar-form navbar-left" role="search" method="POST" action="index.php?view=listMovie"enctype="multipart/form-data">           
				<div class="form-group label-floating has-success">
					
					<!--<label class="control-label search1">Nhập tên phim</label>-->
					<input type="text" name="tim" class="formc"  placeholder="Search" style="width:200px;"> 
				</div>
				<button type="submit" name="search" class="button btn-danger btn-raised btn-round" style="margin-top:25px;">Search</button>
		</form>
		<h1 align="center"><b>Có <?php echo $num_rows ?> Phim </b></h1>
		<table class="table table-condensed table-hover">
			<thead>
				<tr>
					<th class="text-center">ID</th>
					<th>Movie Name</th>
					<th>Kind</th>
					<th class="text-center">Images</th>
					<th class="text-center">Tag</th>
					<th class="text-center">Dienvien</th>
					<th class="text-center">Daodien</th>
					<th class="text-center">Namsanxuat</th>
					<th class="text-center">View</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				while($row = mysqli_fetch_array($result)){
					?>

					<tr>
						<td class="text-center"><?php echo $row["id"] ?></td>
						<td class="break-word"><?php echo $row["name"] ?></td>
						<td class="break-word"><?php echo $row["kind_id"] ?></td>
						<td class="break-word"><img src="../<?php echo $row["images"] ;?>" width="100px" ;height="100px"></td>
						<td class="break-word"><?php echo $row["tag"]?></td>
						<td class="break-word"><?php echo $row["dienvien"]?></td>
						<td class="break-word"><?php echo $row["daodien"]?></td>
						<td class="break-word"><?php echo $row["namsanxuat"]?></td>
						<td class="break-word"><?php echo $row["view"]?></td>
						<td class="break-word td-actions text-right">
							<a href="index.php?view=editMovie&id=<?php echo $row["id"] ?>"><button type="button" rel="tooltip" title="Edit Movie" class="btn btn-success btn-simple btn-xs">
								<i class="fa fa-edit"></i>
							</button></a>
							<a onclick="return confirm('Các tập phim của phim này sẽ bị xóa. Bạn có chắc chắn muốn xóa!!!')"href="index.php?view=deleteMovie&id=<?php echo $row["id"] ?>"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
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
<div class="col-md-2">
	<h2 align="center"><b>Bảng thể loại</b></h2>
	<table class="table table-condensed table-striped">
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-right">Name</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while($rows = mysqli_fetch_array($result1)){
				?>
				<tr>
					<td class="text-center"><?php echo $rows["id"] ?></td>
					<td class="text-right"><?php echo $rows["name"] ?></td>
				</tr>
				<?php 
			}
			mysqli_close($conn);
			?>
		</tbody>
	</table>
</div></div>
