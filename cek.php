<?php 
session_start();
require "koneksi.php";
error_reporting(0);

	$nik 	= $_REQUEST['nik'];
	$pass	= $_REQUEST['pass'];

	$query = mysqli_query($kon, "SELECT * FROM user WHERE username='$nik' AND password='$pass'");
	$cek = mysqli_fetch_array($query);
	$pemohon = mysqli_query($kon, "SELECT * FROM pemohon WHERE nik='$nik' AND telp = '$pass'");
	$yasin  = mysqli_fetch_array($pemohon);
	if(isset($_POST['masuk'])){
		if($cek['level'] == 'admin'){
			$_SESSION['username'] = $nik;
			$_SESSION['id'] = $cek['id'];
			?> <script>window.location='rtrw90/index.php'</script> <?php
		}else if(mysqli_num_rows($pemohon) > 0){
			$_SESSION['nik'] = $nik;
			$_SESSION['idpemohon'] = $yasin['idpemohon'];
			?> <script>window.location='rtrw91/index.php'</script> <?php
		}else{
			?><script>alert('Gagal Login');window.location="index.php#daftar"; </script><?php
		}
	}	
?>