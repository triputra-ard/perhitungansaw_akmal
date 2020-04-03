<table id="data-table-basic" class="table table-stripped table-bordered">
  <thead>
    <th><i class="fas fa-briefcase"></i> ID Loker</th>
    <th>Nama</th>
    <th>Deskrpsi pekerjaan</th>
    <th>Aksi</th>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM loker";
    $mysql = mysqli_query($conn,$sql);
    while ($viewloker = mysqli_fetch_assoc($mysql)) {
     ?>
    <tr>
      <td><?php echo $viewloker['id_loker']; ?></td>
      <td><?php echo $viewloker['nama_lowongan']; ?></td>
      <td><?php echo $viewloker['deskripsi_lowongan']; ?></td>
      <td><a href="loker.edit?id_loker=<?php echo $viewloker['id_loker'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a> ||
        <a href="" data-toggle="modal" data-target="#deleteloker<?php echo $viewloker['id_loker']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a></td>
        <?php include 'model/modal.delete.php'; ?>
    </tr>
  <?php } ?>
  </tbody>
</table>
