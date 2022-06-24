<?php require('header-admin.php'); require('../koneksi.php'); error_reporting(0);
$idpemohon = $_GET['idpemohon'];
  $query = mysqli_query($kon, "SELECT * FROM pemohon WHERE idpemohon = '$idpemohon'");
  $data = mysqli_fetch_array($query); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-calendar-minus"></i> Pemohon</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-calendar-minus"></i> Pemohon</li>
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
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jk">
                      <?php if($data['jk']=='P'){
                        ?><option value="P">Perempuan</option><?php
                      }else{
                        ?><option value="L">Laki-Laki</option><?php
                      } ?>
                      <option value="L">Laki-Laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nik</label>
                    <input type="text" class="form-control" name="nik" value="<?= $data['nik'] ?>">
                  </div>
                  <label>TTL</label>
                  <div class="input-group input-group-mb" style="margin-bottom: 10px">
                    <div class="input-group-prepend" style="width: 50%">
                        <input type="text" class="form-control" name="ttl1" value="<?= $data['ttl1'] ?>">
                    </div>
                    <div class="input-group-prepend" style="width: 50%">
                        <input type="date" class="form-control" name="ttl2" value="<?= $data['ttl2'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Agama</label>
                    <select class="form-control" name="agama">
                      <option value="<?= $data['agama'] ?>"><?= $data['agama'] ?></option>
                      <option value="Islam">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Katolik">Katolik</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Budha">Budha</option>
                      <option value="Kong Hu Chu">Kong Hu Chu</option>
                    </select>
                  </div>
                  <label>Status Perkawinan dan Pekerjaan</label>
                  <div class="input-group input-group-mb" style="margin-bottom: 10px">
                    <div class="input-group-prepend" style="width: 50%">
                      <select class="form-control" name="perkawinan">
                        <option value="<?= $data['perkawinan'] ?>"><?= $data['perkawinan'] ?></option>
                        <option value="Belum Kawin">Belum Kawin</option>
                        <option value="Kawin">Kawin</option>
                      </select>
                    </div>
                    <div class="input-group-prepend" style="width: 50%">
                      <input type="text" class="form-control" name="pekerjaan" value="<?= $data['pekerjaan'] ?>">
                    </div>
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
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>">
                  </div>
                  <label>RT dan RW</label>
                  <div class="input-group input-group-mb" style="margin-bottom: 10px">
                    <div class="input-group-prepend" style="width: 50%">
                        <input type="text" class="form-control" name="rt" value="<?= $data['rt'] ?>">
                    </div>
                    <div class="input-group-prepend" style="width: 50%">
                        <input type="text" class="form-control" name="rw" value="<?= $data['rw'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kelurahan</label>
                    <input type="text" class="form-control" name="kelurahan" value="<?= $data['kelurahan'] ?>">
                  </div>
                  <label>Kecamatan dan Kota</label>
                  <div class="input-group input-group-mb" style="margin-bottom: 10px">
                    <div class="input-group-prepend" style="width: 50%">
                      <input type="text" class="form-control" name="kecamatan" value="<?= $data['kecamatan'] ?>">
                    </div>
                    <div class="input-group-prepend" style="width: 50%">
                      <input type="text" class="form-control" name="kota" value="<?= $data['kota'] ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Telp</label>
                    <input type="text" class="form-control" name="telp" value="<?= $data['telp'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Golongan Darah</label>
                    <select class="form-control" name="darah">
                      <option value="<?= $data['darah'] ?>"><?= $data['darah'] ?></option>
                      <option value="-">-</option>
                      <option value="A">A</option>
                      <option value="AB">AB</option>
                      <option value="O">O</option>
                    </select>
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
    $nama       = $_REQUEST['nama'];
    $nik        = $_REQUEST['nik'];
    $telp       = $_REQUEST['telp'];
    $jk         = $_REQUEST['jk'];
    $alamat     = $_REQUEST['alamat'];
    $ttl1       = $_REQUEST['ttl1'].', ';
    $ttl2       = $_REQUEST['ttl2'];
    $agama      = $_REQUEST['agama'];
    $perkawinan = $_REQUEST['perkawinan'];
    $pekerjaan  = $_REQUEST['pekerjaan'];
    $kelurahan  = $_REQUEST['kelurahan'];
    $kecamatan  = $_REQUEST['kecamatan'];
    $kota       = $_REQUEST['kota'];
    $rt         = $_REQUEST['rt'];
    $rw         = $_REQUEST['rw'];
    $darah      = $_REQUEST['darah'];

      $query = mysqli_query($kon, "UPDATE pemohon SET nama = '$nama', nik = '$nik', telp = '$telp', jk = '$jk', alamat = '$alamat', ttl1 = '$ttl1', ttl2 = '$ttl2', agama = '$agama', perkawinan = '$perkawinan', pekerjaan = '$pekerjaan', kelurahan = '$kelurahan', kecamatan = '$kecamatan', kota = '$kota', rt = '$rt', rw = '$rw', darah = '$darah' WHERE idpemohon = '$idpemohon'");
      if($query){
      ?> <script>window.location = 'pemohon.php?m=ubah'</script> <?php
      }else{ 
      ?> <script>window.location = 'pemohon.php?m=gagal'</script> <?php
    }
  }
?>