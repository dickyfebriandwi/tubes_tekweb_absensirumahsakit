-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 10:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `tipe_akun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `nama`, `alamat`, `no_tlp`, `jabatan`, `tipe_akun`) VALUES
(1, 'admin', 'admin', 'admin', 'jalan admin', '0899999999', 'kepala', 'admin'),
(2, 'dicky', 'dicky', 'Dicky Febrian ', 'Jalan Cimahi', '089635738533', 'perawat', 'pegawai'),
(4, 'anissa', 'anissa', 'anissa azhari', 'cianjur', '0242485252', 'perawat', 'pegawai'),
(5, 'rahmat', 'rahmat', 'rahmat muhamad ramdani', 'cimahi', '0638493122', 'dokter', 'pegawai'),
(6, 'dani', 'dani', 'M Dani', 'Riau', '098098242', 'apoteker', 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `catatan_keluar`
--

CREATE TABLE `catatan_keluar` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `waktu_keluar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatan_keluar`
--

INSERT INTO `catatan_keluar` (`id`, `username`, `waktu_keluar`) VALUES
(1, 'dicky', '01/07/2021 07:29:21'),
(2, 'dicky', '01/07/2021 08:38:57'),
(4, 'admin', '01/07/2021 10:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `catatan_masuk`
--

CREATE TABLE `catatan_masuk` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `waktu_masuk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatan_masuk`
--

INSERT INTO `catatan_masuk` (`id`, `username`, `waktu_masuk`) VALUES
(3, 'dicky', '01/07/2021 07:26:46'),
(4, 'dicky', '01/07/2021 08:37:58'),
(5, 'admin', '01/07/2021 09:14:26'),
(6, 'admin', '01/07/2021 09:14:49'),
(9, 'admin', '01/07/2021 10:19:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `catatan_keluar`
--
ALTER TABLE `catatan_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `catatan_masuk`
--
ALTER TABLE `catatan_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `username_2` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `catatan_keluar`
--
ALTER TABLE `catatan_keluar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catatan_masuk`
--
ALTER TABLE `catatan_masuk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatan_keluar`
--
ALTER TABLE `catatan_keluar`
  ADD CONSTRAINT `catatan_keluar_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `catatan_masuk`
--
ALTER TABLE `catatan_masuk`
  ADD CONSTRAINT `catatan_masuk_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
