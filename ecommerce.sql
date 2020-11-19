-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 06 juil. 2020 à 19:05
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
-- Base de données :  `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'women'),
(2, 'jacket'),
(3, 'Accessoire'),
(4, 'Shoes'),
(5, 'coat'),
(6, 'T_shirt');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `password`, `phone`, `address`, `photo`) VALUES
(3, 'amine', 'aminejslk', 'rootroot', 'ee', 'jkjk', 'up.PNG'),
(6, 'qertu', 'pppoo', 'rootroot', 'jnhh', 'tyyr', 'java.PNG'),
(7, 'qertu', 'pppoo', 'rootroot', 'jnhh', 'tyyr', 'java.PNG'),
(11, 'zzz', 'root', 'rootroot', 'zzzzz', 'kopio', 'n.PNG'),
(13, 'iojkljkljkl', 'rootjbhhhh', 'rootroot', 'gfg', 'cgh,b', 'sjsqjk.PNG'),
(14, 'iojkljkljkl', 'rootjbhhhh', 'rootroot', 'gfg', 'cgh,b', 'sjsqjk.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `details` varchar(300) NOT NULL,
  `price` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image1` varchar(300) NOT NULL,
  `image2` varchar(300) NOT NULL,
  `image3` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `details`, `price`, `cat_id`, `image1`, `image2`, `image3`, `title`) VALUES
(12, '<p>Votre papa est parfait ? Dites-lui que vous l aimez par ce jeu de mots dr&ocirc;le en r&eacute;f&eacute;rence au terme anglais perfect.</p>\r\n<p>Type de col: rond. Lavez 30&deg;C &agrave; l envers, pas de s&egrave;che-linge</p>\r\n<p>Taille assez grand/coupe classique/pas de moulant</p>\r\n<p>Exp&eacu', 98, 6, 'hjjkjs.PNG', 'hjjkjs.PNG', 'hjjkjs.PNG', 'Père-FECT Papa Parfait T-Shirt Homme'),
(13, '<p>Sweat-Shirt Homme a Capuche,Veste refechissante pour Hommes et Femmes avec Manteau de Ville a Capuche Coupe-Vent a Manches Longues Sportif Manteau d assaut a Capuche lache Hoodie Mince</p>', 58, 2, 'jacket.PNG', 'jksdksdkld.PNG', 'jacket.PNG', 'Roiper_ Homme Sweatshirt & Blazer'),
(14, '<p>Fermeture: Fermeture &eacute;clair</p>\r\n<p>Manches longues</p>', 58, 2, 'juisui.PNG', 'juisui.PNG', 'jacket.PNG', 'Red Bridge Veste Masculine'),
(15, '<p>Chaussures De Course Homme Femme Baskets Outdoor Sneakers Casual Mode Respirante Sports Fitness Gym Shoes</p>', 89, 4, 'C.PNG', 'C.PNG', 'C.PNG', 'JIANYE'),
(16, '<p>SAGUARO Chaussures Minimalistes Hommes Femmes Chaussures de Fitness Trail Running 36-47</p>', 58, 4, 'Ca1.PNG', 'Ca1.PNG', 'Ca1.PNG', 'SAGUARO'),
(17, '<p>une bonne qualite&nbsp;</p>', 78, 2, 'waxed-cotton-coat-woman-1.jpg', 'waxed-cotton-coat-woman-2.jpg', 'waxed-cotton-coat-woman-3.jpg', 'veste'),
(18, '<p>pour un homme elegant&nbsp;</p>', 98, 6, 'grey-man-3.jpg', 'grey-man-2.jpg', 'grey-man-1.jpg', 't shirt pour homme'),
(19, '<p>parfait pour une belle femme&nbsp;</p>', 9845, 4, 'High Heels Women Pantofel Brukat-2.jpg', 'High Heels Women Pantofel Brukat-1.jpg', 'High Heels Women Pantofel Brukat-3.jpg', 'rtyahjajk hsjskioss '),
(20, '<p>jacket sympa avec des beaux couleur</p>', 987, 2, 'boys-Puffer-Coat-With-Detachable-Hood-1.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-2.jpg', 'boys-Puffer-Coat-With-Detachable-Hood-3.jpg', 'opklkjjk');

-- --------------------------------------------------------

--
-- Structure de la table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `id_shop` int(11) NOT NULL,
  `date` date NOT NULL,
  `id_cart` varchar(300) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `shoppingcart`
--

INSERT INTO `shoppingcart` (`id_shop`, `date`, `id_cart`, `product_id`, `quantity`) VALUES
(56, '2020-07-06', '::1', 13, 4),
(57, '2020-07-06', '::1', 12, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Index pour la table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`id_shop`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `id_shop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD CONSTRAINT `shoppingcart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
