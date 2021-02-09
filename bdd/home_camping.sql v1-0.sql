-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 09 fév. 2021 à 14:05
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `home_camping`
--

-- --------------------------------------------------------

--
-- Structure de la table `have`
--

DROP TABLE IF EXISTS `have`;
CREATE TABLE IF NOT EXISTS `have` (
  `items_picture_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  PRIMARY KEY (`items_picture_id`,`items_id`),
  KEY `have_NC_items0_FK` (`items_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `have`
--

INSERT INTO `have` (`items_picture_id`, `items_id`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `nc_article`
--

DROP TABLE IF EXISTS `nc_article`;
CREATE TABLE IF NOT EXISTS `nc_article` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_title` varchar(50) NOT NULL,
  `article_content` varchar(150) NOT NULL,
  `article_img` blob NOT NULL,
  `article_publication_date` datetime NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `nc_article`
--

INSERT INTO `nc_article` (`article_id`, `article_title`, `article_content`, `article_img`, `article_publication_date`) VALUES
(1, 'la rapido', 'Bonjour ici vous trouverez la nouvelle rapido', 0x696d672e6a706567, '2021-02-05 00:00:00'),
(2, 'Nouveau camping car chausson', 'Bonjour ici vous trouverez le nouveau camping-car chausson de 2021', 0x696d67312e6a706567, '2021-02-03 00:00:00'),
(3, 'Nouveaulouer votre van avec van loc normandie', 'Si vous voulez loué un van original je vous conseil la société van loc a lillebonne', 0x76616e2e6a706567, '2021-02-02 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `nc_category`
--

DROP TABLE IF EXISTS `nc_category`;
CREATE TABLE IF NOT EXISTS `nc_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `nc_category`
--

INSERT INTO `nc_category` (`category_id`, `category_Name`) VALUES
(1, 'caravane'),
(2, 'camping-car'),
(3, 'van'),
(4, 'accessoires');

-- --------------------------------------------------------

--
-- Structure de la table `nc_items`
--

DROP TABLE IF EXISTS `nc_items`;
CREATE TABLE IF NOT EXISTS `nc_items` (
  `items_id` int(11) NOT NULL AUTO_INCREMENT,
  `items_title` varchar(50) NOT NULL,
  `items_description` text NOT NULL,
  `items_price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`items_id`),
  KEY `NC_items_NC_user_FK` (`user_id`),
  KEY `NC_items_NC_category0_FK` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `nc_items`
--

INSERT INTO `nc_items` (`items_id`, `items_title`, `items_description`, `items_price`, `user_id`, `category_id`) VALUES
(1, 'caravane', 'Jolie caravane de 1986 en bonne états', 1000, 1, 1),
(2, 'van', 'Jolie van ', 2000, 3, 3),
(3, 'Camping-car', 'camping car de 1998 en parfais état ', 170000, 3, 2),
(4, 'tente', 'tente pour deux personnes bon état', 25, 4, 4),
(5, 'lampe', 'lampe à gaz', 8, 3, 4),
(6, 'caravane', 'caravane deux-trois personnes', 600, 1, 1),
(7, 'duvet', 'duvet deux personnes bon état', 20, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `nc_picture`
--

DROP TABLE IF EXISTS `nc_picture`;
CREATE TABLE IF NOT EXISTS `nc_picture` (
  `items_picture_id` int(11) NOT NULL AUTO_INCREMENT,
  `items_picture_name` varchar(50) NOT NULL,
  PRIMARY KEY (`items_picture_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `nc_picture`
--

INSERT INTO `nc_picture` (`items_picture_id`, `items_picture_name`) VALUES
(1, 'img.jpeg'),
(2, 'toctoc.jpeg'),
(3, 'vrom.jpeg'),
(4, 'imagecaravane.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `nc_user`
--

DROP TABLE IF EXISTS `nc_user`;
CREATE TABLE IF NOT EXISTS `nc_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_password` varchar(150) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `nc_user`
--

INSERT INTO `nc_user` (`user_id`, `user_name`, `user_mail`, `user_password`, `user_role`) VALUES
(1, 'nico', 'ncuisnier@gmail.com', 'toto', 'admin'),
(2, 'jean', 'jeanmoi@gmail.com', 'tata', ''),
(3, 'yan', 'yanmoix@gmail.com', 'fgrty', ''),
(4, 'sylvie', 'silvietop@gmail.com', 'fffe', ''),
(5, 'loic', 'loic@gmail.com', 'hdshfi', '');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `have`
--
ALTER TABLE `have`
  ADD CONSTRAINT `have_NC_items0_FK` FOREIGN KEY (`items_id`) REFERENCES `nc_items` (`items_id`),
  ADD CONSTRAINT `have_NC_picture_FK` FOREIGN KEY (`items_picture_id`) REFERENCES `nc_picture` (`items_picture_id`);

--
-- Contraintes pour la table `nc_items`
--
ALTER TABLE `nc_items`
  ADD CONSTRAINT `NC_items_NC_category0_FK` FOREIGN KEY (`category_id`) REFERENCES `nc_category` (`category_id`),
  ADD CONSTRAINT `NC_items_NC_user_FK` FOREIGN KEY (`user_id`) REFERENCES `nc_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
