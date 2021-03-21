-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 03:11 PM
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
-- Database: `pw_tubes_203040159`
--

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `NO` int(11) NOT NULL,
  `Gambar` varchar(100) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Penulis` varchar(50) NOT NULL,
  `Terbit` date NOT NULL,
  `Studio` varchar(50) NOT NULL,
  `Score` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `NO`, `Gambar`, `Judul`, `Penulis`, `Terbit`, `Studio`, `Score`) VALUES
(1, 1, '1.jpg', 'Kimetsu no Yaiba', 'Koyoharu Gotouge', '2019-04-06', 'ufotable', '8.61'),
(2, 2, '2.jpg', 'Fate/Zero', 'Kadokawa Shoten', '2020-10-02', 'ufotable', '8.34'),
(3, 3, '3.jpg', 'One Punch Man', 'ONE', '2015-10-05', 'Madhouse', '8.56'),
(4, 4, '4.jpg', 'Mob Psycho 100', 'ONE', '2016-07-11', 'Bones', '8.48'),
(5, 5, '5.jpg', 'Naruto Shippuden', 'Masashi Kishimoto', '2007-02-15', 'Studio Pierrot', '8.17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
