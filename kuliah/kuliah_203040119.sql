-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 08:05 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah_203040119`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `gambar` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Dhaifullah Hilmy', '203040119', '203040119@mail.unpas.ac.id', 'Teknik Informatika', '60b4dddbc55c0.png'),
(14, 'Chris Redfield', '193040123', '193040123@mail.unpas.ac.id', 'Teknik Industri', '60b4dd4ca181b.jpg'),
(15, 'Jill Valentine', '193040456', '193040456@mail.unpas.ac.id', 'Teknologi Pangan', '60b4dd95af8be.jpg'),
(16, 'Leon S. Kennedy', '203040678', '203040678@mail.unpas.ac.id', 'Teknik Mesin', '60b4de2a21c35.jpg'),
(17, 'Ethan Winters', '203040567', '203040567@mail.unpas.ac.id', 'Perancangan Wilayah &amp; Kota', '60b4de8b8559c.jpg'),
(18, 'Ada Wong', '193040890', '193040890@mail.unpas.ac.id', 'Teknik Lingkungan', '60b4dec7a1338.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'dinda', '$2y$10$a3ULerRfCkX6A1gbOHoxuOZXUa2X5Y6Ii5L1SKKxdAX6jP9NUpxh2'),
(4, 'admin', '$2y$10$wukIgLpnESEFK36T38YYx.RbzN2.JNP8tT1mdZjEGWA4jyiBCcX4m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
