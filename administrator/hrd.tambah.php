<?php
$titlePage = "Tambah data HRD";
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
            <h4><i class="fas fa-id-badge"></i> Tambah HRD</h4>
          </div>
          <div class="panel-body">
            <form class="" action="control/process.hrd?add" method="post">
              <table>
                <tr>
                  <td><h5>ID :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="text" name="id" onkeypress="return OnlyNumber(event)" placeholder="Isi nomor pegawai" required>
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Nama pegawai :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="text" name="fullname" onkeypress="return OnlyAlphabetic(event)" placeholder="Isi nama pegawai" required>
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Password :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="password" name="password" placeholder="Isi password" required>
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Aktif ? :</h5></td>
                  <td><div class="toggle-select-act mg-t-30">
                      <div class="nk-toggle-switch" data-ts-color="green">
                      <label for="checkbox1" class="ts-label">Ya</label>
                      <input id="checkbox1" type="checkbox" hidden="hidden" value="AKTIF" name="activation">
                      <label for="checkbox1" class="ts-helper"></label>
                    </div>
                  </div></td>
                  <td><div class="toggle-select-act mg-t-30">
                      <div class="nk-toggle-switch" data-ts-color="red">
                      <label for="checkbox2" class="ts-label">Tidak</label>
                      <input id="checkbox2" type="checkbox" hidden="hidden" value="TIDAK AKTIF" name="activation">
                      <label for="checkbox2" class="ts-helper"></label>
                    </div>
                  </div></td>
                </tr>
              </table>
              <hr>
              <button type="submit" class="btn btn-primary btn-block" name="add"><i class="fas fa-plus"></i> Tambah HRD</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>
  </div>
</div>
<?php include 'footer.admin.php'; ?>
