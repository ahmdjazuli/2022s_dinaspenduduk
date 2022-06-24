<?php require('header-admin.php'); require('../koneksi.php'); error_reporting(0);
$idpengajuan = $_GET['idpengajuan'];
  $query = mysqli_query($kon, "SELECT * FROM pengajuan INNER JOIN pemohon WHERE idpengajuan = '$idpengajuan'");
  $data = mysqli_fetch_array($query); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-calendar-minus"></i> Pengajuan KTP Menunggu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-calendar-minus"></i> Pengajuan KTP Menunggu</li>
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
          <div class="col-md-3 col-sm-12">
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
                    <label>Status</label>
                    <select name="status" class="form-control">
                      <option value="<?= $data['status'] ?>"><?= $data['status'] ?></option>
                      <option value="Disetujui">Disetujui</option>
                      <option value="Ditolak">Ditolak</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Catatan</label>
                    <input type="text" name="catatan" class="form-control" value="<?= $data['catatan'] ?>">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                  <button type="button" onclick="window.location='pengajuan1.php';" data-toggle="tooltip" data-placement="bottom" title="Kembali" class="btn btn-dark float-right">
                    <i class="fas fa-calendar-day"></i></button>
                </div>
              </div>
            </div>
          <div class="col-md-3 col-sm-12">
            <div class="card card-widget">
              <div class="card-header">
                <b class="username">Surat Pengantar RT/RW</b>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <img class="img-fluid pad" src="../<?= $data['suratpengantar'] ?>" alt="Photo">
              </div>
              <div class="card-footer">
                <div class="input-group input-group-mb" style="margin-bottom: 10px">
                <div class="input-group-prepend" style="width: 20%">
                    <button type="submit" name="upsuratpengantar" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                </div>
                <div class="input-group-prepend" style="width: 80%">
                    <input type="file" name="suratpengantar" class="form-control">
                    <input type="hidden" name="suratpengantarLama" value="../<?= $data['suratpengantar'] ?>">
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
                <b class="username">Fotokopi KK</b>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <img class="img-fluid pad" src="../<?= $data['fotokopikk'] ?>" alt="Photo">
              </div>
              <div class="card-footer">
                <div class="input-group input-group-mb" style="margin-bottom: 10px">
                <div class="input-group-prepend" style="width: 20%">
                    <button type="submit" name="upfotokopikk" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                </div>
                <div class="input-group-prepend" style="width: 80%">
                    <input type="file" name="fotokopikk" class="form-control">
                    <input type="hidden" name="fotokopikkLama" value="../<?= $data['fotokopikk'] ?>">
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
                <b class="username">Fotokopi Akta Kelahiran</b>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <img class="img-fluid pad" src="../<?= $data['fotokopiakta'] ?>" alt="Photo">
              </div>
              <div class="card-footer">
                <div class="input-group input-group-mb" style="margin-bottom: 10px">
                <div class="input-group-prepend" style="width: 20%">
                    <button type="submit" name="upfotokopiakta" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="Simpan"><i class="fas fa-calendar-check"></i></button>
                </div>
                <div class="input-group-prepend" style="width: 80%">
                    <input type="file" name="fotokopiakta" class="form-control">
                    <input type="hidden" name="fotokopiaktaLama" value="../<?= $data['fotokopiakta'] ?>">
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
  </form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require('footer-admin.php') ?>

<?php 
    require('../koneksi.php');
    if (isset($_POST['upsuratpengantar'])) {
        unlink($_REQUEST['suratpengantarLama']);
        $namafile  = $_FILES['suratpengantar']['tmp_name'];
        $namabaru  = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['suratpengantar']['name']);  
        move_uploaded_file($namafile, '../img/'.$namabaru);
        $query = mysqli_query($kon, "UPDATE pengajuan SET suratpengantar = 'img/$namabaru' WHERE idpengajuan = '$idpengajuan'");
        if($query){
            ?> <script>window.location = 'pengajuan1.php?m=ubah'</script> <?php
        }else{ 
            ?> <script>window.location = 'pengajuan1.php?m=gagal'</script> <?php
        }
    }

    if (isset($_POST['upfotokopikk'])) {
        unlink($_REQUEST['fotokopikkLama']);
        $namafile  = $_FILES['fotokopikk']['tmp_name'];
        $namabaru  = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['fotokopikk']['name']);  
        move_uploaded_file($namafile, '../img/'.$namabaru);
        $query = mysqli_query($kon, "UPDATE pengajuan SET fotokopikk = 'img/$namabaru' WHERE idpengajuan = '$idpengajuan'");
        if($query){
            ?> <script>window.location = 'pengajuan1.php?m=ubah'</script> <?php
        }else{ 
            ?> <script>window.location = 'pengajuan1.php?m=gagal'</script> <?php
        }
    }

    if (isset($_POST['upfotokopiakta'])) {
        unlink($_REQUEST['fotokopiaktaLama']);
        $namafile  = $_FILES['fotokopiakta']['tmp_name'];
        $namabaru  = rand(100,999).preg_replace("/[^a-zA-Z0-9]/", ".", $_FILES['fotokopiakta']['name']);  
        move_uploaded_file($namafile, '../img/'.$namabaru);
        $query = mysqli_query($kon, "UPDATE pengajuan SET fotokopiakta = 'img/$namabaru' WHERE idpengajuan = '$idpengajuan'");
        if($query){
            ?> <script>window.location = 'pengajuan1.php?m=ubah'</script> <?php
        }else{ 
            ?> <script>window.location = 'pengajuan1.php?m=gagal'</script> <?php
        }
    }

    if (isset($_POST['simpan'])) {
    $status       = $_REQUEST['status'];
    $catatan        = $_REQUEST['catatan'];
      $query = mysqli_query($kon, "UPDATE pengajuan SET status = '$status', catatan = '$catatan' WHERE idpengajuan = '$idpengajuan'");
      if($query){
      ?> <script>window.location = 'pengajuan2.php?m=ubah'</script> <?php
      }else{ 
      ?> <script>window.location = 'pengajuan1.php?m=gagal'</script> <?php
    }
  }
?>