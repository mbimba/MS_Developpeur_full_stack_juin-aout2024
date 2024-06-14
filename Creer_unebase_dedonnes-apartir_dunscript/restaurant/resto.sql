--Crée la base de données si elle n'existe pas et la sélectionne pour utilisation.
DROP DATABASE IF EXISTS restaurant;
CREATE DATABASE IF NOT EXISTS restaurant;
USE restaurant;

--Crée la table client.
CREATE TABLE client(
id_client INT PRIMARY KEY,
nom VARCHAR(50),
prenom VARCHAR(50),
email VARCHAR(100)
);
--Crée la table Commande.
CREATE TABLE commande (
id_commande INT PRIMARY KEY,
id_client INT,
date_commande DATE,
total DECIMAL(10,2),
FOREIGN KEY (id_client) REFERENCES client(id_client)
);

--Suppression puis recréation de la table catégorie.
DROP TABLE IF EXISTS Categorie;
CREATE TABLE categorie(
id_categorie INT PRIMARY KEY,
nom_categorie VARCHAR(50)
);

-- Creé la table Plat.
CREATE TABLE plat(
id_plat INT PRIMARY KEY,
nom_plat VARCHAR(50),
id_categorie INT,
prix DECIMAL (10,2),
FOREIGN KEY (id_categorie) REFERENCES categories(id_categorie)
);

--Données pour la table 'Client'.
INSERT INTO client (id_client, nom, prenom, email)VALUES
(1, 'Martin', 'Lucie', 'lucie.martin@example.com'),
(2, 'Bernard', 'Julien', 'julien.bernard@example.com'),
(3, 'Thomas', 'Émilie', 'emilie.thomas@example.com'),
(4, 'Petit', 'Sophie', 'sophie.petit@example.com'),
(5, 'Robert', 'Christophe', 'christophe.robert@example.com');

--Données pour la table 'Categorie'.
INSERT INTO categorie (id_categorie, nom_categorie) VALUES
(1, 'Asiatique'),
(2, 'Burgers'),
(3, 'Grillades'),
(4, 'Pâtes'),
(5, 'Pizzas'),
(6, 'Salades'),
(7, 'Sandwich'),
(8, 'Vegan');

--Données pour la table 'plat'
INSERT INTO plat (id_plat, nom_plat, id_categorie, prix) VALUES
(1, 'Bouillon de nouilles au boeuf', 1, 12.50),
(1, 'Boeuf sauté', 1, 12.50),
(1, 'Nems', 1, 12.50),
(1, 'Sushis', 1, 12.50),
(2, 'Burger au bacon', 2, 18.90),
(2, 'Burger normand', 2, 18.90),
(2, 'Burger chicken', 2, 18.90),
(2, 'Burger boeuf', 2, 18.90),
(3, 'Ailes de poulet', 3, 6.50),
(3, 'Ribs', 3, 6.50),
(3, 'Émincés de boeuf aux courgettes grillées', 3, 6.50),
(3, 'Steak', 3, 6.50),
(4, 'Pâtes aux boulettes de boeuf', 4, 16.50),
(4, 'Pâtes au saumon', 4, 16.50),
(4, 'Pâtes carbonara', 4, 16.50),
(4, 'Pâtes aux épinards', 4, 16.50),
(5, 'Pizzas margherita', 5, 16.50),
(5, 'Pizzas au saumon', 5, 16.50),
(5, 'Pizzas orientale', 5, 16.50),
(5, 'Pizzas savoyarde', 5, 16.50),
(6, 'Salade de carottes', 6, 8.00),
(6, 'Salade niçoise', 6, 8.00),
(6, 'Salade de chef', 6, 8.00),
(6, 'Salade au thon cru', 6, 8.00),
(7, 'Sandwich chicken', 7, 3.75),
(7, 'Sandwich poulet', 7, 3.75),
(7, 'Sandwich jambon', 7, 3.75),
(7, 'Sandwich salami', 7, 3.75),
(8, 'Boulettes de légumes', 8, 9.75),
(8, 'Burger', 8, 9.75),
(8, 'Taboulé', 8, 9.75),
(8, 'Salade de pois chiche', 8, 9.75);

--Données pour la table 'Commande'
INSERT INTO commande (id_commande, id_client, date_ommande, total) VALUES
(1, 1, '2023-09-01', 45.90),
(2, 2, '2023-09-01', 24.25),
(3, 3, '2023-09-01', 19.75),
(4, 4, '2023-09-01', 34.75),
(5, 5, '2023-09-01', 22.50);


