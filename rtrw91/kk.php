<?php require('header-admin.php'); require('../koneksi.php'); require('../tgl_indo.php'); error_reporting(0);
  $nokk = $_GET['nokk'];
  $detail = mysqli_query($kon, "SELECT * FROM `detail` INNER JOIN kk ON detail.idkk = kk.idkk INNER JOIN pemohon ON detail.idpemohon = pemohon.idpemohon WHERE nokk = '$nokk' ");
 ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pembuatan KK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Pembuatan KK</li>
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
                <button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a href="kk_input.php" class="text-white"><i class="fas fa-calendar-plus"></i></a></button>
              </div>
              <div class="card-body">
                <form name="aku_cek" method="POST">
                <table id="tabelku" class="table table-bordered table-striped table-hover table-sm">
                  <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Waktu (WITA)</th>
                        <th>No KK</th>
                        <th>Nama</th>
                        <th>Surat Pengantar RT/RW</th>
                        <th>Fotokopi Buku Nikah</th>
                        <th>Akta Perkawinan</th>
                        <th>Surat Keterangan Pindah Datang</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM kk INNER JOIN pemohon ON kk.idpemohon = pemohon.idpemohon WHERE nik = '$skuy[nik]' ORDER BY waktu1 DESC");
                      while($data = mysqli_fetch_array($query)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?= date("d/m/Y, g:i", strtotime($data['waktu1'])); ?></td>
                          <td><a href="kk.php?nokk=<?= $data['nokk'] ?>"><?= $data['nokk'] ?></a></td>
                          <td><?= $data['nama'].' ('.$data['jk'].')' ?></td>           
                          <td><a target="_blank" href="../img/<?= $data['file1'] ?>"><img src="../img/<?= $data['file1'] ?>" width='60px'></a></td> 
                          <td><a target="_blank" href="../img/<?= $data['file2'] ?>"><img src="../img/<?= $data['file2'] ?>" width='60px'></a></td>
                          <td><a target="_blank" href="../img/<?= $data['file3'] ?>"><img src="../img/<?= $data['file3'] ?>" width='60px'></a></td> 
                          <td><a target="_blank" href="../img/<?= $data['file4'] ?>"><img src="../img/<?= $data['file4'] ?>" width='60px'></a></td>
                          <td><?= $data['status'] ?></td>
                          <td>
                            <button class="btn btn-dark" type="button" data-toggle="tooltip" data-placement="bottom" title="Tambah"><a class="text-white" href="detail_input.php?idkk=<?= $data['idkk'] ?>"><i class="fas fa-calendar-plus"></i></a></button>
                            <?php if($data['status']=='Disetujui'){ ?>
                              <button class="btn btn-dark" type="button"><a target="_blank" class="text-white" href="../assets/report/rKKsatuan.php?idkk=<?= $data['idkk'] ?>"><i class="fas fa-print"></i></a></button>
                            <?php }else{
                              ?><button class="btn btn-dark" type="button"><a class="text-white" href="kk_edit.php?idkk=<?= $data['idkk'] ?>"><i class="fas fa-calendar-minus"></i></a></button><?php
                              ?><button class="btn btn-dark" type="button"><a class="text-white" href="delete.php?idkk=<?= $data['idkk'] ?>"><i class="fas fa-calendar-times"></i></a></button><?php
                            } ?>
                          </td>
                        <?php 
                      }
                    ?>
                  </tbody>
                  <tfoot>
                      <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>NIK</th>
                        <th>NIK</th>
                        <th>TTL</th>
                        <th>TTL</th>
                        <th>Status Perkawinan</th>
                        <th>Pekerjaan</th>
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
    <?php 
    if(mysqli_num_rows($detail)> 0){ ?>
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 style="display:inline;">Detail</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTables1" class="table table-bordered table-sm">
                  <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Hubungan</th>
                        <th>Kewarganegaraan</th>
                        <th>No. Paspor</th>
                        <th>No. Kitas</th>
                        <th>Orang Tua Ayah</th>
                        <th>Orang Tua Ibu</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      while($data = mysqli_fetch_array($detail)){
                        ?>
                          <tr class="text-center">
                          <td><?= $no++ ?></td>
                          <td><?= $data['nama'] ?></td>           
                          <td><?= $data['pendidikan'] ?></td>          
                          <td><?= $data['hubungan'] ?></td>           
                          <td><?= $data['negara'] ?></td>           
                          <td><?= $data['paspor'] ?></td>           
                          <td><?= $data['kitas'] ?></td>           
                          <td><?= $data['ayah'] ?></td>           
                          <td><?= $data['ibu'] ?></td>           
                        <?php 
                      }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <hr>
            </div> <!-- /.card -->
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </div> <!-- /.container-fluid -->
    </section> <!-- /.content -->
    <?php }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require('footer-admin.php') ?>


    <!-- filter -->
  <div class="modal fade" id="modal-sm">
      <div class="modal-dialog modal-default">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Filter Cetak</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="../assets/report/rJomblo.php" target="_blank" method="post">
            <div class="input-group input-group-mb" style="margin-bottom: 10px">
              <div class="input-group-prepend" style="width: 50%">
                  <span class="input-group-text" style="width: 100%">Bulan</span>
              </div>
              <select name="bulan" class="form-control" required>
                <option value="">Pilih</option>
                <?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT MONTH(waktu1) as bulan FROM `skbm` ORDER BY bulan ASC");
                  while($baris = mysqli_fetch_array($ahay)) {
                  $bulan = $baris['bulan']; 
                    if($bulan == 1){ $namabulan = "Januari";
                      }else if($bulan == 2){ $namabulan = "Februari";
                      }else if($bulan == 3){ $namabulan = "Maret";
                      }else if($bulan == 4){ $namabulan = "April";
                      }else if($bulan == 5){ $namabulan = "Mei";
                      }else if($bulan == 6){ $namabulan = "Juni";
                      }else if($bulan == 7){ $namabulan = "Juli";
                      }else if($bulan == 8){ $namabulan = "Agustus";
                      }else if($bulan == 9){ $namabulan = "September";
                      }else if($bulan == 10){ $namabulan = "Oktober";
                      }else if($bulan == 11){ $namabulan = "November";
                      }else if($bulan == 12){ $namabulan = "Desember";
                      } ?><option value="<?= $baris[bulan] ?>"><?= $namabulan; ?></option> 
                    }
                  <?php } ?>
              </select>
            </div>
              <div class="input-group input-group-mb" style="margin-bottom: 10px">
                  <div class="input-group-prepend" style="width: 50%">
                      <span class="input-group-text" style="width: 100%">Tahun</span>
                  </div>
              <select name="tahun" class="form-control" required>
              <?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(waktu1) as tahun FROM `skbm` ORDER BY tahun ASC");
                  while($baris = mysqli_fetch_array($ahay)) {
                  $tahun = $baris['tahun']; 
                      ?><option value="<?= $baris[tahun] ?>"><?= $tahun; ?></option> 
              <?php } ?>
              </select>
              </div>
            </div>
          <div class="modal-footer justify-content-between">
            <button type="reset" class="btn btn-dark"><i class="fas fa-sync-alt"></i></button>
            <button type="submit" class="btn btn-dark"><i class="fas fa-calendar-alt"></i></button>
          </div>
          </form>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  <!-- masa depan -->