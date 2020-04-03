<?php
$titlePage = "Edit data Pegawai Terdaftar";
$active = "viewworker_regis";
include 'navigation.admin.php'; ?>
<div class="preload">
</div>
<div class="page-on-frame">
  <div class="container">

    <div class="col-lg-12">
      <div class="well">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h4><i class="fas fa-edit"></i> Edit Pegawai Terdaftar</h4>
          </div>
          <?php
          $id = $_GET['id_terdaftar'];

          $sql = "SELECT *  FROM user WHERE id_user = '$id'";
          $mysql = mysqli_query($conn,$sql);
          while ($editkaryawan1= mysqli_fetch_assoc($mysql)) {
           ?>
          <div class="panel-body">
            <form class="" action="control/process.worker" method="post">
              <table>
                <tr>
                  <td><h5>Email :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="text" name="email" readonly value="<?php echo $editkaryawan1['email']; ?>">
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Nama pegawai :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="text" name="fullname" onkeypress="return OnlyAlphabetic(event)" placeholder="Isi nama pegawai" required value="<?php echo $editkaryawan1['nama_pegawai']; ?>">
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Password :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="password" name="password" placeholder="Isi password" required value="<?php echo $editkaryawan1['password']; ?>">
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Aktif ? :</h5></td>
                  <td><div class="toggle-select-act mg-t-30">
                      <div class="nk-toggle-switch" data-ts-color="green">
                      <label for="checkbox1<?php echo $editkaryawan1['id_user'];  ?>" class="ts-label">Ya</label>
                      <input <?php if($editkaryawan1['status_aktivasi'] == "ACTIVATED")  echo "checked";?> id="checkbox1<?php echo $editkaryawan1['id_user'];  ?>" type="checkbox" hidden="hidden" value="ACTIVATED" name="activation">
                      <label for="checkbox1<?php echo $editkaryawan1['id_user'];  ?>" class="ts-helper"></label>
                    </div>
                  </div></td>
                  <td><div class="toggle-select-act mg-t-30">
                      <div class="nk-toggle-switch" data-ts-color="red">
                      <label for="checkbox2<?php echo $editkaryawan1['id_user'];  ?>" class="ts-label">Tidak</label>
                      <input <?php if($editkaryawan1['status_aktivasi'] != "ACTIVATED")  echo "checked";?> id="checkbox2<?php echo $editkaryawan1['id_user'];  ?>" type="checkbox" hidden="hidden" value="NOT_ACTIVATED" name="activation">
                      <label for="checkbox2<?php echo $editkaryawan1['id_user'];  ?>" class="ts-helper"></label>
                    </div>
                  </div></td>
                </tr>
              </table>
              <hr>
              <button type="submit" class="btn btn-primary btn-block" name="update"><i class="fas fa-edit"></i> EDIT Karyawan</button>
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
