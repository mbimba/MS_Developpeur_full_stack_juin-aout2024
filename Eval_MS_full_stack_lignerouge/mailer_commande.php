<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$mail = new PHPMailer(true);


// On va utiliser le SMTP
$mail->isSMTP();

// On configure l'adresse du serveur SMTP
$mail->Host       = 'localhost';    

// On désactive l'authentification SMTP
$mail->SMTPAuth   = false;    

// On configure le port SMTP (MailHog)
$mail->Port       = 1025;     

// Destinataire(s) - adresse et nom (facultatif)
$mail->addAddress("client1@example.com", "Mr Client1");
$mail->addAddress("client2@example.com"); 

// Contenu du mail

$mail->isHTML(true); 

$mail->Subject = 'Confirmation de votre commande';

$mail->Body = "<h2>Votre commande chez The District</h2> 

               <p>Monsieur, Madame $nomprenom,</p>

               <p>Nous avons bien reçu votre commande. Voici les détails:</p>

               <p>Plat commandé: {$plat['libelle']}</p>

               <p>Quantité: {$_POST['quantite']}</p>

               <p>Adresse de livraison: $adresse</p>

               <p>Merci pour votre commande. Nous vous contactons rapidement pour confirmer la livraison.</p>";