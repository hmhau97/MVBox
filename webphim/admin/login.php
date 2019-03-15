<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../Image/Logo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>HTT CINEMA</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<!--     Fonts and icons     -->
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<!-- CSS Files -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/css/material-kit.css" rel="stylesheet"/>
	<link rel="stylesheet" href="../Chung.css">
</head>
<body>
	

	<div class="main">
		<div class="container">
			<div class="row">
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
									include("module/connection.php");
									if (isset($_POST["login"])) {
										$username = $_POST["Username"];
										$level = 1;
										$pass = md5($_POST["pass"]);
										$sqlcheckLogin = "SELECT * FROM users WHERE User_Name='$username' && level = '$level' && password='$pass' ";
										$checkLogin = mysqli_query($conn, $sqlcheckLogin);
										
										$num = mysqli_num_rows($checkLogin);
										if ($num>0) {
											$data = mysqli_fetch_row($checkLogin);
											$_SESSION["admin"] = $data;

											header('location:index.php');
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
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>

</body>
<!--   Core JS Files   -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="../assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="../assets/js/material-kit.js" type="text/javascript"></script>
<script type="text/javascript">

	$().ready(function(){
						// the body of this function is in assets/material-kit.js
						materialKit.initSliders();
						$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

						window_width = $(window).width();

						if (window_width >= 768){
							big_image = $('.wrapper > .header');

							$(window).on('scroll', materialKitDemo.checkScrollForParallax);
						}

					});
				</script>
				</html>

<!-- <body>
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
		
		<link rel="stylesheet" href="../Chung.css">
		<div class="container">
				<div class="row">
						<div class="col-md-4 col-md-offset-4">
							 
								<div class="login-panel panel panel-default">
								
										<div class="panel-heading">
												<h3 class="panel-title">Please Sign In</h3>
										</div>
										<div class="panel-body">
												<form role="form" action="" method="POST">
														<input type="hidden" name="_token" value="{!! csrf_token() !!}">
														<fieldset>
																<div class="form-group">

																		<input class="form-control" placeholder="UserName"  name="username" type="text" >
																</div>
																<div class="form-group">
																		<input class="form-control" placeholder="Password" name="password" type="password" value="">
																</div>
																<button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
															 
														</fieldset>
												</form>
										</div>
								</div>
						</div>
				</div>
		</div> -->