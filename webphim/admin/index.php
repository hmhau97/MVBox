<?php
session_start();
if(isset($_SESSION['admin'])){
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="../Image/Logo.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title>HTT CINEMA - Admin</title>
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
		<?php 
		include("module/header.php");
		?>
		<div class="wrapper" id="top">
			<?php
			if(!isset($_GET["view"])){
				?>
				<div class="header header-filter" style="margin-top: -70px;height: 749px;background-image: url('../assets/img/bg.jpg');">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2" style="margin-top: 124px;">

								<div class="brand">
									<h1 style="color: #FFF">Xin Chào</h1>
									<h3 style="color: #FFF">Welcome back, Admin!</h3>
								</div>
								<?php include("module/admin.php");?>
							</div>
							
						</div>
					</div>
				</div>
				<?php
			}
			?>
			<div class="main">
				<div class="container">
					<div class="row">
						<?php 
						if(isset($_GET["view"])){
							$view = $_GET["view"];
							switch ($view) {
								case $view:
								include('module/'.$view.".php");/*lỗi liên hệ quản trị website*/
								break;
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<?php 
		include("../module/footer.php");
		include("../module/modal.php");
		?>
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
	<?php
}
else{
	header('location:login.php');
}
?>
