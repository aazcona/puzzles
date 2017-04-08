-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: mysql1.alwaysdata.com
-- Generation Time: Apr 08, 2017 at 12:15 PM
-- Server version: 5.1.66-0+squeeze1
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `worldpuzzles_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`name`) VALUES
('Ceuta'),
('Granada'),
('Málaga'),
('Melilla'),
('Segovia'),
('Sevilla');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
  `number` int(11) NOT NULL DEFAULT '0',
  `city` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`number`, `city`, `name`) VALUES
(1, 'Ceuta', 'La Casa de los Dragones'),
(2, 'Ceuta', 'Parque Marítimo del Mediterráneo'),
(3, 'Ceuta', 'Las Murallas Reales'),
(4, 'Melilla', 'Faro de Melilla'),
(5, 'Melilla', 'Arquitectura de Melilla'),
(6, 'Melilla', 'Iglesia de la Purísima Concepción'),
(7, 'Málaga', 'Jardín Botánico de la Concepción'),
(8, 'Málaga', 'Playa Pedregalejo'),
(9, 'Málaga', 'Teatro Romano'),
(10, 'Segovia', 'Acueducto Romano'),
(11, 'Segovia', 'Álcazar de Segovia'),
(12, 'Segovia', 'Plaza de la Artillería'),
(13, 'Granada', 'Iglesia de Santo Domingo'),
(14, 'Granada', 'Parque de Federico García Lorca'),
(15, 'Granada', 'Plaza Bib-Rambla'),
(16, 'Sevilla', 'Portal del Palacio de San Telmo'),
(17, 'Sevilla', 'Alcázar de Sevilla'),
(18, 'Sevilla', 'Plaza de España');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `confirmcode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `userlevel`
--

CREATE TABLE IF NOT EXISTS `userlevel` (
  `user` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
