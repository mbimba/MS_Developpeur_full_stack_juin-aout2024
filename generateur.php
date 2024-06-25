<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP: Générateur</title>
</head>
<body>
    <h4> MON GENERATEUR </h4>




<?php
function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Notez que $i est préservé entre chaque production de valeur.
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "$value\n";
}
?>


<?php
// Voir l'exemple fourni sur la page de la fonction password_hash()
// pour savoir d'où cela provient.
$hash = '$2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a';

if (password_verify('rasmuslerdorf', $hash)) {
    echo 'Le mot de passe est valide !';
} else {
    echo 'Le mot de passe est invalide.';
}
?>

























</body>
</html>