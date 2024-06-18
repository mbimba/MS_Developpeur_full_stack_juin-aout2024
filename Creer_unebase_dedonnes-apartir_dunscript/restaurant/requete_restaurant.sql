-- 1. Sélectionner toutes les colonnes de la table client.
SELECT * FROM client;

-- 2. Sélectionner le nom et l'email des clients dont le nom commence par "P".
SELECT nom, email FROM client WHERE nom LIKE 'P%';

-- 3. Sélectionner le nombre total de clients.
SELECT COUNT(*) AS nombre_clients FROM client;

-- 4. Sélectionner le plat le moins cher.
SELECT * FROM plat ORDER BY prix LIMIT 1;

-- 5. Sélectionner les plats dont le prix est supérieur à 10 euros et dans une catégorie spécifique.
SELECT * FROM plat WHERE prix > 10 AND id_categorie = (SELECT id_categorie FROM categorie WHERE nom_categorie = 'Burgers');

-- 6. Sélectionner les commandes effectuées par un client donné (ID 1).
SELECT * FROM commande WHERE id_client = 1;

-- 7. Sélectionner le montant total de toutes les commandes.
SELECT SUM(total) AS montant_total FROM commande;

-- 8. Mettre à jour le nom d'un client (ID 1).
UPDATE client SET nom = 'Nouveau Nom' WHERE id_client = 1;

-- 9. Insérer un nouveau plat dans la table plat.
INSERT INTO plat (id_plat,nom_plat, prix, id_categorie) VALUES (34,'Nouveau Plat', 15.99, (SELECT id_categorie FROM categorie WHERE nom_categorie = 'asiatique'));

-- 10. Supprimer un plat de la table (ID 33 et ID 34.
DELETE FROM plat WHERE id_plat = 33;
DELETE FROM plat WHERE id_plat = 34;

-- 11. Sélectionner les plats en ordre décroissant de prix.
SELECT * FROM plat ORDER BY prix DESC;

-- 12. Sélectionner les clients ayant passé une commande avec un montant supérieur à 10 euros.
SELECT DISTINCT c.* FROM client c INNER JOIN commande cm ON c.id_client = cm.id_client WHERE cm.total > 10;

-- 13. Sélectionner les plats avec leur catégorie respective.
SELECT p.nom_plat AS plat, c.nom_categorie AS categorie FROM plat p INNER JOIN categorie c ON p.id_categorie = c.id_categorie;

-- 14. Sélectionner les clients n'ayant jamais passé de commande.
SELECT * FROM client WHERE id_client NOT IN (SELECT DISTINCT id_client FROM commande);

-- 15. Sélectionner les plats et leur nombre de commandes respectif, triés par nombre de commandes décroissant.

SELECT p.nom_plat AS plat, COUNT(cm.id_commande) AS nombre_commandes FROM plat p LEFT JOIN commande cm ON p.id_plat = cm.id_plat GROUP BY p.id_plat ORDER BY nombre_commandes DESC;

