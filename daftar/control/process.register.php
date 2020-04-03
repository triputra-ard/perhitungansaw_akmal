<?php
include '../../include/koneksi.db.php';
include '../../include/autonumber.php';
error_reporting(0);
$kode = randomcode();
session_start();
if (isset($_POST['new'])) {
  $id_user = $_POST['id'];
  $name = $_POST['fullname'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $password = $_POST['password'];
  if ($email != "") {
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $mysql = mysqli_query($conn,$sql);
    $check = mysqli_num_rows($mysql);
    if ($check>0) {
      $sql = "INSERT INTO user(id_user, nama_pegawai, jenis_kelamin, password, tanggal_daftar, status_aktivasi)
      VALUES ('$id_user', '$name', '$gender', '$password', CURRENT_TIMESTAMP, DEFAULT)";
      $mysql = mysqli_query($conn,$sql);
      header('location:../equal.email');
      $_SESSION[email_temporary] = $_POST['email'];
      $_SESSION[id_user] = $_POST['id'];
    }else {
      $receipent = $email;
      $subject = "Verifikasi Email";
      $link = "http://localhost/akmal_saw/success.activated?kode=$kode";
      $message = "Klik tautan berikut untuk mengaktivasi akun anda.
      <br><a href ='$link'>$link</a>";
      $header ="From: <noreply@karyawan.com> "."\r\n".
      "Reply-To: noreply@karyawan.com"."\r\n".
      "CC: noreply@karyawan.com "."\r\n".
      "MIME-Version:1.0 "."\r\n".
      "Content-Type:text/html;charset=UTF-8 "."\r\n";
      mail($receipent, $subject, $message ,$header);
      $_SESSION[id_user] = $_POST['id'];
      $add = "INSERT INTO user VALUES('$id_user', '$name', '$gender', '$email', '$password', '$kode', CURRENT_TIMESTAMP, DEFAULT)";
      $addsql = mysqli_query($conn,$add);
      if($addsql){
        echo '<script>
        alert("Pendaftaran di proses");
        window.location.href="../success.mail"</script>';
      }
    }
  }
}elseif (isset($_POST['equal'])) {
  $email = $_POST['email'];
  $id_temp = @$_SESSION[id_user];
  if ($email != "") {
    $sql = "SELECT * From user WHERE email = '$email'";
    $view = mysqli_query($conn, $sql);
    $check = mysqli_num_rows($view);
    if ($check>0) {
      echo '<script>
      alert("Email Sudah Ada");
      window.location.href="../equal.email";</script>';
    }else {
      $receipent = $email;
      $subject = "Verifikasi Email";
      $link = "http://localhost/akmal_saw/success.activated?kode=$kode";
      $message = "Klik tautan berikut untuk mengaktivasi akun anda.
      <br><a href ='$link'>$link</a>";
      $header ="From: <noreply@karyawan.com> "."\r\n".
      "Reply-To: noreply@karyawan.com"."\r\n".
      "CC: noreply@karyawan.com "."\r\n".
      "MIME-Version:1.0 "."\r\n".
      "Content-Type:text/html;charset=UTF-8 "."\r\n";
      mail($receipent, $subject, $message ,$header);
      $update = "UPDATE user SET kode_aktivasi= '$kode', email = '$email' WHERE id_user = '$id_temp'";
      mysqli_query($conn, $update);
      echo '<script>
      alert("Email berhasil dikirim kembali");
      window.location.href="../success.mail"</script>';
    }
  }
}

 ?>
