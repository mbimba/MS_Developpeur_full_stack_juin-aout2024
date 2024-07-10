
<?php  
      // Récupération des 6 catégories les plus populaires
$stmt = $conn->prepare("	SELECT categorie.libelle, COUNT(*) AS nombre_ventes FROM commande JOIN plat ON commande.id_plat = plat.id JOIN categorie ON plat.id_categorie = categorie.id GROUP BY categorie.libelle ORDER BY nombre_ventes DESC LIMIT 6;");
$stmt->execute();
$categories = $stmt->fetchAll();

// Récupération des 3 plats les plus vendus
$stmt = $conn->prepare("SELECT plat.libelle, COUNT(*) AS nombre_ventes FROM commande JOIN plat ON commande.id_plat = plat.id GROUP BY plat.libelle ORDER BY nombre_ventes DESC LIMIT 3;");
$stmt->execute();
$plats = $stmt->fetchAll();
?>