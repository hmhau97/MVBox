<?php
	if(isset($_SESSION['user'])){
?>
<script>
	document.title = "Mua VIP";
</script>

<div class="row">
	<div class="col-md-3 hidden-xs">
	</div>
	<div class="col-sm-6 col-xs-12">
		<form method="post" style="background:#fafad4;margin-top:64px;margin-bottom:32px;padding:16px;border:solid 1px #444;border-radius:6px;">
			<div class="form-group label-floating has-error">
				<label class="control-label myform">Thời hạn VIP</label>
				<select class="form-control" name="expire" required>
					<option value="1-week">1 tuần / 20.000đ</option>
					<option value="1-month">1 tháng / 70.000đ</option>
					<option value="3-month">3 tháng / 200.000đ</option>
					<option value="6-month">6 tháng / 390.000đ</option>
					<option value="1-year">1 năm / 760.000đ</option>
				</select>
			</div>
			<div class="form-group label-floating has-error">
				<label class="control-label myform">Vui lòng nhập lại mật khẩu:</label>
				<input type="password" class="form-control" name="password" required>
			</div>
			<div class="form-group label-floating has-error" style="text-align: center;margin-bottom: 16px;">
				<input type="submit" value="Mua VIP" name="submit" style="width:100%;padding:4px 0;font-weight:bold;border:solid 1px #666;border-radius:6px;">
			</div>
			<?php
				include "connectdatabase.php";

				if (isset($_POST["submit"])) {
					$password = md5($_POST["password"]);
					$expire = $_POST["expire"];
					$sql = "SELECT * FROM users WHERE User_Name='$_SESSION[user]'";
					$qry = mysqli_query($conn, $sql);
					$user = mysqli_fetch_assoc($qry);

					if ($password == $user["password"]) {
						switch ($expire) {
							case "1-week":
								$price = 20000;
								$time_add = "+1 week";
								break;
							case "1-month":
								$price = 70000;
								$time_add = "+1 month";
								break;
							case "3-month":
								$price = 200000;
								$time_add = "+3 month";
								break;
							case "6-month":
								$price = 390000;
								$time_add = "+6 month";
								break;
							case "1-year":
								$price = 760000;
								$time_add = "+1 year";
								break;
						}
						if ($user["balance"] < $price) {
							echo'
								<div class="alert alert-danger">
								<div class="container-fluid">
								<div class="alert-icon">
									<i class="material-icons">error_outline</i>
								</div>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="material-icons">clear</i></span>
								</button>
									<b>Thông báo:</b> Số tiền không đủ để gia hạn!
								</div>
								</div>';
						}
						else {
							if ($user["vip_expire"] < date("Y-m-d"))
								$vip_expire = date("Y-m-d", strtotime("now ".$time_add));
							else
								$vip_expire = date("Y-m-d", strtotime($user["vip_expire"]." ".$time_add));
							$sql = "UPDATE users SET balance=".($user["balance"] - $price).", vip_expire='".$vip_expire."', membership_id=2 WHERE User_Name='$_SESSION[user]'";
							$query = mysqli_query($conn, $sql);
							if (isset($query)) {
								echo '<div class="alert alert-success">
									<div class="container-fluid">
									<div class="alert-icon">
										<i class="material-icons">error_outline</i>
									</div>
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true"><i class="material-icons">clear</i></span>
									</button>
										<b>Thông báo:</b> Bạn đã thêm hạn VIP thành công, hạn dùng đến ngày '.$vip_expire.'.
									</div>
									</div>';
							}
						}
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
								<b>Lỗi:</b> Mật khẩu không đúng, mời bạn nhập lại!
							</div>
							</div>';
					}
				}

				mysqli_close($conn);
			?>
		</form>
	</div>
	<div class="col-md-3 hidden-xs">
	</div>
</div>
<?php
	}
	else {
		header("location:index.php?view=main");
	}
?>
