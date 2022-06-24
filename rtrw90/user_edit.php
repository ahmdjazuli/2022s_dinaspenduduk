<?php 
  require('header-admin.php'); require('../koneksi.php'); error_reporting(0);
  $chk = $_POST['checked'];
  if(!isset($chk)){
    if(isset($_POST['edit'])){
          for($i=0; $i<count($_POST['id']); $i++){
              $id = $_POST['id'][$i];
              $username   = $_POST['username'][$i];
              $password     = $_POST['password'][$i];
              $namapemohon     = $_POST['namapemohon'][$i];
              $edit = mysqli_query($kon, "UPDATE user SET username = '$username', password = '$password', namapemohon = '$namapemohon' WHERE id = '$id'");
                if($edit){
                    echo "<script>window.location='user.php?m=ubah';  </script>";
                }else{
                    echo "<script>window.location='user.php?m=gagal';</script>";
                }
          }
      }
      else{ 
        ?> <script>window.location='user.php?m=mana';</script> <?php 
      }
  }else{
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
          <!-- /.card-header -->
          <div class="card-body">
            <form action="" method="POST">
            <table id="tabelku" class="table table-bordered table-striped table-hover table-sm">
              <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama Pemohon</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no =1;
                  foreach($chk as $id){
                    $sql = mysqli_query($kon, "SELECT * FROM user WHERE id = '$id'");
                    while($data = mysqli_fetch_array($sql)){?>
                    <tr class="text-center">
                      <td><?= $no++ ?></td>
                      <td>
                        <input type="hidden" name="id[]" value="<?= $data['id'] ?>" >
                        <input type="text" name="username[]" class="form-control" value="<?= $data['username'] ?>">
                      </td>
                      <td>
                        <input type="text" name="password[]" class="form-control" value="<?= $data['password'] ?>">
                      </td>
                      <td>
                        <input type="text" name="namapemohon[]" class="form-control" value="<?= $data['namapemohon'] ?>">
                      </td>
                    </tr>
                <?php     } 
                    }
                  }
                ?>
              </tbody>
            </table>
            <div class="form-group" style="text-align: center; margin-top: 10px;">
              <button type="submit" name="edit" class="btn btn-primary"><i class="fas fa-save"></i> SIMPAN SEMUA</button>
            </div>
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
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

<?php
  require("footer-admin.php"); 
?> 