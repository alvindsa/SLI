-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 20 Novembre 2013 à 17:28
-- Version du serveur: 5.5.34-0ubuntu0.13.10.1
-- Version de PHP: 5.5.3-1ubuntu2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dsa`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numclient` text NOT NULL,
  `pseudo` text NOT NULL,
  `mdp` text NOT NULL,
  `key` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `siren` text NOT NULL,
  `adresse` text NOT NULL,
  `code postal` int(4) NOT NULL,
  `ville` text NOT NULL,
  `email` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `rang` int(1) NOT NULL DEFAULT '0',
  `offreheb` tinyint(1) NOT NULL DEFAULT '0',
  `offrevps` tinyint(1) NOT NULL DEFAULT '0',
  `offredédié` tinyint(1) NOT NULL DEFAULT '0',
  `paiment` int(11) NOT NULL DEFAULT '0',
  `money` int(11) NOT NULL DEFAULT '0',
  `valid` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE IF NOT EXISTS `salle` (
  `idsalle` int(11) NOT NULL AUTO_INCREMENT,
  `noms` text NOT NULL,
  PRIMARY KEY (`idsalle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`idsalle`, `noms`) VALUES
(1, 'A11'),
(2, 'A12'),
(3, 'A27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
