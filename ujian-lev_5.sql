-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 02:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujian-lev.5`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelam`
--

CREATE TABLE `kelam` (
  `id` int(11) NOT NULL,
  `Kejadian Alam` varchar(191) NOT NULL,
  `Detail` varchar(500) NOT NULL,
  `Foto` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelam`
--

INSERT INTO `kelam` (`id`, `Kejadian Alam`, `Detail`, `Foto`) VALUES
(0, 'Aurora', 'Aurora atau cahaya kutub adalah fenimena alam yang menghasilkan pancaran cahaya yang menyala-nyaladan menari-nari di langit malam pada lapisan ionosfer dari sebuah planet sebagai akibat adanya interaksi antara medan magnetik yang dimiliki planettersebut dengan partikel bermuatan yang dipancarkan oleh Matahari (angin surya).[1] Fenomena ini hanya bisa dinikmati di negara yang jauh dari garis khatulistiwa, salah satu negara yang fenomena alamnya bagus untuk dilihat adalah Selandia Baru.', 'auror-a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kelam2`
--

CREATE TABLE `kelam2` (
  `id` int(11) NOT NULL,
  `Nama Dinosaurus` varchar(191) NOT NULL,
  `Detail` varchar(191) NOT NULL,
  `Foto` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelam2`
--

INSERT INTO `kelam2` (`id`, `Nama Dinosaurus`, `Detail`, `Foto`) VALUES
(1, 'Ankylosaurus', 'Dinosaurus yang menggunakan ekornya yang berbentuk seperti pemukul untuk melindungi dirinya', 'anky.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `id` int(11) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Request` varchar(100) NOT NULL,
  `Note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`id`, `Category`, `Request`, `Note`) VALUES
(0, 'Dinosaurus', 'Stegosaurus', 'Pleaseadd some game recomendation with dinosaurus theme in the end of article');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '123', 'admin'),
(2, 'user', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelam`
--
ALTER TABLE `kelam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelam2`
--
ALTER TABLE `kelam2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelam2`
--
ALTER TABLE `kelam2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
