-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2026 at 01:31 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_pbo_trpl1b_yenidwisukmahandayani`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id_karyawan` int NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `hari_kerja_masuk` date NOT NULL,
  `gaji_dasar_per_hari` decimal(10,2) NOT NULL,
  `jenis_karyawan` enum('Kontrak','Tetap','Magang') NOT NULL,
  `durasi_kontrak_bulan` int DEFAULT NULL,
  `agensi_penyalur` varchar(100) DEFAULT NULL,
  `tunjangan_kesehatan` decimal(12,2) DEFAULT NULL,
  `opsi_saham_id` varchar(50) DEFAULT NULL,
  `uang_saku_bulanan` decimal(12,2) DEFAULT NULL,
  `sertifikat_kampus_merdeka` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama_karyawan`, `departemen`, `hari_kerja_masuk`, `gaji_dasar_per_hari`, `jenis_karyawan`, `durasi_kontrak_bulan`, `agensi_penyalur`, `tunjangan_kesehatan`, `opsi_saham_id`, `uang_saku_bulanan`, `sertifikat_kampus_merdeka`) VALUES
(1, 'Andi Saputra', 'IT', '2025-01-10', 250000.00, 'Kontrak', 12, 'PT Outsource Jaya', NULL, NULL, NULL, NULL),
(2, 'Budi Santoso', 'HRD', '2025-02-15', 230000.00, 'Kontrak', 24, 'PT Mitra Kerja', NULL, NULL, NULL, NULL),
(3, 'Citra Lestari', 'Keuangan', '2025-03-01', 240000.00, 'Kontrak', 12, 'PT Sumber Daya', NULL, NULL, NULL, NULL),
(4, 'Dewi Anggraini', 'Marketing', '2025-01-20', 220000.00, 'Kontrak', 6, 'PT Talent Indonesia', NULL, NULL, NULL, NULL),
(5, 'Eko Prasetyo', 'IT', '2025-04-05', 260000.00, 'Kontrak', 18, 'PT Outsource Jaya', NULL, NULL, NULL, NULL),
(6, 'Farhan Hidayat', 'Operasional', '2025-02-28', 235000.00, 'Kontrak', 12, 'PT Mitra Kerja', NULL, NULL, NULL, NULL),
(7, 'Gina Maharani', 'Administrasi', '2025-05-10', 225000.00, 'Kontrak', 6, 'PT Talent Indonesia', NULL, NULL, NULL, NULL),
(8, 'Hendra Wijaya', 'IT', '2022-01-10', 350000.00, 'Tetap', NULL, NULL, 1500000.00, 'OS001', NULL, NULL),
(9, 'Indah Permata', 'Keuangan', '2021-05-15', 360000.00, 'Tetap', NULL, NULL, 1700000.00, 'OS002', NULL, NULL),
(10, 'Joko Susilo', 'HRD', '2020-03-20', 340000.00, 'Tetap', NULL, NULL, 1400000.00, 'OS003', NULL, NULL),
(11, 'Kartika Sari', 'Marketing', '2021-08-11', 355000.00, 'Tetap', NULL, NULL, 1600000.00, 'OS004', NULL, NULL),
(12, 'Lukman Hakim', 'Operasional', '2019-11-01', 370000.00, 'Tetap', NULL, NULL, 1800000.00, 'OS005', NULL, NULL),
(13, 'Maya Putri', 'IT', '2023-02-10', 345000.00, 'Tetap', NULL, NULL, 1500000.00, 'OS006', NULL, NULL),
(14, 'Nanda Saputri', 'Administrasi', '2022-06-18', 330000.00, 'Tetap', NULL, NULL, 1350000.00, 'OS007', NULL, NULL),
(15, 'Oki Pratama', 'IT', '2026-01-05', 100000.00, 'Magang', NULL, NULL, NULL, NULL, 1500000.00, 'Ya'),
(16, 'Putri Ayunda', 'Marketing', '2026-01-12', 100000.00, 'Magang', NULL, NULL, NULL, NULL, 1400000.00, 'Ya'),
(17, 'Rizky Maulana', 'Keuangan', '2026-02-01', 100000.00, 'Magang', NULL, NULL, NULL, NULL, 1500000.00, 'Tidak'),
(18, 'Salsa Nabila', 'HRD', '2026-02-10', 100000.00, 'Magang', NULL, NULL, NULL, NULL, 1400000.00, 'Ya'),
(19, 'Teguh Ramadhan', 'Operasional', '2026-03-01', 100000.00, 'Magang', NULL, NULL, NULL, NULL, 1600000.00, 'Tidak'),
(20, 'Vina Oktavia', 'Administrasi', '2026-03-15', 100000.00, 'Magang', NULL, NULL, NULL, NULL, 1500000.00, 'Ya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
