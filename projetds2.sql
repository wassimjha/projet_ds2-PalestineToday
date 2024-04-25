-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 25, 2024 at 10:26 PM
-- Server version: 8.2.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetds2`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `article` text NOT NULL,
  `date` timestamp NOT NULL,
  `user` varchar(100) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `fk_article` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `article`, `date`, `user`) VALUES
(53, ' bonjour', '2024-04-24 16:19:39', 'Wassimjha'),
(74, ' @Wassimjha bonjour', '2024-04-25 17:11:02', 'dhia'),
(111, 'Free palestine !', '2024-04-25 19:30:36', 'rania'),
(113, ' Chaque pas compte. Continuons à nous informer et à agir de manière responsable', '2024-04-25 19:46:06', 'Wassimjha'),
(114, ' @Wassimjha Absolument ! Maintenez le boycott !', '2024-04-25 19:52:37', 'youssef'),
(115, ' @Wassimjha Absolument ! Maintenez le boycott !', '2024-04-25 19:54:16', 'youssef');

-- --------------------------------------------------------

--
-- Table structure for table `blogueur`
--

DROP TABLE IF EXISTS `blogueur`;
CREATE TABLE IF NOT EXISTS `blogueur` (
  `user` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `mail` varchar(200) NOT NULL,
  PRIMARY KEY (`user`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blogueur`
--

INSERT INTO `blogueur` (`user`, `password`, `mail`) VALUES
('dhia', 'ok', 'meddhiamzoughi48@gmail.com'),
('rania', 'rr', 'raniazaibet7@gmail.com'),
('Wassimjha', 'ww', 'wassimjha7@gmail.com'),
('youssef', 'ff', 'youssefnajjar@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article` FOREIGN KEY (`user`) REFERENCES `blogueur` (`user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
