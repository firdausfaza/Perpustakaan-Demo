-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 05:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `password_admin` varchar(20) NOT NULL,
  `status_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id_admin`, `nama_admin`, `password_admin`, `status_admin`) VALUES
(2, 'faza', 'faza', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbanggota`
--

CREATE TABLE `tbanggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `foto_ktp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbanggota`
--

INSERT INTO `tbanggota` (`id_anggota`, `nama_anggota`, `alamat`, `no_telp`, `foto_ktp`) VALUES
(15, 'Firdaus Aulia Faza', 'Sukoharjo', '081327949511', 'Firdaus Aulia Faza.jpg'),
(16, 'Resky Budi Nugroho', 'Sragen ', '08281781723', 'Resky Budi Nugroho.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbbuku`
--

CREATE TABLE `tbbuku` (
  `isbn` int(20) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `stok` int(11) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `ib` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbuku`
--

INSERT INTO `tbbuku` (`isbn`, `judul_buku`, `pengarang`, `tahun_terbit`, `stok`, `foto`, `ib`) VALUES
(1, 'Sultan Muhammad Al-Fatih', 'Mulkul Farisa Nalva', '2015', 1, '1.jpg', '9786237046790'),
(2, 'Berani Tidak Disukai', 'Ichiro Kisimi', '2019', 2, '2.jpg', '9786020633213'),
(3, 'Tak Mungkin Membuat Semua Orang Senang', 'Jeong Moon Jeong', '2019', 2, '3.jpg', '9786020628899'),
(4, 'Failure', 'Greatmind', '2020', 11, '4.jpg', '9786020647074'),
(9, 'asa', 'sasaas', '112', 12, '.jpg', '2121');

-- --------------------------------------------------------

--
-- Table structure for table `tbpeminjaman`
--

CREATE TABLE `tbpeminjaman` (
  `id_pinjam` varchar(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `isbn` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpeminjaman`
--

INSERT INTO `tbpeminjaman` (`id_pinjam`, `tgl_pinjam`, `isbn`, `tgl_kembali`, `id_anggota`, `status`) VALUES
('P202012160002', '2020-12-16', 3, '2020-12-16', 15, 'Pinjam');

-- --------------------------------------------------------

--
-- Table structure for table `tbpengembalian`
--

CREATE TABLE `tbpengembalian` (
  `id_kembali` varchar(20) NOT NULL,
  `id_pinjam` varchar(20) NOT NULL,
  `tgl_kembali_aktual` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbanggota`
--
ALTER TABLE `tbanggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tbbuku`
--
ALTER TABLE `tbbuku`
  ADD PRIMARY KEY (`isbn`);

--
-- Indexes for table `tbpeminjaman`
--
ALTER TABLE `tbpeminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tbpengembalian`
--
ALTER TABLE `tbpengembalian`
  ADD PRIMARY KEY (`id_kembali`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbanggota`
--
ALTER TABLE `tbanggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbbuku`
--
ALTER TABLE `tbbuku`
  MODIFY `isbn` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
