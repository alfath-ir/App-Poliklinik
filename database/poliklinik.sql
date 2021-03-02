-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 02:18 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poliklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `no_periksa` varchar(128) NOT NULL,
  `diagnosa` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `id_op` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `id_pasien`, `no_periksa`, `diagnosa`, `tanggal`, `id_op`) VALUES
(15, 1, 'IFHL08', 'Pusing', '2021-01-15', 0),
(27, 1, 'INAF32', 'Kurang Darah', '2021-01-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `obat_keluar`
--

CREATE TABLE `obat_keluar` (
  `id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat_keluar`
--

INSERT INTO `obat_keluar` (`id`, `obat_id`, `jumlah`, `tgl`) VALUES
(1, 12, 1, '2021-01-19'),
(2, 6, 1, '2021-01-19'),
(3, 16, 1, '2021-01-19'),
(4, 1, 1, '2021-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `obat_masuk`
--

CREATE TABLE `obat_masuk` (
  `id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat_masuk`
--

INSERT INTO `obat_masuk` (`id`, `obat_id`, `jumlah`, `tgl`) VALUES
(1, 1, 12, '2020-12-15'),
(6, 24, 1, '0000-00-00'),
(8, 2, 43, '2020-12-18'),
(9, 5, 34, '2020-12-19'),
(10, 1, 12, '2020-12-21'),
(12, 1, 12, '2021-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `obat_pasien`
--

CREATE TABLE `obat_pasien` (
  `no_periksa` varchar(128) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `ket` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat_pasien`
--

INSERT INTO `obat_pasien` (`no_periksa`, `id_pasien`, `id_obat`, `jumlah`, `ket`) VALUES
('ANHI41', 1, 1, 1, '3x1'),
('PRCE95', 3, 2, 1, '2x1'),
('PRCE95', 3, 8, 4, '3x2'),
('NLAA89', 1, 1, 1, '2x1'),
('AL-T75', 1, 5, 2, '3x1'),
('PEII07', 3, 6, 1, '2x1'),
('PETU01', 4, 1, 1, '2x1'),
('PRAW67', 3, 8, 1, '2x1'),
('OYBN69', 5, 7, 3, '3x1'),
('KTRU75', 5, 12, 1, '3x1'),
('IITR24', 3, 6, 1, '2x1'),
('PWIE26', 4, 16, 1, '3x1'),
('INAF32', 1, 1, 1, '2x1');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `no` int(9) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` varchar(128) NOT NULL,
  `jk` varchar(128) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `tipe_pasien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `no`, `nama`, `tgl_lahir`, `usia`, `jk`, `no_telp`, `alamat`, `tipe_pasien`) VALUES
(1, 18753034, 'Irfan Al-Fath', '2000-06-14', '20 ', 'Laki-laki', 1234567811, 'Kotabumi', 2),
(3, 18753030, 'Celine Pratiwi', '2003-12-12', '17 ', 'Perempuan', 2147483647, 'Metro', 2),
(4, 18753016, 'Dewa Ayu Putu Permoni', '1998-09-11', '22 ', 'Perempuan', 2147483647, 'Lampung timur', 2),
(5, 2147483647, 'Eko Subyantoro', '1975-08-12', '45 ', 'Laki-laki', 2147483647, 'bandar lampung', 1),
(6, 481617837, 'Example', '1989-08-12', '31 ', 'Perempuan', 2147483647, 'bandar lampung', 1);

-- --------------------------------------------------------

--
-- Table structure for table `periksa`
--

CREATE TABLE `periksa` (
  `id` int(11) NOT NULL,
  `no_periksa` varchar(128) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tipe_pasien` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `tekanan_darah` int(11) DEFAULT NULL,
  `gula_darah` int(11) DEFAULT NULL,
  `asam_urat` int(11) DEFAULT NULL,
  `tipe_tamu` int(11) NOT NULL,
  `diagnosa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `periksa`
--

INSERT INTO `periksa` (`id`, `no_periksa`, `id_pasien`, `tipe_pasien`, `usia`, `id_petugas`, `tgl`, `tekanan_darah`, `gula_darah`, `asam_urat`, `tipe_tamu`, `diagnosa`) VALUES
(21, 'IFHL08', 1, 2, 20, 1, '2021-01-15', 120, 120, 120, 2, 1),
(38, 'INAF32', 1, 2, 20, 21, '2021-01-20', 0, 0, 0, 2, 1),
(39, 'CNIA74', 3, 2, 17, 21, '2021-01-20', 120, 1, 1, 1, 0),
(40, 'OYET52', 5, 1, 45, 21, '2021-01-20', 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id` int(10) NOT NULL,
  `no_obat` int(11) NOT NULL,
  `nm_obat` varchar(50) NOT NULL,
  `jenis` varchar(128) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id`, `no_obat`, `nm_obat`, `jenis`, `stok`) VALUES
(1, 12345678, 'Paracetamol', 'Pcs', 60),
(2, 0, 'Flucadex', 'Pcs', 42),
(3, 0, 'Antasid', 'Pcs', 0),
(4, 0, 'Ambroxol', 'Pcs', 0),
(5, 0, 'Cetirizine', 'Pcs', 36),
(6, 0, 'Dexamethasone', 'Pcs', -2),
(7, 0, 'Omeprazole', 'Pcs', -3),
(8, 0, 'Grantusif', 'Pcs', -5),
(9, 0, 'Lodia', 'Pcs', 4),
(10, 0, 'Gentamicin Salep', 'Pcs', 0),
(11, 0, 'Bioplacenton Salep', 'Pcs', 3),
(12, 0, 'Ketoconazole Salep', 'Pcs', -1),
(13, 0, 'Simvastatin', 'Pcs', 0),
(14, 0, 'Neurodex', 'Pcs', 0),
(15, 0, 'Sangobion', 'Pcs', 0),
(16, 0, 'Vitamin C', 'Pcs', -1),
(17, 0, 'Spasminal', 'Pcs', 0),
(18, 0, 'Insto', 'Pcs', 0),
(19, 0, 'Masker', 'Pcs', 0),
(20, 0, 'Stik Asam Urat', 'Pcs', 0),
(21, 0, 'Stik Gula Darah', 'Pcs', 0),
(22, 0, 'Stik Kolestrol', 'Pcs', 0),
(23, 0, 'Asam Mefenamat', 'Pcs', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_pasien`
--

CREATE TABLE `tipe_pasien` (
  `id` int(11) NOT NULL,
  `tipe_pasien` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_pasien`
--

INSERT INTO `tipe_pasien` (`id`, `tipe_pasien`) VALUES
(1, 'Karyawan'),
(2, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_tamu`
--

CREATE TABLE `tipe_tamu` (
  `id` int(11) NOT NULL,
  `tipe` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_tamu`
--

INSERT INTO `tipe_tamu` (`id`, `tipe`) VALUES
(1, 'Kunjungan'),
(2, 'Periksa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `tugas` varchar(256) NOT NULL,
  `no_telp` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `tugas`, `no_telp`, `foto`, `role_id`) VALUES
(20, 'admin', '$2y$10$FU.IgAVqDUagRySu3yx2Z.RLZ/o4WztRWw3PkdTPTYWReROIo1opq', 'Admin', 'Admin', '082282738344', 'default.jpg', 1),
(21, 'petugas', '$2y$10$5PZVvk.K/z1eX1TbE4kYdelOWQXpp/en90QoHsUmcLeQohlMKgOPa', 'Petugas', 'Bidan', '082282738344', 'default.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 2, 1),
(8, 2, 2),
(9, 2, 3),
(10, 2, 5),
(11, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `user_submenu`
--

CREATE TABLE `user_submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `ico` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_submenu`
--

INSERT INTO `user_submenu` (`id`, `menu_id`, `judul`, `url`, `ico`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'fas fa-home'),
(2, 2, 'Periksa', 'periksa', 'fas fa-stethoscope'),
(3, 3, 'Pasien', 'pasien', 'fas fa-user'),
(4, 4, 'User', 'user', 'fas fa-user-md'),
(5, 5, 'Obat', 'obat', 'fas fa-medkit'),
(6, 6, 'Laporan', 'laporan', 'fas fa-file-text');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_pasien`
--
ALTER TABLE `tipe_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_tamu`
--
ALTER TABLE `tipe_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_submenu`
--
ALTER TABLE `user_submenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `obat_keluar`
--
ALTER TABLE `obat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tipe_pasien`
--
ALTER TABLE `tipe_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipe_tamu`
--
ALTER TABLE `tipe_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_submenu`
--
ALTER TABLE `user_submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
