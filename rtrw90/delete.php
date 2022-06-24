<?php
	error_reporting(0);
	require_once("../koneksi.php");
	// pemohon
	if (isset($_GET['idpemohon'])) {
		mysqli_query($kon, "DELETE FROM pemohon WHERE idpemohon='$_REQUEST[idpemohon]'");
		?> <script>window.location='pemohon.php?m=hapus';</script> <?php
	// pengajuan1
	}else if (isset($_GET['idpengajuan']) AND $_GET['no'] == '1') {
		mysqli_query($kon, "DELETE FROM user WHERE idpengajuan='$_REQUEST[idpengajuan]'");
		?> <script>window.location='pengajuan1.php?m=hapus';</script> <?php
	// bobotkriteria
	}else if (isset($_GET['idbotbot'])) {
		mysqli_query($kon, "DELETE FROM bobotkriteria WHERE idbotbot='$_REQUEST[idbotbot]'");
		?> <script>window.location='bobotkriteria_data.php?m=hapus';</script> <?php
	// kegiatan
	}else if (isset($_GET['idkegiatan'])) {
		mysqli_query($kon, "DELETE FROM kegiatan WHERE idkegiatan='$_REQUEST[idkegiatan]'");
		?> <script>window.location='kegiatan_data.php?m=hapus';</script> <?php
	// ranking
	}else if (isset($_GET['idranking'])) {
		mysqli_query($kon, "DELETE FROM ranking WHERE idranking='$_REQUEST[idranking]'");
		?> <script>window.location='ranking.php?m=hapus';</script> <?php
	}
?>