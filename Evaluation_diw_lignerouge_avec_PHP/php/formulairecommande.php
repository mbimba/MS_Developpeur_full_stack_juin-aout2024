<?php
// On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
$myvar = "\n".$_REQUEST['nomprenom'].",". $_REQUEST['mail'].",". $_REQUEST['phone2'].",". $_REQUEST['adresse'];          // "\n" pour un retour à la ligne pour chaque formulaire rempli
// Ouverture en écriture seule 
$fp = fopen("AAAAA-commande.txt", "a"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myvar); 
// Fermeture du fichier  
fclose($fp); 

?>




