<?php
//************************************************** FONCTION POUR MA PAGE COMMANDE: MAILER ************************** */
// selon la situation et ta logique de code: 
// ici j'appelle la fonction envoi_mail()

// J'inclus la bibliothèque PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php'; // Composer autoloader

function envoi_mail($nomprenom, $mail, $adresse, $libelle, $quantite, $total) {

 
    // Configuration de l'email
    $mailer = new PHPMailer(true);
   $mailer->SMTPDebug = 0; // Débogage SMTP (0 pour production: avec cette valeur, les erreurs SMTP ne seront pas affichées.)
    // J'utilise le SMTP
    $mailer->isSMTP();

    // Serveur SMTP

    $mailer->Host = 'localhost'; 
    $mailer->SMTPAuth = false; 
    $mailer->Port = 1025; 

    // Expéditeur du mail - adresse mail + nom (facultatif)
    $mailer->setFrom('from@thedistrict.com', 'The District');

    // Récupérez les informations de la commande
    $mailer->addAddress($mail, $nomprenom); 

    //Adresse de reply (facultatif)
    $mailer->addReplyTo("reply@thedistrict.com", "Reply");

    // On précise si l'on veut envoyer un email sous format HTML 
    $mailer->isHTML(true);

    // Sujet du mail
    $mailer->Subject = 'Confirmation de votre commande';

    // Corps du message
    $mailer->Body = "<h2>Votre commande chez Le District</h2>

<p>Cher $nomprenom,</p>

<p>Nous avons bien reçu votre commande. Voici les détails :</p>

<p>Plat commandé : $libelle</p>

<p>Quantité : $quantite</p>

<p>Prix total : $total</p>

<p>Adresse de livraison : $adresse</p>

<p>Merci pour votre commande. Nous vous contactons rapidement pour confirmer la livraison.</p>";

    // On envoie le mail dans un block try/catch pour capturer les éventuelles erreurs
    try {
        //$mail = new PHPMailer(true);
        $mailer->send();
        echo "Mail envoyé avec succès. ";
        return true;
    } catch (Exception $e) {
        echo "L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $mailer->ErrorInfo;
        return false; // Email sending failed
    }
}
?>