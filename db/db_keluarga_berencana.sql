-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 10:40 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_keluarga_berencana`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_kontrasepsi`
--

CREATE TABLE `list_kontrasepsi` (
  `Id_Kontrasepsi` int(10) NOT NULL,
  `Nama_Kontrasepsi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_kontrasepsi`
--

INSERT INTO `list_kontrasepsi` (`Id_Kontrasepsi`, `Nama_Kontrasepsi`) VALUES
(4, 'Pil KB'),
(5, 'Kondom');

-- --------------------------------------------------------

--
-- Table structure for table `list_pemakai_kontrasepsi`
--

CREATE TABLE `list_pemakai_kontrasepsi` (
  `Id_List` int(11) NOT NULL,
  `Id_Propinsi` int(10) DEFAULT NULL,
  `Id_Kontrasepsi` int(10) DEFAULT NULL,
  `Jumlah_Pemakai` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_pemakai_kontrasepsi`
--

INSERT INTO `list_pemakai_kontrasepsi` (`Id_List`, `Id_Propinsi`, `Id_Kontrasepsi`, `Jumlah_Pemakai`) VALUES
(9, 7, 4, 58),
(10, 9, 5, 13),
(11, 7, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `list_provinsi`
--

CREATE TABLE `list_provinsi` (
  `Id_Propinsi` int(10) NOT NULL,
  `Nama_Propinsi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_provinsi`
--

INSERT INTO `list_provinsi` (`Id_Propinsi`, `Nama_Propinsi`) VALUES
(7, 'Aceh1'),
(8, 'Acehsdsad'),
(9, 'Sumbar'),
(10, 'Jabar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_kontrasepsi`
--
ALTER TABLE `list_kontrasepsi`
  ADD PRIMARY KEY (`Id_Kontrasepsi`);

--
-- Indexes for table `list_pemakai_kontrasepsi`
--
ALTER TABLE `list_pemakai_kontrasepsi`
  ADD PRIMARY KEY (`Id_List`),
  ADD KEY `Id_Propinsi` (`Id_Propinsi`),
  ADD KEY `Id_Kontrasepsi` (`Id_Kontrasepsi`);

--
-- Indexes for table `list_provinsi`
--
ALTER TABLE `list_provinsi`
  ADD PRIMARY KEY (`Id_Propinsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_kontrasepsi`
--
ALTER TABLE `list_kontrasepsi`
  MODIFY `Id_Kontrasepsi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `list_pemakai_kontrasepsi`
--
ALTER TABLE `list_pemakai_kontrasepsi`
  MODIFY `Id_List` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `list_provinsi`
--
ALTER TABLE `list_provinsi`
  MODIFY `Id_Propinsi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `list_pemakai_kontrasepsi`
--
ALTER TABLE `list_pemakai_kontrasepsi`
  ADD CONSTRAINT `list_pemakai_kontrasepsi_ibfk_1` FOREIGN KEY (`Id_Propinsi`) REFERENCES `list_provinsi` (`Id_Propinsi`),
  ADD CONSTRAINT `list_pemakai_kontrasepsi_ibfk_2` FOREIGN KEY (`Id_Kontrasepsi`) REFERENCES `list_kontrasepsi` (`Id_Kontrasepsi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
