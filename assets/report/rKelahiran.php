<?php require "../../koneksi.php";

  $bulan    = $_REQUEST['bulan'];
  $tahun    = $_REQUEST['tahun'];
  $status   = $_REQUEST['status'];

  if($bulan AND $tahun AND $status){
    $result = mysqli_query($kon, "SELECT * FROM kelahiran INNER JOIN pemohon ON kelahiran.idpemohon = pemohon.idpemohon WHERE MONTH(waktu1) = '$bulan' AND YEAR(waktu1) = '$tahun' ORDER BY waktu1 ASC");
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
<h3 style="text-align: center;">Laporan Pembuatan Akta Kelahiran</h3>
<h5 style="text-align: center;">Periode bulan <b><?= $namabulan;?></b> tahun <b><?= $tahun;?></b> </h5>
<h6 style="text-align: center;">Status <b><?= $status;?></b></h6>
<br>
<div class="container-fluid">
  <table class="table table-responsive table-bordered">
    <thead class="text-center">
      <tr class="text-center">
        <th>No</th>
        <th>Waktu (WITA)</th>
        <th>Pemohon</th>
        <th>Ayah</th>
        <th>Ibu</th>
        <th>KK Asli</th>
        <th>Fotokopi KTP Orang Tua</th>
        <th>Fotokopi Akta Nikah Orang Tua</th>
        <th>Anak ke-</th>
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
  <td><?= $data['ayah'] ?></td>
  <td><?= $data['ibu'] ?></td>       
  <td><img src="../../img/<?= $data['file1'] ?>" width="60px"></td>       
  <td><img src="../../img/<?= $data['file2'] ?>" width="60px"></td>       
  <td><img src="../../img/<?= $data['file3'] ?>" width="60px"></td>       
  <td><?= $data['anakke'] ?></td>   
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
  <?php QRcode::png($kode,"LaporanKelahiran.png","M",2,2); ?>
  <img src="LaporanKelahiran.png"><br>
    Herry Setiawan, S.sos
</div>
<script>
    window.print();
</script>   
</body>
</html>