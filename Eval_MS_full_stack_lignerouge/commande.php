<!-- ICI MA PAGE COMMANDE.PHP-->
<?php

require_once ("php/header.php");

require_once("database.php");


// Récupération de l'ID du plat commandé

$idPlat = $_GET['id'];


// Récupération des informations du plat commandé

$plat = getPlatById($conn, $idPlat);
// Affichage des informations du plat commandé




//**************************************************   FONCTION POUR MA PAGE COMMANDE: MAILER  **************************    */
// selon la situation et ta logique de code: 
// ici j'appelle la fonction envoi_mail()

// J'inclus la bibliothèque PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php'; // Composer autoloader

// Configuration de l'email
$mail = new PHPMailer(true);

// On va utiliser le SMTP
$mail->isSMTP();

// Serveur SMTP

$mail->SMTPDebug = 0; // Débogage SMTP (0 pour production: avec cette valeur, les erreurs SMTP ne seront pas affichées.)    $mail->SMTPDebugest une propriété de l'objet PHPMailer qui permis de définir le niveau de débogage pour les erreurs SMTP (Simple Mail Transfer Protocol).



// On configure l'adresse du serveur SMTP
$mail->Host       = 'localhost';    

// On désactive l'authentification SMTP

$mail->SMTPAuth   = false; 

// On configure le port SMTP (MailHog)
$mail->Port       = 1025;  

// Expéditeur du mail - adresse mail + nom (facultatif)

$mail->setFrom('from@thedistrict.com', 'The District');

// Récupérez les informations de la commande

$nom_client = $_POST['nomprenom'];

$email_client = $_POST['mail'];

$adresse_client = $_POST['adresse'];

// Destinataire(s) - adresse et nom (facultatif)

$mail->addAddress($email_client, $nom_client);

//Adresse de reply (facultatif)

$mail->addReplyTo("reply@thedistrict.com", "Reply");

// On précise si l'on veut envoyer un email sous format HTML 

$mail->isHTML(true);

// Sujet du mail
$mail->Subject = 'Confirmation de votre commande';

// Corps du message

$mail->Body = "<h2>Votre commande chez Le District</h2>

              <p>Cher $nom_client,</p>

              <p>Nous avons bien reçu votre commande. Voici les détails :</p>

              <p>Plat commandé : $libelle</p>

              <p>Quantité : $quantite</p>

              <p>Prix total : $total</p>

              <p>Adresse de livraison : $adresse_client</p>

              <p>Merci pour votre commande. Nous vous contactons rapidement pour confirmer la livraison.</p>";


// On envoie le mail dans un block try/catch pour capturer les éventuelles erreurs

if ($mail){

    try {

        $mail->send();

        echo 'Email envoyé avec succès';

        } catch (Exception $e) {

        echo "L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;

        }

    }


    ?>








<!-- ************************************** MON BODY ***************************************************** -->

<main>

  <br>

  <h1 class="text-center">Ma commande</h1><br>

  <div class="container row d-flex justify-content-evenly mx-auto p-2 " style="background-color: #4A394a;">
    <!-- Bloc de cards -->

    <div class="card mb-3 bg-primary col-6" style="max-width: 540px;">

      <div class="row g-0">

        <div class="col-md-4">

          <img src="Mesimages/<?php echo $plat['image'];?>" class="img-fluid rounded-pill" alt="...">

        </div>

        <div class="col-md-6">

          <div class="card-body">

            <h5 class="card-title"><?php echo $plat['libelle'];?></h5>

            <p class="card-text"><?php echo $plat['description'];?></p>

            <!-- Dropdown pour choisir la quantité -->

            <div class="dropdown">

              <button type="button" class="btn btn-primary text-body btnquantite">Quantité</button>

              <select class="custom-select text-body btnselectcommande" id="validationCustom04" required>

                <option value="1" selected>1</option>

                <option value="2">2</option>

                <option value="3">3</option>

                <option value="4">4</option>

                <option value="5">5</option>

                <option value="6">6</option>

              </select>

            </div>

            <p class="card-text">Prix : <?php echo $plat['prix'];?> €</p>

          </div>

        </div>

      </div>

    </div>

  </div>


  <!-- Formulaire de commande -->

  <div class="container pt-0"> <!-- pt-o pour supprimer l'espace entre le formulaire et le bloc bleu au dessus -->

    <form class="row g-3 bordure" novalidate action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

      <!-- Champs du formulaire -->

      <div class="col-md-12">

        <label for="nomprenom" class="form-label"><strong>Nom et prénom</strong></label>

        <input type="text" class="form-control" id="nometprenom" name="nomprenom">

        <span aria-label="required">Ce champ est obligatoire</span>

      </div>

      <div class="col-md-6">

        <label for="email" class="form-label"><strong>Email</strong></label>

        <input type="email" class="form-control inputcontact" id="votreemail" name="mail" placeholder="dave.loper@afpa.fr" required>

        <span aria-label="required">Ce champ est obligatoire</span>

      </div>

      <div class="col-md-6">

        <label for="phonenumber" class="form-label"><strong>Téléphone</strong></label>

        <input type="tel" class="form-control inputcontact" id="phone" name="phone2" placeholder="01 23 45 67 89">

        <span aria-label="required">Ce champ est obligatoire</span>

      </div>

      <div class="col-md-12">

        <label for="votreadresse" class="form-label"><strong>Votre adresse</strong></label>

        <textarea class="form-control" id="votreadresse" rows="3" name="adresse" placeholder="Une adresse de livraison" required></textarea>

        <span aria-label="required">Ce champ est obligatoire</span>

      </div>

      <div class="col-md-12 d-flex flex-row-reverse">

        <button type="submit" class="btn btn-primary" onclick="envoicommande()">Envoyer</button>

      </div>

    </form>

  </div>

</main>



 <!--   ****************************     PHP TEST FORMULAIRE PAGE COMMANDE: Pour traiter mon formulaire ************************************ -->
 <?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
  // Traitement des données du formulaire
  $nomprenom = $_POST['nomprenom'];
  $mail = $_POST['mail'];
  $phone2 = $_POST['phone2'];
  $adresse = $_POST['adresse'];

  $date = date('Y-m-d-H-i-s');
  $filename = $date . ' commande.txt';
                                               // pour mon echo après l'envoi du formulaire: date envoi du formulaire
  $currentDateTime = new DateTime('now');    // d= le jour, m= le mois  y= l'année H= heure    i=minutes   s=secondes 
  $currentDate = $currentDateTime->format('l, F j, Y H:i:s'); // pour mon echo après l'envoi du formulaire: date envoi du formulaire

  $file = fopen($filename, 'w');
  fwrite($file, "Nom et prénom: $nomprenom\n");
  fwrite($file, "Email: $mail\n");
  fwrite($file, "Téléphone: $phone2\n");
  fwrite($file, "Votre demande: $adresse\n");
  fclose($file);

  echo "Les informations saisies dans ce formulaire ont été enregistrées avec succès: le $currentDate";
}
?>










<!--         ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS    -->
<?php
require_once ('php/footer.php');
?>
    

















