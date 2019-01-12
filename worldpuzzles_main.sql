-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: mysql-worldpuzzles.alwaysdata.net
-- Generation Time: Mar 03, 2018 at 02:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldpuzzles_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`name`) VALUES
('Ceuta'),
('Granada'),
('Madrid'),
('Málaga'),
('Melilla'),
('Segovia'),
('Sevilla');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `number` int(11) NOT NULL DEFAULT '0',
  `city` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`number`, `city`, `name`) VALUES
(1, 'Ceuta', 'Casa de los Dragones'),
(2, 'Ceuta', 'Parque Marítimo del Mediterráneo'),
(3, 'Ceuta', 'Murallas Reales'),
(4, 'Melilla', 'Faro de Melilla'),
(5, 'Melilla', 'Parque Hernández'),
(6, 'Melilla', 'Iglesia de la Purísima Concepción'),
(7, 'Málaga', 'Jardín Botánico de la Concepción'),
(8, 'Málaga', 'Centro Histórico'),
(9, 'Málaga', 'Teatro Romano'),
(10, 'Segovia', 'Acueducto Romano'),
(11, 'Segovia', 'Álcazar de Segovia'),
(12, 'Segovia', 'Plaza de la Artillería'),
(13, 'Granada', 'Iglesia de Santo Domingo'),
(14, 'Granada', 'Parque de Federico García Lorca'),
(15, 'Granada', 'Plaza Bib-Rambla'),
(16, 'Sevilla', 'Portal del Palacio de San Telmo'),
(17, 'Sevilla', 'Alcázar de Sevilla'),
(18, 'Sevilla', 'Plaza de España'),
(19, 'Madrid', 'Plaza Mayor'),
(20, 'Madrid', 'Puerta de Alcalá'),
(21, 'Madrid', 'Torres KIO');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `confirmcode` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `phone_number`, `username`, `salt`, `password`, `confirmcode`) VALUES
(2, 'Patxi Santos', 'patxisantosrivas@gmail.com', '', 'Patxi2004', 'bc6184c31d', 'tBCgboZ1ms32CU7Scfcv78f+EqxiYzYxODRjMzFk', 'y'),
(3, 'Alba Azcona', 'alba.azconarivas@gmail.com', '', 'axaceuta', '79680006b9', 'VnqD63yxXAgvVRZsZ8411hI9z5Q3OTY4MDAwNmI5', 'y'),
(5, 'Francisco Javier', 'patxisantosrivas2@gmail.com', '', 'Primitech Studio', 'd58e28f948', 'ChrXnhrbSZW2vg9sObmf5ZoMrKVkNThlMjhmOTQ4', 'y'),
(6, 'Raul Santos Vildarraz', 'rasavi20@hotmail.com', '', 'Rasavi', '7cf6825155', 'GtEYceuGcMvnyFRau5OtHjZOx4Y3Y2Y2ODI1MTU1', 'y'),
(7, 'Alba', 'aazcona@financialforce.com', '', 'aazcona', '2e1943df7f', '8spQ8KbitSB/+oOYqSB1nXWE6kUyZTE5NDNkZjdm', 'y'),
(8, 'Pablo', 'pblmendezp@gmail.com', '', 'pablosky', 'a86510d8f9', '7G5l/x+xgZyGmwE1OXsZBevLCwJhODY1MTBkOGY5', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `userlevel`
--

CREATE TABLE `userlevel` (
  `user` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlevel`
--

INSERT INTO `userlevel` (`user`, `level`, `points`) VALUES
(2, 0, 6066),
(2, 1, 1114),
(2, 2, 1241),
(2, 3, 1374),
(2, 4, 1471),
(2, 5, 858),
(2, 6, 891),
(2, 7, 2248),
(2, 8, 2928),
(2, 9, 2015),
(2, 10, 2770),
(2, 11, 3254),
(2, 12, 1419),
(2, 16, 3204),
(2, 17, 2432),
(2, 18, 6143),
(2, 19, 7836),
(3, 1, 876),
(3, 2, 598),
(3, 3, 583),
(3, 19, 6608);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `userlevel`
--
ALTER TABLE `userlevel`
  ADD UNIQUE KEY `user_2` (`user`,`level`),
  ADD KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
