-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 19 oct. 2019 à 19:45
-- Version du serveur :  5.7.18-log
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
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `idConducteur` int(11) DEFAULT NULL,
  `villeA` varchar(50) DEFAULT NULL,
  `dateA` date DEFAULT NULL,
  `villeD` varchar(50) DEFAULT NULL,
  `dateD` date DEFAULT NULL,
  `nPlace` int(50) DEFAULT NULL,
  `prix` int(50) DEFAULT NULL,
  `voiture` int(50) DEFAULT NULL,
  `auteur` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id`, `idConducteur`, `villeA`, `dateA`, `villeD`, `dateD`, `nPlace`, `prix`, `voiture`, `auteur`) VALUES
(1, 1, 'gg', '2019-10-19', 'dd', '2019-10-19', 2, 2, 1, 1),
(20, 1, 'ville 2', '2019-10-19', 'ville 1', '2019-10-19', 4, 1000, 20, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaireannonce`
--

CREATE TABLE `commentaireannonce` (
  `texte` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `utilisateurAuteur` int(11) DEFAULT NULL,
  `datePublication` date DEFAULT NULL,
  `annonceAssocie` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaireannonce`
--

INSERT INTO `commentaireannonce` (`texte`, `id`, `utilisateurAuteur`, `datePublication`, `annonceAssocie`) VALUES
('exemple texte', 1, 1, '2019-10-19', 1),
('exemple texte', 2, 1, '2019-10-19', 1),
('exemple texte', 3, 1, '2019-10-19', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaireutilisateur`
--

CREATE TABLE `commentaireutilisateur` (
  `texte` varchar(50) DEFAULT NULL,
  `utilisateurAuteur` int(11) DEFAULT NULL,
  `datePublication` date DEFAULT NULL,
  `utilisateurAssocie` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaireutilisateur`
--

INSERT INTO `commentaireutilisateur` (`texte`, `utilisateurAuteur`, `datePublication`, `utilisateurAssocie`, `id`) VALUES
('exemple texteteste', 1, '2019-10-18', 1, 1),
('exemple texteteste', 1, '2019-10-18', 1, 2),
('reh', 2, '2019-10-18', 2, 3),
('reh', 2, '2019-10-18', 2, 4),
('exemple texte', 1, '2019-10-19', 1, 5),
('exemple texte', 1, '2019-10-19', 1, 6),
('exemple texte sssss', 3, '2019-10-19', 4, 7);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `date` date DEFAULT NULL,
  `idUtilisateur` int(11) DEFAULT NULL,
  `idAnnonce` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`date`, `idUtilisateur`, `idAnnonce`, `status`, `id`) VALUES
('2019-10-19', 1, 1, '', 1),
('2019-10-19', 1, 1, 'active', 2);

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
('hthhhh', 'hhhh', 'hhhh', '2019-10-17', 2, 3),
('Monsieur', 'Sow', 'sow@unilim', '2019-10-18', 3, 250),
('Monsieur', 'Sow', 'sow@unilim', '2019-10-18', 4, 250),
('qxqx', 'qxqx', 'qxqx', '2019-10-19', 5, 22),
('f', 'f', 'f', '2019-10-19', 6, 2);

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
(20, 'Peugeot', '780', 'blanche', 8),
(21, 'Peugeot', '780', 'blanche', 8),
(22, 'Peugeot', '780', 'blanche', 8),
(23, 'Peugeot', '780', 'blanche', 8),
(24, 'Peugeot', '780', 'blanche', 8),
(25, 'Peugeot', '780', 'blanche', 8),
(26, 'grehgiruh', 'hrfgiuehiru', 'hieruguerh', 0),
(27, 'erhgh', 'gvhgfuyfeg', 'uyguyegfuzy', 80),
(28, 'erhgh', 'gvhgfuyfeg', 'uyguyegfuzy', 80),
(29, 'csc', 'cscs', 'scsc', 4),
(30, 'q', 'q', 'q', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `voiture` (`voiture`) USING BTREE;

--
-- Index pour la table `commentaireannonce`
--
ALTER TABLE `commentaireannonce`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaireutilisateur`
--
ALTER TABLE `commentaireutilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `commentaireannonce`
--
ALTER TABLE `commentaireannonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `commentaireutilisateur`
--
ALTER TABLE `commentaireutilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
