-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2023 at 12:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sport_talent`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anak`
--

CREATE TABLE `tb_anak` (
  `id_anak` int(11) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `jenis_kelamin_anak` char(1) NOT NULL,
  `tinggi_badan_anak` int(11) NOT NULL,
  `berat_badan_anak` int(11) NOT NULL,
  `tinggi_duduk_anak` int(11) NOT NULL,
  `rentang_lengan_anak` int(11) NOT NULL,
  `kecepatan_anak` int(11) NOT NULL,
  `kelincahan_anak` int(11) NOT NULL,
  `koordinasi_anak` int(11) NOT NULL,
  `kekuatan_anak` int(11) NOT NULL,
  `power_anak` int(11) NOT NULL,
  `daya_tahan_anak` int(11) NOT NULL,
  `nilai_potensi_anak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_anak`
--

INSERT INTO `tb_anak` (`id_anak`, `nama_anak`, `jenis_kelamin_anak`, `tinggi_badan_anak`, `berat_badan_anak`, `tinggi_duduk_anak`, `rentang_lengan_anak`, `kecepatan_anak`, `kelincahan_anak`, `koordinasi_anak`, `kekuatan_anak`, `power_anak`, `daya_tahan_anak`, `nilai_potensi_anak`) VALUES
(5, 'Putri', '2', 9, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9),
(6, 'yendra', '1', 9, 8, 8, 8, 8, 9, 9, 9, 9, 9, 9),
(7, 'Dwi', '1', 8, 9, 8, 9, 9, 9, 9, 9, 9, 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_cabor`
--

CREATE TABLE `tb_cabor` (
  `id_cabor` int(11) NOT NULL,
  `nama_cabor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_cabor`
--

INSERT INTO `tb_cabor` (`id_cabor`, `nama_cabor`) VALUES
(1, 'Bola Basket'),
(2, 'Bola Voli'),
(3, 'Bulutangkis'),
(4, 'Sepakbola'),
(5, 'Beladiri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tokens`
--

CREATE TABLE `tb_tokens` (
  `id_token` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(128) NOT NULL,
  `email_user` varchar(128) NOT NULL,
  `password_user` varchar(256) NOT NULL,
  `role_id` int(1) NOT NULL,
  `progres_aktivasi_user` int(1) NOT NULL DEFAULT 1,
  `is_active` int(1) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name_user`, `email_user`, `password_user`, `role_id`, `progres_aktivasi_user`, `is_active`, `date_created`) VALUES
(1, 'Yendra', 'yendra@gmail.com', '$2y$10$o0/aWvDmNeE7mD0GGnHMX.RwJx9QoIs0v0HrD4ODRQJWru34w0Tty', 2, 2, 1, '2023-11-22 01:36:43'),
(5, 'Dwi', 'dwi@gmail.com', '$2y$10$quXydg/Tlfajxit6lOVRwO6.A4Ph7UFxe4ie/XP/RjAJuSP7itrh.', 1, 4, 1, '2023-11-22 01:36:56'),
(9, 'Yendra Priambada', 'yendra@upi.edu', '$2y$10$S5fiJeu6FzrkSiFGB9792.PDfI/H2xQcJNEUHM9uV105Na91AF24a', 2, 5, 0, '2023-11-23 17:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Guest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anak`
--
ALTER TABLE `tb_anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `tb_cabor`
--
ALTER TABLE `tb_cabor`
  ADD PRIMARY KEY (`id_cabor`);

--
-- Indexes for table `tb_tokens`
--
ALTER TABLE `tb_tokens`
  ADD PRIMARY KEY (`id_token`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anak`
--
ALTER TABLE `tb_anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_cabor`
--
ALTER TABLE `tb_cabor`
  MODIFY `id_cabor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_tokens`
--
ALTER TABLE `tb_tokens`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
