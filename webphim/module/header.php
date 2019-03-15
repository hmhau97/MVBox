<nav class="navbar navbar-danger navbar-fixed-top" role="navigation" style="width: 100%; height:80px; background: #F39B13";>
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand logo" id="logo" href="./"><img src="Image/Logo.png" width="100px;" alt="logo"></a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<form class="navbar-form navbar-right" role="search" method="POST" action="index.php?view=search"enctype="multipart/form-data">           
				<div class="form-group label-floating has-success">
					
					<!--<label class="control-label search1">Nhập tên phim</label>-->
					<input type="text" name="tim" class="formc"  placeholder="Tìm kiếm phim..."> 
					
				</div>
				<button type="submit" name="search" class="button btn-danger btn-raised btn-round" ><img src="Image/search.svg"></button>
			</form>
			<ul class="nav navbar-nav navbar-left" style="position: relative; top: 10px">
				<li class="dropdown">
					<a href="?view=loaiphim&loaiphim=2" class="dropdown-toggle dh" >Phim Lẻ</a>
				</li>
				<li class="dropdown">
					<a href="?view=loaiphim&loaiphim=1" class="dropdown-toggle dh">Phim Bộ</a>
				</li>
				<li class="dropdown">
					<a href="?view=loaiphim&loaiphim=3" class="dropdown-toggle dh">Phim Chiếu Rạp</a>
					
				</li>
				<li class="dropdown">
					<?php
					include'connectdatabase.php';

					$movie_kind_name = array();
					$sql = "SELECT * FROM movie_kind_names";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_assoc($result)) {
						$movie_kind_name[$row['id']] = $row['name'];
					}
					mysqli_free_result($result);

					mysqli_close($conn);
					?>
					<a href="#" class="dropdown-toggle dh" data-toggle="dropdown">Thể loại</a>
					<ul class="dropdown-menu clearfix">
						<li class="dropdown-header text-uppercase clearfix" style="padding-top:16px;font-weight:bold">Thể loại</li>
						<?php
						foreach ($movie_kind_name as $k => $v) {
							echo'<li><a href="?view=movie_list&kind_id='.$k.'">'.$v.'</a></li>';
						}
						?>
						<li><a href="?view=movie_list&kind_id=0" class="all col-md-12">Xem tất cả</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<?php
					include'connectdatabase.php';

					$movie_kind_name = array();
					$sql = "SELECT * FROM quocgia";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_assoc($result)) {
						$movie_kind_name[$row['id']] = $row['quocgia'];
					}
					mysqli_free_result($result);

					mysqli_close($conn);
					?>
					<a href="#" class="dropdown-toggle dh" data-toggle="dropdown">Quốc gia</a>
					<ul class="dropdown-menu clearfix">
						<li class="dropdown-header text-uppercase clearfix1" style="padding-top:16px;font-weight:bold">Quốc gia</li>
						<?php
						foreach ($movie_kind_name as $k => $v) {
							echo'<li><a href="?view=movie_list&kind_id='.$k.'">'.$v.'</a></li>';
						}
						?>
						<li><a href="?view=movie_list&kind_id=0" class="all col-md-12">Xem tất cả</a></li>
					</ul>
				</li>
				
				
				<?php 
				include("module/connectdatabase.php");
				if(isset($_SESSION['user'])){
					?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle dh avatar" data-toggle="dropdown"><img src="<?php $sql = "SELECT avatar FROM users WHERE User_Name='$_SESSION[user]'"; $qry = mysqli_query($conn, $sql); $ava=mysqli_fetch_array($qry); echo $ava['avatar']; ?>" alt="Circle Image" class="img-circle myimg img-responsive"></a>
						<ul class="dropdown-menu" style="width:210px !important;">
							<?php
							$sql1 = "SELECT membership_id FROM users WHERE User_Name='$_SESSION[user]'";
							$qry1 = mysqli_query($conn, $sql1);
							$membership = mysqli_fetch_array($qry1);
							if($membership["membership_id"]==1){
								echo '<li><a href="index.php?view=buy_vip">
								<i class="fa fa-diamond" style="width: 32px;"></i>
								Membership: Standard
							</a></li>';
						}
						else{
							echo'<li><a href="index.php?view=buy_vip">
							<i class="fa fa-diamond" style="width: 32px;"></i>
							Membership: VIP
						</a></li>';
					}
					?>                
					<li>
						<a href="index.php?view=change_password">
							<i class="fa fa-lock" style="width: 32px;"></i>
							Đổi mật khẩu
						</a>
					</li>
					<li>
						<a href="index.php?view=nap-tien">
							<i class="fa fa-money" style="width: 32px;"></i>
							Nạp Tiền
						</a>
					</li>
					<li>
						<a href="index.php?view=nap-tien">
							<i class="fa fa-dollar" style="width: 32px;"></i>
							Số dư:
							<?php
							include("module/connectdatabase.php");
							$sql= "SELECT balance FROM users WHERE User_Name='$_SESSION[user]'";
							$qry= mysqli_query($conn, $sql);
							$row1=mysqli_fetch_array($qry);
							echo $row1['balance']."đ";
							?>
						</a>
					</li>
					<li>
						<a href="index.php?view=buy_vip">
							<i class="fa fa-diamond" style="width: 32px;"></i>
							Mua VIP
						</a>
					</li>
					<li>
						<a href="index.php?view=upload">
							<i class="fa fa-upload" style="width: 32px;"></i>
							Tải lên phim mới
						</a>
					</li>
					<li>
						<a href="index.php?view=taitap">
							<i class="fa fa-upload" style="width: 32px;"></i>
							Tải lên tập phim
						</a>
					</li>
					
					<li>
						<a href="index.php?view=logout">
							<i class="fa fa-sign-out" style="width: 32px;"></i>
							Đăng xuất <b><?php echo strtoupper($_SESSION['user']); ?></b>
						</a>
					</li>
				</ul>
			</li>
			<?php
		}else{
			?>
			<li><a href="index.php?view=login">Đăng Nhập</a></li>
			<li><a href="index.php?view=register">Đăng Ký</a></li>
			<?php 
		}
		?>
	</ul>
</div>
</div>
</nav>
<?php
include'connectdatabase.php';

$movie_kind_name = array();
$sql = "SELECT * FROM movie_kind_names";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	$movie_kind_name[$row['id']] = $row['name'];
}
mysqli_free_result($result);

mysqli_close($conn);
?>
