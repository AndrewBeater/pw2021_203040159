-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 02:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_203040159`
--

-- --------------------------------------------------------

--
-- Table structure for table `manga_anime`
--

CREATE TABLE `manga_anime` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `studio` varchar(100) NOT NULL,
  `tahun_rilis` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manga_anime`
--

INSERT INTO `manga_anime` (`id`, `gambar`, `judul`, `author`, `studio`, `tahun_rilis`, `harga`) VALUES
(1, '1.jpg', 'One Piece', 'Eiichiro Oda', 'Toei Animation', '1999', 'Rp 230.000'),
(2, '2.jpg', 'Bleach', 'Tite Kubo', 'Studio Pierrot', '2004', 'Rp 267.000'),
(3, '3.jpg', 'Fate/Zero', 'Gen Urobuchi', 'ufotable', '2011', 'Rp 270.000'),
(4, '4.jpg', 'Kimetsu no Yaiba', 'Koyoharu Gotouge', 'ufotable', '2019', 'Rp.420.880'),
(5, '5.jpg', 'Naruto: Shippuden', 'Masashi Kishimoto', 'Studio Pierrot', '2007', 'Rp.268.009'),
(6, '6.jpg', 'Dr. Stone', 'Riichiro Inagaki', 'TMS Entertainment', '2019', 'Rp.268.009'),
(7, '7.jpg', 'Jujutsu Kaisen', 'Gege Akutami', 'MAPPA', '2020', 'Rp 296.000'),
(8, '8.jpg', 'One Punch Man', 'ONE', 'Madhouse', '2011', 'Rp.260.862'),
(9, '9.jpg', 'Charlotte', 'Jun Maeda', 'P.A. Works', '2015', 'Rp.420.000'),
(21, '10.jpg', 'Sword Art Online', 'Reki Kawahara', 'A-1 Pictures', '2012', 'Rp 286.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(64) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(5, 'admin', '$2y$10$bhKgwlORagbT7HxUcDwAd.LLE/mt1TmuL/.xPbDeRHjs/17PZkQTO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manga_anime`
--
ALTER TABLE `manga_anime`
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
-- AUTO_INCREMENT for table `manga_anime`
--
ALTER TABLE `manga_anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
