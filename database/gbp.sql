-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 04 Mai 2016 à 17:57
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gbp`
--

-- --------------------------------------------------------

--
-- Structure de la table `budget_heure_ressource`
--

CREATE TABLE IF NOT EXISTS `budget_heure_ressource` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_id_ensemble` int(10) unsigned NOT NULL,
  `fk_id_ressource` int(10) unsigned NOT NULL,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `budget_heure_ressource_fk_id_etat_foreign` (`fk_id_etat`),
  KEY `budget_heure_ressource_fk_id_ensemble_foreign` (`fk_id_ensemble`),
  KEY `budget_heure_ressource_fk_id_ressource_foreign` (`fk_id_ressource`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_designation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `c_numero_commande` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_insatisfaction_livraison` tinyint(4) NOT NULL DEFAULT '0',
  `c_insatisfaction_qualite` tinyint(4) NOT NULL DEFAULT '0',
  `c_date_commande` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `c_prix` double(8,2) NOT NULL,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `fk_id_ensemble` int(10) unsigned NOT NULL,
  `fk_id_fournisseur` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `commande_c_numero_commande_unique` (`c_numero_commande`),
  KEY `commande_fk_id_etat_foreign` (`fk_id_etat`),
  KEY `commande_fk_id_ensemble_foreign` (`fk_id_ensemble`),
  KEY `commande_fk_id_fournisseur_foreign` (`fk_id_fournisseur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ensemble`
--

CREATE TABLE IF NOT EXISTS `ensemble` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `en_libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `en_budget_heure` double(8,2) NOT NULL DEFAULT '0.00',
  `en_budget_commande` double(8,2) NOT NULL DEFAULT '0.00',
  `en_commentaire` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `fk_id_projet` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ensemble_fk_id_etat_foreign` (`fk_id_etat`),
  KEY `ensemble_fk_id_projet_foreign` (`fk_id_projet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE IF NOT EXISTS `etat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `et_libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `etat_et_libelle_unique` (`et_libelle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fournisseur_f_libelle_unique` (`f_libelle`),
  KEY `fournisseur_fk_id_etat_foreign` (`fk_id_etat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `heure`
--

CREATE TABLE IF NOT EXISTS `heure` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `h_designation` longtext COLLATE utf8_unicode_ci NOT NULL,
  `h_date_debut` date NOT NULL,
  `h_date_fin` date NOT NULL,
  `fk_id_ensemble` int(10) unsigned NOT NULL,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `heure_fk_id_etat_foreign` (`fk_id_etat`),
  KEY `heure_fk_id_ensemble_foreign` (`fk_id_ensemble`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `heure_ressource`
--

CREATE TABLE IF NOT EXISTS `heure_ressource` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_id_heure` int(10) unsigned NOT NULL,
  `fk_id_ressource` int(10) unsigned NOT NULL,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `heure_ressource_fk_id_heure_foreign` (`fk_id_heure`),
  KEY `heure_ressource_fk_id_ressource_foreign` (`fk_id_ressource`),
  KEY `heure_ressource_fk_id_etat_foreign` (`fk_id_etat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `information_generale`
--

CREATE TABLE IF NOT EXISTS `information_generale` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ig_libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `information_generale_ig_libelle_unique` (`ig_libelle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `livrable`
--

CREATE TABLE IF NOT EXISTS `livrable` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `l_libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `livrable_l_libelle_unique` (`l_libelle`),
  KEY `livrable_fk_id_etat_foreign` (`fk_id_etat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2001_10_12_000000_create_etat_table', 1),
('2002_10_12_000000_create_roles_table', 1),
('2002_10_12_000000_create_users_table', 1),
('2003_10_12_000000_create_projet_table', 1),
('2004_10_12_000000_create_fournisseur_table', 1),
('2004_10_12_000000_create_livrable_table', 1),
('2005_10_12_000000_create_projet_livrable_table', 1),
('2006_10_12_000000_create_projet_utilisateur_table', 1),
('2007_10_12_000000_create_ensemble_table', 1),
('2008_10_12_000000_create_ressource_table', 1),
('2009_10_12_000000_create_commande_table', 1),
('2010_10_12_000000_create_heure_table', 1),
('2011_10_12_000000_create_heure_ressource_table', 1),
('2013_10_12_000000_create_information_generale_table', 1),
('2014_10_12_000000_create_information_generale_projet_table', 1),
('2015_10_12_000000_create_budget_heure_ressource_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `p_libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `fk_id_projet` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projet_p_libelle_unique` (`p_libelle`),
  KEY `projet_fk_id_projet_foreign` (`fk_id_projet`),
  KEY `projet_fk_id_etat_foreign` (`fk_id_etat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `projet_information_generale`
--

CREATE TABLE IF NOT EXISTS `projet_information_generale` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `fk_id_information_generale` int(10) unsigned NOT NULL,
  `fk_id_projet` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projet_information_generale_fk_id_projet_foreign` (`fk_id_projet`),
  KEY `projet_information_generale_fk_id_information_generale_foreign` (`fk_id_information_generale`),
  KEY `projet_information_generale_fk_id_etat_foreign` (`fk_id_etat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `projet_livrable`
--

CREATE TABLE IF NOT EXISTS `projet_livrable` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `fk_id_projet` int(10) unsigned NOT NULL,
  `fk_id_livrable` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projet_livrable_fk_id_projet_foreign` (`fk_id_projet`),
  KEY `projet_livrable_fk_id_livrable_foreign` (`fk_id_livrable`),
  KEY `projet_livrable_fk_id_etat_foreign` (`fk_id_etat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `projet_utilisateur`
--

CREATE TABLE IF NOT EXISTS `projet_utilisateur` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `fk_id_projet` int(10) unsigned NOT NULL,
  `fk_id_utilisateur` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projet_utilisateur_fk_id_projet_foreign` (`fk_id_projet`),
  KEY `projet_utilisateur_fk_id_utilisateur_foreign` (`fk_id_utilisateur`),
  KEY `projet_utilisateur_fk_id_etat_foreign` (`fk_id_etat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

CREATE TABLE IF NOT EXISTS `ressource` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `r_libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ressource_r_libelle_unique` (`r_libelle`),
  KEY `ressource_fk_id_etat_foreign` (`fk_id_etat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ro_libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code_AD` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fk_id_etat` int(10) unsigned NOT NULL,
  `fk_id_role` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `utilisateur_code_ad_unique` (`code_AD`),
  UNIQUE KEY `utilisateur_email_unique` (`email`),
  KEY `utilisateur_fk_id_role_foreign` (`fk_id_role`),
  KEY `utilisateur_fk_id_etat_foreign` (`fk_id_etat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `budget_heure_ressource`
--
ALTER TABLE `budget_heure_ressource`
  ADD CONSTRAINT `budget_heure_ressource_fk_id_ressource_foreign` FOREIGN KEY (`fk_id_ressource`) REFERENCES `ressource` (`id`),
  ADD CONSTRAINT `budget_heure_ressource_fk_id_ensemble_foreign` FOREIGN KEY (`fk_id_ensemble`) REFERENCES `ensemble` (`id`),
  ADD CONSTRAINT `budget_heure_ressource_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_fk_id_fournisseur_foreign` FOREIGN KEY (`fk_id_fournisseur`) REFERENCES `fournisseur` (`id`),
  ADD CONSTRAINT `commande_fk_id_ensemble_foreign` FOREIGN KEY (`fk_id_ensemble`) REFERENCES `ensemble` (`id`),
  ADD CONSTRAINT `commande_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`);

--
-- Contraintes pour la table `ensemble`
--
ALTER TABLE `ensemble`
  ADD CONSTRAINT `ensemble_fk_id_projet_foreign` FOREIGN KEY (`fk_id_projet`) REFERENCES `projet` (`id`),
  ADD CONSTRAINT `ensemble_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`);

--
-- Contraintes pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD CONSTRAINT `fournisseur_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`);

--
-- Contraintes pour la table `heure`
--
ALTER TABLE `heure`
  ADD CONSTRAINT `heure_fk_id_ensemble_foreign` FOREIGN KEY (`fk_id_ensemble`) REFERENCES `ensemble` (`id`),
  ADD CONSTRAINT `heure_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`);

--
-- Contraintes pour la table `heure_ressource`
--
ALTER TABLE `heure_ressource`
  ADD CONSTRAINT `heure_ressource_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`),
  ADD CONSTRAINT `heure_ressource_fk_id_heure_foreign` FOREIGN KEY (`fk_id_heure`) REFERENCES `heure` (`id`),
  ADD CONSTRAINT `heure_ressource_fk_id_ressource_foreign` FOREIGN KEY (`fk_id_ressource`) REFERENCES `ressource` (`id`);

--
-- Contraintes pour la table `livrable`
--
ALTER TABLE `livrable`
  ADD CONSTRAINT `livrable_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`);

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `projet_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`),
  ADD CONSTRAINT `projet_fk_id_projet_foreign` FOREIGN KEY (`fk_id_projet`) REFERENCES `projet` (`id`);

--
-- Contraintes pour la table `projet_information_generale`
--
ALTER TABLE `projet_information_generale`
  ADD CONSTRAINT `projet_information_generale_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`),
  ADD CONSTRAINT `projet_information_generale_fk_id_information_generale_foreign` FOREIGN KEY (`fk_id_information_generale`) REFERENCES `information_generale` (`id`),
  ADD CONSTRAINT `projet_information_generale_fk_id_projet_foreign` FOREIGN KEY (`fk_id_projet`) REFERENCES `projet` (`id`);

--
-- Contraintes pour la table `projet_livrable`
--
ALTER TABLE `projet_livrable`
  ADD CONSTRAINT `projet_livrable_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`),
  ADD CONSTRAINT `projet_livrable_fk_id_livrable_foreign` FOREIGN KEY (`fk_id_livrable`) REFERENCES `livrable` (`id`),
  ADD CONSTRAINT `projet_livrable_fk_id_projet_foreign` FOREIGN KEY (`fk_id_projet`) REFERENCES `projet` (`id`);

--
-- Contraintes pour la table `projet_utilisateur`
--
ALTER TABLE `projet_utilisateur`
  ADD CONSTRAINT `projet_utilisateur_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`),
  ADD CONSTRAINT `projet_utilisateur_fk_id_projet_foreign` FOREIGN KEY (`fk_id_projet`) REFERENCES `projet` (`id`),
  ADD CONSTRAINT `projet_utilisateur_fk_id_utilisateur_foreign` FOREIGN KEY (`fk_id_utilisateur`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD CONSTRAINT `ressource_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_fk_id_etat_foreign` FOREIGN KEY (`fk_id_etat`) REFERENCES `etat` (`id`),
  ADD CONSTRAINT `utilisateur_fk_id_role_foreign` FOREIGN KEY (`fk_id_role`) REFERENCES `role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
