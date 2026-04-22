-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2026 at 08:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moncoinvert`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `idType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `Nom`, `idType`) VALUES
(1, 'Cactus & Succulentes', 1),
(2, 'Plantes retombantes', 1),
(3, 'Plantes XXL', 1),
(4, 'Plantes \"Animaux compatible\"', 1),
(5, 'Pour débutants', 1),
(6, 'Arbustes & Haies', 2),
(7, 'Plantes grimpantes', 2),
(8, 'Fleurs d\'extérieur', 2),
(9, 'Arbres fruitiers', 2),
(10, 'Plantes vivaces', 2),
(11, 'Graines & Semis', 3),
(12, 'Plantes aromatiques', 3),
(13, 'Légumes du soleil', 3),
(14, 'Petits fruits', 3),
(15, 'Carrés potagers', 3),
(16, 'Pots & Cache-pots', 4),
(17, 'Terreaux & Engrais', 4),
(18, 'Outils de jardinage', 4),
(19, 'Arrosoirs & Pulvérisateurs', 4);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `DateNaissance` date DEFAULT NULL,
  `Adresse` varchar(70) DEFAULT NULL,
  `CodePostal` int(5) DEFAULT NULL,
  `Ville` varchar(50) DEFAULT NULL,
  `AdresseMail` varchar(50) DEFAULT NULL,
  `MotDePasse` varchar(64) NOT NULL,
  `Telephone` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`idClient`, `Nom`, `Prenom`, `DateNaissance`, `Adresse`, `CodePostal`, `Ville`, `AdresseMail`, `MotDePasse`, `Telephone`) VALUES
(4, 'Chev', 'Gab', '2007-01-07', '10 rue de la Raimbauderie', 37210, 'Parçay-Meslay', 'gabrielchevallier7@gmail.com', '$2y$10$tA8CpcVUJnaWFJWJ7SpWtuYHztDMupvXmwPsoudBDfEariM73bHjC', 0),
(5, 'Dessendre', 'Renoir', '1984-01-01', '87 rue de la Vallée Coquette', 37210, 'Vouvray', 'renoirlegoat@gmail.com', '$2y$10$VWUaRf3QlIzu7oEk4pFov.W87LrTvD374vJzRzN0Aw2TIh2P42gVa', 699231013);

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL,
  `DateCommande` date NOT NULL,
  `DateLivraison` date DEFAULT NULL,
  `idClient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contient`
--

CREATE TABLE `contient` (
  `idCommande` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fourni`
--

CREATE TABLE `fourni` (
  `idProduit` int(11) NOT NULL,
  `idFournisseur` int(11) NOT NULL,
  `Quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `idFournisseur` int(11) NOT NULL,
  `NomFournisseur` varchar(70) DEFAULT NULL,
  `AdresseFournisseur` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `PrixVenteUnitaire` decimal(6,2) DEFAULT NULL,
  `PrixAchatUnitaire` decimal(6,2) DEFAULT NULL,
  `QuantiteStockee` int(11) DEFAULT NULL,
  `TVA` decimal(4,2) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`idProduit`, `Nom`, `PrixVenteUnitaire`, `PrixAchatUnitaire`, `QuantiteStockee`, `TVA`, `description`, `image`, `idCategorie`) VALUES
