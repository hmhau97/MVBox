<?php
include'connection.php';

$movie_kind_name = array();
$sql = "SELECT * FROM movie_kind_names";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  $movie_kind_name[$row['id']] = $row['name'];
}
mysqli_free_result($result);

mysqli_close($conn);
?>

<nav class="navbar navbar-fixed-top navbar-danger navbar-color-on-scroll <?php if(!isset($_GET['view'])){echo 'navbar-transparent';} ?>" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand logo" id="logo" href="../"><img src="../Image/Logo.png" width="80px;" alt="" style="margin-left:-50px; margin-top:-10px"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="<?php if(!isset($_GET['view'])){echo 'active';} ?> dh"><a href="./index.php">Home</a></li>

        <li class="">
          <a href="index.php?view=listUser" class=" dh" >Danh Sách User</a>
        </li>
        <li class="">
          <a href="index.php?view=addUser" class=" dh" >Thêm User</a>
        </li>   
        <li class="">
          <a href="index.php?view=listMovie" class=" dh" >Danh Sách Phim</a>
        </li> 
        <li class="">
          <a href="index.php?view=checkMovie" class=" dh" >Xét duyệt phim mới</a>
        </li>
		<li class="">
          <a href="index.php?view=checkEp_Movie" class=" dh" >Xét duyệt tập</a>
        </li>
		
        <li class="">
          <a href="index.php?view=addMovie" class=" dh" >Thêm Phim</a>
        </li>
		<li class="">
          <a href="index.php?view=addEpisode" class=" dh" >Thêm tập phim</a>
        </li>
		
         <li class="">
          <a href="index.php?view=card" class=" dh" >Thẻ Nạp</a>
        </li>            
        <?php 
        if(isset($_SESSION['admin'])){
          ?>
          <li><a href="index.php?view=logout">Đăng xuất<b><?php echo $_SESSION["admin"][1] ?></b></a></li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
