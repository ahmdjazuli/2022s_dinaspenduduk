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
                <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#modal-sm" title="Cetak"><i class="fas fa-calendar-alt"></i></button>
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
                        <th>Surat Keterangan Pindah</th>
                        <th>KK</th>
                        <th>KTP</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      $query = mysqli_query($kon, "SELECT * FROM pindah_keluar INNER JOIN pemohon ON pindah_keluar.idpemohon = pemohon.idpemohon ORDER BY waktu1 DESC");
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
            <form action="../assets/report/rPindahKeluar.php" target="_blank" method="post">
            <div class="input-group input-group-mb" style="margin-bottom: 10px">
              <div class="input-group-prepend" style="width: 50%">
                  <span class="input-group-text" style="width: 100%">Bulan</span>
              </div>
              <select name="bulan" class="form-control" required>
                <option value="">Pilih</option>
                <?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT MONTH(waktu1) as bulan FROM `pindah_keluar` ORDER BY bulan ASC");
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
                  $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(waktu1) as tahun FROM `pindah_keluar` ORDER BY tahun ASC");
                  while($baris = mysqli_fetch_array($ahay)) {
                  $tahun = $baris['tahun']; 
                      ?><option value="<?= $baris[tahun] ?>"><?= $tahun; ?></option> 
              <?php } ?>
              </select>
              </div>
              <div class="input-group input-group-mb" style="margin-bottom: 10px">
                  <div class="input-group-prepend" style="width: 50%">
                      <span class="input-group-text" style="width: 100%">Status</span>
                  </div>
              <select name="status" class="form-control" required>
                <option value="Disetujui">Disetujui</option>
                <option value="Ditolak">Ditolak</option>
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