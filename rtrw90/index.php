<?php 
  require('header-admin.php');
  require('../koneksi.php');
  error_reporting(0);

  $user      = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM user WHERE NOT username = 'admin'"));
  $barang      = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM barang"));
  $supplier   = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM supplier"));
  $pemohon     = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM pemohon"));
  $survei     = mysqli_num_rows(mysqli_query($kon, "SELECT * FROM survei"));
  $hasilsurvei     = mysqli_num_rows(mysqli_query($kon, "SELECT tglhasil, hasil, namap, lokasi, ket, namapemohon, namasurvei FROM survei INNER JOIN pemohon ON survei.idpemohon = pemohon.idpemohon INNER JOIN user ON user.id = pemohon.id INNER JOIN hasilsurvei ON survei.idsurvei = hasilsurvei.idsurvei INNER JOIN petugas ON survei.idpetugas = petugas.idpetugas"));
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Fungsi Tombol-Tombol yang ada</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Fungsi Tombol-Tombol yang ada</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <table class="table table-bordered table-striped table-hover table-sm">
            <thead>
              <tr class="text-center">
                  <th>No</th>
                  <th>Tombol</th>
                  <th>Fungsi</th>
              </tr>
            </thead>
                <tr class="text-center">
                <td>1</td>
                <td><button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="#" class="text-white"><i class="fas fa-calendar-plus"></i></a></button></td>
                <td>Untuk Menambahkan Data.</td>
              </tr>
              <tr class="text-center">
                <td>2</td>
                <td><button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="#" class="text-white"><i class="fas fa-calendar-check"></i></a></button></td>
                <td>Untuk Menyimpan Data.</td>
              </tr>
              <tr class="text-center">
                <td>3</td>
                <td><button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="#" class="text-white"><i class="fas fa-calendar-minus"></i></a></button></td>
                <td>Untuk Mengubah Data.</td>
              </tr>
              <tr class="text-center">
                <td>4</td>
                <td><button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="#" class="text-white"><i class="fas fa-calendar-times"></i></a></button></td>
                <td>Untuk Menghapus Data.</td>
              </tr>
              <tr class="text-center">
                <td>5</td>
                <td><button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="#" class="text-white"><i class="fas fa-calendar-alt"></i></a></button></td>
                <td>Untuk Mencetak Laporan Data (Bulan & Tahun).</td>
              </tr>
              <tr class="text-center">
                <td>6</td>
                <td><button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="#" class="text-white"><i class="fas fa-print"></i></a></button></td>
                <td>Untuk Mencetak Surat Keterangan (Tiap Pemohon).</td>
              </tr>
              <tr class="text-center">
                <td>7</td>
                <td><button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="#" class="text-white"><i class="fas fa-sync-alt"></i></a></button></td>
                <td>Untuk Reset Data.</td>
              </tr>
              <tr class="text-center">
                <td>8</td>
                <td><button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="#" class="text-white"><i class="fas fa-eye"></i></a></button></td>
                <td>Untuk Menyembunyikan/Menampilkan Kolom pada Tabel Data.</td>
              </tr>
              <tr class="text-center">
                <td>9</td>
                <td><button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="#" class="text-white"><i class="fas fa-calendar-day"></i></a></button></td>
                <td>Untuk Kembali.</td>
              </tr>
          </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require('footer-admin.php') ?>