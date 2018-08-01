-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 10:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

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
-- Table structure for table `kebijakan`
--

CREATE TABLE `kebijakan` (
  `no` int(11) NOT NULL,
  `narasi` text NOT NULL,
  `status` text NOT NULL,
  `indikator` text NOT NULL,
  `pic` text NOT NULL,
  `tahun` year(4) NOT NULL,
  `id_kabid` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_At` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebijakan`
--

INSERT INTO `kebijakan` (`no`, `narasi`, `status`, `indikator`, `pic`, `tahun`, `id_kabid`, `created_at`, `created_by`, `updated_by`, `updated_At`) VALUES
(11, 'Koordinasi dan Pengendalian Kebijakan Benefisasi dan Hirilisasi Pertambangan Mineral', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 3, 6, NULL),
(13, 'Koordinasi dan Pengendalian Kebijakan Tata Kelola Minerba', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 3, 6, NULL),
(14, 'Koordinasi dan Pengendalian Tata Kelola Garam', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 3, 6, NULL),
(15, 'Koordinasi dan Pengendalian kebijakan Penyediaan Energi Primer', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 3, 6, NULL),
(16, 'Koordinasi dan Pengendalian Kebijakan Pengembangan Cadangan Energi', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 3, 6, NULL),
(17, 'Koordinasi Sinkronisasi dan Pengendalian Kebijakan Konversi BBM ke BBG', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 3, 6, NULL),
(18, 'Koordinasi dan Pengendalian Kebijakan Pemenuhan Energi Bagi Pembangunan Bidang Kemaritiman', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 3, 6, NULL),
(19, 'Koordinasi dan Pengendalian Kebijakan Deversifikasi dan Desentralisasi Energi', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 3, 6, NULL),
(20, 'Koordinasi dan Pengendalaian Percepatan Pembangunan dan Diversifikasi Listrik', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 3, 6, NULL),
(21, 'Koordinasi dan Pengendalian Kebijakan Pengurangan Emisi Karbon dari Sektor Energi', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 3, 6, NULL),
(22, 'Koordinasi dan pengendalian penurunan angka dwelling time', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(23, 'Koordinasi fasilitasi kebijakan industri Maintenance Repair and Overhaul (MRO)', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(24, 'Koordinasi fasilitasi kebijakan Penanganan Regulated Agent (RA)', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(25, 'Koordinasi fasilitasi Pengembangan Kawasan Pusat Logistik Berikat (PLB)', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(26, 'Koordinasi dan sinkronisasi penerapan Indonesia Single Window (INSW)', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(27, 'Koordinasi Kebijakan Revitalisasi Pelabuhan', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(28, 'Koordinasi dan Sinkronisasi Bebas Visa Kunjungan', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(29, 'Koordinasi Pengembangan 10 Destinasi Pariwisata Prioritas Khususnya Wakatobi', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(30, 'Koordinasi pengembangan 10 destinasi pariwisata khususnya Labuan Bajo', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(31, 'Koordinasi pengembangan 10 destinasi pariwisata prioritas khususnya Bromo Tengger Semeru', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(32, 'Koordinasi pengembangan 10 destinasi prioritas khususnya Mandalika', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(33, 'Koordinasi dan sinkronisasi kebijakan eYachters (Electronic Yacht Registration System) dan Cruise', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(34, 'Koordinasi dan sinkronisasi tata ruang laut nasional', 'Akan dilakukan beberapa kali kegiatan pengumpulan data (FGD) dan setelah dilakukan ground check/survey oleh unit teknis/sector, selanjutnya disusun dokumen awal, dokumen antara, dan dokumen final dengan beberapa kali konsultasi publik, maka akan dilakukan pemantapan/harmonisasi ranperpres dan penetapan di Sekretariat Kabinet \r\n', '1. Rancangan Perpres tentang Rencana Zonasi Kawasan Strategis Nasional Jabodetabekpunjur\r\n2. Rancangan Perpres tentang Rencana Zonasi Kawasan Strategis Nasional BBK (Batam, Bintan, Karimun)\r\n3. Rancangan Perpres tentang Rencana Zonasi Kawasan Laut Jawa\r\n4. Rancangan Perpres tentang Rencana Zonasi Kawasan Selat Makassar\r\n', 'Kedeputian lain di Kemenko Kemaritiman, KKP, Pariwisata, ESDM, Kemenhub, KLHK, BIG, Sekretariat Kabinet, Pushidrosal, Pemerintah Daerah, Mitra seperti CI, CTC, TNC, WWF, WCS ', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(35, 'Koordinasi dan pengendalian penjabaran UU 27/2007 tentang PWP3K Jo UU No. 1/2014 Tentang Perubahan UU 27/2007 tentang PWP3K', '1. Rapat persiapan terkait Rakernis \r\n2. Akan dilakukan beberapa kali kegiatan monev untuk mendorong percepatan ranperda tentang RZWP3K', 'Rancangan Peraturan Daerah tentang RZWP3K', 'Kedeputian lain di Kemenko Kemaritiman, KKP, Pariwisata, ESDM, Kemenhub, KLHK, BIG, Sekretariat Kabinet, Pushidrosal, dan  Pemerintah Daerah, NGO', 2017, NULL, '2018-01-14 06:03:23', 4, 6, NULL),
(36, 'Koordinasi Kebijakan Pengelolaan BMKT dan Pengembangan Museum/Wisata Shipwreck', '1. Menunggu pelaksanaan ratas\r\n2. Persiapan pengelolaan BMKT di Natuna dan Belitung Timur', '1. Pengelolaan BMKT yang terpadu antar Pemerintah Pusat dan Daerah\r\n2. Pengembangan museum dan wisata Shipwreck di Kabupaten Sangihe, Natuna, dan Belitung Timur', 'Setkab, KKP, Kemendikbud, Kemenkeu, TNI AL, Polri, Kemenhub, Kementerian Pariwisata', 2017, NULL, '2018-01-14 06:03:23', 5, 6, NULL),
(37, 'Koordinasi Penurunan Beban Pencemaran Kawasan Ekosistem Pantai', '1. Penurunan beban pencemaran melalui pengelolaan kawasan pesisir secara  terpadu  dengan cara penyusunan Ranperda  RZWP3K seluruh Propinsi, \r\n2. Baru Propinsi Sulawesi Utara  yang sudah jadi Ranperda  RZWP3K', '1. Percepatan penyusunan dokumen\r\n2. Raperda RZWP3K seluruh Indonesia', 'KKP,  Kemendagri,  Pushidros,  Bappenas,  Klhk,  Big,  Lipi,', 2017, NULL, '2018-01-14 06:03:23', 5, 6, NULL),
(38, 'Koordinasi dan Pengendalian Implementasi Kebijakan Pengelolaan Pencemaran Limbah Cair dan Padat Perkotaan', '1. Pengelolaan limbah  melalui ipal yang telah dan akan dibangun oleh KKP,  Klhk dan Pupr,  \r\n2. Pengelolaan lingkungan di tambang mas oleh Kementerian terkait,  universitas,  Antam dan Apri', '1. Pengelolaan limbah di kawasan  destinasi wisata,  \r\n2. Tambang mas rakyat secara terpadu,  \r\n3. Optimalisasi pemanfaatan ipal  yang telah dibangun oleh kkp,  klhk dan pupr', 'KKP,  Klhk,  Pupr,  Kemenko Polhukam,  Kemenko Perekonomian,  Antam,  Universitas,  Apri,  BPPT', 2017, NULL, '2018-01-14 06:03:23', 5, 6, NULL),
(39, 'Koordinasi dan Fasilitasi Penyusunan Kebijakan Nasional Pengelolaan Kebencanaan Maritim', '-. Selama tahun 2016 Kemenko Bidang Kemaritiman telah melaksanakan 9 (sembilan) kali pertemuan terdiri dari rapat koordinasi, workshop dan konsinyasi terkait dengan pengelolaan kebencanaan maritim.\r\n-. Dari pertemuan-pertemuan tersebut telah dihasilkan Surat Keputusan (SK) Kelompok Kerja Pengelolaan Kebencanaan Maritim (SK Pokja Pengelolaan Kebencanaan Maritim tahun 2016), Arahan Kebijakan Pengelolaan Kebencanaan Maritim, Draft Naskah Akademik dan Draft Naskah Kebijakan Pengelolaan Kebencanaan Maritim.', '-. Revisi SK Pokja Pengelolaan Kebencanaan Maritim tahun 2016 \r\n-. Draft Naskah Akademik dan Draft Naskah Kebijakan Pengelolaan Kebencanaan Maritim diharapkan final pada tahun 2017 dalam bentuk peraturan perundang-undangan (Perpres).', 'BNPB, KKP, KLHK, Kemen ATR, Kemendesa PDTT, Kemensos, Kemenkes, BPPT, BMKG, LIPI, IPB, UNSYIAH, STIS, Praktisi, Media', 2017, NULL, '2018-01-14 06:03:23', 5, 6, NULL),
(40, 'Koordinasi, sinkronisasi dan fasilitasi upaya penurunan Indeks Risiko Bencana Indonesia sebesar 4,7% di Tahun 2017', '-. IRKM dimaksudkan untuk mendukung kebijakan BNPB terkait dengan Penurunan Indeks Risiko Bencana Indonesia (IRBI) sebesar 4,7% di tahun 2017, termasuk dari bencana kemaritiman.\r\n-. Konsep IRKM perlu dikembangkan mengingat saat ini Indonesia belum memiliki indeks risiko khusus kebencanaan maritim.\r\n-. IRKM diharapkan dapat memperkuat IRBI khususnya terkait dengan bencana kemaritiman.\r\n-. IRKM diharapkan tidak hanya mencakup bencana alam saja tetapi juga bencana non alam dan bencana karena perbuatan manusia, seperti tumpahan minyak dari kapal, dan lain-lain.\r\n-. IRKM diharapkan dapat menjadi instrumen bagi Kemenko Bidang Kemaritiman untuk melakukan fungsi koordinasi, sinkronisasi, sinergi dan pengendalian pengelolaan kebencanaan maritim di K/L dan pemerintah daerah memainstreamkan kebencanaan maritim di tiap K/L dan pemerintah daerah.', '-. Draft Kebijakan Nasional Pengelolaan Kebencanaan Maritim dan draft Naskah Akademis Kebijakan Nasional Pengelolaan Kebencanaan Maritim..\r\n-. IRKM diharapkan tidak hanya dikembangkan hingga ke tingkat provinsi tetapi juga dikembangkan sampai dengan tingkat kabupaten/kota, sama seperti IRBI saat ini', 'BNPB, KKP, KLHK, Kemen ATR, Kemendesa PDTT, Kemensos, Kemenkes, BPPT, BMKG, LIPI, STIS, IPB, UNSYAH, Praktisi dan Media', 2017, NULL, '2018-01-14 06:03:23', 5, 6, NULL),
(41, 'Koordinasi, Sinkronisasi dan Fasilitasi Rehabilitasi Pesisir dan Laut, Pengurangan Risiko Kebencanaan Maritim dan Dampak Perubahan Iklim ', 'Belum ada one map policy (dari BIG) terkait dengan rehabilitasi kerusakan pesisisr dan laut secara nasional. \r\n-. 1,8 juta ha mangrove di Indonesia dalam kondisi rusak, yang perlu segera direhabilitasi. dengan mempertimbangkan laju kerusakan mangrove setiap tahunnya. \r\n-. Terdapat perbedaan kriteria kerusakan mangrove antara KLHK dan KKP. Perbedaan kriteria ini perlu dipertimbangkan untuk dilakukan standarisasi. \r\n-. -	Terdapat perbedaan pendekatan dalam melaksanakan kegiatan rehabilitasi kerusakan pesisir dan laut dimana KLHK menggunakan pendekatan luasan (hektar) sedangkan KKP menggunakan pendekatan jumlah batang yang ditanam. Perbedaan pendekatan ini perlu dipertimbangkan untuk dicermati kembali.\r\n-	Kontribusi KKP dalam merehabilitasi kerusakan pesisir dan laut selama ini hanya sebesar 1% dari total upaya rehabilitasi yang seharusnya dilakukan.\r\n-	Perpres No. 73 Tahun 2012 tentang Strategi Nasional Pengelolaan Ekosistem Mangrove disepakati untuk diproses lebih lanjut oleh Kementerian Koordinator Bidang Perekonomian, tanpa merubah substansi, dengan pertimbangan efisiensi waktu. Perpres tersebut akan disesuaikan dengan nomenklatur K/L yang baru. Dalam Perpres tersebut juga akan dicantumkan keterlibatan Kementerian Koordinator Bidang Kemaritiman.', '-. Penyusunan Perpres tentang Rehabilitasi Kerusakan Pesisir dan Laut.\r\n-. Dokumen Strategi Nasional Pengelolaan Ekosistem Mangrove dan Draft Rencana Aksi Mangrove \r\n-. Rehabilitasi Kerusakan Pesisir dan Laut serta Pengelolaan Kebencanaan Maritim diusulkan menjadi Isu Strategis Tahun 2018.', 'Kemenko Bidang Perekonomian, KKP, KLHK, Kemendagri, BIG, BAPPENAS, PT. Toyota Motor Manufacturing, Yayasan Mangrove Indonesia, Wetlands International Indonesia Program ', 2017, NULL, '2018-01-14 06:03:23', 5, 6, NULL),
(42, 'Koordinasi, Sinkronisasi dan Fasilitasi Upaya Dukungan Kebijakan Penurunan Emisi GRK Nasional Sebesar 26% Pada Tahun 2017 Dari Sektor Pesisir dan Laut', 'Telah dilaksanakan rapat koordinasi Pengelolaan Perubahan Iklim Berbasis Kemaritiman terkait dengan Blue Carbon pada tanggal 20 Juni 2017.  Rapat ini dimaksudkan untuk memetakan siapa berbuat apa sejauh mana dan kendala yang dihadapi terkait dengan Blue Carbon di Indonesia.  Hasil rapat menunjukkan bahwa Blue Carbon telah dilaksanakan oleh berbagai instansi terkait. Namun demikian dijumpai adanya kendala terkait dengan pendanaan yang kurang memadai, prioritas kegiatan, lama kegiatan dan lain sebagainya. Tindak lanjut dari rapat adalah perlunya dilakukan workshop terkait dengan Arah Kebijakan Nasional Pengelolaan Blue Carbon di Indonesia disertai dengan kunjungan lapangan ke lokasi Blue Carbon di Indonesia.', 'Arah Kebijakan Nasional Pengelolaan Blue Carbon di Indonesia.', 'Kemenko Bidang Perekonomian, KKP, KLHK, BIG, CIFOR, Wetland Internasional Indonesia program, Conservation International Indonesia Program, PT. Toyota Motor Manufacturing, PT. Kandelia Alam, Pemerintah Daerah Kaimana Provinsi Papua.', 2017, NULL, '2018-01-14 06:03:23', 5, 6, NULL),
(43, 'Koordinasi, Sinkronisasi dan Fasilitasi Upaya Pengendalian Kebijakan Pencapaian Indeks Kualitas Lingkungan Hidup Indonesia Menjadi 65 Pada Tahun 2017', 'Mengadakan Focus Group Discussion (FGD) Dukungan Percepatan Pencapaian Indeks Kualitas Lingkungan Hidup Melaluiram dan kegiatan Rehabilitasi Kerusakan Mangrove yang dilakukan oleh Kementerian/Lembaga, pemerintah daerah, dunia usaha, perguruan tinggi, lembaga swadaya masyarakat dan masyarakat lingkungan pesisir yang berkontribusi terhadap pencapaian Indeks Kualitas Lingkungan Hidup pada tanggal 19 Desember 2017', 'Rekomendasi Kebijakan Dukungan Percepatan Pencapaian Indeks Kualitas Lingkungan Hidup Melalui Kontribusi Rehabilitasi Kerusakan Mangrove.', 'KLHK, KKP, Dinas Lingkungan Hidup Seluruh Indonesia, Kementerian Perekonomian, PSKL IPB, TMC, Wetlands International Indonesia Program, LIPI, BAPPENAS, Kementerian Dalam Negeri', 2017, NULL, '2018-01-14 06:03:23', 5, 6, NULL),
(44, 'Koordinasi dan Pengendalian Limbah  Oil Spill', '1. Draft Tim Daerah Penanggulangan Tumpahan Minyak di Bintan \r\n2. Rencana reviu  atas Perpres 109/2006, \r\n3. Membentuk Tim Pokja bagi penyelesaian masalah\r\n4. memberikan masukan kepada Tim Nasional Penanggulangan Tumpahan Minyak Di Laut. ', '1. Drilling exercise Tim Daerah Bintan.\r\n2. Reviu Perpres 109/2006\r\n3. Membentuk Tim Pokja bagi penyelesaian masalah\r\n4. Masukan ke Tim Nasional Penanggulangan Tumpahan Minyak Di Laut.', 'KEMHUB, KLHK, KKP, ESDM, LIPI, LAPAN, TNI AL, BAKAMLA, LEMIGAS, BMKG, SKKMIGAS', 2017, NULL, '2018-01-14 06:03:23', 5, 6, NULL),
(45, 'Koordinasi dan Pengendalian Kebijakan Penerapan Sistem Managemen Lingkungan (ISO 14001) di Pelabuhan', '1. Kesepakatan antara Kemenko Maritim, Kemhub dan KLHK dengan Pelindo I, III dan IV dalam pelaksanaan pencapaian Sistem Manajemen Lingkungan ISO 14001 di Pelabuhan', '1. Terlaksanannya koordinasi pelaksanaan ISO 14001 di pelabuhan prioritas', 'Kemhub, KLHK, KKP, SKKMIGAS, Pelindo I,II,III,IV', 2017, NULL, '2018-01-14 06:03:23', 5, 6, NULL),
(46, 'Koordinasi dan Pengendalian Kebijakan Pencapaian Luas Kawasan Konservasi Perairan Menjadi 17,9 Juta Ha pada Tahun 2017', '1. Kriteria Pengelolaan Kawasan Konservasi Perairan Yang Mensejahterakan\r\n2. Buku Kebijakan Pengelolaan Kawasan Konservasi Perairan di Indonesia  ', '1. Penilaian  Pengelolaan Kawasan Konservasi Perairan Yang Mensejahterakan\r\n2. Hasil Uji Coba Penilaian di beberapa kawasan konservasi perairan.', 'KLHK, KKP, Kempar, ESDM, Kemhub, universitas, NGO Internasional, ', 2017, NULL, '2018-01-14 06:03:23', 5, 6, NULL),
(55, 'Koordinasi dan Pengendalian Implementasi  Kebijakan Perikanan Tangkap dan Perikanan Budidaya', '-. Kecilnya pemanfaatan potensi budidaya laut karena belum tersedianya payung hukun brtupa peraturan yang menaungi tata ruang pengelolaan/ pemanfaatan ruang laut\r\n-. Tingginya modal yang diperlukan dan ketersediaan yang terbatas sehingga kurangnya minat masyarakat\r\n-. Melakukan koordinasi dengan K/L terkait agar program-program yang dicanangkan dapat diselesaikan sesuai dengan target', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 2, 6, NULL),
(56, 'Koordinasi dan Pengendalian Kebijakan Pemberian Bantuan Sarana dan Prasarana Perikanan Tangkap dan Budidaya', '-. Peningkatan kesejahteraan masyarakat nelayan\r\n-. Koordinasi dengan semua stackholder sehingga bantuan yang diberikan dapat tepat sasaran', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 2, 6, NULL),
(57, 'Koordinasi dan Sinkronisasi Kebijakan Perlindungan dan Pemberdayaan Nelayan dan Pembudidaya Ikan', '-. Masih harus disusun beberapa peraturan turunan dari UU No. 7 tahun 2016, baik berbentuk peraturan pemerintah, peraturan presiden, maupun peraturan menteri', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 2, 6, NULL),
(58, 'Koordinasi dan Pengendalian Kebijakan Perijinan Kapal Penangkap Ikan', '-. Masih terdapat kekurang sinkronan antara K/L terkait serta pemerintah pusat dan pemerintah daerah.\r\n-. Koordinasi dan sinkronisasi terhadap berbagai kebijakan perijinan kapal penangkap ika sehingga perijinan dapat terpadu dan terintegrasi', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 2, 6, NULL),
(59, 'Koordinasi dan pengendalian Implementasi Perpres 115 Tahun 2015 tentang Satgas Pemberantasan IUU Fishing', '-. Masih tingginya IUU Fishing di Indonesia\r\n-. Melakukan pengawasan dan pengendalian terhadap pelaksanaan tugas dari Satgas IUU Fishing', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 2, 6, NULL),
(60, 'Koordinasi dan Pengendalian Turunan UU 32/2014 Tentang Kelautan', '-. Perlu disusun berbagai peraturan turunan dari UU 32/2014 baik perturan pemerintah maupun peraturan Presiden. \r\n-. Diantaranya RPP tentang kebijakan pembangunan kelautan, RPP Industri Maritim dan Jasa Maritim, RPP Kebijakan Budaya Bahari, RPP Kebijakan Tata Kelola dan kelembagaan laut, RPP tentang rencana tata ruang laut nasional, dll ', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 2, 6, NULL),
(61, 'Koordinasi kebijakan Pengembangan Standar, Keamanan dan Kesehatan Produk', '-. Memastikan bahwa semua produk kelautan dan perikanan tersebut telah memenuhi standar keamanan dan keselamatan produk; melalui sertifikasi produk.\r\n-. Koordinasi dan sinkronisasi berbagai kebijakan yang terkait dengan pengembangan standar keamanan dan keselamatan produk kelautan, baik dengan K/L, pemerintah pusat dan pemerintah daerah, serta stackholder lainnya', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 2, 6, NULL),
(62, 'Koordinasi kebijakan Pengembangan Produk Hasil Kelautan dan Perikanan', '-.Mendorong dan memfasilitasi berbagai kebijakan dan program yang terkait dengan pengembangan produk kelautan dan perikanan ', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 2, 6, NULL),
(63, 'Koordinasi dan Sinkronisasi Kebijakan Konservasi Keanekaragaman Hayati Laut', '-. Potensi keanekaragaman hayati seperti tuna, udang, lobster, ikan karang, berbagai jenis ikan hias, kekerangan banyak yang dalam kondisi terancam kepunahan.\r\n-. Upaya pelestarian /konservasi keanekaragaman sesuai dengan RKP Tahun 2017', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 2, 6, NULL),
(64, 'Koordinasi dan Sinkronisasi Kebijakan Komisi Nasional Terumbu Karang Indonesia (CTI-CFF)', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 2, 6, NULL),
(65, 'Koordinasi dan Sinkronisasi Implementasi Roadmap Konservasi dan Pengelolaan Taman Nasional Laut', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 2, 6, NULL),
(66, 'Koordinasi dukungan kebijakan Komnas CTI', '0', '0', '0', 2017, NULL, '2018-01-14 06:03:23', 2, 6, NULL),
(67, 'Koordinasi Kebijakan Penurunan Angka Dwelling Time', 'a. Angka DT rata2 sepanjang Tahun   2017 masih diatas Target 3 hr\r\nb. Masih Tinggi Ongkos Logistik di Pelabuhan', 'a. DT rata rata tahun 2018 2-3 hr\r\nb. Saat ini Ongkos Logistik di Pelabuhan Tanjung Priok sebesar 26-30% sementara Target Bappenas berada antara 10-15%', 'Kementerian Perhubungan, Kementerian Keuangan, Kementerian Perdagangan, Kementerian Industri, Kementerian BUMN, Kementerian Pertanian, Kementerian Kelautan dan Perikanan, Kementerian Kesehatan, Kementerian Lingkungan Hidup, Kementerian ESDM, BPOM, BAPETEN, POLRI, kementerian Kominfo, Pemilik Barang. Forwarder.', 2018, 9, '2018-07-23 02:37:56', 4, 6, '2018-07-23'),
(68, 'Koordinasi Kebijakan Pengelolaan Potensi Sumber Daya Perikanan tangkap Berkelanjutan', '0', '0', '0', 2018, 3, '2018-07-23 02:24:14', 2, 6, '2018-07-23'),
(69, 'Koordinasi Kebijakan Pengelolaan Potensi Sumber daya Perikanana Budidaya Berkelanjutan terdiri dari : Perikanan budidaya Air Tawar, Budidaya Air Payau', '0', '0', '0', 2018, 5, '2018-07-23 02:31:21', 2, 6, '2018-07-23'),
(70, 'Koordinasi Kebijakan Pengembangan Produk Hasil Kelautan dan perikanan', '0', '0', '0', 2018, 5, '2018-07-23 02:30:58', 2, 6, '2018-07-23'),
(71, 'Koordinasi Kebijakan Promosi dan Pemasaran  Produk Hasil Kelautan dan perikanan', '0', '0', '0', 2018, 5, '2018-07-23 02:30:39', 2, 6, '2018-07-23'),
(72, 'Koordinasi Kebijakan pengelolaan kawasan  Konservasi Keanekaragaman hayati', '0', '0', '0', 2018, 4, '2018-07-23 02:31:09', 2, 6, '2018-07-23'),
(73, 'Koordinasi Kebijakan Komisi Nasional Terumbu karang Indonesia', '0', '0', '0', 2018, 4, '2018-07-23 02:31:34', 2, 6, '2018-07-23'),
(75, 'Pengendalian Kebijakan Pengelolaan Sumber Daya Air', '0', '0', '0', 2018, 6, '2018-07-23 02:35:29', 3, 6, '2018-07-23'),
(76, 'Pengendalian Kebijakan Tata Kelola Minerba', '0', '0', '0', 2018, 6, '2018-07-23 02:35:16', 3, 6, '2018-07-23'),
(77, 'Pengendalian Kebijakan Tata Kelola Garam', '0', '0', '0', 2018, 6, '2018-07-23 02:35:44', 3, 6, '2018-07-23'),
(78, 'Pengendalian Kebijakan Penyediaan Energi Primer', '0', '0', '0', 2018, 7, '2018-07-23 02:36:00', 3, 6, '2018-07-23'),
(79, 'Pengendalian Kebijakan Pengembangan Cadangan Energi', '0', '0', '0', 2018, 7, '2018-07-23 02:36:13', 3, 6, '2018-07-23'),
(80, 'Koordinasi Kebijakan Peningkatan Aksesibilitas Energi', '0', '0', '0', 2018, 7, '2018-07-23 02:36:52', 3, 6, '2018-07-23'),
(81, 'Pengendalian Kebijakan Peningkatan Peranan Energi Baru dan Energi Terbarukan dalam Bauran Energi', '0', '0', '0', 2018, 8, '2018-07-23 02:37:11', 3, 6, '2018-07-23'),
(82, 'Koordinasi  Kebijakan Efisiensi dan Konservasi Energi untuk bangunan pemerintah', '0', '0', '0', 2018, 8, '2018-07-23 02:37:21', 3, 6, '2018-07-23'),
(83, 'Pengendalian Kebijakan Pemenuhan Energi bagi Pembangunan Kemaritiman', '0', '0', '0', 2018, 8, '2018-07-23 02:37:34', 3, 6, '2018-07-23'),
(84, 'Koordinasi Kebijakan Penerapan Indonesia Nasional Single Window (INSW )', 'a. Panjangnya deret antrean truking kontainer pada proses roll on dan roll off kontainer dari dan ke pelabuhan pada hari Jumat sore. \r\nb. Sebagian besar K/L yang belum mepraktekkan pola kerja 24/7 di pelabuhan\r\nc. Telah ditetapkan Permenhub No 120 Tahun 2017 tentang Delivery Order Online yang perlu di sosialisasikan ke seluruh stakeholder.', 'Diterpakannya aplikasi DO Online untuk mengatasi masalah Antrean Panjang Truking Kontainer, pengurusan dokumen dan transaksi dipelabuhan pada hari Sabtu-Minggu bisa berjalan.', 'Kementerian Perhubungan, Kementerian Keuangan/Bea Cukai, INSW, Pelindo, Kemnterian terkait lainnya, Pemilik Barang, Trucking, Perbankan, Forwarder.', 2018, 9, '2018-07-23 02:38:12', 4, 6, '2018-07-23'),
(85, 'Koordinasi Kebijakan Pengembangan Biro Klasifikasi Indonesia (BKI)', 'a. BKI menginginkan Penyerahan Kewenangan Statutory dari Kementerian Perhubungan yang lebih luas berdasarkan jenis kapal untuk Pengklasifikasian terhadap Kapal2 Indonesia dan Asing yang melayari Perairan Indonesia maupun Luar Negeri \r\nb. Mendorong BKI untuk menjadi anggota International Association Clasification Sociaety (IACS).\r\nc. Kapal-Kapal Indonesia keluar dari negara Black List masuk White List', 'Diberikannya Mandatory Statutori yang lebih luas dari Kementerian Perhubungan kepada BKI.', 'Kementerian Perhubungan, Kementerian Keuangan, Kementerian Perindustrian, Kementerian Perdagangan, Kementerian BUMN, Kementerian ESDM, Kementerian KKP, INSA, Asosiasi Galangan Kapal Nasional, Kementerian Tenaga Kerja dan Biro Klasifikasi Indonesia/BKI.', 2018, 9, '2018-07-23 02:38:27', 4, 6, '2018-07-23'),
(86, 'Koordinasi Kebijakan Revitalisasi Pelabuhan', 'a. Pengaturan dan Pengelolaan lokasi kapal Lego Jangkar di Perairan Batam dan sekitarnya. \r\nb. Revitalisasi Fungsi Bakamla sebagai Koordinator Pengamanan Perairan Laut Indonesia', 'a. Pembentukan Task Force\r\nb. Pemberian Rekomendasi Dukungan kepada Bakamla terkait Usulan /Draf Pepres Kewenangan Bakamla.', 'Kementerian Perhubungan, Kementerian Kelautan dan Perikanan, Kementerian LHK, Kementerian Keuangan, Kementerian BUMN, Kementerian ESDM, Kementerian Kominfo, Kementerian Luarnegeri, Pemda Prov Riau Kepulauan, Pemda Batam, Pelindo I, Bakamla, TNI AL, Polair, Kemneterian PAN RB.\r\n', 2018, 9, '2018-07-23 02:38:41', 4, 6, '2018-07-23'),
(87, 'Koordinasi Kebijakan Bebas Visa Kunjungan (BVK)', '0', '0', '0', 2018, 11, '2018-07-23 02:39:28', 4, 6, '2018-07-23'),
(88, 'Koordinasi Kebijakan Pengembangan 10 Destinasi Parawisata Prioritas khususnya Wakatobi', '0', '0', '0', 2018, 11, '2018-07-23 02:39:44', 4, 6, '2018-07-23'),
(89, 'Koordinasi Kebijakan Pengembangan 10 Destinasi Parawisata Prioritas khususnya Bromo Tengger Semeru', '0', '0', '0', 2018, 11, '2018-07-23 02:40:01', 4, 6, '2018-07-23'),
(90, 'Koordinasi Kebijakan Pengembangan 10 Destinasi Parawisata Prioritas khususnya Labuan Bajo', '0', '0', '0', 2018, 11, '2018-07-23 02:40:16', 4, 6, '2018-07-23'),
(91, 'Koordinasi Kebijakan Pengembangan 10 Destinasi Parawisata Prioritas khususnya Mandalika', '0', '0', '0', 2018, 11, '2018-07-23 02:40:32', 4, 6, '2018-07-23'),
(92, 'Koordinasi Kebijakan Kemudahan  Kunjungan Kapal Wisata Asing ke Indonesia (Yacht dan Cruise)', '0', '0', '0', 2018, 11, '2018-07-23 02:41:08', 4, 6, '2018-07-23'),
(93, 'Koordinasi Kebijakan Pengembangan Marina', '0', '0', '0', 2018, 11, '2018-07-23 02:41:48', 4, 6, '2018-07-23'),
(94, 'Koordinasi Kebijakan Tata Ruang Laut Nasional', '0', '0', '0', 2018, 10, '2018-07-23 02:42:07', 4, 6, '2018-07-23'),
(95, 'Pengendalian Kebijakan terhadap pelaksanaan UU no 27 tahun 2007 tentang RZ WP3K', '0', '0', '0', 2018, 10, '2018-07-23 02:42:25', 4, 6, '2018-07-23'),
(96, 'Koordinsasi Kebijakan perijinan pemanfaatan ruang laut', '0', '0', '0', 2018, 10, '2018-07-23 02:43:04', 4, 6, '2018-07-23'),
(97, 'Koordinasi Kebijakan Pengelolaan Lingkungan Laut', '0', '0', '0', 2018, 12, '2018-08-01 08:46:01', 5, 6, '2018-08-01'),
(98, 'Koordinasi Kebijakan Pengelolaan Limbah Hotel di Seluruh Indonesia', '0', '0', '0', 2018, 12, '2018-08-01 08:47:49', 5, 6, '2018-08-01'),
(99, 'Koordinasi Kebijakan Pengelolaan BMKT dan Pengembangan Museum/Wisata Shipwreck', '0', '0', '0', 2018, 12, '2018-08-01 08:48:04', 5, 6, '2018-08-01'),
(100, 'Koordinasi Kebijakan Percepatan Penyusunan Dokumen RZWP3K dalam rangka Pengelolaan Kawasan Pesisir secara terpadu', '0', '0', '0', 2018, 12, '2018-08-01 08:48:19', 5, 6, '2018-08-01'),
(101, 'Koordinasi Penyusunan Kebijakan Nasional Pengelolaan Kebencanaan Maritim', '0', '0', '0', 2018, 14, '2018-08-01 08:46:24', 5, 6, '2018-08-01'),
(102, 'Koordinasi Kebijakanupaya penurunan Indeks Risiko Bencana Indonesia sebesar 4,7% di Tahun 2017', '0', '0', '0', 2018, 14, '2018-08-01 08:46:42', 5, 6, '2018-08-01'),
(103, 'Koordinasi Kebijakan Rehabilitasi Pesisir dan Laut, Pengurangan Risiko Kebencanaan Maritim dan Dampak Perubahan Iklim', '0', '0', '0', 2018, 14, '2018-08-01 08:47:09', 5, 6, '2018-08-01'),
(104, 'Koordinasi  Upaya Dukungan Kebijakan Penurunan Emisi GRK Nasional Sebesar 26% Pada Tahun 2017 Dari Sektor Pesisir dan Laut', '0', '0', '0', 2018, 14, '2018-08-01 08:47:23', 5, 6, '2018-08-01'),
(105, 'Koordinasi Upaya Pengendalian Kebijakan Pencapaian Indeks Kualitas Lingkungan Hidup Indonesia Menjadi 65 Pada Tahun 2017', '0', '0', '0', 2018, 13, '2018-08-01 08:48:35', 5, 6, '2018-08-01'),
(106, 'Koordinasi kebijakan  Pengelolaan Kawasan Konservasi Perairan Yang Effektif dan Mensejahterakan', 'a. RPJMN 2015-2019 mengamanatkan capaian luasan hingga 20 juta di Tahun 2019. Tahun 2017 telah terlampaui Capaian Luasan yang ditargetkan RPJMN yaitu sebesar 17.9 Juta Ha bahkan telah melebihi angka tersebut.  Sementara Capaian Luasan di Tahun 2018 ditargetkan sebesar 18.8 Juta Ha.\r\nb. Sedang dikembangkan indikator suatu kawasan yang telah mensejahterakan masyarakatnya.\r\n', 'a. Tercapaianya luasan kawasan konservasi sesuai dengan target yang diamanatan dalam RPJMN 2015-2019 untuk Tahun 2018 sebesar 18.8 juta Ha.\r\nb. Indikator kawasan konservasi perairan yang mensejahterakan masyarakat', 'KKP, LHK, KEMENDAGRI, KEMENHUB, KEMENPAR, ESDM, KSP, SETKAB', 2018, 13, '2018-08-01 08:48:50', 5, 6, '2018-08-01'),
(107, 'Pengendalian implementasi kebijakan Pencemaran Limbah Di Laut', 'a. Kondisi terkini menunjukkan bahwa pengendalian pencemaran akibat kegiatan perkapalan dan kepelabuhanan masih kurang dalam hal implementasi peraturan internasional dan nasional serta penegakan hukum. Sehingga hal ini mengakibatkan limbah-limbah tidak dapat tertangani dengan baik.\r\nb. Implementasi ISO 14001 dan Greenport menunjukkan upaya pelabuhan dalam melakukan implementasi peraturan secara holistik dan dilaksanakan dengan melibatkan unsur manajemen pelabuhan.', 'a. Implementasi peraturan\r\nb. Penyediaan sarana pengelolaan limbah di pelabuhan\r\nc. Tercapainya pelabuhan yang memperoleh ISO 14001 sesuai dengan sasaran target di Tahun 2018\r\nd. Pencanangan Greenportdi Tahun 2020 semua pelabuhan telah melaksanakan greenport. \r\n', 'KEMENHUB, KKP, KLHK, ESDM, SETKAB, PELINDO\r\n', 2018, 13, '2018-08-01 08:49:14', 5, 6, '2018-08-01'),
(108, 'Pengendalian Dalam Kesiapsiagaan Nasional dan Daerah dalam tumpahan Minyak di laut', 'a. Lemahnya Tim Nasional guna menjawab tantangan pencemaran unknown sources and known sources di laut.\r\nb. Belum ada Tim Daerah Penanggulangan Tumpahan Minyak di Republik Indonesia\r\n', 'a. Revisi Perpres 109/2006 tentang Penanggulangan Darurat Tumpahan Minyak di Laut. \r\nb. Terbentuknya tim Daerah KEPRI sebagai model\r\n', 'KEMENHUB, KEMENDAGRI, KKP, KLHK, ESDM, SETKAB, PEMDA, SKKMIGAS PERTAMINA\r\n', 2018, 13, '2018-08-01 08:49:40', 5, 6, '2018-08-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kebijakan`
--
ALTER TABLE `kebijakan`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kebijakan`
--
ALTER TABLE `kebijakan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
