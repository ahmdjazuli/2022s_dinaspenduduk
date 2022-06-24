<?php require('header-admin.php'); require('../koneksi.php'); error_reporting(0);
$idkk = $_GET['idkk'];
  $query = mysqli_query($kon, "SELECT * FROM kk INNER JOIN pemohon ON kk.idpemohon = pemohon.idpemohon WHERE idkk = '$idkk'");
  $data = mysqli_fetch_array($query); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-calendar-plus"></i> Detail Pembuatan KK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-calendar-plus"></i> Detail Pembuatan KK</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST">
                  <div class="form-group">
                    <label>Nama Pemohon</label>
                    <input type="text" class="form-control" readonly value="<?= $data['nama'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <select class="form-control" name="idpemohon">
                      <?php $query = mysqli_query($kon, "SELECT * FROM pemohon ORDER BY nama ASC");
                      while($data = mysqli_fetch_array($query)){ ?>
                        <option value="<?= $data['idpemohon'] ?>"><?= $data['nama'].' - '.$data['nik'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Status Hubungan Dalam Keluarga</label>
                    <input type="text" class="form-control" name="hubungan" placeholder="ex : Kepala Keluarga">
                  </div>
                  <div class="form-group">
                    <label>Pendidikan Terakhir</label>
                    <input type="text" class="form-control" name="pendidikan" placeholder="ex : TAMAT SD/SEDERAJAT">
                  </div>
                  <div class="form-group">
                    <label>Kewarganegaraan</label>
                    <input type="text" class="form-control" name="negara" placeholder="ex : Indonesia">
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-6 col-sm-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                  <div class="form-group">
                    <label>No. Paspor</label>
                    <input type="text" class="form-control" name="paspor">
                  </div>
                  <div class="form-group">
                    <label>No. KITAS/KITAB</label>
                    <input type="text" class="form-control" name="kitas">
                  </div>
                  <div class="form-group">
                    <label>Nama Orang Tua (Ayah)</label>
                    <input type="text" class="form-control" name="ayah">
                  </div>
                  <div class="form-group">
                    <label>Nama Orang Tua (Ibu)</label>
                    <input type="text" class="form-control" name="ibu">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                  <button type="button" onclick="window.location='pemohon.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-dark float-right">
                    <i class="fas fa-calendar-day"></i></button>
                </div>
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          </div> <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require('footer-admin.php') ?>

<?php 
  require('../koneksi.php');
  if (isset($_POST['simpan'])) {
    $idpemohon  = $_REQUEST['idpemohon'];
    $hubungan   = $_REQUEST['hubungan'];
    $pendidikan = $_REQUEST['pendidikan'];
    $kitas      = $_REQUEST['kitas'];
    $negara     = $_REQUEST['negara'];
    $ayah       = $_REQUEST['ayah'];
    $paspor     = $_REQUEST['paspor'];
    $ibu        = $_REQUEST['ibu'];

      $query = mysqli_query($kon, "INSERT INTO detail (idpemohon,hubungan,pendidikan,ibu,paspor,ayah, negara, kitas, idkk) VALUES ('$idpemohon','$hubungan','$pendidikan','$ibu','$paspor','$ayah','$negara','$kitas','$idkk')");
      if($query){
      ?> <script>window.location = 'kk.php?m=simpan'</script> <?php
      }else{ 
      ?> <script>window.location = 'kk.php?m=gagal'</script> <?php
    }
  }
?>