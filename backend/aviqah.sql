-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2018 at 04:47 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aviqah`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak_user`
--

CREATE TABLE `anak_user` (
  `id_anak` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `nama_anak` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak_user`
--

INSERT INTO `anak_user` (`id_anak`, `id_user`, `nama_anak`) VALUES
(1, 4, 'test'),
(2, 4, 'test2'),
(6, 4, 'anak');

-- --------------------------------------------------------

--
-- Table structure for table `aqiqah`
--

CREATE TABLE `aqiqah` (
  `id_aqiqah` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_anak` int(100) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `alamat_aqiqah` text NOT NULL,
  `tanggal_pengiriman` date NOT NULL,
  `jumlah_kambing` int(100) NOT NULL,
  `biaya_pengiriman` int(100) NOT NULL,
  `paket` int(100) NOT NULL,
  `metode_pembayaran` varchar(100) NOT NULL,
  `total_pembayaran` int(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `alamat_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `password_user`, `alamat_user`) VALUES
(1, 'aww', 'aww@gmail.com', 'aww', 'pesona cilebut 2'),
(2, 'tes', 'test@gmail.com', 'test123', 'qwert'),
(3, 'nuh', 'nuhsatria@gmail.com', 'b12153d73a0287a7d7f4457c0b7b1953', 'jakarta'),
(4, 'test', 'nuhsatriaa@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'cilebut'),
(5, 'nuhsat', 'nuhsat@gmail.com', '5e3aaac127513d79ca5aabb98dc727ee', 'cilebut'),
(7, 'vitovito', 'vitotest1@gmail.com', 'c97050f510a1a9384d4d8d04e41ea0be', 'vitovito'),
(8, 'Vito Rizki Imanda', 'vitorizkiimanda@gmail.com', 'c97050f510a1a9384d4d8d04e41ea0be', 'Wisma Anggita CIbanteng Bogor\nTDP 2 Blok A2 Nomor 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak_user`
--
ALTER TABLE `anak_user`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `aqiqah`
--
ALTER TABLE `aqiqah`
  ADD PRIMARY KEY (`id_aqiqah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak_user`
--
ALTER TABLE `anak_user`
  MODIFY `id_anak` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `aqiqah`
--
ALTER TABLE `aqiqah`
  MODIFY `id_aqiqah` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
