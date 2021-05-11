-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2021 at 05:38 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tkmelati`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nik` varchar(256) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `last` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `nik`, `username`, `password`, `last`, `role_id`, `is_active`) VALUES
(3, 'abrar', '', 'abrar', 'abrar321', '04-05-2021/ 04:09:pm', 0, 0),
(4, 'apri', '123210324', 'apri', 'apri123', '04-05-2021/ 04:26:pm', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `namaguru` varchar(200) NOT NULL,
  `jk` varchar(200) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `NIK` varchar(200) NOT NULL,
  `NIP` varchar(200) NOT NULL,
  `NUPTK` varchar(200) NOT NULL,
  `JPTK` varchar(200) NOT NULL,
  `NPSN` varchar(200) NOT NULL,
  `last` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `namaguru`, `jk`, `ttl`, `alamat`, `NIK`, `NIP`, `NUPTK`, `JPTK`, `NPSN`, `last`) VALUES
(9, 'salwa', 'Perempuan', '2021-05-03', 'Bandar Lampung', '2141412', '24112412', '124212', 'Administrasi', '12512341241212', '04-05-2021/ 05:10:am');

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jenistransaksi` varchar(128) NOT NULL,
  `banyak` int(128) NOT NULL,
  `satuan` int(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `jeniskas` varchar(128) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `last` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `tanggal`, `jenistransaksi`, `banyak`, `satuan`, `kategori`, `jeniskas`, `jumlah`, `last`) VALUES
(8, '2021-05-02', 'Beli pena', 4, 50000, 'Pembelian Barang', 'Kas Keluar', 200000, '04-05-2021/ 05:13:am');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member'),
(3, 'kepsek');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `umur` int(11) NOT NULL,
  `akte` varchar(128) NOT NULL,
  `kk` varchar(128) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `namaayah` varchar(128) NOT NULL,
  `namaibu` varchar(128) NOT NULL,
  `pendidikanayah` varchar(128) NOT NULL,
  `pendidikanibu` varchar(128) NOT NULL,
  `pekerjaanayah` varchar(128) NOT NULL,
  `pekerjaanibu` varchar(128) NOT NULL,
  `penghasilanayah` int(11) NOT NULL,
  `penghasilanibu` int(11) NOT NULL,
  `ttlayah` date NOT NULL,
  `ttlibu` date NOT NULL,
  `telpon` varchar(128) NOT NULL,
  `last` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `ttl`, `alamat`, `umur`, `akte`, `kk`, `tinggi`, `berat`, `jk`, `namaayah`, `namaibu`, `pendidikanayah`, `pendidikanibu`, `pekerjaanayah`, `pekerjaanibu`, `penghasilanayah`, `penghasilanibu`, `ttlayah`, `ttlibu`, `telpon`, `last`) VALUES
(95, 'abrar dewa', '2021-05-03', 'jl. nangka v', 4, '21421124', '421412', 120, 30, 'Laki-Laki', 'bapak', 'mamak', 's2', 's2', 'wiraswasta', 'wiraswasta', 10000000, 10000000, '2021-05-10', '2021-05-10', '08127428479', '04-05-2021/ 05:02:am');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tglbayar` date NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