(1, 'Cactus bien soigné', 69.99, 67.99, 20, 20.00, 'Un cactus bien frais chacal', 'cactus.png', 1),
(2, 'Monstera Deliciosa', 39.90, 25.00, 15, 20.00, 'Plante tropicale très tendance avec grandes feuilles', 'monstera.png', 1),
(3, 'Ficus Lyrata', 59.90, 40.00, 10, 20.00, 'Plante d’intérieur élégante et décorative', 'ficus.png', 1),
(4, 'Aloe Vera', 14.90, 8.00, 30, 20.00, 'Plante médicinale facile d’entretien', 'aloe.png', 1),
(5, 'Bonsaï Miniature', 79.00, 50.00, 8, 20.00, 'Petit arbre décoratif japonais', 'bonsai.png', 1),
(6, 'Sansevieria', 24.90, 12.00, 25, 20.00, 'Plante ultra résistante pour intérieur', 'sansevieria.png', 1),
(7, 'Orchidée Blanche', 29.90, 18.00, 12, 20.00, 'Fleur élégante et raffinée pour décoration', 'orchidee.png', 1),
(8, 'Cactus Miniature', 9.90, 4.00, 50, 20.00, 'Petit cactus décoratif facile à entretenir', 'cactus_mini.png', 1),
(9, 'Palmier Areca', 49.90, 30.00, 9, 20.00, 'Plante exotique pour intérieur lumineux', 'areca.png', 1),
(10, 'Pothos Suspendu', 19.90, 10.00, 40, 20.00, 'Plante retombante idéale en suspension', 'pothos.png', 1),
(11, 'Monstera Deliciosa', 39.90, 25.00, 15, 20.00, 'Plante tropicale à grandes feuilles', 'monstera.png', 1),
(12, 'Ficus Lyrata', 59.90, 40.00, 10, 20.00, 'Plante décorative très tendance', 'ficus.png', 1),
(13, 'Rose Rouge', 12.90, 6.00, 50, 20.00, 'Rose fraîche symbole d’amour', 'rose.png', 2),
(14, 'Tulipe Jaune', 9.90, 4.50, 60, 20.00, 'Tulipe lumineuse de printemps', 'tulipe.png', 2),
(15, 'Orchidée Blanche', 29.90, 18.00, 20, 20.00, 'Fleur élégante et raffinée', 'orchidee.png', 2),
(16, 'Laurier Rose', 24.90, 15.00, 18, 20.00, 'Arbuste résistant pour jardin', 'laurier.png', 3),
(17, 'Olivier', 89.90, 60.00, 5, 20.00, 'Arbre méditerranéen symbolique', 'olivier.png', 3),
(18, 'Lavande', 14.90, 7.00, 40, 20.00, 'Plante parfumée de jardin', 'lavande.png', 3),
(19, 'Cactus Miniature', 9.90, 4.00, 80, 20.00, 'Petit cactus facile d’entretien', 'cactus_mini.png', 4),
(20, 'Aloe Vera', 14.90, 8.00, 35, 20.00, 'Plante médicinale naturelle', 'aloe.png', 4),
(21, 'Echeveria', 11.90, 5.00, 60, 20.00, 'Succulente décorative en rosette', 'echeveria.png', 4),
(22, 'Palmier Areca', 49.90, 30.00, 12, 20.00, 'Plante tropicale intérieure', 'areca.png', 5),
(23, 'Bananier', 34.90, 20.00, 8, 20.00, 'Plante exotique à grandes feuilles', 'bananier.png', 5),
(24, 'Strelitzia', 69.90, 45.00, 6, 20.00, 'Oiseau de paradis spectaculaire', 'strelitzia.png', 5),
(35, 'Monstera Deliciosa', 39.90, 25.00, 15, 20.00, 'Plante tropicale à grandes feuilles', 'monstera.png', 1),
(36, 'Ficus Lyrata', 59.90, 40.00, 10, 20.00, 'Plante décorative tendance', 'ficus.png', 1),
(37, 'Pothos Doré', 19.90, 8.00, 30, 20.00, 'Plante retombante facile', 'pothos.png', 1),
(38, 'Rose Rouge', 12.90, 6.00, 50, 20.00, 'Rose classique romantique', 'rose.png', 2),
(39, 'Tulipe Jaune', 9.90, 4.00, 60, 20.00, 'Fleur de printemps lumineuse', 'tulipe.png', 2),
(40, 'Orchidée Blanche', 29.90, 18.00, 20, 20.00, 'Fleur élégante et raffinée', 'orchidee.png', 2),
(41, 'Laurier Rose', 24.90, 15.00, 18, 20.00, 'Arbuste extérieur résistant', 'laurier.png', 3),
(42, 'Olivier', 89.90, 60.00, 5, 20.00, 'Arbre méditerranéen symbolique', 'olivier.png', 3),
(43, 'Lavande', 14.90, 7.00, 40, 20.00, 'Plante parfumée du jardin', 'lavande.png', 3),
(44, 'Cactus Mini', 9.90, 4.00, 80, 20.00, 'Petit cactus décoratif', 'cactus-mini.png', 4),
(45, 'Aloe Vera', 14.90, 8.00, 35, 20.00, 'Plante médicinale', 'aloe.png', 4),
(46, 'Echeveria', 11.90, 5.00, 60, 20.00, 'Succulente en rosette', 'echeveria.png', 4),
(47, 'Palmier Areca', 49.90, 30.00, 12, 20.00, 'Plante tropicale intérieure', 'areca.png', 5),
(48, 'Bananier', 34.90, 20.00, 8, 20.00, 'Grande plante exotique', 'bananier.png', 5),
(49, 'Strelitzia', 69.90, 45.00, 6, 20.00, 'Oiseau de paradis spectaculaire', 'strelitzia.png', 5),
(50, 'Pot Terre Cuite', 8.90, 3.00, 100, 20.00, 'Pot classique naturel', 'pot_terre.png', 6),
(51, 'Pot Design Blanc', 14.90, 6.00, 80, 20.00, 'Pot moderne intérieur', 'pot_blanc.png', 6),
(52, 'Jardinière balcon', 19.90, 9.00, 50, 20.00, 'Pour balcon et terrasse', 'jardiniere.png', 6),
(53, 'Arrosoir 5L', 12.90, 6.00, 40, 20.00, 'Arrosage facile', 'arrosoir.png', 7),
(54, 'Sécateur Pro', 24.90, 12.00, 25, 20.00, 'Coupe précise', 'secateur.png', 7),
(55, 'Gants Jardinage', 9.90, 3.50, 60, 20.00, 'Protection mains', 'gants.png', 7),
(56, 'Graines Basilic', 3.90, 1.00, 200, 5.50, 'Facile à cultiver', 'basilic.png', 8),
(57, 'Graines Tomates', 4.90, 1.50, 150, 5.50, 'Tomates cerises', 'tomate.png', 8),
(58, 'Graines Tournesol', 2.90, 1.00, 180, 5.50, 'Fleur solaire', 'tournesol.png', 8),
(59, 'Menthe', 5.90, 2.00, 90, 10.00, 'Fraîche et parfumée', 'menthe.png', 9),
(60, 'Romarin', 6.90, 2.50, 80, 10.00, 'Plante méditerranéenne', 'romarin.png', 9),
(61, 'Thym', 5.50, 2.00, 85, 10.00, 'Cuisine et infusion', 'thym.png', 9),
(62, 'Pommier', 39.90, 25.00, 12, 20.00, 'Arbre fruitier classique', 'pommier.png', 10),
(63, 'Citronnier', 49.90, 30.00, 10, 20.00, 'Agrumes maison', 'citronnier.png', 10),
(64, 'Cerisier', 59.90, 35.00, 8, 20.00, 'Fruits rouges', 'cerisier.png', 10),
(65, 'Pommier Golden', 39.90, 25.00, 12, 20.00, 'Pommier productif facile à cultiver', 'pommier.png', 10),
(66, 'Calathea Orbifolia', 29.90, 18.00, 15, 20.00, 'Feuillage décoratif élégant', 'calathea.png', 11),
(67, 'Hibiscus Rose', 19.90, 10.00, 20, 20.00, 'Fleurs tropicales colorées', 'hibiscus.png', 12),
(68, 'Dracaena Marginata', 44.90, 28.00, 10, 20.00, 'Plante haute d’intérieur résistante', 'dracaena.png', 13),
(69, 'Cactus Colonnaire', 14.90, 6.00, 40, 20.00, 'Cactus vertical décoratif', 'cactus2.png', 14),
(70, 'Terrarium Verre Fermé', 49.90, 25.00, 8, 20.00, 'Mini écosystème autonome', 'terrarium.png', 15),
(71, 'Statue Bouddha Zen', 34.90, 20.00, 6, 20.00, 'Décoration apaisante pour jardin', 'bouddha.png', 16),
(72, 'Engrais Universel Bio', 12.90, 5.00, 100, 20.00, 'Nutrition complète pour plantes', 'engrais.png', 17),
(73, 'Anti-pucerons naturel', 9.90, 4.00, 80, 20.00, 'Solution écologique contre parasites', 'anti_puceron.png', 18),
(74, 'Mini Serre de Semis', 19.90, 10.00, 35, 20.00, 'Idéal pour faire germer les graines', 'serre.png', 19);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `idType` int(11) NOT NULL,
  `TypeProduit` varchar(30) DEFAULT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`idType`, `TypeProduit`, `description`) VALUES
