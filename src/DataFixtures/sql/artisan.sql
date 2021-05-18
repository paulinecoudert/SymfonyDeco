-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 mai 2021 à 09:57
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wad03`
--

-- --------------------------------------------------------

--
-- Structure de la table `artisan`
--



--
-- Déchargement des données de la table `artisan`
--

INSERT INTO `artisan` (`id`, `nom`, `metier`, `description`, `email`) VALUES
(1, 'Rempart', 0, 'Je suis un jeune elelctricie de bonne réputation j\'ai fais plusieurs projets pour des particuliers. ', NULL),
(3, 'sdffg', 1, 'sdfghjk', 'fdgh@gmail.com'),
(7, 'sdfg', 1, 'zert', 'john@doe.fr'),
(8, 'sdfg', 1, 'zert', 'john@doe.fr'),
(9, 'Abae', 3, 'lfgfkgnlb,; fl,gfh', 'abae@gmail.com'),
(10, 'fghh', 2, 'sfdghjk', 'john@gmail.com'),
(11, 'dfghjk', 5, 'tjk', 'john@gmail.com'),
(12, 'sdfghj', 1, 'dfgh', 'john@gmail.com'),
(13, 'sdfghj', 1, 'dfgh', 'john@gmail.com'),
(14, 'dfgbn', 8, 'qsd', 'dfgh@ggg.com'),
(15, 'drftg', 8, 'sdfgh', 'fff@mail.be'),
(16, 'sdfgh', 1, 's', 'gob@gg.be'),
(17, 'Herbert', 1, 'Je suis très intéressé par votre projet, je suis disponible de temps à temps. Merci de me contacter.', 'herbert@gmail.com'),
(18, 'df', 8, 'sdf', 'df@mail.be'),
(19, 'dfgfhg', 4, 'cvbn,;;:', 'sdfgh@mail.be');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artisan`
--
ALTER TABLE `artisan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artisan`
--
ALTER TABLE `artisan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
