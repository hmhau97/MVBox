
<?php 
	include("connection.php");//ket noi csdl
	$sqlSelectMovieById = "SELECT * FROM movies WHERE id = ".$_GET["id"];
	$results = mysqli_query($conn,$sqlSelectMovieById);
	$row = mysqli_fetch_row($results);
	$sqlidlp="SELECT * FROM movies,loaiphim WHERE movies.id_loaiphim=loaiphim.id AND movies.id=".$_GET["id"];
	$resultidlp = mysqli_query($conn,$sqlidlp);
	$rowidlp = mysqli_fetch_row($resultidlp);

	$sqlidqg="SELECT * FROM movies,quocgia WHERE movies.quocgia=quocgia.id AND movies.id=".$_GET["id"];
	$resultidqg = mysqli_query($conn,$sqlidqg);
	$rowidqg = mysqli_fetch_row($resultidqg);
	if(isset($_POST["edit"])){
		if($_FILES["image"]["name"]){
			$imgUrl="";
			$path = "uploads/";//khai bao thu muc nhan file dc upload
			$tmp_name = $_FILES["image"]["tmp_name"];//lay ten file duoc dua len server trong thu muc temp
			$fileName = $_FILES["image"]["name"];//ten cua file dc upload
			$imgUrl =  $path . $fileName;//noi duong dan thu muc upload voi ten file
			if($_FILES["image"]["type"]=="image/jpeg"){//kiem tra xem file dua len co phai la anh hay khong
				move_uploaded_file($tmp_name,"../".$path . $fileName);//di chuyen file tu thu muc temp sang thu muc ma chung ta muon
			}else{
				echo "File không đúng định dạng";
			}
		}else{
			$imgUrl = $row[6];
		}
		if($_FILES["poster"]["name"]){
			$posterUrl="";
			$path = "uploads/";//khai bao thu muc nhan file dc upload
			$tmp_name = $_FILES["poster"]["tmp_name"];//lay ten file duoc dua len server trong thu muc temp
			$fileName = $_FILES["poster"]["name"];//ten cua file dc upload
			$posterUrl =  $path . $fileName;//noi duong dan thu muc upload voi ten file
			if($_FILES["poster"]["type"]=="image/jpeg"){//kiem tra xem file dua len co phai la anh hay khong
				move_uploaded_file($tmp_name,"../".$path . $fileName);//di chuyen file tu thu muc temp sang thu muc ma chung ta muon
			}else{
				echo "File không đúng định dạng";
			}
		}else{
			$posterUrl = $row[7];
		}
		$movieId= $_GET["id"];
		$movieName = $_POST["name"];
		$movieNameel = $_POST["nameel"];
		$kind = $_POST["tl"];
		$lp = $_POST["chonlp"];
		$detail= $_POST["gtphim"];
		$tag = $_POST["tag"];
		$dvien = $_POST["dv"];
		$daodien = $_POST["daodien"];
		$namsx = $_POST["namsx"];
		$quocgia = $_POST["chonqg"];
		$thoiluong = $_POST["thoiluong"];
        $sqlUpdate ="UPDATE movies SET 
       	name = '$movieName', name_english='$movieNameel', kind_id='$kind', 
        id_loaiphim ='$lp', details='$detail', 
        tag='$tag', images='$imgUrl', poster='$posterUrl', daodien='$daodien',namsanxuat='$namsx',
        quocgia='$quocgia', thoiluong='$thoiluong', dienvien='$dvien'
        WHERE id='$movieId'";
		mysqli_query($conn,$sqlUpdate);
		header("location:index.php?view=listMovie");
	}
