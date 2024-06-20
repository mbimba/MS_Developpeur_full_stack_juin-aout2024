-- Crée la base de données si elle n existe pas et la sélectionne pour utilisation.
DROP DATABASE IF EXISTS restaurant;
CREATE DATABASE IF NOT EXISTS restaurant;
USE restaurant;

-- Crée la table client.
CREATE TABLE IF NOT EXISTS client(
id_client INT PRIMARY KEY AUTO_INCREMENT,
nom VARCHAR(50),
prenom VARCHAR(50),
email VARCHAR(100)
);

-- Suppression puis recréation de la table catégorie.
-- DROP TABLE IF EXISTS categorie;
CREATE TABLE IF NOT EXISTS categorie(
id_categorie INT PRIMARY KEY AUTO_INCREMENT,
nom_categorie VARCHAR(50)
);


-- Crée la table Plat.
CREATE TABLE IF NOT EXISTS plat(
id_plat INT PRIMARY KEY AUTO_INCREMENT,
nom_plat VARCHAR(50),
id_categorie INT,
prix DECIMAL(10,2),
FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie)
);

-- Crée la table Commande.
CREATE TABLE IF NOT EXISTS commande (
id_commande INT PRIMARY KEY AUTO_INCREMENT,
id_client INT,
id_plat INT,
date_commande DATE,
total DECIMAL(10,2),
FOREIGN KEY (id_client) REFERENCES client(id_client),
FOREIGN KEY (id_plat) REFERENCES plat(id_plat)
);


-- Données pour la table 'Client'.
INSERT INTO client (id_client, nom, prenom, email) VALUES
(1, 'Martin', 'Lucie', 'lucie.martin@example.com'),
(2, 'Bernard', 'Julien', 'julien.bernard@example.com'),
(3, 'Thomas', 'Émilie', 'emilie.thomas@example.com'),
(4, 'Petit', 'Sophie', 'sophie.petit@example.com'),
(5, 'Robert', 'Christophe', 'christophe.robert@example.com'),
(6, 'Triomphe', 'personne', 'triomphe.personne@example.com');

-- Données pour la table 'Categorie'.
INSERT INTO categorie (id_categorie, nom_categorie) VALUES
(1, 'Asiatique'),
(2, 'Burgers'),
(3, 'Grillades'),
(4, 'Pâtes'),
(5, 'Pizzas'),
(6, 'Salades'),
(7, 'Sandwich'),
(8, 'Vegan');

-- Données pour la table 'plat'
INSERT INTO plat (id_plat, nom_plat, id_categorie, prix) VALUES
(1, 'Bouillon de nouilles au boeuf', 1, 12.50),
(2, 'Boeuf sauté', 1, 12.50),
(3, 'Nems', 1, 12.50),
(4, 'Sushis', 1, 12.50),
(5, 'Burger au bacon', 2, 18.90),
(6, 'Burger normand', 2, 18.90),
(7, 'Burger chicken', 2, 18.90),
(8, 'Burger boeuf', 2, 18.90),
(9, 'Ailes de poulet', 3, 6.50),
(10, 'Ribs', 3, 6.50),
(11, 'Émincés de boeuf aux courgettes grillées', 3, 6.50),
(12, 'Steak', 3, 6.50),
(13, 'Pâtes aux boulettes de boeuf', 4, 16.50),
(14, 'Pâtes au saumon', 4, 16.50),
(15, 'Pâtes carbonara', 4, 16.50),
(16, 'Pâtes aux épinards', 4, 16.50),
(17, 'Pizzas margherita', 5, 16.50),
(18, 'Pizzas au saumon', 5, 16.50),
(19, 'Pizzas orientale', 5, 16.50),
(20, 'Pizzas savoyarde', 5, 16.50),
(21, 'Salade de carottes', 6, 8.00),
(22, 'Salade niçoise', 6, 8.00),
(23, 'Salade de chef', 6, 8.00),
(24, 'Salade au thon cru', 6, 8.00),
(25, 'Sandwich chicken', 7, 3.75),
(26, 'Sandwich poulet', 7, 3.75),
(27, 'Sandwich jambon', 7, 3.75),
(28, 'Sandwich salami', 7, 3.75),
(29, 'Boulettes de légumes', 8, 9.75),
(30, 'Burger', 8, 9.75),
(31, 'Taboulé', 8, 9.75),
(32, 'Salade de pois chiche', 8, 9.75);

-- Données pour la table 'Commande'
INSERT INTO commande (id_commande, id_client, id_plat, date_commande, total) VALUES
(1, 1, 6, '2023-09-01', 45.90),
(2, 2, 2, '2023-09-02', 24.25),
(3, 3, 3, '2023-09-03', 19.75),
(4, 4, 4, '2023-09-04', 34.75),
(5, 5, 5, '2023-09-05', 22.50);


