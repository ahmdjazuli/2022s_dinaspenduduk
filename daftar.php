<?php 
	require('koneksi.php');

	if(isset($_POST['daftar'])){
		$username 		= $_REQUEST['username'];
		$namaLengkap 	= $_REQUEST['namaLengkap'];
		$namaMember 	= $_REQUEST['namaMember'];
		$alamat 		= $_REQUEST['alamat'];
		$telp 			= $_REQUEST['telp'];
		$email 			= $_REQUEST['email'];
		$password 		= password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
		// $token=hash('sha256', md5(date('Y-m-d')));

		$namafile		= $_FILES['fotoProfil']['tmp_name'];
		$lokasi			= "img/".$_FILES['fotoProfil']['name'];
		$namafoto		= $_FILES['fotoProfil']['name'];
		$cekformat		= array('png','jpg','jpeg');
		$x 				= explode('.', $namafoto);
		$ekstensi 		= strtolower(end($x));

		$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
		$datany = mysqli_num_rows($cek);

		if(mysqli_num_rows($cek)==0){
			if(in_array($ekstensi, $cekformat) === true){
				$namabaru = preg_replace("/[^a-zA-Z0-9]/", "-", $username);

				if(in_array($ekstensi, array('jpg','jpeg'))){
					move_uploaded_file($namafile, 'img/'.$namabaru.'.jpg');
					$simpan = 'img/'.$namabaru.'.jpg';
					
				}else if(in_array($ekstensi, array('png'))){
					move_uploaded_file($namafile, 'img/'.$namabaru.'.png');
					$simpan = 'img/'.$namabaru.'.png';
				}

				list($lebar, $tinggi) = getimagesize($simpan);
				$warna_baru = imagecreatetruecolor(512, 512);

				if(in_array($ekstensi, array('jpg','jpeg'))){
					$file_baru = imagecreatefromjpeg($simpan);
					
				}else if(in_array($ekstensi, array('png'))){
					$file_baru = imagecreatefrompng($simpan);
				}
				
				imagecopyresampled($warna_baru, $file_baru, 0, 0, 0, 0, 512, 512, $lebar, $tinggi);

				if(in_array($ekstensi, array('jpg','jpeg'))){
					imagejpeg($warna_baru, $simpan, 75);
					
				}else if(in_array($ekstensi, array('png'))){
					imagepng($warna_baru, $simpan, 5);
				}

				if($namaMember == ''){
					$hasil = mysqli_query($koneksi,"INSERT INTO user (username,password,namaLengkap, alamat,telp,email,fotoProfil,level) VALUES ('$username','$password','$namaLengkap', '$alamat','$telp','$email','$simpan','regular')");
					$notif = mysqli_query($koneksi, "INSERT INTO notif (level,lihat,dates) VALUES ('member','unread',CURRENT_TIME)");
					?> <script>window.location = 'index.php?m=simpan#tentang';</script><?php
				}else{
					$hasil = mysqli_query($koneksi,"INSERT INTO user (username,password,namaLengkap, namaMember, alamat,telp,email,fotoProfil,level) VALUES ('$username','$password','$namaLengkap', '$namaMember', '$alamat','$telp','$email','$simpan','member')");
					$notif = mysqli_query($koneksi, "INSERT INTO notif (level,lihat,dates) VALUES ('regular','unread',CURRENT_TIME)");
					?> <script>window.location = 'index.php?m=simpan#tentang';</script><?php
				}
			}else{ 
				?><script>window.location = 'index.php?m=gagal#daftar';</script><?php
			}
		}else{
			?><script>window.location = 'index.php?m=sama#daftar';</script><?php
		} //cek username

        // require("kirimemail.php");
	}

	mysqli_close($koneksi);
?>

