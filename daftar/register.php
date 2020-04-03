<?php
include '../include/atas.semua.php'; ?>
<body class="bg-sea-level">
  <div class="preload">

  </div>
  <br><br>
  <div class="pages-on-frame">
    <div class="container">
      <!--Head content -->
      <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
          <div class="well">
            <h4 class="text-center"><img src="../assets/img/logo.png" width="125px" height="125px" alt=""></h4>
          </div>
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
                <form action="control/process.register.php?new" method="post">
                  <input type="text" name="id" value="<?php echo autokode("user","user-".date("Ymd")."-"); ?>" hidden>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="far fa-id-badge"></i></span>
                  <input class="form-control" type="text" name="fullname" placeholder="Masukkan nama lengkap" required onkeypress="return OnlyAlphabetic(event)">
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fas fa-envelope"></i></span>
                  <input class="form-control" type="email" name="email" placeholder="Masukkan alamat email" required>
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fas fa-venus-mars"></i></span>
                  <select class="form-control" name="gender" required>
                    <option value="">-Pilih Jenis Kelamin-</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <hr>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fas fa-key"></i></span>
                  <input class="form-control" type="password" name="password" id="password" placeholder="Masukkan password" onchange="validation()" required>
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fas fa-key"></i> <i class="fas fa-redo-alt"></i> </span>
                  <input class="form-control" type="password" name="repeatpassword" id="repeatpassword" onchange="validation()" placeholder="Ulangi password">
                </div>
              </div>
              <input type="submit" class="btn-block btn-primary" name="new" value="Daftar" style="font-size:30px">
              <hr>
              <a class="btn btn-success btn-block" href="../home"><i class="fas fa-home"></i> Kembali ke beranda <i class="fas fa-home"></i> </a>
            </form>
            </div>
          </div>
        </div>
      </div>
      <!--Foot content -->
    </div>
  </div>
<?php include '../include/bawah.semua.php'; ?>
