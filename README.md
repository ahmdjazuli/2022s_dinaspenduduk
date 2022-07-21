# 2022s_dinaspenduduk
Judul Aplikasi : Aplikasi Sistem Administrasi Kependudukan pada Dinas Kependudukan dan Pencatatan Sipil Kabupaten Hulu Sungai Tengah

Joki untuk kebutuhan PKL Mahasiswa UNISKA Banjarbaru.

Aplikasi yang digunakan :
1. Sublime 3 Text Editor
2. Browser Chrome
3. Xampp v3.2.2

Bahasa Pemograman :
1. PHP 7 Native
2. Javascript
3. CSS

PEMBAHARUAN 3 :
1. Kata "Detail" diubah jadi "Riwayat Permohonan".
2. Cetak Satuan SKPD + SKPK belum ada.
3. Riwayat Permohonan sudah dibuat kesemua "Pemohon".
4. Rekapan data keseluruhan dari tiap pengajuan masing" 5 data.
	- Pengajuan KTP, SKK, SKBM, KK, Akta Kelahiran -> Februari 2022 Disetujui
	- Akta Pengangkatan Anak, SKPD, SKPK -> Juli 2022 Disetujui


PEMBAHARUAN 2 :
1. Data Pemohon diperbaharui dengan data sesui instanti 10 biji.
2. Memperbaiki beberapa Bug.
3. Menambahkan Detail Pemohon untuk menambahkan "Keterangan" dan "Status". (Tabel Baru : pemohon_detail), Di Menu 2022s_dinaspenduduk/rtrw90/pemohon.php klik NIK pemohon dan scroll ke bawah utk melihat "Detail Pemohon". 
4. Halaman Dashboard admin diubah jadi Rekap Data Laporan.

PEMBAHARUAN :
1. Filter Cetak ditambahkan status.
2. Cetak Laporan pake QRcode.
3. Akta Pengangkatan Anak
4. Surat Keterangan Pindah Datang (SKPD)
5. Surat Keterangan Pindah Keluar (SKPK)

Fitur Website :
1. User (2) : Admin (Username dan Password) dan Pemohon (NIK dan No.Telp).
2. Halaman Depan (4) : Visi & Misi, Struktur Organisasi, Lokasi dan Login.
3. Data Master (1) : Data Pemohon dan Detail Pemohon (NEW).
4. Data Report (8) : KTP, SKK, SKBM, KK, Akta Kelahiran, Akta Pengangkatan Anak, SKPD, dan SKPK.
5. Alert Standar
6. CRUD Standar