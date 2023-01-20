-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 03 Décembre 2019 à 11:18
-- Version du serveur :  5.7.28-0ubuntu0.18.04.4
-- Version de PHP :  7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_stock`
--
CREATE DATABASE IF NOT EXISTS `gestionStock` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gestionStock`;

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `id` int(11) NOT NULL,
  `stock_id` int(11) DEFAULT NULL,
  `facture_id` int(11) DEFAULT NULL,
  `quantiteAchat` int(11) NOT NULL,
  `prixAchat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nomClient` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `referenceClient` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresseClient` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeroClient` int(11) NOT NULL,
  `etatClient` int(11) NOT NULL,
  `emailClient` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `nomClient`, `referenceClient`, `adresseClient`, `numeroClient`, `etatClient`, `emailClient`) VALUES
(1, 'Beidi', 'CLIENT/2019071', 'Koubia', 98024646, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `tva_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `referenceFacture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateFacture` datetime NOT NULL,
  `remise` int(11) DEFAULT NULL,
  `statut` int(11) DEFAULT NULL,
  `dateOperationFacture` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id` int(11) NOT NULL,
  `nomFournisseur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeroFournisseur` int(11) NOT NULL,
  `adresseFournisseur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailFournisseur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `referenceFournisseur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `etatFournisseur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id`, `nomFournisseur`, `numeroFournisseur`, `adresseFournisseur`, `emailFournisseur`, `referenceFournisseur`, `etatFournisseur`) VALUES
(1, 'Fournisseur', 43254244, 'doso', NULL, 'FSS/2019071', 0);

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `NomInformation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `situationJuridique` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slogant` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `siteweb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cel` int(11) DEFAULT NULL,
  `compteBancaire` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codePostal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `information`
--

INSERT INTO `information` (`id`, `NomInformation`, `dg`, `adresse`, `email`, `situationJuridique`, `slogant`, `siteweb`, `tel`, `cel`, `compteBancaire`, `codePostal`, `path`, `message`) VALUES
(1, 'rmagtech', NULL, NULL, NULL, NULL, NULL, NULL, '90407146', 98526452, NULL, NULL, 'Capture d’écran de 2019-06-20 16-22-27.png', 'Re,j\'ai testé sur Google Chrome et FireFox ça donne la même chose,ça doit être  le cache du navigateur comme tu as dit.');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `typeproduit_id` int(11) DEFAULT NULL,
  `nomProduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `referenceProduit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descriptionProduit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `typeproduit_id`, `nomProduit`, `referenceProduit`, `descriptionProduit`) VALUES
(1, 2, 'Gani GAZ', 'PRODUIT2019071', ''),
(2, 2, 'Oriba GAZ', 'PRODUIT2019072', ''),
(3, 1, 'Recharge bouteil', 'PRODUIT2019073', 'lju'),
(4, 2, 'Recharge bouteil 12KG', 'PRODUIT2019074', 'kjkj');

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `produit_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quantiteProduit` int(11) NOT NULL,
  `limiteProduit` int(11) NOT NULL,
  `prixProduit` int(11) DEFAULT NULL,
  `datePermptionProduit` datetime DEFAULT NULL,
  `dateOperation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `stock`
--

INSERT INTO `stock` (`id`, `produit_id`, `user_id`, `quantiteProduit`, `limiteProduit`, `prixProduit`, `datePermptionProduit`, `dateOperation`) VALUES
(1, 1, 3, 1670, 12, 322, NULL, '2019-07-13 12:37:32'),
(2, 2, 3, 169, 6, 6000, NULL, '2019-08-18 12:51:34'),
(3, 3, 3, 22971, 20, 2000, NULL, '2019-07-17 19:12:42');

-- --------------------------------------------------------

--
-- Structure de la table `stock_fournisseur`
--

CREATE TABLE `stock_fournisseur` (
  `id` int(11) NOT NULL,
  `fournisseur_id` int(11) DEFAULT NULL,
  `stock_id` int(11) DEFAULT NULL,
  `quantiteProduitFournisseur` int(11) NOT NULL,
  `prixProduitFournisseur` int(11) NOT NULL,
  `dateApprovisioner` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `stock_fournisseur`
--

INSERT INTO `stock_fournisseur` (`id`, `fournisseur_id`, `stock_id`, `quantiteProduitFournisseur`, `prixProduitFournisseur`, `dateApprovisioner`) VALUES
(1, 1, 1, 125, 70000, '2019-07-07 09:04:27'),
(2, 1, 2, 1000, 8000, '2019-07-07 12:36:11'),
(3, 1, 1, 2000, 4000, '2019-07-10 22:01:34'),
(4, 1, 2, 123, 222222, '2019-07-12 21:06:34'),
(5, 1, 1, 2000, 1000, '2019-07-13 12:37:32'),
(6, 1, 3, 23000, 4500, '2019-07-17 19:12:42'),
(7, 1, 2, 100, 9000, '2019-08-18 12:48:40'),
(8, 1, 2, 56, 9000, '2019-08-18 12:51:34');

-- --------------------------------------------------------

--
-- Structure de la table `tva`
--

CREATE TABLE `tva` (
  `id` int(11) NOT NULL,
  `tvaFacture` int(11) NOT NULL,
  `referenceTva` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tva`
