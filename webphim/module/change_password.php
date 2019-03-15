<?php
  if(isset($_SESSION['user'])){
?>
<script>
  document.title = "Đổi mật khẩu";
</script>

<div class="row">
  <div class="col-md-3 hidden-xs">
  </div>
  <div class="col-sm-6 col-xs-12">
    <form method="post" style="background:#fafad4;margin-top:64px;margin-bottom:32px;padding:16px;border:solid 1px #444;border-radius:6px;">
      <div class="form-group label-floating has-error">
        <label class="control-label myform">Mật khẩu cũ</label>
        <input type="password" class="form-control" name="old_pass" id="old_pass" required>
      </div>
      <div class="form-group label-floating has-error">
        <label class="control-label myform">Mật khẩu mới</label>
        <input type="password" class="form-control" name="new_pass" id="new_pass" required>
      </div>
      <input type="hidden" value="<?php echo $a = mt_rand(1000, 9999); ?>" name="captcha_confirm">
      <div id="captcha_confirm" style="font-weight:bold;background:#fafa84;padding:4px 16px;"><?php echo $a; ?></div>
      <div class="form-group label-floating has-error">
        <label class="control-label myform">Mã xác nhận</label>
        <input type="number" class="form-control" name="captcha" id="captcha" required>
      </div>
      <div class="form-group label-floating has-error" style="text-align:center;">
        <input type="submit" value="Đổi mật khẩu" name="submit" style="width:100%;padding:4px 0;font-weight:bold;border:solid 1px #666;border-radius:6px;">
      </div>
      <?php
        if (isset($_POST["submit"])) {
          include("connectdatabase.php");
          $username = $_SESSION['user'];
          $old_pass = md5($_POST["old_pass"]);
          $new_pass = md5($_POST["new_pass"]);
          $captcha = $_POST["captcha"];
          $captcha_confirm = $_POST["captcha_confirm"];
          if ($captcha != $captcha_confirm) {
            echo '<div class="alert alert-danger">
              <div class="container-fluid">
              <div class="alert-icon">
                <i class="material-icons">error_outline</i>
              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="material-icons">clear</i></span>
              </button>
                <b>Lỗi:</b> Mã CAPTCHA nhập không khớp, mời bạn nhập lại!
              </div>
              </div>';
            exit();
          }
          $sql = "SELECT User_Name, password FROM users WHERE User_Name='$username' AND password='$old_pass'";
          $qry = mysqli_query($conn, $sql);
          if (mysqli_num_rows($qry) == 0) {
            echo '<div class="alert alert-danger">
              <div class="container-fluid">
              <div class="alert-icon">
                <i class="material-icons">error_outline</i>
              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="material-icons">clear</i></span>
              </button>
                <b>Lỗi:</b> Mật khẩu cũ không đúng, mời bạn nhập lại!
              </div>
              </div>';
            exit();
          }
          $sql = "UPDATE users SET password='$new_pass' WHERE User_Name='$username' AND password='$old_pass'";
          $qry = mysqli_query($conn, $sql);
          if (!$qry)
            exit();
          echo '<div class="alert alert-success">
            <div class="container-fluid">
            <div class="alert-icon">
              <i class="material-icons">error_outline</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">clear</i></span>
            </button>
              <b>Thông báo:</b> Đổi mật khẩu thành công!
            </div>
            </div>';
          mysqli_close($conn);
        }
      ?>
    </form>
  </div>
  <div class="col-md-3 hidden-xs">
  </div>
</div>
<?php
}else{
  header("location:index.php?view=main");
}
?>