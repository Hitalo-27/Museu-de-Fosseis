-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2020 às 18:07
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdmuseu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfossil`
--

CREATE TABLE `tbfossil` (
  `idFossil` int(11) NOT NULL,
  `nomeFossil` varchar(30) NOT NULL,
  `periodoFossil` varchar(25) NOT NULL,
  `alturaFossil` varchar(30) NOT NULL,
  `comprimentoFossil` varchar(30) NOT NULL,
  `pesoFossil` varchar(30) NOT NULL,
  `alimentacaoFossil` varchar(20) NOT NULL,
  `localFossil` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbfossil`
--

INSERT INTO `tbfossil` (`idFossil`, `nomeFossil`, `periodoFossil`, `alturaFossil`, `comprimentoFossil`, `pesoFossil`, `alimentacaoFossil`, `localFossil`) VALUES
(32, 'Abelissauro', 'Cretáceo', '3 Metros', '8 Metros', '2 Toneladas', 'Carnívoro', 'Argentina e Brasil'),
(34, 'Adamantisaurus', 'Cretáceo', '4 Metros', '15 Metros', '12 Toneladas', 'Herbívoro', 'Brasil'),
(35, 'Austroposseidon', 'Cretáceo', '6 Metros', '25 Metros', '30 Toneladas', 'Herbívoro', 'Brasil'),
(36, 'Iguanodon', 'Cretáceo', '5 Metros', '9 Metros', '5 Toneladas', 'Herbívoro', 'França, Brasil e Bélgica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbimagem`
--

CREATE TABLE `tbimagem` (
  `codimagem` int(11) NOT NULL,
  `descimagem` varchar(50) NOT NULL,
  `caminhoimagem` varchar(150) NOT NULL,
  `caminhoimagem2` varchar(150) NOT NULL,
  `caminhoimagem3` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbimagem`
--

INSERT INTO `tbimagem` (`codimagem`, `descimagem`, `caminhoimagem`, `caminhoimagem2`, `caminhoimagem3`) VALUES
(9, 'Abelissauro', 'img/abelissaouro 3.jpg', 'img/Abelissauro.jpg', 'img/abelissauro2.jpg'),
(11, 'Adamantisaurus', 'img/Adamantisaurus2.jpg', 'img/Adamantisaurus.png', 'img/adamantisaurus 1.jpg'),
(12, 'Austroposseidon', 'img/Austroposseidon3.jpg', 'img/Austroposseidon2.jpg', 'img/Austroposseidon1.jpg'),
(13, 'Iguanodon', 'img/Iguanodon.jpg', 'img/Iguanodon2.jpg', 'img/Iguanodon1.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbfossil`
--
ALTER TABLE `tbfossil`
  ADD PRIMARY KEY (`idFossil`);

--
-- Índices para tabela `tbimagem`
--
ALTER TABLE `tbimagem`
  ADD PRIMARY KEY (`codimagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbfossil`
--
ALTER TABLE `tbfossil`
  MODIFY `idFossil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `tbimagem`
--
ALTER TABLE `tbimagem`
  MODIFY `codimagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
