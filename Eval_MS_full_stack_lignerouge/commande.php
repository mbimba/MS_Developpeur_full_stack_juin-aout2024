<?php
require_once ("php/header.php");
require_once("database.php");

/* manu */
// Récupération de l'ID du plat commandé  
$idPlat = $_GET['id'];

// Récupération des informations du plat commandé
$plat = getPlatById($conn, $idPlat);

// Affichage des informations du plat commandé

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

<!-- **************************** PHP TEST FORMULAIRE PAGE COMMANDE: Pour traiter mon formulaire ************************************ -->
<?php
require_once("mailer_commande.php");
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    // Traitement des données du formulaire
    $nomprenom = $_POST['nomprenom'];

    $mail = $_POST['mail'];
    // $mail = "triomphe@plouf.com";


    $phone2 = $_POST['phone2'];
    $adresse = $_POST['adresse'];
/* manu */

    //$quantite = $_POST['quantite']; // récupère la quantité sélectionnée
    $quantite = 1;

    $total = $plat['prix'] * $quantite; // calcule le prix total
/*
    $date = date('Y-m-d-H-i-s');
    $filename = $date. 'commande.txt';
    // pour mon echo après l'envoi du formulaire: date envoi du formulaire
    $currentDateTime = new DateTime('now'); // d= le jour, m= le mois y= l'année H= heure i=minutes s=secondes 
    $currentDate = $currentDateTime->format('l, F j, Y H:i:s'); // pour mon echo après l'envoi du formulaire: date envoi du formulaire

    $file = fopen($filename, 'w');
    fwrite($file, "Nom et prénom: $nomprenom\n");
    fwrite($file, "Email: $mail\n");
    fwrite($file, "Téléphone: $phone2\n");
    fwrite($file, "Votre demande: $adresse\n");
    fwrite($file, "Plat commandé: $plat[libelle]\n");
    fwrite($file, "Quantité: $quantite\n");
    fwrite($file, "Prix total: $total €\n");
    fclose($file);
*/
    // Call the envoi_mail function
    $email_sent = envoi_mail($nomprenom, $mail, $adresse, $plat['libelle'], $quantite, $total);
    print_r($email_sent);
    if ($email_sent) {
        echo "Les informations saisies dans ce formulaire ont été enregistrées avec succès: le $currentDate";
    } else {
        echo "Erreur lors de l'envoi de l'email";
    }
}
?>

<!-- ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS -->
<?php
require_once ('php/footer.php');
?>