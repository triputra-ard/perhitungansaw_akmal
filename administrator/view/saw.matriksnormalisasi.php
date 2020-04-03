<?php
$sqlfind = "SELECT MAX(pendidikan_nilai) as c1, MIN(usia_nilai) as c2
,MAX(pengalaman_kerja) as c3, MAX(ipk_nilai) as c4 , MAX(tes_nilai) as c5 FROM identitas";
$mysqlfind = mysqli_query($conn,$sqlfind);
$data = mysqli_fetch_assoc($mysqlfind);
 ?>
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
      while ($matriksnormalisasi = mysqli_fetch_assoc($mysql)) {
       ?>
       <tr>
         <td><?php echo $nomor++; ?></td>
         <td><?php echo round($matriksnormalisasi['nama_lengkap'],2); ?></td>
         <td><?php echo round($matriksnormalisasi['pendidikan_nilai']/$data['c1'],2); ?></td>
         <!-- C2 adalah COST -->
         <td><?php echo round($data['c2']/$matriksnormalisasi['usia_nilai'],2); ?></td>
         <!-- C2 adalah COST -->
         <td><?php echo round($matriksnormalisasi['pengalaman_kerja']/$data['c3'],2); ?></td>
         <td><?php echo round($matriksnormalisasi['ipk_nilai']/$data['c4'],2); ?></td>
         <td><?php echo round($matriksnormalisasi['tes_nilai']/$data['c5'],2); ?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
