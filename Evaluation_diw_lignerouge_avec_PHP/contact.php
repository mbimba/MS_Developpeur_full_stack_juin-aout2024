<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT V3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Lignerouge.css" rel="stylesheet">


    <body style="background-color: #4A394a;">
   

    <!--     Header        SANS L'ONGLET DE RECHERCHE      -->
    <?php
require_once ("php/header.php");
  ?>



      <div class="parallax2">       <!--         DEBUT PARALLAX2    -->

      <div class="image-container position-relative"> <!--        ICI MON MA VIDEO DE FOND SANS L'ONGLET DE RECHERCHE    -->
        <div class="row g-0"> <!--Ici mon image de fond -->
      
          <!-- <div class="image-container">   Ici mon image de fond 
                                                                            <img class="img-fluid " src="Mesimages/imagedefond2a.avif" height="auto" width="100%" position="relative">
                                                                          </div>-->
      
          <video id="video" class="col-12" src="images_the_district/11659-231758756_small.mp4"
            style="width:100vmax; height: 20vmax;" playsinline autoplay loop muted></video>
        </div>
      
        
      
      </div>
    
<main >

    <div class="container mt-5 pt-5 containercontact" position="relative"> <!-- Mon formulaire contact    pt-5 pour appliquer une marge au dessus--> 
        <form class="row g-3 bordure" novalidate action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >      
            <div class="col-md-6">
                <label for="nom" class="form-label"><strong>Nom</strong></label>
                <input type="text" class="form-control inputcontact" id="lenom" name="nom" placeholder="PASCAL DUPONT" required >
                <span aria-label="required">Ce champ est obligatoire</span>
            </div>
            <div class="col-md-6">
                <label for="Prenom" class="form-label"><strong>Prénom</strong></label>
                <input type="text" class="form-control inputcontact" id="leprenom"  name="prenom" placeholder="Alain" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label"><strong>Email</strong></label>
                <input type="email" class="form-control inputcontact" id="email" name="email" placeholder="dave.loper@afpa.fr" required>
            </div>
            <div class="col-md-6">
                <label for="phonenumber" class="form-label "><strong>Téléphone</strong></label>
                <input type="tel" class="form-control inputcontact" id="tel" name="phone" placeholder="01 23 45 67 89">
                <span aria-label="required" >Ce champ est obligatoire</span>
            </div>
            <div class="col-md-16">
                <label for="votredemande" class="form-label"><strong>Votre demande</strong></label> 
                <textarea class="form-control inputcontact"  rows="3"  id="votredemande" name="demande" placeholder="Une question, un commentaire?" required></textarea>
                    </div>
                    <div class="col-md-12 d-flex flex-row-reverse">
                    <button type="submit" class="btn btn-primary" onclick="envoicontact()">Envoyer</button>
                </div>
                </form>
            </div>          <!-- Fin de mon formulaire contact -->

</main>






</div>            <!--         FIN PARALLAX2    -->




 <!--   ****************************     PHP TEST FORMULAIRE PAGE CONTACT ************************************ -->

<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$demande = $_POST['demande'];




$date= date ('Y-m-d-H-i-s');
//$filename = $date->format('Y-m-d-H-i-s') . '.txt';            // d= le jour, m= le mois  y= l'année H= heure    i=minutes   s=secondes
$filename = $date . '.txt';  

$currentDateTime = new DateTime('now');   // pour mon echo après l'envoi du formulaire: date envoi du formulaire
$currentDate = $currentDateTime->format('l, F j, Y H:i:s');          // pour mon echo après l'envoi du formulaire: date envoi du formulaire

$file= fopen($filename, 'w');
fwrite($file, "Nom: $nom\n");
fwrite($file, "Prénom: $prenom\n");
fwrite($file, "Email: $email\n");
fwrite($file, "Téléphone: $phone\n");
fwrite($file, "Votre demande: $demande\n");
fclose($file);


  echo "Les informations saisies dans ce formulaire ont été enregistrées avec succès: le $currentDate";
 

}

?>








<!--         ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS    -->
<?php
require_once ('php/footer.php');
?>
    
 









