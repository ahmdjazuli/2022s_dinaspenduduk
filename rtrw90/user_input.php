<?php require('header-admin.php'); require('../koneksi.php'); error_reporting(0); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="far fa-plus-square"></i> Pemohon</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><i class="far fa-plus-square"></i> Pemohon</li>
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
          <div class="col-6">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" action="" method="POST">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama Pemohon</label>
                    <input type="text" name="namapemohon" class="form-control">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="simpan" class="btn btn-info">Simpan</button>
                  <button type="button" class="btn btn-default float-right"><a href="user.php">Cancel</a></button>
                </div>
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

<?php 
  require('../koneksi.php');
  if (isset($_POST['simpan'])) {
    $username     = $_REQUEST['username'];
    $password     = $_REQUEST['password'];
    $namapemohon  = $_REQUEST['namapemohon'];

    $tambah = mysqli_query($kon,"INSERT INTO user(username ,password, namapemohon) 
                                 VALUES('$username','$password','$namapemohon')");
    if($tambah){
      ?> <script>window.location='user.php?m=simpan';</script> <?php
    }else{
      ?> <script>window.location='user.php?m=gagal';</script> <?php
    }
  }
 ?>