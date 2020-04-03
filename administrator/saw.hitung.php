<?php
$titlePage = "Hitung data SAW";
$active = "sawhitung";
include 'navigation.admin.php'; ?>
<div class="preload">

</div>
<div class="page-on-frame">
  <div class="container">

    <div class="col-xl-12">
      <div class="well">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#section0"> Nilai Kategori</a></li>
          <li class=""><a data-toggle="tab" href="#section1"> Matriks Awal</a></li>
          <li class=""><a data-toggle="tab" href="#section2"> Matriks Normalisasi</a></li>
          <li class=""><a data-toggle="tab" href="#section3"> Persentase</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="section0">
            <br>
             <?php include 'view/saw.nilaikategori.php'; ?>
          </div>
          <div class="tab-pane" id="section1">
            <br>
            <?php include 'view/saw.matriksawal.php'; ?>
          </div>
          <div class="tab-pane" id="section2">
            <br>
            <?php include 'view/saw.matriksnormalisasi.php'; ?>
          </div>
          <div class="tab-pane" id="section3">
            <br>
             <?php include 'view/saw.presentase.php'; ?>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>
  </div>
</div>
<?php include 'footer.admin.php'; ?>
