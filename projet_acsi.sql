-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 27 Février 2018 à 17:31
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_acsi`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `idutilisateur` bigint(4) NOT NULL,
  `iddieteticien` bigint(4) NOT NULL,
  `dateabonnement` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `aliments`
--

CREATE TABLE `aliments` (
  `idaliment` bigint(4) NOT NULL,
  `nomaliment` char(32) DEFAULT NULL,
  `caloriealiment` bigint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `boisson`
--

CREATE TABLE `boisson` (
  `idboisson` bigint(4) NOT NULL,
  `idrecette` bigint(4) NOT NULL,
  `nomboisson` char(32) DEFAULT NULL,
  `calorieboisson` bigint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idcategorie` bigint(4) NOT NULL,
  `nomcategorie` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `composemenu`
--

CREATE TABLE `composemenu` (
  `idmets` bigint(4) NOT NULL,
  `idmenu` bigint(4) NOT NULL,
  `quantitemets` bigint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `composerecette`
--

CREATE TABLE `composerecette` (
  `idaliment` bigint(4) NOT NULL,
  `idrecette` bigint(4) NOT NULL,
  `quantitealiment` bigint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `composerepas`
--

CREATE TABLE `composerepas` (
  `idrepas` bigint(4) NOT NULL,
  `idboisson` bigint(4) NOT NULL,
  `idmenu` bigint(4) NOT NULL,
  `quantiteboisson` bigint(4) DEFAULT NULL,
  `quantitemenu` bigint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `conseil`
--

CREATE TABLE `conseil` (
  `idconseil` bigint(4) NOT NULL,
  `idsuivi` bigint(4) NOT NULL,
  `iddieteticien` bigint(4) NOT NULL,
  `intitule` char(255) DEFAULT NULL,
  `dateconseil` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dieteticien`
--

CREATE TABLE `dieteticien` (
  `iddieteticien` bigint(4) NOT NULL,
  `nomdieteticien` char(32) DEFAULT NULL,
  `prenomdieteticien` char(32) DEFAULT NULL,
  `adressemaildieteticien` char(128) DEFAULT NULL,
  `pseudodieteticien` char(16) DEFAULT NULL,
  `mdpdieteticien` char(16) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `idmenu` bigint(4) NOT NULL,
  `idutilisateur` bigint(4) NOT NULL,
  `nommenu` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mets`
--

CREATE TABLE `mets` (
  `idmets` bigint(4) NOT NULL,
  `idrecette` bigint(4) NOT NULL,
  `idcategorie` bigint(4) NOT NULL,
  `nommets` char(32) DEFAULT NULL,
  `caloriemets` bigint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `observationstatistique`
--

CREATE TABLE `observationstatistique` (
  `iddieteticien` bigint(4) NOT NULL,
  `idstatistique` bigint(4) NOT NULL,
  `dateobservation` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `qualite`
--

CREATE TABLE `qualite` (
  `idqualite` bigint(4) NOT NULL,
  `idstatistique` bigint(4) NOT NULL,
  `idutilisateur` bigint(4) NOT NULL,
  `avissante` char(255) DEFAULT NULL,
  `avisapportcalorique` char(255) DEFAULT NULL,
  `carence` char(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `idrecette` bigint(4) NOT NULL,
  `idutilisateur` bigint(4) NOT NULL,
  `nomrecette` char(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `repas`
--

CREATE TABLE `repas` (
  `idrepas` bigint(4) NOT NULL,
  `idutilisateur` bigint(4) NOT NULL,
  `idqualite` bigint(4) NOT NULL,
  `nomrepas` char(32) DEFAULT NULL,
  `intitulerepas` char(255) DEFAULT NULL,
  `calorie` bigint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `statistiques`
--

CREATE TABLE `statistiques` (
  `idstatistique` bigint(4) NOT NULL,
  `avissantegroupe` char(255) DEFAULT NULL,
  `avisapportcaloriquegroupe` char(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `suivi`
--

CREATE TABLE `suivi` (
  `idsuivi` bigint(4) NOT NULL,
  `iddieteticien` bigint(4) NOT NULL,
  `idutilisateur` bigint(4) NOT NULL,
  `datesuivi` date DEFAULT NULL,
  `remarque` char(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idutilisateur` bigint(4) NOT NULL,
  `nomutilisateur` char(32) DEFAULT NULL,
  `prenomutilisateur` char(32) DEFAULT NULL,
  `adressemailutilisateur` char(128) DEFAULT NULL,
  `age` bigint(4) DEFAULT NULL,
  `pseudoutilisateur` char(16) DEFAULT NULL,
  `mdputilisateur` char(16) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`idutilisateur`,`iddieteticien`),
  ADD KEY `fk_abonnement_dieteticien` (`iddieteticien`);

--
-- Index pour la table `aliments`
--
ALTER TABLE `aliments`
  ADD PRIMARY KEY (`idaliment`);

--
-- Index pour la table `boisson`
--
ALTER TABLE `boisson`
  ADD PRIMARY KEY (`idboisson`),
  ADD KEY `fk_boisson_recette` (`idrecette`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcategorie`);

--
-- Index pour la table `composemenu`
--
ALTER TABLE `composemenu`
  ADD PRIMARY KEY (`idmets`,`idmenu`),
  ADD KEY `fk_composemenu_menu` (`idmenu`);

--
-- Index pour la table `composerecette`
--
ALTER TABLE `composerecette`
  ADD PRIMARY KEY (`idaliment`,`idrecette`),
  ADD KEY `fk_composerecette_recette` (`idrecette`);

--
-- Index pour la table `composerepas`
--
ALTER TABLE `composerepas`
  ADD PRIMARY KEY (`idrepas`,`idboisson`,`idmenu`),
  ADD KEY `fk_composerepas_boisson` (`idboisson`),
  ADD KEY `fk_composerepas_menu` (`idmenu`);

--
-- Index pour la table `conseil`
--
ALTER TABLE `conseil`
  ADD PRIMARY KEY (`idconseil`),
  ADD KEY `fk_conseil_suivi` (`idsuivi`),
  ADD KEY `fk_conseil_dieteticien` (`iddieteticien`);

--
-- Index pour la table `dieteticien`
--
ALTER TABLE `dieteticien`
  ADD PRIMARY KEY (`iddieteticien`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`),
  ADD KEY `fk_menu_utilisateur` (`idutilisateur`);

--
-- Index pour la table `mets`
--
ALTER TABLE `mets`
  ADD PRIMARY KEY (`idmets`),
  ADD KEY `fk_mets_recette` (`idrecette`),
  ADD KEY `fk_mets_categorie` (`idcategorie`);

--
-- Index pour la table `observationstatistique`
--
ALTER TABLE `observationstatistique`
  ADD PRIMARY KEY (`iddieteticien`,`idstatistique`),
  ADD KEY `fk_observationstatistique_statistiques` (`idstatistique`);

--
-- Index pour la table `qualite`
--
ALTER TABLE `qualite`
  ADD PRIMARY KEY (`idqualite`),
  ADD KEY `fk_qualite_statistiques` (`idstatistique`),
  ADD KEY `fk_qualite_utilisateur` (`idutilisateur`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`idrecette`),
  ADD KEY `fk_recette_utilisateur` (`idutilisateur`);

--
-- Index pour la table `repas`
--
ALTER TABLE `repas`
  ADD PRIMARY KEY (`idrepas`),
  ADD KEY `fk_repas_utilisateur` (`idutilisateur`),
  ADD KEY `fk_repas_qualite` (`idqualite`);

--
-- Index pour la table `statistiques`
--
ALTER TABLE `statistiques`
  ADD PRIMARY KEY (`idstatistique`);

--
-- Index pour la table `suivi`
--
ALTER TABLE `suivi`
  ADD PRIMARY KEY (`idsuivi`),
  ADD KEY `fk_suivi_dieteticien` (`iddieteticien`),
  ADD KEY `fk_suivi_utilisateur` (`idutilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idutilisateur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `aliments`
--
ALTER TABLE `aliments`
  MODIFY `idaliment` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `boisson`
--
ALTER TABLE `boisson`
  MODIFY `idboisson` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcategorie` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `conseil`
--
ALTER TABLE `conseil`
  MODIFY `idconseil` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `dieteticien`
--
ALTER TABLE `dieteticien`
  MODIFY `iddieteticien` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `mets`
--
ALTER TABLE `mets`
  MODIFY `idmets` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `qualite`
--
ALTER TABLE `qualite`
  MODIFY `idqualite` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `idrecette` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `repas`
--
ALTER TABLE `repas`
  MODIFY `idrepas` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `statistiques`
--
ALTER TABLE `statistiques`
  MODIFY `idstatistique` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `suivi`
--
ALTER TABLE `suivi`
  MODIFY `idsuivi` bigint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idutilisateur` bigint(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
