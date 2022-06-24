<?php require "../../koneksi.php";

  $idanak = $_GET['idanak'];
  $result = mysqli_query($kon, "SELECT * FROM anak INNER JOIN pemohon ON anak.idpemohon = pemohon.idpemohon WHERE idanak = '$idanak'");
  $data = mysqli_fetch_array($result);
?>
<?php require '../../tgl_indo.php' ?>
<!DOCTYPE html>
<html lang="id, in">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap.min.css.map">
<link rel="icon" type="image/png" href="../ico/logony.png" />
<title>Aplikasi Sistem Administrasi Kependudukan pada Dinas Kependudukan dan Pencatatan Sipil Kabupaten Hulu Sungai Tengah</title><style>
      *,h1,h2,h3,h4,h5,h6{font-family: initial;}
        hr{ border: 2px; border-style: solid; width: 100%; margin-top: -10px}
        #kiri{width: 50%; height: 100px; float:left; font-weight: normal; }
        #kanan{width: 50%; height: 100px; float:right; font-weight: normal; }
        .table>thead>tr>th{vertical-align: middle;}
        th{text-align: center;}
    </style><style type="text/css" media="print"> @page { size: portrait;} </style>
</head>
<body>
  <h2 class="text-center" style="font-kerning: none;">PENCATATAN SIPIL</h2>
  <h3 class="text-center" style="line-height: 0px;font-kerning: none; text-decoration: underline;">(WARGA NEGARA INDONESIA)</h3><br>
<h2 style="text-align: center;font-kerning: none;">KUTIPAN</h2>
<h2 style="text-align: center;line-height: 0px;font-kerning: none;">AKTA PENGAKUAN ANAK</h2><br>
<p class="text-center" style="font-size: large;">No. <b><?= $data['noak'] ?></b></p>
<div class="container text-justify" style="font-size: x-large;">
  Dari daftar ..................................<span style="font-family: monospace;">Istimewa</span>....................................... tentang pengakuan anak menurut Stbld <span style="font-family: monospace;"><?= $data['stbld'] ?></span> bahwa di di ..........<span style="font-family: monospace;"><?= $data['tempatlahir'] ?></span>.......... pada tanggal <span style="font-family: monospace;"><?= $data['tgllahir'] ?> -pukul-</span> telah diakui sebagai anak kandungannya oleh <span style="font-family: monospace;"><?= $data['nama'] ?> dan <?= $data['pasangan'] ?></span><br>Kutipan ini sesuai dengan keadaan pada hari ini.................<span style="font-family: monospace;"><?= $data['tempatlahir'] ?></span>,.... tanggal <span style="font-family: monospace;"><?= $data['tglacc'] ?></span>.......
</div>
<div class="container-fluid text-right" style="font-size: x-large;">
     <span style="width: 15%;float:left; font-weight: normal; "></span>
    <span style="width: 55%;float:right; font-weight: normal; text-align: center;">
        <br> <span style="font-family: monospace;">PEGAWAI LUAR BIASA PENCATATAN<br>
        SIPIL KABUPATEN BANJAR,<br> <br> <br> <br>
        <p style="font-family: monospace;line-height: 0px;">DRS. H. M. HASANUDDIN.-</p>
        <p style="font-family: monospace;">Pembina Tk.I</p>
        <p style="font-family: monospace;line-height: 0px;">Nip. 010 086 905.-</p>
        </span>
    </span>
</div>
   <script type="text/javascript">
    window.print();
</script> 
    
</body>
</html>