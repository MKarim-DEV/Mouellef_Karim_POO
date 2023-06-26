-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 juin 2023 à 00:18
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `motos`
--

-- --------------------------------------------------------

--
-- Structure de la table `moto`
--

DROP TABLE IF EXISTS `moto`;
CREATE TABLE IF NOT EXISTS `moto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand` varchar(250) NOT NULL,
  `model` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `picture` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `moto`
--

INSERT INTO `moto` (`id`, `brand`, `model`, `type`, `picture`) VALUES
(1, 'Honda', 'CBR', 'Sport', 'cbr.png'),
(12, 'KTM', '300', 'Enduro', '6498d01eaecabpng'),
(13, 'Harley Davidson', 'Street Bob', 'Custom', '6498d1f0d9955png'),
(14, 'Kawazaki', 'Z900', 'Roadster', '6498d3549aea7png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(3, 'admin', 'admin@gmail.com', '$2y$10$Si7gifyod4u8RCTOyQUsz.x6Wv7CjpBv.CyM2xxPeFnbqUaUQKZ2S');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
