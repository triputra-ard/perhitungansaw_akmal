<?php
include '../../include/koneksi.db.php';

if (isset($_POST['login'])) {
  $admin = $_POST['admin'];
  $key = $_POST['key'];

  $sql = "SELECT * FROM admin WHERE nama_admin = '$admin' AND password = '$key' ";
  $mysql = mysqli_query($conn, $sql);
  $found = mysqli_num_rows($mysql);
  $session = mysqli_fetch_assoc($mysql);

  if ($found>0) {
    session_start();
    $_SESSION[fullname] = $session['nama_admin'];
    header('location:../admin.landing');
  }else {
    echo "<script>alert('Tidak ditemukan');
    window.history.back();</script>";
  }
}

 ?>
