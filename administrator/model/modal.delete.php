<!-- ======================= Modal Hapus (Variabel pemanggilan harus berbeda) ============= -->

<!-- ============== HRD ====================== -->
<div class="modal animated bounceIn" id="deletehrd<?php echo $viewhrd['id_hrd']; ?>" role="dialog">
    <div class="modal-dialog modals-default nk-red" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Yakin ingin dihapus ?</h2>
                <p>Jika dihapus data tidak bisa diurungkan kembali dan <?php echo $viewhrd['nama_hrd']; ?> , tidak bisa log-in kembali</p>
            </div>
            <div class="modal-footer">
                <a href="control/process.hrd?hapus&id-hrd=<?php echo $viewhrd['id_hrd'];?>" class="btn btn-default">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<!-- =============== Karyawan Terdaftar ================== -->
<div class="modal animated bounceIn" id="deleteworker<?php echo $viewkaryawan1['id_user']; ?>" role="dialog">
    <div class="modal-dialog modals-default nk-red" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Yakin ingin dihapus ?</h2>
                <p><?php echo $viewkaryawan1['nama_pegawai']; ?> tidak bisa login kembali.</p>
            </div>
            <div class="modal-footer">
                <a href="control/process.worker?hapus&id-user=<?php echo $viewkaryawan1['id_user'];?>" class="btn btn-default">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<!-- =============== Loker ===================== -->
<div class="modal animated bounceIn" id="deleteloker<?php echo $viewloker['id_loker']; ?>" role="dialog">
    <div class="modal-dialog modals-default nk-red" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Yakin ingin dihapus ?</h2>
                <p>Jika dihapus data tidak bisa diurungkan kembali</p>
            </div>
            <div class="modal-footer">
                <a href="control/process.loker?hapus&id-loker=<?php echo $viewloker['id_loker'];?>" class="btn btn-default">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<!-- =============== Kuis ===================== -->
<div class="modal animated bounceIn" id="deletequiz<?php echo $quiz['id_kuisioner']; ?>" role="dialog">
    <div class="modal-dialog modals-default nk-red" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Yakin ingin dihapus ?</h2>
                <p><?php echo $quiz['pertanyaan']; ?></p>
                <p>Jika dihapus data tidak bisa diurungkan kembali</p>
            </div>
            <div class="modal-footer">
                <a href="control/process.kuis?hapus&quiz=<?php echo $quiz['id_kuisioner'];?>" class="btn btn-default">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
