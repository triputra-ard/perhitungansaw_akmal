<?php
$titlePage = "Selamat datang Admin";
$active = "admin";
include 'navigation.admin.php'; ?>
<div class="preload">

</div>
<div class="page-on-frame">
  <div class="container">

    <div class="row">
      <div class="col-lg-3">
        <div class="well animated bounceIn">
          <a href="karyawan.lihat">
          <div class="alert alert-success">
            <?php
            $sqlcount1  = "SELECT COUNT(*) as active FROM user WHERE status_aktivasi = 'ACTIVATED'";
            $mysqlcount1 = mysqli_query($conn,$sqlcount1);
            $notif1 = mysqli_fetch_assoc($mysqlcount1);
             ?>
            <h4 class="text-center"><i class="fas fa-envelope"></i> <?php echo $notif1['active']; ?>
              <br>
              <small class="text-gray-100">Total email teraktivasi</small>
            </h4>
          </div>
        </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="well animated bounceIn delay-1s">
          <a href="karyawan.lihat">
          <div class="alert alert-danger">
            <?php
            $sqlcount2  = "SELECT COUNT(*) as notactive FROM user WHERE status_aktivasi = 'NOT_ACTIVATED'";
            $mysqlcount2 = mysqli_query($conn,$sqlcount2);
            $notif2 = mysqli_fetch_assoc($mysqlcount2);
             ?>
            <h4 class="text-center"><i class="fas fa-envelope"></i> <?php echo $notif2['notactive']; ?>
              <br>
              <small class="text-gray-100">Total email tidak teraktivasi</small>
            </h4>
          </div>
        </div>
        </a>
      </div>
      <div class="col-lg-3">
        <div class="well animated bounceIn delay-2s">
          <a href="hrd.lihat">
          <div class="alert nk-cyan">
            <?php
            $sqlcount3  = "SELECT COUNT(*) as active FROM hrd WHERE hrd_status= 'AKTIF'";
            $mysqlcount3 = mysqli_query($conn,$sqlcount3);
            $notif3 = mysqli_fetch_assoc($mysqlcount3);
             ?>
            <h4 class="text-center  text-gray-100"><i class="fas fa-id-badge"></i> <?php echo $notif3['active']; ?>
              <br>
              <small class="text-gray-100">HRD Aktif</small>
            </h4>
          </div>
        </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="well animated bounceIn delay-3s">
          <a href="loker.lihat">
          <div class="alert nk-brown">
            <?php
            $sqlcount4  = "SELECT COUNT(*) as available FROM loker";
            $mysqlcount4 = mysqli_query($conn,$sqlcount4);
            $notif4 = mysqli_fetch_assoc($mysqlcount4);
             ?>
            <h4 class="text-center text-gray-100"><i class="fas fa-briefcase"></i> <?php echo $notif4['available']; ?>
              <br>
              <small class="text-gray-100">Jumlah lowongan tersedia</small>
            </h4>
          </div>
        </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="well animated bounceIn delay-4s">
          <a href="saw.data">
          <div class="alert nk-indigo">
            <?php
            $sqlcount5 = "SELECT COUNT(*) as available FROM saw_kategori";
            $mysqlcount5 = mysqli_query($conn,$sqlcount5);
            $notif5 = mysqli_fetch_assoc($mysqlcount5);
             ?>
            <h4 class="text-center text-gray-100"><i class="fas fa-cube"></i> <?php echo $notif5['available']; ?>
              <br>
              <small class="text-gray-100">Kriteria SAW Tersedia</small>
            </h4>
          </div>
        </a>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="well animated bounceIn delay-4s">
          <a href="kuisioner.data">
          <div class="alert nk-light-green">
            <?php
            $sqlcount6 = "SELECT COUNT(*) as available FROM kuisioner";
            $mysqlcount6 = mysqli_query($conn,$sqlcount6);
            $notif6 = mysqli_fetch_assoc($mysqlcount6);
             ?>
            <h4 class="text-center text-gray-100"><i class="fas fa-list-ol"></i> <?php echo $notif6['available']; ?>
              <br>
              <small class="text-gray-100">Jumlah soal kuisioner</small>
            </h4>
          </div>
        </a>
        </div>
      </div>
    </div>

    <br><br><br>
  </div>
</div>
<?php include 'footer.admin.php'; ?>
