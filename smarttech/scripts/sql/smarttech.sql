-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 07 fév. 2024 à 11:06
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `smarttech`
--

-- --------------------------------------------------------

--
-- Structure de la table `critere`
--

DROP TABLE IF EXISTS `critere`;
CREATE TABLE IF NOT EXISTS `critere` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `enonce` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `critere`
--

INSERT INTO `critere` (`Id`, `enonce`) VALUES
(1, 'Poids inférieur à 200g'),
(2, 'Déformation < 1%');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_service` int(11) NOT NULL,
  `nom` text NOT NULL,
  `adresse_mail` text NOT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `id_service`, `nom`, `adresse_mail`, `mdp`) VALUES
(1, 1, 'Troufi', 'troufi@gmail.com', 'AAHJ1/'),
(2, 2, 'Diop', 'diop@gmail.com', 'DDFT3.');

-- --------------------------------------------------------

--
-- Structure de la table `operation`
--

DROP TABLE IF EXISTS `operation`;
CREATE TABLE IF NOT EXISTS `operation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `id_operateur` int(11) NOT NULL,
  `id_critere_ok` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_critere_rejete` int(11) NOT NULL,
  `id_compte_rendu` int(11) NOT NULL,
  `statut` text NOT NULL,
  `commentaire` text NOT NULL,
  `id_manager` int(11) NOT NULL,
  `validation_manageur` tinyint(1) NOT NULL,
  `validation_operateur` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `operation`
--

INSERT INTO `operation` (`id`, `date`, `id_operateur`, `id_critere_ok`, `id_produit`, `id_critere_rejete`, `id_compte_rendu`, `statut`, `commentaire`, `id_manager`, `validation_manageur`, `validation_operateur`) VALUES
(1, '2024-01-30 11:52:00', 1, 1, 1, 1, 1, 'Validé', 'Parfait', 0, 0, 0),
(2, '2024-01-30 11:54:00', 2, 2, 2, 2, 2, 'Non-validé', 'critére de poids non validé', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `etat` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=571 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `type`, `etat`) VALUES
(140, 'telephone', 1),
(145, 'telephone', 0),
(146, 'telephone', 0),
(142, 'telephone', 1),
(560, 'tablette', 1),
(566, 'tablette', 1),
(570, 'tablette', 0);

-- --------------------------------------------------------

--
-- Structure de la table `produit_critere`
--

DROP TABLE IF EXISTS `produit_critere`;
CREATE TABLE IF NOT EXISTS `produit_critere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produit` int(11) NOT NULL,
  `id_critere` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit_critere`
--

INSERT INTO `produit_critere` (`id`, `id_produit`, `id_critere`) VALUES
(1, 1, NULL),
(2, 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `nom`) VALUES
(1, 'Production'),
(2, 'Management');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
