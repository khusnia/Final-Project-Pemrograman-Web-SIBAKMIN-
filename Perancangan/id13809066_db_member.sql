-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 07, 2020 at 01:07 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13809066_db_member`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kritik`
--

CREATE TABLE `tb_kritik` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kritik` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_kritik`
--

INSERT INTO `tb_kritik` (`id`, `nama`, `email`, `kritik`) VALUES
(2, 'asdasd', 'yusuf.ardiansyah2807@gmail.com', 'bagus'),
(3, 'yusuf', '@yusuf', 'Mantap'),
(4, 'Bujank', 'bujankku@yahoo.coid', 'Santuy'),
(5, 'Bujank', 'bujankku@yahoo.coid', 'Santuy');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lomba` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prestasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id`, `nama`, `angkatan`, `jenis`, `lomba`, `prestasi`) VALUES
(1, 'Cready Celgie Gildbransen', '2018', 'Non Akademik', 'Kejurnas Taekwondo Profesional Bela Negara (Jabar Open) 2020', 'Juara 1 Kyorugi Senior U-63kg'),
(2, 'Ibrahim', '2018', 'Non Akademik', 'LA Campus League Basketball 2018', 'Semifinalis'),
(3, 'Tamariska Laras Suci\r\n', '2019', 'Non Akademik', 'Piala walikota malang cabor hockey\r\n', 'Juara 3'),
(4, 'Tiara Karunia Miranti', '2018', 'non akademik', 'BALARAM XXVII KSR UB tingkat nasional', 'Harapan 1 Sanitasi Dan Kesehatan'),
(5, 'Ananda Lakunti Ardiatama', '2018', 'non akademik', 'Vlog polresta sidoarjo', 'Juara 1 Vlog Polresta Sidoarjo 2019, Juara 2 Video Pendek Sidoresik '),
(6, 'Sudewantoro Nur Muhammad', '2018', 'non akademik', 'Pekan Olahraga Provinsi VI Jatim ', 'Juara 3 Kempo'),
(7, 'Auralia Miffatul Jannah', '2018', 'non akademik', 'KONTES MAKE UP', 'Best Make-up'),
(8, 'Baitun Nadhiroh', '2018', 'non akademik', 'Olimpiade Veteran', 'Juara 3 Futsal Putri'),
(9, 'Diah Fatmawati', '2018', 'Akademik', 'Lomba Penelitian Belia (Center For Young Scientists) 2016', '15 Besar se-Provinsi Jawa Timur bidang Environmental Science.'),
(10, 'Anisa Rahma Salsabila', '2019', 'Akademik', 'Lomba Menulis Opini Kemendikbud Pusat Prestasi Nasional', 'Peserta'),
(11, 'Ainun Rizkiyanni Fadilla', '2019', 'non akademik', 'Lomba Poster ', 'Peserta'),
(12, 'Oktania Purwaningrum', '2018', 'non akademik', 'Menulis Puisi Bertema \"Rumah\"', 'Penulis Terpilih'),
(23, 'Moch Aburizal Fatwa ', '2018', 'non akademik', 'Basket Piala Rektor UPN', 'Juara 1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_total`
--

CREATE TABLE `tb_total` (
  `id` int(11) NOT NULL,
  `angkatan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_total`
--

INSERT INTO `tb_total` (`id`, `angkatan`, `jumlah`) VALUES
(1, '2019', '3'),
(2, '2018', '10'),
(3, '2017', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kritik`
--
ALTER TABLE `tb_kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_total`
--
ALTER TABLE `tb_total`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kritik`
--
ALTER TABLE `tb_kritik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_total`
--
ALTER TABLE `tb_total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
