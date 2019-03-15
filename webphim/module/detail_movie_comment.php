<style>
	a {
		color: #24f;
	}
	.commentText {
		border-bottom: solid 1px #bbb;
		margin-bottom: 12px;
	}
	.commentContent {
		width: 100%;
		margin-top: 12px;
		padding-left: 8px;
		padding-right: 8px;
		border-radius: 2px;
	}
	.commentItem {
		padding: 4px 8px;
		display: flex;
		align-items: flex-start;
	}
	.commentItemUserAvatar {
		width: 32px;
		height: 32px;
		margin-right: 16px;
	}
	.commentItemUser {
		color: teal;
	}
	.commentItemTime {
		color: #aaa;
	}
</style>

<?php
if (isset($_POST['commentSubmit'])) {
	$commentContent = htmlentities($_POST['commentContent']);
	$sql = "INSERT INTO movies_comment (content, user_id, movie_id, time) VALUES ('$commentContent', ".$_SESSION['id'].", $id, ".time().")";
	mysqli_query($conn, $sql);
	header('location: ?'.$_SERVER['QUERY_STRING']);
}

$sql = "SELECT content, users.User_Name AS user, time, users.avatar AS avatar FROM movies_comment JOIN users ON movies_comment.user_id=users.id WHERE movie_id=$id ORDER BY time";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

echo'
<div class="commentText"><b>Nhận xét</b> ('.$num.' nhận xét)</div>
';

while ($row = mysqli_fetch_assoc($result)) {
	if ($row['time'] > time() - 10)
		$row['time'] = 'Vừa xong';
	elseif ($row['time'] > time() - 60)
		$row['time'] = floor(time() - $row['time']).' giây trước';
	elseif ($row['time'] > time() - 60 * 60)
		$row['time'] = floor((time() - $row['time']) / 60).' phút trước';
	elseif ($row['time'] > time() - 60 * 60 * 24)
		$row['time'] = floor((time() - $row['time']) / 60 / 60).' giờ trước';
	else
		$row['time'] = date('d/m/Y H:i', $row['time']);
	echo'
	<div class="commentItem">
		<img class="commentItemUserAvatar" src="'.$row['avatar'].'">
		<div>
			<div class="commentItemUser"><b>'.$row['user'].' </b></div>
			<div class="commentItemContent">'.str_replace("\n", '<br>', $row['content']).'</div>
			<div class="commentItemTime"><small>'.$row['time'].'</small></div>
		</div>
	</div>
	';
}
?>

<?php
if (isset($_SESSION['id'])) {
	?>
	<form action="" method="post" id="commentForm">
		<textarea name="commentContent" class="commentContent" id="commentContent" rows="5" placeholder="Nhập lời bình của bạn..." required></textarea>
		<div class="text-right">
			<input type="submit" name="commentSubmit" value="Đăng nhận xét">
		</div>
	</form>
	<?php
}
else {
	?>
	<br>
	<p><a href="?view=login" id="commentContent">Đăng nhập</a> để bình luận.</p>
	<?php
}
?>

<script>
	$(document).ready(function() {
		btnComment.onclick = function() {
			commentContent.scrollIntoViewIfNeeded();
			commentContent.focus();
		}
	});
</script>