?>
<div class="col-md-10">
<form action="" method="post" enctype="multipart/form-data">
	<table width="500" align="center">
	<caption>
		<h3 align="center">Sửa thông tin Phim</h3>
	</caption>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Tên Phim</label>
				<input type="hidden" name="id" id="id" value="<?php echo $row[0] ?>">
				<input class="form-control" name="name" id="name" value="<?php echo $row[1] ?>">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Tên Tiếng Anh</label>
				<input class="form-control" type="text" placeholder="Nhập tên Tiếng Anh của phim" name="nameel" id="kind"  value="<?php echo $row[2] ?>">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Thể loại</label>
				<input class="form-control" type="text" placeholder="Nhập ID của thể loại phim. Mỗi giá trị phân cách bằng dấu phẩy" name="tl" id="kind"  value="<?php echo $row[3] ?>">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Lọai phim</label>
				<select name="chonlp">
					<?php
						$sqlselectlp="SELECT * FROM loaiphim";
						$kqlp=mysqli_query($conn,$sqlselectlp);
						while($rowlp = mysqli_fetch_array($kqlp)){
					?>
					<option value="<?php echo $rowlp['id'];?>" <?php if($rowlp['id']==$rowidlp[18]) echo 'selected';?>><?php echo $rowlp['loaiphim'];?></option>
					<?php 
						}
					?>
				</select>	
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Giới thiệu phim</label>
				<input class="form-control" type="text" name="gtphim" id="kind"  value="<?php echo $row[5] ?>">
			</td>
		</tr>
		<tr>
			<td class="">
				<label class="control-label myform">Image</label>
				<img class="img-raised img-responsive" src="<?php echo "../".$row[6] ?>" width="100px" height="100px">
				<input type="file" name="image" id="poster">
			</td>
		</tr>
		<tr>
			<td class="">
				<label class="control-label myform">Poster</label>
				<img class="img-raised img-responsive" src="<?php echo "../".$row[7] ?>" width="200" height="100px">
				<input type="file" name="poster" id="poster">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating has-error">
			<label class="control-label myform">TAG</label>
			<input class="form-control" type="text" name="tag" id="tag" value="<?php echo $row[8] ?>">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating has-error">
			<label class="control-label myform">Diễn viên</label>
			<input class="form-control" type="text" name="dv" id="tag" value="<?php echo $row[9] ?>">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Đạo diễn</label>
				<input class="form-control" type="text" name="daodien" id="kind"  value="<?php echo $row[10] ?>">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Năm sản xuất</label>
				<input class="form-control" type="number" name="namsx" id="kind"  value="<?php echo $row[11] ?>">
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Quốc gia</label>
				<select name="chonqg">
					<?php
						$sqlselectqg="SELECT * FROM quocgia";
						$kqqg=mysqli_query($conn,$sqlselectqg);
						while($rowqg= mysqli_fetch_array($kqqg)){
					?>
					<option value="<?php echo $rowqg['id'];?>" <?php if($rowqg['id']==$rowidqg[18]) echo 'selected';?>><?php echo $rowqg['quocgia'];?></option>
					<?php 
						}
					?>
				</select>	
			</td>
		</tr>
		<tr>
			<td class="form-group label-floating">
				<label class="control-label myform">Thời lượng</label>
				<input class="form-control" type="text" name="thoiluong" id="kind"  value="<?php echo $row[13] ?>">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input class="btn btn-raised btn-danger" type="submit" value="Cập Nhật" name="edit">
			</td>
		</tr>
	</table>
</form>
</div>
<div class="col-md-2">
    <h2 align="center"><b>Bảng thể loại</b></h2>
    <table class="table">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-right">Tên thể loại</th>
        </tr>
    </thead>
    <tbody>
    <?php 
    	$sqlSelect1 = "SELECT * FROM movie_kind_names";
        $result1 = mysqli_query($conn,$sqlSelect1);
        while($rows = mysqli_fetch_array($result1)){
    ?>
        <tr>
            <td class="text-center"><?php echo $rows["id"] ?></td>
            <td class="text-right"><?php echo $rows["name"] ?></td>
        </tr>
    <?php 
        }
        mysqli_close($conn);
    ?>
    </tbody>
    </table>
</div>