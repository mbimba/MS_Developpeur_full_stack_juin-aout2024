/*!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19  Distrib 10.6.18-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: thedistrict
-- ------------------------------------------------------
-- Server version	10.6.18-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Supprime la base de données si elle existe.
DROP DATABASE IF EXISTS thedistrict;

-- Création de la base de données.
CREATE DATABASE thedistrict;
USE thedistrict;

-- Table structure for table `categorie`.


DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` (`id`, `libelle`, `image`, `active`) VALUES (4,'Pizza','pizza_cat.jpg','Yes'),(5,'Burger','burger_cat.jpg','Yes'),(9,'Wraps','wrap_cat.jpg','Yes'),(10,'Pasta','pasta_cat.jpg','Yes'),(11,'Sandwich','sandwich_cat.jpg','Yes'),(12,'Asian Food','asian_food_cat.jpg','No'),(13,'Salade','salade_cat.jpg','Yes'),(14,'Veggie','veggie_cat.jpg','Yes');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_plat` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `date_commande` datetime NOT NULL,
  `etat` varchar(50) NOT NULL,
  `nom_client` varchar(150) NOT NULL,
  `telephone_client` varchar(20) NOT NULL,
  `email_client` varchar(150) NOT NULL,
  `adresse_client` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_plat` (`id_plat`),
  CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_plat`) REFERENCES `plat` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commande`
--

LOCK TABLES `commande` WRITE;
/*!40000 ALTER TABLE `commande` DISABLE KEYS */;
INSERT INTO `commande` (`id`, `id_plat`, `quantite`, `total`, `date_commande`, `etat`, `nom_client`, `telephone_client`, `email_client`, `adresse_client`) VALUES (7,10,2,8.00,'2021-07-20 06:40:21','En cours de livraison','Claudia Hedley','7451114400','hedley@gmail.com','1119 Kinney Street'),(8,14,1,6.00,'2021-07-20 06:40:57','En préparation','Vernon Vargas','7414744440','venno@gmail.com','1234 Hazelwood Avenue'),(9,9,4,20.00,'2021-07-20 07:06:06','Annulée','Carlos Grayson','7401456980','carlos@gmail.com','2969 Hartland Avenue'),(16,4,4,16.00,'2020-11-30 03:52:43','Livrée','Kelly Dillard','7896547800','kelly@gmail.com','308 Post Avenue'),(17,5,2,20.00,'2020-11-30 04:07:17','Livrée','Thomas Gilchrist','7410001450','thom@gmail.com','1277 Sunburst Drive'),(18,5,10,100.00,'2021-05-04 01:35:34','Livrée','Martha Woods','78540001200','martha@gmail.com','478 Avenue Street'),(19,9,1,7.00,'2021-07-20 06:10:37','Livrée','Charlie','7458965550','charlie@gmail.com','3140 Bartlett Avenue'),(20,16,4,12.00,'2021-07-20 07:11:06','Livrée','Jonathan Caudill','7410256996','jonathan@gmail.com','Limer Street'),(21,15,20,160.00,'2021-07-20 07:06:12','Livrée','Bob Morane','0123456789','bob@miam.plouf','1 rue pas là'),(22,15,30,240.00,'2024-05-04 01:35:34','Livrée','Triomphe Mbimba','0123456789','Triomphe_the_One@Triomphe.moi','123 t\'es pas là'),(23,13,100,700.00,'2024-05-04 01:35:35','Livrée','Clark Kent','0555555555','super_truc@man.man','3140 metropolis road');
/*!40000 ALTER TABLE `commande` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plat`
--

DROP TABLE IF EXISTS `plat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `active` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categorie` (`id_categorie`),
  CONSTRAINT `plat_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plat`
--

LOCK TABLES `plat` WRITE;
/*!40000 ALTER TABLE `plat` DISABLE KEYS */;
INSERT INTO `plat` (`id`, `libelle`, `description`, `prix`, `image`, `id_categorie`, `active`) VALUES (4,'District Burger','Burger composé d’un bun’s du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits. .',8.00,'bgbacon.jpg',5,'Yes'),(5,'Pizza Bianca','Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais.',14.00,'pizzasorientale.jpg',4,'Yes'),(9,'Buffalo Chicken Wrap','Du bon filet de poulet mariné dans notre spécialité sucrée & épicée, enveloppé dans une tortilla blanche douce faite maison.',5.00,'buffalo_wrap.jpeg',9,'Yes'),(10,'Cheeseburger','Burger composé d’un bun’s du boulanger, de salade, oignons rouges, pickles, oignon confit, tomate, d’un steak d’origine Française, d’une tranche de cheddar affiné, et de notre sauce maison.',8.00,'bgchicken.jpg',5,'Yes'),(12,'Spaghetti aux légumes','Un plat de spaghetti au pesto de basilic et légumes poêlés, très parfumé et rapide',10.00,'spaghetti-legumes.jpg',10,'Yes'),(13,'Salade César','Une délicieuse salade Caesar (César) composée de filets de poulet grillés, de feuilles croquantes de salade romaine, de croutons à l\'ail, de tomates cerise et surtout de sa fameuse sauce Caesar. Le tout agrémenté de copeaux de parmesan.',7.00,'saladeniçoise.jpg',13,'Yes'),(14,'Pizza Margherita','Une authentique pizza margarita, un classique de la cuisine italienne! Une pâte faite maison, une sauce tomate fraîche, de la mozzarella Fior di latte, du basilic, origan, ail, sucre, sel & poivre...',14.00,'pizzasmargherita.jpg',4,'Yes'),(15,'Courgettes farcies au quinoa et duxelles de champignons','Voici une recette équilibrée à base de courgettes, quinoa et champignons, 100% vegan et sans gluten!',8.00,'courgettes_farcies.jpg',14,'Yes'),(16,'Lasagnes','Découvrez notre recette des lasagnes, l\'une des spécialités italiennes que tout le monde aime avec sa viande hachée et gratinée à l\'emmental. Et bien sûr, une inoubliable béchamel à la noix de muscade.\n\n',12.00,'lasagnes_viande.jpg',10,'Yes'),(17,'Tagliatelles au saumon','Découvrez notre recette délicieuse de tagliatelles au saumon frais et à la crème qui qui vous assure un véritable régal!  \n\n',12.00,'tagliatelles_saumon.jpeg',10,'Yes'),(18,'Sandwich jambon','Un sandwich fait avec du jambon, du beurre et de l\'emmental.',6.00,'sandwichjambon.jpg',11,'Yes'),(20,'Boeuf sauté','Boeuf composé de poivrons et champignons.',11.00,'AsianboeufsauteSanstitre.jpeg',12,'Yes');
/*!40000 ALTER TABLE `plat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'thedistrict'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-24 15:18:53