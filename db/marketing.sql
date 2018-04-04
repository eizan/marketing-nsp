-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 01:54 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama`, `keterangan`) VALUES
(1, 'KOTA SUKABUMI', ''),
(2, 'KABUPATEN SUKABUMI', '');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `kabupaten`) VALUES
(2, 'BOJONGGENTENG', 'KABUPATEN SUKABUMI'),
(3, 'CARINGIN', 'KABUPATEN SUKABUMI'),
(4, 'CIAMBAR', 'KABUPATEN SUKABUMI'),
(5, 'CIBADAK', 'KABUPATEN SUKABUMI'),
(6, 'CIBITUNG', 'KABUPATEN SUKABUMI'),
(7, 'CICANTAYAN', 'KABUPATEN SUKABUMI'),
(8, 'CICURUG', 'KABUPATEN SUKABUMI'),
(9, 'CIDADAP', 'KABUPATEN SUKABUMI'),
(10, 'CIDAHU', 'KABUPATEN SUKABUMI'),
(11, 'CIDOLOG', 'KABUPATEN SUKABUMI'),
(12, 'CIEMAS', 'KABUPATEN SUKABUMI'),
(13, 'CIKAKAK', 'KABUPATEN SUKABUMI'),
(14, 'CIKEMBAR', 'KABUPATEN SUKABUMI'),
(15, 'CIKIDANG', 'KABUPATEN SUKABUMI'),
(16, 'CIMANGGU', 'KABUPATEN SUKABUMI'),
(17, 'CIRACAP', 'KABUPATEN SUKABUMI'),
(18, 'CIREUNGHAS', 'KABUPATEN SUKABUMI'),
(19, 'CISAAT', 'KABUPATEN SUKABUMI'),
(20, 'CISOLOK', 'KABUPATEN SUKABUMI'),
(21, 'CURUGKEMBAR', 'KABUPATEN SUKABUMI'),
(22, 'GEGERBITUNG', 'KABUPATEN SUKABUMI'),
(23, 'GUNUNGGURUH', 'KABUPATEN SUKABUMI'),
(24, 'JAMPANGKULON', 'KABUPATEN SUKABUMI'),
(25, 'JAMPANGTENGAH', 'KABUPATEN SUKABUMI'),
(26, 'KABANDUNGAN', 'KABUPATEN SUKABUMI'),
(27, 'KADUDAMPIT', 'KABUPATEN SUKABUMI'),
(28, 'KALAPANUNGGAL', 'KABUPATEN SUKABUMI'),
(29, 'KALIBUNDER', 'KABUPATEN SUKABUMI'),
(30, 'KEBONPEDES', 'KABUPATEN SUKABUMI'),
(31, 'LENGKONG', 'KABUPATEN SUKABUMI'),
(32, 'NAGRAK', 'KABUPATEN SUKABUMI'),
(33, 'NYALINDUNG', 'KABUPATEN SUKABUMI'),
(34, 'PABUARAN', 'KABUPATEN SUKABUMI'),
(35, 'PARAKANSALAK', 'KABUPATEN SUKABUMI'),
(36, 'PARUNGKUDA', 'KABUPATEN SUKABUMI'),
(37, 'PELABUHANRATU', 'KABUPATEN SUKABUMI'),
(38, 'PURABAYA', 'KABUPATEN SUKABUMI'),
(39, 'SAGARANTEN', 'KABUPATEN SUKABUMI'),
(40, 'SIMPENANSUKABUMI', 'KABUPATEN SUKABUMI'),
(41, 'SUKALARANG', 'KABUPATEN SUKABUMI'),
(42, 'SUKARAJA', 'KABUPATEN SUKABUMI'),
(43, 'SURADE', 'KABUPATEN SUKABUMI'),
(44, 'TEGAL BULEUD', 'KABUPATEN SUKABUMI'),
(45, 'WALURAN', 'KABUPATEN SUKABUMI'),
(46, 'WARUNG KIARA', 'KABUPATEN SUKABUMI'),
(47, 'BAROS', 'KOTA SUKABUMI'),
(48, 'CIBEUREUM', 'KOTA SUKABUMI'),
(49, 'CIKOLE', 'KOTA SUKABUMI'),
(50, 'CITAMIANG', 'KOTA SUKABUMI'),
(51, 'GUNUNGPUYUH', 'KOTA SUKABUMI'),
(52, 'LEMBURSITU', 'KOTA SUKABUMI'),
(53, 'WARUDOYONG', 'KOTA SUKABUMI');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `id_sekolah` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `id_sekolah`, `nama`, `jabatan`, `no_hp`) VALUES
(1, 'SMAN 5 Kota Sukabumi', 'Jalaludin', 'BK', '085217965569');

-- --------------------------------------------------------

--
-- Table structure for table `pembimbing`
--

CREATE TABLE `pembimbing` (
  `id` int(11) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presentasi`
