<?php
$titlePage = "Tambah Lowongan pekerjaan";
$active = "jobs";
include 'navigation.admin.php'; ?>
<div class="preload">

</div>
<div class="page-on-frame">
  <div class="container">

    <div class="col-lg-12">
      <div class="well">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h4><i class="fas fa-briefcase"></i> Tambah Lowongan pekerjaan</h4>
          </div>
          <div class="panel-body">
            <form class="" action="control/process.loker?tambah" method="post">
              <table>
                <tr>
                  <td><h5>ID :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="text" name="id" value="<?php echo autokode("loker",date("Y")."-"); ?>" readonly >
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Lowongan pekerjaan :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="text" name="workname" onkeypress="return OnlyAlphabetic(event)" placeholder="Isi nama lowongan" required>
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Deskripsi pekerjaan :</h5></td>
                  <td>
                    <textarea name="deskripsi" class="html-editor" >Deskripsi lowongan</textarea>
                </td>
                </tr>
              </table>
              <hr>
              <button type="submit" class="btn btn-primary btn-block" name="tambah"><i class="fas fa-plus"></i> Tambah Lowongan</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>
  </div>
</div>
<?php include 'footer.admin.php'; ?>
