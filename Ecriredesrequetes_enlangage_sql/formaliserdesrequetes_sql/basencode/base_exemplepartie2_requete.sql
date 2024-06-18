-- EXERCICE - LA BASE EXEMPLE
-- JOINTURES
	-- Rechercher le prénom des employés et le numéro de la région de leur département.
SELECT e.prenom, d.noregion 
FROM employe e
JOIN dept d ON e.nodep = d.nodept;
	-- Rechercher le numéro du département, le nom du département, le nom des employés classés par numéro de département (renommer les tables utilisées).
SELECT d.nodept, d.nom, e.nom, e.prenom
FROM employe e
JOIN dept d ON e.nodep = d.nodept
ORDER BY d.nodept;
-- Rechercher le nom des employés du département Distribution.
SELECT prenom, nom
FROM employe
WHERE nodep IN (SELECT nodept FROM dept WHERE nom = 'distribution');

-- AUTO-JOINTURES
	-- Rechercher le nom et le salaire des employés qui gagent plus que leur patron, et le nom et le salaire de leur patron.
	  