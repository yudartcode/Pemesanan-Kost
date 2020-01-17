-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 07:52 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanan_kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kost`
--

CREATE TABLE `tb_kost` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `tipe` varchar(5) NOT NULL,
  `fasilitas` varchar(200) NOT NULL,
  `id_pemilik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kost`
--

INSERT INTO `tb_kost` (`id`, `nama`, `alamat`, `harga`, `jumlah_kamar`, `tipe`, `fasilitas`, `id_pemilik`) VALUES
(10, 'Kost Melati', 'Ampenan', 800000, 10, 'P', 'Lemari, ', 2),
(11, 'Kost Matahari', 'Ampenan', 300000, 15, 'L', 'Kamar Mandi, ', 2),
(13, 'Kost Mawar', 'Mataram', 600000, 10, 'U', 'Kasur, Kamar Mandi, Air', 1),
(14, 'Melati', 'Mataram', 200000, 10, 'U', 'Kasur, Lemari, Air, Wifi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesan`
--

CREATE TABLE `tb_pemesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemesan`
--

INSERT INTO `tb_pemesan` (`id`, `nama`, `alamat`, `no_telpon`, `jk`, `username`, `password`) VALUES
(1, 'Fawazi', 'Lombok Tengah', '1234', 'L', 'fawazi', 'c1de6105ebfe233b9a961c32ff887525'),
(2, 'Lutfi', 'Lombok Utara', '12345', 'L', 'lutfi', 'cdb0b6889f4def26f43951b2d5b7a9e3'),
(3, 'Agung', 'Lombok Barat', '768', 'L', 'agung', 'e59cd3ce33a68f536c19fedb82a7936f'),
(4, 'Lisa', 'Lotim', '08234', 'P', 'lisa', 'ed14f4a4d7ecddb6dae8e54900300b1e');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemilik`
--

CREATE TABLE `tb_pemilik` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `rekening` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemilik`
--

INSERT INTO `tb_pemilik` (`id`, `nama`, `alamat`, `no_telpon`, `rekening`, `username`, `password`) VALUES
(1, 'Yuda', 'Mataram', '087654322', 'BNI 12345', 'yuda', 'ac9053a8bd7632586c3eb663a6cf15e4'),
(2, 'Gilang', 'Mataram', '08654331', 'BRI 12343', 'gilang', 'c37fddfb7b3f538674c6e9a77e7bf486');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT current_timestamp(),
  `tgl_masuk` timestamp NULL DEFAULT NULL,
  `durasi` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `tgl_keluar` timestamp NULL DEFAULT NULL,
  `id_kost` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Sedang Diproses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `tgl_transaksi`, `tgl_masuk`, `durasi`, `bayar`, `tgl_keluar`, `id_kost`, `id_pemesan`, `status`) VALUES
(1, '2020-01-10 19:06:19', '2020-01-10 16:00:00', 2, 1200000, '2020-02-10 16:00:00', 11, 2, 'Sudah Dibayar'),
(2, '2020-01-10 16:00:00', '2020-01-10 16:00:00', 1, 800000, '2020-02-10 16:00:00', 10, 1, 'Sudah Dibayar'),
(5, '2020-01-10 16:00:00', '2020-01-11 16:00:00', 4, 3200000, '2020-05-11 16:00:00', 10, 3, 'Sedang Diproses');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kost`
-- (See below for the actual view)
--
CREATE TABLE `v_kost` (
`id` int(11)
,`nama` varchar(50)
,`alamat` varchar(100)
,`harga` int(11)
,`jumlah_kamar` int(11)
,`tipe` varchar(5)
,`fasilitas` varchar(200)
,`id_pemilik` int(11)
,`pemilik` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_transaksi`
-- (See below for the actual view)
--
CREATE TABLE `v_transaksi` (
`id` int(11)
,`tgl_transaksi` timestamp
,`tgl_masuk` timestamp
,`durasi` int(11)
,`bayar` int(11)
,`tgl_keluar` timestamp
,`status` varchar(20)
,`kost` varchar(50)
,`pemilik` varchar(50)
,`pemesan` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `v_kost`
--
DROP TABLE IF EXISTS `v_kost`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kost`  AS  select `k`.`id` AS `id`,`k`.`nama` AS `nama`,`k`.`alamat` AS `alamat`,`k`.`harga` AS `harga`,`k`.`jumlah_kamar` AS `jumlah_kamar`,`k`.`tipe` AS `tipe`,`k`.`fasilitas` AS `fasilitas`,`k`.`id_pemilik` AS `id_pemilik`,`p`.`nama` AS `pemilik` from (`tb_kost` `k` join `tb_pemilik` `p` on(`k`.`id_pemilik` = `p`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_transaksi`
--
DROP TABLE IF EXISTS `v_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_transaksi`  AS  select `tr`.`id` AS `id`,`tr`.`tgl_transaksi` AS `tgl_transaksi`,`tr`.`tgl_masuk` AS `tgl_masuk`,`tr`.`durasi` AS `durasi`,`tr`.`bayar` AS `bayar`,`tr`.`tgl_keluar` AS `tgl_keluar`,`tr`.`status` AS `status`,`k`.`nama` AS `kost`,`pm`.`nama` AS `pemilik`,`p`.`nama` AS `pemesan` from (((`tb_transaksi` `tr` join `tb_kost` `k` on(`tr`.`id_kost` = `k`.`id`)) join `tb_pemesan` `p` on(`tr`.`id_pemesan` = `p`.`id`)) join `tb_pemilik` `pm` on(`k`.`id_pemilik` = `pm`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kost`
--
ALTER TABLE `tb_kost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pemilik` (`id_pemilik`);

--
-- Indexes for table `tb_pemesan`
--
ALTER TABLE `tb_pemesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pemilik`
--
ALTER TABLE `tb_pemilik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_pemesan` (`id_pemesan`),
  ADD KEY `id_kost` (`id_kost`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kost`
--
ALTER TABLE `tb_kost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_pemesan`
--
ALTER TABLE `tb_pemesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pemilik`
--
ALTER TABLE `tb_pemilik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kost`
--
ALTER TABLE `tb_kost`
  ADD CONSTRAINT `tb_kost_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `tb_pemilik` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_pemesan`) REFERENCES `tb_pemesan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_kost`) REFERENCES `tb_kost` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