--

INSERT INTO `tva` (`id`, `tvaFacture`, `referenceTva`) VALUES
(1, 19, '19%'),
(2, 100, '0%'),
(3, 198, '198%');

-- --------------------------------------------------------

--
-- Structure de la table `type_produit`
--

CREATE TABLE `type_produit` (
  `id` int(11) NOT NULL,
  `nomType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descriptionType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `type_produit`
--

INSERT INTO `type_produit` (`id`, `nomType`, `descriptionType`) VALUES
(1, 'Bouteil 33 KG', ''),
(2, 'Bouteil 12 KG', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `username`, `roles`, `password`, `telephone`, `status`) VALUES
(1, 'Boubacar', 'Harouna', 'boubacar', 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', '$2y$13$BEPHkSVzhtLDDbg9OngwXuUwJEFeXJ9kqL2dZTSRTBgBKCj4sDK/2', 91472478, 1),
(3, 'admin', 'admin', 'admin', 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', '$2y$13$mVFUMHZa59EIByljw4mraOpcC3q36F6IxOb3oR0XjiW0Z1vSbDvH.', 12345, 1),
(4, 'rmag', 'Rabiou', 'rmag', 'a:1:{i:0;s:9:\"ROLE_USER\";}', '$2y$13$mthx7haeKCVAls0Jyv66DOh0DggG.srpHzM7rE5qYX/RsMvDahdRm', 90407146, 1),
(5, 'Arzika', 'Rabiou', 'arzika', 'a:1:{i:0;s:9:\"ROLE_USER\";}', '$2y$13$opLBuybtFVPJRbf4gjG4o.q3lfjiYsWzjMybFdGEZdA1rgdrYq3ha', 90785634, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_26A98456DCD6110` (`stock_id`),
  ADD KEY `IDX_26A984567F2DEE08` (`facture_id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FE86641019EB6921` (`client_id`),
  ADD KEY `IDX_FE8664104D79775F` (`tva_id`),
  ADD KEY `IDX_FE866410A76ED395` (`user_id`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_29A5EC27F66E9EF6` (`typeproduit_id`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4B365660F347EFB` (`produit_id`),
  ADD KEY `IDX_4B365660A76ED395` (`user_id`);

--
-- Index pour la table `stock_fournisseur`
--
ALTER TABLE `stock_fournisseur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E9506C06670C757F` (`fournisseur_id`),
  ADD KEY `IDX_E9506C06DCD6110` (`stock_id`);

--
-- Index pour la table `tva`
--
ALTER TABLE `tva`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_produit`
--
ALTER TABLE `type_produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `achat`
--
ALTER TABLE `achat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `stock_fournisseur`
--
ALTER TABLE `stock_fournisseur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `tva`
--
ALTER TABLE `tva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `type_produit`
--
ALTER TABLE `type_produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `FK_26A984567F2DEE08` FOREIGN KEY (`facture_id`) REFERENCES `facture` (`id`),
  ADD CONSTRAINT `FK_26A98456DCD6110` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`id`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `FK_FE86641019EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_FE8664104D79775F` FOREIGN KEY (`tva_id`) REFERENCES `tva` (`id`),
  ADD CONSTRAINT `FK_FE866410A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC27F66E9EF6` FOREIGN KEY (`typeproduit_id`) REFERENCES `type_produit` (`id`);

--
-- Contraintes pour la table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `FK_4B365660A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_4B365660F347EFB` FOREIGN KEY (`produit_id`) REFERENCES `produit` (`id`);

--
-- Contraintes pour la table `stock_fournisseur`
--
ALTER TABLE `stock_fournisseur`
  ADD CONSTRAINT `FK_E9506C06670C757F` FOREIGN KEY (`fournisseur_id`) REFERENCES `fournisseur` (`id`),
  ADD CONSTRAINT `FK_E9506C06DCD6110` FOREIGN KEY (`stock_id`) REFERENCES `stock` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
