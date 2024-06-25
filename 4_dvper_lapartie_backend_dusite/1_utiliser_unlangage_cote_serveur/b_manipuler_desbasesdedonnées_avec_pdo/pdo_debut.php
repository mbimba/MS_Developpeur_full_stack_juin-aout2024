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
<?php

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
$stmt = $pdo->prepare("SELECT * FROM plat");
$stmt->execute();
$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!-- -->
<?php
?>

<!-- -->
<?php
?>

















</body>
</html>