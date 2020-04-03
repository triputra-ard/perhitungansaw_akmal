<?php
require_once 'atas.nav.php';
 ?>
<div class="page-on-frame">
  <div class="container">
    <?php
    $code = $_GET['kode'];
    $sql = "UPDATE user SET status_aktivasi = 'ACTIVATED' WHERE kode_aktivasi = '$code'";
    mysqli_query($conn, $sql);
     ?>
    <div class="col-xl-12 animated zoomInDown">
      <div class="well">
        <center>
        <button type="button" class="btn btn-success" disabled name="button" style="font-size:45px;"><i class="fas fa-check"></i></button>
      </center>
      <h1 class="text-center">Sukses Teraktivasi</h1>
      <p class="text-center">Anda sudah bisa login</p>
      </div>
    </div>

  </div>
</div>
<?php require_once 'bawah.nav.php'; ?>
