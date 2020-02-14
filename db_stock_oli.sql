-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2020 at 12:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_stock_oli`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ahm`
--

CREATE TABLE `tbl_ahm` (
  `no` int(10) NOT NULL,
  `sisa` int(10) NOT NULL,
  `oli_masuk` int(10) NOT NULL,
  `oli_keluar` int(10) NOT NULL,
  `selisih` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ahm`
--

INSERT INTO `tbl_ahm` (`no`, `sisa`, `oli_masuk`, `oli_keluar`, `selisih`) VALUES
(2, 5, 20, 18, 7),
(3, 20, 18, 25, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_castrol`
--

CREATE TABLE `tbl_castrol` (
  `no` int(10) NOT NULL,
  `sisa` int(10) NOT NULL,
  `oli_masuk` int(10) NOT NULL,
  `oli_keluar` int(10) NOT NULL,
  `selisih` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_castrol`
--

INSERT INTO `tbl_castrol` (`no`, `sisa`, `oli_masuk`, `oli_keluar`, `selisih`) VALUES
(2, 10, 15, 12, 13),
(3, 17, 5, 10, 12),
(4, 20, 15, 25, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enduro`
--

CREATE TABLE `tbl_enduro` (
  `no` int(10) NOT NULL,
  `sisa` int(10) NOT NULL,
  `oli_masuk` int(10) NOT NULL,
  `oli_keluar` int(10) NOT NULL,
  `selisih` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_enduro`
--

INSERT INTO `tbl_enduro` (`no`, `sisa`, `oli_masuk`, `oli_keluar`, `selisih`) VALUES
(1, 15, 7, 10, 12),
(2, 20, 15, 10, 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_evalube`
--

CREATE TABLE `tbl_evalube` (
  `no` int(10) NOT NULL,
  `sisa` int(10) NOT NULL,
  `oli_masuk` int(10) NOT NULL,
  `oli_keluar` int(10) NOT NULL,
  `selisih` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_evalube`
--

INSERT INTO `tbl_evalube` (`no`, `sisa`, `oli_masuk`, `oli_keluar`, `selisih`) VALUES
(6, 10, 2, 5, 7),
(7, 7, 8, 5, 10),
(9, 9, 3, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_federal`
--

CREATE TABLE `tbl_federal` (
  `no` int(10) NOT NULL,
  `sisa` int(10) NOT NULL,
  `oli_masuk` int(10) NOT NULL,
  `oli_keluar` int(10) NOT NULL,
  `selisih` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_federal`
--

INSERT INTO `tbl_federal` (`no`, `sisa`, `oli_masuk`, `oli_keluar`, `selisih`) VALUES
(3, 15, 5, 8, 12),
(4, 2, 15, 7, 10),
(5, 15, 3, 4, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `no` int(10) NOT NULL,
  `nik` int(20) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`no`, `nik`, `nama_lengkap`, `alamat`, `email`, `jabatan`) VALUES
(1, 2147345355, 'Agung Prasetio', 'Dusun VII Desa Tanjung Alam', 'agungprasetio@gmail.com', 'Supervisor'),
(2, 1213144434, 'Sri Rafika Dewi', 'Mutiara', 'srirafikadewi@gmail.com', 'Manager'),
(4, 2147483647, 'Ivan Samuel', 'sentang', 'ivansamuel@gmail.com', 'marketing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mesran`
--

CREATE TABLE `tbl_mesran` (
  `no` int(10) NOT NULL,
  `sisa` int(10) NOT NULL,
  `oli_masuk` int(10) NOT NULL,
  `oli_keluar` int(10) NOT NULL,
  `selisih` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mesran`
--

INSERT INTO `tbl_mesran` (`no`, `sisa`, `oli_masuk`, `oli_keluar`, `selisih`) VALUES
(2, 8, 20, 15, 13),
(3, 20, 14, 30, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_oli`
--

CREATE TABLE `tbl_stock_oli` (
  `no` int(10) NOT NULL,
  `id_oli` int(15) NOT NULL,
  `jenis_oli` varchar(15) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock_oli`
--

INSERT INTO `tbl_stock_oli` (`no`, `id_oli`, `jenis_oli`, `merk`, `harga`) VALUES
(1, 101, 'Evalube', '800ml', 'Rp.30.000'),
(2, 102, 'Federal', '400ml', 'Rp.25.000'),
(3, 103, 'Mesran', '800ml', 'Rp.50.000'),
(4, 104, 'AHM Oil', '1000ml', 'Rp.80.000'),
(5, 105, 'Enduro', '400ml', 'Rp.60.000'),
(6, 106, 'Castrol', '400ml', 'Rp.30.000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id nama` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `level` int(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id nama`, `username`, `nama_lengkap`, `level`, `password`, `email`, `keterangan`) VALUES
(1, 'Agung', 'Agung Prasetio', 1, '827ccb0eea8a706c4c34a16891f84e7b', 'agungprasetio@gmail.com', 'admin'),
(2, 'ivan', 'ivan samuel', 2, '827ccb0eea8a706c4c34a16891f84e7b', 'ivansamuel@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_ahm`
--
ALTER TABLE `tbl_ahm`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_castrol`
--
ALTER TABLE `tbl_castrol`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_enduro`
--
ALTER TABLE `tbl_enduro`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_evalube`
--
ALTER TABLE `tbl_evalube`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_federal`
--
ALTER TABLE `tbl_federal`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_mesran`
--
ALTER TABLE `tbl_mesran`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_stock_oli`
--
ALTER TABLE `tbl_stock_oli`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_ahm`
--
ALTER TABLE `tbl_ahm`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_castrol`
--
ALTER TABLE `tbl_castrol`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_enduro`
--
ALTER TABLE `tbl_enduro`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_evalube`
--
ALTER TABLE `tbl_evalube`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_federal`
--
ALTER TABLE `tbl_federal`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_mesran`
--
ALTER TABLE `tbl_mesran`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_stock_oli`
--
ALTER TABLE `tbl_stock_oli`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
