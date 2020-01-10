-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 17 oct. 2019 à 16:56
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `covoiturage`
--

-- --------------------------------------------------------

--
-- Structure de la table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `size` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cats`
--

INSERT INTO `cats` (`id`, `name`, `birthday`, `size`) VALUES
(1, 'scsc', '0000-00-00', 0),
(2, 'scsc', '0000-00-00', 0),
(3, 'scsc', '0000-00-00', 0),
(4, 'scsc', '0000-00-00', 0),
(5, 'ggggg', '0000-00-00', 0),
(6, 'ggggg', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `commentuser`
--

CREATE TABLE `commentuser` (
  `id` int(11) NOT NULL,
  `idUserAuteur` int(11) NOT NULL,
  `idUserAssocie` int(11) NOT NULL,
  `datePublication` date NOT NULL,
  `texte` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentuser`
--

INSERT INTO `commentuser` (`id`, `idUserAuteur`, `idUserAssocie`, `datePublication`, `texte`) VALUES
(1, 1, 2, '2019-10-10', 'dvdvdv'),
(2, 1, 1, '2019-10-08', ''),
(3, 1, 1, '2019-10-08', ''),
(4, 1, 1, '2019-10-08', ''),
(5, 1, 1, '2019-10-17', 'exemple texte');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `mail` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `id` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`nom`, `prenom`, `mail`, `date`, `id`, `note`) VALUES
('dfdf', 'dfdf', 'dfdf', '2019-10-10', 1, 1),
('hthhhh', 'hhhh', 'hhhh', '2019-10-17', 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `id` int(10) UNSIGNED NOT NULL,
  `marque` varchar(40) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `couleur` varchar(20) DEFAULT NULL,
  `nPlace` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id`, `marque`, `model`, `couleur`, `nPlace`) VALUES
(1, 'sd', 'sd', 'sd', 1),
(2, 'sd', 'sd', 'sd', 1),
(3, 'sd', 'sd', 'sd', 1),
(4, 'sd', 'sd', 'sd', 1),
(5, 'sd', 'sd', 'sd', 1),
(6, 'sd', 'sd', 'sd', 1),
(7, 'sd', 'sd', 'sd', 1),
(8, 'sd', 'sd', 'sd', 1),
(9, 'sd', 'sd', 'sd', 1),
(10, 'sd', 'sd', 'sd', 1),
(11, 'sd', 'sd', 'sd', 1),
(12, 'sd', 'sd', 'sd', 1),
(13, 'sd', 'sd', 'sd', 1),
(14, 'sd', 'sd', 'sd', 1),
(15, 'sd', 'sd', 'sd', 1),
(16, 'sd', 'sd', 'sd', 1),
(17, 'sd', 'sd', 'sd', 1),
(18, 'sd', 'sd', 'sd', 1),
(19, 'sd', 'sd', 'sd', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentuser`
--
ALTER TABLE `commentuser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUserAuteur` (`idUserAuteur`),
  ADD KEY `idUserAssocie` (`idUserAssocie`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commentuser`
--
ALTER TABLE `commentuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentuser`
--
ALTER TABLE `commentuser`
  ADD CONSTRAINT `commentuser_ibfk_1` FOREIGN KEY (`idUserAuteur`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentuser_ibfk_2` FOREIGN KEY (`idUserAssocie`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
