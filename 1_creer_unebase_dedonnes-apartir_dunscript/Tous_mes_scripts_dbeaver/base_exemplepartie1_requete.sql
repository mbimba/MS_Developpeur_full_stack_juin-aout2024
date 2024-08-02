-- PAGE 4 SUR 9
	-- 1. Afficher toutes les informations concerant les employés. 
Select * from employe;		-- Le caractère "*" permet de demander l'affichage de toutes les colonnes d'une table.

	-- 2. Afficher toutes les informations concerant les départements. 
Select nodep from employe;

	-- 3. Afficher le nom, la date d'embauche, le numéro du supérieur, le numéro de département et le salaire de tous les employés. 
SELECT nom, dateemb, nosup, nodep, salaire FROM employe;


-- PAGE 5 SUR 9

	-- On peut cependant changer ces titres en utilisant AS. La commande
SELECT nom FROM employe; -- OU
SELECT nom AS Employe FROM employe;
	-- Si vous voulez utiliser un titre de colonne qui contient autre chose que des lettres non accentuées (des espaces, des ponctuations, des accents, etc.) il faut l'entourer par des guillemets (« " »). On écrira ainsi :
SELECT nom AS "Nom de l'employé" FROM employe;

	-- SUPPRESSION DES DOUBLONS: Il peut être utile de supprimer les doublons, d'où utilisation de la clause DISTINCT. Elle a pour effet de n'afficher qu'une seule fois les lignes qui seraient semblables à l'affichage.
			-- On l'utilise sous la forme SELECT DISTINCT ...
	-- 4. Afficher le titre de tous les employés.
SELECT titre FROM employe; 
	-- 5. Afficher les différentes valeurs des titres des employés.
SELECT DISTINCT titre FROM employe; 
	-- RESTRICTIONS: Les clauses de restriction s'écrivent derrière WHERE. Elles permettent de sélectionner les lignes à afficher.
	-- 6. Afficher le nom, le numéro d'employé et le numéro du département des employés dont le titre est « Secrétaire » .
SELECT nom, noemp, nodep FROM employe
WHERE titre = 'secrétaire';
	-- 7. Afficher le nom et le numéro de département dont le numéro de département est supérieur à 40.
SELECT nom, nodep FROM employe
WHERE nodep > '40';

-- PAGE 6 SUR 9

-- RESTRICTION EN COMPARANT LES COLONNES ENTRE ELLES: La restriction peut mettre en jeu la comparaison de deux ou plusieurs colonnes entre elles. Il suffit de les appeler par leurs noms.
	-- 8. Afficher le nom et le prénom des employés dont le nom est alphabétiquement antérieur au prénom.
SELECT nom, prenom FROM employe		-- On utilise l'opérateur < pour comparer les valeurs de la colonne nom et prenom. Comme les noms et prénoms sont des chaînes de caractères, l'opérateur < compare les valeurs en fonction de l'ordre alphabétique. Ainsi, nous sélectionnons les employés dont le nom est alphabétiquement antérieur au prénom.
WHERE nom < 'prenom';
	-- 9. Afficher le nom, le salaire et le numéro du département des employés dont le titre est « Représentant », le numéro de département est 35 et le salaire est supérieur à 20000
SELECT nom, salaire, nodep FROM employe
WHERE titre = 'représentant' AND nodep = 35 AND salaire > 20000;
	-- 10. Afficher le nom, le titre et le salaire des employés dont le titre est « Représentant » ou dont le titre est « Président ».
SELECT nom, titre, salaire FROM employe
WHERE titre = 'représentant' OR titre = 'président';

	-- 10. Autre possibilité
SELECT nom, titre, salaire FROM employe
WHERE (titre= 'représentant' OR titre = 'président');
	-- 11. Afficher le nom, le titre, le numéro de département, le salaire des employés du département 34, dont le titre est « Représentant » ou « Secrétaire ».
SELECT nom, titre, nodep, salaire FROM employe
WHERE nodep = 34 AND (titre = 'représentant' OR titre= 'secrétaire');
	-- 12. Afficher le nom, le titre, le numéro de département, le salaire des employés dont le titre est Représentant, ou dont le titre est Secrétaire dans le département numéro 34.
SELECT nom, titre, nodep, salaire FROM employe
WHERE (titre = 'représentant' OR titre= 'secrétaire') AND nodep = 34;
	-- 13. Afficher le nom, et le salaire des employés dont le salaire est compris entre 20000 et 30000.
SELECT nom, salaire FROM employe
WHERE salaire BETWEEN 20000 AND 30000;

-- PAGE 7 SUR 9

-- NÉGATION, RECHERCHE APPROCHÉE
	-- 15. Afficher le nom des employés commençant par la lettre « H ».
