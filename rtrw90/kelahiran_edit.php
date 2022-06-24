<?php require('header-admin.php'); require('../koneksi.php'); error_reporting(0); $idkelahiran = $_GET['idkelahiran'];
  $query = mysqli_query($kon, "SELECT * FROM kelahiran INNER JOIN pemohon ON kelahiran.idpemohon = pemohon.idpemohon WHERE idkelahiran = '$idkelahiran'");
  $data = mysqli_fetch_array($query); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-calendar-minus"></i> Pembuatan Akta Kelahiran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-calendar-minus"></i> Pembuatan Akta Kelahiran</li>
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
                    <label>Nomor Akta</label>
                    <input type="text" class="form-control" name="noak" value="1413/TLB/VII-2002.-" required>
                  </div>
                  <div class="form-group">
                    <label>Stbld</label>
                    <input type="text" class="form-control" name="stbld" value="1920 No. 751 jo 1927 No. 564" required>
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                      <option value="<?= $data['status'] ?>"><?= $data['status'] ?></option>
                      <option value="Disetujui">Disetujui</option>
                      <option value="Ditolak">Ditolak</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="text" class="form-control" name="tglacc" value="- Sebelas - Januari - Tahun Duaribu Duapuluh Dua" required>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                  <button type="button" onclick="window.location='kelahiran.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-dark float-right">
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
    $tglacc = $_REQUEST['tglacc'];
    $status = $_REQUEST['status'];
    $stbld  = $_REQUEST['stbld'];
    $noak   = $_REQUEST['noak'];
      $query = mysqli_query($kon, "UPDATE kelahiran SET stbld = '$stbld', noak = '$noak', status = '$status', tglacc = '$tglacc' WHERE idkelahiran = '$idkelahiran'");
      if($query){
      ?> <script>window.location = 'kelahiran.php?m=ubah'</script> <?php
      }else{ 
      ?> <script>window.location = 'kelahiran.php?m=gagal'</script> <?php
    }
  }
?>