-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 07:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relawan_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_akun` int(11) DEFAULT NULL,
  `hak_akses` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `id_akun`, `hak_akses`) VALUES
(1, 30, 'SUPERADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nomor_handphone` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_lengkap`, `email`, `password`, `nomor_handphone`, `foto`) VALUES
(30, 'SUPERADMIN', 'superadmin@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, 'admin_logo.png'),
(48, 'nurul', 'nurul@gmail.com', '202cb962ac59075b964b07152d234b70', 'sds', NULL),
(51, 'Nurul Fadhilah', 'relawan@gmail.com', '202cb962ac59075b964b07152d234b70', '087738934282', '2bd13e29a6ae217f7bfcdaf8420c921e.jpg'),
(52, 'Nurul', 'nurulfadhilah488@gmail.com', '202cb962ac59075b964b07152d234b70', '085213413630', '73a8a0b620cc5d079b9e3ddd575f510f.jpg'),
(54, 'putri maulani rahma', 'putri@gmail.com', '202cb962ac59075b964b07152d234b70', '08976543456', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bencana`
--

CREATE TABLE `bencana` (
  `id_bencana` int(11) NOT NULL,
  `id_forum` int(11) DEFAULT NULL,
  `nama_bencana` varchar(255) DEFAULT NULL,
  `id_kategori_bencana` int(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `alamat_lengkap` text DEFAULT NULL,
  `link_berita` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `warna` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `jml_relawan` int(11) NOT NULL,
  `status_pengajuan` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bencana`
--

INSERT INTO `bencana` (`id_bencana`, `id_forum`, `nama_bencana`, `id_kategori_bencana`, `kecamatan`, `kabupaten`, `provinsi`, `alamat_lengkap`, `link_berita`, `latitude`, `longitude`, `warna`, `gambar`, `jml_relawan`, `status_pengajuan`) VALUES
(1, 20, 'Gunungf Meletus', 2, 'Wanasaba', 'Padang', 'Sumatera Barat', 'asasas', 'www.sashas.com', '-2.3723687086440504', '103.00781250000001', 'red', 'd27c7d60138302ef7e94a7942fc84dcd.jpg', 3, 1),
(5, 20, 'Banjir', 4, 'asas', 'tanah datar', 'Sumatra Utara', 'jln mandiangin', 'www.idojdjvshvduh', '-2.943040910055132', '101.38166280239953', 'green', '682b7e0c48491bdbc4e47330fe7ca3ce.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id_forum` int(11) NOT NULL,
  `id_akun` int(11) DEFAULT NULL,
  `nama_forum` varchar(255) DEFAULT NULL,
  `tanggal_berdiri` date DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kode_pos` char(5) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `status_pengajuan` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id_forum`, `id_akun`, `nama_forum`, `tanggal_berdiri`, `logo`, `lokasi`, `provinsi`, `kabupaten`, `kecamatan`, `kode_pos`, `website`, `status_pengajuan`) VALUES
(20, 48, 'Nurul Peduli', '2021-06-02', '0a91ebd05920f67966412fee92faae1d.JPG', 'sdsd            ', 'Sumatera Barat', 'sds', 'sds', 'sds', 'sds', 1),
(22, 54, 'Rela Berbagi', '2021-07-29', '75285da0960a89536437696527dc5510.jpg', 'Padang Panjang', 'Sumatera Barat', 'solok', 'canduang', '23331', 'www.relaberbagi.org', 1),
(23, 54, 'Indah Memang', '2021-07-29', '75285da0960a89536437696527dc5510.jpg', 'Padang Panjang', 'Sumatera Barat', 'solok', 'canduang', '23331', 'www.relaberbagi.org', 0);

-- --------------------------------------------------------

--
-- Table structure for table `forum_relawan`
--

CREATE TABLE `forum_relawan` (
  `id_relawan` int(11) DEFAULT NULL,
  `id_forum` int(11) DEFAULT NULL,
  `alasan_bergabung` text DEFAULT NULL,
  `status_pengajuan_relawan` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_relawan`
--

INSERT INTO `forum_relawan` (`id_relawan`, `id_forum`, `alasan_bergabung`, `status_pengajuan_relawan`) VALUES
(14, 22, 'aaa', 0),
(14, 20, 'Mau masuk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pelatihan`
--

CREATE TABLE `jenis_pelatihan` (
  `id_jenis_pelatihan` int(11) NOT NULL,
  `nama_jenis_pelatihan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pelatihan`
--

INSERT INTO `jenis_pelatihan` (`id_jenis_pelatihan`, `nama_jenis_pelatihan`) VALUES
(1, 'ONLINE'),
(2, 'OFFLINE');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_bencana`
--

CREATE TABLE `kategori_bencana` (
  `id_kategori_bencana` int(11) NOT NULL,
  `nama_kategori_bencana` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_bencana`
--

INSERT INTO `kategori_bencana` (`id_kategori_bencana`, `nama_kategori_bencana`) VALUES
(1, 'GEMPA BUMI'),
(2, 'GUNUNG MELETUS'),
(3, 'TSUNAMI'),
(4, 'BANJIR'),
(5, 'TANAH LONGSOR'),
(6, 'KEBAKARAN HUTAN'),
(7, 'LAINNYA');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pelatihan`
--

CREATE TABLE `kategori_pelatihan` (
  `id_kategori_pelatihan` int(11) NOT NULL,
  `nama_kategori_pelatihan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_pelatihan`
--

INSERT INTO `kategori_pelatihan` (`id_kategori_pelatihan`, `nama_kategori_pelatihan`) VALUES
(1, 'LOGISTIK'),
(2, 'PSIKOSOSIAL'),
(3, 'KESEHATAN'),
(6, 'DNNDNND'),
(7, 'test'),
(8, 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `id_forum` int(11) DEFAULT NULL,
  `nama_pelatihan` varchar(255) DEFAULT NULL,
  `id_kategori_pelatihan` int(11) NOT NULL DEFAULT 0,
  `id_jenis_pelatihan` int(11) DEFAULT NULL,
  `tanggal_pelatihan` date DEFAULT NULL,
  `deskripsi_pelatihan` varchar(100) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL,
  `status_pengajuan_pelatihan` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelatihan`
--

INSERT INTO `pelatihan` (`id_pelatihan`, `id_forum`, `nama_pelatihan`, `id_kategori_pelatihan`, `id_jenis_pelatihan`, `tanggal_pelatihan`, `deskripsi_pelatihan`, `waktu`, `kuota`, `status_pengajuan_pelatihan`) VALUES
(4, 20, 'Pelatihan Tanggap Bencana', 1, 1, '2021-07-01', 'asasasas', '12:00 PM', 10, 1),
(7, 20, 'pelatihan kesehatan', 3, 1, '2021-07-14', 'pelatihan tenaga ahli K3, penerapan keselamatan dan kesehatan kerja di tempat kerja akan lebih maksi', '9:45 PM', 6, 1),
(8, 20, 'pelatihan kesehatan', 3, 1, '2021-07-05', 'untuk mengetahui dasar-dasar....', '9:00 PM', 10, 0),
(9, 20, 'pelatihan kesehatan', 2, 1, '2021-07-02', 'nvuiidehbhdb', '9:45 PM', 9, 1),
(10, 20, 'pelatihan kesehatan', 1, 1, '2021-06-28', 'dertfyghuj', '9:45 PM', 8, 1),
(11, 20, 'test', 1, 1, '2021-07-15', 'vrieirnbeinbjenbjes', '9:45 PM', 8, 1),
(12, 20, 'test', 7, 1, '2021-07-08', 'brbtrtbtrbrtbtrbrtbrtb', '10:00 PM', 6, 0),
(13, 20, 'pelatihan kesehatan', 2, 2, '2021-06-29', 'test 12312312', '10:00 PM', 40, 0),
(16, 20, 'test', 7, 1, '2021-06-28', 'eggergrt', '11:30 PM', 5, 0),
(17, 20, 'pelatihan P3k', 3, 1, '2021-06-28', 'berbreebe', '11:00 AM', 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan_relawan`
--

CREATE TABLE `pelatihan_relawan` (
  `id_pelatihan` int(11) DEFAULT NULL,
  `id_relawan` int(11) DEFAULT NULL,
  `alasan_bergabung` text DEFAULT NULL,
  `status_pengajuan_pelatihan` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelatihan_relawan`
--

INSERT INTO `pelatihan_relawan` (`id_pelatihan`, `id_relawan`, `alasan_bergabung`, `status_pengajuan_pelatihan`) VALUES
(4, 14, 'req masuk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `relawan`
--

CREATE TABLE `relawan` (
  `id_relawan` int(11) NOT NULL,
  `id_akun` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  `deskripsi_keahlian` text DEFAULT NULL,
  `surat_keterangan_sehat` varchar(100) DEFAULT NULL,
  `skck` varchar(100) DEFAULT NULL,
  `surat_persetujuan_wali` varchar(100) DEFAULT NULL,
  `foto_ktp` varchar(100) DEFAULT NULL,
  `status_pengajuan` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relawan`
--

INSERT INTO `relawan` (`id_relawan`, `id_akun`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `kode_pos`, `deskripsi_keahlian`, `surat_keterangan_sehat`, `skck`, `surat_persetujuan_wali`, `foto_ktp`, `status_pengajuan`) VALUES
(14, 51, 'asaas', 'asasa', 'asaa', 'sasasa', 'asaas', 'asaddfdsdsfd', '9327e7057125232e519a5c601da16a65.pdf', '6c2ee2cc3f17c740387bc803a161abdc.pdf', 'b01c82214eab109ff3d87cada493f4f9.pdf', 'aac36444a5496cc81129f3e0e2dd7f00.pdf', 1),
(15, 52, 'jln', 'sumatra barat', 'tanah datar', 'nuinio', '23331', 'egkejrgheig', '53e45d4e69df6ba82dccf191dba084a0.pdf', 'e3a05a950889a11434f48698e9ba1da5.pdf', '3add6a1ce15333ef65d471355f883ba2.pdf', '312bb5182e3db28189fd4d22e5a62296.pdf', 1),
(17, 54, 'jln', 'sumatra barat', 'tanah datar', 'nuinio', '23331', 'egkejrgheig', '53e45d4e69df6ba82dccf191dba084a0.pdf', 'e3a05a950889a11434f48698e9ba1da5.pdf', '3add6a1ce15333ef65d471355f883ba2.pdf', '312bb5182e3db28189fd4d22e5a62296.pdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `FK_admin_akun` (`id_akun`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id_bencana`),
  ADD KEY `FK_bencana_kategori_bencana` (`id_kategori_bencana`),
  ADD KEY `FK_bencana_forum` (`id_forum`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id_forum`),
  ADD KEY `FK_forum_akun` (`id_akun`);

--
-- Indexes for table `forum_relawan`
--
ALTER TABLE `forum_relawan`
  ADD KEY `forum_relawan_ibfk_1` (`id_forum`),
  ADD KEY `forum_relawan_ibfk_2` (`id_relawan`);

--
-- Indexes for table `jenis_pelatihan`
--
ALTER TABLE `jenis_pelatihan`
  ADD PRIMARY KEY (`id_jenis_pelatihan`);

--
-- Indexes for table `kategori_bencana`
--
ALTER TABLE `kategori_bencana`
  ADD PRIMARY KEY (`id_kategori_bencana`) USING BTREE;

--
-- Indexes for table `kategori_pelatihan`
--
ALTER TABLE `kategori_pelatihan`
  ADD PRIMARY KEY (`id_kategori_pelatihan`) USING BTREE;

--
-- Indexes for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`) USING BTREE,
  ADD KEY `FK_pelatihan_kategori_pelatihan` (`id_kategori_pelatihan`),
  ADD KEY `FK_pelatihan_jenis_pelatihan` (`id_jenis_pelatihan`),
  ADD KEY `FK_pelatihan_forum` (`id_forum`);

--
-- Indexes for table `pelatihan_relawan`
--
ALTER TABLE `pelatihan_relawan`
  ADD KEY `FK_pelatihan_relawan_pelatihan` (`id_pelatihan`),
  ADD KEY `FK_pelatihan_relawan_relawan` (`id_relawan`);

--
-- Indexes for table `relawan`
--
ALTER TABLE `relawan`
  ADD PRIMARY KEY (`id_relawan`),
  ADD KEY `FK_relawan_akun` (`id_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `bencana`
--
ALTER TABLE `bencana`
  MODIFY `id_bencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id_forum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `jenis_pelatihan`
--
ALTER TABLE `jenis_pelatihan`
  MODIFY `id_jenis_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_bencana`
--
ALTER TABLE `kategori_bencana`
  MODIFY `id_kategori_bencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori_pelatihan`
--
ALTER TABLE `kategori_pelatihan`
  MODIFY `id_kategori_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `relawan`
--
ALTER TABLE `relawan`
  MODIFY `id_relawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_admin_akun` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bencana`
--
ALTER TABLE `bencana`
  ADD CONSTRAINT `FK_bencana_forum` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id_forum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_bencana_kategori_bencana` FOREIGN KEY (`id_kategori_bencana`) REFERENCES `kategori_bencana` (`id_kategori_bencana`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `FK_forum_akun` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forum_relawan`
--
ALTER TABLE `forum_relawan`
  ADD CONSTRAINT `forum_relawan_ibfk_1` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id_forum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `forum_relawan_ibfk_2` FOREIGN KEY (`id_relawan`) REFERENCES `relawan` (`id_relawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD CONSTRAINT `FK_pelatihan_forum` FOREIGN KEY (`id_forum`) REFERENCES `forum` (`id_forum`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pelatihan_jenis_pelatihan` FOREIGN KEY (`id_jenis_pelatihan`) REFERENCES `jenis_pelatihan` (`id_jenis_pelatihan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pelatihan_kategori_pelatihan` FOREIGN KEY (`id_kategori_pelatihan`) REFERENCES `kategori_pelatihan` (`id_kategori_pelatihan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelatihan_relawan`
--
ALTER TABLE `pelatihan_relawan`
  ADD CONSTRAINT `FK_pelatihan_relawan_pelatihan` FOREIGN KEY (`id_pelatihan`) REFERENCES `pelatihan` (`id_pelatihan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_pelatihan_relawan_relawan` FOREIGN KEY (`id_relawan`) REFERENCES `relawan` (`id_relawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `relawan`
--
ALTER TABLE `relawan`
  ADD CONSTRAINT `FK_relawan_akun` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
