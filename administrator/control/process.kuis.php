<?php
include '../../include/koneksi.db.php';
if (isset($_POST['add'])) {
  $id = $_POST['id'];
  $loker = $_POST['loker'];
  $nomor = $_POST['nomor'];
  $quest = $_POST['question'];
  $answera = $_POST['a'];
  $answerb = $_POST['b'];
  $answerc = $_POST['c'];
  $scorea = $_POST['scorea'];
  $scoreb = $_POST['scoreb'];
  $scorec = $_POST['scorec'];
  $time = $_POST['time'];

  $sql = "INSERT INTO kuisioner VALUES ('$id'
    ,'$loker','$nomor'
    ,'$quest','$answera'
    ,'$answerb','$answerc'
    ,'$scorea','$scoreb'
    ,'$scorec','$time')";
  $mysql = mysqli_query($conn, $sql);

  if ($mysql) {
    echo "<script>alert('Sukses ditambahkan');
    window.location.href='../kuisioner.data';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}elseif (isset($_GET['hapus'])) {
  $id = $_GET['quiz'];

  $sql = "DELETE FROM kuisioner WHERE id_kuisioner = '$id'";
  $mysql = mysqli_query($conn,$sql);
  if ($mysql) {
    echo "<script>alert('Data dihapus');
    window.location.href='../kuisioner.data';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}elseif (isset($_POST['edit'])) {

  $id = $_POST['id'];
  $loker = $_POST['loker'];
  $nomor = $_POST['nomor'];
  $quest = $_POST['question'];
  $answera = $_POST['a'];
  $answerb = $_POST['b'];
  $answerc = $_POST['c'];
  $scorea = $_POST['scorea'];
  $scoreb = $_POST['scoreb'];
  $scorec = $_POST['scorec'];
  $time = $_POST['time'];

  $sql = "UPDATE kuisioner SET
  id_loker = '$loker', nomor_kuis = '$nomor'
  ,pertanyaan = '$quest'
  ,jawaban_a = '$answera', jawaban_b = '$answerb', jawaban_c = '$answerc'
  ,nilai_a = '$scorea', nilai_b='$scoreb', nilai_c='$scorec'
  ,waktu = '$time'
  WHERE id_kuisioner = '$id'";
  $mysql = mysqli_query($conn, $sql);

  if ($mysql) {
    echo "<script>alert('Sukses diperbarui');
    window.location.href='../kuisioner.data';</script>";
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}

 ?>
