-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 15 sep. 2020 à 14:54
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE randomizer CHARACTER SET utf8;

--
-- Base de données :  `randomizer`
--

-- --------------------------------------------------------

--
-- Structure de la table `characters`
--

DROP TABLE IF EXISTS `characters`;
CREATE TABLE IF NOT EXISTS `characters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `img_path` varchar(500) NOT NULL,
  `id_universe` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_universe` (`id_universe`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `characters`
--

INSERT INTO `characters` (`id`, `name`, `img_path`, `id_universe`) VALUES
(1, 'Zero Two', 'https://vignette.wikia.nocookie.net/darling-in-the-franxx/images/6/6d/Zero_Two_apparence.jpg/revision/latest/scale-to-width-down/340?cb=20191016181132&path-prefix=fr', 1),
(2, 'Hiro', 'https://www.nautiljon.com/images/perso/00/10/hiro_16101.jpg', 1),
(3, '2B', 'https://vignette.wikia.nocookie.net/nier/images/3/38/YoRHa_No.2_Type_B.png/revision/latest/scale-to-width-down/340?cb=20181111194909&path-prefix=fr', 2),
(4, 'A2', 'https://vignette.wikia.nocookie.net/nier/images/f/fe/YoRHa_No.2A.png/revision/latest?cb=20181112183134&path-prefix=fr', 2),
(5, 'Asura', 'https://vignette.wikia.nocookie.net/asuraswrath/images/5/52/Asura.png/revision/latest?cb=20120610143630', 3),
(6, 'Olga', 'https://static.tvtropes.org/pmwiki/pub/images/s_Wrath_Olga_9679.png', 3),
(7, 'Death', 'https://vignette.wikia.nocookie.net/deathbattlefanon/images/1/1f/Death_Darksiders.png/revision/latest?cb=20150712203737', 4),
(8, 'War', 'https://static.comicvine.com/uploads/original/11131/111315046/6848183-image.png', 4),
(9, 'Cynthia', 'https://www.pokepedia.fr/images/thumb/5/53/Cynthia-DP.png/1200px-Cynthia-DP.png', 5),
(10, 'Aurore', 'https://www.pokepedia.fr/images/thumb/b/b5/Aurore-Pt.png/1200px-Aurore-Pt.png', 5);

-- --------------------------------------------------------

--
-- Structure de la table `universe`
--

DROP TABLE IF EXISTS `universe`;
CREATE TABLE IF NOT EXISTS `universe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `universe`
--

INSERT INTO `universe` (`id`, `name`) VALUES
(1, 'Darling in the Franxx'),
(2, 'NieR : Automata'),
(3, 'Asura\'s Wrath'),
(4, 'Darksiders'),
(5, 'Pokémon');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `characters`
--
ALTER TABLE `characters`
  ADD CONSTRAINT `characters_ibfk_1` FOREIGN KEY (`id_universe`) REFERENCES `universe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
