-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 12-Mar-2019 às 17:32
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.3.1

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
-- Estrutura da tabela `ponto_eletronico`
--

DROP TABLE IF EXISTS `ponto_eletronico`;
CREATE TABLE IF NOT EXISTS `ponto_eletronico` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) DEFAULT NULL,
  `data_registro` date DEFAULT NULL,
  `tipo_registro` varchar(40) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_idusers` (`id_users`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ponto_eletronico`
--

INSERT INTO `ponto_eletronico` (`ID`, `id_users`, `data_registro`, `tipo_registro`, `hora`) VALUES
(1, 1, '2019-03-12', 'Entrada Empresa', '14:22:13'),
(2, 1, '2019-03-12', 'Saida Almoco', '14:22:14'),
(3, 1, '2019-03-12', 'Retorno Almoco', '14:22:14'),
(4, 1, '2019-03-12', 'Saida Empresa', '14:22:15'),
(5, 1, '2019-03-12', 'Entrada Empresa', '14:28:32'),
(6, 1, '2019-03-12', 'Saida Almoco', '14:28:33'),
(7, 1, '2019-03-12', 'Retorno Almoco', '14:28:33'),
(8, 1, '2019-03-12', 'Saida Empresa', '14:28:34'),
(9, 1, '2019-03-12', 'Saida Almoco', '14:28:40'),
(10, 1, '2019-03-12', 'Retorno Almoco', '14:28:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` text NOT NULL,
  `Email` text NOT NULL,
  `Senha` varchar(32) NOT NULL,
  `usuario` varchar(200) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`ID`, `Nome`, `Email`, `Senha`, `usuario`, `data_cadastro`) VALUES
(1, 'Glaycon', 'glaycongx@gmail.com', '202cb962ac59075b964b07152d234b70', 'glaycon', '2019-03-12 14:17:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
