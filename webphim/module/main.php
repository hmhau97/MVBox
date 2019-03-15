<div>
<div class="col-md-12" style="weight: 850px;">
<div class="group-title-bg" style="background: url(img/bg-line.png) bottom left no-repeat;"> <div class="group-title"><span class="title1"><a href="?view=loaiphim&loaiphim=3" style="display: inline-block;
    padding:10px;color: #fff;
    font-weight: bold;width: auto;
    font-size: 18px;font-family: 'Roboto', sans-serif;text-decoration: none;">Phim chiếu rạp</a></span><span class="action"><a href="?view=loaiphim&loaiphim=3" class="viewmore" style="width:auto;float: right;
    padding-right: 40px;font-size: 11px; text-transform: uppercase;
    color: #F39B13;font-weight:bold;text-decoration:none;margin-top:15px;">Xem tất cả</a></span> </div> </div>
  <?php
  include("module/connectdatabase.php");
  ?>
  
  <div class="card card-carousel" style="background: #1A1917;">
    <div id="Mycaro" class="carousel slide" data-ride="carousel">
      <div class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="height: 610px;">
          <div class="item active" style="width:850px;">
		  <ul style="list-style:none;margin-left: -35px;">
		  <li style="position: relative;background-color: #1A1917;text-align: left;float:left;margin-right:23px;">
		  <?php
			$sql="SELECT * FROM movies WHERE id_loaiphim=3 ORDER BY movies.id DESC LIMIT 4,1";
			$row=mysqli_fetch_array(mysqli_query($conn,$sql));
		  ?>
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem first" data-togle="tooltip" title="<?php echo $row['details'];?>">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			$sql1="SELECT * FROM movies WHERE id_loaiphim=3 ORDER BY movies.id DESC LIMIT 5,3";
			$kq1=mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($kq1)){
		  ?>
		  <li style="position: relative;background-color: #1A1917;text-align: left;float: left;margin-right:23px;">
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			}
		  ?>
          
		  <li style="position: relative;background-color: #1A1917;text-align: left;float:left;margin-right:23px;">
		  <?php
			$sql="SELECT * FROM movies  WHERE id_loaiphim=3 ORDER BY movies.id DESC LIMIT 8,1";
			$row=mysqli_fetch_array(mysqli_query($conn,$sql));
		  ?>
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem first loweritem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			$sql1="SELECT * FROM movies WHERE id_loaiphim=3 ORDER BY movies.id DESC LIMIT 9,3";
			$kq1=mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($kq1)){
		  ?>
		  <li style="position: relative;background-color: #1A1917;text-align: left;float: left;margin-right:23px;">
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem loweritem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			}
		  ?>
          </div>
          <div class="item" style="width:850px;">
          <ul style="list-style:none;margin-left: -35px;">
		  <li style="position: relative;background-color: #1A1917;text-align: left;float:left;margin-right:23px;">
		  <?php
			$sql="SELECT * FROM movies  WHERE id_loaiphim=3 ORDER BY movies.id DESC LIMIT 12,1";
			$row=mysqli_fetch_array(mysqli_query($conn,$sql));
		  ?>
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem first">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			$sql1="SELECT * FROM movies  WHERE id_loaiphim=3 ORDER BY movies.id DESC LIMIT 6";
			$kq1=mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($kq1)){
		  ?>
		  <li style="position: relative;background-color: #1A1917;text-align: left;float: left;margin-right:23px;">
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			}
		  ?>
          
		  <li style="position: relative;background-color: #1A1917;text-align: left;float:left;margin-right:23px;">
		  <?php
			$sql="SELECT * FROM movies WHERE id_loaiphim=3 ORDER BY movies.id DESC LIMIT 16,1";
			$row=mysqli_fetch_array(mysqli_query($conn,$sql));
		  ?>
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem first loweritem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></h2></a>
          </a>
		  </div>
		  </li>
		  <?php
			$sql1="SELECT * FROM movies  WHERE id_loaiphim=3 ORDER BY movies.id DESC LIMIT 17,3";
			$kq1=mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($kq1)){
		  ?>
		  <li style="position: relative;background-color:#1A1917;text-align: left;float: left;margin-right:23px;">
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem loweritem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			}
		  ?>
        </div>

        <!-- Controls -->
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-md-12" style="weight:850px;">

