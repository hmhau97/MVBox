<?php 
	//goi file ket noi den server dung chung
include("connection.php");
		//viet cau lenh truy van select
$sqlSelect = "SELECT * FROM users";
		//thuc thi cau truy van
$result = mysqli_query($conn,$sqlSelect);
		//dem so luong ban ghi tra ve
$num_rows = mysqli_num_rows($result);
		//duyet xu ly ket qua tra ve
?>
<h1 align="center"><b>Có <?php echo $num_rows ?> người dùng </b></h1>
<table class="table">
	<thead>
		<tr>
			<th class="text-center">ID</th>
			<th>User name</th>
			<th>Email</th>
			<th>Age</th>
			<th>Full Name</th>
			<th class="text-right">Membership</th>
			<th class="text-right">Balance</th>
			<th class="text-center" style="border-left:solid 1px #eee">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		while($row = mysqli_fetch_array($result)){
			?>
			<tr>
				<td class="text-center"><?php echo $row["id"] ?></td>
				<td><?php echo $row[1] ?></td>
				<td><?php echo $row["email"] ?></td>
				<td><?php echo $row["age"] ?></td>
				<td><?php echo $row["Full_Name"] ?></td>

				<td class="text-right"><?php if($row["membership_id"]==1){echo'Standard';}else{echo'V.I.P';} ?></td>
				<td class="text-right"><?php echo $row["balance"] ?></td>
				<td class="td-actions text-center" style="border-left:solid 1px #eee">
					<a href=""><button type="button" rel="tooltip" title="View Profile" class="btn btn-info btn-simple btn-xs">
						<i class="fa fa-user"></i>
					</button></a>
					<a href="index.php?view=editUser&id=<?php echo $row["id"] ?>"><button type="button" rel="tooltip" title="Edit Profile" class="btn btn-success btn-simple btn-xs">
						<i class="fa fa-edit"></i>
					</button></a>
					<a href="index.php?view=delete&id=<?php echo $row["id"] ?>"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
						<i class="fa fa-times"></i>
					</button></a>
				</td>
			</tr>
			<?php 
		}
		mysqli_close($conn);
		?>
	</tbody>
</table>
