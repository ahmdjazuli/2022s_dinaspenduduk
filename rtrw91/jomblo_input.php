<?php require('header-admin.php'); require('../koneksi.php'); error_reporting(0);
$query = mysqli_query($kon, "SELECT * FROM pemohon WHERE idpemohon = '$idpemohon'");
  $data = mysqli_fetch_array($query); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-calendar-plus"></i> Pembuatan SKBM</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-calendar-plus"></i> Pembuatan SKBM</li>
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
                <form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Nama Pemohon</label>
                    <input type="text" class="form-control" value="<?= $data['nama'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Surat Pengantar RT/RW</label>
                    <input type="file" name="file1" class="form-control" accept="image/*">
                  </div>
                  <div class="form-group">
                    <label>Fotokopi KK(Kartu Keluarga)</label>
                    <input type="file" name="file2" class="form-control" accept="image/*">
                  </div>
                  <div class="form-group">
                    <label>Keperluan</label>
                    <input type="text" class="form-control" name="keperluan">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                  <button type="button" onclick="window.location='jomblo.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-dark float-right">
                    <i class="fas fa-calendar-day"></i></button>
                </div>
              </div>
              </div>
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
    $keperluan   = $_REQUEST['keperluan'];
    $waktu1       = date('Y-m-d\TH:i');

    $temp1 = $_FILES['file1']['tmp_name'];
    $file1 = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file1']['name']);

    $temp2 = $_FILES['file2']['tmp_name'];
    $file2 = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file2']['name']);

    $query = mysqli_query($kon, "INSERT INTO skbm (waktu1,idpemohon,keperluan,file1,file2,status) VALUES ('$waktu1','$idpemohon','$keperluan','$file1','$file2','Menunggu')");
      if($query){
        move_uploaded_file($temp1, '../img/'.$file1);
        move_uploaded_file($temp2, '../img/'.$file2);
      ?> <script>window.location = 'jomblo.php?m=simpan'</script> <?php
      }else{ 
      ?> <script>window.location = 'jomblo.php?m=gagal'</script> <?php
    }
  }
?>