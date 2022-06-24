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
            <h1 class="m-0 text-dark"><i class="far fa-calendar-plus"></i> Pembuatan SKK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-calendar-plus"></i> Pembuatan SKK</li>
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
                    <input type="hidden" name="nikpemohon" value="<?= $data['idpemohon'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Orang Yang Meninggal</label>
                    <select class="form-control" name="idpemohon">
                      <?php $query = mysqli_query($kon, "SELECT * FROM pemohon WHERE NOT idpemohon ='$idpemohon' ORDER BY nama ASC");
                      while($data = mysqli_fetch_array($query)){ ?>
                        <option value="<?= $data['idpemohon'] ?>"><?= $data['nama'].' - '.$data['nik'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                 <div class="form-group">
                    <label>Hubungan Pemohon dengan Orang yang Meninggal</label>
                    <input type="text" class="form-control" name="hubungan" required>
                  </div>
                  <div class="form-group">
                    <label>Waktu Meninggal</label>
                    <input type="datetime-local" name="waktu1" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Anak Ke-</label>
                    <input type="number" class="form-control" name="anakke" placeholder="contoh : 2">
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-6 col-sm-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="form-group">
                    <label>Tempat Meninggal</label>
                    <input type="text" class="form-control" name="tempat" placeholder="contoh : Rumah Sakit....">
                  </div>
                  <div class="form-group">
                    <label>Penyebab Kematian</label>
                    <input type="text" class="form-control" name="penyebab">
                  </div>
                  <div class="form-group">
                    <label>KTP</label>
                    <input type="file" name="file1" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label>Surat Pengantar RT/RW</label>
                    <input type="file" name="file2" class="form-control" required>
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
    $anakke     = $_REQUEST['anakke'];
    $tempat     = $_REQUEST['tempat'];
    $penyebab   = $_REQUEST['penyebab'];
    $waktu1     = $_REQUEST['waktu1'];
    $idpemohon  = $_REQUEST['idpemohon'];
    $nikpemohon = $_REQUEST['nikpemohon'];
    $hubungan   = $_REQUEST['hubungan'];

    $temp1 = $_FILES['file1']['tmp_name'];
    $file1 = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file1']['name']);

    $temp2 = $_FILES['file2']['tmp_name'];
    $file2 = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['file2']['name']);

      $query = mysqli_query($kon, "INSERT INTO skk (waktu1,idpemohon,anakke,penyebab,tempat,file1,file2,status,nikpemohon,hubungan) VALUES ('$waktu1','$nikpemohon','$anakke','$penyebab','$tempat','$file1','$file2','Menunggu','$idpemohon','$hubungan')");
      if($query){
        move_uploaded_file($temp1, '../img/'.$file1);
        move_uploaded_file($temp2, '../img/'.$file2);
      ?> <script>window.location = 'kematian.php?m=simpan'</script> <?php
      }else{ 
      ?> <script>window.location = 'kematian.php?m=gagal'</script> <?php
    }
  }
?>