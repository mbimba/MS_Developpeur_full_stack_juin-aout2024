-- Ecrire des requêtes d'interrogation de la base de données
-- Vous devez écrire les requêtes suivantes:
	-- Afficher la liste des commandes ( la liste doit faire apparaitre la date, les informations du client, le plat et le prix )






-- Par exemple, si l'on veut sélectionner tous les plats dans la table plat, on écrit la requête SQL suivante :
SELECT * FROM plat;
-- 
SELECT * FROM plat WHERE id_categorie = 'Pizza';

-- 
SELECT * FROM plat WHERE id_categorie = ':id_categorie';

-- AFficher les commandes dont les quantités son supérieures à 3.

SELECT * FROM commande WHERE  quantite > '3';





-- Ecrire des requêtes de modification de la base de données

-- 1. Ecrivez une requête permettant de supprimer les plats non actif de la base de données



-- 2. Ecrivez une requête permettant de supprimer les commandes avec le statut livré


-- Supprimer des plats qui ont été ajouté: suppression groupée
delete from plat
where id IN (32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61);

-- Supprimer des catégories qui ont été ajouté: suppression groupée
delete from categorie 
where id IN (15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36);