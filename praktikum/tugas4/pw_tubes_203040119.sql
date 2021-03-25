-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 11:56 AM
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
-- Database: `pw_tubes_203040119`
--

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE `kampus` (
  `id` int(11) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `berdiri` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `situs` varchar(50) NOT NULL,
  `urutan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`id`, `logo`, `nama`, `alamat`, `berdiri`, `kota`, `situs`, `urutan`) VALUES
(1, 'UGM.png', 'Universitas Gadjah Mada', 'Bulaksumur, Caturtunggal, Kec. Depok, 55281', '11 September 1957', 'Kab. Sleman', 'www.ugm.ac.id', '810'),
(2, 'IPB.png', 'Institut Pertanian Bogor', 'Jl. Raya Dramaga, Babakan, Kec. Dramaga, 16680', '1 September 1963', 'Kota Bogor', 'www.ipb.ac.id', '1088'),
(3, 'ITS.png', 'Institut Teknologi Sepuluh Nopember', 'Jl. Teknik Kimia, Keputih, Kec. Sukolilo, 60111', '10 November 1957', 'Kota Surabaya', 'www.its.ac.id', '1089'),
(4, 'UI.png', 'Universitas Indonesia', 'Jl. Margonda Raya, Pondok Cina, Kec. Beji, 16424', '2 Februari 1950', 'Kota Depok', 'www.ui.ac.id', '1315'),
(5, 'UNAIR.png', 'Universitas Airlangga', 'Jl. Airlangga No. 4 - 6, Airlangga, Kec. Gubeng, 60115', '10 November 1954', 'Kota Surabaya', 'www.unair.ac.id', '1322'),
(6, 'ITB.png', 'Institut Teknologi Bandung', 'Jl. Ganesa No. 10, Lb. Siliwangi, Kec. Coblong, 40132', '2 Maret 1959', 'Kota Bandung', 'www.itb.ac.id', '1647'),
(7, 'BINUS.png', 'Universitas Bina Nusantara', 'Jl. K H. Syahdan No. 9, Kel. Kemanggisan, Kec. Palmerah, 11480', '1 Juli 1981', 'Kota Jakarta Barat', 'www.binus.ac.id', '1902'),
(8, 'UNS.png', 'Universitas Sebelas Maret', 'Jl. Ir. Sutami No. 36, Kentingan, Kec. Jebres, 57126', '11 Maret 1976', 'Kota Surakarta', 'www.uns.ac.id', '1990'),
(9, 'UNDIP.png', 'Universitas Diponegoro', 'Jl. Prof. Sudarto No. 13, Tembalang, Kec. Tembalang, 50275', '9 Januari 1957', 'Kota Semarang', 'www.undip.ac.id', '1994'),
(10, 'UNEJ.png', 'Universitas Jember', 'Jl. Kalimantan No. 37, Krajan Timur, Sumbersari, Kec. Sumbersari, 68121', '10 November 1957', 'Kab. Jember', 'www.unej.ac.id', '2053');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kampus`
--
ALTER TABLE `kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
