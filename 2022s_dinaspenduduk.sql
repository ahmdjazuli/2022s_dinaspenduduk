-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 12:54 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2022s_dinaspenduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `idanak` int(5) NOT NULL,
  `idpemohon` int(5) NOT NULL,
  `waktu1` datetime NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `file3` text NOT NULL,
  `file4` text NOT NULL,
  `anaknya` varchar(100) NOT NULL,
  `pasangan` varchar(100) NOT NULL,
  `tempatlahir` text NOT NULL,
  `tgllahir` text NOT NULL,
  `tglacc` varchar(100) NOT NULL,
  `stbld` varchar(40) NOT NULL,
  `noak` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`idanak`, `idpemohon`, `waktu1`, `file1`, `file2`, `file3`, `file4`, `anaknya`, `pasangan`, `tempatlahir`, `tgllahir`, `tglacc`, `stbld`, `noak`, `status`) VALUES
(3, 14, '2022-06-24 08:06:00', '886aktakelahiran.fake.jpg', '3621.jpg', '699bukunikah.fake.jpg', '8243.jpg', 'Celline Gergio', 'Qory Gore', 'BANJAR', 'DUAPULUH SEMBILAN - bulan DESEMBER - tahun SERIBU SEMBILANRATUS SEMBILANPULUH TUJUH', '- Dua Belas - Januari - Tahun Duaribu Duapuluh Dua', '1920 No. 751 jo 1927 No. 564', '1413/TLB/VII-2002.-', 'Disetujui'),
(4, 13, '2022-06-24 09:28:00', '293aktakelahiran.fake.jpg', '1945.jpg', '956aktaperkawinan.fake.jpg', '9972.jpg', 'Ayu Rifki', 'Ayu Tingting', 'BANJARBARU', 'DUAPULUH LIMA - bulan AGUSTUS - tahun DUARIBU SATU', '- Dua Puluh Empat - Juni - Tahun Duaribu Duapuluh Dua', '1920 No. 751 jo 1927 No. 564', '1702/TLB/XII-2004.-', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `iddetail` int(5) NOT NULL,
  `idkk` int(5) NOT NULL,
  `idpemohon` int(5) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `hubungan` varchar(50) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `paspor` varchar(50) NOT NULL,
  `kitas` varchar(50) NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`iddetail`, `idkk`, `idpemohon`, `pendidikan`, `hubungan`, `negara`, `paspor`, `kitas`, `ayah`, `ibu`) VALUES
