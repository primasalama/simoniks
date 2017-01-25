-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jan 2017 pada 06.09
-- Versi Server: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simoniks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `no` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` text NOT NULL,
  `pukul` time DEFAULT NULL,
  `tempat` text NOT NULL,
  `unit` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`no`, `tanggal`, `kegiatan`, `pukul`, `tempat`, `unit`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(9, '2017-01-13', 'sdiajso', '00:05:00', 'isdjiaso', 'djsaioja', '2017-01-15 17:06:06', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kebijakan`
--

CREATE TABLE IF NOT EXISTS `kebijakan` (
  `no` int(11) NOT NULL,
  `narasi` text NOT NULL,
  `status` text NOT NULL,
  `indikator` text NOT NULL,
  `pic` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kebijakan`
--

INSERT INTO `kebijakan` (`no`, `narasi`, `status`, `indikator`, `pic`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(4, 'asodjoashdiashdiashdoa', 'hiosfohohi ih', 'hfo', 'hofhao', '2017-01-25 02:52:04', '0000-00-00 00:00:00', 1, 6),
(5, 'hdsiahdi aisdhia idhaiu ahfia diagdagiagdia gia ai', 'hai', 'ifhai', 'hfih', '2017-01-25 02:52:20', '0000-00-00 00:00:00', 1, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `progress`
--

CREATE TABLE IF NOT EXISTS `progress` (
  `no` int(11) NOT NULL,
  `kegiatan` text NOT NULL,
  `tanggal` date NOT NULL,
  `hasil` text NOT NULL,
  `tindak_ljt` text NOT NULL,
  `masalah` text NOT NULL,
  `narasiKebijakan` int(11) NOT NULL,
  `dokumentasi1` text NOT NULL,
  `dokumentasi2` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `progress`
--

INSERT INTO `progress` (`no`, `kegiatan`, `tanggal`, `hasil`, `tindak_ljt`, `masalah`, `narasiKebijakan`, `dokumentasi1`, `dokumentasi2`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(3, 'DT Days', '2017-01-01', 'L', 'L', 'L', 5, 'file_1484495051.png', 'file_14843632741.jpg', '0000-00-00 00:00:00', '2017-01-15 15:44:11', 1, 1),
(5, 'Tes 1', '2001-10-10', 'dsa', 'sad', 'dsa', 4, 'file_1485080794.png', 'file_1485080795.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(6, 'Hari 1', '2017-01-25', 'Hari 1', 'Hari 1', 'Hari 1', 5, 'file_1485320411.png', 'file_14853204111.png', '0000-00-00 00:00:00', '2017-01-25 05:08:47', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `no` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`no`, `name`, `password`, `created_at`, `updated_at`, `created_by`, `updated_by`, `role`) VALUES
(1, 'primasalama', 'e10adc3949ba59abbe56e057f20f883e', '2017-01-15 03:30:58', '0000-00-00 00:00:00', 0, 0, 'asdep1'),
(2, 'asdep1', 'e10adc3949ba59abbe56e057f20f883e', '2017-01-15 02:59:43', '0000-00-00 00:00:00', 1, 1, 'asdep1'),
(3, 'asdep2', 'e10adc3949ba59abbe56e057f20f883e', '2017-01-15 02:59:43', '0000-00-00 00:00:00', 1, 1, 'asdep2'),
(4, 'asdep3', 'e10adc3949ba59abbe56e057f20f883e', '2017-01-15 03:00:16', '0000-00-00 00:00:00', 1, 1, 'asdep3'),
(5, 'asdep4', 'e10adc3949ba59abbe56e057f20f883e', '2017-01-15 03:00:16', '0000-00-00 00:00:00', 1, 1, 'asdep4'),
(6, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2017-01-15 22:23:04', '0000-00-00 00:00:00', 0, 0, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kebijakan`
--
ALTER TABLE `kebijakan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kebijakan`
--
ALTER TABLE `kebijakan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