(1, 'Plantes d\'intérieur', 'Découvrez notre sélection pour verdir votre intérieur.'),
(2, 'Balcon, Terrasse et Jardin', 'Aménagez vos espaces extérieurs avec nos meilleures variétés.'),
(3, 'Coin Potager', 'Tout ce qu\'il vous faut pour cultiver vos propres légumes et aromates.'),
(4, 'Matériel & Entretien', 'Outils, terreaux et accessoires pour prendre soin de vos plantes.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`),
  ADD KEY `FkType` (`idType`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`),
  ADD KEY `fkClient` (`idClient`);

--
-- Indexes for table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`idCommande`,`idProduit`),
  ADD KEY `FkContient_pk2` (`idProduit`);

--
-- Indexes for table `fourni`
--
ALTER TABLE `fourni`
  ADD PRIMARY KEY (`idProduit`,`idFournisseur`),
  ADD KEY `FkFourni_pk2` (`idFournisseur`);

--
-- Indexes for table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`idFournisseur`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`),
  ADD KEY `FkCategorie` (`idCategorie`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`idType`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `idFournisseur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `idType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `FkType` FOREIGN KEY (`idType`) REFERENCES `type` (`idType`);

--
-- Constraints for table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fkClient` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`);

--
-- Constraints for table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `FkContient_pk1` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`),
  ADD CONSTRAINT `FkContient_pk2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);

--
-- Constraints for table `fourni`
--
ALTER TABLE `fourni`
  ADD CONSTRAINT `FkFourni_pk1` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`),
  ADD CONSTRAINT `FkFourni_pk2` FOREIGN KEY (`idFournisseur`) REFERENCES `fournisseur` (`idFournisseur`);

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FkCategorie` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
