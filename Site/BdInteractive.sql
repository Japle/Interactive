-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `interactive`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

CREATE TABLE IF NOT EXISTS `loja` (
  `IdLoja` int(11) NOT NULL,
  `NomeLoja` varchar(30) COLLATE utf8_swedish_ci DEFAULT NULL,
  `CNPJ` decimal(10,0) NOT NULL,
  `Endereco` varchar(35) COLLATE utf8_swedish_ci DEFAULT NULL,
  `Gerente` varchar(35) COLLATE utf8_swedish_ci DEFAULT NULL,
  `Insc_Estadual` decimal(10,0) NOT NULL,
  PRIMARY KEY (`IdLoja`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `IdPedido` int(11) NOT NULL,
  `IdLoja` int(11) NOT NULL,
  `CNPJ` decimal(10,0) NOT NULL,
  `NomeLoja` varchar(30) COLLATE utf8_swedish_ci DEFAULT NULL,
  `IdItem` decimal(10,0) NOT NULL,
  `Quant_Itens` decimal(10,0) NOT NULL,
  `Valor` decimal(10,0) NOT NULL,
  `Forma_Pag` varchar(25) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`IdPedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`IdPedido`, `IdLoja`, `CNPJ`, `NomeLoja`, `IdItem`, `Quant_Itens`, `Valor`, `Forma_Pag`) VALUES
(1010, 1535, '9999999999', 'Interactive', '12', '5', '50', 'cartão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `IdProduto` int(11) NOT NULL,
  `IdFornecedor` int(11) NOT NULL,
  `IdTipo` int(11) NOT NULL,
  `Descricao` varchar(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `Tipo` varchar(20) COLLATE utf8_swedish_ci DEFAULT NULL,
  `Cor` varchar(10) COLLATE utf8_swedish_ci DEFAULT NULL,
  `Quantidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdProduto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Nome` varchar(35) COLLATE utf8_swedish_ci DEFAULT NULL,
  `DataNasc` varchar(10) COLLATE utf8_swedish_ci DEFAULT NULL,
  `email` varchar(35) COLLATE utf8_swedish_ci DEFAULT NULL,
  `Login` varchar(10) COLLATE utf8_swedish_ci DEFAULT NULL,
  `Senha` varchar(15) COLLATE utf8_swedish_ci DEFAULT NULL,
  `Telefone` varchar(20) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nome`, `DataNasc`, `email`, `Login`, `Senha`, `Telefone`) VALUES
(1, 'Root Interactive', '15/12/2010', 'contato@interactive.com', 'root', '123456', '11 5555-6161');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
