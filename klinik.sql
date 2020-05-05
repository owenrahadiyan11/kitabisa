-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 07:11 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `klinik`
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `jk`, `alamat`, `tlp`) VALUES
(1, 'Satrio ', 'Perempuan', 'Jl. LA Sucipto gang 2', '08878895243');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE IF NOT EXISTS `antrian` (
`id_antrian` int(3) NOT NULL,
  `id_pasien` int(5) NOT NULL,
  `nomor` int(2) NOT NULL,
  `tgl` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `id_pasien`, `nomor`, `tgl`, `status`) VALUES
(1, 2, 1, '2020-04-15', 'Belum dilayani'),
(2, 2, 1, '2020-04-21', 'Sudah dilayani'),
(3, 4, 1, '2020-04-14', 'Belum dilayani'),
(4, 1, 3, '2020-04-22', 'Sudah dilayani'),
(5, 1, 2, '2020-04-24', 'Sudah dilayani'),
(21, 4, 1, '2020-04-24', 'Sudah dilayani'),
(22, 1, 1, '2020-05-04', 'Belum dilayani'),
(23, 1, 1, '2020-05-04', 'Belum dilayani');

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
  `spesialis` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `tgl_lahir`, `jk`, `alamat`, `tlp`, `spesialis`) VALUES
(1, 'dr. Wahyu Wijiati', '1988-11-13', 'Perempuan', 'Jl. Pandean', '08256555888', 'Umum'),
(2, 'dr. Arini Hapsari', '1991-07-28', 'Perempuan', 'Jl. Patimura 19 Blok A', '08125555987', 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id_jadwal` int(1) NOT NULL,
  `id_dokter` int(1) NOT NULL,
  `hari` varchar(6) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_akhir` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_dokter`, `hari`, `jam_awal`, `jam_akhir`) VALUES
(14, 1, 'Senin', '12:00:00', '20:00:00'),
(15, 1, 'Selasa', '12:00:00', '20:00:00'),
(16, 1, 'Rabu', '12:00:00', '20:00:00'),
(17, 1, 'Minggu', '08:00:00', '14:00:00'),
(18, 2, 'Kamis', '12:00:00', '20:00:00'),
(19, 2, 'Jumat', '12:00:00', '20:00:00'),
(20, 2, 'Sabtu', '12:00:00', '20:00:00'),
(21, 2, 'Minggu', '15:00:00', '20:00:00');

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
(1, 'User'),
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
  `pekerjaan` varchar(15) NOT NULL,
  `tlp` varchar(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `tgl_lahir`, `jk`, `alamat`, `pekerjaan`, `tlp`) VALUES
(1, 'Risky Adi Sulistyo', '1988-02-12', 'Laki-laki', 'Jl. Ikan Piranha Atas No 264C', 'Pegawai Swasta', '082345876666'),
(2, 'Vivi Ria Arista', '1993-11-09', 'PEREMPUAN', 'PIRANHA ATAS', 'KARYAWAN SWASTA', '085755474316'),
(4, 'Muhammad Febrian Pratama', '2015-02-26', 'Laki-Laki', 'Jl. Permata Asih 26 Blok A', 'PNS', '0833112311');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
`id_medis` int(5) NOT NULL,
  `id_pasien` int(5) NOT NULL,
  `id_dokter` int(1) NOT NULL,
  `tgl` date NOT NULL,
  `tekanan_darah` varchar(6) NOT NULL,
  `tb` int(2) NOT NULL,
  `bb` int(2) NOT NULL,
  `gejala` varchar(50) NOT NULL,
  `objek` varchar(30) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `tindakan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_medis`, `id_pasien`, `id_dokter`, `tgl`, `tekanan_darah`, `tb`, `bb`, `gejala`, `objek`, `diagnosa`, `tindakan`) VALUES
(1, 4, 1, '2020-04-24', '80/100', 90, 26, 'batupil', 'Kepala ', ' demam', ' paracetamol'),
(3, 1, 2, '2020-04-24', '110/90', 180, 88, 'Telinga mendengung, demam 38C', 'Kepala', ' a', ' b');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `password`, `level`, `status`) VALUES
(1, 'Risky Adi Sulistyo', '123', 1, 'Aktif'),
(2, 'Ario Ramadani', '123', 2, 'Tidak Aktif'),
(3, 'Owen Rahadiyan', '123', 2, 'Aktif'),
(4, 'dr. Arini Hapsari', '123', 3, 'Aktif');

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
MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
MODIFY `id_antrian` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
MODIFY `id_dokter` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id_jadwal` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
MODIFY `id_pasien` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
MODIFY `id_medis` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
