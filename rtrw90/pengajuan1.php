<?php require('header-admin.php'); require('../koneksi.php'); require('../tgl_indo.php'); error_reporting(0); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pengajuan KTP Menunggu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Pengajuan KTP Menunggu</li>
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
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <form name="aku_cek" method="POST">
                <table id="tabelku" class="table table-bordered table-striped table-hover table-sm">
                  <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Waktu (WITA)</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Surat Pengantar RT/RW</th>
                        <th>Fotokopi KK</th>
                        <th>Fotokopi Akta Kelahiran</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM pengajuan INNER JOIN pemohon ON pengajuan.idpemohon = pemohon.idpemohon WHERE status ='Menunggu' ORDER BY waktu1 DESC");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?= date("d/m/Y, g:i", strtotime($data['waktu1'])); ?></td>
                          <td><?= $data['nama'].' ('.$data['jk'].')' ?></td>           
                          <td><?= $data['nik'] ?></td>       
                          <td><a target="_blank" href="../<?= $data['suratpengantar'] ?>"><img src="../<?= $data['suratpengantar'] ?>" width='60px'></a></td>
                          <td><a target="_blank" href="../<?= $data['fotokopikk'] ?>"><img src="../<?= $data['fotokopikk'] ?>" width='60px'></a></td>
                          <td><a target="_blank" href="../<?= $data['fotokopiakta'] ?>"><img src="../<?= $data['fotokopiakta'] ?>" width='60px'></a></td>
                          <td>
                            <button class="btn btn-dark" type="button"><a class="text-white" href="pengajuan1_edit.php?idpengajuan=<?= $data['idpengajuan'] ?>"><i class="fas fa-calendar-minus"></i></a></button>
                          </td>
                        <?php 
                      }
                    ?>
                  </tbody>
                  <tfoot>
                      <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>TTL</th>
                        <th>Status Perkawinan</th>
                        <th>Pekerjaan</th>
                        <th>Telp</th>
                        <th>Alamat</th>
                      </tr>
                  </tfoot>
                </table>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require('footer-admin.php') ?>