<table id="data-table-basic" class="table table-stripped table-bordered">
  <thead>
    <th><i class="fas fa-id-badge"></i> ID Terdaftar</th>
    <th>Foto</th>
    <th>Nama</th>
    <th>Jenis kelamin</th>
    <th>Email</th>
    <th>Usia</th>
    <th>Nilai pendidikan</th>
    <th>IPK</th>
    <th>Pengalaman Kerja</th>
    <th>Nilai Tes</th>
    <th>NILAI SAW</th>
    <th>Status</th>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM identitas a
    JOIN loker b ON a.id_loker = b.id_loker";
    $mysql = mysqli_query($conn,$sql);
    while ($viewkaryawan2 = mysqli_fetch_assoc($mysql)) {
     ?>
    <tr>
      <td><?php echo $viewkaryawan2['id_pegawai']; ?></td>
      <td><a href="../<?php echo $viewkaryawan2['foto_pegawai']; ?>"><img src="../<?php echo $viewkaryawan2['foto_pegawai']; ?>" alt="" height="120px" width="120px"></a></td>
      <td><?php echo $viewkaryawan2['nama_lengkap']; ?></td>
      <td><?php echo $viewkaryawan2['jenis_kelamin'] ?></td>
      <td><?php echo $viewkaryawan2['email']; ?></td>
      <td><?php echo $viewkaryawan2['usia_nilai']; ?></td>
      <td><?php echo $viewkaryawan2['pendidikan_nilai']; ?></td>
      <td><?php echo $viewkaryawan2['ipk_nilai']; ?></td>
      <td><?php echo $viewkaryawan2['pengalaman_kerja']; ?> Tahun</td>
      <td><?php echo $viewkaryawan2['tes_nilai']; ?></td>
      <td><?php echo $viewkaryawan2['hasil_saw'];?></td>
      <td><?php echo $viewkaryawan2['kirim_status']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
