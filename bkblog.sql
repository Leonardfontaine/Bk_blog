-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 20 juin 2019 à 05:00
-- Version du serveur :  10.1.39-MariaDB
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bkblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `iD` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`iD`, `name`, `create_at`) VALUES
(0, 'content', '2019-05-22 06:02:14'),
(1, 'content2', '2019-06-14 06:37:33'),
(2, 'News', '2019-05-20 07:46:53');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(1, 0, 1, 'About the bk wallett', 'About-the-bk-wallett', '<p>BK Wallet is one of the most transformative technologies since the invention of the Internet. BK Wallet stands firmly in support of financial freedom and the liberty that Bitcoin provides globally for anyone to voluntarily participate in a permissionless and decentralized network.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '2019-05-22 06:03:24'),
(2, 0, 1, 'Register/Login to our platform', 'RegisterLogin-to-our-platform', '<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit. Laudantium modi assumenda beatae provide nt dolor consectetur aliquam posuere tortor tortor</p>\r\n', '', '2019-05-22 06:27:43'),
(3, 0, 1, 'Enter your informations details', 'Enter-your-informations-details', '<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit. Laudantium modi assumenda beatae provide nt dolor consectetur aliquam posuere tortor</p>\r\n', '', '2019-05-22 06:28:09'),
(4, 0, 1, 'Start sharing your referral link', 'Start-sharing-your-referral-link', '<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit. Laudantium modi assumenda beatae provide nt dolor consectetur aliquam posuere tortor</p>\r\n', '', '2019-05-22 06:29:24'),
(5, 0, 1, 'Start earning from affiliate system', 'Start-earning-from-affiliate-system', '<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit. Laudantium modi assumenda beatae provide nt dolor consectetur aliquam posuere tortor</p>\r\n', '', '2019-05-22 06:29:46'),
(6, 0, 1, 'Pay', 'Pay', '<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit. Laudantium modi assumenda beatae provide nt dolor consectetur aliquam posuere tortor</p>\r\n', '', '2019-05-22 06:39:33'),
(7, 0, 1, 'Recharge', 'Recharge', '<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit. Laudantium modi assumenda beatae provide nt dolor consectetur aliquam posuere tortor</p>\r\n', '', '2019-05-22 06:39:48'),
(8, 0, 1, 'QR code', 'QR-code', '<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit. Laudantium modi assumenda beatae provide nt dolor consectetur aliquam posuere tortor</p>\r\n', '', '2019-05-22 06:40:03'),
(9, 0, 1, 'Withdraw', 'Withdraw', '<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit. Laudantium modi assumenda beatae provide nt dolor consectetur aliquam posuere tortor</p>\r\n', '', '2019-05-22 06:40:18'),
(10, 0, 1, 'History', 'History', '<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit. Laudantium modi assumenda beatae provide nt dolor consectetur aliquam posuere tortor</p>\r\n', '', '2019-05-22 06:40:45'),
(11, 0, 1, 'Paypal', 'Paypal', '<p>Lorem ipsum dolor sit amet, consectetur adipisicin elit. Laudantium modi assumenda beatae provide nt dolor consectetur aliquam posuere tortor</p>\r\n', '', '2019-05-22 06:41:00'),
(12, 0, 1, 'Roadmap', 'Roadmap', '<p>The use of crypto-currencies has become more widespread, and they are now increasingly<br />\r\naccepted as a legitimate currency for transactions</p>\r\n', '', '2019-06-14 04:43:46'),
(13, 0, 1, 'February 2018', 'February-2018', '<p>Exchange Cryptocash to Bitcoin</p>\r\n', 'withdraw.png', '2019-06-14 04:51:17'),
(14, 1, 1, 'March 2018', 'March-2018', 'BTCC made of payment in Cyptocash', 'withdraw.png', '2019-06-14 04:51:17'),
(15, 0, 1, 'June 2018', 'June-2018', '<p>Send-Receive coin Cyptocash &amp; mobile</p>\r\n', 'withdraw.png', '2019-06-14 06:19:12'),
(16, 1, 1, 'October 2018', 'October-2018', 'Coin Marketcap, World Coin index', 'withdraw.png', '2019-06-14 06:20:08'),
(17, 1, 1, 'December 2018 1-2', 'December-2018-1-2', 'Exchange Cryptocash to Bitcoin', 'withdraw.png', '2019-06-14 06:22:53'),
(18, 1, 1, 'December 2018 2-2', 'December-2018-2-2', 'Deposit bitcoin  from your account', 'withdraw.png', '2019-06-14 06:22:53'),
(19, 0, 1, 'Name 1', 'Name-1', 'Role in the project', '', '2019-06-19 09:37:34'),
(20, 0, 1, 'Name 2', 'Name-2', 'Role in the project', '', '2019-06-19 09:37:34'),
(21, 0, 1, 'Name 3', 'Name-3', 'Role in the project', '', '2019-06-19 09:38:11'),
(22, 0, 1, 'Name 4', 'Name-4', 'Role in the project', '', '2019-06-19 09:38:11'),
(23, 0, 1, 'Our team', 'Our-team', 'We are proud of our great team. They are one of the most motivated and enthusiastic people we have,\r\nand they are always ready and willing to help out where needed', '', '2019-06-19 09:40:23'),
(47, 2, 1, 'test ', 'test', '<p>lorem ipsum etcetera tt</p>\r\n', 'noimage.png', '2019-05-22 03:29:42'),
(49, 2, 1, 'test update', 'test-update', '<p>lorem ipsum</p>\r\n', 'noimage.png', '2019-05-31 02:24:10'),
(50, 2, 1, 'yoyoyo', 'yoyoyo', '<p>loreeemmm ippissisusususl</p>\r\n', 'group.jpg', '2019-06-14 08:56:03');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`iD`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `iD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
