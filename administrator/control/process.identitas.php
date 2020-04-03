<?php
include '../../include/koneksi.db.php';
if (isset($_GET['edit'])) {
  $id = $_GET['idpegawai'];
  $saw = $_GET['nilaisaw'];

  $sql = "UPDATE identitas SET hasil_saw = '$saw' WHERE id_pegawai = '$id'";
  $mysql = mysqli_query($conn,$sql);
  if ($mysql) {
    echo "<script>alert('Sukses ditambahkan');
    window.location.href='../karyawan.identitas.lihat';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}
 ?>
