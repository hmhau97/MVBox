<?php 
  include'connection.php';

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
      <div class="form-group label-floating has-error">
      <label for="comment">Card</label>
         <input type="number" class="form-control" max="5" min="1" name="kind" id="new_pass" required>
    </div>
      
     
      <div class="form-group label-floating has-error" style="text-align:center;">
        <input type="submit" value="Nạp Tiền" name="submit" style="width:100%;padding:4px 0;font-weight:bold;border:solid 1px #666;border-radius:6px;">
      </div>
      </form>
      <?php 
      

        if (isset($_POST["submit"])) {
          $seri = $_POST["seri"];
          $code = $_POST["code"];
         $kind = $_POST["kind"];
        
          $sqlUserInsert = "INSERT INTO card(seri_num,code_num,kind) VALUES
          ('$seri','$code','$kind')";
        $abc =   mysqli_query($conn,$sqlUserInsert);

      print '<div class="alert alert-success">
      <div class="container-fluid">
        <div class="alert-icon">
          <i class="material-icons">check</i>
        </div>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true"><i class="material-icons">clear</i></span>
        </button>
        <b>Thông báo:</b> Thêm mới thẻ nạp thành công
      </div>
    </div>';
        }
       ?>