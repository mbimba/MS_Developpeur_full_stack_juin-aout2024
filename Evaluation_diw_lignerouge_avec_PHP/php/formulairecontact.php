<?php
// On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
$myvar = $_REQUEST['nom'].",". $_REQUEST['prenom'].",". $_REQUEST['email'].",". $_REQUEST['phone'].",". $_REQUEST['demande'];          // "\n" pour un retour à la ligne pour chaque formulaire rempli
// Ouverture en écriture seule 
$fp = fopen("AAAAA-commande.txt", "a"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myvar); 
// Fermeture du fichier  
fclose($fp); 

?>










 <!-- *******************************  2ème test    ****************************************   -->