<div class="group-title-bg"><div class="group-title"><span class="title1" ><a href="/phim-bo.html" style="display: inline-block;
    padding:10px;color: #fff;
    background-color: #1A1917;
    font-weight: bold;width: auto;
    font-size: 18px;font-family:Roboto Condensed,Helvetica,Arial;text-decoration: none;">Phim lẻ mới cập nhật</a></span><span class="action"><a href="?view=loaiphim&loaiphim=2" class="viewmore" style="width:auto;float: right;
    padding-right: 40px;font-size: 11px; text-transform: uppercase;
    color: #F39B13;font-weight:bold;text-decoration:none;margin-top:15px;">Xem tất cả</a></span> </div> </div>
  <div class="card card-carousel">
    <div id="Mycaro1" class="carousel slide" data-ride="carousel">
      <div class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="height: 610px;background: #1A1917;">
          <div class="item active" style="width:850px;">
		  <ul style="list-style:none;margin-left: -35px;">
		  <li style="position: relative;background-color: #1A1917;text-align: left;float:left;margin-right:23px;">
		  <?php
			$sql="SELECT * FROM movies WHERE id_loaiphim=2 ORDER BY movies.id DESC LIMIT 0,1";
			$row=mysqli_fetch_array(mysqli_query($conn,$sql));
		  ?>
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem first">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			$sql1="SELECT * FROM movies WHERE id_loaiphim=2 ORDER BY movies.id DESC LIMIT 1,3";
			$kq1=mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($kq1)){
		  ?>
		  <li style="position: relative;background-color: #1A1917;text-align: left;float: left;margin-right:23px;">
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			}
		  ?>
          
		  <li style="position: relative;background-color: #1A1917;text-align: left;float:left;margin-right:23px;">
		  <?php
			$sql="SELECT * FROM movies  WHERE id_loaiphim=2 ORDER BY movies.id DESC LIMIT 4,1";
			$row=mysqli_fetch_array(mysqli_query($conn,$sql));
		  ?>
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem first loweritem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			$sql1="SELECT * FROM movies WHERE id_loaiphim=2 ORDER BY movies.id DESC LIMIT 5,3";
			$kq1=mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($kq1)){
		  ?>
		  <li style="position: relative;background-color: #1A1917;text-align: left;float: left;margin-right:23px;">
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem loweritem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			}
		  ?>
          </div>
          <div class="item" style="width:850px;">
          <ul style="list-style:none;margin-left: -35px;">
		  <li style="position: relative;background-color: #1A1917;text-align: left;float:left;margin-right:23px;">
		  <?php
			$sql="SELECT * FROM movies  WHERE id_loaiphim=2 ORDER BY movies.id DESC LIMIT 8,1";
			$row=mysqli_fetch_array(mysqli_query($conn,$sql));
		  ?>
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem first">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			$sql1="SELECT * FROM movies  WHERE id_loaiphim=2 ORDER BY movies.id DESC LIMIT 9,3";
			$kq1=mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($kq1)){
		  ?>
		  <li style="position: relative;background-color: #1A1917;text-align: left;float: left;margin-right:23px;">
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			}
		  ?>
          
		  <li style="position: relative;background-color: #1A1917;text-align: left;float:left;margin-right:23px;">
		  <?php
			$sql="SELECT * FROM movies WHERE id_loaiphim=2 ORDER BY movies.id DESC LIMIT 12,1";
			$row=mysqli_fetch_array(mysqli_query($conn,$sql));
		  ?>
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem first loweritem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></h2></a>
          </a>
		  </div>
		  </li>
		  <?php
			$sql1="SELECT * FROM movies  WHERE id_loaiphim=2 ORDER BY movies.id DESC LIMIT 13,3";
			$kq1=mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($kq1)){
		  ?>
		  <li style="position: relative;background-color: #1A1917;text-align: left;float: left;margin-right:23px;">
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem loweritem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
			<span class="tag"> HD </span>
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			}
		  ?>
        </div>

        <!-- Controls -->
        </a>
      </div>
    </div>
  </div>
