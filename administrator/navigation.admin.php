<?php
include '../include/atas.semua.php';
session_start();
if (empty(@$_SESSION[fullname])) {
  header('location:admin.access');
}
?>
<body class="bg-transparent-blue">
<!-- navbar -->
<nav class="navbar navbar-default nk-cyan">
    <div class="container-fluid">
        <div class="navbar-header"><p class="navbar-brand navbar-link" href="#">Administrator : <?php echo @$_SESSION[fullname]; ?></p>
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <a href="control/process.logout" class="btn btn-danger navbar-btn navbar-right"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </div>
    </div>
</nav>
<!-- /navbar -->
 <div class="subnavbar">
   <div class="subnavbar-inner">
     <div class="container">
       <ul class="mainnav">
         <li class="<?php if($active == "admin") echo "active";?>"><a href="admin.landing"><i class="fas fa-tachometer-alt" style="font-size:30px;"></i><span> Dasbor </span></a></li>
         <li class="dropdown  <?php if($active == "jobs") echo "active"; elseif($active == "viewjobs") echo "active"; ?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-briefcase" style="font-size:30px;"></i><span>Master data Lowongan <i class="fas fa-caret-down"></i> </span></a>
           <ul class="dropdown-menu animated fadeIn">
             <li class="<?php if($active == "jobs") echo "active"; ?>"><a href="loker.tambah">Tambah Lowongan pekerjaan</a></li>
             <li class="<?php if($active == "viewjobs") echo "active"; ?>"><a href="loker.lihat">Lihat Lowongan yang tersedia</a></li>
           </ul>
         </li>
         <li class="dropdown <?php if($active == "viewworker_regis") echo "active"; elseif($active == "viewworker") echo "active";?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-users" style="font-size:30px;"></i><span>Master data Karyawan <i class="fas fa-caret-down"></i> </span></a>
           <ul class="dropdown-menu animated fadeIn">
             <li class="<?php if($active == "viewworker_regis") echo "active";?>"><a href="karyawan.lihat">Lihat data Karyawan Terdaftar</a></li>
             <li class="<?php if($active == "viewworker") echo "active";?>"><a href="karyawan.identitas.lihat">Lihat data Identitas Karyawan</a></li>
           </ul>
         </li>
         <li class="dropdown <?php if($active == "hrd") echo "active"; elseif($active == "viewhrd") echo "active"; ?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-id-badge" style="font-size:30px;"></i><span>Master data HRD <i class="fas fa-caret-down"></i> </span></a>
           <ul class="dropdown-menu animated fadeIn">
             <li class="<?php if($active == "hrd") echo "active"; ?>"><a href="hrd.tambah">Tambah HRD</a></li>
             <li class="<?php if($active == "viewhrd") echo "active"; ?>"><a href="hrd.lihat">Lihat HRD</a></li>
           </ul>
         </li>
         <li class="dropdown <?php if($active == "saw") echo "active"; elseif($active == "sawhitung") echo "active"; ?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-cube" style="font-size:30px;"></i><span>Aplikasi SAW <i class="fas fa-caret-down"></i> </span></a>
           <ul class="dropdown-menu animated fadeIn">
             <li class="<?php if($active == "saw") echo "active"; ?>"><a href="saw.data">Lihat Data</a></li>
             <li class="<?php if($active == "sawhitung") echo "active"; ?>"><a href="saw.hitung">Perhitungan</a></li>
           </ul>
         </li>
         <li class="dropdown <?php if($active == "quiz") echo "active"; ?>"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-list" style="font-size:30px;"></i><span>Kuisioner <i class="fas fa-caret-down"></i> </span></a>
           <ul class="dropdown-menu animated fadeIn">
             <li class="<?php if($active == "quiz") echo "active"; ?>"><a href="kuisioner.data.php">Lihat dan Tambah Data</a></li>
           </ul>
         </li>
       </ul>
     </div>
     <!-- /container -->
   </div>
   <!-- /subnavbar-inner -->
 </div>
 <!-- /subnavbar -->
