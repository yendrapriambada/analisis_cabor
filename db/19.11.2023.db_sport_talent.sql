-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2023 at 07:46 AM
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
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(128) NOT NULL,
  `email_user` varchar(128) NOT NULL,
  `password_user` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name_user`, `email_user`, `password_user`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Yendra Priambada', 'yendra@gmail.com', '$2y$10$o0/aWvDmNeE7mD0GGnHMX.RwJx9QoIs0v0HrD4ODRQJWru34w0Tty', 2, 1, '0000-00-00 00:00:00'),
(5, 'Dwi Fitria Al Husaeni', 'dwi@gmail.com', '$2y$10$quXydg/Tlfajxit6lOVRwO6.A4Ph7UFxe4ie/XP/RjAJuSP7itrh.', 1, 1, '0000-00-00 00:00:00'),
(7, 'Admin', 'admin@gmail.com', '$2y$10$xKu.d9TwmjNuoefNU39YWekt7IZZNclDS5Otw9IpR9QHgteQBIfW6', 1, 1, '0000-00-00 00:00:00'),
(15, 'Akun Member', 'member@gmail.com', '$2y$10$QTQ8aJbxOSnBF3nX/74sa.quwojQyS7CwnEvW4NaeQs//5Uv8xuvO', 2, 1, '0000-00-00 00:00:00'),
(16, 'Akun Quick Access', 'quick@gmail.com', '$2y$10$E8fpXH/YYY9U7aSD0FbU6ea6GylWG1.mm3Dtj4vdGiKIbkzKGKAKu', 3, 1, '0000-00-00 00:00:00'),
(17, 'test', 'test@gmail.com', '$2y$10$uZ310SsuqrfEXlf45CR30eti7fB9G5JfFaFvIN/A8UBMJU1lHAenm', 1, 1, '0000-00-00 00:00:00'),
(18, 'ASDGAS', '1@uhsdf.ds', '$2y$10$t0DxwJrZhjFUVLD6zZS97Odm67pgjcXBYcYzUU8ksR10OLeNx9b8u', 2, 0, '0000-00-00 00:00:00'),
(19, 'adsf', 'uyhij@Uhj.dsf', '$2y$10$12SAbsSA2cqHsQYeHg4La.8/YOM6d7hmAWTmyXaxWTRnpfg2Zcgma', 2, 0, '0000-00-00 00:00:00'),
(20, 'q', 'rw@uhn.dsf', '$2y$10$4TdOVDoDuePgGC7J14RzSOe.jQ3IT8WvQOXbVa7fU1378yE2U23VO', 2, 0, '0000-00-00 00:00:00'),
(21, 'guh', 'uuhg@ughj.dsf', '$2y$10$NFIK5HnaCdjgEOZCZIzzMOVy/A3VMFFFIOg.ZISD19sgqA/fgWubW', 2, 0, '0000-00-00 00:00:00'),
(22, 'fhgh', 'ghb@yhujk.sd', '$2y$10$TLwup6iZnSlr7eMId3DnYula1rB9l8bW4y41DSjcZ1lo7YJeo6fiu', 3, 0, '2023-11-19 01:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user_role`
--

INSERT INTO `tb_user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Unverfied User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_user_role`
--
ALTER TABLE `tb_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
