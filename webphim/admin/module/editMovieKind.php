<?php
$id = $_GET['id'];

include'connection.php';

$sql = "SELECT * FROM movie_kind_names WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

mysqli_free_result($result);
mysqli_close($conn);
?>

<div class="container">
	<div class="row">
		<h2 class="text-center">Sửa thể loại phim</h2>
		<form action="" method="post">
			<div class="form-group">
				<label for="kindName" class="col-md-3">Tên thể loại phim: <span class="required"></span></label>
				<div class="col-md-9">
					<input type="text" class="form-control" id="kindName" name="kindName" value="<?php echo$row['name']?>" required>
				</div>
			</div>
			<div class="form-group text-center">
				<input type="submit" class="btn btn-raised btn-success" value="Cập nhật" name="kindSubmit">
			</div>
		</form>
	</div>
</div>

<script>
	kindKind.selectedIndex = <?php echo$row['kind'] - 1?>;
</script>

<?php
if (isset($_POST['kindSubmit'])) {
	$kindName = $_POST['kindName'];
	$kindKind = $_POST['kindKind'];

	include'connection.php';

	$sql = "UPDATE movie_kind_names SET name='$kindName', kind=$kindKind WHERE id=$id";
	mysqli_query($conn, $sql);
	header('Location: ?view=listMovieKind');

	mysqli_close($conn);
}
?>
