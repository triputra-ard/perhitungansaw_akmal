<?php
session_start();
include '../include/koneksi.db.php';
$id_temp = @$_SESSION[id_user];

$sql = "SELECT * FROM user WHERE id_user = '$id_temp'";
$mysql = mysqli_query($conn,$sql);
$catch = mysqli_fetch_assoc($mysql);

$kode = $catch['kode_aktivasi'];
$email = $catch['email'];

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

echo '<script>
alert("Email berhasil dikirim kembali");
window.location.href="success.mail"</script>';

 ?>
