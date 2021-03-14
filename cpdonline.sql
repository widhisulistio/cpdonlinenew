-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2021 at 04:09 PM
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
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id`, `no_anggota`, `nama_anggota`, `tempat_lahir`, `tgl_lahir`, `jk`, `id_agama`, `alamat`, `kota_tinggal`, `hp`, `email`, `tempat_kerja`, `status_kepegawaian`, `id_dpc`, `level`) VALUES
(1, '3401114-046720', 'NIKO TESNI SAPUTRO A.Md., S.KM., M.P.H.', 'SUMBAWA', '1993-03-22', 1, 1, 'Jl. Tatabumi No. 3, Banyuraden, Gamping', 'KABUPATEN KULON PROGO', '\'08112539555', 'nikotesnisaputro@gmail.com', 'POLTEKKES KEMENKES YOGYAKARTA', '', 3, NULL),
(2, '1813101-012020', 'ARIF NUGROHO AMd.RMIK', 'SRAGEN', '1993-07-18', 1, 1, 'JALAN KHUDORI NO 34', 'KABUPATEN KULON PROGO', '\'085228346125', 'arifnugroho18071993@gmail.com', 'RSU KHARISMA PARAMEDIKA', '', 3, NULL),
(3, '3401101-015818', 'ANASTASIA EMI WIDAYANTI A.Md', 'KULON PROGO', '1978-06-20', 2, 2, 'JL. TENTARA PELAJAR NO 5 KM 1 WATES KULON PROGO', 'KABUPATEN KULON PROGO', '\'085226302229', 'anastasiawidayanti79@gmail.com', 'RSUD WATES', 'PNS', 3, NULL),
(4, '3401101-017018', 'ANDRIYANI SUMANTININGSIH A.Md', 'KULON PROGO', '1984-04-04', 2, 1, 'KRAGON II, PALIHAN , TEMON, KULON PROGO', 'KABUPATEN KULON PROGO', '\'081328291254', 'qisthin54@gmail.com', 'UPTD PUSKESMAS TEMON II', 'PNS', 3, NULL),
(5, '3401101-018618', 'ANGGA RASEPTA ARDYANTA A.Md', 'KULON PROGO', '1992-09-23', 1, 1, 'JL TENTARA PELAJAR KM 1 NO 5 WATES KULON PROGO', 'KABUPATEN KULON PROGO', '\'083840010507', 'anggarasepta@gmail.com', 'RSUD WATES', '', 3, NULL),
(6, '3401102-058020', 'BARFI LIMATANHIMAS A.Md.RMIK', 'KULON PROGO', '1995-08-22', 1, 1, 'JL. SENTOLO - MUNTILAN KM 0.3 BANGUNCIPTO, SENTOLO, KULON PROGO', 'KABUPATEN KULON PROGO', '\'085640666998', 'L.BARFI08@GMAIL.COM', 'RSUD NYI AGENG SERANG', '', 3, NULL),
(7, '3401103-056220', 'CANGGUNG WIBOWO A.Md.RMIK', 'KULON PROGO', '1991-01-15', 1, 1, 'JL. SENTOLO-MUNTILAN KM. 03 BAGUNSIPTO SENTOLO', 'KABUPATEN KULON PROGO', '\'085877764005', 'gonk.wibowo@gmail.com', 'RSUD NYI AGENG SERANG ', 'Swasta', 3, NULL),
(8, '3401104-001420', 'DIAH TISA ANJUMI S.KM', 'KULON PROGO', '1991-09-09', 2, 1, 'PERENG,BUMIREJO,LENDAH', 'KABUPATEN KULON PROGO', '\'081329812805', 'diahtisaanjumi@gmail.com', 'UPTD PUSKESMAS LENDAH I', 'BLU', 3, NULL),
(9, '3401104-015018', 'DEWI NATALIA A. Md', 'BANTUL', '1982-12-24', 2, 1, 'JL. Tentara Pelajar KM. 1  No. 5 Wates', 'KABUPATEN BANTUL', '\'0818272813', 'dwnatalia82@gmail.com', 'RSUD WATES', 'PNS', 3, NULL),
(10, '3401104-018918', 'DIAN WIJAYANTI A.Md', 'KULON PROGO', '1986-03-22', 2, 1, 'JL. TENTARA PELAJAR KM.01 WATES KULON PROGO D.I.YOGYAKARTA', 'KABUPATEN SLEMAN', '\'085292952721', 'dhieanzalea@gmail.com', 'RSUD WATES', 'PNS', 3, NULL),
(11, '3401104-019018', 'DWI WIDYANINGRUM A.Md', 'KULON PROGO', '1986-12-17', 2, 1, 'JL. TENTARA PELAJAR KM.01 WATES KULON PROGO D.I.YOGYAKARTA', 'KABUPATEN KULON PROGO', '\'08175478300', 'melannaya22@gmail.com', 'RSUD WATES', 'PNS', 3, NULL),
(12, '3401106-017218', 'FADHILAH HIDAYANTI AMd', 'LAMPUNG SELATAN', '1984-02-16', 2, 1, 'JL BANTUL KM 9,5 BAKALAN SEWON BANTUL DAN LENDAH BUMIREJO KULONPROGO', 'KABUPATEN SLEMAN', '\'081227695807', 'fadhilahhidayanti033@gmail.com', 'KLINIK PRATAMA RAHMA MEDIKA DAN  RS PURA RAHARJA MEDIKA', 'Swasta', 3, NULL),
(13, '3401106-018818', 'FELIX WAHYU WARDAYA A.Md RMIK', 'KULON PROGO', '1991-12-16', 1, 2, 'JALAN TENTARA PELAJAR KM 01 NO 05 WATES KULON PROGO ', 'KOTA YOGYAKARTA', '\'085643634166', 'renaldianton@gmail.com', 'RUMAH SAKIT UMUM DAERAH WATES', 'Swasta', 3, NULL),
(14, '3401106-075120', 'FELICYTAS TUTI MARHENI A.Md.RMIK', 'KULON PROGO', '1994-06-02', 2, 2, 'JL SENTOLO - MUNTILAN KM 0.3 BANGUNCIPTO SENTOLO', 'KABUPATEN KULON PROGO', '\'085642647894', 'fellycytastm@gmail.com', 'RSUD NYI AGENG SERANG', '', 3, NULL),
(15, '3401107-017118', 'GRESI TUTALIYA SURYANINGRUM A.md', 'PURWOREJO', '1983-06-11', 2, 3, 'Jl. Tentara Pelajar km.1 no. 5 Wates', 'KABUPATEN KULON PROGO', '\'08122693865', 'tutaliyagresi@yahoo.co.id', 'RSUD WATES', 'PNS', 3, NULL),
(16, '3401109-003320', 'IRMA APRIYANTI Amd. Kes', 'BANTUL', '1994-04-14', 2, 1, 'JL GOA KISKENDO KM 08, SIBOLONG, JATIMULYO, GIRIMULYO', 'KABUPATEN BANTUL', '\'081226940990', 'Irmaaapri@gmail.com', 'UPTD PUSKESMAS GIRIMULYO II', 'Swasta', 3, NULL),
(17, '3401111-047320', 'KHUSNUL FAUZIYAH A.Md. RMIK', 'KULON PROGO', '1993-08-30', 2, 1, 'JALAN TENTARA PELAJAR KM.1  NO. 5,  BEJI, WATES, KULON PROGO, DAERAH ISTIMEWA YOGYAKARTA', 'KABUPATEN KULON PROGO', '\'', 'kfauziyah@ymail.com', 'RSUD WATES', '', 3, NULL),
(18, '3401112-015518', 'LATIFUL HAKIM A.Md', 'BANTUL', '1982-11-26', 1, 1, 'SEGAJIH, HARGOTIRTO, KOKAP, KULON PROGO', 'KABUPATEN BANTUL', '\'08121571607', 'hakimlatiful@gmail.com', 'UPTD PUSKESMAS KOKAP II', 'PNS', 3, NULL),
(19, '3401112-036019', 'LISMAWATI DEWI ANGGRAINI A.Md', 'KULON PROGO', '1990-10-08', 2, 1, 'JALAN TENTARA PELAJAR KM.1 NO.5 WATES KULON PROGO', 'KABUPATEN KULON PROGO', '\'085335890908', 'dewi08anggraini@gmail.com', 'RSUD WATES', 'PTT', 3, NULL),
(20, '3401113-003617', 'MARISKA SWA CAHAYARSI AMd.PerKes', 'SLEMAN', '1986-12-27', 2, 1, 'JL. Wakhid Hasim Kularan Triharjo Wates Kulon Progo', 'KABUPATEN SLEMAN', '\'081568211311', 'mariskaswa@gmail.com', 'UPTD PUSKESMAS WATES', 'PNS', 3, NULL),
(21, '3401113-018718', 'MUTMAINAH A.Md RMIK', 'KENDAL', '1988-02-01', 2, 1, 'JALAN TENTARA PELAJAR KM 1 NO 5 WATES', 'KABUPATEN KULON PROGO', '\'082137984790', 'mutmainah9399@gmail.com', 'RSUD WATES', '', 3, NULL),
(22, '3401113-051120', 'MUHAMMAD NUR JAYATULLAH A.Md, S.Kom', 'YOGYAKARTA', '1983-03-26', 1, 1, 'Jl. Wates Purworejo km 10.6 Kaliwangan lor Temon kulon, Kulon progo', 'KOTA YOGYAKARTA', '\'087739885522', 'nurjayatullah@gmail.com', 'UPTD Puskesmas Temon I', 'PNS', 3, NULL),
(23, '3401114-035919', 'NUR RAHMAWATI A.Md', 'BANTUL', '1984-12-24', 2, 1, 'JL. TENTARA PELAJAR KM 1 NO 5 WATES KULONPROGO', 'KABUPATEN BANTUL', '\'08179438401', 'vitaaulia49@gmail.com', 'RSUD WATES KULONPROGO', 'PTT', 3, NULL),
(24, '3401114-046019', 'NIA AGUSTIN A.Md. RMIK', 'BANTUL', '1991-08-02', 2, 1, '-', 'KABUPATEN KULON PROGO', '\'083840540848', 'aagustin910@gmail.com', '-', '', 3, NULL),
(25, '3401115-034119', 'OSCAR CAHYO TIMUR A.Md.RMIK', 'KULON PROGO', '1991-12-30', 1, 2, 'Jalan Tentara Pelajar Km 1 no.5 Wates Kulon Progo', 'KABUPATEN KULON PROGO', '\'085643081901', 'oscarcahyotimur@gmail.com', 'RSUD WATES', 'PTT', 3, NULL),
(26, '3401118-017618', 'RIRIN WURYANTI AMD', 'WONOSOBO', '1983-05-10', 2, 1, 'JL Sentolo-Muntila KM 0.3 BANTARKULON, BANGUNCIPTO, SENTOLO', 'KABUPATEN BANTUL', '\'082230604363', 'maurien1909@gmail.com', 'RSUD NYI AGENG SERANG', 'PNS', 3, NULL),
(27, '3401118-067720', 'RAHMA PUTRI NANDA Amd.Kes', 'LAMPUNG TENGAH', '1998-08-28', 2, 1, 'jl pengasih kulon progo', 'KOTA YOGYAKARTA', '\'081390893541', 'rahma28putri@gmail.com', 'Kulon Progo', '', 3, NULL),
(28, '3401119-016518', 'SHINTA ENDIANI A.MD', 'SURAKARTA', '1987-03-10', 2, 1, 'SENTOLO KIDUL SENTOLO ', 'KABUPATEN KULON PROGO', '\'085878780000', 'endianiaja@gmail.com', 'PUSKESMAS SENTOLO I', 'PNS', 3, NULL),
(29, '3401120-017718', 'TRI NUR ENDAH A.Md', 'YOGYAKARTA', '1978-11-29', 2, 1, 'JL. TENTARA PELAJAR KM. 1 NO. 5 WATES', 'KOTA YOGYAKARTA', '\'081331489901', 'tn.endah@gmail.com', 'RSUD WATES', 'PNS', 3, NULL),
(30, '3401120-018518', 'TIWI BANGUN SEJATI amd', 'YOGYAKARTA', '1982-05-16', 2, 1, 'JL TENTARA PELAJAR KM 1 NO 5', 'KABUPATEN KULON PROGO', '\'083840186339', 'tiwi.sejati@gmail.com', 'RSUD WATES', 'PNS', 3, NULL),
(31, '3401120-035619', 'TYAS AYU PRABAWATI A.Md.KES', 'KLATEN', '1996-09-03', 2, 1, 'Jl. Sutopo No 5 , Cacaban, Magelang Tengah, Kota Magelang, Jawa Tengah 56121', 'KABUPATEN KLATEN', '082326522223 ', 'prabawati60@gmail.com', 'RUMAH SAKIT LESTARI RAHARJA MAGELANG ', 'Swasta', 3, NULL),
(32, '3401120-041219', 'TRI PUJIWARNI AMd, PerKes', 'BANTUL', '1988-05-21', 2, 1, 'LEDOK,SIDOREJO, LENDAH', 'KOTA YOGYAKARTA', '\'', 'tripujiwarni@gmail.com', 'PUSKESMAS LENDAH II', '', 3, NULL),
(33, '3401120-050220', 'TANTI RACHMAWATI A.Md.RMIK', 'KULON PROGO', '1992-09-22', 2, 1, 'JL. SENTOLO-MUNTILAN KM 0,3 BANTAR KULON BANGUNCIPTO SENTOLO', 'KABUPATEN KULON PROGO', '\'081931781117', 'tantirachma22@gmail.com', 'RSUD NYI AGENG SERANG', 'Swasta', 3, NULL),
(34, '3401123-013318', 'WIDHI SULISTYO A.Md', 'NARMADA', '1982-05-04', 1, 1, 'JL TENTARA PELAJAR KM 1 NO 5', 'KABUPATEN BANTUL', '081328479152', 'widiwaeoke@gmail.com', 'RSUD WATES', 'PNS', 3, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
