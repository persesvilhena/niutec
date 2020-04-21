-- phpMyAdmin SQL Dump
-- version 4.2.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 17-Nov-2015 às 00:40
-- Versão do servidor: 5.5.15
-- PHP Version: 5.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `niutec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `deid` int(255) NOT NULL,
  `cotid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`deid`, `cotid`) VALUES
(1, 1),
(1, 9),
(9, 9),
(9, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
`id` int(255) NOT NULL,
  `deid` int(255) NOT NULL,
  `paraid` int(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `niutec_contato`
--

CREATE TABLE IF NOT EXISTS `niutec_contato` (
`id` int(255) NOT NULL,
  `nome` varchar(255) COLLATE ascii_bin NOT NULL,
  `email` varchar(255) COLLATE ascii_bin NOT NULL,
  `msg` varchar(255) COLLATE ascii_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Extraindo dados da tabela `niutec_contato`
--

INSERT INTO `niutec_contato` (`id`, `nome`, `email`, `msg`) VALUES
(3, 'teste', 'teste', 'teste\r\nteste\r\nteste\r\nteste\r\n\r\nTESTE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id` int(255) NOT NULL,
  `data_nasc` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `telefone2` varchar(255) DEFAULT NULL,
  `descricao1` varchar(255) DEFAULT NULL,
  `descricao2` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `regiao` varchar(255) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `data_nasc`, `telefone`, `telefone2`, `descricao1`, `descricao2`, `cidade`, `estado`, `regiao`, `pais`) VALUES
(1, '1995-07-09', 'fghfghf', '5312312', 'ADMINISTRADOR', 'fghfg', 'fghfgh', 'fghfgh', 'fddfgdf', 'fghfghfg'),
(9, '', '', '', 'sem perfil', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id` int(15) NOT NULL,
  `us` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `usn` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `msg` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=100000001 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `adm` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `login`, `nome`, `sobrenome`, `senha`, `email`, `foto`, `adm`) VALUES
(1, 'perses', 'Perses', 'Vilhena', 'teste', 'perses', 'a81f0f91ffb7465091d719188e03a0f4.png', 1),
(9, 'teste', 'teste', 'teste', '123456', 'teste@hotmail.com', 'a81f0f91ffb7465091d719188e03a0f4.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `niutec_contato`
--
ALTER TABLE `niutec_contato`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `niutec_contato`
--
ALTER TABLE `niutec_contato`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100000001;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
