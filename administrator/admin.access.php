<?php
include '../include/atas.semua.php';
 ?>
<body class="bg-transparent-blue">
  <br><br><br>
  <div class="preload">
  </div>
  <div class="page-on-frame">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 animated slideInLeft delay-1s">
          <div class="well">
            <h4 class="text-center"><i class="fas fa-user-astronaut"></i> Zona Admin <i class="fas fa-user-astronaut"></i></h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 animated slideInLeft delay-3s">
          <div class="well">
            <div class="alert alert-danger">
              <h4 class="text-center">Yang tidak berkepentingan (kecuali admin) dimohon untuk meninggalkan halaman ini. Terimakasih</h4>
            </div>
          </div>
          <div class="panel panel-primary animated slideInLeft delay-5s">
            <div class="panel-heading">
              <h4 class="text-center">Masuk admin</h4>
            </div>
            <div class="panel-body">
              <form class="" action="control/process.login" method="post">
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fas fa-user-secret"></i></span>
                  <input class="form-control" type="text" name="admin" placeholder="Masukkan admin username" required>
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                  <input class="form-control" type="password" name="key" placeholder="Masukkan admin password" required>
                </div>
                <hr>
                <button type="submit" name="login" class="btn btn-success btn-block">Masuk</button>
              </form>
              <hr>
              <a href="../home"><i class="fas fa-chevron-left"></i> Kembali </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 <?php
 include '../include/bawah.semua.php';
  ?>
