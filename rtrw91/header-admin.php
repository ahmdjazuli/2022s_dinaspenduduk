<?php
    SESSION_START();
    require "../koneksi.php";
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $idpemohon  = $_SESSION['idpemohon'];
    $query      = mysqli_query($kon,"SELECT * FROM pemohon WHERE idpemohon='$idpemohon'");
    $skuy       = mysqli_fetch_array($query);
    $_SESSION['idpemohon'] = $skuy['idpemohon'];
    $idpemohon = $_SESSION['idpemohon'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aplikasi Sistem Administrasi Kependudukan pada Dinas Kependudukan dan Pencatatan Sipil Kabupaten Hulu Sungai Tengah</title>
  <!-- font awesome jijik aku -->
  <link rel="stylesheet" href="../assets/fonts/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <link rel="stylesheet" href="../assets/css/julikoding.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-select/css/searchPanes.dataTables.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-select/css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/sweetalert2/dark.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> <!-- pake internet -->
  <!-- logo web -->
  <link rel="icon" type="image/png" href="../assets/ico/logony.png" />
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark border-bottom-0">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php" data-toggle="tooltip" title="Dashboard"><i class="fas fa-tachometer-alt"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pemohon.php" data-toggle="tooltip" title="Pemohon"><i class="fas fa-user-injured"></i></a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <script src="../assets/js/jquery.js" type="text/javascript"></script>
      <!-- Notifications Dropdown Menu -->
    <form name="akukau">
    <li class="nav-item">
      <button class="button btn-xs btn-light" type="button" style="margin-top: 4px" onclick="keluar()" data-toggle="tooltip" data-placement="bottom" title="Keluar"><svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="black" d="M14.08,15.59L16.67,13H7V11H16.67L14.08,8.41L15.5,7L20.5,12L15.5,17L14.08,15.59M19,3A2,2 0 0,1 21,5V9.67L19,7.67V5H5V19H19V16.33L21,14.33V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19Z" /></svg></button>
    </li>
    </form>
  </ul>
</nav>
<!-- /.navbar -->



<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-white elevation-4">
  <!-- Brand Logo -->
    <a href="index.php" class="brand-link navbar text-dark">
      <img src="../assets/ico/logony.png" class="brand-image img-circle elevation-3" style="opacity: .8; filter: invert(1);">
      <span class="brand-text font-weight-light text-white">KAB. HST</span>
    </a>
  <!-- Sidebar -->
  <div class="sidebar">
<nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="pengajuan1.php" class="nav-link"> <i class="nav-icon fas fa-user-tag"></i><p> Pengajuan KTP </p></a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-envelope"></i>
            <p> Pembuatan <span class="badge badge-light right">7</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="kematian.php" class="nav-link"> <i class="nav-icon fas fa-skull-crossbones"></i><p> SKK </p></a>
            </li>
            <li class="nav-item">
              <a href="jomblo.php" class="nav-link"> <i class="nav-icon fas fa-heart"></i><p> SKBM </p></a>
            </li>
            <li class="nav-item">
              <a href="kk.php" class="nav-link"> <i class="nav-icon fas fa-object-group"></i><p> KK </p></a>
            </li>
            <li class="nav-item">
              <a href="kelahiran.php" class="nav-link"> <i class="nav-icon fas fa-broom"></i><p> Akta Kelahiran </p></a>
            </li>
            <li class="nav-item">
              <a href="anak.php" class="nav-link"> <i class="nav-icon fas fa-child"></i><p> Akta Pengangkatan Anak </p></a>
            </li>
            <li class="nav-item">
              <a href="pindah_datang.php" class="nav-link"> <i class="nav-icon fas fa-draw-polygon"></i><p> SKPD </p></a>
            </li>
            <li class="nav-item">
              <a href="pindah_keluar.php" class="nav-link"> <i class="nav-icon fab fa-cloudsmith"></i><p> SKPK </p></a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>