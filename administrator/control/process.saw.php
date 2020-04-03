<?php
include '../../include/koneksi.db.php';
if (isset($_GET['normalisasibobot'])) {
  $id_bobot = $_GET['id'];
  $nilaibobot = $_GET['bobot'];
  $nilaiw = $_GET['nilai_w'];
  $normalisasi = $nilaibobot/$nilaiw;

  $sql = "UPDATE saw_bobot SET nilai_normalisasi = '$normalisasi' WHERE id_bobot = '$id_bobot'";
  $mysql = mysqli_query($conn,$sql);
  if ($mysql) {
    echo "<script>alert('Sukses dihitung');
    window.location.href='../saw.data';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}
 ?>
