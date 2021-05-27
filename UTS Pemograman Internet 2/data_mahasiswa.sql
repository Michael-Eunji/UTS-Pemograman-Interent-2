-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 06:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbll_ab`
--

CREATE TABLE `tbll_ab` (
  `ID_Absen` varchar(20) NOT NULL,
  `Tgl_Absen` varchar(20) NOT NULL,
  `Masuk` varchar(20) NOT NULL,
  `Keluar` varchar(20) NOT NULL,
  `KodeDosen` varchar(20) NOT NULL,
  `Sesi` varchar(20) NOT NULL,
  `KelasSesi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbll_ab`
--

INSERT INTO `tbll_ab` (`ID_Absen`, `Tgl_Absen`, `Masuk`, `Keluar`, `KodeDosen`, `Sesi`, `KelasSesi`) VALUES
('12345', '5 Januari', '10.00', '12.00', '56789', 'A', 'Pertama');

-- --------------------------------------------------------

--
-- Table structure for table `tbll_dosen`
--

CREATE TABLE `tbll_dosen` (
  `kodedosen` varchar(20) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `nipy` varchar(20) NOT NULL,
  `namadosen` varchar(20) NOT NULL,
  `kodeprodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbll_dosen`
--

INSERT INTO `tbll_dosen` (`kodedosen`, `nidn`, `nipy`, `namadosen`, `kodeprodi`) VALUES
('56789', '081234', '012431', 'amir', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jdwl`
--

CREATE TABLE `tbl_jdwl` (
  `id` varchar(20) NOT NULL,
  `jadwalid` varchar(20) NOT NULL,
  `kodedosen` varchar(20) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `thnakademik` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `kodemk` varchar(20) NOT NULL,
  `sesi` varchar(20) NOT NULL,
  `jammasuk` varchar(20) NOT NULL,
  `jamkeluar` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `ruang` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `kelassesi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jdwl`
--

INSERT INTO `tbl_jdwl` (`id`, `jadwalid`, `kodedosen`, `hari`, `thnakademik`, `semester`, `kodemk`, `sesi`, `jammasuk`, `jamkeluar`, `kelas`, `ruang`, `status`, `kelassesi`) VALUES
('123456789', '1289', '56789', 'Senin', '2014', '4', '7432', 'A', '10,00', '12.00', 'SI Enterprise', 'Lab Komputer', 'Aktif', 'Pertama');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `kodemk` varchar(20) NOT NULL,
  `namamk` varchar(20) NOT NULL,
  `sks` varchar(20) NOT NULL,
  `smt` varchar(20) NOT NULL,
  `kodeprodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`kodemk`, `namamk`, `sks`, `smt`, `kodeprodi`) VALUES
('7432', 'Pemograman Internet', '4', '4', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prodi`
--

CREATE TABLE `tbl_prodi` (
  `kodeprodi` varchar(20) NOT NULL,
  `namaprodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prodi`
--

INSERT INTO `tbl_prodi` (`kodeprodi`, `namaprodi`) VALUES
('12345', 'SI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbll_ab`
--
ALTER TABLE `tbll_ab`
  ADD PRIMARY KEY (`ID_Absen`),
  ADD UNIQUE KEY `KodeDosen` (`KodeDosen`);

--
-- Indexes for table `tbll_dosen`
--
ALTER TABLE `tbll_dosen`
  ADD PRIMARY KEY (`kodedosen`);

--
-- Indexes for table `tbl_jdwl`
--
ALTER TABLE `tbl_jdwl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kodemk` (`kodemk`);

--
-- Indexes for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`kodemk`),
  ADD UNIQUE KEY `kodeprodi` (`kodeprodi`);

--
-- Indexes for table `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  ADD PRIMARY KEY (`kodeprodi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbll_ab`
--
ALTER TABLE `tbll_ab`
  ADD CONSTRAINT `tbll_ab_ibfk_1` FOREIGN KEY (`KodeDosen`) REFERENCES `tbl_dosen` (`kodedosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
