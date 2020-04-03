<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <th>No.</th>
      <th>Tingkat Kategori</th>
      <th>Nilai Bobot</th>
      <th>Nilai Normalisasi</th>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM saw_bobot";
      $mysql = mysqli_query($conn,$sql);
      $nilaibobot = "SELECT nilai_bobot, SUM(nilai_bobot) AS total FROM saw_bobot";
      $mysqlbobot = mysqli_query($conn,$nilaibobot);
      $total = mysqli_fetch_assoc($mysqlbobot);
      while ($bobot = mysqli_fetch_assoc($mysql)) {
       ?>
       <tr>
         <td><?php echo $bobot['id_bobot']; ?></td>
         <td><?php echo $bobot['tingkat_kategori']; ?></td>
         <td><?php echo $bobot['nilai_bobot']; ?></td>
         <td><?php if($bobot['nilai_normalisasi'] == NULL)
         echo '<a href="control/process.saw?normalisasibobot&bobot='.$bobot['nilai_bobot'].'&nilai_w='.$total['total'].'&id='.$bobot['id_bobot'].'" class="btn btn-primary">Hitung Normalisasi</a>';
         else  echo $bobot['nilai_normalisasi']; ?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
