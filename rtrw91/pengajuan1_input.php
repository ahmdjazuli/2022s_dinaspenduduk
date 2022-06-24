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
            <h1 class="m-0 text-dark"><i class="far fa-calendar-minus"></i> Pengajuan KTP</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-calendar-minus"></i> Pengajuan KTP</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                    <label>NIK</label>
                    <input type="text" class="form-control" value="<?= $data['nik'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nama Pemohon</label>
                    <input type="text" class="form-control" value="<?= $data['nama'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Surat Pengantar RT/RW</label>
                    <input type="file" name="suratpengantar" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Fotokopi KK</label>
                    <input type="file" name="fotokopikk" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Fotokopi Akta Kelahiran</label>
                    <input type="file" name="fotokopiakta" class="form-control">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                  <button type="button" onclick="window.location='pengajuan1.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-dark float-right">
                    <i class="fas fa-calendar-day"></i></button>
                </div>
              </div>
            </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require('footer-admin.php') ?>

<?php 
    require('../koneksi.php');

    if (isset($_POST['simpan'])) {
    $status       = $_REQUEST['status'];
    $waktu1       = date('Y-m-d\TH:i');

    $temp1          = $_FILES['suratpengantar']['tmp_name'];
    $suratpengantar = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['suratpengantar']['name']);
    move_uploaded_file($temp1, '../img/'.$suratpengantar);

    $temp2          = $_FILES['fotokopikk']['tmp_name'];
    $fotokopikk     = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['fotokopikk']['name']);  
    move_uploaded_file($temp2, '../img/'.$fotokopikk);

    $temp3          = $_FILES['fotokopiakta']['tmp_name'];
    $fotokopiakta   = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['fotokopiakta']['name']);  
    move_uploaded_file($temp3, '../img/'.$fotokopiakta);

      $query = mysqli_query($kon, "INSERT INTO pengajuan (idpemohon,status,waktu1,suratpengantar,fotokopikk,fotokopiakta) VALUES ('$idpemohon','Menunggu','$waktu1','img/$suratpengantar','img/$fotokopikk','img/$fotokopiakta')");
      if($query){
      ?> <script>window.location = 'pengajuan1.php?m=simpan'</script> <?php
      }else{ 
      ?> <script>window.location = 'pengajuan1.php?m=gagal'</script> <?php
    }
  }
?>