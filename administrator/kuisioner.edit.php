<?php
$titlePage = "Data kuisioner";
$active = "quiz";
include 'navigation.admin.php'; ?>
<div class="preload">

</div>
<div class="page-on-frame">
  <div class="container">

    <div class="col-xl-12">
      <div class="well">
        <div class="panel panel-success">
          <div class="panel panel-heading">
            <h4><i class="fas fa-list"></i> Edit Data kuisioner </h4>
          </div>
          <div class="panel-body">
            <?php include 'model/edit.kuisioner.php'; ?>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>
  </div>
</div>
<?php include 'footer.admin.php'; ?>
