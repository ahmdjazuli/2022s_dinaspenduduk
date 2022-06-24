<?php require('header-admin.php'); require('../koneksi.php'); require('../tgl_indo.php'); error_reporting(0); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pemohon</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Pemohon</li>
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
                <button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="pemohon_input.php" class="text-white"><i class="fas fa-calendar-plus"></i></a></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form name="aku_cek" method="POST">
                <table id="tabelku" class="table table-bordered table-striped table-hover table-sm">
                  <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Gol.Darah</th>
                        <th>TTL</th>
                        <th>Status Perkawinan</th>
                        <th>Pekerjaan</th>
                        <th>Telp</th>
                        <th>Alamat</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM pemohon ORDER BY nama ASC");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?= $data['nama'].' ('.$data['jk'].')' ?></td>           
                          <td><?= $data['nik'] ?></td>           
                          <td><?= $data['darah'] ?></td>           
                          <td><?= $data['ttl1'].$data['ttl2'] ?></td>
                          <td><?= $data['perkawinan'] ?></td>
                          <td><?= $data['pekerjaan'] ?></td>
                          <td><?= $data['telp'] ?></td>
                          <td><?= $data['alamat'].' RT '.$data['rt'].' RW '.$data['rw'].', Kelurahan '.$data['kelurahan'].', Kecamatan '.$data['kemacatan'].', Kota '.$data['kota'] ?></td>
                          <td>
                            <button class="btn btn-dark" type="button"><a href="pemohon_edit.php?idpemohon=<?= $data['idpemohon'] ?>" class="text-white"><i class="fas fa-calendar-minus"></i></a></button>
                            
                            <button class="btn btn-dark" type="button"><a class="text-white" href="delete.php?idpemohon=<?= $data['idpemohon'] ?>"><i class="fas fa-calendar-times"></i></a></button>
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
                        <th>NIK</th>
                        <th>TTL</th>
                        <th>Status Perkawinan</th>
                        <th>Pekerjaan</th>
                        <th>Telp</th>
                        <th>Alamat</th>
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