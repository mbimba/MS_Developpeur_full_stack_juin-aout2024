<!-- CLASS: monperso.php-->

<h5>3 - Créez un deuxième fichier MonPerso.php permettant de vérifier le bon fonctionnement de votre classe, en vous inspirant du code ci-dessous : </h5>

<?php
require_once 'personnage.class.php';


$p = new Personnage();

$p->setNom("Lebowski");

$p->setPrenom("Jeff");

$p->setAge(50);

$p->setSexe("Masculin");


echo $p;
                // Affiche: Nom: Lebowski, Prénom: Jeff, Âge: 50, Sexe: Masculin

?>