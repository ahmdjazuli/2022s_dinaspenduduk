<?php require '../../tgl_indo.php'; require_once('../phpqrcode/qrlib.php'); $kode = 'localhost'.htmlspecialchars($_SERVER['REQUEST_URI']); ?>
<!DOCTYPE html>
<html lang="id, in">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap.min.css.map">
<link rel="icon" type="image/png" href="../ico/logony.png" />
<title>Aplikasi Sistem Administrasi Kependudukan pada Dinas Kependudukan dan Pencatatan Sipil Kabupaten Hulu Sungai Tengah</title><style>
        hr{ border: 2px; border-style: solid; width: 100%; margin-top: -10px}
        #kiri{width: 50%; height: 100px; float:left; font-weight: normal; }
        #kanan{width: 50%; height: 100px; float:right; font-weight: normal; }
        .logo{width: 10%; height: 120px; float:left; font-weight: normal; }
        .kop{width: 90%; height: 120px; font-weight: normal; }
        th{text-align: center;}
    </style><style type="text/css" media="print"> @page { size: landscape; } </style>
</head>
<body>
<!-- kop kelurahan -->
<div class="container-fluix"><br>
    <div class="logo">
        <img src="../ico/logony.png" style="width: 100px">
    </div>
    <div class="kop text-center">
        <h4>PEMERINTAH KABUPATEN HULU SUNGAI TENGAH</h4>
        <h3 style="margin-top: 10px;font-size: 23px;"><b>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</b></h3>
        <p style="margin-top: -10px;">Jl. Bintara No.36 Mandingin Telp.(0517) 42218 <br>Barabai</p>
    </div>
    <hr>
</div>