</div>
</div>
<div class="col-md-12" style="weight: 850px;">
<div class="group-title-bg" style="background: url(img/bg-line.png) bottom left no-repeat;"> <div class="group-title"><span class="title1"><a href="/phim-bo.html" style="display: inline-block;
    padding:10px;color: #fff;
    background-color: #1A1917;
    font-weight: bold;width: auto;
    font-size: 18px;font-family:Roboto Condensed,Helvetica,Arial;text-decoration: none;">Phim bộ mới cập nhật</a></span><span class="action"><a href="?view=loaiphim&loaiphim=1" class="viewmore" style="width:auto;float: right;
    padding-right: 40px; font-size: 11px; text-transform: uppercase;
    color: #F39B13;font-weight:bold;text-decoration:none;margin-top:15px;">Xem tất cả</a></span> </div> </div>
  <div class="card card-carousel">
    <div id="Mycaro2" class="carousel slide" data-ride="carousel">
      <div class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="height:610px;background: #1A1917">
          <div class="item active" style="width:850px;">
		  <ul style="list-style:none;margin-left: -35px;">
		  <li style="position: relative;background-color: #1A1917;text-align: left;float:left;margin-right:23px;">
		  <?php
			$sql="SELECT * FROM movies WHERE id_loaiphim=1 ORDER BY movies.id DESC LIMIT 0,1";
			$row=mysqli_fetch_array(mysqli_query($conn,$sql));
		  ?>
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem first">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			$sql1="SELECT * FROM movies WHERE id_loaiphim=1 ORDER BY movies.id DESC LIMIT 1,3";
			$kq1=mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($kq1)){
		  ?>
		  <li style="position: relative;background-color: #1A1917;text-align: left;float: left;margin-right:23px;">
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			}
		  ?>
          
		  <li style="position: relative;background-color: #1A1917;text-align: left;float:left;margin-right:23px;">
		  <?php
			$sql="SELECT * FROM movies  WHERE id_loaiphim=1 ORDER BY movies.id DESC LIMIT 4,1";
			$row=mysqli_fetch_array(mysqli_query($conn,$sql));
		  ?>
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem first loweritem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			$sql1="SELECT * FROM movies WHERE id_loaiphim=1 ORDER BY movies.id DESC LIMIT 5,3";
			$kq1=mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($kq1)){
		  ?>
		  <li style="position: relative;background-color: #1A1917;text-align: left;float: left;margin-right:23px;">
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem loweritem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			}
		  ?>
          </div>
          <div class="item" style="width:850px;">
          <ul style="list-style:none;margin-left: -35px;">
		  <li style="position: relative;background-color: #1A1917;text-align: left;float:left;margin-right:23px;">
		  <?php
			$sql="SELECT * FROM movies  WHERE id_loaiphim=1 ORDER BY movies.id DESC LIMIT 8,1";
			$row=mysqli_fetch_array(mysqli_query($conn,$sql));
		  ?>
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem first">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			$sql1="SELECT * FROM movies  WHERE id_loaiphim=1 ORDER BY movies.id DESC LIMIT 9,3";
			$kq1=mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($kq1)){
		  ?>
		  <li style="position: relative;background-color: #1A1917;text-align: left;float: left;margin-right:23px;">
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			}
		  ?>
          
		  <li style="position: relative;background-color: #1A1917;text-align: left;float:left;margin-right:23px;">
		  <?php
			$sql="SELECT * FROM movies WHERE id_loaiphim=1 ORDER BY movies.id DESC LIMIT 12,1";
			$row=mysqli_fetch_array(mysqli_query($conn,$sql));
		  ?>
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem first loweritem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></h2></a>
          </a>
		  </div>
		  </li>
		  <?php
			$sql1="SELECT * FROM movies  WHERE id_loaiphim=1 ORDER BY movies.id DESC LIMIT 13,3";
			$kq1=mysqli_query($conn,$sql1);
			while($row=mysqli_fetch_array($kq1)){
		  ?>
		  <li style="position: relative;background-color: #1A1917;text-align: left;float: left;margin-right:23px;">
		  <div style="height:292px;width:180px;">
          <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="btn btn-primary btn-raised mybtn myitem loweritem">
            <img class="slide img-responsive" src="<?=$row['images'];?>" alt="Awesome Image" style="height:250px;width:180px;-webkit-transition: all .2s;">
			<span class="label-range"> <?=$row['thoiluong'];?> </span>
			
            <a href="index.php?view=detail_movie&id=<?=$row['id']?>" class="film-name"><h2><?=$row['name_english'];?></h2><?=$row['name'];?></a>
          </a>
		  </div>
		  </li>
		  <?php
			}
		  ?>
        </div>

        <!-- Controls -->
      </div>
    </div>
  </div>
</div>
</div>
</div>