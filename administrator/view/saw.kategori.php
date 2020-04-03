<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <th>No.</th>
      <th>Kategori</th>
      <th>Tingkat C</th>
      <th>Tingkat Kategori</th>
      <th>Tipe Kategori</th>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM saw_kategori";
      $mysql = mysqli_query($conn,$sql);
      while ($kategori = mysqli_fetch_assoc($mysql)) {
       ?>
       <tr>
         <td><?php echo $kategori['id_kategori']; ?></td>
         <td><?php echo $kategori['nama_kategori']; ?></td>
         <td><?php echo $kategori['tingkat_c']; ?></td>
         <td><?php echo $kategori['tingkat_kategori']; ?></td>
         <td><?php echo $kategori['tipe_kategori']; ?></td>
       </tr>
     <?php } ?>
    </tbody>
  </table>
</div>
