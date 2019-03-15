<?php
include ("module/connectdatabase.php");
if (isset($_POST['search'])) {
	
	
	$t=$_POST['tim'];
}
	if(isset($_GET['tim'])){
		
		$tim=$_GET['tim'];
	}
	else {
	
		$tim=$_POST['tim'];
	}

	if($tim==NULL){
		exit('
				<script>
					alert("Bạn chưa chọn tiêu chí tìm kiếm!");
				</script>
				');
	}
	else{
	if(isset($_GET['page']))
			$page=$_GET['page'];
	else $page=1;
		$sotin=8;
		$from = ($page-1)*$sotin;
	if(($tim!=NULL)){
	$sql="SELECT movies.* FROM movies WHERE tag LIKE '%$tim%' OR name LIKE '%$tim%' OR namsanxuat LIKE '%$tim%' OR daodien LIKE '%$tim%' OR dienvien LIKE '%$tim%'";
	$select = "SELECT movies.* FROM movies WHERE tag LIKE '%$tim%' OR name LIKE '%$tim%' OR namsanxuat LIKE '%$tim%' OR daodien LIKE '%$tim%' OR dienvien LIKE '%$tim%' LIMIT $from,$sotin";
	$result = mysqli_query($conn, $select);
	$kq=mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);
	$dong=mysqli_num_rows($kq);
	}

	else if(($tim!=NULL)){
	$sql="SELECT movies.*,movie_kind_names.id FROM movies,movie_kind_names WHERE (movies.kind_id=movie_kind_names.id) AND (movies.kind_id = $value) AND (movies.tag LIKE '%$tim%' OR movies.name LIKE '%$tim%' OR movies.namsanxuat LIKE '%$tim%' OR movies.daodien LIKE '%$tim%' OR movies.dienvien LIKE '%$tim%')";
	$select = "SELECT movies.*,movie_kind_names.id FROM movies,movie_kind_names WHERE (movies.kind_id=movie_kind_names.id) AND (movies.kind_id = $value) AND (movies.tag LIKE '%$tim%' OR movies.name LIKE '%$tim%' OR movies.namsanxuat LIKE '%$tim%' OR movies.daodien LIKE '%$tim%' OR movies.dienvien LIKE '%$tim%') LIMIT $from,$sotin";
	$result = mysqli_query($conn, $select);
	$kq=mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);
	$dong=mysqli_num_rows($kq);
	}

	else if (($tim!=NULL)){
	$sql="SELECT movies.*,quocgia.* FROM movies,quocgia WHERE (movies.quocgia=quocgia.id) AND (quocgia.id LIKE '%$value2%') AND (movies.tag LIKE '%$tim%' OR movies.name LIKE '%$tim%' OR movies.namsanxuat LIKE '%$tim%' OR movies.daodien LIKE '%$tim%' OR movies.dienvien LIKE '%$tim%')";
	$select = "SELECT movies.*,quocgia.* FROM movies,quocgia WHERE (movies.quocgia=quocgia.id) AND (quocgia.id LIKE '%$value2%') AND (movies.tag LIKE '%$tim%' OR movies.name LIKE '%$tim%' OR movies.namsanxuat LIKE '%$tim%' OR movies.daodien LIKE '%$tim%' OR movies.dienvien LIKE '%$tim%') LIMIT $from,$sotin";
	$result = mysqli_query($conn, $select);
	$kq=mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);
	$dong=mysqli_num_rows($kq);
	}

	else if(($tim!=NULL)){
	$sql="SELECT movies.*,movie_kind_names.id,quocgia.* FROM movies,movie_kind_names,quocgia WHERE (movies.kind_id=movie_kind_names.id) AND (movies.quocgia=quocgia.id) AND ((kind_id LIKE '$value1' OR kind_id LIKE '$value1,%') OR (kind_id LIKE '%,$value1,%' OR kind_id LIKE '%,$value1')) AND (quocgia.id LIKE '%$value2%') AND (movies.tag LIKE '%$tim%' OR movies.name LIKE '%$tim%' OR movies.namsanxuat LIKE '%$tim%' OR movies.daodien LIKE '%$tim%' OR movies.dienvien LIKE '%$tim%')";
	$select = "SELECT movies.*,movie_kind_names.id,quocgia.* FROM movies,movie_kind_names,quocgia WHERE (movies.kind_id=movie_kind_names.id) AND (movies.quocgia=quocgia.id) AND ((kind_id LIKE '$value1' OR kind_id LIKE '$value1,%') OR (kind_id LIKE '%,$value1,%' OR kind_id LIKE '%,$value1')) AND (quocgia.id LIKE '%$value2%') AND (movies.tag LIKE '%$tim%' OR movies.name LIKE '%$tim%' OR movies.namsanxuat LIKE '%$tim%' OR movies.daodien LIKE '%$tim%' OR movies.dienvien LIKE '%$tim%') LIMIT $from,$sotin";
	$result = mysqli_query($conn, $select);
	$kq=mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);
	$dong=mysqli_num_rows($kq);
	}

	else if(($tim==NULL)){
	$sql="SELECT movies.*,movie_kind_names.id FROM movies,movie_kind_names WHERE (movies.kind_id=movie_kind_names.id) AND ((kind_id LIKE '$value1' OR kind_id LIKE '$value1,%') OR (kind_id LIKE '%,$value1,%' OR kind_id LIKE '%,$value1'))";
	$select = "SELECT movies.*,movie_kind_names.id FROM movies,movie_kind_names WHERE (movies.kind_id=movie_kind_names.id) AND ((kind_id LIKE '$value1' OR kind_id LIKE '$value1,%') OR (kind_id LIKE '%,$value1,%' OR kind_id LIKE '%,$value1')) LIMIT $from,$sotin";
	$result = mysqli_query($conn, $select);
	$kq=mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);
	$dong=mysqli_num_rows($kq);
	}
	else if (($tim==NULL)){
	$sql="SELECT movies.*,quocgia.* FROM movies,quocgia WHERE (movies.quocgia=quocgia.id) AND (quocgia.id LIKE '%$value2%')";
	$select = "SELECT movies.*,quocgia.* FROM movies,quocgia WHERE (movies.quocgia=quocgia.id) AND (quocgia.id LIKE '%$value2%') LIMIT $from,$sotin";
	$result = mysqli_query($conn, $select);
	$kq=mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);
	$dong=mysqli_num_rows($kq);
	}

	else if(($tim==NULL)){
	$sql="SELECT movies.*,movie_kind_names.id,quocgia.* FROM movies,movie_kind_names,quocgia WHERE (movies.kind_id=movie_kind_names.id) AND (movies.quocgia=quocgia.id) AND ((kind_id LIKE '$value1' OR kind_id LIKE '$value1,%') OR (kind_id LIKE '%,$value1,%' OR kind_id LIKE '%,$value1')) AND (quocgia.id LIKE '%$value2%')";
	$select = "SELECT movies.*,movie_kind_names.id,quocgia.* FROM movies,movie_kind_names,quocgia WHERE (movies.kind_id=movie_kind_names.id) AND (movies.quocgia=quocgia.id) AND ((kind_id LIKE '$value1' OR kind_id LIKE '$value1,%') OR (kind_id LIKE '%,$value1,%' OR kind_id LIKE '%,$value1')) AND (quocgia.id LIKE '%$value2%') LIMIT $from,$sotin";
	$result = mysqli_query($conn, $select);
	$kq=mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);
	$dong=mysqli_num_rows($kq);
	}
	
	
	?>
	<div class="col-md-12" style="width: 850px;float:left;">
		<div class="card card-carousel" style="850px;">
			<div id="Mycaro" class="carousel slide" data-ride="carousel" style="height: 670px;">
				<div class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" style="height: 670px;">
	<?php
	
		$sotrang=ceil($dong/$sotin);
	if ($num) {
		
		echo '<h2><i class="fa fa-search"></i> Kết quả tìm kiếm:'.$dong.' kết quả</h2>';
		?>
			
			 <ul style="list-style:none;margin-left: -35px; margin-top:15px;">
		<?php
		while ($row = mysqli_fetch_assoc($result)) {
			?>
			<li style="position: relative;background-color: #fff;text-align: left;float:left;margin-right:23px;">
			<div style="height:292px;width:180px;">
			<a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem">
            <img class="slide img-responsive" src=<?=$row['images'];?> alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			<span class="tag"> HD </span>
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
			</div>
		  </li>
			<?php
		}
	}
	else {
		echo '<h2>Không tìm thấy kết quả nào</h2><div class="NULL"></div>';
	}
	?>
	</div>
	</div>
		<div class="row">
		<div class="col-xs-12 text-center">
			<ul class="pagination">
			<?php
				if($page>1){
			?>
			<li class="active"><a href="?view=search&page=<?php echo ($page-1);?>&value1=<?php echo $value1;?>&value2=<?php echo $value2;?>&tim=<?php echo $tim;?>">Trang trước</a></li>
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
							<a href="?view=search&page=<?php echo $i;?>&value1=<?php echo $value1;?>&value2=<?php echo $value2;?>&tim=<?php echo $tim;?>"><?php echo ($i)?></a>
						</li>
				<?php
					}
				}
				if($page<$sotrang){
				?>
				<li class="active"><a href="?view=search&page=<?php echo $i;?>&value1=<?php echo $value1;?>&value2=<?php echo $value2;?>&tim=<?php echo $tim;?>">Trang sau</a></li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>
	</div>	
	</div>
	
	</div>
	
	<div style="width:310px;float:right;margin-top:46px;">
		<?php
			include("module/phimmoi.php");
		?>
	</div>
	<?php
	}
	mysqli_free_result($result);
	mysqli_close($conn);

?>
