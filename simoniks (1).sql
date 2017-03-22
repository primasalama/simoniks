-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2017 at 04:33 AM
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
  `tglPengajuan` date NOT NULL,
  `narasiKebijakan` int(11) NOT NULL,
  `uraian` text,
  `anggaran` int(12) NOT NULL,
  `hasil` text NOT NULL,
  `tglPengajuanSpd` date NOT NULL,
  `tglSpd` date NOT NULL,
  `tglPencairan` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`no`, `tanggal`, `tglPengajuan`, `narasiKebijakan`, `uraian`, `anggaran`, `hasil`, `tglPengajuanSpd`, `tglSpd`, `tglPencairan`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(14, 'Minggu II Februari', '0000-00-00', 63, 'rapat koordinasi penyusunan rencana aksi nasional pengelolaan ikan hias ', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 01:55:57', '0000-00-00 00:00:00', 2, 2),
(15, '14 Februari 2017', '0000-00-00', 66, 'Sosialisasi hasil Senior Official Meeting CTI CFF ke 13 dan rencana tindak lanjut di tingkat nasional', 0, 'Draft NPOA CTI-CFF Indonesia', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 01:56:26', '2017-02-24 07:57:11', 2, 2),
(16, 'minggu II Maret\r\n', '0000-00-00', 22, 'sosialisasi terkait dengan Dwelling Time pada event bursa pariwisata internasional terbesar(ITB Berlin), dan Belanda\r\n', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 02:02:40', '2017-02-07 02:04:31', 4, 4),
(17, 'Minggu II Maret', '0000-00-00', 28, 'sosialisasi terkait dengan BVK pada event bursa pariwisata internasional terbesar(ITB Berlin), dan Belanda\r\n', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 02:04:11', '0000-00-00 00:00:00', 4, 4),
(18, 'Minggu II Maret', '0000-00-00', 33, 'sosialisasi terkait dengan yacht pada event bursa pariwisata internasional terbesar(ITB Berlin), dan Belanda\r\n', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 02:05:01', '0000-00-00 00:00:00', 4, 4),
(19, 'Minggu III Maret', '0000-00-00', 33, 'sosialisasi yacht dan cruise pada event seatrade cruise global di miami florida\r\n', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 02:06:53', '0000-00-00 00:00:00', 4, 4),
(20, 'Minggu IV Maret - minggu I April\r\n', '0000-00-00', 33, 'sosialisasi yacht dan promosi sail sabang di auckland, opua, whangerei (new zealand)\r\n', 0, '', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-07 02:07:59', '0000-00-00 00:00:00', 4, 4),
(21, '7-10 Maret 2017', '0000-00-00', 63, 'Mengikuti Sidang IPBES-5 (Intergovernmental Science-Policy on Biodiversity and Ecosystem Services) di Bonn-Jerman', 0, 'Kesepakatan IPBES-5', '0000-00-00', '0000-00-00', '0000-00-00', '2017-02-24 07:55:51', '0000-00-00 00:00:00', 2, 2),
(22, '0930-11.30/17 maret 2017', '0000-00-00', 45, 'Rapat koordinasi: \r\n1. sosialisasi implementasi sistem manajemen lingkungan (ISO 14001) di Pelabuhan Prioritas\r\n 2. implementasi pengendalian limbah-limbah di pelabuhan menurut MARPOL 73/78 ', 0, '1. Rencana aksi di tahun 2017\r\n2. Gambaran kondisi pengelolaan limbah-limbah di pelabuhan', '0000-00-00', '0000-00-00', '0000-00-00', '2017-03-09 06:37:55', '0000-00-00 00:00:00', 5, 5),
(23, '1330-15.30/17 maret 2017', '0000-00-00', 44, 'Rapat koordinasi:\r\n1. evaluasi kunjungan lapangan ke Pantai Nongsa-Batam dan Hasil valuasi ekonomi kerugian sosek masyarakat.\r\n2. Rencana sosialisasi penanggulangan tumpahan minyak di laut\r\n', 0, '1. Rekomendasi kasus nongsa batam utk K/L terkait\r\n2. rekomendasi rencana sosialisasi penanggulangan tumpahan minyak di laut\r\n', '0000-00-00', '0000-00-00', '0000-00-00', '2017-03-09 06:42:52', '0000-00-00 00:00:00', 5, 5),
(24, '16 Maret 2017', '0000-00-00', 45, 'Monitoring dan evaluasi penampungan limbah (landfill) PT. Toba Pulp Lestari/PT.TPL (kasus)', 0, 'Hasil klarifikasi dan rekomendasi tentang penampungan limbah', '0000-00-00', '0000-00-00', '0000-00-00', '2017-03-09 06:53:09', '0000-00-00 00:00:00', 5, 5),
(25, '20/21 Maret 2017', '0000-00-00', 46, 'Rapat Persiapan Koordinasi dan Fasilitasi Mempersiapkan Provinsi dalam Pengelolaan Kawasan Konservasi Perairan pasca UU 32/2014 tentang PEMDA', 0, 'Persiapan kesiapan Rapat Koordinasi dan fasilitasi yang menghadirkan semua provinsi', '0000-00-00', '0000-00-00', '0000-00-00', '2017-03-09 08:23:43', '0000-00-00 00:00:00', 5, 5);

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
(11, 'Koordinasi dan Pengendalian Kebijakan Benefisasi dan Hirilisasi Pertambangan Mineral', '0', '0', '0', '2017-01-11 02:39:23', '2017-01-11 02:39:23', 3, 6),
(13, 'Koordinasi dan Pengendalian Kebijakan Tata Kelola Minerba', '0', '0', '0', '2017-01-11 02:39:37', '2017-01-11 02:39:37', 3, 6),
(14, 'Koordinasi dan Pengendalian Tata Kelola Garam', '0', '0', '0', '2017-01-11 02:39:52', '2017-01-11 02:39:52', 3, 6),
(15, 'Koordinasi dan Pengendalian kebijakan Penyediaan Energi Primer', '0', '0', '0', '2017-01-11 02:40:33', '2017-01-11 02:40:33', 3, 6),
(16, 'Koordinasi dan Pengendalian Kebijakan Pengembangan Cadangan Energi', '0', '0', '0', '2017-01-11 02:40:52', '2017-01-11 02:40:52', 3, 6),
(17, 'Koordinasi Sinkronisasi dan Pengendalian Kebijakan Konversi BBM ke BBG', '0', '0', '0', '2017-01-11 02:41:10', '2017-01-11 02:41:10', 3, 6),
(18, 'Koordinasi dan Pengendalian Kebijakan Pemenuhan Energi Bagi Pembangunan Bidang Kemaritiman', '0', '0', '0', '2017-01-11 02:41:30', '2017-01-11 02:41:30', 3, 6),
(19, 'Koordinasi dan Pengendalian Kebijakan Deversifikasi dan Desentralisasi Energi', '0', '0', '0', '2017-01-11 02:41:48', '2017-01-11 02:41:48', 3, 6),
(20, 'Koordinasi dan Pengendalaian Percepatan Pembangunan dan Diversifikasi Listrik', '0', '0', '0', '2017-01-11 02:42:16', '2017-01-11 02:42:16', 3, 6),
(21, 'Koordinasi dan Pengendalian Kebijakan Pengurangan Emisi Karbon dari Sektor Energi', '0', '0', '0', '2017-01-11 02:42:26', '2017-01-11 02:42:26', 3, 6),
(22, 'Koordinasi dan pengendalian penurunan angka dwelling time', '0', '0', '0', '2017-01-11 02:42:42', '2017-01-11 02:42:42', 4, 6),
(23, 'Koordinasi fasilitasi kebijakan industri Maintenance Repair and Overhaul (MRO)', '0', '0', '0', '2017-01-11 02:42:53', '2017-01-11 02:42:53', 4, 6),
(24, 'Koordinasi fasilitasi kebijakan Penanganan Regulated Agent (RA)', '0', '0', '0', '2017-01-11 02:43:04', '2017-01-11 02:43:04', 4, 6),
(25, 'Koordinasi fasilitasi Pengembangan Kawasan Pusat Logistik Berikat (PLB)', '0', '0', '0', '2017-01-11 02:43:16', '2017-01-11 02:43:16', 4, 6),
(26, 'Koordinasi dan sinkronisasi penerapan Indonesia Single Window (INSW)', '0', '0', '0', '2017-01-11 02:43:32', '2017-01-11 02:43:32', 4, 6),
(27, 'Koordinasi Kebijakan Revitalisasi Pelabuhan', '0', '0', '0', '2017-01-11 02:43:47', '2017-01-11 02:43:47', 4, 6),
(28, 'Koordinasi dan Sinkronisasi Bebas Visa Kunjungan', '0', '0', '0', '2017-01-11 02:44:02', '2017-01-11 02:44:02', 4, 6),
(29, 'Koordinasi Pengembangan 10 Destinasi Pariwisata Prioritas Khususnya Wakatobi', '0', '0', '0', '2017-01-11 02:44:58', '2017-01-11 02:44:58', 4, 6),
(30, 'Koordinasi pengembangan 10 destinasi pariwisata khususnya Labuan Bajo', '0', '0', '0', '2017-01-11 02:45:19', '2017-01-11 02:45:19', 4, 6),
(31, 'Koordinasi pengembangan 10 destinasi pariwisata prioritas khususnya Bromo Tengger Semeru', '0', '0', '0', '2017-01-11 02:45:32', '2017-01-11 02:45:32', 4, 6),
(32, 'Koordinasi pengembangan 10 destinasi prioritas khususnya Mandalika', '0', '0', '0', '2017-01-11 02:45:49', '2017-01-11 02:45:49', 4, 6),
(33, 'Koordinasi dan sinkronisasi kebijakan eYachters (Electronic Yacht Registration System) dan Cruise', '0', '0', '0', '2017-01-11 07:07:38', '2017-01-11 07:07:38', 4, 6),
(34, 'Koordinasi dan sinkronisasi tata ruang laut nasional', '1. Baru dimulai dua kali rapat persiapan dengan KKP\r\n2. Akan dilakukan beberapa kali kegiatan pengumpulan data (FGD) dan setelah dilakukan ground check/survey oleh unit teknis/sector, selanjutnya disusun dokumen awal, dokumen antara, dan dokumen final dengan beberapa kali konsultasi publik, maka akan dilakukan pemantapan/harmonisasi ranperpres dan penetapan di Sekretariat Kabinet \r\n', '1. Rancangan Perpres tentang Rencana Zonasi Kawasan Strategis Nasional Jabodetabekpunjur\r\n2. Rancangan Perpres tentang Rencana Zonasi Kawasan Strategis Nasional BBK (Batam, Bintan, Karimun)\r\n3. Rancangan Perpres tentang Rencana Zonasi Kawasan Laut Jawa\r\n4. Rancangan Perpres tentang Rencana Zonasi Kawasan Selat Makassar\r\n5. Membentuk Pokja Penyusunan RZ Kawasan Laut\r\n', 'Kedeputian lain di Kemenko Kemaritiman, KKP, Pariwisata, ESDM, Kemenhub, KLHK, BIG, Sekretariat Kabinet, Pushidrosal, Pemerintah Daerah, Mitra seperti CI, CTC, TNC, WWF, WCS ', '2017-02-03 07:54:38', '2017-02-03 07:54:38', 4, 6),
(35, 'Koordinasi dan pengendalian penjabaran UU 27/2007 tentang PWP3K Jo UU No. 1/2014 Tentang Perubahan UU 27/2007 tentang PWP3K', '1. Rapat persiapan terkait Rakernis \r\n2. Akan dilakukan beberapa kali kegiatan monev untuk mendorong percepatan ranperda tentang RZWP3K', 'Tercapainya target dalam RKP 2017 yakni 8 (delapan) buah Perda tentang RZWP3K ', 'Kedeputian lain di Kemenko Kemaritiman, KKP, Pariwisata, ESDM, Kemenhub, KLHK, BIG, Sekretariat Kabinet, Pushidrosal, dan  Pemerintah Daerah, NGO', '2017-02-03 07:55:56', '2017-02-03 07:55:56', 4, 6),
(36, 'Koordinasi Kebijakan Pengelolaan BMKT dan Pengembangan Museum/Wisata Shipwreck', '0', '0', '0', '2017-01-11 07:09:38', '2017-01-11 07:09:38', 5, 6),
(37, 'Koordinasi Penurunan Beban Pencemaran Kawasan Ekosistem Pantai', '0', '0', '0', '2017-01-11 07:10:06', '2017-01-11 07:10:06', 5, 6),
(38, 'Koordinasi dan Pengendalian Implementasi Kebijakan Pengelolaan Pencemaran Limbah Cair dan Padat Perkotaan', '0', '0', '0', '2017-01-11 07:10:30', '2017-01-11 07:10:30', 5, 6),
(39, 'Koordinasi dan Fasilitasi Penyusunan Kebijakan Nasional Pengelolaan Kebencanaan Maritim', '-. Selama tahun 2016 Kemenko Bidang Kemaritiman telah melaksanakan 9 (sembilan) kali pertemuan terdiri dari rapat koordinasi, workshop dan konsinyasi terkait dengan pengelolaan kebencanaan maritim.\r\n-. Dari pertemuan-pertemuan tersebut telah dihasilkan Surat Keputusan (SK) Kelompok Kerja Pengelolaan Kebencanaan Maritim (SK Pokja Pengelolaan Kebencanaan Maritim tahun 2016), Arahan Kebijakan Pengelolaan Kebencanaan Maritim, Draft Naskah Akademik dan Draft Naskah Kebijakan Pengelolaan Kebencanaan Maritim.', '-. Revisi SK Pokja Pengelolaan Kebencanaan Maritim tahun 2016 \r\n-. Draft Naskah Akademik dan Draft Naskah Kebijakan Pengelolaan Kebencanaan Maritim diharapkan final pada tahun 2017 dalam bentuk peraturan perundang-undangan (Perpres).', 'BNPB, KKP, KLHK, Kemen ATR, Kemendesa PDTT, Kemensos, Kemenkes, BPPT, BMKG, LIPI, IPB, UNSYIAH, STIS, Praktisi, Media', '2017-03-22 01:53:19', '2017-03-22 01:53:19', 5, 6),
(40, 'Koordinasi, sinkronisasi dan fasilitasi upaya penurunan Indeks Risiko Bencana Indonesia sebesar 4,7% di Tahun 2017', '-. IRKM dimaksudkan untuk mendukung kebijakan BNPB terkait dengan Penurunan Indeks Risiko Bencana Indonesia (IRBI) sebesar 4,7% di tahun 2017, termasuk dari bencana kemaritiman.\r\n-. Konsep IRKM perlu dikembangkan mengingat saat ini Indonesia belum memiliki indeks risiko khusus kebencanaan maritim.\r\n-. IRKM diharapkan dapat memperkuat IRBI khususnya terkait dengan bencana kemaritiman.\r\n-. IRKM diharapkan tidak hanya mencakup bencana alam saja tetapi juga bencana non alam dan bencana karena perbuatan manusia, seperti tumpahan minyak dari kapal, dan lain-lain.\r\n-. IRKM diharapkan dapat menjadi instrumen bagi Kemenko Bidang Kemaritiman untuk melakukan fungsi koordinasi, sinkronisasi, sinergi dan pengendalian pengelolaan kebencanaan maritim di K/L dan pemerintah daerah memainstreamkan kebencanaan maritim di tiap K/L dan pemerintah daerah.', '-. Draft Kebijakan Nasional Pengelolaan Kebencanaan Maritim dan draft Naskah Akademis Kebijakan Nasional Pengelolaan Kebencanaan Maritim..\r\n-. IRKM diharapkan tidak hanya dikembangkan hingga ke tingkat provinsi tetapi juga dikembangkan sampai dengan tingkat kabupaten/kota, sama seperti IRBI saat ini', 'BNPB, KKP, KLHK, Kemen ATR, Kemendesa PDTT, Kemensos, Kemenkes, BPPT, BMKG, LIPI, STIS, IPB, UNSYAH, Praktisi dan Media', '2017-03-22 01:53:50', '2017-03-22 01:53:50', 5, 6),
(41, 'Koordinasi, Sinkronisasi dan Fasilitasi Rehabilitasi Pesisir dan Laut, Pengurangan Risiko Kebencanaan Maritim dan Dampak Perubahan Iklim ', 'Belum ada one map policy (dari BIG) terkait dengan rehabilitasi kerusakan pesisisr dan laut secara nasional. \r\n-. 1,8 juta ha mangrove di Indonesia dalam kondisi rusak, yang perlu segera direhabilitasi. dengan mempertimbangkan laju kerusakan mangrove setiap tahunnya. \r\n-. Terdapat perbedaan kriteria kerusakan mangrove antara KLHK dan KKP. Perbedaan kriteria ini perlu dipertimbangkan untuk dilakukan standarisasi. \r\n-. -	Terdapat perbedaan pendekatan dalam melaksanakan kegiatan rehabilitasi kerusakan pesisir dan laut dimana KLHK menggunakan pendekatan luasan (hektar) sedangkan KKP menggunakan pendekatan jumlah batang yang ditanam. Perbedaan pendekatan ini perlu dipertimbangkan untuk dicermati kembali.\r\n-	Kontribusi KKP dalam merehabilitasi kerusakan pesisir dan laut selama ini hanya sebesar 1% dari total upaya rehabilitasi yang seharusnya dilakukan.\r\n-	Perpres No. 73 Tahun 2012 tentang Strategi Nasional Pengelolaan Ekosistem Mangrove disepakati untuk diproses lebih lanjut oleh Kementerian Koordinator Bidang Perekonomian, tanpa merubah substansi, dengan pertimbangan efisiensi waktu. Perpres tersebut akan disesuaikan dengan nomenklatur K/L yang baru. Dalam Perpres tersebut juga akan dicantumkan keterlibatan Kementerian Koordinator Bidang Kemaritiman.', '-. Penyusunan Perpres tentang Rehabilitasi Kerusakan Pesisir dan Laut.\r\n-. Dokumen Strategi Nasional Pengelolaan Ekosistem Mangrove dan Draft Rencana Aksi Mangrove \r\n-. Rehabilitasi Kerusakan Pesisir dan Laut serta Pengelolaan Kebencanaan Maritim diusulkan menjadi Isu Strategis Tahun 2018.', 'Kemenko Bidang Perekonomian, KKP, KLHK, Kemendagri, BIG, BAPPENAS, PT. Toyota Motor Manufacturing, Yayasan Mangrove Indonesia, Wetlands International Indonesia Program ', '2017-03-22 01:54:12', '2017-03-22 01:54:12', 5, 6),
(42, 'Koordinasi, Sinkronisasi dan Fasilitasi Upaya Dukungan Kebijakan Penurunan Emisi GRK Nasional Sebesar 26% Pada Tahun 2017 Dari Sektor Pesisir dan Laut', '0', '0', '0', '2017-01-11 07:11:29', '2017-01-11 07:11:29', 5, 6),
(43, 'Koordinasi, Sinkronisasi dan Fasilitasi Upaya Pengendalian Kebijakan Pencapaian Indeks Kualitas Lingkungan Hidup Indonesia Menjadi 65 Pada Tahun 2017', '0', '0', '0', '2017-01-11 07:11:45', '2017-01-11 07:11:45', 5, 6),
(44, 'Koordinasi dan Pengendalian Limbah  Oil Spill', '1. Draft Tim Daerah Penanggulangan Tumpahan Minyak di Bintan \r\n2. Rencana reviu  atas Perpres 109/2006, \r\n3. Membentuk Tim Pokja bagi penyelesaian masalah\r\n4. memberikan masukan kepada Tim Nasional Penanggulangan Tumpahan Minyak Di Laut. ', '1. Drilling exercise Tim Daerah Bintan.\r\n2. Reviu Perpres 109/2006\r\n3. Membentuk Tim Pokja bagi penyelesaian masalah\r\n4. Masukan ke Tim Nasional Penanggulangan Tumpahan Minyak Di Laut.', 'KEMHUB, KLHK, KKP, ESDM, LIPI, LAPAN, TNI AL, BAKAMLA, LEMIGAS, BMKG, SKKMIGAS', '2017-02-03 06:49:47', '2017-02-03 06:49:47', 5, 6),
(45, 'Koordinasi dan Pengendalian Kebijakan Penerapan Sistem Managemen Lingkungan (ISO 14001) di Pelabuhan', '1. Kesepakatan antara Kemenko Maritim, Kemhub dan KLHK dengan Pelindo I, III dan IV dalam pelaksanaan pencapaian Sistem Manajemen Lingkungan ISO 14001 di Pelabuhan', '1. Terlaksanannya koordinasi pelaksanaan ISO 14001 di pelabuhan prioritas', 'Kemhub, KLHK, KKP, SKKMIGAS, Pelindo I,II,III,IV', '2017-02-03 06:50:39', '2017-02-03 06:50:39', 5, 6),
(46, 'Koordinasi dan Pengendalian Kebijakan Pencapaian Luas Kawasan Konservasi Perairan Menjadi 17,9 Juta Ha pada Tahun 2017', '1. Kriteria Pengelolaan Kawasan Konservasi Perairan Yang Mensejahterakan\r\n2. Buku Kebijakan Pengelolaan Kawasan Konservasi Perairan di Indonesia  ', '1. Penilaian  Pengelolaan Kawasan Konservasi Perairan Yang Mensejahterakan\r\n2. Hasil Uji Coba Penilaian di beberapa kawasan konservasi perairan.', 'KLHK, KKP, Kempar, ESDM, Kemhub, universitas, NGO Internasional, ', '2017-02-03 06:51:35', '2017-02-03 06:51:35', 5, 6),
(55, 'Koordinasi dan Pengendalian Implementasi  Kebijakan Perikanan Tangkap dan Perikanan Budidaya', '-. Kecilnya pemanfaatan potensi budidaya laut karena belum tersedianya payung hukun brtupa peraturan yang menaungi tata ruang pengelolaan/ pemanfaatan ruang laut\r\n-. Tingginya modal yang diperlukan dan ketersediaan yang terbatas sehingga kurangnya minat masyarakat\r\n-. Melakukan koordinasi dengan K/L terkait agar program-program yang dicanangkan dapat diselesaikan sesuai dengan target', '0', '0', '2017-03-22 02:32:46', '2017-03-22 02:32:46', 2, 6),
(56, 'Koordinasi dan Pengendalian Kebijakan Pemberian Bantuan Sarana dan Prasarana Perikanan Tangkap dan Budidaya', '-. Peningkatan kesejahteraan masyarakat nelayan\r\n-. Koordinasi dengan semua stackholder sehingga bantuan yang diberikan dapat tepat sasaran', '0', '0', '2017-03-22 03:15:42', '2017-03-22 03:15:42', 2, 6),
(57, 'Koordinasi dan Sinkronisasi Kebijakan Perlindungan dan Pemberdayaan Nelayan dan Pembudidaya Ikan', '-. Masih harus disusun beberapa peraturan turunan dari UU No. 7 tahun 2016, baik berbentuk peraturan pemerintah, peraturan presiden, maupun peraturan menteri', '0', '0', '2017-03-22 03:25:41', '2017-03-22 03:25:41', 2, 6),
(58, 'Koordinasi dan Pengendalian Kebijakan Perijinan Kapal Penangkap Ikan', '0', '0', '0', '2017-01-11 02:36:59', '2017-01-11 02:36:59', 2, 6),
(59, 'Koordinasi dan pengendalian Implementasi Perpres 115 Tahun 2015 tentang Satgas Pemberantasan IUU Fishing', '0', '0', '0', '2017-01-11 02:37:16', '2017-01-11 02:37:16', 2, 6),
(60, 'Koordinasi dan Pengendalian Turunan UU 32/2014 Tentang Kelautan', '0', '0', '0', '2017-01-11 02:37:27', '2017-01-11 02:37:27', 2, 6),
(61, 'Koordinasi kebijakan Pengembangan Standar, Keamanan dan Kesehatan Produk', '-. Memastikan bahwa semua produk kelautan dan perikanan tersebut telah memenuhi standar keamanan dan keselamatan produk; melalui sertifikasi produk.\r\n-. Koordinasi dan sinkronisasi berbagai kebijakan yang terkait dengan pengembangan standar keamanan dan keselamatan produk kelautan, baik dengan K/L, pemerintah pusat dan pemerintah daerah, serta stackholder lainnya', '0', '0', '2017-03-22 03:01:20', '2017-03-22 03:01:20', 2, 6),
(62, 'Koordinasi kebijakan Pengembangan Produk Hasil Kelautan dan Perikanan', '-.Mendorong dan memfasilitasi berbagai kebijakan dan program yang terkait dengan pengembangan produk kelautan dan perikanan ', '0', '0', '2017-03-22 03:03:58', '2017-03-22 03:03:58', 2, 6),
(63, 'Koordinasi dan Sinkronisasi Kebijakan Konservasi Keanekaragaman Hayati Laut', '0', '0', '0', '2017-01-11 02:38:16', '2017-01-11 02:38:16', 2, 6),
(64, 'Koordinasi dan Sinkronisasi Kebijakan Komisi Nasional Terumbu Karang Indonesia (CTI-CFF)', '0', '0', '0', '2017-02-03 06:26:13', '2017-02-03 06:26:13', 2, 6),
(65, 'Koordinasi dan Sinkronisasi Implementasi Roadmap Konservasi dan Pengelolaan Taman Nasional Laut', '0', '0', '0', '2017-01-11 02:38:47', '2017-01-11 02:38:47', 2, 6),
(66, 'Koordinasi dukungan kebijakan Komnas CTI', '0', '0', '0', '2017-01-11 02:39:03', '2017-01-11 02:39:03', 2, 6);

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`no`, `uraian`, `tanggal`, `hasil`, `tindak_ljt`, `masalah`, `narasiKebijakan`, `dokumentasi1`, `dokumentasi2`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(6, 'Rapat Koordinasi Tim kecil tentang pembentukan Tim Survey Komponen Biaya Logistik di 5 Pelabuhan Utama (Tanjung Priok, Belawan, Tanjung Emas, Tanjung Perak, Makassar) ', '27 Januari 2017', 'Diperoleh Hasil yang Komprehensif terhadap Komponen Biaya Logistik pada ke lima pelabuhan utama. dengan hasil ini dapat digunakan sebagai pijakan penetapan kebijakan kedepan berkaitan dengan penetapan komponen apa saja dan berapa besar biaya logistik yang seharusnya di tiap pelabuhan utama.', 'Pembahasan proposal tentang tindak lanjut Survey. Aakan dilakukan pemaparan dari Pihak ke 3 berkaitan dengan isi proposal yang akan diajukan sebagi bahan dasar  Survey. Direncanakan pemaparan oleh pihak ke 3 dihadapan Tim Asdep 3 Deputi 2 yang dilakukan pada tgl 6 Februari 2017. Bila proposal yg diajukan dapat diterima maka akan dilanjutkan dengan tindakan pembuatan kontrak kerja sama atau MOU antara Asdep 3 dengan pihak ke 3 (rekanan).', 'Beberapa waktu lalu (Akhir Oktober 2016 - Awal Januari 2017) data lapangan menunjukan bahwa telah menurun Angka Dwelling Time (DT) di kelima pelabuhan utama (Tanjung Priok, Belawan, Tanjung Emas, Tanjung Perak, Makassar) hingga mendekati 2,5 hari. Dengan menurunnya angka DT seharusnya mempengaruhi ongkos logistik yang ikut turun, namun kenyataan dilapangan tidak demikian. Justru malah lebih besar 2-3 kali lipat dibanding seharusnya. Ini menjadi permaslahan yang sangat berarti bagi naik turunnya harga komoditi maupun barang. Dengan adanya permasalahan ini maka kami beranggapan perlu dibentuk Tim Independen yang dapat mewakili Kemenkomar (Deputi 2) untuk melakukan survey langsung di ke 5 lokasi pelabuhan utama untuk menemukan berapa besar sebenarnya biaya logistik dan komponen tak terduga lainnya.', 22, 'file_1484125363.jpg', 'file_14841253631.jpg', '0000-00-00 00:00:00', '2017-01-11 09:13:09', 4, 4),
(7, 'Rapat persiapan penyusunan rancangan Peraturan Presiden tentang RZ Kawasan Laut meliputi KSN dan Kawasan Antarwilayah', 'Jumat/27 Januari 2017', 'Rancangan Peraturan Presiden tentang Ruang Zonasi Kawasan Laut ', 'Mengingat penyusunan rancangan Perpres tentang RZ Kawasan laut membutuhkan proses yang panjang karena terlebih dahulu harus melakukan pengumpulan data ke seluruh sektor dan kegiatan ground check berupa beberapa kegiatan survei (arus dan gelombang, pasang surut, kualitas fisika/biologi/kimia perairan, ekosistem baik itu mangrove, padang lamun dan terumbu karang, ikan demersal, ikan pelagis, pemanfaatan eksisting, SDA, risiko bencana, dan sosial ekonomi maka saat ini KKP masih melakukan pengumpulan data yang diperlukan. Setelah data diperoleh dan dikumpulkan dari seluruh sektor maka akan dilakukan dokumentasi awal, antara, dan final yang masing-masing disisipi dengan kegiatan konsultasi publik. Kemenko Bidang Kemaritiman siap untuk mendukung kegiatan penyusunan rancangan Perpres tentang RZ Kawasan laut dan akan menyesuaikan lokasi RZ sesuai dengan prioritas yang telah ditetapkan oleh KKP yakni KSN Jabodetabekpunjur, KSN BBK (Batam, Bintan, dan Karimun), Laut Jawa, dan Selat Makassar. Masih akan dilakukan pembahasan lebih lanjut terkait hal di atas dalam format rapat persiapan.', 'Penyusunan RZ Tata Ruang, disamping membutuhkan proses yang panjang dan lama juga memberlukan  yang besar. oleh karena itu, KKP mengharapkan dukungan dari Kemenko Bidang Kemaritiman terkait penganggarannya dengan turut melakukan beberapa kegiatan pengumpulan data (rakor/FGD), pemantapan rancangan perpres, harmonisasi perpres, konsultasi publik terkait draft dokumen awal, antara, dan final serta penetapan di Sekretariat Kabinet.', 34, 'file_1486351226.JPG', 'file_14863512261.JPG', '0000-00-00 00:00:00', '2017-02-24 07:18:19', 4, 4),
(9, 'RAPAT OIL SPILL NONGSA\r\n      \r\nTujuan\r\n1.	Melakukan koordinasi akibat tumpahan minyak di pulau Nongsa Batam\r\n2.	Menginventarisasi ketersediaan data di K/L bagi bukti dan persiapan tuntutan ganti rugi\r\n\r\nData K/L yang sudah terkumpul meliputi:\r\nOil Modeling (BMKG dan KLHK), Citra Satelit (Litbang-KKP), Sampel Minyak sedang proses pengiriman ke Lemigas untuk uji finger print. Yang belum terkumpul adalah data minyak dari kapal (joint sampling di Singapore) dan data kerugian sosek dan lingkungan.\r\n', '09.30-12.00/2 Februari 2017', 'koordinasi pendataan bagi persiapan tuntutan ganti rugi kerugian masyarakat nelayan dan lingkungan hidup.', '1.	Melakukan koordinasi lebih lanjut terkait penanganan masalah tumpahan minyak di Nongsa berdasarkan data-data yang terkumpul. Mengadakan rapat lanjutan dalam waktu dekat guna koordinasi lebih lanjut.\r\n2.	Merencanakan kemungkinan survey sosek dan lingkungan atas kerugian yang diderita oleh masyarakat pesisir.\r\n', 'kurang aktifnya tim nasional penanggulangan tumpahan minyak di laut dan mengkoordinasikan tim nasional sehingga peran aktif kemenkomar menjadi krusial. tantangan besar untuk mengaktifkan kembali tim nasional agar lebih tangguh dan aktif.', 44, 'file_1487822826.jpg', 'file_14878228261.jpg', '0000-00-00 00:00:00', '2017-02-23 04:07:06', 5, 5),
(10, 'Keberadaan Kawasan Konservasi Perairan di Pulau-Pulau Kecil Sebagai Adaptasi dan Mitigasi Terhadap Dampak Perubahan Iklim \r\n\r\nTujuan\r\n1.	Melakukan koordinasi atas kegiatan K/L dalam dalam perubahan iklim terhadap pulau-pulau kecil.\r\n2.	Membuat program kerja adaptasi/mitigasi di pulau-pulau kecil dalam menghadapi perubahan iklim. \r\n\r\nTelah disampaikan beberapa hal terkait teknologi dan koleksi data oleh BPPT dan P2O-LIPI serta disampaiakn oleh ESDM (bidang konservasi energy) bahwa telah dipetakan aksi-aksi terhadap dampak perubahan iklim dengan bekerjasama dengan Deputi 3 (Asdep Pak Yudi).\r\nAda perbedaan number CO2 budget dan emisi Indonesia, sehingga perlu pembahasan khusus karena perlu review per 5 tahun. \r\nPermasalahan di Pulau-Pulau Kecil adalah terkait air bersih dan sanitasi, pencemaran air laut akibat limbah domestik.  Penelitian LIPI lebih kearah studi karbon lamun dan mangrove, flux carbon perairan dan flux carbon di padang lamun.                                                                                                                                                                                              \r\n', '09.15-11.30/10 Februari 2017', '1. Kedepannya output yang diharapkan terbangunnya proyek bersama bagi penanggulangan dampak akibat climate change di pulau-pulau kecil.\r\n2. Terciptanya harmonisasi dan sinergitas penanggulangan dampak akibat climate change di pulau-pulau kecil.\r\n\r\n', 'Rekomendasi\r\nMempersiapkan proposal kecil/note untuk didiskusikan dengan partner bagi kemungkinan kerjasama dalam mendevelop proyek bersama di Indonesia.\r\nMenindaklanjuti rapat khusus guna membahas perbedaan angka emisi Indonesia antar K/L (KLHK, P2O-LIPI, BPPT) untuk diajukan di forum resmi.\r\n', '1. Data dampak perubahan iklim di pulau-pulau kecil masih sangat terbatas sehingga menyulitkan dalam hal penyusunan rencana strategi kedepan.\r\n2. Koordinasi antar K/L perlu diperkuat untuk menjembatani kekurangan dalam hal komunikasi antara K/L guna data sharing atau koordinasi kegiatan.\r\n', 46, 'file_1487230737.jpg', 'file_14872307371.jpg', '0000-00-00 00:00:00', '2017-03-09 00:09:37', 5, 5),
(11, 'RAPAT KOORDINASI KONSERVASI PERAIRAN\r\n         \r\n\r\nTujuan\r\n1.	Melakukan evaluasi atas kinerja di Tahun 2016\r\n2.	Menginventarisasi rencana kerja Tahun 2017 dan mengkoordinasikan dengan K/L terkait\r\n\r\nEvaluasi Kinerja Tahun 2016\r\n•	Telah dilakukan rapat koordinasi dan fasilitasi di 3 region: Biak, Mataram, Sabang yang mewakili region timur, tengah dan barat.\r\n•	Telah dihasilkan kriteria kawasan konservasi perairan yang mensejahterakan.\r\n•	Telah tercapai luasan sebagaimana target di Tahun 2016.\r\n\r\nRencana Kerja di Tahun 2017\r\n•	Melakukan rapat koordinasi dan fasilitasi/FGD terkait sosialisasi UU 23 terkait kewenangan provinsi dalam pengelolaan kawasan konservasi perairan (kkp).\r\n•	Melakukan kunjungan lapangan terkait capaian luasan kkp di Tahun 2017 serta melakukan uji coba kriteria kkp yang mensejahterakan.\r\n•	Menyusun penilaian bagi kkp yang mensejahterakan.\r\n', '13.30-15.15/02 Februari 2017 ', 'output belum tercapai karena masih dalam tahapan pendahuluan/inisiasi kegiatan.', 'Rekomendasi\r\nDalam melakukan rencana kerja sebagaimana tersebut dalam renja 2017 akan bekerjasama dengan KKP dan melibatkan instansi K/L dibawah koordinasi Kemenkomar.  Demikian halnya dalam menguji kriteria KKP yang mensejahterakan dan membuat kriteria penilaian akan melibatkan K/L terkait.\r\n', 'pendanaan di k/L kadang tidak mendukung kegiatan yang direncanakan Kemenkomar ataupun kemenkomar kadang tidak dapat mengikuti kegiatan yang dikerjakan K/L sehingga perlu adanya sinkronisasi semenjak awal.', 46, 'file_1487231217.jpg', 'file_14872312171.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 5),
(12, 'Rapat Lanjutan Koordinasi Pengendalian Pencamaran MInyak di Nongsa Batam\r\n\r\nTujuan\r\nGuna mengkoordinasikan data-data terkait dari K/L bagi  tuntutan ganti kerugian sosek dan lingkungan dan merencanakan survey sosek dan lingkungan. ', 'Jumat, 17 Februari 2017, Jam 9.30-Selesai', 'Pengumpulan data sekunder dan rencana survey sosek ke pulau nongsa batam.', 'Rekomendasi\r\n1. Pengumpulan data sekunder dari K/L harus sudah terkumpul pada Hari Selasa, 21 Februari 2017.  Data ini penting bagi rencana survey yang direncanakan.\r\n2. Survey sosek dan lingkungan rencananya akan dilaksanakan pada 28 Februari 2017.', 'Ketersediaan data masih berpencar di beberapa K/L, dimana ada K/L pentng yang masih dalam masa perombakan, sehingga agak kesulitan melacak data yang dicari.\r\n\r\nDana bagi survey ke batam tidak dimiliki oleh setiap K/L yang potensial seperti KKP.  Demikian pula yang ada di Kemenkomar, dana masih belum bisa flexible terkait lokasi tujuan sppd.\r\n\r\nKemenkomar memiliki dana besar, namun kesulitan sebegaimana pada poin 2 tersebut di atas menyulitkan dalam penggunaannya.', 44, 'file_1487811458.jpg', 'file_14878114581.jpg', '0000-00-00 00:00:00', '2017-02-23 00:57:38', 5, 5),
(13, 'Pertemuan Koordinasi Penyusunan Kertas Posisi Delegasi RI (DELRI) pada Pertemuan IPBES-5 (Intergovernmental Science-Policy Platform on Biodiversity and Ecosystem Services) di Bonn-Jerman, 6-10 Maret 2017', '23 Februari 2017', ' a.Finalisasi Delegasi RI\r\nb. Kertas Posisi DELRI pada Sidang IPBES-2', 'a. Menghadiri Sidang IPBES-5 di Bonn-Jerman, 7-10 Maret 2017\r\nb. Sosialisasi Hasil Sidang IPBES-5 dan Tindak Lanjut di tingkat nasional ke stakeholder terkait\r\nc. Pembentukan Kelembagaan (Sekretariat/NFP IPBES Indonesia)', 'Sampai saat ini belum ada Sekretariat resmi selaku National Focal Point IPBES Indonesia. adinterim IPBES saat ini adalah Kemlu. Kemenko Kemaritiman diminta untuk memfasilitasi Pembentukan Kelembagaan IPBES di Indonesia.', 63, 'file_1487920088.jpg', 'file_14879200881.jpg', '0000-00-00 00:00:00', '2017-02-24 07:19:21', 2, 2),
(14, 'Pertemuan Koordinasi Penyusunan Kebijakan Ikan Hias Indonesia', '13 Februari 2017', 'a. List anggota POKJA \r\nb. Kerangka RAN Industri Ikan Hias', 'a. Perlu segera disusun Rencana Aksi Nasional Nasional (RAN) Industri Ikan Hias\r\nb. Pembentukan Kelompok Kerja (POKJA) Ikan Hias Nasional \r\nc. Pelaksanaan Simposium Nasional Ikan Hias Indonesia', 'Indonesia mempunyai potensi ikan hias yang sangat besar tetapi belum dikelola dan dikembangkan dengan baik. Oleh karena itu, perlu disusun arah pengembangan industri ikan hias secara komprehensif dari hulu ke hilir.', 63, 'file_1487921917.JPG', 'file_14879219171.JPG', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 2),
(15, 'Rapat Persiapan Kedua Penyusunan Rancangan Perpres', 'Kamis/09 Februari 2017', 'Rancangan Peraturan Presiden tentang Ruang Zonasi Kawasan Laut', 'Kemenko Bidang Kemaritiman siap untuk mendukung kegiatan penyusunan 4 (empat) rancangan Perpres tentang RZ Kawasan Lautdan diusulkan untuk menambah lagi satu lokasi yakni Teluk Tomini dalam rangka dukungan terhadap NPoA Pokja Bentang Laut CTI-CFF Indonesia. Diharapkan dengan tambahan satu lokasi yakni Teluk Tomini tidak hanya mewujudkan target RZ di RKP 2017 namun juga dalam rangka dukungan regional untuk Pokja Bentang laut CTI-CFF Indonesia sesuai NPoA yang telah disepakati.', 'Ada dua lokasi dalam rangka penyusunan RZ yang sama sekali belum dilakukan pengumpulan data yakni KSN BBK dan Kawasan Selat Makassar. Jika ditambah dengan lokasi tambahan yakni Teluk Tomini maka menjadi tiga lokasi. Segera dilakukan FGD baik yang dilakukan oleh KKP atau Kemenko Bidang Kemaritiman untuk kegiatan pengumpulan data.', 22, 'file_1487922006.JPG', 'file_14879220061.JPG', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 4),
(16, 'Pertemuan Koordinasi Komite Nasional CTI-CFF Indonesia', '14 Februari 2017', 'a. Draft Final NPOA CTI-CFF Indonesia\r\nb. Hasil Evaluasi Kinerja CTI-CFF 2016 dan Rencana Kerja 2017', 'a. Finalisasi dan Pengesahan National Plan of Action (NPOA) CTI-CFF Indonesia (2016-2020)\r\nb. Reviu Keanggotaan Sekretariat, Pokja, dan Kelompok Pakar CTI-CFF Indonesia\r\nc. Sosialisasi CTI-CFF Indonesia dan NPOA CTI-CFF ke stakeholder', 'a. NPOA CTI-CFF belum selesai;\r\nb. SK Sekretariat, Pokja, dan Kelompok Pakar telah berakhir per Desember 2016 dan harus segera diupdate', 66, 'file_1487922793.JPG', 'file_14879227931.JPG', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, 2),
(17, 'FGD Rencana Zonasi Laut Jawa', 'Kamis/16 Februari 2017', 'Ranperpres tentang Rencana Zonasi Laut Jawa', 'Telah dihasilkan dokumen awal RZ Laut Jawa. Selanjutnya akan dilakukan konsultasi publik yang pertama dalam rangka masukan dan koreksi terhadap dokumen awal. Setelahnya disusun dokumen antara sampai dokumen final dengan terlebih dahulu dilakukan konsultasi publik di setiap tahapannya. Setelah dokumen final, baru disusun draft Ranperpres tentang RZ Laut Jawa ', 'Belum ada', 34, 'file_1488170758.JPG', 'file_14881707581.JPG', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 4),
(18, 'FGD Selat Makassar', '23-24 Februari 2017', 'Rancangan Perpres tentang Rencana Zonasi Selat Makassar', 'Hasil FGD pertama telah diperoleh 3 (tiga) data tematik dari KL dan sektor yakni terkait data pertambangan migas dan minerba, data kabel/pipa/bangunan bawah laut dan perikanan tangkap dan budidaya di Selat Karimata untuk wilayah 12 mil laut ke atas.', 'Masih ada kekurangan data tematik kepelabuhanan, konservasi, dan pariwisata. Akan segera dilakukan kembali FGD untuk tema yang belum ada. Setelah data diperoleh baru disusun dokumen awal', 34, 'file_1488171224.JPG', 'file_14881712241.JPG', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 4),
(19, 'Rapat dukungan kegiatan dalam Kelompok Kerja Bentang Laut CTI-CFF Indonesia', '20 dan 23 Februari 2017', 'a, NPoA (National Plan of Action) Seascape Working Group untuk tahun 2016-2020;\r\nb. Seascape Document, Seascape Working Group of CTI-CFF Indonesia', 'Kelompok kerja Bentang Laut telah menghasilkan:\r\na, NPoA (National Plan of Action) Seascape Working Group untuk tahun 2016-2020;\r\nb. "Seascape Document" untuk dibahas dalam Seascape Working Group Meeting di Kepulauan Solomon sekitar 3-8 Mei 2017 dan selanjutnya pada Senior Official Meeting (SOM) ke-13 sekitar akhir tahun di Manila', 'Untuk NPoA masih akan didetailkan oleh NCC khususnya untuk kontribusi estimated cost dari para partner Pokja Bentang Laut, ', 34, 'file_1488171597.JPG', 'file_14881715971.JPG', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, 4),
(20, 'Koordinasi Pengumpulan Data Primer dan Sekunder di Pulau Nongsa, Batam\r\n\r\nTujuan:\r\n1. Mengumpulkan bukti-bukti pencemaran tumpahan minyak di Pantai Nongsa Batam yang dipendam dalam pasir oleh penduduk karena adanya ketakutan wisatawan tidak berkunjung karena melihat paparan minyak di pantai\r\n2. Mengkoordinasikan pengumpulan data primer dan sekunder di lapangan untuk tuntutan ganti rugi sosek dan lingkungan.\r\n\r\nSurvey lapangan dilakukan oleh Tim yang terdiri atas K/L: Kemenko Bidang Kemaritiman, KKP, Ditjen Migas-ESDM, Setkab, Dinas LH Kota Batam, Dinas KP Kota Batam, Bakamla Batam, Lurah Nongsa, Ketua RT 1 dan 2 Nongsa. ', 'Pantai Nongsa, Batam, 28 Februari - 3 Maret 2017', '1. Data Primer dan Sekunder bagi perhitungan ganti kerugian masyarakat di Nongsa Batam.\r\n2. Nilai kerugian masyarakat nongsa dan sekitarnya akibat tumpahan minyak di laut.\r\n', 'Rekomendasi:\r\n1. Memaksimalkan data yang terkumpul bagi perhitungan ganti kerugian\r\n2. Perlu adanya latihan penanggulangan tumpahan minyak di pantai di Tahun 2017 sebagai sosialisasi bagi masyarakat pengguna pantai: nelayan, pelaku bisnis wisata, warung, restoran, penduduk pesisir dan lainya dalam pengumpulan limbah minyak di pantai.\r\n3. Memberikan latihan kepada Pemda di Tahun 2017 dalam hal menggerakkan tim daerah dalam penanggulangan tumpahan minyak di laut.', '1. Keterbatasan dana operasioanl bagi penanggulangan tumpahan minyak di laut.\r\n2. Tim Daerah belum sepenuhnya mampu dalam menangani tumpahan minyak di laut di daerahnya.\r\n3. Tim Nasional masih lambat dan lemah dalam koordinasi dengan daerah terkena pencemaran minyak di pesisir dan laut. ', 44, 'file_1488764251.jpg', 'file_14887642511.jpg', '0000-00-00 00:00:00', '2017-03-06 01:37:31', 5, 5);

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
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `kebijakan`
--
ALTER TABLE `kebijakan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
