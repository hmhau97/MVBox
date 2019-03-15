<style>
	video {
		width: 100%;
		background: #222;
	}
	.movieQuality ul {
		width: 210px!important;
	#dong1{
		background-color:yellow !important;
	}
	}
</style>

<div class="container">
	<?php
	include'module/connectdatabase.php';

	$id = $_GET['id'];
	
	$sql = "SELECT * FROM movies WHERE  id=$id";
	$result = mysqli_query($conn, $sql);
	$movie = mysqli_fetch_assoc($result);
    
	if(isset($_GET['tap'])){
		$tap=$_GET['tap'];
	}
	else $tap=1;
	$sql1="SELECT movie_episode.low,movie_episode.high FROM movie_episode,movies WHERE movie_episode.id_film=movies.id and movies.id=$id and movie_episode.ep_film=$tap";
	$movie['kind'] = explode(',', $movie['kind_id']);
	$kq=mysqli_query($conn, $sql1);
	$ep=mysqli_fetch_array($kq);
	foreach ($movie['kind'] as $k => $v) {
		$movie['kind'][$k] = '<a href="?view=movie_list&kind_id='.$v.'">'.$movie_kind_name[$v].'</a>';
	}
    
    $sql = "UPDATE movies SET view=".(++$movie['view']).", view_day=".(++$movie['view_day']).", view_week=".(++$movie['view_week']).",view_mon=".(++$movie['view_mon'])." WHERE id=$id";
	mysqli_query($conn, $sql);
	
    if (isset($_SESSION['id'])) {
		$sql = "SELECT * FROM users WHERE id=".$_SESSION['id'];
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
	}
	else {
		$user = null;
	}
	if ($user && $user['membership_id'] == 2 && isset($_GET['quality']) && $_GET['quality'] == "high") {
		$link = $ep['high'];
	}
	else if($user && $user['membership_id'] == 2 && $ep['low']=="" && $ep['high']!=""){
		$link = $ep['high'];
	}
	else {
		$link = $ep['low'];
	}

	

	$month = date('m', time());
	$year = date('Y', time());

	$sql = "SELECT * FROM movies_stats WHERE movie_id=$id AND month=$month AND year=$year";
	$result = mysqli_query($conn, $sql);
	$stats = mysqli_fetch_assoc($result);

	if (mysqli_num_rows($result)) {
		$sql = "UPDATE movies_stats SET view=".(++$stats['view'])." WHERE movie_id=$id AND month=$month AND year=$year";
		mysqli_query($conn, $sql);
	}
	else {
		$sql = "INSERT INTO movies_stats(movie_id, view, month, year) VALUES($id, 1, $month, $year)";
		mysqli_query($conn, $sql);
	}
	$qg=$movie['quocgia'];
	$sql2="SELECT * FROM quocgia WHERE quocgia.id='$qg'";
	$kq=mysqli_fetch_array(mysqli_query($conn,$sql2));
	?>
	<div class="row">
		<div class="col-xs-12">
			<video src="<?php echo$link?>" autoplay controls>Trình duyệt này không hỗ trợ HTML5 Video!</video>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4" style="width:33%;">
						<div class="col-md-12 card info">
								<h3 id="info">THÔNG TIN PHIM</h3>
								<ul>
									<li>
										<p>Tên phim: <b><?php echo$movie['name']?> - <?php echo$movie['name_english'];?></b></p>
									</li>
									<li>
										<p>Diễn viên: <b><?php echo$movie['dienvien']?></b></p>
									</li>
									<li>
										<p>Đạo diễn: <b style="color: #f44336;"><?php echo$movie['daodien']?></b></p>
									</li>
									<li>		
										<p>Năm sản xuất: <span style="color: #f44336;"><?php echo$movie['namsanxuat']?></span></p>
									</li>
									<li>
										<p>Thể loại: <b style="color: #f44336;"><?php echo(join(', ', $movie['kind']));?></b></p>
									</li>
									<li>
										<p>Quốc Gia: <b><?php echo $kq['quocgia'];?></b></p>
									</li>
									<li>
										<p>Thời lượng: <?php echo $movie['thoiluong'];?></p>
									</li>
									<li>
										<p>Lượt xem: <?php echo $movie['view'];?></p>
									</li>
									
									
									<li>
										<p style="text-align:justify;">
											<b style="color: #f44336;"><?php echo$movie['name']?> (<?php echo$movie['namsanxuat']?>):</b> <?php echo(str_replace("\n", '<br>', $movie['details']));?>
										</p>
									</li>
								</ul>
							</div>
	
		
		</div>
	
		<!--<div class="col-md-4 col-xs-12">
			<b>Tên phim: </b><br><?php echo$movie['name']?>
			<br><br>
			<b>Tên diễn viên : </b><br><?php echo$movie['dienvien']?>
			<br><br>
			<b>Tên đạo diễn </b><br><?php echo$movie['daodien']?>
			<br><br>
			<b>Năm sản xuất: </b><br><?php echo$movie['namsanxuat']?>
			<br><br>
			<b>Thể loại: </b><br><?php echo(join(', ', $movie['kind']));?>
			<br><br>
			<b>Giới thiệu phim: </b><br><?php echo(str_replace("\n", '<br>', $movie['details']));?>
		</div>-->
		<div class="col-md-8 col-xs-12">
			
			<?php
				$sql="SELECT movie_episode.ep_film FROM movies,movie_episode WHERE movies.id=movie_episode.id_film and movies.id=$id ORDER BY movie_episode.ep_film ASC";
				$kq=mysqli_query($conn,$sql);
				$tongtap=mysqli_num_rows($kq);
				if($tongtap>1){
				?>
				<h1>Chọn tập phim</h1>
				<ul style="list-style:none;" class="tapphim">
				<?php
				
				while($row=mysqli_fetch_array($kq)){
				?>
				<li style="display:inline-block;background-color:gray;" >
				
					<a href="?view=detail_movie&id=<?php echo $id?>&tap=<?=$row['ep_film']?>" style="display:block;color:white;border:1px solid black;border-radius:8px 8px 8px 8px;  padding-top:10px;padding-bottom:10px;padding-left:15px;padding-right:15px;"><?=$row['ep_film']?></a>
				</li>
				<?php 
				}
				echo '</ul>';
			}
			?>
			<hr style="background-color:red;">
			<br>
			<a href="<?php
				$cl="Thấp";
				if(isset($_GET['quality'])){
					$chatluong=$_GET['quality'];
					if($chatluong=="high") {
						echo $ep['high'];
						$cl="Cao";
					}
					else if($chatluong=="low"){
						echo $ep['low'];
						$cl="Thấp";
					}
				}
				else echo $ep['low'];
				
				
			?>" class="btn btn-raised btn-info" download>Tải về phim</a>
			<a id="btnComment" class="btn btn-raised btn-info" style="margin-left:8px">Nhận xét</a>
			<div class="dropdown pull-right movieQuality">
				<button class="btn btn-raised btn-info" data-toggle="dropdown"><?php echo $cl;?> <span class="caret"></span></button>
				
				<ul class="dropdown-menu">
					<?php
					
						if($ep['low']){
							?>
							<li><a href="?view=detail_movie&id=<?php echo$id?>&tap=<?php echo $tap;?>&quality=low">Thấp</a></li>
						<?php
						}
						if ($ep['high']) {
							if ($user && $user['membership_id'] == 2) {
							?>
							<li><a href="?view=detail_movie&id=<?php echo$id?>&tap=<?php echo $tap;?>&quality=high">Cao</a></li>
							<?php
							}
							else {
							?>
							<li disabled>Cao (dành cho tài khoản VIP)</li>
							<?php
							}
					}
					?>
				</ul>
			</div>
			<br><br>
			<?php include'detail_movie_comment.php';?>
		</div>
	
	<?php
	mysqli_close($conn);
	?>
	<br>
</div>
