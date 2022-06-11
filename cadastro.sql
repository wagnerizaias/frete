-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2022 às 02:27
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastr`
--

CREATE TABLE `cadastr` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastr`
--

INSERT INTO `cadastr` (`id`, `nome`, `senha`, `nivel`) VALUES
(1, 'um', '111', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`nome`, `sobrenome`, `email`, `senha`) VALUES
('wa', 'dd', 'maria@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('um', 'dois', 'wa@gmail.com', '111'),
('', '', '', '111'),
('ana', 'bia', 'ana1@gmail.com', '698d51a19d8a121ce581499d7b701668'),
('ana', 'bia', 'ana1@gmail.com', '698d51a19d8a121ce581499d7b701668'),
('wa', 'dd', 'ana2@gmail.com', '698d51a19d8a121ce581499d7b701668'),
('wa', 'dd', 'ana2@gmail.com', '698d51a19d8a121ce581499d7b701668'),
('', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('maria', 'ana', 'mariaana@gmail.com', '698d51a19d8a121ce581499d7b701668');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_geral`
--

CREATE TABLE `cadastro_geral` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `desejo` varchar(3) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `confirma` varchar(50) NOT NULL,
  `mensagem` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro_geral`
--

INSERT INTO `cadastro_geral` (`id`, `email`, `nome`, `telefone`, `desejo`, `senha`, `confirma`, `mensagem`) VALUES
(1, 'ana@gmail.com', 'ana', '1212', 'sim', '111', '111', 'bom dia'),
(2, 'wa4@gmail.com', 'desejo', '1111', 'sim', '202cb962ac59075', '202cb962ac59075b964b07152d234b70', '4435454'),
(3, 'wa@gmail.com', 'mensagem', '44444', 'sim', '202cb962ac59075', '202cb962ac59075b964b07152d234b70', 'ikjjjjjh'),
(4, 'wag@gmail.com', 'qqq', '113213', 'sim', '202cb962ac59075', '202cb962ac59075b964b07152d234b70', 'um'),
(5, 'wagn@gmail.com', 'wad', '1245454', 'sim', '1234', '1234', 'hj'),
(6, 'wagne@gmail.com', 'confirma_email', '124554', 'sim', '1234', '1234', 'vc'),
(7, 'wagner@gmail.com', 'wagner', '12333', 'sim', '81dc9bdb52d04dc', '81dc9bdb52d04dc20036dbd8313ed055', 'wagner'),
(8, 'wai@gmail.com', 'joao', '1111', 'sim', '202cb962ac59075', '202cb962ac59075b964b07152d234b70', 'joao'),
(9, 'waq@gmail.com', 'telefone', '44444', 'sim', '250cf8b51c773f3', '250cf8b51c773f3f8dc8b4be867a9a02', 'Ã§lÃ§lÃ§lÃ§l'),
(10, 'waw@gmmm.com', 'desejo', '111111', 'sim', 'b59c67bf196a475', '698d51a19d8a121ce581499d7b701668', 'ver'),
(11, 'vanessa@gmail.com', 'vanessa luiza dias', '19666666666', 'sim', '111', '111', 'boa tarde'),
(12, '', 'campinas', ' 111\r\n        ', '', '', '', ''),
(13, 'vaness1@gmail.com', 'vanessa dia ', '19654899', 'sim', '111', '111', '333');

-- --------------------------------------------------------

--
-- Estrutura da tabela `frete`
--

CREATE TABLE `frete` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `loca` varchar(50) NOT NULL,
  `distino` text NOT NULL,
  `telefone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `frete`
--

INSERT INTO `frete` (`id`, `nome`, `loca`, `distino`, `telefone`) VALUES
(37, 'ana', 'campinas', ' \r\n        sao paulo  fiorino', 19999999),
(38, 'maria', 'sumare', ' \r\n        sao paulo strada', 199888888),
(39, 'ana', 'campinas', ' valinho fiorino\r\n        ', 19999999);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastr`
--
ALTER TABLE `cadastr`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadastro_geral`
--
ALTER TABLE `cadastro_geral`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`nome`,`telefone`,`desejo`),
  ADD KEY `email_2` (`email`);

--
-- Índices para tabela `frete`
--
ALTER TABLE `frete`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastr`
--
ALTER TABLE `cadastr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cadastro_geral`
--
ALTER TABLE `cadastro_geral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `frete`
--
ALTER TABLE `frete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
