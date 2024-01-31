-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 31 jan. 2024 à 07:46
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
-- Structure de la table `critéres`
--

DROP TABLE IF EXISTS `critéres`;
CREATE TABLE IF NOT EXISTS `critéres` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Enoncé` text NOT NULL,
  `Id_produit` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `critéres`
--

INSERT INTO `critéres` (`Id`, `Enoncé`, `Id_produit`) VALUES
(1, 'Poids inférieur à 200g', 1),
(2, 'Déformation < 1%', 1);

-- --------------------------------------------------------

--
-- Structure de la table `employés`
--

DROP TABLE IF EXISTS `employés`;
CREATE TABLE IF NOT EXISTS `employés` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_service` int(11) NOT NULL,
  `nom` text NOT NULL,
  `adresse_mail` text NOT NULL,
  `Mdp` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employés`
--

INSERT INTO `employés` (`Id`, `Id_service`, `nom`, `adresse_mail`, `Mdp`) VALUES
(1, 1, 'Troufi', 'troufi@gmail.com', 'AAHJ1/'),
(2, 2, 'Diop', 'diop@gmail.com', 'DDFT3.');

-- --------------------------------------------------------

--
-- Structure de la table `opération conformité-compte_rendu`
--

DROP TABLE IF EXISTS `opération conformité-compte_rendu`;
CREATE TABLE IF NOT EXISTS `opération conformité-compte_rendu` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `Id_opérateur` int(11) NOT NULL,
  `Id_critéres_ok` int(11) NOT NULL,
  `Id_produit` int(11) NOT NULL,
  `Id_critéres_rejetés` int(11) NOT NULL,
  `Id_compte_rendu` int(11) NOT NULL,
  `statut` text NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `opération conformité-compte_rendu`
--

INSERT INTO `opération conformité-compte_rendu` (`Id`, `date`, `Id_opérateur`, `Id_critéres_ok`, `Id_produit`, `Id_critéres_rejetés`, `Id_compte_rendu`, `statut`, `commentaire`) VALUES
(1, '2024-01-30 11:52:00', 1, 1, 1, 1, 1, 'Validé', 'Parfait'),
(2, '2024-01-30 11:54:00', 2, 2, 2, 2, 2, 'Non-validé', 'critére de poids non validé');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`Id`, `Nom`) VALUES
(1, 'Telephone'),
(2, 'Tablettes');

-- --------------------------------------------------------

--
-- Structure de la table `produit_critére`
--

DROP TABLE IF EXISTS `produit_critére`;
CREATE TABLE IF NOT EXISTS `produit_critére` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_produit` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit_critére`
--

INSERT INTO `produit_critére` (`Id`, `Id_produit`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_service` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`Id`, `nom_service`) VALUES
(1, 'Production'),
(2, 'Management');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
