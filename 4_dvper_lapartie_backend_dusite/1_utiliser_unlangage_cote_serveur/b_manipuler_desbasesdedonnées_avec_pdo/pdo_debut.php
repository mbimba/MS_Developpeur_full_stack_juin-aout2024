<?php
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "thedistrict";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès à la base de données";
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}

//ou, si vous utilisez une fonction, n'oubliez pas le `return`:

function connect_database(){

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // configurer le mode d'erreur PDO pour générer des exceptions
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connecté avec succès à la base de données";

        return $conn;

    } catch(PDOException $e) {
        echo "Erreur de connexion à la base de données: " . $e->getMessage();
    }

    }

 ?>









<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon début avec PDO</title>
</head>
<body>
<h1>Mon début avec PDO</h1>

<!-- Voici comment vous pouvez exécuter cette requête en utilisant le connecteur PDO : SELECT * FROM plat;-->
<h4> Voici comment vous pouvez exécuter cette requête en utilisant le connecteur PDO : SELECT * FROM plat </h4>
<?php

$stmt = $conn->query("SELECT * FROM plat");

while ($row = $stmt->fetch()) {
    echo $row['libelle'] . "<br>";
}
# ou
$plats = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach($plats as $plat) {
    echo $row->libelle . "<br>";
}
?>

<!-- Les requêtes préparées: Voici, par exemple, comment on prépare une requête pour sélectionner tous les plats d'une catégorie spécifique en utilisant PDO :-->
<h2> Les requêtes préparées: Voici, par exemple, comment on prépare une requête pour sélectionner tous les plats d'une catégorie spécifique en utilisant PDO : <h2> 
<?php
$id_categorie = 1;
$stmt = $conn->prepare("SELECT * FROM plat WHERE id_categorie = :id_categorie");
$stmt->bindValue(':id_categorie', $id_categorie);
$stmt->execute();

while ($row = $stmt->fetch()) {
    echo $row['libelle'] . "<br>";
}
?>


<!-- Utilisation de bindParam() et bindValue() -->
 <h2> Utilisation de bindParam() et bindValue() </h2>
<?php
// $stmt = $pdo->prepare("SELECT * FROM commande WHERE  quantite > :qty");
// $qty = 2; //c'est une donnée de type 'int' (entier)
// $stmt->bindParam(':cty', $cty, PDO::PARAM_INT);
// $stmt->execute();
?>
<br>

<h2>Utilisation de fetch() et fetchAll() pour récupérer les données </h2>
<!-- Voici un exemple de code qui utilise fetchAll() pour récupérer tous les plats dans la table plat : -->
 <p> <strong>  Voici un exemple de code qui utilise fetchAll() pour récupérer tous les plats dans la table plat :</strong> </p>
<?php
$stmt = $conn->query("SELECT * FROM plat");
$results = $stmt->fetchAll();

foreach ($results as $row) {
    echo $row['libelle'] . " - " . $row['prix'] . "<br>";
}
?>
<br>
<!-- Par exemple, si vous souhaitez récupérer les résultats d'une requête sous la forme d'un tableau associatif, vous pouvez utiliser le mode PDO::FETCH_ASSOC de la manière suivante : -->
<p> <strong> Par exemple, si vous souhaitez récupérer les résultats d'une requête sous la forme d'un tableau associatif, vous pouvez utiliser le mode PDO::FETCH_ASSOC de la manière suivante :</strong> </p>
<?php
// $stmt = $pdo->prepare("SELECT * FROM plat");
// $stmt->execute();
// $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Utilisation de transactions -->
<h2> Utilisation de transactions </h2>
<p> <strong> Voici un exemple de requête qui utilise une transaction pour ajouter une nouvelle catégorie à la table categorie et plusieurs nouveaux plats à la table plat : </strong> </p>


<?php
try {
            //$conn nous permettra d'accéder au connecteur PDO

            $conn->beginTransaction();

            // Ajouter une nouvelle catégorie
            $stmt = $conn->prepare("INSERT INTO categorie (libelle, image, active) VALUES (:libelle, :image, :active)");
            $stmt->bindValue(':libelle', 'Cuisine française');
            $stmt->bindValue(':image', 'new_cat.jpg');
            $stmt->bindValue(':active', 'Yes');
            $stmt->execute();
            $id_categorie = $conn->lastInsertId();

            // Ajouter plusieurs nouveaux plats
            $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
            $stmt->bindValue(':libelle', 'Gratin dauphinois');
            $stmt->bindValue(':description', 'Un plat hivernal traditionnellement composé de pommes de terre cuites en rondelles, crème fraîche, lait et noix de muscade');
            $stmt->bindValue(':prix', 13.50);
            $stmt->bindValue(':image', 'plat1.jpg');
            $stmt->bindValue(':active', 'Yes');
            $stmt->bindValue(':id_categorie', $id_categorie);
            $stmt->execute();
            $plat_id = $conn->lastInsertId();

            $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie)");
            $stmt->bindValue(':libelle', 'Ratatouille');
            $stmt->bindValue(':description', 'En véritable plat méditerranéen, la ratatouille est un ragoût mijoté de légumes du soleil et d’huile d’olive. Tomates, courgettes, aubergines, poivrons, oignons et ail composent la recette.');
            $stmt->bindValue(':prix', 10.00);
            $stmt->bindValue(':image', 'plat2.jpg');
            $stmt->bindValue(':active', 'Yes');
            $stmt->bindValue(':id_categorie', $id_categorie);
            $stmt->execute();
            $plat_id = $conn->lastInsertId();

            // Valider la transaction
            $conn->commit();
        } catch (PDOException $e) {
            // En cas d'erreur, annuler la transaction
            $conn->rollback();
            echo "Erreur : " . $e->getMessage();
        }
    ?>


<!-- Gestion des erreurs -->
<h2> Gestion des erreurs </h2>
<p> <strong> Voici comment on peut utiliser try/catch, qui sont des constructions de contrôle d'exception en PHP, pour gérer les erreurs PDO : <p> </strong>
<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=thedistrict", "admin", "Afpa1234");

    // Effectuer une opération de base de données

} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>







<!-- -->
<h2> </h2>
<p> <strong>
<p> <strong> <p> </strong>
<?php
?>

<!-- -->
<h2> </h2>
<p> <strong> <p> </strong>
<?php
?>
















</body>
</html>