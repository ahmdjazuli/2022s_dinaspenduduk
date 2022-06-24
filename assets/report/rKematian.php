<?php require "../../koneksi.php";

  $bulan    = $_REQUEST['bulan'];
  $tahun    = $_REQUEST['tahun'];
  $status   = $_REQUEST['status'];

  if($bulan AND $tahun AND $status){
    $result = mysqli_query($kon, "SELECT * FROM skk INNER JOIN pemohon ON skk.idpemohon = pemohon.idpemohon WHERE MONTH(waktu1) = '$bulan' AND YEAR(waktu1) = '$tahun' AND status = '$status' ORDER BY waktu1 ASC");
  }

  if($bulan == 1){ $namabulan = "Januari";
    }else if($bulan == 2){ $namabulan = "Februari";
    }else if($bulan == 3){ $namabulan = "Maret";
    }else if($bulan == 4){ $namabulan = "April";
    }else if($bulan == 5){ $namabulan = "Mei";
    }else if($bulan == 6){ $namabulan = "Juni";
    }else if($bulan == 7){ $namabulan = "Juli";
    }else if($bulan == 8){ $namabulan = "Agustus";
    }else if($bulan == 9){ $namabulan = "September";
    }else if($bulan == 10){ $namabulan = "Oktober";
    }else if($bulan == 11){ $namabulan = "November";
    }else if($bulan == 12){ $namabulan = "Desember";
  }

require 'header-cetak.php';
?>
<h3 style="text-align: center;">Laporan Pembuatan SKK</h3>
<h5 style="text-align: center;">Periode bulan <b><?= $namabulan;?></b> tahun <b><?= $tahun;?></b> </h5>
<h6 style="text-align: center;">Status <b><?= $status;?></b></h6>
<br>
    <!-- container form inputan -->
<div class="container-fluid">

  <!-- tabel buat nampilin data -->
  <table class="table table-responsive table-bordered">
    <thead class="text-center">
      <tr class="text-center">
        <th>No</th>
        <th>Waktu (WITA)</th>
        <th>Pemohon</th>
        <th>Orang yang Meninggal</th>
        <th>Hubungan</th>
        <th>KTP</th>
        <th>Surat Pengantar RT/RW</th>
        <th>Anak</th>
        <th>Tempat</th>
        <th>Penyebab</th>
      </tr>
    </thead>
<?php 
$i = 1;
while( $data = mysqli_fetch_array($result) ) :
 ?>
    
<tr class="text-center">
  <td><?php echo $i;?></td>
  <td><?= date("d/m/Y, g:i", strtotime($data['waktu1'])); ?></td>
  <td><?= $data['nama'] ?></td>           
  <?php $tes = mysqli_query($kon, "SELECT * FROM pemohon WHERE idpemohon = '$data[nikpemohon]'");
  $row = mysqli_fetch_array($tes); ?>
  <td><?= $row['nama'].' ('.$row['jk'].')' ?></td>
  <td><?= $data['hubungan'] ?></td>       
  <td><img src="../../img/<?= $data['file1'] ?>" width="60px"></td>       
  <td><img src="../../img/<?= $data['file2'] ?>" width="60px"></td>       
  <td><?= $data['anakke'] ?></td>       
  <td><?= $data['tempat'] ?></td>    
  <td><?= $data['penyebab'] ?></td>    
</tr>
<?php $i++; ?>
<?php endwhile; ?>

  </table>
<!-- akhir table -->
</div>
<div class="container-fluid text-right">
<div id="kiri"></div>
<div id="kanan">
    .................., ...................... 20...<br>
    Mengetahui, Kepala Dinas<br>,
  <?php QRcode::png($kode,"LaporanKematian.png","M",2,2); ?>
  <img src="LaporanKematian.png"><br>
    Herry Setiawan, S.sos
</div>
<script>
    window.print();
</script>   
</body>
</html>