-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 03:01 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-penentu-jurusan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `smp` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id`, `nama`, `alamat`, `smp`, `tgl_lahir`, `jk`, `agama`) VALUES
('1290878765', 'denis', 'Semarang', 'smpn 1 jakarta', '2006-06-07', 'L', 'islam');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `mtk` int(2) DEFAULT NULL,
  `biologi` int(2) DEFAULT NULL,
  `fisika` int(2) DEFAULT NULL,
  `sejarah` int(2) DEFAULT NULL,
  `geografi` int(2) DEFAULT NULL,
  `bi` int(2) DEFAULT NULL,
  `jurusan` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `nisn` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `mtk`, `biologi`, `fisika`, `sejarah`, `geografi`, `bi`, `jurusan`, `tanggal`, `nisn`) VALUES
(32, 70, 80, 90, 40, 50, 30, 'IPA', '2018-06-05', '1290878765');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nisn` (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `data_diri` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
