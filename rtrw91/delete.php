<?php
	error_reporting(0);
	require_once("../koneksi.php");
	// kk
	if (isset($_GET['idkk'])) {
		$query = mysqli_query($kon, "SELECT * FROM kk WHERE idkk='$_REQUEST[idkk]'");
		$data = mysqli_fetch_array($query);
		unlink('../img/'.$data['file1']); unlink('../img/'.$data['file2']);
		unlink('../img/'.$data['file3']); unlink('../img/'.$data['file4']);
		mysqli_query($kon, "DELETE FROM kk WHERE idkk='$_REQUEST[idkk]'");
		?> <script>window.location='kk.php?m=hapus';</script> <?php
	// pengajuan1
	}else if (isset($_GET['idpengajuan']) AND $_GET['no'] == '1') {
		mysqli_query($kon, "DELETE FROM user WHERE idpengajuan='$_REQUEST[idpengajuan]'");
		?> <script>window.location='pengajuan1.php?m=hapus';</script> <?php
	// skbm
	}else if (isset($_GET['idskbm'])) {
		$query = mysqli_query($kon, "SELECT * FROM skbm WHERE idskbm='$_REQUEST[idskbm]'");
		$data = mysqli_fetch_array($query);
		unlink('../img/'.$data['file1']); unlink('../img/'.$data['file2']);
		mysqli_query($kon, "DELETE FROM skbm WHERE idskbm='$_REQUEST[idskbm]'");
		?> <script>window.location='jomblo.php?m=hapus';</script> <?php
	// kelahiran
	}else if (isset($_GET['idkelahiran'])) {
		$query = mysqli_query($kon, "SELECT * FROM kelahiran WHERE idkelahiran='$_REQUEST[idkelahiran]'");
		$data = mysqli_fetch_array($query);
		unlink('../img/'.$data['file1']); unlink('../img/'.$data['file2']);unlink('../img/'.$data['file3']);
		mysqli_query($kon, "DELETE FROM kelahiran WHERE idkelahiran='$_REQUEST[idkelahiran]'");
		?> <script>window.location='kelahiran.php?m=hapus';</script> <?php
	// skk
	}else if (isset($_GET['idskk'])) {
		$query = mysqli_query($kon, "SELECT * FROM skk WHERE idskk='$_REQUEST[idskk]'");
		$data = mysqli_fetch_array($query);
		unlink('../img/'.$data['file1']); unlink('../img/'.$data['file2']);
		mysqli_query($kon, "DELETE FROM skk WHERE idskk='$_REQUEST[idskk]'");
		?> <script>window.location='kematian.php?m=hapus';</script> <?php
	// anak
	}else if (isset($_GET['idanak'])) {
		$query = mysqli_query($kon, "SELECT * FROM anak WHERE idanak='$_REQUEST[idanak]'");
		$data = mysqli_fetch_array($query);
		unlink('../img/'.$data['file1']); unlink('../img/'.$data['file2']);unlink('../img/'.$data['file3']);unlink('../img/'.$data['file4']);
		mysqli_query($kon, "DELETE FROM anak WHERE idanak='$_REQUEST[idanak]'");
		?> <script>window.location='anak.php?m=hapus';</script> <?php
	// pindah_datang
	}else if (isset($_GET['idpindahdatang'])) {
		$query = mysqli_query($kon, "SELECT * FROM pindah_datang WHERE idpindahdatang='$_REQUEST[idpindahdatang]'");
		$data = mysqli_fetch_array($query);
		unlink('../img/'.$data['file1']); unlink('../img/'.$data['file2']);unlink('../img/'.$data['file3']);unlink('../img/'.$data['file4']);
		mysqli_query($kon, "DELETE FROM pindah_datang WHERE idpindahdatang='$_REQUEST[idpindahdatang]'");
		?> <script>window.location='pindah_datang.php?m=hapus';</script> <?php
	// pindah_keluar
	}else if (isset($_GET['idpindahkeluar'])) {
		$query = mysqli_query($kon, "SELECT * FROM pindah_keluar WHERE idpindahkeluar='$_REQUEST[idpindahkeluar]'");
		$data = mysqli_fetch_array($query);
		unlink('../img/'.$data['file1']); unlink('../img/'.$data['file2']);unlink('../img/'.$data['file3']);
		mysqli_query($kon, "DELETE FROM pindah_keluar WHERE idpindahkeluar='$_REQUEST[idpindahkeluar]'");
		?> <script>window.location='pindah_keluar.php?m=hapus';</script> <?php
	}
?>