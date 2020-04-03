<?php
$titlePage = "Lihat data Lowongan";
$active = "viewjobs";
include 'navigation.admin.php'; ?>
<div class="preload">

</div>
<div class="page-on-frame">
  <div class="container">

    <div class="col-lg-12">
      <div class="well">
        <div class="panel panel-success">
          <div class="panel-heading">
            <h4><i class="fas fa-eye"></i> Lihat data Lowongan</h4>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <?php include 'view/view.loker.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>
  </div>
</div>
<?php include 'footer.admin.php'; ?>
