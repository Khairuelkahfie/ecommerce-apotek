-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 01:20 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alodiefarma`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `idgambar` int(11) NOT NULL,
  `idobat` int(11) NOT NULL,
  `judulgambar` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tglupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `idinvoice` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `kodetransaksi` varchar(25) NOT NULL,
  `tgltransaksi` datetime NOT NULL,
  `jumlahtransaksi` int(11) NOT NULL,
  `statusbayar` varchar(25) NOT NULL,
  `jumlahbayar` int(11) DEFAULT NULL,
  `rekeningpembayaran` varchar(255) DEFAULT NULL,
  `rekeningpelanggan` varchar(255) DEFAULT NULL,
  `buktibayar` varchar(255) DEFAULT NULL,
  `tglupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `namaktegori` varchar(25) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tglupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namaktegori`, `urutan`, `tglupdate`) VALUES
(1, 'Kapsul', 1, '2020-01-06 13:42:29'),
(2, 'Tablet', 2, '2020-01-06 07:25:50'),
(9, 'Botol', 3, '2020-01-06 13:31:36'),
(10, 'Kaplet', 4, '2020-01-06 13:32:08'),
(12, 'Tetes', 5, '2020-01-06 13:33:11'),
(13, 'Injeksi', 6, '2020-01-06 13:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `idobat` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `kodeobat` varchar(10) NOT NULL,
  `namaobat` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `satuan` varchar(255) DEFAULT NULL,
  `statusobat` varchar(20) NOT NULL,
  `tglpost` datetime NOT NULL,
  `tglupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `statuspelanggan` varchar(20) NOT NULL,
  `namapelangan` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telpon` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `tgldaftar` datetime NOT NULL,
  `tglupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `kodetransaksi` varchar(10) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `totalharga` int(11) NOT NULL,
  `tgltransaksi` datetime NOT NULL,
  `tglupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` varchar(20) NOT NULL,
  `tglupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `nama`, `email`, `username`, `password`, `role`, `tglupdate`) VALUES
(1, 'Khairul kahpi', 'khairul@gagah.com', 'Khairul25', 'c3f9af1c102c611aa4311efe026b59b682d27f24', 'Admin', '2019-12-29 15:11:32'),
(3, 'Khairul kahpi', 'fiekhairuel@yahoo.com', 'Khairulkahpi', '875c77122788fac514e5e61e45fbf7079c9b003c', 'Admin', '2019-12-30 03:36:28'),
(4, 'faraby', 'faraby@gmail.com', 'faraby', 'ee2dd584df0902439d757b60d2725b2a26fc2d5c', 'pelanggan', '2020-01-05 17:43:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`idgambar`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`idinvoice`),
  ADD UNIQUE KEY `kodetransaksi` (`kodetransaksi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idobat`),
  ADD UNIQUE KEY `kodeobat` (`kodeobat`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `idgambar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `idinvoice` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `idobat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
