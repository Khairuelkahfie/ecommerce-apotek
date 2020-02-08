-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 07:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alodiefarmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `idinvoice` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tglpesan` datetime NOT NULL,
  `batasbayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`idinvoice`, `nama`, `alamat`, `tglpesan`, `batasbayar`) VALUES
(7, 'abdul', 'Desa Beleka', '2020-01-29 19:44:56', '2020-01-30 19:44:56'),
(8, 'hamba allah', 'praya', '2020-02-07 02:56:07', '2020-02-08 02:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `idkonsultasi` int(11) NOT NULL,
  `idusers` int(11) NOT NULL,
  `pesan` text NOT NULL,
  `gambar` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `idobat` int(11) NOT NULL,
  `namaobat` varchar(120) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(4) NOT NULL,
  `komposisi` varchar(50) NOT NULL,
  `indikasi` varchar(100) NOT NULL,
  `perhatian` varchar(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`idobat`, `namaobat`, `keterangan`, `kategori`, `harga`, `stock`, `komposisi`, `indikasi`, `perhatian`, `gambar`) VALUES
(3, 'insto', 'mengobati mata hai yang sedang pilu', 'tetes', 3000, 33, '', '', '', 'insto.png'),
(4, 'promag', 'mengobati perut sakit', 'kapsul', 3000, 21, '', '', '', 'promag.png'),
(6, 'efomet', 'mengobati keeee', 'Kaplet', 12000, 24, 'air hangat', 'sehatt', 'dilarang pacaran', 'efomet1.png'),
(7, 'sirup batuk', 'mengobati batuk', 'Botol', 25000, 25, 'air hangat', 'sehatt', 'dilarang pacaran', 'sirup_batuk1.png'),
(8, 'APA-Enro', 'mengobati batuk', 'Tetes', 25000, 25, 'air hangat', 'beracun', 'dilarang pacaran', 'APA-Enro1.png'),
(9, 'Panadol', 'Obat batuk', 'Kapsul', 25000, 25, 'daun singkong', 'beracun', 'dilarang pacaran', 'Flu_batuk.png'),
(10, 'mycoral', 'obat panuan', 'Kaplet', 25000, 25, 'daun singkong', 'beracun', 'dilarang pacaran', 'Mycoral.png');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idrole` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` int(11) NOT NULL,
  `idinvoice` int(11) NOT NULL,
  `idobat` int(11) NOT NULL,
  `namaobat` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `idinvoice`, `idobat`, `namaobat`, `jumlah`, `harga`, `pilihan`) VALUES
(7, 5, 4, 'promag', 1, 3000, ''),
(8, 5, 7, 'sirup batuk', 1, 25000, ''),
(9, 5, 6, 'efomet', 1, 12000, ''),
(10, 5, 2, 'bodrex', 1, 3000, ''),
(11, 6, 4, 'promag', 1, 3000, ''),
(12, 6, 3, 'insto', 1, 3000, ''),
(13, 6, 2, 'bodrex', 1, 3000, ''),
(14, 7, 4, 'promag', 1, 3000, ''),
(15, 8, 3, 'insto', 1, 3000, ''),
(16, 8, 4, 'promag', 1, 3000, '');

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `pesan_obat` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
	UPDATE obat SET stock= stock-NEW.jumlah
    WHERE idobat = NEW.idobat;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `email` varchar(35) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kodepos` varchar(6) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `tgdaftar` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `kelamin`, `email`, `pass`, `alamat`, `kodepos`, `kota`, `telp`, `gambar`, `tgdaftar`, `role`) VALUES
(3, 'khaka', 'L', 'kahfie@gmail.com', '12345', 'praya', '1234', 'praya', '0877', 'default.jpg', '2020-02-11 15:22:29', 2),
(4, 'pengelola', 'L', 'pengelola@admin.com', '12345', 'balen', '1234', 'praya', '0877', 'default.jpg', '2020-02-06 15:47:27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`idinvoice`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`idkonsultasi`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idobat`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idrole`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `idinvoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `idkonsultasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `idobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idrole` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
