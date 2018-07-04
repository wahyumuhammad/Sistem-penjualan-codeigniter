-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 06:08 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koperasi_pratama`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE IF NOT EXISTS `data_barang` (
  `id` varchar(88) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id`, `tanggal`, `nama`, `harga_jual`, `harga_beli`, `jumlah`) VALUES
('ID.0001', '2018-02-05', 'LUX', 3000, 2800, 10),
('ID.0002', '2018-02-05', 'GIVE', 2000, 1800, 4),
('ID.0003', '2018-02-05', 'LIFEBOY', 3000, 2500, 4),
('ID.0004', '2018-02-05', 'DETTOL', 3500, 3000, 14),
('ID.0005', '2018-02-05', 'MEDIACARE', 2500, 2200, 20),
('ID.0006', '2018-02-05', 'HARMONY', 2000, 1600, 6),
('ID.0007', '2018-02-05', 'NUVO', 2300, 1800, 9),
('ID.0008', '2018-02-05', 'DOVE', 6500, 5900, 15),
('ID.0009', '2018-02-05', 'RINSO', 5500, 4900, 6),
('ID.0010', '2018-02-05', 'SOKLIN', 5500, 5000, 11),
('ID.0011', '2018-02-05', 'DAIA', 5000, 4600, 8),
('ID.0012', '2018-02-05', 'SURF', 5500, 5200, 14),
('ID.0013', '2018-02-05', 'ATTACK', 5500, 5000, 14),
('ID.0014', '2018-02-05', 'MOLTO', 10000, 9500, 11),
('ID.0015', '2018-02-05', 'SOFTENER SOKLIN', 5200, 4700, 11),
('ID.0016', '2018-02-05', 'SOKLIN LANTAI', 5500, 5000, 0),
('ID.0017', '2018-02-05', 'SABUN EKONOMI', 2200, 1800, 16),
('ID.0018', '2018-03-31', 'Biore Body Foam Daily 450ml', 16000, 12000, 25),
('ID.0019', '2018-03-31', 'Clean & Clear Oil Controlling Film 1''s/ pink 50''a', 17000, 15000, 50),
('ID.0020', '2018-03-31', 'Florida Orange Juice 360ml', 5000, 3500, 50),
('ID.0021', '2018-03-31', 'Promas Corned Beef ', 15000, 12000, 50),
('ID.0022', '2018-03-31', 'Baygon Aerosol Lavender 600ml', 26000, 20000, 10),
('ID.0023', '2018-03-31', 'MInyak Goreng Sania 2ltr ', 19000, 12500, 48);

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE IF NOT EXISTS `data_karyawan` (
  `id` varchar(88) NOT NULL,
  `nama_karyawan` varchar(88) NOT NULL,
  `jabatan` varchar(88) NOT NULL,
  `status` varchar(11) NOT NULL,
  `gaji` int(100) NOT NULL,
  `total_kredit` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id`, `nama_karyawan`, `jabatan`, `status`, `gaji`, `total_kredit`) VALUES
('DISPORAPAR.0001', 'Wahyu Purnawan', 'Bidang Keolahragaan', 'Tetap', 4400000, NULL),
('DISPORAPAR.0002', 'Tutik Nur Eni', 'Bidang Keolahragaan', 'Tetap', 4400000, NULL),
('DISPORAPAR.0003', 'Dimas Wisnu Wijaya', 'Bidang Keolahragaan', 'Tetap', 4400000, NULL),
('DISPORAPAR.0004', 'Agung Wardani', 'Bidang Keolahragaan', 'Tetap', 4400000, NULL),
('DISPORAPAR.0005', 'Adypa Risang Kurniawan', 'Bidang Keolahragaan', 'Tetap', 4400000, NULL),
('DISPORAPAR.0006', 'Heny Damayanti', 'Bidang Keolahragaan', 'Tetap', 4400000, NULL),
('DISPORAPAR.0007', 'Catur Agus Purnomo', 'Bidang Keolahragaan', 'Tetap', 4400000, NULL),
('DISPORAPAR.0008', 'Mochamad Arif Patria', 'Bidang Keolahragaan', 'Tetap', 4400000, NULL),
('DISPORAPAR.0009', 'Tri Tunggal Teguh Widodo', 'Bidang Keolahragaan', 'Tetap', 4400000, NULL),
('DISPORAPAR.0010', 'Effendi Hari Marsudi Catur', 'Kabid Keolahragaan', 'Tetap', 5876000, NULL),
('DISPORAPAR.0011', 'Dwi Lestari', 'Bidang Kepemudaan ', 'Tetap', 4400000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_penjualan`
--

CREATE TABLE IF NOT EXISTS `data_penjualan` (
  `id` varchar(88) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(88) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `untung` int(11) NOT NULL,
  `id_karyawan` int(88) NOT NULL,
  `nama_pembeli` varchar(88) DEFAULT NULL,
  `payment_method` varchar(88) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE IF NOT EXISTS `data_user` (
`id_user` int(11) NOT NULL,
  `first_name` varchar(88) NOT NULL,
  `last_name` varchar(88) NOT NULL,
  `username` varchar(88) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(88) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_user`, `first_name`, `last_name`, `username`, `password`, `status`) VALUES
(4, 'Agung', 'FEB', 'Admin', '1234', 'Admin'),
(5, 'Sasa', 'Jaza', 'Sasa', '1234', 'Penjualan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_penjualan`
--
ALTER TABLE `data_penjualan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
