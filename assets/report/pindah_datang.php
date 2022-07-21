<?php 
require "../../koneksi.php";
  $idpindahdatang = $_GET['idpindahdatang'];
  $result = mysqli_query($kon, "SELECT * FROM pindah_datang INNER JOIN pemohon ON pindah_datang.idpemohon = pemohon.idpemohon WHERE idpindahdatang = '$idpindahdatang'");
  $inilah = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="id, in">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Sistem Informasi Pelayanan pada Dinas Kependudukan dan Pencatatan Sipil Kab. HST berbasis Web</title>
    <link rel="icon" type="image/png" href="../ico/logony.png" />
  <style>
        hr{ border: 2px; border-style: solid; width: 100%; margin-top: -10px}
        #kiri{width: 50%; height: 100px; float:left; font-weight: normal; }
        #kanan{width: 50%; height: 100px; float:right; font-weight: normal; }
        .logo{width: 10%; height: 120px; float:left; font-weight: normal; }
        .kop{width: 90%; height: 120px; font-weight: normal; }
        .hiding{ border-top-style: hidden  }
        th{text-align: center;}
    </style>
    <style type="text/css" media="print"> @page { size: portrait; } </style>
</head>
<body>
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
<h3 style="text-align: center;">SURAT KETERANGAN PINDAH DATANG</h3>
<h4 style="text-align: center;">Nomor : <?= $inilah['idpindahdatang'] ?>/103/DISDUKCAPIL/HST</h4>
<br>
  <!-- container form inputan -->
<div class="container">
  <!-- tabel buat nampilin data -->
  <table class="table table-sm" style="font-weight: 400;">
    <thead >
      <tr>
        <td style="font-weight: bold">NIK</td>
        <td>: <?= $inilah['nik'] ?></td>
      </tr>
      <tr>
        <td width="40%" style="font-weight: bold">Nama Lengkap</td>
        <td>: <?= $inilah['nama'] ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold">Jenis Kelamin</td>
        <td>: <?= $inilah['jk'] ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold">Tempat/Tanggal.lahir</td>
        <td>: <?= $inilah['ttl1'].date("d-m-Y", strtotime($inilah['ttl2'])); ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold">Alamat</td>
        <td>: <?= $inilah['alamat'].' RT '.$inilah['rt'].' RW '.$inilah['rw'] ?></td>
      </tr>
      <tr class="hiding">
        <td style="font-weight: bold"></td>
        <td>: Kelurahan <?= $inilah['kelurahan'] ?></td>
      </tr>
      <tr class="hiding">
        <td style="font-weight: bold"></td>
        <td>: Kecamatan <?= $inilah['kecamatan'] ?></td>
      </tr>
      <tr class="hiding">
        <td style="font-weight: bold"></td>
        <td>: Kota <?= $inilah['kota'] ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold">Status Perkawinan</td>
        <td>: <?= $inilah['perkawinan'] ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold">Pekerjaan</td>
        <td>: <?= $inilah['pekerjaan'] ?></td>
      </tr>
    </thead>
  </table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian Surat Keterangan ini dibuat untuk dipergunakan sebagaimana mestinya dan untuk menjadikan periksa adanya.
</div>  <br>
<div class="container text-center">
  <div id="kiri">
        Pemohon<br><br><br><br>
        <b></b><b style="text-transform: uppercase; text-decoration: underline;"><?= $inilah['nama'] ?></b><br><small>Tanda Tangan/Cap Jempol</small>
    </div>
    <div id="kanan">
        KEPALA DINAS DUKPENCAPIL<br><br><br><br>
        <b style="text-transform: uppercase; text-decoration: underline;">HERRY SETIAWAN, S.sos</b><br>
        <small>NIP. 19780328 199703 1 004</small>
    </div>
</div>
</body>
</html>
<script>window.print()</script>