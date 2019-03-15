<div class="" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Đăng Ký</h4>
			</div>
			<div class="modal-body">
				<?php
				include("connectdatabase.php");
				if(isset($_POST["reg"])){
					
					$username= $_POST["Username"];
					$email= $_POST["email"];
					$password= md5($_POST["pass"]);
					$checkpass= md5($_POST["repass"]);
					$Name= $_POST["name"];
					$Age= $_POST["Age"];
					$sqlCheckUsername = "SELECT * FROM users WHERE User_Name='$username'";
					$CheckUsername= mysqli_query($conn,$sqlCheckUsername);
					$sqlCheckemail = "SELECT * FROM users WHERE email='$email'";
					$Checkemail= mysqli_query($conn,$sqlCheckemail);
					if(mysqli_fetch_row($CheckUsername)){
						print '<div class="alert alert-danger">
						<div class="container-fluid">
							<div class="alert-icon">
								<i class="material-icons">error_outline</i>
							</div>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="material-icons">clear</i></span>
							</button>
							<b>Lỗi:</b> Tên đăng nhập đã tồn tại
						</div>
					</div>';
				}
				elseif (mysqli_fetch_row($Checkemail)) {
					print '<div class="alert alert-danger">
					<div class="container-fluid">
						<div class="alert-icon">
							<i class="material-icons">error_outline</i>
						</div>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true"><i class="material-icons">clear</i></span>
						</button>
						<b>Lỗi:</b> Email đã tồn tại
					</div>
				</div>';
			}
			elseif ($password != $checkpass) {
				print '<div class="alert alert-danger">
				<div class="container-fluid">
					<div class="alert-icon">
						<i class="material-icons">error_outline</i>
					</div>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true"><i class="material-icons">clear</i></span>
					</button>
					<b>Lỗi:</b> Mật khẩu không khớp
				</div>
			</div>';
		}
		else{
			print '<div class="alert alert-success">
			<div class="container-fluid">
				<div class="alert-icon">
					<i class="material-icons">check</i>
				</div>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true"><i class="material-icons">clear</i></span>
				</button>
				<b>Thông báo:</b> Bạn đã đăng kí thành công
			</div>
		</div>';
		$sqlInsert = "INSERT INTO users(User_Name, password, email, Full_Name, age)";
		$sqlInsert .= "VALUES ('$username','$password','$email','$Name','$Age')";
		mysqli_query($conn,$sqlInsert);
	}
}
?>
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<div class="form-group label-floating has-error">
			<label class="control-label myform">Tên Đăng Nhập</label>
			<input type="text" class="form-control" value="" name="Username" id="Username" required/>
		</div>
		<div class="form-group label-floating has-error">
			<label class="control-label myform">Email</label>
			<input type="email" class="form-control" name="email" id="email" required/>
		</div>
		<div class="form-group label-floating has-error">
			<label class="control-label myform">Mật Khẩu</label>
			<input type="password" class="form-control" name="pass" id="pass" required/>
		</div>
		<div class="form-group label-floating has-error">
			<label class="control-label myform">Xác nhận mật khẩu</label>
			<input type="password" class="form-control" name="repass" id="repass" required/>
		</div>
		
		<div class="form-group label-floating has-error">
			<label class="control-label myform">Họ Tên</label>
			<input type="text" class="form-control" name="name" id="name" required/>
		</div>   
		
		<div class="form-group label-floating has-error">
			<label class="myform1">Tuổi</label>
			<input type="number" class=" form-control" name="Age" placeholder="Tuổi" required/>
		</div>
		<button type="submit" name="reg" style="margin-left: 210px;" class="btn btn-danger">Đăng Ký</button>
	</table>
</form>
</div>
<div class="modal-footer">
</div>
</div>
</div> 
</div>
<script>
	Username.oninput = function() {
		sessionStorage.Username = this.value;
		
	};
</script>
