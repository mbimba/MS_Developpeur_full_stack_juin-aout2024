-- SQL (Légèrement) avancé: Jointures variées.
	-- INNER JOIN récupère les enregistrements correspondants dans les deux tables.
SELECT client.nom, commande.date_commande 
FROM client 
INNER JOIN commande ON client.id_client = commande.id_client;

	-- LEFT JOIN inclut tous les enregistrements de la table de gauche et les correspondants de la table de droite.
SELECT client.nom, commande.date_commande 
FROM client  
LEFT JOIN commande ON client.id_client = commande.id_client;

	-- RIGTH JOIN n'est pas supporté dans toutes les bases de données, donc vérifiez la compatibilité.
	-- Elle inclut tous les enregistrements de la table de droite et les correspondants de la table de gauche.
	-- Si votre système de gestion de base de données ne supporte pas RIGHT JOIN, utilisez LEFT JOIN avec l'ordre des tables inversés.
SELECT commande.date_commande , client.nom 
FROM commande  
LEFT JOIN client ON commande.id_client = client.id_client;

	-- CROSS JOIN produit le produit cartésien des deux tables.
SELECT client.nom, plat.nom_plat 
FROM client  
CROSS JOIN plat;

-- Fonctions SQL avancées (GROUP BY, HAVING, DISTINCT)
	-- Utilisation de GROUP BY avec HAVING pour filtrer les résultats.
SELECT categorie.nom_categorie, COUNT(*) AS nombre_plats
FROM plat 
JOIN categorie ON plat.id_categorie = categorie.id_categorie 
GROUP BY categorie.nom_categorie 
HAVING COUNT(*) > 5;

	-- Utilisation de DISTINCT Pour éviter les doublons.
SELECT DISTINCT client.prenom 
FROM client;

-- Fonctions de Date et d'Heure.
	-- Extrait l'année de la dae de commande.
SELECT id_commande, YEAR(date_commande) AS annee_commande
FROM commande;

	-- Calcule la différence en jours entre deux dates.
SELECT DATEDIFF(CURDATE(), date_commande) AS jours_depuis_commande
FROM commande;

-- Utilisation de fonctions d'Aggrégation (SUM, AVG, MIN, MAX)
	-- Calcule le total des ventes, la commande moyenne, le montant maximum et minimum des commandes.
SELECT SUM(total) AS total_ventes, AVG(total) AS moyenne_commande, MIN(total) AS commande_min, MAX(total) AS commande_max
FROM commande;

-- Sous-requêtes et Opérations sur les Sets (IN, NOT IN, EXISTS)
	-- Utilise IN pour sélectionner les clients ayant passé une commande de plus de 30 euros.
SELECT nom, prenom FROM client c WHERE id_client IN (SELECT id_client FROM commande WHERE total > 30);

-- Insertions, Mises à jour, Suppressions de données
	-- 	Insertion d'un nouveau client.
INSERT INTO client (id_client, nom, prenom, email) VALUES (101, 'Dupont', 'Jean', 'jean.dupont@example.com');

	-- Mise à jour de l'email dun client.
UPDATE client SET email = 'nouveau.email@example.com' WHERE id_client = 101;

	-- Suppression d'un client.
DELETE FROM client WHERE id_client =101;








