-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 28 nov. 2021 à 11:06
-- Version du serveur : 8.0.26-0ubuntu0.20.04.2
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `carpooling`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE `cars` (
  `id` int NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `nbrSlots` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `color`, `nbrSlots`) VALUES
(1, 'Skoda', 'Fabia', 'Noire', 5),
(2, 'Huandai', 'Getz', 'Rouge', 5),
(3, 'Mercedes', 'Classe C', 'Noire', 4),
(4, 'Renaut', 'Zoé', 'Bleu', 2);

-- --------------------------------------------------------

--
-- Structure de la table `classifieds`
--

CREATE TABLE `classifieds` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `classifieds`
--

INSERT INTO `classifieds` (`id`, `title`, `description`, `price`) VALUES
(3, 'Départ : Paris - Arrivée : Brest', 'Covoiturage au départ de Paris le 21/05/2022 à 10h, arrivée à Brest à 14h30.', 40),
(4, 'Départ : Toulouse - Arrivée : Marseille', 'Covoiturage au départ de Toulouse le 22/05/2022 à 14h, arrivée à Marseille à 18h.', 19),
(5, 'Départ : Nice - Arrivée : Lyon', 'Covoiturage au départ de Nice le 23/05/2022 à 9h, arrivée à Lyon à 13h30.', 26);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `birthday`) VALUES
(1, 'Vincent', 'Godé', 'hello@vincentgo.fr', '1990-11-08 00:00:00'),
(2, 'Albert', 'Dupond', 'sonemail@gmail.com', '1985-11-08 00:00:00'),
(3, 'Thomas', 'Dumoulin', 'sonemail2@gmail.com', '1985-10-08 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users_cars`
--

CREATE TABLE `users_cars` (
  `user_id` int NOT NULL,
  `car_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users_cars`
--

INSERT INTO `users_cars` (`user_id`, `car_id`) VALUES
(1, 1),
(1, 2),
(2, 3),
(3, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `classifieds`
--
ALTER TABLE `classifieds`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users_cars`
--
ALTER TABLE `users_cars`
  ADD PRIMARY KEY (`user_id`,`car_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `classifieds`
--
ALTER TABLE `classifieds`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
