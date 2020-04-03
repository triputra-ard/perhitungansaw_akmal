<?php
$kuis = $_GET['kuis'];
$sql = "SELECT * FROM kuisioner a
JOIN loker b ON a.id_loker = b.id_loker
WHERE id_kuisioner='$kuis'";
$mysql = mysqli_query($conn,$sql);
while ($editquiz = mysqli_fetch_assoc($mysql)) {
 ?>
<form class="" action="control/process.kuis?edit" method="post">
  <input hidden type="text" name="id" value="<?php echo $editquiz['id_kuisioner']; ?>">
  <div class="row">
    <div class="col-lg-4">
      <label class="hrzn-frm">Pilih Lowongan</label>
      <div class="form-group">
        <div class="nk-int-st">
          <select class="form-control" name="loker" required>
            <option value="<?php echo $editquiz['id_loker'];?>"><?php echo $editquiz['nama_lowongan'];?></option>
            <option value="">-Pilih-</option>
            <?php
            $sqlloker = "SELECT * FROM loker";
            $mysqlloker = mysqli_query($conn,$sqlloker);
            while ($loker = mysqli_fetch_assoc($mysqlloker)) {
             ?>
             <option value="<?php echo $loker['id_loker']; ?>"> <?php echo $loker['nama_lowongan']; ?></option>
          <?php } ?>
          </select>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
      <label>Nomor pertanyaan</label>
      <div class="form-group">
        <div class="nk-int-st">
          <input class="form-control" type="text" name="nomor" placeholder="Nomor" value="<?php echo $editquiz['nomor_kuis']; ?>" onkeypress="return OnlyNumber(event)" required>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <label>Masukkan pertanyaan</label>
      <div class="form-group">
        <div class="nk-int-st">
          <input class="form-control" type="text" name="question" placeholder="Pertanyaan" required value="<?php echo $editquiz['pertanyaan']; ?>">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <label>Jawaban A</label>
      <div class="form-group">
        <div class="nk-int-st">
          <input class="form-control" type="text" name="a" placeholder="Jawaban A" required value="<?php echo $editquiz['jawaban_a']; ?>">
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <label>Jawaban B</label>
      <div class="form-group">
        <div class="nk-int-st">
          <input class="form-control" type="text" name="b" placeholder="Jawaban B" required value="<?php echo $editquiz['jawaban_b']; ?>">
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <label>Jawaban C</label>
      <div class="form-group">
        <div class="nk-int-st">
          <input class="form-control" type="text" name="c" placeholder="Jawaban C" required value="<?php echo $editquiz['jawaban_c']; ?>">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-4">
      <label>Bobot Nilai A</label>
      <div class="form-group">
        <div class="nk-int-st">
          <input class="form-control" type="text" name="scorea" placeholder="Nilai A" required onkeypress="return OnlyNumber(event)" value="<?php echo $editquiz['nilai_a']; ?>">
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <label>Bobot Nilai B</label>
      <div class="form-group">
        <div class="nk-int-st">
          <input class="form-control" type="text" name="scoreb" placeholder="Nilai B" required onkeypress="return OnlyNumber(event)" value="<?php echo $editquiz['nilai_b']; ?>">
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <label>Bobot Nilai C</label>
      <div class="form-group">
        <div class="nk-int-st">
          <input class="form-control" type="text" name="scorec" placeholder="Nilai C" required onkeypress="return OnlyNumber(event)" value="<?php echo $editquiz['nilai_c']; ?>">
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <label for="">Pilih waktu pengerjaan</label>
    <div class="form-group">
      <div class="nk-int-st">
        <select class="form-control" name="time" required>
          <option value="<?php echo $editquiz['waktu'];?>"><?php $menit = $editquiz['waktu']*1/60; echo $menit;?></option>
          <option value="">-Pilih-</option>
          <option value="300">5 Menit</option>
          <option value="600">10 Menit</option>
          <option value="900">15 Menit</option>
          <option value="1200">20 Menit</option>
          <option value="1500">25 Menit</option>
          <option value="1800">30 Menit</option>
          <option value="2100">35 Menit</option>
          <option value="2400">40 Menit</option>
          <option value="2700">45 Menit</option>
        </select>
      </div>
    </div>
  </div>
  <hr>
  <button type="submit" name="edit" class="btn btn-block btn-success">Perbarui pertanyaan <i class="fas fa-pencil-alt"></i> </button>
</form>
<?php } ?>
