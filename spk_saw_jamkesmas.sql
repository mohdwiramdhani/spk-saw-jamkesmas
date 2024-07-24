-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 11:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_saw_jamkesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_alternatif`, `nama`) VALUES
('A1', 'Aco'),
('A2', 'Fajar'),
('A3', 'Nashar'),
('A4', 'Fauzan'),
('A5', 'Rizal'),
('A6', 'Yunus');

--
-- Triggers `tb_alternatif`
--
DELIMITER $$
CREATE TRIGGER `update` AFTER UPDATE ON `tb_alternatif` FOR EACH ROW UPDATE tb_penilaian SET stambuk=new.stambuk,nama=new.nama WHERE stambuk=old.stambuk
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteriasaw`
--

CREATE TABLE `tb_kriteriasaw` (
  `no` int(11) NOT NULL,
  `sumber` float NOT NULL,
  `lantai` float NOT NULL,
  `dinding` float NOT NULL,
  `jak` float NOT NULL,
  `luas` float NOT NULL,
  `bahan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteriasaw`
--

INSERT INTO `tb_kriteriasaw` (`no`, `sumber`, `lantai`, `dinding`, `jak`, `luas`, `bahan`) VALUES
(7, 0.25, 0.1, 0.15, 0.15, 0.2, 0.15);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_alternatif` varchar(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `sumber` float NOT NULL,
  `lantai` float NOT NULL,
  `dinding` float NOT NULL,
  `jak` float NOT NULL,
  `luas` float NOT NULL,
  `bahan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_alternatif`, `nama`, `sumber`, `lantai`, `dinding`, `jak`, `luas`, `bahan`) VALUES
('A1', 'Aco', 1, 1, 2, 7, 90, 2),
('A2', 'Fajar', 3, 2, 3, 3, 80, 4),
('A3', 'Nashar', 2, 4, 2, 4, 50, 3),
('A4', 'Fauzan', 2, 3, 4, 3, 55, 4),
('A5', 'Rizal', 1, 2, 1, 5, 70, 1),
('A6', 'Yunus', 2, 1, 3, 4, 75, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ranking`
--

CREATE TABLE `tb_ranking` (
  `no` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `nilai_akhir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ranking`
--

INSERT INTO `tb_ranking` (`no`, `nama`, `nilai_akhir`) VALUES
(1, 'Rizal', 0.458),
(2, 'Aco', 0.519),
(3, 'Yunus', 0.598),
(4, 'Fajar', 0.752),
(5, 'Nashar', 0.74),
(6, 'Fauzan', 0.788),
(7, 'Rizal', 0.458),
(8, 'Yunus', 0.598);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tb_kriteriasaw`
--
ALTER TABLE `tb_kriteriasaw`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tb_ranking`
--
ALTER TABLE `tb_ranking`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kriteriasaw`
--
ALTER TABLE `tb_kriteriasaw`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_ranking`
--
ALTER TABLE `tb_ranking`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
