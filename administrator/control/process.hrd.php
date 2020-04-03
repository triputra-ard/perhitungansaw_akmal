<?php
include '../../include/koneksi.db.php';
if (isset($_POST['add'])) {
  $id = $_POST['id'];
  $fullname = $_POST['fullname'];
  $password = $_POST['password'];
  $activation = $_POST['activation'];

  $sql = "INSERT INTO hrd VALUES('$id','$fullname', '$password'
    , '$activation', CURRENT_TIMESTAMP)";
  $mysql = mysqli_query($conn,$sql);
  if ($mysql) {
    echo "<script>alert('Sukses ditambahkan');
    window.location.href='../hrd.lihat';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}elseif (isset($_GET['hapus'])) {
  $id_hrd = $_GET['id-hrd'];

  $sql = "DELETE FROM hrd WHERE id_hrd = '$id_hrd'";
  $mysql = mysqli_query($conn,$sql);
  if ($mysql) {
    echo "<script>alert('Data dihapus');
    window.location.href='../hrd.lihat';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}elseif (isset($_POST['edit'])) {
  $id_hrd = $_POST['idhrd'];
  $fullname = $_POST['fullname'];
  $password = $_POST['password'];
  $activation = $_POST['activation'];

  $sql = "UPDATE hrd SET nama_hrd='$fullname', password='$password', hrd_status='$activation' WHERE id_hrd = '$id_hrd'";
  $mysql = mysqli_query($conn,$sql);
  if ($mysql) {
    echo "<script>alert('Data diperbarui');
    window.location.href='../hrd.lihat';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}
 ?>
