-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 02:45 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katar`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(6) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `date_create` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `email`, `password`, `role`, `date_create`) VALUES
(1, 'Murry Febriansyah Putra', 'murry.febrian@gmail.com', 'd1aa3f87078ddff497e768ff2a33a0a5', 2, '0000-00-00'),
(2, 'Febriansyah', 'febriansyah@gmail.com', 'd1aa3f87078ddff497e768ff2a33a0a5', 1, '2021-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `log_aktivitas`
--

CREATE TABLE `log_aktivitas` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id` int(2) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `sub_judul` varchar(255) DEFAULT NULL,
  `cerita` text DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `tahun` date DEFAULT NULL,
  `post_oleh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id`, `judul`, `sub_judul`, `cerita`, `gambar`, `tahun`, `post_oleh`) VALUES
(6, 'akdsoaskdo', 'askjdkaskdak', 'aasdsa', 'akdsoaskdo113532d372cb2f6d28db64ec72556a6f2f55dc.jpeg', '2021-06-25', 'Febriansyah'),
(7, 'kdfjdkfjds', 'idsjsfijsjf', 'kjdfkjdsifj', 'kdfjdkfjds12521455d5e7a2988a3206bde183e19c5466fc.jpg', '2021-06-24', 'Febriansyah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id` int(11) NOT NULL,
  `agenda` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id`, `agenda`, `tanggal`, `jam`) VALUES
(1, 'Rapat Sama Bupati', '2021-06-19', '12 Siang'),
(6, 'd', '2021-06-19', 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_aktivitas`
--
ALTER TABLE `log_aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
