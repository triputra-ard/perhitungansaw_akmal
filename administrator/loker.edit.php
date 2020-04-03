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
            <h4><i class="fas fa-briefcase"></i> Edit Lowongan pekerjaan</h4>
          </div>
          <div class="panel-body">
            <?php
            $id = $_GET['id_loker'];

            $sql = "SELECT *  FROM loker WHERE id_loker = '$id'";
            $mysql = mysqli_query($conn,$sql);
            while ($editloker= mysqli_fetch_assoc($mysql)) {
             ?>
            <form class="" action="control/process.loker?edit" method="post">
              <table>
                <tr>
                  <td><h5>ID :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="text" name="id" value="<?php echo $editloker['id_loker']; ?>" readonly >
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Lowongan pekerjaan :</h5></td>
                  <td><div class="form-group">
                    <div class="nk-int-st">
                      <input class="form-control" type="text" name="workname" onkeypress="return OnlyAlphabetic(event)" placeholder="Isi nama lowongan" value="<?php echo $editloker['nama_lowongan']; ?>" required>
                    </div>
                  </div></td>
                </tr>
                <tr>
                  <td><h5>Deskripsi pekerjaan :</h5></td>
                  <td>
                    <textarea name="deskripsi" class="html-editor" ><?php echo $editloker['deskripsi_lowongan']; ?></textarea>
                </td>
                </tr>
              </table>
              <hr>
              <button type="submit" class="btn btn-primary btn-block" name="edit"><i class="fas fa-edit"></i> Edit Lowongan</button>
            </form>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>
  </div>
</div>
<?php include 'footer.admin.php'; ?>
