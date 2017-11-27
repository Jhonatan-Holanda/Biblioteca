-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2017 às 12:03
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id_Funcionario` int(11) NOT NULL,
  `nome_Funcionario` varchar(100) NOT NULL,
  `telefone_Funcionario` varchar(15) NOT NULL,
  `email_Funcionario` varchar(150) NOT NULL,
  `senha_Funcionario` varchar(32) NOT NULL,
  `imagem_Funcionario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `codigo_Livro` int(11) NOT NULL,
  `nome_Livro` varchar(150) NOT NULL,
  `genero_Livro` varchar(100) NOT NULL,
  `autor_Livro` varchar(159) NOT NULL,
  `pratileira_Livro` varchar(50) NOT NULL,
  `fila_Livro` varchar(50) NOT NULL,
  `imagem_Livro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `livrosalugados`
--

CREATE TABLE `livrosalugados` (
  `id` int(11) NOT NULL,
  `mes` int(2) NOT NULL,
  `livalugados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livrosalugados`
--

INSERT INTO `livrosalugados` (`id`, `mes`, `livalugados`) VALUES
(1, 1, 123),
(2, 2, 132),
(3, 3, 142),
(4, 4, 145),
(5, 5, 182),
(6, 6, 198),
(7, 7, 218),
(8, 8, 184),
(9, 9, 211),
(10, 10, 132),
(11, 11, 172),
(12, 12, 177);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `id_Reserva` int(11) NOT NULL,
  `nome_Livro` varchar(150) NOT NULL,
  `nome_Pessoa` varchar(100) NOT NULL,
  `endereco_Pessoa` varchar(200) NOT NULL,
  `email_Pessoa` varchar(150) NOT NULL,
  `data_Recebimento` date NOT NULL,
  `data_Entrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reserva`
--

INSERT INTO `reserva` (`id_Reserva`, `nome_Livro`, `nome_Pessoa`, `endereco_Pessoa`, `email_Pessoa`, `data_Recebimento`, `data_Entrega`) VALUES
(1, 'A bela Adormecida', 'luis Gustavo', 'Rua: Neo queroz', 'gugu@gmail.com', '2017-11-17', '2017-11-27'),
(2, '', '', '', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `turma` varchar(100) NOT NULL,
  `qnt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id`, `turma`, `qnt`) VALUES
(1, 'INFO', 150),
(2, 'ADM', 99),
(3, 'COM', 44),
(4, 'AGRO', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id_Funcionario`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`codigo_Livro`);

--
-- Indexes for table `livrosalugados`
--
ALTER TABLE `livrosalugados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_Reserva`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id_Funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `codigo_Livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT for table `livrosalugados`
--
ALTER TABLE `livrosalugados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_Reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
