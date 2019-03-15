<?php 
	include("connection.php");//ket noi csdl
	//truy van lay ra user bang voi user muon sua
	$sqlSelectUserById = "SELECT * FROM users WHERE id = ".$_GET["id"];
	$results = mysqli_query($conn,$sqlSelectUserById);
	$row = mysqli_fetch_array($results);
	//thu hien update data
	if(isset($_POST["edit"])){
		if($_FILES["avatar"]["name"]){
			$avatUrl="";
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
			$avatUrl = $row[9];
		}
		$membership = $_POST["membership"];
		$membershipid="";
		if($membership=="Standard"){
			$membershipid=1;
		}
		elseif($membership=="VIP"){
			$membershipid=2;
		}
		$userName = $_POST["userName"];
		$userid = $_POST["id"];
		$email = $_POST["email"];
		$Age = $_POST["age"];

		$Full_Name = $_POST["Name"];
		$balance = $_POST["balance"];
        $sqlUpdate ="UPDATE users SET User_Name = '$userName', email='$email', age='$Age', Full_Name='$Full_Name', membership_id='$membershipid', avatar='$avatUrl', balance='$balance' WHERE id='$userid'";
		mysqli_query($conn,$sqlUpdate);
		header("location:index.php?view=listUser");
	}
?>
<form action="" method="post" enctype="multipart/form-data">
	<table width="500" align="center">
	<caption>
		<h3 align="center">Sửa thông tin</h3>
	</caption>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Tên Đăng Nhập</label>
				<input type="hidden" name="id" id="id" value="<?php echo $row[0] ?>">
				<input class="form-control" type="hidden" name="userName" id="userName" value="<?php echo $row[1] ?>">
				<input class="form-control" type="text" value="<?php echo $row[1] ?>" disabled>
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Email</label>
				<input class="form-control" type="hidden" name="email" id="email"  value="<?php echo $row[6] ?>">
				<input class="form-control" type="email" value="<?php echo $row[5] ?>" disabled>
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Tuổi</label>
				<input class="form-control" type="text" name="age" id="age" value="<?php echo $row[4] ?>">
			</td>
		</tr>
		
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Họ Tên</label>
				<input class="form-control" type="text" name="Name" value="<?php echo $row[1]?>">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Membership</label>
				<input class="form-control" type="text" name="membership" id="membership" value="<?php if($row['membership_id']==1){echo 'Standard';}else{echo 'VIP';}?>">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Số Dư</label>
				<input class="form-control" type="text" name="balance" id="balance" value="<?php echo $row[8]?>">
			</td>
		</tr>
		<tr>
			<td class="">
				<label class="control-label myform">Avatar</label>
				<img class="img-circle img-raised img-responsive" src="<?php echo "../".$row[10] ?>" width="200">
				<input type="file" name="avatar" id="avatar">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input class="btn btn-raised btn-danger" type="submit" value="Cập Nhật" name="edit">
			</td>
		</tr>
	</table>
</form>