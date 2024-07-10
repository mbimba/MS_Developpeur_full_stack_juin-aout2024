<!-- Ici laconnexion avec ma base de donnée "thedistrict" sur Dbeaver -->


<?php
session_start();
require_once('dao.php');

$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "thedistrict";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // configurer le mode d'erreur PDO pour générer des exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
?>


