<?php 
include'connectdatabase.php';
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
				<img src="Image/temp.png" class="img-thumbnail" id="uploadPreview" alt="image" style="width:100%;">
			</div>
			<div class="col-md-9 col-xs-12">
				<form method="post" id="uploadForm" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="idphim" class="control-label col-md-3">Chọn phim <span class="required"></span></label>
						<div class="col-md-9">
						<?php 
									
									$sql2="SELECT * FROM `movies`";
									$kq2=mysqli_query($conn,$sql2);
									$dong=mysqli_num_rows($kq2);
						?>
							<select class="form-control" id="uploadName" name="chonphim" required onchange="show()">
								<?php 
									while($row=mysqli_fetch_array($kq2)){
								?>
									<option value="<?=$row['id'];?>"><?=$row['name'];?></option>
								<?php
									}
								?>
							</select>
						
							
						</div>
					</div>
					<div class="form-group row">
					
						<label class="control-label col-md-3">Tập phim <span class="required"></span></label>
						<div class="col-md-9">
							<input type="number" class="form-control" id="uploadTag" name="tapphim">
						</div>
					</div>
					
					<div class="form-group row" data-toggle="tooltip" title="Hỗ trợ các định dạng 3gp, mp4">
						<label for="uploadVideo" class="control-label col-md-3">Phim <span class="required"></span></label>
						<div class="col-md-9">
							<input type="file" class="form-control" id="uploadVideo" name="uploadVideo" required>
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
		
		if($_SESSION['id']){
			
			$sql="SELECT * FROM users WHERE id=".$_SESSION['id'];
			$kq=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($kq);
			
		}

		$idphim = $_POST['chonphim'];
		$tapphim = isset($_POST['tapphim']) ? $_POST['tapphim'] : false;
		
		$uploadVideo = isset($_FILES['uploadVideo']) ? $_FILES['uploadVideo'] : false;
		$uploadVideoHigh = isset($_FILES['uploadVideoHigh']) ? $_FILES['uploadVideoHigh'] : false;
		if (!$idphim) {
			exit('
				<script>
					alert("Bạn chưa chọn tên phim!");
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
		
		$ui=$row['id'];
		$random_num = mt_rand();
		$sql = "INSERT INTO movie_episode_upload(ep_film, id_film, low,high,user_id) VALUES ('$tapphim', '$idphim',  '".$uploadVideo['name']."', '".$uploadVideoHigh['name']."','$ui')";
		mysqli_query($conn, $sql);
		
		move_uploaded_file($uploadVideo['tmp_name'], 'uploads/'.$uploadVideo['name']);
		move_uploaded_file($uploadVideoHigh['tmp_name'], 'uploads/'.$uploadVideoHigh['name']);
		echo'
			<script>
				alert("Tải lên thành công.Phim của bạn sẽ được admin xét duyệt trước khi được hiển thị!");
			</script>
		';
		
		
		mysqli_close($conn);
	}
	?>