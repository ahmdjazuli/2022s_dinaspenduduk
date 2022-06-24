<?php require('header-admin.php'); require('../koneksi.php'); require('../tgl_indo.php'); error_reporting(0); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pembuatan SKPK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Pembuatan SKPK</li>
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
              <div class="card-header">
                <button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="pindah_keluar_input.php" class="text-white"><i class="fas fa-calendar-plus"></i></a></button>
              </div>
              <div class="card-body">
                <form name="aku_cek" method="POST">
                <table id="tabelku" class="table table-bordered table-striped table-hover table-sm">
                  <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Waktu (WITA)</th>
                        <th>Pemohon</th>
                        <th>Alamat Tujuan</th>
                        <th>KK</th>
                        <th>KTP</th>
                        <th>Fotokopi Buku Nikah</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM pindah_keluar INNER JOIN pemohon ON pindah_keluar.idpemohon = pemohon.idpemohon WHERE nik = '$skuy[nik]' ORDER BY waktu1 DESC");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?= date("d/m/Y, g:i", strtotime($data['waktu1'])); ?></td>
                          <td><?= $data['nama'].' ('.$data['jk'].')' ?></td>           
                          <td><?= $data['tujuan']  ?></td>           
                          <td><a target="_blank" href="../img/<?= $data['file1'] ?>"><img src="../img/<?= $data['file1'] ?>" width='60px'></a></td> 
                          <td><a target="_blank" href="../img/<?= $data['file2'] ?>"><img src="../img/<?= $data['file2'] ?>" width='60px'></a></td> 
                          <td><a target="_blank" href="../img/<?= $data['file3'] ?>"><img src="../img/<?= $data['file3'] ?>" width='60px'></a></td> 
                          <td><?= $data['status'] ?></td>
                          <td>
                            <?php if($data['status']=='Disetujui'){ ?>
                              <button class="btn btn-dark" type="button"><a target="_blank" class="text-white" href="../assets/report/pindah_keluar.php?idpindahkeluar=<?= $data['idpindahkeluar'] ?>"><i class="fas fa-print"></i></a></button>
                            <?php }else{
                              ?><button class="btn btn-dark" type="button"><a class="text-white" href="pindah_keluar_edit.php?idpindahkeluar=<?= $data['idpindahkeluar'] ?>"><i class="fas fa-calendar-minus"></i></a></button><?php
                              ?><button class="btn btn-dark" type="button"><a class="text-white" href="delete.php?idpindahkeluar=<?= $data['idpindahkeluar'] ?>"><i class="fas fa-calendar-times"></i></a></button><?php
                            } ?>
                          </td>
                        <?php 
                      }
                    ?>
                  </tbody>
                  <tfoot>
                      <tr class="text-center">
                        <th>No</th>
                        <th>Waktu (WITA)</th>
                        <th>Pemohon</th>
                        <th>Alamat Tujuan</th>
                        <th>KK</th>
                        <th>KTP</th>
                        <th>Fotokopi Buku Nikah</th>
                        <th>Status</th>
                        <th></th>
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