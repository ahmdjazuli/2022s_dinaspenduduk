<?php require('header-admin.php'); require('../koneksi.php'); error_reporting(0);
$idskk = $_GET['idskk'];
  $query = mysqli_query($kon, "SELECT * FROM skk INNER JOIN pemohon ON skk.idpemohon = pemohon.idpemohon WHERE idskk = '$idskk'");
  $data = mysqli_fetch_array($query); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-calendar-minus"></i> Pembuatan SKK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-calendar-minus"></i> Pembuatan SKK</li>
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
                    <label>Nama</label>
                    <input type="text" class="form-control" value="<?= $data['nama'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nik</label>
                    <input type="text" class="form-control" value="<?= $data['nik'] ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label>Anak ke</label>
                    <input type="text" name="anakke" class="form-control" value="<?= $data['anakke'] ?>" required>
                  </div>
                </div>
              </div>
            </div>
          <div class="col-md-4 col-sm-12">
             <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                  <div class="form-group">
                    <label>Tempat</label>
                    <input type="text" name="tempat" class="form-control" value="<?= $data['tempat'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Penyebab</label>
                    <input type="text" name="penyebab" class="form-control" value="<?= $data['penyebab'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                      <option value="<?= $data['status'] ?>"><?= $data['status'] ?></option>
                      <option value="Disetujui">Disetujui</option>
                      <option value="Ditolak">Ditolak</option>
                    </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                  <button type="button" onclick="window.location='kematian.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-dark float-right">
                    <i class="fas fa-calendar-day"></i></button>
                </div>
              </div>
          </div> <!-- /.col -->
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
    $penyebab       = $_REQUEST['penyebab'];
    $anakke        = $_REQUEST['anakke'];
    $tempat        = $_REQUEST['tempat'];
    $status       = $_REQUEST['status'];
      $query = mysqli_query($kon, "UPDATE skk SET penyebab = '$penyebab', anakke = '$anakke', tempat = '$tempat', status = '$status' WHERE idskk = '$idskk'");
      if($query){
      ?> <script>window.location = 'kematian.php?m=ubah'</script> <?php
      }else{ 
      ?> <script>window.location = 'kematian.php?m=gagal'</script> <?php
    }
  }
?>