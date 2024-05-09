-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Maio-2024 às 02:35
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(11) NOT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `Fidelidade` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`ID`, `CPF`, `Fidelidade`) VALUES
(1, '12345678910', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comandas`
--

CREATE TABLE `comandas` (
  `ID` int(11) NOT NULL,
  `ID_Mesa` int(11) DEFAULT NULL,
  `ID_Prato` int(11) DEFAULT NULL,
  `Valor_Total` decimal(10,2) DEFAULT NULL,
  `Fidelidade` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesa`
--

CREATE TABLE `mesa` (
  `ID` int(11) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `mesa`
--

INSERT INTO `mesa` (`ID`, `Status`, `Senha`) VALUES
(1, 0, 'senha'),
(2, 0, 'senha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `ID` int(11) NOT NULL,
  `ID_Mesa` int(11) DEFAULT NULL,
  `ID_Prato` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pratos`
--

CREATE TABLE `pratos` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Descricao` text DEFAULT NULL,
  `Valor` decimal(10,2) DEFAULT NULL,
  `Fidelidade` decimal(10,2) DEFAULT NULL,
  `Imagem` varchar(255) DEFAULT NULL,
  `Ingredientes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pratos`
--

INSERT INTO `pratos` (`ID`, `Nome`, `Descricao`, `Valor`, `Fidelidade`, `Imagem`, `Ingredientes`) VALUES
(1, 'Prato1', 'Desc Prato 1', '30.00', '20.00', 'https://i.imgur.com/0w72DVa.jpeg', 'Farinha e pão'),
(2, 'Prato2', 'Desc Prato 2', '40.00', '32.00', 'https://i.imgur.com/HJPoS8Y.jpeg', 'peixe e tomate');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `comandas`
--
ALTER TABLE `comandas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Mesa` (`ID_Mesa`),
  ADD KEY `ID_Prato` (`ID_Prato`);

--
-- Índices para tabela `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Mesa` (`ID_Mesa`),
  ADD KEY `ID_Prato` (`ID_Prato`);

--
-- Índices para tabela `pratos`
--
ALTER TABLE `pratos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `mesa`
--
ALTER TABLE `mesa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pratos`
--
ALTER TABLE `pratos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comandas`
--
ALTER TABLE `comandas`
  ADD CONSTRAINT `comandas_ibfk_1` FOREIGN KEY (`ID_Mesa`) REFERENCES `mesa` (`ID`),
  ADD CONSTRAINT `comandas_ibfk_2` FOREIGN KEY (`ID_Prato`) REFERENCES `pratos` (`ID`);

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`ID_Mesa`) REFERENCES `mesa` (`ID`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`ID_Prato`) REFERENCES `pratos` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
