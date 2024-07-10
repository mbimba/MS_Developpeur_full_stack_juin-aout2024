<?php
// On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
$myvar = "\n".$_REQUEST['nom'].",". $_REQUEST['prenom'].",". $_REQUEST['email'].",". $_REQUEST['phone'].",". $_REQUEST['demande'];          // "\n" pour un retour à la ligne pour chaque formulaire rempli
// Ouverture en écriture seule 
$fp = fopen("AAAA-MM-JJ-HH-MM-SS.txt", "a"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myvar); 
// Fermeture du fichier  
fclose($fp); 

?>





<?php
if ( $_SERVER['REQUEST_METHOD'] == "post") {


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$demande = $_POST['demande'];

//$date = new DateTime();
$date= date ('Y-m-d-H-i-s');
//$filename = $date->format('Y-m-d-H-i-s') . '.txt';            // d= le jour, m= le mois  y= l'année H= heure    i=minutes   s=secondes
$filename = $date . '.txt';  



$file= fopen($filename, 'w');
fwrite($file, "Nom: $nom\n");
fwrite($file, "Prénom: $prenom\n");
fwrite($file, "Email: $email\n");
fwrite($file, "Téléphone: $phone\n");
fwrite($file, "Votre demande: $demande\n");
fclose($file);



  echo "Les informations saisies dans ce formulaire ont été enregistrées avec succès!";
      

}


?>


 <!-- *******************************  2ème test    ****************************************   -->

<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$demande = $_POST['demande'];

//$date = new DateTime();
$date= date ('Y-m-d-H-i-s');
//$filename = $date->format('Y-m-d-H-i-s') . '.txt';            // d= le jour, m= le mois  y= l'année H= heure    i=minutes   s=secondes
$filename = $date . '.txt';  



$file= fopen($filename, 'w');
fwrite($file, "Nom: $nom\n");
fwrite($file, "Prénom: $prenom\n");
fwrite($file, "Email: $email\n");
fwrite($file, "Téléphone: $phone\n");
fwrite($file, "Votre demande: $demande\n");
fclose($file);



  echo "Les informations saisies dans ce formulaire ont été enregistrées avec succès!";
 

}

?>
