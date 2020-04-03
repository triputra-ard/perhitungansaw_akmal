<?php
include '../include/atas.semua.php';
session_start();
?>
<body class="bg-sea-level">
  <div class="pages-on-frame">
    <div class="container">
      <!--Heda content -->
      <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4 animated zoomInDown">
          <center><img src="../assets/img/male.png" alt="" width="200px" height="20px"></center>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">
          <div class="well animated zoomInDown delay 1s">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h4 class="text-center"><i class="far fa-id-badge"></i> DAFTAR</h4>
              </div>
              <div class="panel-body">
                <form action="control/process.register?equal" method="post">
                  <div class="alert alert-danger">
                    Oh, sepertinya email sudah ada . Mohon masukkan email lainnya
                  </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                  <input class="form-control" type="email" name="email" placeholder="Masukkan alamat email" value="<?php echo @$_SESSION[email_temporary]; ?>" required>
                </div>
                <hr>
              </div>
              <input type="submit" class="btn-block btn-primary" name="equal" value="Kirim ulang" style="font-size:30px">
            </form>
            </div>
          </div>
        </div>
      </div>
      <!--Foot content -->
    </div>
  </div>
<?php include '../include/bawah.semua.php'; ?>
