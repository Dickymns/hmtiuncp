-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2026 at 08:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmti_uncp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(8, 'hmtiperiode25', '$2y$10$qYk4Ixi3lQDUM38UUzf0Cea7PL3Xi5NR.IrTuDCBTcHzsQz2t/hpu');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal_upload` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `nama_file`, `deskripsi`, `tanggal_upload`) VALUES
(2, 'AD ART BENAR REVISI 2024 terbaru.pdf', '', '2026-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `forum_saran`
--

CREATE TABLE `forum_saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `saran` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forum_saran`
--

INSERT INTO `forum_saran` (`id`, `nama`, `saran`, `tanggal`) VALUES
(2, 'a', 'a', '2026-01-27 11:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `profil_hmti`
--

CREATE TABLE `profil_hmti` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profil_hmti`
--

INSERT INTO `profil_hmti` (`id`, `judul`, `deskripsi`) VALUES
(4, 'A', 'A'),
(5, 'ddd', 'dd'),
(6, 'ss', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal_pelaksanaan` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id`, `nama_kegiatan`, `deskripsi`, `tanggal_pelaksanaan`, `foto`) VALUES
(8, 'Berkah Ramadhan', 'Bersama HMTI membangun kebersamaan dibulan ramadhan\r\n', '2025-07-03', '1769484282_a793651ded11b63c9f7e.jpg'),
(9, 'Korwil Kampus 2', 'Koordinator Wilayah Kampus 2 Universitas Cokroaminoto Palopo', '2025-11-03', '1753383921_8cbabda83a47089a88f0.jpeg'),
(10, 'Gathering House', 'fafaffafafaf', '2025-12-04', '1753384495_21ff4c44f58fbad2a7f4.jpeg'),
(11, 'Paskah HMTI Uncp', 'Hmti Menabur Kebaikan Dan Mempererat Toleransi', '2025-12-04', '1769484304_82ab1ef593d011d08e7b.jpg'),
(12, 'Goes To School', 'Bersama HMTI Di Era Teknologi', '2025-05-16', '1753385087_f376265733a58b73ec9d.jpeg'),
(13, 'Pelatihan Menulis Dan Advokasi', 'Mahasiswa?', '2025-06-11', '1753386104_e01d873bc62828a1b1df.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `deskripsi`) VALUES
(2, 'wwwwww'),
(3, 'wwwwwwwww');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_pengurus`
--

CREATE TABLE `struktur_pengurus` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `struktur_pengurus`
--

INSERT INTO `struktur_pengurus` (`id`, `nama`, `nim`, `jabatan`, `foto`) VALUES
(4, 'Komang Dicky', '2304411782', 'Data Dan Informasi', '1769571922_766131261d7b229a10e5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `visi`, `misi`) VALUES
(4, 'wwwwwwwwwwwwww', 'eeeeeeeeeeeeee'),
(6, 'ss', 'ss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_saran`
--
ALTER TABLE `forum_saran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_hmti`
--
ALTER TABLE `profil_hmti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_pengurus`
--
ALTER TABLE `struktur_pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `forum_saran`
--
ALTER TABLE `forum_saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profil_hmti`
--
ALTER TABLE `profil_hmti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `struktur_pengurus`
--
ALTER TABLE `struktur_pengurus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
