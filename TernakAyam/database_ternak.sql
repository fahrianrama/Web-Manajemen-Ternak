-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 06:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_ternak`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pakan`
--

CREATE TABLE `jenis_pakan` (
  `id_jenis_pakan` int(11) NOT NULL,
  `jenis_pakan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pakan`
--

INSERT INTO `jenis_pakan` (`id_jenis_pakan`, `jenis_pakan`, `harga`) VALUES
(2, 'Pelet', 7300),
(15, 'Dedak', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `order_telur`
--

CREATE TABLE `order_telur` (
  `id_order_telur` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `berat` float NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_telur`
--

INSERT INTO `order_telur` (`id_order_telur`, `nama`, `kategori`, `tanggal`, `berat`, `harga`) VALUES
(1, 'Siti', 'Tetangga', '2022-03-26', 1, 5000),
(2, 'Sholeh', 'Pedagang Kaki Lima', '2022-03-27', 0.5, 5000),
(3, 'Zubaedah', 'Tetangga', '2022-03-26', 2, 20000),
(4, 'Zimin', 'Tetangga', '2022-03-27', 4, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `pakan_terpakai`
--

CREATE TABLE `pakan_terpakai` (
  `id_pemakaian` int(11) NOT NULL,
  `id_jenis_pakan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakan_terpakai`
--

INSERT INTO `pakan_terpakai` (`id_pemakaian`, `id_jenis_pakan`, `tanggal`, `jumlah`) VALUES
(1, 2, '2022-03-23', 5),
(2, 2, '2022-03-23', 10),
(14, 15, '2022-03-23', 10),
(17, 2, '2022-03-28', 5),
(18, 2, '2022-03-29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stok_telur`
--

CREATE TABLE `stok_telur` (
  `id_stok_telur` int(11) NOT NULL,
  `faktur` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `stok_mingguan` int(11) NOT NULL,
  `total_mingguan` int(11) NOT NULL,
  `telur_rusak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_telur`
--

INSERT INTO `stok_telur` (`id_stok_telur`, `faktur`, `tanggal`, `stok_mingguan`, `total_mingguan`, `telur_rusak`) VALUES
(5, 'STK-1', '2022-03-25', 1400, 2500000, 54),
(6, 'STK-2', '2022-04-02', 1500, 2700000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ayam`
--

CREATE TABLE `tb_ayam` (
  `id_ayam` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ayam`
--

INSERT INTO `tb_ayam` (`id_ayam`, `tanggal`, `harga`, `jumlah`) VALUES
(2, '2022-03-23', 40000, 50),
(4, '2022-03-26', 50000, 150);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_pakan`
--
ALTER TABLE `jenis_pakan`
  ADD PRIMARY KEY (`id_jenis_pakan`);

--
-- Indexes for table `order_telur`
--
ALTER TABLE `order_telur`
  ADD PRIMARY KEY (`id_order_telur`);

--
-- Indexes for table `pakan_terpakai`
--
ALTER TABLE `pakan_terpakai`
  ADD PRIMARY KEY (`id_pemakaian`);

--
-- Indexes for table `stok_telur`
--
ALTER TABLE `stok_telur`
  ADD PRIMARY KEY (`id_stok_telur`);

--
-- Indexes for table `tb_ayam`
--
ALTER TABLE `tb_ayam`
  ADD PRIMARY KEY (`id_ayam`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_pakan`
--
ALTER TABLE `jenis_pakan`
  MODIFY `id_jenis_pakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_telur`
--
ALTER TABLE `order_telur`
  MODIFY `id_order_telur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pakan_terpakai`
--
ALTER TABLE `pakan_terpakai`
  MODIFY `id_pemakaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `stok_telur`
--
ALTER TABLE `stok_telur`
  MODIFY `id_stok_telur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_ayam`
--
ALTER TABLE `tb_ayam`
  MODIFY `id_ayam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
