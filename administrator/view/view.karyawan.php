<table id="data-table-basic" class="table table-stripped table-bordered">
  <thead>
    <th><i class="fas fa-id-badge"></i> ID Terdaftar</th>
    <th>Nama</th>
    <th>Jenis kelamin</th>
    <th>Email</th>
    <th>Password</th>
    <th>Status</th>
    <th>Tanggal didaftarkan</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM user";
    $mysql = mysqli_query($conn,$sql);
    while ($viewkaryawan1 = mysqli_fetch_assoc($mysql)) {
     ?>
    <tr>
      <td><?php echo $viewkaryawan1['id_user']; ?></td>
      <td><?php echo $viewkaryawan1['nama_pegawai']; ?></td>
      <td><?php echo $viewkaryawan1['jenis_kelamin'] ?></td>
      <td><?php echo $viewkaryawan1['email']; ?></td>
      <td><?php echo $viewkaryawan1['password']; ?></td>
      <td><?php echo $viewkaryawan1['status_aktivasi']; ?></td>
      <td><?php echo $viewkaryawan1['tanggal_daftar']; ?></td>
      <td><a href="karyawan.edit?id_terdaftar=<?php echo $viewkaryawan1['id_user'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a> ||
        <a href="" data-toggle="modal" data-target="#deleteworker<?php echo $viewkaryawan1['id_user'];?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a></td>
        <?php include 'model/modal.delete.php'; ?>
    </tr>
  <?php } ?>
  </tbody>
</table>
