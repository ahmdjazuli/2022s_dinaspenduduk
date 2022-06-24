<?php require('header-admin.php'); require('../koneksi.php'); error_reporting(0); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-calendar-plus"></i> Pemohon</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-calendar-plus"></i> Pemohon</li>
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
                    <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jk">
                      <option value="L">Laki-Laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nik</label>
                    <input type="text" class="form-control" name="nik">
                  </div>
                  <label>TTL</label>
                  <div class="input-group input-group-mb" style="margin-bottom: 10px">
                    <div class="input-group-prepend" style="width: 50%">
                        <input type="text" class="form-control" name="ttl1">
                    </div>
                    <div class="input-group-prepend" style="width: 50%">
                        <input type="date" class="form-control" name="ttl2">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Agama</label>
                    <select class="form-control" name="agama">
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
                          <option value="Belum Kawin">Belum Kawin</option>
                          <option value="Kawin">Kawin</option>
                        </select>
                    </div>
                    <div class="input-group-prepend" style="width: 50%">
                      <input type="text" class="form-control" name="pekerjaan" placeholder="ex : Mahasiswa">
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
                    <input type="text" class="form-control" name="alamat">
                  </div>
                  <label>RT dan RW</label>
                  <div class="input-group input-group-mb" style="margin-bottom: 10px">
                    <div class="input-group-prepend" style="width: 50%">
                        <input type="text" class="form-control" name="rt" placeholder="ex : 01">
                    </div>
                    <div class="input-group-prepend" style="width: 50%">
                        <input type="text" class="form-control" name="rw" placeholder="ex : 03">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kelurahan</label>
                    <input type="text" class="form-control" name="kelurahan">
                  </div>
                  <label>Kecamatan dan Kota</label>
                  <div class="input-group input-group-mb" style="margin-bottom: 10px">
                    <div class="input-group-prepend" style="width: 50%">
                      <input type="text" class="form-control" name="kecamatan" placeholder="ex : Liang Anggang">
                    </div>
                    <div class="input-group-prepend" style="width: 50%">
                      <input type="text" class="form-control" name="kota" placeholder="ex : Banjarbaru">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Telp</label>
                    <input type="text" class="form-control" name="telp">
                  </div>
                  <div class="form-group">
                    <label>Golongan Darah</label>
                    <select class="form-control" name="darah">
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

      $query = mysqli_query($kon, "INSERT INTO pemohon (nama,nik,telp,alamat,jk,rt,rw,kota,kecamatan,kelurahan, pekerjaan, perkawinan, agama, ttl1,ttl2,darah) VALUES ('$nama','$nik','$telp','$alamat','$jk','$rt','$rw','$kota','$kecamatan','$kelurahan','$pekerjaan','$perkawinan','$agama','$ttl1','$ttl2','$darah')");
      if($query){
      ?> <script>window.location = 'pemohon.php?m=simpan'</script> <?php
      }else{ 
      ?> <script>window.location = 'pemohon.php?m=gagal'</script> <?php
    }
  }
?>