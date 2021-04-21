-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 01:08 AM
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
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(1, '1.jpeg', '193090099', 'Muhammad Andrew', 'andrew@gmail.com', 'Keperawatan'),
(2, '2.jpeg', '203040500', 'Yaya Nurhiya', 'yaya@gmail.com', 'Fakultas Kedokteran Gigi'),
(3, '3.jpeg', '203040097', 'Husein Jafar', 'husein@gmail.com', 'Teknik Informatika'),
(4, '4.jpeg', '203040112', 'Faza Akbar', 'faza@gmail.com', 'Teknik Informatika'),
(5, '5.jpeg', '203040117', 'Udin Sedunia', 'udin@gmail.com', 'Teknik & Manajemen Industri'),
(6, '6.jpeg', '203040098', 'Putri Hana', 'hana@gmail.com', 'Teknik Informatika'),
(7, '7.jpeg', '203040086', 'Rizkie Arie', 'rizki@gmail.com', 'Teknik Informatika'),
(8, '8.jpeg', '203020195', 'Rusdi Abdul', 'rusdi@gmail.com', 'Teknik Pangan'),
(9, '9.jpeg', '203040043', 'Ibnu Faiz', 'ibnu@gmail.com', 'Teknik Informatika'),
(10, '10.jpeg', '203060075', 'Shofi Prima', 'shofi@gmail.com', 'Perancangan Wilayah Kota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
