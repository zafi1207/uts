-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 07:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `210040018_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen_pelatihan`
--

CREATE TABLE `absen_pelatihan` (
  `nama_mahasiswa` varchar(75) NOT NULL,
  `nim` char(9) NOT NULL,
  `tanggal` date NOT NULL,
  `unit` char(15) NOT NULL,
  `bukti_hadir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen_pelatihan`
--

INSERT INTO `absen_pelatihan` (`nama_mahasiswa`, `nim`, `tanggal`, `unit`, `bukti_hadir`) VALUES
('Sinlan Kathina Maharani', '210040130', '2023-05-02', 'H', 'halo');

-- --------------------------------------------------------

--
-- Table structure for table `bayarkas`
--

CREATE TABLE `bayarkas` (
  `nama_mahasiswa` varchar(75) NOT NULL,
  `nim` char(9) NOT NULL,
  `bulan` char(9) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `bukti_transaksi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bayarkas`
--

INSERT INTO `bayarkas` (`nama_mahasiswa`, `nim`, `bulan`, `tanggal_bayar`, `bukti_transaksi`) VALUES
('Nuridzafi Rhatu Mahani', '210040018', 'May', '2023-05-04', 'May');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` char(9) NOT NULL,
  `Nama` varchar(75) NOT NULL,
  `Jurusan` char(3) NOT NULL,
  `Gender` int(10) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `Nohp` varchar(15) NOT NULL,
  `Email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `Jurusan`, `Gender`, `Alamat`, `Nohp`, `Email`) VALUES
('210040018', 'Nuridzafi Rhatu Mahani', 'TI', 2, 'Jl. Padang Gajah Gg. Beji No.10', '083674489469', 'gusta@dxxth.ml');

-- --------------------------------------------------------

--
-- Table structure for table `partisipasi_event`
--

CREATE TABLE `partisipasi_event` (
  `nama_mahasiswa` varchar(75) NOT NULL,
  `nim` char(9) NOT NULL,
  `angkatan` char(2) NOT NULL,
  `event` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partisipasi_event`
--

INSERT INTO `partisipasi_event` (`nama_mahasiswa`, `nim`, `angkatan`, `event`) VALUES
('Sinlan Kathina Maharani', '210040130', '21', 'OVERPROUD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
