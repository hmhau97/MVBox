<div class="" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog mymodal">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Đăng Nhập</h4>
			</div>
			<div class="modal-body">
				<form action="" method="post" enctype="multipart/form-data">
					<?php
					include("connectdatabase.php");
					if (isset($_POST["login"])) {
						$level = 0;
						$username = $_POST["Username"];
						$pass = md5($_POST["pass"]);
						$sqlcheckLogin = "SELECT * FROM users WHERE User_Name='$username' && level = '$level' && password='$pass'";
						$checkLogin = mysqli_query($conn, $sqlcheckLogin);
								if($username=="admin"){
								$sqlcheckAdmin = "SELECT * FROM users WHERE User_Name='admin' && password='$pass'";
								$checkAdmin = mysqli_query($conn,$sqlcheckAdmin);
								if(mysqli_fetch_row($checkAdmin)){
									$_SESSION['admin']=$username;
									$_SESSION['user']=$username;
									header('location:./admin/index.php');
								}
							}
						if($row = mysqli_fetch_assoc($checkLogin)){
							$_SESSION['id']=$row['id'];
							$_SESSION['user']=$username;
							$userper=$_SESSION['user'];
							header('location:./');
						}
						elseif(empty($_POST["Username"])){
							echo '<div class="alert alert-danger">
							<div class="container-fluid">
								<div class="alert-icon">
									<i class="material-icons">error_outline</i>
								</div>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true"><i class="material-icons">clear</i></span>
								</button>
								<b>Lỗi:</b> Vui lòng nhập tên đăng nhập
							</div>
						</div>';
					}
					elseif (empty($_POST["pass"])) {
						echo '<div class="alert alert-danger">
						<div class="container-fluid">
							<div class="alert-icon">
								<i class="material-icons">error_outline</i>
							</div>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="material-icons">clear</i></span>
							</button>
							<b>Lỗi:</b> Vui lòng nhập mật khẩu
						</div>
					</div>';
				}
				else {
					echo '<div class="alert alert-danger">
					<div class="container-fluid">
						<div class="alert-icon">
							<i class="material-icons">error_outline</i>
						</div>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true"><i class="material-icons">clear</i></span>
						</button>
						<b>Lỗi:</b> Tài khoản hoặc mật khẩu không đúng
					</div>
				</div>';
			}
		}
		?>
		<div class="form-group label-floating has-error">
			<label class="control-label myform">Tên Đăng Nhập</label>
			<input type="text" class="form-control" name="Username" id="Username">
		</div>
		<div class="form-group label-floating has-error">
			<label class="control-label myform">Mật Khẩu</label>
			<input type="password" class="form-control" name="pass" id="pass">
		</div>
		<button type="submit" style="margin-left: 94px;" name="login" class="btn btn-danger">Đăng Nhập</button>
	</form>
</div>
<div class="modal-footer">
	<a href="index.php?view=register"><button type="button" class="btn btn-info ">Đăng Ký</button></a>
</div>
</div>
</div>
</div>