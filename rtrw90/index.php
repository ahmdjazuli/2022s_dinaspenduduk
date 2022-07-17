<?php 
  require('header-admin.php'); require('config.php'); require('../koneksi.php'); error_reporting(0);
?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Rekapan Data</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content"> <div class="container-fluid"> <div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12"><?php ive('rPengajuan','Pengajuan KTP') ?>
      <div class="card-body">
          <div class="form-group"><label>Bulan</label>
              <select name="bulan" class="form-control" required>
                <option value="">Pilih</option>
                <?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT MONTH(waktu1) as bulan FROM `pengajuan` ORDER BY bulan ASC");
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
          <div class="form-group"><label>Tahun</label>
              <select name="tahun" class="form-control" required><?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(waktu1) as tahun FROM `pengajuan` ORDER BY tahun ASC");
                  while($baris = mysqli_fetch_array($ahay)) {
                  $tahun = $baris['tahun']; 
                      ?><option value="<?= $baris[tahun] ?>"><?= $tahun; ?></option> 
              <?php } ?>
              </select>
          </div>
         <div class="form-group"><label>Status</label>
            <select name="status" class="form-control" required>
              <option value="Disetujui">Disetujui</option>
              <option value="Ditolak">Ditolak</option>
            </select>
         </div>
  </div><?php apink(); ?> </div></div>
  <div class="col-lg-4 col-md-4 col-sm-12"><?php ive('rKematian','SKK') ?>
      <div class="card-body">
          <div class="form-group"><label>Bulan</label>
              <select name="bulan" class="form-control" required>
                <option value="">Pilih</option>
                <?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT MONTH(waktu1) as bulan FROM `skk` ORDER BY bulan ASC");
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
          <div class="form-group"><label>Tahun</label>
              <select name="tahun" class="form-control" required><?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(waktu1) as tahun FROM `skk` ORDER BY tahun ASC");
                  while($baris = mysqli_fetch_array($ahay)) {
                  $tahun = $baris['tahun']; 
                      ?><option value="<?= $baris[tahun] ?>"><?= $tahun; ?></option> 
              <?php } ?>
              </select>
          </div>
         <div class="form-group"><label>Status</label>
            <select name="status" class="form-control" required>
              <option value="Disetujui">Disetujui</option>
              <option value="Ditolak">Ditolak</option>
            </select>
         </div>
  </div><?php apink(); ?> </div></div>
  <div class="col-lg-4 col-md-4 col-sm-12"><?php ive('rJomblo','SKBM') ?>
      <div class="card-body">
          <div class="form-group"><label>Bulan</label>
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
          <div class="form-group"><label>Tahun</label>
              <select name="tahun" class="form-control" required><?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(waktu1) as tahun FROM `skbm` ORDER BY tahun ASC");
                  while($baris = mysqli_fetch_array($ahay)) {
                  $tahun = $baris['tahun']; 
                      ?><option value="<?= $baris[tahun] ?>"><?= $tahun; ?></option> 
              <?php } ?>
              </select>
          </div>
         <div class="form-group"><label>Status</label>
            <select name="status" class="form-control" required>
              <option value="Disetujui">Disetujui</option>
              <option value="Ditolak">Ditolak</option>
            </select>
         </div>
  </div><?php apink(); ?> </div></div>
  <div class="col-lg-4 col-md-4 col-sm-12"><?php ive('rKK','KK') ?>
      <div class="card-body">
          <div class="form-group"><label>Bulan</label>
              <select name="bulan" class="form-control" required>
                <option value="">Pilih</option>
                <?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT MONTH(waktu1) as bulan FROM `kk` ORDER BY bulan ASC");
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
          <div class="form-group"><label>Tahun</label>
              <select name="tahun" class="form-control" required><?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(waktu1) as tahun FROM `kk` ORDER BY tahun ASC");
                  while($baris = mysqli_fetch_array($ahay)) {
                  $tahun = $baris['tahun']; 
                      ?><option value="<?= $baris[tahun] ?>"><?= $tahun; ?></option> 
              <?php } ?>
              </select>
          </div>
         <div class="form-group"><label>Status</label>
            <select name="status" class="form-control" required>
              <option value="Disetujui">Disetujui</option>
              <option value="Ditolak">Ditolak</option>
            </select>
         </div>
  </div><?php apink(); ?> </div></div>
  <div class="col-lg-4 col-md-4 col-sm-12"><?php ive('rKelahiran','Akta Kelahiran') ?>
      <div class="card-body">
          <div class="form-group"><label>Bulan</label>
              <select name="bulan" class="form-control" required>
                <option value="">Pilih</option>
                <?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT MONTH(waktu1) as bulan FROM `kelahiran` ORDER BY bulan ASC");
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
          <div class="form-group"><label>Tahun</label>
              <select name="tahun" class="form-control" required><?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(waktu1) as tahun FROM `kelahiran` ORDER BY tahun ASC");
                  while($baris = mysqli_fetch_array($ahay)) {
                  $tahun = $baris['tahun']; 
                      ?><option value="<?= $baris[tahun] ?>"><?= $tahun; ?></option> 
              <?php } ?>
              </select>
          </div>
         <div class="form-group"><label>Status</label>
            <select name="status" class="form-control" required>
              <option value="Disetujui">Disetujui</option>
              <option value="Ditolak">Ditolak</option>
            </select>
         </div>
  </div><?php apink(); ?> </div></div>
  <div class="col-lg-4 col-md-4 col-sm-12"><?php ive('rAktaAnak','Akta Pengangkatan Anak') ?>
      <div class="card-body">
          <div class="form-group"><label>Bulan</label>
              <select name="bulan" class="form-control" required>
                <option value="">Pilih</option>
                <?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT MONTH(waktu1) as bulan FROM `anak` ORDER BY bulan ASC");
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
          <div class="form-group"><label>Tahun</label>
              <select name="tahun" class="form-control" required><?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(waktu1) as tahun FROM `anak` ORDER BY tahun ASC");
                  while($baris = mysqli_fetch_array($ahay)) {
                  $tahun = $baris['tahun']; 
                      ?><option value="<?= $baris[tahun] ?>"><?= $tahun; ?></option> 
              <?php } ?>
              </select>
          </div>
         <div class="form-group"><label>Status</label>
            <select name="status" class="form-control" required>
              <option value="Disetujui">Disetujui</option>
              <option value="Ditolak">Ditolak</option>
            </select>
         </div>
  </div><?php apink(); ?> </div></div>
  <div class="col-lg-4 col-md-4 col-sm-12"><?php ive('rPindahDatang','SKPD') ?>
      <div class="card-body">
          <div class="form-group"><label>Bulan</label>
              <select name="bulan" class="form-control" required>
                <option value="">Pilih</option>
                <?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT MONTH(waktu1) as bulan FROM `pindah_datang` ORDER BY bulan ASC");
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
          <div class="form-group"><label>Tahun</label>
              <select name="tahun" class="form-control" required><?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(waktu1) as tahun FROM `pindah_datang` ORDER BY tahun ASC");
                  while($baris = mysqli_fetch_array($ahay)) {
                  $tahun = $baris['tahun']; 
                      ?><option value="<?= $baris[tahun] ?>"><?= $tahun; ?></option> 
              <?php } ?>
              </select>
          </div>
         <div class="form-group"><label>Status</label>
            <select name="status" class="form-control" required>
              <option value="Disetujui">Disetujui</option>
              <option value="Ditolak">Ditolak</option>
            </select>
         </div>
  </div><?php apink(); ?> </div></div>
  <div class="col-lg-4 col-md-4 col-sm-12"><?php ive('rPindahKeluar','SKPK') ?>
      <div class="card-body">
          <div class="form-group"><label>Bulan</label>
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
          <div class="form-group"><label>Tahun</label>
              <select name="tahun" class="form-control" required><?php
                  $ahay = mysqli_query($kon, "SELECT DISTINCT YEAR(waktu1) as tahun FROM `pindah_keluar` ORDER BY tahun ASC");
                  while($baris = mysqli_fetch_array($ahay)) {
                  $tahun = $baris['tahun']; 
                      ?><option value="<?= $baris[tahun] ?>"><?= $tahun; ?></option> 
              <?php } ?>
              </select>
          </div>
         <div class="form-group"><label>Status</label>
            <select name="status" class="form-control" required>
              <option value="Disetujui">Disetujui</option>
              <option value="Ditolak">Ditolak</option>
            </select>
         </div>
  </div><?php apink(); ?> </div></div>
  </section>
</div>
  <?php require('footer-admin.php') ?>