-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 mai 2021 à 10:01
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
-- Structure de la table `projet`
--



--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `nom`, `budget`, `travaux`, `description`, `date_de_debut`, `filename`, `statut`, `user_id`) VALUES
(2, 'Grands Plans', 6000, 1, 'Je recherche un électricien pour refaire mon installation et mon tableau de ma maison (surface de 200m2)', '2021-05-27', 'elec.jpg', 0, 17),
(3, 'les effets du temps', 5000, 5, 'Une cuisine a modifié, je souhaiterai conserver mes modules mais changer les portes, la crédence et le plan de travail', '2021-05-05', 'pierre.jpg', 0, 6),
(4, 'Intimité', 2000, 9, 'Pour un peu plus d\'intimité je souhaiterai une cloison pour séparer mon entrée de mon salon', '2021-07-01', 'cloison.jpg', 1, 10),
(5, 'Un rêve', 600, 2, 'Des murs pastels me font rêver, je vous propose de venir refaire les murs de mes deux chambre de 20m2.', '2021-04-05', 'peinture.jpg', 1, 3),
(6, 'Brillante', 9890, 4, 'Une salle de bain de 8m2 à refaire  avec toilette, douche et double vasque.', '2021-06-07', 'sdb.jpg', 0, 3),
(17, 'Sol moderne', 1000, 6, 'Je recherche un artisan pour venir poser mon sol de carreaux ', '2021-05-02', 'sol.jpg', 1, 17),
(18, 'Mon petit nid', 3000, 7, 'Je suis actuellement à la recherche de quelqu\'un qui saurait poser un papier peint pour mon salon', '2021-05-30', 'portfolio-1.jpg', 1, 17),
(34, 'Un rêve', 600, 2, 'Des murs pastels me font rêver, je vous propose de venir refaire les murs de mes deux chambre de 20m2.', '2021-04-05', 'peinture.jpg', 1, 3),
(35, 'Un rêve', 600, 2, 'Des murs pastels me font rêver, je vous propose de venir refaire les murs de mes deux chambre de 20m2.', '2021-04-05', 'peinture.jpg', 1, 3);

--
-- Index pour les tables déchargées
--

--


--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `projet`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