SELECT nom FROM employe
WHERE nom LIKE 'H%';
	-- 16. Afficher le nom des employés se terminant par la lettre « n ».
SELECT nom FROM employe
WHERE nom LIKE '%n';
	-- 17. Afficher le nom des employés contenant la lettre « u » en 3ème position.
SELECT nom FROM employe			-- On peut utiliser la fonction SUBSTR pour extraire la 3ème lettre du nom et la comparer à la lettre « u ».
WHERE SUBSTR(nom, 3, 1) = 'u';
	-- 18. Afficher le salaire et le nom des employés du service 41 classés par salaire croissant.
SELECT nom, salaire FROM employe 
WHERE nodep=41
ORDER BY salaire ASC ; 
	-- 19. Afficher le salaire et le nom des employés du service 41 classés par salaire décroissant.
SELECT nom, salaire FROM employe 
WHERE nodep=41
ORDER BY salaire DESC ; 
	-- 20. Afficher le titre, le salaire et le nom des employés classés par titre croissant et par salaire décroissant.
SELECT titre, salaire, nom FROM employe 
ORDER BY titre ASC, salaire DESC; 

-- PAGE 8 SUR 9

-- VALEURS NON RENSEIGNÉES
	-- 21. Afficher le taux de commission, le salaire et le nom des employés classés par taux de commission croissante.
select tauxcom, salaire, nom FROM employe 	-- En SQL il existe une valeur correspondant à la valeur vide. C'est l'équivalent de la valeur Null de certains langages de programmation (comme java ou python). C'est la valeur qu'ont les champs non renseignés. Elle s'appelle également NULL. Cette valeur n'est pas prise en compte dans les classements.
ORDER BY tauxcom ASC;
	-- 22. Afficher le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission n'est pas renseigné
SELECT nom, salaire, tauxcom, titre FROM employe
WHERE tauxcom IS NULL ;   -- "IS NULL" est utilisé pour les valeurs ne sont pas renseignées.
	-- 23. Afficher le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission est renseigné
SELECT nom, salaire, tauxcom, titre FROM employe 
WHERE tauxcom IS NOT NULL ;
	-- 24. Afficher le nom, le salaire, le taux de commission, le titre des employés dont le taux de commission est inférieur à 15.
SELECT nom, salaire, tauxcom, titre FROM employe 
WHERE tauxcom < 15 ;
	-- 25. Afficher le nom, le salaire, le taux de commission, le titre des employés dont le taux de commission est supérieur à 15.
SELECT nom, salaire, tauxcom, titre FROM employe 
WHERE tauxcom > 15 ;

-- PAGE 9 SUR 9

-- EXPRESSIONS ARITHMÉTIQUES: Des expressions arithmétiques peuvent être utilisées après : SELECT, WHERE, et ORDER BY.
	-- 26. Afficher le nom, le salaire, le taux de commission et la commission des employés dont le taux de commission n'est pas nul. (la commission est calculée en multipliant le salaire par le taux de commission)
SELECT nom, salaire, tauxcom, salaire * tauxcom AS commission FROM employe 
WHERE tauxcom IS NOT NULL ;
	-- 27. Afficher le nom, le salaire, le taux de commission, la commission des employés dont le taux de commission n'est pas nul, classé par taux de commission croissant.
SELECT nom, salaire, tauxcom, salaire * tauxcom AS commission FROM employe 
WHERE tauxcom IS NOT NULL
ORDER BY tauxcom ASC ;

-- CONCATÉNATION
	-- 28. Afficher le nom et le prénom (concaténés) des employés. Renommer les colonnes
SELECT CONCAT(nom, prenom) FROM employe;
				-- Colonne renommée
SELECT CONCAT(nom, prenom) AS "Nom et prénom concaténé"
FROM employe;

-- CHAÎNES DE CARACTÈRES
	-- 29. Afficher les 5 premières lettres du nom des employés.
SELECT SUBSTR(nom, 1, 5) FROM employe ;
	-- 30. Afficher le nom et le rang de la lettre « r » dans le nom des employés.
SELECT nom, LOCATE('r', nom) FROM employe; 
	-- 31. Afficher le nom, le nom en majuscule et le nom en minuscule de l'employé dont le nom est Vrante.
				-- Colonne renommée
SELECT nom, UPPER(nom) AS "Nom en majuscule", LOWER(nom) AS "Nom en minuscule"
FROM employe
WHERE nom = 'Vrante';
				-- Colonne non renommée
SELECT nom, UPPER(nom), LOWER(nom)
FROM employe
WHERE nom = 'Vrante';
	-- 32. Afficher le nom et le nombre de caractères du nom des employés.
SELECT nom, LENGTH (nom)
FROM employe;
