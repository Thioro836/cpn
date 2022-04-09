-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 09 avr. 2022 à 16:04
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cpn`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent_sante`
--

CREATE TABLE `agent_sante` (
  `id_agent` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `adresse` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `qualification` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `antecedent`
--

CREATE TABLE `antecedent` (
  `id_antecedent` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `id_categorie_antecedent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_antecedent`
--

CREATE TABLE `categorie_antecedent` (
  `id_categorie_antecedent` int(11) NOT NULL,
  `nom_cat_antecedent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_situation`
--

CREATE TABLE `categorie_situation` (
  `id_categorie_situation` int(11) NOT NULL,
  `nom_cat_situation` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `id_consultation` int(11) NOT NULL,
  `date_consultation` date NOT NULL,
  `age_gestationnel` int(11) NOT NULL,
  `mouvement_percus` tinyint(1) NOT NULL,
  `poids` float NOT NULL,
  `haut_uterine` float NOT NULL,
  `bruit_coeur` tinyint(1) NOT NULL,
  `conseling` tinyint(1) DEFAULT NULL,
  `tension_arterielle` float NOT NULL,
  `metorrhagies` tinyint(1) NOT NULL,
  `anemie_clinique` tinyint(1) NOT NULL,
  `odemes` tinyint(1) NOT NULL,
  `infection_urinaire` tinyint(1) NOT NULL,
  `perte_fetide` tinyint(1) NOT NULL,
  `suspicion_bassin_retreci` tinyint(1) DEFAULT NULL,
  `ca_uc_f_vada` tinyint(1) DEFAULT NULL,
  `parite` tinyint(1) DEFAULT NULL,
  `primapare` tinyint(1) DEFAULT NULL,
  `taille` tinyint(1) DEFAULT NULL,
  `mn_dn_ed` tinyint(1) DEFAULT NULL,
  `bw` tinyint(1) DEFAULT NULL,
  `srv` tinyint(1) DEFAULT NULL,
  `thb` float DEFAULT NULL,
  `position_transverse` tinyint(1) DEFAULT NULL,
  `siege` tinyint(1) DEFAULT NULL,
  `gemellaire` tinyint(1) DEFAULT NULL,
  `id_dossier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `consultation_agent_sante`
--

CREATE TABLE `consultation_agent_sante` (
  `id_agent` int(11) NOT NULL,
  `id_consultation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `consultation_produit`
--

CREATE TABLE `consultation_produit` (
  `id_produit` int(11) NOT NULL,
  `id_consultation` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dossier_patient`
--

CREATE TABLE `dossier_patient` (
  `id_dossier` int(11) NOT NULL,
  `numero_dossier` varchar(20) NOT NULL,
  `date_enregistrement` date NOT NULL,
  `date_derniere_regle` date DEFAULT NULL,
  `dure_cycle` int(11) DEFAULT NULL,
  `lieu_accouchement` varchar(50) NOT NULL,
  `date_accouchement` date DEFAULT NULL,
  `hadicap_pysique` tinyint(1) NOT NULL,
  `groupe_sanguin` varchar(5) NOT NULL,
  `taille_patiente` float NOT NULL,
  `dap` float NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_accouchement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dossier_patient_antecedent`
--

CREATE TABLE `dossier_patient_antecedent` (
  `id_antecedent` int(11) NOT NULL,
  `id_dossier` int(11) NOT NULL,
  `valeur_antecedent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dossier_patient_gestation`
--

CREATE TABLE `dossier_patient_gestation` (
  `id_gestation` int(11) NOT NULL,
  `id_dossier` int(11) NOT NULL,
  `valeur_gestation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dossier_patient_vaccin`
--

CREATE TABLE `dossier_patient_vaccin` (
  `id_vaccin` int(11) NOT NULL,
  `id_dossier` int(11) NOT NULL,
  `date_vaccination` date NOT NULL,
  `date_prochain_rdv` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `gestation`
--

CREATE TABLE `gestation` (
  `id_gestation` int(11) NOT NULL,
  `nom_gestation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id_patient` int(11) NOT NULL,
  `nom_patient` varchar(50) NOT NULL,
  `prenom_patient` varchar(150) NOT NULL,
  `age_patient` int(11) DEFAULT NULL,
  `adresse_patient` varchar(50) NOT NULL,
  `secteur_patient` varchar(150) NOT NULL,
  `profession_patient` varchar(50) NOT NULL,
  `telephone_patient` varchar(20) NOT NULL,
  `nom_mari` varchar(50) DEFAULT NULL,
  `prenom_mari` varchar(150) DEFAULT NULL,
  `adresse_mari` varchar(50) DEFAULT NULL,
  `secteur_mari` varchar(50) DEFAULT NULL,
  `profession_mari` varchar(50) DEFAULT NULL,
  `telephone_mari` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `plan_accouchement`
--

CREATE TABLE `plan_accouchement` (
  `id_accouchement` int(11) NOT NULL,
  `lieu_accouchement` varchar(100) NOT NULL,
  `moyens_transport` varchar(50) NOT NULL,
  `personne_responsable` varchar(50) NOT NULL,
  `accompagant` varchar(50) NOT NULL,
  `id_dossier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id_rdv` int(11) NOT NULL,
  `date_rdv` date NOT NULL,
  `id_dossier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `situation`
--

CREATE TABLE `situation` (
  `id_situattion` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `sexe_enfant` varchar(2) NOT NULL,
  `vivant` tinyint(1) NOT NULL,
  `age_enfant` int(11) NOT NULL,
  `cause_deces` varchar(2) DEFAULT NULL,
  `id_dossier` int(11) NOT NULL,
  `id_categorie_situation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `transfert`
--

CREATE TABLE `transfert` (
  `id_transfert` int(11) NOT NULL,
  `date_transfert` date NOT NULL,
  `cpc` tinyint(1) DEFAULT NULL,
  `reference_immediate` tinyint(1) DEFAULT NULL,
  `cpc_traitement` text NOT NULL,
  `id_consultation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vaccin`
--

CREATE TABLE `vaccin` (
  `id_vaccin` int(11) NOT NULL,
  `nom_vaccin` varchar(10) NOT NULL,
  `periodicite` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent_sante`
--
ALTER TABLE `agent_sante`
  ADD PRIMARY KEY (`id_agent`);

--
-- Index pour la table `antecedent`
--
ALTER TABLE `antecedent`
  ADD PRIMARY KEY (`id_antecedent`),
  ADD KEY `antecedent_categorie_antecedent0_FK` (`id_categorie_antecedent`);

--
-- Index pour la table `categorie_antecedent`
--
ALTER TABLE `categorie_antecedent`
  ADD PRIMARY KEY (`id_categorie_antecedent`);

--
-- Index pour la table `categorie_situation`
--
ALTER TABLE `categorie_situation`
  ADD PRIMARY KEY (`id_categorie_situation`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id_consultation`),
  ADD KEY `consultation_dossier_patient0_FK` (`id_dossier`);

--
-- Index pour la table `consultation_agent_sante`
--
ALTER TABLE `consultation_agent_sante`
  ADD PRIMARY KEY (`id_agent`,`id_consultation`),
  ADD KEY `consultation_agent_sante_consultation1_FK` (`id_consultation`);

--
-- Index pour la table `consultation_produit`
--
ALTER TABLE `consultation_produit`
  ADD PRIMARY KEY (`id_produit`,`id_consultation`),
  ADD KEY `consultation_produit_consultation1_FK` (`id_consultation`);

--
-- Index pour la table `dossier_patient`
--
ALTER TABLE `dossier_patient`
  ADD PRIMARY KEY (`id_dossier`),
  ADD UNIQUE KEY `dossier_patient_plan_accouchement0_AK` (`id_accouchement`),
  ADD KEY `dossier_patient_patient0_FK` (`id_patient`);

--
-- Index pour la table `dossier_patient_antecedent`
--
ALTER TABLE `dossier_patient_antecedent`
  ADD PRIMARY KEY (`id_antecedent`,`id_dossier`),
  ADD KEY `dossier_patient_antecedent_dossier_patient1_FK` (`id_dossier`);

--
-- Index pour la table `dossier_patient_gestation`
--
ALTER TABLE `dossier_patient_gestation`
  ADD PRIMARY KEY (`id_gestation`,`id_dossier`),
  ADD KEY `dossier_patient_gestation_dossier_patient1_FK` (`id_dossier`);

--
-- Index pour la table `dossier_patient_vaccin`
--
ALTER TABLE `dossier_patient_vaccin`
  ADD PRIMARY KEY (`id_vaccin`,`id_dossier`),
  ADD KEY `dossier_patient_vaccin_dossier_patient1_FK` (`id_dossier`);

--
-- Index pour la table `gestation`
--
ALTER TABLE `gestation`
  ADD PRIMARY KEY (`id_gestation`);

--
-- Index pour la table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_patient`);

--
-- Index pour la table `plan_accouchement`
--
ALTER TABLE `plan_accouchement`
  ADD PRIMARY KEY (`id_accouchement`),
  ADD UNIQUE KEY `plan_accouchement_dossier_patient0_AK` (`id_dossier`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id_rdv`),
  ADD KEY `rendez_vous_dossier_patient0_FK` (`id_dossier`);

--
-- Index pour la table `situation`
--
ALTER TABLE `situation`
  ADD PRIMARY KEY (`id_situattion`),
  ADD KEY `situation_dossier_patient0_FK` (`id_dossier`),
  ADD KEY `situation_categorie_situation1_FK` (`id_categorie_situation`);

--
-- Index pour la table `transfert`
--
ALTER TABLE `transfert`
  ADD PRIMARY KEY (`id_transfert`),
  ADD UNIQUE KEY `transfert_consultation0_AK` (`id_consultation`);

--
-- Index pour la table `vaccin`
--
ALTER TABLE `vaccin`
  ADD PRIMARY KEY (`id_vaccin`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agent_sante`
--
ALTER TABLE `agent_sante`
  MODIFY `id_agent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `antecedent`
--
ALTER TABLE `antecedent`
  MODIFY `id_antecedent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categorie_antecedent`
--
ALTER TABLE `categorie_antecedent`
  MODIFY `id_categorie_antecedent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categorie_situation`
--
ALTER TABLE `categorie_situation`
  MODIFY `id_categorie_situation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `id_consultation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `dossier_patient`
--
ALTER TABLE `dossier_patient`
  MODIFY `id_dossier` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gestation`
--
ALTER TABLE `gestation`
  MODIFY `id_gestation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `patient`
--
ALTER TABLE `patient`
  MODIFY `id_patient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `plan_accouchement`
--
ALTER TABLE `plan_accouchement`
  MODIFY `id_accouchement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id_rdv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `situation`
--
ALTER TABLE `situation`
  MODIFY `id_situattion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `transfert`
--
ALTER TABLE `transfert`
  MODIFY `id_transfert` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vaccin`
--
ALTER TABLE `vaccin`
  MODIFY `id_vaccin` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `antecedent`
--
ALTER TABLE `antecedent`
  ADD CONSTRAINT `antecedent_categorie_antecedent0_FK` FOREIGN KEY (`id_categorie_antecedent`) REFERENCES `categorie_antecedent` (`id_categorie_antecedent`);

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_dossier_patient0_FK` FOREIGN KEY (`id_dossier`) REFERENCES `dossier_patient` (`id_dossier`);

--
-- Contraintes pour la table `consultation_agent_sante`
--
ALTER TABLE `consultation_agent_sante`
  ADD CONSTRAINT `consultation_agent_sante_agent_sante0_FK` FOREIGN KEY (`id_agent`) REFERENCES `agent_sante` (`id_agent`),
  ADD CONSTRAINT `consultation_agent_sante_consultation1_FK` FOREIGN KEY (`id_consultation`) REFERENCES `consultation` (`id_consultation`);

--
-- Contraintes pour la table `consultation_produit`
--
ALTER TABLE `consultation_produit`
  ADD CONSTRAINT `consultation_produit_consultation1_FK` FOREIGN KEY (`id_consultation`) REFERENCES `consultation` (`id_consultation`),
  ADD CONSTRAINT `consultation_produit_produit0_FK` FOREIGN KEY (`id_produit`) REFERENCES `produit` (`id_produit`);

--
-- Contraintes pour la table `dossier_patient`
--
ALTER TABLE `dossier_patient`
  ADD CONSTRAINT `dossier_patient_patient0_FK` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_patient`),
  ADD CONSTRAINT `dossier_patient_plan_accouchement1_FK` FOREIGN KEY (`id_accouchement`) REFERENCES `plan_accouchement` (`id_accouchement`);

--
-- Contraintes pour la table `dossier_patient_antecedent`
--
ALTER TABLE `dossier_patient_antecedent`
  ADD CONSTRAINT `dossier_patient_antecedent_antecedent0_FK` FOREIGN KEY (`id_antecedent`) REFERENCES `antecedent` (`id_antecedent`),
  ADD CONSTRAINT `dossier_patient_antecedent_dossier_patient1_FK` FOREIGN KEY (`id_dossier`) REFERENCES `dossier_patient` (`id_dossier`);

--
-- Contraintes pour la table `dossier_patient_gestation`
--
ALTER TABLE `dossier_patient_gestation`
  ADD CONSTRAINT `dossier_patient_gestation_dossier_patient1_FK` FOREIGN KEY (`id_dossier`) REFERENCES `dossier_patient` (`id_dossier`),
  ADD CONSTRAINT `dossier_patient_gestation_gestation0_FK` FOREIGN KEY (`id_gestation`) REFERENCES `gestation` (`id_gestation`);

--
-- Contraintes pour la table `dossier_patient_vaccin`
--
ALTER TABLE `dossier_patient_vaccin`
  ADD CONSTRAINT `dossier_patient_vaccin_dossier_patient1_FK` FOREIGN KEY (`id_dossier`) REFERENCES `dossier_patient` (`id_dossier`),
  ADD CONSTRAINT `dossier_patient_vaccin_vaccin0_FK` FOREIGN KEY (`id_vaccin`) REFERENCES `vaccin` (`id_vaccin`);

--
-- Contraintes pour la table `plan_accouchement`
--
ALTER TABLE `plan_accouchement`
  ADD CONSTRAINT `plan_accouchement_dossier_patient0_FK` FOREIGN KEY (`id_dossier`) REFERENCES `dossier_patient` (`id_dossier`);

--
-- Contraintes pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD CONSTRAINT `rendez_vous_dossier_patient0_FK` FOREIGN KEY (`id_dossier`) REFERENCES `dossier_patient` (`id_dossier`);

--
-- Contraintes pour la table `situation`
--
ALTER TABLE `situation`
  ADD CONSTRAINT `situation_categorie_situation1_FK` FOREIGN KEY (`id_categorie_situation`) REFERENCES `categorie_situation` (`id_categorie_situation`),
  ADD CONSTRAINT `situation_dossier_patient0_FK` FOREIGN KEY (`id_dossier`) REFERENCES `dossier_patient` (`id_dossier`);

--
-- Contraintes pour la table `transfert`
--
ALTER TABLE `transfert`
  ADD CONSTRAINT `transfert_consultation0_FK` FOREIGN KEY (`id_consultation`) REFERENCES `consultation` (`id_consultation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
