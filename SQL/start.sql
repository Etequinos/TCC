-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/06/2024 às 21:28
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

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
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(11) NOT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `Fidelidade` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`ID`, `CPF`, `Fidelidade`) VALUES
(1, '12345678910', 0),
(2, '240.011.408-02', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `comandas`
--

CREATE TABLE `comandas` (
  `ID` int(11) NOT NULL,
  `ID_Mesa` int(11) DEFAULT NULL,
  `ID_Prato` int(11) DEFAULT NULL,
  `Valor_Total` decimal(10,2) DEFAULT NULL,
  `Fidelidade` int(10) DEFAULT NULL,
  `Status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `mesa`
--

CREATE TABLE `mesa` (
  `ID` int(11) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `mesa`
--

INSERT INTO `mesa` (`ID`, `Status`, `Senha`) VALUES
(1, 0, 'senha'),
(2, 0, 'senha'),
(4, 0, 'senha'),
(5, 0, 'senha'),
(6, 0, 'senha'),
(7, 0, 'senha'),
(8, 0, 'senha'),
(9, 0, 'senha'),
(10, 0, 'senha'),
(11, 0, 'senha'),
(12, 0, 'senha'),
(13, 0, 'senha'),
(14, 0, 'senha'),
(15, 0, 'senha'),
(16, 0, 'senha'),
(17, 0, 'senha');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `ID` int(11) NOT NULL,
  `ID_Mesa` int(11) DEFAULT NULL,
  `ID_Prato` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pratos`
--

CREATE TABLE `pratos` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(100) DEFAULT NULL,
  `Descricao` text DEFAULT NULL,
  `Valor` decimal(10,2) DEFAULT NULL,
  `Imagem` varchar(255) DEFAULT NULL,
  `Ingredientes` text DEFAULT NULL,
  `status` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pratos`
--

INSERT INTO `pratos` (`ID`, `Nome`, `Descricao`, `Valor`, `Imagem`, `Ingredientes`, `status`) VALUES
(1, 'Prato1', 'Desc Prato 1', 30.00, 'https://i.imgur.com/0w72DVa.jpeg', 'Farinha e pão', '0'),
(2, 'Prato2', 'Desc Prato 2', 40.00, 'https://i.imgur.com/HJPoS8Y.jpeg', 'peixe e tomate', '0'),
(3, 'Pagar Conta', 'Mesa solicitando pagamento da conta', 0.00, ' ', ' ', '3'),
(4, 'Feijoada', 'Feijoada Típica do Brasil, serve até uma pessoa.', 25.00, 'https://i.imgur.com/BTBEwS4.jpeg', 'Vem com Arroz, Feijão Preto com Linguiça, Farofa, Mandioca e Couve.', '0'),
(5, 'Bife à Parmegiana', 'É um prato paulistano, que acabou sendo copiado por todo o Brasil.', 35.00, 'https://i.imgur.com/ufMxZHe.jpeg', 'Vem com Arroz, Batata Frita e Bife à Parmegiana.', '0'),
(6, 'Torta de limão', 'Uma deliciosa fatia da torta de limão da casa', 9.90, 'https://i.imgur.com/maxt7LO.jpeg', 'Bolacha maisena, limão, creme', '0'),
(7, 'Mousse de chocolate com morango', 'Um mousse de chocolate ao leite com morango e lascas de chocolate', 15.50, 'https://i.imgur.com/kgm9EHy.png', 'Chocolate ao leite, creme de chocolate branco, morangos', '0'),
(8, 'Refrigerante 600ml', 'Coca cola, sprite, fanta', 9.99, 'https://i.imgur.com/l16QiVk.png', '', '0'),
(9, 'Cerveja', 'Heineken, Skol, Original', 15.00, 'https://i.imgur.com/zwDKRLx.png', '', '0'),
(10, 'Tábua de carnes', 'Tábua de carnes para 2 pessoas', 67.85, 'https://i.imgur.com/ITw8oyr.png', 'Alcatra, Picanha, Cafta, Torresmo, pão de alho', '0'),
(11, 'Vatpá', 'Vatapá de camarão com arroz', 42.99, 'https://i.imgur.com/UpSuY01.png', 'Camarão, arroz', '0'),
(12, 'Feijoada Kids', 'Feijoada em tamanho reduzido para crianças', 15.99, 'https://i.imgur.com/yvB8t8k.png', 'Vem com Arroz, Feijão Preto com Linguiça, Farofa, Mandioca e Couve.', '0');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `comandas`
--
ALTER TABLE `comandas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Mesa` (`ID_Mesa`),
  ADD KEY `ID_Prato` (`ID_Prato`);

--
-- Índices de tabela `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Mesa` (`ID_Mesa`),
  ADD KEY `ID_Prato` (`ID_Prato`);

--
-- Índices de tabela `pratos`
--
ALTER TABLE `pratos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `comandas`
--
ALTER TABLE `comandas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mesa`
--
ALTER TABLE `mesa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pratos`
--
ALTER TABLE `pratos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `comandas`
--
ALTER TABLE `comandas`
  ADD CONSTRAINT `comandas_ibfk_1` FOREIGN KEY (`ID_Mesa`) REFERENCES `mesa` (`ID`),
  ADD CONSTRAINT `comandas_ibfk_2` FOREIGN KEY (`ID_Prato`) REFERENCES `pratos` (`ID`);

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`ID_Mesa`) REFERENCES `mesa` (`ID`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`ID_Prato`) REFERENCES `pratos` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
