-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 05:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ges_visites`
--

-- --------------------------------------------------------

--
-- Table structure for table `famille`
--

CREATE TABLE `famille` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medecin`
--

CREATE TABLE `medecin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `specialiteComplementaire` varchar(255) DEFAULT NULL,
  `departement` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicament`
--

CREATE TABLE `medicament` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomCommercial` varchar(50) DEFAULT NULL,
  `idFamille` bigint(20) UNSIGNED DEFAULT NULL,
  `composition` varchar(255) DEFAULT NULL,
  `effets` varchar(255) DEFAULT NULL,
  `contreindications` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offrir`
--

CREATE TABLE `offrir` (
  `idRapport` bigint(20) UNSIGNED DEFAULT NULL,
  `idMedicament` bigint(20) UNSIGNED DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rapport`
--

CREATE TABLE `rapport` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `motif` varchar(255) DEFAULT NULL,
  `bilan` varchar(255) DEFAULT NULL,
  `idVisiteur` bigint(20) UNSIGNED DEFAULT NULL,
  `idMedecin` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visiteur`
--

CREATE TABLE `visiteur` (
  `id` bigint(11) UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `cp` varchar(255) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `dateEmbauche` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `famille`
--
ALTER TABLE `famille`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`id`),
  ADD KEY `famille_medicament` (`idFamille`);

--
-- Indexes for table `offrir`
--
ALTER TABLE `offrir`
  ADD KEY `offrir_medicament` (`idMedicament`),
  ADD KEY `rappport_offrir` (`idRapport`);

--
-- Indexes for table `rapport`
--
ALTER TABLE `rapport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rapport_medecin` (`idMedecin`),
  ADD KEY `rapport_visiteur` (`idVisiteur`);

--
-- Indexes for table `visiteur`
--
ALTER TABLE `visiteur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `famille`
--
ALTER TABLE `famille`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rapport`
--
ALTER TABLE `rapport`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visiteur`
--
ALTER TABLE `visiteur`
  MODIFY `id` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medicament`
--
ALTER TABLE `medicament`
  ADD CONSTRAINT `famille_medicament` FOREIGN KEY (`idFamille`) REFERENCES `famille` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offrir`
--
ALTER TABLE `offrir`
  ADD CONSTRAINT `offrir_medicament` FOREIGN KEY (`idMedicament`) REFERENCES `medicament` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rappport_offrir` FOREIGN KEY (`idRapport`) REFERENCES `rapport` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rapport`
--
ALTER TABLE `rapport`
  ADD CONSTRAINT `rapport_medecin` FOREIGN KEY (`idMedecin`) REFERENCES `medecin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rapport_visiteur` FOREIGN KEY (`idVisiteur`) REFERENCES `visiteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
