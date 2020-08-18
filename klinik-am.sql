-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 06:36 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `klinik-am`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(1) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tlp` varchar(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `jk`, `alamat`, `tlp`) VALUES
(1, 'Rekha Azzah Dzakiyyah', 'Perempuan', 'Perumahan Patraland place B3-5', '082233944675'),
(2, 'Ario Ramadani', 'Laki-Laki', 'Jl Cakalang 1 No 18', '089344567123');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE IF NOT EXISTS `antrian` (
`id_antrian` int(5) NOT NULL,
  `id_pasien` int(5) NOT NULL,
  `id_dokter` int(1) NOT NULL,
  `nomor` int(2) NOT NULL,
  `tgl` date NOT NULL,
  `pukul` time NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `id_pasien`, `id_dokter`, `nomor`, `tgl`, `pukul`, `status`) VALUES
(30, 7, 7, 1, '2020-07-13', '17:00:00', 'Sudah dilayani');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
`id_dokter` int(1) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tlp` varchar(14) NOT NULL,
  `spesialis` varchar(17) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `tgl_lahir`, `jk`, `alamat`, `tlp`, `spesialis`) VALUES
(7, 'dr. Arini Hapsari', '1988-07-14', 'Perempuan', 'Jl. Perum Mondoroko Kav 12', '081234555121', 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id_jadwal` int(1) NOT NULL,
  `id_dokter` int(1) NOT NULL,
  `hari` varchar(6) NOT NULL,
  `tgl` date NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_dokter`, `hari`, `tgl`, `jam_awal`, `jam_akhir`) VALUES
(28, 7, 'Senin', '2020-07-13', '17:00:00', '20:00:00'),
(29, 7, 'Selasa', '2020-07-14', '17:00:00', '20:00:00'),
(30, 7, 'Rabu', '2020-07-15', '17:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
`id` int(1) NOT NULL,
  `level_name` varchar(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `level_name`) VALUES
(1, 'Pasien'),
(2, 'Admin'),
(3, 'Dokter');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
`id_pasien` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `tlp` varchar(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `tgl_lahir`, `jk`, `alamat`, `pekerjaan`, `tlp`) VALUES
(1, 'Dita Fahara', '1998-12-03', 'Perempuan', 'jl ikan tombro timur no 8', 'mahasiswa', '081231193554'),
(2, 'Nabila Putri Amalia', '2003-09-13', 'Perempuan', 'perumahan Patraland Place Blok B3/5', 'pelajar', '085648584599'),
(3, 'Vivi Ria Arista', '1993-11-09', 'Perempuan', 'Jl. Ikan Piranha Atas No 264C', 'pegawai swasta', '085755474316'),
(4, 'Nurus Laily A', '2000-04-08', 'Perempuan', 'jl ikan tombro timur rt 04 rw 04 kel tunjungsekar ', 'mahasiswa', '08816254736'),
(5, 'Junita Ambarsari', '1990-06-16', 'Perempuan', 'Jl. Arimbi Timur 12', 'Pegawai Swasta', '083848826121'),
(6, 'Mul', '1990-06-12', 'Laki-Laki', 'a', 'b', '124543'),
(7, 'Sania Ika Putri', '1999-09-09', 'Perempuan', 'Jl. Oro Oro Dowo Gg 13', 'Pramuniaga Toko', '089766890911');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
`id_medis` int(5) NOT NULL,
  `id_pasien` int(5) NOT NULL,
  `id_antrian` int(5) NOT NULL,
  `id_dokter` int(1) NOT NULL,
  `tgl` date NOT NULL,
  `tekanan_darah` varchar(6) NOT NULL,
  `tb` int(2) NOT NULL,
  `bb` int(2) NOT NULL,
  `gejala` varchar(50) NOT NULL,
  `objek` varchar(30) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_medis`, `id_pasien`, `id_antrian`, `id_dokter`, `tgl`, `tekanan_darah`, `tb`, `bb`, `gejala`, `objek`, `diagnosa`, `tindakan`) VALUES
(7, 7, 30, 7, '2020-07-13', '100/90', 158, 50, 'Batuk Berdahak', 'Tenggorokan ', ' Alergi dengan debu', 'Therapy air hangat dan obat paratusin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(5) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `level` int(1) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `password`, `level`, `status`) VALUES
(3, 'Admin', 'Admin', 2, 'Aktif'),
(4, 'Dita Fahara', '123', 1, 'Aktif'),
(5, 'Rekha azzah', '123', 2, 'Aktif'),
(6, 'Nabila Putri Amalia', '123', 1, 'Aktif'),
(7, 'Vivi Ria Arista', '123', 1, 'Aktif'),
(8, 'Nurus Laily A', '123', 1, 'Aktif'),
(28, 'Junita Ambarsari', '123', 1, 'Aktif'),
(35, 'coba', '123', 3, 'Aktif'),
(37, 'Sania Ika Putri', '123', 1, 'Aktif'),
(38, 'dr. Arini Hapsari', '123', 3, 'Aktif'),
(39, 'Ario Ramadani', '123', 2, 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
 ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
 ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
 ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
 ADD PRIMARY KEY (`id_medis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
MODIFY `id_antrian` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
MODIFY `id_dokter` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id_jadwal` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
MODIFY `id_pasien` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
MODIFY `id_medis` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
