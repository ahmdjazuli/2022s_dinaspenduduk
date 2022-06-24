<?php require('header-admin.php'); require('../koneksi.php'); error_reporting(0); $idanak = $_GET['idanak'];
  $query = mysqli_query($kon, "SELECT * FROM anak INNER JOIN pemohon ON anak.idpemohon = pemohon.idpemohon WHERE idanak = '$idanak'");
  $data = mysqli_fetch_array($query); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-calendar-minus"></i> Pembuatan Akta Pengangkatan Anak</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-calendar-minus"></i> Pembuatan Akta Pengangkatan Anak</li>
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
          <div class="col-md-3 col-sm-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Nama Pemohon</label>
                    <input type="text" class="form-control" value="<?= $data['nama'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nama Pasangan</label>
                    <input type="text" class="form-control" name="pasangan" value="<?= $data['pasangan'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Anaknya</label>
                    <input type="text" class="form-control" name="anaknya" value="<?= $data['anaknya'] ?>" required>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                  <button type="button" onclick="window.location='anak.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-dark float-right">
                    <i class="fas fa-calendar-day"></i></button>
                </div>
              </div>
              </div>
             <div class="col-md-3 col-sm-12">
            <div class="card card-widget">
              <div class="card-header">
                <b class="username">Akta Kelahiran</b>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body text-center">
                <img class="img-fluid pad" src="../img/<?= $data['file1'] ?>" style="max-width: 200px;">
              </div>
              <div class="card-footer">
                <div class="input-group input-group-mb" style="margin-bottom: 10px">
                <div class="input-group-prepend" style="width: 20%">
                    <button type="submit" name="upfile1" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                </div>
                <div class="input-group-prepend" style="width: 80%">
                    <input type="file" name="file1" class="form-control">
                    <input type="hidden" name="file1Lama" value="../<?= $data['file1'] ?>">
                </div>
              </div>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div> <!-- /.col -->
          <div class="col-md-3 col-sm-12">
            <div class="card card-widget">
              <div class="card-header">
                <b class="username">Fotokopi KK dan KTP</b>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body text-center">
                <img class="img-fluid pad" src="../img/<?= $data['file2'] ?>" style="max-width: 200px;">
              </div>
              <div class="card-footer">
                <div class="input-group input-group-mb" style="margin-bottom: 10px">
                <div class="input-group-prepend" style="width: 20%">
                    <button type="submit" name="upfile2" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                </div>
                <div class="input-group-prepend" style="width: 80%">
                    <input type="file" name="file2" class="form-control">
                    <input type="hidden" name="file2Lama" value="../<?= $data['file2'] ?>">
                </div>
              </div>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div> <!-- /.col -->

          <div class="col-md-3 col-sm-12">
            <div class="card card-widget">
              <div class="card-header">
                <b class="username">Akta Perkawinan</b>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body text-center">
                <img class="img-fluid pad" src="../img/<?= $data['file3'] ?>" style="max-width: 200px;">
              </div>
              <div class="card-footer">
                <div class="input-group input-group-mb" style="margin-bottom: 10px">
                <div class="input-group-prepend" style="width: 20%">
                    <button type="submit" name="upfile3" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                </div>
                <div class="input-group-prepend" style="width: 80%">
                    <input type="file" name="file3" class="form-control">
                    <input type="hidden" name="file3Lama" value="../<?= $data['file3'] ?>">
                </div>
              </div>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div> <!-- /.col -->


          <div class="col-md-4 col-sm-12">
            <div class="card card-widget">
              <div class="card-header">
                <b class="username">Fotokopi KK dan KTP 2 Orang Saksi</b>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body text-center">
                <img class="img-fluid pad" src="../img/<?= $data['file4'] ?>" style="max-width: 200px;">
              </div>
              <div class="card-footer">
                <div class="input-group input-group-mb" style="margin-bottom: 10px">
                <div class="input-group-prepend" style="width: 20%">
                    <button type="submit" name="upfile4" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                </div>
                <div class="input-group-prepend" style="width: 80%">
                    <input type="file" name="file4" class="form-control">
                    <input type="hidden" name="file4Lama" value="../<?= $data['file4'] ?>">
                </div>
              </div>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
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
    $anakke      = $_REQUEST['anakke'];
    $ayah        = $_REQUEST['ayah'];
    $ibu         = $_REQUEST['ibu'];
    $tempatlahir = $_REQUEST['tempatlahir'];
    $pasangan    = $_REQUEST['pasangan'];
    $anaknya  = $_REQUEST['anaknya'];
      $query = mysqli_query($kon, "UPDATE anak SET anakke = '$anakke', ayah = '$ayah', ibu = '$ibu', tempatlahir = '$tempatlahir', pasangan = '$pasangan', anaknya = '$anaknya' WHERE idanak = '$idanak'");
      if($query){
      ?> <script>window.location = 'anak.php?m=ubah'</script> <?php
      }else{ 
      ?> <script>window.location = 'anak.php?m=gagal'</script> <?php
    }
  }

  if (isset($_POST['upfile1'])) {
        unlink($_REQUEST['file1Lama']);
        $namafile  = $_FILES['file1']['tmp_name'];
        $namabaru  = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file1']['name']);  
        move_uploaded_file($namafile, '../img/'.$namabaru);
        $query = mysqli_query($kon, "UPDATE anak SET file1 = '$namabaru' WHERE idanak = '$idanak'");
        if($query){
            ?> <script>window.location = 'anak.php?m=ubah'</script> <?php
        }else{ 
            ?> <script>window.location = 'anak.php?m=gagal'</script> <?php
        }
    }

    if (isset($_POST['upfile2'])) {
        unlink($_REQUEST['file2Lama']);
        $namafile  = $_FILES['file2']['tmp_name'];
        $namabaru  = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file2']['name']);  
        move_uploaded_file($namafile, '../img/'.$namabaru);
        $query = mysqli_query($kon, "UPDATE anak SET file2 = '$namabaru' WHERE idanak = '$idanak'");
        if($query){
            ?> <script>window.location = 'anak.php?m=ubah'</script> <?php
        }else{ 
            ?> <script>window.location = 'anak.php?m=gagal'</script> <?php
        }
    }

    if (isset($_POST['upfile3'])) {
        unlink($_REQUEST['file3Lama']);
        $namafile  = $_FILES['file3']['tmp_name'];
        $namabaru  = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file3']['name']);  
        move_uploaded_file($namafile, '../img/'.$namabaru);
        $query = mysqli_query($kon, "UPDATE anak SET file3 = '$namabaru' WHERE idanak = '$idanak'");
        if($query){
            ?> <script>window.location = 'anak.php?m=ubah'</script> <?php
        }else{ 
            ?> <script>window.location = 'anak.php?m=gagal'</script> <?php
        }
    }

    if (isset($_POST['upfile4'])) {
        unlink($_REQUEST['file4Lama']);
        $namafile  = $_FILES['file4']['tmp_name'];
        $namabaru  = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file4']['name']);  
        move_uploaded_file($namafile, '../img/'.$namabaru);
        $query = mysqli_query($kon, "UPDATE anak SET file4 = '$namabaru' WHERE idanak = '$idanak'");
        if($query){
            ?> <script>window.location = 'anak.php?m=ubah'</script> <?php
        }else{ 
            ?> <script>window.location = 'anak.php?m=gagal'</script> <?php
        }
    }
?>