(1, 5, 8, 'TAMAT SD/SEDERAJAT', 'ANAK', 'WNI', '-', '-', 'MAMAT SURYO', '-'),
(2, 5, 9, 'TAMAT SMA/SEDERAJAT', 'KEPALA KELUARGA', 'WNI', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `idkelahiran` int(5) NOT NULL,
  `idpemohon` int(5) NOT NULL,
  `waktu1` datetime NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `file3` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `stbld` varchar(40) NOT NULL,
  `noak` varchar(20) NOT NULL,
  `tempatlahir` text NOT NULL,
  `tgllahir` text NOT NULL,
  `waktulahir` text NOT NULL,
  `anakke` varchar(20) NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `tglacc` varchar(50) NOT NULL,
  `ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`idkelahiran`, `idpemohon`, `waktu1`, `file1`, `file2`, `file3`, `status`, `stbld`, `noak`, `tempatlahir`, `tgllahir`, `waktulahir`, `anakke`, `ayah`, `tglacc`, `ibu`) VALUES
(2, 9, '2022-01-12 23:42:00', '479Kartu.Keluarga.Fake.jpg', '7294.jpg', '299IMG.20200811.092721..2..jpg', 'Disetujui', '1920 No. 751 jo 1927 No. 564', '1413/TLB/VII-2002.-', 'MARTAPURA', 'DUAPULUH SEMBILAN - bulan DESEMBER - tahun SERIBU SEMBILANRATUS SEMBILANPULUH TUJUH', 'nol lima lewat empatpuluh lima menit', 'KETIGA', 'Lord Rangga Foundation', '- Sebelas - Januari - Tahun Duaribu Duapuluh Dua', 'Siti Ropeah'),
(3, 5, '2022-02-04 10:03:00', '906Kartu.Keluarga.Fake.jpg', '3443.jpg', '812aktapekarwinan2.fake.jpg', 'Disetujui', '1920 No. 751 jo 1927 No. 564', '1413/TLB/VII-2002.-', 'MARTAPURA', 'DUAPULUH SEMBILAN - bulan FEBRUARI - tahun SERIBU SEMBILANRATUS SEMBILANPULUH DELAPAN', 'nol sembilan lewat limapuluh tujuh menit', 'PERTAMA', 'Diki Fiki', '- Sebelas - Januari - Tahun Duaribu Duapuluh Dua', 'Azizah'),
(4, 6, '2022-02-04 10:10:00', '768aktakelahiran.fake.jpg', '4922.jpg', '900aktapekarwinan1.fake.jpg', 'Disetujui', '1920 No. 751 jo 1927 No. 564', '1413/TLB/VII-2002.-', 'BANJARBARU', 'DELAPAN - bulan APRIL - tahun SERIBU SEMBILANRATUS DELAPANPULUH SEMBILAN', 'tujuh lewat sepuluh empat menit', 'KEEMPAT', 'Coki Pardede', '- Sebelas - Januari - Tahun Duaribu Duapuluh Dua', 'Aminah'),
(5, 6, '2022-02-04 10:16:00', '513Kartu.Keluarga.Fake.jpg', '4761.jpg', '121aktapekarwinan1.fake.jpg', 'Disetujui', '1920 No. 751 jo 1927 No. 564', '1413/TLB/VII-2002.-', 'BANJARBARU', 'DUAPULUH SEMBILAN - bulan DESEMBER - tahun SERIBU SEMBILANRATUS SEMBILANPULUH TUJUH', 'tigabelas lewat limabelas satu menit', 'KELIMA', 'Coki Pardede', '- Sebelas - Januari - Tahun Duaribu Duapuluh Dua', 'Aminah'),
(6, 7, '2022-02-04 10:24:00', '797Kartu.Keluarga.Fake.jpg', '9884.jpg', '129bukunikah1.fake.jpg', 'Disetujui', '1920 No. 751 jo 1927 No. 564', '1413/TLB/VII-2002.-', 'BANJARBARU', 'DUAPULUH SATU - bulan MEI - tahun SERIBU SEMBILANRATUS SEMBILANPULUH SATU', 'nol dua lewat tigapuluh tiga menit', 'PERTAMA', 'Ferdian', '- Sebelas - Januari - Tahun Duaribu Duapuluh Dua', 'Justika'),
(7, 7, '2022-02-04 10:27:00', '376Kartu.Keluarga.Fake.jpg', '1431.jpg', '572bukunikah1.fake.jpg', 'Disetujui', '1920 No. 751 jo 1927 No. 564', '1413/TLB/VII-2002.-', 'BANJARBARU', 'DUAPULUH LIMA - bulan AGUSTUS - tahun DUARIBU SATU', 'duapuluh lewat limapuluh dua menit', 'KEDUA', 'Ferdian', '- Sebelas - Januari - Tahun Duaribu Duapuluh Dua', 'Justika'),
(8, 8, '2022-02-04 10:33:00', '964Kartu.Keluarga.Fake.jpg', '4995.jpg', '752bukunikah.fake.jpg', 'Disetujui', '1920 No. 751 jo 1927 No. 564', '1413/TLB/VII-2002.-', 'MARTAPURA', 'SEBELAS - bulan JANUARI - tahun SERIBU SEMBILANRATUS SEMBILANPULUH LIMA', 'duapuluh lewat tigabelas menit', 'PERTAMA', 'Ebel', '- Sebelas - Januari - Tahun Duaribu Duapuluh Dua', 'Selfie'),
(9, 8, '2022-02-04 10:35:00', '718Kartu.Keluarga.Fake.jpg', '4085.jpg', '148bukunikah.fake.jpg', 'Disetujui', '1920 No. 751 jo 1927 No. 564', '1413/TLB/VII-2002.-', 'BANJARBARU', 'DUAPULUH SEMBILAN - bulan DESEMBER - tahun SERIBU SEMBILANRATUS SEMBILANPULUH TUJUH', 'nol enam lewat sebelas menit', 'KEDUA', 'Ebel', '- Sebelas - Januari - Tahun Duaribu Duapuluh Dua', 'Selfie	'),
(10, 10, '2022-02-04 10:51:00', '925Kartu.Keluarga.Fake.jpg', '2902.jpg', '990aktaperkawinan.fake.jpg', 'Disetujui', '1920 No. 751 jo 1927 No. 564', '1413/TLB/VII-2002.-', 'MARTAPURA', 'DUAPULUH EMPAT - bulan JUNI - tahun SERIBU SEMBILANRATUS SEMBILANPULUH ENAM', 'nol tiga lewat tigapuluh tiga menit', 'PERTAMA', 'Dustin Tiffani', '- Sebelas - Januari - Tahun Duaribu Duapuluh Dua', 'Asyanti Melati'),
(11, 10, '2022-02-04 10:54:00', '212Kartu.Keluarga.Fake.jpg', '2593.jpg', '886aktaperkawinan.fake.jpg', 'Menunggu', '', '', 'MARTAPURA', 'LIMABELAS - bulan SEPTEMBER- tahun SERIBU SEMBILANRATUS SEMBILANPULUH SEMBILAN', 'nol lima lewat empatpuluh lima menit', 'KEDUA', 'Dustin Tiffani', '', 'Asyanti Melati');

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `idkk` int(5) NOT NULL,
  `nokk` varchar(20) NOT NULL,
  `idpemohon` int(5) NOT NULL,
  `waktu1` datetime NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `file3` text NOT NULL,
  `file4` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`idkk`, `nokk`, `idpemohon`, `waktu1`, `file1`, `file2`, `file3`, `file4`, `status`) VALUES
(5, '630702450700001', 8, '2022-01-11 22:22:00', '171SuratPengantarFAKE.jpg', '639bukunikah.fake.jpg', '503aktaperkawinan.fake.jpg', '779', 'Disetujui'),
(6, '630703430270002', 6, '2022-02-04 10:13:00', '146SuratPengantarFAKE.jpg', '201bukunikah1.fake.jpg', '180aktapekarwinan2.fake.jpg', '732', 'Disetujui'),
(7, '6307034306010001', 7, '2022-02-04 10:21:00', '645SuratPengantarFAKE.jpg', '920bukunikah.fake.jpg', '830aktapekarwinan2.fake.jpg', '314', 'Disetujui'),
(8, '6307060803660002', 10, '2022-02-04 10:55:00', '623SuratPengantarFAKE.jpg', '995bukunikah.fake.jpg', '167aktapekarwinan2.fake.jpg', '404', 'Disetujui'),
(9, '6307051704070007', 11, '2022-02-04 11:12:00', '147SuratPengantarFAKE.jpg', '107bukunikah1.fake.jpg', '483aktapekarwinan1.fake.jpg', '570', 'Disetujui'),
(10, '6307021708750004', 12, '2022-02-04 15:40:00', '282SuratPengantarFAKE.jpg', '913', '776', '236', 'Ditolak'),
(11, '6307021708750004', 12, '2022-02-04 15:43:00', '363SuratPengantarFAKE.jpg', '369bukunikah.fake.jpg', '658aktaperkawinan.fake.jpg', '958', 'Disetujui'),
(12, '-', 13, '2022-02-04 15:56:00', '281SuratPengantarFAKE.jpg', '884', '973', '687', 'Ditolak'),
(13, '6307082103920004', 13, '2022-02-04 15:57:00', '540SuratPengantarFAKE.jpg', '454bukunikah.fake.jpg', '185aktapekarwinan2.fake.jpg', '796', 'Disetujui'),
(14, '6307051705630004', 14, '2022-02-04 16:00:00', '191SuratPengantarFAKE.jpg', '662bukunikah1.fake.jpg', '866aktapekarwinan1.fake.jpg', '707SuratPengantarFAKE.jpg', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE `pemohon` (
  `idpemohon` int(5) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(111) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `ttl1` varchar(100) NOT NULL,
  `ttl2` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `perkawinan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `kelurahan` varchar(80) NOT NULL,
  `kecamatan` varchar(80) NOT NULL,
  `kota` varchar(80) NOT NULL,
  `darah` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemohon`
--

INSERT INTO `pemohon` (`idpemohon`, `nik`, `nama`, `telp`, `jk`, `alamat`, `ttl1`, `ttl2`, `agama`, `perkawinan`, `pekerjaan`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kota`, `darah`) VALUES
(5, '6307022507810002', 'Misransyah', '082198009912', 'P', 'Jl. Guntung Manggis', 'Banua Budi, ', '1998-01-05', 'Islam', 'Belum Kawin', 'Pedagang', '01', '03', 'Banua Budi', 'Banua Budi', 'Banjarbaru', 'AB'),
(6, '630703430270002', 'Halimatussakdiah', '085377489899', 'P', 'Gg. Hijrah Jaya', 'Banua Binjai, ', '2000-08-25', 'Islam', 'Belum Kawin', 'Mahasiswa', '02', '02', 'Banua Binjai', 'Martapura', 'Banua Binjai', 'O'),
(7, '6307034306010001', 'Norliana', '087719902155', 'P', 'Komplek Pangeran Antasari no.23', 'Mandiangin, ', '2000-09-11', 'Islam', 'Belum Kawin', 'Mahasiswa', '03', '05', 'Mandiangin', 'Mandiangin', 'Mandiangin', 'B'),
(8, '630702450700001', 'Sarmila', '081360109810', 'P', 'Gg. Melati no.11', 'ilung, ', '2000-08-01', 'Budha', 'Belum Menikah', 'Mahasiswa', '01', '05', 'Banjar', 'Banjar', 'ilung', 'B'),
(9, '6307052612790002', 'Ardiansyah', '085391884787', 'L', 'Jl. Melayu', 'Batu Benawa, ', '2001-07-21', 'Islam', 'Belum Kawin', 'Mahasiswa', '02', '04', 'Banjar', 'Banjar', 'Batu Benawa', 'B'),
(10, '6307060803660002', 'M. Ramli', '082159606370', 'L', 'Birayang', 'Birayang, ', '1997-01-02', 'Islam', 'Kawin', 'PNS', '01', '01', 'Birayang', 'Birayang', 'Banjarbaru', 'A'),
(11, '6307051704070007', 'M. Adrian', '081358005678', 'L', 'Gg. Melati', 'Mualimin, ', '1990-05-20', 'Islam', 'Kawin', 'PNS', '03', '01', 'Mualimin', 'Mualimin', 'Martapura', 'A'),
(12, '6307021708750004', 'M. Agus', '081345061093', 'L', 'Birayang', 'Birayang, ', '1999-08-19', 'Islam', 'Kawin', 'Wirausaha', '02', '04', 'Birayang', 'Birayang', 'Birayang', 'A'),
(13, '6307082103920004', 'Hafni', '082151003890', 'L', 'Jl. Jeruk', 'Aluan, ', '1998-07-25', 'Islam', 'Belum Kawin', 'Wiraswasta', '01', '02', 'Banjar', 'Banjar', 'Aluan', 'O'),
(14, '6307051705630004', 'Aswad', '085248445890', 'P', 'Komplek Guntur', 'Banjarbaru , ', '1994-03-18', 'Islam', 'Kawin', 'PNS', '04', '01', 'Sekumpul', 'Liang anggang', 'Banjarbaru', 'O');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon_detail`
--

CREATE TABLE `pemohon_detail` (
  `idpemohon_detail` int(5) NOT NULL,
  `idpemohon` int(5) NOT NULL,
  `ket` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemohon_detail`
