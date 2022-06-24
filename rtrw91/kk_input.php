<?php require('header-admin.php'); require('../koneksi.php'); error_reporting(0); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-calendar-plus"></i> Pembuatan KK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-calendar-plus"></i> Pembuatan KK</li>
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
                    <?php $namany = mysqli_query($kon, "SELECT * FROM pemohon WHERE idpemohon = '$idpemohon'");
                    $siapa = mysqli_fetch_array($namany); ?>
                    <input type="text" class="form-control" value="<?= $siapa['nama'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>No. KK</label>
                    <input type="text" class="form-control" name="nokk" required>
                  </div>
                  <div class="form-group">
                    <label>*Surat Pengantar RT/RW</label>
                    <input type="file" name="file1" class="form-control" required accept="image/*">
                  </div>
                  <div class="form-group">
                    <label>Fotokopi Buku Nikah (bagi yang sudah menikah)</label>
                    <input type="file" name="file2" class="form-control" accept="image/*">
                  </div>
                  <div class="form-group">
                    <label>Akta Perkawinan (bagi yang sudah menikah)</label>
                    <input type="file" name="file3" class="form-control" accept="image/*">
                  </div>
                  <div class="form-group">
                    <label>Surat Keterangan Pindah Datang (bagi penduduk datang)</label>
                    <input type="file" name="file4" class="form-control" accept="image/*">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                  <button type="button" onclick="window.location='kk.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-dark float-right">
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
    $waktu1       = date('Y-m-d\TH:i');
    $nokk         = $_REQUEST['nokk'];

    $temp1 = $_FILES['file1']['tmp_name'];
    $file1 = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file1']['name']);

    $temp2 = $_FILES['file2']['tmp_name'];
    $file2 = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file2']['name']);

    $temp3 = $_FILES['file3']['tmp_name'];
    $file3 = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file3']['name']);

    $temp4 = $_FILES['file4']['tmp_name'];
    $file4 = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file4']['name']);

    $query = mysqli_query($kon, "INSERT INTO kk (waktu1,idpemohon,file1,file2,file3,file4,status,nokk) VALUES ('$waktu1','$idpemohon','$file1','$file2','$file3','$file4','Menunggu','$nokk')");
      if($query){
        move_uploaded_file($temp1, '../img/'.$file1);
        move_uploaded_file($temp2, '../img/'.$file2);
        move_uploaded_file($temp3, '../img/'.$file3);
        move_uploaded_file($temp4, '../img/'.$file4);
      ?> <script>window.location = 'kk.php?m=simpan'</script> <?php
      }else{ 
      ?> <script>window.location = 'kk.php?m=gagal'</script> <?php
    }
  }
?>