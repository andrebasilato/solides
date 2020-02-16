-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2020 at 07:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solides`
--

-- --------------------------------------------------------

--
-- Table structure for table `sis_usuario`
--

CREATE TABLE `sis_usuario` (
  `id` int(14) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sis_usuario`
--

INSERT INTO `sis_usuario` (`id`, `nome_completo`, `email`, `usuario`, `senha`) VALUES
(3, 'André Gil Schmidt Basilato', 'andrebasilato@gmail.com', 'andrebasilato', '698dc19d489c4e4db73e28a713eab07b');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lancamento`
--

CREATE TABLE `tb_lancamento` (
  `id` int(11) NOT NULL,
  `hr_chegada_emp` timestamp NULL DEFAULT NULL,
  `hr_saida_alm` timestamp NULL DEFAULT NULL,
  `hr_volta_alm` timestamp NULL DEFAULT NULL,
  `hr_saida_emp` timestamp NULL DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_cad` timestamp NULL DEFAULT NULL,
  `dia_ano` int(11) NOT NULL,
  `tag` int(11) NOT NULL,
  `excluido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_lancamento`
--

INSERT INTO `tb_lancamento` (`id`, `hr_chegada_emp`, `hr_saida_alm`, `hr_volta_alm`, `hr_saida_emp`, `id_usuario`, `data_cad`, `dia_ano`, `tag`, `excluido`) VALUES
(2, '2020-02-15 22:49:53', '2020-02-15 23:43:54', '2020-02-16 00:34:26', '2020-02-16 00:45:24', 3, '2020-02-16 00:45:24', 45, 1, 0),
(5, '2020-02-16 17:45:38', '2020-02-16 17:45:40', '2020-02-16 17:45:42', '2020-02-16 17:45:43', 3, '2020-02-16 17:45:43', 46, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sis_usuario`
--
ALTER TABLE `sis_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lancamento`
--
ALTER TABLE `tb_lancamento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sis_usuario`
--
ALTER TABLE `sis_usuario`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_lancamento`
--
ALTER TABLE `tb_lancamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
