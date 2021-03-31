-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 06:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpdonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `id_agama` int(11) NOT NULL,
  `nama_agama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_agama`
--

INSERT INTO `tbl_agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Islam'),
(2, 'Khatolik'),
(3, 'Kristen'),
(4, 'Budha'),
(5, 'Hindu'),
(6, 'Khonghucu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id` int(11) NOT NULL,
  `no_anggota` varchar(255) DEFAULT NULL,
  `nama_anggota` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` int(1) DEFAULT NULL,
  `id_agama` int(1) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota_tinggal` varchar(255) DEFAULT NULL,
  `hp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tempat_kerja` varchar(255) DEFAULT NULL,
  `status_kepegawaian` varchar(255) DEFAULT NULL,
  `id_dpc` int(1) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id`, `no_anggota`, `nama_anggota`, `tempat_lahir`, `tgl_lahir`, `jk`, `id_agama`, `alamat`, `kota_tinggal`, `hp`, `email`, `tempat_kerja`, `status_kepegawaian`, `id_dpc`, `level`, `status`, `tanggal`) VALUES
(34, '3401123-013318', 'WIDHI SULISTYO A.Md', 'NARMADA', '1982-05-04', 0, 1, 'JL TENTARA PELAJAR KM 1 NO 5', 'KABUPATEN BANTUL', '081328479152', 'widiwaeoke@gmail.com', 'RSUD WATES', 'PNS', 3, 1, NULL, NULL),
(36, '3401114-046720', 'NIKO TESNI SAPUTRO A.Md., S.KM., M.P.H.', 'SUMBAWA', '1993-03-22', 1, 1, 'Jl. Tatabumi No. 3, Banyuraden, Gamping', 'KABUPATEN KULON PROGO', '\'08112539555', 'nikotesnisaputro@gmail.com', 'POLTEKKES KEMENKES YOGYAKARTA', NULL, 3, 2, 1, NULL),
(37, '3401118-067720', 'RAHMA PUTRI NANDA Amd.Kes', 'LAMPUNG TENGAH', '1998-08-28', 2, 1, 'jl pengasih kulon progo', 'KOTA YOGYAKARTA', '\'081390893541', 'rahma28putri@gmail.com', 'Kulon Progo', NULL, 3, 2, 1, NULL),
(38, '3401119-016518', 'SHINTA ENDIANI A.MD', 'SURAKARTA', '1987-03-10', 2, 1, 'SENTOLO KIDUL SENTOLO ', 'KABUPATEN KULON PROGO', '\'085878780000', 'endianiaja@gmail.com', 'PUSKESMAS SENTOLO I', 'PNS', 3, 2, 1, NULL),
(39, '3401120-017718', 'TRI NUR ENDAH A.Md', 'YOGYAKARTA', '1978-11-29', 2, 1, 'JL. TENTARA PELAJAR KM. 1 NO. 5 WATES', 'KOTA YOGYAKARTA', '\'081331489901', 'tn.endah@gmail.com', 'RSUD WATES', 'PNS', 3, 2, 1, NULL),
(44, '3401120-018518', 'TIWI BANGUN SEJATI amd', 'YOGYAKARTA', '1982-05-16', 2, 1, 'JL TENTARA PELAJAR KM 1 NO 5', 'KABUPATEN KULON PROGO', '\'083840186339', 'tiwi.sejati@gmail.com', 'RSUD WATES', 'PNS', 3, 2, 1, NULL),
(45, '3401120-035619', 'TYAS AYU PRABAWATI A.Md.KES', 'KLATEN', '1996-09-03', 2, 1, 'Jl. Sutopo No 5 , Cacaban, Magelang Tengah, Kota Magelang, Jawa Tengah 56121', 'KABUPATEN KLATEN', '082326522223 ', 'prabawati60@gmail.com', 'RUMAH SAKIT LESTARI RAHARJA MAGELANG ', 'Swasta', 3, 2, 1, NULL),
(48, '3401120-041219', 'TRI PUJIWARNI AMd, PerKes', 'BANTUL', '1988-05-21', 2, 1, 'LEDOK,SIDOREJO, LENDAH', 'KOTA YOGYAKARTA', '\'', 'tripujiwarni@gmail.com', 'PUSKESMAS LENDAH II', NULL, 3, 2, 1, NULL),
(49, '3401120-050220', 'TANTI RACHMAWATI A.Md.RMIK', 'KULON PROGO', '1992-09-22', 2, 1, 'JL. SENTOLO-MUNTILAN KM 0,3 BANTAR KULON BANGUNCIPTO SENTOLO', 'KABUPATEN KULON PROGO', '\'081931781117', 'tantirachma22@gmail.com', 'RSUD NYI AGENG SERANG', 'Swasta', 3, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dpc`
--

CREATE TABLE `tbl_dpc` (
  `id_dpc` int(11) NOT NULL,
  `nama_dpc` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dpc`
--

INSERT INTO `tbl_dpc` (`id_dpc`, `nama_dpc`) VALUES
(1, 'DPC Kota Yogyakarta'),
(2, 'DPC Bantul'),
(3, 'DPC Kulonprogo'),
(4, 'DPC Sleman'),
(5, 'DPC Gunung Kidul');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `password`, `level`) VALUES
(1, 'WIDHI SULISTYO A.Md', 'widiwaeoke@gmail.com', '19820504', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dpc`
--
ALTER TABLE `tbl_dpc`
  ADD PRIMARY KEY (`id_dpc`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_dpc`
--
ALTER TABLE `tbl_dpc`
  MODIFY `id_dpc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
