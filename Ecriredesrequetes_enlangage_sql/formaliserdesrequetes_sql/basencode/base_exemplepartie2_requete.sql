-- EXERCICE - LA BASE EXEMPLE
--	 PAGE 1 SUR 7
-- JOINTURES
	-- Rechercher le prénom des employés et le numéro de la région de leur département: 1ère possibilité
SELECT e.prenom, d.noregion 
FROM employe e
JOIN dept d ON e.nodep = d.nodept;
	-- 	-- Rechercher le prénom des employés et le numéro de la région de leur département: 2ème possibilité
SELECT e.prenom, d.noregion 
FROM employe e
LEFT JOIN dept d ON e.nodep = d.nodept;
	-- Rechercher le numéro du département, le nom du département, le nom des employés classés par numéro de département.
SELECT d.nodept, d.nom, e.nom, e.prenom
FROM employe e
JOIN dept d ON e.nodep = d.nodept
ORDER BY d.nodept;
	-- Rechercher le numéro du département, le nom du département, le nom des employés classés par numéro de département (renommer les tables utilisées).
SELECT 
  d.nodept AS departement_numero, 
  d.nom AS departement_nom, 
  e.nom AS employe_nom
FROM 
  employe e
  JOIN dept d ON e.nodep = d.nodept
ORDER BY d.nodept;
 
	-- Rechercher le nom des employés du département Distribution.
SELECT prenom, nom
FROM employe
WHERE nodep IN (SELECT nodept FROM dept WHERE nom = 'distribution');

--	 PAGE 2 SUR 7

-- AUTO-JOINTURES
	-- Rechercher le nom et le salaire des employés qui gagent plus que leur patron, et le nom et le salaire de leur patron.
SELECT 
  e1.nom AS employe_nom, 
  e1.salaire AS employe_salaire, 
  e2.nom AS patron_nom, 
  e2.salaire AS patron_salaire
FROM 
  employe e1
  JOIN employe e2 ON e1.nosup = e2.noemp
WHERE 
  e1.salaire > e2.salaire;
 
 --	 PAGE 3 SUR 7
 
 -- SOUS REQUÊTES: Le résultat d'une requête peut servir dans une clause de restriction d'une autre requête, on parlera alors de sous-requête imbriquée.
 	-- Rechercher le nom et le titre des employés qui ont le même titre que Amartakaldire: 1ère possibilité
 SELECT nom, titre FROM employe
WHERE titre = (SELECT titre FROM employe WHERE nom = 'amartakaldire');
 	-- Rechercher le nom et le titre des employés qui ont le même titre que Amartakaldire: 2ème possibilité
 SELECT nom, titre FROM employe
 WHERE titre IN (SELECT titre FROM employe WHERE nom = 'amartakaldire');

	-- Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus qu'un seul employé du département 31, classés par numéro de département et salaire.
SELECT e.nom, e.salaire, e.nodep FROM employe e
WHERE e.salaire > (
SELECT MAX(salaire)
    FROM employe
    WHERE nodep = 31 AND salaire < (SELECT MAX(salaire)
        FROM employe
        WHERE nodep = 31)
        )
ORDER BY e.nodep, e.salaire DESC;

	-- Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus que tous les employés du département 31, classés par numéro de département et salaire.
SELECT e.nom, e.salaire, e.nodep FROM employe e
WHERE e.salaire > 
(SELECT MAX(salaire)
FROM employe
WHERE nodep = '31')
ORDER BY e.nodep, e.salaire DESC;
	-- Rechercher le nom et le titre des employés du service 31 qui ont un titre que l'on trouve dans le département 32.
SELECT e.nom, e.titre FROM employe e
WHERE e.nodep = '31' 
AND e.titre IN (SELECT titre FROM employe WHERE nodep = '32');
	-- Rechercher le nom et le titre des employés du service 31 qui ont un titre que l'on ne trouve pas dans le département 32.
SELECT e.nom, e.titre FROM employe e
WHERE e.nodep = '31' 
AND e.titre NOT IN (SELECT titre FROM employe WHERE nodep = '32');
	-- Rechercher le nom, le titre et le salaire des employés qui ont le même titre et le même salaire que Fairant.
SELECT e.nom, e.titre, e.salaire FROM employe e
WHERE e.titre = (SELECT titre FROM employe WHERE nom = 'fairent')
AND e.salaire = (SELECT salaire FROM employe WHERE nom = 'fairent');


 --	 PAGE 4 SUR 7

-- REQUÊTES EXTERNES: LEFT JOIN, RIGTH JOIN
	-- Rechercher le numéro de département, le nom du département, le nom des employés, en affichant aussi les départements dans lesquels il n'y a personne, classés par numéro de département,
SELECT d.nodept, d.nom, e.nom FROM dept d
LEFT JOIN employe e ON d.nodept = e.nodep
ORDER BY d.nodept;

 --	 PAGE 5 SUR 7

-- UTILISATION DE FONCTIONS DE GROUPE
	-- Exemple . Moyenne. Par exemple pour rechercher la moyenne des salaires des secrétaires :
