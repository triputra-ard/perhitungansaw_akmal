<?php
$sqlbobot = "SELECT nilai_normalisasi FROM saw_bobot";
$mysqlbobot = mysqli_query($conn,$sqlbobot);
while($arrayget = mysqli_fetch_array($mysqlbobot)){
  $bobot[] = $arrayget[0];
}
 ?>
<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <th>No.</th>
      <th>Nama Pelamar</th>
      <th>Jumlah Poin</th>
      <th>Nilai Vektor V</th>
      <th>Persentase</th>
      <th>Nilai Penerimaan</th>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT id_pegawai,nama_lengkap,pendidikan_nilai,usia_nilai,pengalaman_kerja,ipk_nilai,tes_nilai,hasil_saw FROM identitas";
      $mysql = mysqli_query($conn,$sql);
      while ($presentase = mysqli_fetch_assoc($mysql)) {
        $jumlahpoin = (($presentase['nama_lengkap'])+($presentase['pendidikan_nilai'])
        +($presentase['usia_nilai'])+($presentase['pengalaman_kerja'])
        +($presentase['ipk_nilai'])+($presentase['tes_nilai']));
        $poin = round(($bobot[0]*($presentase['pendidikan_nilai']/$data['c1']))
        +($bobot[1]*($data['c2']/$presentase['usia_nilai']))
        +($bobot[2]*($presentase['pengalaman_kerja']/$data['c3']))
        +($bobot[3]*($presentase['ipk_nilai']/$data['c4']))
        +($bobot[4]*($presentase['tes_nilai']/$data['c5']))
        ,2);
        $persen = $poin*100;
       ?>
       <tr>
         <td><?php echo $nomor++; ?></td>
         <td><?php echo $presentase['nama_lengkap']; ?></td>
         <td><?php echo $jumlahpoin; ?></td>
         <td><?php echo $poin; ?></td>
         <td><?php echo $persen;?> %</td>
         <td><?php if($presentase['hasil_saw'] == NULL)
         echo '<a href="control/process.identitas?edit&idpegawai='.$presentase['id_pegawai'].'&nilaisaw='.$persen.'" class="btn btn-success"><i class="fas fa-edit"></i> EDIT HASIL PERHITUNGAN</a>'; else echo $presentase['hasil_saw'];?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
