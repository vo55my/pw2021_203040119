-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 08:06 AM
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
-- Database: `tubes_203040119`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `status` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `nama`, `status`, `username`, `password`) VALUES
(1, 'Dhaifullah Hilmy', 'Admin', 'admin', '$2y$10$/pZjvLQz1Hj3SbyIjmg77uhenJV/Weo6PoPwQa7rDB6FeaJaQkQQu'),
(2, 'Dinda Rahmawati', 'Member', 'member', '$2y$10$JrP9DUoxFtX4hTCZySaMYOlcVi3F.WOJLWyFU1qGkD.7/Iy9cSTzS');

-- --------------------------------------------------------

--
-- Table structure for table `katalog`
--

CREATE TABLE `katalog` (
  `id` int(11) NOT NULL,
  `img` varchar(20) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `edisi` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `ukuran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id`, `img`, `kode`, `edisi`, `harga`, `ukuran`) VALUES
(1, 'BIKE-01.png', 'BIKE-01', 'Bike Edition', '80000', 'S - M - L - XL'),
(2, 'BIKE-02.png', 'BIKE-02', 'Bike Edition', '80000', 'S - M - L - XL'),
(3, 'BLACK-01.png', 'BLACK-01', 'B/W Edition', '80000', 'S - M - L - XL'),
(4, 'BLACK-02.png', 'BLACK-02', 'B/W Edition', '80000', 'S - M - L - XL'),
(5, 'WHITE-01.png', 'WHITE-01', 'B/W Edition', '80000', 'S - M - L - XL'),
(6, 'WHITE-02.png', 'WHITE-02', 'B/W Edition', '80000', 'S - M - L - XL'),
(7, 'GAMES-01.png', 'GAMES-01', 'Games Edition', '80000', 'S - M - L - XL'),
(8, 'GAMES-02.png', 'GAMES-02', 'Games Edition', '80000', 'S - M - L - XL'),
(9, 'INA-01.png', 'INA-01', 'Indonesia Edition', '80000', 'S - M - L - XL'),
(10, 'INA-02.png', 'INA-02', 'Indonesia Edition', '80000', 'S - M - L - XL'),
(11, 'PUBG-01.png', 'PUBG-01', 'PUBG Edition', '80000', 'S - M - L - XL'),
(12, 'PUBG-02.png', 'PUBG-02', 'PUBG Edition', '80000', 'S - M - L - XL'),
(13, 'SPACE-01.png', 'SPACE-01', 'Space Edition', '80000', 'S - M - L - XL'),
(14, 'SPACE-02.png', 'SPACE-02', 'Space Edition', '80000', 'S - M - L - XL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