--

CREATE TABLE `presentasi` (
  `id` int(11) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `status` enum('Waiting','Done','Call') NOT NULL,
  `team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentasi`
--

INSERT INTO `presentasi` (`id`, `sekolah`, `hari`, `tanggal`, `jam`, `status`, `team`) VALUES
(1, 'SMAN 5 Kota Sukabumi', 'Senin', '2018-03-14', '03:00:00', 'Done', 'Gia Yosep Gunawan,Ikhsan'),
(2, 'SMKN 1 Sukabumi', 'Selasa', '2018-03-09', '07:00:00', 'Waiting', 'Anton,Gia Yosep Gunawan,Ikhsan');

-- --------------------------------------------------------

--
-- Table structure for table `scheduling`
--

CREATE TABLE `scheduling` (
  `id` int(11) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scheduling`
--

INSERT INTO `scheduling` (`id`, `sekolah`, `tanggal`, `team`) VALUES
(1, 'SMAN 5 Kota Sukabumi', '2018-03-09', 'Gia Yosep Gunawan,Ikhsan'),
(2, 'SMAN 5 Kota Sukabumi', '2018-04-12', 'Anton,Gia Yosep Gunawan,Ikhsan');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `jumlah_siswa` int(25) NOT NULL,
  `kontak_person` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `spanduk` tinyint(1) NOT NULL,
  `tanggal_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama`, `alamat`, `kabupaten`, `kecamatan`, `jumlah_siswa`, `kontak_person`, `jabatan`, `telp`, `spanduk`, `tanggal_input`) VALUES
(363, 'SMA 1 Sukabumi', 'Jl. Cikole', 'Sukabumi', 'Cisaat', 100, 'Hj Neni', 'Kepala Sekolah', '085217965569', 0, '2018-04-03 17:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_nama`) VALUES
(12, 'admin', '0c7540eb7e65b553ec1ba6b20de79608', 'Muhammad Ikhsan Thohir');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `status`, `foto`, `no_hp`, `email`) VALUES
(1, 'Ikhsan', 'Manager Marketing', '2u8ab3v26e4ggw8.png', '081615399070', 'ikhsan.thohir@gmail.com'),
(3, 'Gia Yosep Gunawan', 'Manager Administrasi', 'd42xshq1stcg888.png', '085217955584', 'giayosepgunawan@gmail.com'),
(4, 'Anton', 'Duta Senior', 'fdb6pb825pck4gg.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `foto`, `keterangan`, `tanggal`) VALUES
(1, 'Muhammad Ikhsan Thohir 3', 'ikhsan@gmail.com', 'admin', '67a7872c5aeb341d482f955cd8ff9b951a26e74e', 'Admin', '', 'Pengembang APP INI', '2018-04-03 16:29:18');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD KEY `nama_2` (`nama`),
  ADD KEY `nama_3` (`nama`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembimbing`
--
ALTER TABLE `pembimbing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presentasi`
--
ALTER TABLE `presentasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheduling`
--
ALTER TABLE `scheduling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pembimbing`
--
ALTER TABLE `pembimbing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `presentasi`
--
ALTER TABLE `presentasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `scheduling`
--
ALTER TABLE `scheduling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
