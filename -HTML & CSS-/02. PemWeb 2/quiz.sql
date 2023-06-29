-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 12:09 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(25) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `satuan_barang` varchar(255) NOT NULL,
  `stok_barang` int(255) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `satuan_barang`, `stok_barang`, `foto`, `harga`) VALUES
(9, 'Sabun Shinzui', '90gram', 10, 'Shinzui.png', 5000),
(10, 'Shampo Lifebuoy', '170ml', 20, 'Lifebuoy.png', 12000),
(11, 'Penggaris', '30cm', 30, 'penggaris.png', 5000),
(12, 'Charger HP', '10Watt', 4, 'it_plug_30_w_wall_charger_cube_white_1_2.jpg', 25000),
(13, 'Botol Minum', '500ml', 100, 'botol_minum.jpg', 10000),
(14, 'Kipas USB', '5V', 12, 'kipas.png', 25000),
(15, 'Speaker USB', '5V', 4, 'speaker_usb.jpg', 50000),
(16, 'Harddisk', '500gb', 2, 'HDD_500gb.png', 450000),
(17, 'harddisk', '1TB', 3, 'harddisk_1tb.jpg', 600000),
(18, 'SSD', '256GB', 6, 'SSD_256gb.jpg', 370000),
(19, 'FlashDisk', '8GB', 3, 'FlashDisk.png', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
