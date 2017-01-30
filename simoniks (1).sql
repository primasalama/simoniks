-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2017 at 11:27 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

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
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `no` int(11) NOT NULL,
  `tanggal` text NOT NULL,
  `narasiKebijakan` int(11) NOT NULL,
  `uraian` text,
  `hasil` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`no`, `tanggal`, `narasiKebijakan`, `uraian`, `hasil`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(12, 'tes', 7, 'tes', 'tes2', '2017-01-30 16:51:48', '2017-01-31 07:54:39', 3, 3),
(13, 'Minggu I Maret', 17, '', 'SK Deputi', '2017-01-30 21:55:37', '2017-01-31 13:06:39', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kebijakan`
--

CREATE TABLE `kebijakan` (
  `no` int(11) NOT NULL,
  `narasi` text NOT NULL,
  `status` text NOT NULL,
  `indikator` text NOT NULL,
  `pic` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebijakan`
--

INSERT INTO `kebijakan` (`no`, `narasi`, `status`, `indikator`, `pic`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(4, 'asodjoashdiashdiashdoa', 'hiosfohohi ih', 'hfo', 'hofhao', '2017-01-25 02:52:04', '0000-00-00 00:00:00', 1, 6),
(5, 'hdsiahdi aisdhia idhaiu ahfia diagdagiagdia gia ai', 'hai', 'ifhai', 'hfih', '2017-01-25 02:52:20', '0000-00-00 00:00:00', 1, 6),
(6, 'djioas', 'jdaoj', 'djoj', 'jdo', '2017-01-26 07:42:50', '0000-00-00 00:00:00', 1, 6),
(8, 'Koordinasi dan Pengendalian Implementasi  Kebijakan Perikanan Tangkap dan Perikanan Budidaya', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:43:32', '0000-00-00 00:00:00', 2, 6),
(9, 'Koordinasi dan Pengendalian Kebijakan Pemberian Bantuan Sarana dan Prasarana Perikanan Tangkap dan Budidaya', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:43:48', '0000-00-00 00:00:00', 2, 6),
(10, 'Koordinasi dan Sinkronisasi Kebijakan Perlindungan dan Pemberdayaan Nelayan dan Pembudidaya Ikan', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:44:07', '0000-00-00 00:00:00', 2, 6),
(11, 'Koordinasi dan Pengendalian Kebijakan Perijinan Kapal Penangkap Ikan', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:44:23', '0000-00-00 00:00:00', 2, 6),
(12, 'Koordinasi dan pengendalian Implementasi Perpres 115 Tahun 2015 tentang Satgas Pemberantasan IUU Fishing', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:44:37', '0000-00-00 00:00:00', 2, 6),
(13, 'Koordinasi dan Pengendalian Turunan UU 32/2014 Tentang Kelautan', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:44:52', '0000-00-00 00:00:00', 2, 6),
(14, 'Koordinasi kebijakan Pengembangan Standar, Keamanan dan Kesehatan Produk', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:45:09', '0000-00-00 00:00:00', 2, 6),
(15, 'Koordinasi kebijakan Pengembangan Produk Hasil Kelautan dan Perikanan', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:45:22', '0000-00-00 00:00:00', 2, 6),
(16, 'Koordinasi dan Sinkronisasi Kebijakan Konservasi Keanekaragaman Hayati Laut', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:45:40', '0000-00-00 00:00:00', 2, 6),
(17, 'Koordinasi dan Sinkronisasi Kebijakan Komisi Nasional Terumbu Karang Indonesia (CTI-CFF)', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:45:56', '0000-00-00 00:00:00', 2, 6),
(18, 'Koordinasi dan Sinkronisasi Implementasi Roadmap Konservasi dan Pengelolaan Taman Nasional Laut', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:46:08', '0000-00-00 00:00:00', 2, 6),
(19, 'Koordinasi dukungan kebijakan Komnas CTI', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:46:33', '0000-00-00 00:00:00', 2, 6),
(20, 'Koordinasi dan pengendalian kebijakan benefisasi dan hilirisasi pertambangan mineral', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:46:57', '0000-00-00 00:00:00', 3, 6),
(21, 'Koordinasi dan pengendalian kebijakan tata kelola minerba', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:47:12', '0000-00-00 00:00:00', 3, 6),
(22, 'Koordinasi dan pengendalian tata kelola garam', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:47:28', '0000-00-00 00:00:00', 3, 6),
(23, 'Koordinasi dan pengendalian kebijakan penyediaan energi primer', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:47:43', '0000-00-00 00:00:00', 3, 6),
(24, 'Koordinasi dan pengendalian kebijakan pengembangan cadangan energi', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:48:03', '0000-00-00 00:00:00', 3, 6),
(25, 'Koordinasi sinkronisasi dan pengendalian kebijakan konversi BBM ke BBG', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:48:23', '0000-00-00 00:00:00', 3, 6),
(26, 'Koordinasi dan pengendalian kebijakan pemenuhan energi bagi pembangunan bidang kemaritiman', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:48:43', '0000-00-00 00:00:00', 3, 6),
(27, 'Koordinasi dan pengendalian kebijakan deversifikasi dan desentralisasi energi', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:48:58', '0000-00-00 00:00:00', 3, 6),
(28, 'Koordinasi dan pengendalaian percepatan pembangunan dan diversifikasi listrik', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:49:12', '0000-00-00 00:00:00', 3, 6),
(29, 'Koordinasi dan pengendalian kebijakan pengurangan emisi karbon dari sektor energi', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:49:36', '0000-00-00 00:00:00', 3, 6),
(30, 'Koordinasi dan pengendalian penurunan angka dwelling time', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:50:08', '0000-00-00 00:00:00', 4, 6),
(31, 'Koordinasi fasilitasi kebijakan industri Maintenance Repair and Overhaul (MRO)', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:50:24', '0000-00-00 00:00:00', 4, 6),
(32, 'Koordinasi fasilitasi kebijakan Penanganan Regulated Agent (RA)', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:50:39', '0000-00-00 00:00:00', 4, 6),
(33, 'Koordinasi fasilitasi Pengembangan Kawasan Pusat Logistik Berikat (PLB)', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:51:15', '0000-00-00 00:00:00', 4, 6),
(34, 'Koordinasi dan sinkronisasi penerapan Indonesia Single Window (INSW)', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:51:30', '0000-00-00 00:00:00', 4, 6),
(35, 'Koordinasi Kebijakan Revitalisasi Pelabuhan\r\n', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:51:51', '0000-00-00 00:00:00', 4, 6),
(36, 'Koordinasi dan Sinkronisasi Bebas Visa Kunjungan', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:52:05', '0000-00-00 00:00:00', 4, 6),
(37, 'Koordinasi Pengembangan 10 Destinasi Pariwisata Prioritas Khususnya Wakatobi', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:52:23', '0000-00-00 00:00:00', 4, 6),
(38, 'Koordinasi pengembangan 10 destinasi pariwisata khususnya Labuan Bajo', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:52:39', '0000-00-00 00:00:00', 4, 6),
(39, 'Koordinasi pengembangan 10 destinasi pariwisata prioritas khususnya Bromo Tengger Semeru', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:52:53', '0000-00-00 00:00:00', 4, 6),
(40, 'Koordinasi pengembangan 10 destinasi prioritas khususnya Mandalika', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:53:09', '0000-00-00 00:00:00', 4, 6),
(41, 'Koordinasi dan sinkronisasi kebijakan eYachters (Electronic Yacht Registration System) dan Cruise', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:53:22', '0000-00-00 00:00:00', 4, 6),
(42, 'Koordinasi dan sinkronisasi tata ruang laut nasional', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:53:44', '0000-00-00 00:00:00', 4, 6),
(43, 'Koordinasi dan pengendalian penjabaran UU 27/2007 tentang PWP3K Jo UU No. 1/2014 Tentang Perubahan UU 27/2007 tentang PWP3K', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:53:58', '0000-00-00 00:00:00', 4, 6),
(44, 'Koordinasi Kebijakan Pengelolaan BMKT dan Pengembangan Museum/Wisata Shipwreck', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:54:27', '0000-00-00 00:00:00', 5, 6),
(45, 'Koordinasi Penurunan Beban Pencemaran Kawasan Ekosistem Pantai', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:54:41', '0000-00-00 00:00:00', 5, 6),
(46, 'Koordinasi dan Pengendalian Implementasi Kebijakan Pengelolaan Pencemaran Limbah Cair dan Padat Perkotaan', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:57:18', '0000-00-00 00:00:00', 5, 6),
(47, 'Koordinasi dan Fasilitasi Penyusunan Kebijakan Nasional Pengelolaan Kebencanaan Maritim ', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:57:34', '0000-00-00 00:00:00', 5, 6),
(48, 'Koordinasi, sinkronisasi dan fasilitasi upaya penurunan Indeks Risiko Bencana Indonesia sebesar 4,7% di Tahun 2017 ', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:57:47', '0000-00-00 00:00:00', 5, 6),
(49, 'Koordinasi, Sinkronisasi dan Fasilitasi Rehabilitasi Pesisir dan Laut, Pengurangan Risiko Kebencanaan Maritim dan Dampak Perubahan Iklim ', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:58:01', '0000-00-00 00:00:00', 5, 6),
(50, 'Koordinasi, Sinkronisasi dan Fasilitasi Upaya Dukungan Kebijakan Penurunan Emisi GRK Nasional Sebesar 26% Pada Tahun 2017 Dari Sektor Pesisir dan Laut', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:58:18', '0000-00-00 00:00:00', 5, 6),
(51, 'Koordinasi, Sinkronisasi dan Fasilitasi Upaya Pengendalian Kebijakan Pencapaian Indeks Kualitas Lingkungan Hidup Indonesia Menjadi 65 Pada Tahun 2017', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:58:30', '0000-00-00 00:00:00', 5, 6),
(52, 'Koordinasi dan Pengendalian Limbah  Oil Spill', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:58:43', '0000-00-00 00:00:00', 5, 6),
(53, 'Koordinasi dan Pengendalian Kebijakan Penerapan Sistem Managemen Lingkungan (ISO 14001) di Pelabuhan', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:58:57', '0000-00-00 00:00:00', 5, 6),
(54, 'Koordinasi dan Pengendalian Kebijakan Pencapaian Luas Kawasan Konservasi Perairan Menjadi 17,9 Juta Ha pada Tahun 2017', 'Selesai', 'Selesai', 'Selesai', '2017-01-30 18:59:11', '0000-00-00 00:00:00', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `no` int(11) NOT NULL,
  `uraian` text NOT NULL,
  `tanggal` text NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`no`, `uraian`, `tanggal`, `hasil`, `tindak_ljt`, `masalah`, `narasiKebijakan`, `dokumentasi1`, `dokumentasi2`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(4, 'koordinasi', 'Minggu III Januari', 'SK Deputi', 'SK', '', 11, 'file_1485813126.jpg', 'file_1485813127.jpg', '0000-00-00 00:00:00', '2017-01-31 13:05:15', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `name`, `password`, `created_at`, `updated_at`, `created_by`, `updated_by`, `role`) VALUES
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
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kebijakan`
--
ALTER TABLE `kebijakan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
