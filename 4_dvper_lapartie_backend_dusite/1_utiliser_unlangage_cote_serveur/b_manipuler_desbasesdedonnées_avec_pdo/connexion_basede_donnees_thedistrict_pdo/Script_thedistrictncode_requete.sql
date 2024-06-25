-- Ecrire des requêtes d'interrogation de la base de données
-- Vous devez écrire les requêtes suivantes:
	-- Afficher la liste des commandes ( la liste doit faire apparaitre la date, les informations du client, le plat et le prix )






-- Par exemple, si l'on veut sélectionner tous les plats dans la table plat, on écrit la requête SQL suivante :
SELECT * FROM plat;
-- 
SELECT * FROM plat WHERE id_categorie = 'Pizza';

-- 
SELECT * FROM plat WHERE id_categorie = ':id_categorie';





-- Ecrire des requêtes de modification de la base de données

-- 1. Ecrivez une requête permettant de supprimer les plats non actif de la base de données



-- 2. Ecrivez une requête permettant de supprimer les commandes avec le statut livré