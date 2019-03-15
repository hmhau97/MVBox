<?php
	include('connectdatabase.php');
	$sql="SELECT * FROM movies WHERE movies.id_loaiphim='3'";
	$kq=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($kq)){
?>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?=$row['name_english'];?></h4>
      </div>
      <div class="modal-body">
        <img src="Phim/Civil War/CW-big-poster.jpg" width="552px" height="207px" alt="">
        <p><?=$row['details']?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        <a href="index.php?view=CW"><button type="button" class="btn btn-info">Xem Phim</button></a>
      </div>
    </div>
  </div>
</div>
<?php
	}
?>
