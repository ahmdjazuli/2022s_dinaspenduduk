<?php require('header-admin.php'); require('../koneksi.php'); error_reporting(0) ?>
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
                <button class="btn btn-success" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="user_input.php" class="text-white"><i class="far fa-plus-square"></i></a></button>
                <button class="btn btn-warning" type="button" onclick="edit_user()" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-pencil-alt" style="color:white"></i></button>
                <button class="btn btn-danger" type="button" onclick="hapus_user()" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="far fa-trash-alt"></i></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form name="aku_cek" method="POST">
                <table id="tabelku" class="table table-bordered table-striped table-hover table-sm">
                  <thead>
                    <tr class="text-center">
                        <th style="padding-left: 20px" class="hide-out"><input type="checkbox" id="selek"></th>
                        <th>No</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th class="bg-dark">Nama Pemohon</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1; $query = mysqli_query($kon, "SELECT * FROM user WHERE NOT username = 'admin'");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr class="text-center">
                          <td> <input type="checkbox" name="checked[]" class="cek" value="<?= $data['id'] ?>"> </td>
                          <td><?= $no++ ?></td>
                          <td><?= $data['username'] ?></td>
                          <td><?= $data['password'] ?></td>
                          <td class="bg-dark"><?= $data['namapemohon'] ?></td>
                        <?php 
                      }
                    ?>
                  </tbody>
                  <tfoot>
                      <tr class="text-center">
                        <th></th>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Username</th>
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