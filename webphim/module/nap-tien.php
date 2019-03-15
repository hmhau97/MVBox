<?php
  if(isset($_SESSION['user'])){
?>
<script>
  document.title = "Nạp Tiền";
</script>

<div class="row">
  <div class="col-md-3 hidden-xs">
  </div>
  <div class="col-sm-6 col-xs-12">
    <form method="post" style="background:#fafad4;margin-top:64px;margin-bottom:32px;padding:16px;border:solid 1px #444;border-radius:6px;">
      <div class="form-group label-floating has-error">
        <label class="control-label myform">Số Seri</label>
        <input type="number" class="form-control" name="seri" id="old_pass" required>
      </div>
      <div class="form-group label-floating has-error">
        <label class="control-label myform">Mã</label>
        <input type="number" class="form-control" name="code" id="new_pass" required>
      </div>
      <input type="hidden" value="<?php echo $a = mt_rand(1000, 9999); ?>" name="captcha_confirm">
      <div id="captcha_confirm" style="font-weight:bold;background:#fafa84;padding:4px 16px;"><?php echo $a; ?></div>
      <div class="form-group label-floating has-error">
        <label class="control-label myform">Mã xác nhận</label>
        <input type="number" class="form-control" name="captcha" id="captcha" required>
      </div>
      <div class="form-group label-floating has-error" style="text-align:center;">
        <input type="submit" value="Nạp Tiền" name="submit" style="width:100%;padding:4px 0;font-weight:bold;border:solid 1px #666;border-radius:6px;">
      </div>
      <?php
        if (isset($_POST["submit"])) {
          include("connectdatabase.php");
          $new_balance=0;
          $username = $_SESSION['user'];
          $seri = $_POST["seri"];
          $code = $_POST["code"];
          $captcha = $_POST["captcha"];
          $sql1 = "SELECT kind FROM card WHERE code_num='$code' AND seri_num='$seri'";
          $qry1 = mysqli_query($conn, $sql1);
          $kind = mysqli_fetch_array($qry1);
          if($kind['kind'] == 1){
            $new_balance=20000;
          }
          if($kind['kind'] == 2){
            $new_balance=50000;
          }
          if($kind['kind'] == 3){
            $new_balance=100000;
          }
          if($kind['kind'] == 4){
            $new_balance=200000;
          }
          if($kind['kind'] == 5){
            $new_balance=500000;
          }
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
          $sql = "SELECT seri_num FROM card WHERE seri_num='$seri' AND code_num='$code'";
          $qry = mysqli_query($conn, $sql);
          $sql1 = "SELECT code_num FROM card WHERE seri_num='$seri'";
          $qry1 = mysqli_query($conn, $sql1);
          $row = mysqli_fetch_array($qry1);
          if($row["code_num"]=="used"){
            echo '<div class="alert alert-danger">
              <div class="container-fluid">
              <div class="alert-icon">
                <i class="material-icons">error_outline</i>
              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="material-icons">clear</i></span>
              </button>
                <b>Lỗi:</b> Thẻ nạp đã được sử dụng!
              </div>
              </div>';
            exit();
          }
          if (mysqli_num_rows($qry) == 0) {
            echo '<div class="alert alert-danger">
              <div class="container-fluid">
              <div class="alert-icon">
                <i class="material-icons">error_outline</i>
              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="material-icons">clear</i></span>
              </button>
                <b>Lỗi:</b> Số seri hoặc mã thẻ không đúng, mời bạn nhập lại!
              </div>
              </div>';
            exit();
          }
          if (mysqli_num_rows($qry) == 0) {
            echo '<div class="alert alert-danger">
              <div class="container-fluid">
              <div class="alert-icon">
                <i class="material-icons">error_outline</i>
              </div>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="material-icons">clear</i></span>
              </button>
                <b>Lỗi:</b> Mã thẻ không đúng, mời bạn nhập lại!
              </div>
              </div>';
            exit();
          }
          $sql = "UPDATE users SET balance=balance+'$new_balance' WHERE User_Name='$username'";
          $qry = mysqli_query($conn, $sql);
          if (!$qry)
            exit();
          $sql2 = "UPDATE card SET code_num='used' WHERE code_num='$code' AND seri_num='$seri'";
            $qry2 = mysqli_query($conn, $sql2);
          echo '<div class="alert alert-success">
            <div class="container-fluid">
            <div class="alert-icon">
              <i class="material-icons">error_outline</i>
            </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="material-icons">clear</i></span>
            </button>
              <b>Thông báo:</b> Nạp tiền thành công!
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
