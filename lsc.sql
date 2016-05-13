-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Maio-2016 às 17:12
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lsc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bolsistas`
--

CREATE TABLE IF NOT EXISTS `bolsistas` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `bolsistas`
--

INSERT INTO `bolsistas` (`id`, `nome`) VALUES
(1, 'Bernd H. Storb, M.Sc.'),
(2, 'Marta Costa Rosatelli, Dr. Eng.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bolsistas_iti`
--

CREATE TABLE IF NOT EXISTS `bolsistas_iti` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `bolsistas_iti`
--

INSERT INTO `bolsistas_iti` (`id`, `nome`) VALUES
(1, 'Igor Heidrich'),
(3, 'Glauber Volkmer'),
(4, 'F&aacute;bio Petr&uacute;cio\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doutorandos`
--

CREATE TABLE IF NOT EXISTS `doutorandos` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `doutorandos`
--

INSERT INTO `doutorandos` (`id`, `nome`) VALUES
(1, 'Nildo Carlos da Silva, M.Sc.'),
(4, 'Simone Nunes Ferreira, M. Sc.'),
(5, 'Maria Jos&eacute; Domingues, M. Sc.'),
(6, 'Patr&iacute;cia Cristiane de Souza, M. Sc.'),
(7, 'S&eacute;rgio de Medeiros Rivero, M. Eng.'),
(8, 'Cl&aacute;udio Magalh&atilde;es de Oliveira. M. Eng.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamentos`
--

CREATE TABLE IF NOT EXISTS `equipamentos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `quantidade` int(10) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `equipamentos`
--

INSERT INTO `equipamentos` (`id`, `quantidade`, `nome`) VALUES
(1, 2, 'Esta&#231;&otilde;es Power-PC 233'),
(2, 1, 'microcomputador PC-Pentium II - 400'),
(3, 1, 'microcomputador PC-Pentium II - 350'),
(4, 6, 'microcomputadores PC-Pentium II - 300'),
(5, 13, 'microcomputadores PC-Celeron - 300'),
(6, 1, 'laptop PC-Pentium MMX-200'),
(7, 2, 'impressoras jato de tinta'),
(8, 2, 'scanners de mesa'),
(9, 2, 'c&acirc;meras de video-confer&ecirc;ncia'),
(10, 1, 'luva de realidade virtual'),
(11, 1, '&oacute;culos 3D'),
(12, 1, 'Drives para CD-ROM, DVD e ZIP-Drive'),
(13, 1, 'Equipamentos conectados a 100Mbits'),
(26, 1, 'Equipamentos conectados a 100Mbits');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mestrandos`
--

CREATE TABLE IF NOT EXISTS `mestrandos` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `mestrandos`
--

INSERT INTO `mestrandos` (`id`, `nome`) VALUES
(1, 'Cristina Elisabeth Ricken'),
(2, 'Alvaro de Azevedo Diaz'),
(3, 'Richard G. Vieira'),
(4, 'J&uacute;lio Otuyama'),
(5, 'Sandro da Silva dos Santos'),
(6, 'Monica Carape&#231;os Arriada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `nome`, `url`) VALUES
(1, 'Raul Sidnei Wazlawick, Dr. Eng.', 'http://www.inf.ufsc.br/~raul/'),
(3, 'Antonio Carlos Mariani, M.Sc.', 'http://www.inf.ufsc.br/~mariani/'),
(4, 'Edla Maria Faust Ramos, Dr. Eng.', 'http://www.inf.ufsc.br/~edla/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
