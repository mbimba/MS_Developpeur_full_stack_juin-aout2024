-- Ecrire des requêtes d'interrogation de la base de données

		-- Afficher la liste des commandes ( la liste doit faire apparaitre la date, les informations du client, le plat et le prix )
	SELECT 
	    c.date_commande,
	    c.nom_client,
	    c.telephone_client,
	    c.email_client,
	    c.adresse_client,
	    p.libelle AS plat_libelle,
	    p.prix AS plat_prix
	FROM commande c
	JOIN plat p ON c.id_plat = p.id;

		-- Afficher la liste des plats en spécifiant la catégorie
	SELECT 
	    p.libelle AS plat_libelle,
	    p.description,
	    p.prix,
	    c.libelle AS categorie_libelle
	FROM plat p
	JOIN categorie c ON p.id_categorie = c.id;

	-- Liste des plats les plus vendus par ordre décroissant
	SELECT 
	    p.libelle AS plat_libelle,
	    SUM(c.quantite) AS quantite_vendue
	FROM commande c
	JOIN plat p ON c.id_plat = p.id
	GROUP BY p.libelle
	ORDER BY quantite_vendue DESC;

	-- Le plat le plus rémunérateur
	SELECT 
	    p.libelle AS plat_libelle,
	    SUM(c.quantite * p.prix) AS chiffre_affaire
	FROM commande c
	JOIN plat p ON c.id_plat = p.id
	GROUP BY p.libelle
	ORDER BY chiffre_affaire DESC
	LIMIT 1;

	-- Liste des clients et le chiffre d'affaires généré par client (par ordre décroissant)
	SELECT 
	    c.nom_client,
	    SUM(co.total) AS chiffre_affaire
	FROM commande co
	JOIN client c ON co.id_client = c.id
	GROUP BY c.nom_client
	ORDER BY chiffre_affaire DESC;

-- Ecrire des requêtes de modification de la base de données
	-- Ecrivez une requête permettant de supprimer les plats non actif de la base de données
	DELETE FROM plat
	WHERE active = 0;
	-- Ecrivez une requête permettant de supprimer les commandes avec le statut livré
DELETE FROM commande
WHERE etat = 'Livrée';

-- Ecrire une requête pour ajouter manuellement les commandes qui ont été suprrimées

 INSERT INTO commande (id_plat, quantite, total, date_commande, etat, nom_client, telephone_client, email_client, adresse_client)
VALUES
  (4, 4, 16.00, '2020-11-30 03:52:43', 'Livrée', 'Kelly Dillard', '7896547800', 'kelly@gmail.com', '308 Post Avenue'),
  (5, 2, 20.00, '2020-11-30 04:07:17', 'Livrée', 'Thomas Gilchrist', '7410001450', 'thom@gmail.com', '1277 Sunburst Drive'),
  (5, 1, 10.00, '2021-05-04 01:35:34', 'Livrée', 'Martha Woods', '78540001200', 'martha@gmail.com', '478 Avenue Street'),
  (9, 1, 7.00, '2021-07-20 06:10:37', 'Livrée', 'Charlie', '7458965550', 'charlie@gmail.com', '3140 Bartlett Avenue'),
  (16, 4, 12.00, '2021-07-20 07:11:06', 'Livrée', 'Jonathan Caudill', '7410256996', 'jonathan@gmail.com', '1119 Kinney Street');

-- Supprimer le doublon de la commande de Claudia avec son id_plat=16
 DELETE FROM commande
WHERE id_plat = 16 AND etat = 'Livrée' AND nom_client = 'Claudia Hedley';


-- Écrire une requête pour supprimer les doublons de noms de clients dans les commandes
DELETE FROM commande
WHERE id IN (
  SELECT id
  FROM commande
  GROUP BY nom_client
  HAVING COUNT(*) > 1
);

-- écrire une demande pour modifier l'adresse du client d'une commande: l'adresse de Jonathan Caudill
UPDATE commande
SET adresse_client = 'Limer Street'
WHERE id_plat = 16;



	-- Ecrivez un script sql permettant d'ajouter une nouvelle catégorie et un plat dans cette nouvelle catégorie.
-- Insertion d'une nouvelle catégorie: etape1
INSERT INTO categorie (libelle, image, active)
VALUES ('Nouvelle catégorie', 'image_categorie.jpg', 1);
-- Récupération de l'ID de la catégorie nouvellement créée: etape2
SELECT id FROM categorie WHERE libelle = 'Nouvelle catégorie';
-- Insertion d'un nouveau plat dans la catégorie nouvellement créée: etape3
INSERT INTO plat (libelle, description, prix, image, id_categorie, active)
VALUES ('Nouveau plat', 'Description du nouveau plat', 15.50, 'image_plat.jpg', (SELECT id FROM categorie WHERE libelle = 'Nouvelle catégorie'), 1);


	-- Ecrivez une requête permettant d'augmenter de 10% le prix des plats de la catégorie 'Pizza'
UPDATE plat
SET prix = prix * 1.10
WHERE id_categorie = (SELECT id FROM categorie WHERE libelle = 'Pizza');

