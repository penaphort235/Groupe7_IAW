-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 06 juin 2024 à 19:24
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `donnees`
--

-- --------------------------------------------------------

--
-- Structure de la table `rcamrai`
--

CREATE TABLE `rcamrai` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Téléphone` int(11) NOT NULL,
  `Date Voyage` text NOT NULL,
  `Destination` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rdanay`
--

CREATE TABLE `rdanay` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Téléphone` int(11) NOT NULL,
  `Destination` varchar(15) NOT NULL,
  `Place` int(11) NOT NULL,
  `Occasion` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Paiement` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rmistral`
--

CREATE TABLE `rmistral` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Téléphone` int(11) NOT NULL,
  `Destination` varchar(15) NOT NULL,
  `Place` int(11) NOT NULL,
  `Occasion` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Paiement` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rtouristique`
--

CREATE TABLE `rtouristique` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Téléphone` int(11) NOT NULL,
  `Destination` varchar(15) NOT NULL,
  `Place` int(11) NOT NULL,
  `Occasion` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Transaction` int(11) NOT NULL,
  `Montant` int(11) NOT NULL,
  `Paiement` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rtouristique`
--

INSERT INTO `rtouristique` (`Id`, `Nom`, `Téléphone`, `Destination`, `Place`, `Occasion`, `Type`, `Transaction`, `Montant`, `Paiement`) VALUES
(6, 'Oumar Ahamat', 694832926, 'Yaoudé', 1, 'Second Opportynity', 'classic', 0, 0, 'Oui'),
(8, 'Allahogaou Mbailassem', 66666666, 'Bafoussam', 1, 'First Opportynity', 'Confort', 66666666, 12000, ' '),
(9, 'gsfgsgs', 664646, 'Yaoundé', 2, 'First Opportynity', 'Confort', 6553, 40000, ' '),
(10, 'ddddd', 33354, 'Yaoundé', 2, 'First Opportynity', 'Classic', 2147483647, 30000, ' '),
(11, 'wwwww', 3222, 'Maroua', 4, 'First Opportynity', 'Classic', 11111111, 40000, ' '),
(12, 'Houmar', 656878768, 'Maroua', 2, 'First Opportynity', 'Confort', 656878768, 24000, ' '),
(13, 'Houmar', 656878768, 'Maroua', 2, 'First Opportynity', 'Confort', 656878768, 24000, ' '),
(14, 'Houmar', 656878768, 'Maroua', 2, 'First Opportynity', 'Confort', 656878768, 24000, ' ');

-- --------------------------------------------------------

--
-- Structure de la table `tdanaye`
--

CREATE TABLE `tdanaye` (
  `Id` int(11) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `Première Occasion` datetime NOT NULL,
  `Deuxième Occasion` datetime NOT NULL,
  `Troisième Occasion` datetime NOT NULL,
  `Classique` int(11) NOT NULL,
  `Confort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tmistal`
--

CREATE TABLE `tmistal` (
  `Id` int(11) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `Première` time NOT NULL,
  `Deuxième` time NOT NULL,
  `Troisième` time NOT NULL,
  `Classique` int(11) NOT NULL,
  `Confort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tmistal`
--

INSERT INTO `tmistal` (`Id`, `Destination`, `Première`, `Deuxième`, `Troisième`, `Classique`, `Confort`) VALUES
(2, 'Yaoudé', '06:00:00', '13:00:00', '15:00:00', 18000, 20);

-- --------------------------------------------------------

--
-- Structure de la table `ttouristique`
--

CREATE TABLE `ttouristique` (
  `Id` int(11) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `Première` time NOT NULL,
  `Deuxième` time NOT NULL,
  `Troisième` time NOT NULL,
  `Classique` int(11) NOT NULL,
  `Confort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ttouristique`
--

INSERT INTO `ttouristique` (`Id`, `Destination`, `Première`, `Deuxième`, `Troisième`, `Classique`, `Confort`) VALUES
(1, 'Maroua', '06:00:00', '12:00:00', '15:00:00', 10000, 12000),
(2, 'Yaoudé', '06:00:00', '13:00:00', '15:00:00', 15000, 20000),
(3, 'Yaoudé', '06:00:00', '13:00:00', '15:00:00', 15000, 20000),
(4, 'Douala', '06:30:00', '13:00:00', '17:00:00', 18000, 22000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `rcamrai`
--
ALTER TABLE `rcamrai`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `rdanay`
--
ALTER TABLE `rdanay`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `rmistral`
--
ALTER TABLE `rmistral`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `rtouristique`
--
ALTER TABLE `rtouristique`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tdanaye`
--
ALTER TABLE `tdanaye`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tmistal`
--
ALTER TABLE `tmistal`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `ttouristique`
--
ALTER TABLE `ttouristique`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rcamrai`
--
ALTER TABLE `rcamrai`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rdanay`
--
ALTER TABLE `rdanay`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rmistral`
--
ALTER TABLE `rmistral`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rtouristique`
--
ALTER TABLE `rtouristique`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `tdanaye`
--
ALTER TABLE `tdanaye`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tmistal`
--
ALTER TABLE `tmistal`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ttouristique`
--
ALTER TABLE `ttouristique`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
