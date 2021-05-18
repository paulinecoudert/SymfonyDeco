-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 mai 2021 à 10:03
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
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_postal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `username`, `password`, `numero`, `rue`, `code_postal`, `ville`, `pays`) VALUES
(3, 'Renardo', 'Loic', 'loic@gmail.com', 'admin', '$argon2id$v=19$m=65536,t=4,p=1$ODhlbXRHcGdNQlJaV2t6SQ$YiYH219dRjN5k354fcpmzXhy8CfrjSaFX8D9LEK+azY', '6', 'Rue de l\'Etoile', '1190', 'Forest', 'Belgique'),
(6, 'Lo', 'Renata', 'renata@gmail.com', 'test', '$argon2id$v=19$m=65536,t=4,p=1$UVJXdUhwYkREZkFYV1hjNg$6ZNbRsblmP7bGaxLz9aCEVj6UmpXddDK2JrXRgZdLH0', '13', 'Rue de l\'Abbaye', '1060', 'Saint gilles', 'Belgique'),
(7, 'Lee', 'ly', 'ly@gmail.com', 'ly', '$argon2id$v=19$m=65536,t=4,p=1$aG11UGlvdGl6YzFXRGE0aA$fuc3rYzrCtBJNj99o+iHZuq4W3CMFSh4TMNkoQfVvYs', '23', 'des eperons', '1000', 'Bruxelles', 'belgique'),
(10, 'der', 'fred', 'fred@yahoo.fr', 'fred', '$argon2id$v=19$m=65536,t=4,p=1$NjNwZlowRmRIbG00SUhwYg$5r6O5czqHMrf7CnH3l4BA+2gVNn6zOmUY9SHYWd99ZA', '12', 'Blaes', '1000', 'Bruxelles', 'Belgique'),
(16, 'feu', 'felix', 'feu@gmail.com', 'feu', '$argon2id$v=19$m=65536,t=4,p=1$RHJ5djFtNU9NZUZmVTJjSg$/RuHovHGX8hRYQnWxT7An+q8+7NqeQ/STdUIkVDssxg', '54', 'Albert', '1190', 'Forest', 'Belgique'),
(17, 'Grass', 'sarah', 'fred@yahoo.fr', 'gracias', '$argon2id$v=19$m=65536,t=4,p=1$SUlmdHkyaWxkWkd1TEIzSQ$CRVMdldw/w9PZFWdJ/IHbkhBDUERbguTLEhZQZCGUA0', '45', 'Albert', '1190', 'Forest', 'Belgique');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
