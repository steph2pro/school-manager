-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 14 déc. 2022 à 15:39
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ges_stagaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `id` int(255) NOT NULL,
  `nom` varchar(160) NOT NULL,
  `code` varchar(160) NOT NULL,
  `adress` varchar(160) NOT NULL,
  `tel` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id`, `nom`, `code`, `adress`, `tel`) VALUES
(3, 'total', '124', '14add', '123654789');

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `id` int(255) NOT NULL,
  `nom` varchar(160) NOT NULL,
  `poste` varchar(160) NOT NULL,
  `adress` varchar(160) NOT NULL,
  `numcni` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`id`, `nom`, `poste`, `adress`, `numcni`) VALUES
(1, 'stephane kamga', 'etu', 'tex', '12');

-- --------------------------------------------------------

--
-- Structure de la table `stagaires`
--

CREATE TABLE `stagaires` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date_naiss` date NOT NULL,
  `lieu_naiss` varchar(255) NOT NULL,
  `etablissement` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `filiere` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stagaires`
--

INSERT INTO `stagaires` (`id`, `nom`, `date_naiss`, `lieu_naiss`, `etablissement`, `adress`, `filiere`) VALUES
(2, 'azertyui savon', '2022-12-10', 'toui', 'azerty', 'QSDFGHS', 'aaa');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(160) NOT NULL,
  `nom` varchar(160) NOT NULL,
  `login` varchar(160) NOT NULL,
  `password` varchar(160) NOT NULL,
  `statut` varchar(160) NOT NULL,
  `adress` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `login`, `password`, `statut`, `adress`) VALUES
(1, 'stephanepro@gmail.com', 'steph2pro', '@2004kamga', 'tereghe', 'azer'),
(2, 'stephanepro@gmail.com', 'steph2pro1111111111', '@2004kamga', 'tereghe11111111', '1111111111111111'),
(3, 'stephanepro@gmail.com', 'steph2pro1111111111', '@2004kamga', 'tereghe11111111', '1111111111111111');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stagaires`
--
ALTER TABLE `stagaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `stagaires`
--
ALTER TABLE `stagaires`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(160) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
