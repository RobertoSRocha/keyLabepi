-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Maio-2018 às 12:54
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keylabepi`
--
CREATE DATABASE IF NOT EXISTS `keylabepi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `keylabepi`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `log`
--

CREATE TABLE `log` (
  `data` datetime NOT NULL,
  `id` bigint(20) NOT NULL,
  `idUser` bigint(20) NOT NULL,
  `acesso` varchar(255) NOT NULL,
  `cartao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `log`
--

INSERT INTO `log` (`data`, `id`, `idUser`, `acesso`, `cartao`) VALUES
('2018-05-06 19:18:34', 3, 2, 'permitido', 'CCDD123456'),
('2018-05-06 19:19:42', 4, 2, 'permitido', 'CCDD123456'),
('2018-05-06 19:26:24', 5, 1, 'permitido', 'AABB123456'),
('2018-05-06 19:47:45', 6, 1, 'permitido', 'AABB123456'),
('2018-05-06 20:20:58', 7, 1, 'permitido', 'AABB123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `nome` varchar(255) NOT NULL,
  `idCartao` varchar(15) NOT NULL,
  `idUser` bigint(15) NOT NULL,
  `matricula` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`nome`, `idCartao`, `idUser`, `matricula`) VALUES
('roberto', 'AABB123456', 1, 2014060283),
('ronaldo', 'CCDD123456', 2, 2014001122),
('Amaro', 'POPO2018', 3, 2017010203);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
