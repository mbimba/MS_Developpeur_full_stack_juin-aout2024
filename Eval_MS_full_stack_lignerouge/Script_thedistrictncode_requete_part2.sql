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
	-- Ecrivez une requête permettant de supprimer les commandes avec le statut livré
	-- Ecrivez un script sql permettant d'ajouter une nouvelle catégorie et un plat dans cette nouvelle catégorie.
	-- Ecrivez une requête permettant d'augmenter de 10% le prix des plats de la catégorie 'Pizza'


