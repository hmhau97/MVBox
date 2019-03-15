<div class="container">
	<div class="row">
		<h2 class="text-center">Thêm mới thể loại phim</h2>
		<form action="" method="post">
			<div class="form-group">
				<label for="kindName" class="col-md-3">Tên thể loại phim: <span class="required"></span></label>
				<div class="col-md-9">
					<input type="text" class="form-control" id="kindName" name="kindName" required>
				</div>
			</div>
			
			<div class="form-group text-center">
				<input type="submit" class="btn btn-raised btn-danger" value="Thêm" name="kindSubmit">
			</div>
		</form>
	</div>
</div>

<?php
if (isset($_POST['kindSubmit'])) {
	$kindName = $_POST['kindName'];

	include'connection.php';

	$sql = "INSERT INTO movie_kind_names VALUES(NULL,'$kindName')";
	mysqli_query($conn, $sql);
	header('Location: ?view=listKindmovie');

	mysqli_close($conn);
}
?>