SELECT AVG(salaire)
FROM employe e 
WHERE titre = 'secrétaire';
	-- Si vous recherchez le nom et la moyenne des salaires des employés (cette phrase a-t-elle d'ailleurs un sens ?), vous allez essayer :
SELECT nom, AVG(salaire) FROM employe;
	-- Par contre avec deux SELECT imbriqués on peut rechercher le nom et le salaire des employés dont le salaire est le plus grand.
SELECT nom, salaire FROM employe 
WHERE salaire = (SELECT MAX (salaire)
FROM employe);
	  
 --	 PAGE 6 SUR 7

-- LES GROUPES
	-- Pour rechercher la moyenne des salaires de chaque département on écrira :
SELECT nodept, AVG(salaire) FROM employe
GROUP BY nodept;

	-- 1. Calculer le nombre d'employés de chaque titre: 1ère proposition
SELECT titre, 
COUNT(noemp) AS nombre_employes
FROM employe
GROUP BY titre
ORDER BY nombre_employes DESC;
 	-- 1. Calculer le nombre d'employés de chaque titre: 2ème proposition
SELECT e.titre, 
COUNT(e.noemp) AS nombre_employes
FROM (SELECT DISTINCT titre FROM employe) AS t
LEFT JOIN employe e ON t.titre = e.titre
GROUP BY t.titre
ORDER BY nombre_employes DESC;

	-- 2. Calculer la moyenne des salaires et leur somme, par région: 1ère possibilité
SELECT noregion, AVG(salaire) AS moyenne_salaire, SUM(salaire) AS somme_salaire
FROM employe e
JOIN dept d ON e.nodep = d.nodept
GROUP BY noregion
ORDER BY moyenne_salaire DESC;
 	-- 2. Calculer la moyenne des salaires et leur somme, par région: 2ème possibilité: si vous voulez afficher également les régions qui n'ont pas d'employés, vous pouvez utiliser une jointure externe gauche avec la table dept et la table employe, comme ceci :
SELECT d.noregion, AVG(e.salaire) AS moyenne_salaire, SUM(e.salaire) AS somme_salaire
FROM dept d
LEFT JOIN employe e ON d.nodept = e.nodep
GROUP BY d.noregion
ORDER BY moyenne_salaire DESC;


 --	 PAGE 7 SUR 7

-- LA CLAUSE HAVING: La clause WHERE permet d'écrire une restriction au niveau ligne, la clause HAVING permet d'écrire une restriction au niveau groupe.
	-- Pour rechercher les titres et le nombre d'employés pour les titres représentés plus de 2 fois, on écrira :
SELECT titre, COUNT(*) FROM employe e 
GROUP BY titre
HAVING COUNT(*) > 2;

	-- 3. Afficher les numéros des départements ayant au moins 3 employés.
SELECT nodep, 
COUNT(noemp) AS nombre_employes
FROM employe
GROUP BY nodep
HAVING COUNT(noemp) >= 3;

	-- 4. Afficher les lettres qui sont l'initiale d'au moins trois employés.
SELECT LEFT(nom, 1) AS initiale_nom, 
COUNT(noemp) AS nombre_employes
FROM employe
GROUP BY initiale_nom
HAVING COUNT(noemp) >= 3;

	-- 5. Rechercher le salaire maximum et le salaire minimum parmi tous les salariés et l'écart entre les deux.
SELECT MAX(salaire) AS salaire_maximum, MIN(salaire) AS salaire_minimum, MAX(salaire) - MIN(salaire) AS ecart_salaire
FROM employe;

	-- 6. Rechercher le nombre de titres différents.
SELECT COUNT(DISTINCT titre) AS nombre_de_titres
FROM employe;

	-- 7. Pour chaque titre, compter le nombre d'employés possédant ce titre.
		-- 1ère proposition
SELECT titre, COUNT(*) as nombre_employes FROM employe
GROUP BY titre
HAVING COUNT(*) > 1;		-- 'Le HAVING La clause' est utilisée pour filtrer les résultats et ne montrer que les titres qui ont plus d'un employé.
		-- 2ème proposition
SELECT titre, COUNT(*) as nombre_employes FROM employe -- Pour montrer tous les titres, y compris ceux qui n'ont qu'un seul employé, on peut supprimer le 'HAVING clause'.
GROUP BY titre;


	-- 8. Pour chaque nom de département, afficher le nom du département et le nombre d'employés.
SELECT d.nom, COUNT(e.noemp) as nombre_employes FROM employe e
JOIN dept d ON e.nodep = d.nodept
GROUP BY d.nom;

	-- 9. Rechercher les titres et la moyenne des salaires par titre dont la moyenne est supérieure à la moyenne des salaires des Représentants.
SELECT titre, AVG(salaire) as moyenne_salaire FROM employe
WHERE titre != 'représentant'
GROUP BY titre
HAVING AVG(salaire) > (SELECT AVG(salaire) FROM employe
WHERE titre = 'représentant');

	-- 10. Rechercher le nombre de salaires renseignés et le nombre de taux de commission renseignés.
SELECT
COUNT(DISTINCT CASE WHEN tauxcom IS NOT NULL THEN noemp END) as nombre_tauxcom,
COUNT(DISTINCT CASE WHEN tauxcom IS NULL THEN noemp END) as nombre_salaires
FROM employe;




