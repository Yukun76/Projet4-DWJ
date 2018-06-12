-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 12 juin 2018 à 12:55
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `auteur` text COLLATE utf8_swedish_ci NOT NULL,
  `titre` text COLLATE utf8_swedish_ci NOT NULL,
  `jour` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `mois` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `annee` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `contenu` text COLLATE utf8_swedish_ci NOT NULL,
  `chapo` text COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `articles` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `contenu` text COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `configuration`
--

DROP TABLE IF EXISTS `configuration`;
CREATE TABLE IF NOT EXISTS `configuration` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` text COLLATE utf8_swedish_ci NOT NULL,
  `gerant` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `disqus` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `adressedusite` text COLLATE utf8_swedish_ci NOT NULL,
  `login` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `lienadmin` text COLLATE utf8_swedish_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Déchargement des données de la table `configuration`
--

INSERT INTO `configuration` (`ID`, `titre`, `gerant`, `disqus`, `adressedusite`, `login`, `lienadmin`, `code`) VALUES
(1, 'Jean Forteroche', 'Yu Kun', 'ghhf', 'hgf', 'yukun', 'on', 'd6030c3a6caacc7a70df6ac6bd95a4ecf933fa2d');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `destinataire` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `contenu` text COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

DROP TABLE IF EXISTS `liens`;
CREATE TABLE IF NOT EXISTS `liens` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `auteur` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `chapo` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `lien` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `jour` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `mois` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `annee` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `lien` text CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_billet`
--

DROP TABLE IF EXISTS `t_billet`;
CREATE TABLE IF NOT EXISTS `t_billet` (
  `BIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BIL_DATE` datetime NOT NULL,
  `BIL_TITRE` varchar(100) NOT NULL,
  `BIL_CONTENU` varchar(400) NOT NULL,
  PRIMARY KEY (`BIL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_billet`
--

INSERT INTO `t_billet` (`BIL_ID`, `BIL_DATE`, `BIL_TITRE`, `BIL_CONTENU`) VALUES
(1, '2018-05-22 15:21:44', 'Chapitre 1', 'Sunt rebus quem faceremus illa causa de ut de multa patiuntur rebus res nostra faceremus ab nostra amicorum enim honeste animatus enim prorsus patiuntur prorsus honestissime boni in satis vera.'),
(2, '2018-05-22 15:21:44', 'Chapitre 2', 'Sunt rebus quem faceremus illa causa de ut de multa patiuntur rebus res nostra faceremus ab nostra amicorum enim honeste animatus enim prorsus patiuntur prorsus honestissime boni in satis vera.');

-- --------------------------------------------------------

--
-- Structure de la table `t_commentaire`
--

DROP TABLE IF EXISTS `t_commentaire`;
CREATE TABLE IF NOT EXISTS `t_commentaire` (
  `COM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(200) NOT NULL,
  `BIL_ID` int(11) NOT NULL,
  PRIMARY KEY (`COM_ID`),
  KEY `fk_com_bil` (`BIL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_commentaire`
--

INSERT INTO `t_commentaire` (`COM_ID`, `COM_DATE`, `COM_AUTEUR`, `COM_CONTENU`, `BIL_ID`) VALUES
(1, '2018-05-22 15:21:44', 'A. Nonyme', 'Bravo pour ce début', 1),
(2, '2018-05-22 15:21:44', 'Moi', 'Merci ! Je vais continuer sur ma lancée', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateur`
--

DROP TABLE IF EXISTS `t_utilisateur`;
CREATE TABLE IF NOT EXISTS `t_utilisateur` (
  `UTIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `UTIL_LOGIN` varchar(100) NOT NULL,
  `UTIL_MDP` varchar(100) NOT NULL,
  PRIMARY KEY (`UTIL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_utilisateur`
--

INSERT INTO `t_utilisateur` (`UTIL_ID`, `UTIL_LOGIN`, `UTIL_MDP`) VALUES
(1, 'admin', 'secret');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prenoms` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8_swedish_ci NOT NULL,
  `photo` text COLLATE utf8_swedish_ci NOT NULL,
  `activite` text COLLATE utf8_swedish_ci NOT NULL,
  `biographie` text COLLATE utf8_swedish_ci NOT NULL,
  `loisirs` text COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `prenoms`, `nom`, `pays`, `photo`, `activite`, `biographie`, `loisirs`) VALUES
(1, 'Yu', 'Kun', 'France', '', 'Developpeur web', 'Non merci', 'programmation');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_commentaire`
--
ALTER TABLE `t_commentaire`
  ADD CONSTRAINT `fk_com_bil` FOREIGN KEY (`BIL_ID`) REFERENCES `t_billet` (`BIL_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
