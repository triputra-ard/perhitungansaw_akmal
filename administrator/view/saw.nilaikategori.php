<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <th>No.</th>
      <th>Nama Pelamar</th>
      <th>C1(BENEFIT)</th>
      <th>C2(COST)</th>
      <th>C3(BENEFIT)</th>
      <th>C4(BENEFIT)</th>
      <th>C5(BENEFIT)</th>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT nama_lengkap,pendidikan_nilai,usia_nilai,pengalaman_kerja,ipk_nilai,tes_nilai FROM identitas";
      $mysql = mysqli_query($conn,$sql);
      while ($nilaikategori = mysqli_fetch_assoc($mysql)) {
       ?>
       <tr>
         <td><?php echo $nomor++; ?></td>
         <td><?php echo $nilaikategori['nama_lengkap']; ?></td>
         <td><?php echo $nilaikategori['pendidikan_nilai']; ?></td>
         <td><?php echo $nilaikategori['usia_nilai']; ?></td>
         <td><?php echo $nilaikategori['pengalaman_kerja']; ?></td>
         <td><?php echo $nilaikategori['ipk_nilai']; ?></td>
         <td><?php echo $nilaikategori['tes_nilai']; ?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