--

INSERT INTO `pemohon_detail` (`idpemohon_detail`, `idpemohon`, `ket`, `status`) VALUES
(1, 9, 'Pengajuan KTP', 'Disetujui'),
(2, 9, 'SKK', 'Disetujui'),
(3, 9, 'SKBM', 'Disetujui'),
(4, 9, 'Akta Kelahiran', 'Disetujui'),
(5, 14, 'KK', 'Disetujui'),
(6, 14, 'Akta Kelahiran', 'Disetujui'),
(7, 14, 'SKPD', 'Disetujui'),
(8, 11, 'Pengajuan KTP', 'Ditolak'),
(9, 11, 'SKBM', 'Disetujui'),
(10, 11, 'KK', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `idpengajuan` int(5) NOT NULL,
  `idpemohon` int(5) NOT NULL,
  `status` varchar(50) NOT NULL,
  `waktu1` datetime NOT NULL,
  `catatan` varchar(50) NOT NULL,
  `suratpengantar` text NOT NULL,
  `fotokopikk` text NOT NULL,
  `fotokopiakta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`idpengajuan`, `idpemohon`, `status`, `waktu1`, `catatan`, `suratpengantar`, `fotokopikk`, `fotokopiakta`) VALUES
(1, 5, 'Disetujui', '2021-12-19 05:29:00', '', 'img/150IMG.20200811.092721..2..jpg', 'img/530Kece.jpg', 'img/116Screenshot.20211101.060015.Instagram..2..jpg'),
(2, 6, 'Ditolak', '2021-12-20 12:12:00', 'Data Tidak Lengkap.', '', '', ''),
(3, 6, 'Disetujui', '2021-12-29 10:13:00', '', 'img/883SuratPengantarFAKE.jpg', 'img/177Kartu.Keluarga.Fake.jpg', 'img/628aktakelahiran.fake.jpg'),
(4, 8, 'Disetujui', '2022-02-04 09:48:00', '', 'img/390SuratPengantarFAKE.jpg', 'img/489Kartu.Keluarga.Fake.jpg', 'img/320aktakelahiran1.fake.jpg'),
(5, 7, 'Disetujui', '2022-02-04 09:52:00', '', 'img/443SuratPengantarFAKE.jpg', 'img/899Kartu.Keluarga.Fake.jpg', 'img/189aktakelahiran.fake.jpg'),
(6, 9, 'Disetujui', '2022-02-04 09:56:00', '', 'img/348SuratPengantarFAKE.jpg', 'img/736Kartu.Keluarga.Fake.jpg', 'img/799aktakelahiran1.fake.jpg'),
(7, 10, 'Disetujui', '2022-02-04 10:44:00', '', 'img/926SuratPengantarFAKE.jpg', 'img/352Kartu.Keluarga.Fake.jpg', 'img/186aktakelahiran.fake.jpg'),
(8, 11, 'Ditolak', '2022-02-04 11:05:00', 'Data Tidak Lengkap', 'img/846', 'img/665Kartu.Keluarga.Fake.jpg', 'img/111'),
(9, 11, 'Disetujui', '2022-02-04 11:05:00', '', 'img/419SuratPengantarFAKE.jpg', 'img/115Kartu.Keluarga.Fake.jpg', 'img/961aktakelahiran1.fake.jpg'),
(10, 12, 'Disetujui', '2022-02-04 15:36:00', '', 'img/432SuratPengantarFAKE.jpg', 'img/202Kartu.Keluarga.Fake.jpg', 'img/122aktakelahiran.fake.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pindah_datang`
--

CREATE TABLE `pindah_datang` (
  `idpindahdatang` int(5) NOT NULL,
  `idpemohon` int(5) NOT NULL,
  `waktu1` datetime NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `file3` text NOT NULL,
  `file4` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pindah_datang`
--

INSERT INTO `pindah_datang` (`idpindahdatang`, `idpemohon`, `waktu1`, `file1`, `file2`, `file3`, `file4`, `status`) VALUES
(2, 14, '2022-06-24 10:25:00', '297SuratKeteranganPindah.jpg', '874Kartu.Keluarga.Fake.jpg', '4044.jpg', '865bukunikah.fake.jpg', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `pindah_keluar`
--

CREATE TABLE `pindah_keluar` (
  `idpindahkeluar` int(5) NOT NULL,
  `idpemohon` int(5) NOT NULL,
  `waktu1` datetime NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `file3` text NOT NULL,
  `tujuan` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pindah_keluar`
--

INSERT INTO `pindah_keluar` (`idpindahkeluar`, `idpemohon`, `waktu1`, `file1`, `file2`, `file3`, `tujuan`, `status`) VALUES
(2, 13, '2022-06-24 20:25:00', '661SuratKeteranganPindah.jpg', '758Kartu.Keluarga.Fake.jpg', '2761.jpg', 'Martapura', 'Disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `skbm`
--

CREATE TABLE `skbm` (
  `idskbm` int(5) NOT NULL,
  `idpemohon` int(5) NOT NULL,
  `waktu1` datetime NOT NULL,
  `keperluan` varchar(80) NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skbm`
--

INSERT INTO `skbm` (`idskbm`, `idpemohon`, `waktu1`, `keperluan`, `file1`, `file2`, `status`) VALUES
(5, 7, '2022-01-11 18:07:00', 'memenuhi administrasi KPR', '4821.jpg', '286Kartu.Keluarga.Fake.jpg', 'Disetujui'),
(6, 8, '2022-01-11 18:27:00', 'Melamar Pekerjaan', '4311.jpg', '995Kartu.Keluarga.Fake.jpg', 'Disetujui'),
(7, 9, '2022-02-04 09:58:00', 'Membeli rumah.', '221SuratPengantarFAKE.jpg', '378Kartu.Keluarga.Fake.jpg', 'Disetujui'),
(8, 5, '2022-02-04 10:03:00', 'syarat mengurus beasiswa', '478SuratPengantarFAKE.jpg', '578Kartu.Keluarga.Fake.jpg', 'Disetujui'),
(9, 6, '2022-02-04 10:07:00', 'Mendaftar Taruna TNI', '589SuratPengantarFAKE.jpg', '115Kartu.Keluarga.Fake.jpg', 'Disetujui'),
(10, 10, '2022-02-04 10:48:00', 'Mendaftar CPNS', '676SuratPengantarFAKE.jpg', '633Kartu.Keluarga.Fake.jpg', 'Disetujui'),
(11, 11, '2022-02-04 11:09:00', '.....', '729', '107', 'Ditolak'),
(12, 11, '2022-02-04 11:10:00', 'Membeli rumah.', '581SuratPengantarFAKE.jpg', '761Kartu.Keluarga.Fake.jpg', 'Disetujui'),
(13, 12, '2022-02-04 15:37:00', 'memenuhi administrasi KPR', '613', '760', 'Ditolak'),
(14, 12, '2022-02-04 15:40:00', 'Mendaftar CPNS', '478SuratPengantarFAKE.jpg', '589Kartu.Keluarga.Fake.jpg', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `skk`
--

CREATE TABLE `skk` (
  `idskk` int(5) NOT NULL,
  `idpemohon` int(5) NOT NULL,
  `nikpemohon` varchar(20) NOT NULL,
  `hubungan` varchar(50) NOT NULL,
  `waktu1` datetime NOT NULL,
  `anakke` varchar(2) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `penyebab` varchar(100) NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skk`
--

INSERT INTO `skk` (`idskk`, `idpemohon`, `nikpemohon`, `hubungan`, `waktu1`, `anakke`, `tempat`, `penyebab`, `file1`, `file2`, `status`) VALUES
(7, 6, '8', 'Kerabat', '2022-01-10 12:46:00', '1', 'Lapangan Bola', 'Serangan Jantung', '4265.jpg', '1331.jpg', 'Disetujui'),
(8, 9, '8', 'Kerabat', '2022-02-04 09:57:00', '1', 'Lapangan Bola', 'Serangan Jantung', '4665.jpg', '127SuratPengantarFAKE.jpg', 'Disetujui'),
(9, 7, '9', 'ANAK', '2022-02-03 10:19:00', '3', 'Rumah', 'Jatuh dari Lantai 3', '6613.jpg', '326SuratPengantarFAKE.jpg', 'Disetujui'),
(10, 8, '7', 'Ayah Angkat', '2022-02-04 16:28:00', '1', 'Jalan Raya', 'Kecelakaan dalam berkendara', '2724.jpg', '864SuratPengantarFAKE.jpg', 'Disetujui'),
(11, 10, '6', 'Kerabat', '2022-02-05 10:46:00', '5', 'Rumah Sakit', 'Usus Jebol', '2251.jpg', '216SuratPengantarFAKE.jpg', 'Menunggu'),
(12, 11, '10', 'Anak Perempuan', '2022-02-06 11:07:00', '2', 'Rumah Sakit', 'Omicron', '5013.jpg', '537SuratPengantarFAKE.jpg', 'Menunggu'),
(13, 12, '7', 'Paman', '2022-02-05 15:36:00', '1', 'Rumah Sakit', 'Tumor', '2081.jpg', '229SuratPengantarFAKE.jpg', 'Menunggu'),
(14, 13, '9', 'Kerabat', '2022-02-01 15:49:00', '3', 'Jalan Raya', 'Kecelakaan dalam berkendara', '2452.jpg', '944SuratPengantarFAKE.jpg', 'Menunggu'),
(15, 13, '8', 'Kepala Keluarga', '2022-01-31 15:52:00', '1', 'Rumah', 'Kanker', '9925.jpg', '877SuratPengantarFAKE.jpg', 'Menunggu'),
(16, 6, '13', 'Anak', '2022-02-04 15:54:00', '3', 'Masjid', 'Stroke Berat', '5365.jpg', '443SuratPengantarFAKE.jpg', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`idanak`),
  ADD KEY `idpemohon` (`idpemohon`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`iddetail`),
  ADD KEY `idkk` (`idkk`),
  ADD KEY `idpemohon` (`idpemohon`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`idkelahiran`),
  ADD KEY `idpemohon` (`idpemohon`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`idkk`);

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`idpemohon`);

--
-- Indexes for table `pemohon_detail`
--
ALTER TABLE `pemohon_detail`
  ADD PRIMARY KEY (`idpemohon_detail`),
  ADD KEY `idpemohon` (`idpemohon`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`idpengajuan`),
  ADD KEY `idpemohon` (`idpemohon`);

--
-- Indexes for table `pindah_datang`
--
ALTER TABLE `pindah_datang`
  ADD PRIMARY KEY (`idpindahdatang`),
  ADD KEY `idpemohon` (`idpemohon`);

--
-- Indexes for table `pindah_keluar`
--
ALTER TABLE `pindah_keluar`
  ADD PRIMARY KEY (`idpindahkeluar`),
  ADD KEY `idpemohon` (`idpemohon`);

--
-- Indexes for table `skbm`
--
ALTER TABLE `skbm`
  ADD PRIMARY KEY (`idskbm`),
  ADD KEY `idpemohon` (`idpemohon`);

--
-- Indexes for table `skk`
--
ALTER TABLE `skk`
  ADD PRIMARY KEY (`idskk`),
  ADD KEY `idpemohon` (`idpemohon`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `idanak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `iddetail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `idkelahiran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kk`
--
ALTER TABLE `kk`
  MODIFY `idkk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `idpemohon` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pemohon_detail`
--
ALTER TABLE `pemohon_detail`
  MODIFY `idpemohon_detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `idpengajuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pindah_datang`
--
ALTER TABLE `pindah_datang`
  MODIFY `idpindahdatang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pindah_keluar`
--
ALTER TABLE `pindah_keluar`
  MODIFY `idpindahkeluar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skbm`
--
ALTER TABLE `skbm`
  MODIFY `idskbm` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `skk`
--
ALTER TABLE `skk`
  MODIFY `idskk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anak`
--
ALTER TABLE `anak`
  ADD CONSTRAINT `anak_ibfk_1` FOREIGN KEY (`idpemohon`) REFERENCES `pemohon` (`idpemohon`);

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`idkk`) REFERENCES `kk` (`idkk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_ibfk_2` FOREIGN KEY (`idpemohon`) REFERENCES `pemohon` (`idpemohon`);

--
-- Constraints for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD CONSTRAINT `kelahiran_ibfk_1` FOREIGN KEY (`idpemohon`) REFERENCES `pemohon` (`idpemohon`);

--
-- Constraints for table `pemohon_detail`
--
ALTER TABLE `pemohon_detail`
  ADD CONSTRAINT `pemohon_detail_ibfk_1` FOREIGN KEY (`idpemohon`) REFERENCES `pemohon` (`idpemohon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `pengajuan_ibfk_1` FOREIGN KEY (`idpemohon`) REFERENCES `pemohon` (`idpemohon`);

--
-- Constraints for table `pindah_datang`
--
ALTER TABLE `pindah_datang`
  ADD CONSTRAINT `pindah_datang_ibfk_1` FOREIGN KEY (`idpemohon`) REFERENCES `pemohon` (`idpemohon`);

--
-- Constraints for table `pindah_keluar`
--
ALTER TABLE `pindah_keluar`
  ADD CONSTRAINT `pindah_keluar_ibfk_1` FOREIGN KEY (`idpemohon`) REFERENCES `pemohon` (`idpemohon`);

--
-- Constraints for table `skbm`
--
ALTER TABLE `skbm`
  ADD CONSTRAINT `skbm_ibfk_1` FOREIGN KEY (`idpemohon`) REFERENCES `pemohon` (`idpemohon`);

--
-- Constraints for table `skk`
--
ALTER TABLE `skk`
  ADD CONSTRAINT `skk_ibfk_1` FOREIGN KEY (`idpemohon`) REFERENCES `pemohon` (`idpemohon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
