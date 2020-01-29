-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2020 at 07:26 PM
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
(5, 'Khairoel Kahfie', 'Praya Lombok Tengah', '2020-01-29 15:41:26', '2020-01-30 15:41:26');

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
(2, 'bodrex', 'menyembuhkan hati yang sedang pilu', 'tablet', 3000, 24, '', '', '', 'bodrex.png'),
(3, 'insto', 'mengobati mata hai yang sedang pilu', 'tetes', 3000, 35, '', '', '', 'insto.png'),
(4, 'promag', 'mengobati perut sakit', 'kapsul', 3000, 24, '', '', '', 'promag.png'),
(6, 'efomet', 'mengobati keeee', 'Kaplet', 12000, 24, 'air hangat', 'sehatt', 'dilarang pacaran', 'efomet1.png'),
(7, 'sirup batuk', 'mengobati batuk', 'Botol', 25000, 25, 'air hangat', 'sehatt', 'dilarang pacaran', 'sirup_batuk1.png'),
(8, 'APA-Enro', 'mengobati batuk', 'Tetes', 25000, 25, 'air hangat', 'beracun', 'dilarang pacaran', 'APA-Enro1.png'),
(9, 'Panadol', 'Obat batuk', 'Kapsul', 25000, 25, 'daun singkong', 'beracun', 'dilarang pacaran', 'Flu_batuk.png'),
(10, 'mycoral', 'obat panuan', 'Kaplet', 25000, 25, 'daun singkong', 'beracun', 'dilarang pacaran', 'Mycoral.png');

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
(10, 5, 2, 'bodrex', 1, 3000, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`idinvoice`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`idobat`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `idinvoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `idobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idtransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
