<?php 
	include("connection.php");//ket noi csdl
	if(isset($_POST["reg"])){
		$avatUrl="";
		if(isset($_POST["avatar"])){
		$path = "uploads/";//khai bao thu muc nhan file dc upload
		$tmp_name = $_FILES["avatar"]["tmp_name"];//lay ten file duoc dua len server trong thu muc temp
		$fileName = $_FILES["avatar"]["name"];//ten cua file dc upload
		$avatUrl =  $path . $fileName;//noi duong dan thu muc upload voi ten file
		if($_FILES["avatar"]["type"]=="image/jpeg"){//kiem tra xem file dua len co phai la anh hay khong
			move_uploaded_file($tmp_name,"../".$path . $fileName);//di chuyen file tu thu muc temp sang thu muc ma chung ta muon
		}else{
			echo "File không đúng định dạng";
		}
	}else{
		$avatUrl="./uploads/avatar.jpg";
	}
		//lay du lieu tu form nguoi dung gui len
		$userName = $_POST["userName"];
		$password = md5($_POST["password"]);
		$email = $_POST["email"];
		$Age = $_POST["age"];

		$Full_Name = $_POST["Name"];
		$balance = $_POST["balance"];
		//kiem tra xem userName da ton tai hay chua
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
          }else{
		//viet cau lenh Insert vao bang user
			$sqlUserInsert = "INSERT INTO users(User_Name,password,Full_Name,age,gender_id,email,balance,avatar) VALUES('$userName','$password','$Full_Name','$Age','$gender','$email','$balance','$avatUrl')";
			mysqli_query($conn,$sqlUserInsert);
			header("location:index.php?view=listUser");
		}
	}
?>
<form action="" method="post" enctype="multipart/form-data">
	<table width="500" align="center">
	<caption>
		<h3 align="center">Thêm User</h3>
	</caption>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Tên đăng nhập</label>
				<input class="form-control" type="text" name="userName" id="userName" value="">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Mật Khẩu</label>
				<input class="form-control" type="password" name="password" id="password" value="">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Email</label>
				<input class="form-control" type="email" name="email" id="email"  value="">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Tuổi</label>
				<input class="form-control" type="number" name="age" id="age" value="">
			</td>
		</tr>
		
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Họ Tên</label>
				<input class="form-control" type="text" name="Name" value="">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Tài khoản</label>
				<input class="form-control" type="text" name="balance" id="balance" value="">
			</td>
		</tr>
		<tr>
			<td class="">
				<label class="control-label myform">Avatar</label>
				<img class="img-circle img-raised img-responsive" src="../uploads/avatar.jpg" width="200">
				<input type="file" name="avatar" id="avatar">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input class="btn btn-raised btn-danger" type="submit" value="THÊM" name="reg">
			</td>
		</tr>
	</table>
</form>