-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 09:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkarimbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'superadmin', '$2y$10$Wp1pzYbPaD4pSR5x2vI6.ujN9x9tif4D0a/adC.6QhQzk1gjAObRm');

-- --------------------------------------------------------

--
-- Table structure for table `tbguru`
--

CREATE TABLE `tbguru` (
  `nig` varchar(11) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `password_guru` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbguru`
--

INSERT INTO `tbguru` (`nig`, `nama_guru`, `password_guru`) VALUES
('0948565', 'Kagos M.Kom', '$2y$10$PsnVT.vuC13KMzpKNJmDuef6hn4qMKSW8O7zy.ylysCWCC92g7ID2'),
('0948589', 'Hartono S.Kom', '$2y$10$PsnVT.vuC13KMzpKNJmDuef6hn4qMKSW8O7zy.ylysCWCC92g7ID2'),
('0948590', 'Jayadi S.pd', '$2y$10$PsnVT.vuC13KMzpKNJmDuef6hn4qMKSW8O7zy.ylysCWCC92g7ID2'),
('0948591', 'Sasa S.pd', '$2y$10$PsnVT.vuC13KMzpKNJmDuef6hn4qMKSW8O7zy.ylysCWCC92g7ID2');

-- --------------------------------------------------------

--
-- Table structure for table `tbmapel`
--

CREATE TABLE `tbmapel` (
  `kode` varchar(11) NOT NULL,
  `kelas` int(11) NOT NULL,
  `mata_pelajaran` varchar(255) NOT NULL,
  `nig` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbmapel`
--

INSERT INTO `tbmapel` (`kode`, `kelas`, `mata_pelajaran`, `nig`) VALUES
('JRG-1', 1, 'Jaringan', '0948589'),
('JRG-2', 2, 'Jaringan', '0948565'),
('JRG-3', 3, 'Jaringan', '0948565'),
('MTK-1', 1, 'Matematika', '0948590'),
('PKN-1', 1, 'Pendidikan Kewarganegaraan', '0948590'),
('PKN-2', 2, 'Pendidikan Kewarganegaraan', '0948590'),
('PKN-3', 3, 'Pendidikan Kewarganegaraan', '0948591'),
('RPL-1', 1, 'RPL', '0948589'),
('RPL-2', 2, 'RPL', '0948565'),
('RPL-3', 3, 'RPL', '0948589');

-- --------------------------------------------------------

--
-- Table structure for table `tbmurid`
--

CREATE TABLE `tbmurid` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbmurid`
--

INSERT INTO `tbmurid` (`nis`, `nama`, `tanggal_lahir`, `alamat`, `nama_ortu`, `no_telepon`, `password`) VALUES
('202253049', 'Gutti Zaidan Syauqi', '2024-04-02', 'Getas Pejaten', 'Bapak Yono', '098743234567890', '$2y$10$PsnVT.vuC13KMzpKNJmDuef6hn4qMKSW8O7zy.ylysCWCC92g7ID2'),
('202253078', 'Khoirul Anwar', '2024-04-02', 'Daerah Wetan', 'Bapak Budi', '098743234567890', '$2y$10$PsnVT.vuC13KMzpKNJmDuef6hn4qMKSW8O7zy.ylysCWCC92g7ID2'),
('202253080', 'Ulinnuha Ainunurahman', '2024-04-02', 'Cedak UMK', 'Bapak Harno', '098743234567890', '$2y$10$PsnVT.vuC13KMzpKNJmDuef6hn4qMKSW8O7zy.ylysCWCC92g7ID2'),
('20225384', 'Paijo Tukimen', '2024-05-20', 'Kidul Tugu', 'Pak Suyono', '08479458405', '$2y$10$38uAbO4N9HvalLZDffFSJ.hRzeXKURmhzGnzNUNRilyMilXD0Jigm');

-- --------------------------------------------------------

--
-- Table structure for table `tbnilai`
--

CREATE TABLE `tbnilai` (
  `id` int(11) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `nilai_ulangan` int(11) NOT NULL,
  `nilai_uts` int(11) NOT NULL,
  `nilai_uas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbnilai`
--

INSERT INTO `tbnilai` (`id`, `nis`, `kode`, `nilai_ulangan`, `nilai_uts`, `nilai_uas`) VALUES
(8, '202253049', 'RPL-1', 70, 80, 80),
(14, '202253049', 'PKN-1', 70, 80, 80),
(15, '202253049', 'PKN-2', 70, 80, 80),
(16, '202253078', 'JRG-2', 70, 70, 70),
(17, '202253080', 'JRG-3', 70, 80, 80),
(18, '202253078', 'JRG-3', 70, 80, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbguru`
--
ALTER TABLE `tbguru`
  ADD PRIMARY KEY (`nig`),
  ADD UNIQUE KEY `nig` (`nig`);

--
-- Indexes for table `tbmapel`
--
ALTER TABLE `tbmapel`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `NIG` (`nig`);

--
-- Indexes for table `tbmurid`
--
ALTER TABLE `tbmurid`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tbnilai`
--
ALTER TABLE `tbnilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NIS` (`nis`),
  ADD KEY `KODE` (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbnilai`
--
ALTER TABLE `tbnilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbmapel`
--
ALTER TABLE `tbmapel`
  ADD CONSTRAINT `tbmapel_ibfk_1` FOREIGN KEY (`NIG`) REFERENCES `tbguru` (`nig`),
  ADD CONSTRAINT `tbmapel_ibfk_2` FOREIGN KEY (`nig`) REFERENCES `tbguru` (`nig`);

--
-- Constraints for table `tbnilai`
--
ALTER TABLE `tbnilai`
  ADD CONSTRAINT `tbnilai_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `tbmurid` (`NIS`),
  ADD CONSTRAINT `tbnilai_ibfk_2` FOREIGN KEY (`KODE`) REFERENCES `tbmapel` (`KODE`),
  ADD CONSTRAINT `tbnilai_ibfk_3` FOREIGN KEY (`nis`) REFERENCES `tbmurid` (`NIS`),
  ADD CONSTRAINT `tbnilai_ibfk_4` FOREIGN KEY (`kode`) REFERENCES `tbmapel` (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
