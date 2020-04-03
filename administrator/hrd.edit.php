<?php
$titlePage = "Edit data HRD";
$active = "hrd";
include 'navigation.admin.php'; ?>
<div class="preload">
</div>
<div class="page-on-frame">
  <div class="container">

    <div class="col-lg-12">
      <div class="well">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h4><i class="fas fa-edit"></i> Edit HRD</h4>
          </div>
          <?php
          $id = $_GET['id_hrd'];

          $sql = "SELECT *  FROM hrd WHERE id_hrd = '$id'";
          $mysql = mysqli_query($conn,$sql);
          while ($edithrd= mysqli_fetch_assoc($mysql)) {
           ?>
          <div class="panel-body">
            <form class="" action="control/process.hrd?edit" method="post">
              <table>
                <tr>
                  <td><h5>ID :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="text" name="idhrd" onkeypress="return OnlyNumber(event)"  readonly value="<?php echo $edithrd['id_hrd']; ?>">
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Nama pegawai :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="text" name="fullname" onkeypress="return OnlyAlphabetic(event)" placeholder="Isi nama pegawai" required value="<?php echo $edithrd['nama_hrd']; ?>">
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Password :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="password" name="password" placeholder="Isi password" required value="<?php echo $edithrd['password']; ?>">
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Aktif ? :</h5></td>
                  <td><div class="toggle-select-act mg-t-30">
                      <div class="nk-toggle-switch" data-ts-color="green">
                      <label for="checkbox1<?php echo $edithrd['id_hrd'];  ?>" class="ts-label">Ya</label>
                      <input <?php if($edithrd['hrd_status'] == "AKTIF")  echo "checked";?> id="checkbox1<?php echo $edithrd['id_hrd'];  ?>" type="checkbox" hidden="hidden" value="AKTIF" name="activation">
                      <label for="checkbox1<?php echo $edithrd['id_hrd'];  ?>" class="ts-helper"></label>
                    </div>
                  </div></td>
                  <td><div class="toggle-select-act mg-t-30">
                      <div class="nk-toggle-switch" data-ts-color="red">
                      <label for="checkbox2<?php echo $edithrd['id_hrd'];  ?>" class="ts-label">Tidak</label>
                      <input <?php if($edithrd['hrd_status'] != "AKTIF")  echo "checked";?> id="checkbox2<?php echo $edithrd['id_hrd'];  ?>" type="checkbox" hidden="hidden" value="TIDAK AKTIF" name="activation">
                      <label for="checkbox2<?php echo $edithrd['id_hrd'];  ?>" class="ts-helper"></label>
                    </div>
                  </div></td>
                </tr>
              </table>
              <hr>
              <button type="submit" class="btn btn-primary btn-block" name="edit"><i class="fas fa-edit"></i> EDIT HRD</button>
            </form>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>

    <br><br><br>
  </div>
</div>
<?php include 'footer.admin.php'; ?>
