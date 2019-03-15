<?php if (isset($_SESSION['admin'])) { 
include'connection.php';
?>
	<style>
		#uploadContainer label {
			color: #222!important;
		}
		#uploadContainer input[type=file] {
			opacity: 1;
			position: relative;
		}
		#uploadContainer textarea {
			background: #ffa;
			padding: 8px 10px!important;
		}
		#uploadSubmit {
			background: #2186e3;
			color: #eee;
		}
		#uploadCancle {
			margin-left: 16px;
			background: #e24848;
			color: #eee;
		}
	</style>

	<div class="container" id="uploadContainer">
		<div class="row">
			<div class="col-md-3 text-center hidden-sm hidden-xs">
				<br><br><br>
				<img src="../Image/temp.png" class="img-thumbnail" id="uploadPreview" alt="image" style="width:100%;">
			</div>
			<div class="col-md-9 col-xs-12">
				<form method="post" id="uploadForm" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="uploadName" class="control-label col-md-3">Tên phim <span class="required"></span></label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="uploadName" name="uploadName" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="uploadNameEnglish" class="control-label col-md-3">Tên phim Tiếng anh</label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="uploadNameEnglish" name="uploadNameEnglish">
						</div>
					</div>
					
					
					<div class="form-group row">
						<label class="control-label col-md-3">Thể loại <span class="required"></span></label>
						<div class="col-md-9 row">
							<?php
							foreach ($movie_kind_name as $k => $v) {
								echo'
								<div class="col-sm-4 col-xs-6">
									<input type="checkbox" name="uploadKind[]" id="uploadKind'.$k.'" value="'.$k.'">
									<label for="uploadKind'.$k.'">'.$v.'</label>
								</div>
								';
							}
							?>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="uploadName" class="control-label col-md-3">Loại phim<span class="required"></span></label>
						<div class="col-md-9">
						<select name="loaiphim">
						<?php
							$sql="SELECT * FROM loaiphim";
							$kq=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($kq)){
						?>
							<option value=<?=$row['id'];?> required><?=$row['loaiphim'];?></option>
						<?php
							}
						?>
						</select>
						</div>
					</div>
					
					<div class="form-group row">
						<label for="uploadTapphim" class="control-label col-md-3">Tập phim: </label>
						<div class="col-md-9">
							<input type="number" class="form-control" id="tapphim" name="tapphim">
						</div>
					</div>
					
					
					<div class="form-group row" data-toggle="tooltip" title="Nên dùng kích thước 215 x 311 để ảnh hiển thị được đẹp nhất">
						<label for="uploadImage" class="control-label col-md-3">Ảnh phim <span class="required"></span></label>
						<div class="col-md-9">
							<input type="file" class="form-control" id="uploadImage" name="uploadImage" accept="image/*" required>
							<span class="help-block hidden-lg hidden-md">Chú ý: Nên dùng kích thước 215 x 311 để ảnh hiển thị được đẹp nhất!</span>
						</div>
					</div>
					
					<div class="form-group row" data-toggle="tooltip" title="Nên dùng kích thước 215 x 311 để ảnh hiển thị được đẹp nhất">
						<label for="uploadImage" class="control-label col-md-3">Poster phim: </label>
						<div class="col-md-9">
							<input type="file" class="form-control" id="uploadPoster" name="uploadPoster" accept="image/*" >
							<span class="help-block hidden-lg hidden-md">Chú ý: Nên dùng kích thước 1140 x 428 để ảnh hiển thị được đẹp nhất!</span>
						</div>
					</div>
					
					<div class="form-group row" data-toggle="tooltip" title="Hỗ trợ các định dạng 3gp, mp4">
						<label for="uploadVideo" class="control-label col-md-3">Phim</label>
						<div class="col-md-9">
							<input type="file" class="form-control" id="uploadVideo" name="uploadVideo">
							<span class="help-block hidden-lg hidden-md">Hỗ trợ các định dạng 3gp, mp4.</span>
						</div>
					</div>
					<div class="form-group row" data-toggle="tooltip" title="Hỗ trợ các định dạng 3gp, mp4">
						<label for="uploadVideoHigh" class="control-label col-md-3">Phim chất lượng cao (nếu có): </label>
						<div class="col-md-9">
							<input type="file" class="form-control" id="uploadVideoHigh" name="uploadVideoHigh">
							<span class="help-block hidden-lg hidden-md">Hỗ trợ các định dạng 3gp, mp4.</span>
						</div>
					</div>
					<div class="form-group row">
						<label for="uploadTag" class="control-label col-md-3">Từ khóa: </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="uploadTag" name="uploadTag" placeholder="Mỗi từ khóa của phim cách nhau bởi dấu phẩy">
						</div>
					</div>
					<div class="form-group row">
						<label for="uploadTag" class="control-label col-md-3">Tên Diễn Viên: </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="dienvien" name="dienvien" placeholder="Mỗi từ khóa của phim cách nhau bởi dấu phẩy">
						</div>
					</div>
					<div class="form-group row">
						<label for="uploadTag" class="control-label col-md-3">Tên Đạo Diễn: </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="daodien" name="daodien" placeholder="Mỗi từ khóa của phim cách nhau bởi dấu phẩy">
						</div>
					</div>
					<div class="form-group row">
						<label for="uploadTag" class="control-label col-md-3">Năm Sản Xuất: </label>
						<div class="col-md-9">
							<input type="number" class="form-control" id="nsx" name="nsx">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="uploadName" class="control-label col-md-3">Quốc gia<span class="required"></span></label>
						<div class="col-md-9">
						<select name="quocgia">
						<?php
							$sql="SELECT * FROM quocgia";
							$kq=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($kq)){
						?>
							<option value=<?=$row['id'];?> required><?=$row['quocgia'];?></option>
						<?php
							}
						?>
						</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="uploadThoiluong" class="control-label col-md-3">Thời lượng: </label>
						<div class="col-md-9">
							<input type="text" class="form-control" id="thoiluong" name="thoiluong">
						</div>
					</div>
					
					<div class="form-group row">
						<label for="uploadDetails" class="control-label col-md-3">Giới thiệu phim</label>
						<div class="col-md-9">
							<textarea class="form-control" id="uploadDetails" name="uploadDetails" rows="8"></textarea>
						</div>
					</div>
					<div class="form-group row text-center">
						<div class="col-xs-12">
							<input type="submit" value="Tải lên" class="btn btn-primary" id="uploadSubmit" name="uploadSubmit">
							<input type="button" value="Hủy" class="btn btn-danger" id="uploadCancle">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		uploadImage.onchange = function() {
			var file, reader;
			file = this.files[0];
			reader = new FileReader();
			reader.onload = function(evt) {
				uploadPreview.src = evt.target.result;
			};
			reader.readAsDataURL(file);
		};

		uploadVideo.onchange = function() {
			this.blur();
		};

		uploadVideoHigh.onchange = function() {
			this.blur();
		};

		uploadCancle.onclick = function() {
			location.assign(".");
		};
	</script>

	<?php
	if (isset($_POST['uploadSubmit'])) {

		$uploadName = $_POST['uploadName'];
		$uploadNameEnglish=$_POST['uploadNameEnglish'];
		$uploadKind = isset($_POST['uploadKind']) ? $_POST['uploadKind'] : false;
		$loaiphim=$_POST['loaiphim'];
		$tapphim=$_POST['tapphim'];
		
		$uploadImage = isset($_FILES['uploadImage']) ? $_FILES['uploadImage'] : false;
		$uploadPoster = isset($_FILES['uploadPoster']) ? $_FILES['uploadPoster'] : false;
		
		$uploadVideo = isset($_FILES['uploadVideo']) ? $_FILES['uploadVideo'] : false;
		$uploadVideoHigh = isset($_FILES['uploadVideoHigh']) ? $_FILES['uploadVideoHigh'] : false;
		$uploadTag = $_POST['uploadTag'];
		$uploadDetails = $_POST['uploadDetails'];
		$dienvien = $_POST['dienvien'];
		$daodien = $_POST['daodien'];
		$nsx = $_POST['nsx'];
		$quocgia=$_POST['quocgia'];
		$thoiluong=$_POST['thoiluong'];
		if (!$uploadName) {
			exit('
				<script>
					alert("Bạn chưa nhập tên phim!");
				</script>
				');
		}

		if ($uploadKind !== false) {
			$uploadKind = join(',', $uploadKind);
		}
		else {
			exit('
				<script>
					alert("Bạn chưa chọn thể loại phim!");
				</script>
				');
		}

		if ($uploadImage) {
			if ($uploadImage['size'] > 1024 * 1024) {
				exit('
					<script>
						alert("Hình ảnh tải lên quá lớn, phải nhỏ hơn 1 MB!");
					</script>
					');
			}
			if ($uploadImage['type'] != 'image/jpeg' && $uploadImage['type'] != 'image/png') {
				exit('
					<script>
						alert("Hình ảnh tải lên không đúng các định dạng jpeg, png!");
					</script>
					');
			}
		}
		else {
			exit('
				<script>
					alert("Bạn chưa chọn ảnh phim!");
				</script>
				');
		}

		// if ($uploadVideo) {
			// if ($uploadVideo['type'] != 'video/3gpp' && $uploadVideo['type'] != 'video/mp4') {
				// exit('
					// <script>
						// alert("Phim tải lên không đúng các định dạng 3gp, mp4!");
					// </script>
					// ');
			// }
		// }
		// else {
			// exit('
				// <script>
					// alert("Bạn chưa chọn phim!");
				// </script>
				// ');
		// }

		// if ($uploadVideoHigh) {
			// if ($uploadVideoHigh['type'] != 'video/3gpp' && $uploadVideoHigh['type'] != 'video/mp4') {
				// exit('
					// <script>
						// alert("Phim chất lượng cao tải lên không đúng các định dạng 3gp, mp4!");
					// </script>
					// ');
			// }
		// }

		

		if($uploadVideo['name']=="" && $uploadVideoHigh['name']==""){
			exit('
				<script>
					alert("Bạn chưa chọn phim!");
				</script>
				');
		}
		else {
			
			$sql = "INSERT INTO movies(name,name_english, kind_id,id_loaiphim, details,images,poster,tag,dienvien,daodien,namsanxuat,quocgia,thoiluong) VALUES ('$uploadName','$uploadNameEnglish', '$uploadKind','$loaiphim' ,'$uploadDetails', '"."Image/".$uploadImage['name']."','"."Image/".$uploadPoster['name']."' , '$uploadTag','$dienvien','$daodien','$nsx','$quocgia','$thoiluong')";
			mysqli_query($conn, $sql);
			$sql2="SELECT * FROM movies ORDER BY id DESC LIMIT 0,1";
			$kq1=mysqli_query($conn,$sql2);
			$row2=mysqli_fetch_array($kq1);

			if($uploadVideoHigh['name']=="" && $uploadVideo['name']!=""){
				$sql1="INSERT INTO movie_episode VALUES (NULL,'$tapphim','".$row2['id']."','phim/".$uploadVideo['name']."',null)";
			}
			else if($uploadVideo['name']=="" && $uploadVideoHigh['name']!=""){
				$sql1="INSERT INTO movie_episode VALUES (NULL,'".$movie['ep_movie']."','".$row2['id']."',null,'phim/".$uploadVideoHigh['name']."')";
			}
			else{
				$sql1 = "INSERT INTO movie_episode VALUES (NULL,'".$movie['ep_movie']."','".$row2['id']."','phim/".$uploadVideo['name']."','phim/".$uploadVideoHigh['name']."')";
			}
			
			
			mysqli_query($conn, $sql1);
			

			move_uploaded_file($uploadImage['tmp_name'], 'uploads/'.$uploadImage['name']);
			move_uploaded_file($uploadPoster['tmp_name'], 'uploads/'.$uploadPoster['name']);
			
			move_uploaded_file($uploadVideo['tmp_name'], 'uploads/'.$uploadVideo['name']);
			move_uploaded_file($uploadVideoHigh['tmp_name'], 'uploads/'.$uploadVideoHigh['name']);
			echo'
				<script>
					alert("Tải phim lên thành công!");
				</script>
			';
		}

		mysqli_close($conn);
	}
	?>
<?php } ?>
