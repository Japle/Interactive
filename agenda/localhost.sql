-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2013 at 08:42 PM
-- Server version: 5.5.15
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agenda`
--
CREATE DATABASE `agenda` DEFAULT CHARACTER SET utf8 COLLATE utf8_swedish_ci;
USE `agenda`;

-- --------------------------------------------------------

--
-- Table structure for table `contatos`
--

CREATE TABLE IF NOT EXISTS `contatos` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `con_nome` varchar(80) COLLATE utf8_swedish_ci DEFAULT NULL,
  `con_email` char(50) COLLATE utf8_swedish_ci DEFAULT NULL,
  `con_fone` varchar(15) COLLATE utf8_swedish_ci DEFAULT NULL,
  `con_data` date DEFAULT NULL,
  `con_sexo` enum('m','f') COLLATE utf8_swedish_ci DEFAULT NULL,
  `con_tipo` char(3) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contatos`
--

INSERT INTO `contatos` (`con_id`, `con_nome`, `con_email`, `con_fone`, `con_data`, `con_sexo`, `con_tipo`) VALUES
(1, 'huguinho', 'hugo@inho', '1111-1111', '2001-06-27', 'm', 'par'),
(2, 'zezinho', 'ze@zinho', '2222-2222', '2000-07-19', 'm', 'esc'),
(3, 'luizinho', 'luiz@inho', '3333-3333', '1999-08-30', 'm', 'fam'),
(4, 'lala', 'la@la', '4444-4444', '1990-07-12', 'f', 'tra'),
(5, 'lele', 'le@le', '5555-5555', '2010-05-13', 'f', 'esc');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_login` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `usu_senha` varchar(16) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`usu_id`),
  UNIQUE KEY `usu_login` (`usu_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_login`, `usu_senha`) VALUES
(1, 'joao', '123'),
(2, 'maria', '456');
