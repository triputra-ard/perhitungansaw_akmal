<div class="panel panel-collapse notika-accrodion-cus">
    <div class="panel-heading" role="tab">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#viewdata" aria-expanded="true"><b><i class="fas fa-table"></i> Lihat data </b></a>
        </h4>
    </div>
    <div id="viewdata" class="collapse" role="tabpanel">
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-stripped table-hover table-bordered" id="data-table-basic">
              <thead>
                <th>Lowongan pekerjaan</th>
                <th>No.</th>
                <th>Pertanyaan</th>
                <th>Jawaban A</th>
                <th>Jawaban B</th>
                <th>Jawaban C</th>
                <th>Jumlah Waktu</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM kuisioner a
                JOIN loker b ON a.id_loker = b.id_loker";
                $mysql = mysqli_query($conn, $sql);
                while ($quiz = mysqli_fetch_assoc($mysql)) {
                 ?>
                 <tr>
                   <td><?php echo $quiz['nama_lowongan']; ?></td>
                   <td><?php echo $quiz['nomor_kuis']; ?></td>
                   <td><?php echo $quiz['pertanyaan']; ?></td>
                   <td><?php echo $quiz['jawaban_a']; ?> (<?php echo $quiz['nilai_a']; ?>)</td>
                   <td><?php echo $quiz['jawaban_b']; ?> (<?php echo $quiz['nilai_b']; ?>)</td>
                   <td><?php echo $quiz['jawaban_c']; ?> (<?php echo $quiz['nilai_c']; ?>)</td>
                   <?php $minute = $quiz['waktu']*1/60; ?>
                   <td><?php echo $minute; ?> Menit</td>
                   <td>
                     <a href="kuisioner.edit?kuis=<?php echo $quiz['id_kuisioner']; ?>" class="btn btn-success"><i class="fas fa-edit"> Edit</i></a> ||
                     <a href="#" data-toggle="modal" data-target="#deletequiz<?php echo $quiz['id_kuisioner']; ?>" class="btn btn-danger"><i class="fas fa-trash"> Hapus</i></a>
                    </td>
                 </tr>
                 <?php include 'model/modal.delete.php'; ?>
               <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div>
