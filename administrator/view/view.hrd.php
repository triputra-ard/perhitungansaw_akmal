<table id="data-table-basic" class="table table-stripped table-bordered">
  <thead>
    <th><i class="fas fa-id-badge"></i> ID HRD</th>
    <th>Nama</th>
    <th>Password</th>
    <th>Status</th>
    <th>Tanggal didaftarkan</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM hrd";
    $mysql = mysqli_query($conn,$sql);
    while ($viewhrd = mysqli_fetch_assoc($mysql)) {
     ?>
    <tr>
      <td><?php echo $viewhrd['id_hrd']; ?></td>
      <td><?php echo $viewhrd['nama_hrd']; ?></td>
      <td><?php echo $viewhrd['password']; ?></td>
      <td><?php echo $viewhrd['hrd_status']; ?></td>
      <td><?php echo $viewhrd['tanggal_daftar']; ?></td>
      <td><a href="hrd.edit?id_hrd=<?php echo $viewhrd['id_hrd'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a> ||
        <a href="" data-toggle="modal" data-target="#deletehrd<?php echo $viewhrd['id_hrd']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a></td>
        <?php include 'model/modal.delete.php'; ?>
    </tr>
  <?php } ?>
  </tbody>
</table>
