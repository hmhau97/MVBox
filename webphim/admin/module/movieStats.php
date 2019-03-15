<?php
include'connection.php';

$year = isset($_GET['year']) ? $_GET['year'] : date('Y', time());
$month = isset($_GET['month']) ? $_GET['month'] : date('m', time());
$sort = isset($_GET['sort']) && $_GET['sort'] == 'ASC' ? 'ASC' : 'DESC';
?>

<div class="container">
	<div class="row">
		<h2 class="text-center">Thống kê lượt xem theo từng tháng</h2>
		<br>
		<div class="col-xs-12 text-center h3">
			<a href="?view=movieStats&month=<?php echo $month - 1 < 1 ? '12&year='.($year - 1) : ($month - 1).'&year='.$year;?>" class="pull-left">
				<?php echo '&larr; Tháng '.($month - 1 < 1 ? '12/'.($year - 1) : ($month - 1).'/'.$year);?>
			</a>
			<b>
				<input type="month" value="<?php echo"$year-".($month < 10 ? "0".$month : $month)?>" id="inputMonth">
			</b>
			<a href="?view=movieStats&month=<?php echo $month + 1 > 12 ? '1&year='.($year + 1) : ($month + 1).'&year='.$year;?>" class="pull-right">
				<?php echo 'Tháng '.($month + 1 > 12 ? '1/'.($year + 1) : ($month + 1).'/'.$year).' &rarr;';?>
			</a>
			<br>
			<br>
		</div>
		<table class="col-xs-12 table table-striped">
			<thead>
				<tr>
					<th>Tên phim</th>
					<th>
						Lượt xem trong tháng
						<?php
						if ($sort == 'ASC') {
							?>
							<a class="badge" onclick="location.assign(location.search + '&sort=DESC');">Ít nhất</a>
							<?php
						}
						else {
							?>
							<a class="badge" onclick="location.assign(location.search + '&sort=ASC');">Nhiều nhất</a>
							<?php
						}
						?>
					</th>
					<th>Tổng số lượt xem</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT movies_stats.id, movie_id, movies.name AS movie_name, movies_stats.view, month, year FROM movies_stats JOIN movies ON movie_id=movies.id WHERE month=$month AND year=$year ORDER BY view $sort";
				$result = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_assoc($result)) {
					?>
					<tr>
						<td><?php echo$row['movie_name']?></td>
						<td>
							<?php
							$month2 = $month - 1 < 1 ? 12 : $month - 1;
							$year2 = $month2 == 12 ? $year - 1 : $year;
							$sql = "SELECT view FROM movies_stats WHERE month=$month2 AND year=$year2 AND movie_id=".$row['movie_id'];
							$result2 = mysqli_query($conn, $sql);
							echo $row['view'];
							if (mysqli_num_rows($result2)) {
								$num = $row['view'] - mysqli_fetch_row($result2)[0];
								echo ' <span class="badge" style="background:'.($num < 0 ? '#e44' : '#4b4').'" title="Lượt xem so với tháng trước">'.($num < 0 ? '-' : '+').abs($num).'<span>';
							}
							?>
						</td>
						<td>
							<?php
							$sql = "SELECT view FROM movies WHERE id=".$row['movie_id'];
							$result2 = mysqli_query($conn, $sql);
							echo mysqli_fetch_row($result2)[0];
							?>
						</td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>
</div>
</div>
<br>

<script>
	inputMonth.onchange = function() {
		location.assign(`?view=movieStats&month=${this.valueAsDate.getMonth() + 1}&year=${this.valueAsDate.getFullYear()}`);
	};
</script>

<?php
mysqli_close($conn);
?>
