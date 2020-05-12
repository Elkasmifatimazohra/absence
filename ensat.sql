-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 13 mai 2020 à 00:52
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ensat`
--

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id_comptes` int(11) NOT NULL,
  `CNE` varchar(10) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `adresse_email` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comptes`
--

INSERT INTO `comptes` (`id_comptes`, `CNE`, `nom`, `prenom`, `age`, `adresse_email`) VALUES
(5050561, 'LM1215', 'elkassimi', 'khawla', 15, 'elkassimikhawla@gmail.com'),
(12369852, 'LC2326', 'alaoui', 'amira', 18, 'alaouiamira@hotmail.com'),
(123456789, 'LB2022', 'elkasmi', 'samir', 21, 'elkasmisamir@gmail.com'),
(124578963, 'LA1014', 'elkati', 'ayoub', 19, 'ayoub.elkati@hotmail.com'),
(789654123, 'LF2526', 'alami', 'aya', 22, 'alamiaya@hotmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `id_eleve` varchar(50) NOT NULL,
  `dat` date NOT NULL,
  `matire` varchar(50) NOT NULL,
  `nombre_heures` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id_eleve`, `dat`, `matire`, `nombre_heures`) VALUES
('124578963', '2020-05-08', 'english', 1),
('124578963', '2020-02-03', 'english', 1),
('789654123', '2020-03-24', 'algorithme', 1),
('789654123', '2020-03-25', 'algebre', 1),
('12369852', '2020-03-25', 'english', 1),
('12369852', '2020-05-02', 'algorithme', 1),
('5050561', '2020-05-07', 'espagne', 2),
('5050561', '2020-03-25', 'analyse', 2),
('123456789', '2020-03-24', 'english', 1),
('123456789', '2020-01-07', 'php', 2),
('123456789', '2020-03-25', 'analyse', 1),
('5050561', '0000-00-00', 'english', 1),
('12369852', '2020-05-08', 'algorithme', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD UNIQUE KEY `CNE` (`id_comptes`),
  ADD UNIQUE KEY `LOGIN` (`nom`),
  ADD UNIQUE KEY `MOTDEPASS` (`prenom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
