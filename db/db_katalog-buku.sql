-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2024 at 12:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_katalog-buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `penerbit`, `tahun`, `kategori`, `cover`) VALUES
(1, 'Filosofi Teras', 'Henry Manampiring', 'PT Kompas Media Nusantara', '2018', 'Non fiksi', '665b27d57bf85.jpg'),
(2, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Lentera Dipantara', '2011', 'komik', '665b29841fbcf.jpg'),
(3, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', '2015', 'Fiksi', '665b2b5080520.jfif'),
(4, 'Lima Cerita', 'Desi Anwar', 'Gramedia Pustaka Utama', '2019', 'Non fiksi', '665b31ed0617b.jpg'),
(5, 'Hujan', 'Tere Liye', 'Gramedia Pustaka Utama', '2016', 'Fiksi', '665b2d38c8fac.jpg'),
(8, 'Teknik Membaca', 'Nurhadi', 'PT Bumi Aksara', '2022', 'Non fiksi', '665b34713f25c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
