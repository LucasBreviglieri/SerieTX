-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10-Out-2023 às 00:27
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_senha`
--

DROP TABLE IF EXISTS `login_senha`;
CREATE TABLE IF NOT EXISTS `login_senha` (
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login_senha`
--

INSERT INTO `login_senha` (`email`, `senha`) VALUES
('ac12345', '123'),
('ac67890', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `serie`
--

DROP TABLE IF EXISTS `serie`;
CREATE TABLE IF NOT EXISTS `serie` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `caixa` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `box` int(9) NOT NULL,
  `qnt` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `serie`
--

INSERT INTO `serie` (`id`, `tipo`, `caixa`, `box`, `qnt`) VALUES
(1, 'YESAHHGF', '40', 0, 25),
(2, 'YXGEHEWF', '33', 0, 100),
(3, 'YECHVKSDJC', '12', 0, 20),
(4, 'YXGEVXXX', '48', 0, 80),
(5, 'PH12', '22', 0, 30),
(24, 'DASDASd', '44', 11, 32),
(8, 'PM01', '50', 0, 50),
(25, 'fernando lindp', '1', 10, 1),
(26, 'YESRCDSC', '90', 8, 900);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `login_senha`
--
ALTER TABLE `login_senha` ADD FULLTEXT KEY `login` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
