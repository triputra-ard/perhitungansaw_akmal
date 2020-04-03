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
      <th>Jumlah Poin</th>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT nama_lengkap,pendidikan_nilai,usia_nilai,pengalaman_kerja,ipk_nilai,tes_nilai FROM identitas";
      $mysql = mysqli_query($conn,$sql);
      while ($matriksawal = mysqli_fetch_assoc($mysql)) {
        $jumlahpoin = (($matriksawal['nama_lengkap'])+($matriksawal['pendidikan_nilai'])
        +($matriksawal['usia_nilai'])+($matriksawal['pengalaman_kerja'])
        +($matriksawal['ipk_nilai'])+($matriksawal['tes_nilai']));
       ?>
       <tr>
         <td><?php echo $nomor++; ?></td>
         <td><?php echo $matriksawal['nama_lengkap']; ?></td>
         <td><?php echo $matriksawal['pendidikan_nilai']; ?></td>
         <td><?php echo $matriksawal['usia_nilai']; ?></td>
         <td><?php echo $matriksawal['pengalaman_kerja']; ?></td>
         <td><?php echo $matriksawal['ipk_nilai']; ?></td>
         <td><?php echo $matriksawal['tes_nilai']; ?></td>
         <td><?php echo $jumlahpoin; ?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
