<?php
include '../../include/koneksi.db.php';
if (isset($_POST['tambah'])) {
  $id = $_POST['id'];
  $workname = $_POST['workname'];
  $deskripsi = $_POST['deskripsi'];

  $sql = "INSERT INTO loker VALUES('$id','$workname', '$deskripsi')";
  $mysql = mysqli_query($conn,$sql);
  if ($mysql) {
    echo "<script>alert('Sukses ditambahkan');
    window.location.href='../loker.lihat';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}elseif (isset($_GET['hapus'])) {
  $id_loker = $_GET['id-loker'];

  $sql = "DELETE FROM loker WHERE id_loker = '$id_loker'";
  $mysql = mysqli_query($conn,$sql);
  if ($mysql) {
    echo "<script>alert('Data dihapus');
    window.location.href='../loker.lihat';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}elseif (isset($_POST['edit'])) {
  $id = $_POST['id'];
  $workname = $_POST['workname'];
  $deskripsi = $_POST['deskripsi'];

  $sql = "UPDATE loker SET nama_lowongan='$workname', deskripsi_lowongan='$deskripsi' WHERE id_loker = '$id'";
  $mysql = mysqli_query($conn,$sql);
  if ($mysql) {
    echo "<script>alert('Data diperbarui');
    window.location.href='../loker.lihat';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}
 ?>
