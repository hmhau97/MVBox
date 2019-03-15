<style>
	.mname {
		bottom: 20px;
		width: 91%;
		white-space: normal;
		font-family: "Roboto", "Helvetica", "Arial", sans-serif;
		font-weight: 300;
		font-size: 14px;
		padding: 0 4px;
		margin: 8px;
		text-transform: none;
	}
</style>

<br>
<!--<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<br>-->
			<?php
			include'connectdatabase.php';

			$sotin = 12;
			if(isset($_GET['page']))
				$page=$_GET['page'];
			else $page=1;
			$from=($page-1)*$sotin;
			$loaiphim = $_GET['loaiphim'];
			if ($loaiphim == 0) {
				$sql = "SELECT COUNT(0) FROM movies";
				$result = mysqli_query($conn, $sql);
				$dong = mysqli_fetch_row($result)[0];

				$sql = "SELECT * FROM movies LIMIT $from, $sotin";
				$result = mysqli_query($conn, $sql);
				$num = mysqli_num_rows($result);
			}
			else {
				$sql = "SELECT COUNT(0) FROM movies WHERE id_loaiphim=$loaiphim ORDER BY movies.id DESC";
				$result = mysqli_query($conn, $sql);
				$dong = mysqli_fetch_row($result)[0];

				$sql = "SELECT * FROM movies WHERE id_loaiphim=$loaiphim ORDER BY movies.id DESC LIMIT $from, $sotin";
				$result = mysqli_query($conn, $sql);
				$num = mysqli_num_rows($result);
			}
			?>
			<div class="col-md-12" style="width: 850px;float:left;">
			<div class="card card-carousel">
			<div id="Mycaro" class="carousel slide" data-ride="carousel">
				<div class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" style="height: 960px;">
			<?php
				$sql1="SELECT loaiphim.loaiphim FROM loaiphim WHERE loaiphim.id='$loaiphim'";
				$kq=mysqli_query($conn,$sql1);
				$row=mysqli_fetch_array($kq);
			if ($num) {
				echo '<h2>'.$row['loaiphim'].'</h2>';
				$sotrang=ceil($dong/$sotin);
				?>
				<ul style="list-style:none;margin-left: -35px; margin-top:15px;">
			<?php
				while ($row = mysqli_fetch_array($result)) {
				?>
					<li style="position: relative;background-color: #fff;text-align: left;float:left;margin-right:23px;">
					<div style="height:292px;width:180px;">
					<a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem">
					<img class="slide img-responsive" src=<?=$row['images'];?> alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
					<span class="label-range"> <?=$row['thoiluong'];?> </span>
					
					<a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
					</a>
					</div>
				</li>
			<?php
				}
			}
			?>
			<br>
		</div>
	</div>
</div>
<?php
if ($dong) {
	?>
	<div class="row">
		<div class="col-xs-12 text-center">
			<ul class="pagination">
			<?php
				if($page>1){
			?>
			<li class="active"><a href="?view=loaiphim&loaiphim=<?php echo $loaiphim;?>&page=<?php echo ($page-1);?>">Trang trước</a></li>
				<?php
				}
				for ($i = 1; $i <= $sotrang; $i++) {
					if ($page == $i) {
						echo'
						<li class="active">
							<a>'.($i).'</a>
						</li>
						';
					}
					else {
						?>
						<li>
							<a href="?view=loaiphim&loaiphim=<?php echo $loaiphim;?>&page=<?php echo ($i)?>"><?php echo ($i)?></a>
						</li>
				<?php
					}
				}
				if($page<$sotrang){
				?>
				<li class="active"><a href="?view=loaiphim&loaiphim=<?php echo $loaiphim;?>&page=<?php echo ($page+1)?>">Trang sau</a></li>
				<?php
					}
				?>			
			</ul>
		</div>
	</div>
	</div>
	</div>
<?php
}
?>
<div style="width:310px;float:right;">
		<?php
			include("module/thong_ke.php");
		?>
</div>
