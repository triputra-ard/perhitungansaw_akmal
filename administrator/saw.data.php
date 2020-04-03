<?php
$titlePage = "Tambah data SAW";
$active = "saw";
include 'navigation.admin.php'; ?>
<div class="preload">

</div>
<div class="page-on-frame">
  <div class="container">

    <div class="col-xl-12">
      <div class="well">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#section0"> Nilai</a></li>
          <li class=""><a data-toggle="tab" href="#section1"> Kategori</a></li>
          <li class=""><a data-toggle="tab" href="#section2"> Nilai Bobot</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="section0">
            <br>
            <?php include 'view/saw.nilai.php'; ?>
          </div>
          <div class="tab-pane" id="section1">
            <br>
            <?php include 'view/saw.kategori.php'; ?>
          </div>
          <div class="tab-pane" id="section2">
            <br>
            <?php include 'view/saw.bobot.php'; ?>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>
  </div>
</div>
<?php include 'footer.admin.php'; ?>
