<?php require "../../koneksi.php";

  $idkk = $_GET['idkk'];
  $result = mysqli_query($kon, "SELECT * FROM kk INNER JOIN pemohon ON kk.idpemohon = pemohon.idpemohon WHERE idkk = '$idkk'");
  $row = mysqli_fetch_array($result);
  $detail = mysqli_query($kon, "SELECT * FROM `detail` INNER JOIN kk ON detail.idkk = kk.idkk INNER JOIN pemohon ON detail.idpemohon = pemohon.idpemohon WHERE nokk = '$row[nokk]' ORDER BY ttl2 DESC");
  $detail2 = mysqli_query($kon, "SELECT * FROM `detail` INNER JOIN kk ON detail.idkk = kk.idkk INNER JOIN pemohon ON detail.idpemohon = pemohon.idpemohon WHERE nokk = '$row[nokk]' ORDER BY ttl2 DESC");
  $detail3 = mysqli_query($kon, "SELECT * FROM `detail` INNER JOIN kk ON detail.idkk = kk.idkk INNER JOIN pemohon ON detail.idpemohon = pemohon.idpemohon WHERE nokk = '$row[nokk]' ORDER BY ttl2 DESC");
?>
<?php require '../../tgl_indo.php' ?>
<!DOCTYPE html>
<html lang="id, in">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap.min.css.map">
<link rel="icon" type="image/png" href="../ico/logony.png" />
<title>Sistem Informasi Pelayanan pada Dinas Kependudukan dan Pencatatan Sipil Kab. HST berbasis Web</title><style>
        hr{ border: 2px; border-style: solid; width: 100%; margin-top: -10px}
        #kiri{width: 50%; height: 100px; float:left; font-weight: normal; }
        #kanan{width: 50%; height: 100px; float:right; font-weight: normal; }
        .table>thead>tr>th{vertical-align: middle;}
        th{text-align: center;}
    </style><style type="text/css" media="print"> @page { size: landscape;margin:0px } </style>
</head>
<body>
<h1 style="text-align: center;">KARTU KELUARGA</h1>
<h3 style="text-align: center; line-height: 0px">No. <?= $row['nokk'];?></h3>
<div class="container-fluid">
<?php while($run = mysqli_fetch_array($detail)){
  if($run['hubungan']=='KEPALA KELUARGA'){  ?>
    <span style="width: 75%;float:left; font-weight: normal; ">
    Nama Kepala Keluarga : <b style="text-transform: uppercase;"><?= $run['nama']?></b><br>
    Alamat : <span style="text-transform: uppercase;"><?= $run['alamat']?></span><br>
    RT/RW : <span style="text-transform: uppercase;"><?= $run['rt'].' / '.$run['rw']?></span><br>
    </span>
    <span style="width: 25%;float:left; font-weight: normal; ">
        Desa/Kelurahan : <span style="text-transform: uppercase;"><?= $run['kelurahan']?></span><br>
        Kecamatan : <span style="text-transform: uppercase;"><?= $run['kecamatan']?></span><br>
        Kota : <span style="text-transform: uppercase;"><?= $run['kota']?></span><br>
    </span>
  <?php $kepala = $run['nama']; } 
}?>
  <table class="table table-responsive table-bordered">
    <thead class="text-center">
      <tr class="text-center">
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>NIK</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Pendidikan</th>
        <th>Jenis Pekerjaan</th>
      </tr>
      <tr class="text-center">
        <th></th>
        <th>(1)</th>
        <th>(2)</th>
        <th>(3)</th>
        <th>(4)</th>
        <th>(5)</th>
        <th>(6)</th>
        <th>(7)</th>
        <th>(8)</th>
      </tr>
    </thead>
<?php 
$i = 1;
while( $data = mysqli_fetch_array($detail2) ) : ?>
<tr class="text-center text-uppercase">
  <td><?php echo $i;?></td>
  <td><?= $data['nama'] ?></td>
  <td><?= $data['nik'] ?></td>
  <td><?php if($data['jk']=='P'){echo 'PEREMPUAN'; }else{echo 'LAKI-LAKI'; } ?></td>
  <td><?= str_replace(',','', $data['ttl1']); ?></td>
  <td><?= $data['ttl2'] ?></td>
  <td><?= $data['agama'] ?></td>
  <td><?= $data['pendidikan'] ?></td>
  <td><?= $data['pekerjaan'] ?></td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>
  </table>
  <table class="table table-responsive table-bordered">
    <thead class="text-center">
      <tr class="text-center">
        <th rowspan="2" style="">No</th>
        <th rowspan="2">Status Perkawinan</th>
        <th rowspan="2">Status Hubungan Dalam Keluarga</th>
        <th rowspan="2">Kewarganegaraan</th>
        <th colspan="2">Dokumen Imigrasi</th>
        <th colspan="2">Nama Orang Tua</th>
      </tr>
      <tr class="text-center">
        <th>No. Paspor</th> <th>No. KITAS/KITAP</th> <th>Ayah</th> <th>Ibu</th>
      </tr>
      <tr class="text-center">
        <th></th> <th>(9)</th> <th>(10)</th> <th>(11)</th> <th>(12)</th> <th>(13)</th> <th>(14)</th> <th>(15)</th>
      </tr>
    </thead>
<?php 
$i = 1;
while( $data = mysqli_fetch_array($detail3) ) : ?>
<tr class="text-center text-uppercase">
  <td><?php echo $i;?></td>
  <td><?= $data['perkawinan'] ?></td>
  <td><?= $data['hubungan'] ?></td>
  <td><?= $data['negara'] ?></td>
  <td><?= $data['paspor'] ?></td>
  <td><?= $data['kitas'] ?></td>
  <td><?= $data['ayah'] ?></td>
  <td><?= $data['ibu'] ?></td>
</tr>
<?php $i++; ?>
<?php endwhile; ?>
  </table>
</div>
<br>
<div class="container-fluid text-right">
     <span style="width: 25%;float:left; font-weight: normal; ">
    Dikeluarkan Tanggal : <span style="border: 2px solid"><?= date("d-m-Y", strtotime(date('Y-m-d'))); ?></span><br>
    LEMBAR : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I. Kepala Keluarga <br>
    II. RT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
    &nbsp;&nbsp;III. Desa/Kelurahan<br>
    IV. Kecamatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </span>
    <span style="width: 45%;float:left; font-weight: normal; text-align: center;">
        <br> KEPALA KELUARGA<br> <br> <br> <br>
        <b style="text-transform: uppercase; text-decoration: underline;"><?= $kepala ?></b><br>
        <small>Tanda Tangan/Cap Jempol</small>
    </span>
    <span style="width: 25%;float:left; font-weight: normal; text-align: center;">
        <br> KEPALA DINAS DUKPENCAPIL<br> <br> <br> <br>
        <b style="text-transform: uppercase; text-decoration: underline;">HERRY SETIAWAN, S.sos</b><br>
        <small>NIP. 19780328 199703 1 004</small>
    </span>
</div>

   <script type="text/javascript">
    window.print();
</script> 
    
</body>
</html>