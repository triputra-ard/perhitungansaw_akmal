<?php
include '../../include/koneksi.db.php';
if (isset($_POST['update'])) {
  $email = $_POST['email'];
  $fullname = $_POST['fullname'];
  $password = $_POST['password'];
  $activation = $_POST['activation'];

  $sql = "UPDATE user SET nama_pegawai = '$fullname', password='$password', status_aktivasi='$activation'
  WHERE email = '$email'";
  $mysql = mysqli_query($conn,$sql);
  if ($mysql) {
    echo "<script>alert('Data diperbarui');
    window.location.href='../karyawan.lihat';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}elseif (isset($_GET['hapus'])) {
  $id_user = $_GET['id-user'];

  $sql = "DELETE FROM user WHERE id_user = '$id_user'";
  $mysql = mysqli_query($conn,$sql);
  if ($mysql) {
    echo "<script>alert('Data dihapus');
    window.location.href='../karyawan.lihat';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}
 ?>
