-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2023 at 06:37 PM
-- Server version: 10.3.36-MariaDB-0+deb10u2
-- PHP Version: 7.3.33-9+0~20230106.102+debian10~1.gbpc4e85f

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_datarekap`
--

CREATE TABLE `tb_datarekap` (
  `id_` int(11) NOT NULL,
  `namaBarang` text NOT NULL,
  `kodeBarang` varchar(20) NOT NULL,
  `jenisRuangan` varchar(3) NOT NULL,
  `detailLab` varchar(3) NOT NULL,
  `detailKelas` varchar(20) NOT NULL,
  `jmlSemua` varchar(15) NOT NULL,
  `jmlBaik` varchar(15) NOT NULL,
  `jmlRskRingan` varchar(15) NOT NULL,
  `jmlRskBerat` varchar(15) NOT NULL,
  `jmlPerlu` varchar(15) NOT NULL,
  `ceksnp` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_datarekap`
--

INSERT INTO `tb_datarekap` (`id_`, `namaBarang`, `kodeBarang`, `jenisRuangan`, `detailLab`, `detailKelas`, `jmlSemua`, `jmlBaik`, `jmlRskRingan`, `jmlRskBerat`, `jmlPerlu`, `ceksnp`) VALUES
(1, 'Kursi', '1.1', '6', '2', '', '36', '', '', '', '', '1'),
(2, 'Meja kerja', '1.2', '6', '2', '', '', '', '', '', '', '1'),
(3, 'Meja demonstrasi', '1.3', '6', '2', '', '', '', '', '', '', '1'),
(4, 'Meja persiapan', '1.4', '6', '2', '', '', '', '', '', '', '1'),
(5, 'Lemari alat', '1.5', '6', '2', '', '', '', '', '', '', '1'),
(6, 'Lemari bahan', '1.6', '6', '2', '', '', '', '', '', '', '1'),
(7, 'Lemari asam', '1.7', '6', '2', '', '', '', '', '', '', '1'),
(8, 'Bak cuci', '1.8', '6', '2', '', '', '', '', '', '', '1'),
(9, 'Botol zat', '2.1', '6', '2', '', '', '', '', '', '', '1'),
(10, 'Pipet tetes', '2.2', '6', '2', '', '', '', '', '', '', '1'),
(11, 'Batang pengaduk', '2.3', '6', '2', '', '', '', '', '', '', '1'),
(12, 'Gelas kimia 50 ml', '2.4', '6', '2', '', '', '', '', '', '', '1'),
(13, 'Gelas kimia 100ml', '2.5', '6', '2', '', '', '', '', '', '', '1'),
(14, 'Labu erlenmeyer', '2.6', '6', '2', '', '', '', '', '', '', '1'),
(15, 'Labu takar', '2.7', '6', '2', '', '', '', '', '', '', '1'),
(16, 'Pipet volume', '2.8', '6', '2', '', '', '', '', '', '', '1'),
(17, 'Pipet seukuran', '2.9', '6', '2', '', '', '', '', '', '', '1'),
(18, 'Corong', '2.10', '6', '2', '', '', '', '', '', '', '1'),
(19, 'Mortar', '2.11', '6', '2', '', '', '', '', '', '', '1'),
(20, 'Botol semprot', '2.12', '6', '2', '', '', '', '', '', '', '1'),
(21, 'Gelas ukur', '2.13', '6', '2', '', '', '', '', '', '', '1'),
(22, 'Buret  + klem', '2.14', '6', '2', '', '', '', '', '', '', '1'),
(23, 'Statif + klem', '2.15', '6', '2', '', '', '', '', '', '', '1'),
(24, 'Kaca arloji', '2.16', '6', '2', '', '', '', '', '', '', '1'),
(25, 'Corong pisah', '2.17', '6', '2', '', '', '', '', '', '', '1'),
(26, 'Alat destilasi', '2.18', '6', '2', '', '', '', '', '', '', '1'),
(27, 'Neraca', '2.19', '6', '2', '', '', '', '', '', '', '1'),
(28, 'pHmeter', '2.20', '6', '2', '', '', '', '', '', '', '1'),
(29, 'Centrifuge', '2.21', '6', '2', '', '', '', '', '', '', '1'),
(30, 'Barometer', '2.22', '6', '2', '', '', '', '', '', '', '1'),
(31, 'Termometer', '2.23', '6', '2', '', '', '', '', '', '', '1'),
(32, 'Multimeter AC/DC, 10 kilo ohm/volt', '2.24', '6', '2', '', '', '', '', '', '', '1'),
(33, 'Pembakar spiritus', '2.25', '6', '2', '', '', '', '', '', '', '1'),
(34, 'Kaki tiga + alas kasa kawat', '2.26', '6', '2', '', '', '', '', '', '', '1'),
(35, 'Stopwatch', '2.27', '6', '2', '', '', '', '', '', '', '1'),
(36, 'Kalorimeter tekanan tetap', '2.28', '6', '2', '', '', '', '', '', '', '1'),
(37, 'Tabung reaksi', '2.29', '6', '2', '', '', '', '', '', '', '1'),
(38, 'Rak tabung reaksi', '2.3', '6', '2', '', '', '', '', '', '', '1'),
(39, 'Sikat tabung reaksi', '2.31', '6', '2', '', '', '', '', '', '', '1'),
(40, 'Tabung centrifuge', '2.32', '6', '2', '', '', '', '', '', '', '1'),
(41, 'Tabel Periodik Unsur-unsur', '2.33', '6', '2', '', '', '', '', '', '', '1'),
(42, 'Model molekul', '2.34', '6', '2', '', '', '', '', '', '', '1'),
(43, 'Manual percobaan', '2.35', '6', '2', '', '', '', '', '', '', '1'),
(44, 'Papan tulis', '3.1', '6', '2', '', '', '', '', '', '', '1'),
(45, 'Bahan habis pakai tersedia di laboratorium meliputi bahan kimia, dengan banyak setiap saat 1,2 x banyak yang dibutuhkan. Bahan kimia meliputi zat-zat yang diperlukan dalam percobaan-percobaan: Pengenalan Reaksi Kimia, Teknik Pemisahan dan Pemurnian, Titrasi Asam-Basa, Elektrokimia, Energetika, Pembuatan Produk Terapan Pengetahuan Kimia.', '4.1', '6', '2', '', '', '', '', '', '', '1'),
(46, 'Kotak kontak', '5.1', '6', '2', '', '', '', '', '', '', '1'),
(47, 'Alat pemadam kebakaran', '5.2', '6', '2', '', '', '', '', '', '', '1'),
(48, 'Peralatan P3K', '5.3', '6', '2', '', '', '', '', '', '', '1'),
(49, 'Tempat sampah', '5.4', '6', '2', '', '', '', '', '', '', '1'),
(50, 'Jam dinding', '5.5', '6', '2', '', '', '', '', '', '', '1'),
(52, 'Buku teks pelajaran', '1.1', '5', '', '', '21706', '21181', '525', '', '21181', '1'),
(53, 'Buku panduan pendidik', '1.2', '5', '', '', '275', '275', '', '', '274', '1'),
(54, 'Buku pengayaan', '1.3', '5', '', '', '980', '895', '85', '', '895', '1'),
(55, 'Buku referensi', '1.4', '5', '', '', '1528', '1495', '33', '', '1495', '1'),
(56, 'Sumber belajar lain', '1.5', '5', '', '', '180', '180', '', '', '180', '1'),
(57, 'Rak buku', '2.1', '5', '', '', '22', '20', '2', '', '22', '1'),
(58, 'Rak majalah', '2.2', '5', '', '', '', '', '', '', '2', '1'),
(59, 'Rak surat kabar', '2.3', '5', '', '', '', '', '', '', '2', '1'),
(60, 'Meja baca', '2.4', '5', '', '', '15', '15', '', '', '15', '1'),
(61, 'Kursi kerja', '2.6', '5', '', '', '4', '4', '', '', '4', '1'),
(62, 'Meja kerja/sirkulasi', '2.7', '5', '', '', '4', '1', '', '', '4', '1'),
(63, 'Lemari katalog', '2.8', '5', '', '', '', '', '', '', '2', '1'),
(64, 'Lemari', '2.9', '5', '', '', '1', '1', '', '', '2', '1'),
(65, 'Papan pengumuman', '2.10', '5', '', '', '1', '1', '', '', '2', '1'),
(66, 'Meja multimedia', '2.11', '5', '', '', '5', '1', '4', '', '5', '1'),
(67, 'Peralatan multimedia', '3.1', '5', '', '', '1', '1', '', '', '1', '1'),
(68, 'Buku inventaris', '4.1', '5', '', '', '1', '1', '', '', '1', '1'),
(69, 'Tempat sampah', '4.2', '5', '', '', '2', '2', '', '', '2', '1'),
(70, 'Kotak kontak', '4.3', '5', '', '', '2', '2', '', '', '2', '1'),
(71, 'Jam dinding', '4.4', '5', '', '', '1', '1', '', '', '1', '1'),
(72, 'Kursi peserta didik', '1.1', '6', '5', '', '72', '72', '0', '0', '72', '1'),
(73, 'Meja', '1.2', '6', '5', '', '72', '72', '0', '0', '72', '1'),
(74, 'Kursi guru', '1.3', '6', '5', '', '2', '2', '0', '0', '2', '1'),
(75, 'Meja guru', '1.4', '6', '5', '', '', '', '', '', '', '1'),
(76, 'Komputer', '2.1', '6', '5', '', '', '', '', '', '', '1'),
(77, 'Printer', '2.2', '6', '5', '', '', '', '', '', '', '1'),
(78, 'Scanner', '2.3', '6', '5', '', '', '', '', '', '', '1'),
(79, 'Titik akses Internet', '2.4', '6', '5', '', '', '', '', '', '', '1'),
(80, 'LAN', '2.5', '6', '5', '', '', '', '', '', '', '1'),
(81, 'Stabilizer', '2.6', '6', '5', '', '', '', '', '', '', '1'),
(82, 'Modul praktik', '2.7', '6', '5', '', '', '', '', '', '', '1'),
(83, 'Papan lulis', '3.1', '6', '5', '', '', '', '', '', '', '1'),
(84, 'Kotak kontak', '4.1', '6', '5', '', '', '', '', '', '', '1'),
(85, 'Tempat sampah', '4.2', '6', '5', '', '', '', '', '', '', '1'),
(86, 'Jam dinding', '4.3', '6', '5', '', '', '', '', '', '', '1'),
(87, 'Kursi pimpinan', '1.1', '1', '', '', '1', '1', '0', '0', '1', '1'),
(88, 'Meja pimpinan', '1.2', '1', '', '', '1', '1', '0', '0', '1', '1'),
(89, 'Kursi dan meja tamu', '1.3', '1', '', '', '', '', '', '', '', '1'),
(90, 'Lemari', '1.4', '1', '', '', '', '', '', '', '', '1'),
(91, 'Papan statistik', '1.5', '1', '', '', '', '', '', '', '', '1'),
(92, 'Simbol kenegaraan', '2.1', '1', '', '', '', '', '', '', '', '1'),
(93, 'Tempat sampah', '2.2', '1', '', '', '', '', '', '', '', '1'),
(94, 'Jam dinding', '2.3', '1', '', '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_listruang`
--

CREATE TABLE `tb_listruang` (
  `id_` int(11) NOT NULL,
  `idRuang` varchar(2) NOT NULL,
  `lab` varchar(2) NOT NULL,
  `jnsRuang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_listruang`
--

INSERT INTO `tb_listruang` (`id_`, `idRuang`, `lab`, `jnsRuang`) VALUES
(1, '1', '', 'Ruang kepala Sekolah'),
(2, '2', '', 'Ruang Wakil Kepala Sekolah'),
(3, '3', '', 'Ruang Tata Usaha'),
(4, '4', '', 'Ruang Kepala Laboratorium'),
(5, '5', '', 'Ruang Perpustakaan'),
(6, '6', '', 'Ruang Laboratorium'),
(7, '7', '', 'Ruang Kelas'),
(8, '8', '', 'Ruang Guru'),
(9, '9', '', 'Tempat Ibadah'),
(10, '10', '', 'Ruang Bimbingan Konseling'),
(11, '11', '', 'Ruang UKS'),
(12, '12', '', 'Ruang Osis'),
(13, '13', '', 'Toilet'),
(14, '14', '', 'Gudang'),
(15, '', '1', 'Laboratorium Biologi'),
(16, '', '2', 'Laboratorium Kimia'),
(17, '', '3', 'Laboratorium Fisika'),
(18, '', '4', 'Laboratorium Bahasa'),
(19, '', '5', 'Laboratorium Komputer'),
(20, '', '6', 'Laboratorium IPS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obrolan`
--

CREATE TABLE `tb_obrolan` (
  `id_` int(11) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruang`
--

CREATE TABLE `tb_ruang` (
  `id_` int(11) NOT NULL,
  `jenisRuang` enum('1','2','3','4','5','6','7','8','9','10','11','12','13','14') NOT NULL COMMENT '1 = R. Kepsek, 2 = R. Wakasek, 3 = R. TU 4 = R. Kep. Lab/Perpus, 5 = R. Perpus, 6 = R. Laboratorium, 7 = R. Kelas',
  `detailLabo` varchar(2) NOT NULL,
  `kodeRuang` varchar(20) NOT NULL,
  `namaRuang` varchar(50) NOT NULL,
  `pengelola` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ruang`
--

INSERT INTO `tb_ruang` (`id_`, `jenisRuang`, `detailLabo`, `kodeRuang`, `namaRuang`, `pengelola`) VALUES
(1, '1', '', 'R0001', 'Ruang Kepala Sekolah', '00035'),
(2, '2', '', 'R0002', 'Ruang Wakil Kepala Sekolah', '00035'),
(3, '4', '', 'R0003', 'Ruang Kepala Laboratorium', '00017'),
(4, '5', '', 'R0004', 'Ruang Perpustakaan', '00036'),
(5, '6', '1', 'R0005', 'Ruang Laboratorium Biologi', '01'),
(6, '6', '2', 'R0006', 'Ruang Laboratorium Kimia', '00005'),
(7, '6', '3', 'R0007', 'Ruang Laboratorium Fisika', '00038'),
(8, '6', '4', 'R0008', 'Ruang Laboratorium Bahasa', '00004'),
(9, '6', '5', 'R0009', 'Ruang Laboratorium Komputer', '04'),
(10, '6', '6', 'R0010', 'Ruang Laboratorium IPS', '00020'),
(11, '8', '', 'R0011', 'Ruang Guru', '00035'),
(12, '9', '', 'R0012', 'Ruang Ibadah (Mushola)', '00035'),
(13, '11', '', 'R0013', 'Ruang UKS', '00027'),
(14, '7', '', '10ips1', 'Ruang kelas 10 IPS 1', '01'),
(15, '7', '', '10ips2', 'Ruang kelas 10 IPS 2', '00022'),
(16, '7', '', '10ips3', 'Ruang kelas 10 IPS 3', '00031'),
(17, '7', '', '10ips4', 'Ruang kelas 10 ips 4', '00028'),
(18, '7', '', '10mipa1', 'Ruang kelas 10 MIPA 1', '00011'),
(19, '7', '', '10mipa2', 'Ruang kelas 10 MIPA 2', '00021'),
(20, '7', '', '10mipa3', 'Ruang kelas 10 MIPA 3', '00014'),
(21, '7', '', '11ips1', 'Ruang kelas 11 IPS 1', '00037'),
(22, '7', '', '11ips2', 'Ruang kelas 11 IPS 2', '00029'),
(23, '7', '', '11ips3', 'Ruang kelas 11 IPS 3', '00015'),
(24, '7', '', '11ips4', 'Ruang kelas 11 IPS 4', '00027'),
(25, '7', '', '11mipa1', 'Ruang kelas 11 MIPA 1', '00013'),
(26, '7', '', '11mipa2', 'Ruang kelas 11 MIPA 2', '00018'),
(27, '7', '', '11mipa3', 'Ruang kelas 11 MIPA 3', '00024'),
(28, '7', '', '11mipa4', 'Ruang kelas 11 MIPA 4', '00016');

-- --------------------------------------------------------

--
-- Table structure for table `tb_snp`
--

CREATE TABLE `tb_snp` (
  `id_` int(11) NOT NULL,
  `jenisRuangan` varchar(2) NOT NULL,
  `detailLab` varchar(2) NOT NULL,
  `kodeBarang` varchar(20) NOT NULL,
  `namaBarang` text NOT NULL,
  `ceksnp` enum('1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_snp`
--

INSERT INTO `tb_snp` (`id_`, `jenisRuangan`, `detailLab`, `kodeBarang`, `namaBarang`, `ceksnp`) VALUES
(1, '5', '', '1.1', 'Buku teks pelajaran', '1'),
(2, '5', '', '1.2', 'Buku panduan pendidik', '1'),
(3, '5', '', '1.3', 'Buku pengayaan', '1'),
(4, '5', '', '1.4', 'Buku referensi', '1'),
(5, '5', '', '1.5', 'Sumber belajar lain', '1'),
(6, '5', '', '2.1', 'Rak buku', '1'),
(7, '5', '', '2.2', 'Rak majalah', '1'),
(8, '5', '', '2.3', 'Rak surat kabar', '1'),
(9, '5', '', '2.4', 'Meja baca', '1'),
(11, '5', '', '2.6', 'Kursi kerja', '1'),
(12, '5', '', '2.7', 'Meja kerja/sirkulasi', '1'),
(13, '5', '', '2.8', 'Lemari katalog', '1'),
(14, '5', '', '2.9', 'Lemari', '1'),
(15, '5', '', '2.10', 'Papan pengumuman', '1'),
(16, '5', '', '2.11', 'Meja multimedia', '1'),
(17, '5', '', '3.1', 'Peralatan multimedia', '1'),
(18, '5', '', '4.1', 'Buku inventaris', '1'),
(19, '5', '', '4.2', 'Tempat sampah', '1'),
(20, '5', '', '4.3', 'Kotak kontak', '1'),
(21, '5', '', '4.4', 'Jam dinding', '1'),
(22, '6', '1', '1.1', 'Kursi', '1'),
(23, '6', '1', '1.2', 'Meja kerja', '1'),
(24, '6', '1', '1.3', 'Meja demonstrasi', '1'),
(25, '6', '1', '1.4', 'Meja persiapan', '1'),
(26, '6', '1', '1.5', 'Lemari alat', '1'),
(27, '6', '1', '1.6', 'Lemari bahan', '1'),
(28, '6', '1', '1.7', 'Bak cuci', '1'),
(29, '6', '1', '2.1.1', 'Model kerangka manusia', '1'),
(30, '6', '1', '2.1.2', 'Model tubuh manusia', '1'),
(31, '6', '1', '2.1.3', 'Preparat mitosis', '1'),
(32, '6', '1', '2.1.4', 'Preparat meiosis', '1'),
(33, '6', '1', '2.1.5', 'Preparat anatomi tumbuhan', '1'),
(34, '6', '1', '2.1.6', 'Preparat anatomi hewan', '1'),
(35, '6', '1', '2.1.7', 'Gambar kromosom', '1'),
(36, '6', '1', '2.1.8', 'Gambar DNA', '1'),
(37, '6', '1', '2.1.9', 'Gamhar RNA', '1'),
(38, '6', '1', '2.1.10', 'Gambar pewarisan Mendel', '1'),
(39, '6', '1', '2.1.11', 'Gambar contoh-contoh tumbuhan dari berbagai divisi', '1'),
(40, '6', '1', '2.1.12', 'Gambar contoh-contoh hewan dari berbagai filum', '1'),
(41, '6', '1', '2.1.13', 'Gambar/model sistem pencernaan manusia', '1'),
(42, '6', '1', '2.1.14', 'Gambar/model sistem pernapasan manusia', '1'),
(43, '6', '1', '2.1.15', 'Gambar/model sistem peredaran darah manusia', '1'),
(44, '6', '1', '2.1.16', 'Gambar/model sistem pengeluaran manusia', '1'),
(45, '6', '1', '2.1.17', 'Gambar/model sistem reproduksi manusia', '1'),
(46, '6', '1', '2.1.18', 'Gambar/model sistem syaraf manusia', '1'),
(47, '6', '1', '2.1.19', 'Gambar sistem pencerna-an burung, reptil, ampibi, ikan, dan cacing tanah', '1'),
(48, '6', '1', '2.1.20', 'Gambar sistem pernapas-an burung, reptil, ampibi, ikan, dan cacing tanah', '1'),
(49, '6', '1', '2.1.21', 'Gambar sistem peredaran darah burung, reptil, ampi-bi, ikan, dan cacing tanah', '1'),
(50, '6', '1', '2.1.22', 'Gambar sistem pengelu-aran burung, reptil, ampi-bi, ikan, dan cacing tanah', '1'),
(51, '6', '1', '2.1.23', 'Gambar sistem reproduk-si burung, reptil, ampibi, ikan, dan cacing tanah.', '1'),
(52, '6', '1', '2.1.24', 'Gambar sistem syaraf burung, reptil, ampibi, ikan, dan cacing tanah.', '1'),
(53, '6', '1', '2.1.25', 'Gambar pohon evolusi', '1'),
(54, '6', '1', '2.2.1', 'Mikroskop monokuler', '1'),
(55, '6', '1', '2.2.2', 'Mikroskop stereo binokuler', '1'),
(56, '6', '1', '2.2.3.', 'Perangkat pemeliharan mikroskop (kertas pem-bersih lensa, sikat halus, kunci Alien, alat semprot, obeng halus, lup tukang arloji, tang untuk melipat)', '1'),
(57, '6', '1', '2.2.4', 'Gelas Benda', '1'),
(58, '6', '1', '2.2.5', 'Gelas penutup', '1'),
(59, '6', '1', '2.2.6', 'Gelas arloji', '1'),
(60, '6', '1', '2.2.7', 'Cawan petri', '1'),
(61, '6', '1', '2.2.8', 'Gelas kimia', '1'),
(62, '6', '1', '2.2.9', 'Corong', '1'),
(63, '6', '1', '2.2.10', 'Pipet ukur', '1'),
(64, '6', '1', '2.2.11', 'Tabung reaksi', '1'),
(65, '6', '1', '2.2.12', 'Sikat tabung reaksi', '1'),
(66, '6', '1', '2.2.13', 'Penjepit tabung reaksi', '1'),
(67, '6', '1', '2.2.14', 'Labu Erlenmeyer', '1'),
(68, '6', '1', '2.2.15', 'Kotak preparat', '1'),
(69, '6', '1', '2.2.16', 'Lumpang dan alu', '1'),
(70, '6', '1', '2.2.17', 'Gelas ukur', '1'),
(71, '6', '1', '2.2.18', 'Stop watch', '1'),
(72, '6', '1', '2.2.19', 'Kaki tiga', '1'),
(73, '6', '1', '2.2.20', 'Perangkat batang statif (panjang dan pendek)', '1'),
(74, '6', '1', '2.2.21', 'Klem universal', '1'),
(75, '6', '1', '2.2.22', 'Bosshead (penjepit)', '1'),
(76, '6', '1', '2.2.23', 'Pembakar spiritus', '1'),
(77, '6', '1', '2.2.24', 'Kasa', '1'),
(78, '6', '1', '2.2.25', 'Aquarium', '1'),
(79, '6', '1', '2.2.26', 'Neraca', '1'),
(80, '6', '1', '2.2.27', 'Sumbat karet 1 lubang', '1'),
(81, '6', '1', '2.2.28', 'Sumbat karet 2 lubang', '1'),
(82, '6', '1', '2.2.29', 'Termometer', '1'),
(83, '6', '1', '2.2.30', 'Potometer', '1'),
(84, '6', '1', '2.2.31', 'Respirometer', '1'),
(85, '6', '1', '2.2.32', 'Perangkat bedah hewan', '1'),
(86, '6', '1', '2.2.33', 'Termometer suhu tanah', '1'),
(87, '6', '1', '2.2.34', 'Higrometer putar', '1'),
(88, '6', '1', '2.2.35', 'Kuadrat', '1'),
(89, '6', '1', '2.2.36', 'Manual percobaan', '1'),
(90, '6', '1', '3.1', 'Papan tulis', '1'),
(91, '6', '1', '4.1', 'Asam sulfat', '1'),
(92, '6', '1', '4.2', 'HCL', '1'),
(93, '6', '1', '4.3', 'Acetokarmin', '1'),
(94, '6', '1', '4.4', 'Eosin', '1'),
(95, '6', '1', '4.5', 'Etanol', '1'),
(96, '6', '1', '4.6', 'Glukosa', '1'),
(97, '6', '1', '4.7', 'Indikator universal', '1'),
(98, '6', '1', '4.8', 'Iodium', '1'),
(99, '6', '1', '4.9', 'KOH', '1'),
(100, '6', '1', '4.1', 'MnSO4', '1'),
(101, '6', '1', '4.11', 'NaOH', '1'),
(102, '6', '1', '4.12', 'Vaseline', '1'),
(103, '6', '1', '4.13', 'Kertas saring', '1'),
(104, '6', '1', '5.1', 'Kotak kontak', '1'),
(105, '6', '1', '5.2', 'Alat pemadam kebakaran', '1'),
(106, '6', '1', '5.3', 'Peralatan P3K', '1'),
(107, '6', '1', '5.4', 'Tempat sampah', '1'),
(108, '6', '1', '5.5', 'Jam dinding', '1'),
(109, '6', '3', '1.1', 'Kursi', '1'),
(110, '6', '3', '1.2', 'Meja kerja', '1'),
(111, '6', '3', '1.3', 'Meja demonstrasi', '1'),
(112, '6', '3', '1.4', 'Meja persiapan', '1'),
(113, '6', '3', '1.5', 'Lemari alat', '1'),
(114, '6', '3', '1.6', 'Lemari bahan', '1'),
(115, '6', '3', '1.7', 'Bak cuci', '1'),
(116, '6', '3', '2.1.1', 'Mistar', '1'),
(117, '6', '3', '2.1.2', 'Rolmeter', '1'),
(118, '6', '3', '2.1.3', 'Jangka sorong', '1'),
(119, '6', '3', '2.1.4', 'Mikrometer', '1'),
(120, '6', '3', '2.1.5', 'Kubus massa sama', '1'),
(121, '6', '3', '2.1.6', 'Silinder massa sama', '1'),
(122, '6', '3', '2.1.7', 'Plat', '1'),
(123, '6', '3', '2.1.8', 'Beban bercelah', '1'),
(124, '6', '3', '2.1.9', 'Neraca', '1'),
(125, '6', '3', '2.1.10', 'Pegas', '1'),
(126, '6', '3', '2.1.11', 'Dinamometer (pegas presisi)', '1'),
(127, '6', '3', '2.1.12', 'Gelas ukur', '1'),
(128, '6', '3', '2.1.13', 'Stopwatch', '1'),
(129, '6', '3', '2.1.14', 'Termometer', '1'),
(130, '6', '3', '2.1.15', 'Gelas Beaker', '1'),
(131, '6', '3', '2.1.16', 'Garputala', '1'),
(132, '6', '3', '2.1.17', 'Multimeter AC/DC 10 kilo ohm/volt', '1'),
(133, '6', '3', '2.1.18', 'Kotak potensiometer', '1'),
(134, '6', '3', '2.1.19', 'Osiloskop', '1'),
(135, '6', '3', '2.1.20', 'Generator frekuensi', '1'),
(136, '6', '3', '2.1.21', 'Pengeras suara', '1'),
(137, '6', '3', '2.1.22', 'Kabel penghubung', '1'),
(138, '6', '3', '2.1.23', 'Komponen elektronika', '1'),
(139, '6', '3', '2.1.24', 'Catu daya', '1'),
(140, '6', '3', '2.1.25', 'Transformator', '1'),
(141, '6', '3', '2.1.26', 'Magnet U', '1'),
(142, '6', '3', '2.2.1', 'Percobaan Atwood atau Percobaan Kereta dan Pewaktu ketik', '1'),
(143, '6', '3', '2.2.2', 'Percobaan Papan Luncur', '1'),
(144, '6', '3', '2.2.3', 'Percobaan Ayunan Sederhana atau Percobaan Getaran pada Pegas', '1'),
(145, '6', '3', '2.2.4', 'Percobaan Hooke', '1'),
(146, '6', '3', '2.2.5', 'Percobaan Kalorimetri', '1'),
(147, '6', '3', '2.2.6', 'Percobaan Bejana Berhubungan', '1'),
(148, '6', '3', '2.2.7', 'Percobaan Optik', '1'),
(149, '6', '3', '2.2.8', 'Percobaan Resonansi Bunyi atau Percobaan Sonometer', '1'),
(150, '6', '3', '2.2.9', 'Percobaan Hukum Ohm', '1'),
(151, '6', '3', '2.2.10', 'Manual percobaan', '1'),
(152, '6', '3', '3.1', 'Papan tulis', '1'),
(153, '6', '3', '4.1', 'Kotak kontak', '1'),
(154, '6', '3', '4.2', 'Alat pemadam kebakaran', '1'),
(155, '6', '3', '4.3', 'Peralatan P3K', '1'),
(156, '6', '3', '4.4', 'Tempat sampah', '1'),
(157, '6', '3', '4.5', 'Jam dinding', '1'),
(158, '6', '2', '1.1', 'Kursi', '1'),
(159, '6', '2', '1.2', 'Meja kerja', '1'),
(160, '6', '2', '1.3', 'Meja demonstrasi', '1'),
(161, '6', '2', '1.4', 'Meja persiapan', '1'),
(162, '6', '2', '1.5', 'Lemari alat', '1'),
(163, '6', '2', '1.6', 'Lemari bahan', '1'),
(164, '6', '2', '1.7', 'Lemari asam', '1'),
(165, '6', '2', '1.8', 'Bak cuci', '1'),
(166, '6', '2', '2.1', 'Botol zat', '1'),
(167, '6', '2', '2.2', 'Pipet tetes', '1'),
(168, '6', '2', '2.3', 'Batang pengaduk', '1'),
(169, '6', '2', '2.4', 'Gelas kimia 50 ml', '1'),
(170, '6', '2', '2.5', 'Gelas kimia 100ml', '1'),
(171, '6', '2', '2.6', 'Labu erlenmeyer', '1'),
(172, '6', '2', '2.7', 'Labu takar', '1'),
(173, '6', '2', '2.8', 'Pipet volume', '1'),
(174, '6', '2', '2.9', 'Pipet seukuran', '1'),
(175, '6', '2', '2.10', 'Corong', '1'),
(176, '6', '2', '2.11', 'Mortar', '1'),
(177, '6', '2', '2.12', 'Botol semprot', '1'),
(178, '6', '2', '2.13', 'Gelas ukur', '1'),
(179, '6', '2', '2.14', 'Buret  + klem', '1'),
(180, '6', '2', '2.15', 'Statif + klem', '1'),
(181, '6', '2', '2.16', 'Kaca arloji', '1'),
(182, '6', '2', '2.17', 'Corong pisah', '1'),
(183, '6', '2', '2.18', 'Alat destilasi', '1'),
(184, '6', '2', '2.19', 'Neraca', '1'),
(185, '6', '2', '2.20', 'pHmeter', '1'),
(186, '6', '2', '2.21', 'Centrifuge', '1'),
(187, '6', '2', '2.22', 'Barometer', '1'),
(188, '6', '2', '2.23', 'Termometer', '1'),
(189, '6', '2', '2.24', 'Multimeter AC/DC, 10 kilo ohm/volt', '1'),
(190, '6', '2', '2.25', 'Pembakar spiritus', '1'),
(191, '6', '2', '2.26', 'Kaki tiga + alas kasa kawat', '1'),
(192, '6', '2', '2.27', 'Stopwatch', '1'),
(193, '6', '2', '2.28', 'Kalorimeter tekanan tetap', '1'),
(194, '6', '2', '2.29', 'Tabung reaksi', '1'),
(195, '6', '2', '2.3', 'Rak tabung reaksi', '1'),
(196, '6', '2', '2.31', 'Sikat tabung reaksi', '1'),
(197, '6', '2', '2.32', 'Tabung centrifuge', '1'),
(198, '6', '2', '2.33', 'Tabel Periodik Unsur-unsur', '1'),
(199, '6', '2', '2.34', 'Model molekul', '1'),
(200, '6', '2', '2.35', 'Manual percobaan', '1'),
(201, '6', '2', '3.1', 'Papan tulis', '1'),
(202, '6', '2', '4.1', 'Bahan habis pakai tersedia di laboratorium meliputi bahan kimia, dengan banyak setiap saat 1,2 x banyak yang dibutuhkan. Bahan kimia meliputi zat-zat yang diperlukan dalam percobaan-percobaan: Pengenalan Reaksi Kimia, Teknik Pemisahan dan Pemurnian, Titrasi Asam-Basa, Elektrokimia, Energetika, Pembuatan Produk Terapan Pengetahuan Kimia.', '1'),
(203, '6', '2', '5.1', 'Kotak kontak', '1'),
(204, '6', '2', '5.2', 'Alat pemadam kebakaran', '1'),
(205, '6', '2', '5.3', 'Peralatan P3K', '1'),
(206, '6', '2', '5.4', 'Tempat sampah', '1'),
(207, '6', '2', '5.5', 'Jam dinding', '1'),
(208, '6', '5', '1.1', 'Kursi peserta didik', '1'),
(209, '6', '5', '1.2', 'Meja', '1'),
(210, '6', '5', '1.3', 'Kursi guru', '1'),
(211, '6', '5', '1.4', 'Meja guru', '1'),
(212, '6', '5', '2.1', 'Komputer', '1'),
(213, '6', '5', '2.2', 'Printer', '1'),
(214, '6', '5', '2.3', 'Scanner', '1'),
(215, '6', '5', '2.4', 'Titik akses Internet', '1'),
(216, '6', '5', '2.5', 'LAN', '1'),
(217, '6', '5', '2.6', 'Stabilizer', '1'),
(218, '6', '5', '2.7', 'Modul praktik', '1'),
(219, '6', '5', '3.1', 'Papan lulis', '1'),
(220, '6', '5', '4.1', 'Kotak kontak', '1'),
(221, '6', '5', '4.2', 'Tempat sampah', '1'),
(222, '6', '5', '4.3', 'Jam dinding', '1'),
(223, '6', '4', '1.1', 'Kursi siswa', '1'),
(224, '6', '4', '1.2', 'Meja siswa', '1'),
(225, '6', '4', '1.3', 'Kursi guru', '1'),
(226, '6', '4', '1.4', 'Meja guru', '1'),
(227, '6', '4', '1.5', 'Lemari', '1'),
(228, '6', '4', '2.1', 'Perangkat multimedia', '1'),
(229, '6', '4', '3.1', 'Papan tulis', '1'),
(230, '6', '4', '4.1', 'Kotak kontak', '1'),
(231, '6', '4', '4.2', 'Tempat sampah', '1'),
(232, '6', '4', '4.3', 'Jam dinding', '1'),
(234, '1', '', '1.1', 'Kursi pimpinan', '1'),
(235, '1', '', '1.2', 'Meja pimpinan', '1'),
(236, '1', '', '1.3', 'Kursi dan meja tamu', '1'),
(237, '1', '', '1.4', 'Lemari', '1'),
(238, '1', '', '1.5', 'Papan statistik', '1'),
(239, '1', '', '2.1', 'Simbol kenegaraan', '1'),
(240, '1', '', '2.2', 'Tempat sampah', '1'),
(241, '1', '', '2.3', 'Jam dinding', '1'),
(242, '3', '', '1.1', 'Kursi kerja', '1'),
(243, '3', '', '1.2', 'Meja kerja', '1'),
(244, '3', '', '1.3', 'Lemari', '1'),
(245, '3', '', '1.4', 'Papan statistik', '1'),
(246, '3', '', '2.1', 'Tempat sampah', '1'),
(247, '3', '', '2.2', 'Mesin ketik/komputer', '1'),
(248, '3', '', '2.3', 'Filing cabinet', '1'),
(249, '3', '', '2.4', 'Brankas', '1'),
(250, '3', '', '2.5', 'Telepon', '1'),
(251, '3', '', '2.6', 'Jam dinding', '1'),
(252, '3', '', '2.7', 'Kotak kontak', '1'),
(253, '3', '', '2.8', 'Penanda waktu', '1'),
(254, '8', '', '1.1', 'Kursi kerja', '1'),
(255, '8', '', '1.2', 'Meja kerja', '1'),
(256, '8', '', '1.3', 'Lemari', '1'),
(257, '8', '', '1.4', 'Kursi tamu', '1'),
(258, '8', '', '1.5', 'Papan statistik', '1'),
(259, '8', '', '1.6', 'Papan pengumuman', '1'),
(260, '8', '', '2.1', 'Tempat sampah', '1'),
(261, '8', '', '2.2', 'Tempat cuci tangan', '1'),
(262, '8', '', '2.3', 'Jam dinding', '1'),
(263, '9', '', '1.1', 'Lemari/rak', '1'),
(264, '9', '', '2.1', 'Perlengkapan ibadah', '1'),
(265, '9', '', '2.2', 'Jam dinding', '1'),
(266, '10', '', '1.1', 'Meja kerja', '1'),
(267, '10', '', '1.2', 'Kursi kerja', '1'),
(268, '10', '', '1.3', 'Kursi tamu', '1'),
(269, '10', '', '1.4', 'Lemari', '1'),
(270, '10', '', '1.5', 'Papan kegiatan', '1'),
(271, '10', '', '2.1', 'Instrumen konseling', '1'),
(272, '10', '', '2.2', 'Buku sumber', '1'),
(273, '10', '', '2.3', 'Media pengembangan kepribadian', '1'),
(274, '10', '', '3.1', 'Jam dinding', '1'),
(275, '11', '', '1.1', 'Tempal tidur', '1'),
(276, '11', '', '1.2', 'Lemari', '1'),
(277, '11', '', '1.3', 'Meja', '1'),
(278, '11', '', '1.4', 'Kursi', '1'),
(279, '11', '', '2.1', 'Catatan kesehatan siswa', '1'),
(280, '11', '', '2.2', 'Perlengkapan P3K', '1'),
(281, '11', '', '2.3', 'Tandu', '1'),
(282, '11', '', '2.4', 'Selimut', '1'),
(283, '11', '', '2.5', 'Tensimeter', '1'),
(284, '11', '', '2.6', 'Termometer badan', '1'),
(285, '11', '', '2.7', 'Timbangan badan', '1'),
(286, '11', '', '2.8', 'Pengukur tinggi badan', '1'),
(287, '11', '', '2.9', 'Tempat sampah', '1'),
(288, '11', '', '2.10', 'Tempat cuci tangan', '1'),
(289, '11', '', '2.11', 'Jam dinding', '1'),
(290, '12', '', '1.1', 'Meja', '1'),
(291, '12', '', '1.2', 'Kursi', '1'),
(292, '12', '', '1.3', 'Papan tulis', '1'),
(293, '12', '', '1.4', 'Lemari', '1'),
(294, '12', '', '2.1', 'Jam dinding', '1'),
(295, '13', '', '1.1', 'Kloset jongkok', '1'),
(296, '13', '', '1.2', 'Tempat air', '1'),
(297, '13', '', '1.3', 'Gayung', '1'),
(298, '13', '', '1.4', 'Gantungan pakaian', '1'),
(299, '13', '', '1.5', 'Tempat sampah', '1'),
(300, '14', '', '1.1', 'Lemari', '1'),
(301, '14', '', '1.2', 'Rak', '1'),
(305, '7', '', '1.1', 'Meja Guru', '1'),
(306, '7', '', '1.2', 'Kursi Guru', '1'),
(307, '7', '', '2.1', 'Meja Siswa', '1'),
(308, '7', '', '2.2', 'Kursi Siswa', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_snplab`
--

CREATE TABLE `tb_snplab` (
  `id_` int(11) NOT NULL,
  `detailRuang` enum('1','2','3','4','5','6') NOT NULL COMMENT '1 = Bio, 2 = Kim, 3 = Fis, 4 = Bhs, 5 = Komp, 6 = IPS',
  `namaDetail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_usulan`
--

CREATE TABLE `tb_usulan` (
  `id_` int(11) NOT NULL,
  `id_pengusul` varchar(40) NOT NULL,
  `namaBarang` text NOT NULL,
  `jmlBarang` varchar(12) NOT NULL,
  `kiraHarga` varchar(15) NOT NULL,
  `jmlHarga` varchar(15) NOT NULL,
  `keperluan` text NOT NULL,
  `status` enum('1','2','3','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_wakalist`
--

CREATE TABLE `tb_wakalist` (
  `id_` int(11) NOT NULL,
  `namaJabatan` varchar(50) NOT NULL,
  `id_waka` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wakalist`
--

INSERT INTO `tb_wakalist` (`id_`, `namaJabatan`, `id_waka`) VALUES
(1, 'Waka Kurikulum', '1'),
(2, 'Waka Kesiswaan', '2'),
(3, 'Waka Sarpras', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_datarekap`
--
ALTER TABLE `tb_datarekap`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `tb_listruang`
--
ALTER TABLE `tb_listruang`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `tb_obrolan`
--
ALTER TABLE `tb_obrolan`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_`),
  ADD UNIQUE KEY `kodeKelas` (`kodeRuang`);

--
-- Indexes for table `tb_snp`
--
ALTER TABLE `tb_snp`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `tb_snplab`
--
ALTER TABLE `tb_snplab`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `tb_usulan`
--
ALTER TABLE `tb_usulan`
  ADD PRIMARY KEY (`id_`);

--
-- Indexes for table `tb_wakalist`
--
ALTER TABLE `tb_wakalist`
  ADD PRIMARY KEY (`id_`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_datarekap`
--
ALTER TABLE `tb_datarekap`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `tb_listruang`
--
ALTER TABLE `tb_listruang`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_obrolan`
--
ALTER TABLE `tb_obrolan`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_snp`
--
ALTER TABLE `tb_snp`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT for table `tb_snplab`
--
ALTER TABLE `tb_snplab`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_usulan`
--
ALTER TABLE `tb_usulan`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_wakalist`
--
ALTER TABLE `tb_wakalist`
  MODIFY `id_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
