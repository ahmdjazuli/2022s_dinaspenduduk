<?php require('header-admin.php'); require('../koneksi.php'); error_reporting(0); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-calendar-plus"></i> Pembuatan Akta Kelahiran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-calendar-plus"></i> Pembuatan Akta Kelahiran</li>
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
                    <input type="text" class="form-control" value="<?= $skuy['nama'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control" name="tgllahir" required>
                  </div>
                  <div class="form-group">
                    <label>Waktu Lahir</label>
                    <input type="text" class="form-control" name="waktulahir" required>
                  </div>
                 <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempatlahir" required>
                  </div>
                  <div class="form-group">
                    <label>Nama Ibu</label>
                    <input type="text" class="form-control" name="ibu">
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-6 col-sm-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="form-group">
                    <label>Nama Ayah</label>
                    <input type="text" class="form-control" name="ayah">
                  </div>
                  <div class="form-group">
                    <label>Anak Ke</label>
                    <input type="text" class="form-control" name="anakke" placeholder="ex : KEDUA">
                  </div>
                  <div class="form-group">
                    <label>KK Asli</label>
                    <input type="file" name="file1" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Fotokopi KTP Orang Tua</label>
                    <input type="file" name="file2" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Fotokopi Akta Nikah Orang Tua</label>
                    <input type="file" name="file3" class="form-control" required>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                  <button type="button" onclick="window.location='kelahiran.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-dark float-right">
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
    $anakke      = $_REQUEST['anakke'];
    $ayah        = $_REQUEST['ayah'];
    $ibu         = $_REQUEST['ibu'];
    $waktu1      = date('Y-m-d\TH:i');
    $tempatlahir = $_REQUEST['tempatlahir'];
    $tgllahir    = $_REQUEST['tgllahir'];
    $waktulahir  = $_REQUEST['waktulahir'];

    $temp1 = $_FILES['file1']['tmp_name'];
    $file1 = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file1']['name']);

    $temp2 = $_FILES['file2']['tmp_name'];
    $file2 = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file2']['name']);

    $temp3 = $_FILES['file3']['tmp_name'];
    $file3 = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file3']['name']);

      $query = mysqli_query($kon, "INSERT INTO kelahiran (waktu1,ibu,anakke,ayah,file1,file2,file3,status,idpemohon,tempatlahir,tgllahir,waktulahir) VALUES ('$waktu1','$ibu','$anakke','$ayah','$file1','$file2','$file3','Menunggu','$idpemohon','$tempatlahir','$tgllahir','$waktulahir')");
      if($query){
        move_uploaded_file($temp1, '../img/'.$file1);
        move_uploaded_file($temp2, '../img/'.$file2);
        move_uploaded_file($temp3, '../img/'.$file3);
      ?> <script>window.location = 'kelahiran.php?m=simpan'</script> <?php
      }else{ 
      ?> <script>window.location = 'kelahiran.php?m=gagal'</script> <?php
    }
  }
?>